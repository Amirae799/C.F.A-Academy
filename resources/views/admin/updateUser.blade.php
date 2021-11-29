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
    <div class="d-flex justify-content-between mb-3" style="margin:30px">

        <a href="{{route('admin.allUsers')}}"
             class="btn btn-primary">Back</a>
      </div>
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <div class="card-body p-4 p-md-5">
                <img class="center" src="{{asset('images/logo2.png')}}" style=";height:100px">
              <form class="px-md-2" action="{{route('admin.updateUser',$users->id)}}" method="POST">

@csrf
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif


                <div class="form-outline mb-4">
<p style="text-align: center;color:#ff8b02">update user</p>
                  <label class="form-label" for="form3Example1q">Name</label>
                  <input type="text"  name="name" value="{{$users->name}}" class="form-control" />
                  @error('name')
                  <small class="form-text text-danger">{{$message}}</small>
                  @enderror
                </div>

                  <div class="form-outline mb-4">

                    <label class="form-label" for="form3Example1q">Email</label>
                    <input type="email"  name="email"  value="{{$users->email}}" class="form-control" />
                    @error('email')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                  <div class="form-outline mb-4">

                    <label class="form-label" for="form3Example1q">Password</label>
                    <input type="password"  name="password"  value="{{$users->password}}"  class="form-control" />
                    @error('password')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <label >Roles</label>z
                    <div class="checkbox">

                     <p > <input type="checkbox"  style="margin: 10px;" name="roles[]"
                         value="student" {{$users->hasRole('student')?'checked': ''}}><span> student</span></p>

                    </p>

                    </div>
                    <div class="checkbox">

                      <p > <input type="checkbox" style="margin: 10px;" name="roles[]"
                        value="parent" {{$users->hasRole('parent')?'checked': ''}}><span>parent</span></p>

                    </p>
                    </div>



                </div>


                <button type="submit" class="btn_1">update</button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
