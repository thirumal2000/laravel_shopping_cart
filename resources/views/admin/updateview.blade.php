<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>

    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
     @include("admin.navbar")
     <div style="position:relative; top: 60px; right: -0px;">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>title</label>
                <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required>
            </div>
            <div>
                <label>price</label>
                <input style="color:blue;" type="num" name="price" value="{{$data->price}}" required>
            </div>

            <div>
                <label>discription</label>
                <input style="color:blue;" type="text" name="discription" value="{{$data->discription}}" required>
            </div>
            <div>
                <label>old image</label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}">
            </div>
            <div>
                <label>image</label>
                <input type="file" name="image" required>
            </div>
            <div>
                <input type="submit" value="Save" style="color:blue">
            </div>
        </form>
        <div> 
      <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscript")
</div>
  </body>
</html> 