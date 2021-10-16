
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
				  <h3 class="box-title">List of Voters</h3>
				 
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Name</th>
                                <th>Purok/Str.</th>
								<th>Mobile#</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($voters as $Key => $voter)
							<tr>
								<td>{{$Key+1}}</td>
								<td>{{$voter->lname}}, {{$voter->fname}}</td>
								<td>{{$voter->purok}}</td>
							    <td>{{$voter->contact_no}}</td>
							
								<td>  </td>
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