@extends('frontend.layouts.app')

@section('title', $media->title . ' Page')

@section('content')

    <!-- Featured Title -->
<div style="background: url({{ asset('storage/' . $settings->breadcrub_image) }})" id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">{{ $media->title }}</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{route('home')}}"  rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">{{ $title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container py-4">
        <div class="row mb-2">
            <div style="padding-bottom: 50px;" class="col-md-8 offset-md-2">
                <img class="img-fluid" style="max-width: 100%; margin: auto; display: block;" src="{{ asset('storage/' . $media->photo) }}" alt="{{ $title }} - {{ config('app.name', 'Laravel') }}">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col page-content" style="word-break: break-word!important;">
                {!! $media->details !!}
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush


