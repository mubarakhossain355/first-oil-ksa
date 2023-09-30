@extends('frontend.layouts.app')

@section('title', 'Career Details Page')

    @push('css')

    @endpush

@section('content')
    
  <!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">{{$career->job_title}}- Details</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{route('home')}}"  rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">{{$career->job_title}}- Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container py-4">
        <h2 class="font-weight-bold text-6 mb-3">Job Details</h2>
        <div class="row mb-2">
            <div class="col-md-8">
               
                    @if ($career->job_responsibilities)
                    <div class="card mb-3">
                        <div class="card-header">
                            <strong>Job Responsibilities</strong>
                        </div>
                        <div class="card-body">
                            <p>{!! $career->job_responsibilities !!}</p>
                        </div>
                    </div>
                    @endif
                    @if ($career->educational_requirements)
                    <div class="card mb-3">
                        <div class="card-header">
                            <strong>Educational Requirements</strong>
                        </div>
                        <div class="card-body">
                            <p>{!! $career->educational_requirements !!}</p>
                        </div>
                    </div>
                    @endif
                    @if ($career->experience_requirements)
                    <div class="card mb-3">
                        <div class="card-header">
                            <strong>Experience Requirements</strong>
                        </div>
                        <div class="card-body">
                            <p>{!! $career->experience_requirements !!}</p>
                        </div>
                    </div>
                    @endif
                    @if ($career->additional_requirements)
                    <div class="card mb-3">
                        <div class="card-header">
                            <strong>Additional Requirements</strong>
                        </div>
                        <div class="card-body">
                            <p>{!! $career->additional_requirements !!}</p>
                        </div>
                    </div>
                    @endif
                    @if ($career->compensation_other_benefits)
                    <div class="card mb-3">
                        <div class="card-header">
                            <strong>Compensation And Other Benefits</strong>
                        </div>
                        <div class="card-body">
                            <p>{!! $career->compensation_other_benefits !!}</p>
                        </div>
                    </div>
                    @endif
                    @if ($career->compensation_other_benefits)
                    <div class="card mb-3">
                        <div class="card-header">
                            <strong>Apply Instruction</strong>
                        </div>
                        <div class="card-body">
                            <p>{!! $career->apply_instruction !!}</p>
                        </div>
                    </div>
                    @endif
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <strong>Job Summery</strong>
                    </div>
                    <div class="card-body ">
                        <p class="mb-0"><strong>Location</strong> : {{ $career->job_location }}</p>
                        <p class="mb-0"><strong>Deadline</strong>: {{ $career->deadline }}</p>
                        <p class="mb-0"><strong>Vacancy</strong>: {{ $career->vacancy }}</p>
                        <p class="mb-0"><strong>Salary</strong>: {{ $career->salary }}</p>
                        <p class="mb-0"><strong>Employment Status</strong>: {{ $career->employment_status }}</p>
                        <p class="mb-0"><strong>Published Date</strong>: {{ $career->created_at->toDateString() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
