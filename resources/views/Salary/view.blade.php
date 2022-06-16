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
                    <li class="breadcrumb-item active">Salary List</li>
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
                        <h5 class="card-title">Salary</h5><br>


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
                             @foreach($salary as $sal)
                                <tr>
                                <th scope="row">{{$i++}}</th>
                                    <td>{{$sal->name}}</td>
                                    <td><img src="{{asset($sal->image)}}" style="width: 60px; height: 60px;"></td>
                                    
                                    <td>{{$sal->salary}}</td>
                                    <td>{{$sal->month}}</td>
                                    <td>{{$sal->advanced_salary}}</td>
                                    <td>
                                    <a href="{{route('paypay',  $sal->id)}}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-desktop"></i>Pay Salary
                                        </a>
                                        <a href="{{route('editSalary', $sal->id)}}" class="btn btn-sm btn-info">
                                            <i class="fa fa-edit"></i>Edit
                                        </a>

                                        <a href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="salary-delete-{{$sal->id}}">
                                            <i class="fa fa-trash"></i>Delete
                                        </a>

                                        <form  id= "salary-delete-{{$sal->id}}" action="{{route('deleteSalary', $sal->id)}}">
                                            @csrf
                                            @method('DELETE')

                                        </form>
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