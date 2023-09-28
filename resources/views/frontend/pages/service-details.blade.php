@extends('frontend.layouts.app')

@section('title', 'Service Details Page')

    @push('css')

    @endpush

@section('content')

  <!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Services Details</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{route('home')}}"  rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Services Details</span>
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

                        {{-- <div class="col-md-12">
                            <h3 class="line-height-normal margin-bottom-10">GALLERY PROJECT</h3>
                            <div class="wprt-lines style-1 custom-3">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                            <p class="margin-bottom-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer nulla quis fermentum hendrerit. Vestibulum eu libero volutpat, portas quam acc, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl vehicula.</p>

                            <div class="wprt-spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>

                            <div class="wprt-galleries-grid arrow-style-1 has-arrows arrow60 arrow-position-2" data-layout="slider" data-column="2" data-column2="2" data-column3="1" data-column4="1" data-gaph="10" data-gapv="10">
                                <div id="images-wrap" class="cbp">
                                    <div class="cbp-item">
                                        <div class="item-wrap">
                                            <a class="zoom" href="assets/img/projects/1.jpg"><i class="fa fa-arrows-alt"></i></a>
                                            <img src="assets/img/projects/1.jpg" alt="image" />
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item">
                                        <div class="item-wrap">
                                            <a class="zoom" href="assets/img/projects/2.jpg"><i class="fa fa-arrows-alt"></i></a>
                                            <img src="assets/img/projects/2.jpg" alt="image" />
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item">
                                        <div class="item-wrap">
                                            <a class="zoom" href="assets/img/projects/3.jpg"><i class="fa fa-arrows-alt"></i></a>
                                            <img src="assets/img/projects/3.jpg" alt="image" />
                                        </div>
                                    </div><!--/.cbp-item -->

                                    <div class="cbp-item">
                                        <div class="item-wrap">
                                            <a class="zoom" href="assets/img/projects/1.jpg"><i class="fa fa-arrows-alt"></i></a>
                                            <img src="assets/img/projects/1.jpg" alt="image" />
                                        </div>
                                    </div><!--/.cbp-item -->
                                </div><!-- /#images-wrap -->
                            </div><!-- /.wprt-galleries-grid -->
                        </div><!-- /.col-md-12 -->

                        <div class="col-md-6">
                            <div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>

                            <h3 class="line-height-normal margin-bottom-10">PRECONSTRUCTION</h3>
                            <div class="wprt-lines style-1 custom-3">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                            <p class=" margin-bottom-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit nulla quis fermentum hendrerit. Vivamus pretium urna at condimentum porta.</p>

                            <ul class="wprt-list style-2 accent-color">
                                <li>Lorem ipsum dolor sit amet, consectetur ea adipiscing elit.</li>
                                <li>Vestibulum eu libero volutpat, portas quam dolor acc.</li>
                                <li>Donec sodales quam id lorem lobortis nisl vehicula.</li>
                                <li>Cras id justo eget sapien scelerisque lacinia non a eros.</li>
                            </ul>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>

                            <h3 class="line-height-normal margin-bottom-10">AFTER THE PROJECT</h3>
                            <div class="wprt-lines style-1 custom-3">
                                <div class="line-1"></div>
                                <div class="line-2"></div>
                            </div>

                            <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit nulla quis fermentum hendrerit. Nulla porta purus quis iaculis ultrices. Proin aliquam sem at nibh hendrerit sagittis. Nullam ornare odio eu lacus tincidunt malesuada. Sed eu vestibulum elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec erat erat. Integer blandit nulla quis fermentum hendrerit. Vivamus pretium urna at condimentum porta.</p>
                        </div><!-- /.col-md-6 --> --}}
                        
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
