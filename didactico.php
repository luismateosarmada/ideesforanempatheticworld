<?php 
 if (isset ($_GET["haypregunta"])) /* Se discrimina mejor así, dividiendo entre pregunta y resto. */
 {$fasepregunta = $_GET['fasepregunta']; pregunta_aleatoria($fasepregunta);}
 else
 if ( (!isset ($_GET["nodo"])) || ($_GET["nodo"] == 0) ) {echo "empezado = 1".'</BR>'; $num_nivel = 0; pantalla_principal();} /* El resto incluye el nodo principal, y el árbol que cuelga de él */
  else /* Esto podría automatizarse, pudiendo elegir el usuario su árbol, pero paso de ello de momento. */
  {
   $num_nivel = $_GET['nivel'];
   $num_nodo = $_GET['nodo'];
   if ($num_nivel == 1) comienzo_navegar();
   
   if ($num_nivel == 2)
   {
    if ($num_nodo == 1) porque_tamosaqui();
    /* Quizás lo mejor sea empezar por el árbol de navegación que por las preguntas. ¿Qué tenemos ya y dónde puede encajar lo nuevo? Tenemos la razón de vivir y del mal. ¿Qué es lo nuevo? Clases de personas va perfectamente con lo del mal, con lo que habría que añadir un botoncito de avance (y otro para soy una prueba para los demás). En la pantalla principal de navegación, 2 botoncillos nuevos, sociedad (aquí iría imaginar y derecho natural o no), y planificar. */
    if ($num_nodo == 2) eselmal_valiosoono(); /* NO lo cambiamos, va con 2 botoncitos, híbrido total. */
    if ($num_nodo == 3) sociedad();
    if ($num_nodo == 4) planificar();
   }
   if ($num_nivel == 3)
   {
    if ($num_nodo == 1) clases_personas(); /* Va con el mal. */
    if ($num_nodo == 2) soyprueba_paraotros(); /* Va con el mal. */
    if ($num_nodo == 3) imaginar_construye(); /* Va con sociedad. */
    if ($num_nodo == 4) derechonatural_mejor(); /* Va con sociedad. */
   }
  }
 /* Ejecutar: poner el Xampp, correr como mínimo el Apache; URL http://localhost/nombre.php */
?>

<?php
function pantalla_principal()
{
 global $PHP_SELF; // la necesitamos para que el submit nos lleve a este mismo .php.
 echo ("Estoy en la pantalla principal");
 /* aquí es importante el poder cambiar de nodo y nivel al hacer clik. Evento onclick de PHP. */
 $cadenona1 = $PHP_SELF."?nivel=1&nodo=1";
 $cadenona2 = $PHP_SELF."?haypregunta=1&fasepregunta=1";
?>

<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona1?>>Ir a navegar</a>
 <a href=<?php echo $cadenona2?>>Preguntas aleatorias</a> 
</form>
<?php
}
?>

<?php
function comienzo_navegar()
{
 echo ("Elige");
 /* Sólo un botón de volver. */
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nivel=2&nodo=1";
 $cadenona2 = $PHP_SELF."?nivel=2&nodo=2";
 $cadenona3 = $PHP_SELF."?nivel=0&nodo=0";
 $cadenona4 = $PHP_SELF."?nivel=2&nodo=3";
 $cadenona5 = $PHP_SELF."?nivel=2&nodo=4";
 ?>

<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona1?>> ¿Por qué estamos aquí? </a> </BR>
 <a href=<?php echo $cadenona2?>> ¿Es valioso el mal? </a> </BR>
 <a href=<?php echo $cadenona4?>> Sociedad </a> </BR>
 <a href=<?php echo $cadenona5?>> Planificar </a> </BR>
 <a href=<?php echo $cadenona3?>>Volver</a> </BR>
</form>
<?php
}
?>

<?php
function porque_tamosaqui()
{
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nivel=1&nodo=1";
?>

Tamos aquí pa convertir nuestras almas en almas sabias, con algo de experiencia.

<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona1?>>Volver</a> 
</form>
<?php
}
?>

