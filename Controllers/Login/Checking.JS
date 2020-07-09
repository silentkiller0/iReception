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
            if (response == 'logged in') {
                window.location = "../../Views/Dashboard/Dashboard.php";
                $('#auth_message').html(response);
            } else {
                $('#auth_message').html(response);
            }
        }
    });
}