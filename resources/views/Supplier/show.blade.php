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
        <h1 class="m-0">Supplier</h1>
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">


        <div class="card card-primary card-outline">
          <div class="card-body">
            <h5 class="card-title"> view Supplier</h5><br>

            
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <p>{{$supplier->name}}</p>

                </div><!-- /.card-body -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone NUmber</label>
                  <p>{{$supplier->phone}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <p>{{$supplier->address}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <p>{{$supplier->email}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Shop Name</label>
                  <p>{{$supplier->shop}}</p>

                </div><!-- /.card-body -->


                <div class="form-group">
                  <label for="exampleInputEmail1">Account Holder</label>
                  <p>{{$supplier->accountholder}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Account Number</label>
                  <p>{{$supplier->accountnumber}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label class="form-control-label" for="input-image">Photo</label>
                  <p><img src="{{asset($supplier->image)}}" style="width:80px; height:80px;"></p>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Bank Name</label>
                  <p>{{$supplier->bankname}}</p>

                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Bank Branch</label>
                  <p>{{$supplier->bankbranch}}</p>
                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">Status Type</label>
                  <p>{{$supplier->type}}</p>
                </div><!-- /.card-body -->

                <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <p>{{$supplier->city}}</p>

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