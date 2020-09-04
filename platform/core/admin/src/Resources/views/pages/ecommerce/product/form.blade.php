<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('a_name') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('pro_name') ? 'required' : '' }}  data-add-content=".title_seo"
                               data-add-slug=".slug"
                               maxlength="120" name="pro_name" placeholder="Name ..." value="{{ old('pro_name',$product->pro_name ?? '') }}">
                        @if ($errors->first('pro_name'))
                            <span class="text-danger">{{ $errors->first('pro_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label  class="required">Slug </label>
                        <input type="text" name="pro_slug" class="form-control slug" placeholder="Slug ..." value="{{ old('pro_slug',$product->pro_slug ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label class="required">Parent </label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="pro_category_id" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="ROOT" value="">__Chọn danh mục__</option>
                                @foreach($categories ?? [] as $item)
                                    <option title="{{ $item->c_name }}"
                                            value="{{ $item->id }} " {{ (old('pro_category_id',$product->pro_category_id ?? 0)) == $item->id ? "selected='selected'" : "" }}>
                                        <?php $str = '';for ($i = 0; $i < $item->level; $i++) {
                                            echo $str;
                                            $str .= '--- ';
                                        }?>
                                        {{ $item->c_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('pro_description') ? 'was-validated' : '' }} ">
                        <label  class="required">Description </label>
                        <small class="charcounter" >(300 character(s) remain)</small>
                        <textarea name="pro_description" data-add-content=".description_seo" {{ $errors->has('pro_description') ? 'required' : '' }}
                        data-max="300" class="form-control keypress-count"  cols="10" rows="3">{{ old('pro_description', $product->pro_description ?? '') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Content
                    </div>

                    <div class="form-group">
                        <label  class="required" data-max="300">Content</label>
                        <textarea name="pro_content" class="form-control" cols="10" rows="3">{{ old('pro_content', $product->pro_content ?? "") }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body" id="listAttributeValue">
                    <div class="main-content-label mg-b-5" style="display: flex;justify-content: space-between;align-items: center;margin-bottom: 10px;">
                        {{  !empty($productAttributeValue) ? "Sản phẩm có nhiều phiên bản" : "Thuộc tính" }} <a href="" class="js-add-attribute-value">Thêm mới</a>
                    </div>
                    @if (!empty($productAttributeValue))
{{--                        @foreach($attributeValue as $atbKey => $item)--}}
{{--                            <div class="row clone">--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <select name="pav_attribute_id[]" class="form-control js-changeAttribute">--}}
{{--                                        @foreach($attributes as $attribute)--}}
{{--                                            <option value="{{ $attribute->id }}" {{ $attribute->id == $atbKey ? "selected='selected'" : "" }}--}}
{{--                                            data-json="{{ json_encode($attribute->attributeValues ?? []) }}">{{ $attribute->atb_name }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3">--}}
{{--                                    <select name="pav_value_id[]" class="form-control js-attribute-value" >--}}

{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-3"><a href="" class="btn btn-xs btn-danger" style="padding: 7px 20px"><i class="la la-trash"></i></a></div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                    @else
                        <div class="row hide clone">
                            <div class="col-md-3">
                                <select name="pav_attribute_id[]" class="form-control js-changeAttribute">
                                    @foreach($attributes as $attribute)
                                        <option value="{{ $attribute->id }}" data-json="{{ json_encode($attribute->attributeValues ?? []) }}">{{ $attribute->atb_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="pav_value_id[]" class="form-control js-attribute-value" >

                                </select>
                            </div>
                            <div class="col-md-3"><a href="" class="btn btn-xs btn-danger" style="padding: 7px 20px"><i class="la la-trash"></i></a></div>
                        </div>
                    @endif
                    <a href="" class="hide js-add-attribute-value-btn">Thêm mới</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        SEO
                        <a href="" class="edit-seo js-edit-seo">Edit SEO</a>
                    </div>
                    <div class="mg-b-5 existed-seo-meta mg-t-20">
                        <span class="page-title-seo title_seo">{{ $product->pro_title_seo ?? 'Title SEO' }} </span>
                        <div class="page-url-seo ws-nm">
                            <p>http://cms-laravel.net/bai-viet/<span class="slug">{{ ($product->pro_slug ?? '') }}</span></p>
                        </div>
                        <div class="ws-nm">
                            @if (isset($product))
                            <span style="color: #70757a;">{{ $product->created_at->format('d-m-Y') }} - </span>
                            @else
                                <span style="color: #70757a;">{{ date('d-m-Y') }} - </span>
                            @endif
                            <span class="page-description-seo description_seo">{{ $product->pro_description_seo ?? "" }}</span>
                        </div>
                    </div>
                    <div class="content-seo hide">
                        <div class="form-group">
                            <label  class="required">Title SEO</label>
                            <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                            <input type="text" class="form-control keypress-count title_seo " value="{{ old('pro_title_seo', $product->pro_title_seo ?? '') }}" name="pro_title_seo" placeholder="Name ...">
                        </div>
                        <div class="form-group">
                            <label  class="required" data-max="300">Description SEO</label>
                            <small class="charcounter">(300 character(s) remain)</small>
                            <textarea name="pro_description_seo" class="form-control keypress-count description_seo" cols="10" rows="3">{{ old('pro_description_seo', $product->pro_description_seo ?? "") }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card js-position-static">
                <div class="card-body">
                    <div>
                        <h6 class="card-title mb-1">Publish</h6>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info"><i class="la la-save"></i> Save</button>
                        <button class="btn btn-success"><i class="la la-check-circle"></i> Save & Edit</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label  class="required">Status</label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="pro_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="3" value="3" {{ ($product->pro_status ?? '' ) == 3 ? "selected='selected'" : "" }}>Published</option>
                                <option value="2" {{ ($product->pro_status ?? '' ) == 2 ? "selected='selected'" : "" }}>Draft</option>
                                <option value="1" {{ ($product->pro_status ?? '' ) == 1 ? "selected='selected'" : "" }}>Pending</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label  class="required">Avatar</label>
                        <div class="form-group">
                            <input type="file" class="my-pond" name="avatar">
                            <input type="hidden" value="{{ old('pro_avatar',$product->pro_avatar ?? '') }}" id="avatar_uploads" name="pro_avatar" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
