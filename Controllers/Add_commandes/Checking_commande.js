function check() {

    $.ajax({
          type: "GET",
          url: "../../Controllers/add_commandes/Show_commande.php",
          data: {
              refCommande: $('#code_commande').val()
  
          },
          datatype: 'html',
          success: function (response) {
              $('#check_message').html(response);
              //console.log(response);
              //var res = response.split(',');
              ///alert("test");
              if(response == 0){
                $('#check_message').html('Commande inexistante');
              }else{
              const info_commande = JSON.parse(response)
              console.log(info_commande);
              window.location = "../../Views/add_commandes/valide_commande.php?codeCommande="+info_commande[0]+"&qty="+info_commande[1]+"&id="+info_commande[2]+"&ligne_commande="+info_commande[3]
            }
          }
      });
  
  }
  