<form action="" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('a_name') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('a_name') ? 'required' : '' }}  data-add-content=".title_seo"
                               data-add-slug=".slug"
                               maxlength="120" name="a_name" placeholder="Name ..." value="{{ old('a_name',$article->a_name ?? '') }}">
                        @if ($errors->first('a_name'))
                            <span class="text-danger">{{ $errors->first('a_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label  class="required">Slug </label>
                        <input type="text" name="a_slug" class="form-control slug" placeholder="Slug ..." value="{{ old('a_slug',$article->a_slug ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label  class="required">Menu </label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="a_menu_id" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="" value="">__Chọn menu__</option>
                                @foreach($menus as $item)
                                    <option title="{{ $item->mn_name }}" value="{{ $item->id }} " {{ (old('a_parent_id',$article->a_menu_id ?? 0)) == $item->id ? "selected='selected'" : "" }}>
                                        <?php $str = '' ;for($i = 0; $i < $item->level; $i ++){ echo $str; $str .= '--- '; }?>
                                        {{ $item->mn_name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->first('a_menu_id'))
                                <span class="text-danger">{{ $errors->first('a_menu_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="required">Tags </label>
                        <select name="tags[]" class="form-control js-select2-tags" tabindex="-1" multiple="multiple">
                            <option title="" value="">__Từ khoá__</option>
                            @foreach($tags as $item)
                                <option title="{{ $item->t_name }}" {{ in_array($item->id, $tagsOld) ? "selected='selected'" : ""}} value="{{ $item->id }} ">
                                    {{ $item->t_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group {{ $errors->has('a_description') ? 'was-validated' : '' }} ">
                        <label  class="required">Description </label>
                        <small class="charcounter" >(300 character(s) remain)</small>
                        <textarea name="a_description" data-add-content=".description_seo" {{ $errors->has('a_description') ? 'required' : '' }}
                        data-max="300" class="form-control keypress-count"  cols="10" rows="3">{{ old('a_description', $article->a_description ?? '') }}</textarea>
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
                        <textarea name="a_content" class="form-control" cols="10" rows="3">{{ old('a_content', $article->a_content ?? "") }}</textarea>
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
                        <span class="page-title-seo title_seo">{{ $article->a_title_seo ?? 'Title SEO' }} </span>
                        <div class="page-url-seo ws-nm">
                            <p>http://cms-laravel.net/bai-viet/<span class="slug">{{ ($article->a_slug ?? '') }}</span></p>
                        </div>
                        <div class="ws-nm">
                            @if (isset($article))
                            <span style="color: #70757a;">{{ $article->created_at->format('d-m-Y') }} - </span>
                            @else
                                <span style="color: #70757a;">{{ date('d-m-Y') }} - </span>
                            @endif
                            <span class="page-description-seo description_seo">{{ $article->a_description_seo ?? "" }}</span>
                        </div>
                    </div>
                    <div class="content-seo hide">
                        <div class="form-group">
                            <label  class="required">Title SEO</label>
                            <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                            <input type="text" class="form-control keypress-count title_seo " value="{{ old('a_title_seo', $article->a_title_seo ?? '') }}" name="a_title_seo" placeholder="Name ...">
                        </div>
                        <div class="form-group">
                            <label  class="required" data-max="300">Description SEO</label>
                            <small class="charcounter">(300 character(s) remain)</small>
                            <textarea name="a_description_seo" class="form-control keypress-count description_seo" cols="10" rows="3">
                                {{ old('a_description_seo', $article->a_description_seo ?? "") }}</textarea>
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
                            <select name="a_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="3" value="3" {{ ($menu->a_status ?? '' ) == 3 ? "selected='selected'" : "" }}>Published</option>
                                <option value="2" {{ ($menu->a_status ?? '' ) == 2 ? "selected='selected'" : "" }}>Draft</option>
                                <option value="1" {{ ($menu->a_status ?? '' ) == 1 ? "selected='selected'" : "" }}>Pending</option>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
