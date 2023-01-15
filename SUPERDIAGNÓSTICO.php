<?php
 if ( (!isset($_GET["nodo"])) || ($_GET["nodo"] == 0) ) principio();   
 if (isset($_GET["nodo"]))
 {
  if ($_GET["nodo"] == 1) pecad();
  if ($_GET["nodo"] == 2) hamer();
  if ($_GET["nodo"] == 3) trans();
  if ($_GET["nodo"] == 4) nacim();
 }
?> 

<?php
function principio() 
{
 global $PHP_SELF;
 $cadenona1 = $PHP_SELF."?nodo=1";
 $cadenona2 = $PHP_SELF."?nodo=2";
 $cadenona3 = $PHP_SELF."?nodo=3";
 $cadenona4 = $PHP_SELF."?nodo=4";
 /* NO hay variables hidden ni botones de submit. */
?>
<FORM METHOD=GET>
 Mira las nubes atontao y te vendrán ideas y flashes. <BR>
 <a href=<?php echo $cadenona1?>>Pecados REALES</a><BR>
 <a href=<?php echo $cadenona2?>>Transgenealogía + Hamer (curar) + Jung</a><BR>
 <a href=<?php echo $cadenona3?>>Resto Transgenealogía + Jung</a><BR>
 <a href=<?php echo $cadenona4?>>Cómo eres según fecha de nacimiento</a><BR>
</FORM>
<?php
}
?>

