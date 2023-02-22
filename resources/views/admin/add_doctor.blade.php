<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
        label
        {
            display: inline-block;
            width:200px;
        }
    </style>
   @include('admin.css')
  </head>
  <body>
      @include('admin.support')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 50px;">

                @if(session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="btn-close" data-bs-dismiss="alert">
                            X
                        </button>
                        
                        {{ session()->get('message') }}
                        
                    </div>
                @endif

                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Doctor Name:</label>
                        <input type="text" style="color: black;" name="name" placeholder="Write the name">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Phone</label>
                        <input type="number" style="color: black;" name="number" placeholder="Write the number">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Speciality</label>
                        <select name="speciality" id="" style="color:black; width:200px;">
                            <option>--Select--</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Room No</label>
                        <input type="text" style="color: black;" name="room" placeholder="Write the room number">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Doctor Image</label>
                        <input type="file" style="color: black;" name="file">
                    </div>
                    <div style="padding: 15px;">
                        <input type="submit" style="color: white;" class="btn btn-success">
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
