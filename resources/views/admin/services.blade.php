@extends("layouts.dashboard")

@section("title", "Services")

@section("page-name", "Services")
@section("current-page", "Services")

@section("content")
@isset($message)
    <div class="alert success">
        <p>{{ $message }}</p>
    </div>
@endisset
    <section id="tables">
        <div class="btn-container">
            <a href="{{ route("admin.service-manage", "add-new") }}" class="add-btn">Add Service</a>
        </div>

        <div class="table-container">
            <div class="table-wrapper">
                <table class="datatable">
                    <thead>
                        <tr>
                            <th>Sr#</th>
                            <th>Service</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @if ($allServices)
                        <tbody>
                            @foreach ( $allServices as $service)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $service->service }}</td>
                                    <td>
                                        <div class="action-btns">
                                            <a href="{{ route("admin.service-manage", $service->id) }}" class="edit-btn">
                                                <i class="fas fa-pen"></i>
                                            </a>

                                            <form action="{{ route('admin.services') }}" method="POST">
                                                @csrf
                                                @method("delete")
                                                <input type="hidden" name="id" value="{{ $service->id }}">
                                                <button type="submit" class="delete-btn"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif
                </table>
                {{-- {{ $allServices->links('vendor.pagination.default') }} --}}
            </div>
        </div>
    </section>
@endsection
