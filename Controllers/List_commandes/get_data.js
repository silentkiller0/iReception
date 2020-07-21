function get_data(id) {
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
            $('#id_emplacement').val(data[3]);
        }
    });
}

function update_data() {
    $.ajax({
        type: "GET",
        url: "../../Controllers/List_commandes/update_emplacements.php",
        data: {
            allee:  $('#allee').val(),
            rayon: $('#rayon').val(),
            etage: $('#etage').val(),
            id: $('#id_emplacement').val()

        },
        datatype: 'html',
        success: function (response) {
            if (response == 'OK') {
                $('#message').text('Modification reussis');
                console.log(response);
            } else {
                $('#message').text('erreur');
                console.log(response);
            }
        },   
});
}




