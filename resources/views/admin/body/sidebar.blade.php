  
  @php
      $route = Route::current()->getName();
  @endphp
 
  
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
						  <h3><b>Vote's</b> System</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li>
          <a href="{{route('dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li> 
        
        <li >
          <a href="{{route('viewposition')}}">
            <i data-feather="message-circle"></i>
            <span>Maps</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class=" {{($route == 'viewposition')?'active':''}}"><a href="{{route('viewposition')}}"><i class="ti-more"></i>View Map</a></li>
          </ul>
        </li> 

        <li >
          <a href="{{route('admin.viewcandidatemap')}}">
            <i data-feather="message-circle"></i>
            <span>Candidate Maps</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li class=" {{($route == 'admin.addcanmap')?'active':''}}"><a href="{{route('admin.addcanmap')}}"><i class="ti-more"></i>Add Map</a></li>
            <li class=" {{($route == 'admin.viewcandidatemap')?'active':''}}"><a href="{{route('admin.viewcandidatemap')}}"><i class="ti-more"></i>Map</a></li>
          </ul>
        </li> 

        <li >
          <a href="{{route('admin.viewcandidate')}}">
            <i data-feather="message-circle"></i>
            <span>Candidate Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=" {{($route == 'admin.addcandidate')?'active':''}}"><a href="{{route('admin.addcandidate')}}"><i class="ti-more"></i>Add Candidate</a></li>
            <li class=" {{($route == 'admin.viewcandidate')?'active':''}}"><a href="{{route('admin.viewcandidate')}}"><i class="ti-more"></i>List Candidate</a></li>
          </ul>
         
        </li> 
		
        <li >
          <a href="{{route('admin.viewCoor')}}">
            <i data-feather="message-circle"></i>
            <span>Coordinator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=" {{($route == 'admin.addCoor')?'active':''}}"><a href="{{route('admin.addCoor')}}"><i class="ti-more"></i>Add Coordinator</a></li>
            <li class=" {{($route == 'admin.viewCoor')?'active':''}}"><a href="{{route('admin.viewCoor')}}"><i class="ti-more"></i>List Coordinator</a></li>
          </ul>
         
        </li> 
		  
        <li >
          <a href="{{route('admin.viewVoter')}}">
            <i data-feather="mail"></i> <span>Voter's</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=" {{($route == 'admin.viewVoter')?'active':''}}" ><a href="{{route('admin.viewVoter')}}"><i class="ti-more"></i>Add voters</a></li>
       
          </ul>
        </li>
		
        <li>
          <a href="{{route('admin.viewmap')}}">
            <i data-feather="file"></i>
            <span>Create Maps</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=" {{($route == 'admin.addmap')?'active':''}}"><a href="{{route('admin.addmap')}}"><i class="ti-more"></i>Add Map</a></li>
            <li class=" {{($route == 'admin.viewmap')?'active':''}}"><a href="{{route('admin.viewmap')}}"><i class="ti-more"></i>List Map</a></li>
         
          </ul>
        </li> 
        
        
        
        <li >
          <a href="{{route('admin.addmunbar')}}">
            <i data-feather="file"></i>
            <span>Barangay Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=" {{($route == 'admin.addmunbar')?'active':''}}"><a href="{{route('admin.addmunbar')}}"><i class="ti-more"></i>Add Barangay</a></li>
         
          </ul>
        </li> 		
		 
        <li class="header nav-small-cap">User Interface</li>
		  
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
            <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
            
          </ul>
        
	
          <a href="auth_login.html">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>