<?php
 if (!isset ($_GET["estado"])) 
 {
  Menu_Principal();
 }
  else
  {
   $tema = $_GET["estado"];
   if ($tema == "principal") Menu_Principal();
   if ($tema == "importante") Tema_importante();
   if ($tema == "psicosalud") Tema_psicosalud();
   if ($tema == "sociosuenos") Tema_sociosuenos();
   if ($tema == "histoactualidad") Tema_histoactualidad();
   if ($tema == "tecnicas") Tema_sociosuenos();
   if ($tema == "anexos") Tema_anexos();
  }
?> 

<?php
function Menu_Principal()
{
 global $PHP_SELF;
 include 'principal.txt';
?>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<INPUT TYPE=hidden NAME="estado" VALUE="importante">
<INPUT TYPE=submit VALUE="LO IMPORTANTE: misión vital y modelos de bondad y recreo / diversión">
</FORM>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<INPUT TYPE=hidden NAME="estado" VALUE="psicosalud">
<INPUT TYPE=submit VALUE="Psicología para tener salud">
</FORM>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<INPUT TYPE=hidden NAME="estado" VALUE="sociosuenos">
<INPUT TYPE=submit VALUE="Sociología y sueños">
</FORM>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<INPUT TYPE=hidden NAME="estado" VALUE="histoactualidad">
<INPUT TYPE=submit VALUE="Historia y actualidad">
</FORM>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<INPUT TYPE=hidden NAME="estado" VALUE="tecnicas">
<INPUT TYPE=submit VALUE="Técnicas">
</FORM>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<INPUT TYPE=hidden NAME="estado" VALUE="anexos">
<INPUT TYPE=submit VALUE="Anexos">
</FORM>
<?php
}
?>

<?php
function Tema_importante()
{
 global $PHP_SELF;
?>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<?php
 include 'importante.txt';
?>
<INPUT TYPE=hidden NAME="estado" VALUE="principal">
<INPUT TYPE=submit VALUE="Volver">
</FORM>
<?php
}
?>

<?php
function Tema_psicosalud()
{
 global $PHP_SELF;
?>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<?php
 include 'psicosalud.txt';
?>
<INPUT TYPE=hidden NAME="estado" VALUE="principal">
<INPUT TYPE=submit VALUE="Volver">
</FORM>
<?php
}
?>

<?php
function Tema_sociosuenos()
{
 global $PHP_SELF;
?>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<?php
 include 'sociosuenos.txt';
?>
<INPUT TYPE=hidden NAME="estado" VALUE="principal">
<INPUT TYPE=submit VALUE="Volver">
</FORM>
<?php
}
?>

<?php
function Tema_histoactualidad()
{
 global $PHP_SELF;
?>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<?php
 include 'histoactualidad.txt';
?>
<INPUT TYPE=hidden NAME="estado" VALUE="principal">
<INPUT TYPE=submit VALUE="Volver">
</FORM>
<?php
}
?>

<?php
function Tema_tecnicas()
{
 global $PHP_SELF;
?>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<?php
 include 'tecnicas.txt';
?>
<INPUT TYPE=hidden NAME="estado" VALUE="principal">
<INPUT TYPE=submit VALUE="Volver">
</FORM>
<?php
}
?>

<?php
function Tema_anexos()
{
 global $PHP_SELF;
?>
<FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
<?php
 include 'anexos.txt';
?>
<INPUT TYPE=hidden NAME="estado" VALUE="principal">
<INPUT TYPE=submit VALUE="Volver">
</FORM>
<?php
}
?>
</BR>
</BR>
</BR>principal.txt:
</BR>
</BR>DISFRUTAR MÁS SIENDO RESPONSABLE Y MODESTO: MISIÓN VITAL Y LIMPIEZA DE PSIQUE.
</BR>Responsable quiere decir equilibrado, entre otras cosas. Gracias a Cristian (Zeballos), Marco de Torrelavega: La Última ReEvolución...
</BR>
</BR>Breve introducción:
</BR>- ¿Raro esto que digo de ser responsable para ser más feliz NO? Para ser responsable, yo diría que hay que saber la misión espiritual de vida (se calcula el llamado Nodo Norte...) y seguirla. Cuando tu actividad está en consonancia con la misión (parecida a "lo que te mueve"), la vida es más suave (estás en tu lugar). La vida se endureció con el trabajo asalariado ("invento masón"): nos llevaron (por estupidez u obligación) a las ciudades, y se favoreció a empresas explotadoras. Ahora la gente trabaja para que las estadísticas sean buenas, para que la gente no se rebele (así que las élites quieren que estés ocupado en "nada" / "humo").
</BR>- ¿Qué significa lo de modesto? Que se busquen, NO logros grandes y deslumbrantes, sino propósitos para el crecimiento personal (que define tu bondad; al crecer / superar algo que "desconcierta a tu psique", desreprimes creencias o simplemente las cambias, y eso hace que reacciones mejor, puesto que las represiones te dominan inconscientemente). Y así, terminas más fuerte, y feliz con poco. Todo es Psicología: enfermedades...
</BR>* Si los logros NO te contentan, puedes NO estar conectado con un propósito claro / determinado: los obstáculos pierden sentido (en vez de tener un significado, apreciando el camino, que es lo importante, ser bueno). El propósito motiva (es un faro), y buscas escenarios sociales con gusto (a pesar de las reacciones dolorosas) para tener experiencias que te acerquen a la solución psicológica... en vez de huir. Establece submetas a corto y largo plazo; ajusta tu propósito con el tiempo; y agradece (eso te "anclará" al proceso).
</BR>* Cuando desreprimes / te vuelves bondadoso (fuerte), la cara es más serena, menos enfermizamente risueña o "activa". Ojo, los psicópatas llevan máscara.
</BR>* Ejemplo de propósito: ver mejor (el astigmatismo tiene algo que ver con dejar tus valores y adaptarte a la sociedad enferma en vez de integrarte, y hay que que aprender a ser independiente pensando, ¡esas creencias copiadas de la familia, y ese NO soportar que los demás te miren mal / complacencia!; la miopía, con ver el mundo como amenazante... Sí que mejoran con pruebas sociales superadas).
</BR>- Mucha gente (atrapada en las creencias oficiales...) se muere por trabajar como quieren las élites (explotados), por imagen ante los vecinos, deudas... Un trabajo necesita una motivación "de persona elevada". La gente que NO se decide a trabajar por lo indigno de los horarios, la inutilidad de los trabajos, y el estar rodeado de psicópatas integrados, podría tener ganas si cambiase la sociedad (tomando nota del siglo 18, con esas empresas familiares en el medio rural, ¡Y CUYA TECNOLOGÍA ERA CONSIDERABLE!). Y habría que compartir un poco.
</BR>
</BR>

Capítulos:
- LO IMPORTANTE: misión vital y modelos de bondad y recreo / diversión.
- Psicología para tener salud.
- Sociología y sueños.
- Historia y actualidad.
- Anexos.

####00101importante.txt  Antes de hablar sobre cómo se calcula tu misión de vida, bondad (pecados, tipos de alma / inteligencia y el hombre sigma), y arte inteligente (música y videojuegos). Sin olvidar el mal (iría al final).
####BONDAD:
##Muy importante tar atontao pa recibir "respuestas" de la parte del mundo que no vemos.
##Pecados REALES (fuente: LeoenPhi. NO exactamente los que dice la Iglesia):
* El más dañino podría ser la soberbia, pecado de psicópatas integrados (sus pupilas son muchas veces atractivas; y van a querer hacerse los buenos en público, aunque con sangre fría pueden dejar al rabioso como el malo; ellos matan con sólo transmitir mala energía, combinada con tortura psicológica "de buenos modales", muchas veces en la intimidad). La arrogancia es la antesala (apropiarse de cualidades artificialmente: sentirse iluminado habiendo pasado por la New Age y sin haber desreprimido conscientemente por Jung...). Se necesita al otro, el soberbio no es solitario. La inseguridad lleva a la psicopatía (padres que no están, que nunca te dan el OK o cambian de criterios...).
* Gula (aparte de "incorporar algo" para no ver dentro de ti) es también cobrar y ponerse a gastar al minuto compulsivamente, sólo porque al comprar sientes "gustito". Y luego viene la culpa (que no arregla nada). Es incluso más dañino para la sociedad no tener objetivos nobles (ya sé que hay que trabajar para sobrevivir, en trabajos incivilizados, con productos que no necesitamos): trabajo en lo valorado por el inconsciente entorno (no esperes a que las cosas cambien, piensa que hay muchas cosas que te duermen). Esto tiene que ver con la avaricia (acumular y guardar, siendo difícil moverse o iniciar, por miedo a perder "el tesoooro". Alguien avaro puede darte cosas, hacer cosas por ti... sólo para evitar ser generoso / dar su tiempo. El avaro quiere + dinero, mejor trabajo... y cuando lo consigue, lo goza un breve espacio de tiempo). Para la avaricia, evalúa a tus padres, y valora lo que tienes. Es terrible la lujuria también (es un exceso. Por ejemplo, comprar una casa grande para obtener "respeto", cuando es tan importante no depender de la aprobación de los demás, ¿es incluso peor que no tener objetivos nobles?). Causas de la lujuria "sensorial": falta de afecto en la infancia (querrás formas sexuales "raras" quizás), represión de lo animal (incluye lo sexual)... Solución. NO se acaba el mundo cuando no tienes lo más sensorial, o no sabes lo que es "tocar un pecho", o cual es exactamente tu tendencia sexual. Quizás sin desearlo, ocurra sin más.
* Ira: fuerza descontrolada. ¿Puedo levantar más peso si mi psique está enferma / en fase activa de la enfermedad? Si antes reprimiste, levantas más (Tauro, que ya es fuerte por naturaleza). La cólera, te centra, te ayuda a ver luz. Pero sufre mucho el iracundo. Tras estar descontrolado (sin ver ni oír, atacando) se siente muy mal (por lo general). El afuera se convierte en una extensión de mi interior (sin límites). Puede ser incentivadora (ponte a escribir, a hacer ejercicio sano...) o congelante. Causas de enojo: necesidad de control (que todo salga como esperas y no aceptar otra cosa...), timidez (te importa lo que digan los demás, y deberías quererte un poquito más)... El iracundo tiene un profundo miedo a la oscuridad (a mí me encanta), ¿a mirar las manchas de psique o la verdad social? Expresa tu ira o canaliza la enegía sobrante. Y recuerda, busca soluciones (querer y comprender "al culpable que no te deja dormir", y ponerlo verde si procede).
* Envidia: quieres que lo que tiene el otro lo tengas tú, y ya no el otro. Acéptate y autoevalúate (hay que quererse un poco). Por otra parte, ¿qué cosas atraes para que te den una lección (quien se victimiza, al "abusón"...)? Por otra parte, no envidies a los empollones: si tienen memoria perfecta, son idiotas.
##La inteligencia depende en gran medida del número de vidas vividas:
#Niveles de evolución de las almas (luego veremos otra clasificación):
- Animal: materialista (teme perder).
- Infantil: no acepta la vejez. Colecciona (objetos, diversiones...).
- Romántico: suplanta ser por parecer. Influido por la tele... Cree que encontrar pareja es la solución a su vida.
- Adulto: ¡el otro ya existe para él! Se les pueden aparecer explotadores, tiranos, falsos gurús, estafadores...
- Social: la persona va a su interior, y a la vez lucha por la felicidad de todos los humanos, de animales...
- Cósmico: se entrega a la mutación constante.
- Divino: profetas, magos...
#Tipos de almas (clasificación alternativa):
- Alma recién nacido. ¿Pruebas de supervivencia? Sexualidad animalesca, debe enseñársele lo que es correcto y lo que no. Aprendizaje a través del sufrimiento. ¿Muchos son inocentes o místicos? Ya veis, místicos con almas poco evolucionadas.
- Alma bebé / niño (18 meses a 5 años) = encaja totalmente con la jerarquía de mando, y por eso llegan alto. Aprendizaje a través del dolor. Preocupado, fiel, orientado a la familia. Carecen de juicio propio (sólo entienden una forma de hacer y se resisten al cambio). Su sexualidad les incómoda, sienten culpa y vergüenza. Tienden a ser obsesivos con los gérmenes y la limpieza. Operan más por emoción que por razón. No perciben que sus pensamientos, sentimientos y actitudes les causan problemas psicológicos.
- Alma joven / normal (6 a 12 años). Aprende con la pérdida. Generalmente, programados para el éxito y con poca profundidad. Asuntos de poder, fama, dinero. Enfoque: "yo voy a ganar y además tengo razón y tú no". Fuertemente identificados con su físico (y apariencias en general). El hecho de creer que "no regresarán" les da el empuje y la motivación para volverse ricos y famosos. Frecuentemente no se cuestiona sus motivos. Promueve "el progreso" (podría ser el mal) y la producción. Presionador, encuentra lo que está de moda. Explota el presente, ya que no existe el mañana.
- Alma madura (12 a 18): desaparece el egoísmo bastante. Aprende con la angustia. Los niveles previos son conscientes hacia el exterior y crean karma negativo. ¿Quién soy? ¿Por qué estoy aquí?. Comienza a buscar la verdad. Cambio del poder (Chacra 3) a las relaciones equilibradas (Chacra 4). A veces no ubica la diferencia entre las demás y ella misma. No espera que otros estén de acuerdo con ella y desea que la dejen en paz. Así como el alma bebé desea una casa como las demás y el alma joven desea una mansión en la colina, el alma madura desea una casa que se pueda construir a su gusto. La habilidad artística se desarrolla al máximo. Intenso, emocionalmente explosivo, puede crear crisis y convertirse en víctima de ellas. Batallas internas: percibo cómo me ves y no sé responder a eso...
- Alma Vieja: aprende con el miedo / terror. Gusta de la soledad, la profundidad y lo sencillo, y se ama la verdad. Valora relaciones personales y experiencias más que posesiones. Considera sus luchas tan sólo como una parte de su camino. Su intuición suele acertar con lo que es bueno o malo. Te sientes conectado con ciertos períodos de tiempo (más humanos...). Otros quieren derramar su historia de vida a tan sólo minutos de conocerte (pasa lo mismo con los psicopatas, les cuentas tu vida). Escucharás sin juzgar.
* Más. Dotado para la enseñanza. Buenos terapeutas. Prefiere trabajar para sí misma, con los horarios que le gusten. Puede parecer como flojo o lento. No te especialices. No se identifica con ser hombre o mujer, ya que ha sido ambos infinidad de veces en vidas pasadas. Más problemas de autoestima, pues son más conscientes de sí mismas (ven hacia adentro). Son la luz y los verdaderos líderes (INFJ e INTJ). Evita (suele) los estudios superiores (universitarios) y aprende por investigación, experiencia y sobre la marcha. Antes de terminar el ciclo deben enseñar todo lo que saben por lo menos a una persona más. Tienen que limpiar mucho la psique para salir a flote, y relativamente pobres.
- LAS EXPERIENCIAS DEL ALMA TRASCENDENTAL E INFINITA SE LLEVAN A CABO FUERA DEL PLANO TERRESTRE, SALVO RARAS EXCEPCIONES.
##VALIOSO HOMBRE SIGMA VS TERRIBLE (MEJOR CUANTOS MENOS HAYA) MACHO ALFA. ¡CLAVE PARA CIVILIZARNOS! Psicópatas y TPLs (trastorno que se da tras una enfermedad llamada "constelación agresiva"), machos alfa y andropáusicos haciendo teatro (dar imagen masculina, por miedo...), e intercambiando información con los psicópatas, y aspergers. ¡Estos son los machos mentales, con una forma de ser peligrosa! Les falta femineidad, aunque claro, un asperger, como NO se cure (son 2 traumas a detectar, creo), ¿qué va a hacer, si "Dios" le dio inteligencia robótica / NO femenina?
#superrenacer no le gusta al hombre sigma:
- Mirar escaparates (el tiempo es valioso, haz todo con un propósito elevado).
- Luces brillantes, sonidos fuertes y aglomeraciones de parques de atracciones (no se permite la reflexión, es inmoral).
- Superficialidad de clubes nocturnos.
- Selfies (mejor, disfruta de la experiencia).
- Trabajo de 9 a 5 todos los días salvo el fin de semana.
- Modas y tendencias (un Spectrum es + artístico / - cargado gráficamente, que un PC, siempre mejor para preciosos juegos esencialistas).
- NO necesita validación externa. ¿Tu madre te dijo de peque que eras perfecto? ¿Eres un poco narcisista por eso?
- Ven las celebridades como son, personas como otras (no maestros; y fíjate en los jovencísimos deportistas).
#supersociología el hombre sigma suele haber pasado muchas pruebas psicológicas, haber estado con gente tóxica, y haber pasado de ser frágil a "una persona":
- Suelen liderar sin problemas (y mucho mejor, porque no son jefes).
- El alfa dice "lo difícil que es el proceso", y quiere trabajar en equipo y llevarse el mérito (el sigma no, chocando con el alfa). El sigma no va por reconocimiento, como el típico escultor de "yo soy estrictamente necesario para la gente más avanzada, y mis esculturas deberían estar en todos los balcones".
- No tiene complejos de inferioridad (al menos, muchos).
- El sigma tiene ideas propias, hará lo que considere correcto y vive con inteligencia, no reglas.
* Alfa maneja a sigma sólo si tiene en cuenta las ideas y opiniones del valioso aliado sigma. Alfa no tiene patrón para el impredecible sigma, y sigma, en cambio, tiene calado al Alfa.
- Los alfa ven lentos a los sigma (que tienen "autoridad emocional", tienen que pensar bien antes de decidir, es decir, son avanzados). La gente rápida, en fin, menudo estorbo por lo general.
#superrenacer llegar a ser del grupo de hombres más avanzado Los Sigma:
- Independencia feroz (me encanta la soledad) y disciplina superior (bueno, todavía no la tengo).
- Infancia desafiante "llorando". Los errores fortalecen para crecer (¿cuando se aprende esto, al dejar la Escuela?).
- Usan empatía + mente analítica con las chismosas (esta adulta es una niña que tiene miedo de verse), los psicópatas...
- Curioso por el mundo que lo rodea. Y muy inteligentes (las notas de niño sin estudiar significan mucho).
- Actitud tranquila, no se quejan por pequeños problemas (tienen "perspectiva"). Cabeza fría, incluso en tragedias.
- Esto debo mejorarlo: el momento es ahora (no esperar a circunstancias perfectas). NO superplanifican, y ajustan su enfoque por el camino.
- No demuestran su valía a quienes critican, siguen adelante.
#El hombre sigma esperará a la mujer "perfecta" (comparte valores como el equilibrio...). Motivada de apoyar tu misión de vida y respetar tus peculiaridades. Capaz de mantener grandes conversaciones (y que ella desafíe tus ideas cuando se puedan mejorar; así se mejora la creatividad). Modesta (crecimiento personal a través de la introspección...), y nada de materialistas. Poco drama (emocionalidad madura...). Expresa necesidades y sentimientos, estando receptiva a los del hombre sigma. Da apoyo emocional, y entiende que un hombre 10 "es vulnerable".
#Más:
- Se sientan detrás (pasan desapercibidos y pueden marcharse; no son necesariamente tímidos, les interesa analizar al otro y aprender, más que expresar).
- Detestan que la gente intente seducirles para comprar sus productos.
- Se dan cuenta de los que piropean para conseguir algo.
- NO soportan a la gente que habla mucho ("odian" lo trivial, y no querrán coincidir con "el típico vecino"). Para no tener que intentar salir de la conversación, prefieren esquivar (sin que se note, sin hacer daño).
- NO siempre sonríen (son elegantes, elevados). NO necesita compartir su disfrute con los que los rodean.
- Aversión a hablar por teléfono (mándales SMS o habla en persona) o con alguien que se queja mucho (quieren gente interesante, motivadora y con sentido del humor).
- Valoran más la calidad que la cantidad (amigos...). Apartarán al tóxico en un psipás.
- Recuperan su energía estando solos (socializar agota a los mejores).
- Les gusta saber mucho de lo que van a hacer, y decidir sin presiones.
#Más:
- Observan en silencio, concentrados, sin distraerse). Comprenden a alto nivel.
- Piensan antes de actuar (y las emociones no afectan). Si los ves abstraídos, no necesitan nada.
- Siempre tienen algo que hacer (objetivos relativamente esencialistas, muchas veces alejados de las normas)
- Al ser atacados, tenderán al positivismo, sin ira constante.
- La lluvia (tiene ruido blanco), cuando no corren al trabajo... les hace reflexionar y conectar con la naturaleza y consigo mismos.
- NO tienen miedo de hablar cuando es necesario, y pueden tomar el control de la situación cuando es necesario.
- El buen sigma está seguro de sí mismo, y si le gusta una mujer, puede iniciar una conversación tranquilamente.
- Son salvajes a veces, pero no van por ahí contándolo.
- Muy fieles en el amor, y los mejores amigos. Sacrifican por las personas que quieren. Entienden el valor del compromiso. Ofrecen los mejores consejos y asesoramiento.
- ¿Que algunos hombres ya nacen sigma?
- Sus reglas no son populares, y no se sienten menos cuando están con triunfadores.
- Respetan a quienes los respetan (no intentan abusar...), y reconocen el valor de los demás (pasando por encima las diferencias).
- ¿La validación de la gente (elogios, no siendo objetivo como cuando te dicen que estructuras bien la información...) te hace caer en un estrés por querer agradar, y ya no eres tú mismo?
- Por supuesto que socializar es perder el tiempo (en principio). Si la cafetería fuese un lugar de negocios, conectar con artesanos...
#Más:
- ¿Cómo que disfruta de los desafíos intelectuales? ¿NO se supone que los grandes mediums no deben pasarse el día leyendo (información para nada)?
- Sí, primero la moral, que los objetivos. Las empresas son inmorales, sustituyendo la forma de trabajar del pasado.
- Saben aprovechar al máximo su tiempo y recursos.
- Son ellos mismos con los desconocidos, ¿incluso con los tontos o locos? Hay que guardarse cosas de vez en cuando. Te encontrarás con cientos de personas de las que verás muchos fallos morales en poco tiempo.
- Ojo, que la mejora personal dedicada a ser mejor en el trabajo, es una mierda pinchá en un palo, comparada con la de ser civilizado realmente.
- ¿Se visten de chicos malos (muchos tatuajes es de gilipollas profundo; y cuidao con exhibir barba, con gafas de sol...)? "Ser mal hijo" (cuanto más te diferencias de tu familia positivamente, mejor), no debe extrapolarse a la imagen (maldita imagen).
- Falta de preocupación por encajar en los moldes establecidos (si tengo que enseñar taichí en el Café Dindurra, lo enseño).
- ¿NO depender de otros? Bueno, no lo cumplo, pero me corto el pelo a mí mismo.
##ARTE INTELIGENTE (MÚSICA Y VIDEOJUEGOS, SOBRE TODO DE LOS 80, CUANDO TODO ERA MÁS ESENCIALISTA, PERO OJO, LOS SINTETIZADORES YA ESTABAN MUY AVANZADOS, Y SE DABAN LOS MEJORES GRÁFICOS EN LOS VIDEOJUEGOS, QUE NO ESTABAN "SATURADOS"):
#ANTES DE IR DEFINITIVAMENTE CON LA MÚSICA Y LOS VIDEOJUEGOS, 3 "DE VER": VAYA SEMANITA (EITB, SE METEN CON TODO CON LIBERTAD), Y 2 PELÍCULAS SELECCIONADAS POR GOERREIG POR SUS VALORES MORALES (LOS MALOTES DE HOLLYWOOD NO SE HAN ATREVIDO A HACER REMAKES "MODERNOS" DE ELLAS): LA HISTORIA INTERMINABLE (SE TRATA DE DESPERTAR LA PARTE FEMENINA, INICIANDO "EL FUEGO" CON LA MASCULINA), Y CONAN I (NO EL II), DONDE CONAN VA DE LO MATERIAL (FEMINEIDAD DE BAJO NIVEL) A LO SUTIL (FEMINEIDAD DE ALTO NIVEL). Para la Historia Interminable:
- La peli (con comienzo celestial) indica la vieja lucha entre beres (raza blanca, buenos, y gigantescos, de ellos vengo) y paios (raza naranja, maldad "biológica"; también vengo de ellos: estos cabezudos obligaron a la mezcla; y algo de negro tendré posiblemente: las 3 razas raíz puras). K (paios), Koreander: los paios tienen el poder ahora (libros de hermetismo...). Bastian vive con su padre (paios, patriarcado; los paios mandan hoy, pero se hacen pasar por feministas, y NO lo son, quieren mujeres hombrunas, y gente robótica). EsteBAN (los ban son bere) habría sido un nombre más apropiado que Bastian. Lo que digo ofende, claro, porque choca con lo que te contaron. Pero tengo muchas razones para pensar así.
#MÚSICA:
- Perales, un grandísimo autor, con algunas producciones increíbles (30 Grandes Canciones). Descúbrelo, sin el miedo del machista.
- Talk Talk, los inventores del postrock (y no Radiohead). Fueron cambiando de algo "technopop" a algo grandioso. Hay que escucharse el disco "The Very Best" de principio a fin para ver lo grandes que fueron.
- Génesis y Phil Collins, nos abren un mundo musical maravilloso, que incluye canciones "para gritar como Phil", y desahogarse.
- Más: Pet Shop Boys, David Bowie, Simply Red, Prefab Sprout, Blur (de los que salvaron los 90), Billy Joel, La Dama se Esconde, Diego Vasallo y Duncan Dhu, Mecano claro, Heaven 17, Los Smiths, Miguel BOsé, Mike Oldfield, Spandau Ballet, Durán Durán, Roxy Music, The Police, Pulp, Teras for Fears, Madonna sí (aunque suene "de bajo nivel", sus primeros discos están bien)...
- Si quieres tener clase musical...
#Videojuegos:
- Outrun (arcade, SEGA, Japón, 1986): anticipación, reflejos medios, poca necesidad de memoria... y fácil de terminar. Jugar Drive Out.
- Golden Axe (arcade, SEGA, Japón, 1989): jugable y bello hasta la médula (el jefe del final puede frustrarte, eso sí). Ver DJ Boy.
- Pang (Amiga, OCEAN, original arcade Mitchell / Capcom, Japón, 1989): un juego mitad puzzle, mitad de esquivar y plataformear.
- Lemmings (Amiga, DMA Design / Psygnosis, UK, 1991): puzzle de construcción. Hay que buscar soluciones, con recursos limitados.
- Black Tiger (Arcade, Capcom, Japón, 1987): quizás el "arcade bárbaro" + jugable y bello (Istroia). Ver "Ghouls", Shinobi y Tiger Road.
- Shadow of the Beast III (Amiga, Reflections / Psygnosis, UK, 1992): belleza, arcade + puzzle... lo tiene todo. Ver el II (FMTowns).
- Leaderboard (Amiga, US Gold, UK, 1987 / 1988): colores suaves, se entiende en poco tiempo cómo funciona, relaja... ¿Para qué más?
- Tickland (Spectrum, Juan Antonio Paz Salgado, España): el personaje va de cuadrícula en cuadrícula, lo cual hace el control + fácil.
- Manic Miner (Spectrum, Software Projects, UK, 1983): ¡el rey de las videoaventuras de una sola pantalla! Superaba a los arcades.
- Head over Heels (Spectrum, Ocean, UK, 1987): bella videoaventura, juntando y separando caminos de 2, en vez de complicarla (objetos).
- Prince of Persia (PC, Jordan Mechner / Ubisoft, USA / Francia): esos movimientos, ese desarrollo cinematográfico... Una joya.
- Buscaminas Windows (PC, Microsoft, USA, 1989): lógica, concentración, no dar nada por sentado... Infinitamente jugable.
- Bruce Lee (Spectrum, Datasoft / OCEAN, 1984): es una aventura tan sugerente y a la vez jugable (y graciosa)... ¡Menudos decorados!
- Profanation (Abu Simbel; Spectrum, Dinamic, España, 1985): aventura de ajuste fino, con decorados impresionantes. Jugar Phantomas II.
- TMNT Back from the Sewers (Game Boy original, Konami, Japón, 1991): un arcade explosivo, con música muy buena. Jugar Marioland II.
- Tetris (Arcade, Alekséi Pázhitnov / Atari, 1984 / 1988, Rusia / USA): el juego de puzzle por excelencia. Jugar Boxy Boy.
- Menciones: Turrican III, Astro Marine Corps (Amiga, Spectrum 128 kb).

