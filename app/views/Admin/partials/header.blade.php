@extends('Admin.partials.default')

@section('header')
 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">edonmullafetahu.com</a>
			</div>

			
				<ul class="nav navbar-nav">
					<li><a href="edonmullafetahu/public/admin">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="auth/login">Login</a></li>
						<li><a href="auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">								
								<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
								<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>								
								<li><a href="auth/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</ul>
						</li>
					@endif
				</ul>
			
		 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/edonmullafetahu/public/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Analytics</a>
                                </li>
                                <li>
                                    <a href="#">Something else</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/edonmullafetahu/public/admin/tables"><i class="fa fa-table fa-fw"></i>Tables</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Manage Website<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href="/edonmullafetahu/public/admin/WebSettings">Banner Settings</a>
                                </li>
                                 <li>
                                    <a href="/edonmullafetahu/public/admin/aboutme">About Me</a>
                                </li>                                
                                <li>
                                    <a href="/edonmullafetahu/public/admin/categories">Add a Category</a>
                                </li>
                                <li>
                                    <a href="/edonmullafetahu/public/admin/projects">Add a project</a>
                                </li>
                               
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                           
                            <!-- /.nav-second-level -->                            
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Admin Controlls <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">      
                                <li>
                                    <a href="/edonmullafetahu/public/admin/newProject">Create a Admin User</a>
                                </li>                          
                                <li>
                                	<a href="/edonmullafetahu/public/auth/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
	</nav>
	 
            
@stop
