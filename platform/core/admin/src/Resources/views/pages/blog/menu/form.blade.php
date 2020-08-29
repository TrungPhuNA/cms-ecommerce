<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('mn_name') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('mn_name') ? 'required' : '' }}  data-add-content=".title_seo"
                               data-add-slug=".slug"
                               maxlength="120" name="mn_name" placeholder="Name ..." value="{{ old('mn_name',$menu->mn_name ?? '') }}">
                        @if ($errors->first('mn_name'))
                            <span class="text-danger">{{ $errors->first('mn_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label  class="required">Slug </label>
                        <input type="text" name="mn_slug" class="form-control slug" placeholder="Slug ..." value="{{ old('mn_slug',$menu->mn_slug ?? '') }}">
                    </div>
                    <div class="form-group">
                        <label  class="required">Sort </label>
                        <input type="number" name="mn_sort" class="form-control" placeholder="1" value="{{ old('mn_sort',$menu->mn_sort ?? 1) }}">
                        <p class="text-warning"><i>Số thứ tự được sắp xếp từ nhỏ đến lớn</i></p>
                    </div>

                    <div class="form-group">
                        <label  class="required">Parent </label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="mn_parent_id" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="ROOT" value="0">__ROOT__</option>
                                @foreach($menus as $item)
                                    <option title="{{ $item->mn_name }}" value="{{ $item->id }} " {{ (old('mn_parent_id',$menu->mn_parent_id ?? 0)) == $item->id ? "selected='selected'" : "" }}>
                                        <?php $str = '' ;for($i = 0; $i < $item->level; $i ++){ echo $str; $str .= '--- '; }?>
                                        {{ $item->mn_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('mn_description') ? 'was-validated' : '' }} ">
                        <label  class="required">Description </label>
                        <small class="charcounter" >(300 character(s) remain)</small>
                        <textarea name="mn_description" data-add-content=".description_seo" {{ $errors->has('mn_description') ? 'required' : '' }}
                        data-max="300" class="form-control keypress-count"  cols="10" rows="3">{{ old('mn_description', $menu->mn_description ?? '') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        SEO
                        <a href="" class="edit-seo js-edit-seo">Edit SEO</a>
                    </div>
                    <div class="mg-b-5 existed-seo-meta mg-t-20">
                        <span class="page-title-seo title_seo">{{ $menu->mn_title_seo ?? 'Title SEO' }} </span>
                        <div class="page-url-seo ws-nm">
                            <p>http://cms-laravel.net/bai-viet/<span class="slug">{{ ($menu->mn_slug ?? '') }}</span></p>
                        </div>
                        <div class="ws-nm">
                            @if (isset($menu))
                            <span style="color: #70757a;">{{ $menu->created_at->format('d-m-Y') }} - </span>
                            @else
                                <span style="color: #70757a;">{{ date('d-m-Y') }} - </span>
                            @endif
                            <span class="page-description-seo description_seo">{{ $menu->mn_description_seo ?? "" }}</span>
                        </div>
                    </div>
                    <div class="content-seo hide">
                        <div class="form-group">
                            <label  class="required">Title SEO</label>
                            <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                            <input type="text" class="form-control keypress-count title_seo " value="{{ old('mn_title_seo', $menu->mn_title_seo ?? '') }}" name="mn_title_seo" placeholder="Name ...">
                        </div>
                        <div class="form-group">
                            <label  class="required" data-max="300">Description SEO</label>
                            <small class="charcounter">(300 character(s) remain)</small>
                            <textarea name="mn_description_seo" class="form-control keypress-count description_seo" cols="10" rows="3">
                                {{ old('mn_description_seo', $menu->mn_description_seo ?? "") }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
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
                            <select name="mn_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="3" value="3" {{ ($menu->mn_status ?? '' ) == 3 ? "selected='selected'" : "" }}>Published</option>
                                <option value="2" {{ ($menu->mn_status ?? '' ) == 2 ? "selected='selected'" : "" }}>Draft</option>
                                <option value="1" {{ ($menu->mn_status ?? '' ) == 1 ? "selected='selected'" : "" }}>Pending</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label  class="required">Bài viết nổi bật</label>
                        <select name="articles[]" class="form-control js-select2-articles" tabindex="-1" multiple="multiple">
                            <option title="" value="">__Bài viết__</option>
                            @foreach($articles as $item)
                                <option title="{{ $item->a_name }}" {{ in_array($item->id, $articlesOld ?? []) ? "selected='selected'" : ""}} value="{{ $item->id }} ">
                                    {{ $item->a_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
