@extends('front.inc.master1')
@section('Content')
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;

}
    </style>
<section class="h-100 h-custom" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="d-flex justify-content-between mb-3">

                <a href="{{route('admin.allUsers')}}"
                     class="btn btn-primary">Back </a>
              </div>
          <div class="card rounded-3">
            <div class="card-body p-4 p-md-5">
                <img class="center" src="{{asset('images/logo2.png')}}" style=";height:100px">
<p style="text-align: center;color:#ff8b02"> Add New User</p>

              <form class="px-md-2" action="{{route('admin.saveUser')}}" method="POST">
@csrf
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
                <div class="form-outline mb-4">

                  <label class="form-label" for="form3Example1q">Name</label>
                  <input type="text" id="form3Example1q" name="name" placeholder="enter user name" class="form-control" />
                  @error('name')
                  <small class="form-text text-danger">{{$message}}</small>
                  @enderror
                </div>

                  <div class="form-outline mb-4">

                    <label class="form-label" for="form3Example1q">Email</label>
                    <input type="email" id="form3Example1q" name="email"   placeholder="enter user email" class="form-control" />
                    @error('email')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                  <div class="form-outline mb-4">

                    <label class="form-label" for="form3Example1q">Password</label>
                    <input type="password" id="form3Example1q" name="password"   placeholder="enter user password" class="form-control" />
                    @error('password')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <div class="form-group">
                        <label >Roles</label>
                      <div class="checkbox">
                       <p> <input type="checkbox"  style="margin: 10px" name="roles[]"  value="student" >

                        <span>student</span></p>

                      </p>
                      </div>
                      <div class="checkbox">

                        <p> <input type="checkbox" style="margin: 10px" name="roles[]"  value="parent">
                            <span> parent</span></p>

                      </p>
                      </div>

                </div>


                <button type="submit" class="btn_1">Add</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