<?php
function pecad()
{
 global $PHP_SELF;
 $cadenona0 = $PHP_SELF."?nodo=0";
?>
<FORM METHOD=GET>
 Pecados REALES <BR>
####Diagnóstico 7 pecados reales (gracias a Tu Vida en Phi, canal de Youtube de donde saqué la información, y que permite que la gente sea más autocrítica / bondadosa):
<BR>##Definición (causa y solución irían en la segunda mitad):
<BR>- Empezamos por la soberbia, pecado de psicópatas integrados (cuando te vuelves psicópata, tus pupilas se vuelven atractivas, así que cuidado con ellos; y van a querer hacerse los buenos en público; ellos matan sólo con mala energía, combinada con tortura psicológica "de buenos modales"):
<BR>* La arrogancia es la antesala (apropiarse de cualidades artificialmente: sentirse iluminado habiendo pasado por la New Age y sin haber desreprimido conscientemente por Jung...). Vanidad (superrelacionada): vacío, hueco, pura apariencia. Al grano: la soberbia es cualquier sentimiento / actitud que te hace sentir por encima (no es orgullo, que implica satisfacción por lograr algo que te parece bueno). Se necesita al otro, el soberbio no es solitario.
<BR>* El soberbio suele controlarse bien emocionalmente (no suele ser inteligente, es más bien psicopático), y dejar mal al rabioso, que es mucho más inteligente y humano.
<BR>- Acedia / "pereza" (sin objetivos nobles que te ayuden a levantarte cada día). Este pecado, lo pongo en segundo lugar, porque me parece que ir a trabajar, y volverse "loco" el fin de semana, es algo que tiene que acabar ya. Nada de trabajar para sobrevivir, busca un objetivo noble que te llene, y haz de la semana algo más homogéneo (sin disociación mental). Si no sabes nada "de un negocio", deben enseñarte con empatía e intuición, paciencia y estructuración (empezar por lo general, salvo si es necesario un ejemplo al principio):
<BR>* Hay gente que trabaja mucho, y que son "perezosos", ¿el 90% de la gente, pues el 90% de los trabajos (al menos los de ciudad) son pa contaminar na más? La negligencia (no decidir sobre la propia vida, y atender a la familia y las élites), es prima hermana de la acidia.
<BR>* No hay un ayer del que aprender, o un mañana para dirigirte. Pero vivir "no es otra cosa que navegar en preguntas". Para los pecadores, la vida "pasa", cuando la vida es un regalo divino: hay que disfrutar con sabiduría, y dirigirnos a ser mejores personas (claro que, nos han confundido sobre qué es ser mejor persona; la bondad está en la psique, no en la acción, que depende del cambio de psique profundo y doloroso).
<BR>- Pongo la gula en tercer lugar, porque uno no debe escapar de su interior "metiéndose cosas por la boca". Hablamos de a-dicción (lo no dicho). Cuando te traen "pasteles", quieres hacerlos desaparecer comiéndolos, pero la dependencia crece:
<BR>* Gula es también cobrar y ponerse a gastar al minuto compulsivamente, sólo porque al comprar sientes "gustito". Y luego viene la culpa (que no arregla nada).
<BR>- Pongo la avaricia como cuarto pecado más peligroso (por encima de la envidia, ¿por encima de la gula incluso?), porque hay que tener una buena escala de valores. Estos suelen ser bastante superficiales. La envidia, veremos que tiene que ver con "la suerte en la vida", así que la ponemos entre los 3 pecados menos terribles:
<BR>* Trabajo en lo valorado por el inconsciente entorno.
<BR>* Acumular (no confundir con el toc) y guardar, siendo difícil moverse o iniciar, por miedo a perder "el tesoooro".
<BR>* La generosidad (algo muy diferente a la avaricia) es brindarse a uno mismo (los sentimientos, el tiempo...). Alguien avaro puede darte cosas, hacer cosas por ti... sólo para evitar ser generoso.
<BR>* El avaro quiere + dinero, mejor trabajo... y cuando lo consigue, lo goza (no es codicia) un breve espacio de tiempo.
<BR>* Está vinculado con el egoísmo (yo) y no entender lo terrible de la traición.
<BR>- Envidia: este chico ha conseguido un coche, porque tiene una familia que lo cuida y procura su éxito. ¡Esa familia debería ser mía, me la merezco! Se trata de tener algo, y que el otro ya no lo tenga. Otro ejemplo: éste saca buenas notas por su calculadora (y no porque haya modificao su psique yendo a lo más profundo, para tener un poco más de éxito; de todos modos, ¿nunca oíste eso de que los inteligentes pasan los exámenes difíciles con intuición, y los no tan inteligentes usan la memoria y la atención? El club de los sacadieces está lleno de gente con cualidades de "siervo del sistema enfermo"; las almas viejas no suelen ir a la Universidad, ¡y son las mejores! Las grandes personas nacen con grandes inseguridades y barreras se puede decir; pueden sacar nueves los primeros años sin estudiar, pero la Educación Primaria no es "experta en expulsar a la gente de verdad buena"):
<BR>* No hay forma de avanzar mientras te quedas mirando hacia fuera envenenado. Estás "empantanado", y a más atención, más te hundes.
<BR>* Estás atento al cambio del entorno.
<BR>- Vamos con la lujuria (pongo la rabia la última, porque el rabioso, al final, se perjudica a sí mismo, y su enemigo es el psicópata integrado, muy valorado por los inconscientes). Enfermizo placer (no es el lujo, que es lo que nos da "endorfinas" para cumplir objetivos de forma más comodona):
<BR>* Lujuria (luxuria, Latín): lo que se desborda (se podría decir exceso), más que lo que se puede aprovechar (-uria, sin límites, como penuria, ¿pena sin límites?). Poseer un cuerpo, enseñar una casa gigantesca (sin soberbia, ¿para entrar en un club selecto, por ejemplo?), recorrer kilómetros sólo para besar a alguien 2 segundos, y volver. Obtienes, tocas y quieres más.
<BR>- Ira Fuerza descontrolada vs psique femenina muy trabajada para el autocontrol (aunque recuerda que el enojo, que lleva a la ira, es necesario para saber dónde fallas psíquicamente, y a Escorpio le sirve para lanzar la alarma de inmoralidad sutil, aunque ya sabéis que se la calla, por no estar preparado el otro):
<BR>* La ira, ¿tiene que ver con un movimiento rápido (quizás por reprimir emociones)? ¿Puedo levantar más peso si mi psique está enferma / en fase activa de la enfermdad? Yo creo que sí (ya sabes que toda enfermedad viene de la psique, y te pone activo, hasta que quizás consultas un manual avanzado de Psicología y vives experiencias).
<BR>* La cólera, te centra, te ayuda a ver luz. Y tienes que comprender por qué causas en otro rabia, para no empezar (eso es elevado), pero no te preocupes si empiezas, el proceso de aprendizaje lleva tiempo, y hasta podrías estar siendo moralmente correcto, poniendo una bonita prueba al otro.
<BR>* Sufre mucho el iracundo. Tras estar descontrolado (sin ver ni oír, atacando) se siente muy mal (por lo general). Eso sí, el afuera se convierte en una extensión de mi interior (sin límites). A veces la gente es tan inmoral, y no lo sabe... Pobre Escorpio, maltratado (no querido) por quienes no se autoconocen. Lo creemos José Millán (Astrólogo) y yo.
<BR>* Puede ser incentivadora (ponte a escribir, a hacer ejercicio sano...) o congelante.
<BR>##Causas y soluciones:
<BR>- Soberbia:
<BR>* Causa: ¿ser "verdugo", habiendo sucedido algo en tu vida que te hizo sentir débil (por ejemplo, "no conseguí que mi madre siguiera dándome la atención de siempre cuando nació mi jodido hermanito")? ¿Tuviste amor incondicional?
<BR>* Dales la espalda. ¿Y si no se la das, te la pueden dar ellos a ti, para reafirmarse? Realmente, se exige formación de toda la gente sobre psicópatas integrados y similares.
<BR>- Acedia / "pereza":
<BR>* Causa: las élites, como buenos psicópatas integrados, nos han hecho creer que las necesitamos, y con el miedo que produce la tele (controlada por ellos, al menos en 2022) nos paralizan. La Escuela se encarga de quitarnos lo especial que llevamos dentro...
<BR>* Solución: no esperar a que las cosas cambien. La sociedad cambia con el cambio de psique de cada individuo (Nueva medicina germánica es el cambio a través de descubrir la causa psicológica de tu enfermedad, y Jung es desreprimir aquellas leyes familiares que no soportabas, y como ya no te manejan inconscientemente, eres mejor persona).
<BR>- Gula:
<BR>* Solución a no autoescucharse. No tengas miedo a escucharte, y sobre todo, valora lo diferente que dicen los otros y, aunque duela, te puede aportar mucho. NO te sientas tan culpable, que los errores sirven para fortalecernos (así como expresar nuestra debilidad). NO veas un pensamiento como algo "para siempre", que al final, puedes adaptarte a lo nuevo.
<BR>* Más: voy a disfrutar de esto un poco (lo de "basta ya", en este caso, no suele funcionar), regular, cumplir lo que has pensado (disfrutas y a la vez estás contento contigo mismo).
<BR>- Avaricia:
<BR>* Causa: una escala de valores equivocada (padres...). El agujero del avaro está en mirar dentro y no encontrar valor; hay algo que todo el mundo tiene y el avaro no, y en ese caso, claramente, hay que mejorar la psique desreprimiendo... ¿Y pensar que si el mundo puede, tu puedes? ¿Y si realmente naciste con cualidades muy especiales que los demás deberían notar (no tienes suficiente atención para conducir, pero tu intuición es poderosa)?
<BR>* Solución: quizás disfrutar de la nada, de la intimidad, sin objetos.
<BR>- Envidia:
<BR>* Causa: quizás un sentimiento de inferioridad.
<BR>* Solución: quizás ver que todos somos diferentes (diferentes barreras psíquicas para diferentes misiones), comprender la riqueza de ser introspectivo, diferente... No robot supermemorístico. Y por supuesto, ver que algo interior tapará el agujero interior. Cuando aceptas tus limitaciones / debilidades, sabrás que lo que te corresponde a ti y al otro.
<BR>- Lujuria:
<BR>* Las razones varían de un caso a otro: falta de afecto en la infancia (querrás formas sexuales "raras" quizás), represión de lo animal (incluye lo sexual)...
<BR>* Solución. NO se acaba el mundo cuando no tienes lo más sensorial, o no sabes lo que es "tocar un pecho", o cual es exactamente tu tendencia sexual. Quizás sin desearlo, ocurra sin más.
<BR>- Ira:
<BR>* Yo, posibles causas de enojo: necesidad de control (que todo salga como esperas y no aceptar otra cosa...), timidez (te importa lo que digan los demás, y deberías quererte un poquito más)...
<BR>* El iracundo tiene un profundo miedo a la oscuridad (a mí me encanta), ¿a mirar las manchas de psique? ¿Te digo la verdad sobre la sociedad y te pones como un basilisco?
<BR>* Expresa tu ira (puedes decir tacos, palabras malsonantes), o tal vez lo que piensas, sin tener tanto miedo a quedar mal. Puedes bailar escuchando música...
<BR>
 <a href=<?php echo $cadenona0?>>Volver</a><BR>
</FORM>
<?php
}
?>

