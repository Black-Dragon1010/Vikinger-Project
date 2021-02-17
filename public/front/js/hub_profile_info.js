$(document).ready(function() {
    //initiate select styles
    

    $('#change_avatar_1').on("click", function (){
        $('.modal').modal('hide');
        $('#change_avatar_modal').modal('show');
    });
    $('#change_cover_1').on("click", function (){
        $('.modal').modal('hide');
        $('#change_cover_modal').modal('show');
    });
    //browse new cover and avatar image
    $("#avatar_img_upload").change(function() {
        readAvatarURL(this);
        //$('#new_avtar_label').text(this.files[0].name);
        $('#upload-avatar-submit').removeAttr('disabled');
    });
    $("#cover_img_upload").change(function() {
        readCoverURL(this);
        //$('#new__label').text(this.files[0].name);
        $('#upload-cover-submit').removeAttr('disabled');
    });
    //upload avatar and cover of user via ajax request
    $("#upload-avatar-submit").click(function() {
        if(!$('#upload-avatar-submit').attr('disabled')){
            if($('#new_avatar_img').width() > 110 && $('#new_avatar_img').height() > 110){
                var formData = new FormData();
                formData.append('file', $('#avatar_img_upload')[0].files[0]);
                formData.append('_token', $("input[name='csrf_token']").val());
                $.ajax({
                    url : '/profile/upload_avatar',
                    type : 'POST',
                    data : formData,
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
                    success : function(data) {
                        var res_data = JSON.parse(data);
                        if(res_data['message'] == 'success'){
                            location.reload();
                        } else{
                            $("input[name='csrf_token']").val(res_data['token']);
                        }
                    }
                });
            } else{
                window.alert("Select larger image!");
            }
        }
    });
    $("#upload-cover-submit").click(function() {
        if(!$('#upload-cover-submit').attr('disabled')){
            if($('#new_cover_img').width() > 110 && $('#new_cover_img').height() > 110){
                var formData = new FormData();
                formData.append('file', $('#cover_img_upload')[0].files[0]);
                formData.append('_token', $("input[name='csrf_token']").val());
                $.ajax({
                    url : '/profile/upload_cover',
                    type : 'POST',
                    data : formData,
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,  // tell jQuery not to set contentType
                    success : function(data) {
                        var res_data = JSON.parse(data);
                        if(res_data['message'] == 'success'){
                            location.reload();
                        } else{
                            $("input[name='csrf_token']").val(res_data['token']);
                        }
                    }
                });
            } else{
                window.alert("Select larger image!");
            }
        }
    });
});
function readAvatarURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#new_avatar_img').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]); // convert to base64 string
      
    }
}
function readCoverURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#new_cover_img').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]); // convert to base64 string
      
    }
}

