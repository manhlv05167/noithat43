@extends('layouts.admin.mains')
@section('title','Edit User')
@section('page','Edit User')
@section('content')
<div class="row">
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="#"  method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Name*</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>

                <div class="form-group">
                  <label for="">Email*</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter Email">
                </div>

                <div class="form-group">
                  <label for="">Password*</label>
                  <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                  <label for="">Image*</label>
                  <input type="file" class="form-control" name="image">
                </div>

                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" class="form-control" name="Address" placeholder="Enter Address">
                </div>

                <div class="form-group">
                  <label for="">Number*</label>
                  <input type="text" class="form-control" name="Number" placeholder="Enter Number">
                </div>

                <div class="form-group">
                  <label for="">Role*</label>
                  <select name="role" id="" class="form-control">
                        <option value=""></option>
                        <option value="1">Menber</option>
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
                <a href="{{route('list.user')}}" class="btn btn-danger">Cancel</a>
              </div>
            </form>
          </div>
          <!-- /.box -->



        </div>
</div>
@endsection