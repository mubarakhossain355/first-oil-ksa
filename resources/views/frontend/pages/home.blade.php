@extends('frontend.layouts.app')

@section('title', 'Home Page')

    @push('css')

    @endpush

@section('content')
    <!-- Slider -->
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev-slider1" class="rev_slider fullwidthabanner">
            <ul>
                @foreach ($sliders as $slider)
                     <!-- Slide -->
                <li data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-thumb="assets/img/slider/1.jpg" data-rotate="0" data-saveperformance="off" data-title="CONSTRUCTION">
                    <!-- Main Image -->
                    <img src="{{ asset('storage/' . $slider->file) }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina>
                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme text-white font-family-heading text-shadow font-weight-500"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-50','-40','-30','-20']"
                        data-fontsize="['60','50','40','30']"
                        data-lineheight="['70','60','50','40']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        @if ($slider->heading)
                        {{$slider->heading}}
                        @endif
                    </div>
                    <div class="tp-caption tp-resizeme text-white text-shadow letter-spacing-7px"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['20','20','20','20']"
                        data-fontsize="['28','24','20','18']"
                        data-lineheight="['38','34','30','28']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-lasttriggerstate="reset">
                        @if ($slider->sub_heading)
                        {{$slider->sub_heading}}
                        @endif
                    </div>
                    <div class="tp-caption"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['120','110','100','90']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1250"
                        data-splitin="none"
                        data-splitout="none"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                        data-responsive="on">
                        @php
                            $actionButtons = json_decode($slider->action_button);
                        @endphp
                       
                        @foreach ($actionButtons->title as $key => $actionButton)
                        @if ($actionButton)
                            <a href="{{ $actionButtons->url[$key] }}"
                                class="wprt-button big rounded-3px">{{ $actionButton }}</a>
                        @endif
                    @endforeach
                    </div>
                </li>
                @endforeach
               



                <!-- End Slide -->

                {{-- <!-- Slide -->
                <li data-transition="boxfade" data-slotamount="7" data-easein="Expo.easeOut" data-easeout="Expo.easeOut" data-masterspeed="2000" data-thumb="assets/img/slider/2.jpg" data-rotate="0" data-saveperformance="off" data-title="BEST COMPANY">
                    <!-- Main Image -->
                    <img src="{{asset('/')}}assets/frontend/assets/img/slider/2.jpg" alt="" data-bgposition="center center" data-no-retina>
                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme text-white font-family-heading text-shadow font-weight-500"
                        data-x="['left','left','left','left']" data-hoffset="['50','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-100','-90','-80','-70']"
                        data-fontsize="['60','50','40','30']"
                        data-lineheight="['70','60','50','40']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1500"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        THE BEST COMPANY
                    </div>
                    <div class="tp-caption tp-resizeme text-white text-shadow"
                        data-x="['left','left','left','left']" data-hoffset="['55','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                        data-fontsize="['20','18','16','14']"
                        data-lineheight="['30','28','26','24']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-lasttriggerstate="reset">
                        We are professional company over 20 year of experience.<br>We will brighten up every corner of your house.
                    </div>
                    <div class="tp-caption"
                        data-x="['left','left','left','left']" data-hoffset="['55','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['80','70','60','50']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1250"
                        data-splitin="none"
                        data-splitout="none"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                        data-responsive="on">
                        <a class="wprt-button big rounded-3px">CONTACT US</a>
                    </div>
                </li>
                <!-- End Slide -->
                <!-- Slide -->
                <li data-transition="boxfade" data-slotamount="7" data-easein="Expo.easeOut" data-easeout="Expo.easeOut" data-masterspeed="2000" data-thumb="assets/img/slider/2.jpg" data-rotate="0" data-saveperformance="off" data-title="BEST COMPANY">
                    <!-- Main Image -->
                    <img src="{{asset('/')}}assets/frontend/assets/img/slider/3.jpg" alt="" data-bgposition="center center" data-no-retina>
                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme text-white font-family-heading text-shadow font-weight-500"
                        data-x="['left','left','left','left']" data-hoffset="['50','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-100','-90','-80','-70']"
                        data-fontsize="['60','50','40','30']"
                        data-lineheight="['70','60','50','40']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1500"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        THE BEST COMPANY
                    </div>
                    <div class="tp-caption tp-resizeme text-white text-shadow"
                        data-x="['left','left','left','left']" data-hoffset="['55','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                        data-fontsize="['20','18','16','14']"
                        data-lineheight="['30','28','26','24']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-lasttriggerstate="reset">
                        We are professional company over 20 year of experience.<br>We will brighten up every corner of your house.
                    </div>
                    <div class="tp-caption"
                        data-x="['left','left','left','left']" data-hoffset="['55','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['80','70','60','50']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1250"
                        data-splitin="none"
                        data-splitout="none"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                        data-responsive="on">
                        <a class="wprt-button big rounded-3px">CONTACT US</a>
                    </div>
                </li>
                <!-- End Slide -->
                <!-- Slide -->
                <li data-transition="boxfade" data-slotamount="7" data-easein="Expo.easeOut" data-easeout="Expo.easeOut" data-masterspeed="2000" data-thumb="assets/img/slider/2.jpg" data-rotate="0" data-saveperformance="off" data-title="BEST COMPANY">
                    <!-- Main Image -->
                    <img src="{{asset('/')}}assets/frontend/assets/img/slider/4.jpg" alt="" data-bgposition="center center" data-no-retina>
                    <!-- Layers -->
                    <div class="tp-caption tp-resizeme text-white font-family-heading text-shadow font-weight-500"
                        data-x="['left','left','left','left']" data-hoffset="['50','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-100','-90','-80','-70']"
                        data-fontsize="['60','50','40','30']"
                        data-lineheight="['70','60','50','40']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;"
                        data-mask_out="x:inherit;y:inherit;"
                        data-start="1500"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                        THE BEST COMPANY
                    </div>
                    <div class="tp-caption tp-resizeme text-white text-shadow"
                        data-x="['left','left','left','left']" data-hoffset="['55','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                        data-fontsize="['20','18','16','14']"
                        data-lineheight="['30','28','26','24']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-lasttriggerstate="reset">
                        We are professional company over 20 year of experience.<br>We will brighten up every corner of your house.
                    </div>
                    <div class="tp-caption"
                        data-x="['left','left','left','left']" data-hoffset="['55','30','30','30']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['80','70','60','50']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                        data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                        data-start="1250"
                        data-splitin="none"
                        data-splitout="none"
                        data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                        data-responsive="on">
                        <a class="wprt-button big rounded-3px">CONTACT US</a>
                    </div>
                </li>
                <!-- End Slide --> --}}

            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>

    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- Intro -->
                    <section class="wprt-section intro">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">

                                    <div class="service-item clearfix text-center">
                                        <div class="thumb"><img src="{{asset('/')}}assets/frontend/assets/img/services/4.jpg" alt="image" /></div>
                                        <div class="service-item-wrap">
                                            <h3 class="title font-size-18"><a href="#">Construction Consultant</a></h3>
                                            <p class="desc">Sed sit amet sapien sit amet odio lobortis ullamcorper quis vel nisl. Nam blandit maximus tristique. Vivamus enim quam, tincidunt vel blandit eu, molestie eget arcu.</p>
                                            <div class="link">
                                                <a href="#" class="wprt-button small rounded-3px">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="service-item clearfix text-center">
                                        <div class="thumb"><img src="{{asset('/')}}assets/frontend/assets/img/services/5.jpg" alt="image" /></div>
                                        <div class="service-item-wrap">
                                            <h3 class="title font-size-18"><a href="#">Resconstruction Services</a></h3>
                                            <p class="desc">Sed sit amet sapien sit amet odio lobortis ullamcorper quis vel nisl. Nam blandit maximus tristique. Vivamus enim quam, tincidunt vel blandit eu, molestie eget arcu.</p>
                                            <div class="link">
                                                <a href="#" class="wprt-button small rounded-3px">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="service-item clearfix text-center">
                                        <div class="thumb"><img src="{{asset('/')}}assets/frontend/assets/img/services/6.jpg" alt="image" /></div>
                                        <div class="service-item-wrap">
                                            <h3 class="title font-size-18"><a href="#">Architectural Design</a></h3>
                                            <p class="desc">Sed sit amet sapien sit amet odio lobortis ullamcorper quis vel nisl. Nam blandit maximus tristique. Vivamus enim quam, tincidunt vel blandit eu, molestie eget.</p>
                                            <div class="link">
                                                <a href="#" class="wprt-button small rounded-3px">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- FACTS -->
                    <section id="facts" class="wprt-section parallax">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center accent-type">
                                        <div class="number" data-speed="5000" data-to="1240" data-in-viewport="yes">1240</div>
                                        <div class="text">PROJECT COMPLETED</div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center accent-type has-plus">
                                        <div class="number" data-speed="5000" data-to="1750" data-in-viewport="yes">1750</div>
                                        <div class="text">HAPPY CLIENTS</div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center accent-type">
                                        <div class="number" data-speed="5000" data-to="984" data-in-viewport="yes">984</div>
                                        <div class="text">WORKERS EMPLOYED</div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center accent-type">
                                        <div class="number" data-speed="5000" data-to="96" data-in-viewport="yes">96</div>
                                        <div class="text">AWARDS WON</div>
                                    </div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="103" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- WORKS -->
                    <section id="works" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>

                                    <h2 class="text-center margin-bottom-20">RECENT WORKS</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->

                        <div class="wprt-project" data-layout="grid" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="0" data-gapv="0">
                            <div id="project-filter">

                                <div data-filter="*" class="cbp-filter-item">
                                    <span>All</span>
                                </div>
                                @foreach ($categories as $category)
                                <div data-filter=".{{ \Illuminate\Support\Str::slug($category->name) }}" class="cbp-filter-item">
                                    <span>{{$category->name}}</span>
                                </div>
                                @endforeach
                                
