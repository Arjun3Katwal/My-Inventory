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
                <h1 class="m-0">Stocks</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Stock Manage</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
        <form action="{{route('storeStock')}}" method="post">
            <div class="row">
                <div class="col-sm-6">


                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Stock Manage</h5><br>
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Products<span class="text-danger">*</span></label>
                                    <select class=" form-control" aria-label="Default select example" name="item_id">
                    @foreach($product as $pro)
                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                    @endforeach
                  </select>
                                </div>

                                <div class="form-group">
                                    <label>Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="date" >
                                </div>

                                <div class="form-group">
                                    <label>Stock Type<span class="text-danger">*</span></label>
                                    <select class=" form-control" aria-label="Default select example" name="stock_type">

                                        <option value="active">In</option>
                                        <option value="Inactive">Out</option>
                                    </select>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>

               

                            <div class="col-sm-6">
                                <div class="card card-primary card-outline">
                                    <div class="card-body ">
                                        <h5 class="card-title ">Product Size</h5>
                                        <br><br>

                                        <table class="table table-sm">
                                            <tr>
                                                <td>yesma size hunxa{{}}</td>
                                                <td>
                                                    <input class="form-control" placeholder="Qunatity" name="quantity">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                            </div>

                        
                        <!-- /.col-md-6 -->
        </form>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script>
    function hello() {
        var source = $('.repeat:first');
        clone = source.clone();
        clone.appendTo('.append-repeat');
    }

    function deleteDiv() {
        $(".repeat:first").remove()
    }
</script>