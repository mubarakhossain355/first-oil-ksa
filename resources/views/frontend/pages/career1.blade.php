@extends('frontend.layouts.app')

@section('title', 'Career')

    @push('css')

    @endpush

@section('content')
    <!-- Featured Title -->
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">Career</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{route('home')}}"  rel="home" class="trail-begin">Home</a>
                            <span class="sep">/</span>
                            <span class="trail-end">Career</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <h2 class="font-weight-bold text-6 mb-3">OPEN POSITIONS</h2>
        <div class="row mb-2">
            <div class="col-md-12">
                @forelse ($careers as $career)
                    <div class="card">
                        <div class="card-header">
                            <a style="text-decoration: none" href="{{ route('career.details', [$career->id, Str::slug($career->job_title)]) }}">
                                <div>
                                    <span class="text-blod h4">{{ $career->job_title }}</span>
                                    <small class="float-right">{{ $career->created_at->diffForHumans() }}</small>
                                </div><br>
                                <p class="mb-0">
                                    @if (strlen($career->job_responsibilities) >= 120)
                                    <strong>Job Responsibilities</strong>: {!! Str::limit($career->job_responsibilities, 120) !!}...
                                    @else
                                    <strong>Job Responsibilities</strong>: {!! $career->job_responsibilities !!}
                                    @endif
                                </p>
                                <p class="mb-0"><strong>Job Location</strong>: {{ $career->job_location }}</p>
                                <p class="mb-0"><strong>Deadline</strong>: {{ $career->deadline }}</p>
                            </a>
                        </div><br>
                    </div>
                @empty
                    <p class="text-center">No position is open now</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
