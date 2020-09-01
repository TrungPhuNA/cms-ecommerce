<form action="{{ route('cms_get.email.store') }}" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('em_driver') ? 'was-validated' : '' }} ">
                        <label  class="required">Loại </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('em_driver') ? 'required' : '' }}
                                name="em_driver" placeholder="smtp ..." value="{{ old('em_driver',$email->em_driver ?? '') }}">
                        @if ($errors->first('em_driver'))
                            <span class="text-danger">{{ $errors->first('em_driver') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('em_port') ? 'was-validated' : '' }} ">
                        <label  class="required">Cổng </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="number" class="form-control keypress-count" {{ $errors->has('em_port') ? 'required' : '' }}
                                name="em_port" placeholder="587 ..." value="{{ old('em_port',$email->em_port ?? '') }}">
                        @if ($errors->first('em_port'))
                            <span class="text-danger">{{ $errors->first('em_port') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('em_host') ? 'was-validated' : '' }} ">
                        <label  class="required">Máy chủ </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('em_host') ? 'required' : '' }}
                        name="em_host" placeholder="smtp.mailgun.org" value="{{ old('em_host',$email->em_host ?? '') }}">
                        @if ($errors->first('em_host'))
                            <span class="text-danger">{{ $errors->first('em_host') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('em_username') ? 'was-validated' : '' }} ">
                        <label  class="required">Tên đăng nhập </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('em_username') ? 'required' : '' }}
                        name="em_username" placeholder="cms@cms_laravel.net" value="{{ old('em_username',$email->em_username ?? '') }}">
                        @if ($errors->first('em_username'))
                            <span class="text-danger">{{ $errors->first('em_username') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('em_password') ? 'was-validated' : '' }} ">
                        <label  class="required">Mật khẩu </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="password" class="form-control keypress-count" {{ $errors->has('em_password') ? 'required' : '' }}
                        name="em_password" placeholder="******" value="{{ old('em_password',$email->em_password ?? '') }}">
                        @if ($errors->first('em_password'))
                            <span class="text-danger">{{ $errors->first('em_password') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('em_domain') ? 'was-validated' : '' }} ">
                        <label  class="required">Tên miền </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('em_domain') ? 'required' : '' }}
                        name="em_domain" placeholder="cms-laravel.net" value="{{ old('em_domain',$email->em_domain ?? '') }}">
                        @if ($errors->first('em_domain'))
                            <span class="text-danger">{{ $errors->first('em_domain') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('em_from_address') ? 'was-validated' : '' }} ">
                        <label  class="required">Người gủi</label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('em_from_address') ? 'required' : '' }}
                        name="em_from_address" placeholder="cms-laravel.net" value="{{ old('em_from_address',$email->em_from_address ?? '') }}">
                        @if ($errors->first('em_from_address'))
                            <span class="text-danger">{{ $errors->first('em_from_address') }}</span>
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
