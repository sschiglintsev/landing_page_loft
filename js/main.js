

function sendemail() {
    var form_data = $('#form-email').serialize();
    $.ajax({
        type: "POST",
        url: "../include/email.php",
        data: form_data,
        success: function() {
            alert("Ваши данные отправлены мы с вами свяжемся!");
        }
    });

}


$('#width,#height').keyup(function () {
    var i=$('#width').val();
    var j=$('#height').val();
    if ($('#radios1').prop('checked')) {
        var type_per=8000;
    }
    if ($('#radios2').prop('checked')) {
        var type_per=10000;
    }
    if ($('#radios3').prop('checked')) {
        var type_per=12000;
    }

    var proiz=i*j*type_per/1000000;
    $('#calc-price').html(proiz);
})
$('#radios1,#radios2,#radios3').click(function () {
    var i=$('#width').val();
    var j=$('#height').val();
    if ($('#radios1').prop('checked')) {
        var type_per=8000;
    }
    if ($('#radios2').prop('checked')) {
        var type_per=10000;
    }
    if ($('#radios3').prop('checked')) {
        var type_per=12000;
    }

    var proiz=i*j*type_per/1000000;
    $('#calc-price').html(proiz);
})

