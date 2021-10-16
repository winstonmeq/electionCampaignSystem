
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
				  <h3 class="box-title">Candidates Map</h3>
				  <a href="{{route('admin.addcanmap')}}" style="float: right;" 
				  class="btn btn-rounded btn-success mb-5">Add Candidate Map</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>#</th>
								<th>Position</th>
								<th>Map Code</th>
								<th>Opponent Vote</th>
								<th>Mine Vote</th>
								<th>Total Vote</th>
                                <th>Threshold Vote</th>
                                <th>Municipality</th>
                                <th>Barangay</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($candidatemap as $Key => $map)
							<tr>
								<td>{{$Key+1}}</td>
								<td>{{$map->canPosition}}</td>
								<td>{{$map->mapCode}}</td>
								<td>{{$map->opponent}}</td>
								<td>{{$map->mine}}</td>
                                <td>{{$map->total}}</td>
                                <td>{{$map->hold}}</td>
                                <td>{{$map->munName}}</td>
                                <td>{{$map->barName}}</td>
                                						
								<td style="width:240px;"> 
                                                                             
                                    <a href="{{route('perbarmap',['perbarmap'=>$map->mapCode])}}" target="_blank" class="btn btn-warning">Open</a>
                                                               
                                    
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