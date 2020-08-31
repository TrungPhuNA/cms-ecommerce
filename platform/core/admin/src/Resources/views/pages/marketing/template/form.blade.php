<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group {{ $errors->has('em_title') ? 'was-validated' : '' }} ">
                        <label  class="required">Name </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('em_title') ? 'required' : '' }}
                        maxlength="120" name="em_title" placeholder="Name ..." value="{{ old('em_title',$template->em_title ?? '') }}">
                        @if ($errors->first('em_title'))
                            <span class="text-danger">{{ $errors->first('em_title') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('em_content') ? 'was-validated' : '' }} ">
                        <label  class="required">Content </label>
                        <textarea name="em_content" id="content"
                        class="form-control {{ $errors->has('em_content') ? 'required' : '' }}"  cols="10" rows="3">{{ old('em_content', $template->em_content ?? '') }}</textarea>
                        @if ($errors->first('em_content'))
                            <span class="text-danger">{{ $errors->first('em_content') }}</span>
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

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">

    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

    CKEDITOR.replace( 'content' ,options);
</script>
