@extends('frontend.layouts.app')

@section('title', 'Service Details Page')

    @push('css')

    @endpush

@section('content')

  <!-- Featured Title -->
<div style="background: url({{ asset('storage/' . $settings->breadcrub_image) }})" id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Services </h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{route('home')}}"  rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Services</span>
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
                <section class="wprt-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wprt-spacer" data-desktop="110" data-mobi="30" data-smobi="30"></div>
                            </div><!-- /.col-md-12 -->
                            @foreach ($services as $service)
                            <div class="col-md-4">
                                <div class="service-item clearfix">
                                    @if ($service->featured_image)
                                    <div class="thumb"><img src="{{ asset('storage/' . $service->featured_image) }}" alt="{{ $service->title }} - {{ config('app.name', 'Laravel') }}" /></div>
                                    @else
                                    <div class="thumb"><img src="assets/img/services/7.jpg" alt="{{ $service->title }} - {{ config('app.name', 'Laravel') }}" /></div> 
                                    @endif
                                    
                                    <div class="service-item-wrap">
                                        <h3 class="title font-size-18"><a href="{{ route('service.details', [$service->id, Str::slug($service->title)]) }}">{{$service->title}}</a></h3>
                                        <p>{{$service->short_description}}</p>
                                        <a href="{{ route('service.details', [$service->id, Str::slug($service->title)]) }}" class="wprt-button small rounded-3px">READ MORE</a>
                                    </div>
                                </div>
                                <div class="wprt-spacer" data-desktop="60" data-mobi="30" data-smobi="30"></div>
                            </div><!-- /.col-md-4 -->
                            @endforeach
                            
                            


                            <div class="col-md-12">
                                <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section>
            </div>
        </div>
    </div>
</div>
   
@endsection

@push('script')

<script type="text/javascript">
    if ($('#errors').find(".alert-danger").length  > 0) {
        var $target = $('html,body'); 
        $target.animate({scrollTop: $target.height()}, 1000);
    }
</script>
    
@endpush
