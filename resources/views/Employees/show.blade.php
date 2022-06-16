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
          <li class="breadcrumb-item active">view</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="content">
  <div class="container" style="margin-left: 20%;">
    <div class="row">
      <div class="col-lg-6">


        <div class="card card-primary card-outline">
          <div class="card-body">
            <h5 class="card-title">View Employee</h5><br>

              
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                    <p>{{$employee->name}}</p>

                </div><!-- /.card-body -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone NUmber</label>
                  <p>{{$employee->phone}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <p>{{$employee->address}}</p>
                </div><!-- /.card-body -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <p>{{$employee->email}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Experience</label>
                  <p>{{$employee->experience}}</p>

                </div><!-- /.card-body -->


                <div class="form-group">
                  <label for="exampleInputEmail1">ID no.</label>
                  <p>{{$employee->idno}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">city</label>
                  <p>{{$employee->city}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label class="form-control-label" for="input-image">Photo</label>
                  <p><img src="{{asset($employee->image)}}" style="width:80px; height:80px;"></p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">salary</label>
                  <p>{{$employee->salary}}</p>

                </div><!-- /.card-body -->

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