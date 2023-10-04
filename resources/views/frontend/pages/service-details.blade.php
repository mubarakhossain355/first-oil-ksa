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
                <h1 class="featured-title-heading">{{$service->title}} - Details</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{route('home')}}"  rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">{{$service->title}} - Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
 <!-- Main Content -->
<div id="main-content" class="page sidebar-left site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>

                            <h3 class="line-height-normal margin-bottom-10">{{$service->title}}</h3>
                            <div class="wprt-lines style-1 custom-3">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                            <p class="margin-bottom-0"> {!! $service->details !!}</p>

                            <div class="wprt-spacer" data-desktop="35" data-mobi="35" data-smobi="35"></div>

                            
                            <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                        </div><!-- /.col-md-12 -->

                        
                        <div class="col-md-12">
                            <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                        </div>
                    </div><!-- /.row -->

            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->

      
        
        <!-- /#sidebar -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

   
@endsection

@push('script')

<script type="text/javascript">
    if ($('#errors').find(".alert-danger").length  > 0) {
        var $target = $('html,body'); 
        $target.animate({scrollTop: $target.height()}, 1000);
    }
</script>
    
@endpush
