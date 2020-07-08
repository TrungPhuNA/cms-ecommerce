<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('atb_name') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('atb_name') ? 'required' : '' }}  data-add-content=".title_seo"
                               data-add-slug=".slug"
                               maxlength="120" name="atb_name" placeholder="Name ..." value="{{ old('atb_name',$attribute->atb_name ?? '') }}">
                        @if ($errors->first('atb_name'))
                            <span class="text-danger">{{ $errors->first('atb_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label  class="required">Slug </label>
                        <input type="text" name="atb_slug" class="form-control slug" placeholder="Slug ..." value="{{ old('atb_slug',$attribute->atb_slug ?? '') }}">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        SEO
                        <a href="" class="edit-seo js-edit-seo">Edit SEO</a>
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
                            <select name="atb_status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="3" value="3" {{ ($attribute->atb_status ?? '' ) == 3 ? "selected='selected'" : "" }}>Published</option>
                                <option value="2" {{ ($attribute->atb_status ?? '' ) == 2 ? "selected='selected'" : "" }}>Draft</option>
                                <option value="1" {{ ($attribute->atb_status ?? '' ) == 1 ? "selected='selected'" : "" }}>Pending</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
