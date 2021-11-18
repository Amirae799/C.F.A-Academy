@extends('front.inc.master')
@section('Content')

  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Our Courses</h2>
                        <p>Home<span>/</span>Courses<span>/</span>Category<span>/</span>{{$cat->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--::review_part start::-->
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>popular courses</p>
                    <h2>Special Courses</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $c )
            <div class="col-sm-6 col-lg-4 mb-5">
                <div class="single_special_cource">
                    <img src="{{asset('images/courses/'.$c->photo)}}" class="special_img" alt="">
                    <div class="special_cource_text">
                        <a href="{{url('/cat/'.$c->cat->id)}}" class="btn_4">{{$c->cat->name}}</a>
                        <h4>{{$c->price}} $</h4>
                        <a href="{{url('/course/'.$c->id)}}"><h3>{{$c->name}}</h3></a>
                        <p >{{$c->small_des}}</p>
                        <div class="author_info">
                            <div class="author_img">
                                <img src="{{asset('images/trainers/'.$c->trainer->photo)}}" alt="" style="width:40%">
                                <div class="author_info_text">
                                    <p>Conduct by:</p>
                                    <h5><a href="">{{$c->name}}</a></h5>
                                </div>
                            </div>


                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

    </div>
</section>
@endsection

