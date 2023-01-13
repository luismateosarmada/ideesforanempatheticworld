<?php
if (!isset ($_GET["estado"])) 
 Presentar(); 
  else  
   Procesar();  
?> 

<?php
function Presentar()
{
 global $PHP_SELF;
 $haynombre = false;
 $valor = "";
 if (isset($_GET["nombrevalor"]))
 {
  $haynombre = true;
  $valor = $_GET["nombrevalor"];
 }
?>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
- Calcula número de alma (lo que ya tenemos en el alma, ¿has desreprimido para acceder?), de máscara (desempeño en mundo material), y número Meta.<BR><BR>
Caracteres permitidos (incluye mayúsculas): üabcdefghijklmnñopqrstuvwxyz (y espacios). Nada de acentos ortográficos... Quizás mejore el programa con el tiempo.<BR>
<?php if (isset($_GET["error"])) echo $_GET["error"]; ?>
<INPUT TYPE=TEXT NAME="nombre"><BR>
<INPUT TYPE=hidden NAME="estado" VALUE="fase1">
<INPUT TYPE=submit VALUE="OK">
<script type="text/javascript">  
 var mivar = "<?php echo $haynombre; ?>";
 if (mivar == true)
  document.getElementsByName("nombre")[0].value = "<?php echo $valor; ?>"; 
</script>

<BR><BR><BR>RELATIVO AL NOMBRE (NO ES NOMBRELOGÍA): ¿Tu nombre vibra y la primera vocal te define en buena parte? ¿NO te gusta escuchar el nombre de la gente que te ha hecho mal? ¿Se puede remediar quitado traumas y eso (desreprimir por Jung...)? ¿Si tu nombre, como apelativo, tiene la primera vocal repetida, automaticamente tendrás un problema psicológico?:
<BR>##primera vocal de nombre (como apelativo, que luego está tu nombre de nacimiento / de Nombrelogía):
<BR>- A: viniste a comerte el mundo, a liderar (yo diría a ser jefe) y avanzar, tumbando muros. 2 aes o más: hablas mal de los demás.
<BR>- E: te aburres fácilmente y necesitas cambiar constantemente. 2 o más: cuida tu mal genio.
<BR>- I: muy emotivo y sensible. 2 o más: podrías pasarte de susceptible.
<BR>- O: muy responsable, servicial al extremo. Tienes un consejo para todo el mundo. 2 o más: tendencia al chantaje emocional.
<BR>- U: muy racional; alegre y optimista, con gran don de la palabra. 2 o más: tenderás a acumular cosas sin valor.
<BR>##Si fuese niño, lo podría llamar Julio (como apelativo):
<BR>- A no, porque se quieren comer el mundo, es como tener potencia sin control.
<BR>- E no, porque les gusta viajar y no se comprometen.
<BR>- Con la i, sí. ¿Son intuitivos y creativos no?
<BR>- Los "o" me suenan a brutotes, y yo quiero un hijo finolis je je.

<img src="imag.jpg">
  
</FORM>
<?php
}
?> 

