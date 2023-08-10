<?php /* Probar Javascript: dividir en trocitos, y un alert por trocito. */ ?>
<?php /* Mirar sacarerrordia y poner la definición dinámica del combobox de días */ ?>
<?php
 $errortzolkin=false;
 $erroranio="";
 $errormes="";
 $errordia="";
 if ( (!isset ($_GET["nodo"])) || ($_GET["nodo"] == 0) ) /* se pretende ir al nodo cero */
  pantalla_principal($erroranio, $errormes, $errordia); /* No se calculan los errores, no los hay en este caso, por casualidad */
   else
   if ($_GET["nodo"] == 1)
    norte();
    else
    if (($_GET["nodo"]) == 2) /* se pretende ir al nodo 2 desde el 0 */
    {
     $anio = 0;
     if (isset ($_GET["anio"]))
     {
      $anio = $_GET["anio"];
      $erroranio= sacarerroranio($anio);
      
      if ($erroranio != "")
       $errortzolkin=true;
     }
      else
      {
       $errortzolkin = true;
       $erroranio = "Debe haber año";
      }
     
     $mes = 0;
     if (isset ($_GET["mes"]))
     {
      $mes = $_GET["mes"];
      $errormes= sacarerrormes($mes);
      
      if ($errormes != "")
       $errortzolkin=true;
     }
      else
      {
       $errortzolkin = true;
       $errormes = "Debe haber mes";
      }
 
     $dia = 0;
     if (isset ($_GET["dia"]))
     {
      $dia = $_GET["dia"];
      
      if ($dia == -1) 
       $errordia = "Debe haber dia";
        else
         if ( ($erroranio == "") && ($errormes == "") )
          $errordia= sacarerrordia($dia, $anio, $mes);
      
      if ($errordia != "")
       $errortzolkin=true;
     }
      else
      {
       $errortzolkin = true;
       $errordia = "Debe haber dia";
      }

     if ($errortzolkin == false)
      tzolkin($anio, $mes, $dia);
       else
        pantalla_principal($erroranio, $errormes, $errordia);
    }
?>

<?php
function sacarerroranio($anio)
{
 if ($anio == -1)
  return("Debe haber año");

 /* Entre 1922 y 2020 */
 if ( (!is_numeric($anio)) OR (intval($anio) != $anio) OR ($anio > 2020) OR ($anio <1922) )
  return "mal";
 return "";
}
?>

<?php
function sacarerrormes($mes)
{
 if ($mes == -1)
  return("Debe haber mes");

 if ( (!is_numeric($mes)) OR (intval($mes) != $mes) OR ($mes > 12) OR ($mes < 1) )
  return "mal";
 return "";
}
?>

<?php
function sacarerrordia($dia, $anio, $mes)
{
 /* Realmente, depende del año y del mes; calculamos el máximo así. */
 if ( (!is_numeric($dia)) OR (intval($dia) != $dia) OR ($dia > 31) OR ($dia < 1) )
  return "mal";

 $tope = 28;

 /* Miramos los febreros. Bisiestos, aquellos cuyo mod 4 sea 0*/
 if ($mes == 2)
 {
  $modulo = $anio % 4;
  if ($modulo == 0)
   $tope = 29;
 } 

 if ($mes == 1) $tope = 31;
 if ($mes == 3) $tope = 31;
 if ($mes == 4) $tope = 30;
 if ($mes == 5) $tope = 31;
 if ($mes == 6) $tope = 30;
 if ($mes == 7) $tope = 31;
 if ($mes == 8) $tope = 31;
 if ($mes == 9) $tope = 30;
 if ($mes == 10) $tope = 31;
 if ($mes == 11) $tope = 30;
 if ($mes == 12) $tope = 31;

 if ($dia > $tope) return "mal";

 return "";
}
?>