<?php
function hamer()
{
 global $PHP_SELF;
 $cadenona0 = $PHP_SELF."?nodo=0";
?>
<FORM METHOD=GET>
 Transgenealogía + Hamer (curar) + Jung <BR>
####Diagnóstico traumas Hamer. El primer contacto con la Nueva Medicina Germánica del Doctor Hamer lo tuve leyendo el libro de Marco (La Última ReEvolución), así como el primer (y bien nutrido) contacto con la Transgenealogía (resolver problemas de ancestros para hacer mejor tu vida), lo tuve con Pablo Lema (pupilo de Cristian Zeballos):
<BR>##Un ejemplillo de Transgenealogía que contiene uno de NMGHamer: tuve un toc de decoración (y sigo teniendo un poco). ¿Por qué? Mi hermano mayor también lo tiene, pero yo creo que al llamarme Luis, por Transgenealogía, el alma del abuelo Luis, ¡me ha pasao lo que él no pudo resolver (y juraría que éramos 2 almas en el mismo cuerpo, opinando diferente)! Suele dedicarse a la decoración, quien tuvo un ancestro que no se veía bello. ¿Cómo llegué al TOC fuerte (ya me había dao suave)? Son 2 traumas, y uno, yo diría que tiene que ver con que mi padre me pintara la habitación estando yo asmático, y teniendo un trabajo de Matemáticas y otro de Java con Oracle que entregar. ¿Casualidad?
<BR>- Ahora bien, ¿qué es la Nueva Medicina Germánica? Con los traumas vienen las enfermedades (lo que no viene de la psique, sino de comer mucho... se llama desequilibrios; créeme, engordar tiene mucho más que ver con la psique y sus traumas, luego lo vemos):
<BR>* La enfermedad tiene 2 fases, una activa (realmente no hay muchos síntomas por lo general, y estás más activo), y otra de curación, cuando reconstruyes la escena del trauma y sabes el origen psicológico y eso (aquí sí que hay síntomas, que no deberían cortarse, al menos mucho, y por eso falla la medicina: cuando estás curando, te paran la fase de curación, y hasta te pueden decir que te vas a morir, ¡y hala, otra enfermedad!). Para llegar a la fase de curación, puede que tengas que desreprimir leyes familiares pasadas en la infancia...
<BR>##Veamos las enfermedades y las causas, ¿y antes no podríamos ver los tipos de traumas?
<BR>- El saber popular relaciona psique y cuerpo:
<BR>* Susto de muerte (trauma de pánico, laringe). Pánico (el "pánico en la nuca" es a examen próximo, operación próxima, perder el trabajo...) o miedo territorial (¿miedo a que te quiten algo que ya tienes?).
<BR>* Tengo las manos atadas (el trauma correspondiente afecta a los conductos tiroideos).
<BR>- Un hombre pierde a su mujer (camión choca contra ella). El conflicto será pequeño si no la quería. Si la quería, lo normal es una fase activa con programa físico de testículos (programa especial; recibes + testosterona para encontrar amigos... En este caso, ¿ni tumor ni úlcera?). Pero puede haber otros tipos de conflicto / trauma:
<BR>* No acepta / "no puede ser verdad" (trauma de miedo y resistencia, diabetes).
<BR>* No para de imaginarse el choque (miedo frontal, arco braquial).
<BR>* Si la mujer era su autoestima (dependía de ella): (desvalorización, problema lumbar en este caso de desvalorización, ¿menos densidad ósea?). La epilepsia está en la cura de un conflicto motor (desvalorización), que no es el caso.
<BR>* Su mujer era parte de él (pérdida de territorio, angina de pecho).
<BR>##Ejemplos (relación psique / trauma y enfermedad; no olvidemos que el tumorcillo benigno del cerebro, impide que por ahí vayan lso mensajes sinápticos):
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
<BR>##Más:
<BR>- El teatro es bueno tanto para traumas (salud) como para represiones (leyes no soportadas; maldad genuina, pues te hacen incoherente). El <BR>primer acto muestra la debilidad, y en el segundo se arregla todo (eso sí, a veces tardas mucho, tiene que ser así).
<BR>-¡Hasta la homosexualidad suele tener un origen en traumas (muerte de un ser querido cuando eres pequeño y hombre; frustracións exual si eres mujer; tal vez algo de identidad posterior...)! Y una humillación constante y una minusvaloración de su virilidad, hace que el hombre se feminice y, ulteriormente, desarrolle fobia por las mujeres.
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
<BR>- Niño que odia la asignatura de Inglés, porque su abuelo (Transgenealogía) odiaba a los ingleses.
<BR>- Mala conciencia: SBS (programa físico) de hombro.
<BR>- Ansiedad anticipativa (terminarlo todo ya...), ¿qué querías que terminase de pequeño es una buena pregunta?
<BR>- ¿Miedo territorial incluye "creer que no están tratándote según tu valía profesional"?
<BR>- Tu hijo no cumple tus ambiciones, ¿te desvalorizas (huesos) y tienes anemia (los huesos planos producen mucha sangre)?
<BR>- Un hombre dejó de fijar fechas (agenda completa), y mejoró.
<BR>- Si te alimentas mal, ¿es por desvalorización? ¿Y por una mala defensa territorial? ¡Mi cuerpo es mi templo, yo no caigo en trampas de maltratarme, me respeto (no he dicho "me quiero", que el "me quiero" lleva mucha desrepresión)!
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
<BR>##¿El TOC (si al final es una enfermedad, y no sólo un trastorno, ¿los trastornos son enfermedades?) es sólo territorial (mi padre me pintó mi cuarto sin permiso unas pocas veces; y quizás la impotencia también ayude), o también surge de la ampliación de los pensamientos intrusivos del final de la fase activa?
<BR>##Alzheimer: un conflicto de separación en cada hemisferio. ¿A que guarda relación con los geriátricos? ¿Qué es lo primero, el geriátrico, o el Alzheimer? Bueno, también está la carencia de vitamina b12, y más cosillas (un no aceptar, negarse a ver la realidad, chemtrails y haarp...).
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
 <BR>
 <a href=<?php echo $cadenona0?>>Volver</a><BR>
</FORM>
<?php
}
?>

