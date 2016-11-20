$(document).ready(function () {

    $("#submitLogin").click(function () {
alert();
        $("#loginForm").ajaxSubmit({
            url: 'doLogin.php',

            beforeSubmit: function () {

            },
            error: function () {

            },
            uploadProgress: function (evento, posicao, total, completo) {

            },
            success: function (result) {
                console.log(result);
                $(location).attr('href','index.php');

            },
            complete: function () {

            }

        });
        return false
    });
});
