$("#img-file-upload").ajaxFileUpload(
{
    url : "file_upload.php",
    validator : new $.sr.file.validator(1024 * 1024 * 2, ["jpg", "png", "jpeg"]),
    onSuccess : function(index, server_response)
    {
        console.log(server_response);
    }
});

$("#any-file-upload").ajaxFileUpload(
{
    url : "file_upload.php",
    validator : new $.sr.file.validator(1024 * 1024 * 200),
    beforeUpload : function(fileObj, xhr, progress_block)
    {
        return true;
    },
    onSuccess : function(server_response)
    {
        console.log(server_response);
    }
});