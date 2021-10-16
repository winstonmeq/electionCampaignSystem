
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
				  <h3 class="box-title">List of Barangay Maps</h3>
				  <a href="{{route('admin.addmap')}}" style="float: right;" 
				  class="btn btn-rounded btn-success mb-5">Add Barangay Map</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>#</th>
								<th>Map Code</th>
								<th>Map Name</th>
								<th>Coordinates</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($barangaymap as $Key => $brgy)
							<tr>
								<td>{{$Key+1}}</td>
								<td>{{$brgy->id}}</td>
								<td>{{$brgy->mapName}}</td>
								<td>latlng</td>
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