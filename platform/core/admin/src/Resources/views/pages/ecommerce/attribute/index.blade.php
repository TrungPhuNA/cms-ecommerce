@extends('admin::layouts.app_cms_admin')
@section('title_page','Danh sách thuộc tính')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Quảng lý thuộc tính</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Index</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('cms_get.attribute.create') }}" class="btn btn-info  mr-2"><i class="la la-edit"></i> Thêm mới</a>
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
                                    <th>Slug</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($attributes as $attribute)
                                    <tr>
                                        <td scope="row">
                                            <label class="box-checkbox">
                                                <input type="checkbox" name="listID[]" class="checkbox"
                                                       value="{{ $attribute->id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            {{ $attribute->atb_name }}
                                        </td>
                                        <td>
                                            {{ $attribute->atb_slug }}
                                        </td>
                                        <td>{{ $attribute->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <a href="{{ route('cms_get.attribute.edit', $attribute->id) }}" class="btn btn-sm btn-info"><i class="la la-pen"></i></a>
                                            <a href="{{ route('cms_get.attribute.delete', $attribute->id) }}" class="btn btn-sm btn-danger js-confirm-delete"><i class="la la-trash"></i></a>
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