{{-- 
                                <div data-filter=".building" class="cbp-filter-item">
                                    <span>Building</span>
                                </div>
                                <div data-filter=".garden" class="cbp-filter-item">
                                    <span>Garden</span>
                                </div>
                                <div data-filter=".interior" class="cbp-filter-item">
                                    <span>Interior</span>
                                </div>
                                <div data-filter=".office" class="cbp-filter-item">
                                    <span>Office</span>
                                </div>
                                <div data-filter=".workspace" class="cbp-filter-item">
                                    <span>Workspace</span>
                                </div> --}}


                            </div><!-- /#project-filter -->

                            <div id="projects" class="cbp">
                                @forelse ($projects as $project)
                                <div class="cbp-item {{ \Illuminate\Support\Str::slug($project->category->name) }}">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-zoe">
                                                <img src="{{ asset('storage/' . $project->featured_image) }}" alt="{{ $project->title }} - {{ config('app.name', 'Laravel') }}" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="{{ route('project.details', [$project->id, Str::slug($project->title)]) }}"> {{ $project->title }}</a></h2>
                                                        <p>{{$project->type->name}}</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="{{ asset('storage/' . $project->featured_image) }}" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @empty
                    <p class="text-center">No {{$project->type->name}} Project Found</p>
                @endforelse
                                <!--/.cbp-item -->


