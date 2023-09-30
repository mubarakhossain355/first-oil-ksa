@extends('frontend.layouts.app')

@section('title', $title . ' Page')

    @push('css')

    @endpush

@section('content')
     <!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">{{ $title }} </h1>
            </div>
            <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="breadcrumb-trail">
                        <a href="{{route('home')}}"  rel="home" class="trail-begin">Home</a>
                        <span class="sep">/</span>
                        <span class="trail-end">Media</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="content-wrap" class="container">
    <div id="site-content-blog" class="site-content clearfix">
        <div id="inner-content" class="inner-content-wrap">

            @forelse ($media as $medium)
                <article class="hentry">
                    <div class="post-media clearfix">
                        <a href="{{ route(Str::lower($title) . '.details', [$medium->id, Str::slug($medium->title)]) }}"><img src="{{ asset('storage/' . $medium->photo) }}" alt="{{ $title }} - {{ config('app.name', 'Laravel') }}"></a>
                    </div><!-- /.post-media -->

                    <div class="post-content-wrap">
                        <h2 class="post-title">
                            <span class="post-title-inner">
                                <a href="{{ route(Str::lower($title) . '.details', [$medium->id, Str::slug($medium->title)]) }}"> {{ $medium->title }}</a>
                            </span>
                        </h2><!-- /.post-title -->

                        <div class="post-meta style-3">
                            <div class="post-meta-content">
                                <div class="post-meta-content-inner">
                                    

                                    <span class="post-date item">
                                        <span class="inner"><span class="entry-date">{{date('M-d-y',strtotime($medium->published_date))}}</span></span>
                                    </span>

                                    
                                    
                                </div>
                            </div>
                        </div><!-- /.post-meta -->

                        <div class="post-content post-excerpt">
                            <p>{{$medium->short_description}}</p>
                        </div><!-- /.post-excerpt -->

                        <div class="post-read-more">
                            <div class="post-link">
                                <a href="{{ route(Str::lower($title) . '.details', [$medium->id, Str::slug($medium->title)]) }}">Read More</a>
                            </div>
                        </div><!-- /.post-read-more -->
                    </div><!-- /.post-content-wrap -->
                </article>

            @empty
                <h5 class="text-center mt-5">No {{ $title }} found!</h5>
            @endforelse

            
        </div><!-- /.inner-content-wrap -->
    </div><!-- /#site-content -->

    <div id="sidebar">
        <div id="inner-sidebar" class="inner-content-wrap">
           
            <div class="widget widget_recent_news">
                <h2 class="widget-title"><span>Lastest Media</span></h2>
                <ul class="recent-news clearfix">
                    @foreach ($media as $medium)
                    <li class="clearfix">
                        <div class="thumb">
                            <img width="150" height="150" src="{{ asset('storage/' . $medium->photo) }}" alt="{{ $title }} - {{ config('app.name', 'Laravel') }}">
                        </div><!-- /.thumb -->

                        <div class="texts">
                            <h3><a href="{{ route(Str::lower($title) . '.details', [$medium->id, Str::slug($medium->title)]) }}">{{$medium->title}}</a></h3>
                            <span class="post-date"><span class="entry-date">{{date('M-d-y',strtotime($medium->published_date))}}</span></span>
                        </div><!-- /.texts -->
                    </li>

                    @endforeach
                    
                   
                    

                </ul>
            </div>

           
        </div><!-- /#inner-sidebar -->
    </div><!-- /#sidebar -->
</div><!-- /#content-wrap -->
@endsection

@push('script')

@endpush
