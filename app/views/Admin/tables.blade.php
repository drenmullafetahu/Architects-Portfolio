@extends('Admin.partials.header')

@section('content')
 <!-- Bootstrap Core CSS -->
    <link href="/cocra-conning/bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/cocra-conning/bootstrap/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="/cocra-conning/bootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/cocra-conning/bootstrap/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/cocra-conning/bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/cocra-conning/bootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        
       
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Projects Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">                        
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Image Source</th>
                                            <th>User</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)                                         
                                            <tr class="odd gradeX">
                                            <td>{{$project->project_name}}</td>
                                            <td>{{$project->project_desc}}</td>
                                            <td>{{$project->project_category}}</td>
                                            <td>{{$project->project_imgsrc}}</td>
                                            <td>{{$project->project_user}}</td>
                                            <td>{{$project->created_at}}</td>
                                            <td>{{$project->updated_at}}</td>                                         
                                         @endforeach 
                                            </tr>                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                                   
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
       

   
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/cocra-conning/bootstrap/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/cocra-conning/bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/cocra-conning/bootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>

   

    <!-- Custom Theme JavaScript -->
    <script src="/cocra-conning/bootstrap/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
@stop