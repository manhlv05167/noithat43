@extends('layouts.admin.mains')
@section('title','Add size')
@section('page','Add size')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">size form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#"  method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Name*</label>
                  <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                  <label for="">Image*</label>
                  <input type="file" class="form-control" name="image">
                </div>

                <div class="form-group">
                  <label for="">Price*</label>
                  <input type="text" class="form-control" name="price">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.size')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>
@endsection