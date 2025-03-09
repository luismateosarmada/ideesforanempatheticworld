<?php
 // ¿Iniciado (quizás en post) como variable de sesión y el array también
 // (quizás pillar de .txt)? ¿OnKeyDown para el formulario en vez de labels?
 $numpreguntas = 2;
 $pregunta01 = array('preg' => "¿Si quito la sal, me baja la tensión?", 'resp' => "NO, es más, subirá. La sal hace que el cuerpo funcione mejor. Si tomas agua embotellada, que tiene pocos minerales, se encharca la sangre, y el corazón tiene que trabajar más.");
 $pregunta02 = array('preg' => "¿Cuál es el último siglo de esclavismo real para el ser humano en La Tierra?", 'resp' => "¡Pues es el 21! En el 18, los masones quitaron tierras a la gente, que tuvo que ir a la ciudad, que permite la acumulación de poder del malo, y que el narcisista se oculte bien. El 19 fue el primer año de esclavismo real, con minas de carbón...");
 $pregunta01 = array('preg' => "¿Qué premios "que te has ganado" regalas al poco de recibirlos?", 'resp' => "Los Grammies.");
 $pregunta01 = array('preg' => "¿Para qué sirve la UE?", 'resp' => "Para destruir Europa. Facilita la entrada de musulmanes, muy contentos ahora, pero serán sustituidos por chinos, que son más obedientes. En cambio, están los valores cristianos, y la raza blanca, que busca la verdad con ahínco.");
 $preguntas = array($pregunta01, $pregunta02, $pregunta03, $pregunta04); 
 
 if (!isset ($_GET["iniciado"]))
  iniciar();
   else
    if (!isset ($_GET["haypregunta"]))
     preguntar();
      else
       responder();
?>

<?php
function iniciar()
{
 global $PHP_SELF;
 
 $cadenona=$PHP_SELF."?iniciado=1";
?>
 <script type="text/javascript">
  var jsVar = "<?php echo $cadenona; ?>";
  var sleepES5 = function(ms){
    var esperarHasta = new Date().getTime() + ms;
    while(new Date().getTime() < esperarHasta) continue;
  };
  sleepES5(500);
  document.write('Iniciando.');  
  window.location.href = jsVar;
 </script>
<?php
}
?>

<?php
function preguntar()
{
?>
 <script type="text/javascript">
  window.opener.document.innerHTML = "";
 </script>
 
<?php
 // NO he conseguido juntar la espera con el borrado.

 global $PHP_SELF;

 global $numpreguntas;
 global $preguntas;
 
 $pregelegida = rand(1, $numpreguntas);
 $cadenona = $PHP_SELF."?haypregunta=1&iniciado=1&pregelegida=".$pregelegida;
 $pregunta = $preguntas[$pregelegida - 1]["preg"];
?>

<form name=principal method='get'>
  <?php echo $pregunta; ?><BR>
  <a href=<?php echo $cadenona?>>Ver respuesta.</a>
</form>
<?php
}
?>

<?php
function responder()
{
 // NO he conseguido juntar la espera con el borrado.

 global $PHP_SELF;

 global $numpreguntas;
 global $preguntas;

 $pregelegida = ($_GET["pregelegida"]);
 $cadenona = $PHP_SELF."?iniciado=1";
 $pregunta = $preguntas[$pregelegida - 1]["preg"];
 $respuesta = $preguntas[$pregelegida - 1]["resp"];
?>

<form name=principal method='get'>
  <?php echo $pregunta; ?><BR>
  <?php echo $respuesta; ?><BR>
  <a href=<?php echo $cadenona?>>Otra pregunta.</a>
</form>
<?php
}
?>
