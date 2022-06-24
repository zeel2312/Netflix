@extends('layouts.app')
@section('title','Blog')
@section('content')

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="app/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">News Update</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="blog-area blog-bg" data-background="app/img/bg/blog_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="{{ route('blog.blogDetails') }}"><img src="app/img/blog/blog_thumb01.jpg" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                            <h2 class="title"><a href="blog-details.html">Your Free Movie Streaming Purposes</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun
                                labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exesa
                                commodo consequat. Duis aute
                                irure dolor in reprehend .</p>
                            <div class="blog-post-meta">
                                <ul>
                                    <li><i class="far fa-user"></i> by <a href="#">Admin</a></li>
                                    <li><i class="far fa-thumbs-up"></i> 63</li>
                                    <li><i class="far fa-comments"></i><a href="#">12 Comments</a></li>
                                </ul>
                                <div class="read-more">
                                    <a href="blog-details.html">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="app/img/blog/blog_thumb02.jpg" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                            <h2 class="title"><a href="blog-details.html">Where watch English movies free?</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun
                                labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exesa
                                commodo consequat. Duis aute
                                irure dolor in reprehend .</p>
                            <div class="blog-post-meta">
                                <ul>
                                    <li><i class="far fa-user"></i> by <a href="#">Admin</a></li>
                                    <li><i class="far fa-thumbs-up"></i> 63</li>
                                    <li><i class="far fa-comments"></i><a href="#">12 Comments</a></li>
                                </ul>
                                <div class="read-more">
                                    <a href="blog-details.html">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-item">
                        <div class="blog-post-thumb">
                            <a href="blog-details.html"><img src="app/img/blog/blog_thumb03.jpg" alt=""></a>
                        </div>
                        <div class="blog-post-content">
                            <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                            <h2 class="title"><a href="blog-details.html">House movie to is streaming website?</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun
                                labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exesa
                                commodo consequat. Duis aute
                                irure dolor in reprehend .</p>
                            <div class="blog-post-meta">
                                <ul>
                                    <li><i class="far fa-user"></i> by <a href="#">Admin</a></li>
                                    <li><i class="far fa-thumbs-up"></i> 63</li>
                                    <li><i class="far fa-comments"></i><a href="#">12 Comments</a></li>
                                </ul>
                                <div class="read-more">
                                    <a href="blog-details.html">Read More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrap mt-60">
                        <nav>
                            <ul>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="blog-sidebar">
                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Search Objects</h5>
                            </div>
                            <form action="#" class="sidebar-search">
                                <input type="text" placeholder="Search...">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Categories</h5>
                            </div>
                            <div class="sidebar-cat">
                                <ul>
                                    <li><a href="#">Movies</a> <span>12</span></li>
                                    <li><a href="#">Action Movies</a> <span>10</span></li>
                                    <li><a href="#">Streaming</a> <span>9</span></li>
                                    <li><a href="#">Download</a> <span>16</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Recent Posts</h5>
                            </div>
                            <div class="rc-post">
                                <ul>
                                    <li class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img src="app/img/blog/rc_post_thumb01.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="blog-details.html">Express Management Effective</a></h5>
                                            <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                        </div>
                                    </li>
                                    <li class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img src="app/img/blog/rc_post_thumb02.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="blog-details.html">Where watch English movies free?</a></h5>
                                            <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                        </div>
                                    </li>
                                    <li class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img src="app/img/blog/rc_post_thumb03.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="blog-details.html">House movie streaming website</a></h5>
                                            <span class="date"><i class="far fa-clock"></i> 10 Mar 2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Tag Post</h5>
                            </div>
                            <div class="tag-list">
                                <ul>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Romantic</a></li>
                                    <li><a href="#">Who</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Blending</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

</main>
<!-- main-area-end -->
@endsection