<?php 
function Procesar()
{ 
 /* Si el nombre está mal (algún caracter no permitido), redireccionamos con Javascript al formulario */
 global $nombre; /* Viene de "$nombre", del formulario, gracias "al submit". ¿Globales sin submit? */
 global $PHP_SELF;
 $nombre = $_GET["nombre"];

 $cadenona1 = $PHP_SELF."?nombrevalor=".$nombre;
 
 if ($nombre != "")
  $error = calcularerror($nombre);
   else
    $error = "El nombre debe existir";
 $nombrevalido = true;
 if ($error != "")
  $nombrevalido = false;
 $cadenona0 = $PHP_SELF."?nombrevalor=".$nombre."&error=".$error;

 $mascarabruta = 0;
 $realbruto = 0;
 $mascara = 0;
 $real = 0;
 $objetivo = 0;
 if ($nombrevalido == true)
  sacarmascararealyobjetivo($nombre, $mascara, $real, $objetivo, $mascarabruta, $realbruto);
?>
<script type="text/javascript">
 var mivar = "<?php echo $nombrevalido; ?>";
 if (mivar == false)
 {
  var jsVar = "<?php echo $cadenona0; ?>";
  window.location.href = jsVar;
 }
</script>
<FORM METHOD=GET>
- 1:ajs, 2:bkt, 3:cluü, 4:dmv, 5:enñw, 6:fox, 7:gpy, 8:hqz, 9:ir. Luis Mateos Armada (nombre completo de nacimiento debe ser).<BR>
* Consonantes (MÁSCARA) suman 28 = 10 = 1.<BR>
* Vocales (REAL) suman 27 = 9. "Y griega" es vocal (consonante si va entre vocales, como en Mayo; y si introduce una palabra y despues va vocal). La U es muda en gue, que, gui y qui.<BR>
* Meta = 9 + 1 = 10 = 1. ¡Ser 1!<BR><BR>
<?php echo "Nombre: ".$nombre ?><BR>
<?php echo "Máscara bruta: ".$mascarabruta ?><BR>
<?php echo "Máscara: ".$mascara ?><BR>
<?php echo "Real bruto: ".$realbruto ?><BR>
<?php echo "Real: ".$real ?><BR>
<?php echo "Objetivo: ".$objetivo ?><BR>
<BR>
##Numeros de alma, máscara u objetivo:
<BR>- 1. Eres independiente en creencias, y la libertad de pensamiento es el objetivo de tus deseos mas internos.
<BR>* No quieres permanecer en una posicion secundaria entre tu gente. Si tu individualidad es muy fuerte, comprueba si abusas de tu actitud de mando.
<BR>- 2. Deseas paz y harmonia (mediador / Libra), tienes tacto, y puedes adaptarte a cualquier situacion. Atrevete a hacer lo que sabes que es justo, y a ganar a tus semejantes en comprension. Si las emociones te disturbian, se fuerte y decide.
<BR>- 3. Concienzudo y perseverante (obligaciones). Sabes que la imaginación y la inspiracion dan los mejores resultados cuando se ayuda a los demás. Haz caso a los impulsos de crear / hacer lo que te interesa.
<BR>* Si alguien esta de bajón, dile algo que lo haga resurgir.
<BR>* Da a conocer tus ideales y prodija tu buen animo y optimismo.
<BR>- 4. Organizacion, que te puede dar exito material. Muy practico, leal, equilibrado, inspiras confianza, y los demas saben que les vas a tratar equitativamente. Conviertes tus sueños en realidad en lo laboral y lo sentimental, pues te lo tomas en serio (planeas).
<BR>- 5. No toleras que limiten tus ideales ni forma de pensar (Acuario). Te empujan los cambios y el tener diferentes puntos de vista (no te aburres).
<BR>* Consideras los viajes educativos y enriquecedores.
<BR>* NO aguantas la estrechez.
<BR>- 6. Belleza, armonia y paz. Con los que amas eres afectuoso, atento y leal. Deja a tu familia expresar sus deseos aunque no estes muy conforme con sus decisiones.
<BR>- 7. Eres reservado, buen pensador, analitico y mediador. NO quieres ruido. Refinado y sensible, con frecuencia con poderes psiquicos, muy capaz de vivir solo alcanzando el más alto orden mistico de los humanos.
<BR>* Beneficia a la humanidad a traves de la Filosofia.
<BR>- 8. Ambicioso, los obstaculos a la meta (personas...) te los quitas de encima (yo no competiría con un 8) por naturaleza. NO eres facil de manejar. Tu tarea es sobresalir, porque tienes gran capacidad para manejar grupos y empresas. Tus dotes psicolojicas te ayudaran a comprender a las masas con las que trabajas.
<BR>* Vas a tener que confiar plenamente en ti para juiarte y permanecer en la cumbre.
<BR>- 9. Solidario, idealista, desinteresado. Vienes a servir de guía y destacarte (contactando con lideres sociales...), a luchar por el bien comun. Intuitivo, sensitivo e imaginativo. Necesitas reconocimiento y valoracion de todo lo que haces, y dar y recibir amor. ¿El objetivo es demostrar mi autosuficiencia y autonomia (suena a 1)? Altibajos (sueños de grandeza a depresion si no cubro las expectativas). Pruebas: rechazo, abandono, desvalorizacion, poco reconocimiento, personas que abusan de tu generosidad...
<BR>- 11: has seguido la via espiritual por mucho tiempo. Valor, talento y capacidad de mando. Comprensiva, juiciosa, intuitiva, con frecuencia clarividente. Fuerza (interior) para superar las adversidades y luchar.
<BR>- 22: desea el exito material; fuerte impulso de continuar la construccion de vidas pasadas. Te fijas metas mas altas que el resto, pero manten los pies en la tierra por favor.
<BR>- 33: ve con total claridad las condiciones del mundo futuro, y se sacrifica por la humanidad para aportar paz. A veces, el impulso del alma estara en contraposicion con el entorno, pero actuaras tratando de comprender puntos de vista ajenos. Esto puede colocarte en una posicion inferior, pero siempre tendras la esperanza de alcanzar otra mas propicia.
<BR>- 44 (se parece al 33 del eneagrama): aunas lo practico con lo filosofico, para dar lustre a la sociedad, ¿inventos?. Hacerte cargo de grandes responsabilidades. Tu alma te guiara. Resolver los problemas del dia a dia y ayudar a los demas a organizar sus vidas, son cualidades innatas.
<BR>
<a href=<?php echo str_replace(' ', '%20', $cadenona1);?>>Volver</a><BR>
</FORM>
<?php
} 
?>

