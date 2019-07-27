$("#province").change(function(event){
    var aux = (window.location.href).slice(18).split('/').length;
    result = '';
    for (var i = 0; i < aux; i++) {
        result += '../';
    }
    var ruta = result+'cantones/'+event.target.value;
    $.get(ruta, function(cantones){
        $("#canton").empty();
        $("#canton").append('<option value="">Seleccione...</option>');
        $("#district").empty();
        for(i=0; i<cantones.length;i++){
            $("#canton").append('<option value="' + cantones[i].numeroCanton + '">' + cantones[i].nombre + "</option>");
        }
    });
});

$('#canton').change(function(event){
    var aux = (window.location.href).slice(18).split('/').length;
    result = '';
    for (var i = 0; i < aux; i++) {
        result += '../';
    }
    var ruta = result+'distritos/'+event.target.value;
    $.get(ruta, function(distritos){
        $("#district").empty();
        $("#district").append('<option value="">Seleccione...</option>');
        for(i=0; i<distritos.length;i++){
            $("#district").append('<option value="' + distritos[i].numeroCanton + '">' + distritos[i].nombre + "</option>");
        }
    });
});

$(document).ready(function(){
    $('.phone').mask('9999-9999');
    $('.cedula').mask('9-9999-9999');
});