<?php
 // SE PUEDEN AÑADIR PREGUNTAS AL ARRAY "$PREGUNTAS": entre comillas simples si el texto contiene dobles.
 // NECESITAS EL XAMPP O UN HOST CON SERVIDOR APACHE O...
 // ¿Iniciado (quizás en post) como variable de sesión y el array también (quizás pillar de .txt)? ¿OnKeyDown para el formulario en vez de labels?
 
 $pregunta01 = array('preg' => "¿Si quito la sal, me baja la tensión?", 'resp' => "NO, es más, subirá. La sal hace que el cuerpo funcione mejor. Si tomas agua embotellada, que tiene pocos minerales, se encharca la sangre, y el corazón tiene que trabajar más.");
 $pregunta02 = array('preg' => "¿Cuál es el último siglo de esclavismo real para el ser humano en La Tierra?", 'resp' => "¡Pues es el 21! En el 18, los masones quitaron tierras a la gente, que tuvo que ir a la ciudad, que permite la acumulación de poder del malo, y que el narcisista se oculte bien. El 19 fue el primer año de esclavismo real, con minas de carbón...");
 $pregunta03 = array('preg' => "¿Qué premios que te has ganado entre comillas, regalas al poco de recibirlos?", 'resp' => "Los Grammies.");
 $pregunta04 = array('preg' => '¿Para qué sirve la "UE"?', 'resp' => "Para destruir Europa. Facilita la entrada de musulmanes, muy contentos ahora, pero serán sustituidos por chinos, que son más obedientes. En cambio, están los valores cristianos, y la raza blanca, que busca la verdad con ahínco.");
 $pregunta05 = array('preg' => "¿Cuál es la energía inteligente?", 'resp' => 'La escalar (del vacío...), el éter. Y carga plasma para sanarte... Y dentro de las energías "vulgares", la nuclear (ahora es casi 100% segura). La térmica es más inteligente que la eólica (molesta a animales y personas) y la solar (crea "hornos"...). NO sé si hay que extraer el carbón, pero sí el petróleo (es suciedad terráquea que se crea rápido, NO viene de dinosaurios). Para finalizar, el CO2 da vida, y la Tatcher se inventó que era dañino, para librarse de los mineros galeses, que luchaban por la justicia.');
 $pregunta06 = array('preg' => "¿De dónde salió Hitler, quién fue su titiritero?", 'resp' => 'Hitler salió de los aliados, del MI6 británico. Su labor era convertir a los judíos en víctimas, para conseguir "cosas". Cuando Hitler se hizo poderoso, e iba a ganar a la URSS, los aliados, títeres de fuerzas oscuras, NO podían permitirlo (USA y URSS eran como izquierda y derecha, ¡primos! Manejados por los RotSchild / Rothchild, que tienen titiriteros por encima, como algunos jesuitas, nobleza negra...). Franco NO era malo (aunque le faltaba "sutilidad"; y capacidad de mando, en sus últimos 20 años, ahí, manipulado), Hitler sí.');
$pregunta07 = array('preg' => "¿Qué tienen en común el Catolicismo y los mitos griegos?", 'resp' => 'Ambos tienen como misión hacer que olvidemos la auténtica Historia reciente (últimos 13.000 años), que es una lucha entre paios (raza "naranja", malos) y bere (blancos, altos). Los mitos griegos ponen a los bere como monstruos (Grayas, Gorgonas...), seres alejados de donde viven los humanos (al morir el bere Alejandro Magno, por culpà de TeoDos / teo II; entonces, lo bere "es viejo"). El Catolicismo fue un chantaje a los bere: si queréis que NO se maten más niños, nos inventamos a un salvador (sí, en el siglo IV o por ahí), basado en un bere, para borrar de una vez por todas la Historia Bere. El original es Iezus, nacido sin ombligo, y del que vienen los blancos de la Tierra. Los negros son los originales de la Tierra. Santiago (que quiso la paz paiobere) sí que existió. Alexandre Eleazar, nieto del Zar Nicolás II, nos habló de paios y bere, con bastante solidez. Magno entregó "la sabiduría" a los iudas (paios), pero algunos se convirtieron en magos negros. Eso sí, hay hebreos de verdad, cumplidores, siendo la religión judía más pura, más elevada que el Cristianismo...');

 $preguntas = array($pregunta01, $pregunta02, $pregunta03, $pregunta04, $pregunta05, $pregunta06, $pregunta07); 
 
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

 global $preguntas;
 
 $pregelegida = rand(1, count($preguntas));
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
