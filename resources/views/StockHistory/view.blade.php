@extends('layouts.starter')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Stock History</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Stock History</li>
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
                        <h5 class="card-title">Stock History</h5><br>
                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Date</th>
                                    <th>Product</th>
                                    <th>Size</th>
                                    <th>Qunatity</th>
                                    <th>Stock Type</th>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($stock as $stockHistory)
                                <tr>
                                <th scope="row">{{$i++}}</th>
                                    <td>{{$stockHistory->date}}</td>
                                    <td>{{$stockHistory->product_id}}</td>
                                    <td>{{$stockHistory->Date}}</td>
                                    <td>{{$stockHistory->quantity}}</td>
                                    <td>{{$stockHistory->stock_type}}</td>
                                </tr>
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