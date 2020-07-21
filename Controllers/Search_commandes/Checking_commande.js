function check() {

  $.ajax({
        type: "GET",
        url: "../../Controllers/Search_commandes/Show_commande.php",
        data: {
            refCommande: $('#nb_commande').val()

        },
        datatype: 'html',
        success: function (response) {

            if(response == 0){
              $('#check_message').html('Commande inexistante');
            }else{
            console.log(response);
            const info_commande = JSON.parse(response)
           
            
            window.location = "../../Views/Search_commandes/list_commande.php?codeCommande="+info_commande[0]+"&qty="+info_commande[1]+"&id="+info_commande[2]+"&ligne_commande="+info_commande[3]
          }
        }
    });

}
