$(document).ready(function(){
    //click add
    $("#add").click(function(){
        var nguoitao = $('#nguoitao').val().split(',');
        console.log(nguoitao);
        html = '';
        html += '<th class="tdadd"></th>' +
            '<td class="tdadd"><input type="text" class="form-control m-input" name="tenmon" id="tenmon"></td>' +
            '<td class="tdadd"><input type="text" disabled class="form-control m-input " value="' + nguoitao[0] + '">' +
            '<input value="' + nguoitao[1] + '" class="hidden" name="nguoitao">' +
            '</td>' +
            '<td class="tdadd center">' +
                '<button class="btn btn-success btn-sm m-btn \tm-btn m-btn--icon m-btn--pill" onclick="return themmon()">Thêm</button> &#09;' +
            '<button class="btn btn-warning btn-sm m-btn \\tm-btn m-btn--icon m-btn--pill" onclick="return huy()">Hủy</button>'+
            '</td>'
        $("#addmon").html(html);
        $('#tenmon').focus();
    });
});