@extends("layouts.dashboard")

@section("title", "Jobs")

@section("page-name", "Jobs")
@section("current-page", "Jobs")

@section("content")
@isset($message)
    <div class="alert success">
        <p>{{ $message }}</p>
    </div>
@endisset
    <section id="tables">
        {{-- <div class="btn-container">
            <a href="{{ route("admin.service-manage", "add-new") }}" class="add-btn">Add Service</a>
        </div> --}}

        <div class="table-container">
            <div class="table-wrapper">
                <table class="datatable">
                    <thead>
                        <tr>
                            <th>Sr#</th>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Posted By</th>
                            <th>Posted On</th>
                        </tr>
                    </thead>
                    @if ($jobs)
                        <tbody>
                            @foreach ( $jobs as $job)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $job->title }}</td>
                                    <td>{{ $job->description }}</td>
                                    <td>{{ $job->company->name }}</td>
                                    <td>{{ $job->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif
                </table>
                {{-- {{ $users->links('vendor.pagination.default') }} --}}
            </div>
        </div>
    </section>
@endsection
