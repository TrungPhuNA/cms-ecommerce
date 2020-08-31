<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('seu_title') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('seu_title') ? 'required' : '' }}
                        maxlength="120" name="seu_title" placeholder="Name ..." value="{{ old('seu_title',$template->seu_title ?? '') }}">
                        @if ($errors->first('seu_title'))
                            <span class="text-danger">{{ $errors->first('seu_title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label  class="required">Template </label>
                        <select name="seu_template_email_id" class="form-control" tabindex="-1">
                            <option title="" value="">__Chọn template__</option>
                            @foreach($templates as $item)
                                <option title="{{ $item->em_title }}"  value="{{ $item->id }} ">
                                    {{ $item->em_title }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->first('seu_template_email_id'))
                            <span class="text-danger">{{ $errors->first('seu_template_email_id') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label  class="required">User </label>
                        <select name="seu_user_id[]" class="form-control js-guests-email" tabindex="-1" multiple>
                            <option title="" value="">__Chọn user</option>
                            @foreach($guests as $item)
                                <option title="{{ $item->g_email }}" {{ in_array($item->id, $userOld ?? []) ? "selected='selected'" : ""}} value="{{ $item->id }} ">
                                    {{ $item->g_email }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->first('seu_user_id'))
                            <span class="text-danger">{{ $errors->first('seu_user_id') }}</span>
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
                    <div>
                        <h6 class="card-title mb-1">Time Send Email</h6>
                    </div>
                    <div class="row row-sm">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"> <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i> </div>
                            </div>
                            <input class="form-control" name="seu_time_start" id="datetimepicker" type="text" value="2018-12-20 21:05">
                            @if ($errors->first('seu_time_start'))
                                <span class="text-danger">{{ $errors->first('seu_time_start') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
