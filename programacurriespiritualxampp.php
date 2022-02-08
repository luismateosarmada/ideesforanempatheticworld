<?php
/*
Al final, pongo la definición de cada cualidad, defecto... porque a veces los nombres engañan. Resumen "ejecutar" PHP: Xampp (aunque tienes que desactivar algunas cosillas durante la instalación, y luego volver a activarlas), paiza (io), aunque nada de componentes HTML en principio, PHPEasy (no lo he probao), o poner el .php en un servidor REAL (Apache, o el que sea, que PHP es muy portable).  ¿Zend Server y Wamp?
##Ejecutar PHP online. https://paiza.io/es/projects/new te lo permite. Pero no te muestra botones y eso. Eso sí, mis programillas en PHP, los deja muy guapos, de colorines.
##AMPLIACIÓN: LOS 8 TRABAJOS DE LA EDAD MEDIA. AHORA HAY UNA ESPECIALIZACIÓN MUY TRISTE, Y ENTRE EL MUCHO Y EL POCO...

Un ejemplo de salida del programa del currículum espiritual (datos de Escorpio, y mi eneagrama), que es mío... y vuestro, totalmente. #### NO te olvides de hacer un test de Tzolkin Maya, para ver qué "lugar" ocupas. ------- Mecánica:
- Elijo mis cualidades y defectos, para calcular mis notas (mi idoneidad) para cada trabajo.
* A esos defectos, se les suman los de Zodiaco y Eneagrama.
* Nota, se sacarán por pantalla, tanto los defectos elegidos (unos y ceros), como la suma de todos (true y false).
- Cálculo:
* Se suma / resta para cada trabajo, dependiendo de si te pasas un poco con una cualidad, o no llegas.
* Se resta si tienes un defecto, y el trabajo estudiado, lo tiene como "importante" (vamos, que con ese defecto, es muy difícil trabajar bien). Se puede restar menos (eso es "bueno") si has puesto un nivel de represión menor que 10, pero no para defectos escogidos, sino de Zodiaco y Eneagrama. -------
------- Arrojo 4 Previsión 7 Ideas 4 Empatía 8 Introspección 9 Fuerza Física 6 Resistencia Física 6 Resumen, abstracción 7 Estructuración 6 Análisis 8 Amor a la naturaleza 4 Sentido de la estética 5 Zodiaco 8 Eneagrama 2 Nivel de represión 5
_cri 0 _dep 0 _don 0 _sol 0 _exc 0 _des 1 _dis 0 _man 0 _mie 0 _imp _ter _rui _ave _cam _loc false _com false _noc false _res false
#_valor criticoperfeccionista: #_valor dependiente: 1 #_valor donimagen: #_valor solitariointros: #_valor excentrico: #_valor desconfiado: 1 #_valor disperso: #_valor mandon: #_valor miedoconflictos: #_valor impaciencia: 1 #_valor terquedad: #_valor mieruidos: #_valor mieaventura: 1 #_valor miecambios: #_valor locuacidad: false #_valor competitivo: false #_valor noconsidera: false #_valor reservado: 1 -------
###maestro### 9.5709325396825 9.6875992063492 11? _dependiente 11? _desconfiado 11? _impaciencia 8.2590277777778 Comparada (función dificultad): 729.05972222222
###arquitecto### 9.389880952381 9.4732142857143 11? _impaciencia 11? _reservado 8.639880952381 Comparada (función dificultad): 727.49255952381
###policia### 9.7089947089947 9.8375661375661 11? _dependiente 11? _impaciencia 11? _mieaventura 8.7661375661376 Comparada (función dificultad): 729.83518518519
###inventor### 9.4470899470899 9.5248677248677 11? _desconfiado 8.2748677248677 Comparada (función dificultad): 657.59153439153
###herrero### 9.5654761904762 9.677380952381 11? _dependiente 11? _impaciencia 8.427380952381 Comparada (función dificultad): 641.28392857143
###panadero### 9.8125 9.9430555555556 11? _impaciencia 9.4430555555556 Comparada (función dificultad): 704.64027777778
###agricultor### 9.4652777777778 9.5625 11? _dependiente 11? _impaciencia 7.8958333333333 Comparada (función dificultad): 591.9375
###ganadero### 9.4146825396825 9.5238095238095 11? _dependiente 11? _desconfiado 11? _impaciencia 7.5238095238095 Comparada (función dificultad): 651.54761904762
###sastre### 9.5223214285714 9.6223214285714 11? _impaciencia 9.1223214285714 Comparada (función dificultad): 743.82857142857
###medico### 9.4055886243386 9.4632275132275 11? _dependiente 11? _desconfiado 11? _impaciencia 8.2132275132275 Comparada (función dificultad): 830.49947089947
###cuidador### 9.8015873015873 9.868253968254 11? _dependiente 11? _desconfiado 11? _impaciencia 8.4396825396825 Comparada (función dificultad): 740.26031746032
###artesano### 9.4603174603175 9.5388888888889 11? _impaciencia 8.7055555555556 Comparada (función dificultad): 632.74444444444
###obrero### 9.4355158730159 9.5426587301587 9.5426587301587 Comparada (función dificultad): 821.6875
###operador### 9.8015873015873 9.9440476190476 9.9440476190476 Comparada (función dificultad): 680.81071428571
###psicologo### 9.5694444444444 9.6510251322751 11? _desconfiado 11? _impaciencia 8.9010251322751 Comparada (función dificultad): 896.61612103175
*/
?>

<?php 
if (!isset ($_GET["estado"])) entrada_datos(); 
  else calcular();  
?> 

