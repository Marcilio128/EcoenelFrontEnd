$(document).ready(function(){
    $.ajax({
        method: 'GET',
        url: 'http://localhost:8000/api/dados'
})
    .then(function(response){
        $('.empresa').html('<td>'+ response[0]['nomeposto'] + '</td>')
        $('.quilo').html(response[0]['Coletado']).css('align-itens', 'center')

    })
})