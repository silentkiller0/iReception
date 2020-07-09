function check() {

  $.ajax({
        type: "GET",
        url: "../../Controllers/Search_commandes/Show_commande.php",
        data: {
            refCommande: $('#nb_commande').val()

        },
        datatype: 'html',
        success: function (response) {
            $('#check_message').html(response);
            alert("test");

            
            window.location = "../../Views/Search_commandes/list_commande.php"
        }



    });

}
