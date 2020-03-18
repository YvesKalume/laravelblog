@extends('layout.post')

@section('content')
<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url(/img/yves.png)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="intro-title mb-4">I am Yves Kalume</h1>
                <p class="intro-subtitle"><span class="text-slider-items">Laravel Developer, Mobile Dev Student</span><strong class="text-slider"></strong></p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<!--/ Section Blog Star /-->
<section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($articles as $article)
            <div class="col-md-4">
                <div class="card card-blog">
                    <div class="card-img">
                        <a href="{{route('article.show',compact('article'))}}"><img src="/storage/{{$article->image}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="card-body">
                        <div class="card-category-box">
                            <div class="card-category">
                                <h6 class="category">{{$article->category->name}}</h6>
                            </div>
                        </div>
                        <h3 class="card-title"><a href="{{route('article.show',compact('article'))}}">{{$article->title}}</a></h3>
                        <p class="card-description">
                            {!! Str::limit($article->content,140,' ...')  !!}
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="post-author">
                                <img src="/storage/{{$article->user->avatar}}" alt="" class="avatar rounded-circle">
                                <span class="author">{{$article->user->name}}</span>
                        </div>
                        <div class="post-date">
                            <span class="ion-ios-clock-outline"></span> {{\Carbon\Carbon::parse($article->created_at)->diffForHumans()}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$articles->links()}}
    </div>
</section>
<!--/ Section Blog End /-->

<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>Yves Kalume</strong>. Free Of Use</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
