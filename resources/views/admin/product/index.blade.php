@extends('layouts.admin.mains')
@section('title','Product')
@section('page','Product')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product Table</h3>

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
	                  <th>Image</th>
	                  <th>Price</th>
	                  <th>Detail</th>
                      <th>Category</th>
                      <th>Status</th>
		              <th>
		                <a href="{{route('add.pro')}}" class="btn btn-success">ADD</a>
		              </th>
	                </tr>
                    <tr>
						<td> ID </td>
						<td> name </td>
						<td> <img src="#" alt="image" width="100"> </td>
						<td> price </td>
                        <td> detail </td>
                        <td> category </td>
						<td> status </td>
						<td>
							<a href="{{route('edit.pro')}}" class="btn btn-info">Edit</a>
							{{-- <a href="{{route('category.delete',['id'=>$model->id])}}" class="btn btn-sm btn-danger">Delete</a> --}}
							<button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('del.pro')}}" class="btn btn-danger" id="delete-btn">Delete</button>


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