$(function() {
    $("#fileupload").fileinput({'showUpload':false, 'previewFileType':'text', 'browseLabel':''});
    $("#zipupload").fileinput({'showUpload':false, 'previewFileType':'text', 'browseLabel':''});
    $("[name='admin']").bootstrapSwitch();
    $("[name='guest']").bootstrapSwitch();
 });