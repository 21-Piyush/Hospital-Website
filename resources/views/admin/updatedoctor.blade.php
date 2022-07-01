<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
        label{
            display:inline-block;
            width: 125px;
        }
    </style>

    @include('admin.css')
  </head>

  <body>

    <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

    <!-- partial -->
        @include('admin.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">


    <div class="container" align="center" style="padding:100px;">

    
<!-- ########################################## -->
@if(session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">
    
  </button>

  {{session()->get('message')}}
</div>

@endif
<!-- ########################################## -->


        <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div style="padding:15px">
                <label>Name</label>
                <input type="text" style="color:black" name="name" value="{{$data->name}}">
            </div>

            <div style="padding:15px">
                <label>Phone no</label>
                <input type="number" style="color:black" name="phone" value="{{$data->phone}}">
            </div>

            <div style="padding:15px">
                <label>Speciality</label>
                <input type="text" style="color:black" name="speciality" value="{{$data->speciality}}">
            </div>

            <div style="padding:15px">
                <label>Room no</label>
                <input type="number" style="color:black" name="room" value="{{$data->room}}">
            </div>

            <div style="padding:15px">
                <label>Old Image</label>
                <img height="150px" src="doctorimage/{{$data->image}}">
            </div>

            <div style="padding:15px">
                <label>Upload new Image</label>
                <input type="file"  name="file">
            </div>

            <div style="padding:15px">
                <input type="submit"  class="btn btn-success">
            </div>
        </form>


    </div>


    </div>
    <!-- container-scroller -->
    
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>