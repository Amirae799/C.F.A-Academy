@extends('front.inc.master1')
@section('Content')
<div class="container-login"  style="margin:100px">
</tbody>
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

<div class="d-flex justify-content-between mb-3">
<h4>All Courses</h4>
  <a href="{{route('admin.addCourse')}}"
       class="btn btn-primary">Add New Course </a>
</div>


    <table class="table table-hover" >
        <thead>
        <tr style="color:#ae1c17 ">
          <th scope="col">#</th>
          <th scope="col">Name</th>



         <th scope="col" >price</th>
         <th scope="col" >photo</th>
          <th scope="col">operation</th>

        </tr>
        </thead>
        <tbody>


          @foreach($courses as $c)
          <tr>
              <th scope="row">{{$c -> id}}</th>
              <td>{{$c -> name}}</td>
              <td>{{$c -> price}}</td>
              <td>{{$c -> photo}}</td>
              <td>
                  <button class="btn btn-success">Update</button>

                  <button class="btn btn-danger" >Delete</button>
              </td>










          </tr>
        @endforeach

        </tbody>


        </table>
        </div>


@endsection