####El mal:
##GENTE POCO SANA, BESTIARIO HUMANO:
- 01 me parece muy bien que tengas mucha energía para hacer cosas, pero que esas cosas sean esencialistas, y por favor no me metas en tu vorágine de energía loca, molestas ignorantín.
- 02 infeliz vecina habla de los demás y quiere dar consejos. Porque teme meterse en su propio interior. Usted hace lo que la gente normal por miedo a diferir; si los demás se tiran al río... Cúrese si tiene algo de inteligencia, no humille.
- 03 tú que has crecido maldiciendo lo femenino en ti, pues tu cadera era más ancha que tus hombros, alégrate, porque la imagen es cosa de sociedades ignorantes y apénate por haberte adaptado, machificado, robot creído (y posiblemente áspero).
- 04 tú que eres simpátiquín o hablas llorando, denuncias a tus colegas; pero trataste de maltratarlos psicológicamente. A ver quién te aguanta sin inteligencia emocional. Buscar tener buena imagen hace de esta sociedad algo superficial, donde los peores campan a sus anchas simplemente "haciendo teatro".
##3 arquetipos principales:
#Víctima (niño respondón humillado, niños con padres resolutivos y un poco brutos que no dejan que experimenten; actitud: queja, quedarse parado, depender, resentimiento...). Tipos:
* Víctima abnegada (yo soy bueno y complaciente; tú, malo, porque pides mucho): Marge Simpson (fíjate en que no enseña a hacer las tareas de casa, sólo se queja, es salvadora que cae aquí temporalmente).
* Torpe (genio de la casualidad negativa, ¿almas superavanzadas con misiones difíciles?): te sale mal una pizza, la enseñas, y dices, ¿ves, no puedo hacer más? Decirle "irás mejorando, te faltó un detalle...".
* Escapistas / histéricos (grave): es que a mí la tecnología... Decirle "empieza por poquito".
* Vampiros (exhaustos, ¿fatiga crónica?): todo conspira contra ellos. Procastinan. Decirle "¿empiezas o cambias?". El "mira lo que me hiciste hacer" y el "tío, has cambiado", ¿irían aquí? ¿Y un beso (o un "porfi") para que hagan cosas por ti (chantajes y tretas, tan habituales en la gente que se victimiza)?
#Salvador (amaestra, frena, crea y busca víctimas, van a tapar el fallo del otro, por diversas razones). Los complacientes piensan "si no te ayudo, no me puedes amar". De niño, responsable del bienestar ajeno, o sin necesidades tenidas en cuenta; no cuentas los problemas, y eres olvidado o la estrella). Tipos (nunca ayudes si no te lo piden, es mal karma, puede generar deuda...):
* El que no soporta un daño legítimo. Ejemplo, el padre que regaña al hijo. Solución, "¿puedes hacerte responsable de los actos del niño?".
* "Si no fuera por mí...". Te ponen a un costado. Solución posible: lo hago más lento, pero lo hago, gracias. ¿Aquí entran los que dan por culpa?
* Buscan reconocimiento. Si rechazas lo que hizo, se mete contigo (así, se descarga). Solución: gracias, pero tenía otros planes.
#Verdugo (se sintió débil de pequeño, por ejemplo, no consiguiendo una meta). Perfecionistas y "exigentes" (que seas como ellos). Tienen que estar por encima (o creérselo) de los demás, en videojuegos... Culpa y frustración (¿poca tolerancia a la misma?). A la defensiva, ansiosos y con guardia alta, para controlar. Atacan preventivamente, y si no se salen con la suya...  Tipos (el psicópata terciario encaja perfectamente aquí; cuando cree que alguien quiere ocupar su plaza o futura plaza, puede aplastar, quizás con palabras suaves e hirientes, para que nadie se entere):
* Delegan (importante) y viene un salvador a buscar reconocimiento, y descargan sobre él.
* Se derrumban los argumentos del hostigador y hace una escena, un portazo dramático ("me voy, pero porque quiero")... NO admiten el fallo.
* Adular para que hagan algo. Solución: di claramente qué quieres de mí.
* Chismes para ocultar debilidades. Lo importante no es ser el mejor, sino fortalecerse interiormente (todos tenemos fallos).
* "¡Mira lo que está haciendo Eduardo!", para limpiar la propia imagen. Solución: he fallao, ¿te alegras por eso?
* Criticar para dividir (tu amigo Juan hizo tal cosa). Solución: hablaré con él si procede; o castigar (nadie sabe qué pretendes ni quién eres).
##Malas actitudes (sacado de piezas de ajedrez como arquetipos, LeoenPhi):
- El clanismo, con una ley (escrito, persona autoritaria...): "tú sigue mis reglas, sigue siendo malo y no te diferencies mucho o te haremos sentir culpable, y estarás protegido". Te camuflas, usando el pronombre "nosotros", en vez de "yo".
* Lannister rechazaba a su hijo enano, pero hacia afuera, le daba propiedades, y decía: el peor de los nuestros es mejor que los otros.
* Defensor / a de la Ley, pegamento (hacen cualquier cosa por sus niños, manipulando a veces, incluso para que los del clan se sientan débiles; entras en dependencia, y exigen agradecimiento / mención).
- La jerarquía del "sálvese quien pueda":
* El jefe. La culpa está en los otros (así puede arrastrar fanáticos). Piensa que está en desventaja, y eso transmite. Pero se cree en un lugar más alto / mejor, desde donde comunica. En vez de mirar adentro, intentan mejorar su imagen. Hacia el exterior, quieren mostrarse fuertes, aunque por dentro haya victimización... Atractivos físicamente o magnéticos. Seducen. Dominio a través del miedo... Napoleón: inseguro (bajito...). Misógino (pero en casa, Josefina "llevaba las riendas"). Imagen de eternos "jóvenes".
* Quien vive en su registro imaginario (emociones) y cuando la toma el pánico es peligrosísimo, como un animal acorralado. ¿Se queja de que no se le acerca mucha gente, y es realmente por la energía negativa? Nuestra sociedad parece un clan, aunque en su trasforndo NO se maneje así. Es competitivo ("yo voy primero"). ¿Frustrado? Terror al vínculo (que el otro sea más importante que uno mismo). Pueden pasar a víctima vampira. La "viuda negra", tras "comerse" a su primer compañero, lo pone por las nubes, y rechaza a todos los demás. Marisa Coulter: reprime la emoción, no mueve un músculo, ¿MIEDO A PARECER VULNERABLE? Isabel de Francia mató al marido y sus amigos, con los que pasaba demasiado tiempo. Jocker, víctima de Bullying, empieza a vengarse alocadamente.
- El consejero:
* Real y clanista. Si no terminaste tu carrera, te dicen que no eres nadie. Si la terminaste pero no te doctoraste... no eres nadie. ¡Son los defensores del sistema esclavista de Escuela y cursos! ¿Con terror a que le expulsen del clan si no sabe algo? Sabelotodos. La Universidad es una fábrica de estos monstruitos (consejeros medioambientales...). Hay ansia de perfeccionismo (que lleva al narcisismo). Algunos se quedan callados porque no lo saben todo. Necesitan darle una utilidad a la mierda que llevan dentro (exceso de información; se aprende haciendo), y te la sueltan ahí, sin motivo casi. Deben usar la intuición mucho más que la lógica.
* Falso / manipulador. Siempre contando sus viajes, experiencias... incluso inventados. Tiene miedo de que descubras lo que no sabe. Si se calla, podrías preguntarle algo que no sepa. Busca admiración, ascender, y amedrentar al otro con experiencias...
- El guerrero:
* Paladín: especialista / habilidoso al servicio de un jefe, sin importar mucho la moralidad. Luke Sky Walker (Darth Vader se individuaba en la necesaria oscuridad, donde ve su mierda, y trata de convencer, no mata y mata). Ayudan (a víctimas...), recibiendo los balazos (si hay un verdugo). En lo profundo, buscan retribución (no simplemente las gracias) de la víctima (y si no existe la víctima, se crea, poniéndose un poco por encima; "realmente, necesitas mi ayuda"), para dejar contento "al amo" / Rey. El gato te trata como a un igual, no es paladín, el perro... El Príncipe Feliz (salvador mártir) y la Golondrina. Por culpa, pueden ayudar a indigentes (algunos sí necesitan ayuda).
* Mercenario: tramposo, evasivo (como los psicopatines), poco involucrado en cuestiones sociales (aunque puede simularlo), hipócrita, robaméritos... Han Solo: genera interés en la dama, y las chicas esperan que los mercenarios se conviertan en paladines, "gracias" a Hollywood en parte.
- La Torre:
* Clanista. La mente institucional, anulando valiosas diferencias. Ese niño que denuncia a su padre por no seguir las directrices del partido único que pretende controlarlo todo... va sin pensar, como muchos policías contra los manifestantes. Pueden discutir hasta cansarte. Y no te van a escuchar (iría contra el jefe). Procusto: cortaba o alargaba las piernas a sus invitados, para igualarlas. La Santa Inquisición: si NO pensabas igual... era fácil que te torturasen.
* La Torre Negra (no clanista / blanca) avisa de su peligrosidad, ¿el macarrilla con chupa de cuero que chasquea los dedos junto al surtidor de agua je je? Abundan (afroditas pandemos...). Aún en fase pasiva, si te acercas, te hará picadillo sin temblar (como una viuda negra). Una reina negra muy encerrada, ¿acorralada?, puede ser torre negra (y una torre blanca puede venir de una reina blanca desplazada). Ejemplo 1: un títere (duende) que de pequeño me dio mucho miedo, y que decía, ¡como te acerques a mi árbol, me las pagarás! Ejemplo 2: lugares de "no vayas allí" (ya anuncian algo lúgubre...). La Torre de Londres: no sales si entras preso.
##arquetipos olímpicos. Hay gente que se parece a los dioses griegos, ¿están estos inspirados en patrones de conducta, aparte de ocultar al Is-troia bere (eso ahora no nos preocupa)?:
- Hera, contratista (femenina) y competidora (masculina) a la vez:
* Se enfadaba con Zeus por salir éste con otras, pero el problema estaba en ella, que se infravaloraba al compararse con otros (tomo nota para mí). Sus celos la llevaban a querer eliminar a mujeres (eliminar a la competencia).
* Los contratistas se brindan al otro, y si no los valoras, ¿podrían irse? Hera es una mujer tradicional, y las Heras suelen recibir burlas de neofeministas (gente débil).
- Apolo, artes + ciencia (me suena a Tauro, tal vez a Libra...):
* Logros para ser "niño bueno". Su madre le decía que no daba guerra, que era perfecto (¿Sin cantar New Wave?)... Lo convierte en un salvador (y Hera parece un verdugo; los verdugos se vieron débiles de pequeños, por ejemplo, ante el nacimiento de un hermanito, vieron debilidad en no seguir acaparando la atención de los padres; en cambio, una víctima intentó hablar, y le cerraron la boca).
* Deberían lunarizar (intuición y descanso), en vez de solarizar tanto (percepción 3D y trabajo).
* Tiene miedo al rechazo, y es superficial, "¿por qué me rechazas con lo chulo que voy?". Intenta comprar el amor de Cassandra, ¿materialismo?
- Afrodita Pandemos (no Urania), la chica fresca verduga (me suena a algunas Géminis):
* Hacer sin reflexionar casi, por impulso (ve lo que no tiene y cambia de dirección sin más). Y engañar sin problemas de conciencia (aunque al final, se la termina descubriendo). De niña es deseable (pobrecilla). Contraria a Hera (mujer tradicional), y a la planificadora Atenea (ya la veremos).
* Si no es lo más (estar por encima de los demás), puede ser peligrosa. ¿Le va lo de criticar sin razón y dar consejos?
- Hermes (verdugo Géminis), elocuencia, engaños, liante, niño prodigio, comercio, ladrones (comercio + ladrón = vendedor je je)...:
* Travesuras (su padre suele reírselas), transgredir. Les gusta usar el ingenio sin límites (morales...). Diles por qué ciertas barreras son útiles (y lo que haces te vuelve, la vida...).
* Tiende a sacar mucho dando poco, y le da miedo no abarcarlo todo (yo creo que se puede, pues la base, ya es todo, ¡por Escorpio! ¡La Psicología / causa primera, es gran parte de la base!).
* Como le gusta a la aventura, y no se compromete, ¡háblale de la aventura de comprometerse!
- Atenea (suena a Virgo): su madre no saber conectar con este "robot" ayudador, que debe humanizarse, y admira a papá (negocios, triunfo...). ¿Se lleva bien con Apolo? ¿Es salvadora también no (y el salvador, en el fondo del fondo, quiere ser salvado, como la víctima, por eso salva, para que la salven cuando se victimice)?
* Diferencia salvador / víctima: hay víctimas que se quejan (terrible), víctimas escapistas (terrible), víctimas torpes (¿barreras por ser almas muy avanzadas?), y víctimas abnegadas (algo tienen que corregir, y eso de "yo soy el bueno, y mi esclavista el malo", no es del todo cierto).
- Hefesto: su madre le despreció (está cojo, como Virgo / Vulcano, ¿no te suena a Virgo la parte femenina de Hera?). Hace obras para, ¿impresionarla? y luego se desliga de ellas (imagínate que se piensa que está haciendo una gran obra contigo, y cuando más le necesitas, te abandona; lo importante sería no compararte con el nuevo que venga de "aprendiz", y no verte como aprendiz, sino buscar tu propio hueco / relación único; no sé, el tío que hace gracia; mientras, quitas la dependencia emocional).
* Avergonzado, y se ríen de él. Parece salvador.
- Ares (me suena a verdugo): nació para "los movimientos" (baile, artes marciales...). Zeus (don "no me meto en la guerra, pero mando gente"), lo toma equivocadamente como guerrero, al fijarse sólo en su faceta "poderosa", y no "harmoniosa". Caldo de cultivo para ser abusón...
* ¿Con Dionisio ya encontraremos víctimas feacientes? ¿Ninguno es víctima feacientemente?
- Dionisio, desenfadado. ¿Se habla de Sagitario? NO, porque Dionisio abarca mucho, ¡y además no quiere que le etiqueten!:
* De niño, llorará / reirá con todo su corazón. De adolescente, expresivo con cuerpo y manos, no competitivo, y va con amigas.
* Drogas, alcohol, sexo...
* Dile que no son todo gente acogedora, pero que algunos le quieren de verdad (y ese amor no se pierde).
* Abre mentes cerradas. Disuelve su máscara para ser animal o renacer. Busca reconectar con su lado femenino.
- Zeus (INCUESTIONABLE), construye jerarquías, y te invita a ellas si no le vas a quitar el trono. Único arquetipo bien visto en la época paia (un hombre realmente evolucionado no es bien visto en empresas...). ¿Su hijo le destronará si és como él?:
* Político, empresario... Al llegar "redefine los dominios". La sociedad suele aplaudirlo.
* Etiqueta como quiere, ¿para conservar el poder?: Ares es irreflexivo, Apolo tiene poca empatía, Hermes es inmaduro, Hefesto es bruto, Dionisio es blando...
* Aspira (o es) a ser poderoso (no admite fallos propios), con mente brillante y clara (se adelanta) y habilidad para tomar decisiones.
* Controlador, ansia de poder (no admite fallos propios), y desconectado emocionalmente cai todo el tiempo.
* Picaflor, pero protege a quienes considera dignos.
* Debe desarrollar la modestia.
####Buenas y malas personas (psicópatas / narcisistas, gente normal y gente elevada):
##Hay muchos más psicópatas de lo que creemos. Un psicópata es un narcisista (persona con un gran concepto de sí misma, que necesita humillar para estar contenta consigo misma y así no ver su interior lleno de complejos de inferioridad; realmente, todo complejo de superioridad tiene como origen uno de inferioridad)... o también alguien que va ciego hacia su meta, sin empatía, arrollando a los demás (si descubre que cierta frase te hace daño, y la usa continuamente, estaríamos hablando de un narcisista ya). Realmente suelen ser simpáticos, muy bien considerados... Realmente, alguien que es mala gente y luego sonríe con dulzura (y aquí incluyo tambiñen a la gente normal), no debería ser considerado persona (por ejemplo, una cajera que controla al marido y sonríe en el trabajo). Al final, tanto la Escuela como la Empresa, son nidos de psicopatización de la gente normal, porque ellos van por cualquier signo de bondad y, o terminas pareciéndote a ellos, o debilitándote por sus ataques, ¡o podrías hacer que agachen la cabeza, ya que para convertir un complejo de inferioridad en uno de superioridad, hay que ser un débil mental, y además, les importa mucho lo que digan de ellos, con lo que si somos 9 contra uno... ¡Ganaremos!
- El psicópata quiere estar por encima de los demás, es competidor (no competitivo, porque hace como que hace, pero al final roba méritos...). Las personas se dividen en 3 grupos negativos:
* Salvadores. Buscan profundamente reconocimiento, e impiden que los demás afronten riesgos, hagan las cosas de la casa... Generan el siguiente grupo.
* Víctimas. Se quejan, cuando realmente, hay que agradecer por lo más mínimo. También las hay buenas, que dicen "no puedo" (su misión de vida es más difícil, pues tienen que aprender a tener éxito, a confiar en sí mismas, ¿por qué es más difícil? Porque son gente más avanzada; quien tiene éxito fácilmente suele ser gente menos profunda o esencialista, brutotes que no deberíamos imitar).
* Verdugos (aquí están los más débiles en principio, con pocas trabas para el éxito, ¿muchos deportistas de élite? Cuidado, que los estamos alabando continuamente): se sintieron débiles (no sé, al no poder retener el 100% de atención de la madre al nacer un hermanito, lo cual lleva fácilmente a la psicopatía), y albergan culpa y frustración (la madre del complejo de inferioridad).
- Vamos ya con el psicópata (fíjate en esa gente que quería hacer buenas puntuaciones en las máquinas de los bares, en quien dice que lo tuyo es una mierda, en quien no tiene una personalidad femenina en el fondo...). Digamos que la razón para convertirse en psicópata es la inseguridad (+ la frustración), que lleva al complejo de inferioridad, y el ser "alma joven" (tienes poca inteligencia emocional, lo cual lleva al complejo de superioridad) o tener un Zodiaco de "necesito mucha atención de mami".
* Para llegar a esa inseguridad: sobreprotección, padres cambiantes en sus criterios, sobrevaloración, abuso (que tu madre te niegue el 100% de su atención puede ser concebido como abuso)...
* ¿Por qué no se abandona una relación tóxica? Se comienza con comentarios "inocentes" (realmente, malintencionados), censura de tus emociones, humillaciones "de broma", haciendo sentir al otro indigno de un trato mejor. NO SE ABANDONA POR EL REFUERZO INTERMITENTE: los maltratos son precedidos de momentos de cariño y tranquilidad. El cerebro se hace adicto a los no muy abundantes ratos de buen trato (gran descarga de neurotrasmisores de placer): la víctima no da importancia al periodo de degradación con tal de recibir el "chute" / refuerzo positivo.
* La bondad y la inteligencia (te cansas pronto mentalmente por relacionar conceptos, gracias a que el cerebro no está muy estimulado externamente, por ser intuitivo y por ver la esencia de las cosas, no los detalles) están muy relacionados. El "alma niño" suele fiarse de los sentidos (es estúpida) y ser más enérgica, la gente normal ("alma joven"...) suele ser intelectual (grave fallo, inteligencia de "poco pedigrí"), y los elevados, intuitivos y esencialistas (no hay mucha resistencia física o mental, están llamados a ser los organizadores / sabios).
- Tipos de psicópatas (reservados, si piensan que no han alcanzado la imagen de grandiosidad que quieren para sí mismos, o "cantarines"):
* Primario (se le nota en el test de ojos, el derecho está igual o más activo que el izquierdo; al ser gente con gran temple, mienten sin que se note; aunque puedes hacerles sacar la rabia visiblemente). Los hay brutos (poco esconden), pero casi todos son encantadores perversos narcisistas (necesitan hacer al otro dependiente para manipularlo).
* Secundario: ya no tiene el déficit neuronal del primario, y lo imita (inducir a mujeres al suicidio porque odian lo femenino...).
* Terciario: aquí hay narcis y simples psicópatas de "ir por su meta sin usar la empatía". Es el cajón desastre, donde está todo lo que no sea psicópata primario o secundario.

