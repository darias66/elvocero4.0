<head>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
</head>


<form>
    <label for="buscar">Buscar:</label>
    <input type="text" id="matricula" name="matricula" value=""/> <br/>
</form>

$(document).ready(function(){
    $( "#buscar" ).autocomplete({
      source: "buscaralumno.php",
      minLength: 2
    });
 
    $("#matricula").focusout(function(){
      $.ajax({
          url:'alumno.php',
          type:'POST',
          dataType:'json',
          data:{ matricula:$('#matricula').val()}
      }).done(function(respuesta){
          $("#nombre").val(respuesta.nombre);
          $("#paterno").val(respuesta.paterno);
          $("#materno").val(respuesta.materno);
      });
    });
});