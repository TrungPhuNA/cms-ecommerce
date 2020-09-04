<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('c_name') ? 'was-validated' : '' }} ">
                        <label class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count"
                               {{ $errors->has('c_name') ? 'required' : '' }}  data-add-content=".title_seo"
                               data-add-slug=".slug"
                               maxlength="120" name="c_name" placeholder="Name ..."
                               value="{{ old('c_name',$category->c_name ?? '') }}">
                        @if ($errors->first('c_name'))
                            <span class="text-danger">{{ $errors->first('c_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="required">Slug </label>
                        <input type="text" name="c_slug" class="form-control slug" placeholder="Slug ..."
                               value="{{ old('c_slug',$category->c_slug ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label class="required">Parent </label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="c_parent_id" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="ROOT" value="0">__ROOT__</option>
                                @foreach($categories as $item)
                                    <option title="{{ $item->c_name }}"
                                            value="{{ $item->id }} " {{ (old('c_parent_id',$category->c_parent_id ?? 0)) == $item->id ? "selected='selected'" : "" }}>
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
                    <div class="form-group {{ $errors->has('c_description') ? 'was-validated' : '' }} ">
                        <label class="required">Description </label>
                        <small class="charcounter">(300 character(s) remain)</small>
                        <textarea name="c_description" data-add-content=".description_seo"
                                  {{ $errors->has('c_description') ? 'required' : '' }}
                                  data-max="300" class="form-control keypress-count" cols="10"
                                  rows="3">{{ old('c_description', $category->c_description ?? '') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label  class="required">Sort </label>
                        <input type="number" name="c_sort" class="form-control" placeholder="1" value="{{ old('c_sort',$category->c_sort ?? 1) }}">
                        <p class="text-warning"><i>Số thứ tự được sắp xếp từ nhỏ đến lớn</i></p>
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
                        <span class="page-title-seo title_seo">{{ $category->c_title_seo ?? 'Title SEO' }} </span>
                        <div class="page-url-seo ws-nm">
                            <p>http://cms-laravel.net/bai-viet/<span class="slug">{{ ($category->c_slug ?? '') }}</span>
                            </p>
                        </div>
                        <div class="ws-nm">
                            @if (isset($category))
                                <span style="color: #70757a;">{{ $category->created_at->format('d-m-Y') }} - </span>
                            @else
                                <span style="color: #70757a;">{{ date('d-m-Y') }} - </span>
                            @endif
                            <span
                                class="page-description-seo description_seo">{{ $category->c_description_seo ?? "" }}</span>
                        </div>
                    </div>
                    <div class="content-seo hide">
                        <div class="form-group">
                            <label class="required">Title SEO</label>
                            <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                            <input type="text" class="form-control keypress-count title_seo "
                                   value="{{ old('c_title_seo', $category->c_title_seo ?? '') }}" name="c_title_seo"
                                   placeholder="Name ...">
                        </div>
                        <div class="form-group">
                            <label class="required" data-max="300">Description SEO</label>
                            <small class="charcounter">(300 character(s) remain)</small>
                            <textarea name="c_description_seo" class="form-control keypress-count description_seo"
                                      cols="10"
                                      rows="3">{{ old('c_description_seo', $category->c_description_seo ?? "") }}</textarea>
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
                        <label class="required">Status</label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="c_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="3"
                                        value="3" {{ ($category->c_status ?? '' ) == 3 ? "selected='selected'" : "" }}>
                                    Published
                                </option>
                                <option value="2" {{ ($category->c_status ?? '' ) == 2 ? "selected='selected'" : "" }}>
                                    Draft
                                </option>
                                <option value="1" {{ ($category->c_status ?? '' ) == 1 ? "selected='selected'" : "" }}>
                                    Pending
                                </option>
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
                            <input type="hidden" value="{{ old('c_avatar',$category->c_avatar ?? '') }}" id="avatar_uploads" name="c_avatar" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
