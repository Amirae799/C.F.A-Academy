@extends('front.inc.master')
@section('Content')
<div>
     <!-- banner part start-->
     <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Every child yearns to learn Programming</h5>
                            <h1>Making Your Childs
                                World Better With us.</h1>
                            <p>These days, more and more parents are looking for apps, resources, and coding programs for kids.
                                 Teaching children how to code is not an easy task, since programming requires effort and a lot of perseverance.
                                  Therefore, the most important thing is to get children and adolescents to see programming as a fun activity.
                                  We have to awaken their interest and the best way to do it
                                at these ages is through gamification, which allows us to turn learning into a playful activity.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource" >
                    <img src="{{asset('images/courses/'.$c->photo)}}"   style="width: 100%;height:70%">
                    <div class="special_cource_text">
                        <a href="" class="btn_4">{{$c->cat->name}}</a>
                        <h4>{{$c->price}} $</h4>
                        <a href=""><h3>{{$c->name}}</h3></a>
                        <p>{{$c->small_des}}</p>
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
  <!-- member_counter counter start -->
  <section class="member_counter" style="margin-top: 20px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{$Trainers_count}}</span>
                    <h4>Trainers</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{$Courses_count}}</span>
                    <h4>Courses</h4>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{$Students_count}}</span>
                    <h4>Students</h4>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- member_counter counter end -->

    </div>
</section>
    </div>


@endsection

