@extends('frontend.layouts.app')

@section('title', 'Project Details Page')

    @push('css')

    @endpush

@section('content')
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">{{ $project->title }} Details</h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="#" title="Construction" rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">{{ $project->title }} Details</span>
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
                                <h4 class="text-center line-height-normal margin-bottom-10">Photo Gallery</h4>
                                <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                            </div><!-- /.col-md-12 -->

                            <div class="col-md-12">
                                <div class="wprt-galleries-grid has-bullets bullet-style-2 bullet30" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="20" data-gapv="20">
                                    <div id="images-wrap" class="cbp">

                                        @if ($project->projectPhotoGallery)
                                        @forelse ($project->projectPhotoGallery as $item)
                                        <div class="cbp-item">
                                            <div class="item-wrap">
                                                <a class="zoom" href="{{ asset('storage/' . $item->photo) }}"><i class="fa fa-arrows-alt"></i></a>
                                                <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $project->title }} - {{ config('app.name', 'Laravel') }}" />
                                            </div>
                                        </div><!--/.cbp-item -->
                                        @empty
                                        <p class="text-start text-4 text-center">No photo found!</p>
                                @endforelse
                                @endif
                                        


                                    </div><!-- /#images-wrap -->
                                </div><!--/.wprt-galleries-grid -->
                            </div><!-- /.col-md-12 -->

                            <div class="col-md-12">
                                <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                            </div><!-- /.col-md-12 -->

                            <div class="col-md-8">
                                <div>
                                    <h4 class="line-height-normal margin-bottom-10">PROJECT DESCRIPTION</h4>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p>{!! $project->details !!}</p>
                                </div>
                            </div><!-- /.col-md-8 -->

                            <div class="col-md-4">
                                <div class="wprt-spacer" data-desktop="0" data-mobi="15" data-smobi="15"></div>

                                <h4 class="line-height-normal margin-bottom-10">PROJECT DETAIL</h4>
                                <div class="wprt-lines style-1 custom-3">
                                    <div class="line-1"></div>
                                    <div class="line-2"></div>
                                </div>

                                <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                <ul class="wprt-list style-2 accent-color margin-bottom-30">
                                    @if ($project->projectSpecification)
                                    @forelse ($project->projectSpecification as $item)
                                    <li><strong>{{ $item->specification->title }}:</strong> {{ $item->value }}</li>
                                    @empty
                                    <p class="text-start text-4 text-center">No specification found!</p>
                            @endforelse
                            @endif
                                </ul>

                                {{-- <a href="#" class="wprt-button small rounded-3px">LIVE PREVIEW</a> --}}
                            </div><!-- /.col-md-4 -->

                            <div class="col-md-12">
                                <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                            </div><!-- /.col-md-12 -->
                        </div>
                    </div>
                </section>

                <section>
                    <div class="row">
                        <div class="col-md-6">
                            {!! $project->project_location_map !!}
                        </div>
                        <div style="padding: 50px 50px;" class="col-md-6">
                            <h3>Contact Information</h3>
                            <table>
                                <tr>
                                    <td width="25%"><strong>Address 1</strong></td>
                                    <td>: {{ $project->address_1 }}</td>
                                </tr>
                                <tr>
                                    <td width="25%"><strong>Address 2</strong></td>
                                    <td>: {{ $project->address_2 }}</td>
                                </tr>
                                <tr>
                                    <td width="25%"><strong>District</strong></td>
                                    <td>: {{ $project->district }}</td>
                                </tr>
                                <tr>
                                    <td width="25%"><strong>Police Station</strong></td>
                                    <td>: {{ $project->police_station }}</td>
                                </tr>
                                <tr>
                                    <td width="25%"><strong>Zip Code</strong></td>
                                    <td>: {{ $project->zip_code }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
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
