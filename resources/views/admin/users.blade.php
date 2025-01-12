<html>
    <head>
        <title>admin users</title>
</head>
<body>
<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss");
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar");
    <div style="position: relative; top: 60px;right: -150px ">
        <table bgcolor="grey" border="3px">
            <tr>
                <th style="padding: 30px">name</th>
                <th style="padding: 30px">email</th>
                <th style="padding: 30px">action</th>
            </tr>
            @foreach ($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                @if ($data->usertype=="0")
                <td><a href="{{url('/deleteuser',$data->id)}}">delete</a></td>
                @else
                <td><a href="">not allowed</a></td>
                @endif 
            </tr>  
            @endforeach 
        </table>
</div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     
      <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscript");
  </body>
</html> 
</body>
</html>