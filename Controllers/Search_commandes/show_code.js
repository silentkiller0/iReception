


function show_code(ref_encoded) {
window.location = "../../Views/Search_commandes/print_palette.php?ref_Ligne_Commande="+ref_encoded;
    
    $.ajax({
        type: "GET",
        url: "../../Controllers/List_commandes/get_emplacements.php",
        data: {
            id_emplacement: id
        },
        datatype: 'html',
        success: function (response) {
            const data = JSON.parse(response);
            $('#allee').val(data[0]);
            $('#rayon').val(data[1]);
            $('#etage').val(data[2]);

        }
    });

}

