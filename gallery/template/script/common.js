
$(document).ready(function () {
    $('#btn-add-picture').click(function () {
        $("#add-pictures").empty()
            .append("<form  method='post' class='form-add-pictures' enctype='multipart/form-data'></form>");
        $(".form-add-pictures").append("<div class='form-group' id='f1'></div>")
            .append("<div class='form-group' id='f3'></div>")
            .append("<div class='form-group' id='f2'></div>")
            .append(" <input type='submit' class='btn btn-default' name='submit'>");
        $("#f1").append("<label for='exampleInputEmail1'>Название картинки:</label>")
            .append("<input type='text' class='form-control' id='exampleInputEmail1' name='name' placeholder='Enter name'>");
        $("#f3").append(" <label for='exampleInputFile'>Файл:</label>")
            .append("<input type='file' id='exampleInputFile' name='picture'>");
        $("#f2").append("<label for='exampleInputPassword1'>Коментарий:</label>")
            .append("<textarea name='comment' class='form-control' rows='3'  maxlength='200'></textarea>");

    })
});




$( document ).ready(function() {

    $("#btn-sort").click(function(){
            sendAjaxForm();
            return false;
        }
    );
});

function sendAjaxForm() {
    jQuery.ajax({
        url:     '/components/response.php',
        type:     "POST",
        dataType: "html",
        data: 'json',
        success: function(response) {

            result = jQuery.parseJSON(response);

            $("div#gallery").empty();
            var aa = null;
            for (var n=0; n<result.length;n++){
                aa +=$('#gallery').append("<div class='col-lg-6'>"+ result[n].name
                    + "<p><img src='/template/images/pic"+result[n].id+"."+result[n].format
                    +"' width='85%' height='55%' alt='' /></p>" + result[n].comment + "</div>")
                ;

            }

        }
    });
}

