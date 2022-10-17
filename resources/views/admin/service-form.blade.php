@extends("layouts.dashboard")

@section("title", "Services")


@section("current-page", "Services")

@if (isset($service))
@section("page-name", "Update Service")
@else
@section("page-name", "Add Service")
@endif

@section("content")
    <section id="crud-forms">
        <div class="form-container">
            <div class="form-wrapper">
                <form action="{{ route("admin.services") }}" class="form-wrapper" method="POST">
                    @csrf
                    @isset($service)
                        @method("PUT")
                    @endisset

                    <div class="form-group">
                        <div class="">
                            <label for="">Service Name</label>
                            <input type="text" placeholder="Service*" name="service" value="@isset($service){{ $service->service }}@endisset">

                            @isset($service)
                                <input type="hidden" name="id" value="{{ $service->id }}">
                            @endisset

                            @error("service")
                                <p class="validation-message">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <button type="submit" class="submit-btn">@if (isset($service))
                                Update
                            @else
                            Add
                            @endif</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