<?php
function pantalla_principal($erroranio, $errormes, $errordia)
{
 global $PHP_SELF;

 $cadenona2 = $PHP_SELF."?nodo=2";
 $hayanio=false;
 $haymes=false;
 $haydia=false; 
 if (isset($_GET["anio"]))
 {
  $anio = $_GET["anio"];
  $hayanio=true;
  $cadenona2 = $cadenona2."&anio=".$anio;
 }  
 if (isset($_GET["mes"]))
 {
  $mes = $_GET["mes"];
  $haymes=true;
  $cadenona2 = $cadenona2."&mes=".$mes;
 }
 if (isset($_GET["dia"]))
 {
  $dia = $_GET["dia"];
  $haydia=true;
  $cadenona2 = $cadenona2."&dia=".$dia;
 } 
 
 $cadenona0 = $PHP_SELF."?nodo=0";
 $cadenona1 = $PHP_SELF."?nodo=1";
?>
 <FORM METHOD=GET>
 <style type="text/css">
  a {color: red; background-color: #d8da3d }
 </style>

 <a href=<?php echo $cadenona1?>>Misión según Nodo Norte</a><BR>

 <?php echo $erroranio; ?> 
 <?php /* al final no ponemos el input "anio" onClick = recargar. */ ?>
 <select NAME="anio2" onChange='recargar();'>
  <option VALUE="-1">--</option>
  <option VALUE="1922">1922</option>
  <option VALUE="1923">1923</option>
  <option VALUE="1924">1924</option>
  <option VALUE="1925">1925</option>
  <option VALUE="1926">1926</option>
  <option VALUE="1927">1927</option>
  <option VALUE="1928">1928</option>
  <option VALUE="1929">1929</option>
 
  <option VALUE="1930">1930</option>
  <option VALUE="1931">1931</option>
  <option VALUE="1932">1932</option>
  <option VALUE="1933">1933</option>
  <option VALUE="1934">1934</option>
  <option VALUE="1935">1935</option>
  <option VALUE="1936">1936</option>
  <option VALUE="1937">1937</option>
  <option VALUE="1938">1938</option>
  <option VALUE="1939">1939</option>
 
  <option VALUE="1940">1940</option>
  <option VALUE="1941">1941</option>
  <option VALUE="1942">1942</option>
  <option VALUE="1943">1943</option>
  <option VALUE="1944">1944</option>
  <option VALUE="1945">1945</option>
  <option VALUE="1946">1946</option>
  <option VALUE="1947">1947</option>
  <option VALUE="1948">1948</option>
  <option VALUE="1949">1949</option>

  <option VALUE="1950">1950</option>
  <option VALUE="1951">1951</option>
  <option VALUE="1952">1952</option>
  <option VALUE="1953">1953</option>
  <option VALUE="1954">1954</option>
  <option VALUE="1955">1955</option>
  <option VALUE="1956">1956</option>
  <option VALUE="1957">1957</option>
  <option VALUE="1958">1958</option>
  <option VALUE="1959">1959</option>

  <option VALUE="1960">1960</option>
  <option VALUE="1961">1961</option>
  <option VALUE="1962">1962</option>
  <option VALUE="1963">1963</option>
  <option VALUE="1964">1964</option>
  <option VALUE="1965">1965</option>
  <option VALUE="1966">1966</option>
  <option VALUE="1967">1967</option>
  <option VALUE="1968">1968</option>
  <option VALUE="1969">1969</option>

  <option VALUE="1970">1970</option>
  <option VALUE="1971">1971</option>
  <option VALUE="1972">1972</option>
  <option VALUE="1973">1973</option>
  <option VALUE="1974">1974</option>
  <option VALUE="1975">1975</option>
  <option VALUE="1976">1976</option>
  <option VALUE="1977">1977</option>
  <option VALUE="1978">1978</option>
  <option VALUE="1979">1979</option>

  <option VALUE="1980">1980</option>
  <option VALUE="1981">1981</option>
  <option VALUE="1982">1982</option>
  <option VALUE="1983">1983</option>
  <option VALUE="1984">1984</option>
  <option VALUE="1985">1985</option>
  <option VALUE="1986">1986</option>
  <option VALUE="1987">1987</option>
  <option VALUE="1988">1988</option>
  <option VALUE="1989">1989</option>

  <option VALUE="1990">1990</option>
  <option VALUE="1991">1991</option>
  <option VALUE="1992">1992</option>
  <option VALUE="1993">1993</option>
  <option VALUE="1994">1994</option>
  <option VALUE="1995">1995</option>
  <option VALUE="1996">1996</option>
  <option VALUE="1997">1997</option>
  <option VALUE="1998">1998</option>
  <option VALUE="1999">1999</option>

  <option VALUE="2000">2000</option>
  <option VALUE="2001">2001</option>
  <option VALUE="2002">2002</option>
  <option VALUE="2003">2003</option>
  <option VALUE="2004">2004</option>
  <option VALUE="2005">2005</option>
  <option VALUE="2006">2006</option>
  <option VALUE="2007">2007</option>
  <option VALUE="2008">2008</option>
  <option VALUE="2009">2009</option>

  <option VALUE="2010">2010</option>
  <option VALUE="2011">2011</option>
  <option VALUE="2012">2012</option>
  <option VALUE="2013">2013</option>
  <option VALUE="2014">2014</option>
  <option VALUE="2015">2015</option>
  <option VALUE="2016">2016</option>
  <option VALUE="2017">2017</option>
  <option VALUE="2018">2018</option>
  <option VALUE="2019">2019</option>

  <option VALUE="2020">2020</option>
 </select>
 
 <?php echo $errormes; ?>
 <select NAME="mes" onChange='recargar();'>
  <option VALUE="-1">--</option>
  <option VALUE="1">1</option>
  <option VALUE="2">2</option>
  <option VALUE="3">3</option>
  <option VALUE="4">4</option>
  <option VALUE="5">5</option>
  <option VALUE="6">6</option>
  <option VALUE="7">7</option>
  <option VALUE="8">8</option>
  <option VALUE="9">9</option>
  <option VALUE="10">10</option>
  <option VALUE="11">11</option>
  <option VALUE="12">12</option>
 </select>
 
 <?php echo $errordia; ?>
 <select NAME="dia" onChange='recargar();'>
  <option VALUE="-1">--</option>
  <option VALUE="1">1</option>
  <option VALUE="2">2</option>
  <option VALUE="3">3</option>
  <option VALUE="4">4</option>
  <option VALUE="5">5</option>
  <option VALUE="6">6</option>
  <option VALUE="7">7</option>
  <option VALUE="8">8</option>
  <option VALUE="9">9</option>
  <option VALUE="10">10</option>
  <option VALUE="11">11</option>
  <option VALUE="12">12</option>
  <option VALUE="13">13</option>
  <option VALUE="14">14</option>
  <option VALUE="15">15</option>
  <option VALUE="16">16</option>
  <option VALUE="17">17</option>
  <option VALUE="18">18</option>
  <option VALUE="19">19</option>
  <option VALUE="20">20</option>
  <option VALUE="21">21</option>
  <option VALUE="22">22</option>
  <option VALUE="23">23</option>
  <option VALUE="24">24</option>
  <option VALUE="25">25</option>
  <option VALUE="26">26</option>
  <option VALUE="27">27</option>
  <option VALUE="28">28</option>
  <option VALUE="29">29</option>
  <option VALUE="30">30</option>
  <option VALUE="31">31</option>
 </select>

 <script type="text/javascript">
 var mivar = "<?php echo $hayanio; ?>";
 if (mivar == true)
 {
  <?php /* Para un input ("anio"), cambiar el value no es igual que para un combobox (select + options). */
        /* document.getElementsByName("anio2")[0].value = "echo $anio; entre etiquetas PHP del echo al punto y coma"; */
  ?>
  document.getElementsByName("anio2")[0].value = "<?php echo $anio; ?>";
 }
 </script>

 <script type="text/javascript">
 var mivar = "<?php echo $haymes; ?>";
 if (mivar == true)
 {
  document.getElementsByName("mes")[0].value = "<?php echo $mes; ?>";
 }
 </script>

 <script type="text/javascript">
 var mivar = "<?php echo $haydia; ?>";
 if (mivar == true)
 {
  document.getElementsByName("dia")[0].value = "<?php echo $dia; ?>";
 }
 </script>

 <script type="text/javascript">
 function recargar()  
 {
  var jsVar = "<?php echo $cadenona0; ?>";
  <?php /* para un input: + document.principal.anio.text */ ?>
  var anio2 = document.getElementsByName("anio2");
  var mes = document.getElementsByName("mes");
  var dia = document.getElementsByName("dia");
  window.location.href = jsVar + "&anio=" + anio2[0].value + "&mes=" + mes[0].value + "&dia=" + dia[0].value; 
 }
 </script>

 <a href=<?php echo $cadenona2?>>Tzolkin Maya</a>
 </FORM>
 <?php
 }
?>

<?php
function norte()
{
 global $PHP_SELF;
 $cadenona0 = $PHP_SELF."?nodo=0";
?>
<FORM METHOD=GET>

####Misión según nodo norte (un cálculo Astrológico):
<BR>- Nodo Norte en casa 1 o en Aries (nodo Sur en Libra, el opuesto siendo compatibles): vida pasada, aprendiste a colaborar, a establecer relaciones armónicas y a estar pendiente de los demás.
<BR>* Aprende ahora a definir y a perseguir tus propios objetivos y puntos de vista. Anima a los demás a ser independientes.
<BR>* Naciste entre 8 7 1930 y 29 12 1931; 26 1 1949 y 26 7 1950; 20 8 1967 y 20 4 1969; 7 4 1986 y 3 12 1987.
<BR>- Tauro vida pasada: situaciones dolorosas impuestas por los demás y muchos cambios drásticos, ¡Escorpio!
<BR>* Ahora, construye un sistema propio de valores para alcanzar tus objetivos (economía...) por ti mismo. Habilita al resto a activar sus talentos personales.
<BR>* 29 12 1928 y 7 7 1930; 3 8 1947 y 25 1 1949; 20 2 1966 y 19 8 1967; 12 9 1984 y 7 4 1986; 14 4 2003 y 27 12 2004. 
<BR>- Géminis: filosófico, tu verdad era frecuentemente la única opción.
<BR>* Ahora, comunicación, cooperación y suma de contrarios. ¿Posibles experiencias kármicas a través de un hermano? Animar a los demás a tener varios puntos de vista.
<BR>* 3 12 1945 y 2 8 1947; 26 8 1964 y 19 2 1966; 16 3 1983 y 11 9 1984; 14 10 2001 y 13 4 2003.
<BR>- Cancer: lograr el reconocimiento en el trabajo y conseguir objetivos.
<BR>* Ahora, afecto verdadero y entrega sin esperar nada a cambio. Posibilidad karma con padre o madre. Conectar con la propia vulnerabilidad.
<BR>* 11 5 1944 y 2 12 1945; 24 12 1962 y 25 8 1964; 21 9 1981 y 16 3 1983; 10 4 2000 y 14 10 2001.
<BR>- Leo: complacer a la comunidad mejorando condiciones sociales.
<BR>* Ahora, desarrollar confianza en ti y tu creatividad. Habilitar al resto a confiar en ser legítimos y expresivos.
<BR>* 22 11 1942 y 11 5 1944; 11 6 1961 y 24 12 1962; 6 1 1980 y 21 9 1981; 21 10 1998 y 9 4 2000. 
<BR>- Virgo: te sacrificaste por muchas personas y fuiste espiritual.
<BR>* Ahora, escoger lo que debe ser conservado. Funciones más específicas, conservando la ternura y calidez piscianas. Raciocinio y orden. Describir los laberintos del alma humana (con tu intuición).
<BR>* 25 5 1941 y 22 11 1942; 15 12 1959 y 11 6 1961; 6 7 1978 y 13 1 1980; 26 1 1997 y 20 10 1998.
<BR>- Libra: no tuviste muy en cuenta las necesidades o deseos de los demás.
<BR>* Sigue persiguiendo con la misma energía tus metas, pero con espíritu más colaborador y comprometido. Acompañar el andar del otro, ser mediador de conflictos y excelente escucha habilitando al resto a superar soledades.
<BR>* 12 9 1939 y 25 5 1941; 17 6 1958 y 16 12 1959; 8 1 1977 y 6 7 1978; 1 8 1995 y 25 1 1997.
<BR>- Escorpio: obviaste la parte más espiritual o elevada.
<BR>* Aparte de generar recursos materiales y defender lo que es tuyo, comparte tus recursos (se activará tu fuerza), y experimenta con energías más elevadas e incontrolables. Habilitar en el resto capacidades de potencia desconocida.
<BR>* 4 3 1938 y 12 9 1939; 5 8 1956 y 17 6 1958; 11 6 1975 y 8 1 1977; 2 2 1994 y 31 7 1995. 
<BR>- Sagi: superficialidad e indecisión.
<BR>* Ahora supera el miedo a comprometerte con alguien o algo (Géminis quiere ser aceptado por casi todos). Confianza en lo espiritual, habilitar en el resto optimismo y respuestas trascendentes, convirtiéndote en maestro de vida.
<BR>* 15 9 1936 y 4 3 1938; 3 4 1955 y 4 de 10 de 1956; 28 10 1973 y 11 6 1975; 2 8 1992 y 2 2 1994. 
<BR>- Capricornio: buscabas cariño, protección y seguridad en los demás.
<BR>* Ahora, ser pragmático y sostenedor habilitando también en el resto su capacidad de sustentar y generar. Objetivos propios.
<BR>* 9 3 1935 y 14 9 1936; 10 10 1953 y 2 4 1955; 29 4 1972 y 28 10 1973; 19 11 1990 y 2 8 1992.
<BR>- Acuario: pensar que tu forma de hacer las cosas era la única válida y no tenías por qué colaborar.
<BR>* Ahora supera la excesiva necesidad de aprobación externa, y ve que si te entregas al trabajo en equipo se energiza tu propio corazón.
<BR>* 25 6 1933 y 7 3 1935; 29 3 1952 y 10 10 1953; 3 11 1970 y 28 4 1972; 23 5 1989 y 18 11 1990.
<BR>- Piscis: rígido (entender racionalmente sólo) y estructurado.
<BR>* Ahora, confiando en tu sentido común ampliado, ¡adéntrate a explorar el lado intangible y espiritual de la vida! Mayor intuición y percepción emocional.
<BR>* 29 12 1931 y 24 6 1933; 27 7 1950 y 6 3 1952; 20 4 1969 y 2 11 1970; 3 12 1987 y 22 5 1989; 23 6 2006 y 18 12 2007.
<BR>
<a href=<?php echo $cadenona0?>>Volver</a><BR>
</FORM>
<?php
}
?>

<?php
function tzolkin($anio, $mes, $dia)
{
 global $PHP_SELF;
 $cadenona0 = $PHP_SELF."?nodo=0";
 
 $cantidad = $dia;
 
 $cantidadmes = 0;
 if ($mes == 1) $cantidadmes = 0;
 if ($mes == 2) $cantidadmes = 31;
 if ($mes == 3) $cantidadmes = 59;
 if ($mes == 4) $cantidadmes = 90;
 if ($mes == 5) $cantidadmes = 120;
 if ($mes == 6) $cantidadmes = 151;
 if ($mes == 7) $cantidadmes = 181;
 if ($mes == 8) $cantidadmes = 212;
 if ($mes == 9) $cantidadmes = 243;
 if ($mes == 10) $cantidadmes = 13;
 if ($mes == 11) $cantidadmes = 44;
 if ($mes == 12) $cantidadmes = 74;
 $cantidad = $cantidad + $cantidadmes;

 $cantidadanio = calcularcantidadanio($anio);
 $cantidad = $cantidad + $cantidadanio;

 if ($cantidad > 260) $cantidad = $cantidad - 260;
 $raza = $cantidad % 4;
 if ($raza == 0) $raza = 4;
 $sello = $cantidad % 20;
 if ($sello == 0) $sello = 20;
 $tono = $cantidad % 13; // $tono = intval($tono);
 if ($tono == 0) $tono = 13;
 // if ($cantidad % 20 != 0) $tono = $tono + 1; 
?>
<FORM METHOD=GET>
####Tzolkin Maya:
<BR>Día = <?php echo $dia; ?>
<BR>Mes = <?php echo $mes; ?>
<BR>Año = <?php echo $anio; ?>
<BR>Cantidad Mes = <?php echo $cantidadmes; ?>
<BR>Cantidad Año = <?php echo $cantidadanio; ?>
<BR>Número intermedio = <?php echo $cantidad; ?>
<BR>Raza = <?php echo $raza; ?>
<BR>Sello = <?php echo $sello; ?>
<BR>Tono = <?php echo $tono; ?>: fíjate sobre todo en el año; pero si es muy alto, restamos 260 probablemente, fijándonos en el mes sobre todo. 
<BR>##Con tu fecha de nacimiento, se obtienen 3 datos: raza (tu naturaleza en general: roja, blanca, azul o amarilla), sello (tipo de alma, cada raza es una FAMILIA DE 5 SELLOS, CON LO QUE HAY 20), y tono (cómo ejecutas la misión; HAY 13).
<BR>- Primero hay que sumar los números correspondientes al año, el mes y el día. El primer sumando es el día de nacimiento. Hay que sumar el mes: ENERO 0 FEBRERO 31 MARZO 59 ABRIL 90 MAYO 120 JUNIO 151 JULIO 181 AGOSTO 212 SEPTIEMBRE 243 OCTUBRE 13 NOVIEMBRE 44 DICIEMBRE 74. El año tiene también su tabla:
<BR>* 1922=022 1945=097 1968=172 1991=247 2014=062
<BR>* 1923=127 1946=202 1969=017 1992=092 2015=167
<BR>* 1924=232 1947=047 1970=122 1993=197 2016=012
<BR>* 1925=077 1948=152 1971=227 1994=042 2017=117
<BR>* 1926=182 1949=257 1972=072 1995=147 2018=222
<BR>* 1927=027 1950=102 1973=177 1996=252 2019=067
<BR>* 1928=132 1951=207 1974=022 1997=097 2020=172
<BR>* 1929=237 1952=052 1975=127 1998=202
<BR>* 1930=082 1953=157 1976=232 1999=047
<BR>* 1931=187 1954=002 1977=077 2000=152
<BR>* 1932=032 1955=107 1978=182 2001=257
<BR>* 1933=137 1956=212 1979=027 2002=102
<BR>* 1934=242 1957=057 1980=132 2003=207
<BR>* 1935=087 1958=162 1981=237 2004=052
<BR>* 1936=192 1959=007 1982=082 2005=157
<BR>* 1937=037 1960=112 1983=187 2006=002
<BR>* 1938=142 1961=217 1984=032 2007=107
<BR>* 1939=247 1962=062 1985=137 2008=212
<BR>* 1940=092 1963=167 1986=242 2009=057
<BR>* 1941=197 1964=012 1987=087 2010=162
<BR>* 1942=042 1965=117 1988=192 2011=007
<BR>* 1943=147 1966=222 1989=037 2012=112
<BR>* 1944=252 1967=067 1990=142 2013=217
<BR>- Si da más de 260, restar 260.
<BR>- A ver 03-11-1977: 3 + 44 + 77 = 124.
<BR>* Raza / familia = número mod 4. Y si da 0, pones 4.
<BR>* 1, 21, 41... tienen de sello 1. 19, 39... tienen de sello 19. 20, 40... tienen de sello 20. Es decir, el sello tiene que ver con la operación "mod 20", pero si da 0, lo conviertes a 20.
<BR>* ¿Y el tono? Tiene que ver con dividir entre 20 y sumar 1 (salvo si el resto es 0). En realidad es "mod 13", y si da 0, es 13. Error subsanado.
<BR>- Ahora sólo queda definir razas (familias de 5 sellos), sellos (misiones) y tonos (cómo desarrollas la misión).
<BR>##Razas:
<BR>- Raza roja (1): energía iniciadora, dirección Este (de ahí viene la energía). Los mejores días para iniciar proyectos e ideas. Dualidad entre conocimiento e ignorancia,
<BR>- Blanca (2): concretar las ideas de la raza roja. Dirección norte. Dualidad entre modestia y soberbia.
<BR>- Azul (3): energía transformadora del resultado blanco (objetivo replanteado), dependiendo de los acontecimientos. Dirección Oeste. Dualidad paciencia e impaciencia.
<BR>- Raza amarilla (4): energía integradora, tiene las 3 anteriores; y aumento de coherencia personal durante la vida. Dirección Sur. Es ser uno mismo, evolucionar y madurar todo el conocimiento adquirido en el pasado. Dualidad madurez e inmadurez.
<BR>##Sellos. P: poder, C: característica, A: acción.
<BR>- 1 IMIX (Dragón, raza 1) PCA: nacimiento-ser-nutrir. Da comienzo a proyectos con fé en uno mismo. Es abundancia, protección, padre / madre. Dormido: nunca termina lo que empieza.
<BR>- 2 IK (Viento, 2) espíritu-aliento-comunicar. Comunicación. Espontáneos, y mentalmente muy activos. Dormido, habla mucho.
<BR>* Este día permite transmitir conocimiento, ideas, planes.  
<BR>- 3 AKBAL (Noche, 3) abundancia-intuición-soñar. Usar el poder interno para materializar los sueños. Dormido: carencias espirituales y materiales.
<BR>* Ejercicio de auto-conocimiento. La intuición, lo misterioso y desconocido, los sueños y la abundancia.
<BR>- 4 (semilla, 4): florecimiento-atención-atinar. Conocer el momento adecuado para hacer florecer ideas y proyectos. Es la frecuencia de la virtud sin esfuerzo. Sólo hay que "sembrar" correctamente. ¿Sembrar es también hacerse las preguntas adecuadas antes de quedarse atontao, dormir...? ¿Desear con emoción y planificación es sembrar no? Consejero (sacar potencial de terapeutas, docentes, maestros...), que se sirve de escuchar su intuición / instinto, en pausa (¿como atontao con la boca abierta?). Una semilla dormida no esta en paz (hay inseguridad) y busca en los demás lo que no tiene, volviéndose dependiente (no cosecha).
<BR>* Prestar atención a todo lo que vivimos, cómo sentimos, cómo nos comunicamos, que intención tenemos... Los proyectos del Dragón florecen mejor en los días "semilla".
<BR>- 5 CHIKCHAN (Serpiente, 1) fuerzavital-instinto-sobrevivir. Instinto de supervivencia. Protectores de la naturaleza. Interpretar los mensajes del cuerpo. Expresa el deseo sexual. Dormido: depresivo, y malgasta su energía a través del deseo sexual.
<BR>* Días propicios para renovar (renacer), y hacer negocios.
<BR>- 6 CIMI (Enlazador de mundos) muerte-oportunidad-igualar. Contacta con otras realidades y dimensiones. Dormido: tiene miedo a la muerte, y a ser libre.
<BR>* Transciende la muerte y aprende a soltar.
<BR>- 7 MANIC (Mano) realización-curación-conocer. Sanación y liberación del ego. Artes, danza, nobleza, altruismo. Suelen ser terapeutas. Intuitivos. Dormido: enfermizo e hipocondríaco, incapaz de manejar la energía a su favor.
<BR>* Fluidez de las cosas, liberar bloqueos.
<BR>- 8 LAMAT (Estrella) elegancia-arte-embellecer. Dan luz (paz, harmonía...) a todo lo que tocan, son conscientes de su trabajo en la vida y sus metas. Artistas, escritores, pintores. Dormido: incapaz de expresar su creatividad.
<BR>- 9 MULIC (Luna) aguauniversal-flujo-purificar (y limpiar). Recuperar la memoria ancestral (quién eres y adónde irás). Experimentar el amor y la lealtad. Personas muy psíquicas y emocionales. Dormido: no controla sus sentimientos.
<BR>* Conocer cual es tu tarea y misión en la vida.
<BR>- 10 OC (Perro) corazón-lealtad-amar. Lealtad y nobleza. Muy protectoras, sienten el amor de forma incondicional. Buenos compañeros (apoyo) y aliados. Dormido: infiel, celoso e incapaz de amarse a si mismo.
<BR>* Buenas alianzas, y nuevas aperturas y oportunidades en la vida.
<BR>- 11 CHUWEN (Mono) magia-ilusión-jugar. Artistas, científicos y magos. Alegres, en movimiento, espontáneos, humor (bufones...), ¡fiesta! Misión: Vivir el ahora. Dormido, sin espontaneidad, miedo a vivir la vida, serio y triste.
<BR>* Días para ser espontáneos, dejarse llevar y disfrutar de la vida.
<BR>- 12 EB (Humano eléctrico) librevoluntad-sabiduría-influenciar. Esencia humana original no terrestre. Relación muy estrecha con la fuente original. Te expresas como eres en realidad. Conscientes de sus actos. Misión: Ser guías, y mostrar a los demás con el ejemplo a ser ellos mismos. Dormido aconseja pero no sabe que hacer con su vida (falta de conexión con la fuente original).
<BR>- 13 BEN (Caminante del cielo) espacio-vigilancia-explorar. Cambiar la percepción del tiempo. Aventurero, vagabundo. Eternos buscadores, pacificadores. Capacidad de liberarse y liberar a los demás. ¿Nunca está dormido?
<BR>* Día para liberarse de ataduras.
<BR>- 14 IX (Mago) atemporal-receptividad-encantar. Compañero, guía / consejero, fuerte y poderoso. Profeta. Calmados, capacidad para sanarse a si mismos y a los demás. Consejeros. Dormido: competitivos, usan poderes para sí mismos.
<BR>* Toma tu propio poder y decisiones, ten fe en ti mismo.
<BR>- 15 MEN (Águila) visión-mente-crear. Independientes, ambiciosas, valientes. Les gusta criticar (detalles). Muy mentales y técnicos. Habilidad para concretar empresas y negocios. ¿Ven más allá? Misión: Crear conciencia planetaria. Dormido: incapaz de materializar los planes.
<BR>* Día para hacer realidad tus sueños.
<BR>- 16 KIB (Guerrero) inteligencia-intrepidez-cuestionar. Usa la inteligencia para armonizar el entorno y a los demás. Capacidad para transcender el ego. Solitarios, valientes y disciplinados. Vencen sus miedos. Dormido: sumiso y obedece sin cuestionar.
<BR>* Te invita: inteligencia para resolver tus problemas
<BR>- 17 CABAN (Tierra) navegación-sincronía-evolucionar. Muy activas física y mentalmente. Adaptables a los cambios. Provocar cambios para la evolución. Dormido: perezosa e inadaptable.
<BR>* Día para aceptar los cambios en tu vida para seguir con tu evolución personal.
<BR>- 18 ETZNAB (Espejo) sinfín-orden-reflejar. Reflejan la verdad cortando la ilusión y la falsedad (del propio ego...). Son guias espirituales reflejando el camino correcto. Provocan cambios. Dormido: solo refleja el lado oscuro y no ayuda a crecer.
<BR>* Día propicio para verse a si mismo, y ver reflejada la verdad que te rodea.
<BR>- 19 CAUAC (Tormenta) autogeneración-energía-catalizar. Transmiten la información que reciben. Crear el clima idóneo para el crecimiento espiritual (si hace falta provocan cambios bruscos). Dormida: huracán que no se calma.
<BR>* Capacidad de limpiar y liberarse de lo viejo para aceptar la nueva vida.
<BR>- 20 AHAU (SOL) fuegouniversal-vida-iluminar. Saben reflejar la luz del sol interior (con su sabiduría) a los demás. Representan la culminación de lo aprendido y ponerlo en práctica. Dan amor de forma incondicional. Dormido: apagado y triste, se encierra en si mismo.
<BR>##Tonos: definen el proceso creativo (individual o grupal), desde el propósito (tono 1) hasta su cumplimiento o final (tono 13). Onda Encantada (13 pasos: mentales los 4 primeros, físico y emocionales los 5 siguientes, y espirituales el resto). El tono nos da pistas para realizar la misión (sello), llegando a comprender el funcionamiento de nuestra mente y aprendiendo más fácilmente las lecciones que se nos presentan.
<BR>- 1. Magnético (do). Determina propósitos:
<BR>* Gente asertiva, buenos guías de sí mismos y de otros, dan buen empuje a cualquier proyecto al que estén asociados, y trabajan mejor con retos. No se preocupan mucho por los detalles o el toque distintivo. Entregarse totalmente.
<BR>- 2. Lunar (do+). ¿Cuál es mi desafío? Se muestran las barreras, bloqueos...
<BR>* Gente 2: en ocasiones se les complica demasiado hacer una elección. Romper con patrones tradicionales.
<BR>- 3. Eléctrico (re). Encontrar las líneas de acción para el logro del propósito.
<BR>* Gente. Elocuentes. Comprenden el ritmo de las cosas y son incansables. Pueden predecir el siguiente movimiento cuando han encontrado el molde a una persona... Activar el servicio a otros y a su comunidad mediante la atención a sus propias necesidades.
<BR>- 4. Autoexistente (re+). Decide la forma de acción, y la medida (el 4 engloba alto, largo, ancho y profundo). Llevar plan a vida cotidiana.
<BR>* Día para dar forma y medida a nuestros pensamientos, para hacer los cambios que hemos estado postergando y para revisar que nuestras acciones sean sin daño al medio ambiente ni a otros seres.
<BR>* Gente. Comprenden significados profundos mediante una observación detallada. Metódicos y organizados. Considerar siempre la relación causa-efecto de la forma en que realizaremos nuestras acciones.
<BR>- 5. Entonado (mi). ¿Cómo puedo optimizar mi potencial, y con qué recursos cuento y qué falta? ¿A qué o a quién doy poder, y cuanto recupero para mí?
<BR>* Día para reconocer cuál es mi poder y en qué lo he depositado. Reconocer que todas las energías del Universo están disponibles para que cumpla mis metas, todo en una justa medida de uso y no abuso.
<BR>* Gente. Libres y persistentes. Inteligentes y líderes por naturaleza, buenos para todo y muy prácticos. Trabajadores duros (no ponen trabas). Buenos investigadores y observadores, siempre pueden ver el lado bueno de las cosas. Mantenerse rodeados de personas que les hagan sentir bien y no tratar de dominar situaciones que escapan a sus ámbitos.
<BR>- 6. Rítmico (fa). Observanr cualquier evento como una oportunidad de crecimiento. Indica que atendamos todas las posibilidades que tenemos para encontrar manteniendo el equilibrio. Nos habla también del "balance orgánico" (estaciones, noche-día, el patrón de crecimiento de las plantas...) para aplicar a nuestras vidas y los momentos de caos, para conseguir la armonía.
<BR>* Gente. Incansables mentalmente, logran comprender el funcionamiento básico de las cosas, son dinámicos, versátiles, rebosantes de información y comprenden sus propios ciclos y sus cuerpos de una manera muy particular. Mantenerse hasta el final de las cosas que inician.
<BR>- 7. Resonante (fa+). Abrir "canales" para obtener respuestas (pausa para escuchar voz interor). Misterio, magia, sueños, mensajes divinos, canalizar, inspirar. ¿Cómo armonizo mi servicio para con los demás?
<BR>* Día: nos ayuda a encontrar la dirección adecuada de nuestros esfuerzos.
<BR>* Persona resonante (te la encuentras): día para canalizar hacia fuera de nosotros la energía de nuestro sello hacia lo que queremos lograr.
<BR>* Gente. Canaliza información quedándose medio lelo... Las personas resonantes tienen respuestas para todo. Si están en armonía siempre saben qué hacer y se dejan llevar por las situaciones conforme van sucediendo. Su energía es crucial para que otros que no son resonantes comprendan conceptos vitales para un despertar de conciencia. Son buenos maestros e inventores. El tono resonante, me pide que mantenga el contacto con mi "guía interior" sin perderme en el ego o el mundo de afuera (todo emana de lo sutil).
<BR>- 8. Galáctico (sol). ¿Mis pensamientos, sentimientos, palabras y acciones van en un mismo sentido? ¿Soy honesto conmigo mismo? Nos permite vernos claramente a nosotros mismos sin juicios o castigos.
<BR>* Buen día para organizar el interior en base a la coherencia. Sacar al ser "más bueno" que habita en nosotros, para el resto de la vida. Información necesaria para que veamos donde estamos siendo injustos con nosotros mismos.
<BR>* Gente. Concientes de los patrones existentes en casi todo (números, plantas...). Ayudan a lograr armonía allí a donde van, a menos que se encuentren en su lado oscuro. Les duele percibir la injusticia del mundo. Son buenos escuchas y sus opiniones son generalmente acertadas. Mantenerse en justicia.
<BR>- 9. Solar (sol+). Motivación. Por qué hacemos lo que hacemos, cómo nos gusta y qué es lo que nos mueve en lo más profundo de nuestro ser. Nos enseña a ser pacientes aún cuando vemos que no podemos avanzar.
<BR>* Día para preguntarnos si habría que hacer algún cambio según las motivaciones verdaderas. Mis intenciones deben ser lo más transparentes posible, pues de ellas emanará la satisfacción de deseos...
<BR>* Gente. Profundas y complicadas. Inspiran grandes cambios y logran cosas que para muchos parecen imposibles. Determinados, grandes trabajadores y soñadores. Deben ir muy profundo de sí mismos para inspirarse y lograr inspirar a otros, con mucha paciencia.
<BR>- 10. Planetario (la). ¿Cómo lo perfecciono? La comprensión de que todo es como es debido a nuestras acciones, es mensaje de este tono, ¿no echar culpas afuera?
<BR>* Es día para darnos cuenta de que aquello a lo que ponemos energía, intención, atención, es lo que se manifiesta. Si algo no nos gusta de lo que vemos este día, buscar el fallo, y en los días siguientes corregirlo. Ver las limitaciones que nos hemos impuesto.
<BR>* Gente. Alegría, irradian encanto. Llegan a sacrificarse duramente. Ir más allá de sus propias creencias y condiciones, manifestando la grandeza y belleza de la vida.
<BR>- 11. Espectral (la+). Nos muestra las cosas que no nos sirven ya, que no nos gustan, que no logran acomodarse en nuestro espacio vivo. Soltar, liberar.
<BR>* Día para irnos a la cama +LIGEROS con la certeza de tener "otro hueco para nuevas cosas".
<BR>* Gente. Cambian todo el tiempo. Muy dinámicos y con muchas ideas. Facilitan el cambio donde llegan y son emprendedores del mismo. No llenarse de cosas, personas o situaciones inservibles.
<BR>- 12. Cristal (si). ¿Cómo puedo dedicar mi servicio a todo lo que posee vida? Nada sobra, nada falta y todo está en el lugar que debe estar. Es la conexión de partes sueltas, para lo que se necesita la cooperación de cada una de ellas.
<BR>* Mejor día para meditar, ser modestos, ayudar y cooperar, servir a nuestras necesidades y por ende a las de la colectividad; llegar a acuerdos, organizar reuniones, rodearse de gente querida.
<BR>* Gente todo terreno, excelentes maestros e investigadores. Comprometidos y un poco obsesivos. Tienen muchos amigos. Su reto es mantenerse aprendiendo y compartir todo lo que saben.
<BR>- 13. Cósmico (do mayor). Es la energía más sutil, nos muestra lo perfecto del presente, lo divino de la naturaleza, lo que somos capaces de lograr con nuestra conciencia, pensamientos y acciones. Es la celebración, la alegría de saber que todo es posible. Es el recuerdo de la sabiduría original. Es mantenerse presente.
<BR>* Buen día para cerrar ciclos, para permitir que todo lo que hemos aprendido forme parte de nosotros a partir de ahora. Nos permite recargar baterías para un nuevo inicio. Buen día para plantear sueños y anhelos para convertirlos en un propósito para el siguiente grupo de trece.
<BR>* Gente. Visionarias, inolvidables, trabajadoras. Tienen una conexión particular con energías sutiles, como para siempre saber qué hacer, leer a las personas, entrar en meditación profunda... Su reto es cerrar sus ciclos y trascender las cuestiones materiales.
<BR>
<a href=<?php echo $cadenona0?>>Volver</a><BR>
</FORM>
<?php
}
?>

<?php
function calcularcantidadanio($anio)
{
 /* Nada de Arrays, ¡por la cuenta de la vieja! */
 if ($anio == 1922) return 22;
 if ($anio == 1923) return 127;
 if ($anio == 1924) return 232;
 if ($anio == 1925) return 77;
 if ($anio == 1926) return 182;
 if ($anio == 1927) return 27;
 if ($anio == 1928) return 132;
 if ($anio == 1929) return 237;
 if ($anio == 1930) return 82;
 if ($anio == 1931) return 187;
 if ($anio == 1932) return 32;
 if ($anio == 1933) return 137;
 if ($anio == 1934) return 242;
 if ($anio == 1935) return 87;
 if ($anio == 1936) return 192;
 if ($anio == 1937) return 37;
 if ($anio == 1938) return 142;
 if ($anio == 1939) return 247;
 if ($anio == 1940) return 92;
 if ($anio == 1941) return 197;
 if ($anio == 1942) return 42;
 if ($anio == 1943) return 147;
 if ($anio == 1944) return 252;
 if ($anio == 1945) return 97;
 if ($anio == 1946) return 202;
 if ($anio == 1947) return 47;
 if ($anio == 1948) return 152;
 if ($anio == 1949) return 257;
 if ($anio == 1950) return 102;
 if ($anio == 1951) return 207;
 if ($anio == 1952) return 52;
 if ($anio == 1953) return 157;
 if ($anio == 1954) return 2;
 if ($anio == 1955) return 107;
 if ($anio == 1956) return 212;
 if ($anio == 1957) return 57;
 if ($anio == 1958) return 162;
 if ($anio == 1959) return 7;
 if ($anio == 1960) return 112;
 if ($anio == 1961) return 217;
 if ($anio == 1962) return 62;
 if ($anio == 1963) return 167;
 if ($anio == 1964) return 12;
 if ($anio == 1965) return 117;
 if ($anio == 1966) return 222;
 if ($anio == 1967) return 67;
 if ($anio == 1968) return 172;
 if ($anio == 1969) return 17;
 if ($anio == 1970) return 122;
 if ($anio == 1971) return 227;
 if ($anio == 1972) return 72;
 if ($anio == 1973) return 177;
 if ($anio == 1974) return 22;
 if ($anio == 1975) return 127;
 if ($anio == 1976) return 232;
 if ($anio == 1977) return 77;
 if ($anio == 1978) return 182;
 if ($anio == 1979) return 27;
 if ($anio == 1980) return 132;
 if ($anio == 1981) return 237;
 if ($anio == 1982) return 82;
 if ($anio == 1983) return 187;
 if ($anio == 1984) return 32;
 if ($anio == 1985) return 137;
 if ($anio == 1986) return 242;
 if ($anio == 1987) return 87;
 if ($anio == 1988) return 192;
 if ($anio == 1989) return 37;
 if ($anio == 1990) return 142;
 if ($anio == 1991) return 247;
 if ($anio == 1992) return 92;
 if ($anio == 1993) return 197;
 if ($anio == 1994) return 42;
 if ($anio == 1995) return 147;
 if ($anio == 1996) return 252;
 if ($anio == 1997) return 97;
 if ($anio == 1998) return 202;
 if ($anio == 1999) return 47;
 if ($anio == 2000) return 152;
 if ($anio == 2001) return 257;
 if ($anio == 2002) return 102;
 if ($anio == 2003) return 207;
 if ($anio == 2004) return 52;
 if ($anio == 2005) return 157;
 if ($anio == 2006) return 2;
 if ($anio == 2007) return 107;
 if ($anio == 2008) return 212;
 if ($anio == 2009) return 57;
 if ($anio == 2010) return 162;
 if ($anio == 2011) return 7;
 if ($anio == 2012) return 112;
 if ($anio == 2013) return 217;
 if ($anio == 2014) return 62;
 if ($anio == 2015) return 167;
 if ($anio == 2016) return 12;
 if ($anio == 2017) return 117;
 if ($anio == 2018) return 222;
 if ($anio == 2019) return 67;
 if ($anio == 2020) return 172;
 return 77;
}
?>
