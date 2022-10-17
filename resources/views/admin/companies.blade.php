@extends("layouts.dashboard")

@section("title", "Companies")

@section("page-name", "Companies")
@section("current-page", "Companies")

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
                <table  class="datatable">
                    <thead>
                        <tr>
                            <th>Sr#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>service</th>
                            <th>Jobs Posted</th>
                        </tr>
                    </thead>
                    @if ($companies)
                        <tbody>
                            @foreach ( $companies as $company)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td><a href="{{ route('admin.view-company', $company->id) }}">{{ $company->name }}</a></td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->phone }}</td>
                                    <td>@if ($company->service_id != null){{ $company->service->service }} @else Null @endif</td>
                                    <td>{{ $company->jobs_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif
                </table>
                {{-- {{ $companies->links('vendor.pagination.default') }} --}}
            </div>
        </div>
    </section>
@endsection
