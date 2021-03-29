@extends('layouts.admin.mains')
@section('title','User')
@section('page','User')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Table</h3>

              <div class="box-tools">
              	<form action="" method="get">
	                <div class="input-group input-group-sm" style="width: 150px;">
	                  <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">

	                  <div class="input-group-btn">
	                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	                  </div>
	                </div>
                </form>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">
               <table class="table table-hover  table-bordered">
	                <tbody>
                    <tr>
	                  <th>ID</th>
	                  <th>Name</th>
	                  <th>Email</th>
	                  <th>Image</th>
	                  <th>Address</th>
                      <th>Number</th>
                      <th>Role</th>
                      <th>is_active</th>
		              <th>
		                <a href="{{route('add.user')}}" class="btn btn-success">ADD</a>
		              </th>
	                </tr>
                    <tr>
						<td> ID </td>
						<td> name </td>
						<td> Email </td>
						<td> <img src="#" alt="image" width="100"> </td>
                        <td> address </td>
                        <td> number </td>
						<td> role </td>
                        <td> is_active </td>
						<td>
							<a href="{{route('edit.user')}}" class="btn btn-info">Edit</a>
							{{-- <a href="{{route('category.delete',['id'=>$model->id])}}" class="btn btn-sm btn-danger">Delete</a> --}}
							<button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('del.user')}}" class="btn btn-danger" id="delete-btn">Delete</button>


							@include('layouts.admin._layouts.confirm')

						</td>
					</tr>
	                <tr>
						<td colspan="5" class="text-center">1</td>
					</tr>
	              </tbody>
          	  </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>
@endsection