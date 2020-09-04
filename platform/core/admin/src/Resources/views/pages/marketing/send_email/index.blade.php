@extends('admin::layouts.app_cms_admin')
@section('title_page','Danh sách template Email')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
                <div class="d-flex">
                    <h4 class="content-title mb-0 my-auto">Quảng lý template Email</h4>
                    <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Index</span>
                </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
                <div class="pr-1 mb-3 mb-xl-0">
                    <a href="{{ route('cms_get.send_email.create') }}" class="btn btn-info  mr-2"><i class="la la-edit"></i> Thêm mới</a>
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
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Author</th>
                                    <th>Total Guest</th>
                                    <th>Time Send</th>
                                    <th>Create</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($sendEmailUsers as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->seu_title }}</td>
                                            <td>{{ $item->author->name ?? "[N\A]" }}</td>
                                            <td>
                                                <a href="{{ route('cms_ajax_get.users_send_email', $item->id) }}"
                                                   class="btn btn-sm btn-success js-show-list-user">Send {{ $item->seu_total_user }} guest</a>
                                            </td>
                                            <td>{{ $item->seu_time_start }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a href="{{ route('cms_get.template_email.update', $item->id) }}" class="btn btn-sm btn-info"><i class="la la-pen"></i></a>
                                                <a href="{{ route('cms_get.template_email.delete', $item->id) }}" class="btn btn-sm btn-danger js-confirm-delete"><i class="la la-trash"></i></a>
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
    <div id="modal-demo" class="modal">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Chi tiết thông tin</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" id="js-modal-content">

                </div>
                <div class="modal-footer">
{{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
        <!-- modal-dialog -->
    </div>

@stop
