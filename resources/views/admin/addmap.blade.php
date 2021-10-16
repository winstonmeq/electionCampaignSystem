
@section('admin')
@extends('admin.admin_master')

<div class="content-wrapper">
	  <div class="container-full">
      <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Create Map</h4>
     <h6 class="box-subtitle">Create Map <a class="text-warning" href="#">Question</a></h6>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">

           <form method="post" action="{{route('admin.savemap')}}">
             @csrf
             <div class="row">
               <div class="col-6">
                   
                  <div class="form-group">
                       <h5>Map Name<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="mapName" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                   </div>
    
                   <div class="form-group">
                       <h5>Coordinates</h5>
                       <div class="controls">
                           <input type="text" name="polygons" class="form-control"> <div class="help-block"></div></div>                          
                   </div>

                
                  
                  
                   
               </div>
             </div>
             
               <div class="text-xs-right">
                   <button type="submit" class="btn btn-rounded btn-info">Submit</button>
               </div>
           </form>

       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->

</section>
	
	  
	  </div>
  </div>

  @endsection