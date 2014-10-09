$(document).on('ready',function() {
    var idP =1;
    var idC =1;
    var iDCar =1
    var IDf =1;
    var idI =1;
    var idF = $("#sel_facultad").val();
    
    //mostrar el select Facultad
    if (idF==0){
        $.post('/Trabajo/php/consultas.php', {op: 0 })
        .done(function(data) {
            $("#sel_facultad").html(data);
        })
    }

    //mostrar campo seleccion programa
    $("#sel_facultad").change(function() {
        idF = $("#sel_facultad").val();
        $("#Programa").slideDown("slow","linear")  
        $.post("/Trabajo/php/consultas.php", { op: 1, id: idF })
        .done(function(data){
            $("#sel_programa").html(data);
        });
    });

    //mostrar campo seleccion Caracteristica
    $("#sel_programa").change(function(){
        $("#Factor").slideDown("slow","linear")
        $.post("/Trabajo/php/consultas.php", { op: 2 })
        .done(function(data){
            $("#sel_factor").html(data);
        });//done
        $("#Caracteristica").slideDown("slow","linear")
        $.post("/Trabajo/php/consultas.php",{ op: 3})
        .done(function(data){
            $("#sel_caracteristicarc").html(data);
        });
    });

    //mostrar campo datagrid
    $("#sel_caracteristicarc").change(function(){
        //$(".datagrid").slideToggle("slow","linear")
        idC = $("#sel_caracteristicarc").val();
        $(".datagrid").slideDown("slow","linear")
        $.post("/Trabajo/php/consultas.php", { op: 4, id: idC })
        .done(function(data){
            $(".tbody").html(data);
        });
        $(".informacion").slideDown('slow',"linear");
        
    });

    $('#sel_factor').change(function(){
        IDf=$('#sel_factor').val();
        $("#Caracteristicarc").slideDown("slow","linear");
        $.post("/Trabajo/php/consultas.php", { op: 5, id: IDf })
        .done(function(data){
            $("#sel_caracteristica").html(data);
        });
    });

    $('#sel_caracteristica').change(function(){
        IDcar=$('#sel_caracteristica').val();
        $("#Indicador").slideDown("slow","linear");
        $.post("/Trabajo/php/consultas.php", { op: 6, id: IDcar })
        .done(function(data){
            $("#sel_indicador").html(data);
        });
    });

    $("#sel_indicador").change(function(){
        //$(".datagrid").slideToggle("slow","linear")
        idI = $("#sel_indicador").val();
        $(".datagrid-autoevaluacion").slideDown("slow","linear"),
        $.post("/Trabajo/php/consultas.php", { op: 7, id: idI })
        .done(function(data){
            $(".tbody").html(data);
        });
        
    });

    $(':file').change(function(){
        //alert("entro")
        var file = $('#archivo').files[0];
    });
});