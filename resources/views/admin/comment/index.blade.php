@extends('layouts.admin.mains')
@section('title','Comment')
@section('page','Comment')
@section('content')
<div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Comment Table</h3>

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
	                  <th>Content</th>
	                  <th>User_id</th>
	                  <th>Pro_id</th>
                      <th>Status</th>
	                </tr>
                    <tr>
						<td> ID </td>
						<td> content </td>
						<td> user_id </td>
                        <td> pro_id </td>
						<td> 
							<form action="" method="post">
								<div class="form-group">
									<select name="status">
										<option value="0" >Show</option>
										<option value="1" >Hide</option>
									</select>
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
								
							</form>
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