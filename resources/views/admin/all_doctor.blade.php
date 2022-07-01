<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>

  <body>

    <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

    <!-- partial -->
        @include('admin.navbar')
    <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding:50px 10px">
                <table>
                    
                    <tr align="center" style="background-color:black;">
                        <!-- <th style = "margin:10px 15px; padding:10px 15px;">ID</th>     -->
                        <th style = "margin:10px 15px; padding:10px 15px;">Image</th>    
                        <th style = "margin:10px 15px; padding:10px 15px;">Name</th>    
                        <th style = "margin:10px 15px; padding:10px 15px;">Speciality</th>    
                        <th style = "margin:10px 15px; padding:10px 15px;">Phone</th>    
                        <th style = "margin:10px 15px; padding:10px 15px;">Joining Date and Time</th>    
                        <th style = "margin:10px 15px; padding:10px 15px;">Room No</th>    
                        <th style = "margin:10px 15px; padding:10px 15px;">Update Profile</th>  
                        <th style = "margin:10px 15px; padding:10px 15px;">Remove Profile</th>  
                    </tr>

                    @foreach($data as $doctor)
                    <tr align="center" style="background-color:#00183e;">
                        <!-- <td style = "margin:10px 15px; padding:10px 15px;">{{$doctor->id}}</td>    -->
                        <td style = "margin:10px 15px; padding:10px 15px;"><img src="doctorimage/{{$doctor->image}}" style="height:50px; border-radius:50px"></td>   
                        <td style = "margin:10px 15px; padding:10px 15px;">{{$doctor->name}}</td>   
                        <td style = "margin:10px 15px; padding:10px 15px;">{{$doctor->speciality}}</td>   
                        <td style = "margin:10px 15px; padding:10px 15px;">{{$doctor->phone}}</td>   
                        <td style = "margin:10px 15px; padding:10px 15px;">{{$doctor->created_at}}</td>   
                        <td style = "margin:10px 15px; padding:10px 15px;">{{$doctor->room}}</td>   
                        
                    <td style = "margin:10px 10px; padding:5px;">
                        <a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a>
                    </td>

                    <td style = "margin:10px 10px; padding:5px;">
                        <a onclick="return confirm('Are you sure to delete this profile?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a>
                    </td>

                    </tr>
                    @endforeach



                </table>
            </div>


        </div>

    <!-- container-scroller -->
    
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>