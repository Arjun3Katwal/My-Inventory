@extends('layouts.starter')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Salary</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Pay Salary </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">


                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title"> Pay Salary</h5><span class="pull-right text-danger" style="margin-left: 100%;">{{date("F Y")}}</span><br>


                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th> Name</th>
                                    <th>Photo</th>
                                    <th>salary</th>
                                    <th>Month</th>
                                    <th>Advanced</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach($employee as $emp)
                                <tr>
                                <th scope="row">{{$i++}}</th>
                                    <td>{{$emp->name}}</td>
                                    <td><img src="{{asset($emp->image)}}" style="width: 60px; height: 60px;"></td>
                                    
                                    <td>{{$emp->salary}}</td>
                                     <td><span class="badge badge-success">{{date("F", strtotime('-1 months'))}}</span></td>
                                    <td></td> 
                                    <td>
                                    <a  class="btn btn-sm btn-primary text-white">
                                            <i class="fa fa-desktop"></i>Pay Now
                                        </a>
                                       
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

    @endsection