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
                        maxlength="120" name="name" placeholder="Name ..." value="{{ old('name',$admin->name ?? '') }}">
                        @if ($errors->first('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('phone') ? 'was-validated' : '' }} ">
                        <label  class="required">Phone </label>
                        <small class="charcounter" data-max="12">(12 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('phone') ? 'required' : '' }}
                        maxlength="12" name="phone" placeholder="0986 ..." value="{{ old('phone',$admin->name ?? '') }}">
                        @if ($errors->first('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'was-validated' : '' }} ">
                        <label  class="required">Email </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="email" class="form-control keypress-count" {{ $errors->has('email') ? 'required' : '' }}
                        maxlength="120" name="email" placeholder="Email ..." value="{{ old('email',$admin->email ?? '') }}">
                        @if ($errors->first('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'was-validated' : '' }} ">
                        <label  class="required">Password </label>
                        <small class="charcounter" data-max="20">(20 character(s) remain)</small>
                        <input type="password" class="form-control keypress-count" {{ $errors->has('password') ? 'required' : '' }}
                        maxlength="20" name="password" placeholder="*********" value="">
                        @if ($errors->first('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="row">
                        @if (isset($roles))
                            @foreach($roles as $key => $role)
                                <div class="col-md-3" style="margin-bottom: 10px;">
                                    <label class="ckbox">
                                        <input  name="roles[]" {{ in_array($role->id, $roles_old ?? []) ? "checked=checked" : "" }} value="{{ $role->id }}"
                                        type="checkbox"><span> {{ $role->name }} </span>
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
