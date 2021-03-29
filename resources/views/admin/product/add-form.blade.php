@extends('layouts.admin.mains')
@section('title','Add Product')
@section('page','Add Product')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Product form</h3>
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
                  <label for="">Image*</label>
                  <input type="file" class="form-control" name="image">
                </div>

                <div class="form-group">
                  <label for="">Price*</label>
                  <input type="text" class="form-control" name="price" placeholder="Enter price">
                </div>

                <div class="form-group">
                  <label for="">Detail</label>
                  <textarea name="detail" rows="3"  class="form-control">

			      </textarea>
                </div>
                
                <div class="form-group">
                  <label for="">Category*</label>
                  <select name="cate_id" id="" class="form-control">
                        <option value=""></option>
                        <option value="1">Category test</option>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.pro')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>
@endsection