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

  <a href=""
       class="btn btn-primary">Add </a>
</div>

    <table class="table table-hover" >
        <thead>
        <tr style="color:#ae1c17 ">
          <th scope="col">#</th>
          <th scope="col">Name</th>



         <th scope="col" >Display_Name</th>
         <th scope="col" >Description</th>

          <th scope="col">operation</th>

        </tr>
        </thead>
        <tbody>


          @foreach($roles as $c)
          <tr>
              <th scope="row">{{$c -> id}}</th>
              <td>{{$c -> name}}</td>
              <td>{{$c -> display_name}}</td>
              <td>{{$c ->description}}</td>


              <td>
                <a href=""  ><button class="btn btn-success">Update</button>

              <a href=""  >
                 <button class="btn btn-danger" >Delete</button></a>
              </td>

          </tr>
        @endforeach

        </tbody>


        </table>
        </div>


@endsection
