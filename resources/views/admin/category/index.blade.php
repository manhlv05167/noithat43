@extends('layouts.admin.mains')
@section('title','Category')
@section('page','Category')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Table</h3>

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
	                  <th>Detail</th>
	                  <th>Status</th>
	                  <th>Amount product</th>
		              <th>
		                <a href="{{route('add.cate')}}" class="btn btn-success">ADD</a>
		              </th>
	                </tr>
                    <tr>
						<td> ID </td>
						<td> name </td>
						<td> detail </td>
						<td> status </td>
						<td> 
                            count product
							<!-- @isset($model->products)
							{{count($model->products)}}
							@endisset -->
					    </td>
						<td>
							<a href="{{route('edit.cate')}}" class="btn btn-info">Edit</a>
							{{-- <a href="{{route('category.delete',['id'=>$model->id])}}" class="btn btn-sm btn-danger">Delete</a> --}}
							<button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('del.cate')}}" class="btn btn-danger" id="delete-btn">Delete</button>


							@include('layouts.admin._layouts.confirm')
							<!-- <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								    <div class="modal-dialog">
								        <div class="modal-content">
								            <div class="modal-header">
								                Xác nhận trước khi xóa
								            </div>
								            <div class="modal-body">
								                Bạn chắc chắn muốn xóa dữ liệu này ?
								            </div>
								            <div class="modal-footer">
								                <button type="button" class="btn btn-default" data-dismiss="modal">Không</button>
								                <a class="btn btn-danger btn-ok">Có</a>
								            </div>
								        </div>
								    </div>
							</div> -->
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