<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('ps_link') ? 'was-validated' : '' }} ">
                        <label  class="required">Link </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('ps_link') ? 'required' : '' }}
                                name="ps_link" placeholder="Link ..." value="{{ old('ps_link',$page->ps_link ?? '') }}">
                        <p class="mr-3"><b>Ví dụ:</b> <i>/cham-soc-khach-hang.html</i> <span class="text-danger"> (Không chứa domain website)</span></p>
                        @if ($errors->first('ps_link'))
                            <span class="text-danger">{{ $errors->first('ps_link') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('ps_title') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('ps_title') ? 'required' : '' }}  data-add-content=".title_seo"
                               maxlength="120" name="ps_title" placeholder="Name ..." value="{{ old('ps_title',$page->ps_title ?? '') }}">
                        @if ($errors->first('ps_title'))
                            <span class="text-danger">{{ $errors->first('ps_title') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('ps_description') ? 'was-validated' : '' }} ">
                        <label  class="required">Description </label>
                        <small class="charcounter" >(300 character(s) remain)</small>
                        <textarea name="ps_description" data-add-content=".description_seo" {{ $errors->has('ps_description') ? 'required' : '' }}
                        data-max="300" class="form-control keypress-count"  cols="10" rows="3">{{ old('ps_description', $page->ps_description ?? '') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Content
                    </div>

                    <div class="form-group {{ $errors->has('ps_content') ? 'was-validated' : '' }}">
                        <label  class="required" >Content</label>
                        <textarea name="ps_content" class="form-control" cols="10" rows="3">{{ old('ps_content', $page->ps_content ?? "") }}</textarea>
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
                        <span class="page-title-seo title_seo">{{ $page->ps_title_seo ?? 'Title SEO' }} </span>
                        <div class="page-url-seo ws-nm">
                            <p>http://cms-laravel.net/bai-viet/<span class="slug">{{ ($page->a_slug ?? '') }}</span></p>
                        </div>
                        <div class="ws-nm">
                            @if (isset($page))
                            <span style="color: #70757a;">{{ $page->created_at->format('d-m-Y') }} - </span>
                            @else
                                <span style="color: #70757a;">{{ date('d-m-Y') }} - </span>
                            @endif
                            <span class="page-description-seo description_seo">{{ $page->ps_description_seo ?? "" }}</span>
                        </div>
                    </div>
                    <div class="content-seo hide">
                        <div class="form-group">
                            <label  class="required">Title SEO</label>
                            <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                            <input type="text" class="form-control keypress-count title_seo " value="{{ old('ps_title_seo', $page->ps_title_seo ?? '') }}" name="ps_title_seo" placeholder="Name ...">
                        </div>
                        <div class="form-group">
                            <label  class="required" data-max="300">Description SEO</label>
                            <small class="charcounter">(300 character(s) remain)</small>
                            <textarea name="ps_description_seo" class="form-control keypress-count description_seo" cols="10" rows="3">
                                {{ old('ps_description_seo', $page->ps_description_seo ?? "") }}</textarea>
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
                        <label  class="required">Seo</label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="ps_seo" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option value="1" {{ ($page->ps_seo ?? 1 ) == 1 ? "selected='selected'" : "" }}>Index</option>
                                <option value="0" {{ ($page->ps_seo ?? '' ) == 0 ? "selected='selected'" : "" }}>No Index</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
