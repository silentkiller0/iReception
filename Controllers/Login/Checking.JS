function auth() {
    $.ajax({
        type: "GET",
        url: "../../Controllers/Login/auth.php",
        data: {
            server: $('#server').val(),
            username: $('#username').val(),
            password: $('#password').val()
        },
        datatype: 'html',
        success: function (response) {
            $('#auth_message').html(response);
        }
    });
}