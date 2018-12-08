@extends("student.layout.master")

@section("title")

@section("body")
<dIV class="container">
  <div class="row">
   <div class="container owtcontainer">
    <div class="card">
      <div class="card-header"><h1>{{ucfirst(substr(Route::currentRouteName(),8))}} Student</h1>
      <a href="{{url('/student')}}" class="btn btn-info"style="float:right">< Back</a>
      </div>
    </div>
  </div>
</div>
<form action="/student/@yield('studentid')"method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    @section("editmethod")
    @show
    <div class="border">
        <div class="form-group">
            <label for="name">Name:</label>
                    @if($errors->any())
                        @foreach($errors->get('name') as $error)
                        <div style="margin-left:50;margin-top:-31;"class="color"><?php echo $errors->first('name');?></div>
                        @endforeach 
                    @endif
            <input type="text" value="@yield('studentname')" class="form-control"name="name" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
                    @if($errors->any())
                        @foreach($errors->get('email') as $error)
                           <div style="margin-left:50;margin-top:-31;"class="color"> <?php echo $errors->first('email');?></div>
                        @endforeach 
                    @endif
            <input type="text" value="@yield('studentemail')" class="form-control"name="email" id="email">
        </div>
        <div class="form-group">
                <label for="Image">Image:</label>
                <input type="file"class="form-control"name="image"  style="padding-bottom: 35;">
        </div>
        
        <button type="submit" class="btn btn-success"style="margin-top:10px">Submit</button>
    </div>    
</form> 
       <!-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}-->
@endsection

