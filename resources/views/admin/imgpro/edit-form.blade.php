@extends('layouts.admin.mains')
@section('title','Add Img product')
@section('page','Add Img product')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Img product form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#"  method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Image*</label>
                  <input type="file" class="form-control" name="image">
                </div>

                <div class="form-group">
                  <label for="">pro_id*</label>
                  <select name="pro_id" id="" class="form-control">
                        <option value=""></option>
                        <option value="1">Category test</option>
                  </select>
                </div>

                <div class="checkbox">
                    <label for=""> <input type="radio" name="status" checked>Enable</label>
                    <label for=""> <input type="radio" name="status">Disable</label>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('list.imgpro')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>
@endsection