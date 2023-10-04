@extends('frontend.layouts.app')

@section('title', 'About Us Page')

@section('content')
   <!-- Featured Title -->
<div style="background: url({{ asset('storage/' . $settings->breadcrub_image) }})" id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">{{$aboutUs->page_title}}</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="#" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">{{$aboutUs->page_title}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="content-wrap">
    <div id="site-content" class="site-content clearfix">
        <div id="inner-content" class="inner-content-wrap">
            <div class="page-content">
                <!-- GALLERY -->
                <section class="wprt-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                
                                <div class="wprt-lines style-2 custom-1">
                                    <div class="line-1"></div>
                                </div>

                                <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                <p class="wprt-subtitle">{!! $aboutUs->page_content !!}</p>

                                <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                            </div><!-- /.col-md-12 -->

                            

                            <div class="col-md-12">
                                <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section>

            </div>
        </div>
    </div>
</div>

    
@endsection

@push('script')

@endpush
