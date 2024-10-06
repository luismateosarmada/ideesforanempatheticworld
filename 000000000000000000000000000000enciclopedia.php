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
