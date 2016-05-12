@extends('Admin.partials.header')

@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <!-- input master -->
       	<link href="/edonmullafetahu/bootstrap/fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />   
        <script src="/edonmullafetahu/bootstrap/fileinput-master/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>     
        <script src="/edonmullafetahu/bootstrap/fileinput-master/js/fileinput.min.js" type="text/javascript"></script>
     
        <script src="//cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>

	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add a Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            
    </div>
  <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add a Category into the database</div>
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


                    <form class="form-horizontal" role="form" method="POST" action="../admin/cat/create">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Category Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <textarea class="ckeditor form-control"name="description" rows="3"></textarea>                               
                            </div>
                        </div>
                        
                           
                        <div class="form-group">
                            <label class="col-md-4 control-label">Thumbnail Image</label>
                            <div class="col-md-6">
                                <!--<input type="file" class="form-control" name="project_imgsrc"> !-->
                                <input id="file-1" type="file" multiple class="file" name="thumbnail_image[]" data-overwrite-initial="false" data-min-file-count="1">                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Slug</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="slug" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add category
                                </button>
                            </div>
                        </div>
                    </form>


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
        uploadUrl: '../admin/cat/store', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        uploadAsync: false,
        maxFileCount: 1,
        allowedFileTypes: ['image', 'video', 'flash']
        
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


                </div>
            </div>
        </div>
@stop
