@extends('layout.post')
@section('content')
<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Yves Kalume</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="{{route('home.index')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>{{$article->title}}</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post-box">
                    <div class="post-thumb">
                        <img src="/storage/{{$article->image}}" class="img-fluid" alt="">
                    </div>
                    <div class="post-meta">
                        <h1 class="article-title">{{$article->title}}</h1>
                        <ul>
                            <li>
                                <span class="ion-ios-person"></span>
                                <a href="#">{{$article->user->name}}</a>
                            </li>
                            <li>
                                <span class="ion-pricetag"></span>
                                <a href="#">{{$article->category->name}}</a>
                            </li>
                            <li>
                                <span class="fa fa-clock-o"></span>
                                <a href="#">{{ \Carbon\Carbon::parse($article->created_at)->diffForHumans()}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="article-content">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget-sidebar sidebar-search">
                    <h5 class="sidebar-title">Search</h5>
                    <div class="sidebar-content">
                        <form action="{{route('article.search')}}" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search for..." aria-label="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary btn-search" type="submit">
                                        <span class="ion-android-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="widget-sidebar">
                    <h5 class="sidebar-title">Recent Post</h5>
                    <div class="sidebar-content">
                        <ul class="list-sidebar">
                            @foreach($recentArticles as $article)
                            <li>
                                <a href="{{route('article.show',compact('article'))}}">{{$article->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Section Blog-Single End /-->

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
</section>
<!--/ Section Contact-footer End /-->
@endsection