<?php
function eselmal_valiosoono()
{
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nivel=1&nodo=1";
 $cadenona2 = $PHP_SELF."?nivel=3&nodo=1";
 $cadenona3 = $PHP_SELF."?nivel=3&nodo=2";
?>

El mal es valioso, son pruebas que nos recuerdan que podemos mejorar nuestra psique. ¡Y nuestra psique define nuestro éxito!

<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona2?>>Clases de personas</a>
 <a href=<?php echo $cadenona3?>>Soy prueba para otros</a>
 <a href=<?php echo $cadenona1?>>Volver</a> 
</form>
<?php
}
?>
<?php /* NO olvidarse de los 2 "botoncitos" en la pantalla principal del mal. */ ?>
<?php
function clases_personas()
{
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nivel=2&nodo=2";
?>

Clases de personas (verdugos que están ahí para poner pruebas, aunque de paso, el karma es malo para ellos...). Los salvadores quieren amor y reconocimiento. Las víctimas se quejan y culpan a veces, aunque creo que una persona muy evolucionada (alma), puede tener una gran misión como víctima, y si se comporta de forma elevada, no caerá ni en verdugo, ni en salvador (científicos oficiales, académicos...). Eso sí, las víctimas suelen saber manipular, para poder sobrevivir (no sé hacer esto... y tienen relamente trabas mentales que hay que estudiar en profundidad, no te están mintiendo; eso sí, a veces pasan a verdugo, aunque creo que lso más insufribles son los salvadores).

<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona1?>>Volver</a> 
</form>
<?php
}
?>
<?php
function soyprueba_paraotros()
{
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nivel=2&nodo=2";
?>

Soy una prueba para los demás, incluso si a veces soy demasiado crítico por un poco de inconsciencia. Puede estar bien si después lo reconozco y trazo un plan para superarlo, y comprendo la situación del otro. Por ejemplo, el otro día, una mujer miraba descarada, y al pasar junto a ella, quería hablarme con su pesadez habitual, y yo dije "esta señora habla como una cotorra, huyamooos!", y fui corriendo como una novia a la fuga je je. Lo que digan lso demás, no debe importarte si tratas de mejorarte psicológicamente en profundidad (si no, creo que sí debería importarte algo, ¿eh verduguillo con inteligencia masculina? Pa esos, límites). Y a veces hay que hacer teatro: yo cogía a los jóvenes, y los mataba a todos (o los ponía a cultivar, hacer psicología o hacer zuecos para el barro, no seamos pijos, no siempre pisaremos asfalta si queremos producir con dignidad, no hacer el tonto en trabajos oficiales o cobrando una paga por no hacer nada, que es vergonzoso).

<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona1?>>Volver</a> 
</form>
<?php
}
?>
<?php
function sociedad()
{
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nivel=1&nodo=1";
 $cadenona2 = $PHP_SELF."?nivel=3&nodo=3";
 $cadenona3 = $PHP_SELF."?nivel=3&nodo=4";
?>
<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona2?>> Imaginar construye </a>
 <a href=<?php echo $cadenona3?>> Derecho natural mejor </a>
 <a href=<?php echo $cadenona1?>>Volver</a> 
</form>
<?php
}
?>
<?php
function imaginar_construye()
{
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nivel=2&nodo=3";
?>

Si lo imaginas para ti (quiero atraer ciertas personas...), trabaja para que se cumpla (no sé, no quedarte en casa 3 años seguidos je je). Si lo imaginas para la sociedad (y lo imagina mucha gente)... sale solo (como las mentiras / teatro del Telediario, que terminan cumpliéndose). Todos los Piscis a imaginar la sociedad del hombre civilizado. NO hace falta ser tan proactivo.

<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona1?>>Volver</a> 
</form>
<?php
}
?>
<?php
function derechonatural_mejor()
{
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nivel=2&nodo=3";
?>

Pregunta: ¿derecho oficial o natural? Si dice "oficial", ¡que te pego leche (una mano je je)!

<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona1?>>Volver</a> 
</form>
<?php
}
?>
<?php
function planificar()
{
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nivel=1&nodo=1";
?>

Qué planificar y qué no. Planificas según tus defectos de psique (para tener un coche o para ser más disciplinado, primero tengo que aprender a quererme, a evitar tentaciones...). Y por cada hito psicológico a superar, pues bueno, espera que los actores (las demás personas) y la vida, te sorprendan, porque casi nunca va a ser como tú has planificado.

<form method='get'>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>
 <a href=<?php echo $cadenona1?>>Volver</a> 
</form>
<?php
}
?>

