@extends('frontend.layouts.app')

@section('title', 'Contact Us Page')

    @push('css')

    @endpush

@section('content')

    <!-- Featured Title -->
<div style="background: url({{ asset('storage/' . $settings->breadcrub_image) }})" id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Contact US</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{route('home')}}"  rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Contact US</span>
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
                    <div >
                        <div class="row">
                           
                                {!! $settings->office_location_map !!}
                           
                           
                        </div>
                       
                    </div>
                    <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center margin-bottom-20">{{ Str::upper($settings->contact_us_title) }}</h2>
                                <div class="wprt-lines style-2 custom-1">
                                    <div class="line-1"></div>
                                </div>

                                <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                <p class="wprt-subtitle">{{ $settings->contact_us_sub_title }}</p>
                                <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                            </div><!-- /.col-md-12 -->

                            <div class="col-md-4">
                                <h5>Address</h5>
                                <p>{{ $settings->company_address }}</p>

                                <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                <h5>Phone number</h5>
                                <p> {{ $settings->mobile }}</p>

                                <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                <h5>E-mail address</h5>
                                <p> <a style="color: black" href="mailto:info@firstoilksa.com">{{ $settings->email }}</a></p>

                                <div class="wprt-spacer" data-desktop="0" data-mobi="10" data-smobi="10"></div>
                            </div><!-- /.col-md-4 -->

                            <div class="col-md-8">
                                <form class="wprt-contact-form" action="{{ route('contact.us.store') }}" method="POST"
                                novalidate="novalidate">
                                @csrf
                                @if (session('message'))
                                    <div class="alert alert-success">
                                        {!! session('message') !!}
                                    </div>
                                @endif
                                    <div class="inner">
                                        <div class="left-side">
                                            <div class="input-wrap">
                                                <label class="mb-1 text-2">Full Name</label>
                                                <input type="text" value="{{ old('name') }}" maxlength="100"
                                                    class="form-control text-3 h-auto py-2 @error('name') is-invalid @enderror" name="name"
                                                    required="">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="input-wrap">
                                                <label class="mb-1 text-2">Email Address</label>
                                <input type="email" value="{{ old('email') }}" maxlength="100"
                                    class="form-control text-3 h-auto py-2 @error('email') is-invalid @enderror"
                                    name="email" required="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                            <div class="input-wrap">
                                                <label class="mb-1 text-2">Mobile</label>
                                <input type="text" value="{{ old('contact_number') }}" maxlength="100"
                                    class="@error('contact_number') is-invalid @enderror form-control text-3 h-auto py-2"
                                    name="contact_number" required="">
                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                            <div class="input-wrap">
                                                <label class="mb-1 text-2">Subject</label>
                                <input type="text" value="{{ old('subject') }}" maxlength="100"
                                    class="form-control text-3 h-auto py-2" name="subject" required="">
                                            </div>
                                            <div class="message-wrap">
                                                <label class="mb-1 text-2">Message</label>
                                <textarea maxlength="5000" rows="5"
                                    class="form-control text-3 h-auto py-2 @error('message') is-invalid @enderror"
                                    name="message" required="">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
                                            <div class="send-wrap">
                                                <input type="submit" value="SEND MESSAGE" id="submit" name="submit" class="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form><!-- /.wprt-contact-form -->
                            </div><!-- /.col-md-8 -->

                            <div class="col-md-12">
                                <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
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

@endpush