<?php
function calcularerror($nombre)
{
 $minus='ü';

 /* lower de 'ü', a saber lo que dará. */
 $permitidos=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z',' ','ü');
 
 $nombre2 = mb_strtolower($nombre, 'UTF-8');
 /* $nombre2 = aminusculas($nombre); */

 /* El foreach(mb_str_split($nombre2) as $fila) no fuciona en el webhost. O eso creo. me dio error, ¿no puse 'UTF-8'? */
 $i = 0;
 do 
 {
  $fila = $nombre2[$i];

  $permitido = false;
  /* ¿Nada de !in_array($fila, $permitidos) por ü? */
  /* %20 = espacio. */
  if (($fila == ' ') || ($fila == 'a') || ($fila == 'b') || ($fila == 'c') || ($fila == 'd') || ($fila == 'e'))
   $permitido = true;
  if (($fila == 'f') || ($fila == 'g') || ($fila == 'h') || ($fila == 'i') || ($fila == 'j'))
   $permitido = true;
  if (($fila == 'k') || ($fila == 'l') || ($fila == 'm') || ($fila == 'n') || ($fila == 'ñ'))
   $permitido = true;
  if (($fila == 'o') || ($fila == 'p') || ($fila == 'q') || ($fila == 'r') || ($fila == 's'))
   $permitido = true;
  if (($fila == 't') || ($fila == 'u') || ($fila == 'v') || ($fila == 'w') || ($fila == 'x'))
   $permitido = true;
  if (($fila == 'y') || ($fila == 'z') )
   $permitido = true;

  /* $encontrado = strpos(substr($nombre2, 1, strlen($nombre2)), 'ü'); */
  /* $encontrado = strstr($nombre2, 'ü'); */ /* Ta mal, y permite todo tipo de fallos si hay ü. */
  $encontrado = strpos(mb_substr($nombre2, $i, 1, 'UTF-8'), 'ü');
  if ($encontrado !== false) {$permitido = true; $i++;}

  /* if (in_array($fila, $permitidos) == true) $permitido = true; */

  if ($permitido == false) return("caracter no permitido: ".utf8_encode($fila));
  $i++;
 }
 while ($i < strlen($nombre2));

 return("");
}
?>

