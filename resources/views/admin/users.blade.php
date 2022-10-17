@extends("layouts.dashboard")

@section("title", "Users")

@section("page-name", "Users")
@section("current-page", "Users")

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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    @if ($users)
                        <tbody>
                            @foreach ( $users as $user)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $user->first_name." ".$user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>{{ $user->country }}</td>
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
