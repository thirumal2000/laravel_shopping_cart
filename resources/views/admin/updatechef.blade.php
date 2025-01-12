<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
     <div class="container-scroller">
     
        @include("admin.navbar")
        <form action="{{url('/updatefoodchef',$data->id)}}" method="Post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>chef name</label>
                <input style="color:blue;" type="text" name="name" value="{{$data->name}}">
            </div>
            <div>
                <label>speciality</label>
                <input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}">
            </div>
            <div>
                <label>old image</label>
                <img height="300" width="300" src="/chefimage/{{$data->image}}">
            </div>
            <div>
                <label>new image</label>
                <input type="file" name="image" >
            </div>
            <div>
                
                <input style="color:blue;" type="submit" value="update chef" required >
            </div>
        </form>
      </div> 
      <!-- partial:partials/_sidebar.html -->
    
      <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscript")
  </body>
</html> 