########MISIÓN DE VIDA########
####Nodo Norte y Tzolkin Maya, los más importantes. Nombrelogía (un número te dirá las pruebas que has de pasar). Diseño Humano (similar a Nodo Norte y Tzolkin Maya). Eneagrama: si te encuentras mucho con cierto tipo de persona... Cejas y manos dicen mucho.
##Jung: el destino te manda a alguien, y reaccionas de forma NO deseada (reacción que dice que tus creencias conscientes o subconsciente... necesitan arreglo). Tu misión más importante es "arreglarte", y tu Carta Astral te ayuda).
##Tus años de cambio:
- Nací en 1977 = 24 = 6. Siguiente año: 1977 + 6 = 1983 = 3. Siguiente año: 1983 + 3.
* Y así sucesivamente. 1986 + 6 = 1992; 1995, 2001, 2004, 2010, 2013, 2019, 2022, 2028.
##Ciclos 9 años. 3 de Noviembre 1977 = 3 + 1 + 1 + 1 + 9 + 7 + 7 = 29 = 11 = 2. La energía del 2024 es 8. Si yo soy un 2 + 8 = 10 = 1:
- 1Comienzo. Reexaminar metas (tener en cuenta lo que te apasiona...). Año maravilloso para comenzar nuevos proyectos. ¿Conocer gente nueva para que te acompañe durante el ciclo?
* Energía: claridad mental, ambicion. Las puertas se abren con facilidad.
* Demostrar dotes para dirigir o exhibir capacidades.
* Innovacion / emprender: compartir con personas adecuadas.
* Clave: abierto a lo nuevo, flexible frente a cambios, iniciativa sin intermediarios.
- 2Conexión. Relación con los demás. Escuchar y comprometerse. Debe ser sensible a las necesidades de los demás. Lento pero valioso.
* Las aportaciones de los colaboradores (del año 1...) pueden ser muy provechosas.
- 3Creación: expresarte para entrar en contacto con tus verdaderos sentimientos y emociones: socializando, escribiendo, cantando, pintando, bailando... Decir la verdad tal como se ve.
* Energía: celebracion, diversion y placer. Naceran nuevos contactos sociales, buenos para el futuro. Puedes vender, presentar ideas, conquistar amores...
* Te expresas con verborrea; úsala con alta moralidad (por lo del karma).
- 4Construcción, sentar una base sólida para tu futuro y ordenar (organiza pensamientos y acciones, y planifica). Puede ser ocuparse de negocios, formar una familia, indagar en tus raíces...
* Año de trabajo diario (esfuerzo). Cuesta arriba. Cálmate, buena cara, en el futuro (no cercano), recompensa (por la experiencia y el conocimiento adquiridos).
- 5Cambios en algún aspecto (trabajo, casa, habilidad, creencias...).
* Requiere ánimo, autocritica y vision clara de las metas.
* Libertad personal y viajes (sus vivencias quedaran para siempre en el recuerdo).
* Emocion y sorpresa (fluctuaciones: aceptelas sin oponer resistencia; en inversiones...).
* NO se consolida ninguna relacion permanente (personal o comercial).
- 6Nutrición (compasión, ayuda...). Da amor, cariño y afecto a familia y comparte risa y alegría con amigos.
* El 6 despeja la mente y da sentido práctico a las decisiones.
* Buscas estabilidad. ¿Comprar vivienda o reformar (decoracion, muebles, ampliaciones...)?
* Conexion con cultura, para relajarse y disfrutar.
- 7Reevaluando (año sabático). Meditar en soledad. Vuelva a examinar sus valores fundamentales (ejemplo de pregunta: ¿qué hacer con mi vida?). Cuidado con criticar en exceso. Es posible que desee buscar el consejo de un sabio, para profundizar. Este es un año de limpieza (sabático).
* Los asuntos personales y profesionales se demoran (te costara tomar decisiones). Despierta el interes por lo espiritual, y la mayor conciencia de ti mismo trae mayor intuicion...
* Sólo prosperan las relaciones a distancia.
- 8Expansión. Necesitas dar un paso al frente y liderar (con responsabilidad e integridad).
* Sueños mas ambiciosos hechos realidad, y generosidad (comparte fortuna, y si no, tiempo, tu trabajo, tu corazón...). Tendras que decidir los pasos para seguir creciendo.
- 9Finalización. ¿Estás más cerca de tus metas? ¿Estás viviendo tu pasión? Necesitas perdonar y olvidar todo lo que hayas perdido o no hayas logrado. Si cuidas de los demás, te va mejor.
* Lo viejo es desechado, preparandonos para el siguiente 1. Ocupan espacio e impiden tu evolucion, ¿porque si cierras una ventana se abre una puerta?
* Las ideas claras y la firmeza en las decisiones te resguardaran de tentaciones no recomendables (actividaes "obstáculo").
##Números (muy relacionados con el Eneagrama, que veremos luego):
- 1, liderazgo, no jefe.
- 2, maternidad, consideración, adaptación, creatividad, trabajo en equipo, mediación.
- 3, filosofía, y viajes. Artes, disfrute de la vida, socialización.
- 4, haces algo según tus originales reglas, servicio, lucha contra límites. Esteta.
- 5, aventurero, uso constructivo de la libertad.
- 6, hogar y familia, servicio a los demás. Tradicionalista.
- 7, si te lo encuentras, potencia y confía en tu intuición (son místicos). Análisis, comprensión, conciencia. Multitareas, niño prodigio.
- 8, política (orientados a status, ¿poder y dinero?). Autosuficiencia y practicidad. Responsable y tenaz. Proveedor, empresario, inconformista.
- 9, expresión creativa, generosidad y modestia, empatía, animadores emocionales, sanadores, iniciar cosas con determinación.
- 11, saca cosas ocultas de ti: es sabiduría, intuición, iluminación, idealismo, plano espiritual más alto. maestro psicológico.
- 22, fuerza y liderazgo. Maestro material (de realización).
- ¿33 = 11 + 22?
##Misión según nodo norte (un cálculo Astrológico): va directamente a anexos, porque mi información NO es suficientemente detallada, aunque ayuda bastante. Busca tú más.
##Tzolkin Maya (METER FECHA DE NACIMIENTO):
#Se obtienen 3 datos: raza (tu naturaleza en general: roja, blanca, azul o amarilla), sello (tipo de alma, cada raza es una FAMILIA DE 5 SELLOS, CON LO QUE HAY 20), y tono (cómo ejecutas la misión; HAY 13).
- Primero hay que sumar los números correspondientes al año, el mes y el día. El primer sumando es el día de nacimiento. Hay que sumar el mes: ENERO 0 FEBRERO 31 MARZO 59 ABRIL 90 MAYO 120 JUNIO 151 JULIO 181 AGOSTO 212 SEPTIEMBRE 243 OCTUBRE 13 NOVIEMBRE 44 DICIEMBRE 74. El año tiene también su tabla:
* 1922=022 1945=097 1968=172 1991=247 2014=062
* 1923=127 1946=202 1969=017 1992=092 2015=167
* 1924=232 1947=047 1970=122 1993=197 2016=012
* 1925=077 1948=152 1971=227 1994=042 2017=117
* 1926=182 1949=257 1972=072 1995=147 2018=222
* 1927=027 1950=102 1973=177 1996=252 2019=067
* 1928=132 1951=207 1974=022 1997=097 2020=172
* 1929=237 1952=052 1975=127 1998=202
* 1930=082 1953=157 1976=232 1999=047
* 1931=187 1954=002 1977=077 2000=152
* 1932=032 1955=107 1978=182 2001=257
* 1933=137 1956=212 1979=027 2002=102
* 1934=242 1957=057 1980=132 2003=207
* 1935=087 1958=162 1981=237 2004=052
* 1936=192 1959=007 1982=082 2005=157
* 1937=037 1960=112 1983=187 2006=002
* 1938=142 1961=217 1984=032 2007=107
* 1939=247 1962=062 1985=137 2008=212
* 1940=092 1963=167 1986=242 2009=057
* 1941=197 1964=012 1987=087 2010=162
* 1942=042 1965=117 1988=192 2011=007
* 1943=147 1966=222 1989=037 2012=112
* 1944=252 1967=067 1990=142 2013=217
- Si da más de 260, restar 260.
- A ver 03-11-1977: 3 + 44 + 77 = 124.
* Raza / familia = número mod 4. Y si da 0, pones 4.
* 1, 21, 41... tienen de sello 1. 19, 39... tienen de sello 19. 20, 40... tienen de sello 20. Es decir, el sello tiene que ver con la operación "mod 20", pero si da 0, lo conviertes a 20.
* ¿Y el tono? "Mod 13", y si da 0, es 13. Error subsanado.
- Ahora sólo queda definir razas (familias de 5 sellos), sellos (misiones) y tonos (cómo desarrollas la misión).
#Razas:
- Raza roja (1): energía iniciadora, dirección Este (de ahí viene la energía). Los mejores días para iniciar proyectos e ideas. Dualidad entre conocimiento e ignorancia,
- Blanca (2): concretar las ideas de la raza roja. Dirección norte. Dualidad entre modestia y soberbia.
- Azul (3): energía transformadora del resultado blanco (objetivo replanteado), dependiendo de los acontecimientos. Dirección Oeste. Dualidad paciencia e impaciencia.
- Raza amarilla, la mía (4): energía integradora, tiene las 3 anteriores; y aumento de coherencia personal durante la vida. Dirección Sur. Es ser uno mismo, evolucionar y madurar todo el conocimiento adquirido en el pasado. Dualidad madurez e inmadurez.
#Sellos. P: poder, C: característica, A: acción. BUSCA EL TUYO AMPLIADO EN INTERNET (el mío es 4, semilla, hago que los proyectos avancen si se estancan creo...). BUSCA EN ANEXOS.
- 1 IMIX (Dragón, raza 1) PCA: nacimiento-ser-nutrir...
#Tonos (el mió es 7, "quedarme alelao je je, para recibir la respuesta": definen el proceso creativo (individual o grupal), desde el propósito (tono 1) hasta su cumplimiento o final (tono 13). Onda Encantada (13 pasos: mentales los 4 primeros, físico y emocionales los 5 siguientes, y espirituales el resto). El tono nos da pistas para realizar la misión (sello), llegando a comprender el funcionamiento de nuestra mente y aprendiendo más fácilmente las lecciones que se nos presentan. BUSCA EL TUYO AMPLIADO EN INTERNET. BUSCA EN ANEXOS.
##Nombrelogía (números entre 1 y 9, diferentes a los del eneagrama). Según vocales y consonantes de tu nombre de nacimiento, tienes un número de máscara, uno de esencia, y un número objetivo.
#Apelativo (antes de ver cómo se calculan los números): si la primera vocal se repite, trata de no pronunciarla, para que el apelado sea menos malo:
- A: viniste a comerte el mundo, a liderar (yo diría a ser jefe) y avanzar, tumbando muros. 2 aes o más: hablas mal de los demás.
- E: te aburres fácilmente y necesitas cambiar constantemente. Les gusta viajar y no se comprometen. 2 o más: cuida tu mal genio.
- I: muy emotivo y sensible. ¿Son intuitivos y creativos no? 2 o más: podrías pasarte de susceptible.
- O: muy responsable, servicial al extremo. Tienes un consejo para todo el mundo. 2 o más: tendencia al chantaje emocional.
- U: muy racional; alegre y optimista, con gran don de la palabra. 2 o más: tenderás a acumular cosas sin valor.
#Calcula el número de alma (lo que ya tenemos en el alma, lo REAL), de máscara (desempeño en el mundo material), y número Meta.
- 1:ajs, 2:bkt, 3:cluü, 4:dmv, 5:enñw, 6:fox, 7:gpy, 8:hqz, 9:ir. Luis Mateos Armada (nombre completo de nacimiento debe ser).
* Consonantes (MÁSCARA) suman 28 = 10 = 1.
* Vocales (REAL) suman 27 = 9. "Y griega" es vocal (consonante si va entre vocales, como en Mayo; y si introduce una palabra y despues va vocal). La U es muda en gue, que, gui y qui.
* Meta = 9 + 1 = 10 = 1. ¡Ser 1!
- Mi programa en PHP. Caracteres permitidos (incluye mayúsculas): üabcdefghijklmnñopqrstuvwxyz (y espacios). Nada de acentos ortográficos... Quizás mejore el programa con el tiempo.
* luis mateos armada##l - conso3 ##u - vocal3 ##i - vocal9 ##s - conso1 ## ##m - conso4 ##a - vocal1 ##t - conso2 ##e - vocal5 ##o - vocal6 ##s - conso1 ## ##a - vocal1 ##r - conso9 ##m - conso4 ##a - vocal1 ##d - conso4 ##a - vocal1
* Nombre: Luis Mateos Armada. Máscara bruta: 28; máscara: 1; real bruto: 27; Real: 9; Objetivo: 1.
##Numeros de alma, máscara u objetivo:
- 1. Eres independiente en creencias, y la libertad de pensamiento es el objetivo de tus deseos mas internos.
* No quieres permanecer en una posicion secundaria entre tu gente. Si tu individualidad es muy fuerte, comprueba si abusas de tu actitud de mando.
- 2. Deseas paz y harmonia (mediador / Libra), tienes tacto, y puedes adaptarte a cualquier situacion. Atrevete a hacer lo que sabes que es justo, y a ganar a tus semejantes en comprension. Si las emociones te disturbian, se fuerte y decide.
- 3. Concienzudo y perseverante (obligaciones). Sabes que la imaginación y la inspiracion dan los mejores resultados cuando se ayuda a los demás. Haz caso a los impulsos de crear / hacer lo que te interesa.
* Si alguien esta de bajón, dile algo que lo haga resurgir.
* Da a conocer tus ideales y prodija tu buen animo y optimismo.
- 4. Organizacion, que te puede dar exito material. Muy practico, leal, equilibrado, inspiras confianza, y los demas saben que les vas a tratar equitativamente. Conviertes tus sueños en realidad en lo laboral y lo sentimental, pues te lo tomas en serio (planeas).
- 5. No toleras que limiten tus ideales ni forma de pensar (Acuario). Te empujan los cambios y el tener diferentes puntos de vista (no te aburres).
* Consideras los viajes educativos y enriquecedores.
* NO aguantas la estrechez.
- 6. Belleza, armonia y paz. Con los que amas eres afectuoso, atento y leal. Deja a tu familia expresar sus deseos aunque no estes muy conforme con sus decisiones.
- 7. Eres reservado, buen pensador, analitico y mediador. NO quieres ruido. Refinado y sensible, con frecuencia con poderes psiquicos, muy capaz de vivir solo alcanzando el más alto orden mistico de los humanos.
* Beneficia a la humanidad a traves de la Filosofia.
- 8. Ambicioso, los obstaculos a la meta (personas...) te los quitas de encima (yo no competiría con un 8) por naturaleza. NO eres facil de manejar. Tu tarea es sobresalir, porque tienes gran capacidad para manejar grupos y empresas. Tus dotes psicolojicas te ayudaran a comprender a las masas con las que trabajas.
* Vas a tener que confiar plenamente en ti para juiarte y permanecer en la cumbre.
- 9. Solidario, idealista, desinteresado. Vienes a servir de guía y destacarte (contactando con lideres sociales...), a luchar por el bien comun. Intuitivo, sensitivo e imaginativo. Necesitas reconocimiento y valoracion de todo lo que haces, y dar y recibir amor. ¿El objetivo es demostrar mi autosuficiencia y autonomia (suena a 1)? Altibajos (sueños de grandeza a depresion si no cubro las expectativas). Pruebas: rechazo, abandono, desvalorizacion, poco reconocimiento, personas que abusan de tu generosidad...
- 11: has seguido la via espiritual por mucho tiempo. Valor, talento y capacidad de mando. Comprensiva, juiciosa, intuitiva, con frecuencia clarividente. Fuerza (interior) para superar las adversidades y luchar.
- 22: desea el exito material; fuerte impulso de continuar la construccion de vidas pasadas. Te fijas metas mas altas que el resto, pero manten los pies en la tierra por favor.
- 33: ve con total claridad las condiciones del mundo futuro, y se sacrifica por la humanidad para aportar paz. A veces, el impulso del alma estara en contraposicion con el entorno, pero actuaras tratando de comprender puntos de vista ajenos. Esto puede colocarte en una posicion inferior, pero siempre tendras la esperanza de alcanzar otra mas propicia.
- 44 (se parece al 33 del eneagrama): aunas lo practico con lo filosofico, para dar lustre a la sociedad, ¿inventos?. Hacerte cargo de grandes responsabilidades. Tu alma te guiara. Resolver los problemas del dia a dia y ayudar a los demas a organizar sus vidas, son cualidades innatas.
##Diseño Humano:
Soy generador (¿constructor?) sacral (se refiere en parte a cómo me avisa el cuerpo para tomar decisiones) de perfil 4 / 6 (cojo de los demás / soy oportunista pa luego publicarlo / servir de modelo) no manifestante (el manifestante va loco por la vida je je). El generador espera para responder, mejor casi no iniciar:
- Máscara / mente (personalidad sin contar la evolución):
* Sol 44.4, Tierra 24.4, Luna 31.2, Nodo Norte (Libra) 48.6, Nodo Sur (experiencia de vidas pasadas...) 21.6, Mercurio 43.2, Venus 32.1, Marte 31.2, Júpiter 52.3, Saturno 29.6, Urano 44.5, Neptuno sólo 5.4 (y eso que soy Escorpio con tendencia Piscis, el más introspectivo de los 36 subsignos del Zodiaco), PLutón 48.6.
- Diseño / cuerpo (al nacer, sin contar la evolución):
* Sol 33.6, Tierra 19.6, Luna 3.2 (mucho más en máscara), Nodo Norte 57.3, Nodo Sur 51.3 (mucho menos en máscara, vamos, que parezco tonto je je), Mercurio 40.5, Venus 15.6 (más en Máscara; ¿parezco más Venusiano y Lunar?), Marte 35.2, Júpiter 12.5 y Saturno 4.1 (parezco más Jupiteriano y Saturniano), Urano 44.1, Neptuno 5.3, Plutón 48.3.
- Números (20 de 64; no los explico en este artículo, sería demasiao):
* 24, 4, 43 (cabeza abajo), 35, 12, 31, 33 (cuello o garganta), 15 (tronco arriba, G o ser), 21, 51, 40 (corazón o ego), 48, 57, 44, 32 (tronco abajo, bazo), 5, 29, 3 (tronco abajo centro, sacro, debajo del ombligo), 52, 19 (fondo o, ¿chacra? raíz). Todos gris, salvo 5, 31, 44 y 48 (negro), ¿rojo significa más dificultad / cierta incapacidad?
##Antes de describir cómo es el generador, conviene aclarar 2 conceptos:
- Estrategia de vida: los Manifestadores (luego amplio los tipos de persona) deben iniciar la acción, los Generadores y Generadores-Manifestantes deben responder a los estímulos externos (ya dije que yo esperaba para responder, casi mejor no iniciar), los Proyectores deben esperar al reconocimiento y a la invitación de los demás y los Reflectores deben esperar todo un ciclo lunar para tomar una decisión (si cierta oportunidad es o no para ellos), ¿y se encargan de narrar cómo va la sociedad / la reflejan así?
- La Autoridad: Es la forma en la que deberíamos tomar las decisiones. Autoridad emocional (plexo solar): si el Plexo está "definido" (¿con numeritos?), manda sobre los demás. La última que pongamos, no manda sobre ninguna:
* Plexo (tronco abajo, izquierda; en los dibujos aparecerá a la derecha). Tener paciencia para llegar a la claridad emocional. No está preparado para ser espontáneo. No dejarse manipular. No dejar que le insistan. ¿Son la gente más avanzada (almas viejas)?
* Sacro (luego lo ampliamos). Diseñado para confiar en sus "tripas". Si el Bazo está definido, tenemos autoridad Sacral esplénica: dar respuesta en el ahora (bazo) con conciencia.
* Bazo. Diseñado para confiar en su intuición, en su instinto, y decidir espontáneamente. ¿Pero la intuición espiritual está en almas avanzadas, y el instinto en almas poco avanzadas por lo general no?
* Ego. En la gente "Manifestada", ego a garganta: guiarse por lo que dice su voz. "Proyectada" (ego a G): guiarse por lo que responden a lo siguiente: ¿qué es lo que quiero?, ¿qué hay ahí para mi?
* G. ¿No pensar previo a hablar? Escuchar lo que dicen y confiar en ellos (en los G). Están aquí para dar dirección a otros. No están para seguir reglas. Deben seguir lo que les haga bien.
* Garganta, Mente, Cabeza. Sondear el mundo externo, buscando información. Escuchar sus cavilaciones. Tomarse el tiempo. Tener consejeros, amigos de confianza. Proceso externo para llegar a su verdad interna.
* Lunar. Seguir este proceso para decisiones importantes: amor, lugar de residencia, trabajo, profesión. ¡Andá, lo siguiente, es como con el anterior!: tomarse el tiempo. Sondear el mundo externo para buscar información. Tener consejeros, amigos de confianza. ¿Asociado al reflector no? NO puedo decir más de momento.
* La raíz no tiene autoridad.
##El Generador está para poner toda su energía creativa al servicio de los demás y disfrutar de lo que hace CADA DÍA (satisfacción vs frustración). Tiene el Centro Sacral (lo tiene "definido"). Sólo tiene que escuchar sus "sonidos guturales" o sus sensaciones corporales "de tripas" (una vez identificados, el Centro Sacral dicta con su autoridad si tiene disponibilidad energética y qué decisiones tomar, y en cualquier caso, da la energía vital diaria para tirar con todo):
#Sonidos guturales (en vez de preguntar / te "¿macarrones o pizza?" se pregunta "¿pizza?", pregunta de sí o no, así es más fácil obtener una respuesta de la autoridad sacral):
- ¿Quieres ir al cine?
* Bue... (esto es un: ahora mismo no sé, pregúntame más tarde, de otra forma, o dame las opciones). Si te funciona bien el sacro, la decisión es "no sé".
- ¿Te apetece comer pasta?
* ¡Ouh yeah! (esto es un: ¡por supuesto que sí!). Decisión sí.
- ¿Damos un paseito?
* Ufff... (esto es un: ahora mismo no, no tengo energía para eso). Decisión no.
#Tomar decisiones con el cuerpo: 
- Aprender. Que nos hagan preguntas. El truco está en que tú te acomodes tranquilito y estés muy presente en tu cuerpo, sobre todo en la parte baja (por debajo del ombligo). Mientras, la otra persona te debe ir haciendo preguntas y de este modo tú irás notando tus respuestas corporales a esas preguntas.
* Si ves que respondes, pero que luego la mente te empieza a dar otras excusa, ¡malo!
- Concéntrate en el sacro cuando recibes el estímulo. ¿Se está contrayendo (NO)? ¿La sientes expansiva (SÍ)?
* ¿Te estás tirando hacia adelante? Sobre todo si eres Generador Manifestante.
* ¿Cómo te está haciendo sentir ese estímulo? ¿Te drena la energía?
* Si bien ahora mentalmente te parezca una locura, tu cuerpo sabe lo que de verdad es mejor para ti. ¡Deja que sea él quien te guíe y confía en tu magnetismo!
#consejos generales:
- Tu mente querrá tomar partido. Es importante pensar, pero si la mente contradice lo ya dicho por el cuerpo, es posible que intente "manipularte". 
- Echa un vistazo a tu vida, ¿te estás cargando demasiado de actividades que no te generan satisfacción? Líberate lo máximo posible de esas cargas (dentro de tus pobilidades, por supuesto).
* Que tengas tantísima energía no significa que tengas que regalarla. Tú decides en qué actividades o personas dedicarla. Deja las cosas claras.
* Sentirse alegres con nuestra vida no es un pecado.
- Vigila si sólo te estás dejando llevar por las emociones.
- ¿Tienes problemas digestivos? El sacro son nuestras entrañas, por lo que tienen que estar funcionando correctamente, para que no haya bloqueos.
* Una dieta lo más limpia posible de azúcares, gluten y lácteos es realmente un cambio en tu vida y en tu cuerpo. ¿Dieta anticándida?
- Para que un Generador (o Generador Manifestante) tenga un buen día necesita una buena noche de sueño. Necesita haber tenido un buen día y haberse agotado por completo (física y mentalmente).
#Frustrado vs satisfecho:
- Generador frustrado: "odio mi trabajo, pero es lo que hay". ¿NO busca más / desea planificando / va por su propio camino, desafiando el pensamiento general, las burlas...?
* Después de una intensa (porque odia su trabajo) jornada de 8 horas, más las 2 horas de viaje (ida y vuelta), llega agotado, sin energía para nada más. Solo quiere echarse en el sofá.
* Parece que todo lo malo le pasa a él: "qué asco de vida, pero es lo que hay".
- Generador satisfecho:
* No necesita alarma, se despierta cada día a la misma hora con las pilas a tope.
* Al volver del trabajo, le proponen ir a tomar un café. Quiere volver pronto para cenar tranquilo y seguir escribiendo su libro (lo deja para dormir lo suficiente y da las gracias por el día).
##Tipos (UN POCO más):
- La única diferencia entre generador puro y manifestante, es que el último tiene la Garganta conectada a un Centro Motor y esto le da la posibilidad de actuar más rápido.
* Diferencias entre los 4: el aura al interaccionar...
- Los Generadores son un 70% de la población global (35% puros por así decirlo, y 35% manifestantes). Han venido a amar todo lo que hacen.
* Los Proyectores son un 20%. Son los guías, han venido a dar consejo y a dirigir. Su regalo al mundo es su liderazgo y comprensión (sería algo deseable que los tuviesen). ¿Son los expertos / pesaos je je?
* Manifestador: 9%. Iniciar y dirigir. ¡Me suena a brutotes je je!
* Reflector: 1%. Gracias a él sabes lo que está bien o no en la sociedad (si tienes capacidad). ¡Me suena a periodistas!
- Respeta las diferencias del otro (tiene menos energía...), o la relación no funcionará. Y ten en cuenta que los padres de lso otros (o el prójimo, si te quieres, si has desreprimido...) pudieron ser fríos en la infancia... ¡Vamos, que su misión se quitar sus represiones y similar, no ha acabado!
##El Perfil 4/6 es bastante inusual y especial. Son dos líneas (4 y 6, por encima de 3), que están aquí para los demás. Pero hay tensión: necesitar estar a solas para poder ver la vida y las cosas que suceden de una forma más objetiva.
- Gente súper sociable (¿o social?). Sociable indica calidad.
* A su línea 4 consciente le encanta desarrollar su círculo cercano de amistades y socializar para influir. Lo que le va es quedarse mirando, en medio "de la fiesta", y ver todo lo que está pasando a su alrededor.
- Primeros 30 años de vida: su línea 4 busca siempre una estabilidad y conexiones profundas, pero la línea 6 se comporta como una 3 (prueba y error, difícil encontrar "el amor de tu vida").
* Relájate y disfruta del proceso, experimenta en esa primera etapa y prepárate para profundizar en las siguientes. Si es la persona adecuada, lo sabrás. Y si no, ya llegará.
##Perfiles:
- El Perfil 1/3, Investigador - Mártir: Una persona investigadora que aprende a través de la prueba y error. Necesita mucha experimentación para tener certeza en sus bases de estudios.
- El Perfil 1/4, Investigador - Oportunista: Este Perfil está diseñado para profundizar en sus estudios y atraer personas y oportunidades dentro de su círculo cercano.
- El Perfil 2/4, Ermitaño - Oportunista: Son personas con muchas habilidades innatas y sus oportunidades vienen a través de las amistades cercanas.
- El Perfil 2/5, Ermitaño - Hereje: Aquí tenemos un Perfil de proyecciones que también posee muchos dones y talentos. Es un perfil del que siempre se espera mucho.
- El Perfil 3/5, Mártir - Hereje: Una persona que a través de la prueba y error, le enseñan al mundo lo que funciona y lo que no. Son personas muy resistentes a los golpes de la vida.
- El Perfil 3/6, Mártir - Modelo de Roles: Una vida llena de experimentación a través de la prueba y error que usará para servir de ejemplo a seguir para los demás.
- El Perfil 4/1, Oportunista - Investigador: Maestros de la vida que están aquí para profundizar en sus investigaciones y compartirlas con su gente una vez consiguen unas bases sólidas.
- El Perfil 4/6, Oportunista - Modelo de Roles: Este perfil aprovecha las oportunidades que le llegan de su entorno cercano y sus amistades para servir de modelo de vida para los demás.
- El Perfil 5/1, Hereje - Investigador: Aquí tenemos una persona que es líder por excelencia, que está aquí para aportar soluciones prácticas al resto de personas a través de sus investigaciones.
- El Perfil 5/2, Hereje - Ermitaño: Personas que han venido a disfrutar de sus talentos naturales y liderar a los demás a través de la expresión de sus dones más innatos.
- El Perfil 6/2, Modelo de Roles - Ermitaño: Un perfil que vive a través de la prueba y error los primeros años de su vida, para poder coger los aprendizajes necesarios que le ayudarán a inspirar a los demás.
- El Perfil 6/3, Modelo de Roles - Mártir: Personas optimistas que, a través de las experiencias a lo largo de toda su vida, sirven de ejemplo a seguir para los demás y saben lo que funciona y lo que no.
##Anexo I (flecos):
- El manifestador debe informar antes de actuar (así, siente que "la cosa fluye").
- La mente puede darnos razones y motivos "válidos" sobre por qué volver con esa persona que nos hizo daño. Puede justificarnos por qué escoger un trabajo que NO NOS GUSTA, pero en el que generamos buenos ingresos. Puede crearnos también un miedo enorme al futuro, y hacer que tomes decisiones que no queremos, por lo que "pueda pasar"...
##Anexo II (autoridad emocional, para ver si aporta algo estudiar más autoridades):
Generador con Autoridad Emocional
#Para cada tipo:
- Si eres una persona Generadora o Generadora Manifestante con Autoridad Emocional, necesitas darte un tiempo de espera, una vez hayas recibido un estímulo externo que haya encendido tus ganas de tomar una decisión o de tomar acción.
- Proyectora: darte un tiempo de espera para saber si la invitación está de verdad alineada contigo y tus talentos.
* Es para observar si hay un reconocimiento implícito en esa invitación, y te protege de estar con las personas correctas, y...
- Manifestadora: tomarte un tiempito previo a Informar a los demás antes de tomar acción. Esta espera te protege (y protege a los demás) del impacto que puedas tener a la hora de iniciar.
* Sois personas muy muy arrolladoras, pero cuando os dais el tiempo para sentir la decisión y después, informar correctamente a las personas que se van a ver implicadas... el impacto puede ser tremendamente bueno.
- Reflector: no tiene ningún Centro Definido en su gráfico. Todos los Tipos pueden tener Autoridad Emocional, menos el Tipo Reflector.
#Más:
- La comunicación es clave para esta Autoridad Emocional. Saber explicarle al otro cómo funcionas, el tiempo que necesitas para todo, y que pueda comprender que no es nada personal es un proceso muy bonito de conexión.
##LOS NUMERAJOS SE LLAMAN CANALES, BÚSCALOS (LOS QUE TENGAS EN NEGRO EN EL DIBUJO, CREO) EN INTERNET (Y CADA SIGNO ZODIACAL TIENE LOS SUYOS, ASÍ QUE TIENES MUCHOS).
##SE ME OLVIDABA: TENGO MARRÓN CLARO G-SER Y SACRO, DE COLOR GRIS CLARO, LO DE ABAJO, Y DE COLOR BLANCO, GARGANTA Y CABEZA. ¿SIGNIFICA ESO QUE AUNQUE NO TENGA NUMERITOS EN EL PLEXO SOLAR, PUEDO USARLO, PERO NO LA CABEZA O LA GARGANTA?
##+ de Roles. El mártir (3) aprende con ensayo - error (no parece lo más elevado, ¿y si las pruebas son de persona que aguanta mucho emocionalmente, como un abandono hipermúltiple?). 4, 5 y 6 son "sociales" (en principio no nos hablan de verse por dentro), pero no necesariamente menos elevados. El 4 (oportunista) "chupa del entorno" por así decirlo. El 2 (hermitaño) tiene muchas habilidades innatas, ¿alma vieja? El 1 investiga (parece más alma avanzada que el 3, ¿lo es?). ¿El 5 (hereje) es de soluciones prácticas para la sociedad? El 6 (modelo) parece un modelo para el entorno.
####Eneagrama negativo. Sumar cifras nacimiento: 3-11-1977 = 29 = 11 = 2 (el 11 es 2 cuando "va mal").
##El eneagrama no contiene los números maestros (11, 22 y 24): el once es un maestro psicológico, el 22, material (de realización), y el 33, tiene de todo un poco. ¿Y el 44?
##Al grano. Sumar cifras nacimiento: 3-11-1977 = 29 = 11 = 2 (el 11 es 2 cuando "va mal").
- 1. Idealista y concienzudo, con fuerte sentido del bien y el mal. Son profesores y cruzados, se esfuerzan siempre por mejorar las cosas, pero temen cometer errores. Bien organizados, ordenados y meticulosos, pueden resultar críticos y perfeccionistas. Normalmente tienen problemas de rabia e impaciencia reprimidas. El Uno sano es sabio, perceptivo, realista y noble, a la vez que moralmente heroico.
* MIEDO BÁSICO: Ser malo, corrupto, perverso o imperfecto
* DESEO BÁSICO: Ser bueno, virtuoso, equilibrado, íntegro
* MENSAJE DEL SUPERYÓ: Vales o eres bueno si haces lo correcto
- 2. Preocupado, orientado a los demás. Comprensivos, sinceros, amistosos, generosos y abnegados, pero también pueden ser sentimentales, aduladores y obsequiosos. Suelen hacer cosas por los demás para sentirse necesitados. Por lo general tienen problemas para cuidar de sí mismos y reconocer sus propias necesidades. El Dos sano es generoso y siente un amor incondicional por sí mismo y por los demás.
* MIEDO BÁSICO: Ser indigno de amor
* DESEO BÁSICO: Sentirse amado
* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres amado por los demás y eres amigo de ellos
- 3. Adaptable y orientado al éxito. Seguro de sí mismo, atractivo y encantador (así que cuidadito). Ambiciosos, competentes y enérgicos. Suelen preocuparse por su imagen y por lo que los demás piensan de ellos. Normalmente tienen problemas de adicción al trabajo y competitividad. El Tres sano se acepta a sí mismo, es auténtico, es todo lo que aparenta ser, un modelo que inspira a otras personas.
* MIEDO BÁSICO: Ser despreciable o a carecer de valor inherente
* DESEO BÁSICO: Sentirse valioso, aceptado y deseable
* MENSAJE DEL SUPERYÓ: Vales o estás bien si tienes éxito y los demás piensan bien de ti
- 4. Romántico e introspectivo. Conscientes de sí mismos, sensibles, reservados y callados. Demostrativos, sinceros y personales emocionalmente, pero también pueden ser caprichosos y tímidos. Se ocultan de los demás porque se sienten vulnerables o defectuosos, pero también pueden sentirse desdeñosos y ajenos a las formas normales de vivir. Normalmente tienen problemas de autocomplacencia y autocompasión. El Cuatro sano es inspirado y muy creativo, capaz de renovarse, ¿a través de experiencias no?
* MIEDO BÁSICO: Carecer de identidad o de no ser importante
* DESEO BÁSICO: Descubrirse a sí mismo y su importancia; crearse una identidad a partir de su experiencia interior
* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres fiel a ti mismo
- 5. Vehemente y cerebral. Despabilados (¿y no durmientes mirando pa dentro? ¡Qué pena!), perspicaces y curiosos. Capacidad: ideas y habilidades complejas. Independientes e innovadores, es posible que se obsesionen con sus pensamientos y elaboraciones imaginarias. Muy nerviosos. Por lo general tienen problemas de aislamiento, excentricidad y nihilismo. El Cinco sano es pionero visionario y es capaz de ver el mundo de un modo totalmente nuevo.
* MIEDO BÁSICO: Ser inútil, incapaz o incompetente
* DESEO BÁSICO: Ser capaz y competente
* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres experto en algo
- 6. Orientado a la seguridad. Dignos de confianza, trabajadores y responsables, pero también pueden adoptar una actitud defensiva, ser evasivas y muy nerviosas; trabajan hasta estresarse al mismo tiempo que se quejan de ello. Suelen ser cautelosas e indecisas, aunque también reactivas, desafiantes y rebeldes. Normalmente tienen problemas de inseguridad y desconfianza. El Seis sano: estable interiormente, seguro de sí mismo, independiente, y apoya con valentía a los débiles e incapaces.
* MIEDO BÁSICO: Carecer de apoyo u orientación
* DESEO BÁSICO: Encontrar seguridad y apoyo
* MENSAJE DEL SUPERYÓ: Vales o estás bien si haces lo que se espera de ti
- 7. Productivo y ajetreado. Versátiles, optimistas y espontáneos; juguetones, animosos y prácticos, también podrían abarcar demasiado, ser desorganizados e indisciplinados. Constantemente buscan experiencias nuevas y estimulantes, pero la actividad continuada los aturde y agota. Por lo general tienen problemas de superficialidad e impulsividad. El Siete sano centra sus dotes en objetivos dignos, es alegre, y muy capacitado y agradecido.
* MIEDO BÁSICO: Ser desvalido o quedar atrapado en el dolor
* DESEO BÁSICO: Estar feliz, contento, encontrar satisfacción
* MENSAJE DEL SUPERYÓ: Vales o estás bien si obtienes lo que necesitas
- 8. Poderoso y dominante, ¿a veces protector? Seguros de sí mismos y capaces de imponerse. Ingeniosos y decididos, también resultan orgullosos; piensan que deben estar al mando de su entorno y suelen volverse retadores e intimidadores. Normalmente tienen problemas para intimar con los demás. El Ocho sano se controla, usa su fuerza para mejorar la vida de otras personas, volviéndose heroico, magnánimos y a veces históricamente grandioso.
* MIEDO BÁSICO: Ser dañado o controlado por otros
* DESEO BÁSICO: Protegerse, decidir su camino en la vida
* MENSAJE DEL SUPERYÓ: Vales o estás bien si eres fuerte y estás al mando de tu situación
- 9. Acomodadizo, humilde, ¿o modesto?. Conformistas, confiados y estables. Afables y bondadosos, también pueden estar demasiado dispuestos a transigir con los demás para mantener la paz. Tienden a ser complacientes y a minimizar cualquier cosa inquietante. Normalmente tienen problemas de pasividad y tozudez. El Nueve sano es indómito y abarcador; capaz de unir a las personas y solucionar conflictos.
* MIEDO BÁSICO: Perder la conexión, fragmentación
* DESEO BÁSICO: Mantener la estabilidad interior y la paz mental
* MENSAJE DEL SUPERYÓ: Vales o estás bien mientras los que te rodean sean buenos y estén bien
##Un tipo de persona (número) se me presenta muchas veces, ¿qué hago / mejoro en mí?:
- 1. Muestra a los demás el camino creativamente.
- 2. Recoge la cosecha. Quizás alguien pueda ayudarte a decidir.
- 3. Viaja para autoconocerte.
- 4. Sé tú mismo digan lo que digan, y con imaginación genuina.
- 5. Expresa tus ideas para salir del bloqueo mental.
- 6. Ocúpate de la belleza, el arte, la decoración, los problemas maritales...
- 7. Sé más esotérico (hacer caso a la intuición, Psicología...).
- 8. No pienses, trabaja. Sé coherente con tus debilidades.
- 9. Saca a flote toda tu fuerza interior, para hacer las cosas con seguridad.
##Caminos de sanación:
- 1. Todos pueden tener algo de razón y tal vez nadie la tiene del todo. Nadie exige tu perfección (cometemos fallos y lo aceptamos). Eres querido por lo que eres, no por lo que deberías ser.
- 2. Para dar tienes que conocerte y quererte. ¿Realmente las personas necesitan tantas cosas como tu piensas? No vivas tan pendiente del otro, puedes perder tu identidad. No te queremos por todo lo que ayudas, sino por lo que eres.
- 3. Date tiempo para sentir, descansar, disfrutar... y ver lo que tu cuerpo necesita. Aprende a relacionarte a niveles profundos (sin miedo al contacto interno). Busca una definición de ti mismo que responda a lo que eres, no a lo que haces o lo que los demás esperan de ti.
- 4. Todos somos únicos e irrepetibles, igual que tú. Tu interior es la mejor obra de arte, apréciala, no te escondas. La realidad tal cual es, valórala.
- 5. Baja de la cabeza al corazón, y vivirás. Comparte tus conocimientos con los demás y adquirirás mas. No acumules, ni atesores. Recibirás en la medida en que des / compartas.
- 6. ¡Lo bonito que puede llegar a ser el responsabilizarte de tu propia vida!, eso te dará gran seguridad. Solo eres responsable de ti mismo. No mires lo de afuera como amenazador, "sólo" tu inseguridad te daña.
- 7. En vez de planificar, actúa. Cuando acojas y abraces tus sentimientos negativos, habrá felicidad. Vive cada momento.
- 8. Si confías en que los demás buscan la verdad y justicia como tú, serás menos desconfiado. Delega, no intentes controlar todo. El remedio para la insatisfacción y el aburrimiento no es la intensidad, sino la medida, incluso en la aplicación de la justicia.
- 9. Cuando superes tu indolencia inicial, sentirás la vitalidad que duerme en ti. Disfruta del placer de ser consciente de ti mismo y hacerte responsable de tu vida.
####Cejas:
- Gruesas en la base si puedes empezar cosas, o en el medio, o al final. Finas: delicada.
- ¿Muy arqueadas si lo dramatizas todo? Sin arco son directas. ¿En Aries suelen converger?
- ¿Puntiagudas si son controladoras (el psicópata, a veces, las afina)?
- Muy separadas: ¿gran corazón, confiable y abierta? Uniceja: individualidad.
- Más. Cortas: detalles. Pobladas: ¿honestidad?
####Quiromancia (sin predicciones, nada de palma):
##Manos (grande minuciosa, ¿pequeña concreta / no abstracta?, relativamente corta impulsiva, ancha dinámica, estrecha inercial, cálida generosa e improvisa, fría falta de interés por entorno bieeeen!, húmeda emotividad, seca segura de sí misma y a veces irreflexiva, rosada enérgica y llevado por sentimiento, amarillenta cerebral y lógica, ¿y superblanca egoísta reservado que no se da a sí mismo?):
- Cuadrada: pequeñita. ¿Piel gruesa y roja? Metódicos, aman la seguridad. Son de lógica y paz, no de instinto. Fuertes y con apego a lo material. ¿Son los artesanos (dudas sobre la misión laboral)?
- Espátula (dedos): dedos + cortos que palma (palma relativamente grande). Piel rosada. Entusiastas, detallistas, optimistas. Percepción original. Vanidosos a veces. ¿Son los carpinteros... Aquí sí que tengo dudas.
- Primaria (gigantesca): conformistas, trabajos físicos o pesados, apasionados, materialistas, poco arriesgados.
- Cónica: sensibles, ¿aman la tecnología? Se aburren fácilmente. Hábiles investigadores, activos y creativos. Lujo e indolencia. No razonan, juzgan por instinto e impulso. Conversadores generosos, simpáticos...
- Nudosa (yo, dedos suelen ser flacos y con nudos / ensanchamientos breves): suele ser organizado. Fuertes valores morales (bah, los mínimos). Material o psíquico (según los nudos). Sinceridad, profundos, líderes naturales. Rara vez se olvidan de sus fallos (de lo negativo, querrá decir). Uñas con terminación ancha (suave o recta / cuadrada).
- Mística / artística (larguísima / agua vs cuadrada / tierra): dedos cónicos. Débiles físicamente e inestables emocionalmente. Uñas almendradas (abajo un poco recto, y terminan suave, al revés que la avellanada). Fácilmente influenciables (por gurús... ¡Un peligro la gente que se deja llevar!) y poco lógicos. Piel suave, flexible, blanda y rosada (¿y atractiva?). Perezosos.
- Mixta (¿aquí no entra la filosófica ni la gigante?). Inteligentes, pero erráticos aplicando talentos (me gustan). Ideas, diplomacia y tacto.
##Más: el dedo de asesino guarda, y algo trivial hace estallar a la persona. ¿Dedo corto y ancho con poca uña?
####00202psicosalud.txt  Lo de engordar y adelgazar, va en Anexos. Te aseguro que es bastante interesante.
####INTRODUCCIÓN A LA SALUD.
- La salud NO es como te han contado: síntomas, y quitarlos. Los síntomas son sobre todo de fase de curación. ¿Entonces los médicos confunden la fase de curación con fase de enfermedad? Yo diria que sí. Y anular la fase de curación (en la que participan bacterias buenas y "virus"), puede ser peligroso.
- La Nueva Medicina Germánica "sabe esto", y también sabe que las enfermedades se originan en la psique (algo que NO es material), que afecta al cerebro, y éste, al órgano (se puede hacer una tabla):
* Pero hay problemas de salud que no son de origen mental. ESO NO SON ENFERMEDADES. Podemos llamarlo desequilibrios. ¿Hay un cancer de origen mental, y otro que NO (la célula se ve aislada por falta de sal, o un medio muy ácido, y se pone en modo "arcaico" / supervivencia, modo "tumor")?
* En el proceso hacia la fase de cura (que empieza cuando llegas a la solución psicológica), "la vida" te pide pasar algunas experiencias. Parte del proceso de cambio psicológico, nos lleva a pensar en reaccionar de forma diferente: las represiones nos manejan inconscientemente (Carl Jung), haciéndonos reaccionar de una forma NO deseada. Cuando las solucionas, en el proceso de "LIMPIEZA DE PSIQUE", te ves más fuerte, y mejor persona (tus intenciones ya llevan al bien, por así decirlo). Puedes reprimir una creencia (pasada por tus padres; digamos que de niño pequeño, las creencias paternas te dan una personalidad, y a la vez las "metes en la cabeza" por "NO diferir con tus figuras de amor")... por NO soportarla.
- Pero hay más. Los ancestros (NO sólo los padres) pueden dejarte "pruebas a superar". Es la llamada Transgenealogía. Un caso extremo es aquel en el que un familiar (abuelo...) te pasa todos sus problemas psicológicos sin resolver (y te parece que alguien te contradice, como si fuerais 2; por  ejemplo, ante ciertas alegrías puede aparecer "una voz interior que te reprende").
* Un ejemplo: un niño odia la asignatura de Inglés porque su abuelo y los ingleses, en la guerra, tenían malas relaciones. Otro: alguien, al encontrar la caja del abuelo enterrada, ¡recuperó la vista!
* Cuando cargas con los problemas del árbol familiar, es que "las almas familiares" (del árbol genealógico) confían en ti para superar problemas psicológicos (NO eres precisamente un alma burda): así debería ser un presidente bueno (lo material viene de lo psicológico). Y los nuevos bebés nacerán sin taras (y NO sabrán que fue gracias a ti. En fin...).
- Una última vuelta de tuerca, mezclándolo todo:
* Para solucionar problemas de Transgenealogía, la vida te lleva a distintas profesiones. Por ejemplo, si tu abuelo NO se sentía guapo, tú podrías terminar siendo decorador. ¿Y si mi abuelo NO se quería / sentía guapo? Lo digo porque mi toc (o lo que sea) es en parte decorativo (busco cierta harmonía, NO cosas bonitas como butacas... y al producirme ansiedad casi cualquier configuración de mi habitación, llego a configuraciones muy extrañas, que sí me aportan paz, tras un trabajo arduo para percibir por fin harmonía (tengo cierta hipersensibilidad "asociativa"). He llegado a poner gomas donde la gente cuelga cuadros, y a explorar todas las combinaciones de cuadros posibles; fue agotador muchas veces; y peor que mi tendencia a las crisis comiciales, y por supuesto, que el asma y falta de oxígeno durante unos pocos minutos. Menos mal que el asma se puede controlar bastante psicológicamente, ¡como el toc! Para los desmayos, quizás ayude pensar que cuando alguien es muy pesado hablándote, NO importa mucho que NO le puedas seguir).
* ¿Y si para mi toc, que NO es una enfermedad, sino un transtorno que depende de muchos factores (como el Zodiaco, sí), la vida me llevó primero a "la enfermedad del orden", a través de 2 traumas (así se enferma)?
####00303sociosuenos.txt  
####00404histoactualidad.txt  
####00505tecnicas.txt  
####00606anexos.txt  #########################################
############ANEXOS IMPORTANTE############
#########################################
####Nodo Norte (misión; lo pongo en anexos por NO ser la información muy detallada, busca tú):
- Nodo Norte en casa 1 o en Aries (nodo Sur en Libra, el opuesto siendo compatibles): vida pasada, aprendiste a colaborar, a establecer relaciones armónicas y a estar pendiente de los demás.
* Aprende ahora a definir y a perseguir tus propios objetivos y puntos de vista. Anima a los demás a ser independientes.
* Naciste entre 8 7 1930 y 29 12 1931; 26 1 1949 y 26 7 1950; 20 8 1967 y 20 4 1969; 7 4 1986 y 3 12 1987.
- Tauro vida pasada: situaciones dolorosas impuestas por los demás y muchos cambios drásticos, ¡Escorpio!
* Ahora, construye un sistema propio de valores para alcanzar tus objetivos (economía...) por ti mismo. Habilita al resto a activar sus talentos personales.
* 29 12 1928 y 7 7 1930; 3 8 1947 y 25 1 1949; 20 2 1966 y 19 8 1967; 12 9 1984 y 7 4 1986; 14 4 2003 y 27 12 2004.
- Géminis: filosófico, tu verdad era frecuentemente la única opción.
* Ahora, comunicación, cooperación y suma de contrarios. ¿Posibles experiencias kármicas a través de un hermano? Animar a los demás a tener varios puntos de vista.
* 3 12 1945 y 2 8 1947; 26 8 1964 y 19 2 1966; 16 3 1983 y 11 9 1984; 14 10 2001 y 13 4 2003.
- Cancer: lograr el reconocimiento en el trabajo y conseguir objetivos.
* Ahora, afecto verdadero y entrega sin esperar nada a cambio. Posibilidad karma con padre o madre. Conectar con la propia vulnerabilidad.
* 11 5 1944 y 2 12 1945; 24 12 1962 y 25 8 1964; 21 9 1981 y 16 3 1983; 10 4 2000 y 14 10 2001.
- Leo: complacer a la comunidad mejorando condiciones sociales.
* Ahora, desarrollar confianza en ti y tu creatividad. Habilitar al resto a confiar en ser legítimos y expresivos.
* 22 11 1942 y 11 5 1944; 11 6 1961 y 24 12 1962; 6 1 1980 y 21 9 1981; 21 10 1998 y 9 4 2000.
- Virgo: te sacrificaste por muchas personas y fuiste espiritual.
* Ahora, escoger lo que debe ser conservado. Funciones más específicas, conservando la ternura y calidez piscianas. Raciocinio y orden. Describir los laberintos del alma humana (con tu intuición).
* 25 5 1941 y 22 11 1942; 15 12 1959 y 11 6 1961; 6 7 1978 y 13 1 1980; 26 1 1997 y 20 10 1998.
- Libra: no tuviste muy en cuenta las necesidades o deseos de los demás.
* Sigue persiguiendo con la misma energía tus metas, pero con espíritu más colaborador y comprometido. Acompañar el andar del otro, ser mediador de conflictos y excelente escucha habilitando al resto a superar soledades.
* 12 9 1939 y 25 5 1941; 17 6 1958 y 16 12 1959; 8 1 1977 y 6 7 1978; 1 8 1995 y 25 1 1997.
- Escorpio: obviaste la parte más espiritual o elevada.
* Aparte de generar recursos materiales y defender lo que es tuyo, comparte tus recursos (se activará tu fuerza), y experimenta con energías más elevadas e incontrolables. Habilitar en el resto capacidades de potencia desconocida.
* 4 3 1938 y 12 9 1939; 5 8 1956 y 17 6 1958; 11 6 1975 y 8 1 1977; 2 2 1994 y 31 7 1995.
- Sagi: superficialidad e indecisión.
* Ahora supera el miedo a comprometerte con alguien o algo (Géminis quiere ser aceptado por casi todos). Confianza en lo espiritual, habilitar en el resto optimismo y respuestas trascendentes, convirtiéndote en maestro de vida.
* 15 9 1936 y 4 3 1938; 3 4 1955 y 4 de 10 de 1956; 28 10 1973 y 11 6 1975; 2 8 1992 y 2 2 1994.
- Capricornio: buscabas cariño, protección y seguridad en los demás.
* Ahora, ser pragmático y sostenedor habilitando también en el resto su capacidad de sustentar y generar. Objetivos propios.
* 9 3 1935 y 14 9 1936; 10 10 1953 y 2 4 1955; 29 4 1972 y 28 10 1973; 19 11 1990 y 2 8 1992.
- Acuario: pensar que tu forma de hacer las cosas era la única válida y no tenías por qué colaborar.
* Ahora supera la excesiva necesidad de aprobación externa, y ve que si te entregas al trabajo en equipo se energiza tu propio corazón.
* 25 6 1933 y 7 3 1935; 29 3 1952 y 10 10 1953; 3 11 1970 y 28 4 1972; 23 5 1989 y 18 11 1990.
- Piscis: rígido (entender racionalmente sólo) y estructurado.
* Ahora, confiando en tu sentido común ampliado, ¡adéntrate a explorar el lado intangible y espiritual de la vida! Mayor intuición y percepción emocional.
* 29 12 1931 y 24 6 1933; 27 7 1950 y 6 3 1952; 20 4 1969 y 2 11 1970; 3 12 1987 y 22 5 1989; 23 6 2006 y 18 12 2007.
####Tzolkin sellos y tonos
##Sellos. P: poder, C: característica, A: acción.
- 1 IMIX (Dragón, raza 1) PCA: nacimiento-ser-nutrir. Da comienzo a proyectos con fé en uno mismo. Es abundancia, protección, padre / madre. Dormido: nunca termina lo que empieza.
- 2 IK (Viento, 2) espíritu-aliento-comunicar. Comunicación. Espontáneos, y mentalmente muy activos. Dormido, habla mucho.
* Este día permite transmitir conocimiento, ideas, planes.
- 3 AKBAL (Noche, 3) abundancia-intuición-soñar. Usar el poder interno para materializar los sueños. Dormido: carencias espirituales y materiales.
* Ejercicio de auto-conocimiento. La intuición, lo misterioso y desconocido, los sueños y la abundancia.
- 4 (semilla, 4): florecimiento-atención-atinar. Conocer el momento adecuado para hacer florecer ideas y proyectos. Es la frecuencia de la virtud sin esfuerzo. Sólo hay que "sembrar" correctamente. ¿Sembrar es también hacerse las preguntas adecuadas antes de quedarse atontao, dormir...? ¿Desear con emoción y planificación es sembrar no? Consejero (sacar potencial de terapeutas, docentes, maestros...), que se sirve de escuchar su intuición / instinto, en pausa (¿como atontao con la boca abierta?). Una semilla dormida no esta en paz (hay inseguridad) y busca en los demás lo que no tiene, volviéndose dependiente (no cosecha).
* Prestar atención a todo lo que vivimos, cómo sentimos, cómo nos comunicamos, que intención tenemos... Los proyectos del Dragón florecen mejor en los días "semilla".
- 5 CHIKCHAN (Serpiente, 1) fuerzavital-instinto-sobrevivir. Instinto de supervivencia. Protectores de la naturaleza. Interpretar los mensajes del cuerpo. Expresa el deseo sexual. Dormido: depresivo, y malgasta su energía a través del deseo sexual.
* Días propicios para renovar (renacer), y hacer negocios.
- 6 CIMI (Enlazador de mundos) muerte-oportunidad-igualar. Contacta con otras realidades y dimensiones. Dormido: tiene miedo a la muerte, y a ser libre.
* Transciende la muerte y aprende a soltar.
- 7 MANIC (Mano) realización-curación-conocer. Sanación y liberación del ego. Artes, danza, nobleza, altruismo. Suelen ser terapeutas. Intuitivos. Dormido: enfermizo e hipocondríaco, incapaz de manejar la energía a su favor.
* Fluidez de las cosas, liberar bloqueos.
- 8 LAMAT (Estrella) elegancia-arte-embellecer. Dan luz (paz, harmonía...) a todo lo que tocan, son conscientes de su trabajo en la vida y sus metas. Artistas, escritores, pintores. Dormido: incapaz de expresar su creatividad.
- 9 MULIC (Luna) aguauniversal-flujo-purificar (y limpiar). Recuperar la memoria ancestral (quién eres y adónde irás). Experimentar el amor y la lealtad. Personas muy psíquicas y emocionales. Dormido: no controla sus sentimientos.
* Conocer cual es tu tarea y misión en la vida.
- 10 OC (Perro) corazón-lealtad-amar. Lealtad y nobleza. Muy protectoras, sienten el amor de forma incondicional. Buenos compañeros (apoyo) y aliados. Dormido: infiel, celoso e incapaz de amarse a si mismo.
* Buenas alianzas, y nuevas aperturas y oportunidades en la vida.
- 11 CHUWEN (Mono) magia-ilusión-jugar. Artistas, científicos y magos. Alegres, en movimiento, espontáneos, humor (bufones...), ¡fiesta! Misión: Vivir el ahora. Dormido, sin espontaneidad, miedo a vivir la vida, serio y triste.
* Días para ser espontáneos, dejarse llevar y disfrutar de la vida.
- 12 EB (Humano eléctrico) librevoluntad-sabiduría-influenciar. Esencia humana original no terrestre. Relación muy estrecha con la fuente original. Te expresas como eres en realidad. Conscientes de sus actos. Misión: Ser guías, y mostrar a los demás con el ejemplo a ser ellos mismos. Dormido aconseja pero no sabe que hacer con su vida (falta de conexión con la fuente original).
- 13 BEN (Caminante del cielo) espacio-vigilancia-explorar. Cambiar la percepción del tiempo. Aventurero, vagabundo. Eternos buscadores, pacificadores. Capacidad de liberarse y liberar a los demás. ¿Nunca está dormido?
* Día para liberarse de ataduras.
- 14 IX (Mago) atemporal-receptividad-encantar. Compañero, guía / consejero, fuerte y poderoso. Profeta. Calmados, capacidad para sanarse a si mismos y a los demás. Consejeros. Dormido: competitivos, usan poderes para sí mismos.
* Toma tu propio poder y decisiones, ten fe en ti mismo.
- 15 MEN (Águila) visión-mente-crear. Independientes, ambiciosas, valientes. Les gusta criticar (detalles). Muy mentales y técnicos. Habilidad para concretar empresas y negocios. ¿Ven más allá? Misión: Crear conciencia planetaria. Dormido: incapaz de materializar los planes.
* Día para hacer realidad tus sueños.
- 16 KIB (Guerrero) inteligencia-intrepidez-cuestionar. Usa la inteligencia para armonizar el entorno y a los demás. Capacidad para transcender el ego. Solitarios, valientes y disciplinados. Vencen sus miedos. Dormido: sumiso y obedece sin cuestionar.
* Te invita: inteligencia para resolver tus problemas
- 17 CABAN (Tierra) navegación-sincronía-evolucionar. Muy activas física y mentalmente. Adaptables a los cambios. Provocar cambios para la evolución. Dormido: perezosa e inadaptable.
* Día para aceptar los cambios en tu vida para seguir con tu evolución personal.
- 18 ETZNAB (Espejo) sinfín-orden-reflejar. Reflejan la verdad cortando la ilusión y la falsedad (del propio ego...). Son guias espirituales reflejando el camino correcto. Provocan cambios. Dormido: solo refleja el lado oscuro y no ayuda a crecer.
* Día propicio para verse a si mismo, y ver reflejada la verdad que te rodea.
- 19 CAUAC (Tormenta) autogeneración-energía-catalizar. Transmiten la información que reciben. Crear el clima idóneo para el crecimiento espiritual (si hace falta provocan cambios bruscos). Dormida: huracán que no se calma.
* Capacidad de limpiar y liberarse de lo viejo para aceptar la nueva vida.
- 20 AHAU (SOL) fuegouniversal-vida-iluminar. Saben reflejar la luz del sol interior (con su sabiduría) a los demás. Representan la culminación de lo aprendido y ponerlo en práctica. Dan amor de forma incondicional. Dormido: apagado y triste, se encierra en si mismo.
##Tonos:
- 1. Magnético (do). Determina propósitos:
* Gente asertiva, buenos guías de sí mismos y de otros, dan buen empuje a cualquier proyecto al que estén asociados, y trabajan mejor con retos. No se preocupan mucho por los detalles o el toque distintivo. Entregarse totalmente.
- 2. Lunar (do+). ¿Cuál es mi desafío? Se muestran las barreras, bloqueos...
* Gente 2: en ocasiones se les complica demasiado hacer una elección. Romper con patrones tradicionales.
- 3. Eléctrico (re). Encontrar las líneas de acción para el logro del propósito.
* Gente. Elocuentes. Comprenden el ritmo de las cosas y son incansables. Pueden predecir el siguiente movimiento cuando han encontrado el molde a una persona... Activar el servicio a otros y a su comunidad mediante la atención a sus propias necesidades.
- 4. Autoexistente (re+). Decide la forma de acción, y la medida (el 4 engloba alto, largo, ancho y profundo). Llevar plan a vida cotidiana.
* Día para dar forma y medida a nuestros pensamientos, para hacer los cambios que hemos estado postergando y para revisar que nuestras acciones sean sin daño al medio ambiente ni a otros seres.
* Gente. Comprenden significados profundos mediante una observación detallada. Metódicos y organizados. Considerar siempre la relación causa-efecto de la forma en que realizaremos nuestras acciones.
- 5. Entonado (mi). ¿Cómo puedo optimizar mi potencial, y con qué recursos cuento y qué falta? ¿A qué o a quién doy poder, y cuanto recupero para mí?
* Día para reconocer cuál es mi poder y en qué lo he depositado. Reconocer que todas las energías del Universo están disponibles para que cumpla mis metas, todo en una justa medida de uso y no abuso.
* Gente. Libres y persistentes. Inteligentes y líderes por naturaleza, buenos para todo y muy prácticos. Trabajadores duros (no ponen trabas). Buenos investigadores y observadores, siempre pueden ver el lado bueno de las cosas. Mantenerse rodeados de personas que les hagan sentir bien y no tratar de dominar situaciones que escapan a sus ámbitos.
- 6. Rítmico (fa). Observanr cualquier evento como una oportunidad de crecimiento. Indica que atendamos todas las posibilidades que tenemos para encontrar manteniendo el equilibrio. Nos habla también del "balance orgánico" (estaciones, noche-día, el patrón de crecimiento de las plantas...) para aplicar a nuestras vidas y los momentos de caos, para conseguir la armonía.
* Gente. Incansables mentalmente, logran comprender el funcionamiento básico de las cosas, son dinámicos, versátiles, rebosantes de información y comprenden sus propios ciclos y sus cuerpos de una manera muy particular. Mantenerse hasta el final de las cosas que inician.
- 7. Resonante (fa+). Abrir "canales" para obtener respuestas (pausa para escuchar voz interor). Misterio, magia, sueños, mensajes divinos, canalizar, inspirar. ¿Cómo armonizo mi servicio para con los demás?
* Día: nos ayuda a encontrar la dirección adecuada de nuestros esfuerzos.
* Persona resonante (te la encuentras): día para canalizar hacia fuera de nosotros la energía de nuestro sello hacia lo que queremos lograr.
* Gente. Canaliza información quedándose medio lelo... Las personas resonantes tienen respuestas para todo. Si están en armonía siempre saben qué hacer y se dejan llevar por las situaciones conforme van sucediendo. Su energía es crucial para que otros que no son resonantes comprendan conceptos vitales para un despertar de conciencia. Son buenos maestros e inventores. El tono resonante, me pide que mantenga el contacto con mi "guía interior" sin perderme en el ego o el mundo de afuera (todo emana de lo sutil).
- 8. Galáctico (sol). ¿Mis pensamientos, sentimientos, palabras y acciones van en un mismo sentido? ¿Soy honesto conmigo mismo? Nos permite vernos claramente a nosotros mismos sin juicios o castigos.
* Buen día para organizar el interior en base a la coherencia. Sacar al ser "más bueno" que habita en nosotros, para el resto de la vida. Información necesaria para que veamos donde estamos siendo injustos con nosotros mismos.
* Gente. Concientes de los patrones existentes en casi todo (números, plantas...). Ayudan a lograr armonía allí a donde van, a menos que se encuentren en su lado oscuro. Les duele percibir la injusticia del mundo. Son buenos escuchas y sus opiniones son generalmente acertadas. Mantenerse en justicia.
- 9. Solar (sol+). Motivación. Por qué hacemos lo que hacemos, cómo nos gusta y qué es lo que nos mueve en lo más profundo de nuestro ser. Nos enseña a ser pacientes aún cuando vemos que no podemos avanzar.
* Día para preguntarnos si habría que hacer algún cambio según las motivaciones verdaderas. Mis intenciones deben ser lo más transparentes posible, pues de ellas emanará la satisfacción de deseos...
* Gente. Profundas y complicadas. Inspiran grandes cambios y logran cosas que para muchos parecen imposibles. Determinados, grandes trabajadores y soñadores. Deben ir muy profundo de sí mismos para inspirarse y lograr inspirar a otros, con mucha paciencia.
- 10. Planetario (la). ¿Cómo lo perfecciono? La comprensión de que todo es como es debido a nuestras acciones, es mensaje de este tono, ¿no echar culpas afuera?
* Es día para darnos cuenta de que aquello a lo que ponemos energía, intención, atención, es lo que se manifiesta. Si algo no nos gusta de lo que vemos este día, buscar el fallo, y en los días siguientes corregirlo. Ver las limitaciones que nos hemos impuesto.
* Gente. Alegría, irradian encanto. Llegan a sacrificarse duramente. Ir más allá de sus propias creencias y condiciones, manifestando la grandeza y belleza de la vida.
- 11. Espectral (la+). Nos muestra las cosas que no nos sirven ya, que no nos gustan, que no logran acomodarse en nuestro espacio vivo. Soltar, liberar.
* Día para irnos a la cama +LIGEROS con la certeza de tener "otro hueco para nuevas cosas".
* Gente. Cambian todo el tiempo. Muy dinámicos y con muchas ideas. Facilitan el cambio donde llegan y son emprendedores del mismo. No llenarse de cosas, personas o situaciones inservibles.
- 12. Cristal (si). ¿Cómo puedo dedicar mi servicio a todo lo que posee vida? Nada sobra, nada falta y todo está en el lugar que debe estar. Es la conexión de partes sueltas, para lo que se necesita la cooperación de cada una de ellas.
* Mejor día para meditar, ser modestos, ayudar y cooperar, servir a nuestras necesidades y por ende a las de la colectividad; llegar a acuerdos, organizar reuniones, rodearse de gente querida.
* Gente todo terreno, excelentes maestros e investigadores. Comprometidos y un poco obsesivos. Tienen muchos amigos. Su reto es mantenerse aprendiendo y compartir todo lo que saben.
- 13. Cósmico (do mayor). Es la energía más sutil, nos muestra lo perfecto del presente, lo divino de la naturaleza, lo que somos capaces de lograr con nuestra conciencia, pensamientos y acciones. Es la celebración, la alegría de saber que todo es posible. Es el recuerdo de la sabiduría original. Es mantenerse presente.
* Buen día para cerrar ciclos, para permitir que todo lo que hemos aprendido forme parte de nosotros a partir de ahora. Nos permite recargar baterías para un nuevo inicio. Buen día para plantear sueños y anhelos para convertirlos en un propósito para el siguiente grupo de trece.
* Gente. Visionarias, inolvidables, trabajadoras. Tienen una conexión particular con energías sutiles, como para siempre saber qué hacer, leer a las personas, entrar en meditación profunda... Su reto es cerrar sus ciclos y trascender las cuestiones materiales.
####Diseño Humano mis numerajos.
###Mis canales (Diseño Humano):
##5, RITMO:
- Es incorrecto dar tu opinión (que es lo que más te gusta) a quien no te la pide, caerá en oídos sordos (vale, entonces anularemos a mucha gente llevándolos al Ártico je je).
- La gente que MARCA EL RITMO es MUY MAGNETICA.
- Si eres iniciador, podrías "tocar solo" y ser muy molesto (mejor ser generador).
##31 EL ALPHA, el líder:
- Como proyector (¿el tipo más compatible con el liderazgo? ¿Y el manifestante, el menos compatible?) es alguien muy observador, para ver lo que es o no correcto.
- No pueden seguir "el camino" ellos, sólo pueden comunicarlo verbalmente. Son "representantes de grupo". ¿Entonces yo no puedo plantar lechugas aunque sugiera que se haga je je?
* Solo puede ser líder si la mayoría está de acuerdo con él. Otros te tienen que invitar a ser su líder.
* El líder lo que menos quiere es mandar o dar órdenes. Le gustaría que todo el mundo supiera lo que tiene que hacer. Entonces ellos no se sentirían tan responsables.
- Un buen líder sabe tratar a la gente, sabe hacerse escuchar por todos, cómo organizar a todos (quizás no sepa organizar la información eso sí). Es un modelo de orden y de disciplina.
* Las personas, inmersas en su visión del mundo, en sus emociones, en sus pasiones... no son capaces de tener una perspectiva científica del mundo; necesitamos líderes que tengan esa visión.
##44, LA RENDICIÓN:
- Transmisor. Gran capacidad de convicción (y manipulación). Tienen olfato con la gente.
- El arte del espíritu emprendedor, que consiste en obtener el premio de tener los suficientes recursos para trabajar sólamente cuando te apetece y el resto del tiempo descansar.
- Rendición significa que la única voluntad sana es la voluntad de hacer lo que puedas con lo que hay.
* La rendición es un éxito.
##48, LA LONGITUD DE ONDA. TALENTO:
- Alcanzar la maestría de cualquier proceso (experimentación y repetición continua). Tienen grandes recursos para solucionar problemas.
* El canal anterior del juicio sabe que hay desorden, pero este canal es el que sabe cómo ordenarlo (no corregir a quien no desea cambiar, y esperar a que te llamen, y "perfeccionar con gusto").
* No debe corregir en otros sus propios defectos.
###ESCORPIO SÓLO.
##43, ESTRUCTURAR:
- Mente original capaz en todo momento de expresar sus pensamientos únicos.
* Tienen para los demás una mente marginal (si no los entienden), distinta (a veces no deben arriesgarse a expresarse sin que se lo soliciten).
* Les cuesta escuchar porque ya saben.
##Quedan 3 pero, ¡pa su madre je je! 1, 14 y 28.
- 28 LUCHA (potencia el valor de la vida luchar por algo que merezca la pena, lo cual te aleja de querer "ganar").
* Todo deben hacerlo a su propio modo.
* Les conviene el deporte para liberar su exceso de adrenalina.
* Luchar es muchas veces intentar expresar conflictos con claridad. Su búsqueda es saber para qué están aquí, y luego cumplir su propósito tenazmente. Es el adiestramiento de la intuición. Y no se puede adiestrar si no siente la amenaza, el peligro.
- 14 EL COMPÁS (posee el don natural de guiar a otros, aunque no lo sepan).
* El compás es saber cuándo ser receptivo y cuando responder.
* No siempre conoces la dirección correcta hasta que surge algo en tu camino que "mueve tu cuerpo".
* Están muy centrados.
- 1 LA INSPIRACION (es el más creativo de todos los canales, el canal de los artistas en sentido muy amplio).
* Este canal no es inspirador para el que lo tiene, sino para cualquiera que se encuentre con él.
* Nos habla de que las peculiaridades sean reconocidas por el otro como una contribución.

