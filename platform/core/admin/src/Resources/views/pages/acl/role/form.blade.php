<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('name') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('name') ? 'required' : '' }}
                        maxlength="120" name="name" placeholder="Name ..." value="{{ old('name',$role->name ?? '') }}">
                        @if ($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('description') ? 'was-validated' : '' }} ">
                        <label  class="required">Description </label>
                        <small class="charcounter" data-max="300">(300 character(s) remain)</small>
                        <textarea name="description" {{ $errors->has('description') ? 'required' : '' }}
                        data-max="300" class="form-control keypress-count"  cols="10" rows="3">{{ old('description', $role->description ?? '') }}</textarea>
                    </div>
                    <div class="row">
                        @if (isset($permissions))
                            @foreach($permissions as $key => $permission)
                                <div class="col-md-3">
                                    <label class="ckbox">
                                        <input  name="permissions[]" {{ in_array($permission->id, $permissions_active ?? []) ? "checked=checked" : "" }} value="{{ $permission->id }}"
                                                type="checkbox"><span> {{ $permission->name }} </span>
                                    </label>
                                </div>
                            @endforeach
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
        </div>
    </div>
</form>
