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
                    <h1 class="page-header">Website Settings   <h4>Manage your website here</h4></h1>
                </div>
                <!-- /.col-lg-12 -->
            
    </div>
    <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Banner Settings</h3>
    			</div>
	</div>
    	<div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Banner Settings</div>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
    						<form class="form-horizontal" role="form" method="POST" action="../admin/banner">
                        		<input type="hidden" name="_token" value="{{ csrf_token() }}">       
		                        
		                        <div class="form-group">
		                            <label class="col-md-4 control-label">Add a Banner image</label>
		                            <div class="col-md-6">
		                                <!--<input type="file" class="form-control" name="project_imgsrc"> !-->
		                                <input id="file-1" type="file" multiple class="file" name="banner_image" data-overwrite-initial="false" data-min-file-count="1"> 		                                                               
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-md-4 control-label">Add a Inspiration quote </label>
		                            <div class="col-md-6">
		                                <textarea class=" form-control"name="banner_desc" rows="3"></textarea>                               
		                            </div>
		                        </div>

		                        
		                        
		                        <div class="form-group">
		                            <div class="col-md-6 col-md-offset-4">
		                                <button type="submit" class="btn btn-primary">
		                                    Publish
		                                </button>
		                            </div>
		                        </div>
   							</form>
                    	</div>
                    </div>
    	</div>


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
                            Banners Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">                        
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables">
                                    <thead>
                                        <tr>
                                            <th>Banner Image</th>
                                            <th>Inspiration Quote</th>                                           
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $banner)                                         
                                            <tr class="odd gradeX">                                            
                                            <td> <img src="{{ asset('banner_image/' . $banner->banner_image) }}" /></td>
                                            <td>{{$banner->banner_desc}}</td>                                          
                                            <td>{{$banner->created_at}}</td>
                                            <td>{{$banner->updated_at}}</td>    
                                            <td><button type="button" class=" btn btn-danger ">Delete
                                            <span class="glyphicon glyphicon-trash " aria-hidden="true"></span>
                                            </button></td>  

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
    	<!-- Input masterJavaScript -->
    <script>
    $('#file-fr').fileinput({
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: 'http://localhost', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        uploadAsync: false,
        maxFileCount: 1,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        */
    });
	</script>

@stop