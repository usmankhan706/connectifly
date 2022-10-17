@extends("layouts.dashboard")

@section("title", "Company Detail")

@section("page-name", "Company Detail")
@section("current-page", "Companies")

@section("content")
    <section id="company-detail">
        <div class="profile-wrapper">
            <div class="profile-container">
                <div class="cover">
                    @if ($company->cover != null)
                        <img src="{{ asset("company_cover_images/".$company->cover) }}" alt="">
                    @else
                        <img src="{{ asset("images/web/cover-placeholder.png") }}" alt="">
                    @endif
                </div>
                <div class="profile">
                    @if ($company->logo != null)
                        <img src="{{ asset("company_logos/".$company->logo) }}" alt="">
                    @else
                        <img src="{{ asset("images/web/profile-placeholder.png") }}" alt="">
                    @endif
                </div>
                <div class="details">
                    <h3><strong>Details:</strong></h3>
                    <div class="profile-table-spliter">
                        <table>
                            <tr>
                                <th>Name:</th>
                                <td>{{ $company->name }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>@if ($company->email_verified_at != null)Verified @else Not Verified @endif</td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td>@if ($company->city != null){{ $company->city }} @else Not Available @endif</td>
                            </tr>
                            <tr>
                                <th>Followers:</th>
                                <td>{{ $company->follower_count }}</td>
                            </tr>
                            <tr>
                                <th>Website:</th>
                                <td>@if ($company->webiste != null){{ $company->webiste }} @else Not Available  @endif</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <th>Service:</th>
                                <td>@if ($company->service_id != null){{ $company->service->service }} @else Not    Available @endif</td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td>{{ $company->phone }}</td>
                            </tr>
                            <tr>
                                <th>Country:</th>
                                <td>@if ($company->country != null){{ $company->country }} @else Not Available  @endif</td>
                            </tr>
                            <tr>
                                <th>Employees:</th>
                                <td>{{ $company->size }}</td>
                            </tr>
                        </table>
                    </div>

                    <p><strong>Description:</strong></p>
                    <p>@if ($company->description != null){{ $company->description }} @else Not Description Available @endif</p>
                </div>
            </div>


            <div class="jobs-wrapper">

                @forelse ($company->jobs as $job)

                    <div class="job">
                        <div class="job--head">
                            <p>{{ $job->title }}</p>
                        </div>
                        <div class="job--body">
                            <p>{{ $job->description }}</p>
                        </div>
                        <div class="job--footer">
                            <p><strong>Posted At:</strong> {{ $job->created_at }}</p>
                        </div>
                    </div>
                @empty
                    <div class="no-job">
                        <p>No Jobs Posted Yet</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
