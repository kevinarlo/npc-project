@extends('layouts.default')
@section('title', 'Home')

@section('content')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area owl-carousel">
    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/1.jpg' }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <a href="#"  data-animation="fadeInUp" data-delay="300ms"></a>
                        <a href="#"  data-animation="bounceIn" data-delay="500ms"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/2.jpg' }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                        </div>
                        <a href="#"  data-animation="fadeInUp" data-delay="300ms"></a>
                        <a href="#"  data-animation="bounceIn" data-delay="500ms"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/3.jpg' }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                        </div>
                        <a href="#"  data-animation="fadeInUp" data-delay="300ms"></a>
                        <a href="#"  data-animation="bounceIn" data-delay="500ms"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/4.jpg' }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                        </div>
                        <a href="#"  data-animation="fadeInUp" data-delay="300ms"></a>
                        <a href="#"  data-animation="bounceIn" data-delay="500ms"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/5.jpg' }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                        </div>
                        <a href="#"  data-animation="fadeInUp" data-delay="300ms"></a>
                        <a href="#"  data-animation="bounceIn" data-delay="500ms"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Blog Post -->
    <div class="hero-blog-post bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/6.jpg' }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Post Contetnt -->
                    <div class="post-content text-center">
                        <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                        </div>
                        <a href="#"  data-animation="fadeInUp" data-delay="300ms"></a>
                        <a href="#"  data-animation="bounceIn" data-delay="500ms"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Mag Posts Area Start ##### -->
<section class="mag-posts-area d-flex flex-wrap">

    <!-- >>>>>>>>>>>>>>>>>>>>
        Post Left Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>BERITA TERBARU</h5>
            </div>
            <!-- Single Blog Post -->
            @foreach ($items as $item)
            <div class="single-blog-post d-flex">
                <div class="post-thumbnail">
                    <img src="{{ $item->photo ? Storage::url($item->photo) : '' }}">
                </div>
                <div class="post-content">
                    <a href="{{ route('artikel', $item->slug) }}" class="post-title">{{ $item->title }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
            Main Posts Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
        <!-- Trending Now Posts Area -->
        <div class="trending-now-posts mb-10">
            <div class="trending-post-slides owl-carousel">
            </div>
        </div>

        <!-- Feature Video Posts Area -->
        <div class="feature-video-posts mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <h5>BERITA</h5>
            </div>

            <div class="featured-video-posts">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <!-- Single Featured Post -->
                        <div class="single-featured-post">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="{{ route('artikel', $item->slug) }}">
                                <img src="{{ $item->photo ? Storage::url($item->photo) : '' }}" alt=""></a>
                            </div>
                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#">{{ $item->created_at->isoFormat('D MMMM Y') }}</a>
                                </div>
                                <a href="{{ route('artikel', $item->slug) }}" class="post-title">{{ $item->title }}
                                <p>{!! Str::limit($item->body, 60, '') !!}</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5">
                        <!-- Featured Video Posts Slide -->
                        <div class="featured-video-posts-slide owl-carousel">

                            <div class="single--slide">
                                @foreach ($lates as $late)
                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="{{ $late->photo ? Storage::url($late->photo) : '' }}">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{route('artikel', $late->slug)}}" class="post-title">{{ $late->title }}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="single--slide">
                                @foreach ($randoms as $random)
                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex style-3">
                                    <div class="post-thumbnail">
                                        <img src="{{ $random->photo ? Storage::url($random->photo) : '' }}">
                                    </div>
                                    <div class="post-content">
                                        <a href="{{route('artikel', $random->slug)}}" class="post-title">{{ ($random->title) }}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Most Viewed Videos -->
        <div class="most-viewed-videos mb-30">
            <!-- Section Title -->
            <div class="section-heading">
                <a href="{{ route('foto') }}"><h5>FOTO TERBARU</h5></a>
            </div>

            <div class="most-viewed-videos-slide owl-carousel">

                @foreach ($photos as $item)
                <!-- Single Blog Post -->
                <div class="single-blog-post style-4">
                    <div class="post-thumbnail">
                        <a href="{{ Storage::url($item->foto) }}" data-lightbox="roadtrip">
                        <img src="{{ Storage::url($item->foto) }}" style=" height: 200px; width: 250px;"></a>
                    </div>
                </div>
                @endforeach
            </div>

            <br><br>
            <div class="row">
                <!-- Read More -->
                <div class="col-12 col-lg-6">
                    <a href="{{ route('foto') }}" class="post-title"><b>READ MORE</b></a>
                </div>
            </div>
        </div>

        <!-- Sports Videos -->
        <div class="sports-videos-area">
            <!-- Section Title -->
            <div class="section-heading">
                <a href="{{ route('video') }}"><h5>VIDEO TERBARU</h5></a>
            </div>

            <div class="sports-videos-slides owl-carousel mb-30">

                @foreach ($videos as $item)
                <!-- Single Featured Post -->
                <div class="single-featured-post">
                    <!-- Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <video width="550" controls>
                        <source src="{{ Storage::url($item->video) }}">
                    </video>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <!-- Read More -->
                <div class="col-12 col-lg-6">
                    <a href="{{ route('video') }}" class="post-title"><b>READ MORE</b></a>
                </div>
            </div>
        </div>
    </div>

    <!-- >>>>>>>>>>>>>>>>>>>>
        Post Right Sidebar Area
    <<<<<<<<<<<<<<<<<<<<< -->
    <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
        <!-- Sidebar Widget -->
        <div class="single-sidebar-widget p-30">
            <!-- Social Followers Info -->
            <div class="social-followers-info">
                <!-- Instagram -->
                <a href="https://www.instagram.com/npcikabupatenbekasi/" target="_blank" rel="nofollow" class="instagram-followers"><i class="fa fa-instagram"></i>Instagram</a>
                <!-- Facebook -->
                <a href="https://www.facebook.com/NPC-Kabupaten-Bekasi-106726301325019" target="_blank" rel="nofollow" class="facebook-fans"><i class="fa fa-facebook"></i>Facebook</a>
                <!-- Twitter -->
                <a href="https://twitter.com/NPCIKabBekasi" target="_blank" rel="nofollow" class="twitter-followers"><i class="fa fa-twitter"></i>Twitter</a>
                <!-- YouTube -->
                <a href="https://www.youtube.com/channel/UCLpp840IBTVFUbzVr2L5Nyw?guided_help_flow=5" target="_blank" rel="nofollow" class="youtube-subscribers"><i class="fa fa-youtube"></i>YouTube</a>
                <!-- Google -->
                <a href="mailto:npckabupatenbekasi@gmail.com?" target="_blank" rel="nofollow" class="google-followers"><i class="fa fa-google"></i>Gmail</a>
            </div>
        </div>
    </div>
</section>
<!-- ##### Mag Posts Area End ##### -->
@endsection
