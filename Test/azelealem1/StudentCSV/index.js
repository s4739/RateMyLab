
$(document).ready(function() {

//upload file button layout customization
    $('#file-input').before('<input type="button" id="button-file" value="UPLOAD CSV"/>');
    // $('#file-input').hide();
    $('body').on('click', '#button-file', function() { $('#file-input').trigger('click'); });
});