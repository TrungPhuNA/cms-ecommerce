<form action="" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h6 class="card-title mb-1">Thông tin website</h6>
                    </div>
                    <div class="form-group {{ $errors->has('ims_name') ? 'was-validated' : '' }} ">
                        <label  class="required">Title </label>
                        <small class="charcounter" data-max="120">(120 character(s) remain)</small>
                        <input type="text" class="form-control keypress-count" {{ $errors->has('ims_name') ? 'required' : '' }}  data-add-content=".title_seo"
                               data-add-slug=".slug"
                               maxlength="120" name="ims_name" placeholder="Name ..." value="{{ old('ims_name',$product->ims_name ?? '') }}">
                        @if ($errors->first('ims_name'))
                            <span class="text-danger">{{ $errors->first('ims_name') }}</span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('ims_description') ? 'was-validated' : '' }} ">
                        <label  class="required">Description </label>
                        <small class="charcounter" >(300 character(s) remain)</small>
                        <textarea name="ims_description" data-add-content=".description_seo" {{ $errors->has('ims_description') ? 'required' : '' }}
                        data-max="300" class="form-control keypress-count"  cols="10" rows="3">{{ old('ims_description', $product->ims_description ?? '') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Content
                    </div>

                    <div class="form-group">
                        <label  class="required" data-max="300">Content</label>
                        <textarea name="pro_content" class="form-control" cols="10" rows="3">{{ old('pro_content', $product->pro_content ?? "") }}</textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        SEO
                    </div>
                    <div class="mg-b-5 existed-seo-meta mg-t-20">
                        <span class="page-title-seo title_seo">{{ $product->pro_title_seo ?? 'Title SEO' }} </span>
                        <div class="page-url-seo ws-nm">
                            <p>http://cms-laravel.net/bai-viet/<span class="slug">{{ ($product->pro_slug ?? '') }}</span></p>
                        </div>
                        <div class="ws-nm">
                            @if (isset($product))
                                <span style="color: #70757a;">{{ $product->created_at->format('d-m-Y') }} - </span>
                            @else
                                <span style="color: #70757a;">{{ date('d-m-Y') }} - </span>
                            @endif
                            <span class="page-description-seo description_seo">{{ $product->pro_description_seo ?? "" }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card js-position-static">
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

            </div>
        </div>
    </div>
</form>
