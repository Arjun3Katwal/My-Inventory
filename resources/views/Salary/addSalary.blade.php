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
        <h1 class="m-0">Salary</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Create salary</li>
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
            <h5 class="card-title">Salary</h5><br>

            <form action="{{route('storeSalary')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Employee<span class="text-danger">*</span></label>
                  <select class=" form-control" aria-label="Default select example" name="emp_id">
                    @foreach($employee as $emp)
                    <option value="{{$emp->id}}">{{$emp->name}}</option>
                    @endforeach
                  </select>
                </div>

              <div class="form-group">
                  <label>Month<span class="text-danger">*</span></label>
                  <select id="inputStatus" class="form-control custom-select" name="month">
                    <option selected disabled>Select one</option>
                    <option value="January">January</option>
                    <option value="Feburary">Feburary</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>

                  </select>

                </div>

                <div class="form-group">
                  <label>Advanced Salary</label>
                  <input type="text" class="form-control" name="advanced_salary" placeholder="Enter advanced salary">
                </div>

                <div class="form-group">
                  <label>Year<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="year" placeholder="enter year">
                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
              </div>

              </div>

            </form>
          </div>
        </div><!-- /.card -->
      </div>

    </div>
 
  </div><!-- /.container-fluid -->
</div>

  @endsection