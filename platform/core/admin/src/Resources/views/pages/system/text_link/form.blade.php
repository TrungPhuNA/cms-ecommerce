<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('tl_name') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('tl_name') ? 'required' : '' }}
                                name="tl_name" placeholder="Tên ..." value="{{ old('tl_name',$textLink->tl_name ?? '') }}">

                        @if ($errors->first('tl_name'))
                            <span class="text-danger">{{ $errors->first('tl_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('tl_title') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('tl_title') ? 'required' : '' }}  data-add-content=".title_seo"
                               maxlength="120" name="tl_title" placeholder="Title ..." value="{{ old('tl_title',$textLink->tl_title ?? '') }}">
                        @if ($errors->first('tl_title'))
                            <span class="text-danger">{{ $errors->first('tl_title') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('tl_link') ? 'was-validated' : '' }} ">
                        <label  class="required">Link redirect </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('tl_link') ? 'required' : '' }}  data-add-content=".title_seo"
                               maxlength="120" name="tl_link" placeholder="Link ..." value="{{ old('tl_link',$textLink->tl_link ?? '') }}">
                        <p class="mr-3"><b>Ví dụ:</b> <i>http://cms-laravel.info/cham-soc-khach-hang.html</i> <span class="text-danger"> (Chứa domain website)</span></p>
                        @if ($errors->first('tl_link'))
                            <span class="text-danger">{{ $errors->first('tl_link') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('tl_sort') ? 'was-validated' : '' }} ">
                        <label  class="required">Sort</label>
                        <small class="charcounter" data-max="120"></small>
                        <input type="number" class="form-control keypress-count" {{ $errors->has('tl_sort') ? 'required' : '' }}  data-add-content=".title_seo"
                               maxlength="120" name="tl_sort" placeholder="0" value="{{ old('tl_sort',$textLink->tl_sort ?? '0') }}">
                        @if ($errors->first('tl_sort'))
                            <span class="text-danger">{{ $errors->first('tl_sort') }}</span>
                        @endif
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
                    <div class="form-group {{ $errors->has('tl_position') ? 'was-validated' : '' }} ">
                        <label  class="required">Position</label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="tl_position" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option value="1" {{ ($textLink->tl_position ?? 0 ) == 1 ? "selected='selected'" : "" }}>Menu</option>
                                <option value="2" {{ ($textLink->tl_position ?? 0 ) == 2 ? "selected='selected'" : "" }}>Footer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('tl_target') ? 'was-validated' : '' }} ">
                        <label  class="required">Target</label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="tl_target" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option value="1" {{ ($textLink->tl_target ?? 0 ) == 1 ? "selected='selected'" : "" }}>Opens the linked document in a new window or tab</option>
                                <option value="2" {{ ($textLink->tl_target ?? 0 ) == 2 ? "selected='selected'" : "" }}>Opens the linked document in the same frame as it was clicked (this is default)</option>
                                <option value="3" {{ ($textLink->tl_target ?? 0 ) == 3 ? "selected='selected'" : "" }}>Opens the linked document in the parent frame</option>
                                <option value="4" {{ ($textLink->tl_target ?? 0 ) == 4 ? "selected='selected'" : "" }}>Opens the linked document in the full body of the window</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