{{--                                 
                                <div class="cbp-item building office workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="{{asset('/')}}assets/frontend/assets/img/projects/2.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/2-full.html" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item architecture garden interior">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-oscar">
                                                <img src="{{asset('/')}}assets/frontend/assets/img/projects/3.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/3-full.html" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item building interior workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-sadie">
                                                <img src="{{asset('/')}}assets/frontend/assets/img/projects/4.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/4-full.html" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item garden office workspace">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-zoe">
                                                <img src="{{asset('/')}}assets/frontend/assets/img/projects/5.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/5-full.html" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item architecture garden office">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="{{asset('/')}}assets/frontend/assets/img/projects/6.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/6-full.html" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item architecture garden office">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-oscar">
                                                <img src="{{asset('/')}}assets/frontend/assets/img/projects/7.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/7-full.html" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item architecture garden office">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-sadie">
                                                <img src="{{asset('/')}}assets/frontend/assets/img/projects/8.jpg" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="page-project-detail.html">LUXURY BUILDINGS</a></h2>
                                                        <p>Construction</p>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="assets/img/projects/8-full.html" data-title="LUXURY BUILDINGS">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item --> --}}


                            </div><!-- /#projects -->
                        </div><!--/.wprt-project -->
                    </section>

                    <!-- OFFER -->
                    {{-- <section id="features" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                    <h2 class="text-center margin-bottom-20">WHAT WE OFFER</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                    <p class="wprt-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper ut arcu non placerat. Praesent nibh massa varius.</p>
                                    <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-2">
                                    <div class="wprt-icon-text">
                                        <div class="icon">
                                            <i class="icon-o-helmet"></i>
                                        </div>
                                        <h3><a href="#">CONSTRUCTION</a></h3>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div>

                                <div class="col-md-2">
                                    <div class="wprt-icon-text">
                                        <div class="icon">
                                            <i class="icon-o-paint-roller"></i>
                                        </div>
                                        <h3><a href="#">RENOVATION</a></h3>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div>

                                <div class="col-md-2">
                                    <div class="wprt-icon-text">
                                        <div class="icon">
                                            <i class="icon-o-ruler-2"></i>
                                        </div>
                                        <h3><a href="#">CONSULTING</a></h3>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div>

                                <div class="col-md-2">
                                    <div class="wprt-icon-text">
                                        <div class="icon">
                                            <i class="icon-o-tools-1"></i>
                                        </div>
                                        <h3><a href="#">CONSTRUCT</a></h3>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div>

                                <div class="col-md-2">
                                    <div class="wprt-icon-text">
                                        <div class="icon">
                                            <i class="icon-o-drawing-1"></i>
                                        </div>
                                        <h3><a href="#">ARCHITECTURE</a></h3>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div>

                                <div class="col-md-2">
                                    <div class="wprt-icon-text">
                                        <div class="icon">
                                            <i class="icon-o-light-bulb-1"></i>
                                        </div>
                                        <h3><a href="#">ELECTRICAL</a></h3>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="wprt-spacer" data-desktop="118" data-mobi="80" data-smobi="50"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-45">
                                            <span class="dd-icon icon-drill-2"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Prepair Services</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="20"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-tap-1"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Creative Plumbing</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <div class="wprt-spacer" data-desktop="118" data-mobi="30" data-smobi="20"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-paint-roller-1"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Wall Painting</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="20"></div>

                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap font-size-35">
                                            <span class="dd-icon icon-roof"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#">Metal Roofing</a></h3>
                                            <p>Vestibulum eu libero volutpat, portas quam, tempus sem. Donec sodales quam id lorem lobortis, vitae interdum nisl.</p>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="20"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <img src="{{asset('/')}}assets/frontend/assets/img/man.png" alt="image" />
                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section> --}}

                    <!-- PROMOTION -->
                    <section id="promotion" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wprt-spacer" data-desktop="8" data-mobi="0" data-smobi="0"></div>
                                    <h2 class="text-white text-center-mobile font-size-20 margin-bottom-0">Contractors & Construction Managers Since 1981</h2>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-4">
                                    <div class="text-right text-center-mobile"><a href="#" class="wprt-button white rounded-3px">GET A QUOTE</a></div>
                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- TESTIMONIALS -->

                    <section id="testimonials" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                    <h2 class="text-center margin-bottom-20">WHAT OTHER SAY ABOUT US</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                    <p class="wprt-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper ut arcu non placerat. Praesent nibh massa varius.</p>
                                    <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-testimonials style-1 has-bullets bullet-style-1 bullet50" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                        <div id="testimonials-wrap" class="cbp">
                                            @foreach ($testimonials as $testimonial)
                                            <div class="cbp-item">
                                                <div class="customer clearfix">
                                                    <div class="inner">
                                                        @if ($testimonial->photo)
                                                        <div class="image"><img src="{{ asset('storage/' . $testimonial->photo) }}" alt="{{ $testimonial->name }} - {{ config('app.name', 'Laravel') }}" /></div>
                                                        @else
                                                        <div class="image"><img src="{{asset('/')}}assets/frontend/assets/img/testimonials/1.jpg" alt="{{ $testimonial->name }} - {{ config('app.name', 'Laravel') }}" /></div>
                                                        @endif
                                                        <h4 class="name">{{ $testimonial->name }}</h4>
                                                        @if ($testimonial->designation)
                                                        <div class="position">{{ $testimonial->designation }} -
                                                            {{ $testimonial->company }}</div>
                                                        @endif
                                                        <blockquote class="whisper">{{ $testimonial->testimonial }}</blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->

                                          @endforeach

                                        </div><!-- /#service-wrap -->
                                    </div><!-- /.wprt-testimonials -->

                                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                           </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- WHY US-->
                    <section id="why-us" class="wprt-section">
                        <div class="container-fluid no-padding">
                            <div class="row no-margin">
                                <div class="col-md-6 no-padding">
                                    <img src="{{asset('/')}}assets/frontend/assets/img/group.jpg" alt="image">
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6 no-padding">
                                    <div class="wprt-content-box style-2">
                                        <h2 class="margin-bottom-20"> {{ Str::upper($settings->why_choose_us_title) }}</h2>
                                        <div class="wprt-lines style-1 custom-2">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div>
                                        @foreach ($whyChooseUs as $item)
                                        <div class="wprt-toggle bg-white style-1">
                                            <h3 class="toggle-title">{{ $item->title }}</h3>
                                            <div class="toggle-content">{{ $item->description }}</div>
                                        </div>
                                        @endforeach
                                        

                                    </div><!-- /.wprt-content-box -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>

                    <!-- TEAM -->
                    <section id="team" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                    <h2 class="text-center margin-bottom-20">OUR TEAM</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                    <p class="wprt-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet iaculis elit. Nam semper ut arcu non placerat. Praesent nibh massa varius.</p>

                                    <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>

                                    <div class="wprt-team has-bullets bullet-style-1" data-layout="slider" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                        <div id="team-wrap" class="cbp">

                                            @foreach ($teams as $team)
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            @if ($testimonial->photo)
                                                            <div class="inner">
                                                                <img src="{{ asset('storage/' . $team->photo) }}" alt="{{ $team->name }} - {{ config('app.name', 'Laravel') }}" />
                                                            </div>
                                                            @else
                                                            <div class="inner">
                                                                <img src="{{asset('/')}}assets/frontend/assets/img/team/1.jpg" alt="{{ $team->name }} - {{ config('app.name', 'Laravel') }}" />
                                                            </div>
                                                            @endif
                                                             <ul class="socials clearfix">
                                                                @if ($team->twitter_url)
                                                                <li class="twitter"><a target="_blank" href="{{$team->twitter_url}}"><i class="fa fa-twitter"></i></a></li>
                                                                @endif
                                                                @if ($team->email_url)
                                                                <li class="google-plus"><a target="_blank" href="{{$team->email_url}}"><i class="fa fa-google-plus"></i></a></li>
                                                                @endif
                                                                @if ($team->linkedin_url)
                                                                <li class="linkedin"><a target="_blank" href="{{$team->linkedin_url}}"><i class="fa fa-linkedin"></i></a></li>
                                                                @endif
                                                             </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">{{$team->name}}</h4>
                                                            <div class="position">{{$team->designation}} - {{$team->company}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            @endforeach
                                            

                                            
                                        </div><!-- /#team-wrap -->
                                    </div><!-- /.wprt-team -->

                                    <div class="wprt-spacer" data-desktop="70" data-mobi="50" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                           </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- PARTNERS -->
                    <section id="partners" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="50" data-smobi="40"></div>

                                    <div class="wprt-partners">
                                        <div class="owl-carousel">
                                            <div class="partner">
                                                <a target="_blank" href="#"><img src="{{asset('/')}}assets/frontend/assets/img/partners/1.png" alt="image" /></a>
                                            </div>

                                            <div class="partner">
                                                <a target="_blank" href="#"><img src="{{asset('/')}}assets/frontend/assets/img/partners/2.png" alt="image" /></a>
                                            </div>

                                            <div class="partner">
                                                <a target="_blank" href="#"><img src="{{asset('/')}}assets/frontend/assets/img/partners/3.png" alt="image" /></a>
                                            </div>

                                            <div class="partner">
                                                <a target="_blank" href="#"><img src="{{asset('/')}}assets/frontend/assets/img/partners/4.png" alt="image" /></a>
                                            </div>

                                            <div class="partner">
                                                <a target="_blank" href="#"><img src="{{asset('/')}}assets/frontend/assets/img/partners/5.png" alt="image" /></a>
                                            </div>

                                            <div class="partner">
                                                <a target="_blank" href="#"><img src="{{asset('/')}}assets/frontend/assets/img/partners/1.png" alt="image" /></a>
                                            </div>

                                            <div class="partner">
                                                <a target="_blank" href="#"><img src="{{asset('/')}}assets/frontend/assets/img/partners/2.png" alt="image" /></a>
                                            </div>
                                        </div>
                                    </div><!-- /.wprt-partners -->

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="50" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div><!-- /.page-content -->
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
