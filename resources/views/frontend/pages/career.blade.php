@extends('frontend.layouts.app')

@section('title', 'Career')

@push('css')
@endpush

@section('content')
    <!-- Featured Title -->
    <div style="background: url({{ asset('storage/' . $settings->breadcrub_image) }})" id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">Career</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{ route('home') }}" rel="home" class="trail-begin">Home</a>
                            <span class="sep">/</span>
                            <span class="trail-end">Career</span>
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
                        <!-- WORKS -->
                        <section id="works" class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="text-danger mb-3">Career Oprtunities</h2>

                                        <h6>We have our recruitment team travelling all around the globe in search of the
                                            perfect candidates who can fit in to our job culture. We have a diverse culture
                                            of employees working with us in support services and own projects. Our cultural
                                            diversity includes our employees from Saudi Arabia, India, Pakistan, Bangladesh,
                                            Philippines, Nepal, Sri Lanka, Egypt, Jordan, Lebanon, Sudan, and African
                                            countries. We have our own recruitment agents to help us in selecting peoples
                                            from different countries. The individual applications of job that we receive
                                            will be directed to our authorized agents in respective countries.</h6>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>

                                        <h2 class="text-center margin-bottom-20">Open Postion</h2>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <div class="table-responsive table-bordered">
                                            @if(count($careers)>0)
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>SL</th>
                                                        <th>Job Title</th>
                                                        <th>Job Code</th>
                                                        <th>Experience</th>
                                                        <th>Details</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    @foreach ($careers as $career)
                                                        <tr>
                                                            <td style="width: 5%;overflow-y: hidden">{{ $loop->iteration }}
                                                            </td>
                                                            <td style="width: 23%;overflow-y: hidden">
                                                                {{ $career->job_title }}</td>
                                                            <td style="width: 23%;overflow-y: hidden">
                                                                {{ $career->job_code }}</td>
                                                            <td style="width: 20%;overflow-y: hidden">
                                                                {{ $career->experience }}</td>
                                                            <td style="width: 31%;overflow-y: hidden"><a
                                                                    class="btn btn-sm btn-danger"
                                                                    href="{{ route('career.details', [$career->id, Str::slug($career->job_title)]) }}">Details</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                            @else
                                                <h6 class="text-center">No position is open now</h6>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                        <h6>If you are eligible for the above listed jobs please send us your CV at <span
                                                class="text-danger"><a
                                                    href="mailto:career@firstoilksa.com">career@firstoilksa.com</a></span>
                                            with the job code.</h6>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                        <h2 class="margin-bottom-20 text-danger">Send Us Email</h2>

                                    </div>
                                    <div class="row">
                                        <form action="{{ route('career.contact.store') }}" method="POST"
                                        novalidate="novalidate">
                                        @csrf
                                            @if (session('message'))
                                                <div class="alert alert-success">
                                                    {!! session('message') !!}
                                                </div>
                                             @endif
                                            <div class="col-md-6">
                                            
                                                <div class="form-group">
                                                    <label for="nameID">Name<sup>*</sup></label>
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="nameID">
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                    <div class="form-group">
                                                        <label for="emailID">Email<sup>*</sup></label>
                                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="emailID">
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="contactID">Contact Number<sup>*</sup></label>
                                                        <input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror" value="{{ old('contact_number') }}" id="contactID">
                                                            @error('contact_number')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>




                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="subjectID">Subject<sup>*</sup></label>
                                                    <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" id="subjectID">
                                                        @error('subject')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col">
                                                    <label class="mb-1 text-2">Message<sup>*</sup></label>
                                                    <textarea maxlength="5000" rows="5" class="@error('message') is-invalid @enderror form-control text-3 h-auto py-2"
                                                        name="message" required="">{{ old('message') }}</textarea>
                                                    @error('message')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>


                                        </form>
                                    </div>


                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>
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