<?php
function entrada_datos()
{
 global $PHP_SELF; // la necesitamos para que el submit nos lleve a este mismo .php.
?>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET><!-- ACTION = " + nombre de este mismo .php + ". --> 

<fieldset>
<INPUT TYPE=input NAME="arrojo" VALUE="">Arrojo: capacidad de lanzarse sin pensar mucho, con decisión.<BR>
<INPUT TYPE=input NAME="prevision" VALUE="">Previsión: capacidad de pensar / actuar sobre lo que puede venir en el futuro.<BR>
<INPUT TYPE=input NAME="ideas" VALUE="">Ideas: capacidad de generar ideas. Suele asociarse con el Zodiaco de Aire.<BR>
<INPUT TYPE=input NAME="empatia" VALUE="">Empatía: sentir lo que el otro (- práctico), ver lo que le pasa, intuir la causa del dolor (+)...<BR>
<INPUT TYPE=input NAME="introspeccion" VALUE="">Introspección: un psicólogo tiene que haberla hecho para conectar bien con los demás.<BR>
<INPUT TYPE=input NAME="fuerzafisica" VALUE="">Fuerza física.
<INPUT TYPE=input NAME="resisfisica" VALUE="">Resistencia física.<BR>
<INPUT TYPE=input NAME="resumenabstraccion" VALUE="">Capacidad de resumen / abstracción.
<INPUT TYPE=input NAME="estructuracion" VALUE="">Capacidad de estructuración.
<INPUT TYPE=input NAME="analisis" VALUE="">Capacidad de análisis.<BR>
<INPUT TYPE=input NAME="amornaturaleza" VALUE="">Amor a la naturaleza.
<INPUT TYPE=input NAME="sentidoestetica" VALUE="">Sentido de la estética (incluye "buen gusto").<BR>
</fieldset>

<fieldset>
<INPUT TYPE=input NAME="zodiaco" VALUE="">Signo del Zodiaco, entre 1 y 12; si no, se considerarán todos los defectos, no sólo de tu signo.<BR>
<INPUT TYPE=input NAME="eneagrama" VALUE="">Eneagrama (defectos), será 5 si no pones nada. Suma las cifras de tu nacimiento. 03-11-1977 = 29 = 11 = 2.<BR>
<input type="checkbox" NAME="criticoperfeccionista" VALUE="">Crítico perfeccionista: quizás por represión (ser obediente), te critica. ¿Frustración?<BR>
<input type="checkbox" NAME="dependiente" VALUE="">Dependiente: espera de los demás algo, tras ayudar... Generalmente, no muy resueltos.<BR>
<input type="checkbox" NAME="donimagen" VALUE="">Importancia imagen: le importa mucho la imagen que da a los demás.<BR>
<input type="checkbox" NAME="solitariointros" VALUE="">Huraño: ser solitario no es algo malo, hacerse la víctima trágica... sí.<BR>
<input type="checkbox" NAME="excentrico" VALUE="">Excéntrico: le importa más diferenciarse y la originalidad, que cosas + importantes.<BR>
<input type="checkbox" NAME="desconfiado" VALUE="">Desconfiado (yo, un poco): creo que aquí no hay mucho que explicar. ¿NO te deja nada? ¿Se ve "entre pirañas"?<BR>
<input type="checkbox" NAME="disperso" VALUE="">Disperso: está a mil cosas, supongo.<BR>
<input type="checkbox" NAME="mandon" VALUE="">Mandón: quizás por frustración.<BR>
<input type="checkbox" NAME="miedoconflictos" VALUE="">Miedo a las discusiones: no ve en los pequeños conflictos diarios grandes oportunidades. Sensibles.<BR>
<input type="radio" name="impaciencia" value=true>Impaciente: no suele construir su futuro a base de muchos planes.
<input type="radio" name="impaciencia" value=false>No impaciente<BR>
<input type="radio" name="terquedad" value=true>Terco: defiende lo suyo (ideologías...) a capa y espada, difícilmente entra en razón. Costumbre
<input type="radio" name="terquedad" value=false>No terco<BR>
<input type="radio" name="mieruidos" value=true>Miedo a los ruidos fuertes.
<input type="radio" name="mieruidos" value=false>&nbsp &nbsp &nbsp
<input type="radio" name="mieaventura" value=true>Miedo a la aventura.
<input type="radio" name="mieaventura" value=false>&nbsp &nbsp &nbsp
<input type="radio" name="miecambios" value=true>Miedo a los cambios / apegos.
<input type="radio" name="miecambios" value=false><BR>
<input type="radio" name="locuacidad" value=true>Hablar de más / agoviar.
<input type="radio" name="locuacidad" value=false>&nbsp &nbsp &nbsp
<input type="radio" name="competitivo" value=true>Competitividad.
<input type="radio" name="competitivo" value=false>&nbsp &nbsp &nbsp
<input type="radio" name="noconsidera" value=true>NO considerar al otro.
<input type="radio" name="noconsidera" value=false>&nbsp &nbsp &nbsp
<input type="radio" name="reservado" value=true>Ser reservado / poco honesto.
<input type="radio" name="reservado" value=false><BR>
</fieldset>

<INPUT TYPE=input NAME="represion" VALUE="">Nivel de represión, suaviza los defectos psicológicos si es bajo. Incapacidad para quitarte las represiones conscientemente (Jung...).<BR>

<INPUT TYPE=hidden NAME="estado" VALUE="definido">
<INPUT TYPE=submit VALUE="OK"> 
</FORM>
<?php
}
?> 

