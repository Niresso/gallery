
$(document).ready(function () {
    $('#btn-add-picture').click(function () {
        $("#add-pictures").empty()
            .append(function() {
                var div = document.createElement('form');
                div.className = "form-add-pictures";
                div.method = "post";
                div.enctype = 'multipart/form-data';
                return div;
            });
        $(".form-add-pictures").append(function() {
            var div = document.createElement('div');
            div.className = "form-group";
            div.id = "f1";
            return div;
        })
            .append(function() {
                var div = document.createElement('div');
                div.className = "form-group";
                div.id = "f3";
                return div;
            })
            .append(function() {
                var div = document.createElement('div');
                div.className = "form-group";
                div.id = "f2";
                return div;
            })
            .append(function() {
                var input = document.createElement('input');
                input.type = "submit";
                input.className = "btn btn-default";
                input.name =  "submit";
                return input;
            });
        $("#f1").append(function() {
            var label = document.createElement('label');
            label.for = "exampleInputName";
            label.innerHTML = "Название картинки:";
            return label;
        })
            .append(function() {
                var input = document.createElement('input');
                input.type = "text";
                input.className = "form-control";
                input.name =  "name";
                input.id = 'exampleInputName';
                input.placeholder='Enter name';
                return input;
            });
        $("#f3").append(function() {
            var label = document.createElement('label');
            label.for = "exampleInputFile";
            label.innerHTML = "Файл:";
            return label;
        })
            .append(function() {
                var input = document.createElement('input');
                input.type = "file";
                input.name =  "picture";
                input.id = 'exampleInputFile';
                return input;
            });
        $("#f2").append(function() {
            var label = document.createElement('label');
            label.for = "exampleInputTextarea";
            label.innerHTML = "Коментарий:";
            return label;
        })
            .append(function() {
                var input = document.createElement('textarea');
                input.className = "form-control";
                input.name =  "comment";
                input.rows = '3';
                input.maxlength='200';
                input.id='exampleInputTextarea';
                return input;
            });


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
            $("#add-pictures").empty();
            var aa = null;
            for (var n=0; n<result.length;n++){
                aa += ($('#gallery').append("<div class='col-lg-6'>"+ result[n].date
                    + "<p><img src='/template/images/pic"+result[n].id+"."+result[n].format
                    +"' width='85%' height='55%' alt='' /></p>" + result[n].comment
                    + "<br /><a href='/delete/"
                    + result[n].id + "' class='btn btn-primary'>Delete</a>"));



            }

        }
    });
}

