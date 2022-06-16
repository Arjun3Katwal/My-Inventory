@extends('layouts.starter')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Customer</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Customer List</li>
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
                        <h5 class="card-title">Customer List</h5><br>


                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th> Name</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>city</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach($customer as $cust)
                                <tr>
                                <th scope="row">{{$i++}}</th>
                                    <td>{{$cust->name}}</td>
                                    <td>{{$cust->phone}}</td>
                                    <td>{{$cust->address}}</td>
                                    <td><img src="{{asset($cust->image)}}" style="width: 60px; height: 60px;"></td>
                                    <td>{{$cust->city}}</td>
                                    
                                   
                                    <td>
                                    <a href="{{route('showCustomer', $cust->id)}}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-desktop"></i>show
                                        </a>
                                        <a href="{{route('editCustomer', $cust->id)}}" class="btn btn-sm btn-info">
                                            <i class="fa fa-edit"></i>Edit
                                        </a>

                                        <a href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="customer-delete-{{$cust->id}}">
                                            <i class="fa fa-trash"></i>Delete
                                        </a>

                                        <form  id= "customer-delete-{{$cust->id}}" action="{{route('deleteCustomer', $cust->id)}}">
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
            <!-- /.col-md-6 -->

            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

    @endsection