<?php
function trans()
{
 global $PHP_SELF;
 $cadenona0 = $PHP_SELF."?nodo=0";
?>
<FORM METHOD=GET>
 Resto Transgenealogía + Jung <BR>
####Diagnóstico ancestros Transgenealogía lo no tratado en Hamer:
<BR>##INTRODUCCIÓN (¿los trastornos neuróticos son muchas veces toques de atención para estudiar tu árbol genealógico?):
<BR>- Tu familia te pasa sus creencias, y una forma, es directamente, relacionándote en el mundo 3D. Luego reprimes algunas las leyes familiares (no las soportas). Reprimir hace que tengas reacciones incivilizadas (tú, a lo mejor, ves culpables a tu alrededor, por enfadarte TÚ con la gente que no cumple esas leyes, muchas de ellas absurdas).
<BR>* Aparte de eso, hay influencias no visibles de los ancestros en tu psique. Los nuevos de la familia nacerán libres si consigues desreprimir lo de tu familia. La gente menos evolucionada, te pondrá pruebas (si eres el elevado encargado de "resolver tu árbol familiar"; resolver psíquicamente lo que los ancestros no pudieron). Tu familia astral determina el vínculo en el momento de nacer (si cargas con tu abuelo...).
<BR>* Ejemplo: el abuelo murió injustamente, la familia lo idealiza, y TE PONE SU NOMBRE. ¡Y a cargar con el muerto y lo no resuelto! ¡Y otro ejemplo! Una familia evita que los nietos se suiciden, como el abuelo, yendo al cementerio a honrarlo, con discurso y ofrenda.
<BR>* LOS SECRETOS FAMILIARES, ENVENENAN A LAS SIGUIENTES GENERACIONES. ¿Por qué a veces nos resulta tan complicado llegar más lejos que nuestros padres, hay barreras psíquicas?
<BR>* Si cumples la misión (desreprimir por Jung, sabiendo lo que es una proyección psicológica de tu roña en los otros, cambiar creencias si hay que hacerlo...), habrá autoestima. Si no, culpabilidad. El trabajo transgeneracional te acerca a las memorias ancestrales. Es bueno hacerlo (árboles genealógicos...). Tú sólo empieza, y con ilusión. Ser excluido del clan físico implica la posibilidad de ataque o de morir de hambre (no todos los que piden son "actores"; podrían ser almas avanzadas que lo hicieron mal, ¿incluso que están pasando pruebas sabidas antes de nacer?).
<BR>- Fechas clave. Contar +- 7 días a partir de la fecha en la que pasa algo raro (a ti o tu familia; una muerte...). Ejemplos:
<BR>* El síndrome "de aniversario" (0, 3, 6, 9 meses) se relaciona, no sólo con muertes o duelos pendientes (yo tuve que hacer un ritual para que toda la familia aceptase la muerte de mi madre; me dolió "el diente de la madre" previamente), sino también con secretos, traumas... De todo. Incluye vergüenza ancestral (sientes vergüenza como tu ancestro).
<BR>* La madre de H. murió 9 meses antes de nacer él. Es un mensaje para H, seguramente. Mi madre, 9 meses antes de nacer mi padre. Fecha de concepción: restar 9 meses aunque el niño sea prematuro. Lo de los 9, viene de memorias ancestrales. Fecha de muerte: 9 meses tras nacer (o 3 antes).
<BR>* Si la Concepción (y ahora contamos los años también) se da 3 meses o menos tras la muerte: efectos mayores (o si naces en el primer aniversario de la muerte). Si nacen varios, el primero sufre más.
<BR>- Enfermedades de origen ancestral:
<BR>* En general, patologías de movimiento, sobrepeso y retención de gases (¿cuestión de tiroides?). ¿La tiroides "gestiona el tiempo"?
<BR>* Más: respiración y apneas, parásitos intestinales, algunas diabetes, autismo y esquizofrenia (estas 2 últimas indican muchas veces que el origen es el bisabuelo o el tatarabuelo, no el abuelo).
<BR>##Conceptos básicos (¿La unión al clan es a los 3 meses de la concepción real?). Los dobles:
<BR>- El parecido físico o personal con algún familiar, podría significar obstaculos en tu realización personal (independencia...).
<BR>- Si te llamas Mariana, tendrás afinidad con María y con Ana (si son familia).
<BR>* Si tus padres te ponen el nombre de un familiar, ¿puede ser por una relación disfuncional con él?
<BR>* Tus padres pudieron haber tenido parejas con tu nombre antes de casarse.
<BR>- Por profesión (yo diría actividad, que la profesión indica poca flexibilidad en principio; algún día se acabará lo oficial, el "estar colocado": no sueles aprovechar todas las horas del día, suelen ser trabajos para engordar las estadísticas...):
<BR>* Vigilante, poli... Búsqueda de la figura paterna.
<BR>* Político: la familia sufrió desprestigio (y no lo aceptaron, o se quedó como un secreto...).
<BR>* Traducción / Lingüística: conflicto de comunicación ancestral.
<BR>* Agricultor: hambrunas. ¿Y cocinero, restaurador...?
<BR>* Química: conflicto de unión de elementos, madre.
<BR>* Coser: separación, conflictos de piel.
<BR>* Electricidad, energía: conflictos de padre.
<BR>* Ciencias: padre incógnita, ¿por ser la madre una fresca? ¿Por irse el padre?
<BR>* Piloto, azafato: ir al encuentro con el muerto.
<BR>* Enseñanza: falta de estudios en la familia.
<BR>* Bailarín: conflicto de movimiento. La misión es "aprender a moverse".
<BR>* Fisioterapia: falta de contacto, ¿sanarlo por medio de rehabilitar a otras personas tocándolas?
<BR>* Hostelería: complejo de alojamiento.
<BR>* Decoración: desvalorización estética, ¿mi abuelo Luis se veía feo?
<BR>* Libros: para conservar la Historia.
<BR>* Fotografía: temor a perder la Historia.
<BR>* Servicios sociales: abandono.
<BR>* Servicios bancarios: problemas de herencias, de dinero...
<BR>* Abogado: conflictos con la justicia.
<BR>* Medicina: conflicto de enfermedad, muerte...
<BR>##Ejemplos:
<BR>- Una niña tiene asma / disnea (por crecer en ambiente tóxico):
<BR>* Mujer sin menstruación entre los 21 y 29 años de su vida (es la menor de 5 niñas, y nació cuando la abuela tenía 29). La abuela, embarazada, fue obligada a casarse (¿vergüenza sufrida por las 2 familias implicadas?). Ninguna hija fue planificada / deseada. Ella recuerda discusiones, infidelidades... y la abuela les decía que habían venido al mundo a padecer.
<BR>* ¡Es un rechazo de la femineidad pasado entre generaciones! Creencia peligrosa: la mujer no es femenina, no nació para el amor erótico, es una coneja... Curioso, la creencia viene de los abuelos (supongamos), los padres tienen "accidentes" relacionados con ello, y los hijos lo sufren.
<BR>- Mujer adopta 2 niños de 5 y 7 años. El padre adoptivo de la mujer cuidaba niños de entre 5 y 7 años cuando era joven. Ella padece ahora lo que él (no especifico).
<BR>- El abuelo sintió impotencia preso. La nieta, impotencia (bloqueo de actividades económicas; por ciertas casualidades, no llegaba a cobrar), que dio lugar a hipotiroidismo.
<BR>- Mujer nacida tras varón muerto. Ella no es reconocida (ya hay una niña mayor en la familia), y trata de agradar ocultando su femineidad, con lo que "pilla" amenorrea.
<BR>####NO tan básico:
<BR>##HEREDERO (DE MAESTRO) Y YACIENTE:
<BR>- Heredero: debes ser concebido (nacimiento real - 9 meses) cuando el muerto vivía. El fallecido confía en ti. Puede haber varios herederos (cómplices / identificándose entre ellos).
<BR>- Yaciente: reemplazas a alguien cuya muerte no ha sido aceptada:
<BR>* El yaciente se siente más indefenso (carga con...). Su vida, entre la melancolía y ausencias mentales (¿inexplicables?) Cuanto le toca decidir, es como si una parte reprobase a la otra. Si se murió joven, la carga es mayor, por el silencio familiar, por esa muerte rara...
<BR>* Solitarios, ropa oscura, ambientes oscuros (sobre todo para dormir). No suele avanzar en la vida, disfrutar (produce culpa). Bruxismo o mandíbula tensa y bloqueada (al negar el placer). Rabia y agresividad reprimidas. Suelen tener tono de voz bajo. Otras veces, en lugar de freno, agitación e inquietud insufrible. Hay enfermedades, problemas de identidad: no te reconoces; inmovilidad (no reaccionar).
<BR>* Cuando es por hermanos, hay que suplir y además aliviar a los padres, y sufres mucho. Cuando es por aborto (la madre abortó a hermano mayor), queda memoria negativa en el útero, y al no haber dado tareas al muerto, la confusión es total, y no sabes con quién vincularte... Hijo de repuesto: el mayor enferma, y los padres deciden tener otro hijo. Si al final no muere, ¿tus padres te ignoran? Fiestamanía: un hijo murió (o va a morir), y hay sexo compulsivo. Gemelo perdido (en las 10 primeras semanas de gestación). El vivo: soledad, culpa, espera...
<BR>##Más:
<BR>- Sobre hijos:
<BR>* Hijo de polarización: es para alcanzar el éxito que los padres no pudieron alcanzar.
<BR>* Hijo sanador (alma avanzada): difícil tener hijos o el triunfo, ¿habitualmente nacen con enfermedades congénitas o discapacidades? ¿Su misión es saber secretos guardados por generaciones?
<BR>- Complejos de Edipo y Electra: se atrae a personas "padre" o "madre" con la fecha de nacimiento o concepción de ambos padres como referencia.
<BR>* Relaciones de pareja confusas, puesto que buscas un papá y una mamá.
<BR>- Incesto ANCESTRAL (¿incluye simple adulterio o maltrato?): causa que la relación de pareja de los descendientes se bloquee / frustre. Los embarazos son difíciles (abortos, muertes prontas...).
<BR>- Hígado: mareos, rabia... ¿El médico debería buscar ancestros que murieron de hambre, en carencia (el hígado es la reserva de ahorros del cuerpo), o sufrieron envenenamiento (tóxicos; el hígado lidia con tóxicos como función normal)? Es un enfoque un tanto diferente a Hamer (apunta: conflictología; psicoterapia integrativa, que va de desreprimir a secas se puede decir... ; descodificación biológica original).
<BR>- ¿El corazón tiene que ver con abuelos fríos?
 <BR>
 <a href=<?php echo $cadenona0?>>Volver</a><BR>
</FORM>
<?php
}
?>

