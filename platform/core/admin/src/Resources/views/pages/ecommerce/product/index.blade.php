@extends('admin::layouts.app_cms_admin')
@section('title_page','Danh sách sản phẩm')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Quảng lý sản phẩm</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Index</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('cms_get.product.create') }}" class="btn btn-info  mr-2"><i class="la la-edit"></i> Thêm mới</a>
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
                                    <th>Image</th>
                                    <th style="width: 30%">Name</th>
                                    <th>Category</th>
                                    <th>Create</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($products as $product)
                                    <tr>
                                        <td scope="row" style="width: 20px;">
                                            <label class="box-checkbox">
                                                <input type="checkbox" name="listID[]" class="checkbox"
                                                       value="{{ $product->id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <img src="{{ asset('images/default.jpg') }}" style="width: 60px;height: 60px;" alt="">
                                        </td>
                                        <td>{{ $product->pro_name }} </td>
                                        <td>{{ $product->category->c_name ?? "[N\A]" }} </td>
                                        <td>{{ $product->created_at->format('d-m-Y') }}</td>
                                        <td><span class="btn btn-sm {{ $product->getStatus($product->a_status)['class'] }}">{{ $product->getStatus($product->a_status)['name'] }}</span></td>
                                        <td>
                                            <a href="{{ route('cms_get.product.edit', $product->id) }}" class="btn btn-sm btn-info"><i class="la la-pen"></i></a>
                                            <a href="{{ route('cms_get.product.delete', $product->id) }}" class="btn btn-sm btn-danger js-confirm-delete"><i class="la la-trash"></i></a>
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
