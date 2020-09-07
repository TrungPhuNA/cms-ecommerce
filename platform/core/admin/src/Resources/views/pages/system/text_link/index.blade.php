@extends('admin::layouts.app_cms_admin')
@section('title_page','Quản lý text links')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Quảng lý text links</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Index</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('cms_get.text_link.create') }}" class="btn btn-info  mr-2"><i class="la la-edit"></i> Thêm mới</a>
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
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Create</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($textLinks ?? [] as $item)
                                    <tr>
                                        <td scope="row" style="width: 20px;">
                                            <label class="box-checkbox">
                                                <input type="checkbox" name="listID[]" class="checkbox"
                                                       value="{{ $item->id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>{{ $item->tl_name }} </td>
                                        <td>{{ $item->tl_title }} </td>
                                        <td>
                                            <a href="" title="{{ $item->tl_title }}">{{ $item->tl_link }}</a>
                                        </td>
                                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <a href="{{ route('cms_get.text_link.edit', $item->id) }}" class="btn btn-sm btn-info"><i class="la la-pen"></i></a>
                                            <a href="{{ route('cms_get.text_link.delete', $item->id) }}" class="btn btn-sm btn-danger js-confirm-delete"><i class="la la-trash"></i></a>
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
