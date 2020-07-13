function validate() {
    if (($('#code_commande').val()).length > 0) {
        $.ajax({
            type: "GET",
            url: "../../Controllers/Add_commandes/add_commandes.php",
            data: {
                fournisseurs: $("#fournisseurs :selected").attr("id"),
                code_commande: $('#code_commande').val(),
                qnt: $('#qnt').val()
            },
            datatype: 'html',
            success: function (response) {
                if (response == 'valide') {
                    window.location = "../../Views/Add_commandes/valide_commande.php?fournisseurs=" + $("#fournisseurs :selected").attr("id") + "&code_commande=" + $('#code_commande').val() + "&qnt=" + $('#qnt').val() + "";
                } else {
                    $('#message').text('commande exsist deja');
                }
            }
        });

    } else {
        alert('Veuillez saisire la reference de la commande');
    }
}



function add(ref) {
    var new_chq_no = parseInt($('#total_chq').val()) + 1;
    console.log(new_chq_no);
    var new_input = "<div class='print_container' id='new_" + new_chq_no + "'><span class='inputs'>" + ref + "-P" + new_chq_no + "</span><button class='button_print'><i class='fa fa-print' id='icons_print' aria-hidden='true'></i></button><br></div>";
    $('#new_chq').append(new_input);
    $('#total_chq').val(new_chq_no);

}

function remove() {
    var last_chq_no = $('#total_chq').val();
    if (last_chq_no > 1) {
        $('#new_' + last_chq_no).remove();
        $('#total_chq').val(last_chq_no - 1);
    }
    console.log(last_chq_no);
}

function valider(fournisseurs){

        console.log($('#code_commande2').text());
        var qt = $(".print_container *").length/4;
        alert(qt);
        $.ajax({
        type: "GET",
        url: "../../Controllers/Add_commandes/valide_commandes.php",
        data: {
            fournisseurs: fournisseurs,
            code_commande: $('#code_commande2').text(),
            qnt: qt
        },
        datatype: 'html',
        success: function (response) {
            if (response == 'valide') {
                $('#test').text('ok');
                console.log(response);
            } else {
                $('#test').text('erreur');
                console.log(response);
            }
        }
});

}