<?php
function pregunta_aleatoria($fasepregunta)
{
 global $PHP_SELF;
 $num_preguntas = 2; /* Y el máximo número de respuestas es 4, teniendo que hacer coherente toda la función. */
 /*
  Tenemos una array de preguntas, tanto para poner la pregunta, como para la evaluación. 
 */ 
 $pregunta01 = array('preg' => "¿Para qué estamos aquí?", 'opc1' => "Para disfrutar al máximo, que sólo hay una vida.", 'eval1' => "Realmente hay varias vidas, y está demostrado oficialmente que existe al menos un cuerpo no material.", 'opc2' => "Para que nuestro alma experimente y aprenda.", 'eval2' => "Eso es, y el dolor es maestro (no hace falta sufrir, pero sí tener dolor; el Budismo nos enseña a aceptar el dolor, y Jung, a mirar dentro de nosotros, nuestras averías de psique).");
 $pregunta02 = array('preg' => "¿Es el mal necesario?", 'opc1' => "Sí, gracias al mal aprendemos.", 'eval1' => "Correcto. Hay gente más evolucionada que ha venido a aprender de gente menos evolucionada. Los más evolucionados suelen tener más trabas psíquicas, misiones de vida más difíciles, el éxito llega más tarde... Que tengan claro que si se encuentran mucho con una mala persona, algo tienen en su potente psique que resolver. Los de arriba irán abajo, y viceversa. NO es buena señal estar adaptado a una sociedad enferma de obreros especializados cuya rápida y poco profunda mente no se cansa tanto como debiera.", 'opc2' => "Yo soy bueno y los demás malos.", 'eval2' => "Realmente, tu gobierno es un espejo de tu sociedad, y la gente que te encuentras y tu vida, un reflejo de tu psique.");
 $preguntas = array($pregunta01, $pregunta02);
 
 if ($fasepregunta == 1)
 {
  $hayrespuesta = false;
  $respelegida = -1; /* Si no, no funciona el javascript obligatorio (se "para"). */
  if (!isset($_GET["pregelegida"])) /* Caso primero, no hay ni una pregunta elegida. Se elige. */
  /* Si se pulsa en "evaluar", y no hay respuesta elegida, navegamos igual, por lo que hay que "recordar". Esta pantalla tiene varias fases (estados URL) diferenciadas, ¡es la locura! $cadenona1 es para ir a la siguiente. */ 
  {
   $pregelegida = rand(1, $num_preguntas);
   $cadenona2 = $PHP_SELF."?haypregunta=1&fasepregunta=1&pregelegida=".$pregelegida;
   echo ($preguntas[$pregelegida - 1]["preg"]);
  }
   else /* ya tenemos una pregunta, ¿pero tenemos una respuesta? NO la tenemos si hemos pulsao "evaluar" sin respuesta. */
   {
    $pregelegida = $_GET["pregelegida"];
    $cadenona2 = $PHP_SELF."?haypregunta=1&fasepregunta=1&pregelegida=".$pregelegida;
    echo ($preguntas[$pregelegida - 1]["preg"]);
    if (isset($_GET["respelegida"]))
    {$hayrespuesta = true; $respelegida = $_GET["respelegida"]; 
     $cadenona1 = $PHP_SELF."?haypregunta=1&fasepregunta=2&pregelegida=".$pregelegida."&respelegida=".$respelegida;}
   }
  $respuesta1 = $preguntas[$pregelegida-1]["opc1"];
  $respuesta2 = $preguntas[$pregelegida-1]["opc2"];
  ?>
  <form name=principal method='get'>
  <style type="text/css">
   a {color: red; background-color: #d8da3d }
  </style>
   <radio button name="var" multiple="yes">
   <input type="radio" name="var" value= "r1" onChange='hayrespuesta();' ><?php echo $respuesta1; ?><BR>
   <input type="radio" name="var" value= "r2" onChange='hayrespuesta();' ><?php echo $respuesta2; ?><BR>

   <script type="text/javascript"> 
   /* Lo que dije antes. Si se pulsa en "evaluar", y no hay respuesta elegida, navegamos igual, por lo que hay que "recordar". */ 
   var mivar = "<?php echo $hayrespuesta; ?>";
   var miindice = "<?php echo $respelegida; ?>";
   if (mivar == true)
   {
    document.principal.var[miindice-1].checked = 1;     
   }

   function hayrespuesta()  
   {
    /* Ponemos esta función para actualizar el estado por URL, ya que el link requiere este parámetro. Sí, es todo bastante enrevesadillo ji ji. */ 
    var i;
    var j = 0;
    for (i = 0; i < 2; i++)
    {
     if (document.principal.var[i].checked) {j = i; break;}
    }

    var jsVar = "<?php echo $cadenona2; ?>";
    j = j + 1;
    window.location.href = jsVar + "&respelegida=" + j;
   }
 
   </script>     

   <a href=<?php
    if (isset($_GET["respelegida"])) echo $cadenona1; else echo $cadenona2?>> Evaluación </a> </BR>
  </form>
  <?php
 }

 if ($fasepregunta == 2)
 {
  $cadenona1 = $PHP_SELF."?nivel=0&nodo=0";
  $cadenona2 = $PHP_SELF."?haypregunta=1&fasepregunta=1";
  $numpregunta = $_GET["pregelegida"];
  $numrespuesta = $_GET["respelegida"];
  if ($numrespuesta == 1) $evaluacion = $preguntas[$numpregunta-1]["eval1"];
  if ($numrespuesta == 2) $evaluacion = $preguntas[$numpregunta-1]["eval2"];
  if ($numrespuesta == 3) $evaluacion = $preguntas[$numpregunta-1]["eval3"];
  if ($numrespuesta == 4) $evaluacion = $preguntas[$numpregunta-1]["eval4"]; /* Máximo nº de respuestas. */
  echo ($evaluacion);
  ?>

  <form method='get'>
   <style type="text/css">
    a {color: red; background-color: #d8da3d }
   </style>
   <a href=<?php echo $cadenona2?>>Otra pregunta</a> 
   <a href=<?php echo $cadenona1?>>Volver</a> 
  </form>
  <?php
 }
}
?>