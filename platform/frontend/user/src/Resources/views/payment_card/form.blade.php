<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="form-group">
        <label for="">{{ __('user.payment_card.form.label.bank') }} <span>(*)</span></label>
        <select name="cu_bank_id" required id="" class="form-control js-select2-bank">
            <option value="">Chọn ngân hàng</option>
            @foreach($banks as $bank)
                <option value="{{ $bank->id }}" {{ ($cardUser->cu_bank_id ?? 0) == $bank->id ? "selected" : "" }}>{{ $bank->b_name }}</option>
            @endforeach

        </select>
        @if ($errors->first('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">{{ __('user.payment_card.form.label.branch') }} <span>(*)</span></label>
        <input type="text" required class="form-control" name="cu_branch" value="{{ $cardUser->cu_branch ?? '' }}" placeholder="">
        @if ($errors->first('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">{{ __('user.payment_card.form.label.stk') }} <span>(*)</span></label>
        <input type="text" required name="cu_account_number" class="form-control" value="{{ $cardUser->cu_account_number ?? '' }}" placeholder="">
        @if ($errors->first('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="">{{ __('user.payment_card.form.label.account_holder') }} <span>(*)</span></label>
        <input type="text" required name="cu_account_holder" class="form-control" value="{{ $cardUser->cu_account_holder ?? '' }}" placeholder="">
        @if ($errors->first('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
        @endif
    </div>

    <button type="submit" class="btn btn-blue btn-md">Cập nhật</button>
</form>
