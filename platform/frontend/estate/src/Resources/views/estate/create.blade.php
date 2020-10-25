@extends('estate::layouts.app_estate')
@section('style')
    <link rel="stylesheet" href="{{ mix('css/user_estate.css') }}">
@stop
@section('content')
    <div class="container">
        <div class="box">
            <div class="box-100 pt20">
                <section>
                    <div class="box-title">Thêm mới tin</div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h2 class="title">#1 THÔNG TIN cơ bản</h2>
                                <p class="sub-title">Thông tin bắt buộc (<span>*</span>)</p>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="contact_title">Tiêu đề <span>*</span></label>
                                    <input id="contact_title" type="text" class="form-control" name="contact_email" placeholder="Tiêu đề tin" value="">
                                    <div class="error-form"></div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group form-col">
                                        <label for="ot">Hình thức <span>*</span></label>
                                        <select id="ot" name="ot" class="form-control valid" aria-invalid="false">
                                            <option value="0">Nhà đất bán</option>
                                            <option value="1">Nhà đất cho thuê</option>
                                        </select>
                                        <div class="error-form"></div>
                                    </div>
                                    <div class="form-group form-col">
                                        <label for="level">Loại <span>*</span></label>
                                        <select id="level" name="level" class="form-control">
                                            <option value="">Bán căn hộ</option>
                                            <option value="Mới tốt nghiệp / Thực tập">Chung cư</option>
                                        </select>
                                        <div class="error-form"></div>
                                    </div>
                                    <div class="form-group form-col">
                                        <label for="level">Diện tích <span>*</span></label>
                                        <input id="contact_title" type="text" class="form-control" name="contact_email" placeholder="200m2" value="">
                                        <div class="error-form"></div>
                                    </div>
                                    <div class="form-group form-col">
                                        <label for="level">Giá <span>*</span></label>
                                        <input id="contact_title" type="text" class="form-control" name="contact_email" placeholder="2" value="">
                                        <div class="error-form"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h2 class="title">#2 THÔNG TIN mô tả</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="contact_email">Email nhận hồ sơ <span>*</span></label>
                                    <textarea name="" class="form-control" placeholder="Nhập mô tả" id="summernote" cols="30" rows="10"></textarea>
                                    <div class="error-form"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h2 class="title">#3 THÔNG TIN LIÊN HỆ</h2>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group form-col">
                                        <label for="contact_username">Người liên hệ <span>*</span></label> <input id="contact_username" type="text" class="form-control" name="contact_username" placeholder="Nhập tên liên hệ" value="Phan Trung Phú">
                                        <div class="error-form"></div>
                                    </div>
                                    <div class="form-group form-col">
                                        <label for="contact_phone">Điện thoại <span>*</span></label> <input id="contact_phone" type="text" class="form-control" name="contact_phone" placeholder="Nhập SĐT liên hệ" value="0986420994">
                                        <div class="error-form"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group form-col">
                                        <label for="contact_email">Email nhận hồ sơ <span>*</span></label> <input id="contact_email" type="text" class="form-control" name="contact_email" placeholder="Nhập email liên hệ" value="">
                                        <div class="error-form"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script src="{{ mix('js/user_estate.js') }}"></script>
@stop
