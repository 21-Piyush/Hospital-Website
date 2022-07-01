<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    <style type="text/css">
      label{
        display:inline-block;
        width: 200px;
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



        <!-- container-scroller -->

        <div class="container" align="center" style="padding-top: 100px">

        @if(session()->has('message'))

        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">
            
          </button>

          {{session()->get('message')}}
        </div>

        @endif


          <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

          @csrf

            <div style="padding: 15px;">
              <label>Greetings</label>
              <input type="text" style="color:black;" name="greeting" placeholder="Enter greetings here" required="">
            </div>

            <div style="padding: 15px;">
              <label>Body</label>
              <input type="text" style="color:black;" name="body" placeholder="Write your body" required="">
            </div>

            <div style="padding: 15px;">
              <label>Action Text</label>
              <input type="text" style="color:black;" name="actiontext" placeholder="Enter room number" required="">
            </div>

            <div style="padding: 15px;">
              <label>Action URL</label>
              <input type="text" style="color:black;" name="actionyrl" placeholder="Enter room number" required="">
            </div>

            <div style="padding: 15px;">
              <input type="submit" class="btn btn-success">
            </div>

          </form>
</div>
        </div>


    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
    
  </body>
</html>