#################################################
############ANEXOS PSICOLOGÍA Y SALUD############
#################################################
####Índice:
- 1. Adelgazar y engordar: pura medicina.

####1. Adelgazar y engordar: pura medicina.
####¡Lo que todos estabais esperando, engordar y adelgazar! Incluye imagen (entrenamiento y pelo).
- Con ventana de ingesta pequeña (2 comidas al día...) puedes comer hasta "basura" (trabaja menos el hígado...). ¿Qué tal lo más fuerte (una sola pieza de fruta y legumbres: adictivos y terribles hidratos de carbono) para la primera, y para cenar, la buenísima / funcional grasa y la proteína animal (u hortalizas)?
* Hemos desechado de nuestra dieta lo astringente (que tiene más micronutrientes): granada, pomelo, membrillo, manzana, dátiles...
* Si te alimentas mal (comes demasiado...), ¿podría ser por desvalorización (Nueva Medicina Germánica)?, ¿por una mala defensa del territorio?
* ¿Que todavía no os echáis siestas? Yo las llegue a hacer sentado, en la cama, con la espalda contra una almohada doblada en vertical, escuchando música (o con tapones), y en casi total oscuridad. Pero antes, a relajar.
- Mujer: mucha grasa abdomen es por cortisol: toma C, B5 y magnesio. Mucha grasa en caderas y muslos: toma brócoli, B6, B12 y ácido fólico.
* El trigo integral aumenta la producción de estrógenos. El estrógeno en la mujer "custodia la grasa".
* El hinojo aumenta el tamaño de la mama y promueve el producir leche en las madres primerizas.
* Las grasas monoinsaturadas se distribuyen "bien" (incluye los senos, masajéalos).
- Hombre:
* Hombre con pechos: puede ser el hígado (no elimina estrógenos).
* Sin testículos se vive más. Y la inmunidad es menor en hombres musculosos (Menos proteína C-reactiva, que marca patógenos).
* El estrógeno produce retención de líquidos (falsa gordura, que se acaba bebiendo).
* La grasa (¿acumulada?) produce estrógeno, y es la razón por la cual hombres bien obesos desarrollan senos y se feminizan hasta en el tono de voz.
- Delgadez: nervios, ansiedad, medicamentos, grandes miedos o muy grandes alegrías (a unos los adelgazan, y a otros los engordan). Proteger los sentimientos.
- Anorexia: mucho miedo. Rechazo y odio hacia uno mismo. NO a la vida.
- Bulimia: terror desesperado. ¿Odio a uno mismo?
- Diabetes: 
* A causa de heridas anteriores, necesito controlar el entorno y la gente que me rodea. Como muchos dulces, por mi amargura. Ausencia de amor y alegría. Quiero que la gente realice mis deseos, y NO veo que me amen.
* Resistencia frente a acontecimiento inevitable (separación, traslado, examen...), por el que siento asco, desdén...
* Durante el parto pueden venir sentimientos de repugnancia por algo que sucedió en la infancia.
* No acepta / "no puede ser verdad" (trauma de miedo y resistencia).
* Nostalgia de lo que pudo haber sido. Tristeza profunda. Falta de dulzura.
* NO suelen dejar entrar el amor a sus vidas (se cierran, como la célula).
* Si te duele la soledad, diabetes.
- Engorda:
* Preocupaciones, tristeza, sensación de soledad, comer rápido o entre horas o en el último tercio del día, querer hacerse notar (¡mira qué bien bailo la peonza!), estar insatisfecho (agradece), carbohidratos sin proteínas, zumo concentrado, ftalatos (productos de limpieza...).
* Gula (no aceptar sentimientos / pensamientos, "tragárselos"; es también cobrar y ponerse a gastar al minuto compulsivamente, para sentir "gustito").
* Pensar en cosas materiales (que si voy a ganar menos este año... Lo relacionaría con el "conflicto del refugiado", el único que engorda, Nueva Medicina Germánica). Una sociedad protectora (sustento garantizado), NO permitiría ciertas preocupaciones materiales.
* Te sientes mal con alguna parte de tu cuerpo y engordas. Te sientes todavía peor y... es un círculo vicioso.
* NO hay sensación de saciedad (hígado) por miedo a morir de hambre de niño.
* Conflicto de presa ("he sido lento").
* Haber ido a parar al camino equivocado (y claro, te paras). ¿El aspecto es de síndrome de Cushing?
* Las dietas pobres en nutrientes hacen que el cuerpo almacene (se prepara para lo peor). Los músculos merman (no hay nutrientes para mantenerlos), y engordas.
* El alcohol hace que la glucosa se eleve, y termine almacenándose grasa.
* Aspartamo, productos light o poco caseros / cariñosos (hechos por máquinas malignas je je), medicamentos...
* ¡Para la retención de líquidos hay que beber agua (mejor "suero": lechuga con aceite, sal y vinagre casero; o agua con limón y un poquitín de sal, o agua de mar, ¿y naranja?)!
- Adelgazar (dormir fresquito, para generar buenas grasas pardas adelgazantes):
* En el desayuno metemos las calorías (el desayuno marca la tasa metabólica del día). Tomar agua antes de las comidas, y comer con cierta frecuencia (cada 3 o 4 horas). Pero que no se te ocurra desayunar leche con fruta, hace menos daño un café mal tomao (cuantas cosas de Marco cuelo).
* Si almuerzas y cenas siempre lo mismo, se gasta poca energía. ¡Varía el menú!
* Alimentos: nueces (omega3, impiden que la grasa se acumule, y regulan el estrés). Cítricos, almendras, aceite de oliva para favorecer la absorción de nutrientes, vegetales altos en fibra, arándanos, moras, fresas y frambuesas (tienen flavonoides para regular el sodio).
- Engordar QUERIENDO:
* Nueces y semillas (¿valen germinaos?), casi no contienen humedad. La arginina produce óxido nítrico, que reduce el metabolismo.
* La temperatura ideal son 24-27 (con 28 ya transpiras). Ponte algo que deje correr el aire.
* Alimentos: agua durante las comidas, ¿patata (más potasio que sodio, pero puede producir picos de insulina, con lo que te quedas con poco azúcar y hambriento)?
* La leche (cuidadín) tiene triptófano, ¿precursor de la melatonina NO? Buena para reducir el hipertiroidismo. NO pasarse. Melatonina natural: cerezas ácidas, nueces, avena, arroz, maíz dulce, tomates, plátanos... El consumo de patatas enfriadas disminuye la tasa de oxidación de los hidratos de carbono; ¿y esto es sano?.
* Como el calcio, el magnesio baja la actividad del sistema simpático (que produce adrenalina y fuga de protones).
##Alimentos según tipo de sangre (evitar combinación de proteínas animales con grandes cantidades de féculas: panes y patatas; y las infusiones que van bien para unos, van mal para otros):
- Tipo 0, el cazador (los negros originales, y yo. Fuerza, vitalidad y resistencia). Mucho ácido en estómago (dirigieren bien la carne). ¿NO les va bien el gluten en general?:
* Engordan / están mal: leche de vaca, patatas, plátanos, cacahuetes, frijoles rojos, trigo, maíz, judías, lentejas, coliflor y coles de Bruselas, carne de cerdo y embutidos, café (mejor té) y bebidas gaseosas. Bien pescados y mariscos, hígado, espinacas y brécol.
* CARNE ROJA: acompañarla de hortalizas (y sólo ciertas frutas) para evitar la excesiva acidificación. NO muchas solanáceas, excepto los tomates. Limitar lácteos (salvo mantequilla y queso fresco magro), huevos y cereales.
- Tipo A (paios originales, el agricultor. ¿Los más parecidos al Zodiaco de Tierra? Necesita muy poca grasa para funcionar bien). Vegetarianismo (poco ácido en estómago), pero pueden ingerir hasta 7 huevos a la semana:
* Negativo: carnes (de res, embutidos...), lácteos en general (leche de vaca...), habas, patatas, plátanos y exceso de trigo, favoreciendo el adelgazamiento los vegetales, las legumbres, los cereales y la piña.
* Pescado en pequeñas cantidades, excluyendo los planos. Cuidado con la harina de trigo. Consumir de forma habitual semillas oleaginosas y frutos secos, evitando las nueces brasileñas y los pistachos.
* Practicar actividades físicas relajantes (yoga, Tai-Chi no muy de noche je je, bicicleta, natación, paseos...). 
- Tipo B (beres originales. ¿Zodiaco de Aire? Disfruta afrontando nuevos retos. Huye de conflictos y tensiones). Huevos en forma moderada:
* Cuidado con pollo, embutidos, mariscos, pulpo, anguila, ACEITE DE MAÍZ Y GIRASOL (lectinas), cacahuetes, maíz, lentejas, semillas de sésamo, trigo y tomate, favoreciendo el adelgazamiento los vegetales de hoja verde, la carne (especialmente la de hígado), el pescado blanco, los huevos y los lácteos (¿salvo el mantecado?).
* Puede carnes magras en general. Limitar consumo de semillas y frutos secos.
* Actividades físicas moderadas y equilibradas (ejercicios aeróbicos, bicicleta, natación, tenis).
- Tipo AB (pablos o pabeles. Espirituales y un poco precipitados. Detestan los conflictos y son incapaces de tomar partido cuando dos personas se enfrentan. Sistema digestivo delicado. Pueden tomar café con moderacion y así aumentar el nivel de ácido estomacal):
* Engordan: carnes rojas, embutidos, pollo, maíz, ¿trigo?, alubias, semillas de sésamo, vinagre, pimienta. Pueden comer: verduras (tomate...), algas marinas, pescados, lácteos (cuidado con moco en vías respiratorias), piña, ciruela, uva, frutas del bosque y cereales.
* Cuidado con el marisco. Limitar el consumo de pasta. ¿Preferir las grasas vegetales?
* Esfuerzos fisicos deportivos moderados y relajantes.
#¡La carne roja tiene hierro, y la grasa está bien en general!
##Metabolismo:
- La leptina regula el apetito (¿menos hambre a más leptina?). Es 3 o 4 veces mayor en mujeres para un IMC igual.
- Para nuestro querido Páncreas: no exagerar con medicamentos o químicos.
- Para nuestro querido hígado, alimentos ricos en glutation: espárragos, sandía, brócoli... Papayas y aguacates ayudan a producirlo. Aceite de oliva, preferentemente crudo, en tus platos.
* Purificación: amargos (tallo de brócoli, diente león...).
* Protectores: ajos y cebollas.
* Para dañar nuestro hígado: ¿lácteos y cerdo? NO abusar. Por la noche, extremar precauciones. Alimentos procesados: pan y arroz blancos, dulces... Integral, mejor. Cafeína, alcohol, drogas, exceso de hierro...
- El "hueso ancho" prácticamente no existe, los huesos son más o menos el 15% de ti.
####Entrenando. Incluye superficialidades, eso sí.
##No hace falta entrenarse en musculación, uno puede entrenar en fuerza corriendo con una mochila cargada por el monte.
- Estrategia de entrenamiento pa ectomorfos (flaquillos); los que lo tienen más difícil. Primero, desreprimir por Jung, pa tener más fase "de cura" y menos activa:
* Poco tiempo pero intenso, y dejando días de descanso. Un mínimo de ejercicio aeróbico. Estrategia del "fallo muscular": es un fallo cerebral (por llevar mucha energía) cuando el músculo no está cansao.
* Como última medida, comer una pizquita más el día del entrenamiento (no uso pesas reales, hago algo parecío al fullbody). Como medida "desesperada", tomar el 50% de las calorías del día alrededor del entrenamiento (¿después, lo de alto valor glucémico, como zanahorias? ¿Y antes yogur?).
* Al tener poca superficie corporal, se termoregulan con más facilidad, por lo que son aptos para carreras largas.
- Para mesomorfos (atléticos; es es fácil tanto perder como ganar peso): lo importante es ser constante.
- Para endomorfos (gorditos):
* Ejercicio a menudo (con mucho cardio pa acelerar el metabolismo). Dormir bien y bastante. ¿Azúcar y harinas fuera?
- Mucho estrógeno puede saturar los receptores del hipotálamo, y entonces, no se produce hormona luteizante (necesaria pa que las gónadas produzcan testosterona).
##Musculación (más):
- Substancias:
* La taurina (antes del ejercicio, pone a raya a la destructiva miostatina) está en pescados y mariscos, pulpo, lácteos, huevos, algas, almendras, legumbres, algunas carnes...
* Zinc: convierte estrógenos en testosterona: pescados, hígado de pollo y semillas.
* Producción de testosterona: paso yogi entre 10 y 15 minutos (levantar rodillas como si estuvieses marchando). Tras calentar, hacerlo todo lo rápido posible hasta que no puedas más. Alternativa: mucho peso pocas repeticiones. Si se hace con frecuencia el entrenamiento al fallo, habrá - testosterona. Y si sobreentrenas, el cuerpo tenderá a almacenar.
* Hormona crecimiento: muchas repeticiones, con descansos más cortos. ¿Un día que no se entrene al fallo? ¿Por ejemplo 10 carreras de 75 metros con un minuto de descanso entre ellas? Empezar con 3. También funcionan los saltos en cuclillas o saltar a la cuerda (ejercicio que trabaje muchas partes a la vez de forma explosiva).
- Hábitos:
* Cardio tras levantarse mejora los músculos (aunque queme grasa).
* Antes de entrenar: 2 vasos agua 2 o 3 horas antes, y otro 20 minutos antes.
* Tras el ejercicio intenso, seguir con uno un poco menos intenso (incluso cardiovascular), para que sigan llegando nutrientes.
* Tras entrenar, lácteos no muy altos en grasas (su proteína repara, como los carbohidratos de bajo índice glucémico).
- Los huesos crecerán al ritmo de los músculos para poder soportar ciertas tensiones. ¿Los huesos decrecen más lentamente no?
- En un movimiento hacia abajo con un peso, se produce más músculo que en la otra fase. Cuanto más lento, más eficaz.
##Más:
- Pelo. El calor y la humedad lo vuelven "silvestre". Esto ya sería coqueteo puro, superficialidad.
- En el hombre, ¿y la mujer?... las grasas propician la creación de testosterona y hormona del crecimiento. Ya entiendo, ¡pa antes de entrenar!
- ¿Las adolescentes gorditas tienen más testosterona?
- Durante el embarazo, puedes darte crema de progesterona natural (los médicos lo desaconsejan por presiones de las farmacéuticas).
####A‘ADIDOS:
##Cosillas.
- El materialismo (acumulación...) es la principal causa de engordar. Separa las cosas que te dicen algo de las que no. Has de aprender a estar satisfecho con pocas.
- "Voy lento" lleva al hipertiroidismo, ¿y "he sido lento", al hipotiroidismo?
* El abuelo sintió impotencia preso. La nieta, impotencia (bloqueo de actividades económicas; por ciertas casualidades, no llegaba a cobrar), que dio lugar a hipotiroidismo.
* Hipertiroidismo: rabia por haber sido dejado de lado. Decepción porque NO respondo a las expectativas de los demás. ¿NO respetar las fases (querer algo ya)? Me doy plazos muy cortos (me apresuro).
##Cosas de MAlarcón (Centro Magna Hipnosis y regresiones: dejas de fumar...) y GSanAgustín (El Código Biológico):
#Miguel:
- ¿Tensión por carbohidratos?
- Hipócrates hablaba de menos de una comida al día. Los médicos tan engañaos.
- Ancel Keys (manipulador) demonizó las grasas (que son buenas: de alta o baja densidad. A más colesterol, más vives; Álex Merino: en Andorra se come mucha carne, y son longevísimos). El alcohol es siempre malísimo, y el vino, ¿habría que tomarse litros? Zumo de naranja recién exprimido = 2 Whiskys (mucho carbohidrato). Reduce los carbohidratos y reducirás el alzheimer. Necesitamos un poquitín de celulosa (como carbohidrato), y poco o nada más.
* Desayunar: cucharada aceite coco (reducir la cándida, que quiere azúcar). ¿Y luego grasa y proteína pa activar? Vitamina C: pimiento rojo. Calcio: sardinillas, atún, carne, jamón, huevos, vegetales, frutos secos, mantequilla, aceitunas, queso... Pocas legumbres. 40% grasas, 30% proteínas, 20% vegetales, 10% carbohidratos.
* Finalizar: sal (buena para el corazón), Sol, vivir más relajado. El pollo, con piel. Vísceras (muy nutritivas). El pan, puedes comer un poco, y usar el resto pa limpiar el plato. ¡Na de contaminar con venenos je je!
- Gorditos: sacar carga emocional de la infancia.
#Gonzalo:
- Insomnio:
* Comer 3 veces al día (y bastante en cada comida) ya es proinsomnio.
* ¿Más tarde de las seis NO deberíamos comer nada (se estimula el cerebro, por mandarle su "azúcar")?
* Ayudas. Bicarbonato (puede sentar mal por tener mala flora) con agua (o vinagre de alta calidad, NO pasteurizado. Casero...) 2 horas antes de acostarse. Agua fría: ayuda al delgado y al gordo, por la mañana y la noche. ¿Ejercicio de fuerza o resistencia 3 horas antes como poco?
- Salud en general:
* El magnesio cae bien con nivel de nutrición bajo (si no, mejor bicarbonato y vinagre de alta calidad con sal, aceite y lechuga... = suero / bueno).
* La bilis (se suelta con limón, y tiene que doler) alcaliniza (bien), ¿como el picante? Sin embargo, el cuerpo acidifica (mal) con la fruta alcalina (con el ácido limón, alcaliniza).
* NO pasarse con los dátiles (son buenos con poco).
* Agua retenida: toma agua de mar (tiene electrólitos).
- Hormonas (7 segundos de abrazo):
* Al comer, se segrega dopamina, la hormona de la responsabilidad (pa que vuelvas a comer, motiva, ¿relacionada con objetivos de vida?). ¿Serotonina y endorfina son de simple placer instantáneo?
* La cocaína bloquea los receptores de dopamina, ¿que va a sangre y se consume muy pronto? Sí, las ratas NO solas, NO van por el agua con cocaína, son "felices". Y a ratas les daban mierda con ventana de ingesta pequeña, y estaban bastante bien.
* Te alimentas mal, y el cuerpo tira de electrolitos poco, y luego se va por el azúcar (del cuerpo). Y se necesita comer otra vez. Hay cosas que balancean (chocolate en gente NO gorda; si es gorda, ¿hay carencia de mamá?). hay que acostumbrar al cuerpo a una dieta de proteína y grasa (comes menos; y bebes mucho menos bebiendo bien; si bebes mucho, ¿falta sal?).
- Siempre se sanó imponiendo manos y con plantas (elegidas según la causa, NO quedarse en los síntomas).
- Más:
* Diabetes: puede manifestarse a los 40, pero empezaste a tomar carbohidratos a los 8 años...
* Lo amargo es bueno para el hígado (que desintoxica el cuerpo). El ajo estimula la bilis (hígado).
* Jugos verdes: en realidad sanas por NO mezclar alimentos, pero faltará hierro.
* Limpiando da dermatitis, diarrea...
* El aguacate da grasa y es poco malo.
* Desvalorización + carbohidrato: pueden dar gota. Cerdo y marisco (animales carroñeros) sin abusar.
* Sueros con los ayunos.
* Bicarbonato, 2 horas mínimo antes o después de comer (para NO entorpecer la ácida digestión).
- Sabores para balancear emociones. ¿Ácido vs amargo (suele ser saludable) y agrio vs salado? Temperamento colérico (atlético. Su sabor es picante: le balancea el dulce) vs temperamento de mujer de cadera ancha y pechugona (flemática). Cuadriculado: que tome salado. Vegetaliano: ¿por conflicto con la autoridad / papá muchas veces? ¿El mercado vegetal es muy contaminante (bosques fuera...)? ¿Tomar agua una vez cada 2 días? Lo primero, deshacerse del paradigma médico oficial (antes de lo del agua), adoptando otro sencillo.
- Las emociones NO enferman, el conflicto psicológico anterior sí. Se producen ácidos cuando comes sin masticar, NO puedes digerir (¡o NO puedes digerir algo psicológicamente!). Todo conflicto viene de una necesidad NO cubierta. Un bruxista puede necesitar expresarse y ser tenido en cuenta. Saca las emociones (aunque sea al llegar a casa), pa curar. NO fuerces a anoréxicos (NO funciona el aparato digestivo) y bulímicos (NO digieren y el nivel de glucagón "obliga" a comer): hay que solucionar los conflictos (la medicina oficial falla).
- Cetosis: pasar el carbohidrato (difícil de encontrar naturalmente en Invierno...) a saludable grasa (los lácteos también son algo tóxicos). Cuerpos cetónicos (tras ir por la grasa, al tomar poco carbohidrato): estamos limpiando (el buen ayuno, agradable si comes muy poco, y 40% grasa, y bebes "suero": sal con agua y limón, agua de mar...), y se ve en el aliento, meas mucho... ¡Los coléricos duermen menos, pesaos! El agua que venden es mala (filtrada, sin minerales).
- Perder peso rápido: por perder agua (luego va la grasa si NO hay hidratos). Sano: aceite oliva, aguacate, frutos secos o silvestres, proteína animal...
- Asco / repugnancia: por maltrato padres (se quiere azúcar, ¿NO se debería ayunar en estos casos?).
- A la gente con hipertensión, le quitan la sal, y NO mejora, ¡realmente, la falta de sal (beber mucho agua embotellada sin mineales, psicología...) es la causa, y el corazón debe bombear con más ahínco! Al meter sal, el exceso de agua (células...) se soluciona, aunque te hinches... Puedes comprar agua de mar... Con una alimentación orientada al azúcar, hay fluctuaciones (si es orientada a la grasa, con comer una vez al día o menos... basta). Ansiedad: frecuentemente, por falta de minerales. ¿Anemia (glóbulos rojos "saturados") por líquidos? El medicamento "mata" (falla el sistema médico / mata). Indígena, 118 años, riéndose de los jóvenes blancos, que NO seguían su ritmo. NO creas a Gonzalo, ¡prueba, NO seas cerrado! ¡Aaaah, manzanas brillantes maduradas 5 años en cámaras!
#Miguel:
- El 90% de los "alimentos" actuales NO existía hace décadas (y el 90% de los desequilibrios físicos, ¡son nuevos!).
##Más:
- Fran (Parejo), alimentación:
* El gluten moderno (modificacion genética) orada por dentro y genera enfermedades. NO pasarse con el pan moderno. ¿Muchos NO están gordos, sino inflamados por el gluten, que se encaja en el intestino, impidiendo absorber nutrientes? Sí, el azúcar es una droga (algo artificial) que quieren las élites para nosotros (los amigos te ofrecen drogas chungas con cierta frecuencia, es una prueba para que digas "NO", los abandones por ser inconscientes sin remedio...).
* Cuando se toma un helado (azúcar), Fran llega a comer con mucho hambre / necesidad (el azúcar sube y luego baja mucho, HAY QUE ACOSTUMBRAR AL CUERPO POCO A POCO A PROTEÍNAS... Y GRASA, QUE NECESITARÁS COMER MENOS).
* En vez de tanta leche, bebida de almendras, coco...
* CLAVO DE ORGÓN en el agua (la mueve invisiblemente), para vitalizarla. Y menos cortisol (estrés... Trabaja / consume menos, y "la panza" será menor). El Sol baja el cortisol.
* Quelantes / Zeolita (para fumigaciones celestes, sangre fluye...). ¿Desintoxicar lleva muchos años? ¿Y con energía escalar? Espinillas por mala alimentación. Artemisa (sistema inmunitario natural).
* Zumos: mucha fruta con lo peor de ella (sin lo "duro").
- Los anuncios de bizcochos esponjosos, NO deberían protagonizarlos voces agradables, sino voces de ultratumba que te animan a echar tu salud por la borda (y tu vida, porque sin dientes...). Tienen mucho de psicópata integrado.
- Más medicamentos para el colesterol... Menos mielina, más alzheimer. Ponen el mercurio en las vacunas porque es diurético je je.
- Ancianos (tienen frío): sangre espesa (plaquetas se separan): agua, cebolla, ajo... Producción de energía calórica (pasta...) y alimentos proteicos (carne, pescado azul, legumbres). Ventilar habitaciones 15 minutos al día. Conservar el calor. Paseos.
- El lobbie del azúcar (causante de la obesidad y enfermedades del corazón) dio mucho dinero para que se demonizasen las funcionales grasas. ¡A ver si os entra de una vez, tercuzos!
- Pediatras ponen su sello (pa cobrar) en galletas terribles.
- Comió 24 huevos en un día (o al día), y su salud mejoró. ¡Lo del colesterol es un mito! Haz la prueba (con muchos menos huevos, claro), si crees en muchos malos médicos, es tu responsabilidad.
- TAL PARECE QUE LAS DIRECTRICES PARA SANARNOS... SEAN PARA TODO LO CONTRARIO. LITROS DE AGUA EMBOTELLADA SIN MINERALES NI ELECTRÓLITOS, FUERA LA SAL Y LA GRASA... ¡SENTENCIA DE MUERTE, SI TE QUITAN LA SAL Y... Pa terminar, ¡los síntomas son sobre todo de fase de curación (el paradigma médico correcto es el de NMGHamer)! Deja de quejarte y autocúrate con Hamer, buceando en tu psique (que es lo que hay que hacer), deja de delegar, que habrá un médico que se entere de cada diez. Toda enfermedad ( = algo permanente, que NO depende de los hábitos saludables, como todo cáncer) tiene causa psicológica.
- ¿Grafeno en la anestesia de algunos dentistas? NO hay que tomar azúcar, por si las intervenciones médicas te matan en pocos años. Deja el dentista pa la persona horrible e inconsciente que toma azúcar sin un "miedo terrible". Yo lo siento por amigos que venden dulces pero... están matando a la gente, y algunos dentistas rematan. NO olvides que los dientes frenan energía negativa con destino a los órganos. La gente avanzada, con misiones difíciles, tiene problemas de dientes, pero con el tiempo (ver tu problema de psique, y por lo tanto, curar), la cosa va a menos. Si das dulces al perro (sobaos...) aléjate de mí, estás quitándole años de vida.
