@extends('front.inc.master1')
@section('Content')
<div class="container-login"  style="margin:150px">
<h4>All Categories</h4>
    <table class="table table-hover" style="margin-bottom:230px;">
        <thead>
        <tr style="color:#ae1c17 ">
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">operation</th>

        </tr>
        </thead>
        <tbody>


          @foreach($cats as $cat)
          <tr>
              <th scope="row">{{$cat -> id}}</th>
              <td>{{$cat -> name}}</td>
              <td>
                  <button class="btn btn-sm">Edit</button>
                  <button class="btn btn-danger">Delete</button>
              </td>










          </tr>
        @endforeach

        </tbody>


        </table>
        </div>


@endsection
