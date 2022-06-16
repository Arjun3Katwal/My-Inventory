@extends('layouts.starter')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Employees</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">


        <div class="card card-primary card-outline">
          <div class="card-body">
            <h5 class="card-title">Employee</h5><br>

            <form action="{{route('updateEmployee', $emp->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter  name" value="{{$emp->name}}">

                </div><!-- /.card-body -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone NUmber</label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter phone number" value="{{$emp->phone}}">

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{$emp->address}}">

                </div><!-- /.card-body -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{$emp->email}}">

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Experience</label>
                  <input type="text" class="form-control" name="experience" placeholder="Enter Experience" value="{{$emp->experience}}">

                </div><!-- /.card-body -->


                <div class="form-group">
                  <label for="exampleInputEmail1">ID no.</label>
                  <input type="text" class="form-control" name="idno" placeholder="Enter ID No." value="{{$emp->idno}}">

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">city</label>
                  <input type="text" class="form-control" name="city" placeholder="Enter city" value="{{$emp->city}}">

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label class="form-control-label" for="input-image">Images</label>
                  <input type="file" name="image" class="form-control" accept="" required onchange="readURL(this);">
                </div>

                <div class="form-group">
                  <img src="{{URL::to($emp->image)}}" name="oldimage" style="width:80px; height:80px;">
                </div>

                

                <div class="form-group">
                  <label for="exampleInputEmail1">salary</label>
                  <input type="text" class="form-control" name="salary" placeholder="Enter salary" value="{{$emp->salary}}">

                </div><!-- /.card-body -->

              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
              </div>
          </div>
          </form>
        </div>
      </div><!-- /.card -->
    </div>
    <!-- /.col-md-6 -->

    <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->

@endsection