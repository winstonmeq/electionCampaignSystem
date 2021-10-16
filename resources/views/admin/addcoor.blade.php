
@section('admin')
@extends('admin.admin_master')

<div class="content-wrapper">
	  <div class="container-full">
      <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add Coordinator</h4>
     <h6 class="box-subtitle">Coordinator per Barangay <a class="text-warning" href="#">Question</a></h6>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">

           <form method="post" action="{{route('admin.saveCoor')}}">
             @csrf
             <div class="row">
               <div class="col-6">	
               <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <h5>First Name<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="fname" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                        </div>
                    </div>
                        <div class="col-6">	
                        <div class="form-group">
                            <h5>Last Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="lname" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                        </div>
                        </div>
                </div>

                   <div class="form-group">
                       <h5>Contact No. <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="contact_no" class="form-control" required=""> <div class="help-block"></div></div>
                   </div>
          
                <div class="row">
                <div class="col-6">	
                   <div class="form-group">
                       <h5>Username <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="username" class="form-control" required=""> <div class="help-block"></div></div>
                   </div>
                </div>
                <div class="col-6">	
                   <div class="form-group">
                       <h5>Password <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="password" class="form-control" required=""> <div class="help-block"></div></div>
                   </div>
                   </div>

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
    url:"{{ route('admin.fetch') }}",
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
