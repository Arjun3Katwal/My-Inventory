@extends('layouts.starter')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<button type="button" class="btn btn-primary btn-sm mt-3 float-right repeatBtn" onclick="hello()"><i class="fa fa-plus "></i>Add Item</button>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Products</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="content">
  <div class="container-fluid">
    <form action="/storeProduct" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-6">


          <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title">Create Product</h5><br>


              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Category<span class="text-danger">*</span></label>
                  <select class=" form-control" aria-label="Default select example" name="category_id">
                    @foreach($category as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>Brand<span class="text-danger">*</span></label>
                  <select class=" form-control" aria-label="Default select example" name="brand_id">
                    @foreach($brand as $bro)
                    <option value="{{$bro->id}}">{{$bro->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>SKU<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="sku" placeholder="Enter sku name">
                </div>

                <div class="form-group">
                  <label>NAME<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" placeholder="Enter product name">
                </div>

                <div class="form-group">
                  <label class="form-control-label" for="input-image">Images</label>
                  <input type="file" name="image" class="form-control">
                </div>

                <div class="form-group">
                  <label>Cost Price($)<span class="text-danger">*</span></label>
                  <input type="number" class="form-control" name="cost_price" placeholder="0">
                </div>

                <div class="form-group">
                  <label>Retail Price($)<span class="text-danger">*</span></label>
                  <input type="number" class="form-control" name="retail_price" placeholder="0">
                </div>



                <div class="form-group">
                  <label>Year<span class="text-danger">*</span></label>
                  <input type="number" class="form-control" name="year" placeholder="Enter year">
                </div>

                <div class="form-group">
                  <label>Quality<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="quantity" placeholder="Enter quality">
                </div>

                <div class="form-group">
                  <label>Location<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="location" placeholder="Enter location">
                </div>

                <div class="form-group">
                  <label>Description<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="description" placeholder="Enter description">
                </div>

                <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select id="inputStatus" class="form-control custom-select" name="status">
                    <option selected disabled>Select one</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>

                  </select>
                </div>
              </div>
            </div>

          </div>
        </div><!-- /.card -->

        <div class="col-sm-6">
          <div class="card card-primary card-outline">
            <div class="card-body ">
              <h5 class="card-title ">Product Size</h5>
              <br>
              <br>
              <div class="row mb-1 repeat">
                <div class="col-sm-4">
                <select class="form-control" aria-label="Default select example" name="size_id">
                  @foreach($sizes as $size)
                  <option value="{{$size->id}}">{{$size->size}}</option>
                  @endforeach
                </select>
              </div>
                <!-- <div class="">
                            <label><strong>Select size :</strong></label><br/>
                            <select class="selectpicker" name="size_id[]" multiple data-live-search="true">
                            @foreach($sizes as $size)
                  <option value="{{$size->id}}">{{$size->size}}</option>
                  @endforeach
                                </select>
                            </div> -->

                <!-- <div class="multiselect" id="countries" multiple="multiple" data-target="multi-0">
                  <div class="title noselect" >
                    <span class="text">Select</span>
                    <span class="close-icon">&times;</span>
                    <span class="expand-icon">&plus;</span>
                  </div>
                  <div class="container">
                    <section name="size_id">
                    @foreach($sizes as $size)
                    <option value="{{$size->id}}">{{$size->size}}</option>
                    @endforeach
                    </section>
                    
                  </div>
                </div> -->



                <div class="col-sm-3">
                  <input type="number" class="form-control" placeholder="Quantity" name="quantity">
                </div>
                <div class="col-sm-2">
                <button type="button" class="btn-danger btn-sm" onclick="deleteDiv()"><i class="fa fa-trash"></i></button>
              </div>

              </div>

              <div class="append-repeat">

            </div>

            </div>
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
        </div>

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

<script type="text/javascript">
  $(document).ready(function() {
    $('select').selectpicker();
  });
</script>