
@section('admin')
@extends('admin.admin_master')

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  


			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">List of Coordinators</h3>
				  <a href="{{route('admin.addCoor')}}" style="float: right;" 
				  class="btn btn-rounded btn-success mb-5">Add User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Name</th>
								<th>Brgy.</th>
								<th>Municipal</th>
								<th>Mobile#</th>
								<th>Username</th>
								<th>Password</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($coordinators as $Key => $coord)
							<tr>
								<td>{{$Key+1}}</td>
								<td>{{$coord->lname}}, {{$coord->fname}}</td>
								<td>{{$coord->brgy}}</td>
								<td>{{$coord->mun}}</td>
								<td>{{$coord->contact_no}}</td>
								<td>{{$coord->username}}</td>
								<td>{{$coord->password}}</td>
								<td style="width:240px;"> 
                                                                             
                                    <a href="{{route('admin.addVoter',['coorId'=>$coord->id])}}" class="btn btn-warning">Voter's</a>
                                                               
                                    
                                  </td>
							</tr>
						 @endforeach
						</tbody>				  
						<tfoot>
							<tr>
							    <th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
						</tfoot>
					</table>
					</div>              
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>

  @endsection