<?php 
function calcular()
{ 
 global $arrojo; 
 global $prevision;
 global $ideas;
 global $empatia;
 global $introspeccion; global $fuerzafisica; global $resisfisica; global $resumenabstraccion;
 global $estructuracion; global $analisis; global $amornaturaleza; global $sentidoestetica;
 global $zodiaco;
 global $eneagrama;
 global $criticoperfeccionista;
 global $impaciencia;
 global $terquedad;
 global $mieruidos; global $mieaventura; global $miecambios; global $locuacidad;
 global $competitivo; global $noconsidera; global $reservado;
 global $represion;
 echo 'NO te olvides de hacer un test de Tzolkin Maya, para ver qué "lugar" ocupas.';
 $texto[0] = " ------- Mecánica:";
 $texto[1] = "- Elijo mis cualidades y defectos, para calcular mis notas (mi idoneidad) para cada trabajo.";
 $texto[2] = "* A esos defectos, se les suman los de Zodiaco y Eneagrama.";
 $texto[3] = "* Nota, se sacarán por pantalla, tanto los defectos elegidos (unos y ceros), como la suma de todos (true y false).";
 $texto[4] = "- Cálculo:";
 $texto[5] = "* Se suma / resta para cada trabajo, dependiendo de si te pasas un poco con una cualidad, o no llegas.";
 $texto[6] = "* Se resta si tienes un defecto, y el trabajo estudiado, lo tiene como \"importante\" (vamos, que con ese defecto, es muy difícil trabajar bien). Se puede restar menos (eso es \"bueno\") si has puesto un nivel de represión menor que 10, pero no para defectos escogidos, sino de Zodiaco y Eneagrama. -------";
 for ($i = 0; $i < 7; $i++)
  echo $texto[$i].'</BR>';
 if (!is_numeric($_GET["arrojo"])) // isset siempre dará TRUE. ¿Y empty?
  $arrojo = 5;
   else
   {
    $numaux = $_GET["arrojo"];
    if ( (intval($numaux) == $numaux) AND ($numaux >= 0) AND ($numaux <= 10) )
     $arrojo = $numaux;
      else
       $arrojo = 5;
   }
 echo '------- Arrojo '.$arrojo."\r\n";
 $prevision = dar_valor_a_numero($_GET["prevision"]);
 //echo $_GET["prevision"]."\r\n";
 echo 'Previsión '.$prevision."\r\n";
 $ideas = dar_valor_a_numero($_GET["ideas"]);
 //echo $_GET["ideas"]."\r\n";
 echo 'Ideas '.$ideas."\r\n"; 
 $empatia = dar_valor_a_numero($_GET["empatia"]);  
 //echo $_GET["empatia"]."\r\n";
 echo 'Empatía '.$empatia."\r\n";
 $introspeccion = dar_valor_a_numero($_GET["introspeccion"]);  
 echo 'Introspección '.$introspeccion."\r\n";
 $fuerzafisica = dar_valor_a_numero($_GET["fuerzafisica"]);  
 echo 'Fuerza Física '.$fuerzafisica."\r\n";
 $resisfisica = dar_valor_a_numero($_GET["resisfisica"]);  
 echo 'Resistencia Física '.$resisfisica."\r\n";
 $resumenabstraccion = dar_valor_a_numero($_GET["resumenabstraccion"]);  
 echo 'Resumen, abstracción '.$resumenabstraccion."\r\n";
 $estructuracion = dar_valor_a_numero($_GET["estructuracion"]);  
 echo 'Estructuración '.$estructuracion."\r\n";
 $analisis = dar_valor_a_numero($_GET["analisis"]);  
 echo 'Análisis '.$analisis."\r\n";
 $amornaturaleza = dar_valor_a_numero($_GET["amornaturaleza"]);  
 echo 'Amor a la naturaleza '.$amornaturaleza."\r\n";
 $sentidoestetica = dar_valor_a_numero($_GET["sentidoestetica"]);  
 echo 'Sentido de la estética '.$sentidoestetica."\r\n";

 if ( (!is_numeric($_GET["zodiaco"])) OR (intval($_GET["zodiaco"]) < $_GET["zodiaco"]) OR ($_GET["zodiaco"] > 12) OR ($_GET["zodiaco"] < 1) )
  $zodiaco = 0;
   else $zodiaco = $_GET["zodiaco"];
 echo 'Zodiaco '.$zodiaco."\r\n";
 if ( (!is_numeric($_GET["eneagrama"])) OR (intval($_GET["eneagrama"]) < $_GET["eneagrama"]) OR ($_GET["eneagrama"] > 9) OR ($_GET["eneagrama"] < 1) )
  $eneagrama = 5;
   else $eneagrama = $_GET["eneagrama"];
 echo 'Eneagrama '.$eneagrama."\r\n";
 $represion = dar_valor_a_numero($_GET["represion"]);
 echo 'Nivel de represión '.$represion."\r\n"; // NO hemos cambiao $_GET["represion"]. Ni para arrojo...

 echo '</BR>';
 $trab = array('arrojo' => $arrojo, 'prevision' => $prevision, 'ideas' => $ideas, 'empatia' => $empatia, 'introspeccion' => $introspeccion, 'fuerzafisica' => $fuerzafisica, 'resisfisica' => $resisfisica, 'resumenabstraccion' => $resumenabstraccion, 'estructuracion' => $estructuracion, 'analisis' => $analisis, 'amornaturaleza' => $amornaturaleza, 'sentidoestetica' => $sentidoestetica);
 $trabmaestro = array('arrojo' => 6, 'prevision' => 4, 'ideas' => 7, 'empatia' => 8, 'introspeccion' => 6, 'fuerzafisica' => 4, 'resisfisica' => 3, 'resumenabstraccion' => 8, 'estructuracion' => 7, 'analisis' => 6, 'amornaturaleza' => 2, 'sentidoestetica' => 3);
 $trabarquitecto = array('arrojo' => 4, 'prevision' => 10, 'ideas' => 7, 'empatia' => 3, 'introspeccion' => 2, 'fuerzafisica' => 4, 'resisfisica' => 4, 'resumenabstraccion' => 3, 'estructuracion' => 8, 'analisis' => 8, 'amornaturaleza' => 5, 'sentidoestetica' => 7);
 $trabpolicia = array('arrojo' => 9, 'prevision' => 6, 'ideas' => 3, 'empatia' => 6, 'introspeccion' => 4, 'fuerzafisica' => 6, 'resisfisica' => 7, 'resumenabstraccion' => 3, 'estructuracion' => 3, 'analisis' => 5, 'amornaturaleza' => 4, 'sentidoestetica' => 3);
 $trabinventor = array('arrojo' => 7, 'prevision' => 7, 'ideas' => 9, 'empatia' => 1, 'introspeccion' => 3, 'fuerzafisica' => 5, 'resisfisica' => 5, 'resumenabstraccion' => 7, 'estructuracion' => 7, 'analisis' => 8, 'amornaturaleza' => 5, 'sentidoestetica' => 4);
 $trabajos['maestro'] = $trabmaestro;
 $trabajos['arquitecto'] = $trabarquitecto;
 $trabajos['policia'] = $trabpolicia;
 $trabajos['inventor'] = $trabinventor;
 /*Foreach ($trabajos as $clavetrab => $valortrab)
  Foreach ($valortrab as $clave => $valor)
   echo $valor; */

 // 1 = criticoperfec; 2 = dependiente; 3 = donimagen; 4 = solitariointros;
 // 5 = excentrico; 6 = noseguconfidemas; 7 = disperso; 8 = mandon; 9 = no confli.
 // Todo a false, pero guardando el orden (la definición es valiosa, primero van "los 9").
 $trabdefecto = array('criticoperfeccionista' => false, 'dependiente' => false, 'donimagen' => false, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => false, 'disperso' => false, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' => false, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => false, 'reservado' => false);
 // Si $trabdefecto["... se saca del if, nos ahorramos el $t... = false del princio, creo.
 $criticoperfeccionista = false;
 $trabdefecto["criticoperfeccionista"] = false;
 echo "   _cri "; // Si pongo un espacio al principio, no me lo pone.
 if (isset($_GET["criticoperfeccionista"]))
 { $criticoperfeccionista = true; $trabdefecto["criticoperfeccionista"] = $criticoperfeccionista; echo    $criticoperfeccionista;}
  else echo "0";
 $dependiente = false;
 $trabdefecto["dependiente"] = false;
 echo " _dep ";
 if (isset($_GET["dependiente"]))
 { $dependiente = true; $trabdefecto["dependiente"] = $dependiente; echo $dependiente;}
  else echo "0";
 $donimagen = false;
 $trabdefecto["donimagen"] = false;
 echo " _don ";
 if (isset($_GET["donimagen"]))
 { $donimagen = true; $trabdefecto["donimagen"] = $donimagen; echo $donimagen;}
  else echo "0";
 $solitariointros = false;
 $trabdefecto["solitariointros"] = false;
 echo " _sol ";
 if (isset($_GET["solitariointros"]))
 { $solitariointros = true; $trabdefecto["solitariointros"] = $solitariointros; echo $solitariointros;}
  else echo "0";
 $excentrico = false;
 $trabdefecto["excentrico"] = false;
 echo " _exc ";
 if (isset($_GET["excentrico"]))
 { $excentrico = true; $trabdefecto["excentrico"] = $excentrico; echo $excentrico;}
  else echo "0";
 $desconfiado = false;
 $trabdefecto["desconfiado"] = false;
 echo " _des ";
 if (isset($_GET["desconfiado"]))
 { $desconfiado = true; $trabdefecto["desconfiado"] = $desconfiado; echo $desconfiado;}
  else echo "0";
 $disperso = false;
 $trabdefecto["disperso"] = false;
 echo " _dis ";
 if (isset($_GET["disperso"]))
 { $disperso = true; $trabdefecto["disperso"] = $disperso; echo $disperso;}
  else echo "0";
 $mandon = false;
 $trabdefecto["mandon"] = false;
 echo " _man ";
 if (isset($_GET["mandon"]))
 { $mandon = true; $trabdefecto["mandon"] = $mandon; echo $mandon;}
  else echo "0";
 $miedoconflictos = false;
 $trabdefecto["miedoconflictos"] = false;
 echo " _mie ";
 if (isset($_GET["miedoconflictos"]))
 { $miedoconflictos = true; $trabdefecto["miedoconflictos"] = $miedoconflictos; echo $miedoconflictos;}
  else echo "0";
 $impaciencia = false; if (!empty($_GET["impaciencia"])) $impaciencia = $_GET["impaciencia"];
 $trabdefecto["impaciencia"] = $impaciencia; echo " _imp $impaciencia";
 $terquedad = false; if (!empty($_GET["terquedad"])) $terquedad = $_GET["terquedad"];
 $trabdefecto["terquedad"] = $terquedad; echo " _ter $terquedad";
 $mieruidos = false; if (!empty($_GET["mieruidos"])) $mieruidos = $_GET["mieruidos"];
 $trabdefecto["mieruidos"] = $mieruidos; echo " _rui $mieruidos";
 $mieaventura = false; if (!empty($_GET["mieaventura"])) $mieaventura = $_GET["mieaventura"];
 $trabdefecto["mieaventura"] = $mieaventura; echo " _ave $mieaventura";
 $miecambios = false; if (!empty($_GET["miecambios"])) $miecambios = $_GET["miecambios"];
 $trabdefecto["miecambios"] = $miecambios; echo " _cam $miecambios";
 $locuacidad = false; if (!empty($_GET["locuacidad"])) $locuacidad = $_GET["locuacidad"];
 $trabdefecto["locuacidad"] = $locuacidad; echo " _loc $locuacidad";
 $competitivo = false; if (!empty($_GET["competitivo"])) $competitivo = $_GET["competitivo"];
 $trabdefecto["competitivo"] = $competitivo; echo " _com $competitivo";
 $noconsidera = false; if (!empty($_GET["noconsidera"])) $noconsidera = $_GET["noconsidera"];
 $trabdefecto["noconsidera"] = $noconsidera; echo " _noc $noconsidera";
 $reservado = false; if (!empty($_GET["reservado"])) $reservado = $_GET["reservado"];
 $trabdefecto["reservado"] = $reservado; echo " _res $reservado";

 $arrayeleccion = $trabdefecto;

 // SOBRE TRABAJOS: DEFECTOS.
 // 1 = criticoperfec; 2 = dependiente; 3 = donimagen; 4 = solitariointros;
 // 5 = excentrico; 6 = noseguconfidemas; 7 = disperso; 8 = mandon; 9 = no confli.
 // 10 = impaciencia; 11 = terquedad; 10 (maestro), 10 (arquitecto), 10 (policia), 01 inventor.
 // He sumado uno a cada índice, para que concuerde con el número (índice 0, número 1; si sumamos 1 al índice, es el número).
 // trabmaestrodefecto[2]=true; trabmaestrodefecto[6] = true; dependiente y desconfiado restan mucho.
 // trabarquitectodefecto[5]=true; trabmaestrodefecto[7] = true; excéntrico y disperso restan mucho.
 // trabpoliciadefecto[2]=true; trabpoliciadefecto[9] = true; dependiente y con miedo a conflictos...
 // trabinventordefecto[6]=true; trabinventordefecto[7] = true; desconfiado y disperso restan mucho.
 $trabmaestrodefecto = array('criticoperfeccionista' => false, 'dependiente' => true, 'donimagen' => false, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => true, 'disperso' => false, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => true, 'locuacidad' => true, 'competitivo' => true, 'noconsidera' => true, 'reservado' => false); // La impaciencia resta mucho al maestro.
 $trabarquitectodefecto = array('criticoperfeccionista' => false, 'dependiente' => false, 'donimagen' => false,   'solitariointros' => false, 'excentrico' => true, 'desconfiado' => false, 'disperso' => true, 'mandon' => false,   'miedoconflictos' => false, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => true, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => true, 'reservado' => true);
 $trabpoliciadefecto = array('criticoperfeccionista' => false, 'dependiente' => true, 'donimagen' => false, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => false, 'disperso' => false, 'mandon' => false, 'miedoconflictos' => true, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => true, 'mieaventura' => true, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => true, 'noconsidera' => true, 'reservado' => false);
 $trabinventordefecto = array('criticoperfeccionista' => false, 'dependiente' => false, 'donimagen' => false, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => true, 'disperso' => true, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' => false, 'terquedad' => true, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => true, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => false, 'reservado' => false);
 $trabajosdefecto['maestro'] = $trabmaestrodefecto;
 $trabajosdefecto['arquitecto'] = $trabarquitectodefecto;
 $trabajosdefecto['policia'] = $trabpoliciadefecto;
 $trabajosdefecto['inventor'] = $trabinventordefecto;

 //*************************************************LO NUEVO
 $herrero = array('arrojo' => 5, 'prevision' => 6, 'ideas' => 5, 'empatia' => 4, 'introspeccion' => 3, 'fuerzafisica' => 7, 'resisfisica' => 9, 'resumenabstraccion' => 5, 'estructuracion' => 4, 'analisis' => 6, 'amornaturaleza' => 3, 'sentidoestetica' => 6);
$trabajos['herrero'] = $herrero;
$trabherrerodefecto = array('criticoperfeccionista' => false, 'dependiente' => true, 'donimagen' => false, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => false, 'disperso' => true, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => true, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => false, 'reservado' => false);
$trabajosdefecto['herrero'] = $trabherrerodefecto;
$panadero = array('arrojo' => 4, 'prevision' => 7, 'ideas' => 5, 'empatia' => 5, 'introspeccion' => 4, 'fuerzafisica' => 4, 'resisfisica' => 8, 'resumenabstraccion' => 4, 'estructuracion' => 5, 'analisis' => 5, 'amornaturaleza' => 3, 'sentidoestetica' => 4);
$trabajos['panadero'] = $panadero;
$trabpanaderodefecto = array('criticoperfeccionista' => false, 'dependiente' => false, 'donimagen' => false, 'solitariointros' => true, 'excentrico' => true, 'desconfiado' => false, 'disperso' => false, 'mandon' => false, 'miedoconflictos' => true, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => true, 'reservado' => false);
$trabajosdefecto['panadero'] = $trabpanaderodefecto;
$agricultor = array('arrojo' => 5, 'prevision' => 7, 'ideas' => 6, 'empatia' => 4, 'introspeccion' => 3, 'fuerzafisica' => 5, 'resisfisica' => 8, 'resumenabstraccion' => 4, 'estructuracion' => 6, 'analisis' => 6, 'amornaturaleza' => 8, 'sentidoestetica' => 4);
$trabajos['agricultor'] = $agricultor;
$trabagricultordefecto = array('criticoperfeccionista' => false, 'dependiente' => true, 'donimagen' => false, 'solitariointros' => true, 'excentrico' => false, 'desconfiado' => false, 'disperso' => false, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => false, 'reservado' => false);
$trabajosdefecto['agricultor'] = $trabagricultordefecto;
$ganadero = array('arrojo' => 7, 'prevision' => 6, 'ideas' => 6, 'empatia' => 6, 'introspeccion' => 5, 'fuerzafisica' => 7, 'resisfisica' => 6, 'resumenabstraccion' => 4, 'estructuracion' => 5, 'analisis' => 6, 'amornaturaleza' => 8, 'sentidoestetica' => 4);
$trabajos['ganadero'] = $ganadero;
$trabganaderodefecto = array('criticoperfeccionista' => false, 'dependiente' => true, 'donimagen' => false, 'solitariointros' => true, 'excentrico' => false, 'desconfiado' => true, 'disperso' => true, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => false, 'reservado' => false);
$trabajosdefecto['ganadero'] = $trabganaderodefecto;
$sastre = array('arrojo' => 5, 'prevision' => 7, 'ideas' => 7, 'empatia' => 6, 'introspeccion' => 5, 'fuerzafisica' => 4, 'resisfisica' => 7, 'resumenabstraccion' => 5, 'estructuracion' => 6, 'analisis' => 5, 'amornaturaleza' => 3, 'sentidoestetica' => 8);
$trabajos['sastre'] = $sastre;
$trabsastredefecto = array('criticoperfeccionista' => true, 'dependiente' => false, 'donimagen' => true, 'solitariointros' => false, 'excentrico' => true, 'desconfiado' => false, 'disperso' => false, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => true, 'noconsidera' => false, 'reservado' => false);
$trabajosdefecto['sastre'] = $trabsastredefecto;
$medico = array('arrojo' => 7, 'prevision' => 8, 'ideas' => 7, 'empatia' => 7, 'introspeccion' => 5, 'fuerzafisica' => 5, 'resisfisica' => 6, 'resumenabstraccion' => 7, 'estructuracion' => 6, 'analisis' => 9, 'amornaturaleza' => 6, 'sentidoestetica' => 3);
$trabajos['medico'] = $medico;
$trabmedicodefecto = array('criticoperfeccionista' => true, 'dependiente' => true, 'donimagen' => true, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => true, 'disperso' => false, 'mandon' => true, 'miedoconflictos' => false, 'impaciencia' => true, 'terquedad' => true, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => true, 'reservado' => false);
$trabajosdefecto['medico'] = $trabmedicodefecto;
$cuidador = array('arrojo' => 4, 'prevision' => 7, 'ideas' => 6, 'empatia' => 8, 'introspeccion' => 6, 'fuerzafisica' => 6, 'resisfisica' => 7, 'resumenabstraccion' => 3, 'estructuracion' => 4, 'analisis' => 4, 'amornaturaleza' => 4, 'sentidoestetica' => 5);
$trabajos['cuidador'] = $cuidador;
$trabcuidadordefecto = array('criticoperfeccionista' => false, 'dependiente' => true, 'donimagen' => false, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => true, 'disperso' => false, 'mandon' => true, 'miedoconflictos' => true, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => true, 'competitivo' => false, 'noconsidera' => true, 'reservado' => false);
$trabajosdefecto['cuidador'] = $trabcuidadordefecto;
$artesano = array('arrojo' => 5, 'prevision' => 6, 'ideas' => 6, 'empatia' => 3, 'introspeccion' => 3, 'fuerzafisica' => 6, 'resisfisica' => 7, 'resumenabstraccion' => 4, 'estructuracion' => 6, 'analisis' => 5, 'amornaturaleza' => 6, 'sentidoestetica' => 7);
$trabajos['artesano'] = $artesano;
$trabartesanodefecto = array('criticoperfeccionista' => true, 'dependiente' => false, 'donimagen' => false, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => false, 'disperso' => false, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' => true, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => true, 'noconsidera' => false, 'reservado' => false);
$trabajosdefecto['artesano'] = $trabartesanodefecto;
$obrero = array('arrojo' => 7, 'prevision' => 6, 'ideas' => 6, 'empatia' => 4, 'introspeccion' => 3, 'fuerzafisica' => 7, 'resisfisica' => 8, 'resumenabstraccion' => 6, 'estructuracion' => 4, 'analisis' => 6, 'amornaturaleza' => 5, 'sentidoestetica' => 4);
$trabajos['obrero'] = $obrero;
$trabobrerodefecto = array('criticoperfeccionista' => false, 'dependiente' => false, 'donimagen' => false, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => false, 'disperso' => true, 'mandon' => true, 'miedoconflictos' => false, 'impaciencia' => false, 'terquedad' => true, 'mieruidos' => true, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => true, 'competitivo' => true, 'noconsidera' => true, 'reservado' => false);
$trabajosdefecto['obrero'] = $trabobrerodefecto;
$operador = array('arrojo' => 6, 'prevision' => 6, 'ideas' => 4, 'empatia' => 4, 'introspeccion' => 3, 'fuerzafisica' => 5, 'resisfisica' => 7, 'resumenabstraccion' => 4, 'estructuracion' => 4, 'analisis' => 5, 'amornaturaleza' => 3, 'sentidoestetica' => 3);
$trabajos['operador'] = $operador;
$traboperadordefecto = array('criticoperfeccionista' => false, 'dependiente' => false, 'donimagen' => false, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => false, 'disperso' => true, 'mandon' => true, 'miedoconflictos' => false, 'impaciencia' => false, 'terquedad' => false, 'mieruidos' => true, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => true, 'competitivo' => false, 'noconsidera' => false, 'reservado' => false);
$trabajosdefecto['operador'] = $traboperadordefecto;
$psicologo = array('arrojo' => 5, 'prevision' => 5, 'ideas' => 6, 'empatia' => 8, 'introspeccion' => 8, 'fuerzafisica' => 3, 'resisfisica' => 3, 'resumenabstraccion' => 6, 'estructuracion' => 6, 'analisis' => 7, 'amornaturaleza' => 6, 'sentidoestetica' => 6);
$trabajos['psicologo'] = $psicologo;
$trabpsicologodefecto = array('criticoperfeccionista' => true, 'dependiente' => false, 'donimagen' => true, 'solitariointros' => false, 'excentrico' => false, 'desconfiado' => true, 'disperso' => false, 'mandon' => true, 'miedoconflictos' => true, 'impaciencia' => true, 'terquedad' => true, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => true, 'locuacidad' => true, 'competitivo' => false, 'noconsidera' => true, 'reservado' => false);
$trabajosdefecto['psicologo'] = $trabpsicologodefecto;

 // SOBRE LOS DEFECTOS DE ENEAGRAMA. SON 11. TENDREMOS UN ARRAY, SEGÚN EL NÚMERO DE ENEAGRAMA, LUEGO, LO "DESCARGAMOS" SOBRE $trabdefecto.
 $arrayeneagrama = array('criticoperfeccionista' => false, 'dependiente' => false, 'donimagen' => false,   'solitariointros' => false,  'excentrico' => false, 'desconfiado' => false, 'disperso' => false, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' =>  false, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => false, 'reservado' => false);
 if ($eneagrama == 1) {$arrayeneagrama["criticoperfeccionista"]=true; $arrayeneagrama["terquedad"]=true; $arrayeneagrama["miecambios"]=true; $arrayeneagrama["competitivo"]=true;};
 if ($eneagrama == 2) {$arrayeneagrama["dependiente"]=true; $arrayeneagrama["mieaventura"]=true;};
 if ($eneagrama == 3) {$arrayeneagrama["donimagen"]=true; $arrayeneagrama["competitivo"]=true; $arrayeneagrama["reservado"]=true;};
 if ($eneagrama == 4) {$arrayeneagrama["solitariointros"]=true; $arrayeneagrama["reservado"]=true;};
 if ($eneagrama == 5) {$arrayeneagrama["excentrico"]=true; $arrayeneagrama["competitivo"]=true;};
 if ($eneagrama == 6) {$arrayeneagrama["desconfiado"]=true; $arrayeneagrama["miecambios"]=true; $arrayeneagrama["reservado"]=true;};
 if ($eneagrama == 7) {$arrayeneagrama["disperso"]=true; $arrayeneagrama["impaciencia"]=true; $arrayeneagrama["locuacidad"]=true;};
 if ($eneagrama == 8) {$arrayeneagrama["mandon"]=true; $arrayeneagrama["impaciencia"]=true;  $arrayeneagrama["competitivo"]=true; $arrayeneagrama["noconsidera"]=true;};
 if ($eneagrama == 9) {$arrayeneagrama["miedoconflictos"]=true; $arrayeneagrama["reservado"]=true;};
 $arrayzodiaco = array('criticoperfeccionista' => false, 'dependiente' => false, 'donimagen' => false,   'solitariointros' => false,  'excentrico' => false, 'desconfiado' => false, 'disperso' => false, 'mandon' => false, 'miedoconflictos' => false, 'impaciencia' =>  false, 'terquedad' => false, 'mieruidos' => false, 'mieaventura' => false, 'miecambios' => false, 'locuacidad' => false, 'competitivo' => false, 'noconsidera' => false, 'reservado' => false);
 if ($zodiaco == 1) {$arrayzodiaco["impaciencia"] = true; $arrayzodiaco["terquedad"] = true; $arrayzodiaco["donimagen"] = true; $arrayzodiaco["mandon"] = true; $arrayzodiaco["competitivo"]=true; $arrayzodiaco["noconsidera"]=true;}
 if ($zodiaco == 2) {$arrayzodiaco["terquedad"] = true; $arrayzodiaco["miedoconflictos"] = true; $arrayzodiaco["miecambios"]=true; $arrayzodiaco["reservado"]=true;}
 if ($zodiaco == 3) {$arrayzodiaco["impaciencia"] = true; $arrayzodiaco["donimagen"] = true; $arrayzodiaco["disperso"] = true; $arrayzodiaco["locuacidad"]=true;}
 if ($zodiaco == 4) {$arrayzodiaco["impaciencia"] = true; $arrayzodiaco["dependiente"] = true; $arrayzodiaco["miecambios"]=true; $arrayzodiaco["competitivo"]=true;}
 if ($zodiaco == 5) {$arrayzodiaco["impaciencia"] = true; $arrayzodiaco["donimagen"] = true; $arrayzodiaco["miedoconflictos"] = true; $arrayzodiaco["miecambios"]=true; $arrayzodiaco["locuacidad"]=true; $arrayzodiaco["competitivo"]=true;}
 if ($zodiaco == 6) {$arrayzodiaco["terquedad"] = true; $arrayzodiaco["criticoperfeccionista"] = true; $arrayzodiaco["desconfiado"] = true; $arrayzodiaco["miecambios"]=true; $arrayzodiaco["competitivo"]=true; $arrayzodiaco["reservado"]=true;}
 if ($zodiaco == 7) {$arrayzodiaco["impaciencia"] = true; $arrayzodiaco["donimagen"] = true; $arrayzodiaco["miecambios"]=true; $arrayzodiaco["locuacidad"]=true; $arrayzodiaco["reservado"]=true;}
 if ($zodiaco == 8) {$arrayzodiaco["impaciencia"] = true; $arrayzodiaco["desconfiado"] = true; $arrayzodiaco["reservado"]=true;}
 if ($zodiaco == 9) {$arrayzodiaco["impaciencia"] = true; $arrayzodiaco["donimagen"] = true; $arrayzodiaco["mandon"] = true; $arrayzodiaco["locuacidad"]=true; $arrayzodiaco["competitivo"]=true;}
 if ($zodiaco == 10) {$arrayzodiaco["terquedad"] = true; $arrayzodiaco["desconfiado"] = true; $arrayzodiaco["miecambios"]=true; $arrayzodiaco["reservado"]=true;}
 if ($zodiaco == 11) {$arrayzodiaco["impaciencia"] = true; $arrayzodiaco["excentrico"] = true; $arrayzodiaco["locuacidad"]=true;}
 if ($zodiaco == 12) {$arrayzodiaco["impaciencia"] = true; $arrayzodiaco["miedoconflictos"] = true;}
 if ($zodiaco == 0) {Foreach ($arrayzodiaco as $clave => $valor) $arrayzodiaco["$clave"] = true;};

 suma($trabdefecto, $arrayeneagrama);
 suma($trabdefecto, $arrayzodiaco); 
 $arraynacimiento = $arrayeneagrama;
 suma($arraynacimiento, $arrayzodiaco);

 echo '</BR>';
 Foreach ($trabdefecto as $clavetrab => $valortrab)
  echo "#_valor $clavetrab: $valortrab ";
 
 echo ' -------</BR>';
 $num_cualidades = 12;
 Foreach ($trabajos as $clavetrab => $valortrab)
 {
  echo '###'.$clavetrab.'### ';
  $nota = 10;

  $restando = 0; // inicializando tratamiento.
  Foreach ($valortrab as $clave => $valor)
  {
   $restando = $restando + calcular_resto($trab["$clave"], $valor);
  }
  $nota = $nota - ($restando * 5) / $num_cualidades;
  echo $nota.' ';
 
  //Fase de suma por "exceso" de cualidades frente a las exigidas
  $sumando = 0; // inicializando tratamiento.
  Foreach ($valortrab as $clave => $valor)
  {
   $diferencia = $trab["$clave"] - $valor;
   if ($diferencia > 0)
   {
    // Si te pasas mucho, tal vez no debería sumar toda la diferencia.
    $asumar = $diferencia / $trab["$clave"]; // $valor podría ser 0. Y además, es mejor dividir por el mayor.
    if ($asumar > 0.2) $asumar = 0.2; // Si nos pasamos mucho, hay parte del exceso que no interesa.
    $sumando += $asumar;
   }
  }
  $nota = $nota + $sumando / $num_cualidades;
  if ($nota > 10) $nota = 10; // Llegó a 10.2
  echo $nota.' ';

  //Fase de resta a partir del array de defectos
  $restando = 0;
  $numdefectostrabajo = 0;
  $mitrabajo = $trabajosdefecto["$clavetrab"]; // Para no meter en el Foreach algo que podría "atragantarlo".
  Foreach ($mitrabajo as $clave => $valor)
  {
   if ($valor == true)
   { 
    $numdefectostrabajo++;
    $midefecto = $trabdefecto["$clave"];
    if ($midefecto === $valor) // Para un novato como yo, esto fue difícil de decidir, ni lo barajaba.
    {
     echo $midefecto.$valor.'?'.' _'."$clave ";
     // En la nueva versión, aplicamos desrepresion a restando, sólo si hay true en arraynacimiento
     // y false en $arrayseleccion (podría bastar con esto último).
     if ($arrayeleccion["$clave"] == false)
      $restando += desrepresion($represion, 1);
       else $restando++;
    }
   }
  }
  // Se divide por el número de "trues" del trabajo actual. Si se dividiese
  // por el número de defectos (trues + falses), sería demasiado poco a restar.
  if ($numdefectostrabajo > 0)
   $nota = $nota - ((5 * $restando) / $numdefectostrabajo);
  echo $nota.' ';

  // Falta la nota comparada (multiplicas por la suma de cualidades exigidas).
  // A más cualidades exigidas, menor nota, y así, compensas algo de alguna forma.
  // NO es muy científico, podría mejorarse.
  $suma_cualidades = 0;
  Foreach ($valortrab as $clave => $valor)
   $suma_cualidades += $valor;
  $nota += (9 * $numdefectostrabajo) / 18;
  $nota = $nota * (5*$num_cualidades + ($suma_cualidades-5*$num_cualidades) / 2);
  echo 'Comparada (función dificultad): '.$nota.'</BR>';
 }
} 
?>

<?php
function dar_valor_a_numero(&$n)
{
 //if (!is_numeric($n)) $n = 5;
  //else if ( ($n > 10) OR ($n < 0) ) $n = 5;
 if ( (!is_numeric($n)) OR (intval($n) < $n) OR ($n > 10) OR ($n <0) ) // En cuanto ve que no es numérico, no sigue (son todo ORs)
  $n = 5;
 return $n;
}
?>

<?php
function calcular_resto($personal, $exigido)
{
 $devolver = 0;
 if ($personal < $exigido)
  $devolver = ($exigido - $personal) / $exigido;
 return $devolver;
}
?>

<?php
function suma(&$array1, $array2)
{
 // Se funden el array de defectos de Zodiaco ($array1) con el de defectos por eneagrama. Se modifica $array1.
 // si en $array2 hay un true, se pasa a $array1.
 Foreach ($array1 as $clavetrab => $valortrab)
  if ($array2[$clavetrab] == 1)
   $array1[$clavetrab] = true;
}
?>

<?php
function desrepresion($nr, $f)
{
 // Rebajas un número a restar de la nota, según el nivel de represión.
 // Si has desreprimido bien (psique limpia, nr = 1, o pequeño), sale pequeño.
 return $f * $nr / 10; // con nr = 10, se queda como está
}
?>