@extends('frontend.layouts.app')

@section('title', 'Project Page')

@push('css')
@endpush

@section('content')
    <!-- Featured Title -->
    <div style="background: url({{ asset('storage/' . $settings->breadcrub_image) }})" id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">Projects</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="#" title="Construction" rel="home" class="trail-begin">Home</a>
                            <span class="sep">/</span>
                            <span class="trail-end">Projects</span>
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
                                        <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>

                                        <h2 class="text-center margin-bottom-20">RECENT WORKS</h2>
                                        <div class="wprt-lines style-2 custom-1">
                                            <div class="line-1"></div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->

                            <div class="wprt-project" data-layout="grid" data-column="4" data-column2="3" data-column3="2"
                                data-column4="1" data-gaph="0" data-gapv="0">
                                <div id="project-filter">
                                    <div data-filter="*" class="cbp-filter-item">
                                        <span>All</span>
                                    </div>
                                    @foreach ($categories as $category)
                                        <div data-filter=".{{ \Illuminate\Support\Str::slug($category->name) }}"
                                            class="cbp-filter-item">
                                            <span>{{ $category->name }}</span>
                                        </div>
                                    @endforeach

                                </div><!-- /#project-filter -->



                                <div id="projects" class="cbp">
                                    @forelse ($projects as $project)
                                        <div class="cbp-item {{ \Illuminate\Support\Str::slug($project->category->name) }}">
                                            <div class="project-item">
                                                <div class="inner">
                                                    <div class="grid">
                                                        <figure class="effect-zoe">
                                                            <img src="{{ asset('storage/' . $project->featured_image) }}"
                                                                alt="{{ $project->title }} - {{ config('app.name', 'Laravel') }}" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a target="_blank"
                                                                            href="{{ route('project.details', [$project->id, Str::slug($project->title)]) }}">
                                                                            {{ $project->title }}</a></h2>
                                                                    <p>{{ $project->type->name }}</p>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </div>

                                                    <a class="project-zoom cbp-lightbox"
                                                        href="{{ asset('storage/' . $project->featured_image) }}"
                                                        data-title="LUXURY BUILDINGS">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p class="text-center">No {{ $type->name }} Project Found</p>
                                    @endforelse
                                    <!--/.cbp-item -->



                                </div><!-- /#projects -->



                            </div><!-- /#projects -->
                </div><!--/.wprt-project -->
                </section>
                
                </section>
            </div>
        </div>
    </div>
    


@endsection


@push('script')
@endpush
