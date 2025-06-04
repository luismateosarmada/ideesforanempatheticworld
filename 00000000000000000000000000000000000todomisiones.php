<?php
 //En construcción. Los .PHPs se pueden ejecutar con el Xampp... Este .PHP, es para mí, sobre todo. Quiero saber datos de la gente para ayudarme a encontrar su vocación y animarlos a volar. Es un.PHP muy sencillo (NO hay Javascript...), aunque muy largo, y lleva semanas hacerlo (porque sólo voy a dedicar un pequeño porcentaje de mi tiempo). Paciencia y confianza.

 if (!isset ($_GET["cajaanio"])) datos();  
 else
 {
  // Carta de revolución solar (entre cumpleaños).
  // Júpiter Géminis 12. ¿Expando el conocimiento espiritual (12)? 
  // Saturno Piscis. ¿Diluyo las ilusiones?
  // Urano Tauro 11. ¿Proyectos sociales que duran y se consolidan en grupos (11)?
  // Neptuno Piscis 10. ¿Mucha espiritualidad en el trabajo?
  // Casa 11 Aries. ¿Ser pionero en grupos / estructuras sociales?
  // MIS DATOS:
  //$dia = 3;
  //$anio = 1977;
  //$casa2 = 11;
  //$casa10 = 8;
  //$ascendente = 10;
  //$luna = 5;
  //$mes = 11;
  //$cartaanualmision = 4;
  //$cartaanualhabilidad = 8;
  //$mutable = 1;
  //$fijo = 0;
  //$cardinal = 0;
  //$pasivo = 1;
  //$dependiente = 1;
  //$privado = 1;
  //$anualcasa2 = 5;
  //$anualcasa10 = 12;
  //$nombre = "Luis Mateos Armada";
  //$caracmanifestante = 0;
  //$generador = 1;
  //$proyector = 0;
  //$reflector = 0;
  //$manifestante = 0;
  //$mision = 46;
  //$chino = 6;
  //$hombre = 1;
  //$manocuadrada = 0;
  //$manoespatula = 1;
  //$manogigante = 0;
  //$manoconica = 0;
  //$manonudosa = 1;
  //$manoespiritual = 0;
  $dia = $_GET["cajadia"];
  $anio = $_GET["cajaanio"];
  $casa2 =11;
  $casa10 = 8;
  $ascendente = 10;
  $luna = 5;
  $mes = $_GET["cajames"];
  $cartaanualmision = 4;
  $cartaanualhabilidad = 8;
  $mutable = 1;
  $fijo = 0;
  $cardinal = 0;
  //Poner 2 para anular.
  $pasivo = 1;
  $dependiente = 1;
  $privado = 1;
  $anualcasa2 = 5;
  $anualcasa10 = 12;
  $signo = calcularsigno($dia, $mes);
  astrologia();
  $nombre = $_GET["cajanombre"];
  $numeneagrama = calcularnumeneagrama($dia, $mes, $anio);
  eneagrama();
  aniosdecambio();
  nombreroscopo();
  $num = calcularnumnodonorte(); 
  nodonorte($num);
  tzolkinmaya();
  $caracmanifestante = 0;
  $generador = 1;
  $proyector = 0;
  $reflector = 0;
  $manifestante = 0;
  $mision = 46;
  $chino = 6;
  diseniohumano();  
  cejas();
  $hombre = 1;
  $numerokwa = calcularnumerokwa();
  kwa();
  zodchino();
  personaljung();
  $manocuadrada = 0;
  $manoespatula = 0.25;
  $manogigante = 0;
  $manoconica = 0;
  $manonudosa = 1;
  $manoespiritual = 0;
  manos();
  diseniomiscanales();
 }

 function datos()
 {
  global $PHP_SELF;
  ?>
  <FORM ACTION="<?php echo $PHP_SELF; ?>" VALUE="1977" METHOD=GET>
  Nombre
  <input type= "text" NAME="cajanombre" VALUE="Luis Mateos Armada">
  Día
  <select NAME="cajadia">
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
  Mes
  <select NAME="cajames">
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
  Año
  <select NAME="cajaanio">
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

  <INPUT TYPE=submit VALUE="OK">

  </FORM>
 <?php
 }

 function astrologia()
 {
  global $signo;
  global $casa2;
  global $casa10;
  global $ascendente;
  global $luna;
  global $mes;
  global $dia;
  global $cartaanualmision;
  global $cartaanualhabilidad;
  global $mutable;
  global $fijo;
  global $cardinal;
  global $pasivo;
  global $dependiente;
  global $privado;
  global $anualcasa2;
  global $anualcasa10;  

  //Signo.
  $textosigno = calculartextosigno($signo, $casa2, $casa10, $mes, $dia);
  echo("####Signo: ".numeroatexto($signo).".<BR>");      
  echo($textosigno."<BR>");

  //Ascendente.
  if ($ascendente != 0)
  echo("<BR>####Misión para ascendente ".numeroatexto($ascendente).'. Gente con la energía de tu ascendente, "presionando" (también pueden ser necios quienes te hablan). De niño (< 8 años) la situación es muy suave (nos estamos formando). En la adolescencia, si el ascendente es Tauro... te puedes retraer. '.calculartextoascendente($ascendente)."<BR>");

  //Luna.
  if ($luna != 0)
  echo('<Br>####Luna / "habilidades, sensibilidad y emociones" '.numeroatexto($luna).". ".calculartextoluna($luna)."<BR>");

  //Mes.
  $textomes = mesatexto($mes);
  echo ("<BR>####Misión para el mes ".$textomes.": ");  
  $textomision = calculartextomisionmes($mes);
  echo ($textomision."<BR>");

  //Carta anual (de revolución solar).
  $textocartaanual = calculartextocartaanual($cartaanualmision, $cartaanualhabilidad, $anualcasa2, $anualcasa10, $mutable, $fijo, $cardinal, $pasivo, $dependiente, $privado);
  echo ("<BR>####Carta anual (entre cumpleaños, de revolución solar):".$textocartaanual);
 } // Fin de función "astrología".

 function  calculartextocartaanual($cartaanualmision, $cartaanualhabilidad, $anualcasa2, $anualcasa10, $mutable, $fijo, $cardinal, $pasivo, $dependiente, $privado)
{
 $texto = '';
 if ($mutable == 1) $texto = $texto.'<BR>- Cualidad de mutable, puese proponer cambios / alternativas.';
 if ($fijo == 1) $texto = $texto.'<BR>- Cualidad de fijo, de seguir con lo que estaba.';
 if ($cardinal == 1) $texto = $texto.'<BR>- Cualidad de empezar algo.';
 if ($pasivo == 1) $texto = $texto.'<BR>- Pasivo, esperas a que "te pregunten".';
 if ($pasivo == 0) $texto = $texto.'<BR>- NO pasivo, puedes proponer / conquistar.';
 if ($dependiente == 1) $texto = $texto.'<BR>- Dependiente.';
 if ($dependiente == 0) $texto = $texto.'<BR>- Independiente.';
 if ($privado == 1) $texto = $texto.'<BR>- Privado, NO de vida muy pública.';
 if ($privado == 0) $texto = $texto.'<BR>- Tu vida puede ser muy pública.';
 if ($anualcasa2 != 0)
 $texto = $texto."<BR>- Casa 2 (obtención de ingresos) en ".numeroatexto($anualcasa2).": ".calculartextocasa2($anualcasa2);
 if ($anualcasa10 != 0)
 $texto = $texto."<BR>- Casa 10 (trabajo apropiado) en ".numeroatexto($anualcasa10).": ".calculartextocasa10($anualcasa10);
 if ($cartaanualmision != 0)
 $texto = $texto.'<BR>- Misiones de signo ascendente como signo solar. '.calculartextomisionsigno($cartaanualmision);
 if ($cartaanualmision != 0)
 $texto = $texto.'<BR>- Misiones si tienes el ascendente. '.calculartextoascendente($cartaanualmision);
 if ($cartaanualhabilidad != 0)
 $texto = $texto.'<BR>- Características de luna como signo solar. '.calculartextosignocaracteristicas($cartaanualhabilidad);
 if ($cartaanualhabilidad != 0)
 $texto = $texto.'<BR>- Características de luna '.numeroatexto($cartaanualhabilidad).'. '.calculartextoluna($cartaanualhabilidad);
 return $texto;
}

 function calculartextoluna($luna)
 {
  if ($luna == 1) return 'Eres vital, apasionado y optimista. No actúas con maldad, pero suele faltarte diplomacia. A veces te gana el aburrimiento y pasas de cosa en cosa.';
  if ($luna == 2) return 'Tienes una personalidad fuerte y sabes gozar de la vida. Te caracterizas por tu sencillez, pero cuidas mucho tu imagen. Eres sereno y transmites calma.';
  if ($luna == 3) return 'No te decides sobre tus emociones. Dudas si algo o alguien te gusta o no, eres complicado. Muy comunicativo, opinas sobre todo y tienes buen humor.';
  if ($luna == 4) return 'Aflora tu lado femenino (seas hombre o mujer), eres sensible y proteges a quienes te rodean. Muy intuitivo, sabes querer y dejarte querer.';
  if ($luna == 5) return 'Eres expresivo y llamativo pero no muestras tu corazón. Si algo te duele, lo ocultas. No soportas que otro sea testigo de alguna debilidad.';
  if ($luna == 6) return 'Detallista, perfeccionista, autoexigente y apasionado por lo intelectual. Te crees observado y juzgado por los demás. Tu mayor virtud es la solidaridad.';
  if ($luna == 7) return 'De gran temperamento, te inclinas hacia el hogar y lo emocional. Necesitas meditar con calma cada cosa que sucede en tu vida antes de tomar una decisión.';
  if ($luna == 8) return 'No expresas tus emociones y tu gran sensibilidad. Pareces frío pero eres una llama viva. Amas y odias desaforadamente, pero no dejas que otros lo perciban.';
  if ($luna == 9) return 'Te caracteriza tu optimismo y fe en el futuro. Te atreves a correr riesgos. Amas la libertad y el pensamiento filosófico. Eres analista y arriesgado a la vez.';
  if ($luna == 10) return 'Inspiras confianza y seriedad, pero temes no estar a la altura del juicio de los demás. Eres responsable y le temes al fracaso o a perder el control.';
  if ($luna == 11) return 'Pareces reservado porque controlas tus emociones. Eres individualista, intelectual y original, y necesitas que te presten atención.';
  if ($luna == 12) return 'Romántico, intuitivo y soñador. Eres muy emocional y sueles aislarte para que no hieran tu sensibilidad. Puedes destacarte en el ámbito artístico.';
 }

 function calculartextoascendente($ascendente)
 {
  if ($ascendente == 1) return 'Aries: aprender a actuar rápido y tomar decisiones bajo presión.';
  if ($ascendente == 2) return 'Tauro: aprender a ser los más lentos. Aprende que todo lleva su tiempo en la naturaleza. ¿Gozar produciendo y acumulando? ¿Vida en el campo?';
  if ($ascendente == 3) return 'Géminis: comunicarse. Suelen tener problemas con "iguales" (hermanos, primos, vecinos, compañeros...). Aprender a relacionarse con hermanos o compañeros que no sean iguales. Debe conectar "sus 2 seres" para que haya "evolución".';
  if ($ascendente == 4) return 'Cáncer: conectar y estabilizarse emocionalmente. ¿Tener hijos (NO los quieren tener por problemas con mamá)? Estará rodeado de gente que exprese calidez, y emocionalidad respecto al pasado. Si el signo principal es de aire, le costará entrar en su parte sensible, y podría vivir aventuras que sólo son para los de aire (significa presión, malestar...).';
  if ($ascendente == 5) return 'Leo: mostrarse. Se codearán con figuras de autoridad fuertes. Los imitará, pero tarde o temprano, su vacío afectivo le hará buscarse a sí mismo.';
  if ($ascendente == 6) return 'Virgo: aprender de lo pequeño (quieren arrasar a lo grande, y de ahí vienen problemas). La vida plantea escenarios de gran potencialidad, dentro de contextos de pocas posibilidades (enfermedades, situación económica, penosidad en general...).';
  if ($ascendente == 7) return 'Libra: compromiso, pareja. De peque, aprende a apreciar la belleza y a desarrollar su potencial artístico. Tiene que aprender que relacionarse socialmente no es igual a depender emocionalmente.';
  if ($ascendente == 8) return 'Escorpio: aceptar lo oculto de la vida (de la psique también): Astrología... Familiarizarse consigo mismo a través de personas / situaciones con su alta y conflictiva intensidad emocional. Está obligado a descubrirse a sí mismo y el lado oscuro de la naturaleza humana a una edad más temprana que el resto de la gente.';
  if ($ascendente == 9) return 'Sagi: encontrar sentido a su vida (pero acaban en ideologías chungas, peleándose con todos...). Viajar al extranjero o mucho. Conexión con Filosofías o religiones. Conexión con Maestro que imparte ideas profundas e invita a ver más allá (para dar luego sentido a vidas de otros).';
  if ($ascendente == 10) return 'Capri: podrías decir mucho "que lo haga otro". Responsabilizarse, hacerlo tú, aunque sin cargar el mundo en tu espalda. Si "rehúyes", habrá "castigo". Vivir experiencias severas, mientras asume enormes responsabilidades (¿obras largas, por ejemplo?) sin la posibilidad de apoyarse en otros. Aprender a postergar intereses inmediatos, y recompensas sólo al final.';
  if ($ascendente == 11) return 'Acuario: aceptar que son diferentes, NO tratar de encajar. ¿Cuestionarse cosas? Muchos imprevistos: mala suerte, crisis inexplicables... Con el tiempo, se verán como oportunidades creativas y liberadoras. Muchas personas / situaciones que rompen las reglas y son originales (para aprender libertad y espontaneidad). Notables habilidades científicas o tecnológicas.';
  if ($ascendente == 12) return 'Piscis: aceptar sensibilidad y misticismo en ellos (suelen ser de "hemisferio izquierdo"). Todo es confuso, como sólo entendible con una percepción "mágica". ¿Y qué hace mal Piscis (ascendente)? Desconfían de sus propias percepciones buscando racionalidad... Captan los efectos mágicos de la música, la creatividad artística...';
 }
 
 function calculartextosigno($signo, $casa2, $casa10, $mes, $dia)
 {
  // Aquí ponemos, tanto las características, como la misión.
  // PERO LO PRIMERO ES PONER GENERALIDADES SOBRE SU FAMILIA.
  $texto = "";
  
  // Paso de usar la función módulo. signo mod 4 == 1: fuego...
  if ( ($signo == 1) || ($signo == 5)  || ($signo == 9) )
   $familia = "fuego";
  if ( ($signo == 2) || ($signo == 6)  || ($signo == 10) )
   $familia = "tierra";
  if ( ($signo == 3) || ($signo == 7)  || ($signo == 11) )
   $familia = "aire";
  if ( ($signo == 4) || ($signo == 8)  || ($signo == 12) )
   $familia = "agua";
  
  if ($familia == "fuego")
  {
   $texto = $texto.'- Fuego (familia). Los de fuego miran todo "desde afuera". Piensan que si ellos pueden hacer algo, los demás también. Intuición instintiva. Trabajo de mando (negreros je je) y acción física. Muy exitosos.';
   if ($signo == 1) $texto = $texto." Los Aries NO se controlan, hay que comprender esto. ¿Con ascendente Tauro, se vuelven controladores, y a veces manipuladores?";
   if ($signo == 5) $texto = $texto. " Los Leo necesitan apoyo y reconocimiento para conquistar, pero confían mucho en la vida (y la vida responde)";
   if ($signo == 9) $texto = $texto. " Los Sagi NO pierden la cabeza ante el enemigo, saben defenderse.";
  }

  if ($familia == "tierra")
  {
   $texto = $texto.'- Tierra (familia). Tratan de entender a los demás, pero no saben bien cómo (también miran desde fuera, aunque "sus ganas" les hacen tener más empatía que los de fuego). NO suelen llegar a la esencia (chocan con el sabio muchas veces, creyéndose mejores), que es psíquica. NO les gusta arrastrar problemas ajenos. Los menos intuitivos. A veces, apego a lo material. Organización, dinero (y "modelado" de la materia). Tienen buenos hábitos.';
   if ($signo == 2) $texto = $texto." Tauro: piensan que todo es para siempre, pero al final llevan relativamente bien los cambios.";
   if ($signo == 6) $texto = $texto." Virgo: cuando NO aceptan el mundo, van contracorriente.";
   if ($signo == 10) $texto = $texto." Capri: decididos, ambiciosos y consistentes.";
  }  

  if ($familia == "aire")
  {
   $texto = $texto.'- Aire (familia). Cuando están lejos de la persona se olvidan del asunto / la empatía, pero son bastante empáticos. "Si no has logrado lo que yo es por falta de previsión, voluntad o capacidad". Piensan bastante que los demás están exagerando cuando piden ayuda para cargar problemas a medias. Aire rige el pensamiento, la palabra y la inspiración. La intuición puede llegar tan fuerte como una ráfaga o muy suave. Guerreros, búsqueda de información / conocimiento del mundo material...';
   if ($signo == 3) $texto = $texto." Géminis: muchas cosas a la vez, y piden ayuda. NO se concentran.";
   if ($signo == 7) $texto = $texto." Libra: pierde el entusiasmo tal y como lo ganó.";
   if ($signo == 11) $texto = $texto." Acuario: apunta alto y exige mucho de sí y de los demás (esto último NO debe hacerse).";
  }  

  if ($familia == "agua")
  {
   $texto = $texto.'- Agua (familia). Lo suelen miran todo "desde adentro". Se reconocen entre ellos (son diferentes; yo, Escorpio, descubro lo oculto en otros, "limpio psiques"). Cancer: videntes y tarotistas. Piscis: ver problemas ajenos. Trabajo: sentimientos, misticismo.';
   if ($signo == 4) $texto = $texto." Cancer: necesitan a alguien al lado, o podrían deprimirse. Tambien tienen buen ojo.";
   if ($signo == 8) $texto = $texto." Cuando Escorpio sufre, tiene tendencia a entregar el relevo. Confía en su percepción.";
   if ($signo == 12) $texto = $texto." Piscis: desde su mundo de sueño consiguen lo que quieren.";
  }

  $texto = $texto."<BR>";

  // Hebrea (de los bere), NO judía exactamente.
  if ( ($signo == 1) || ($signo == 4)  || ($signo == 7) || ($signo == 10) )
   $familiahebrea = "yod";
  if ( ($signo == 2) || ($signo == 5)  || ($signo == 8) || ($signo == 11) )
   $familiahebrea = "he";
  if ( ($signo == 3) || ($signo == 6)  || ($signo == 9) || ($signo == 12) )
   $familiahebrea = "vav";

  $texto = $texto."- Familia hebrea: ".$familiahebrea.".";
  if ($familiahebrea == "yod") $texto = $texto." Padre, voluntad, impulso, semilla. Luna Nueva / Primavera. Del amanecer al mediodía.";
  if ($familiahebrea == "he") $texto = $texto." Madre, gestación, vivir desde las entrañas. Luna Creciente / Verano. Del mediodía a la puesta de Sol.";
  if ($familiahebrea == "vav") $texto = $texto." Hijo, lógica y razón. Luna Llena / Otoño. de la puesta de Sol a medianoche.";

  // Pero los signos, también tienen otra familia.  
  if ( ($signo == 1) || ($signo == 5) || ($signo == 9) )
   $familiahebrea2 = "yod"; // Aries es doble yod.
  if ( ($signo == 2) || ($signo == 6) || ($signo == 10) )
   $familiahebrea2 = "he2"; // Tauro es he y he2.  
  if ( ($signo == 3) || ($signo == 7) || ($signo == 11) )
   $familiahebrea2 = "vav"; // Géminis es doble vav. 
  if ( ($signo == 4) || ($signo == 8) || ($signo == 12) )
   $familiahebrea2 = "he"; // Escorpio es doble he.

  $texto = $texto." Antes los novios esperaban 3 años para casarse, de Yod a Vav. Ahora todo se hace aceleradamente y se desploma con igual celeridad."." Familia hebrea 2, orden de ejecución yod, he, vav, he2: ".$familiahebrea2.".";
  if ($familiahebrea2 == "he2") $texto = $texto." He2 (ahora se dispone de medios materiales): fruto que da el hijo, y que lleva semillas de nuevas realizaciones, volviendo al periodo yod.";

  $texto = $texto."<BR>- ".calculartextosignocaracteristicas($signo);
  $texto = $texto."<BR>- La casa se refiere a una parcela de la vida. ".calculartextosignocasa($signo);
  $texto = $texto."<BR>* Casa 2 (obtención de ingresos) en ".numeroatexto($casa2).": ".calculartextocasa2($casa2);
  $texto = $texto."<BR>* Casa 10 (trabajo apropiado) en ".numeroatexto($casa10).": ".calculartextocasa10($casa10);
  $texto = $texto."<BR>- Es importante calcular el decanato del signo. Escorpio tiene 3, yo soy del segundo, regido por Neptuno (tendencia Piscis): como Escorpio, indago, y me encuentro con el mal, y anoto sobre ese mal. Como Piscis, me encuentro en situaciones (sociales...) para cambiar creencias... y se podrían ver mis pruebas como injusticias. ".calculartextodecanato($mes, $dia);
  $texto = $texto.'<BR>* Otra visión de los decanatos, ¿la más "hebrea" (NO aparece Urano...)? '.calculartextodecanatoviejo($signo);
  $texto = $texto.'<BR>- Misiones: '.calculartextomisionsigno($signo);
  $texto = $texto.'<BR>- Misiones hebreas (Aries, Leo, Sagi, Cancer, Escorpio, Piscis, Libra comparte la obra de Acuario, ¿y Géminis es el origen para Acuario?, Capri elige los materiales, Tauro construye, y Virgo selecciona: '.calculartextomisionhebrea($signo);
  $texto = $texto.'<BR>- Planeta / astro regente principal. '.calculartextobeleneta($signo);
  $texto = $texto.'<BR>- Planeta / astro regente NO principal. '.calculartextobeleneta2($signo);

  return $texto;
 }

 function calculartextobeleneta2($signo)
 {
  if ($signo == 8) return 'Marte. Todo lo excesivo que el tolerante Júpiter ha edificado se verá demolido. El riguroso Marte nos indicará el cómo regenerar la naturaleza corrompida. Marte es el planeta del trabajo e indica las aptitudes del individuo para un trabajo determinado. En Aries, Marte proyecta su esencia zodiacal con fuerza a la cabeza del individuo. Con Escorpio, es el productor de todas las formas materiales que crea el hombre gracias a su trabajo. Si las pulsiones de nuestra voluntad van hacia la espiritualización, tendremos a nuestro servicio a los luciferianos que trabajan con Aries; si van para abajo, tendremos a los que operan con Escorpio. ¿Producir es negativo entonces je je? Malos aspectos: individuos impotentes (Escorpio), o locos (Aries). Si son de naturaleza amplificadora, podríamos tener a una persona obsesionada con el sexo o un "iluminado" extravagante. Resultarán perturbatorios para el trabajo (no participación o dedicación excesiva y violenta).';
  if ($signo == 11) return 'Saturno es sacrificio (Binah sacrificó parte de su luz para cristalizar nuestro mundo). Saturno en Acuario: bueno para los inventores. Con los materiales de Capricornio, Saturno instituye nuestro destino (sin detalles). Tendrá en cuenta el karma a pagar, y las necesidades de nuestra evolución (limpieza de psique...). Será el que nos ponga los malotes, y de nosotros dependerá el que aprendamos de la situación, o NO (persiguiéndolos, pidiendo que se nos haga "justicia", con lo cual sólo conseguiremos prolongar la situación). Malos aspectos: marco de vida accidentado, difícil, peligroso. Si esos malos aspectos proceden del violento Marte, cuidado.';
  if ($signo == 12) return 'Júpiter representará la aplicación de la ley de Saturno. Cuando "NO concuerdan", ¿veremos al individuo enfrentado con la autoridad o corrupto? Júpiter indicará aquello que el individuo poseerá en abundancia y señalará el dominio en el que ejercerá el poder. A través de Sagitario, es portador de fuerza moral, de generosidad, que pulveriza los rencores... En Piscis, Júpiter suaviza sentimientos, para que no se produzca mal karma. Malos aspectos: o bien reducirán los poderes, o harán que ese poder sea arrogante, con corrupción y excesos.';
  return "ninguno.";
 }

 function calculartextobeleneta($signo)
 {
  if ($signo == 1) return 'Marte. Todo lo excesivo que el tolerante Júpiter ha edificado se verá demolido. El riguroso Marte nos indicará el cómo regenerar la naturaleza corrompida. Marte es el planeta del trabajo e indica las aptitudes del individuo para un trabajo determinado. En Aries, Marte proyecta su esencia zodiacal con fuerza a la cabeza del individuo. Con Escorpio, es el productor de todas las formas materiales que crea el hombre gracias a su trabajo. Si las pulsiones de nuestra voluntad van hacia la espiritualización, tendremos a nuestro servicio a los luciferianos que trabajan con Aries; si van para abajo, tendremos a los que operan con Escorpio. ¿Producir es negativo entonces je je? Malos aspectos: individuos impotentes (Escorpio), o locos (Aries). Si son de naturaleza amplificadora, podríamos tener a una persona obsesionada con el sexo o un "iluminado" extravagante. Resultarán perturbatorios para el trabajo (no participación o dedicación excesiva y violenta).';
  if ($signo == 2) return 'Venus. Nos indicará lo que al individuo le tocará reconstruir, embellecer, armonizar; y aquello que expresará con gracia, con arte; y aquello que lo hará sobresalir. Resolver crisis. Libra: armonizar. Tauro: gozo de la belleza y de la armonía y uso superficial: moda, perfume, decoración suntuosa. Venus confunde y envenena con superficialidad. Y los "venusianos" se creen elevados, y creen que tocaron techo. Malos aspectos: sed de lujo, armonía, placeres o coexistencia pacífica. De manera delicada y exquisita, acaba con lo elevado.';
  if ($signo == 3) return 'Mercurio (intelectualidad) corrige a Venus. Posición fuerte de Mercurio: capacidad de análisis, crítica, síntesis y de discernir la verdad encerrada en cada cosa. El Mercurio común corresponde a Géminis (exteriorizar ideas), y el filosófico / alquímico a Virgo (lo femenino / interior). En Géminis: aporta discernimiento. Virgo: se conduce a la quintaesencia de las experiencias adquiridas en los cuatro ciclos elementales: fuego, agua, aire, tierra. Malos aspectos: el individuo no ve las oportunidades, porque la conexión entre la realidad material y la función inteligente está alterada. No acertarán a incorporar el concentrado de sus experiencias totales, lo cual conducirá a tropezar dos veces con la misma piedra.';
  if ($signo == 4) return '¿La Luna es la responsable de las imágenes aparecidas en nuestro mundo interior (de vivencias...)? La calidad, depende de su posición. Malos aspectos: puede que un planeta determinado monopolice la producción de imágenes. Para una mujer, carácter difícil. Para un hombre, captación de una mujer difícil, y para ambos, madre conflictiva.';
  if ($signo == 5) return 'En el Sol reside la experiencia de nuestro pasado ancestral (dones y talentos). Es quien recoge los impulsos planetarios y los ejecuta (para ello debe actuar con las relaciones planetarias?). Un trígono de Mercurio con Neptuno, que da una elevada inspiración, sólo tendrá efectos si el individuo posee ya un talento de escritor o de artista (dado por el Sol) ¿La negatividad no expresada del hombre está en su Luna, y la de la mujer, en su Sol? ¿Con Sol en Leo, el marido expresará el Sol de la mujer, y la mujer la Luna del marido? Para conocer auténticamente a una persona A, es preciso conocer a su cónyuge B, que expresará la parte NEGATIVA de A que no se ve y que el mismo A ignora. Si somos varones y nos vemos superiores, en otra vida volveremos a ser varón (esposa cada vez más salvaje, karma; el camino termina como mujer, con marido desarrollado, imposible de seguir).';
  if ($signo == 6) return 'Mercurio (intelectualidad) corrige a Venus. Posición fuerte de Mercurio: capacidad de análisis, crítica, síntesis y de discernir la verdad encerrada en cada cosa. El Mercurio común corresponde a Géminis (exteriorizar ideas), y el filosófico / alquímico a Virgo (lo femenino / interior). En Géminis: aporta discernimiento. Virgo: se conduce a la quintaesencia de las experiencias adquiridas en los cuatro ciclos elementales: fuego, agua, aire, tierra. Malos aspectos: el individuo no ve las oportunidades, porque la conexión entre la realidad material y la función inteligente está alterada. No acertarán a incorporar el concentrado de sus experiencias totales, lo cual conducirá a tropezar dos veces con la misma piedra.';
  if ($signo == 7) return 'Venus. Nos indicará lo que al individuo le tocará reconstruir, embellecer, armonizar; y aquello que expresará con gracia, con arte; y aquello que lo hará sobresalir. Resolver crisis. Libra: armonizar. Tauro: gozo de la belleza y de la armonía y uso superficial: moda, perfume, decoración suntuosa. Venus confunde y envenena con superficialidad. Y los "venusianos" se creen elevados, y creen que tocaron techo. Malos aspectos: sed de lujo, armonía, placeres o coexistencia pacífica. De manera delicada y exquisita, acaba con lo elevado.';
  if ($signo == 8) return 'Plutón es hermano de Saturno. Saca al exterior lo que estaba profundamente enterrado, para mejorar. Los individuos son aún poco sensibles a las vibraciones de Plutón. Hace que estalle lo caduco y se regenere lo corrupto. Malos aspectos: auténticas cargas de dinamita.';
  if ($signo == 9) return 'Júpiter representará la aplicación de la ley de Saturno. Cuando "NO concuerdan", ¿veremos al individuo enfrentado con la autoridad o corrupto? Júpiter indicará aquello que el individuo poseerá en abundancia y señalará el dominio en el que ejercerá el poder. A través de Sagitario, es portador de fuerza moral, de generosidad, que pulveriza los rencores... En Piscis, Júpiter suaviza sentimientos, para que no se produzca mal karma. Malos aspectos: o bien reducirán los poderes, o harán que ese poder sea arrogante, con corrupción y excesos.';
  if ($signo == 10) return 'Saturno es sacrificio (Binah sacrificó parte de su luz para cristalizar nuestro mundo). Saturno en Acuario: bueno para los inventores. Con los materiales de Capricornio, Saturno instituye nuestro destino (sin detalles). Tendrá en cuenta el karma a pagar, y las necesidades de nuestra evolución (limpieza de psique...). Será el que nos ponga los malotes, y de nosotros dependerá el que aprendamos de la situación, o NO (persiguiéndolos, pidiendo que se nos haga "justicia", con lo cual sólo conseguiremos prolongar la situación). Malos aspectos: marco de vida accidentado, difícil, peligroso. Si esos malos aspectos proceden del violento Marte, cuidado.';
  if ($signo == 11) return 'Urano. La radiación crística (viene de aquí) se manifiesta cuatro veces por año, y destruye el mal (lo que no vibra alto), restableciendo la salud en los organismos enfermos. Nos jode la vida, a fin de que podamos reconocer nuestra oscuridad y sintamos el afán de pureza y de luz. Pero también nos aporta la sabiduría divina en nuestras acciones humanas, para inventos... Malos aspectos: o bien ahogan su radiación de amor, con planetas reductores como Saturno o Mercurio, o aumentan su poder desintegrador (amplificadores como Júpiter, Venus, el Sol y Marte).';
  if ($signo == 12) return '¿Neptuno (como planeta fronterizo de otro sistema) se parece a Urano (espiritualidad)? Malos aspectos: acentuarán su personalidad extraña: fantasioso, excéntrico.';
 }

 function calculartextomisionhebrea($signo)
 {
  if ($signo == 1) return 'Aries sólo ambiciona la gloria de ser el primero, el héroe. Cuando "la empresa" se consolida, Aries comprenderá que aquello no es para él. Aries recibe información "divina" para actuar sin pensárselo mucho. La Providencia le saca de apuros. Las dos primeras horas de luz solar se encuentran bajo su dominio.';
  if ($signo == 5) return 'Leo nos permite interiorizar las energías divinas (en Aries "rebotan"). Sabe confusamente que es preciso ser FIEL a un ideal superior y que la obediencia es una virtud fundamental. Será el guardián de la ley, de la moral, de las costumbres, de las tradiciones. Negativamente: es un actor que interpreta un papel previamente escrito, y si ese papel es el de "malo"... Un excesivo número de planetas en Leo dará lugar a un individuo atado a demasiadas fidelidades (se volverá contra él).';
  if ($signo == 9) return 'Sagitario. Será portador de normas morales concretas, expresadas en ideas claras. Exceso planetas: creador de instituciones poco atendidas cada una de ellas.';
  if ($signo == 4) return 'Cáncer. Ya se persigue un objetivo personal. Para su obra, se encierra en un recinto (hogar...) para mejor amar y adorar aquello que siente como suyo. Ya no oye voces, pero siente que algo inefable hay más allá y lo venera a través de la fé. Exceso planetas: tendencia al aislamiento y al cambio de residencia, exceso de emotividad, individualismo y egoísmo.';
  if ($signo == 8) return 'Escorpio: fidelidad a un amor, a unos sentimientos. Volver al pasado será una constante tentación: anteriores vidas, la madre, la ciudad natal... Duele superarlo. Malos aspectos planetarios: deudas Kármicas ineludibles, asimilación de substancias sentimentales venenosas. Exceso planetas: naturaleza apasionada y actividad sexual multiplicada.';
  if ($signo == 12) return 'Piscis, instituye (como Sagi). Pruebas y sacrificios (para renunciar a algunas ambiciones sentimentales). Comportamiento poco lógico (sentimental). Malos aspectos: exteriorizaciones difíciles (y de sentimientos que en realidad no tiene), precipitadas, fuera de lugar, y timideces e inhibiciones. Exceso planetas: mucha exteriorización; siempre estará enamorado de alguien, pero sin profundidad.';
  if ($signo == 7) return 'Libra: compartir la obra anterior para adquirir magnitud y relevancia. ¿Busca complementario? Malos aspectos: dificultan la unión (matrimonial, integraciones en la sociedad...). Exceso de planetas: unirse a los demás con tantas ganas, que puede militar en un partido de derechas y de izquierdas al mismo tiempo.';
  if ($signo == 11) return 'Acuario. Es el inventor, el que traduce una ley universal a un esquema particular. La mente justifica estados emocionales que debería haber educado (todavía hay emoción). Malos aspectos: no es tan de pensamiento, se cometen errores de interpretación (filosofía, palabras e ideas ajenas...). Exceso planetas: es como una máquina tecnocrática.';
  if ($signo == 3) return 'Géminis (convencer). El elevado porta libertad, orden y trascendencia. Cuando habla o escribe, sana, NO abruma. El bajo dará a la sociedad razones "científicas" para equivocarse. Malos aspectos: falso testimonio de sí mismo. Exceso planetas: sentirá que en todo momento y en todo lugar debe poner la impronta de su pensamiento (y meterá la pata como "politólogo").';
  if ($signo == 10) return 'Capri. Edificadores de casas, son también edificadores del templo del espíritu, si son lo suficientemente avanzados para ello. Malos aspectos: mala elección del material para la obra o el negocio. ¿Eligen a los cantantes? Exceso planetas: volcado a las realizaciones materiales.';
  if ($signo == 2) return 'Tauro goza de lo construido en la etapa anterior. Todo le es dado con facilidad. Es el tesorero, el rentista, el opulento... Si está desarrollado espiritualmente, será el promotor del arte y la ciencia (la moral, no creo). Malos aspectos: mala asimilación del alimento, poco apetito, mala salud. Desgana de vivir. Incapacidad de apreciar la felicidad material, hacia los placeres... que puede ser origen de impotencia y frigidez. Exceso planetas: apegado a lo material. Goza, se divierte y no hace nada más.';
  if ($signo == 6) return 'Virgo observa y analiza la materia. Si vive las cualidades del signo en toda su plenitud, acabará dando la espalda a la materia y descubriendo la espiritualidad. El Virgo bajo sentirá que su situación material es precaria, e intentará prevenir la catástrofe guardando y acaparando, ocultando sus bienes a los familiares, para que éstos no los derrochen. Debe seleccionar qué tiene que abandonar la sociedad, para ir a una socidad mejor. Malos aspectos: digestiones lentas, sensibilidad de aparato digestivo, úlceras. Intentará por todos los medios mantener unos privilegios que se irán derrumbando. Exceso planetas: tendencia exagerada al detalle ínfimo, a la observación de sus propios procesos vitales; y de ahí la manía de sentirse enfermo y adoptar medidas higiénicas exageradas. ¡Eh, fuera las divas exhibicionistas ya!';
 } 

 function calculartextomisionsigno($signo)
 {
  if ($signo == 1) return 'Aries habla de expansión, y de iniciar proyectos que luego abandona. Acción sin hacerse casi preguntas.';
  if ($signo == 2) return 'Tauro empieza donde Aries lo dejó. No debe preguntar nada o cambiar de parecer o confiar a los demás su solitaria tarea. Cuidan.';
  if ($signo == 3) return 'Géminis, curiosísimos. Llegan a saber la suciedad del sistema mejor de lo normal. Comunicación.';
  if ($signo == 4) return 'Cancer enseña emociones, para que desarrollemos la plenitud interior (ser compasivo...). Don de la FAMILIA.';
  if ($signo == 5) return 'Leo, mostrarás "el mundo". No es tu creación. Alegría trabajando. Honestidad.';
  if ($signo == 6) return 'Virgo vigila y analiza, criticando con pureza de juicio (no he dicho sabiduría).';
  if ($signo == 7) return 'Libra, despierta en el Hombre la conciencia hacia los demás. Don del afecto y de suavizar la discordia. Hacer conscientes a los demás signos de sus misiones, y sus relaciones con los otros signos.';
  if ($signo == 8) return 'Escorpio: les dice a los demás que todo se hace con un propósito. Su tarea es conocer a los demás signos y sacar lo mejor que tienen para completar sus misiones, ¿sin decirles nada directamente? Verá tanto en las demás personas, que a veces se sentirá "rodeado de caimanes". Dada su dureza, les tocará ver cosas muy dolorosas.';
  if ($signo == 9) return 'Sagitario, enseña al Hombre la Alegría (sin usar la risa como defensa) y el optimismo. Conocerás la inquietud de cada una de las muchas vidas que toques. Don de la ABUNDANCIA INFINITA, aportando luz en muchos lugares, ¡misionero!';
  if ($signo == 10) return 'Capricornio, enseña al Hombre a trabajar (con descansitos, pero con constancia). Don de la responsabilidad. Ayudar a cargar con las tareas de los demás mientras aprenden a realizarlas.';
  if ($signo == 11) return 'Acuario, el Conocimiento del Futuro para nuevas posibilidades. Don de la LIBERTAD.';
  if ($signo == 12) return 'Piscis, absorberás penas; ampara, anima... Cuando trates de difundir las leyes naturales / universales / espirituales, el Hombre no te escuchará. Haz al otro confiar en sus capacidades para que lo intente de nuevo si falla en sus misiones.'; 
 }

 function calculartextodecanatoviejo($signo)
 {
  if ($signo == 1) return '* 20 marzo 31 marzo. Marte rige (Aries también). NOTA: NO VERÁS NI A URANO, NI A NEPTUNO NI A PLUTÓN (BUSCA POR TU CUENTA SI QUIERES). Te enfocas en tus deseos, que te ayudan a darte cuenta de quién eres. ¿Tiernos? ¿Gordillos?
* Tendencia Leo (Sol): 1 a 10. Cálido, entusiasta y puedes contagiar ese calor. ¿Durillos?
* 11 a 19. Regente Venus (yo me esperaba Sagi. Venus rige a Libra). Mayor facilidad para conciliar puntos de vista opuestos.';
  if ($signo == 2) return '* 20 a 30 Abril. Mercurio (Géminis). Varían las actividades... ¿Éxito material comerciando / aprovechando oportunidades? Secretamente valora más los pensamientos que los sentimientos.
* 1 a 10. Luna (Cancer). Fundar un hogar. Le da bastante importancia a los sentimientos. La popularidad es posible. Manejarse en grupos es una de las claves del éxito.
* 11 a 20. Saturno (Capri). Fuertes convicciones para conseguir propósitos. Tesón y laboriosidad para objetivo grande. Se comprometen sólo a actividades que saben que podrán hacer (tiene su lado negativo).';
  if ($signo == 3) return '* Mayo 21 a 31. Júpiter (Sagi). Estudios superiores, viajes (para aprender) y cualquier actividad que te permita expandir la mente. Optimismo jovial y a veces desmesurado, y adquirir conocimientos te trae sumo placer, mientras puedas compartirlo.
* 1 a 10 de junio. Marte. Periodistas que defienden sus ideas. Astuto, inquieto mentalmente, pensando en el siguiente paso.
* 11 a 20. Sol. Las investigaciones alcanzan alturas honorables. Mente brillante. Secretamente, tienes preguntas muy profundas que vas respondiendo con el correr de los años. Los demás disfrutarán de las respuestas.';
  if ($signo == 4) return '* Junio 21 a 1 julio. Venus (simpatía). Muy afectuoso; no temes expresar tus sentimientos. Encontrar a tu "media naranja". Puedes ser un poco más materialista.
* 2 a 12. Mercurio. Un poco más racionales e introspectivos, con mayor facilidad para comprender sus emociones y expresarse. Concretar algún tipo de estudio más o menos formal. Incomprendido. Estudia un poco sobre comunicación.
* 13 a 21. Luna: emotividad, capacidad de protección, apego al pasado, a las tradiciones y los recuerdos, necesidad de tener un grupo de pertenencia. Sabes que puedes cuidar muy bien a tus seres queridos (hijos...).';
  if ($signo == 5) return '* Julio 22 a 1 agosto. Saturno. Dignidad, valor, justicia y brillo constructivo y concreto. Autoridad y liderazgo naturales. Crees poseer "la fórmula" (puedes pecar de altanero). Rectitud y disciplina (curioso Leo).
* 2 a 12. Júpiter. Optimista en extremo y orgullo a veces desmedido. Expresar energía exuberante creativamente (teatro, arte...). Viajes y descubrimientos. Defiendes al débil.
* 13 a 21. Marte. Valor y ánimo inigualables. Dotado para el deporte. El liderazgo es reconocido después de algunas batallas demostrando lo que vales.';
  if ($signo == 6) return '* Agosto 22 a 2 septiembre. Sol. Disciplina para la excelencia y brillo intelectual. Más entusiastas. Destacarse en cualquier cargo que ocupen.
* 3 septiembre a 13. Venus. Carácter dulce y simpático. Se esfuerzan por concretar proyectos y alcanzar una buena posición económica (gracias a los lazos que establecen...). Perfeccionismo estético (dietas...).
* 14 a 22. Mercurio. Estudio y lograr pequeños éxitos en su profesión. Detallista, analítico (a veces en extremo). Un ideal de ti mismo demasiado alto puede frustrarte. Son rapidísimos pensando.';
  if ($signo == 7) return '* Septiembre. 23 a 2 octubre. Luna. ¡Decanato matrimonial! O grupo... donde puedan aportar algo. Puedes alcanzar popularidad gracias a la Luna.
* 3 a 13. Saturno. Infancias difíciles o "adultas" (postergando cosas bonitas). Carácter duro y consciente del deber. Seguridad puesta en sí mismos y sus recursos, NO en el afuera.
* 14 a 22. Júpiter (provee buenas oportunidades para triunfar, ai NO hay exceso de auto-confianza, o NO se quiere más y más, tirando por la borda parte de lo conseguido). Lo saben: mejorar la sociedad y transformar el mundo (obra, o legado).';
  if ($signo == 8) return '* Octubre 23 a 1 noviembre. Marte (arrojados, fuertes, a veces egocéntricos, increíble fuerza de voluntad). Muy emocionales. Querer imponer tus deseos provocará luchas. Exteriroriza sentimientos para NO tener rencor.
* 2 a 12. Sol (eje para las turbulentas aguas escorpianas), ¿y NO era Neptuno? Faro de esperanza y claridad aún en medio de crisis (también para los demás). Gran terapeuta si te lo propones (puedes bucear en emociones intensas, ¿y mejorar mucho?).
* 13 a 21. Venus. Pasión, romanticismo, sensualidad. Cuidado con encarar las cosas con intensidad.';
  if ($signo == 9) return '* Noviembre 22 a 1 diciembre. Mercurio incentiva mucho más la búsqueda filosófica. De pequeños, pudieron haber vivido cambios de domicilio. ¿Multiplicidad de vínculos y creencias a lo largo de su vida?
* 2 a 11. Luna. Disfrutas estando en constante movimiento: viajes físicos (aventuras sin dar explicaciones) o con la mente, conociendo lugares y culturas lejanas. Necesitas un hogar al que regresar o viajar con alguien familiar.
* 12 a 20. Saturno. Puede que cuestiones las creencias que has heredado o que las consideres como "ley" y rechaces lo diferente.';
  if ($signo == 10) return '* Diciembre 21 a 31. Júpiter. Hacer cumplir la Ley, las capricornianas reglas. Quieres una buena posición social y buscas el éxito en general. Deberás cultivar buenas relaciones para NO sentirte solo. Cuidado con una vida material hipercómoda.
* 1 a 10. Marte. Romper con las tradiciones o imponer las que quiera. Pueden guardar rencor a quienes los dañaron.
* 11 a 19. Sol. Buscan mejorar lo social. Les espera el reconocimiento si aprenden a administrar su ego. Puedes sentir que eres mejor que los demás y no temer demostrarlo objetivamente.';
  if ($signo == 11) return '* Enero 20 a 30. Venus. Persigues la armonía en el hogar. Buscas la comodidad y el disfrute. El amor se confunde a veces con la amistad. Persigues el amor perfecto, que comparta valores, sepa respetar tu libertad y esté siempre allí para ti.
* 31 a 9. Mercurio (intelectual). De repente pueden ser más emocionales que racionales. Te identificas con todo lo grupal, lo que te da sensación de ser más grande.
* 10 a 18. Luna. Más emocionales que mentales. Puede llevar una vida variada, algo errática y con altibajos. Rebelde, inconvencional, quiere decidir para su vida. Ideas "locas", pero atrayentes. Necesitas pertenecer a algún tipo de grupo o institución.';
  if ($signo == 12) return '* Febrero 19 a 1. Saturno. Ambición material y consciencia de su responsabilidad en la sociedad. Pueden sentir que ayudan pero no reciben la ayuda que necesitan. La caridad, inteligente (cubre tus necesidades, enseña "a pescar"...).
* 2 a 11. Júpiter. Destaca las cualidades naturales de Piscis: entrega, empatía, psiquismo fuerte, humanitarismo. Excesos. Buen carácter y postura positiva ante la vida, que transmiten a los demás.
* 12 a 20. Marte. Carácter mucho más fuerte, resuelto y competitivo. Pueden guardar un rencor o un enojo por mucho tiempo, hasta que aparece de manera súbita. Muy psíquicos, e influencian a los demás, a veces ejerciendo presión, aunque no de un modo directo.';
 }

 function calculartextodecanato($mes, $dia)
 {
  if ( ( ($mes == 1) && ($dia == 1) ) ||
       ( ($mes == 12) && ($dia >= 22) ) )
   return 'Capri 1. El sereno
El primer decanato de Capricornio va del 22 de diciembre al 1 de enero. Los nativos de este primer decanato están regidos por Saturno, su planeta gobernante. Son seres serenos que mantienen la calma en las situaciones más estresantes. Estos serenos Capricornio son altamente responsables y confiables. Son la roca en la que los demás pueden apoyarse en momentos difíciles. A menudo son líderes respetados que saben cómo guiar a otros con sabiduría y tranquilidad.'; 
  if ( ($mes == 1) && ($dia <= 11) ) return 'Capri 2. El creativo
El segundo decanato de Capricornio va del 2 de enero al 11 de enero. Este decanato está influenciado por Venus, la diosa del amor. Esto confiere a los Capricornio una creatividad que los convierte en los artistas y visionarios del signo. Aprecian el arte en todas sus formas. Su capacidad para ver la belleza en el mundo los hace verdaderos apasionados de la vida. Estos Capricornio pueden encontrar éxito en campos artísticos, diseño o cualquier carrera que les permita expresar su creatividad.';
  if ( ($mes == 1) && ($dia <= 20) ) return 'Capri 3. El agudo
El tercer decanato de Capricornio va del 12 de enero al 20 de enero. Este decanato está bajo la influencia del comunicativo Mercurio. Estos Capricornio poseen una mente aguda y una determinación férrea. Son conocidos por su capacidad para planificar meticulosamente y ejecutar sus objetivos con precisión. La combinación de Saturno (el regente principal de Capricornio) y Mercurio les otorga habilidades de comunicación excepcionales, lo que los hace destacar en campos como la política, la educación y la gestión.';
  if ( ($mes == 1) && ($dia <= 30) ) return 'Acuario 1. El visionario
El primer decanato de Acuario va del 21 de enero al 30 de enero. Los nativos de este primer decanato están bajo la influencia de Urano, el planeta que ayuda a ver más allá de lo que otros ven. Estos acuarianos son visionarios, y su rasgo distintivo es su capacidad para ver el mundo de una manera única y revolucionaria. Son pensadores adelantados a su tiempo. Son innovadores y tienen una mente abierta para abrazar nuevas ideas y conceptos. Su deseo de cambiar el mundo los impulsa a trabajar en causas humanitarias. Son líderes que inspiran a otros a ver el potencial de un futuro diferente y más brillante.';
  if ( ($mes == 1) || ( ($mes == 2) && ($dia <= 8) ) ) return 'Acuario 2. El humanitario
El segundo decanato de Acuario va del 31 de enero al 8 de febrero. El segundo decanato está influenciado por Mercurio, el mensajero del zodiaco. A los acuarianos nacidos en este periodo les preocupa enormemente los problemas sociales y dedican su tiempo a la causa de la igualdad y la justicia. Su habilidad para comunicarse de manera efectiva los convierte en defensores poderosos de los derechos humanos. Estos acuarianos trabajan incansablemente para construir un mundo mejor, un mundo más equitativo.';
  if ( ($mes == 2) && ($dia <= 18) ) return 'Acuario 3. El intelectual
El tercer decanato de Acuario va del 9 de febrero al 18 de febrero. Este decanato está bajo la influencia de Venus, el planeta del amor y el deseo. Los acuarianos nacidos en este periodo combinan su amor por el conocimiento con una apreciación por la belleza y el arte. Son pensadores profundos que disfrutan de explorar ideas abstractas y conceptos filosóficos. Su amor por la belleza los lleva a apreciar el arte en todas sus formas. A menudo destacan en campos como la ciencia, la filosofía y las artes visuales.';
  if ($mes == 2) return 'Piscis 1. El empático
El primer decanato de Piscis va del 19 de febrero al 28 de febrero. Este primer decanato es el reflejo viviente de las aguas más profundas de la empatía. Rodeados por las melodías de Neptuno, los Piscis nacidos en este periodo son almas compasivas y soñadoras. Estos nativos poseen una sensibilidad que trasciende los límites de lo ordinario. Son capaces de percibir los sentimientos de los demás con una claridad casi mágica. Llegan a ser magníficos consejeros y sanadores, brindando consuelo a aquellos que buscan un refugio en su abrazo compasivo.';
  if ( ($mes == 3) && ($dia <= 10) ) return 'Piscis 2. El imaginativo
El segundo decanato de Piscis va del 1 de marzo al 10 de marzo. Este decanato está regido por la Luna, el astro de la intuición, las emociones y la sensibilidad. Las almas creativas que nacieron en este periodo, tienen una conexión profunda con el mundo de la fantasía. Sus mentes son un torbellino de ideas y visiones. Son músicos, pintores y poetas que transmiten emociones a través de su arte. Su sensibilidad a la belleza y la expresión les permite trascender los límites de la realidad.';
  if ( ($mes == 3) && ($dia <= 20) ) return 'Piscis 3. El misterioso
El tercer decanato de Piscis va del 11 de marzo al 20 de marzo. Este decanato es un territorio enigmático gobernado por Plutón. Estos nativos tienen una profunda intuición y un acceso directo al inconsciente colectivo. Son maestros de secretos y guardianes de los misterios más profundos de la vida. Pueden explorar los rincones más oscuros del alma humana y comprender lo que yace en las sombras.';
  if ( ($mes == 3) && ($dia <= 30) ) return 'Aries 1. El guerrero
El primer decanato de Aries va del 21 de marzo al 30 de marzo y es regido por Marte. Las personas nacidas en este decanato poseen una fuerte determinación, impulsada por la influencia de Marte, el planeta de la guerra y la acción. Son pioneros audaces y no temen enfrentar desafíos. Como no les da miedo nada, suelen ser líderes naturales que tienen una habilidad impresionante para inspirar a otros a seguir sus pasos. Son el referente de muchos.';
  if ( ($mes == 3) || ( ($mes == 4) && ($dia <= 9) ) ) return 'Aries 2. El apasionado
El segundo decanato de Aries va del 31 de marzo al 9 de abril y es regido por el rey de todos: el Sol. Los arianos de este decanato son apasionados y enérgicos, pero también tienen un toque intelectual gracias a la influencia del Sol, el astro que irradia creatividad y vitalidad. Son impulsivos, pero también poseen la capacidad de analizar situaciones con profundidad. Es admirable la manera en que canalizan su fuego interno creando o innovando en varios ámbitos, especialmente, en el profesional. Sus proyectos cobran dimensiones espectaculares beneficiando a muchos.';
  if ( ($mes == 4) && ($dia <= 19) ) return 'Aries 3. El aventurero
El tercer decanato de Aries va del 10 de abril al 19 de abril y es regido por el expansivo y suertudo Júpiter: Este grupo de arianos es conocido por su espíritu aventurero y su amor por los desafíos físicos, influenciados por Júpiter, el planeta de la expansión, los viajes y la exploración. Son atletas naturales y amantes de la adrenalina. Nadie los detiene, se mantienen en movimiento constante, siempre en busca de nuevas sensaciones. Son los mejores guías por todo lo que han vivido.';
  if ( ($mes == 4) && ($dia <= 29) ) return 'Tauro 1. El sensible
El primer decanato de Tauro va del 20 de abril al 29 de abril. Las personas nacidas en este decanato son gobernadas por Venus, el planeta del amor y la belleza. Admiran las proporciones armónicas del Universo. Una característica interesante de este grupo es su habilidad para convertir cualquier lugar en un paraíso estético, ya sea su hogar o su lugar de trabajo. Pueden crear espacios acogedores, ser asesores de moda innatos o maestros de arte increíbles. Todos se sientan bienvenidos y relajados en su presencia.';
  if ( ($mes == 4) || ( ($mes == 5) && ($dia <= 9) ) ) return 'Tauro 2. El emprendedor
El segundo decanato de Tauro va del 30 de abril al 9 de mayo. En este decanato, Mercurio ejerce su influencia, otorgando a los taurinos una combinación única de determinación y eficacia. Son expertos en materializar sus ideas en proyectos concretos. La característica interesante de este grupo es su habilidad para hacer que las cosas sucedan de manera eficiente. Son conocidos por ser exitosos emprendedores que convierten sus visiones en realidad.';
  if ( ($mes == 5) && ($dia <= 20) ) return 'Tauro 3. El paciente
El tercer decanato de Tauro va del 10 de mayo al 20 de mayo. Las personas nacidas en este decanato están bajo la influencia de Saturno, el planeta del tiempo, la disciplina, los límites y la paciencia. Son conocidos por su serenidad y su capacidad para mantener la calma en situaciones algo difíciles. Las personas de este grupo pueden ser mentores y guías para otros que necesitan aprender grandes lecciones en la vida. Pueden ser de esos docentes o maestros admirados y que tienen discípulos fieles de por vida. Son pacientes y están dispuestos a enseñar a quienes los rodean, transmitiendo sabiduría a través de su tranquilidad.';
  if ($mes == 5) return 'Géminis 1. El comunicador
El primer decanato de Géminis va del 21 de mayo al 31 de mayo. Las personas nacidas en este decanato son gobernadas por Mercurio, el planeta de la comunicación, los mensajes y el intelecto. Son comunicadores innatos que tienen la misión de llevar y transmitir información. Son los periodistas del zodiaco. Tienen la capacidad de hablar con fluidez en cualquier situación y son muy famosos por ser los animadores de fiestas. Todos se sienten cómodos con su humor e interesados en los temas de conversación que proponen.';
  if ( ($mes == 6) && ($dia <= 10) ) return 'Géminis 2. El pensador
El segundo decanato de Géminis va del 1 de junio al 10 de junio. En este decanato, Venus ejerce su influencia, otorgando a los geminianos una combinación de elocuencia, inteligencia y encanto. Son amantes del arte y la belleza, y su mente aguda se combina con una apreciación por las cosas hermosas. La característica interesante de este grupo es su capacidad para ver la belleza en los detalles cotidianos. Pueden convertir situaciones comunes en experiencias excepcionales.';
  if ( ($mes == 6) && ($dia <= 20) ) return 'Géminis 3. El curioso
El tercer decanato de Géminis va del 11 de junio al 20 de junio. Las personas nacidas en este decanato están gobernadas por Urano, el planeta de la originalidad, la revolución y la innovación. Son exploradores curiosos que siempre están en busca de nuevas experiencias, conocimientos e inspiraciones. Tienen adentro la energía uraniana que los empuja a romper con las convenciones para abrazar lo inusual. Tienen una mente abierta para probar cosas nuevas, extrañas y emocionantes. No parecen de este mundo, son como primos hermanos de los acuarianos.';
  if ( ($mes == 6) || ( ($mes == 7) && ($dia == 1) ) ) return 'Cancer 1. El cuidador
El primer decanato de Cáncer va del 21 de junio al 1 de julio. Las personas nacidas en este decanato están profundamente conectadas con la influencia lunar, pues la Luna es su regente, lo que les otorga una naturaleza emocional, intuitiva, maternal y cariñosa. Su característica adorable es su instinto natural para cuidar de los demás, como si llevaran una “luna” en sus corazones. Siempre brindan un hombro en el que apoyarse y una taza de té caliente lista para reconfortar a cualquiera que lo necesite. Además, saben como nadie lo otros sienten y predicen cosas que están por pasar, son seres muy intuitivos y sabios.';
  if ( ($mes == 7) && ($dia <= 11) ) return 'Cancer 2. El protector
El segundo decanato de Cáncer va del 2 de julio al 11 de julio. En este decanato, los nativos experimentan la profunda influencia de Plutón, el planeta de la transformación y la intensidad. Su determinación feroz para proteger a sus seres queridos es de otro mundo. A menudo, son “osos guardianes” de su círculo cercano y no dudarán en enfrentar cualquier desafío para mantener a salvo a quienes aman. Son conocidos por ser los primeros en la línea de batalla para defender a sus amigos. También organizan las mejores fiestas de cumpleaños.';
  if ( ($mes == 7) && ($dia <= 22) ) return 'Cancer 3. El soñador
El tercer decanato de Cáncer va del 12 de julio al 22 de julio. Las personas nacidas en este decanato encuentran su fuerza y empatía a través de la influencia de Neptuno, el planeta de la imaginación, los sueños y la compasión. Estos nativos ven la belleza en los pequeños detalles. Tienen una particular inclinación a crear mundos mágicos en su mente. Tienen un talento natural para escribir cartas de amor apasionadas y por tener una fascinación por los cuentos de hadas. Tienen una imaginación muy viva que compite con la de sus compañeros de elemento, Piscis.';
  if ( ($mes == 7) || ( ($mes == 8) && ($dia == 1) ) ) return 'Leo 1. El líder
El primer decanato de Leo va del 23 de julio al 1 de agosto. Las personas nacidas en este decanato son verdaderos reyes y reinas en su vida. El Sol, su regente, les otorga un porte envidiable, un carisma irresistible y una confianza absoluta. Son líderes naturales que atraen a otros con su luz solar. Los nativos de este decanato son conocidos por su capacidad para atraer a otros. Son el alma de la fiesta y el centro de atención en cualquier lugar donde vayan. Ellos gobiernan el espacio donde respiran.';
  if ( ($mes == 8) && ($dia <= 11) ) return 'Leo 2. El generoso
El segundo decanato de Leo va del 2 de agosto al 11 de agosto. En este decanato, Júpiter ejerce su influencia, brindando a los leoninos una combinación de pasión, suerte y generosidad. Son creativos y apasionados en todo lo que hacen, desde el arte hasta el amor. Los nativos de este decanato son conocidos por su generosidad, llevando alegría a la vida de los demás. Son los amigos que siempre tienen un gesto amable y una sonrisa en el rostro.';
  if ( ($mes == 8) && ($dia <= 22) ) return 'Leo 3. El inspirador
El tercer decanato de Leo va del 12 de agosto al 22 de agosto. Las personas nacidas en este decanato encuentran su fuerza y determinación a través de la influencia de Marte, el planeta de la acción y la energía. Son líderes tenaces que no se rinden fácilmente ante los desafíos. Los nativos de este decanato son conocidos por su espíritu competitivo. Su fuerza interna les ayuda para alcanzar sus metas más altas. Son los compañeros ideales en proyectos ambiciosos.';
  if ( ($mes == 8) || ( ($mes == 9) && ($dia == 1) ) ) return 'Virgo 1. El analista
El primer decanato de Virgo va del 23 de agosto al 1 de septiembre. El primer decanato de Virgo está regido por Mercurio, el astuto mensajero de los dioses. Aquellos nacidos bajo este influjo celestial son conocidos por su aguda inteligencia y su capacidad analítica. Los Virgo del primer decanato son notoriamente organizados. Son perfeccionistas que tienden a ser meticulosos en todo. También son excelentes comunicadores. Su habilidad para comunicar ideas complejas de manera clara y concisa los convierte en excelentes periodistas, maestros y escritores. Sin embargo, también pueden ser un poco críticos, tanto con ellos mismos como con los demás, debido a su perfeccionismo obsesivo.';
  if ( ($mes == 9) && ($dia <= 11) ) return 'Virgo 2. El sensible
El segundo decanato de Virgo va del 2 de septiembre al 11 de septiembre. El segundo decanato de Virgo está bajo la influencia de Venus, la diosa del amor y la belleza. Aquellos nacidos en este período tienen una combinación única de pragmatismo y sensibilidad. Son amantes de la estética y tienen un ojo agudo para los detalles, lo que los hace destacar en el diseño y las artes. Pueden ser un poco indecisos, ya que su deseo de perfección puede llevar mucho tiempo.';
  if ( ($mes == 9) && ($dia <= 22) ) return 'Virgo 3. El trabajador
El tercer decanato de Virgo va del 12 de septiembre al 22 de septiembre. El tercer decanato de Virgo está gobernado por Saturno, el planeta del tiempo, la disciplina y la responsabilidad. Aquellos nacidos en este período son las encarnaciones de la perseverancia y el autocontrol. Son conocidos por su ética de trabajo incansable. Los Virgo del tercer decanato son líderes que a menudo ocupan posiciones de autoridad en sus carreras. Su realismo y practicidad los hace buenísimos en la resolución de problemas. Deben cuidar de ser severos consigo mismos y con los demás.';
  if ( ($mes == 9) || ( ($mes == 10) && ($dia <= 2) ) ) return 'Libra 1. El fashionista
El primer decanato de Libra va del 23 de septiembre al 2 de octubre. El primer decanato de Libra está bajo la influencia de Venus, la diosa del amor y la belleza. Los Libra nacidos en este período son embajadores de la gracia, la moda y la elegancia. Son marcadores de tendencias. Son extremadamente encantadores, amables y siempre buscan la armonía personal, relacional y estética. Los Libra del primer decanato son conocidos por su sentido estético en el arte y la cultura. Suelen sentirse atraídos por las cosas que dan placer y activan los sentidos.';
  if ( ($mes == 10) && ($dia <= 13) ) return 'Libra 2. El revolucionario
El segundo decanato de Libra va del 3 de octubre al 13 de octubre. El segundo decanato de Libra está bajo la influencia de Urano, el planeta de la innovación y la originalidad. Los Libra nacidos en este período son independientes. Son personas rebeldes que disfrutan desafiando las normas establecidas y luchan por la justicia en un mundo decadente. Los Libra del segundo decanato entregan su vida a causas humanitarias. A menudo luchan por un cambio para crear una sociedad más igualitaria. Su mente aguda y su capacidad para ver más allá de lo convencional los convierten en líderes en la búsqueda de soluciones innovadoras. Sin embargo, a veces pueden ser percibidos como excéntricos o impredecibles en sus acciones, tal y como les sucede a sus compañeros del elemento aires: Acuario.';
  if ( ($mes == 10) && ($dia <= 23) ) return 'Libra 3. El sociable
El tercer decanato de Libra va del 14 de octubre al 23 de octubre. El tercer decanato de Libra está regido por Mercurio, el astuto mensajero de los dioses. Los Libra nacidos en este período son comunicadores excepcionales y tienen una mente ágil. Son sociables, carismáticos y sin duda son el alma de la fiesta. Los Libra del tercer decanato tienen una habilidad innata para mediar y resolver conflictos. Ven nítidamente todos los lados de una situación por lo que pueden ser excelentes consejeros, conciliadores, jueces o tomadores de decisiones. Sin embargo, su deseo de complacer a todos puede llevarlos a la indecisión en ocasiones.';
  if ( ($mes == 10) || ( ($mes == 11) && ($dia <= 2) ) ) return 'Escorpio 1. El resiliente
El primer decanato de Escorpio va del 23 de octubre al 2 de noviembre. El primer decanato de Escorpio está regido por Plutón, el planeta de la transformación y la regeneración. Los Escorpio nacidos en este período son conocidos por su increíble capacidad de superar obstáculos y renacer de las cenizas. Estos Escorpio son poderosos. Tienen una mente aguda y una habilidad para investigar y descubrir la verdad. Su intensidad puede llevarlos a ser reservados y a veces obsesivos en su intensa búsqueda por respuestas.';
  if ( ($mes == 11) && ($dia <= 12) ) return 'Escorpio 2. El magnético
El segundo decanato de Escorpio va del 3 de noviembre al 12 de noviembre. El segundo decanato de Escorpio está bajo la influencia de Neptuno, el planeta de la imaginación y el misticismo. Los Escorpio nacidos en este período nacieron para sumergirse en los misterios de la vida. Estos Escorpio tienen una profunda conexión con el mundo espiritual y a menudo se sienten atraídos por el ocultismo. Pueden llegar a ser excelentes consejeros, hechiceros o sanadores. Sin embargo, su naturaleza soñadora puede llevarlos a ser evasivos.';
  if ( ($mes == 11) && ($dia <= 21) ) return 'Escorpio 3. El hipersensible
El tercer decanato de Escorpio va del 13 de noviembre al 21 de noviembre. El tercer decanato de Escorpio está bajo la influencia de la Luna, el astro que gobierna las emociones y la sensibilidad. Así como su compañeros de agua, Cáncer, estos Escorpio tienen una profunda conexión con sus propios sentimientos y con los de los demás. Comprenden las emociones de las personas y a menudo actúan como consejeros y confidentes. Deben cuidar de su sensibilidad porque puede llevarlos a ser un tanto volubles emocionalmente.';
  if ( ($mes == 11) || ( ($mes == 12) && ($dia <= 2) ) ) return 'Sagi 1. El aventurero
El primer decanato de Sagitario va del 22 de noviembre al 1 de diciembre. Este decanato está regido por Júpiter, el planeta de la expansión y la buena fortuna. Los Sagitario nacidos en este período son optimistas, aventureros y algo filósofos. Son flechas que vuelan hacia lo desconocido y se deleitan con lo diferente. Estos Sagitario son buscadores de la verdad. Tienen una mentalidad abierta y un deseo constante de aprender y crecer. Siempre están dispuestos a ayudar a los demás. Sin embargo, su espíritu aventurero puede llevarlos a ser impulsivos.';
  if ( ($mes == 12) && ($dia <= 12) ) return 'Sagi 2. El emprendedor
El segundo decanato de Sagitario va del 2 de diciembre al 11 de diciembre. Este decanato está bajo la influencia de Marte, el planeta de la guerra, la acción y la determinación. Los Sagitario nacidos en este período desean conquistar el mundo. Son emprendedores natos. Tienen una fuerte ética de trabajo y están dispuestos a asumir riesgos para alcanzar sus metas. Son valientes y no temen enfrentar desafíos. Suelen ser muy impacientes y tomar riesgos innecesarios.';
  if ( ($mes == 12) && ($dia <= 21) ) return 'Sagi 3. El sabio
El tercer decanato de Sagitario va del 12 de diciembre al 21 de diciembre. Este decanato está bajo la influencia del Sol, la fuente de luz y vitalidad en nuestro sistema solar. Los Sagitario nacidos en este período iluminan cualquier habitación con su presencia. Son seres optimistas, llenos de energía y también muy sabios. Tienen una confianza en sí mismos que atrae a quienes los rodean. Son creativos y apasionados en su búsqueda de la vida. A menudo destacan en las artes y el entretenimiento. Sin embargo, a veces pueden ser un tanto egocéntricos debido a su fuerte personalidad.';
  return "Hola";
 }

 function calculartextocasa10($casa10)
 {
  if ($casa10 == 1) return 'persona muy ambiciosa con fuerza ilimitada para perseguir el éxito. Líder carismático.';
  if ($casa10 == 2) return 'prefieres la estabilidad y la seguridad, a la ambición desmedida. Ética de trabajo, estabilidad financiera y una carrera en la que te sientas cómodo.';
  if ($casa10 == 3) return 'capacidad comunicativa y de adaptarte al mundo laboral. Relación con la educación, la comunicación o la escritura.';
  if ($casa10 == 4) return 'tu conexión con el hogar y la familia es tu fuente principal de motivación. Atención sanitaria, educación, gestión del hogar.';
  if ($casa10 == 5) return 'carisma. Política, entretenimiento.';
  if ($casa10 == 6) return 'fuerte sentido del deber. Contabilidad, gestión, investigación. ';
  if ($casa10 == 7) return 'cooperar y negociar. Asuntos estéticos, moda, justicia.';
  if ($casa10 == 8) return 'fuerte determinación y grandes ansias de poder. Psicología u otras ramas de la Ciencia que estudien la mente. ¿Y detective (estudias la mente del asesino)?';
  if ($casa10 == 9) return 'mente abierta y gran curiosidad innata. Viajar y explorar el mundo.';
  if ($casa10 == 10) return 'gran ambición, aunque con una perspectiva más práctica que en otros casos. Ir a lo más alto: finanzas, ingeniería...';
  if ($casa10 == 11) return 'mente innovadora, y concepto de comunidad. Sentir (y comprobar con gran sabiduría je je) que estás aportando tu granito de arena para hacer del mundo un lugar mejor.';
  if ($casa10 == 12) return 'personalidad sensible y creativa. Música o expresión artística en general.';
  return "nada.";
 }

 function calculartextocasa2($casa2)
 {
  if ($casa2 == 1) return 'inclinado a emprender y montar tu propio negocio. ¿Impulsividad?';
  if ($casa2 == 2) return 'esforzarte y ser constante en tu empeño, en trabajos más o menos tradicionales. Te gusta ahorrar y sientes un gran apego por tus bienes materiales.';
  if ($casa2 == 3) return 'comunicación. Aprender a vender es la clave para acumular riquezas. Tienes una gran capacidad para adaptarte a los cambios, lo que hace que se te den bien los negocios.'; 
  if ($casa2 == 4) return 'miras más por el valor emocional de las cosas que por su valor económico. Busca algo "que te llene emocionalmente": conectar con los demás, ayudar, formar comunidad.';
  if ($casa2 == 5) return 'generoso. Crees que el lujo solo merece la pena si tienes alguien con quien compartirlo. Tienes mucha autoconfianza y sabes venderte bien. Las artes son lo que más te llama la atención.';
  if ($casa2 == 6) return ' te preocupas por el dinero. Eres muy cuidadoso con los gastos que haces y muy analítico con tus finanzas. Gran capacidad de organización. Debes tener cuidado con la autoexigencia.'; 
  if ($casa2 == 7) return 'equilibrio en las finanzas. Tienes un gran talento para gestionar las finanzas y haces buenos negocios. La clave está en saber trabajar en equipo.';
  if ($casa2 == 8) return 'gran talento para generar dinero, aunque NO revelas tus secretos. Un poco controlador con tus finanzas. La ambición te impulsa a tener un enfoque más individualista en las relaciones financieras.';
  if ($casa2 == 9) return 'despreocupado con respecto a las finanzas. Confías en que, tarde o temprano, te llegará lo que necesitas. Lo tuyo es centrarte en disfrutar, viajar, vivir aventuras. Prefieres pensar en los bienes desde el punto de vista filosófico.'; 
  if ($casa2 == 10) return 'conseguirás lo que te propongas. Eres ambicioso, trabajador y tienes talento para construir una buena base financiera sobre la que desarrollar tu carrera profesional y financiera.';
  if ($casa2 == 11) return 'buscas formas poco convencionales de conseguir dinero y gastarlo. Tienes un enfoque más comunitario que individual.';
  if ($casa2 == 12) return 'relación emocional con el dinero. Para conseguirlo, confías en tu intuición. Tu creatividad y sensibilidad especiales te llevarán al lugar indicado en el momento correcto.';

  return "nada.";
 }

 function calculartextosignocasa($signo)
 {
  if ($signo == 1) return 'Casa I, personalidad (máscara) y silueta física (mi ascendente es Capri).<BR>* Malos aspectos: la sociedad, la familia, el cónyuge, el medio profesional... no serán los idóneos para la manifestación de su personalidad y deberá luchar, ¿toda su vida? contra esa adversidad. Exceso planetas: necesidad imperiosa de sobresalir, realizar hazañas, sean las que sean. Fácilmente manipulable. Egoísmo.';
  if ($signo == 2) return 'Casa II. Tauro, recompensa y descanso. Indicará en qué hemos trabajado anteriormente y que ahora da frutos. Nos dirá de dónde sacará el individuo su sustento material: en signos de fuego, la Providencia proveerá; en signos de agua, los sentimientos serán el principal motor de los ingresos; en signos de aire, el provecho vendrá de trabajos intelectuales; en signos de tierra, el sustento provendrá de un trabajo material. ¿En qué signo tienes la casa II? Yo, en Acuario, aunque tenga la casa 10 (trabajo) en Escorpio (detective, Psicología...).<BR>* Malos aspectos: los recursos le vendrán de manera forzada, dramática, y si esos malos aspectos son múltiples, pueden significar el impedimento total a la persona de alcanzar los medios que han de sostenerla. ¿Me corté en una vida anterior de la corriente del amor familiar, eros, comunitario, o coherente? Exceso planetas: los bienes materiales tendrán una prioridad absoluta.';
  if ($signo == 3) return 'Casa III, Géminis (familia, vecinos...). Géminis recoge la información procedente del mundo material, ¿y va a Acuario y Libra? Un corto viaje bastará para descubrir lo semejante a él, si es que no lo descubrimos en la misma esquina de la calle en que vivimos. Regirá los intercambios escritos y hablados: es significativo que cuando Mercurio se encuentra en movimiento retrógrado, casi siempre hay huelga de Correos.<BR>* Malos aspectos: hermanos dificultarán su acceso a la compañía de personas semejantes a él, y los medios de expresión a su alcance no serán los adecuados para manifestar su potencialidad intelectual. "No aprende" con las experiencias. El individuo no encuentra su puesto. Exceso planetas: hablará inconteniblemente de tonterías y escribirá aún más.';
  if ($signo == 4) return 'Casa IV, Cáncer. Vida privada del individuo y posesiones materiales. Antepasados, infancia, barrio natal, los que viven en su hogar y su comportamiento en la casa y en la vida de familia. Todo lo relacionado con la madre.<BR>* Malos aspectos: todo resultará precario, empezando por su propia madre, que carecerá o de medios o de inteligencia para orientar adecuadamente al individuo. Hogar inestable, dificultad para echar raíces, la vida a la intemperie, dificultades en la ciudad natal. Exceso planetas: hogar ambulante, emocionalidad profunda aunque no aparente. En casos extremos, herencia malsana, enfermedades hereditarias, enfermedades contraídas en el claustro materno.';
  if ($signo == 5) return 'Casa V, Leo, premio al esfuerzo (por parte de "Dios"). Si la Casa "de Aries" está atrofiada, no cabe esperar prodigios en ésta. Se pueden recibir dones buenos o malos (azar) procedentes del pasado. Puedes encontrar tu alma gemela (si hubo suerte). Si no, la persona puede ganar a la lotería... Si se encuentra en fuego (hasta 21 años), el amor vendrá de la infancia y será debido a méritos anteriores. ¿También habla de nuestros hijos y su calidad? ¿Dice si vas a mostrar mucho a los demás? Habla de los hobbies (si son deportes, el azar puede darte plenitud física).<BR>* Malos aspectos: malas recompensas, mala progenie, mal ejemplo dado por el individuo, mala utilización de la libertad y de los placeres que ofrece la vida, amores fatales y perturbatorios. Exceso planetas: demasiadas recompensas del pasado. Quizás pase toda su vida sin realizar el menor esfuerzo.';
  if ($signo == 6) return 'Casa VI, Virgo. ¿Dice cómo pagamos las deudas del ciclo (con servicio se supone, y posiblemente humillante)? Al transitar el Sol por nuestra Casa VI todos deberíamos liquidar las deudas del año. ¿Habla de los que están a nuestro servicio, y que encontraremos en otra vida mandando sobre nosotros si no sabemos darles su merecido? ¿Y hay pequeñas enfermedades para evolucionar?<BR>* Malos aspectos: salud precaria, subordinación a otras personas. Exceso planetas: saldar sus deudas a la fuerza (con poca libertad).';
  if ($signo == 7) return 'Casa VII, Libra. Búsqueda del complemento. Los matrimonios concertados aportan estabilidad. Encontraremos información sobre el cónyuge, y la personalidad de los socios, aliados, y "enemigos" (nos dicen lo malo nuestro). Veremos la reacción de la sociedad ante nuestras iniciativas.<BR>* Malos aspectos: cónyuge de mal carácter, malas cualidades o con problemas psicológicos, de salud, de dinero... Aliados problemáticos, y mala reacción social a nuestras iniciativas. Exceso planetas: literalmente aplastado por el otro. ¿Debe evitar la confrontación?';
  if ($signo == 8) return 'Casa VIII, Escorpio. En Escorpio los sentimientos se concentran convirtiéndose en poderes interiores. Personalidad erótica. ¡La música es en parte erotismo "gritado" (new wave)! Dinero ganado sin esfuerzo (cónyuge...), herencias, donaciones, rentabilidad del capital... Muerte violenta o suave. Sensibilidad respecto al más allá, indicando posibilidades de progreso espiritual.<BR>* Malos aspectos: el estado de fortuna de los aliados es precario, o será difícil que su dinero llegue hasta nosotros.
Exceso planetas: dependencia de la fortuna de los demás y estar atado a intereses...';
  if ($signo == 9) return 'Casa IX, Sagi. Saber si la fuerza moral / conciencia del individuo es mucha o poca. Rige los viajes largos.<BR>* Malos aspectos: puede ser un fanático religioso o un ateo y expresará una moral arbitraria y falsa. Viajes tempestuosos, arriesgados, difíciles y pobres en resultados: exilios, proscripciones, fugas... Exceso planetas: frecuentes cambios en la línea moral / religiones del individuo, se verá obligado a viajar constantemente.';
  if ($signo == 10) return 'Casa X o Mediocielo, Capri. Profesión: fuego, valores Morales (sacerdocio, filosofía, política, enseñanza, conocimiento profundo de las cosas). Agua: alimentar los instintos, los deseos, los sueños de la humanidad. Aire: trabajador intelectual con ideas, o servir una idea, filosófica o no. Tierra: alterar la forma de objetos, de una manera u otra. El padre, la prohibicion a nosotros mismos. Si nos alejamos de nuestro alma (en 2.023, la sociedad es así), tendremos un padre violento, o huidizo, o borracho, o pobre en recursos...<BR>* Malos aspectos: obstaculizarán la vida profesional, así como las relaciones con el padre. El trabajo carecerá de continuidad y no será el más apropiado a sus aptitudes. Exceso planetas: director general de algo (a veces casi sin esfuerzo). Persona extravertida, con intensa vida social de festejos, fiestas mundanas que le darán ocasión de relacionarse y obtener ventajosos puestos profesionales, pero se verá privado de toda intimidad y no podrá echar raíces en nada.';
  if ($signo == 11) return 'Casa XI, Acuario. Apoyos, amigos, protectores (estos encuentran en nosotros la posibilidad de llevar a la madurez sus propios ideales).<BR>* Malos aspectos: dificultarán las relaciones y pondrán obstáculos en la realización de los proyectos. Nos darán amigos con problemas (para ayudarlos, en vez de al revés). Exceso planetas: comprometido en demasiados proyectos. Sus amigos son muy dispares y todos lo lanzan a horizontes distintos, e invadirá dominios en los que no debería poner los pies.';
  if ($signo == 12) return 'Casa XII, Piscis. Viviremos "injusticias" (en parte por haber tenido deseos en Cancer gozados en Escorpio, que no tienen que ver con desreprimir y eso): enemigos, pruebas, restricciones... Lugar de purificación y puerta de acceso a los mundos superiores. Sentimientos exaltados y puros. En signos de fuego, será víctima de inmoralidades y él mismo expuesto a grandes tentaciones morales. Ejemplo: encarna en una familia de ladrones, que le inducirá al delito. Agua, pruebas de tipo sentimental: traiciones, infidelidades, amores rotos. Aire: el individuo se encontrará a merced de sus enemigos ideológicos, militando en grupos condenados a la oposición. Tierra: enfermedades, cárceles, pérdida de bienes materiales, accidentes...<BR>* Exceso planetas: vida retirada, de sumisión al destino.';
 }

 function calculartextosignocaracteristicas($signo)
 {
  if ($signo == 1) return 'Aries: enérgico. Ve el mundo con preguntas y son inocentes. Cree en lo tangible. Le aterra la idea de aparentar debilidad ante los demás. ¿Y por eso es tan decidido?';
  if ($signo == 5) return 'Leo: tienen que encontrar su propia manera / arte de crear y disfrutar. Bastante espiritual. Sabe en qué momentos ser orgulloso y en qué momentos mostrarse menos fuerte (con las personas más débiles que ella...). NO suele cambiar "su papel".';
  if ($signo == 9) return 'Sagitario busca la verdad, y la acaba encontrando en lo espiritual y se empodera con los problemas universales. Espiritual sin dudas. Desde pequeño se muestra orgulloso, y se nota en todo: hablar, caminar... El paso del tiempo lo hace modesto.';  
  if ($signo == 4) return 'Cáncer: hogar y familia. Sensibles (pueden delinquir pasionalmente y reprimir). Espirituales (aunque suele decir que "son tonterías"). Suele victimizarse. Mucha inteligencia emocional.';
  if ($signo == 8) return 'Escorpio: busca su transformación en un ser ideal (limpiar psique...). Va al límite (objetivos, pruebas de vida...). Habla de la muerte. Tener sexo con fines de procrear nos conecta con la esencia animal. Espiritual sin dudas, y con gusto. Gran modestia (aunque tenga que poner "cara de bestia" para sobrevivir). Los escorpianos son más perceptivos que la media, y tienen más capacidad de evaluar y entender el mundo que los rodea. Tremendamente intuitivos.';
  if ($signo == 12) return 'Piscis: amor incondicional. Nos enseñarán cómo desapegarnos de lo 3D. Sueña despierto / imagina, y "lo tiene más cerca". Sabe muy bien indagar en las personas, tanto intelectual como esotéricamente. En sí mismo, no tanto. Bastante modesto. Mucha inteligencia emocional.';
  if ($signo == 3) return 'Géminis: quiere romper toda restricción. Estilo personal impulsivamente cambiante. Cree profundamente en todos los temas esotéricos y los practica. Física cuántica, taichí... Muestra su lado amable, y por eso no mejora mucho. Sorprende.';
  if ($signo == 7) return 'Libra: signo de las relaciones. Le atrae lo espiritual, pero prevalece siempre el raciocinio, el pensamiento... Paciencia para que piense en lo que le dices, aunque NO es mucho de "limpiar la psique" (es más de "sé como yo").';
  if ($signo == 11) return 'Acuario: quiere ser libre y es autosuficiente. Cosas humanitarias y elevar la consciencia social. Es racional, pero estudia lo espiritual para manejar su vida y a la gente. Semimodesto: necesita a veces validación. Los acuarianos son muy analíticos, desarman los problemas para un entendimiento más profundo.';
  if ($signo == 2) return 'Tauro: mover la materia de la mejor forma posible. Necesita asegurar las decisiones. Espiritualidad: indagan, preguntan, anotan... para luego mentirte diciendo que son tonterías. Le cuesta cambiar y se sobrevalora laboralmente.';
  if ($signo == 6) return 'Virgo: perfeccionamiento (crítica superficial a veces, demasiado detallista), servicio a los demás. La falta de locura y el celo familiar, son preocupantes. Un poco más espiritual que Aries.';
  if ($signo == 10) return 'Capri: quiere llegar a la cima y mostrar al mundo lo que hace. Construirá cosas que duren para la vida futura. Espirituales en secreto. Orgulloso o modesto, depende del momento que atraviesa. Tiene fama de longevo. Elige bien a quién sonreír y cuando (eso es lo bueno).';
 }

 function calcularsigno($dia, $mes)
 {
  // 20 es el inicio de Acuario. 19, el de Piscis.
  if (($mes == 1) && ($dia < 20)) return 10;
  if (($mes == 1) || (($mes == 2) && ($dia < 19)) ) return 11;
  if (($mes == 2) || (($mes == 3) && ($dia < 21)) ) return 12;
  if (($mes == 3) || (($mes == 4) && ($dia < 21)) ) return 1;
  if (($mes == 4) || (($mes == 5) && ($dia < 21)) ) return 2;
  if (($mes == 5) || (($mes == 6) && ($dia < 21)) ) return 3;
  if (($mes == 6) || (($mes == 7) && ($dia < 22)) ) return 4;
  if (($mes == 7) || (($mes == 8) && ($dia < 22)) ) return 5;
  if (($mes == 8) || (($mes == 9) && ($dia < 23)) ) return 6;
  if (($mes == 9) || (($mes == 10) && ($dia < 23)) ) return 7;
  if (($mes == 10) || (($mes == 11) && ($dia < 22)) ) return 8;
  // $mes = 12, si NO es 11 (sólo hace falta comprobar el día, entonces).
  if (($mes == 11) || ($dia < 21) ) return 9; 
  return 10;
 }
 
 function numeroatexto($signo)
 {
  if ($signo == 1) return ("Aries");
  if ($signo == 2) return ("Tauro");
  if ($signo == 3) return ("Géminis");
  if ($signo == 4) return ("Cancer");
  if ($signo == 5) return ("Leo");
  if ($signo == 6) return ("Virgo");
  if ($signo == 7) return ("Libra");
  if ($signo == 8) return ("Escorpio");
  if ($signo == 9) return ("Sagi");
  if ($signo == 10) return ("Capri");
  if ($signo == 11) return ("Acuario");
  if ($signo == 12) return ("Piscis");
  return ("Sin signo");
 }

 function mesatexto($mes)
 {
  if ($mes == 1) return "Enero"; 
  if ($mes == 2) return "Febrero";
  if ($mes == 3) return "Marzo";
  if ($mes == 4) return "Abril";  
  if ($mes == 5) return "Mayo"; 
  if ($mes == 6) return "Junio";
  if ($mes == 7) return "Julio";
  if ($mes == 8) return "Agosto";
  if ($mes == 9) return "Septiembre"; 
  if ($mes == 10) return "Octubre";
  if ($mes == 11) return "Noviembre";
  if ($mes == 12) return "Diciembre";
 }

 function calculartextomisionmes($mes)
 {
  $texto = "";
  if ($mes == 1) $texto ='liderar. Sabiduría innata. Se aborda la vida con introspección reflexiva. Buscan debajo de lo superficial, y que lo que hacen dure (porque son sabios). Visionarios';
  if ($mes == 2) $texto ='expertos en callar y salvar "cuando todo está perdido". Visionarios. Perspectivas únicas. Innovación (cuidado).';
  if ($mes == 3) $texto ='vida = entrenamiento constante (encontronazos sociales...) para mejorarse y ser más sabios. Cambian / usan la creencia. Me suena al segundo decanato / 10 días de Escorpio, el mío.';
  if ($mes == 4) $texto ='marcar caminos. Aguerrido, impulsado por la pasión. Energía irresistible (uy qué sexual me suena esto je je).';
  if ($mes == 5) $texto ='tu corazón levanta a otros. Restaurador de almas. Constructor. Belleza, simplicidad y estabilidad.';
  if ($mes == 6) $texto ='donde hablas, la esperanza se levanta. Restaurador de almas. Mediador. Comunicación efectiva. Mentes inquietas, para buscar un conocimiento más profundo, el equilibrio y la verdad.';
  if ($mes == 7) $texto ='ver profundo, ¿espíritus? Cuidador. Conservador más bien. Puede sacrificar su comodidad por el bien de la comunidad.';
  if ($mes == 8) $texto ='romper estructuras ("educación" malvada...). Liderazgo carismático (¿NO real?). Lejos de la vanidad, sienten responsabilidad de liderar, inspirar y empoderar a otros. ¿Dan autoconfianza?';
  if ($mes == 9) $texto ='detectas grietas que otros ignoran. Centinelas (protegen). Practicidad (¿tirar lo que NO sirve?), análisis. Perfeccionismo (pero que NO nos metan ahí).';
  if ($mes == 10) $texto ='¿formar en secreto a líderes, acompañándolos? Centinelas (protegen). Refinada sensibilidad estética. Diplomático que usa su capacidad empática "casi al 100%" (el problema es cuando quiere que seas como los demás, para NO desentonar).';
  if ($mes == 11) $texto ='sacudir los cimientos, NO encajas, despiertas lo dormido. El alquimista (transforma "plomo en oro", ¿descubre talentos para que la gente "vuele"?). Buscan los misterios ocultos. Transforman luchas personales (se ven con mucha gente mala y anotan) en sabiduría profunda, guiando a otros.';
  if ($mes == 12) $texto ='visiones "raras" a seguir, cumplimiento de "lo imposible". Te podrían llamar loco, pero NO lo estás (en principio). Integran experiencias pasadas y posibilidades futuras. Inspiran reflexión filosófica. Optimismo.';
  return $texto;
 }
 
 function tzolkinmaya()
 {
  global $dia;
  global $mes;
  global $anio;
  
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
  $tono = $cantidad % 13;
  if ($tono == 0) $tono = 13;

  echo("<BR><BR>####Tzolkin Maya:"); 
  raza($raza);
  sello($sello);
  tono($tono);
 }

 function tono($tono)
 { 
  echo("<BR>- Tono (cómo se realiza la misión, cómo funciona el cerebro, ¡NO somos iguales, algunos tienen más resistencia intelectual...!) ".$tono.". ");
  if ($tono == 1) echo ('1. Magnético (do). Determina propósitos:
* Gente asertiva, buenos guías de sí mismos y de otros, dan buen empuje a cualquier proyecto al que estén asociados, y trabajan mejor con retos. No se preocupan mucho por los detalles o el toque distintivo. Entregarse totalmente.');
  if ($tono == 2) echo ('2. Lunar (do+). ¿Cuál es mi desafío? Se muestran las barreras, bloqueos...
* Gente 2: en ocasiones se les complica demasiado hacer una elección. Romper con patrones tradicionales.');
  if ($tono == 3) echo ('3. Eléctrico (re). Encontrar las líneas de acción para el logro del propósito.
* Gente. Elocuentes. Comprenden el ritmo de las cosas y son incansables. Pueden predecir el siguiente movimiento cuando han encontrado el molde a una persona... Activar el servicio a otros y a su comunidad mediante la atención a sus propias necesidades.');
  if ($tono == 4) echo ('4. Autoexistente (re+). Decide la forma de acción, y la medida (el 4 engloba alto, largo, ancho y profundo). Llevar plan a vida cotidiana.
* Día para dar forma y medida a nuestros pensamientos, para hacer los cambios que hemos estado postergando y para revisar que nuestras acciones sean sin daño al medio ambiente ni a otros seres.
* Gente. Comprenden significados profundos mediante una observación detallada. Metódicos y organizados. Considerar siempre la relación causa-efecto de la forma en que realizaremos nuestras acciones.');
  if ($tono == 5) echo ('5. Entonado (mi). ¿Cómo puedo optimizar mi potencial, y con qué recursos cuento y qué falta? ¿A qué o a quién doy poder, y cuanto recupero para mí?
* Día para reconocer cuál es mi poder y en qué lo he depositado. Reconocer que todas las energías del Universo están disponibles para que cumpla mis metas, todo en una justa medida de uso y no abuso.
* Gente. Libres y persistentes. Inteligentes y líderes por naturaleza, buenos para todo y muy prácticos. Trabajadores duros (no ponen trabas). Buenos investigadores y observadores, siempre pueden ver el lado bueno de las cosas. Mantenerse rodeados de personas que les hagan sentir bien y no tratar de dominar situaciones que escapan a sus ámbitos.');
  if ($tono == 6) echo ('6. Rítmico (fa). Observanr cualquier evento como una oportunidad de crecimiento. Indica que atendamos todas las posibilidades que tenemos para encontrar manteniendo el equilibrio. Nos habla también del "balance orgánico" (estaciones, noche-día, el patrón de crecimiento de las plantas...) para aplicar a nuestras vidas y los momentos de caos, para conseguir la armonía.
* Gente. Incansables mentalmente, logran comprender el funcionamiento básico de las cosas, son dinámicos, versátiles, rebosantes de información y comprenden sus propios ciclos y sus cuerpos de una manera muy particular. Mantenerse hasta el final de las cosas que inician.');
  if ($tono == 7) echo ('7. Resonante (fa+). Abrir "canales" para obtener respuestas (pausa para escuchar voz interor). Misterio, magia, sueños, mensajes divinos, canalizar, inspirar. ¿Cómo armonizo mi servicio para con los demás?
* Día: nos ayuda a encontrar la dirección adecuada de nuestros esfuerzos.
* Persona resonante (te la encuentras): día para canalizar hacia fuera de nosotros la energía de nuestro sello hacia lo que queremos lograr.
* Gente. Canaliza información quedándose medio lelo... Las personas resonantes tienen respuestas para todo. Si están en armonía siempre saben qué hacer y se dejan llevar por las situaciones conforme van sucediendo. Su energía es crucial para que otros que no son resonantes comprendan conceptos vitales para un despertar de conciencia. Son buenos maestros e inventores. El tono resonante, me pide que mantenga el contacto con mi "guía interior" sin perderme en el ego o el mundo de afuera (todo emana de lo sutil).');
  if ($tono == 8) echo ('8. Galáctico (sol). ¿Mis pensamientos, sentimientos, palabras y acciones van en un mismo sentido? ¿Soy honesto conmigo mismo? Nos permite vernos claramente a nosotros mismos sin juicios o castigos.
* Buen día para organizar el interior en base a la coherencia. Sacar al ser "más bueno" que habita en nosotros, para el resto de la vida. Información necesaria para que veamos donde estamos siendo injustos con nosotros mismos.
* Gente. Concientes de los patrones existentes en casi todo (números, plantas...). Ayudan a lograr armonía allí a donde van, a menos que se encuentren en su lado oscuro. Les duele percibir la injusticia del mundo. Son buenos escuchas y sus opiniones son generalmente acertadas. Mantenerse en justicia.');
  if ($tono == 9) echo ('9. Solar (sol+). Motivación. Por qué hacemos lo que hacemos, cómo nos gusta y qué es lo que nos mueve en lo más profundo de nuestro ser. Nos enseña a ser pacientes aún cuando vemos que no podemos avanzar.
* Día para preguntarnos si habría que hacer algún cambio según las motivaciones verdaderas. Mis intenciones deben ser lo más transparentes posible, pues de ellas emanará la satisfacción de deseos...
* Gente. Profundas y complicadas. Inspiran grandes cambios y logran cosas que para muchos parecen imposibles. Determinados, grandes trabajadores y soñadores. Deben ir muy profundo de sí mismos para inspirarse y lograr inspirar a otros, con mucha paciencia.');
  if ($tono == 10) echo ('10. Planetario (la). ¿Cómo lo perfecciono? La comprensión de que todo es como es debido a nuestras acciones, es mensaje de este tono, ¿no echar culpas afuera?
* Es día para darnos cuenta de que aquello a lo que ponemos energía, intención, atención, es lo que se manifiesta. Si algo no nos gusta de lo que vemos este día, buscar el fallo, y en los días siguientes corregirlo. Ver las limitaciones que nos hemos impuesto.
* Gente. Alegría, irradian encanto. Llegan a sacrificarse duramente. Ir más allá de sus propias creencias y condiciones, manifestando la grandeza y belleza de la vida.');
  if ($tono == 11) echo ('11. Espectral (la+). Nos muestra las cosas que no nos sirven ya, que no nos gustan, que no logran acomodarse en nuestro espacio vivo. Soltar, liberar.
* Día para irnos a la cama +LIGEROS con la certeza de tener "otro hueco para nuevas cosas".
* Gente. Cambian todo el tiempo. Muy dinámicos y con muchas ideas. Facilitan el cambio donde llegan y son emprendedores del mismo. No llenarse de cosas, personas o situaciones inservibles.');
  if ($tono == 12) echo ('12. Cristal (si). ¿Cómo puedo dedicar mi servicio a todo lo que posee vida? Nada sobra, nada falta y todo está en el lugar que debe estar. Es la conexión de partes sueltas, para lo que se necesita la cooperación de cada una de ellas.
* Mejor día para meditar, ser modestos, ayudar y cooperar, servir a nuestras necesidades y por ende a las de la colectividad; llegar a acuerdos, organizar reuniones, rodearse de gente querida.
* Gente todo terreno, excelentes maestros e investigadores. Comprometidos y un poco obsesivos. Tienen muchos amigos. Su reto es mantenerse aprendiendo y compartir todo lo que saben.');
  if ($tono == 13) echo ('13. Cósmico (do mayor). Es la energía más sutil, nos muestra lo perfecto del presente, lo divino de la naturaleza, lo que somos capaces de lograr con nuestra conciencia, pensamientos y acciones. Es la celebración, la alegría de saber que todo es posible. Es el recuerdo de la sabiduría original. Es mantenerse presente.
* Buen día para cerrar ciclos, para permitir que todo lo que hemos aprendido forme parte de nosotros a partir de ahora. Nos permite recargar baterías para un nuevo inicio. Buen día para plantear sueños y anhelos para convertirlos en un propósito para el siguiente grupo de trece.
* Gente. Visionarias, inolvidables, trabajadoras. Tienen una conexión particular con energías sutiles, como para siempre saber qué hacer, leer a las personas, entrar en meditación profunda... Su reto es cerrar sus ciclos y trascender las cuestiones materiales.');
 }
 
 function sello($sello)
 { 
  echo("<BR>- Sello (misión concreta) ".$sello.". P: poder, C: característica, A: acción. Si hay un asterisco, puede referirse a lo que propician los días relativos al sello, uno de cada 20. ");
  if ($sello == 1) echo('1 IMIX (Dragón, raza 1) PCA: nacimiento-ser-nutrir. Da comienzo a proyectos con fé en uno mismo. Es abundancia, protección, padre / madre. Dormido: nunca termina lo que empieza.');
  if ($sello == 2) echo('IK (Viento, 2) espíritu-aliento-comunicar. Comunicación. Espontáneos, y mentalmente muy activos. Dormido, habla mucho.
* Este día permite transmitir conocimiento, ideas, planes.');
  if ($sello == 3) echo('AKBAL (Noche, 3) abundancia-intuición-soñar. Usar el poder interno para materializar los sueños. Dormido: carencias espirituales y materiales.
* Ejercicio de auto-conocimiento. La intuición, lo misterioso y desconocido, los sueños y la abundancia.');
  if ($sello == 4) echo('4 (semilla, 4): florecimiento-atención-atinar. Conocer el momento adecuado para hacer florecer ideas y proyectos. Es la frecuencia de la virtud sin esfuerzo. Sólo hay que "sembrar" correctamente. ¿Sembrar es también hacerse las preguntas adecuadas antes de quedarse atontao, dormir...? ¿Desear con emoción y planificación es sembrar no? Consejero (sacar potencial de terapeutas, docentes, maestros...), que se sirve de escuchar su intuición / instinto, en pausa (¿como atontao con la boca abierta?). Una semilla dormida no esta en paz (hay inseguridad) y busca en los demás lo que no tiene, volviéndose dependiente (no cosecha).
* Prestar atención a todo lo que vivimos, cómo sentimos, cómo nos comunicamos, que intención tenemos... Los proyectos del Dragón florecen mejor en los días "semilla".');
  if ($sello == 5) echo('5 CHIKCHAN (Serpiente, 1) fuerzavital-instinto-sobrevivir. Instinto de supervivencia. Protectores de la naturaleza. Interpretar los mensajes del cuerpo. Expresa el deseo sexual. Dormido: depresivo, y malgasta su energía a través del deseo sexual.
* Días propicios para renovar (renacer), y hacer negocios.');
  if ($sello == 6) echo('6 CIMI (Enlazador de mundos) muerte-oportunidad-igualar. Contacta con otras realidades y dimensiones. Dormido: tiene miedo a la muerte, y a ser libre.
* Transciende la muerte y aprende a soltar.');
  if ($sello == 7) echo('7 MANIC (Mano) realización-curación-conocer. Sanación y liberación del ego. Artes, danza, nobleza, altruismo. Suelen ser terapeutas. Intuitivos. Dormido: enfermizo e hipocondríaco, incapaz de manejar la energía a su favor.
* Fluidez de las cosas, liberar bloqueos.');
  if ($sello == 8) echo('8 LAMAT (Estrella) elegancia-arte-embellecer. Dan luz (paz, harmonía...) a todo lo que tocan, son conscientes de su trabajo en la vida y sus metas. Artistas, escritores, pintores. Dormido: incapaz de expresar su creatividad.');
  if ($sello == 9) echo('9 MULIC (Luna) aguauniversal-flujo-purificar (y limpiar). Recuperar la memoria ancestral (quién eres y adónde irás). Experimentar el amor y la lealtad. Personas muy psíquicas y emocionales. Dormido: no controla sus sentimientos.
* Conocer cual es tu tarea y misión en la vida.');
  if ($sello == 10) echo('10 OC (Perro) corazón-lealtad-amar. Lealtad y nobleza. Muy protectoras, sienten el amor de forma incondicional. Buenos compañeros (apoyo) y aliados. Dormido: infiel, celoso e incapaz de amarse a si mismo.
* Buenas alianzas, y nuevas aperturas y oportunidades en la vida.');
  if ($sello == 11) echo('11 CHUWEN (Mono) magia-ilusión-jugar. Artistas, científicos y magos. Alegres, en movimiento, espontáneos, humor (bufones...), ¡fiesta! Misión: Vivir el ahora. Dormido, sin espontaneidad, miedo a vivir la vida, serio y triste.
* Días para ser espontáneos, dejarse llevar y disfrutar de la vida.');
  if ($sello == 12) echo('12 EB (Humano eléctrico) librevoluntad-sabiduría-influenciar. Esencia humana original no terrestre. Relación muy estrecha con la fuente original. Te expresas como eres en realidad. Conscientes de sus actos. Misión: Ser guías, y mostrar a los demás con el ejemplo a ser ellos mismos. Dormido aconseja pero no sabe que hacer con su vida (falta de conexión con la fuente original).');
  if ($sello == 13) echo('13 BEN (Caminante del cielo) espacio-vigilancia-explorar. Cambiar la percepción del tiempo. Aventurero, vagabundo. Eternos buscadores, pacificadores. Capacidad de liberarse y liberar a los demás. ¿Nunca está dormido?
* Día para liberarse de ataduras.');
  if ($sello == 14) echo('14 IX (Mago) atemporal-receptividad-encantar. Compañero, guía / consejero, fuerte y poderoso. Profeta. Calmados, capacidad para sanarse a si mismos y a los demás. Consejeros. Dormido: competitivos, usan poderes para sí mismos.
* Toma tu propio poder y decisiones, ten fe en ti mismo.');
  if ($sello == 15) echo('15 MEN (Águila) visión-mente-crear. Independientes, ambiciosas, valientes. Les gusta criticar (detalles). Muy mentales y técnicos. Habilidad para concretar empresas y negocios. ¿Ven más allá? Misión: Crear conciencia planetaria. Dormido: incapaz de materializar los planes.
* Día para hacer realidad tus sueños.');
  if ($sello == 16) echo('16 KIB (Guerrero) inteligencia-intrepidez-cuestionar. Usa la inteligencia para armonizar el entorno y a los demás. Capacidad para transcender el ego. Solitarios, valientes y disciplinados. Vencen sus miedos. Dormido: sumiso y obedece sin cuestionar.
* Te invita: inteligencia para resolver tus problemas');
  if ($sello == 17) echo('17 CABAN (Tierra) navegación-sincronía-evolucionar. Muy activas física y mentalmente. Adaptables a los cambios. Provocar cambios para la evolución. Dormido: perezosa e inadaptable.
* Día para aceptar los cambios en tu vida para seguir con tu evolución personal.');
  if ($sello == 18) echo('18 ETZNAB (Espejo) sinfín-orden-reflejar. Reflejan la verdad cortando la ilusión y la falsedad (del propio ego...). Son guias espirituales reflejando el camino correcto. Provocan cambios. Dormido: solo refleja el lado oscuro y no ayuda a crecer.
* Día propicio para verse a si mismo, y ver reflejada la verdad que te rodea.');
  if ($sello == 19) echo('19 CAUAC (Tormenta) autogeneración-energía-catalizar. Transmiten la información que reciben. Crear el clima idóneo para el crecimiento espiritual (si hace falta provocan cambios bruscos). Dormida: huracán que no se calma.
* Capacidad de limpiar y liberarse de lo viejo para aceptar la nueva vida.');
  if ($sello == 20) echo('20 AHAU (SOL) fuegouniversal-vida-iluminar. Saben reflejar la luz del sol interior (con su sabiduría) a los demás. Representan la culminación de lo aprendido y ponerlo en práctica. Dan amor de forma incondicional. Dormido: apagado y triste, se encierra en si mismo.');
 }

 function raza($raza)
 { 
  echo("<BR>- Raza (familia de misiones) ".$raza.". ");
  if ($raza == 1) echo ('Raza roja (1): energía iniciadora, dirección Este (de ahí viene la energía). Los mejores días para iniciar proyectos e ideas. Dualidad entre conocimiento e ignorancia. ¿Significa que NO saben lo esencial, pero son expertos en algo?');
  if ($raza == 2) echo ('Blanca (2): concretar las ideas de la raza roja. Dirección Norte. Dualidad entre modestia y soberbia. Me suena a algún signo de tierra.');
  if ($raza == 3) echo ('Azul (3): energía transformadora del resultado blanco (objetivo replanteado), dependiendo de los acontecimientos. Dirección Oeste. Dualidad paciencia e impaciencia.');
  if ($raza == 4) echo ('Raza amarilla, la mía (4): energía integradora, tiene todas las energías posibles; y aumento de coherencia personal durante la vida. Dirección Sur. Es ser uno mismo, evolucionar y madurar todo el conocimiento adquirido en el pasado. Dualidad madurez e inmadurez (me suena a que la vida te pone muchas barreras mentales a superar, y difíciles).');
 }

 function calcularcantidadanio($anio)
 {
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

 function nodonorte($num)
 {
  echo("<BR><BR>####Nodo Norte ".$num.". ");
  if ($num == 0) $texto = 'Fecha de nacimiento NO considerada.';
  if ($num == 1) $texto ='Nodo Norte en casa 1 o en Aries (nodo Sur en Libra, el opuesto siendo compatibles): vida pasada Libra, aprendiste a colaborar, a establecer relaciones armónicas y a estar pendiente de los demás.
* Aprende ahora a definir y a perseguir tus propios objetivos y puntos de vista. Anima a los demás a ser independientes.';
  if ($num == 2) $texto ='Tauro, vida pasada: situaciones dolorosas impuestas por los demás y muchos cambios drásticos, ¡Escorpio!
* Ahora, construye un sistema propio de valores para alcanzar tus objetivos (economía...) por ti mismo. Habilita al resto a activar sus talentos personales.';
  if ($num == 3) $texto ='Géminis, vida pasada Sagi: filosófico, tu verdad era frecuentemente la única opción.
* Ahora, comunicación, cooperación y suma de contrarios. ¿Posibles experiencias kármicas a través de un hermano? Animar a los demás a tener varios puntos de vista.';
  if ($num == 4) $texto ='Cancer, vida pasada Capri: lograr el reconocimiento en el trabajo y conseguir objetivos.
* Ahora, afecto verdadero y entrega sin esperar nada a cambio. Posibilidad karma con padre o madre. Conectar con la propia vulnerabilidad.';
  if ($num == 5) $texto ='Leo, vida pasada Acuario: complacer a la comunidad mejorando condiciones sociales.
* Ahora, desarrollar confianza en ti y tu creatividad. Habilitar al resto a confiar en ser legítimos y expresivos.';
  if ($num == 6) $texto ='Virgo, vida pasada Piscis: te sacrificaste por muchas personas y fuiste espiritual.
* Ahora, escoger lo que debe ser conservado. Funciones más específicas, conservando la ternura y calidez piscianas. Raciocinio y orden. Describir los laberintos del alma humana (con tu intuición).';
  if ($num == 7) $texto ='Libra, vida pasada Aries: no tuviste muy en cuenta las necesidades o deseos de los demás.
* Sigue persiguiendo con la misma energía tus metas, pero con espíritu más colaborador y comprometido. Acompañar el andar del otro, ser mediador de conflictos y excelente escucha habilitando al resto a superar soledades.';
  if ($num == 8) $texto ='Escorpio, vida pasada Tauro: obviaste la parte más espiritual o elevada.
* Aparte de generar recursos materiales y defender lo que es tuyo, comparte tus recursos (se activará tu fuerza), y experimenta con energías más elevadas e incontrolables. Habilitar en el resto capacidades de potencia desconocida.';
  if ($num == 9) $texto ='Sagi, vida pasada Géminis: superficialidad e indecisión.
* Ahora supera el miedo a comprometerte con alguien o algo (Géminis quiere ser aceptado por casi todos). Confianza en lo espiritual, habilitar en el resto optimismo y respuestas trascendentes, convirtiéndote en maestro de vida.';
  if ($num == 10) $texto ='Capricornio, vida pasada Cancer: buscabas cariño, protección y seguridad en los demás.
* Ahora, ser pragmático y sostenedor habilitando también en el resto su capacidad de sustentar y generar. Objetivos propios.';
  if ($num == 11) $texto ='Acuario, vida pasada Leo: pensar que tu forma de hacer las cosas era la única válida y no tenías por qué colaborar.
* Ahora supera la excesiva necesidad de aprobación externa, y ve que si te entregas al trabajo en equipo se energiza tu propio corazón.';
  if ($num == 12) $texto ='Piscis, vida pasada Virgo: rígido (entender racionalmente sólo) y estructurado.
* Ahora, confiando en tu sentido común ampliado, ¡adéntrate a explorar el lado intangible y espiritual de la vida! Mayor intuición y percepción emocional.';
  echo($texto);
 }

 function calcularnumnodonorte()
 {
  //¿Y poner los números en un array, que es parecido al "data" del Basic del Spectrum?
  if ( entre(8, 7, 1930, 29, 12, 1931) ||
       entre(26, 1, 1949,26, 7, 1950) ||
       entre(20, 8, 1967, 20, 4, 1969) ||
       entre(7, 4, 1986, 3, 12, 1987) )
   return 1;
  if ( entre(29, 12, 1928, 7, 7, 1930) ||
       entre(3, 8, 1947, 25, 1, 1949) ||
       entre(20, 2, 1966, 19, 8, 1967) ||
       entre(12, 9, 1984, 7, 4, 1986) ||
       entre(14, 4, 2003, 27, 12, 2004) )
   return 2;
  if ( entre(3, 12, 1945, 2, 8, 1947) ||
       entre(26, 8, 1964, 19, 2, 1966) ||
       entre(16, 3, 1983, 11, 9, 1984) ||
       entre(14, 10, 2001, 13, 4, 2003) )
   return 3;
  if ( entre(11, 5, 1944, 2, 12, 1945) ||
       entre(24, 12, 1962, 25, 8, 1964) ||
       entre(21, 9, 1981, 16, 3, 1983) ||
       entre(10, 4, 2000, 14, 10, 2001) )
   return 4;
  if ( entre(22, 11, 1942, 11, 5, 1944) ||
       entre(11, 6, 1961, 24, 12, 1962) || 
       entre(6, 1, 1980, 21, 9, 1981) ||
       entre(21, 10, 1998, 9, 4, 2000) )
   return 5;
  if ( entre(25, 5, 1941, 22, 11, 1942) ||
       entre(15, 12, 1959, 11, 6, 1961) ||
       entre(6, 7, 1978, 13, 1, 1980) ||
       entre(26, 1, 1997, 20, 10, 1998) )
   return 6; 
  if ( entre(12, 9, 1939, 25, 5, 1941) ||
       entre(17, 6, 1958, 16, 12, 1959) ||
       entre(8, 1, 1977, 6, 7, 1978) ||
       entre(1, 8, 1995, 25, 1, 1997) )
   return 7;
  if ( entre(4, 3, 1938, 12, 9, 1939) ||
       entre(5, 8, 1956, 17, 6, 1958) ||
       entre(11, 6, 1975, 8, 1, 1977) ||
       entre(2, 2, 1994, 31, 7, 1995) )
   return 8;
  if ( entre(15, 9, 1936, 4, 3, 1938) ||
       entre(3, 4, 1955, 4, 10, 1956) ||
       entre(28, 10, 1973, 11, 6, 1975) ||
       entre(2, 8, 1992, 2, 2, 1994) )
   return 9;
  if ( entre(9, 3, 1935, 14, 9, 1936) ||
       entre(10, 10, 1953, 2, 4, 1955) ||
       entre(29, 4, 1972, 28, 10, 1973) ||
       entre(19, 11, 1990, 2, 8, 1992) )
   return 10;
  if ( entre(25, 6, 1933, 7, 3, 1935) ||
       entre(29, 3, 1952, 10, 10, 1953) ||
       entre(3, 11, 1970, 28, 4, 1972) ||
       entre(23, 5, 1989, 18, 11, 1990) )
   return 11;
  if ( entre(29, 12, 1931, 24, 6, 1933) ||
       entre(27, 7, 1950, 6, 3, 1952) ||
       entre(20, 4, 1969, 2, 11, 1970) ||
       entre(3, 12, 1987, 22, 5, 1989) ||
       entre(23, 6, 2006, 18, 12, 2007) )
   return 12;
  return 0;
 }

 function entre($dia1, $mes1, $anio1, $dia2, $mes2, $anio2)
 {
  if (mayorigualquefecha($dia1, $mes1, $anio1)
    && menorigualquefecha($dia2, $mes2, $anio2))
   return 1; else return 0;  
 }

 function mayorigualquefecha($dia1, $mes1, $anio1)
 {
  global $dia;
  global $mes;
  global $anio;
  if ($anio > $anio1) return 1;
  if ($anio == $anio1)
  { 
   if ($mes > $mes1) return 1;
   if ( ($mes == $mes1) && ($dia >= $dia1) ) return 1;
  }
  return 0; 
 }

 function menorigualquefecha($dia2, $mes2, $anio2)
 {
  global $dia;
  global $mes;
  global $anio;
  if ($anio < $anio2) return 1;
  if ($anio == $anio2)
  { 
   if ($mes < $mes2) return 1;
   if ( ($mes == $mes2) && ($dia <= $dia2) ) return 1;
  }
  return 0; 
 }

 function nombreroscopo()
 {
  global $nombre;

  $cuentavocal = 0;
  $cuentaconsonante = 0;
  $cuentacar = 0; 

  $permitidos=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z',' ','ü');

  echo("<BR>####Nombrelogía (nombreróscopo):<BR>");
  echo("#Caracteres permitidos: letras sin más, espacio y ü<BR>");
 
  $nombre2 = mb_strtolower($nombre, 'UTF-8');
  do
  {
   //Primero, casos raros ("y" o "u") 
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

  //$encontrado es para la "ü"
  $encontrado = false;
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
  elseif ($fila == ' ') {}
  elseif (($c == 0) && ($v == 0) )
  {$encontrado = strstr($nombre2, 'ü'); /* Está mal, pero "tira" si sólo hay ü como carácter especial. */
   if ($encontrado != false) {$cuentavocal = $cuentavocal + 3; $v = 3; $cuentacar++;}}

  /* echo utf8_encode($fila); */
  echo "##";
   if ($encontrado == false)
   echo $fila;
    else
     echo "ü";
   if ($c > 0)
   echo " - conso".$c."  ";
   if ($v > 0)
   echo " - vocal".$v."  ";  
  }
  while ($cuentacar < strlen($nombre2));

  // Prueba $cuentaconsonante = 44;
  // Prueba $cuentavocal = 44;
  $mascarabruta = $cuentaconsonante;
  $realbruto = $cuentavocal;
  while ($cuentavocal >= 10)
   $cuentavocal = sumacifras($cuentavocal);
  while ($cuentaconsonante >= 10)
   $cuentaconsonante = sumacifras($cuentaconsonante); 

  $mascara = $cuentaconsonante;
  $real = $cuentavocal;
  $objetivo = sumacifras($mascara) + sumacifras($real);
  if ($objetivo >= 10) /* máximo 18 */
   $objetivo = intval ($objetivo / 10) + $objetivo % 10;

  echo ("<BR>"."Nombre: ".$nombre."<BR>");
  echo ("Máscara bruta: ".$mascarabruta."<BR>");
  echo ("Máscara: ".$mascara."<BR>");
  echo ("Real bruto: ".$realbruto."<BR>");
  echo ("Real: ".$real."<BR>");
  echo ("Objetivo: ".$objetivo."<BR>");

  echo ('##Apelativo: si la primera vocal se repite, trata de no pronunciarla, para que el apelado sea menos malo:
<BR>- A: viniste a comerte el mundo, a liderar (yo diría a ser jefe, que es algo malo; aprende a ser líder) y avanzar, tumbando muros. 2 aes o más: hablas mal de los demás.
<BR>- E: te aburres fácilmente y necesitas cambiar constantemente. Les gusta viajar y no se comprometen. 2 o más: cuida tu mal genio.
<BR>- I: muy emotivo y sensible. ¿Son intuitivos y creativos no? Inteligencia y acción humana. 2 o más: podrías pasarte de susceptible.
<BR>- O: muy responsable, servicial al extremo. Tienes un consejo para todo el mundo. Movimiento y sensibilidad. 2 o más: tendencia al chantaje emocional.
<BR>- U: muy racional; alegre y optimista, con gran don de la palabra. Inmovilidad. 2 o más: tenderás a acumular cosas sin valor.');
 
  // Primera vocal, energía. 
  $pri = $nombre2[0];
  echo("<BR>##Primera letra, ".$pri.". ");
  if ($pri == 'a') echo ('<BR>Originalidad, fuerza y espíritu de empresa. Intentará harmonía. Buenos amigos y excelentes consejeros si los necesitas. Pero claro, una persona es muchísimo más que su inicial, así que podría ser mejor o peor.');
  if ($pri == 'b') echo ('<BR>Llevar a la práctica los impulsos de otras personas. Intuición imposible de desafiar. A menudo caen en estados melancólicos.');
  if ($pri == 'c') echo ('<BR>Gran fuerza y energía vital. Impulsividad y desafíos. Muy proclives a las polémicas y debates y no toleran la injusticia (Carlos el de Pravia).');
  if ($pri == 'd') echo ('<BR>Amor incondicional. Si no encuentran estabilidad afectiva, pueden caer en profundas depresiones. Talento artístico y pueden alcanzar la popularidad si se lo proponen fervientemente');
  if ($pri == 'e') echo ('<BR>Organización y espíritu ambicioso. Hacer del servicio su ideal de vida. Cierta tendencia a los excesos.');
  if ($pri == 'f') echo ('<BR>Voluntad y lograrán éxitos importantes, trabajan duro por lo que desean. Adoran viajar y conocer lugares exóticos que complazcan todas sus fantasías.');
  if ($pri == 'g') echo ('<BR>Brillante intelecto (Mercurio) y necesidad de ampliar conocimientos. Capacidad analítica y son de actuación práctica. Su rica personalidad sobresale en reuniones sociales.');
  if ($pri == 'h') echo ('<BR>Plutón: juicio crítico e imparcial. Conocen la forma correcta de actuar en cada situación. Saben imponer límites con autoridad cuando lo ven necesario.');
  if ($pri == 'i') echo ('<BR>Venus. Encanto y refinamiento. Carácter un tanto dubitativo. Pueden llevar a cabo grandes empresas, a pesar de tener que soportar enormes sacrificios.');
  if ($pri == 'j') echo ('<BR>Mercurio, gran vivacidad y refinado sentido del humor (Javi Pozueco). Más energía física y mental, podrías marear al prójimo. Nobleza de pensamiento y gran fidelidad a sus ideales. Amigos sinceros que darían todo por quienes aman.');
  if ($pri == 'k') echo ('<BR>Éxito seguro, sobre todo material. Mostrarse al público se les da bien: actores, modelos y abogados.');
  if ($pri == 'l') echo ('<BR>Lo haces a tu modo. Sacrificarse por quienes los rodean con carácter fuerte. Buenos trabajadores en puestos donde no deban tomar decisiones por sí mismos. La L irradia sabiduría, dedicación e imaginación. Da inteligencia, comprensión, conocimiento y honestidad. Hace a las personas terminar todo lo que se proponen y ayudar a los necesitados. Les gusta el hogar y la convivencia familiar, ¿y estar con amigos también?');
  if ($pri == 'm') echo ('<BR>Transformación constante de metas. Carácter alegre y buena predisposición para el trabajo mental. Comprenden a sus amigos cercanos.');
  if ($pri == 'n') echo ('<BR>Constantes pruebas y obstáculos que deben superar como tarea kármica. Pobrecillos.');
  if ($pri == 'o') echo ('<BR>Imaginación e interés en la maternidad / paternidad. Carácter un tanto temeroso ante los desafíos de la vida.');
  if ($pri == 'p') echo ('<BR>Pasión, excelente criterio estético y una activa capacidad creadora. Viven romances fogosos y siempre buscan trascender.');
  if ($pri == 'q') echo ('<BR>Confiere experiencia. Capacidad desmedida para superar conflictos y salir airosos de problemas familiares.');
  if ($pri == 'r') echo ('<BR>Inteligentes y sagaces, con la respuesta justa en el momento adecuado. Saben detectar errores propios y son muy exigentes con los que los rodean. ¿Mi familia?');
  if ($pri == 's') echo ('<BR>Saben reflexionar y obtener opiniones objetivas. Un tanto inseguros (conflictos de vida), sienten necesidad de pedir consejos antes de confiar en ellos mismos.');
  if ($pri == 't') echo ('<BR>Planes en secreto. Saben esperar.');
  if ($pri == 'u') echo ('<BR>Actores por naturaleza. Inconformistas, desean la inalcanzable perfección.');
  if ($pri == 'v') echo ('<BR>Inconformistas, desan la inalcanzable perfección (como u). Saben ver la luz al final del túnel.');
  if ($pri == 'w') echo ('<BR>Acalorados arrebatos durante toda la vida. Será importante que piensen antes de emprender cualquier acción.');
  if ($pri == 'x') echo ('<BR>Éxito económico y financiero, fruto del esfuerzo personal de largos años. Cierta tendencia al egoísmo.');
  if ($pri == 'y') echo ('<BR>Felicidad total o desdicha absoluta. Les cuesta encontrar el término medio. Su necesidad de ser originales les quita el sueño.');
  if ($pri == 'z') echo ('<BR>Marte. Capacidad de sobrellevar duras pruebas. ¿Deben llevar a la práctica todas sus ideas y ambiciones, o de lo contrario sufrirán frustraciones que les pesarán toda la vida?');
  
  echo("<BR>##Significado de los números:");
  // if mascarabruta == 44...
  $mascarabruta = 38;
  $mascarabruta2 = reducir($mascarabruta);
  if ( ($mascarabruta2 % 11 == 0) && ($mascarabruta2 <= 44) )
  {
   echo("<BR>- Máscara bruta: ".$mascarabruta2.". ");
   bruto($mascarabruta2);
  }
  // if mascara == 1...
  echo("<BR>- Máscara: ".$mascara.". ");
  nobruto($mascara);
  // if realbruto == 44....
  //$realbruto = 44;
  $realbruto2 = reducir($realbruto);
  if ( ($realbruto2 % 11 == 0) && ($realbruto2 <= 44) )
  {
   echo("<BR>- Real bruto: ".$realbruto2.". ");
   bruto($realbruto2);
  }
  // if real == 1... 
  echo("<BR>- Real: ".$real.". ");
  nobruto($real);
  // Objetivo.
  echo("<BR>- Objetivo: ".$objetivo.". ");
  nobruto($objetivo);
 }

 function reducir($num)
 {
  //Seguimos mientras el número es >= 10 y NO es 11, 22... % 11 = 0 && y <= 44 
  while ( ($num >= 10) && ( ($num % 11 != 0) || ($num > 44) ) )
   $num = sumacifras($num);
  return $num;
 }

 function nobruto($num)
 {
  if ($num == 1) echo('Eres independiente en creencias, y la libertad de pensamiento es el objetivo de tus deseos mas internos.
<BR>* No quieres permanecer en una posicion secundaria entre tu gente. Si tu individualidad es muy fuerte, comprueba si abusas de tu actitud de mando.');
  if ($num == 2) echo('Deseas paz y harmonia (mediador / Libra), tienes tacto, y puedes adaptarte a cualquier situacion. Atrevete a hacer lo que sabes que es justo, y a ganar a tus semejantes en comprension. Si las emociones te disturbian, se fuerte y decide.');
  if ($num == 3) echo('Concienzudo y perseverante (obligaciones). Sabes que la imaginación y la inspiracion dan los mejores resultados cuando se ayuda a los demás. Haz caso a los impulsos de crear / hacer lo que te interesa.
<BR>* Si alguien esta de bajón, dile algo que lo haga resurgir.
<BR>* Da a conocer tus ideales y prodija tu buen animo y optimismo.');
  if ($num == 4) echo('Organizacion, que te puede dar exito material. Muy practico, leal, equilibrado, inspiras confianza, y los demas saben que les vas a tratar equitativamente. Conviertes tus sueños en realidad en lo laboral y lo sentimental, pues te lo tomas en serio (planeas).');
  if ($num == 5) echo('No toleras que limiten tus ideales ni forma de pensar (Acuario). Te empujan los cambios y el tener diferentes puntos de vista (no te aburres).
<BR>* Consideras los viajes educativos y enriquecedores.
<BR>* NO aguantas la estrechez.');
  if ($num == 6) echo('Belleza, armonia y paz. Con los que amas eres afectuoso, atento y leal. Deja a tu familia expresar sus deseos aunque no estes muy conforme con sus decisiones.');
  if ($num == 7) echo('Eres reservado, buen pensador, analitico y mediador. NO quieres ruido. Refinado y sensible, con frecuencia con poderes psiquicos, muy capaz de vivir solo alcanzando el más alto orden mistico de los humanos.
<BR>* Beneficia a la humanidad a traves de la Filosofia.');
  if ($num == 8) echo('Ambicioso, los obstaculos a la meta (personas...) te los quitas de encima (yo no competiría con un 8) por naturaleza. NO eres facil de manejar. Tu tarea es sobresalir, porque tienes gran capacidad para manejar grupos y empresas. Tus dotes psicolojicas te ayudaran a comprender a las masas con las que trabajas.
<BR>* Vas a tener que confiar plenamente en ti para juiarte y permanecer en la cumbre.');
  if ($num == 9) echo('Solidario, idealista, desinteresado. Vienes a servir de guía y destacarte (contactando con lideres sociales...), a luchar por el bien comun. Intuitivo, sensitivo e imaginativo. Necesitas reconocimiento y valoracion de todo lo que haces, y dar y recibir amor. ¿El objetivo es demostrar mi autosuficiencia y autonomia (suena a 1)? Altibajos (sueños de grandeza a depresion si no cubro las expectativas). Pruebas: rechazo, abandono, desvalorizacion, poco reconocimiento, personas que abusan de tu generosidad...');
 }

 function bruto($nummaestro)
 {
  if ($nummaestro == 11) echo('Has seguido la via espiritual por mucho tiempo. Valor, talento y capacidad de mando. Comprensiva, juiciosa, intuitiva, con frecuencia clarividente. Fuerza (interior) para superar las adversidades y luchar.');
  if ($nummaestro == 22) echo('Desea el exito material; fuerte impulso de continuar la construccion de vidas pasadas. Te fijas metas mas altas que el resto, pero manten los pies en la tierra por favor.');
  if ($nummaestro == 33) echo('Ve con total claridad las condiciones del mundo futuro, y se sacrifica por la humanidad para aportar paz. A veces, el impulso del alma estara en contraposicion con el entorno, pero actuaras tratando de comprender puntos de vista ajenos. Esto puede colocarte en una posicion inferior, pero siempre tendras la esperanza de alcanzar otra mas propicia.');
  if ($nummaestro == 44) echo('(Se parece al 33 del eneagrama): aunas lo practico con lo filosofico, para dar lustre a la sociedad, ¿inventos?. Hacerte cargo de grandes responsabilidades. Tu alma te guiara. Resolver los problemas del dia a dia y ayudar a los demas a organizar sus vidas, son cualidades innatas.');
 }

 function aniosdecambio()
 {
  global $anio;
  
  // El primer año de cambio es el año de nacimiento;
  $aniocurso = $anio;
  echo('<BR>####Años de cambio: '.$aniocurso);  
  $cuentaanios = 0; 
  do
  {
   $cuentaanios = $cuentaanios + 1;

   $suma = sumacifras($aniocurso);
   while ($suma > 10) $suma = sumacifras($suma);
   $aniocurso = $aniocurso + $suma;
   echo(', '.$aniocurso);  
  }
  while ($cuentaanios < 30);
  echo('.<BR>');
 }
 
 function eneagrama()
 {
  global $numeneagrama;
  echo ("<BR><BR>####Eneagrama ".$numeneagrama);

  $numeneagrama2 = $numeneagrama;
  if ($numeneagrama == 11) 
  {
   $numeneagrama2 = 2;
   echo(' (saca cosas ocultas de ti: es sabiduría, intuición, iluminación, idealismo, plano espiritual más alto. Maestro psicológico. Es 2 = 1 + 1)');
  }
  if ($numeneagrama == 22)
  {
   $numeneagrama2 = 4;
   echo(' (fuerza y liderazgo. Maestro material / de realización. Es 4 = 2 + 2)');
  }
  if ($numeneagrama == 33)
  {
   $numeneagrama2 = 6;
   echo(' (¿11 + 22? 11 = saca cosas ocultas de ti: es sabiduría, intuición, iluminación, idealismo, plano espiritual más alto. Maestro psicológico; 22 = fuerza y liderazgo. Maestro material / de realización. Es 6 = 3 + 3)');
  }
  echo(":<BR>");
  if ( ($numeneagrama2 == 1) || ($numeneagrama2 == 8) || ($numeneagrama2 == 9) )
   echo ('- Triada del Instinto (8, 9 y 1), viscerales:
<BR>* Quieren influir en el mundo. Temen ser dominados o explotados. Se vuelcan en la acción y se orientan al presente.
<BR>* Ira: el 8 la expresa, el 9 la niega, pero la expresa evadiéndose, el 1 la reprime.');
  if ( ($numeneagrama2 == 2) || ($numeneagrama2 == 3) || ($numeneagrama2 == 4) )
   echo ('- Triada del Sentimiento (3, 4, 2):
<BR>* Buscan sentirse amados.
<BR>* El 3 busca valor interior mediante logros externos. El 4 reafirma su valía sintiéndose especial. El 2 busca el amor demandando atención. Autovalorarse así NO es quererse (cuidao en general con cómo te autovaloras).');
  if ( ($numeneagrama2 == 5) || ($numeneagrama2 == 6) || ($numeneagrama2 == 7) )
   echo ('- Triada del pensamiento (6, 7, 5):
<BR>* Miedo (de no contar con los recursos necesarios). 6, necesita pautas o normas a seguir. 7, en apariencia valientes y aventureros, temen a su vacío interior. 5, se retiran y aíslan del mundo.');

  echo('<BR>- El '.$numeneagrama2.':<BR>');
  if ($numeneagrama2 == 1) echo('* 1, liderazgo, no jefe. Idealista y concienzudo, con fuerte sentido del bien y el mal. Son profesores y cruzados, se esfuerzan siempre por mejorar las cosas, pero temen cometer errores. Bien organizados, ordenados y meticulosos, pueden resultar críticos y perfeccionistas. Normalmente tienen problemas de rabia e impaciencia reprimidas. El Uno sano es sabio, perceptivo, realista y noble, a la vez que moralmente heroico.<BR>* MIEDO BÁSICO: Ser malo, corrupto, perverso o imperfecto.<BR>* DESEO BÁSICO: Ser bueno, virtuoso, equilibrado, íntegro.<BR>* MENSAJE DEL SUPERYÓ: Vales o eres bueno si haces lo correcto.<BR>* Sanación: todos pueden tener algo de razón y tal vez nadie la tiene del todo. Nadie exige tu perfección (cometemos fallos y lo aceptamos). Eres querido por lo que eres, no por lo que deberías ser.');
  if ($numeneagrama2 == 2) echo('* 2, maternidad, consideración, adaptación, creatividad, trabajo en equipo, mediación. Preocupado, orientado a los demás. Comprensivos, sinceros, amistosos, generosos y abnegados, pero también pueden ser sentimentales, aduladores y obsequiosos. Suelen hacer cosas por los demás para sentirse necesitados. Por lo general tienen problemas para cuidar de sí mismos y reconocer sus propias necesidades. El Dos sano es generoso y siente un amor incondicional por sí mismo y por los demás.<BR>* MIEDO BÁSICO: Ser indigno de amor.<BR>* DESEO BÁSICO: Sentirse amado.<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres amado por los demás y eres amigo de ellos.<BR>* Sanación: para dar tienes que conocerte y quererte. ¿Realmente las personas necesitan tantas cosas como tu piensas? No vivas tan pendiente del otro, puedes perder tu identidad. No te queremos por todo lo que ayudas, sino por lo que eres.');
  if ($numeneagrama2 == 3) echo('* 3, filosofía, y viajes. Artes, disfrute de la vida, socialización. Adaptable y orientado al éxito. Seguro de sí mismo, atractivo y encantador (así que cuidadito). Ambiciosos, competentes y enérgicos. Suelen preocuparse por su imagen y por lo que los demás piensan de ellos. Normalmente tienen problemas de adicción al trabajo y competitividad. El Tres sano se acepta a sí mismo, es auténtico, es todo lo que aparenta ser, un modelo que inspira a otras personas.<BR>* MIEDO BÁSICO: Ser despreciable o a carecer de valor inherente.<BR>* DESEO BÁSICO: Sentirse valioso, aceptado y deseable.<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si tienes éxito y los demás piensan bien de ti.<BR>* Sanación: date tiempo para sentir, descansar, disfrutar... y ver lo que tu cuerpo necesita. Aprende a relacionarte a niveles profundos (sin miedo al contacto interno). Busca una definición de ti mismo que responda a lo que eres, no a lo que haces o lo que los demás esperan de ti.');
  if ($numeneagrama2 == 4) echo('* 4, haces algo según tus originales reglas, servicio, lucha contra límites. Esteta. Romántico e introspectivo. Conscientes de sí mismos, sensibles, reservados y callados. Demostrativos, sinceros y personales emocionalmente, pero también pueden ser caprichosos y tímidos. Se ocultan de los demás porque se sienten vulnerables o defectuosos, pero también pueden sentirse desdeñosos y ajenos a las formas normales de vivir. Normalmente tienen problemas de autocomplacencia y autocompasión. El Cuatro sano es inspirado y muy creativo, capaz de renovarse, ¿a través de experiencias no?<BR>* MIEDO BÁSICO: Carecer de identidad o de no ser importante.<BR>* DESEO BÁSICO: Descubrirse a sí mismo y su importancia; crearse una identidad a partir de su experiencia interior.<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres fiel a ti mismo.<BR>* Sanación: todos somos únicos e irrepetibles, igual que tú. Tu interior es la mejor obra de arte, apréciala, no te escondas. La realidad tal cual es, valórala.');
  if ($numeneagrama2 == 5) echo('* 5, aventurero, uso constructivo de la libertad. Vehemente y cerebral. Despabilados (¿y no durmientes mirando pa dentro? ¡Qué pena!), perspicaces y curiosos. Capacidad: ideas y habilidades complejas. Independientes e innovadores, es posible que se obsesionen con sus pensamientos y elaboraciones imaginarias. Muy nerviosos. Por lo general tienen problemas de aislamiento, excentricidad y nihilismo. El Cinco sano es pionero visionario y es capaz de ver el mundo de un modo totalmente nuevo.<BR>* MIEDO BÁSICO: Ser inútil, incapaz o incompetente.<BR>* DESEO BÁSICO: Ser capaz y competente.<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres experto en algo.<BR>* Sanación: baja de la cabeza al corazón, y vivirás. Comparte tus conocimientos con los demás y adquirirás mas. No acumules, ni atesores. Recibirás en la medida en que des / compartas.');
  if ($numeneagrama2 == 6) echo('* 6, hogar y familia, servicio a los demás. Tradicionalista. Orientado a la seguridad. Dignos de confianza, trabajadores y responsables, pero también pueden adoptar una actitud defensiva, ser evasivas y muy nerviosas; trabajan hasta estresarse al mismo tiempo que se quejan de ello. Suelen ser cautelosas e indecisas, aunque también reactivas, desafiantes y rebeldes. Normalmente tienen problemas de inseguridad y desconfianza. El Seis sano: estable interiormente, seguro de sí mismo, independiente, y apoya con valentía a los débiles e incapaces.<BR>* MIEDO BÁSICO: Carecer de apoyo u orientación.<BR>* DESEO BÁSICO: Encontrar seguridad y apoyo.<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si haces lo que se espera de ti.<BR>* Sanación: ¡lo bonito que puede llegar a ser el responsabilizarte de tu propia vida!, eso te dará gran seguridad. Solo eres responsable de ti mismo. No mires lo de afuera como amenazador, "sólo" tu inseguridad te daña.');
  if ($numeneagrama2 == 7) echo('* 7, si te lo encuentras, potencia y confía en tu intuición (son místicos). Análisis, comprensión, conciencia. Multitareas, niño prodigio. Productivo y ajetreado. Versátiles, optimistas y espontáneos; juguetones, animosos y prácticos, también podrían abarcar demasiado, ser desorganizados e indisciplinados. Constantemente buscan experiencias nuevas y estimulantes, pero la actividad continuada los aturde y agota. Por lo general tienen problemas de superficialidad e impulsividad. El Siete sano centra sus dotes en objetivos dignos, es alegre, y muy capacitado y agradecido.<BR>* MIEDO BÁSICO: Ser desvalido o quedar atrapado en el dolor.<BR>* DESEO BÁSICO: Estar feliz, contento, encontrar satisfacción.<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si obtienes lo que necesitas.<BR>* Sanación: en vez de planificar, actúa. Cuando acojas y abraces tus sentimientos negativos, habrá felicidad. Vive cada momento.');
  if ($numeneagrama2 == 8) echo('* 8, política (orientados a status, ¿poder y dinero?). Autosuficiencia y practicidad. Responsable y tenaz. Proveedor, empresario, inconformista. Poderoso y dominante, ¿a veces protector? Seguros de sí mismos y capaces de imponerse. Ingeniosos y decididos, también resultan orgullosos; piensan que deben estar al mando de su entorno y suelen volverse retadores e intimidadores. Normalmente tienen problemas para intimar con los demás. El Ocho sano se controla, usa su fuerza para mejorar la vida de otras personas, volviéndose heroico, magnánimos y a veces históricamente grandioso.<BR>* MIEDO BÁSICO: Ser dañado o controlado por otros.<BR>* DESEO BÁSICO: Protegerse, decidir su camino en la vida.<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres fuerte y estás al mando de tu situación.<BR>* Sanación: si confías en que los demás buscan la verdad y justicia como tú, serás menos desconfiado. Delega, no intentes controlar todo. El remedio para la insatisfacción y el aburrimiento no es la intensidad, sino la medida, incluso en la aplicación de la justicia.');
  if ($numeneagrama2 == 9) echo('* 9, expresión creativa, generosidad y modestia, empatía, animadores emocionales, sanadores, iniciar cosas con determinación. Acomodadizo, humilde, ¿o modesto?. Conformistas, confiados y estables. Afables y bondadosos, también pueden estar demasiado dispuestos a transigir con los demás para mantener la paz. Tienden a ser complacientes y a minimizar cualquier cosa inquietante. Normalmente tienen problemas de pasividad y tozudez. El Nueve sano es indómito y abarcador; capaz de unir a las personas y solucionar conflictos.<BR>* MIEDO BÁSICO: Perder la conexión, fragmentación.<BR>* DESEO BÁSICO: Mantener la estabilidad interior y la paz mental.<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien mientras los que te rodean sean buenos y estén bien.<BR>* Sanación: cuando superes tu indolencia inicial, sentirás la vitalidad que duerme en ti. Disfruta del placer de ser consciente de ti mismo y hacerte responsable de tu vida.');  

  echo('<BR>- Un tipo de persona (número) se me presenta muchas veces, ¿qué hago / mejoro en mí?:
<BR>1. Muestra a los demás el camino creativamente.
<BR>2. Recoge la cosecha. Quizás alguien pueda ayudarte a decidir.
<BR>3. Viaja para autoconocerte.
<BR>4. Sé tú mismo digan lo que digan, y con imaginación genuina.
<BR>5. Expresa tus ideas para salir del bloqueo mental.
<BR>6. Ocúpate de la belleza, el arte, la decoración, los problemas maritales...
<BR>7. Sé más esotérico (hacer caso a la intuición, Psicología...).
<BR>8. No pienses, trabaja. Sé coherente con tus debilidades.
<BR>9. Saca a flote toda tu fuerza interior, para hacer las cosas con seguridad.<BR>');
 }

 function calcularnumeneagrama($dia, $mes, $anio)
 {
  // Se suman las cifras de cada número, y el resultante se suma mientras que NO de 112233 o sea < 10 
  
  // SUMAR LAS CIFRAS.
  $cuenta = 0;
  $cuenta = $cuenta + sumacifras($dia);
  $cuenta = $cuenta + sumacifras($mes);
  $cuenta = $cuenta + sumacifras($anio);

  // REDUCIENDO HASTA 11, 22, 33 O UNA CIFRA.
  while ( ($cuenta >= 10) && ($cuenta != 11) && ($cuenta != 22) && ($cuenta != 33) )
   $cuenta = sumacifras($cuenta);
  return $cuenta;
 } 

 function diseniomiscanales()
 {
  echo('<BR><BR>####Mis canales (Diseño Humano):
<BR>- 5, RITMO (gente magnética): es incorrecto dar tu opinión a quien no te la pide, caerá en oídos sordos. Si eres iniciador, podrías "tocar solo" y ser muy molesto.
<BR>- 31 EL ALPHA (sigma, realmente, la gente lo quiere), el líder (mejor como proyector): observador, para ver lo que es o no correcto. Representante de grupo, dice lo que hay que hacer, pero NO lo hace por lo general. Lo que menos quiere es mandar o dar órdenes. Le gustaría que todo el mundo supiera lo que tiene que hacer.
Es un modelo de orden y de disciplina, es objetivo (NO inmerso en sus pasiones, emociones...) y sabe hacerse escuchar.
<BR>- 44, LA RENDICIÓN (transmisor): gran capacidad de convicción (y manipulación). Tienen olfato con la gente. Trabajar sólamente cuando te apetece y el resto del tiempo descansar. Hacer lo que puedas con lo que hay.
<BR>- 48, LA LONGITUD DE ONDA. TALENTO: alcanzar la maestría de cualquier proceso (experimentación y repetición continua: Driveout je je). Tienen grandes recursos para solucionar problemas. Ordena lo que ya está sano en él (NO corregir a quien NO desea cambiar, y esperar a que te llamen, y "perfeccionar con gusto").
<BR>####ESCORPIO SÓLO.
<BR>- 43, ESTRUCTURAR (mente original que se expresa bien: marginales para los mediocres): les cuesta escuchar porque ya saben.
<BR>- 28 LUCHA (por algo que merezca la pena). Todo deben hacerlo a su propio modo.
Les conviene el deporte para liberar su exceso de adrenalina. Luchar es muchas veces intentar expresar conflictos psicológicos con claridad. Su búsqueda es saber para qué están aquí, y luego cumplir su propósito tenazmente. Es el adiestramiento de la intuición. Y NO se puede adiestrar si no siente la amenaza, el peligro.
<BR>- 14 EL COMPÁS (poseen el don natural de guiar a otros, aunque no lo sepan). El compás es saber cuándo ser receptivo y cuando responder (cuando surge un estímulo). Están muy centrados.
<BR>- 1 LA INSPIRACION (es el más creativo de todos los canales): inspira a los demás. Nos habla de que las peculiaridades sean reconocidas por el otro como una contribución.');
 }

 function manos()
 {
  global $manocuadrada;
  global $manoespatula;
  global $manogigante;
  global $manoconica;
  global $manonudosa;
  global $manoespiritual;
 
  echo('<BR><BR>####Manos (cuadrada: pequeña; espátula: final dedos; gigante: primaria; cónica: dedos, nudosa : hueso dedos se ensancha, espiritual: fina y larga; las mixtas son de personas inteligentes, pero erráticas aplicando talentos. Ideas, diplomacia y tacto.):');

  if ($manocuadrada > 0) echo('<BR>- '.$manocuadrada.' Cuadrada: pequeñita. ¿Piel gruesa y roja? Metódicos, aman la seguridad. Son de lógica y paz, no de instinto. Fuertes y con apego a lo material. ¿Son los artesanos (dudas sobre la misión laboral)?');
  if ($manoespatula > 0) echo('<BR>- '.$manoespatula.' Espátula (dedos, yo, un poco): dedos + cortos que palma (palma relativamente grande). Piel rosada. Entusiastas, detallistas, optimistas. Percepción original. Vanidosos a veces. ¿Son los carpinteros... Aquí sí que tengo dudas.');
  if ($manogigante > 0) echo('<BR>- '.$manogigante.' Primaria (gigantesca): conformistas, trabajos físicos o pesados, apasionados, materialistas, poco arriesgados.');
  if ($manoconica > 0) echo('<BR>- '.$manoconica.' Cónica: sensibles, ¿aman la tecnología? Se aburren fácilmente. Hábiles investigadores, activos y creativos. Lujo e indolencia. No razonan, juzgan por instinto e impulso. Conversadores generosos, simpáticos...');
  if ($manonudosa > 0) echo('<BR>- '.$manonudosa.' Nudosa (yo, dedos suelen ser flacos y con nudos / ensanchamientos breves): suele ser organizado. Fuertes valores morales (bah, los mínimos). Material o psíquico (según los nudos). Sinceridad, profundos, líderes naturales. Rara vez se olvidan de sus fallos (de lo negativo, querrá decir). Uñas con terminación ancha (suave o recta / cuadrada).');
  if ($manoespiritual > 0) echo('<BR>- '.$manoespiritual.' Mística / artística (larguísima / agua vs cuadrada / tierra): dedos cónicos. Débiles físicamente e inestables emocionalmente. Uñas almendradas (abajo un poco recto, y terminan suave, al revés que la avellanada). Fácilmente influenciables (por gurús... ¡Un peligro la gente que se deja llevar!) y poco lógicos. Piel suave, flexible, blanda y rosada (¿y atractiva?). Perezosos.');
 }

 function personalJung()
 {
  echo('<BR><BR>#### Busca las 16 personalidades basadas en Jung (yo, INFJ, aunque a veces soy INTJ).
<BR>- Características:
<BR>* Introversión (I) vs chupaenergías (E). Es importante que sean introspectivos (tanto I como E).
<BR>* Percepción sutil o 3D (baja). Intuición (N) vs sensación (S, 5 sentidos).
<BR>* Reflexión (T) vs emoción (F, más impulsivos). Los 2 me gustan.
<BR>* Juicio (J) vs percepción (P). Los "J" siguen con sus planes. Los 2 pueden ser útiles.
<BR>- Yo:
<BR>* INFJ (1.5% de la gente). La luz de la humanidad. Van por lo imposible. Diplomáticos y profundos.
<BR>* INTJ (2.1%). Líderes naturales. Confiados y originales pensadores. Mente maestra. Pueden estar solos. Trazan elaborados planes, y si fracasan... duele.');
 }

 function zodchino()
 {
  global $chino;

  echo('<BR><BR>####Zodiaco chino:
<BR>- Por tríos: caballo, perro y tigre. Dragón, mono y rata.  Cabra, cerdo y conejo. Serpiente, gallo y buey.
<BR>- Por dúos: rata y buey; tigre y cerdo; conejo y perro; dragón y gallo; serpiente y mono; caballo y cabra.<BR>- ');

  if ($chino == 1) echo('Rata: les gusta rodearse de familiares y amigos, a quienes ayudan en sus quehaceres y problemas diarios.');
  if ($chino == 2) echo('Buey: paciente y tranquilo, irradia cariño y amor. Quieren orden y limpieza, y obtienen el éxito con esfuerzo. Aman el arte. No les gusta discutir, aunque sí que les obedezcan.');
  if ($chino == 3) echo('Tigre, muy pasional y lleno de energía. Aventureros, independientes, ingeniosos, impulsivos y les gusta la diversión. Amigos para toda la vida, aunque les gusta ser el líder (y en pareja, el más fuerte y seductor).');
  if ($chino == 4) echo('Conejo: prudentes, afables, discretos, previsores, atentos y benevolentes. Indulgentes (eso es negativo), aman la paz. Les gusta la vida tranquila, la ternura y la armonía.');
  if ($chino == 5) echo('Dragón: imaginativo, emprendedor, afortunado y poderoso. Lleno de fuerza y vitalidad. No cree a nadie ni en nadie. Son muy sentimentales y se enamoran locamente, pero no les enfurezcas.');
  if ($chino == 6) echo('Serpiente (yo): astutos, saben lo que quieren y cómo conseguirlo. Intensos y prudentes a la vez. Celosos y posesivos con su familia, pero leales. Les gusta mimar a sus amigos y esperan de ellos lo mismo. Son buenos para parecer tranquilos en situaciones difíciles. S se sienten ignorados, pueden enfadarse por horas.');
  if ($chino == 7) echo('Caballo: optimistas, alegres, aventureros, elocuentes, impacientes, emprendedores. Su gran pasión es el dinero y los viajes (culturas nuevas...). Atractivo físico. Enamoradizos.');
  if ($chino == 8) echo('Cabra: creativa, positiva, elegante, femenina, afable, compasiva, llorona, soñadora, orgullosa y triste. No persiguen la riqueza material. Aman la familia, los niños, el hogar y la naturaleza. Son muy trabajadoras, aunque no les gusta la presión.');
  if ($chino == 9) echo('Mono: ingenioso, simpático, mente rápida y despierta, persuasivo, resolver cualquier problema. Relaciones: suelen ser conflictivas, no soporta que no lo valoren. Excesos en fiestas...');
  if ($chino == 10) echo('Gallo: atractivo y seductor, talento (y meticulosos, eficientes y ordenados) y es apreciado. Conversadores, observadores, egoístas, usureros, pragmáticos y familiares. Amor: románticos, obstinados y luchan por el control de su pareja. Relaciones públicas o artistas.');
  if ($chino == 11) echo('Perro: dedicado al trabajo, honesto, confiable, sentido justicia y lealtad. Personalidad excitante, buen humor, capacidad para escuchar los problemas de los demás. Amor: fieles y leales, celoso si la pareja no está en casa. Nervios.');
  if ($chino == 12) echo('Cerdo: honesto, confiado, cariñoso, servicial, valiente, decidido, sin grandes pretensiones. Agradables, y gusto y modales "impecables". Muy trabajadores. Engordan: falta de atracción por el deporte y apatía.');
 }

 function kwa()
 {
  global $numerokwa;
  if ($numerokwa == 1) echo('Carrera profesional, agua.');
  if ($numerokwa == 2) echo('Amor y matrimonio, tierra.');
  if ($numerokwa == 3) echo('Salud y familia, madera.');
  if ($numerokwa == 4) echo('Riqueza y prosperidad, madera.');
  if ($numerokwa == 5) echo('Nada, tierra.');
  if ($numerokwa == 6) echo('Amigos provechosos y viajes, metal.');
  if ($numerokwa == 7) echo('Creatividad e hijos, metal.');
  if ($numerokwa == 8) echo('Saber y cultura, tierra.');
  if ($numerokwa == 9) echo('Fama y reputación, fuego');
  if ($numerokwa == 0) echo('El cero en el feng shui es muy poderoso.');
 }

 function calcularnumerokwa()
 {
  global $anio;
  global $mes;
  global $dia;
  global $hombre;  

  //Mi Kua inicial es 5 (1977; 77 = 14 = 5). Los hombres nacidos hasta el año 1999 deben restarlo al 10. A partir de 2001, de 9. Las mujeres nacidas hasta el 1999 deben sumar 5 al número. A partir de 2001, 6. 5 pasa a 8 (mujeres) o a 2 (hombres). Si la persona nació justo en el año 2000 tendrá Kua 9 (niño) o 6 (niña). Cambio de año: 4 de Febrero (si naciste el 3 Febrero de 1998, juegas con 1997).

  $anio2 = $anio;
  if (($mes == 1) || (($mes == 2) && ($dia <=3)))
   $anio2 = $anio2 - 1;  
  $num = $anio2 % 100;
  while ($num >= 10)
   $num = sumacifras($num);
  if ($anio2 == 2000)
  {
   if ($hombre ==1) $num = 9; else $num = 6;
  }
  else
  {
   if ($hombre == 1)
   {
    // Si es 9, y el año es >= 2001, sale 0.
    if ($anio2 <= 1999) $num = 10 - $num;
    if ($anio2 >= 2001) $num = 9 - $num;
   }
   if ($hombre == 0)
   {
    //$num será 15 como mucho (sólo sumas cifras una vez).
    if ($anio2 <= 1999) $num = sumacifras($num + 5);
    if ($anio2 >= 2001) $num = sumacifras($num + 6);
   }
   if ($num == 5)
   {
    if ($hombre == 1) $num = 2;
     else $num = 8;
   }
  }   

  echo("<BR>####Número kua = ".$num. ". ");

  return $num;
 }

 function sumacifras($numero)
 {
  // Para cada número, la última cifra es la primera que se obtiene (resto de dividir por 10).
  // Y luego contamos con el número sin la última cifra (número div 10). Una cifra NO se trata igual (while).
  $suma = 0;
  while ($numero >= 10)
  {
   $suma = $suma + $numero % 10;
   $numero = intval($numero / 10);
  }
  $suma = $suma + $numero;
  return $suma;
 }

 function cejas()
 {
  echo("<BR><BR>####Cejas gruesas principio (puedes empezar proyectos)...<BR>");
 }

 function diseniohumano()
 {
  global $caracmanifestante;
  global $generador;
  global $proyector;
  global $reflector;
  global $manifestante;
  global $mision;

  echo("<BR><BR>####Diseño Humano:<BR>");
  // Si es manifestante, poner el trozo de manifestante.
  if ($manifestante == 1) $caracmanifestante = 1;
  if ($caracmanifestante == 1)
  echo('- Los manifestantes, como característica (NO clase), son de pasar rápidamente "ideas interiores" a sonidos, guiándose por lo que dicen, y pasando rápidamente a la acción. ¿Mejores futbolistas je je? El manifestador debe informar antes de actuar (así, siente que "la cosa fluye").<BR>');

  if ($generador == 1)
  echo('- Clase generador (manifestante 35% o NO 35%):
<BR>* Responde a estímulos externos.
<BR>* Poner toda su energía creativa al servicio de los demás y disfrutar de lo que hace CADA DÍA (satisfacción / se levanta con las pilas cargadas, da las gracias por el día al acostarse, dejando las cosas para el día siguiente con tranquilidad; vs frustración / odia su trabajo, pero piensa que es lo que hay). 
<BR>* Para que un Generador (o Generador Manifestante) tenga un buen día necesita una buena noche de sueño. Necesita haber tenido un buen día y haberse agotado por completo (física y mentalmente).
<BR>* Por su forma "sacral" de tomar decisiones, hazle preguntas de sí o no, y la respuesta podría ser ¡oh, yeah!, bue..., uff. ¿El sacro se contrae (mala señal)? Puedes acomodarte, presente por debajo del ombligo, mientras que te hacen preguntas sobre ti. Me recuerda a cuando quieres algo que tu alma también: da miedo y a la vez hay cierto cosquilleo en el estómago.<BR>');

 if ($manifestante == 1) echo ('- Clase Manifestante (9%):
<BR>* inicia la acción y dirige.<BR>');

 if ($proyector == 1) echo ('- Clase Proyector (20%):
<BR>* Espera al reconocimiento e invitación de los demás. Son los guías, han venido a dar consejo y a dirigir. Su regalo al mundo es su liderazgo y comprensión (sería algo deseable que los tuviesen). ¿Son los expertos / pesaos je je?<BR>');
 
 if ($reflector == 1) echo ('Clase reflector (1%):
<BR>* Debe esperar todo un ciclo lunar para tomar una decisión.
<BR>* ¿Son como periodistas, que reflejan la sociedad?<BR>');

 echo('##La Autoridad es la forma en la que deberíamos tomar las decisiones (si tienes ciertos numerillos en un cuerpo dibujado, tienes ciertas capacidades de llegar a las decisiones). Si la mente contradice lo ya dicho por el cuerpo, puede querer manipularte:
<BR>- Plexo solar, autoridad emocional. Tener paciencia para llegar a la claridad emocional. NO está preparado para ser espontáneo. NO dejarse manipular. NO dejar que le insistan. Explica al otro cómo funcionas si la tienes, que necesitas tiempo.
<BR>* Si eres generador con Autoridad Emocional, necesitas darte un tiempo de espera, tras haberte "encendido" un estímulo (los proyectores deberán ver si la invitación está alineada con ellos y sus talentos; los arrolladores manifestantes deberán tomarse un tiempecito antes de informar). Los reflectores NO la tienen.
<BR>- Sacro (si tienes de plexo, tiene prioridad sobre sacro, y sacro, sobre la siguiente, y...). La tiene el generador (le da la energía vital; ¿Dieta anticándida? Quita azúcar, gluten y lácteos). Confiar en sus "tripas". Si hay autoridad de Bazo, tenemos autoridad Sacral esplénica: dar respuesta en el ahora (bazo), y además con conciencia.
<BR>- Bazo. Intuición, instinto, y decidir espontáneamente.
<BR>- Ego (en algún lugar del cuerpo, NO voy a concretar). En la gente "Manifestada" (característica), de ego a garganta, que es otro punto de decisión que veremos después: guiarse por lo que dice su voz. En la gente de clase "Proyectada" (ego a G, que es otro punto de decisión que veremos después): guiarse por lo que responden a lo siguiente: ¿qué es lo que quiero?, ¿qué hay ahí para mi?
<BR>- G. ¿NO pensar previo a hablar? Están aquí para dar dirección a otros. NO están para seguir reglas. Deben seguir lo que les haga bien. ¿4 con más prioridad? NO me lo creo je je.
<BR>- Garganta, Mente, Cabeza. Sondear el mundo externo, buscando información. Escuchar sus cavilaciones. Tomarse el tiempo. Tener consejeros, amigos de confianza.
<BR>- Lunar. ¿Para la clase reflector? Seguir este proceso para decisiones importantes: amor, lugar de residencia, trabajo, profesión. ¡Andá, lo siguiente, es como con el anterior!: tomarse el tiempo. Sondear el mundo externo para buscar información. Tener consejeros, amigos de confianza.<BR>');

 echo('##Misiones (3 aprende por ensayo / error; 1 investiga, aprende; 2 muchas habilidades innatas; 4chupadelentorno5solucionesocialesprácticas6ejemplar son sociales). ');
 if ($mision == 13) echo('Perfil 1/3, Investigador / Mártir: aprende a través de la prueba y error.');
 if ($mision == 14) echo('Perfil 1/4, Investigador / Oportunista: profundiza en sus estudios y atrae personas y oportunidades dentro de su círculo cercano.');
 if ($mision == 24) echo('Perfil 2/4, Ermitaño / Oportunista: muchas habilidades innatas y sus oportunidades vienen a través de amistades cercanas.');
 if ($mision == 25) echo('Perfil 2/5, Ermitaño / Hereje: proyectista con muchos dones y talentos.');
 if ($mision == 35) echo('Perfil 3/5, Mártir / Hereje: a través de la prueba y error, enseña al mundo lo que funciona y lo que no. Muy resistente a los golpes de la vida.');
 if ($mision == 36) echo('Perfil 3/6, Mártir / Modelo de Roles: experimentación a través de prueba y error, para servir de ejemplo a seguir.');
 if ($mision == 41) echo('El Perfil 4/1, Oportunista / Investigador: maestros de la vida que están aquí para profundizar en sus investigaciones y compartirlas con su gente una vez consiguen unas bases sólidas.');
 if ($mision == 46) echo('El Perfil 4/6, Oportunista / Modelo de Roles: aprovecha las oportunidades que le llegan de su entorno cercano (¿Facebook je je?) y sus amistades para servir de modelo de vida para los demás. El Perfil 4/6 es bastante inusual y especial. Son dos líneas, que están aquí para los demás (por encima de 3). Necesitan estar a solas para poder ver la vida de una forma más objetiva.
<BR>* A su línea 4 le encanta desarrollar su círculo cercano de amistades y socializar para influir. Lo que le va es quedarse mirando, en medio "de la fiesta".
<BR>* Primeros 30 años de vida: su línea 4 busca estabilidad y conexiones profundas, pero la línea 6 (profunda "de adulta") se comporta como una 3 (prueba y error, difícil encontrar "el amor de tu vida"): relájate y disfruta, si es la persona adecuada, lo sabrás.');
 if ($mision == 51) echo('Perfil 5/1, Hereje / Investigador: líder por excelencia, aporta soluciones prácticas a través de sus investigaciones.');
 if ($mision == 52) echo('El Perfil 5/2, Hereje / Ermitaño: disfrutar de sus talentos naturales y liderar a los demás a través de la expresión de sus dones más innatos.');
 if ($mision == 62) echo('El Perfil 6/2, Modelo de Roles / Ermitaño: prueba y error los primeros años de vida, para poder coger los aprendizajes necesarios para inspirar a los demás.');
 if ($mision == 63) echo('El Perfil 6/3, Modelo de Roles / Mártir: Personas optimistas que, a través de las experiencias a lo largo de toda su vida, sirven de ejemplo a seguir para los demás y saben lo que funciona y lo que NO.');
}
?>
