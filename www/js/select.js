$(document).ready(function() {
    $.ajax({    
        url: "https://fmcanete.000webhostapp.com/getClientes.php",
        type: 'GET',
        dataType: 'json'
    })
    .done(function(data){
        var $select = $('#clientes').selectpicker();
        $.each(data, function(i, item){
            $select.append($("<option></option")
            .attr('value', item.nombreCliente)
        });


    });



});