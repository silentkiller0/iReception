function validate() {
    window.location = "../../Views/Add_commandes/valide_commande.php?fournisseurs=" + $("#fournisseurs :selected").val() + "&code_commande=" + $('#code_commande').val() + "&qnt=" + $('#qnt').val() + "";

    /*$.ajax({
        type: "GET",
        url: "../../Views/Add_commandes/add_commandes.php",
        data: {
            fournisseurs: $("#fournisseurs :selected").val(),
            code_commande: $('#code_commande').val(),
            qnt: $('#qnt').val()
        },
        datatype: 'html',
        success: function (response) {
            window.location = "../../Views/Add_commandes/add_commandes.php";
            //$('#test').html(response);

        }
    });*/
}