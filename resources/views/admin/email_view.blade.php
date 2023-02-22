<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
                        <button type="button" class="btn-close" data-dismiss="alert">
                            X
                        </button>
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ url('sendemail',$data->id) }}" method="POST">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Greeting</label>
                        <input type="text" style="color: black;" name="name">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Body</label>
                        <input type="text" style="color: black;" name="body">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Action Text</label>
                        <input type="text" style="color: black;" name="actiontext">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Action Url</label>
                        <input type="text" style="color: black;" name="actionurl">
                    </div>
                    <div style="padding: 15px;">
                        <label for="">End Part</label>
                        <input type="text" style="color: black;" name="endpart">
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
