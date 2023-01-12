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
Caracteres permitidos (incluye mayúsculas): abcdefghijklmnñopqrstuvwxyz (y espacios). Con 'ü', el cálculo debe ser manual. Y nada de acentos ortográficos... Quizás mejore el programa con el tiempo.<BR>
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
- 1:ajs, 2:bkt, 3:clu, 4:dmv, 5:enñw, 6:fox, 7:gpy, 8:hqz, 9:ir. Luis Mateos Armada (nombre completo de nacimiento debe ser).<BR>
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
 /* lower de 'ü', a saber lo que dará. */
 $permitidos=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z',' ');
 
 foreach(str_split(strtolower($nombre)) as $fila)
 { 
  if (!in_array($fila, $permitidos))
   return("caracter no permitido: ".$fila); 
 }

 return("");
}
?>

<?php
function sacarmascararealyobjetivo($nombre, &$mascara, &$real, &$objetivo, &$mascarabruta, &$realbruto)
{
 /* lower de 'ü', a saber lo que dará. */
 $cuentavocal = 0;
 $cuentaconsonante = 0;
 $cuentacar = 0;
 $nombre2 = strtolower($nombre);
 foreach(str_split($nombre2) as $fila)
 {
  $v = 0;
  $c = 0;
  $cuentacar++;
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
    {} else {$cuentavocal = $cuentavocal + 3; $v = 7;}
  }

  /* 1:ajs, 2:bkt, 3:clu, 4:dmv, 5:enñw, 6:fox, 7:gpy, 8:hqz, 9:ir. */
  if ($fila == 'a') {$cuentavocal = $cuentavocal + 1; $v = 1;}
  if ($fila == 'e') {$cuentavocal = $cuentavocal + 5; $v = 5;}
  if ($fila == 'i') {$cuentavocal = $cuentavocal + 9; $v = 9;}
  if ($fila == 'o') {$cuentavocal = $cuentavocal + 6; $v = 6;}
  if ($fila == 'j') {$cuentaconsonante = $cuentaconsonante + 1; $c = 1;}
  if ($fila == 's') {$cuentaconsonante = $cuentaconsonante + 1; $c = 1;}
  if ($fila == 'b') {$cuentaconsonante = $cuentaconsonante + 2; $c = 2;}
  if ($fila == 'k') {$cuentaconsonante = $cuentaconsonante + 2; $c = 2;}
  if ($fila == 't') {$cuentaconsonante = $cuentaconsonante + 2; $c = 2;}
  if ($fila == 'c') {$cuentaconsonante = $cuentaconsonante + 3; $c = 3;}
  if ($fila == 'l') {$cuentaconsonante = $cuentaconsonante + 3; $c = 3;}
  if ($fila == 'd') {$cuentaconsonante = $cuentaconsonante + 4; $c = 4;}
  if ($fila == 'm') {$cuentaconsonante = $cuentaconsonante + 4; $c = 4;}
  if ($fila == 'v') {$cuentaconsonante = $cuentaconsonante + 4; $c = 4;}
  if ($fila == 'n') {$cuentaconsonante = $cuentaconsonante + 5; $c = 5;}
  if ($fila == 'ñ') {$cuentaconsonante = $cuentaconsonante + 5; $c = 5;}
  if ($fila == 'w') {$cuentaconsonante = $cuentaconsonante + 5; $c = 5;}
  if ($fila == 'f') {$cuentaconsonante = $cuentaconsonante + 6; $c = 6;}
  if ($fila == 'x') {$cuentaconsonante = $cuentaconsonante + 6; $c = 6;}
  if ($fila == 'g') {$cuentaconsonante = $cuentaconsonante + 7; $c = 7;}
  if ($fila == 'p') {$cuentaconsonante = $cuentaconsonante + 7; $c = 7;}
  if ($fila == 'h') {$cuentaconsonante = $cuentaconsonante + 8; $c = 8;}
  if ($fila == 'q') {$cuentaconsonante = $cuentaconsonante + 8; $c = 8;}
  if ($fila == 'z') {$cuentaconsonante = $cuentaconsonante + 8; $c = 8;}
  if ($fila == 'r') {$cuentaconsonante = $cuentaconsonante + 9; $c = 9;}

  if ($c > 0)
   echo "##".$fila." - conso".$c."  ";
  if ($v > 0)
   echo "##".$fila." - vocal".$v."  ";
 }

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
