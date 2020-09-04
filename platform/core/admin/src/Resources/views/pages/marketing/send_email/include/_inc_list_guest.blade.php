<div class="table-responsive">
    <table class="table mg-b-0 text-md-nowrap">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Create</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @if ($guests && !empty($guests))
            @forelse($guests as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->g_name ?? "[N\A]" }}</td>
                    <td>{{ $item->g_email }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td><a href="" class="btn btn-sm btn-danger"><i class="la la-trash"></i></a></td>
                </tr>
            @empty
            @endforelse
        @endif
        </tbody>
    </table>
</div>
