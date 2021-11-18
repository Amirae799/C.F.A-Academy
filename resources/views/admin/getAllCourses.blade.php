@extends('front.inc.master1')
@section('Content')
<div class="container-login"  style="margin-top:150px">
<h4>All Courses     <button style="margin-left:1500px" class="btn btn-primary">Add </button>
</h4>

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
