<?php
if ( (!isset($_GET["ancho"])) || (!isset($_GET["alto"])) )
{ 
 //Creo que era + fácil con ASP y C#.
 $cadenona=$_SERVER['PHP_SELF'];
 ?>
 <script type="text/javascript">
  var jsVar = "<?php echo $cadenona; ?>";
  document.write(jsVar);
  window.location.href = jsVar + "?alto=" + screen.height + "&ancho=" + screen.width;
  //window.location.assign(jsVar + "?alto=" + screen.height + "&ancho=" + screen.width);  
 </script>
<?php
}
else
{
 $mihor=1366;
 $miver=768;
 $hor=$_GET["ancho"];
 $ver=$_GET["alto"];
 $multiplicador=$hor/$mihor;
 if ($multiplicador > $ver/$miver)
  $multiplicador=$ver/$miver;
 if ( (!isset($_GET["estado"])) || ($_GET["estado"] == "principal") )
  principal($multiplicador);
 if (isset($_GET["estado"]))
 {
  if ($_GET["estado"] == "cancer")
   cancer($multiplicador);
  if ($_GET["estado"] == "resto")
   resto($multiplicador);
  if ($_GET["estado"] == "tipos")
   tipos($multiplicador);
 }
}

function cancer($multiplicador)
{
 echo "CÁNCER";
 $tamanio3=intval(40*$multiplicador);
 if ($tamanio3 < 28) $tamanio3 = 28;
 $cadenatipos=$_SERVER['PHP_SELF']."?estado=tipos&anterior=cancer&ancho=".$_GET["ancho"]."&alto=".$_GET["alto"];
 ?>
 <FORM ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD=GET>
 <INPUT TYPE=hidden NAME="estado" VALUE= "principal">
 <INPUT TYPE=hidden NAME="ancho" VALUE= <?php echo ($_GET["ancho"]); ?> >
 <INPUT TYPE=hidden NAME="alto" VALUE= <?php echo ($_GET["alto"]); ?> >
 <a href="<?php echo $cadenatipos; ?>">TIPOS DE TRAUMA.</a><BR>
 <BR>##CÁNCER DE PRÓSTATA (tallo cerebral): conflicto relacionado con la procreación...:
<BR>- Causas posibles:
<BR>* Una hija lleva a su padre a juicio por un tema de herencias.
<BR>* Un esposo encuentra a su pareja en la cama con un amante.
<BR>- En paralelo al tumor, crecen las "cirujanas" bacterias (si se puede). El paciente no siente dolor u otra incomodidad aparte de síntomas como pérdidas de sueño, de apetito o de peso. La excepción, si el tumor presiona en la uretra, causando una disminución del flujo de orina... El cáncer de próstata tampoco es doloroso durante la fase de curación.
<BR>* En la fase de curación la orina se hace turbia y olorosa. Se podría requerir de una sonda para orinar.
<BR>* La eyaculación vuelve poco a poco a niveles anteriores. Creo que si no se echan venenos al organismo (medicación, hamburguesas...) no faltarán las bacterias, nuestras amigas.
<BR>##Cáncer bronquial (ulceración): miedo en el territorio (sólo puede ser experimentado por hombres o mujeres posmenopáusicas o zurdas jóvenes por conflicto femenino de susto-miedo; ¿y si se toman anticonceptivos?).
<BR>- Problema motor o sensorial. El miedo territorial sensorial se manifiesta durante la fase de curación como neumonía y como una lisis neumónica en la crisis epileptoide.
<BR>- El asma involucra a la musculatura bronquial, la cual responde a un conflicto de miedo territorial motor, por ejemplo, no ser capaz de moverse o maniobrar. ¿Habalmos aquí de cáncer o no?
<BR>##Cáncer de pulmón: susto de muerte. Se descompone en la fase de curación por mico bacterias como las tuberculares (sólo si están presentes), se caseifica (caseína) y es expectorado en la tos. Todo lo que queda son cavernas (agujeros).
<BR>- Ejemplo: familiar que se ha accidentado (o una mascota).
<BR>- Los nódulos pulmonares son diagnosticados cada vez más como cáncer pulmonar (bien), y menos como tuberculosis.
<BR>- Los nuevos cánceres por susto son llamados "metástasis", principalmente causadas por diagnósticos / pronósticos del doctor, que actúa como un televisor con malas noticias. Por otra parte, una célula cancerígena no viaja por el torrente sanguíneo para ser parte de otro cáncer.
<BR>##Carcinoma pleural (cerebelo):
<BR>- Muy a menudo, los pacientes experimentan un SIMPLE DIAGNÓSTICO (no significa que lo tengas) de "cáncer de mama" o uno de "cáncer de pulmón" como "un conflicto en contra del área del tórax", y como resultado desarrollan un cáncer de pleura.
<BR>* El diagnóstico de "carcinoma pleural" muy probablemente dispara un nuevo choque, por ejemplo, un conflicto de miedo al cáncer o un conflicto de miedo frontal, el cual causa ulceración en los conductos faríngeos.
<BR>- En la fase de curación, la mucosa epitelial escamosa en el área ulcerada, se inflama, y se forman los quistes llenos de fluido seroso. La medicina convencional llama a esto erróneamente un "linfoma".
<BR>- Muchos pacientes morirán por meterles miedo el médico, y por la terapia.
<BR>##Cáncer en sistema digestivo (tallo cerebral):
<BR>- NO podemos ingerir, tragar, digerir o eliminar un BOCADO (perdimos algo valioso...).
<BR>* Enojo indigesto desagradable (colon) o conflicto de suciedad o porquería desagradable o innoble (recto) o conflicto de suciedad o porquería asqueroso o mal intencionado (sigmoides). Si crees que has ganado la lotería pero al final no, el tumor estaría en el paladar: sentir "que te arrancan un bocado".
<BR>- Carcinoma peritoneal (mesodermo, es unaa excepción):
<BR>* En el momento de un diagnóstico CUALQUIERA: un ataque mental en contra de el abdomen que esta a punto de ser cortado por dentro (carcinoma peritoneal); ¿y siempre un carcinoma hepático derecho dorsal?: miedo biológico de que debido al tumor, la comida no pueda pasar más por el intestino (miedo arcaico a morir de hambre).
<BR>* Si pasa algún tiempo entre el diagnóstico y la operación, el cirujano usualmente encuentra "metástasis" (falsa) en el peritoneo.
<BR>- Cancer del intestino delgado:
<BR>* Conflicto: incapacidad de digerir el bocado o de bocado indigesto.
<BR>* La fase de curación del cáncer del íleon, durante la cual son expulsadas membrana mucosa y sangre con los excrementos, es también conocida como enfermedad de Crohn.
<BR>- Molestia rectal (incluye tumor palpable pero no visible):
<BR>* Cuando el tumor subyacente a la mucosa rectal se va, aparece un absceso submucoso. Un buen número de tales abscesos son rutinariamente considerados como "hemorroides". Hemorroides (en general): no saber qué posición ocupar en un grupo, no saber qué decisión o resolución tomar (conflicto de indecisión), no saber adónde ir.
<BR>##El de mama (de eso murió mi madre, exceso de procupación por sus niños; pero no somos asesinos mi mellizo y yo; ¿y sueños rotos y falta de amor?):
<BR>- La Nueva Medicina Germánica reconoce dos tipos: carcinoma mamario adenoide, perceptible como un sólido abultamiento compacto (mesodermo); y cáncer del conducto galactóforo (ectodermo), el cual no es perceptible durante la fase activa: la mujer podrá percibir solamente una ligera sensación de ¿calambre? (jaloneo) en el área afectada; adicionalmente, la piel exterior de la mama puede desarrollar neurodermatitis (separación de piel).
<BR>* Una mujer puede considerar a los niños pequeños o animales como "sus hijos". Si una mujer diestra desarrolla cáncer de la glándula mamaria en su seno izquierdo, es hijo, madre o nido (pelea o preocupación). Si hay ulceración del conducto galactóforo, ella esta en conflicto activo de separación de su hijo, madre o nido. El derecho eran amigos, jefes... Y se invierte (* -1) con las zurdas y las postmenopáusicas (creo).
<BR>* El problema de los médicos es que piensan que todo lo que hagan los microbios es malo, así que en fase de curación pueden hacer atrocidades con la paciente.
<BR>- Cáncer glandular mamario (mesodermo):
<BR>* El propósito biológico de incrementar tejido glandular mamario adicional (por preocupación por los hijos...) es asistir a los bebés al proveer más leche maternal que antes. Pasa también con los no lactantes.
<BR>- Cáncer de mama intraductal:
<BR>* Una vez que el conflicto de separación es resuelto, el bebé succionará con normalidad la mama seca (estará seca). La secreción de la herida a menudo no tiene salida y entonces, la mama se torna caliente, roja brillante, y aumenta de volumen rápidamente (hablamos del inicio de la fase de curación).
<BR>* La sensibilidad regresa después, a veces casi de forma excesiva (hipersensibilidad o hiperestesia).
<BR>- Se debería operar un cáncer de mama solo si pareciera aconsejable: ¿cuando una mujer se siente desfigurada debido al abultamiento? Cuando se desarrolla un melanoma. Cuando la capa de epitelio estalla...
ta?
<BR>##Tengo muchísimo más, pero ahora, con esto basta.<BR>
 <INPUT TYPE=submit VALUE="VOLVER" style="font-size:<?php echo $tamanio3; ?>px; position: absolute; left: 40%">
 </FORM>
 <?php
}

