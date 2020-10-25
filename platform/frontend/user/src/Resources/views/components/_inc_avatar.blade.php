<div class="box-info-item text-align-center">
    <div class="box-avatar">
        <div class="circle">
            <img class="profile-pic" src="{{ asset('/images/default.jpg') }}">
            <div class="p-image">
                <i class="fa fa-camera upload-button"></i>
                <input class="file-upload" type="file" accept="image/*"/>
            </div>
        </div>
    </div>
    <div class="info-auth">
        <p class="flex ">
            <span class="w25 text-align-left">Hi</span>
            <b class="w75 text-align-left">{{ get_data_user('web','name') }}</b>
        </p>
        <p class="flex">
            <span class="w25 text-align-left">Email</span>
            <b class="w75 text-align-left">{{ get_data_user('web','email') }}</b>
        </p>
        <p class="flex">
            <span class="w25 text-align-left">Pass</span>
            <b class="w25 text-align-left">*******</b>
            <a style="padding: 0px;width: 60px;" class="w50 js-popup-password btn btn-xs btn-secondary btn-radius"><i class="fa fa-pencil"></i> Update</a>
        </p>
    </div>
</div>
