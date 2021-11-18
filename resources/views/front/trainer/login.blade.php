@extends('front.inc.master')
@section('Content')
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;

}
    </style>

    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <section class="h-100 h-custom" >

            <div class="card-body p-4 p-md-5">
                <img class="center" src="{{asset('images/logo2.png')}}" style=";height:100px">

              <form class="px-md-2" action="{{route('trainer.dologin')}}" method="POST">
@csrf
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

                  <div class="form-outline mb-4">

                    <label class="form-label" for="form3Example1q">Email</label>
                    <input type="email" id="form3Example1q" name="email"   placeholder="enter trainer email" class="form-control" />
                    @error('email')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                  <div class="form-outline mb-4">

                    <label class="form-label" for="form3Example1q">Password</label>
                    <input type="password" id="form3Example1q" name="password"   placeholder="enter trainer password" class="form-control" />
                    @error('password')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>



                <button type="submit" class="btn_1">Login</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
