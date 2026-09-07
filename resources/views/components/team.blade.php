@php
    $teamMembers = \App\Models\TeamMember::where('status', '1')->get();
@endphp
<div class="container-fluid container-team py-5" id="leadership">
        <div class="container pb-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="fw-bold text-primary text-uppercase mb-2">Leadership</h5>
                    <h1 class="display-6 mb-3">Meet Our Visionary Team</h1>
                    <p class="mb-4">Our directors bring together strategic growth, production efficiency and
                        quality-focused operations to build NIRVA Technoplast into a trusted precision plastic
                        manufacturing partner for healthcare and industry.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Precision Manufacturing</span>
                        <span class="badge bg-secondary rounded-pill px-3 py-2 fs-6">Medical-Grade Focus</span>
                        <span class="badge bg-primary rounded-pill px-3 py-2 fs-6">Scalable Production</span>
                    </div>
                </div>
                <div class="col-md-5 wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid w-100 rounded" src="{{ asset('front/img/team-1.jpg') }}" alt="NIRVA Technoplast leadership team">
                </div>
            </div>
            <div class="row g-4">
                @forelse ($teamMembers as $member)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                @if (str_starts_with($member->image, 'front/'))
                                    <img class="img-fluid w-100" src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                                @else
                                    <img class="img-fluid w-100" src="{{ Storage::url($member->image) }}" alt="{{ $member->name }}">
                                @endif
                                <div class="team-social">
                                    <a class="btn btn-square btn-light mx-1" href="{{ route('contact-page') }}"><i class="fa fa-envelope"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href="tel:{{ config('constants.phone') }}"><i class="fa fa-phone"></i></a>
                                    <a class="btn btn-square btn-light mx-1" href="{{ route('contact-page') }}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-3">
                                <h5 class="mb-1">{{ $member->name }}</h5>
                                <span class="text-primary fw-bold">{{ $member->role }}</span>
                                @if ($member->description)
                                    <p class="mb-0 mt-3">{{ $member->description }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">No team members available.</div>
                @endforelse
            </div>
        </div>
    </div>