function resto($multiplicador)
{
 echo "RESTO";
 $tamanio3=intval(40*$multiplicador);
 if ($tamanio3 < 28) $tamanio3 = 28;
 $cadenatipos=$_SERVER['PHP_SELF']."?estado=tipos&anterior=cancer&ancho=".$_GET["ancho"]."&alto=".$_GET["alto"];
 ?>
 <FORM ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD=GET>
 <INPUT TYPE=hidden NAME="estado" VALUE= "principal">
 <INPUT TYPE=hidden NAME="ancho" VALUE= <?php echo ($_GET["ancho"]); ?> >
 <INPUT TYPE=hidden NAME="alto" VALUE= <?php echo ($_GET["alto"]); ?> >
 <a href="<?php echo $cadenatipos; ?>">TIPOS DE TRAUMA.</a><BR>
 <BR>##Ejemplos (relación psique / trauma y enfermedad; no olvidemos que el tumorcillo benigno del cerebro, impide que por ahí vayan los mensajes sinápticos):
<BR>- Dolor de cabeza:
<BR>* Por hipoglucemia en fase de curación, resistencia ("no puede ser verdad"...), miedo, repugnancia...
<BR>* + fresco, - sol, glucosa (por la noche...). Poca sal (retener agua es malo). Substancias simpaticotónicas / activadoras / "masculinizadoras" (vitamina C...). Con mucho dolor o fiebre: duchas frío-calor (o frías), especias picantes (aunque afecte un poco a la vista lo picante)...
<BR>* Migraña / dolor de cabeza "serio". El trauma depende de si eres o no diestro: impotencia o miedo frontal.
<BR>- Autismo (¿lo he definido sólo para los diestros?): conflicto de pánico o no poder hablar y enojo territorial. 2 posibles estados / tonos:
<BR>* Tono depresivo: meditativo, mirada apática al vacío... Con esta gente podría yo llevarme bien.
<BR>* Maniático: dinamismo, puede sumergirse mucho en el trabajo y criticar sin sentido.
<BR>- Meningitis: desvalorización moral o intelectual, ¿no te ves bondadoso o capaz?
<BR>* O por desfiguración (ser herido o sentirse atacado, ¿todo eso incluye al final?)
<BR>* Aparece también con el trigémino (ahora lo vemos), y en fases de curación.
<BR>- Nervio trigémino (ridículo), 3 posibles trastornos (alguno se relaciona con la parálisis):
<BR>1. Por no ser tomado en serio... Baños de pies calientes (como en 3; ridículo con familia, amigos, compis...).
<BR>2. Alguien recibe "bofetada" o golpea en la cara. El frío y el entumecimiento hacen olvidar el ridículo.
<BR>- Confusión, Alzheimer, acumulación compulsiva: conflictos de presa (no aceptar...).
<BR>* Alzheimer (y la demenia en general) puede ser también por separación (pobres abuelos en los geriátricos).
<BR>- Postmortal: pensar mucho en después de morir, piensas que estás de más en el mundo 3D, contactas con fallecidos, tienes buena conexión con animales... Pérdida territorial "sexual".
<BR>- Verborrea (políticos...): identidad (¿quién soy? ¿Miro dentro en serio por una vez?) + miedo territorial.
<BR>- Megalomanía: conflictos de desvalorización.
<BR>- Agorafobia / claustrofocia, mojar cama (problemas de demarcación territorial).
<BR>- Más: iluminado / gurú; Comportamiento antisocial / quieres soledad (no antisociable) o demasiado social; ninfomanía y Casanova.
<BR>-¡Hasta la homosexualidad suele tener un origen en traumas (muerte de un ser querido cuando eres pequeño y hombre; frustración sexual si eres mujer; tal vez algo de identidad posterior...)! Y una humillación constante y una minusvaloración de su virilidad, hace que el hombre se feminice y, ulteriormente, desarrolle fobia por las mujeres.
<BR>- Epilepsia ACTIVA: no poder moverse o seguir a los demás (al hablar...). Epilepsia en fase de curación: cuando te desmayas... Por supuesto, en la fase de curación crítica. ¿Y si no te importa que la gente hable rápido y sin consideración? ¿Y si no te ves inferior ante esta gente con poca inteligencia integral (suelen tener poca)?
<BR>- "Voy lento" lleva al hipertiroidismo, ¿y "he sido lento", al hipotiroidismo? Más cosas que engordan:
<BR>* Te paras cuando te das cuenta de que el camino es el equivocado.
<BR>* NO hay sensación de saciedad (hígado) por miedo a morir de hambre de niño.
<BR>* Te sientes mal con algunas partes de tu cuerpo, y engordas. ¡Entonces te sentirás peor digo yo! ¡Ciclo!
<BR>* Materialismo (principal causa de engordar): tienes miedo a ganar menos el año que viene... Separa las cosas que te dicen algo de las que no. Puedes tener muchas cosas, pero has de aprender a estar satisfecho con pocas. ¡Seremos una sociedad de verdad en poco, no tengas miedo!
<BR>- Cansancio crónico: puede venir de victimizarse: agradece, por favor, agradece. Cuando te quejes, mira en tu interior, no luches hacia afuera. Imagina un futuro bonito.
<BR>- Embarazo: madre dice "me siento sola": el niño podría sentirse solo tras nacer. Más prenatal:
<BR>* Si dices al marido "no te enteras", el feto podría pensar que es para él (desvalorización).
<BR>* Madre se autoengaña, y niño no quiere aprender, leer o escribir.
<BR>* Miedo a parto - miedo a examen.
<BR>* Madre da puñetazos si su feto está inmóvil (no está tan loca, perdió a un niño, que dejó de moverse, lo que hacemos todos al morir): el niño sale hiperactivo (o me muevo, o me muero).
<BR>* Cesárea: mensaje de "dependo de ayuda externa".
<BR>- Mala conciencia: SBS (programa físico) de hombro.
<BR>- Ansiedad anticipativa (terminarlo todo ya...), ¿qué querías que terminase de pequeño es una buena pregunta?
<BR>- ¿Miedo territorial incluye "creer que no están tratándote según tu valía profesional"?
<BR>- Tu hijo no cumple tus ambiciones, ¿te desvalorizas (huesos) y tienes anemia (los huesos planos producen mucha sangre)?
<BR>- Un hombre dejó de fijar fechas (agenda completa), y mejoró.
<BR>- Si te alimentas mal, ¿es por desvalorización? ¿Y por una mala defensa territorial? ¡Mi cuerpo es mi templo, yo no caigo en trampas de maltratarme, me respeto (no he dicho "me quiero", que el "me quiero" lleva mucha desrepresión)!
<BR>- Alzheimer: un conflicto de separación en cada hemisferio. ¿A que guarda relación con los geriátricos? ¿Qué es lo primero, el geriátrico, o el Alzheimer? Bueno, también está la carencia de vitamina B12, y más cosillas (un no aceptar, negarse a ver la realidad, por ejemplo, la maldad de las élites a fecha de 2.023...).
<BR>##Ojos (recuperar mirada curiosa del niño):
<BR>- Belleza: en un azulejo... NO busques paisajes idílicos.
<BR>- ¿Borrosa por estrés?
<BR>- Sensibilidad a la luz: no me deshago de algo, demando atención adecuada a "mi destreza"...
<BR>- Escuela, trabajo... vuelven la mirada rutinaria / tiesa. ¿Que no te maravillas de nada? Hasta 1850 (año paio ya), las gafas eran muy mal consideradas (atrofian).
<BR>- Enfermedades comunes:
<BR>* Miopía (asustadizos, expectantes... Contrario a Hipermetropía, por así decirlo): me gustaría tenerte en mi rango visual. O miedo a ver algo en la lejanía (¿incluye tiempo?). O separación visual (de algo...) fuerte.
<BR>* Presbicia: miedo al futuro (crisis 40...). ¿Tendré sustento en la vejez? ¿Mi puesto es seguro?
<BR>* Astigmatismo: al ver borroso, estás protegido de la realidad y las decepciones (tu pensabas que tu padre era militar, y lo ves un día en el hospital haciendo su diálisis DIARIA y...). Algo cercano da miedo, y no quiero detalles. Quiero librarme al instante de gente ofensiva, o esconder algo (sexualidad...). Rechazo a acomodarme. Ira y miedo en la juventud. Decepcionado con los demás, creo que sólo puedo contar conmigo, ¿falta de confianza?
<BR>- Dejar de ser tan corto de vista. Procastinar (te hace corto de vista): miedo a fracasar (o tener éxito), al juicio ajeno, al cambio, a lo desconocido. ¿Ansiedad o frustración asociadas? ¿Psicología Energética Cuántica pa limpiar mi parte sutil? ¿Cómo hago para vivirlo todo con menos intensidad escorpiana, y así ver mejor de lejos? Estar tranquilo, muchas veces depende de quererse. LA PRISA TE LA METE LA ESCUELA, Y CLARO, TE AYUDA A DEJARLO TODO PARA EL ÚLTIMO MOMENTO (SER CORTO DE VISTA).
<BR>- ¿Oír mal (por calor, "espiritualidad"...) puede afectar a la vista?
<BR>##Tengo muchísimo más, pero ahora, con esto basta.<BR>
 <INPUT TYPE=submit VALUE="VOLVER" style="font-size:<?php echo $tamanio3; ?>px; position: absolute; left: 40%">
 </FORM>
 <?php
}
?>

