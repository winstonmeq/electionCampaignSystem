
@section('admin')
@extends('admin.admin_master')

<div class="content-wrapper">
	  <div class="container-full">
      <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add Map</h4>
     <h6 class="box-subtitle">Candidates Map <a class="text-warning" href="#">Question</a></h6>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">

           <form method="post" action="{{route('admin.savecan')}}">
             @csrf
             <div class="row">
               <div class="col-6">
           
                 
               <div class="form-group">
                       <h5>Candidate Position <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="canPosition" id="" required="" class="form-control input-lg dynamic" data-dependent="barName" >
                              <option value="">-</option>
                              @foreach ($positions as $pos)
                                    <option value="{{ $pos->position }}">{{$pos->position}} </option>
                             @endforeach   
                           </select>
                       <div class="help-block"></div></div>
                   </div>
                   
               
                   <div class="form-group">
                       <h5>Select Municipality <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="munName" id="munName" required="" class="form-control input-lg dynamic" data-dependent="barName" >
                              <option value="">-</option>
                              @foreach ($municipality as $mun)
                                    <option value="{{ $mun->munName }}">{{$mun->munName}} </option>
                             @endforeach   
                           </select>
                       <div class="help-block"></div></div>
                   </div>
                   


                   <div class="form-group">
                       <h5>Select Barangay <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="barName" id="barName" required="" class="form-control">
                           <option value="">-</option>
                                                      
                           </select>
                       <div class="help-block"></div></div>
                   </div>

              
                   <div class="form-group">
                       <h5>Map Code<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="mapCode" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                   </div>    
                   
                   <div class="form-group">
                       <h5>Opponent Vote<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="opponent" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                   </div>    
                  
                   <div class="form-group">
                       <h5>Mine Vote<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="mine" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                   </div>                
                  

                   <div class="form-group">
                       <h5>ThresHold<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="hold" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                   </div>
                   
                   <div class="form-group">
                       <h5>Voter's Total<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="total" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
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

  <script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   
   $.ajax({
    url:"{{ route('admin.fetchcanmap') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

//  $('#country').change(function(){
//   $('#state').val('');
//   $('#city').val('');
//  });

//  $('#munName').change(function(){
//   $('#barName').val('');
//  });
 

});
</script>
  @endsection