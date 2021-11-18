@extends('front.inc.master')
@section('Content')
 <!-- breadcrumb start-->
 <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Course Details</h2>
                        <p>Home<span>/</span>Course Details</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================ Start Course Details Area =================-->
<section class="course_details_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <div class="main_image">
                    <img class="img-fluid" src="{{asset('images/courses/'.$course->photo)}}" alt="">
                </div>
                <div class="content_wrapper" style="margin-top: 50px">
                  {{!!$course->des !!}}
                </div>
            </div>


            <div class="col-lg-4 right-contents">
                <div class="sidebar_top">

                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="https://technext.github.io/etrain/course-details.html#">
                                <p>Trainer’s Name</p>
                                <span class="color">{{$course->trainer->name}}</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="">
                                <p>Course Fee </p>
                                <span> {{$course->price}}$</span>
                            </a>
                        </li>


                    </ul>

                </div>
<div class="my-5">
      <form class="form-contact contact_form" action="{{route('enroll')}}" method="post" id="contactForm" novalidate="novalidate">
        <div class="row">
            @csrf
          <div class="col-12">
            <div class="form-group">
                  <input type="hidden" name="course_id" value="{{$course->id}}">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control" name="name"  type="text" onfocus="this.placeholder = &#39;&#39;" onblur="this.placeholder = &#39;Enter your name&#39;" placeholder="Enter your name">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control" name="email"  type="email" onfocus="this.placeholder = &#39;&#39;" onblur="this.placeholder = &#39;Enter email address&#39;" placeholder="Enter email address">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <input class="form-control" name="spec"  type="text" onfocus="this.placeholder = &#39;&#39;" onblur="this.placeholder = &#39;Enter Subject&#39;" placeholder="Enter Specailty">
            </div>
          </div>
         
        </div>
        <div class="form-group mt-3">
          <button type="submit" class="button button-contactForm btn_1">Enroll</button>
        </div>
      </form>
</div>
                <div class="content">
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection
