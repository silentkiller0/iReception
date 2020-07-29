function check() {

    if (($('#ref_commande').val()).length > 0) {
        $.ajax({
            type: "GET",
            url: "../../Controllers/List_commandes/check_commandes.php",
            data: {
                ref_commande: $('#ref_commande').val()
            },
            datatype: 'html',
            success: function (response) {
                if (response == 'valide') {
                  getdata();
                } else {
                    $('#message').text('Réf Commande incorrect');
                }
            }
        });

    } else {
        alert('Veuillez saisire la reference de la commande');
    }
}

function getdata() {
    $.ajax({
        type: "GET",
        url: "../../Controllers/List_commandes/get_data_commandes.php",
        data: {
            ref_commande: $('#ref_commande').val()
        },
        datatype: 'html',
        success: function (response) {
            console.log(response);
            const data = JSON.parse(response);
            console.log(data);
            window.location = "../../Views/List_commandes/show_commande.php?ref_commande=" + $('#ref_commande').val() + "&qty=" + data[1] + "&id_empl=" + data[3]+"&description="+data[2];

        }
    });

}