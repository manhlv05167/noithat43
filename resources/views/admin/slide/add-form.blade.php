@extends('layouts.admin.mains')
@section('title','Add Slide')
@section('page','Add Slide')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Slide form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#"  method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Title*</label>
                  <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                  <label for="">Image*</label>
                  <input type="file" class="form-control" name="image">
                </div>

                <div class="form-group">
                  <label for="">Order_num*</label>
                  <input type="text" class="form-control" name="order_num">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.slide')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>
@endsection