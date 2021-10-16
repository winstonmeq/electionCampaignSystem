
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
				  <h3 class="box-title">Candidates Position Map</h3>
				  <a href="{{route('admin.addcanmap')}}" style="float: right;" 
				  class="btn btn-rounded btn-success mb-5">ViewCandidate Map</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>#</th>
								<th>Candidate Name</th>
								<th>Position</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($candatas as $Key => $can)
							<tr>
								<td>{{$Key+1}}</td>
								<td>{{$can->candidateName}}</td>
								<td>{{$can->position}}</td>
						
                                						
								<td style="width:240px;"> 
                                                                             
                                    <a href="{{route('position',['position'=>$can->position])}}" target="_blank" class="btn btn-warning">Open</a>
                                                               
                                    
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