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
        <h1 class="m-0">Salary</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active"> Edit Salary Provider</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="content">
  <div class="container-fluid">
    <form action="/storeSalary" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-6">


          <div class="card card-primary card-outline">
            <div class="card-body">
              <h5 class="card-title">Salary Provider</h5><br>


              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label>Employee<span class="text-danger">*</span></label>
                  <select class=" form-control" aria-label="Default select example" name="emp_id" value="{{$sal->emp_id}}">
                @foreach($employee as $emp)
                    <option value="{{$emp->id}}">{{$emp->name}}</option>
                   
                  </select>
                </div>

                <div class="form-group">
                  <label>Month<span class="text-danger">*</span></label>
                  <select id="inputStatus" class="form-control custom-select" name="month"  value="{{$sal->month}}">
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
                  <input type="text" class="form-control" name="advanced_salary" placeholder="Enter advanced salary"  value="{{$sal->advance_salary}}">
                </div>

                <div class="form-group">
                  <label>Year<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="year" placeholder="2011"  value="{{$sal->year}}">
                </div>

                



               
              </div>
            </div>

          </div>
        </div><!-- /.card -->

    

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