<?php
function tipos($multiplicador)
{
 echo "TIPOS";
 $tamanio3=intval(40*$multiplicador);
 if ($tamanio3 < 28) $tamanio3 = 28;
 ?>
 <FORM ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD=GET>
 <INPUT TYPE=hidden NAME="estado" VALUE= <?php echo ($_GET["anterior"]); ?> >
 <INPUT TYPE=hidden NAME="ancho" VALUE= <?php echo ($_GET["ancho"]); ?> >
 <INPUT TYPE=hidden NAME="alto" VALUE= <?php echo ($_GET["alto"]); ?> > 
 <BR>- El saber popular relaciona psique y cuerpo:
<BR>* Susto de muerte (tipo de trauma de pánico, laringe). El "pánico en la nuca" es a examen próximo, operación próxima, perder el trabajo... ¿El miedo territorial (tipo de trauma) es a que te quiten algo que ya tienes? ¿Se puede considerar pánico?
<BR>* Tengo las manos atadas (el trauma correspondiente afecta a los conductos tiroideos).
<BR>- LO MÁS RARO. Un ejemplillo de Transgenealogía (problemas psicológicos de los ancestros por resolver, y que puedes heredar; la gente más avanzada suele tener más de estos) que contiene uno de NMGHamer:
<BR>* Tuve un toc de decoración (y sigo teniendo un poco). ¿Por qué? Suele dedicarse a la decoración, quien tuvo un ancestro que no se veía bello (problema sin resolver).
<BR>* ¿Cómo llegué al TOC fuerte (ya me había dao suave, quizás a causa de mi pseudoepilepsia; mi mente puede ir muy rápido, y el cerebro "se desajusta", cansándome antes)? Son 2 traumas quizás, y en ese caso, yo diría que uno tiene que ver con que mi padre me pintara la habitación sin permiso (¿algo territorial?), y teniendo un trabajo de Matemáticas y otro de Java con Oracle que entregar.
<BR>* Nos faltaría incluir a Carl Jung (desreprimir creencias ocultas en el inconsciente "durante el viaje"...).
<BR>- Ahora bien, ¿de qué se ocupa la Nueva Medicina Germánica (Hamer)? Lo que no viene de la psique, sino de comer mucho... se llama desequilibrios; créeme, engordar tiene mucho más que ver con la psique y sus traumas, y de esto trata la NMGHamer.
<BR>* La enfermedad tiene 2 fases, una activa (realmente no hay muchos síntomas por lo general), y otra de curación (con más hambre de lo habitual), cuando reconstruyes la escena del trauma y sabes el origen psicológico. Las alergias son muchísimas veces pistas para reconstruir la escena (algunas son estacionales, por lo que te ves "despistado" el resto del año). 
<BR>- Ejemplo para saber algunos tipos de trauma. Un hombre pierde a su mujer (camión choca contra el coche de ella). El conflicto será pequeño si no la quería. Si la quería, lo normal es una fase activa con programa físico de testículos (programa especial; recibes + testosterona para encontrar amigos... ¿Ni tumor ni úlcera?). Pero puede haber otros tipos de conflicto / trauma:
<BR>* No acepta / "no puede ser verdad" (trauma de miedo y resistencia, diabetes).
<BR>* No para de imaginarse el choque (miedo frontal, arco braquial).
<BR>* Si la mujer era su autoestima (dependía de ella): desvalorización, problema lumbar en este caso de desvalorización, ¿menos densidad ósea?. La epilepsia está en la cura de un conflicto motor (desvalorización), que no es el caso concreto.
<BR>* Su mujer era parte de él (pérdida de territorio, angina de pecho).
<BR>##Más:
<BR>- Niño que odia la asignatura de Inglés, porque su abuelo (Transgenealogía) odiaba a los ingleses.
<BR>- ¿El TOC también surge de la ampliación de los pensamientos intrusivos del final de la fase activa?
<BR>- El teatro es bueno tanto para traumas (salud) como para represiones (leyes no soportadas; maldad genuina, pues te hacen incoherente). El primer acto muestra la debilidad, y en el segundo se arregla todo (eso sí, a veces tardas mucho, tiene que ser así).
<BR>##Tengo muchísimo más, pero ahora, con esto basta.<BR>
<BR>
<H3 style="color: green;">
<BR>GENTE POCO SANA, BESTIARIO HUMANO:
<BR>- Bestiario humano 01 me parece muy bien que tengas mucha energía para hacer cosas pero que esas cosas sean esencialistas y por favor no me metas en tu vorágine de energía loca molestas ignorantín.
<BR>- Bestiario humano 02 infeliz vecina habla de los demás y quiere dar consejos Porque teme meterse en su propio interior Usted hace lo que la gente normal por miedo a diferir si los demás se tiran al río etc Cúrese no humille.
<BR>- Bestiario humano 03 tú que has crecido maldiciendo lo femenino en ti pues tu cadera era más ancha que tus hombros alégrate porque la imagen es cosa de sociedades ignorantes y apénate por haberte adaptado robot áspero creído.
<BR>- Bestiario humano 04 tú simpátiquín o hablas llorando denuncias a tus colegas pero trataste de maltratarlos psicológicamente A ver quién te aguanta sin inteligencia emocional el mal está en cada psique Imagen es mortalidad.
<H3>
 <INPUT TYPE=submit VALUE="VOLVER" style="font-size:<?php echo $tamanio3; ?>px; position: absolute; left: 40%">
 </FORM>
<?php
}
?>