<?php
function aminusculas($nombre)
{
 /* Función deficitaria. */
 $i = 0;
 $devolver = "";
 $mayus='Ü'; /* Un array (para usar "in_array"). */
 do
 {
  $fila = $nombre[$i];
  if ($fila == 'A') $fila = 'a';
  if ($fila == 'B') $fila = 'b';
  if ($fila == 'C') $fila = 'c';
  if ($fila == 'D') $fila = 'd';
  if ($fila == 'E') $fila = 'e';
  if ($fila == 'F') $fila = 'f';
  if ($fila == 'G') $fila = 'g';
  if ($fila == 'H') $fila = 'h';
  if ($fila == 'I') $fila = 'i';
  if ($fila == 'J') $fila = 'j';
  if ($fila == 'K') $fila = 'k';
  if ($fila == 'L') $fila = 'l';
  if ($fila == 'M') $fila = 'm';
  if ($fila == 'N') $fila = 'n';
  if ($fila == 'Ñ') $fila = 'ñ';
  if ($fila == 'O') $fila = 'o';
  if ($fila == 'P') $fila = 'p';
  if ($fila == 'Q') $fila = 'q';
  if ($fila == 'R') $fila = 'r';
  if ($fila == 'S') $fila = 's';
  if ($fila == 'T') $fila = 't';
  if ($fila == 'U') $fila = 'u';
  if ($fila == 'V') $fila = 'v';
  if ($fila == 'W') $fila = 'w';
  if ($fila == 'X') $fila = 'x';
  if ($fila == 'Y') $fila = 'y';
  if ($fila == 'Z') $fila = 'z';
  $devolver = $devolver.$fila;
  
  $i++;
 }
 while ($i < strlen($nombre));

 return $devolver;
}
?>