<?php
function nacim()
{
 global $PHP_SELF;
 $cadenona0 = $PHP_SELF."?nodo=0";
?>
<FORM METHOD=GET>
 Cómo eres según fecha de nacimiento <BR>
####Eneagrama negativo fecha de nacimiento:
<BR>##Antes de nada, recordemos la carta astral, para conocerte y poder desear algo que no tienes (con pasos psicológicos en orden si puede ser; puede que quieras mejorar la salud, y hayas visto que las causas psicológicas puedan ser muchísimas), o directamente algo psicológico.
<BR>##El eneagrama no contiene los números maestros (11, 22 y 24): el once es un maestro psicológico, el 22, material (de realización), y el 33, tiene de todo un poco. ¿Y el 44?
<BR>##Al grano. Sumar cifras nacimiento: 3-11-1977 = 29 = 11 = 2 (el 11 es 2 cuando "va mal"). 
<BR>- 1. Idealista y concienzudo, con fuerte sentido del bien y el mal. Son profesores y cruzados, se esfuerzan siempre por mejorar las cosas, pero temen cometer errores. Bien organizados, ordenados y meticulosos, pueden resultar críticos y perfeccionistas. Normalmente tienen problemas de rabia e impaciencia reprimidas. El Uno sano es sabio, perceptivo, realista y noble, a la vez que moralmente heroico.
<BR>* MIEDO BÁSICO: Ser malo, corrupto, perverso o imperfecto
<BR>* DESEO BÁSICO: Ser bueno, virtuoso, equilibrado, íntegro
<BR>* MENSAJE DEL SUPERYÓ: Vales o eres bueno si haces lo correcto
<BR>- 2. Preocupado, orientado a los demás. Comprensivos, sinceros, amistosos, generosos y abnegados, pero también pueden ser sentimentales, aduladores y obsequiosos. Suelen hacer cosas por los demás para sentirse necesitados. Por lo general tienen problemas para cuidar de sí mismos y reconocer sus propias necesidades. El Dos sano es generoso y siente un amor incondicional por sí mismo y por los demás.
<BR>* MIEDO BÁSICO: Ser indigno de amor
<BR>* DESEO BÁSICO: Sentirse amado
<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres amado por los demás y eres amigo de ellos
<BR>- 3. Adaptable y orientado al éxito. Seguro de sí mismo, atractivo y encantador (así que cuidadito). Ambiciosos, competentes y enérgicos. Suelen preocuparse por su imagen y por lo que los demás piensan de ellos. Normalmente tienen problemas de adicción al trabajo y competitividad. El Tres sano se acepta a sí mismo, es auténtico, es todo lo que aparenta ser, un modelo que inspira a otras personas.
<BR>* MIEDO BÁSICO: Ser despreciable o a carecer de valor inherente
<BR>* DESEO BÁSICO: Sentirse valioso, aceptado y deseable
<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si tienes éxito y los demás piensan bien de ti
<BR>- 4. Romántico e introspectivo. Conscientes de sí mismos, sensibles, reservados y callados. Demostrativos, sinceros y personales emocionalmente, pero también pueden ser caprichosos y tímidos. Se ocultan de los demás porque se sienten vulnerables o defectuosos, pero también pueden sentirse desdeñosos y ajenos a las formas normales de vivir. Normalmente tienen problemas de autocomplacencia y autocompasión. El Cuatro sano es inspirado y muy creativo, capaz de renovarse, ¿a través de experiencias no?
<BR>* MIEDO BÁSICO: Carecer de identidad o de no ser importante
<BR>* DESEO BÁSICO: Descubrirse a sí mismo y su importancia; crearse una identidad a partir de su experiencia interior
<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres fiel a ti mismo
<BR>- 5. Vehemente y cerebral. Despabilados (¿y no durmientes mirando pa dentro? ¡Qué pena!), perspicaces y curiosos. Capacidad: ideas y habilidades complejas. Independientes e innovadores, es posible que se obsesionen con sus pensamientos y elaboraciones imaginarias. Muy nerviosos. Por lo general tienen problemas de aislamiento, excentricidad y nihilismo. El Cinco sano es pionero visionario y es capaz de ver el mundo de un modo totalmente nuevo.
<BR>* MIEDO BÁSICO: Ser inútil, incapaz o incompetente
<BR>* DESEO BÁSICO: Ser capaz y competente
<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres experto en algo
<BR>- 6. Orientado a la seguridad. Dignos de confianza, trabajadores y responsables, pero también pueden adoptar una actitud defensiva, ser evasivas y muy nerviosas; trabajan hasta estresarse al mismo tiempo que se quejan de ello. Suelen ser cautelosas e indecisas, aunque también reactivas, desafiantes y rebeldes. Normalmente tienen problemas de inseguridad y desconfianza. El Seis sano: estable interiormente, seguro de sí mismo, independiente, y apoya con valentía a los débiles e incapaces.
<BR>* MIEDO BÁSICO: Carecer de apoyo u orientación
<BR>* DESEO BÁSICO: Encontrar seguridad y apoyo
<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si haces lo que se espera de ti
<BR>- 7. Productivo y ajetreado. Versátiles, optimistas y espontáneos; juguetones, animosos y prácticos, también podrían abarcar demasiado, ser desorganizados e indisciplinados. Constantemente buscan experiencias nuevas y estimulantes, pero la actividad continuada los aturde y agota. Por lo general tienen problemas de superficialidad e impulsividad. El Siete sano centra sus dotes en objetivos dignos, es alegre, y muy capacitado y agradecido.
<BR>* MIEDO BÁSICO: Ser desvalido o quedar atrapado en el dolor
<BR>* DESEO BÁSICO: Estar feliz, contento, encontrar satisfacción
<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si obtienes lo que necesitas
<BR>- 8. Poderoso y dominante, ¿a veces protector? Seguros de sí mismos y capaces de imponerse. Ingeniosos y decididos, también resultan orgullosos; piensan que deben estar al mando de su entorno y suelen volverse retadores e intimidadores. Normalmente tienen problemas para intimar con los demás. El Ocho sano se controla, usa su fuerza para mejorar la vida de otras personas, volviéndose heroico, magnánimos y a veces históricamente grandioso.
<BR>* MIEDO BÁSICO: Ser dañado o controlado por otros
<BR>* DESEO BÁSICO: Protegerse, decidir su camino en la vida
<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres fuerte y estás al mando de tu situación
<BR>- 9. Acomodadizo, humilde, ¿o modesto?. Conformistas, confiados y estables. Afables y bondadosos, también pueden estar demasiado dispuestos a transigir con los demás para mantener la paz. Tienden a ser complacientes y a minimizar cualquier cosa inquietante. Normalmente tienen problemas de pasividad y tozudez. El Nueve sano es indómito y abarcador; capaz de unir a las personas y solucionar conflictos.
<BR>* MIEDO BÁSICO: Perder la conexión, fragmentación
<BR>* DESEO BÁSICO: Mantener la estabilidad interior y la paz mental
<BR>* MENSAJE DEL SUPERYÓ: Vales o estás bien mientras los que te rodean sean buenos y estén bien 
<BR>
<BR>
<BR>Más:
<BR>####Tus años de cambio:
<BR>- Nací en 1977 = 24 = 6. Siguiente año: 1977 + 6 = 1983 = 3. Siguiente año: 1983 + 3.
<BR>* Y así sucesivamente. 1986 + 6 = 1992; 1995, 2001, 2004, 2010, 2013, 2019, 2022, 2028.
<BR>####Eneagrama (según fecha de nacimiento, NO nombre):
<BR>##Vamos con algunas cosillas que quedaban:
<BR>- 1, liderazgo (¿jefazo como el 8, o mucho más líder que jefe?).
<BR>- 2, maternidad, consideración, adaptación, creatividad, trabajo en equipo, mediación.
<BR>- 3, filosofía, y viajes. Artes, disfrute de la vida, socialización.
<BR>- 4, haces algo según tus originales reglas, servicio, lucha contra límites. Esteta.
<BR>- 5, aventurero, uso constructivo de la libertad.
<BR>- 6, hogar y familia, servicio a los demás. Tradicionalista.
<BR>- 7, si te lo encuentras, potencia y confía en tu intuición (son místicos). Análisis, comprensión, conciencia. Multitareas, niño prodigio.
<BR>- 8, política (orientados a status, ¿poder y dinero?). Autosuficiencia y practicidad. Responsable y tenaz. Proveedor, empresario, inconformista.
<BR>- 9, expresión creativa, generosidad y modestia, empatía, animadores emocionales, sanadores, iniciar cosas con determinación.
<BR>- 11, saca cosas ocultas de ti: es sabiduría, intuición, iluminación, idealismo, plano espiritual más alto.
<BR>- 22, fuerza y liderazgo.
<BR>##Un tipo de persona (número) se me presenta muchas veces, ¿qué hago / mejoro en mí?:
<BR>- 1. Muestra a los demás el camino creativamente.
<BR>- 2. Recoge la cosecha. Quizás alguien pueda ayudarte a decidir.
<BR>- 3. Viaja para autoconocerte.
<BR>- 4. Sé tú mismo digan lo que digan, y con imaginación genuina.
<BR>- 5. Expresa tus ideas para salir del bloqueo mental.
<BR>- 6. Ocúpate de la belleza, el arte, la decoración, los problemas maritales...
<BR>- 7. Sé más esotérico (hacer caso a la intuición, Psicología...).
<BR>- 8. No pienses, trabaja. Sé coherente con tus debilidades.
<BR>- 9. Saca a flote toda tu fuerza interior, para hacer las cosas con seguridad.
<BR>##Caminos de sanación:
<BR>- 1. Recuerda que todos pueden tener algo de razón y que tal vez, nadie la tiene del todo. Como todos, eres una persona que esta en el camino, en marcha hacia un ideal y por tanto con fallos y facetas todavía por mejorar. Nadie exige tu perfección. Eres querido por lo que eres, no por lo que deberías ser.
<BR>- 2. Recuerda que para dar te tienes que poseer a ti mismo, conocerte y quererte. Examina si realmente las personas necesitan tantas cosas como tu piensas, no vivas tan pendiente del otro, pues puedes perder tu identidad. No te queremos por todo lo que ayudas, sino por ser quien eres.
<BR>- 3. Date tiempo para sentir, descansar, disfrutar y ver lo que tu cuerpo necesita. Aprende a relacionarte a niveles profundos. ¿Por qué tanto miedo al contacto interno? Busca una definición de ti mismo que responda a aquello que realmente eres, no a aquello que se identifica con lo que haces o con lo que los demás esperan de ti.
<BR>- 4. Todos los seres humanos somos únicos e irrepetibles igual que tú. Lo que tanto anhelas está dentro de ti. Tu interior es la mejor obra de arte, apréciala, no te escondas. La realidad tal cual es, es lo mas real y autentico que existe. Valórala.
<BR>- 5. Recuerda que la cabeza no es un buen lugar para vivir, baja mas al corazón, y vivirás. Comparte tus conocimientos con los demás y adquirirás mas. No acumules, ni atesores. Comparte y recibirás en la medida en que tú des.
<BR>- 6. Piensa en lo importante y bonito que puede llegar a ser el responsabilizarte de tu propia vida, eso te dará gran seguridad. Solo eres responsable de ti mismo. No mires lo de afuera como algo amenazador, nada ni nadie puede herir tu esencia, excepto tu propia inseguridad.
<BR>- 7. En vez de planificar, actúa. Cuando acojas y abraces tus sentimientos negativos, éstos te darán una feliz sorpresa. Vive cada momento, y disfrutarás la vida. La felicidad no es un estado permanente, sino una sucesión permanente de momentos.
<BR>- 8. Si confías en que los demás buscan la verdad y justicia como tú, serás menos desconfiado. Delega, no intentes controlar todo y sentirás mas sosiego interno. El remedio para la insatisfacción y el aburrimiento no es la intensidad, sino el sentido de la medida, incluso en la aplicación de la justicia.
<BR>- 9. Cuando superes tu indolencia inicial, sentirás la vitalidad y energía que duermen en ti, esperando que tú las despiertes. Disfruta del placer desconocido para ti de ser consciente de ti, de ser consciente de ti mismo y hacerte responsable de tu vida.
 <BR>
 <a href=<?php echo $cadenona0?>>Volver</a><BR>
</FORM>
<?php
}
?>
