
@section('admin')
@extends('admin.admin_master')

<div class="content-wrapper">
	  <div class="container-full">
      <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add Voters</h4>
     <h6 class="box-subtitle">Voter's per Barangay <a class="text-warning" href="#">Question</a></h6>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
     <div class="row">
       <div class="col">

           <form method="post" action="{{route('admin.saveVoter')}}">
             @csrf
             <div class="row">
               <div class="col-6">	

               @foreach($surveys as $survey)        
               <div class="form-group">
                       <h5>First Name<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="fname" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                   </div>

                   <div class="form-group">
                       <h5>Last Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="lname" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                   </div>
           

                   <div class="form-group">
                       <h5>Purok/Street</h5>
                       <div class="controls">
                           <input type="text" name="purok" class="form-control"> <div class="help-block"></div></div>
                   </div>

                   <div class="form-group">
                       <h5>Contact No. <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="contact_no" class="form-control" required=""> <div class="help-block"></div></div>
                   </div>
          

                   <div class="form-group">
                       <h5>Governor <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="governor"  required="" class="form-control input-lg dynamic" >
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->governor}}">{{$survey->governor}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

                   <div class="form-group">
                       <h5>Vice-Governor <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="viceGovernor"  required="" class="form-control input-lg dynamic" >
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->viceGovernor}}">{{$survey->viceGovernor}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

                   <div class="form-group">
                       <h5>Board Member 1<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="boardMember1"  required="" class="form-control input-lg dynamic">
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->boardMember1}}">{{$survey->boardMember1}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

               

                  
                   <div class="form-group">
                       <h5>Board Member 2<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="boardMember2"  required="" class="form-control input-lg dynamic" >
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->boardMember2}}">{{$survey->boardMember2}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

                  
                   <div class="form-group">
                       <h5>Board Member 3<span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="boardMember3"  required="" class="form-control input-lg dynamic" >
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->boardMember3}}">{{$survey->boardMember3}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

                   <div class="form-group">
                       <h5>Board Member 4 <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="boardmember4"  required="" class="form-control input-lg dynamic" >
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->boardMember4}}">{{$survey->boardMember4}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

                   <div class="form-group">
                       <h5>Board Member 5 <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="boardmember5"  required="" class="form-control input-lg dynamic" >
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->boardMember5}}">{{$survey->boardMember5}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

                   <div class="form-group">
                       <h5>Board Member 6 <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="boardmember6"  required="" class="form-control input-lg dynamic" >
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->boardMember6}}">{{$survey->boardMember6}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

                   <div class="form-group">
                       <h5>Board Member 7 <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="boardmember7"  required="" class="form-control input-lg dynamic" >
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->boardMember7}}">{{$survey->boardMember7}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

                   <div class="form-group">
                       <h5>Board Member 8 <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="boardmember8"  required="" class="form-control input-lg dynamic" >
                              <option value="">None</option>
                                 
                                    <option value="{{$survey->boardMember8}}">{{$survey->boardMember8}}</option>
                                   
                           </select>
                       <div class="help-block"></div></div>
                   </div>

                  
                   

                   @endforeach 
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