<?php
function sacarmascararealyobjetivo($nombre, &$mascara, &$real, &$objetivo, &$mascarabruta, &$realbruto)
{
 /* lower de 'ü', a saber lo que dará. */
 $minus='ü';
 
 $cuentavocal = 0;
 $cuentaconsonante = 0;
 $cuentacar = 0;
 /* $nombre2 = aminusculas($nombre); */
 $nombre2 = mb_strtolower($nombre, 'UTF-8');
 echo $nombre2;
 /* El foreach(mb_str_split($nombre2) as $fila) no fuciona en el webhost. */
 do
 {
  $v = 0;
  $c = 0;
  $cuentacar++;
  $fila = $nombre2[$cuentacar-1];
  if ($fila == 'y')
  {
   if ($cuentacar == 1)
   {
    /* Yrina, Yates. */
    if (strlen($nombre2) == 1)
     {$cuentavocal = 7; $v = 7;}
      else
      {
       if (esvocal($nombre2[$cuentacar]) == true)
        {$cuentaconsonante = 7; $c = 7;}
         else {$cuentavocal = 7; $v = 7;}
      }
   }
    else
    if ($cuentacar == strlen($nombre2)) {$cuentavocal = $cuentavocal + 7; $v = 7;}
    else
    {
     /* Si hay una vocal después y antes, es consonante. */
     if ( (esvocal($nombre2[$cuentacar]) == true) && (esvocal($nombre2[$cuentacar-2]) == true) )
      {$cuentaconsonante = $cuentaconsonante + 7; $c = 7;}
       else {$cuentavocal = $cuentavocal + 7; $v = 7;}
    }
  }

  if ($fila == 'u')
  {
   if ( ($cuentacar > 1) && ($cuentacar < strlen($nombre2)) && (($nombre2[$cuentacar] == 'e') || ($nombre2[$cuentacar] == 'i')) && (($nombre2[$cuentacar-2] == 'g') || ($nombre2[$cuentacar-2] == 'q')) )
    {} else {$cuentavocal = $cuentavocal + 3; $v = 3;}
  }

  /* 1:ajs, 2:bkt, 3:clu, 4:dmv, 5:enñw, 6:fox, 7:gpy, 8:hqz, 9:ir. */
  if ($fila == 'a') {$cuentavocal = $cuentavocal + 1; $v = 1;}
  elseif ($fila == 'e') {$cuentavocal = $cuentavocal + 5; $v = 5;}
  elseif ($fila == 'i') {$cuentavocal = $cuentavocal + 9; $v = 9;}
  elseif ($fila == 'o') {$cuentavocal = $cuentavocal + 6; $v = 6;}
  elseif ($fila == 'j') {$cuentaconsonante = $cuentaconsonante + 1; $c = 1;}
  elseif ($fila == 's') {$cuentaconsonante = $cuentaconsonante + 1; $c = 1;}
  elseif ($fila == 'b') {$cuentaconsonante = $cuentaconsonante + 2; $c = 2;}
  elseif ($fila == 'k') {$cuentaconsonante = $cuentaconsonante + 2; $c = 2;}
  elseif ($fila == 't') {$cuentaconsonante = $cuentaconsonante + 2; $c = 2;}
  elseif ($fila == 'c') {$cuentaconsonante = $cuentaconsonante + 3; $c = 3;}
  elseif ($fila == 'l') {$cuentaconsonante = $cuentaconsonante + 3; $c = 3;}
  elseif ($fila == 'd') {$cuentaconsonante = $cuentaconsonante + 4; $c = 4;}
  elseif ($fila == 'm') {$cuentaconsonante = $cuentaconsonante + 4; $c = 4;}
  elseif ($fila == 'v') {$cuentaconsonante = $cuentaconsonante + 4; $c = 4;}
  elseif ($fila == 'n') {$cuentaconsonante = $cuentaconsonante + 5; $c = 5;}
  elseif ($fila == 'ñ') {$cuentaconsonante = $cuentaconsonante + 5; $c = 5;}
  elseif ($fila == 'w') {$cuentaconsonante = $cuentaconsonante + 5; $c = 5;}
  elseif ($fila == 'f') {$cuentaconsonante = $cuentaconsonante + 6; $c = 6;}
  elseif ($fila == 'x') {$cuentaconsonante = $cuentaconsonante + 6; $c = 6;}
  elseif ($fila == 'g') {$cuentaconsonante = $cuentaconsonante + 7; $c = 7;}
  elseif ($fila == 'p') {$cuentaconsonante = $cuentaconsonante + 7; $c = 7;}
  elseif ($fila == 'h') {$cuentaconsonante = $cuentaconsonante + 8; $c = 8;}
  elseif ($fila == 'q') {$cuentaconsonante = $cuentaconsonante + 8; $c = 8;}
  elseif ($fila == 'z') {$cuentaconsonante = $cuentaconsonante + 8; $c = 8;}
  elseif ($fila == 'r') {$cuentaconsonante = $cuentaconsonante + 9; $c = 9;}
  else
  {$encontrado = strstr($nombre2, 'ü'); /* Está mal, pero "tira" si sólo hay ü como carácter especial. */
   if ($encontrado != false) {$cuentavocal = $cuentavocal + 3; $v = 3; $cuentacar++;}}

  echo "##".utf8_encode($fila);
  if ($c > 0)
   echo " - conso".$c."  ";
  if ($v > 0)
   echo " - vocal".$v."  ";  
 }
 while ($cuentacar < strlen($nombre2));
 
 $mascarabruta = $cuentaconsonante;
 $realbruto = $cuentavocal;

 /* Si son 2 cifras, las sumamos. Si vuelven a ser 2 cifras, las sumamos, nada de funciones recursivas o esquemas iterativos while. */
 if ($cuentavocal >= 10)
  $cuentavocal = intval ($cuentavocal / 10) + $cuentavocal % 10;
 if ($cuentavocal >= 10)
  $cuentavocal = intval ($cuentavocal / 10) + $cuentavocal % 10;
 if ($cuentavocal >= 10)
  $cuentavocal = intval ($cuentavocal / 10) + $cuentavocal % 10; 
 if ($cuentaconsonante >= 10)
  $cuentaconsonante = intval ($cuentaconsonante / 10) + $cuentaconsonante % 10;
 if ($cuentaconsonante >= 10)
  $cuentaconsonante = intval ($cuentaconsonante / 10) + $cuentaconsonante % 10;
 if ($cuentaconsonante >= 10)
  $cuentaconsonante = intval ($cuentaconsonante / 10) + $cuentaconsonante % 10;
 $mascara = $cuentaconsonante;
 $real = $cuentavocal;
 $objetivo = $mascara + $real;
 if ($objetivo >= 10) /* máximo 18 */
  $objetivo = intval ($objetivo / 10) + $objetivo % 10;
}
?>

