@extends('layouts.starter')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Productss</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Product List</li>
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
                        <h5 class="card-title">Product List</h5><br>

                        <a href="{{route('createProduct')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Product</a><br><br>

                        <table class="table table-bordered datatable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Images</th>
                                    <th> Name</th>
                                    <th>SKU</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i<count($product); $i++)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td><img src="{{$product[$i]['image']}}"></td>
                                    <td>{{$product[$i]['name']}}</td>
                                    <td>{{$product[$i]['sku']}}</td>
                                   @for ($i=0; $i<count($a); $i++)
                                    <td>{{$a[$i]}}</td>
                                    @endfor
                                  

                                    
<!-- <tbody>
@for($i=0; $i<count($product); $i++)
<tr>
 
   
    <td>{{$product[$i]['name']}}</td>
 
   @for ($i=0; $i<count($a); $i++)
    <td>{{$a[$i]}}</td>
   @endfor


   
</tr>
@endfor
</tbody> -->
<!-- 
                                    <td>

                                    <a href="{{route('showProduct', $product[$i]['id'])}}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-desktop"></i>show
                                        </a>
                                        <a href="{{route('editProduct', $product[$i]['id'])}}" class="btn btn-sm btn-info">
                                            <i class="fa fa-edit"></i>Edit
                                        </a>

                                        <a href="javascript:;" class="btn btn-sm btn-danger sa-delete" data-form-id="product-delete-{{$product[$i]['id']}}">
                                            <i class="fa fa-trash"></i>Delete
                                        </a>

                                        <form id="product-delete-{{$product[$i]['id']}}" action="{{route('deleteProduct', $product[$i]['id'])}}">
                                            @csrf
                                            @method('DELETE')

                                        </form>
                                    </td> -->
                                </tr>
                                @endfor
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