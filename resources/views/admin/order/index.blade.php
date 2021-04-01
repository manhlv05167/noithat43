@extends('layouts.admin.mains')
@section('title','Order')
@section('page','Order')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Order Table</h3>

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
	                  <th>Address</th>
                      <th>Number</th>
					  <th>Total_pro</th>
					  <th>Total_price</th>
                      <th>Status</th>
	                </tr>
                    <tr>
						<td> <a href="{{route('get.order')}}">ID</a> </td>
						<td> name </td>
						<td> Email </td>
                        <td> address </td>
                        <td> number </td>
						<td> total_pro </td>
						<td> total_price </td>
						<td> 
							<form action="" method="post">
								<div class="form-group">
									<select name="status">
										<option value="0" >Chua thanh toan</option>
										<option value="1" >Da thanh toan</option>
									</select>
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
								
							</form>
						</td>
						<td>
							<button data-toggle="modal" data-target="#confirm-delete" data-href="{{route('del.order')}}" class="btn btn-danger" id="delete-btn">Delete</button>


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