<?php
function principal($multiplicador)
{
 $tamanio1=intval(32*$multiplicador);
 $tamanio2=intval(20*$multiplicador);
 $tamanio3=intval(40*$multiplicador);
 if ($tamanio1 < 24) $tamanio1 = 24;
 if ($tamanio2 < 18) $tamanio2 = 18;
 if ($tamanio3 < 28) $tamanio3 = 28;

 $cadenatipos=$_SERVER['PHP_SELF']."?estado=tipos&anterior=principal&ancho=".$_GET["ancho"]."&alto=".$_GET["alto"];
?>
<body style="background-color:#AAFFAA;">
<TITLE>NMGHamerPURAMedicina</TITLE>
<H2 style="font-family:'Courier New'; font-size:<?php echo $tamanio1 ?>px"> NUEVA MEDICINA GERMÁNICA, LA BASE DE LA MEDICINA SON LAS TUPLAS (TRAUMA, TUMOR DE HAMER EN CEREBRO, ÓRGANO).</H2>
<div style="color: blue; font-size:<?php echo $tamanio2 ?>px">
 <p
  <span>Pregunta:</span>
  <span style="color: red;"> ¿Cuantos médicos saben que al dar la noticia de un cáncer pueden disparar otro por impacto? Se ve haciendo un tac, hay un FOCO nuevo en el cerebro. Los síntomas son en fase de curación, por eso la gripe no se cura, ¡es la cura, y los medicamentos sólo la retrasan, la mayoría son "anticura" y "proactividad"! Cuidado con los mensajes a los pacientes.</span>
 </p>
 <fieldset style="color: black;">
 Nota: mientras que en fase de enfermedad hay actividad y más frío, en la de curación ocurre lo contrario, salvo en la subfase de curación crítica, que es muy rara (puede durar hasta unas 72 horas, dependiendo de la gravedad del trauma PSICOLÓGICO, y aquí es donde intervienen médicos y enfermeros), encuadrada entre la primera fase de dolor, y la tercera de expulsión de tóxicos.
</fieldset>
</div>
<a href="<?php echo $cadenatipos; ?>">TIPOS DE TRAUMA Y GENTE POCO SANA.</a>
<FORM ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD=GET>
 <INPUT TYPE=hidden NAME="estado" VALUE="cancer">
 <INPUT TYPE=hidden NAME="ancho" VALUE= <?php echo ($_GET["ancho"]); ?> >
 <INPUT TYPE=hidden NAME="alto" VALUE= <?php echo ($_GET["alto"]); ?> >
 <INPUT TYPE=submit VALUE="CÁNCER" style="font-size:<?php echo $tamanio3 ?>px; position: absolute; top: 65%; left: 40%"> 
</FORM>
<FORM ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD=GET>
 <INPUT TYPE=hidden NAME="estado" VALUE="resto">
 <INPUT TYPE=hidden NAME="ancho" VALUE= <?php echo ($_GET["ancho"]); ?> >
 <INPUT TYPE=hidden NAME="alto" VALUE= <?php echo ($_GET["alto"]); ?> >
 <INPUT TYPE=submit VALUE="RESTO" style="font-size:<?php echo $tamanio3 ?>px; position: absolute; top: 80%;left: 40%">
<H3 style = "position: absolute; top: 90%">
<BR>Para dormir, lo primero es equilibrar parte masculina y femenina (al menos, si estás muy activo / masculino). ¿Y simplemente potenciar la femenina, diciendo "eeeee", pensando en el corazón...?
<BR>##Equilibrando:
<BR>- Un suspiro.
<BR>- 3 x espirar por la nariz, pero "ronco y hasta el estómago".
<BR>- 3 suspiros
<BR>- 2 x soltar una bocanada por la boca.
<BR>- "Ladrar", poniéndose hacia delante, yendo un poco a los lados (al final, a los lados en posición no adelantada).
<BR>- Nadi Shódena:
<BR>* Tapar agujero izquierdo nariz mientras se espira por ese mismo agujero tapado.
<BR>* Cambiando de agujero tapado (oríamos primero al derecho), espirar e inspirar (lo último). Acabamos en el izquierdo al contar 12. Informáticamente: Repetir {cambio de agujero y tapo, sumo uno al contador, espiro e inspiro} hasta que contador = 11. Cambio al izquierdo, y sólo espiro.
<BR>##Primera táctica de cuatro, para dormir:
<BR>- Inspiro y espiro por la boca, como si estuviese "silbando" (abrir poco), o enfriando un plato sopa.
<BR>- 3 x 4 segundos inspirar, 7 retener, y 8 expulsar con la boca como antes.
<BR>##Segunda táctica: masajea los mofletes en círculos, primero en un sentido, luego en otro. ¿Has bostezado ya?
<BR>##Tercera: 2 x di para ti mientras visualizas "por la médula espinal y la espina dorsal (espalda)... no puedo más", y saca la lengua al final de la primera vez y no la metas, y las manos, caídas. 2 veces.
<BR>##Vamos con la última táctica (ojo, uno no se duerme inmediatamente, puedes aprovechar pa... echar un Black Tiger je je):
<BR>* Fase 1: desde la lengua hay energía que sube por la cara y va por detrás de la cabeza, y energía que va hacia el cuello. Ambas van hasta las manos, por los brazos. ¿Con 8 respiraciones de nariz basta? Es una simplificación de un método militar.
<BR>* Fase 2: ahora van a los pies (olvídate un poco de los brazos? ¿Con 6 basta?
<BR>* Fase 3: repetir desde el equilibrado, o tratar de relajarse por otros métodos...
<BR>####
<BR>- Quitar el estrés de un plumazo (por la tarde), parte 1.
<BR>1. Respirar por la nariz y llevar la espiración hasta el estómago (4 veces).
<BR>2. Esto es para los varones, que tienen mucha energía en el estómago: cantar como Louis Armstrong: es como gruñir mientras llevas el gruñido al espirar, del ombligo hasta más adentro (cuidao, que deja a uno un poco ronco). Prueba con una L hacia dentro (3 repeticiones; recomiendo 2 descansos).
<BR>3. Suspirar 4 veces. No hace falta que los suspiros sean agudos, pueden ser relativamente cómodos. Tras los suspiros, añade un inspiro y me tranquilizo, espiro y sonrío (catatonia).
<BR>4. 3 Respiraciones por la nariz como en el punto 1, pero en vez de llevar la espiración todo hacia abajo, se lleva sólo un poco, y luego se lleva hacia el frente, y con cierto erotismo / gustirrinín. Ayuda el hacer la primera parte (hacia abajo) como mmm (normal), y la segunda como un "taritotariro" je je.
<BR>5 Palmas hacia arriba desde altura de estómago hasta la cabeza recogiendo energía. Esa energía se empuja hacia abajo poniendo las palmas hacia abajo. 4 veces.
<BR>6. Mandar energía desde el tantién, las partes... a la cabeza. Pones las palmas juntas como rezando, y con un movimiento de pelvis o algo así, y como buscando el escalofrío, subes la energía desde el estómago a la cabeza. Después te masajeas el tercer ojo (2 respiraciones izquierda, 2 derecha) y la zona exterior a los ojos (4 y 4); luego, los temportales (ahí suele doler la cabeza), 6 y 6 (o más). Luego, catatonia.
<BR>- Parte 2 (tarde):
<BR>1. Inspiras y espiras todo lo que puedas. Luego hinchas la barriga y no respiras unos segundos, sigues sin respirar con los pechos (hombros hacia atrás, codos flexionados, palmas mirando hacia arriba pero algo cerradas, casi como "en meditación"), y luego pones los brazos hacia delante pero flexionados, intentando que no quede aire en las cavidades ya usadas (parece como si sólo hubiese en el cuello). Al final, espiras muy suavecín por la nariz, imaginándote que el aire sale por aquel sitio que quieras energetizar (la cabeza, por ejemplo; o los pies). Es bueno para limpiar la sangre y potenciar las neuronas. ¡Gracias Azucena!
<BR>2. Lo cogí de un libro de Antonio Blai: mandas como desde el ombligo, hasta un poco más alto (espalda detrás). Cuando inspiro, me imagino el recorrido espalda detrás, "ombligo", y al espirar, al revés. Ahora lo mismo desde ese punto de la espalda, hasta más o menos el corazón. ¿6 ciclos?
<BR>3. inspiro y me tranquilizo, espiro y sonrío (cabeza arriba y abajo) + catatonia.
<BR>4. Ojos abiertos si quieres. Inspiras, espiras, inspiras, y retienes entre 5 y 10 segundos (o más). Expulsas por la boca pero no todo, y empiezas unos ciclos: inspirar (casi juntando las palmas, que irán hacia arriba) y espirar como abriendo unas alas (no digo más, como te salga; quizás como un cabecero que desde lejos es un poco un semicírculo, pero que de cerca hace "cabriolas"). 6 ciclos.<BR>
</H3>
</FORM>
</body>

<?php
}
?>