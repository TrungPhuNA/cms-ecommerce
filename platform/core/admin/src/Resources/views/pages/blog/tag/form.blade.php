<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('t_name') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('t_name') ? 'required' : '' }}  data-add-content=".title_seo"
                               data-add-slug=".slug"
                               maxlength="120" name="t_name" placeholder="Name ..." value="{{ old('t_name',$tag->t_name ?? '') }}">
                        @if ($errors->first('t_name'))
                            <span class="text-danger">{{ $errors->first('t_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label  class="required">Slug </label>
                        <input type="text" name="t_slug" class="form-control slug" placeholder="Slug ..." value="{{ old('t_slug',$tag->t_slug ?? '') }}">
                    </div>


                    <div class="form-group {{ $errors->has('t_description') ? 'was-validated' : '' }} ">
                        <label  class="required">Description </label>
                        <small class="charcounter" >(300 character(s) remain)</small>
                        <textarea name="t_description" data-add-content=".description_seo" {{ $errors->has('t_description') ? 'required' : '' }}
                        data-max="300" class="form-control keypress-count"  cols="10" rows="3">{{ old('t_description', $tag->t_description ?? '') }}</textarea>
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
                        <span class="page-title-seo title_seo">{{ $tag->t_title_seo ?? 'Title SEO' }} </span>
                        <div class="page-url-seo ws-nm">
                            <p>http://cms-laravel.net/bai-viet/<span class="slug">{{ ($tag->t_slug ?? '') }}</span></p>
                        </div>
                        <div class="ws-nm">
                            @if (isset($tag))
                            <span style="color: #70757a;">{{ $tag->created_at->format('d-m-Y') }} - </span>
                            @else
                                <span style="color: #70757a;">{{ date('d-m-Y') }} - </span>
                            @endif
                            <span class="page-description-seo description_seo">{{ $tag->t_description_seo ?? "" }}</span>
                        </div>
                    </div>
                    <div class="content-seo hide">
                        <div class="form-group">
                            <label  class="required">Title SEO</label>
                            <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                            <input type="text" class="form-control keypress-count title_seo " value="{{ old('t_title_seo', $tag->t_title_seo ?? '') }}" name="t_title_seo" placeholder="Name ...">
                        </div>
                        <div class="form-group">
                            <label  class="required" data-max="300">Description SEO</label>
                            <small class="charcounter">(300 character(s) remain)</small>
                            <textarea name="t_description_seo" class="form-control keypress-count description_seo" cols="10" rows="3">
                                {{ old('t_description_seo', $tag->t_description_seo ?? "") }}</textarea>
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
                            <select name="t_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="3" value="3" {{ ($tag->t_status ?? '' ) == 3 ? "selected='selected'" : "" }}>Published</option>
                                <option value="2" {{ ($tag->t_status ?? '' ) == 2 ? "selected='selected'" : "" }}>Draft</option>
                                <option value="1" {{ ($tag->t_status ?? '' ) == 1 ? "selected='selected'" : "" }}>Pending</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
