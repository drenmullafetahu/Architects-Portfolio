@extends('Admin.partials.header')

@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <!-- input master -->
       	<link href="/cocra-conning/bootstrap/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />        
        <script src="/cocra-conning/bootstrap/bootstrap-fileinput-master/js/fileinput.min.js" type="text/javascript"></script>
        <script src="/cocra-conning/bootstrap/bootstrap-fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="/cocra-conning/bootstrap/bootstrap-fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>
        <script src="//cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>

	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">About Me</h1>
                </div>
                <!-- /.col-lg-12 -->
            
    </div>
  <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Edit About Me section</div>
                        <div class="panel-body">
                            @if ($errors->has())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                    <form class="form-horizontal" role="form" method="POST" action="../admin/aboutme/create">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <textarea class="ckeditor form-control"name="description" rows="3"></textarea>                               
                            </div>
                        </div>                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit About me
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@stop
