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

        <div class="container-fluid page-body-wrapper" style="width:1250px justify-content:center">
            <div align="center" style="padding:50px 10px">
                <table>
                    
                    <tr align="center" style="background-color:black;">
                        <th style = "padding:10px; margin:10px 10px;">Patient Name</th>    
                        <th style = "padding:10px; margin:10px 10px;">Email</th>    
                        <th style = "padding:10px; margin:10px 10px;">Phone</th>    
                        <th style = "padding:10px; margin:10px 10px;">Doctor's Name</th>    
                        <th style = "padding:10px; margin:10px 10px;">Date</th>    
                        <th style = "padding:10px; margin:10px 10px;">Message</th>    
                        <th style = "padding:10px; margin:10px 10px;">Status</th>    
                        <th style = "padding:10px; margin:10px 10px;">Approve</th>    
                        <th style = "padding:10px; margin:10px 10px;">Cancel</th>    
                        <th style = "padding:10px; margin:10px 10px;">Send Mail</th>    
                    </tr>

                    @foreach($data as $appoint)
                    <tr align="center" style="background-color:#00183e;">
                        <td style = "margin:10px 10px; padding:5px;">{{$appoint->name}}</td>   
                        <td style = "margin:10px 10px; padding:5px;">{{$appoint->email}}</td>   
                        <td style = "margin:10px 10px; padding:5px;">{{$appoint->phone}}</td>   
                        <td style = "margin:10px 10px; padding:5px;">{{$appoint->doctor}}</td>   
                        <td style = "margin:10px 10px; padding:5px;">{{$appoint->date}}</td>   
                        <td style = "margin:10px 10px; padding:5px;">{{$appoint->message}}</td>   
                        <td style = "margin:10px 10px; padding:5px;">{{$appoint->status}}</td>   
                        <td style = "margin:10px 10px; padding:5px;">
                            <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a>
                        </td>
                        <td style = "margin:10px 10px; padding:5px;">
                            <a class="btn btn-danger" href="{{url('cancelled',$appoint->id)}}">Cancel</a>
                        </td>

                        <td style = "margin:10px 10px; padding:5px;">
                            <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
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