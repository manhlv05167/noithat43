@extends('layouts.admin.mains')
@section('title','Edit Category')
@section('page','Edit Category')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#"  method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Name*</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="">Detail</label>
                  <textarea name="detail" rows="3"  class="form-control"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.cate')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>
@endsection