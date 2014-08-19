$(function() {
    $("#fileupload").fileinput({'showUpload':false, 'removeLabel':'', 'previewFileType':'text', 'browseLabel':'', 'showPreview':false,'browseClass':'btn btn-file', 'removeClass':'btn btn-file',});
    $("#zipupload").fileinput({'showUpload':false, 'removeLabel':'', 'previewFileType':'text', 'browseLabel':'', 'showPreview':false,'browseClass':'btn btn-file', 'removeClass':'btn btn-file',});
    $("#avatar-upload").fileinput({'showUpload':false, 'removeLabel':'', 'previewFileType':'text', 'browseLabel':'', 'showPreview':false,'browseClass':'btn btn-file', 'removeClass':'btn btn-file',});
    $("[name='admin']").bootstrapSwitch();
    $("[name='guest']").bootstrapSwitch();
    
	
 });