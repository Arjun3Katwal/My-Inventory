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
        <h1 class="m-0"> Pay Salary</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Pay salary</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container">
        <div class="row">
         
            <div class="col-sm-10">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Pay Salary</h5><br>
                        <div class="card-body">
                            <table class="table table-sm table-bordered text-center" >
                         
                                <tr>
                                    <td>Employee Name</td>
                                    <td>{{$employee->name}}</td>
                                    
                                </tr>
                               
                                <tr>
                                    <td>Photo</td>
                                    <td><img src="{{asset($employee->image)}}" style="width:80px; height:80px;"></td>
                                </tr>
                                <tr>
                                    <td>Salary</td>
                                    <td>{{$employee->salary}}</td>
                                </tr>
                                <tr>
                                    <td>Advanced Salary</td>
                                    <td>{{$salary->advanced_salary}}</td>
                                </tr>
                                <tr>
                                    <td>Salary to Pay</td>
                                    <td>{{($employee->salary) - ($salary->advanced_salary)}}</td>
                                </tr>
                                
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection