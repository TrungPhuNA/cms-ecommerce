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
                        Giá trị
                    </div>
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Color</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="listAttribute">
                                @foreach($attributeValue as $key => $item)
                                    <tr>
                                        <td>{{ ($key + 1) }}</td>
                                        <td>
                                            <input type="text" class="form-control" name="av_name[]" value="{{ $item->av_name }}" placeholder="">
                                            <input type="hidden" name="av_id[]" value="{{ $item->id }}">
                                        </td>
                                        <td><input type="text" class="form-control" name="av_slug[]" value="{{ $item->av_slug }}" placeholder=""></td>
                                        <td>
                                            <input type="color"  name="av_color[]" value="{{ $item->av_color }}">
                                        </td>
                                        <td>
                                            <img src="{{ asset('images/default.jpg') }}" alt="" style="width: 50px;height: 50px;">
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-danger js-confirm-delete"><i class="la la-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td>{{ count($attributeValue) + 1 }}</td>
                                    <td>
                                        <input type="text" class="form-control" name="av_name[]" placeholder="">
                                        <input type="hidden" name="av_id[]" value="0">
                                    </td>
                                    <td><input type="text" class="form-control" name="av_slug[]" placeholder=""></td>
                                    <td>
                                        <input type="color"  name="av_color[]" value="#ff0000">
                                    </td>
                                    <td>
                                        <img src="{{ asset('images/default.jpg') }}" alt="" style="width: 50px;height: 50px;">
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger js-confirm-delete"><i class="la la-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="" class="btn btn-sm btn-info js-add-attribute">Add</a>
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
