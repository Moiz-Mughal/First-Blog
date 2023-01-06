@extends('layouts.master')
@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
<div class="bg_color">
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="row justify-content-center">
       
          <div class="col-lg-11">
     
        <div class="owl-banner owl-carousel">
        @foreach ($student as $item)
          <div class="item">
            <img src="{{ asset('uploads/students/'.$item->profile_image) }}" width="100%" height="500px" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>{{ $item->name }}</span>
                </div>
                <a href=""><h4>{{ $item->title }}</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">{{$item->created_at}}</a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
        
        
        @endforeach
      </div>
      </div>
    </div>
      </div>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
              @foreach ($student as $item)
                <div class="col-lg-9">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ asset('uploads/students/'.$item->profile_image) }}" width="100%" height="300px" alt="">
                    </div>
                    <div class="down-content">
                      <span>{{ $item->name }}</span>
                      <a href="{{route('postdetails',$item->id)}}"><h4>{{ $item->title }}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">{{$item->created_at}}</a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <p>{{ $item->description }}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Beauty</a>,</li>
                              <li><a href="#">Nature</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                


                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>

               
                <div class="col-lg-12">
               
                  <div class="sidebar-item recent-posts">
                  
                    <div class="sidebar-heading">
                  
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                    @foreach ($student as $item)
                      <ul>
                        <li><a href="">
                          <h5>{{ $item->title }}</h5>
                       
                          <span>{{$item->created_at}}</span>
                        </a></li>
                      
                      </ul>
                      @endforeach
                    </div>
                  </div>
                
                </div>
              
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    
                    <div class="content">
                    @foreach ($category as $item)
                      <ul>
                     
                        <li><a href="#">-{{ $item->name }}</a></li>
                        <!-- <li><a href="#">- Awesome Layouts</a></li>
                        <li><a href="#">- Creative Ideas</a></li>
                        <li><a href="#">- Responsive Templates</a></li>
                        <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                        <li><a href="#">- Creative &amp; Unique</a></li> -->
                    
                      </ul>
                      @endforeach
                    </div>
                   
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">PSD</a></li>
                        <li><a href="#">Responsive</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
    
    

@endsection