<?php
function esvocal($letra)
{
 return (($letra == 'a') || ($letra == 'e') || ($letra == 'i') || ($letra == 'o') || ($letra == 'u'));
}
?>

##$nombre = "ÁdkhfÜ"; echo mb_strtolower($nombre, 'UTF-8'); /* Lo hace genial. */
<BR>##foreach(str_split($nombre) as $fila) /* \n espacia. NO hay problema en usar esquemas iterativos "caseros" "do-while". */
<BR> echo $fila."\n"; /* Lo hace de pena (2 caracteres por cada raro), y el webhost, no admite la versión mb (supongamos). */
<BR>##$nombre = mb_strtolower($nombre, 'UTF-8'); $encontrado = strstr($nombre, 'ü');
<BR>if ($encontrado !== false) echo("encontrado"); /* Lo hace genial, no pones nada con 'tü', pero sí con 'fü'. */
<BR>##$permitidos=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z',' ','ü');
<BR>if (in_array('ü', $permitidos)) echo("encontrado2"); /* Funciona genial. */
<BR>##echo (substr($nombre, 2, strlen($nombre))); /* Pone la d, porque á ocupa 2 posiciones. */ echo (strlen($nombre)); /* Sale 8. */
<BR>echo (mb_strlen($nombre, 'UTF-8')); /* Sale bien, 6. ¿Admitirá el webhost esta función? */
<BR>echo (mb_substr($nombre, 1, strlen($nombre), 'UTF-8')); /* Pone la d, ahora está bien. ¿Admitirá el webhost esta función? */
<BR>##$encontrado = strpos(mb_substr($nombre, 0, 1, 'UTF-8'), 'á'); if ($encontrado !== false) echo("encontrado3"); /* Va genial. */
<BR>
<?php
$nombre = "ÁdkhfÜ";

echo mb_strtolower($nombre, 'UTF-8'); /* Lo hace genial. */

foreach(str_split($nombre) as $fila) /* \n espacia. NO hay problema en usar esquemas iterativos "caseros" "do-while". */
 echo $fila."\n"; /* Lo hace de pena (2 caracteres por cada raro), y el webhost, no admite la versión mb (supongamos). */

$nombre = mb_strtolower($nombre, 'UTF-8');
$encontrado = strstr($nombre, 'ü');
if ($encontrado !== false) echo("encontrado"); /* Lo hace genial, no pones nada con 'tü', pero sí con 'fü'. */

$permitidos=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z',' ','ü');
if (in_array('ü', $permitidos)) echo("encontrado2"); /* Funciona genial. */

echo (substr($nombre, 2, strlen($nombre))); /* Pone la d, porque á ocupa 2 posiciones. */
echo (strlen($nombre)); /* Sale 8. */
echo (mb_strlen($nombre, 'UTF-8')); /* Sale bien, 6. ¿Admitirá el webhost esta función? */
echo (mb_substr($nombre, 1, strlen($nombre), 'UTF-8')); /* Pone la d, ahora está bien. ¿Admitirá el webhost esta función? */

$encontrado = strpos(mb_substr($nombre, 0, 1, 'UTF-8'), 'á');
if ($encontrado !== false) echo("encontrado3"); /* Va genial. */
?>
