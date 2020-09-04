@extends('admin::layouts.app_cms_admin')
@section('title_page','Danh sách danh mục')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Quảng lý danh mục</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Index</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('cms_get.category.create') }}" class="btn btn-info  mr-2"><i class="la la-edit"></i> Thêm mới</a>
                </div>
                <div class="pr-1 mb-3 mb-xl-0">
                    <button type="button" class="btn btn-danger mr-2"><i class="la la-refresh"></i> Reload</button>
                </div>
            </div>
        </div>

        <!-- row opened -->
        <div class="row row-sm">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="col-sm-2" style="float: right">
                                <button data-toggle="dropdown" class="btn btn-outline-light btn-block btn-xs" aria-expanded="false">Tuỳ chọn <i class="la la-angle-down"></i></button>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 44px, 0px);">
                                    <a href="" class="dropdown-item">Xoá</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mg-b-0 text-md-nowrap">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="box-checkbox">
                                            <input type="checkbox" id="checkAll">
                                            <span class="checkmark"></span>
                                        </label>
                                    </th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Parent</th>
                                    <th>Seo</th>
                                    <th class="text-center">Stt</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @forelse($categories as $category)
                                    <tr>
                                        <td scope="row">
                                            <label class="box-checkbox">
                                                <input type="checkbox" name="listID[]" class="checkbox"
                                                       value="{{ $category->id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <?php $str = '' ;for($i = 0; $i < $category->level; $i ++){ echo $str; $str .= '---- '; }?>
                                            {{ $category->c_name }}
                                        </td>
                                        <td>
                                            <img src="{{ pare_url_file($category->c_avatar)  }}" style="width: 60px;height: 60px;" alt="">
                                        </td>
                                        <td>{{ $category->parent->c_name ?? "__ROOT__" }} </td>
                                        <td>
                                            <div class="existed-seo-meta">
                                                <span class="page-title-seo title_seo">{{ $category->c_title_seo }}</span>
                                                <div class="page-url-seo ws-nm">
                                                    <p>http://cms-laravel.net/bai-viet/<span class="slug">{{ $category->c_slug }}</span></p>
                                                </div>
                                                <div class="ws-nm">
                                                    <span style="color: #70757a;">{{ $category->created_at->format('d-m-Y')}} - </span>
                                                    <span class="page-description-seo description_seo">{{ $category->c_description_seo }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $category->c_sort }}</td>
                                        <td><span class="btn btn-sm {{ $category->getStatus($category->c_status)['class'] }}">{{ $category->getStatus($category->c_status)['name'] }}</span></td>
                                        <td>
                                            <a href="{{ route('cms_get.category.edit', $category->id) }}" class="btn btn-sm btn-info"><i class="la la-pen"></i></a>
                                            <a href="{{ route('cms_get.category.delete', $category->id) }}" class="btn btn-sm btn-danger js-confirm-delete"><i class="la la-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
