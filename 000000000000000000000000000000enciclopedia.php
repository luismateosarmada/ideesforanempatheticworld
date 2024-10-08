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


####Los Eneatipos (Gurdjieff):
##Triada del Instinto (8, 9 y 1), viscerales:
- Quieren influir en el mundo. Temen ser dominados o explotados. Se vuelcan en la acción y se orientan al presente.
- Ira: el 8 la expresa, el 9 la niega, pero la expresa evadiéndose, el 1 la reprime.
##Del Sentimiento (3, 4, 2):
- Buscan sentirse amados.
- El 3 busca valor interior mediante logros externos. El 4 reafirma su valía sintiéndose especial. El 2 busca el amor demandando atención. Autovalorarse así NO es quererse (cuidao en general con cómo te autovaloras).
##Del pensamiento (6, 7, 5):
- Miedo (de no contar con los recursos necesarios). 6, necesita pautas o normas a seguir. 7, en apariencia valientes y aventureros, temen a su vacío interior. 5, se retiran y aíslan del mundo.
####supersociología test alma joven o avanzada. El alma vieja (es más que avanzada) prefiere la sabiduría al conocimiento o la estabilidad económica (puntúa bajo), el bosque, al jardín o la playa (puntúa bajo), la espiral, al mandala o la cruz (puntúa bajo), preferir no ver noticias, a verlas por redes sociales o la tele (puntúa bajo), y una sociedad ancestral, a una futurista o la actual (puntúa bajo):
- Alma bebé / niño. Sentir (a veces con asombro), experimentar, saborear, imaginar un mundo lleno de posibilidades (elevadas o no).
- Alma Joven. Pasión (energía y entusiasmo) y apreciación por la vida, tanto humana como de todas las especies. Energía para conocer y aprender del mundo que te rodea.
- Alma Adulta: brindar consejos a las almas más jóvenes. Ideas sumamente innovadoras y transformadoras, resultado de tu capacidad para integrar y de las relaciones adultas. ¿Estoy todavía aquí? Menos mal que quiero estar solo y soy intuitivo, aprendiendo de las situaciones, eso me acerca a las almas viejas.
- Alma Vieja. Líder capaz de transmitir conocimiento de manera práctica, profunda y hasta telepática. Puedes sanar "espiritualmente" (y psicológicamente, a veces), eres capaz de ver las causas y efectos de toda acción, lo cual te permite alcanzar el desapego para elevarte espiritualmente a ti y a todos quienes te rodean.
* Cuando tus amigos te digan que pareces mayor de lo que eres, considéralo un cumplido, porque sin duda lo es.
####Energía de letra inicial de nombre L = lo haces a tu modo. Si es J la inicial, más energía física y mental, podrías marear al prójimo. La L irradia sabiduría, dedicación e imaginación. Da inteligencia, comprensión, conocimiento y honestidad. Hace a las personas terminar todo lo que se proponen y ayudar a los necesitados. Les gusta el hogar y la convivencia familiar, ¿y estar con amigos también?:
- A. Originalidad, fuerza y espíritu de empresa. Intentará harmonía. Buenos amigos y excelentes consejeros si los necesitas. Pero claro, una persona es muchísimo más que su inicial, así que podría ser mejor o peor.
- B. Llevar a la práctica los impulsos de otras personas. Intuición imposible de desafiar. A menudo caen en estados melancólicos.
- C. Gran fuerza y energía vital. Impulsividad y desafíos. Muy proclives a las polémicas y debates y no toleran la injusticia (Carlos el de Pravia).
- D. Amor incondicional. Si no encuentran estabilidad afectiva, pueden caer en profundas depresiones. Talento artístico y pueden alcanzar la popularidad si se lo proponen fervientemente.
- E. Organización y espíritu ambicioso. Hacer del servicio su ideal de vida. Cierta tendencia a los excesos.
- F. Voluntad y lograrán éxitos importantes, trabajan duro por lo que desean. Adoran viajar y conocer lugares exóticos que complazcan todas sus fantasías.
- G. Brillante intelecto (Mercurio) y necesidad de ampliar conocimientos. Capacidad analítica y son de actuación práctica. Su rica personalidad sobresale en reuniones sociales.
- H. Plutón: juicio crítico e imparcial. Conocen la forma correcta de actuar en cada situación. Saben imponer límites con autoridad cuando lo ven necesario.
- I. Venus. Encanto y refinamiento. Carácter un tanto dubitativo. Pueden llevar a cabo grandes empresas, a pesar de tener que soportar enormes sacrificios.
- J. Mercurio, gran vivacidad y refinado sentido del humor (Javi Pozueco). Nobleza de pensamiento y gran fidelidad a sus ideales. Amigos sinceros que darían todo por quienes aman.
- K. Éxito seguro, sobre todo material. Mostrarse al público se les da bien: actores, modelos y abogados.
- L. Sacrificarse por quienes los rodean con carácter fuerte. Buenos trabajadores en puestos donde no deban tomar decisiones por sí mismos.
- M. Transformación constante de metas. Carácter alegre y buena predisposición para el trabajo mental. Comprenden a sus amigos cercanos.
- N. Constantes pruebas y obstáculos que deben superar como tarea kármica. Pobrecillos.
- O. Imaginación e interés en la maternidad / paternidad. Carácter un tanto temeroso ante los desafíos de la vida.
- P. Pasión, excelente criterio estético y una activa capacidad creadora. Viven romances fogosos y siempre buscan trascender.
- Q. Confiere experiencia. Capacidad desmedida para superar conflictos y salir airosos de problemas familiares.
- R. Inteligentes y sagaces, con la respuesta justa en el momento adecuado. Saben detectar errores propios y son muy exigentes con los que los rodean. ¿Mi familia?
- S. Saben reflexionar y obtener opiniones objetivas. Un tanto inseguros (conflictos de vida), sienten necesidad de pedir consejos antes de confiar en ellos mismos.
- T. Planes en secreto. Saben esperar.
- U. Actores por naturaleza. Inconformistas, desean la inalcanzable perfección.
- V. Inconformistas, desan la inalcanzable perfección (como u). Saben ver la luz al final del túnel.
- W. Acalorados arrebatos durante toda la vida. Será importante que piensen antes de emprender cualquier acción.
- X. Éxito económico y financiero, fruto del esfuerzo personal de largos años. Cierta tendencia al egoísmo.
- Y. Felicidad total o desdicha absoluta. Les cuesta encontrar el término medio. Su necesidad de ser originales les quita el sueño.
- Z. Marte. Capacidad de sobrellevar duras pruebas. ¿Deben llevar a la práctica todas sus ideas y ambiciones, o de lo contrario sufrirán frustraciones que les pesarán toda la vida?
####superamenaza los maliciosos:
- 4 actitudes visibles:
* Manipulación (encanto...): distorsionan hechos, usan culpa como arma, se victimizan...
* Dificultades para ponerse en lugar ajeno (pero pueden simular preocupación).
* Creación de conflictos (dramas, discordias...), incluso con placer e infantil orgullo.
* Necesidad de control (a veces con seducción) del otro (el hijo no estudiará lo que quiera).
- Resto:
* Ven los límites ajenos (privacidad...) como obstáculos.
* Mentiras o medias verdades (silencios, frases ambiguas...). Mienten con facilidad.
* Venganza por críticas, rechazo... Difundir rumores, sabotear oportunidades (hacerse pasar por benefactores en redes, o usar a gente inocente contra ti...).
####PSICOPATÍA:
- Casi todos los psicópatas se integran bien en la sociedad y son bien considerados (al menos los primarios con poco daño cerebral, que serían realmente perversos narcisistas: se detecta viendo que su parte izquierda está más viva que la mortecina derecha, o las 2 son iguales. Y los secundarios, que imitan a los primarios; el terciario ya empieza a usar la ironía, palabras suaves, para torturar psicológicamente sin que se note mucho).
* Psicópatas psicópatas son los primarios con gran daño cerebral (casi NO simulan). Y los que van por lo que quieren sin empatía (terciarios con algo más que ironía, algo "bruto"). El resto pueden considerarse "perversos". La gente normal son cuaternarios (el psicópata se engaña a sí mismo).
- Sé el daño que pueden hacer (mala energía en la Consejería de la EOI de Mieres, con muertes y problemas de salud; NO por el sitio, sino por visitas de "gente" con don de gentes, valga la redundancia).
####WIKIPEDIA (que algo dice o decía):
- El perverso narcisista sólo reconoce las necesidades del otro en la medida que sirvan a su propio beneficio. Necesita hacer dependiente al otro, para controlarlo.
* Sabe cómo seducir al grupo y conseguir que funcione de manera inhabitual; tiene temple (por eso queda bien y tú mal) y frena su acción cuando percibe que puede ser descubierto. La gente defenderá al psicópata, y la víctima podría ser convencida de ser "el agresor". Elude las preguntas directas y al no hablar (usa el silencio para salvarse y para rechazar, acoando moralmente), proyecta una imagen de grandeza o de sabiduría. Yo le preguntaría ¿Quién eres y qué pretendes? Eso lo desarmaría un poco. El mensaje del perverso suele ser voluntariamente vago (no se compromete, no termina algunas frases)
* El primer día te dicen "estoy aquí para lo que quieras". Luego empieza a martirizarte (alterna palabras buenas con malas), y te vuelves adicto, y crees que necesitas al psicópata.
* Los hombres los consideran masculinos, cuando simplemente no saben de ternura (a veces la simulan, ¡simulan hasta que son femeninos, y no tienen nada de ello, es más, odian lo femenino!). Pueden ser hermanos mayores que se creen traicionados por la madre al tenerun hermanito. ¿Traumatizan a las feministas (tele...) para que pierdan su esencia? Es que me suena parecido.
* Se puede poner delante de ti, y probar lo que te duele (las élites nos prueban mucho): ¿a que tu familia NO te quiere? ¿A que NO sabes Francés?
####Más:
- De pequeñitos se les ve mejor que son psicópatas, por la expresión fría, que ya a los 8 años cambian por una angelical.
* La niña psicópata que se curó quería hacer daño a sus hermanos, y de adulta podría haber matao a mucha gente con frases sutiles (psicosomatismo). Se volvió normal en una granja recibiendo amor incondicional y cuidando de animales (se sintió útil). El resultado, pseudoautoestima, suficiente. Con adultos es mucho más difícil.
- Mujer (hay más psicópatas hombre, la mujer quiere sentir): sólo te curarás si te das cuenta de que no fue amor de verdad, sino un juego macabro.
- El padre puede hacer inventario de lo que regala al hijo, y recordárselo en el futuro (chantaje emocional). La madre pasa a ser una especie de hermana más (y se quedan con el padre, que además, miente de vicio en el juicio; los primarios, sin despeinarse, por falta de conexiones neuronales). Es difícil que de un psicópata salga un hijo psicópata: serán aniñados, enfermos...
- Atacan lo bueno, y cuando consiguen engañar (para lo cual necesitas ser un rata y poco más), se sienten bien / superiores.
* Cuando un perverso está a punto de sentirse emocionalmente feliz, lo rechaza (no soporta tener pensamientos sanos hacia los demás).
- Pueden llegar a llorar de verdad, sin fingir: cuando su reputación se ve dañada...
* ¿Cómo le decimos a un psicópata que sienta? Poniéndolo en el centro: imagínate que a ti...
- Tienen un miedo atroz a la evaluación y se ponen nerviosísimos cuando se encuentran en un medio social amplio.
- Al no sentirse creadores, ya sea permanente o solo temporalmente, buscan destruir. Viéndose útiles (pueden dar abrazos...)...
- Las empresas van mucho peor, y "nadie" sabe la causa real.
- Su novia, el primer año, ni se da cuenta de la manipulacion. Simplemente mandará mensajes inconscientes sobre acoso (Facebook...), y seguirá defendiendo por un tiempo a "su dulce amo".
- Mi psicopatín de Aboño tenía las manos inmóviles mientras acosaba, era curioso.
- Parecen grandes profesionales cuando en realidad son incapaces de preocuparse por la calidad del trabajo.
- ¿Tardan en elegir su ropa y la cuidan bastante? Se ponen el jersey que te pusiste algún día, si te odian (bueno, uno parecido).
- Pueden considerarse terciarios "brutos" los TPL, ampliando la definición a "falta de empatía temporal como mínimo / hacer sufrir bastante". TPL es enfermedad (curable con sólo quitar 2 focos de Hamer); psicopatía, Zodiaco de bajo nivel... NO.
####Y más:
- El psicópata no percibe cuando juegas con él.
- LOS NARCISISTAS (psicópatas manipuladores) NECESITAN CREAR PROBLEMAS PARA APARECER COMO HÉROES (o ser especialistas en algo y enseñarlo...) y recibir halagos.
* El sociópata (NO confundir con TPL) suele ser rudo, desagradable, se le nota, es honesto.
- Cuando un psicópata es cazado in fraganti, posiblemente ni se inmute, por lo que incluso podría dar la sensación de que es inocente.
- A BART SIMPSON LO AMONESTARON POR HACERLE FRENTE A UN ABUSÓN, Y ES QUE LA ESCUELA TE PREPARA PARA SER ABUSADO.
- Su pareja le llena de sentimientos que tapan los suyos extremos.
* El psicopata tiene tendencia a observar cada detalle para poder controlarlo todo, y acaba "dominando el sexo"). Cuidado, son excitantes / buen tacto muchas veces.
* Por la adicción, incluso se podría seguir adelante con un embarazo producido por el psicópata, para tener algo de él.
- Los psicópatas no pasan la prueba del bostezo (no les contagias inconscientemente). Tampoco suspiran. Si lo hacen, están actuando. No tienen olfato, pero suele encantarles comer o hablar de comida.
- ETAPAS DEL DUELO DE UNA RELACIÓN CON UN PSICÓPATA: 
* Pensamientos suicidas y gran dificultad con tareas triviales. Crees que mereces lo que ha pasado.
* Negación. Necesitas demostrarle al mundo que estás bien, porque así quizás el psicópata querrá volver contigo. Vas de fiesta...
* Aprendizaje / Duda: quieres entender lo que ha pasado.
* Entender cómo trabaja el psicópata. Te sientes llena de asco y rabia. Todo fue calculado e intencionado.
* Lo mejor, calma, NO decírselo a todo el mundo. Él quiere que te enfades para que crean que estás loca.
* Depresión (alternada con ira). Te aislas, te rodeas sólo de gente que te entiende.
* Sanación. Pasas tiempo en compañía de gente a la que le ha pasado lo mismo.
* Autodescubrimiento. Te das cuenta de que tu compasión, empatía, y amor NO son debilidades. El respeto por ti misma viene de dentro, no de la validación externa.
- Según la edad:
* Niños: tiran la piedra y esconden la mano. 
* Adolescente: fríos, y suelen rodearse por unos 2 amigos, a los que manipulan. Moreira con mi hermano y Falín. Todo encaja.
* Adultos: gran sed de poder.
- Voy a imitar a un psicópata: ¡Qué guapa está usted hoy, buenos ojos la vean! ¡Un hurra por nuestro aguerrido equipo de Copa Davis!
- Iñaki piñuel psicopatía pareja:
* El psicópata hará creer a la víctima que otras personas están interesadas en él. Eso produce más dependencia.
* SI LA VÍCTIMA PIENSA QUE QUE NUNCA PODRÁ VOLVER A AMAR, ESO ES LEGÍTIMO, DEJEMOS QUE LO PIENSE SIN PRESIONAR.
- Algunos científicos hablan de una madre fría o indiferente, con una agresividad encubierta hacia el niño.
- Enemigos del psicópata en el ambiente laboral:
* Independientes. El psicópata no los puede apadrinar en su grupo.
* Siguientes: gente sincera o NO de acuerdo con los temas tabú de la empresa.
* Gente brillante: NO viven de apariencias.
* Justos / solidarios: defienden a las víctimas.
* Organismos de control interno: no tardan en conocer las irregularidades del psicópata: inspectores, técnicos de recursos humanos...
* Líderes verdaderos.
####Más:
- NO entienden la pregunta ¿Cómo estás? aunque responderán.
- Su ritmo cardiaco en reposo es más bajo.
- NO dejemos que compitan (no compitamos nosotros).
- Las lesiones prefrontales (miedo y estrés normal) se traducen en comportamientos osados, irresponsables, con arranques emocionales y agresivos, inmadurez, falta de tacto... Aún así transmiten una imagen impecable, aunque No aprendan.
* El cuerpo calloso tiene muchas menos fibras blancas en el psicópata. Eso dificulta la expresión de emociones y la comprensión de las consecuencias de una acción o evento a largo plazo. Pero la parte occipital (recompensa) trabaja más.
* Evitar problemas prefrontales: SER ORGANIZADO CON OBJETIVOS Y REPARTO DEL TIEMPO EN BASE A ESTOS.
- Cambia el tema de conversación para llevarte a tu terreno (se autoengaña).
- Evitar psicopatia. Que cuando mamá exprese rabia... ella siga existiendo como madre tolerante y amorosa (eso previene la destructividad). La tendencia antisocial es lo único para un niño desesperado, desdichado e inofensivo con el grifo del amor cortado. La obediencia hace que el niño esconda su ser (sea falso), y germine la semilla del mal.
- Tipos de narcisista (otra clasificación):
* "Inadvertido": inmutabilidad frente a la crítica ajena y los sentimientos ajenos. Ego grandioso en espera de ser admirado, envidiado. Internamente hay mucha vergüenza tapada.
* "Hipervigilante": obsesionado con el sentimiento de devaluación, y ve a los demás como abusadores injustos. Escoge acompañantes críticos o significativos a veces, para quejarse. Otras veces critica haciéndose el superior / perfecto.
- La postmodernidad es una época narcisista. Todo el mundo quiere ser el mejor, no se admite la diferencia como algo valioso.
- A los diez minutos de conoceros, cuenta sus dramas más personales de forma repetitiva. Su mensaje oculto es: siente pena por mí. Creerás que son hipersensibles.
- Apunta lo que dicen (si cambian de versión, NO te sentirás loco). Ellos NO entienden bien "pasado" o "futuro", hoy son un personaje, mañana... Márcalos con olores nauseabundos (no los notaran).
- No se le puede decir que ya no quieres estar con él (el psicopatín no lo entenderá): contacto 0 es la solución (o por email como mucho).
- Cuidado con las personas observadoras, pero poco profundas: "tú vas mucho al baño" es una observación superficial.
####Psicopatía:
- Quien no puede poner cara cabrón al sonreír es probablemente psicópata primario INTEGRADO. El ojo izquierdo sonríe de mentira, como forzado (a veces chino, a veces triste...). Hay algunos psicópatas que ponen siempre las cejas padentro (falsa cara de cabrón).
- Las inteligencias del psicópata (con las que pretende deslumbrar), son infrainteligencias. Para hacer daño tras ensayar, con cabeza fresca, no se necesita inteligencia casi.
- Si sacas al psicópata de "la mafia de machos macarras libres", todos quedan con la cabeza agachada, como si despertaran de una hipnosis.
- Ya sabéis que el psicópata es el héroe del gañán (casi todo hombre es gañán), porque NO le tiembla el pulso: no es valiente (para ser valiente hay que tener miedo, sentimientos), es insensible.
- Los psicópatas convierten a algunas víctimas en irónicas (o te perviertes, o puedes darte casi por hundido). Es frecuente que se le den instrucciones a la victima para que a su vez pervierta a otra gente. Y tiene espías el psicopatín, que NO lo conocen.
- Un psicopatín, cuando faltan pocos segundos para hacer daño, es normal que se muestre todavía más frío que de costumbre si cabe, con esa voz monocorde.
- Al psicópata le ofende la mente femenina, empática, brillante, y su odio puede crecer por la dominación dialéctica de la mujer en la niñez.
- Se debe llamar a 9 personas que controlen al psicópata, y un entorno ético (sin competitividad, y con amor incondicional). ¿Entonces "sólo" querrá ser el centro de tención?
- ¿Fue la perversión narcisista (hacer al otro dependiente para manipularlo) el comienzo de la "pareja" (alejados del resto) y el fin de la tribu?
- Recuerda que el humor es un arma de las élites para ridiculizar lo que está bien, y una sonrisa puede controlar.
##El psicópata es muy locuaz, lo cual hace creer erróneamente a la mujer que ellos son especiales porque "comparten emociones".Y aceptan tener sexo prematuramente. La estimulación de la vagina y del cuello del útero durante el acto sexual libera prolactina y oxitocina, fortalece el vínculo.
##Padres, escuelas y jefes tóxicos. Pilar Baselga, Iñaki Piñuel...:
- Hay madres tóxicas que viven su embarazo con miedo. Entre las élites hay costumbre de desentenderse del embarazo. Es muy cruel que los médicos se lleven al reciñen nacido, aunque sea para limpiarlo. Mejor parir orgasmando y sin médicos. Y el niño necesita un territorio estable con tutor estable (vive la guardería como el abandono que es; a las élites les gusta esto).
- Pilar dice que la escuela de Leipzig (consideraba al hombre una simple máquina de impulsos), está en el origen del sistema educativo actual. El conductismo es muy malo (premios y castigos para que te comportes como el sistema quiere).
- Los abusones han aprendido erróneamente que el mundo es una selva donde aplastas o te aplastan, porque han sido víctimas, o de maltrato directo, o de falta de amor (frialdad). Perciben antes quién es el más vulnerable o bueno del grupo.
* La protección del débil es lo que ha hecho fuerte a la sociedad.
####Psicopatía (pómulos...):
- Su falta de remordimientos radica en la cosificación (atribuir cualidades de objeto a un ser vivo).
- Suele ser hermano mayor. Debido a celos y faltas emocionales, en el primogénito se va desarrollando una carencia relacional y afectiva, plasmándose en la falta de desarrollo de anchura, a nivel de pómulos (psicópata primario). ¿NO es siempre así NO? ¿Los de pómulos anchos imponen su voluntad de forma agresiva (esto es también malo)? Los narcisistas son estrategas / falsos (aunque de muy pequeños fueran agresivos).
- Separan perfectamente sentimientos de objetivos (sean buenos o malos), por lo que pueden ser jefes de banco... ¿Su autoconfianza (aunque realmente NO se quieran), falta de escrúpulos y mentir perfecto les permite conseguir lo que quieren? NO son realmente ni felices ni inteligentes (una persona inteligente NO se pierde ciertos útiles y dolorosos sentimientos, porque es fuerte; son débiles mentales). Se pueden emocionar hasta el llanto, pero a los 5 minutos vuelven a sonreír.
- Más sobre la cara. ¿Frente NO diferenciada (las diferenciadas tendrán bandas digo yo) muchas veces? ¿Nariz átona muchas veces (si es corta y pequeña, tendrán problemas de paciencia con los demás)?
####Rostros de criminales cazados (los psicópatas suelen ser difíciles de cazar, debido a resultar adorables; y te meten en su "maraña de pensamiento", casi ni te enteras; NO es por inteligencia, es por considerarte un objeto, mentir sin problemas por desconexiones neuronales...) Reglas:
- 1. La cara (ojos, nariz, boca...) no intenta expandirse. Las cosas les afectan más por lo general. Está "todo junto".
* ¿Y si además hay problemas para expresar las emociones? Pues hay hipersensibilidad + afán por llevarlo todo al lado de las emociones + falta de empatía.
- 2. Retraccion lateral: cara de perfil, hay facciones de la cara inclinadas (frente, ¿nariz como pista de saltos de esquí?, parte del bigote tambien, ¿y la barbilla?). Personas lanzadas.
- 3. Zona de la cara (1. Instinto. Motivaciones materiales. Desde barbilla y sin tocar la nariz; 2. Emocional / nariz; 3. "Inteligencia". Donde empieza la nariz hasta arriba del todo). Prima lo que sienten (2).
- 4. Retraccion lateronasal por lo general: entre ojo y pomulo la zona esta plana / hundida: cuesta expresar las emociones mas profundas, aunque la persona puede ser muy emocional y expresiva. Esto podria crear peligrosas emociones reprimidas.
- 5. Receptores grandes (ojos, nariz y boca). Gran "grifo" para la entrada y salida de información, emociones e instintos mas basicos.
- 6 y 7: boca carnosa (desean la comida, el sexo, la lucha... Yo la tengo un poco carnosa abajo, NO el labio de arriba), y labios hacia delante: lo buscan por sí solos (puede ser con ordenes a otros).
- 8 y 9. Narices anchas en su extremo inferior (sienten las emociones). Escotadura nasal (se ven bien los agujeros de frente): entrada de un gran caudal de emociones.
- 10: ojos (¿grandes para observar?): foto de perfil, hundidos más alla de las cejas. Les cuesta entender opiniones diferentes.
* Caprichosos, violadores, toxicómanos... ¡Caso contrario! Y sus ojos se presentan en muchas ocasiones como globulosos.
##Pregunta, ¿los psicópatas cumplen bastante de esto?
####Trump (que está con los bere, los buenos; paciencia), cumplimiento de reglas:
- NO es demasiado sensible en general (1).
- Es lanzado (2).
- Labios carnosos y hacia delante (6 y 7). Si sumamos a esto que es de instintos (3), tenemos a un combativo con aguante.
##Más:
- Atonia cárnica mofletes: ordenes a terceros, ¡tráeme mi comida! Le hace todavia mas [instintivo / animal] y materialista.
- Su frente mide poco (verticalmente): deberia rodearse de especialistas y algún estratega (no tiene suficiente vision de conjunto). Es plana: poco influenciable.
- Ojos pequeños y a menudo cerrados (al mundo, a opiniones diferentes). Los de cazador estan elevados en los extremos a veces.
- Nariz no muy grande, no pierde el tiempo en hablar de cosas que no le interesan.
- Marco exterior grande (paciencia y reservas energéticas).
- Boca pequeña, tiene la ventaja de gastar pocas energías y estar preparado siempre para el combate.
####superamenaza casi lo hace sólo el narci encubierto el psicópata bien integrado.
- Guarda rencor (que no se le note, ya se vengará por detrás, difamando al bueno...).
- Agresión pasiva:
* Ley de hielo (el silencio, no responder a alguien que no es malo...).
* Procastinación. Relacionado: ir a la compra y mostrar descontento dejando una cosa sin comprar, para empapelársela a su hermana.
* Ironías.
- Simular inocencia: "no sé hacer esto, qué torpe soy": y a lo mejor lo haces tú y se cuelga él la medalla.
- Ofrecer una falsa empatía (estoy contigo). Sus bellas palabras no importan.
- Hacerse la víctima (uy qué desgraciado parece), para ser centro de atención, y ganarse simpatía y compasión.
- Luz de gas. Yo no dejé tu cuchara en mi sitio, te lo inventas (quiere que enloquezcas). "Sólo quería..." (pa suavizar, pero el daño está hecho).
- Cumplidos envenenados implícitamente (velado).
- Compararte con otro a diario (son indirectos).
- ¿Sabotear "tus momentos"? Para desviar el foco a ellos, y no soportan que seas feliz, aunque parezca que disfrutan de tu éxito.
- Hacen promesas que saben que no van a cumplir, para tranquilizarte en el momento... Los políticos usan esto.
- Yo añado hacerse fotos con niños.
####superamenaza narci no puede responder a estas preguntas. Le confrontan consigo mismo:
- Si te molesto tanto, ¿por qué sigues buscándome?
- ¿Por qué te resulta difícil admitir errores y soportar diferencias con los demás?
* ¿Por qué crees que tus opiniones son superiores a las de los demás / las anulan?
- ¿Por qué quieres impresionar a los extraños?
- ¿Qué quieres cambiar de ti, cuales son tus heridas? Hazla delante de mucha gente.
* NO te hablará quizás de su "perfecto" interior.
- ¿Por qué te quedas callado (pasivo agresivos, para jugar contigo)?
####superamenaza traducción de frases de narcisistas.
- Nunca entiendes lo que digo: eres inferior, esfuérzate por ser mejor para conservarme (pero al final no quiere que te vayas, eres su combustible, y gastó mucha energía en conquistarte).
- Eras demasiado sensible: eres dramático y envidio tu sensibilidad, debe morir.
- Nadie te querrá como yo: eres poco y no encontrarás nada igual.
- NO estás bien: estás loca, todo es tu culpa.
- Eres poco humilde (proyección de ausencia de modestia del narci; el narci cree que el modesto no es nada...): no progreses, mantente en el fondo, quiero manipularte.
- Era una broma: me salgo con la mía, porque no sabes qué contestar.
####01413amenaza ponerología política.txt  Los psicópatas primarios (con deficiencias cerebrales peligrosas) son +- el 4% de la población, expertos en manipular (sonriendo con simpatía o NO) y torturar psicológicamente (no van por ahí con un hacha, al menos el 99%; cuando engañan, se sienten bien condigo mimos, lo cual les ayuda a tapar su penosa verdad: mentes muy débiles, con mucho complejo de inferioridad / superioridad, que tienen que ser mejores que tú hasta en el número de enfermedades; tienen que bucear en su infancia con mucho dolor, y aceptarse tal y como son, para ser POR FIN felices).
##Ponerología: estudio del mal; trata de grupos y de cómo se corrompen cuando los anormales patológicos se insinúan en estos con el disfraz de la normalidad. Los presidentes de empresas fomentan comportamientos en sus subordinados (para poder sobrevivir y avanzar si son "normaluchos"):
- El truco del psicópata: hacernos creer que el mal viene de otros. Se ha logrado entender cómo sucede que personas locas, ideólogos y poderes represivos, a pesar de su inhumanidad, obtengan el apoyo de las masas:
* Te convencen de darles otra oportunidad, y de no decirle a nadie lo que han hecho (tú debes airearlo todo, por bondad). Fingen muy bien que tienen emociones humanas, cuando en realidad son pura rabia, envidia, sexo... Deseos inmediatos (son "de presente" sobre todo, aunque pueden simular estar interesados en el pasado o el futuro).
* Son expertos en saber "cómo presionar nuestros botones", parece que nos lanzan un hechizo. Un régimen político patológico localiza a individuos narcisistas (por lo general científicos muy mediocres) o a crédulos / tonticos con labia, facilita sus estudios y grados académicos y la obtención de posiciones clave para la supervisión de organizaciones científicas y culturales, privando al resto de científicos de buena literatura.
* Tienen una pobre discriminación olfativa. Al no tener emociones propias, agitan las emociones de otros (los hace sentirse superiores "a los que sienten").
* Hay sólo dos cosas que pueden someter a un psicópata: un psicópata más poderoso y el rechazo absoluto y no-violento de todos los demás a someterse a sus controles sin importar las consecuencias.
* Ellos necesitan los conflictos para existir, e incluso para ser vistos como héroes, pero son nuestros depredadores naturales. Crean el problema, dan la "solución", ¡y son héroes! Ningún movimiento político (mejor los psicológicos iniciáticos) tiene éxito si no integra la psicopatía.
- Más:
* Psicopatía esquizoidal. Están atraídos a ideas que suenan elevadas, pero su pobre naturaleza psicológica limita su percepción y desvían sus llamadas "buenas intenciones" a influencias en pos del mal. Aceptan la idea de "controlar rebaños" de "gente mala", ¿Pablo Iglesias Turrión?:
* Chávez murió (probablemente por cosas de santería, para salvar a Castro; la santería funciona, es básicamente satanismo encubierto, y Gloria Estefan, Perales... no se dan cuenta). ¿Lo estaban manejando? Todo era un plan, hasta su excarcelación y victoria. ¿NO era malo? Bolívar sí, malo malo.
* No intelectualizar al niño (causa psicopatía o asperger), ni vivir en un ambiente formal (psicopatía o esquizofrenia).
- Armas silenciosas para guerras tranquilas. Algunas formas de control:
* Fomentar las emociones. Tratarnos como si tuviéramos 12 años (tele), para que reaccionemos así. Así, nos hemos acostumbrado a no pensar cómo organizarnos para sobrevivir (ellos son "ángeles guardianes", y aceptamos, porque nos llevan a nuestra infancia, cuando nos cuidaban).
* Ocupados para no pensar: cursos, trabajo (a menos paro, menos se piensa)...
* Conformismo social (hay que soñar algo elevado, que case con ser FELIZMENTE sabio y tener pocas necesidades).
* La calidad de la educación dada a las clases inferiores debe ser de la más pobre (enseñarnos a protestar en vez de a desear, NO sabiendo cuál es realmente el problema: el miedo que produce la tele...).
* Los padres deben estar preocupados por perder el trabajo y hay que competir por él. La madre, si trabaja, deja desprotegido al niño por lo general. ¿Las huelgas permiten "estudiar" a la gente y son trampas para ir contra el menos malo?
* Existe una relación cuantitativa medible entre el precio de la gasolina y la probabilidad de que una persona sufra de dolor de cabeza, sienta ganas de ver una película violenta, fumar un cigarrillo, o ir a un bar para tomar un par de cervezas. ¡HALA, DEPRESIÓN CAUSADA!
* Hollywood no hace películas sobre costumbres sanas. Los videojuegos actuales fomentan vicios y violencia. El telediario te hace creer negativamente, y creer es crear.
####Libro psicópatas 01. Hablaremos de esas criaturitas de Dios (generalmente simpáticas y muy amadas, por ser encantadoras, pero negras por dentro) que necesitan ser foco de atención y maltratar psicológicamente sin que se note para autoreafirmarse, por tener traumas de pequeños SOLUCIONABLES. ¿Pueden enfrentarse a su vacío y complejos de inferioridad? Dejémosles decir "soy mejor que tú en...", o se asfixiarán:
- Psicópatas primarios (problemas neuronales): sus ojos, fíjate en sus ojos (tapa la parte derecha de su cara, y luego la izquierda; el ojo izquierdo suele estar más muerto, o estar los 2 iguales).
* La gente que se fija en ti como si fueses un personaje de videojuego (a las 17:00 hace esto... Cuando eso no es profundizar), son peligrosos y muy poco inteligentes integralmente. Esto incluye secundarios (imitadores de primarios) y terciarios.
- Es la gente que ha sufrido a estos seres falsos (encanto superficial, "las más bellas personas"...) quien mejor puede hablarte de ellos. Lo enredan tanto todo... y su presa puede tardar meses en darse cuenta de la tortura. Dirán que quieren saberlo todo de ti para ayudarte... Te cruzas con decenas a diario. Los vendedores a domicilio suelen adoptar algunas de sus técnicas para vender (los del teléfono también).
* ¿Empieza la mayor parte de las veces por el nacimiento de un hermanito / a, y el futuro psicópata se ve débil al no retener el 100% de la dedicación de mamá? Y luego no quieres sentir, por debilidad / supervivencia (hay menos mujeres psicópata, porque no suelen renunciar a los bellos sentimientos o al amor).
- La mayor parte de los psicópatas están integrados (el más querido de la oficina...), no muestran una gran ira en público.
* El psicópata quiere hacer lo que desea a toda costa, sin importar los demás, pero claro, los integrados torturan sólo cuando pueden hacerlo... Las series y películas sobre asesinos en serie, no hacen más que empañar el conocimiento científico. El psicópata ha aprendido desde niño, que es mejor ser relativaente suave, para no ser cazado, y que la violencia psicológica disfrazada y no mancharse las manos de sangre, son clave. Es nuestro problema socioeconómico mayor, sin duda casi. De peques, se los puede detectar, pero ya a los 8 / 9 años, se vuelven sutiles tramposos.
* Ejemplos: hombre que aceleró la muerte de su madre y luego la llora y le dedica un discurso en la Iglesia. Difícilmente los accionistas de un banco pueden saber que su director es un psicópata que está llevando a la empresa a la ruina. ¿Y algunos de los que piden dinero?
- Hay que ver "dentro del corazón" (cuidado con palabras y caras amables). Se harán la víctima, y tú quedarás como el malo (pueden hacerte de rabiar, y tienen temple, y mienten sin problemas los primarios integrados). Te tocan para que "los eches de menos", o incluso para ejercer poder (que vayas a su fiesta...):
* Puede aparentar ser un padre abnegado (e incluso inventarse que tiene un hijo). Ejemplo: un psicópata (Andrés) se gana la confianza de su jefa, ella acaba encantada con él, pero él no trabaja, y la llaman y ella dice que se dio cuenta tarde de lo de Andrés (su psicopatía), pero Andrés ya les había dicho primero: "ella va a intentar desprestigiarme", y le creyeron a él.
* Busca el control de su ambiente (y probar que puede engañar a cualquiera, empezando por la entrevista de trabajo. Los retos, la adrenalina... les van. En el trabajo no busca la excelencia laboral (ya robará méritos y acusará), sino ampliar su radio de influencia (número de acólitos / monos voladores de la Bruja del Oeste que informan). Pueden guardar secretos sin problemas (políticos).
* Matan sólo con estar con ellos, inducen cánceres...
####Libro psicópatas 02.
- NO ve razón para cambiar, él se ve PERFECTO, y se preocupa por lo que los demás piensen de él, y si ve que pueden estar hablando de él a metros de distancia, podría acercarse para "cortar un poco la conversación". Mira si usa palabras "corteses", con citas de famosos, si cuenta historias que le dejan bien... ¿Y si no consiguen convencer, tratarán de meter miedo (sólo su voz monocorde ya la da si te fijas)? Los aspergers no son malos genuinamente, pero cuanto menos nos parezcamos a ellos (disfrutan de la tecnología NO pensando sólo en objetivos profundos y elevados) y a los psicópatas, mejor.
* ¿Basta con que alguien no reaccione eléctricamente / con susto o que no sea capaz de suspirar, para considerarlo peligroso?
- Más:
* Pueden perder los estribos por un momento de tiempo muy pequeño. ¿Cuantos son soldados que matan por reconocimiento?
* Leo un caso de alguien que finge ser médico ante su familia (no pasó de segundo curso, y se dedica a leer en cafeterías, pero engañó a varias personas para que les prestase dinero, y así vivir de la nada unas pocas décadas). El niño que se escapa de la Escuela y el adolescente que se hace pasar por ATS (o el ATS que se hace pasar por ginecólogo)... son claros ejemplos. NO cambiará mucho de profesión al fingir. Y pensarán que son los más inteligentes (y querrán rodearse de gente "inferior").
* Es "tranquilote" tras cometer actos terribles, duerme bien, como Zapatero. Para ver mis puntos débiles, José Manuel Díaz Fernández se me acercó cuando estaba sólo yo en el Departamento de Informática (Aboño), y se puso tieso y sonriente, a decirme, ¿a que tu familia no te quiere? ¿A que tu carrera no sirve para nada? Luego, I. Jáuregui, "nos" confirmó que era psicópata.
## LECCIÓN 5, LA LUCHA CONTRA EL PSICÓPATA (VAMOS A ESTA LECCIÓN DIRECTAMENTE): ##
- El psicópata introduce el caos y estrés continuos en la vida de las víctimas (personas, empresas... La empresa debe contar con paso de información vertical y horizontal):
* Las súplicas no van con ellos ("por favor, para"). Y se sufre impotencia al ver que todos quieren al agresor. El psicópata se integrará en tu grupo, te apartará de él y tu familia después, y mezclando momentos dulces con torturas, te hará dependiente (hablamos de la pareja). Un día se cansará de hacer todo tipo de teatro contigo...
* A Pablo (que no es primario, pongamos que es terciario con atribuciones de secundario) lo llaman "el pipas", y un psicópata del libro las come.
- ¿Qué se puede hacer en cada etapa del psicópata?
* Vulnerabilidad: el psicópata estudia el escenario buscando "objetos útiles". Sé precavido / a, usa la intuición, y busca apoyos externos.
* Seducción. Él manipula fingiendo lo que no es, imitando sentimientos, hablando de "cuentos de hadas"... Hacerse preguntas (¿sé algo de él realmente?). Ámbito empresa: ¿por qué alguien nuevo intenta caer bien a todo el mundo, no quiere hablar de lo que hacía antes, me presiona para hablar sin que nos vean, siempre coincide con ciertos jefes y me cuenta cosas indiscretas de otros?
* Explotación. La culpa la devalúa... Refúgiate en tus apoyos, evita la desesperación, busca asociaciones de ayuda.
* Revelación. Se consolida la explotación. Proyecta su hostilidad. La víctima se horroriza por fin (hay esperanza). ¿Qué motiva al psicópata (sexo, dinero, imagen púbica, ser su criada...)? ¿Cómo puede dañarte a ti y los tuyos si lo abandonas? ¿Con qué recursos se puede neutralizar los ataques? ¿Y los recursos sociales? Elabora un plan de actuación.
####Libro psicópatas 03. Más lección 5:
- El psicópata no sólo te obliga a deshumanizarte (si tu mente no está muy trabajada, bajarás a su nivel, o perecerás), sino que te desvía de tus objetivos actuales, no pudiendo crear tu destino.
* Su felicidad es sentirse superior por lograr engañar y explotar.
* ¿La gente sigue trabajando y no dice basta porque trabajar oficialmente (comemierdas ganapanes en gran parte...) no es un objetivo noble en el 90% de los casos? Buscar objetivos nobles "cura las dependencias". El fuerte mentalmente es noble (para el psicópata, un tonto)
- Recomendaciones:
* Si va a ver a una sobrina al hospital, no es por amor, es imagen...
* Puede pensar con lógica, pero actuar dañínamente (sin tener en cuenta lo que pensó).
* La pregunta "¿quién eres y qué pretendes?" suele descolocarlos (pero harán como que no pasa nada o intentarán llamarte "mala persona"...).
- Recomendaciones si convives con psicópatas moderados:
* No desesperación, hipervigilancia o lucha de poderes.
* Sus progresos pueden no ser reales (sólo imagen).
* Quien de pequeño no teme, desarrolla la conciencia peor (el "esto mejor no hacerlo", puede ser bueno).
* ¿Permitirlo sentirse superior cuando no haga daño? Picasso y Warhol canalizaban su psicopatía, y a la vez eran admirados.
* ¡Ay de quien quiera hacerse notar y no ayude a las tablas rasas!
####Libro psicópatas 04. Detectando al psicópata:
- SIMULAN LA NORMALIDAD BASTANTE BIEN. Emociones REALES del psicópata (un alumnno modelo puede ser psicópata...; y tienen frustración, asociándolos así con la personalidad de verdugo sobre todo):
* Miedo, ¿y ansiedad? Será "ansiedad psicópata". Siente menos miedo al castigo. ¿Si le despidieron, seguirá sin miedo al despido? ¿Que sabe "anestesiarse" y prepararse para futuras penas, pero no inmediatas?
* Ira. Cuando se frustran los deseos (pero podrá incluso sonreír / simular). ¿Y entonces necesita autoreafirmarse pasando por encima de los demás o comprobando que tiene el control sobre su entorno (que le prestan atención...)? Hipersensible a la crítica. 
* Difícilmente se deprimirá (él es Dios, ha logrado lo que ha querido; está loco). Eso sí, pueden llorar si las cosas salen mal (son descubiertos). Pero dura poco.
* El placer de otros le provoca envidia y codicia, pero disfrutan provocando situaciones de riesgo, incertidumbre y tensión.
* Tienen capacidad para comprender lo que otro está pensando (incluso sintiendo; el sentimiento puede ser visto como la capacidad de una máquina de reaccionar, nosotros como objeto / máquina). El psicópata joven tiene más dificultades para leer el rostro.
- Conductas del psicópata
* Cuando no es muy valorado, puede optar más por el desprecio y el engaño.
*Si el ataque se vio por casualidad, explicación de por qué la víctima es "responsable". Quitar importancia y apoyar a la víctima.
* Nunca lamenta nada profundamente (es chantaje emocional...).
* NO se observan cambios PERMANENTES.
####El discurso del psicópata integrado. Ellos quieren estar por encima de los demás, aunque casi ni se nota, porque dan imagen de bellísimas personas, pero fíjate bien sin quieren ser admirados / honrados / bien calificados, en vez de admitir debilidades con honestidad... Debemos dejar de competir y ser extremadamente modestos, para que se los detecte un poquitín bien. Decir, que son seres sociales y poco profundos, aunque aparenten lo contrario. Les encantan las citas de "nobles famosos". Analizan (observan para controlar, y pueden darte detalles en los que un sabio no se fijaría), pero no profundizan "en lo del alma". Pueden dar respuestas vagas, sin mojarse, o quedarse en silencio. Y por último, les gusta hablar de lo que dominan, de su terreno. Defienden al especialista, tan cerrado. ¿Y si les pedimos que sean humanos / flexibles? ¡Ah, se me olvidaba, diles que ellos están en el lugar del oprimido, para que tengan un poco de empatía real, no simulada! Un ejemplo de frase psicópata: me duele en el alma... ¿A que parecen humanos? ¿A que parecen humanos? ¡Y son el 5% de la población! NO compitas ni te vendas nunca más, para que ellos estén detectables. Ellos mataron a sus padres (pueden inducir cánceres, al menos con palabras educadas que duelen; su energía...), y luego dan discursos emotivos en el entierro. Se ceban sobre todo con lo femenino (que simulan adorar).
####superamenaza los narcis no se dan mucha cuenta de estas características suyas. Malos perdedores / ganadores. Si no se alcanza la grandiosidad en la actividad o la veneración que creen se merecen, tienden a ser hipersensibles, ansiosos, falsos introvertidos y defensivos (en el otro lado está el narci ruidoso por así decirlo). Muchos son sabelotodos o hacen gestos exagerados con las manos al hablar. Infundir miedo para controlar. NO quieren mostrar emociones (no admiten que han sido influenciados). Tienen a algunos "exitosos" en un pedestal, pero al conocerlos se desilusionan (esperaban a alguien perfecto, cuando ellos no lo son). El + popular de la oficina, hará "favores" y adulará.
####superrenacer el karma negativo del narcisista. La vida les pasa factura. NO hay cargos de conciencia pero...:
- Profundo miedo a perder a las personas (inconscientes, de mentira...) que los validan, admiran (cuidado con quien hace ostentación de profesión)... o lo simulan. Miedo a la soledad.
* ¿Con el tiempo, la gente los conoce un poco y se aleja?
- Desprecio interno, y para no llegar a su interior, mostrarse por encima (pueden autodañarse, ¿tratando de mostrarse "valientes", por ejemplo?), y maltratar suavemente con palabras (de jóvenes, la violencia era más física).
* Cuidado con alguien que parece bueno, que quizás aparenta femineidad, pero que es fríamente masculino (aunque tenga cara de chino "femenina").
- Soledad en la vejez. El encanto desaparece.
- Eterna infelicidad por falta de emociones positivas (es un superdiscapacitado para vivir), de amor incondicional, de gusto por quedarse quieto y solo...
####superrenacer el narci te tiene miedo por qué. Le dije a Pablo (G. de la Puente) el narci (simpático, le gusta decir cosas feas disimuladamente, para estar contento consigo mismo / autoreafirmarse, sin ver su negrura interna), que tenía un poco de barriga, ¡y se lo tomó en serio, preocupándose para no tener grasa! ¡Tenemos el poder para debilitarlos lo suficiente (a los psicópatas)!:
##Al narci: tú, mucho de máquina del bar, pero es porque tu inteligencia es "de mirar afuera", de obrero, ¿te acuerdas de cuando ni pudiste empezar el examen de esa asignatura profunda? Por la inteligencia robótica, falta de intuición, mente fresca de tontico... se pueden sacar 2 cursos a la vez.
- Puedes llorar, sentir dolor... pero sabes que eso al final acaba contigo más fuerte y el psicópata muy mal parado, porque ya vas sabiendo cómo matarlo psicológicamente (son más débiles que tú).
* El "más bueno" a matao a 2 (con sus palabras...).
- La clave para mejorar uno, y entonces mejora la sociedad, es saber lo que es un narci y alejarse mucho de su forma de ser.
* El narci suele tener 3 años de edad mental o así (como muchos universitarios, y no lo digo en broma). Yo creo que ya he alcanzao los 12 de edad mental, pero como lo que manda son las chismosas y la tradición obsoleta...
##Cómo es una persona buena, no un psicópata (el champú es malísimo, pero él quiere imagen) :
- Te respetas a ti mismo (pones límites; no como yo con mis amigos, que iba donde querían para conservalrlos).
- Identidad y creencias propias, y razonas (puedes contestar "¿por qué?").
* Tu poder viene de dentro, no de la aprobación externa. No pueden apelar a tu culpa o vergüenza
* Ves que los errores sirven para mejorar, y te alegras de encontrarlos en ti.
- Eres independiente (emocionalmente... Sabes que no necesitas el afecto de nadie en especial), ¿introvertido?
- Sabes lo que te hace feliz, y para levantarte de la cama, están los objetivos nobles.
- Tú puedes ver sus juegos y manipulaciones.
##Los seres no sociales, no es que seamos ángeles, pero desde luego, estamos exentos de toda sospecha (no somos narcis integrados, que son varios millones en España, ¿menos de 5?).
########Antes del grueso de las canciones:
####El arte es una canción que te da salud, es tu forma de reaccionar al arte, tu creatividad...
- Canción: harmonía, elegancia, sofisticación, moralidad, matemática, sana energía erótica... ¡Más cantar y menos empollón instrumento! Entender la letra sobra (canciones de los 80, incluyendo maxisingles / versiones por lo general menos frenéticas; ejemplo, Heaven 17, Let me Go). Los blancos (Hall y Oates, Pet Shop Boys rapeando) reinventan lo negro.
- Videojuego: que dé a la imaginación (como los de los 80) y no sea 3D / extravertido, con portadas bonitas. Y para despertar el cerebrín, basta con 5 minutos de Outrun... ¡Instrucciones cortas o inexistentes!
- La poesía más simple (describir al burro Platero...) incluye la verdad sin más, contada con la mayor sencillez posible, que requiera lo mínimo del hemisferio izquierdo (pocos artificios o ninguno).
####Dirs:
- Pink Floyd Cymbaline.
- Dragon Ball 191 gohan my son 191 cantante yuka.
- Ándale cotó. Vídeo Manga Nippon Mukashi Banashi (JODE-TV, 12/09/89).
- Tienda de juguetes viejos BARRIO DEL NATAHOYO GIJÓN 8mil90.
- Battle gear 4 tunned.txt
- Documentales:
* Miguel Rix, La Organización, Yerma 2030...
- Vídeos Youtube:
* Fabián C. Barrio, La Importancia de Mirar las Nubes.
- Canciones:
* Sálvarez (Y si no Tienes Dinero).
* Marta Sánchez (Dime la Verdad).
* Timex Social Club (Rumours).
* Cómplices (Cuando Duermes).
* Pet Shop Boys (King's Cross).
* Miguel Bosé (Aire Soy): por la sofisticación...
####Enlaces y nombres:
- JMDLAManhui (sanalaenergía).
- Link Rescate Atlántida (ZX Spectrum 128 kb). Este vídeo incluye la música de presentación (2:08). Resto: TROCITOS ELEGIDOS ALEATORIAMENTE; la melodía final puede ser dabbc... https://www.youtube.com/watch?v=mofMHGS2hLg
- https://archive.org/stream/MicromaniaPrimerEpocaspanishIssue21
- Link a Renegade 3 (que dure más de 20 minutos).
- Link el planeta libre comemierda (los empleos son para las estadísticas, no útiles).
- Francis Pelletier (música).
##Candidatos a cumpleañeros:
Aznavour: Buen Aniversario.
Duran Duran: New Moon on Monday. ***** (Simon Lebon)
Hall y Oates: Private Eyes.
Julio Iglesias: La Carretera.
Machín: Corazón Loco.
Revólver: Dentro de ti (básico).
Roxy Music: Same Old Scene. ***** (Bryan Ferry)
Tina Turner: Two People.
Spandau Ballet: True. **** (Tony Hadley y Gary Kemp)
* José Antonio Martín Tello: Rescate Atlántida (ZX Spectrum 128 kb).
* David Whittaker: Shadow of the Beast I (Commodore Amiga).
* Hiroshi Kawaguchi: Outrun (SEGA arcade).
##Cumpleañeros:
- Mark Hollis		04 Enero	1955 Talk Talk: I Believe in you.- 
- David Bowie		08 Enero	1947 Ashes to Ashes.
- José Luis Perales	18 Enero	1945 Tú, como yo.
- Phil Collins 		30 Enero 	1951 Father to Son; Genesis: Jesus he Knows me.
- Peter Gabriel		13 Febrero	1950 Come, Talk to me (directo, Paula Cole).
- Mikel Erentxun		23 Febrero	1965 1+1 son 7 (directo, Fran Perea). Duncan Dhu: La Herida.
- Martin Fry 		09 Marzo	1958 ABC: The Look of Love.
- Graham Coxon		12 Marzo 	1969 Bittersweet Bundle of Misery.
- Franco Battiato		23 Marzo	1945 Nómadas (Bola de Cristal).
- Damon Albarn		23 Marzo	1968 Blur: The Universal.
- Richard Coles		26 Marzo	1962 Communards: For a Friend.
- Tony Banks		27 Marzo 	1950 I Wanna Change the Score (Nick Kershaw).
- Diego Vasallo		02 Abril	1966 Rastros de ti.
- Billy Joel		09 Mayo		1949 All about Soul (6 minutos, versión disco).
- Martyn Ware 		19 Mayo		1956 Heaven 17: Let me Go (maxi 12 pulgadas).
- Morrisey		22 Mayo		1959 The more you Ignore me, the Closer I Get.
- Tony Hadley		02 Junio	¿58? Spandau Ballet: Through the Barricades (12 pulgadas).
- Paddy McAloon		07 Junio	1957 Prefab Sprout: The Sound of Crying.
- Mick Hucknald		08 Junio	1960 Simply Red: For your Babies.
- Jimmy Somerville	22 Junio	1961 Communards: So Cold the Night (vídeo o versión larga).
- Neil Tennant		10 Julio 	1954 Pet Shop Boys: Why don't we Live Together?
- Nacho Goberna		30 Julio	1964 La Dama se Esconde: Aventuras.
- Miguel Rix		101 Agosto?	7071 Rix: Niños S.A..
- Fritz McIntyre		02 Septiembre	1952 Simply Red: 
- Mike Rutherford		02 Octubre 	1950 Genesis: In too Deep. Mike Mechanics: The Living Years.
- Chris Lowe		04 Octubre	1959 Pet Shop Boys: Rent.
- Gary Kemp		16 Octubre	1959 Spandau Ballet: True.
- Johnny Marr		31 Octubre	1963 Smiths: There's a Light. Bryan Ferry: The Right Stuff.
####inventario varios:
- Blur 2 temas: TOPMAN, End of the Century.
- No: Génesis directo, 1985hits, 1988hits, 1989hits.
- Canciones Real: Moi Lolita, ¡Qué Barbaridad!, El Tiempo Medianoche, Europe's Living a celebration (me gusta).
- WMP: Penthouse and Pavement (extended), Great Wall of China, The Blues, Thing Called Love (The Darkness).
- La Bola de Cristal:
* Liko Veneno: Me Siento tan Feliz.
* Radio Futura: Siempre Seré un Niño.
* Alaska, Dinarama y Emma Suárez: El Fin del Mundo.
* Radio Futura: Hola, ¡qué tal?
- SAW1: I Should Be so Lucky, Together Forever, Guilty, Cross my Broken Heart (Cross my Heart es Eight Wonder), Never Stop me.
- SAW5: Shattered Glass (Laura Branigan), las gordas (franceses), Love (bailarines negros), Everlasting Love (versión de Sandra y Michel Cretú), Voyage Voyage.
- SAW6: We Have no Memory, Dressed for Success (Sigue Sigue Sputnik), Baby Bay (Eight Wonder), That's what Love Can Do (Boy Krazy), Mon Amour (Dollar). 
####Nombres de canciones:
##Kalimba de luna
##PWL megamix 6
##Gorilla Drummer Phil Collins  
##Janet Runaway 1995  
##Michael MacDonald Sweet Freedom
##Jimmy Nail Ain't no Doubt
##Steve Arrington Fell so Real (12 extended)
##Alan Parson's Project Separate lives
##Survivor Is this Love
##alan parsons time  
##chopin nocturne op 9punto2  
##dir fast gypsy violin castillo barba azul
##Sarasate Aires Gitanos (3 últimos minutos de 8)
##Collective Soul, Shine
##S. Arrington, Feel so Real
##Glamour, Imágenes
##Santi Auserón, Sueños en Televisión
##Barón Rojo, Tierra de Nadie
##Yann Tiersen: Porz Goret
##Dorian con León Larregui: Duele
##Morrissey: the more you ignore me, the closer I get
##Cómplices: cuando duermes
##ABC - When smokey sings (1987 The Miami mix), entre 5:10 y 5:15. London mix dura como 7 minutos.
##PSB:
- She's Madonna, Hallo Spaceboy, I'm not Scared, Losing my Mind, West End Girls, DJ culture, Home and Dry, How Can You..., Pandemonium, Left to my own..., Jealousy.
- Liberation, So Hard, Being Boring, Love Comes Quickly, Why don't we..., Suburbia, Domino Dancing, It's a Sin, Rent, What have I Done..., Heart, King's Cross.
- Before, Seavidae, Dontknowwhatyouwant, Beautifulpeople, Canyouforgiveher, mezclas de Shep Pettibone de Oportunitieslotsofmoney, Alright, Alwaysonmymind, Gowest, Yesterdayiwasmad, Miracles, Flamboyant.
- Red Letter Day, I Get along, New York City Boy, Bilingual, One in a Million, Wouldn't Normally Do...
##lo mejor del Soul:
A1	Otis Reddingâ€“	Sittin' On The Dock Of The Bay
Written-By â€“ Redding*, Cropper*
A2	Ben E. Kingâ€“	Spanish Harlem
Written-By â€“ Leiber*, Spector*
A3	The Plattersâ€“	Only You
Written-By â€“ Rand*, Ram*
A4	Percy Sledgeâ€“	When A Man Loves A Woman
Written-By â€“ Wright*, Lewis*
A5	Louis Armstrongâ€“	What A Wonderful World
Written-By â€“ Weiss*, Douglas*
A6	The Driftersâ€“	Up On The Roof
Written-By â€“ Goffin/King*
A7	Sam & Daveâ€“	Bring It On Home To Me
Written-By â€“ Cooke*
A8	Jerry Butlerâ€“	He Will Break Your Heart
Written-By â€“ Carter*, Mayfield*, Butler*
B1	Sam Cookeâ€“	You Send Me
Written-By â€“ Cooke*
B2	Righteous Brothers*â€“	Unchained Melody
Written-By â€“ North*, Zaret*
B3	Joe Texâ€“	I've Got To Do A Little Bit Better
Written-By â€“ Tex*
B4	Brook Bentonâ€“	A Rainy Night In Georgia
Written-By â€“ White*
B5	Gene Chandlerâ€“	Daddy's Home
Written-By â€“ Sheppard*
B6	Paul & Paulaâ€“	Hey Paula
Written-By â€“ Hildebrand*
B7	Nina Simoneâ€“	My Baby Just Cares For Me
Written-By â€“ Kahn*, Donaldson*
C1	Ben E. King & The Driftersâ€“	Stand By Me
Written-By â€“ King*, Leiber*, Stoller*
C2	Percy Sledgeâ€“	Warm And Tender Love
Written-By â€“ Robinson*
C3	Otis Reddingâ€“	These Arms Of Mine
Written-By â€“ Redding*
C4	The Dellsâ€“	Oh What A Night
Written-By â€“ Funches*, Junior*
C5	Harold Melvin & The Blue Notes*â€“	If You Don't Know Me By Now
Written-By â€“ Gamble/Huff*
C6	Bobby Vintonâ€“	Blue Velvet
Written-By â€“ Wayne*, Morris*
C7	The Plattersâ€“	The Great Pretender
Written-By â€“ Ram*
D1	Gladys Knight And The Pipsâ€“	Every Beat Of My Heart
Written-By â€“ Otis*
D2	Bobby Womackâ€“	Love The Time Is Now
Written-By â€“ Womack*
D3	Aaron Nevilleâ€“	Tell It Like It Is
Written-By â€“ Davis*, Diamond*
D4	The Fleetwoodsâ€“	Come Softly To Me
Written-By â€“ Ellis*, Troxel*, Christopher*
D5	Ray Charlesâ€“	Georgia On My Mind
Written-By â€“ Carmichael*, Gorrell*
D6	Lee Dorseyâ€“	Working In A Coalmine
Written-By â€“ Toussaint*
D7	Gene Chandlerâ€“	Duke Of Earl
Written-By â€“ Williams*, Edwards*
D8	Sam Cookeâ€“	Wonderful World
Written-By â€“ Albert*, Adler*, Cooke*
####Selección por año. Hay errores posiblemente:
##Principal (* significa elegida):
- 1994: You Owe it all to me, *Casi nunca Bailáis, Sleeping in my Car, Somos el Futuro, Capricornio.
- 1993: Sólo por un Día, Rastros de ti, Cosas de la vida, *Both sides of the Story, Ella.
- 1992: No Son of Mine, *The One, Smells like Teen Spirit, Historias de Amor, Otro día más sin verte.
- 1991: Have you seen her, *Volver a Casa, El Peón del Rey de Negras, Are you Dreaming, Bailar Pegados.
- 1990: Enjoy the Silence, Espaldas mojadas, *Praying for Time, I Can't Stand it, NO me importa Nada.
- 1989 (I): Left to my Own Devices, Baby don't forget my number, She drives me crazy, *Like a Prayer, Más y más.
- 1989 (II): Lullaby, *Te dejé marchar, Aquí no hay Playa, Loco Mía, Los amigos de mis amigas.
- 1988: GTO, Una fiesta especial (La Década), Im nin'alu 1988, Father figure, *Nothing's Gonna Change...
- 1987: One love to give, With or Without you, *In the Army now, Ellos las prefieren gordas, Nothing's gonna stop me now.
- 1986 (I): Janey don't you lose heart, El imperio contraataca, *Broken wings, Living in another World, This is my life.
- 1986 (II): La puerta de Alcalá, El tomavistas, Dancing in Paris, Easy Lady, *Atlantis is Calling.
- 1985: *Lay your hands on me, Cabaret, Grité una noche, How Much, The Lady don't mind.
- 1984: *Union of the snake, Una de dos, Piel de terciopelo, Joanna, All of you.
- 1983 (I): *Y cómo es él, The night, Embrujada, Genetic Engineering, Fame.
- 1983 (II): Tiempo de amor, Scotland the brave, Dolce Vita, Un Paso Adelante, *True.
- 1982: Las leandras, Felicidad, *Souvenir, Me estoy volviendo loco (de verdad), 2 enamorados.
- 1981: Johnny and Mary, Rapture, Hold on Tight, *Salta, Márchate ya.
- 1979: Terciopelo y fuego, *Too much Heaven, Gloria, Soy un corazón tendido al sol, Me vuelvo loco.
- 1976: *Esa eres tú, El Sur, Don't go breaking my heart, Si tu fueras mi mujer, Tú y yo.
- 1973: *Amor amar, Pardon me sir, Forever and ever, Eva María, América América.
##Más (aparte de Ciudad Jardín), para poder relacionar canción y artista (están los difíciles de relacionar, y por orden). * significa desconocido hasta ahora se puede decir:
*Valera, Viceversa, MC Hammer, Mecano, Twenty for 7, Joe Cocker, The Cure, Ofra, Estefanía de Mónaco, Bruce, Paolo Salvatore, Modern Talking, La Unión, Nacha Pop, *Gary Low, Talkinh Heads, Pato de Goma, Azul y Negro, OMD, Danza Invisible, *The Royal Philharmonic Orchestra, Emilio José, Luis Cobos, Pedro Marín, Palmer, ELO, Bosé, *Falcons (79), Danny Daniel (76), *Los Puntos (76), Lorenzo Santamaría (76), Cecilia (76), Russos (73).
####canciones:
00plocky71280 Spin Doctors y M People.MP3
091 - Cuando Pierdo el Equilibrio.mp3
091 - Qu‚ Fue del Siglo XX.mp3
17_RIX_Ya vivimos en el N.O.M.mp3
18_RIX_ Despierta YA.mp3
19_RIX_Psiquiatr¡a la industria de la muerte.mp3
A-ha - HUnting High and Low.mp3
ABC Alphabet City - The Night You Murdered Love.mp3
ABC Lexicon of Love - All of my Heart.mp3
ABC Lexicon of Love - Shoot that Poison Arrow.mp3
ABC Lexicon of Love - Tears Are not Enough.mp3
ABC Lexicon of Love - The Look of Love.mp3
ABC mezclas - The Look of Love (extended).mp3
ABC mezclas - The Look of Love (instrumental).mp3
Ace Of Base - All That She Wants.mp3
Ace of Base - The Sign.mpg.MP3
Ace of Base - wheelfortune.flv.MP3
Aerol¡neas Federales - no_satisfaces.flv.MP3
Aha - Take on Me.mp3
Aha - The Sun Always Shines On TV.mp3
Air Supply - goodbye.MP3
Al Jarreau - Moonlighting.mp3
Alan Parsons - One More River.mp3
Alan Parsons - Shadow of a Lonely Man.mp3
Alanis Morissette - Hand in my Pocket.mp3
Alanis Morissette - Hands Clean .mp3
Alanis Morissette - Head Over Feet.mp3
Alaska - No se R¡a de la Bruja Aver¡a.mp3
Alaska y Loquillo - Hola, qu‚ tal.mp3
Alaska y Loquillo - La Bola de Cristal.mp3
Alaska y Loquillo - Ni un D¡a m s.mp3
Alaska y Loquillo - Nosotros Somos los Electroduendes.mp3
Alaska y Loquillo - Soy Profesional.mp3
Alaska y Loquillo - Soy un Electroduende.mp3
Alaska y Loquillo - Vacaciones Infernales.mp3
Alb‚niz Triana para orquesta.mp3
Alejandra Guzm n - M¡ralo, M¡ralo.mp3
Alex y Cristina - Chas y aparezco a tu lado.mp3
Alexander O'Neal y Cherelle - Never Knew Love Like This.mp3
Alexander O'neal y Cherelle - Saturday Love.Mp3
Alice in Chains No Excuses.mp3
Almodovar y McNamara - Suck It to Me.mp3
Alphaville - Sounds like a melody.mp3
Amaral - Sin Ti no Soy Nada.mp3
Amaral - Te necesito.mp3
Amistades Peligrosas - Casi Nunca Bail is.MP3
Amistades Peligrosas - Me Haces Tanto Bien.mp3
ana torroja - sirenas.mp3
Andrea Bocelli - L'attesa.avi.MP3
Angel - Dancing in Paris (Qu‚ Pasa).mp3
Anita Baker - Caught Up in the Rapture.mp3
Anita Baker - Sweet Love.mp3
Annabel Lee.mp3
Annie Lennox - Medusa - A Whither Shade of Pale.mp3
Annie Lennox - Medusa - Donït Let It Bring You down.mp3
Annie Lennox - Medusa - Thin Line between Love and Hate.mp3
Annie Lennox - Medusa - Versi¢n No more -I Love Youïs-.mp3
Antonio Flores cuerpomujer.mp3
Antonio Mach¡n - A Las Doce En Punto.mp3
Antonio Mach¡n - Coraz¢n Loco.mp3
Antonio Mach¡n - Envidia .mp3
Antonio tello - rescate1.mp3
Antonio Tello - rescate2.mp3
Antonio Vega - Mi hogar en cualquier sitio.mp3
Antonio Vega - Oc‚ano de Sol.mp3
an¢nimo - avistapajaro.MP3
An¢nimo - candycandy.flv.MP3
An¢nimo - chciho.flv.MP3
An¢nimo - chichocierre.flv.MP3
An¢nimo - chispas.flv.MP3
An¢nimo - commodore100.flv.MP3
An¢nimo - Isidoro.mp3
an¢nimo - la tia de frankenstein cierre.avi.MP3
An¢nimo - Los Aurones (extendida).mp3
An¢nimo - McGyver.mp3
An¢nimo - memole.flv.MP3
an¢nimo - pennies 1981 yes.avi.MP3
an¢nimo - pennies from heaven 1981.avi.MP3
An¢nimo - quijotesintonia.flv.MP3
An¢nimo - samedcanciones.mp3
An¢nimo - sherlockholmes.flv.MP3
An¢nimo - TV Theme Songs - Growing Pains.mp3
aqua barbie girl.mp4.MP3
Arcadia - Election Day.mp3
Arkarna - House On Fire.mp3
Ashford And Simpson - Solid.mp3
Associatesext_Waiting For The Loveboat.mp3
Astrud - bailando.flv.MP3
Astrud - todonospareceunamierda.flv.MP3
Aswad - Don't Turn Around.mp3
Auld Lang Syne bagpipes.avi.MP3
Avalanches - sinceileftyou.flv.MP3
Aviador Dro - La Ciudad en Movimiento.mp3
aviador dro la zona fantasma.avi.MP3
aznavour debes saber.mp3
aznavour y por eso.mp3
aznavour-02-AudioTrack 02.mp3
aznavour03-AudioTrack 03.mp3
aznavour05-AudioTrack 05.mp3
aznavour07-AudioTrack 07.mp3
Aztec Camera - Walk Out to Winter.mp3
Azul y Negro - Habana - No Smoking.mp3
Azul y Negro - notengotiempo.flv.MP3
B Movies - Nowhere Girl (extended).mp3
B. J. Thomas - Rain drops keep falling on my head.mp3
Baltimora -Tarz n Boy.flv.MP3
Bananarama - guilty.flv.MP3
Beck Loser.MP3
Bee  Gees - I Started a Joke.mp3
Bee Gees - You Win Again.mp3
Belouis Some - Imagination.mp3
Belouis Some - Some People.mp3
Besh O Drom - Meggyujtom a Pipam.mp4.MP3
Beth - Dime.mp3
Beth - Parando el tiempo.mp3
Beyond Brother - theharderitry.flv.MP3
Bill Withers - Lovely Day.mp3
Billy Idol - Eyes Without A Face.mp3
Billy Joel directo - billy elton road.mp3
Billy Joel directo - Don't Worry Baby (Homenaje a Wilson y los Beach Boys).MP3
Billy Joel disco An Innocent Man - Uptown Girl.mp3
Billy Joel disco Fantasies and Delusions - Air (Dublinesque).mp3
Billy Joel disco Fiftysecond Street - My Life.mp3
Billy Joel disco Glass Houses - All For Leyna.mp3
Billy Joel disco Greatest Hits Volumen 1 y 2 - While the Night Is Still Young.mp3
Billy Joel disco Greatest Hits Volumen 1 y 2 - You're Only Human.mp3
Billy Joel disco Greatest Hits Volumen 3 - To make you feel my love.mp3
Billy Joel disco Piano Man - Piano man.MP3
Billy Joel disco Piano Man - You're My Home.mp3
Billy Joel disco River of Dreams - All about Soul.mp3
Billy Joel disco River of Dreams - Blond Over Blue.mp3
Billy Joel disco River of Dreams - Famous Last Words.mp3
Billy Joel disco River of Dreams - The River of Dreams.mp3
Billy Joel disco Songs in the Attic - I've Loved these Days.mp3
Billy Joel disco Songs in the Attic - Say Goodbye to Hollywood.mp3
Billy Joel disco Storm Front - And So It Goes.mp3
Billy Joel disco Storm Front - Downeaster Alexa.mp3
Billy Joel disco Storm Front - Leningrad.mp3
Billy Joel disco Streetlife Serenader - Streetlife Serenader.mp3
Billy Joel disco Streetlife Serenader - The Great Suburban Showdown.mp3
Billy Joel disco The Bridge - Running on Ice.mp3
Billy Joel disco The Bridge - Temptation.mp3
Billy Joel disco The Nylon Curtain - Allentown.mp3
Billy Joel disco The Nylon Curtain - Sheïs Right on Time.mp3
Billy Joel disco The Nylon Curtain - Surprises.mp3
Billy Joel disco The Nylon Curtain - Whereïs the Orchestra.mp3
Billy Joel disco The Stranger - Scenes from an Italian Restaurant.mp3
Billy Joel disco The Stranger - She's Always a  Woman to Me.mp3
Billy Joel disco The Stranger - Vienna.mp3
Billy Joel disco Turnstyles - New York State of Mind.mp3
billy Joel disco Turnstyles - Summer, Highland Falls.mp3
Billy Joel Hassles - Four o'clock in the Morning.MP3
Billy Joel varios en un disco Mad about the Mouse (Disney) - When You Wish Upon A Star.mp3
billy leave_tender.avi.MP3
Billy Ocean - Sad Songs.avi.MP3
Billy Ocean - When the Going Gets Tough the Tough Get Going.MP3
Black - Everything is coming up roses.mp3
Black - Paradise.mp3
Black - Sweetest Smile.mp3
Black - Wonderful Life.mp3
Black Box - Ride on Time.mp3
Blow Monkeys - digging your scene.mp3
blur - girls and boys.avi.MP3
Blur - Parklife.mp3
Blur - Song 2.mp3
blur - theres no other way.avi.MP3
Blur - theuniversal.flv.MP3
blur 1 01-AudioTrack 01.mp3
blur 1 07-AudioTrack 07.mp3
blur 2 08-AudioTrack 08.mp3
blur 2 16-AudioTrack 16.mp3
Blur 2 temas de blur encadenados extraer mp3.avi.MP3
blur chrmless man.MP3
blur i don't need.MP3
blur she.MP3
bobgeldof crazy.mp3
Bon Jovi - Always.mp3
Bon Jovi - Dead or Alive.mp3
Bon Jovi - Lay your Hands on Me.mp3
Boston - Amanda.mp3
Boy George - The Crying Game.mp3
Boy Krazy - That's What Love Can Do.mp3
Boyz II Men - End of the Road.mp3
Brainstorm - Maybe.mp3
Bravo - Lady Lady.mp3
Brian Adams - Heaven.mp3
Bronsky Beat - Ain't Necessarily So.mp3
Bruce Springsteen - Hungry Heart.mp3
Bruce Springsteen - Streets of Philadelphia.mp3
Bruce Springsteen - The River.mp3
Bruce Springsteen - Tunnel Of Love.mp3
bruno lauzi ritornerae.avi.MP3
Bryan Ferry - Slave To Love.mp3
Buggles - Video Killed the Radio Star.mp3
Caifanes - Afuera.mp3
Cameo - Word up (extended).MP3
Cameo - Word Up.mp3
Campesinos.avi.MP3
Cantores de Hispalis - a bailar sevillanas - YouTube.mp3
Carlos Gardel - Caminito.mp3
Carlos Gardel - El d¡a que me quieras.mp3
Carlos Gardel - Volver.mp3
Carlos N£¤ez - El Pozo de Ar n.mp3
Carpenters gold - 03-Raini Days and Mondays.mp3
Carpenters gold - 05-Itïs Going to Take Me Some Time.mp3
Carpenters gold - 10-Please Mr. Postman.mp3
Carpenters gold - 14-Close to You (They Long to Be).mp3
Cars - Heartbeat City.mp3
CC Catch - heartbreakhotel.flv.MP3
CC Catch - Jump In My Car.mp3
Cecilia - Amor de Medianoche.mp3
Chafino - Hombre de papel - video -.mpg.MP3
Charles and Eddie - Would I Lie to You Baby.mp3
Cheap Trick - The Flame.mp3
Chicago - Hard Habit To Break.mp3
Chicago - Look Away.mp3
China Crisis - King in a Catholic Style.mp3
China Crisis - Working With Fire And Steel.mp3
Chopin - Tristesse.mp3
Chris De Burgh - Lady In Red.mp3
Chris Rea - On the Beach (Extended).mp3
Christians - Forgotten Town.mp3
Christians - Harvest For The World.mp3
Christians - Hooverville.mp3
Christians - When the Fingers Point.mp3
Christians - Words.mp3
Christopher Cross - All right.mp3
Christopher Cross - Caught Between the Moon and NYC.mp3
Christopher Cross - Sailing.mp3
Cindy Lauper - True Colors.mp3
Classix Nouveaux - Is It a Dream.mp3
Cliff Richard - mendahort.flv.MP3
Climie Fisher - Love changes everything.mp3
Cock Robin - When your Heart Is Weak.mp3
cock robin corner.avi.MP3
Communards - Donït leave me this way.mp3
Communards - So Cold the Night.mp3
Communards - Tomorrow.mp3
Communards - You Are My World.mp3
Compositores Espa¤oles  - Salvador Bacarisse.mp3
Compositores Espa¤oles - Francisco T rrega.mp3
Compositores Espa¤oles - Granados.mp3
Counting Crows - Round Here.mpg.MP3
Cousteau - The Last Good Day of the Year.mp4.MP3
Cramberries - myfamily.avi.MP3
Crash Test Dummies - God Shuffled His Feet.mp3
Crash Test Dummies - Mmmmm.mpg.MP3
Cristina y los Subterr neos - Dile a papa.mp3
Cristina y los Subterr neos - Mil pedazos.mp3
Cristina y los Subterr neos - Ni una maldita florecita.mp3
Cristina y los Subterr neos - Pulgas en el coraz¢n.mp3
Cristina y los Subterr neos - P lido.mp3
Cristina y los Subterr neos - T£ por mi.mp3
Crowded House - 15 Distant Sun.mp3
Culture Club - Church Of The Poison Mind.mp3
Culture Club - Do You Really Want To Hurt Me.mp3
Culture Club - Karma Chameleon.mp3
Culture Club - Time (Clock Of The Heart).mp3
Culture Club - White Boy.mp3
Cyndi Lauper - Girls Just Wanna Have Fun.mp3
Cyndi Lauper - Goonies Theme.mp3
Cyndi Lauper - Time After Time.mp3
Cyndi Lauper - What's Going on.MP3
C¢mplices - Duende.mp3
C¢mplices - El Pintor del Arco Iris.mp3
C¢mplices - Hoy Necesito.mp3
C¢mplices - Preguntas y Flores.mp3
Danny Wilson - Mary's Prayer.mp3
Dave Mathews Band - Satelite.mp3
Dave Matthews Band - Everyday.flv.MP3
Dave Stewart - Heart of Stone.mp3
David Bisbal - Coraz¢n Latino - Ave Mar¡a.mp3
David Bisbal - Coraz¢n Latino - Coraz¢n Latino.mp3
David Bisbal - Coraz¢n Latino - D¡gale.mp3
David Bisbal - Coraz¢n Latino - Quiero Perderme en tu Cuerpo.mp3
David Bisbal - Coraz¢n Latino - Un Amor que Viene y Va.mp3
David Bisbal mehundo.flv.MP3
david bowie 1 03-AudioTrack 03.mp3
david bowie 1 06-AudioTrack 06.mp3
david bowie 1 08-AudioTrack 08.mp3
david bowie 1 15-AudioTrack 15.mp3
david bowie 1 19-AudioTrack 19.mp3
david bowie 2 10-AudioTrack 10.mp3
david bowie 2 11-AudioTrack 11.mp3
david bowie 2 13-AudioTrack 13.mp3
david bowie 2 15-AudioTrack 15.mp3
david bowie 2 17-AudioTrack 17.mp3
david bowie Ashes to Ashes.mp3
david bowie heroes.mp3
David Bowie video - Thrusday's Child.mp4.MP3
david bowie y Queen Under Pressure.mp3
Deacon Blue - Dignity.mp3
Deacon Blue - realgonekid.flv.MP3
Deacon Blue - When will You Make my Telephone Ring.mp3
Dead or alive - 2.flv.MP3
Dead or alive - otro.flv.MP3
Dead or Alive - spin.flv.MP3
Depeche Mode - Everything Counts.mp3
Depeche Mode - Just Can't Get Enough.mp3
Derribos Arias - A Fl£or.mp3
Derribos Arias - Branquias bajo el Agua.avi.MP3
Desireless - Voyage Voyage.mp3
desree you've gotta be.mp3
Dexy's Midnight Runners - Come On Eileen.mp3
Dexy's Midnight Runners - The Celtic Soul Brothers.mp3
Diana Ross - Upside Down.mp3
Diego Vasallo - El Peine De Los Vientos.mp3
Diego Vasallo - Juegos De Amor.mp3
Diego Vasallo - Rastros de ti.mp3
Diego Vasallo y El Cabaret Pop - Polaroids.mp3
Dinamita pa los Pollos - Un Agujero en el Bolsillo.mp3
Dionne Warwick - Heartbreaker.mp3
Dire Straits - Brothers in arms.mp3
Dire Straits - Money for Nothing.MP3
Dire Straits - Portobello belle.mp3
Dire Straits - So far away.mp3
Dire Straits - Tunnel Of Love.mp3
Dire Straits - Twisting by the pool.mp3
Dire Straits - Walk of life.mp3
Dire Straits - Your latest trick.mp3
Dirty Dancing - I've Had The Time Of My Life.mp3
Donna Summer - gethurt.flv.MP3
Double - The Captain Of Her Heart.mp3
Drifters - Up on a roof.mp3
Duncan Dhu disco Colecci¢n 1985-1998 - C¢rdoba.mp3
Duncan Dhu disco Colecci¢n 1985-1998 - En Alg£n Lugar (directo).mp3
Duncan Dhu disco Colecci¢n 1985-1998 - La Herida.mp3
Duncan Dhu disco Colecci¢n 1985-1998 y Piedras - A Tientas.mp3
Duncan Dhu disco Colecci¢n 1985-1998 y Piedras - Capricornio.mp3
Duncan Dhu disco Colecci¢n 1985-1998 y Piedras - Si no Eres T£.mp3
Duncan Dhu disco Colecci¢n 1985-1998 y Supernova - La Casa Azul.mp3
Duncan Dhu disco Colecci¢n 1985-1998 y Supernova - Mundo de Cristal.mp3
Duncan Dhu disco Colecci¢n 1985-1998 y Supernova - Oro Blanco.mp3
Duncan Dhu disco Colecci¢n 1985-1998 y Supernova - Rose.mp3
Duncan Dhu disco Colecci¢n 1985-1998 y Supernova - Sombra de Ti.mp3
dunMikel erentxun - A Pleno Sol.mp3
dunMikel Erentxun - A un minuto de ti.mp3
dunMikel Erentxun - California.mp3
dunMikel Erentxun - Grandes xitos.mp3
dunMikel Erentxun - Ma¤ana.mp3
Duran Duran - Come Undone.mp3
Duran Duran - Is there Something.mp3
Duran Duran - Ordinary World.mp3
Duran Duran - The Reflex.mp3
Eartha Kitt - This Is my Life.mp3
EarthWindandFire01-AudioTrack 01.mp3
Echo and the Bunnymen - Bring on the Dancing Horses.mp3
Echo And The Bunnymen - Silver.mp3
Echo and the Bunnymen - The Cutter.mp3
Echo and The Bunnymen - The Killing Moon.mp3
Eddie Grant - Gimme Hope Joanna.mp3
Eduardo armenteros - corona magica.mp4.MP3
Eight Wonder - im_not_scared.flv.MP3
El Barrio - pamadrid.flv.MP3
el kiosco tve baby disco.avi.AVI.MP3
El norte - Un diamante es para siempre.mp3
El £ltimo de la fila - Como un burro.mp3
El £ltimo de la fila - Insurrecci¢n.mp3
El £ltimo de la fila - L piz y tinta.mp3
El £ltimo de la fila - Mar antiguo.mp3
El éltimo de la Fila - Ruge Mistral.mp3
Elefantes - Azul.mp3
Elefantes - Piedad.mp3
ELO - Last Train To London.mp3
ELO - Moment in Paradise.mp3
elo - sweet is the night.avi.MP3
Elton Jhon - Iïm Still Standing.mp3
Elton John - I Guess That's Why They Call It the Blues.mp3
Elton John - I Want Love.mp3
Elton John - Nikita.mp3
Elton John - Sacrifice.mp3
Elton john - theone.flv.MP3
Elton John - Your Song.mp3
Elton John y Billy Joel - Goodbye Yellow Brick Road.mp3
Elvis Costello - Everyday I Write The Book.mp3
Elvis Costello - the only flame.avi.MP3
EMF - Unbelievable.mp3
Emilio jos‚ directo - Soledad.avi.MP3
Enrique Iglesias - dimelo.flv.MP3
Enrique Iglesias - hero.flv.MP3
Enrique iglesias - quizas.flv.MP3
Enrique Y Ana - Abuelito.mp3
EnVogue.mp3
Enya - Orinoco Flow.MP3
Enya 1 only time.avi.MP3
Enya 2 evening falls.avi.MP3
Enya 3 anywhere.avi.MP3
Enya 4 caribbean blue.avi.MP3
Erasure - A Little Respect.mp3
Eric Burdon - The Night.mp3
Eric Clapton - Change the World.mp3
Eros Ramazoti - Fuego en el fuego.mp3
Eros Ramazoti - La Cosa m s Bella.mp3
Eros Ramazoti - Otra como t£.mp3
Europe - The Final Countdown.mp3
Eurythmics - All Right, my Babyïs comming back.mp3
Eurythmics - Here Comes The Rain Again.mp3
Eurythmics - Sweet Dreams.mp3
Eurythmics - There Must Be An Angel.mp3
Eurythmics - Thorn in my Side.mp3
Eurythmics - When Tomorrow Comes.mp3
Eurythmics - Who's That Girl.mp3
Everly Brothers - All I have to do is dream.mp3
Expose - Seasons Change.mp3
Extreme - More Than Words.mp3
Fairground Attraction - Perfect.MP3
Falcon Crest Theme 1.mp3
father figure.avi.MP3
Feargal Sharkey - A Good Heart.mp3
Feargal Sharkey - You Little Thief.mp3
fernando valle roso sones.AVI.MP3
Fiction Factory - Feels like Heaven.mp3
Fire Inc. - Tonight Is What It Means to Be Young.mp3
Flash and the Pan - Waiting for a Train.mp3
Fleetwood Mac - Gypsy.mp3
Flock of Seagulls - Wishing I Had a Photograph of You.mp3
Foreigner - I Wanna Know What Love Is.mp3
Foreigner - Urgent.mp3
Foreigner - Waiting For A Girl Like You.mp3
Four Non Blondes - Whatïs up.mp3
Franco Battiato - Bandera blanca.mp3
Franco Battiato - N¢madas.mp3
Franco Battiato - Perspectiva Nevski.mp3
Frankie Goes to Hollywood - Power of Love.mp3
Frankie Goes To Hollywood - Relax.mp3
Frankie Goes to Hollywood - San Jos‚.mp3
Frankie Goes to Hollywood - Two Tribes.mp3
Frankie Valli & The Four Seasons - Can't Take My Eyes Off You.mp3
Frankie Valli & The Four Seasons - My Eyes Adored You 60s.mp3
Frankie Valli & The Four Seasons - Stay (Just A Little Bit Longer).mp3
Frankie Valli & The Four Seasons - Walk Like a Man.mp3
Franky Valli - Oh What a Night - versi¢n corta.mp3
funfactorycelebration.flv.MP3
Gabinete Caligari - Camino Soria.mp3
Gabinete Caligari - Cien Mil Vueltas.mp3
Gabinete Caligari - La Sangre de tu Tristeza.mp3
Gabriele l¢pez - lavida deseada.mp3
Gary Barlow - Forever Love.mp3
Gary Moore - Still got the blues.mp3
Gary Numan - Cars.mp3
Gary Numan arefriendselectric.flv.MP3
Gazebo - I Like Chopin.mp3
Genesis - Never a Time.avi.MP3
Genesis - Snowbound.mp4.MP3
Genesis - You Taking It All Too Hard.avi.MP3
Genesis directo - Domino.avi.MP3
Genesis directo - Squonk.mp3
Genesis directo - Your Own Special Way.mp3
Genesis directo 1980 - Down Into the Motherlode.mp3
Genesis directo 2007 - When in Rome - Ripples.mp3
Genesis directo disco Live Over Europe - Afterglow.mp3
Genesis directo disco Live Over Europe - Follow You, Follow Me.mp3
Genesis disco A Trick of the Tail - Ripples.mp3
Genesis disco A Trick of the Tail - tott.mp3
Genesis disco Abacab - Keep It Dark.mp3
Genesis disco Abacab - Man on the Corner.mp3
Genesis disco Abacab - No Reply.mp3
Genesis disco And then There Where Three - Follow You Follow Me.mp3
Genesis disco And then There Where Three - Many Too Many.mp3
Genesis disco Duke - Duchess.mp3
Genesis disco Duke - Misunderstanding.mp3
Genesis disco Genesis - Home By the Sea.mp3
Genesis disco Genesis - Mama.mp3
Genesis disco Genesis - That's All.mp3
Genesis disco Invisible Touch - In Too Deep.mp3
Genesis disco Invisible Touch - Invisible Touch.mp3
Genesis disco Invisible Touch - Land Of Confusion.mp3
Genesis disco Invisible Touch - Tonight.mp3
Genesis disco We Can't Dance - Hold on My Heart.mp3
Genesis disco We Can't Dance - No Son Of Mine.mp3
Genesis EP 3 x 3 - Paperlate.mp3
Genesis mezclas Rick Astley (SAW) - Paperlate Together Forever (Paperlate Mix).mp3
Genesis videoclip - Throwing It All Away.mp3
Genesis zzzz Peter single - Carpet Crawlers 99.mp3
Genesis zzzzzz Peter disco Foxtrot - Horizon's.mp3
George Benson - 20-20.mp3
George Benson - Give Me The Night.mp3
George Michael - I Want your Sex .mp3
George Michael - One More Try.mp3
George Michael praying for time.MP3
Glenn Frey - You Belong To The City.mp3
Glenn Medeiros - Nothing's Gonna Change My Love For You.mp3
Gloria Estefan - Anything For You.mp3
Gloria Estefan Don't Wanna Lose you Now.mp3
Go West - Call Me.mp3
Go West - We Close Our Eyes.mp3
Gominolas - grandezadestino.flv.MP3
Good charlotte.flv.MP3
Guns and Roses - Knocking On Heavens Door.mp3
Guns and Roses - Sweet Child of Mine.mp3
Haddaway - What Is Love.mp3
Haircut 100 - Love Plus One.mp3
Hall & Oates - 12 inch collection - 10 - Say It Isn't So (Remix).mp3
Hall and John Oates - One on One.mp3
Hall And Oates - Ican't go for that (no can do).mp3
Hall and Oates - Private Eyes.mp3
Hall and Oates - She's A Man Eater.mp3
Hall and Oates - Your Kiss Is On My List.mp3
Hall and Oats - Out of Touch.mp3
Harold Melvin and The Blue Notes - The Love I Have Lost.mp3
Harry Belafonte - Banana Boat Song.mp3
Hazel dean - whosleavingwho.flv.MP3
hazteindustrial.avi.MP3
Heart - Alone.mp3
Heart - These Dreams.mp3
Heaven 17 disco How men Are - This Is Mine.mp3
Heaven 17 disco Penthouse and Pavement - Play to Win.mp3
Heaven 17 disco The Luxury Gap - Come Live with Me.mp3
Heaven 17 disco The Luxury Gap - Let Me Go (extended).mp3
Heaven 17 disco The Luxury Gap - Temptation.mp3
Heaven 17 disco The Luxury Gap - We Live So Fast.mp3
Heaven 17 Pleasure One - Trouble.mp3
Henry Mancini - Desayuno con Diamantes.mp3
Henry Mancini - The Windmills of Your Mind.avi.MP3
hidrogenesse - Eres mac eres pc.avi.MP3
Hipsway - the Honey Thief.MP3
Hollies - He Ain't Heavy He's My Brother.mp3
House Martins - Happy Hour.mp3
Howard Jones - wislove.flv.MP3
Huey Lewis and the News - If This Is It.mp3
Huey Lewis and the News - The Power of Love.mp3
Human League - Don't You Want Me.mp3
Human League - Fascination.mpg.MP3
Human League - Human.mp3
Human League - Love Action.mp3
Human League - Mirror Man.mp3
Human League - oneman.flv.MP3
Human League - tell me when video.flv.MP3
Human League - Together In Electric Dreams.mp3
Ian Dury and the Blockheads - Hit Me With Your Rythym Stick.mp3
Imagination - Changes.mp3
Imagination - In the Heat of the Night [Extended Version].mp3
Imagination - Just An Illusion [Extended].mp3
INXS - Devil Inside.mp3
INXS - Listen like Thieves.mp3
INXS - New Sensation [extended].mp3
Irene Kara - What a Feeling.mp3
Itïs Immaterial -  Driving Away from Home.mp3
Ivan - Fotonovela.mp3
Jacksons - Torture (extended).mp3
Jaime T - monos.flv.MP3
Jaime Urrutia y Loquillo - caray.flv.MP3
James Ingram & Michael McDonald - Yah Mo Be There.mp3
Jamie Lidell Multiply piano Chilly Gozales.avi.MP3
Janet Jackson - Escapade.mp3
Janet Jackson - That's The Way Love Goes.mp3
Janet Jackson - When I Think Of You.mp3
Jarvis Cocker - Don't Let Him Waste Your Time.avi.MP3
Jarvis Cocker - Temptation.avi.MP3
Jason donovan - anothernight.flv.MP3
Jason donovan - everyday.flv.MP3
Jason donovan - nothing can divide us.flv.MP3
Jason donovan - rain.flv.MP3
Jason Donovan - Too Many Broken Hearts (extended).mp3
Jefferson Starship - Sarah.mp3
Jefferson Starship - We Built This City.mp3
jethro tull too old to rock and roll too young to die.avi.MP3
jhonny hates jazz - dont say its love.avi.MP3
Jim Diamond - I Should Have Known Better.mp3
Jimmy Cliff icanseeclearlynow.mp3
Joaqu¡n Rodrigo - Fantas¡a para un Gentilhombre - Villano y .mp3
Joe cocker shelter me.MP3
Joelle Ursull - White and Black Blues.mp3
John Cougar Mellencamp - Hurts So Good.mp3
John Cougar Mellencamp - Jack and Diane.mp3
John Farnham - You're The Voice.mp3
John Lennon - Just like Starting over.mp3
John Parr - St. Elmo's Fire (Man in Motion).mp3
John Secada - µngel.mp3
John Waite - Missing You.mp3
johnny hates jazz - i don't want to be a hero.mp3
Johnny Hates Jazz - Shattered Dreams (extended).mp3
Johnny Lang y Wilson Pickett - Call Me.mp3
Johny Hates Jazz - Turn back the Clock.mp3
Jon Secada - If You Go.mp3
Jos‚ Carreras Turandot.avi.MP3
Jos‚ Luis Perales directo - Ay Coraz¢n directo.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - A M s de Mil Kil¢metros de T¡.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Amigo.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Ay Amor (con la participaci¢n de Mocedades).mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Brindaremos por l.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - C¢mo Ha Pasado el Tiempo.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - El Escultor y Ella.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - El Hombre y la Sirena.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - El Loco.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Entre T£ y Yo.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Hoy Me Acord‚ de T¡.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - La C rcel del Amor (con Ana Gabriel).mp3
Jos‚ Luis perales disco 30 Grandes Canciones - La Llamaban Loca.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - La M£sica.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Me Ir‚ Calladamente.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Mi éltimo Espectador.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Por Qu‚ esta Soledad (con Alejandro Fern ndez).mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Por Qu‚ Te Vas.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Si no Estuvieras T£.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - Supervivientes.mp3
Jos‚ Luis perales disco 30 Grandes Canciones - T£ como Yo.mp3
Jos‚ Luis Perales disco Amaneciendo en Ti - A Ti Mujer.mp3
Jos‚ Luis Perales disco Am‚rica - Am‚rica.MP3
Jos‚ Luis Perales disco Con el Paso del Tiempo - No Resulta F cil.mp3
Jos‚ Luis Perales disco Con el Paso del Tiempo - Que Canten los Ni¤os.mp3
Jos‚ Luis Perales disco El Preg¢n - A mi Padre.mp3
Jos‚ Luis Perales disco En Directo - 35 a¤os - Amada M¡a.mp3
Jos‚ Luis Perales disco En Directo - 35 a¤os - La Espera.mp3
Jos‚ Luis Perales disco Entre el Agua y el Fuego - Canci¢n de Oto¤o.mp3
Jos‚ Luis Perales disco Entre el Agua y el Fuego - Y C¢mo Es l.mp3
Jos‚ Luis Perales disco Gente Maravillosa - Amor sin L¡mite.mp3
Jos‚ Luis Perales disco La Espera - Amarte As¡.mp3
Jos‚ Luis Perales disco La Espera - Navidad.mp3
Jos‚ Luis Perales disco Me Han Contado que Existe un Para¡so - Para¡so.MP3
Jos‚ Luis Perales disco Nido de µguilas - Balada para una Despedida.mp3
Jos‚ Luis Perales disco Nido de µguilas - Te Quiero.mp3
Jos‚ Luis perales disco Qu‚date Conmigo - Qu‚date Conmigo.mp3
Jos‚ Luis Perales disco Sue¤o de Libertad - Me Gusta la Palabra Libertad.mp3
Jos‚ Luis Perales disco Tiempo de Oto¤o - Me Llamas.mp3
Jos‚ Luis Perales disco Tiempo de Oto¤o - Un Velero Llamado Libertad.mp3
Jos‚ Luis Perales single - Se Cans¢ de Esperar.mp3
Journey - Escape - Donït Stop believinï.mp3
Journey - Escape - Open Arms.mp3
Journey - Escape - Still They Ride.mp3
Journey - Escape - Whoïs crying now.mp3
Juan Luis Guerra - Quisiera Ser un Pez.mp3
Judy Garland - Somewhere Over The Rainbow.mp3
julioiglesias05-MOMENTOS.mp3
julioiglesias07-MANUELA (SPANISH).mp3
julioiglesias08-ALL OF YOU (DUET WITH DIANA ROSS).mp3
julioiglesias09-AE, AO.mp3
julioiglesias12-LA CARRETERA.mp3
julioiglesias13-LO MEJOR DE TU VIDA.mp3
julioiglesias19-ME VA, ME VA.mp3
Kajagoogoo - Too shy.mp3
Kate Bush - Running up that Hill.mp3
Keane - Everybodys Changing.mp3
Keane - Somewhere Only We Know.mp3
Keane - This Is The Last Time.mp3
Keane bend and break imagenes.avi.MP3
Kid Creole and the Coconuts - I'm a Wonderful Thing, Baby.mp3
Kiko Veneno - 06-Fuego.mp3
Kiko Veneno - chate un Cantecito - Echo de Menos.mp3
Killers - Bones.mp3
Kim Carnes - Bette Davis Eyes.mp3
King - Love and Pride.mp3
King - Taste of your Tears.mp3
Kylie - beet the devil you know.avi.MP3
Kylie Minogue - backintime.flv.MP3
Kylie Minogue - gottobecertain.flv.MP3
Kylie Minogue - I Should Be So Lucky.mp3
l-kan todo lo que no.flv.MP3
La casa azul- revoluci¢n sexuel.flv.MP3
La dama Nacho 04-Alamedas.mp3
La dama Nacho Goerna un_rio.wav.MP3
La Dama se Esconde disco Antolog¡a Completa single - A A¤os Luz.mp3
La Dama se Esconde disco Antolog¡a Completa single - Colecci¢name.mp3
La Dama se Esconde disco Antolog¡a Completa y Armarios y Camas - Tarde LLuviosa.mp3
La Dama se Esconde disco Antolog¡a Completa y Armarios y Camas - Un Error de Apreciaci¢n.mp3
La Dama se Esconde disco Antolog¡a Completa y Armarios y Camas- Amenazas.mp3
La Dama se Esconde disco Antolog¡a Completa y Avestruces - Un Avestruz.mp3
La Dama se Esconde disco Antolog¡a Completa y Avestruces - Un Regalo.mp3
La Dama se Esconde disco Antolog¡a Completa y Coge el Viento - Capturado.mp3
La Dama se Esconde disco Antolog¡a Completa y Coge el Viento - Desafi ndote.mp3
La Dama se Esconde disco Antolog¡a Completa y Coge el Viento - Princesa.mp3
La Dama se Esconde disco Antolog¡a Completa y Hoy - Fugaces.mp3
La Dama se Esconde disco Antolog¡a Completa y La Tierra de los Sue¤os - Cuatro Direcciones.mp3
La Dama se Esconde disco Antolog¡a Completa y La Tierra de los Sue¤os - La Tierra de los Sue¤os.mp3
La Dama se Esconde disco Antolog¡a Completa y La Tierra de los Sue¤os - Nunca He Entendido a las Sirenas.mp3
La Dama se Esconde disco Antolog¡a Completa y Lejos del Puerto - Ciudad Fuego.mp3
La Dama Se Esconde disco Hoy - Cant brico.mp3
La Dama Se Esconde disco Lejos del Puerto videoclip - No Tienen.mp3
La Frontera - En el L¡mite del Bien y del Mal.mp3
Las Ketchup - Asereje.mp3
las ni¤as - el mundo a mis pies.mp3
Laura Pausini - Entre T£ y Mil Mares.avi.MP3
Laura Pausini - La Soledad.mp3
Laura Pausini - Se Fue.mp3
La_guardia_nose.mp3
Lenny Kravitz heavenhelp.mp3
Leo Sayer - When I Need You.mp3
Level 42 - It's Over.mp3
Level 42 - Lessons In Love.mp3
Level 42 - Something About You.mp3
Level 42 - The Chinese Way.mp3
Level 42 - The Sun Goes down.mp3
Level 42 - To Be With You Again.mp3
Lightning Seeds - Lucky You.mp3
Limah - Neverending Story.mp3
Linda Mirada - San Valent¡n.mp4.MP3
Linkin Park - In The End.mp3
Lionel Richie - All Night Long.mp3
Lionel Richie - Hello.mp3
Lionel Richie - Penny Lover.mp3
Lionel Richie - Running With The Night.mp3
Lionel Richie - Say You Say Me.mp3
Lionel Richie - Stuck On You.mp3
Lionel Richie - You Are The Sun.mp3
Lionel Rtchie - Truly.mp3
Lisa Lisa and the Cult Jam - Head to Toe.mp3
Lloyd Cole & The Commotions - Forest Fire.mp3
Lloyd Cole & The Commotions - Perfect Skin.mp3
Lloyd Cole & The Commotions - Rattlesnakes.MP3
Lonnie gordon - happening all over again.flv.MP3
Los Brincos - Anduri¤a.mp3
Los Happines - AmoALaura.mpg.MP3
Los Locos - Algo Salvaje - cd 1 - As¡ Cayeron los Dados.mp3
Los Locos - Algo Salvaje - cd 2 - Alguien Trama lo Peor.mp3
Los Locos - Algo Salvaje - cd 2 - Camisa de Fuerza.mp3
Los Locos - Algo Salvaje - cd 2 - Lecci¢n de Baile (remix).mp3
Los Locos - Algo Salvaje - cd 3 - Cora.mp3
Los Pecos - Hablame de t¡.mp3
Los Pecos - Mentira para Dos.mp3
Los pecos - Y decir que te quiero.mp3
Los rebeldes - Dias de lluvia.mp3
Los Rebeldes- Bajo la Luz de la Luna.mp3
Los Refrescos - Aqui no hay playa.mp3
Los Rodr¡guez - Dulce condena.mp3
Los Secretos - Pero A Tu Lado.mp3
Los Secretos y CIA - D‚jame.mp3
losmitos_esmuyf cil.AVI.MP3
lossencillos doctor amor.mp3
Luis Aguil‚ directo.avi.MP3
Luther Vandross - Give Me The Reason.mp3
Luz Casal - 02-Te Dej‚ Marchar.mp3
Luz Casal - 04-Amigo M¡o.mp3
Luz Casal - 07-Es Como Es.mp3
Luz Casal - 08-No Me Importa Nada.mp3
Madness - Michael Caine.mp3
Madonna - Angel (Extended).mp3
Madonna - badgirl.flv.MP3
Madonna - Cherish.mp3
Madonna - Crazy For You.mp3
Madonna - Express Yourself.mp3
Madonna - Get Into The Groove.mp3
Madonna - Holiday.mp3
Madonna - Justify My Love.mp3
Madonna - La Isla Bonita.mp3
Madonna - Like A Virg¡n.mp3
Madonna - likeprayer.flv.MP3
Madonna - Live To Tell.mp3
Madonna - Lucky Star.mp3
Madonna - Material Girl.mp3
Madonna - Open Your Heart.mp3
Madonna - Papa donït Preach.mp3
Madonna - Rain.mpg.MP3
Madonna - Secret.mp3
Madonna - Take A Bow.mp3
Madonna - True Blue.mp3
Madonna - Vogue.mp3
Madonna - Who's That Girl.mp3
madre del topo - mariposas.flv.MP3
Maercury Rev - inafunnyway.flv.MP3
Manic Street Preachers - Motorcycle Emptiness.mp3
manos de topo es feo.mp4.MP3
Mariah Carey -  Without You.mp3
Mariah Carey - All I Want For Christmas Is You.mp3
Mariah Carey - Dreamlover.mpg.MP3
Mariah Carey - Emotions.mp3
Mariah Carey - I'll Never Forget You.mp3
marillion_kayleigh.avi.MP3
Maritrini - Algo As¡.mp3
Maritrini - Decir.mp3
Maritrini - El Alma no Vender‚.mp3
Maritrini - Si no Te Vas con la Tarde.mp3
Marvin Gaye - Sexual healin.MP3
Marvin Gaye - What's Going On.mp3
Mar¡a Dolores Pardera Carlos Cano-A las 5 de un 5 de Junio.mp3
Mar¡a Dolores Pardera Carlos Cano-Habaneras de C diz.mp3
Mar¡a Isabel - Antes Muerta que Sencilla.mp3
Matt Bianco - Half A Minute.mp3
Matthew Wilder - Break My Stride.mp3
Meat Loaf - I would Do Anything for Love.mpg.MP3
Meat Loaf - Rock' N Roll Dreams.asf.MP3
Mecano - 7 de Septiembre.mp3
Mecano - Aire.mp3
Mecano - Alfonsina y el Mar.mp3
Mecano - Ay Dalai.mp3
Mecano - Barco a Venus.mp3
Mecano - Cruz de Navajas.mp3
Mecano - Dal¡.mp3
Mecano - Droga.mp3
Mecano - Estereosexual.mp3
Mecano - Fiesta.mp3
Mecano - Hawai Bombay.mp3
Mecano - Hijo de la Luna.mp3
Mecano - Hoy no me puedo Levantar.mp3
Mecano - La Fuerza del Destino.mp3
Mecano - La Llama de la Libertad.mp3
Mecano - La Tortilla da la Vuelta.mp3
Mecano - Me Cuesta tanto Olvidarte.mp3
Mecano - Mujer contra Mujer.mp3
Mecano - Mundo Futuro.mp3
Mecano - No Es Serio este Cementerio.mp3
Mecano - No hay Marcha en Nueva York.mp3
Mecano - No me Mires.mp3
Mecano - Pasado.mp3
Mecano - Perdido.mp3
Mecano - Un a¤o m s.mp3
Mecano - Una Rosa.mp3
Mecano - Yo ya no s‚.mp3
Mel Brooks - It's Good to be the King.mp3
Men At Work - Land Down Under.mp3
Men At Work - Who Can It Be now.mp3
Mercury Rev - Black Forest (lorelei).mp3
Mercury y Caball‚ - Barcelona.mp3
Mezzoforte - Garden Party.mp3
Michael Jackson - Black or White.mp3
Michael Jackson - I Wanna Rock With You.mp3
Michael Jackson - Just can't stop lovin' you.mp3
Michael Jackson - Man In The Mirror.mp3
Michael Jackson - Off The Wall.mp3
Michael Jackson - The Way You Make Me Feel.mp3
Michael Sembelo - She's A Maniac.mp3
Midge Ure - Breathe.mp3
Miguel Bos‚ - autoradio.flv.MP3
Miguel Bos‚ - May Day.avi.MP3
Miguel Bos‚ - Morena M¡a.mp3
Miguel Bos‚ - Sevilla.mp3
Miguel Bos‚ - Si T£ no Vuelves.mp3
Miguel Bos‚ - tesoro.flv.MP3
Miguel Bos‚ y Ana Torroja - duende.flv.MP3
Miguel Bos‚ y Paulina Rubio - nena.flv.MP3
Miguel mateos - obsesion.mp3
Mika - Grace Kelly.flv.MP3
Mike And The Mechanics - All I Need Is A Miracle.mp3
Mike and The Mechanics - Silent Running --Can you hear me-.mp3
Mike and the Mechanics - The Living Yeras.mp3
Mike and the Mechanics directo - Over my Shoulder.mp3
Mike Oldfield - Etude.mp3
Mike Oldfield - Family man.mp3
Mike Oldfield - Five miles out.mp3
Mike Oldfield - Foreign Affair.mp3
Mike Oldfield - Heavenïs open.mp3
Mike Oldfield - In dulci jubilo.mp3
Mike Oldfield - Incantation (Part four excerpt).mp3
Mike Oldfield - Innocent.mp3
Mike Oldfield - Islands.mp3
mike oldfield - magic touch.avi.MP3
Mike Oldfield - Moonlight shadow.mp3
Mike Oldfield - Pictures in the dark.mp3
Mike Oldfield - Shadow on the wall.mp3
Mike Oldfield - To France.mp3
Mike oldfield Y Carlos Finaly grandes La Campana.mp3
mike reno ann wilson almost paradise.mp4.MP3
Mikel Erentxun - Suelta Las Riendas.mp3
Mina y Celentano - acqua e sale.avi.MP3
Miranda - Perfecta.MP3
Mocedades - Am‚rica rara.mp3
Mocedades - S¡lbame (completa).mp3
Mocedades - Willy Fog rara.mp3
Mocedades Y Nino Bravo - Am‚rica.mp3
Monano y su Banda - aldeaarce.MP3
Moody Blues - Nights In White Satin.mp3
Mr. Mister - Kyrie.mp3
Nacha Pop - La chica de ayer.mp3
Neil Young - Heart of Gold.mp3
New Kids On The Block - Step By Step.mp3
New Order - Bizarre Love Triangle (Extended Dance Mix).mp3
Nick Heyguard - Weezer than the Wind.mp3
Nick Kershaw - somebodyloveyou.mp3
Nick Kershaw - The Riddle.mp3
Nick Kershaw - wideboy.mp3
Nick Kershaw - Wouldn't It Be Good.mp3
Nick Kershaw y Toni Banks - changethescore.mp3
Nina Simone - My Baby Just Cares for Me.mp3
Nino Bravo - Noelia.Mp3
Oasis - Hindu Times.mp3
Oasis - wonderwall.avi.MP3
Objetivo Birmania - Desidia.mp3
Objetivo Birmania - Todos los Hombres Son Iguales.mp3
OBK - El Cielo no Entiende.mp3
OBK - Robarle al Tiempo.mp3
omd - dream of me.avi.MP3
OMD - dreaming.MP3
Omd - Joan of Arc.mp3
omd - milky way.avi.MP3
Omd - Souvenir.mp3
omd secrets.avi.MP3
omd so in love.avi.MP3
ORCHESTRAL MANOEUVRES IN THE DARK _ IF YOU WANT IT.mp3
Pablito Ruiz - Ella Me Ha besado.mp3
Paloma San Basilio - Juntos.mp3
Paloma San Basilio - La Hiedra.mp3
Paloma San Basilio - Luna De Miel.mp3
Paloma San Basilio - Por Culpa de Una Noche Enamorada.mp3
Pasadenas - Riding On A Train.mp3
Pat Benatar - We Belong.mp3
Pat y Mik - kichibari.flv.MP3
Pato de Goma - Chicos Malos.mp3
Patti Austin & James Ingram - Baby Come To Me.mp3
Paul maccartneyranas.avi.MP3
Paul McArtney - From a Lover to a Friend.mp3
Paul McArtney - No More Lonely Nights.mp3
Paul Young - Come Back And Stay.mp3
Paul Young - Every Time You Go Away.mp3
Paul Young - Wherever I Lay my Hat.mp3
Paula Abdul - Straight Up.mp3
Pearl Jam - Animal.mp3
Pedro Guerra - Debajo del puente.mp3
Pet losing mind ultimix.avi.MP3
Pet Shop Boys - Being Boring.mp3
Pet Shop Boys - How Can You Expect.mp3
Pet Shop Boys disco Actually - Always on My Mind.mp3
Pet Shop Boys disco Actually - It's a Sin.mp3
Pet Shop Boys disco Actually - Rent.mp3
Pet Shop Boys disco Actually - What Have I Done to Deserve This.mp3
Pet Shop Boys disco Introspective - Domino Dancing.mp3
Pet Shop Boys disco Please - Love Comes Quickly.mp3
Pet Shop Boys disco Please - West End Girls.mp3
Pet Shop Boys disco Release - Home and Dry.mp3
Pet Shop Boys disco Very - Liberation.mp3
Pet Shop Boys mezclas - Left to My Own Devices (maxisingle).mp3
Pet Shop Boys videoclip - Heart.MP3
Peter Cetera - Glory of Love.mp3
Peter Cetera y Amy Grant - Next Time I Fall in Love.mp3
Peter Gabriel red Rain.mp3
pgabhits04-AudioTrack 04.mp3
pgabhits05-AudioTrack 05.mp3
pgabhits10-AudioTrack 10.mp3
pgabmiss08-AudioTrack 08.mp3
phil - head held right.avi.MP3
Phil Collins - Another Time.avi.MP3
Phil Collins - Both Sides of the Story maqueta.avi.MP3
Phil Collins and Anthony Philips and Mike Rutherford - Wich Way the Wild Blows.mp4.MP3
Phil Collins Big Band directo - After You've Gone.mp4.MP3
Phil Collins bso Against All Odds - Against All Odds.mp3
Phil Collins bso brother Bear - En Marcha Estoy.mp3
Phil Collins bso brother Bear - Look Through My Eyes.mp3
Phil Collins bso brother Bear - There's No Way Out.mp3
Phil Collins bso Buster - 2 Hearts.mp3
Phil Collins bso Buster- A Groovy Kind of Love.mp3
Phil Collins bso Tarz n 1 - Everything That I Am (directo).mp3
Phil Collins bso Tarz n 1 - Strangers Like Me.mp3
Phil Collins bso Tarz n 1 - You'll Be In My Heart.mp3
Phil Collins bso White Nights D£o - Separate Lives (con Marilyn Martin).mp3
Phil Collins directo - Can't Turn Back the Years.mp4.MP3
Phil Collins directo - Find a Way to My Heart.mp3
Phil Collins directo - Helpless Heart.mp4.MP3
Phil Collins directo - Least You Can Do.mp3
Phil Collins directo - Wear my Hat.mp3
Phil Collins directo 1 - One More Night.mp4.MP3
Phil Collins directo d£o - The Same Moon (directo, con Laura Pausini).mp3
Phil Collins directo Perkins Palace 1982 venta 1984 - I Cannot Believe It's True.mp3
Phil Collins disco 12ers - Don't Lose My Number (12'' Mix).mp3
Phil Collins disco 12ers - One More Night (12'' Mix).mp3
Phil Collins disco 12ers - Take Me Home (12'' Mix).mp3
Phil Collins disco Both Sides- Both Sides of the Story.mp3
Phil Collins disco Both Sides- Canït Turn Back the Years.mp3
Phil Collins disco Both Sides- Everyday.mp3
Phil Collins disco Both Sides- Iïve Been Trying.mp3
Phil Collins disco Both Sides- Please Come Out Tonight.mp3
Phil Collins disco Both Sides- Survivors.mp3
Phil Collins disco Both Sides- Thereïs a Place for Us.mp3
Phil Collins disco Both Sides- We Fly So Close.mp3
Phil Collins disco Both Sides- We Wait and We Wonder.mp3
Phil Collins disco Both Sides- Weïre Sons of Our Fathers.mp3
Phil Collins disco But Seriuously - All of My Life.mp3
Phil Collins disco But Seriuously - Do You Remember.mp3
Phil Collins disco But Seriuously - Father to Son.mp3
Phil Collins disco But Seriuously - Find a Way to My Heart.mp3
Phil Collins disco But Seriuously - I Wish It Would Rain Down.mp3
Phil Collins disco But Seriuously - Something Happened on The Way to Heaven.mp3
Phil Collins disco But Seriuously - That's Just the Way It Is.mp3
Phil Collins disco Dance Into the Light - Dance Into the Light.mp3
Phil Collins disco Dance Into the Light - It's in Your Eyes.mp3
Phil Collins disco Dance Into the Light - Love Police.mp3
Phil Collins disco Dance Into the Light - No Matter Who.mp3
Phil Collins disco Dance Into the Light - The Same Moon.mp3
Phil Collins disco Dance Into the Light - The Times They Are A-Changing.mp3
Phil Collins disco face Value - Hand in Hand.mp3
Phil Collins disco face Value - I Missed Again.mp3
Phil Collins disco face Value - If Leaving Me Is Easy.mp3
Phil Collins disco face Value - In the Air Tonight.mp3
Phil Collins disco face Value - Thunder and Lightning.mp3
Phil Collins disco Going Back - Heathwave.mp3
Phil Collins disco Going Back - Never Dreamed You'd Leave in Summer.mp3
Phil Collins disco Going Back - Uptight.mp3
Phil Collins disco Hello, I Must Be Going - Do You Know, Do You Care .mp3
Phil Collins disco Hello, I Must Be Going - Don't Let Him Steal Your Heart.mp3
Phil Collins disco Hello, I Must Be Going - I Don't Care Anymore.mp3
Phil Collins disco Hello, I Must Be Going - It Doesn't Matter to Me.mp3
Phil Collins disco Hello, I Must Be Going - Like China.mp3
Phil Collins disco Hello, I Must Be Going - Thru These Walls.mp3
Phil Collins disco Love Songs, a Compilation - Always (Live).mp3
Phil Collins disco Love Songs, a Compilation - Somewhere.mp3
Phil Collins disco No Jacket Required - Doesn't Anybody Stay Together Anymore.mp3
Phil Collins disco No Jacket Required - I Don't Wanna Know.mp3
Phil Collins disco No Jacket Required - Inside Out.mp3
Phil Collins disco No Jacket Required - Long Long Way to Go.mp3
Phil Collins disco No Jacket Required - One More Night.mp3
Phil Collins disco No Jacket Required - Sussudio.mp3
Phil Collins disco No Jacket Required - Take Me Home.mp3
Phil Collins disco No Jacket Required - We Said Hello Goodbye.mp3
Phil Collins disco Testify - Can't Stop Loving You.mp3
Phil Collins disco Testify - Get Started.mp3
Phil Collins disco Testify - Swing Low.mp3
Phil Collins disco Testify - Testify.mp3
Phil Collins disco Testify - Thru My Eyes.mp3
phil collins maqueta - everyday.mp4.MP3
Phil Collins single - The Man with the Horn.mp3
Phil Collins single - You've Been in Love.mp3
Phil Collins single d£o - Easy Lover (con Philip Bailey; del disco de Philip Bayley).mp3
Phil Collins videoclip - All of My Life.mp3
Phil Collins videoclip - True Colors (la versi¢n m s agradable de Phil, con diferencia).mp3
Phil Collins videoclip - Wake Up Call.mp3
Phil Collins y Frida - Here We'll Stay.mp4.MP3
phil demo - same moon.avi.MP3
phil demo do you remember.avi.MP3
phil demo i wish.avi.MP3
phil demo something happened.avi.MP3
Phil fearon.flv.MP3
phil Flaming Youth directo disco Ark 2 - Changes.mp3
phil Flaming Youth directo disco Ark 2 - Earthglow.mp3
phil Flaming Youth disco Ark 2 - Planets 1.mp3
phil forafriend.avi.MP3
phil hero.avi.MP3
phil high fly angel.avi.MP3
phil Simon Collins disco All of Who You Are - Pride.mp3
phil Simon Collins disco U-Catastrophe - Powerless.mp3
phil Simon Collins disco U-Catastrophe - Unconditional.mp3
phil take me with you.avi.MP3
Pimpinela - D¢nde Est n los Hombres.mp3
Pimpinela y Dyango - Ese Hombre.mp3
Pink Floyd - Arnold Layne.mp3
Pink Floyd - High Hopes.mp3
Pink Floyd - Learning to Fly.mp3
Pixies - Velouria.mp3
Plastic Ono Band - Happy Christmas.mp3
Pointer Sisters - Automatic.mp3
Poison - Every Rose Has Its Thorn.mp3
Police - Every breath you take.mp3
Police - Every Little Thing She Does Is Magic.mpg.MP3
Police - King of pain.mp3
Police - Message in a bottle.mp3
Police - Spirits in the material World.mp3
Police - Tea in The Sahara.mp3
Police - Walking on the Moon.mp3
Police - Wrapped around your finger.mp3
Prefab Sprout - disco Let's Change the World with Music - Earth The Story So Far.mp3
Prefab Sprout - disco Let's Change the World with Music - Falling in Love.mp3
Prefab Sprout - disco Let's Change the World with Music - God Watch Over You.mp3
Prefab Sprout - disco Let's Change the World with Music - I Love Music.mp3
Prefab Sprout - disco Let's Change the World with Music - Last of the Great Romantics.mp3
Prefab Sprout - disco Let's Change the World with Music - Let There Be Music.mp3
Prefab Sprout - disco Let's Change the World with Music - Music Is a Princess.mp3
Prefab Sprout - disco Let's Change the World with Music - Ride.mp3
Prefab Sprout - The Sound of Crying.avi.MP3
Prefab Sprout disco Andromeda heights - Andromeda Heights.mp3
Prefab Sprout disco Andromeda heights - Avenue of Stars.mp3
Prefab Sprout disco Andromeda heights - Electric Guitars.mp3
Prefab Sprout disco Andromeda heights - Lifeïs a Miracle.mp3
Prefab Sprout disco Andromeda heights - Prisoner of the Past.mp3
Prefab Sprout disco Andromeda heights - Swans.mp3
Prefab Sprout disco Andromeda heights - Weightless.mp3
Prefab Sprout disco From Langley Park to Memphis - Cars And Girls.mp3
Prefab Sprout disco From Langley Park to Memphis - Hey Manhattan!.mp3
Prefab Sprout disco From Langley Park to Memphis - The King of Rock 'n Roll.mp3
Prefab Sprout disco Jordan the Comeback - We Let the Stars Go.mp4.MP3
Prefab Sprout disco Steve McQueen - When Love Breaks Down.mp3
Prefab Sprout video - Cawboy Dreams.avi.MP3
Prefab Sprout video - I Remember That.avi.MP3
Pretenders - 2000 Miles.mp3
Pretenders - Brass In Pocket.mp3
Pretenders - Don't Get Me Wrong.mp3
Pretenders - Stop your Sobbing.mp3
Primal Scream - Jailbird.mp3
Prince - Gold.mp3
Prince - I would Die for You.mp3
Prince - If I Was your Girlfriend.mp3
Prince - Kiss.mp3
Prince - Pop Life.mp3
Prince - Raspberry Beret.mp3
Prince - The Most Beautiful Girl in the World.mp3
Prince - When Doves Cry.mp3
Prince and Nona Gaye - Love Sign.mp3
Prince and Sheena Easton - You've Got The Look.mp3
Prince morningpapers.mp3
Psychedelic Furs - Heaven.mp3
Psychedelic Furs - The Ghost In You.mp3
Pulp - A Walk.mp3
Pulp - Conmon People.mp3
Pulp - I Spy a Boy.mp3
Pulp - Pencil Skirt.mp3
Pulp - She Doesïnt Have to Go to Work.mp3
Pulp - Something Changed.mp3
Pulp - Tomorrow Morning.mp3
Pulp - Your House Was very Small.mp3
Pulp - Your Underwear.mp3
Queen - Friends Will Be Friends.mp3
Queen - The Show Must Go On.mp3
Quinta estacion - sueniosrotos.flv.MP3
Quique Gonz lez - ciudadviento.flv.MP3
Qun Qun - Y Bail‚ Con El Pecado.mp3
Rafael Farina - Sendas del viento.mp3
Rah Band - Sorry Doesn't Make It anymore.mp3
Re-flex - The Politics of Dancing.mp3
Real macoy - love.flv.MP3
Real Macoy -itsonyou.flv.MP3
Real McCoy - Another Night.mp3
Red Hot Chili Peppers - Soul to Squeeze.mpg.MP3
Regina Belle and Peabo Bryson - A Whole New World.mp3
REM - All the Way to Reno.mp3
REM - Imitation Of Life.mp3
REM - Loosing My Religion.mp3
REM - Man On The Moon.mp3
REM - Shiny Happy People.mp3
REM - What's The Frequency Kenneth.mp3
renegade 3 fase 3 medieval.mp3
Rev¢lver - Como énico Equipaje.mp3
Rev¢lver - Dentro de T¡.mp3
Rev¢lver - El Roce de tu Piel.mp3
Rev¢lver - Esclavo de tu Amor.mp3
Rev¢lver - Si s tan S¢lo Amor.mp3
Rev¢lver - siestansoloamor.avi.MP3
Rev¢lver - Tu Noche y la M¡a.mp3
Richard cleiderman adelina.mp3
Richard Marx Angelia.mp3
Rick Astley - Never Gonna Give You Up .mp3
Rick Astley - takemetoyourheart.flv.MP3
Rick Astley - Together Forever.mp3
Rick Astley - Whenever You Need Somebody.mp3
Righeira - notengodinero.flv.MP3
Rix 06 MonSanta Garmendia.mp3
Rix 06_Como el ganado.mp3
Rix 08_Despierta.mp3
Rix 12 Mi gente.mp3
Rix 12_Los ni¤os, los arboles y los ancianos.mp3
Rix 13 Yo s¡ s‚ lo que quiero.mp3
Rix 14_Farmacia vs. Medicina.mp3
Rix 15_Network.mp3
Rix 16_Enemigo.mp3
Rix 18_Sapiens.mp3
Rix 19_Aburridos.mp3
Rix 20_Dime.mp3
Rix 24_Esto no es un videojuego.mp3
Rix 27_Somos la voz.mp3
Robert Palmer - You Ought To Know By Now.mp3
Roberto Carlos - Amigo.mp3
Roberto Carlos - La Distancia - Roberto Carlos En Espanol [1988] - 06.mp3
Roberto carlos - lady laura.mp3
Roberto Carlos - Yo Quisiera Ser Civilizado Como Los Animales el progreso.mp3
Roberto Carlos-Un millon de Amigos.mp3
Rod Stewart - Every Beat Of My Heart.mp3
Rosario Flores - Qu‚ Bonito.mp3
Rosario Flores y Antonio Vega - En el Mismo Lugar.mp3
Roxette - It must have been love.mp3
Roxette - Listen to your heart.mp3
Roxette - The look.mp3
Roxy Music - Jealous Guy.mp3
roxy music - old scene.avi.AVI.MP3
Roxy Music avalon.mp3
roxy music more than this.avi.AVI.MP3
Rubi y los Casinos - Te Podr.mp3
Rupert Holmes - him.flv.MP3
Rupert Holmes - The Pi¤a Colada Song.mp3
Rxi 05 Ni¤os S.A..mp3
Ryan Adams - Anybody Wanna Take Me Home.mp3
Ryan Adams - Hotel Chelsea Nights.mp3
Ryan Adams - I See Monsters.mp3
Ryan Adams - Love Is Hell.mp3
Sade - The Sweetest Taboo.mp3
salvarez - si no tienes dinero.mp3
Sam Cooke - What a Wonderful World It Would Be.mp3
Samantha Fox - stopmenow.flv.MP3
Santuario - El mismo de ayer.mp3
Santuario - La puerta del Placer [Spanish Techno Pop'93 by G.mp3
Santuario - No volver s.mp3
saw packjammed.flv.MP3
Scissor Sisters - It Canït Come quickly enough.mp3
Scissor Sisters - Mary.mp3
Scissor Sisters - Return to Oz.mp3
Scissor Sisters - Take your Mama.mp3
Scritti Politti - Absolute.mp3
Scritti Politti - Wood Beez.mp3
Seal - Killer.MP3
Seal - Prayer For The Dying.mp3
Semen up - Lo est s haciendo muy bien.mp3
Sergio Dalma - Bailar Pegados.mp3
Sergio Rivero - Sandy (Directo).mp3
Shakira - Suerte.mp3
Siete 7 Black - Somos el Futuro.mp3
Siete 7 Black - Te Quedas o te Vas.mp3
Simple Minds - Alive And Kicking.mp3
Simple Minds - All The Things She Said.mp3
Simple Minds - Ghost Dancing.mp3
Simple Minds - Someone, somewhere, in Summer Time.mp3
Simple Minds - Waterfront.mp3
Simpleminds - Promised You a Miracle.mp3
Simply Red - If You Don't Know Me By Now.mpg.MP3
Simply Red directo - Say You Love Me.MP3
Simply Red disco A New Flame - It's Only Love.mp3
Simply Red disco Blue - The Air That I Breathe.mp3
Simply Red disco Home - Sunrise.MP3
Simply Red disco Life - Fairground.mp3
Simply Red disco Life - Never Never Love.mp3
Simply Red disco Men and Women - Every Time We Say Goodbye.mp3
Simply Red disco Men and Women - Infidelity.mp3
Simply Red disco Men and Women - The Right Thing.mp3
Simply Red disco Picture Book - Heaven.mp3
Simply Red disco Picture Book - Hericho.mp3
Simply Red disco Picture Book - Holding Back the Years.mp3
Simply Red disco Stars - For Your Babies.mp3
Simply Red disco Stars - Something Got Me Started.mp3
Simply Red disco Stars - Stars.mp3
Simply red fake.avi.MP3
Simply Red mezclas - Come to My AID (mezclas japonesas, Survivor Mix).MP3
Sinead O'Connor - Nothing Compares To You.mp3
sinitta - cross_my_broken_heart.flv.MP3
sinitta - gto.flv.MP3
sinitta - miracles.flv.MP3
Sinitta - toyboy.flv.MP3
Small Faces - My Mindïs Eye.mp3
Small Faces - Runaway.mp3
Small Faces - Take this Hurt off Me.mp3
Small Faces - Tell Me Have You ever Seen Me.mp3
Snap - Believe The Hype.mp3
Snap - Mary Had A Little Boy.mp3
Snap - Oops Up.mp3
Snap - Rhythm Is A Dancer.mp3
Snap - The Power.mp3
Sofia Vossou - Anixi.mp3
Soft Cell - Bedsitter.mp3
Soft Cell - Torch.mp3
Soft Cell - What.mp3
Sole jimenez silba.flv.MP3
sonia - endworld.flv.MP3
sonia - listen.flv.MP3
Sonia - neverstopme.flv.MP3a.mp3
Spagna - Call Me.avi.MP3
Spagna - Easy Lady.mp3
Spandau Ballet - Gold.mp3
Spandau Ballet - Only When You Leave.mp3
Spandau Ballet - Through The Barricades.mp3
Spandau Ballet - True.mp3
Spandau Ballet 2009 Barricades.avi.AVI.MP3
Spandau_ballet - I'll Fly for You.mp3
Status Quo - In the Army now.mp3
Status Quo - Rollin' Home.mp3
Status Quo - The Wanderer.mp3
Steve Miller Band Give It Up.mp3
Steve Winwood - Back In The High Life Again.mp3
Steve Winwood - Higher Love.mp3
Steve Winwood - Roll With It.mp3
Steve Winwood - Valerie.mp3
Steve Winwood - While You See a Chance.mp3
Stevie Wonder - I Just Called To Say I Love You.MP3
Stevie Wonder - Part Time Lover.mp3
Stevie Wonder - That Girl.mp3
Stevie Wonder - That's What Friends Are For.mp3
Sting - Englishman in New York.mp3
Sting - Fields Of Gold.mp3
Sting - If I Ever Lose My Faith In You.mp3
Sting - Shape of my Heart.mp3
Stone Temple Pilots - Vasoline.mpg.MP3
Stranglers alwaysthesun.mp3
Style Council - Have You Ever Had It Blue - Entera.mp3
Style Council - It Didn't Matter.mp3
Style Council - Long Hot Summer.mp3
Style Council - Shout to the T.mp3
Style Council - Speak Like A Child.mp3
Style Council - thebestthing.flv.MP3
Style Council - wanted.flv.MP3
Suede - So Young.avi.MP3
Supertramp - It's Raining Again.mp3
Swing Out Sister - Breakout.mp3
Swing Out Sister - Surrender (extended).mp3
Take That - Back For Good.mp3
Take That - Pray.mp3
Talk 01-It's You.mp3
Talk 04-It's My Life.mp3
Talk 05-My Foolish Friend.mp3
Talk 05-Such A Shame.mp3
Talk 08-Does Caroline Know.mp3
Talk Mark Hollis disco Mark Hollies - Colour of Spring.mp3
Talk Talk - ibelieveinyouextended.flv.MP3
Talk Talk disco Laughing Stock - Runeii.mp3
Talk Talk disco Spirit of Eden - Inheritance.mp3
Talk Talk disco The Very Best y single - For What Itïs Worth.mp3
Talk Talk disco The Very Best y single - John Cope.mp3
Talk Talk disco The Very Best y Spirit of Eden - Eden.mp3
Talk Talk disco The Very Best y Spirit of Eden - I Believe in You.mp3
Talk Talk disco The Very Best y Spirit of Eden - Wealth.mp3
Talk Talk disco The Very Best y Talk Talk - Have You Heard the News.mp3
Talk Talk disco The Very Best y Talk Talk - Talk, Talk.mp3
Talk Talk disco The Very Best y Talk Talk - Today.mp3
Talk Talk disco The Very Best y The Colour of Spring - April the 5th.mp3
Talk Talk disco The Very Best y The Colour of Spring - Give It Up.mp3
Talk Talk disco The Very Best y The Colour of Spring - Lifeïs What You Make It.mp3
Talk Talk disco The Very Best y The Colour of Spring - Living in Another World.mp3
Talk Talk disco The Very Best y The Colour of Spring - Time, Itïs Time.mp3
Talk Talk disco The Very Best y The Party's Over - Dum Dum Girl.mp3
Talk Talk disco The Very Best y The Party's Over - Itïs My Life.mp3
Talk Talk disco The Very Best y The Party's Over - Such a Shame.mp3
Talking Heads - Burning Down The House.mp3
Tanita Tikaram - Good Tradition.mp3
Tears for Fears - Advice for the Young at Heart.mp3
Tears For Fears - Change.mp3
Tears For Fears - Everybody Wants to Rule the World.mp3
Tears For Fears - Head Over Heels.mp3
Tears For Fears - Mad World.mp3
Tears For Fears - Pale Shelter.mp3
Tears For Fears - Shout.mp3
Tears For Fears - Woman In Chains.mp3
Tenesse - La Vi Correr.mp3
Tequila - Mira esa chica.mp3
Tequila - N£mero uno.mp3
Terence Trent D'Arby - If You Let Me Stay.mp3
Terence Trent D'Arby - Sign Your Name.mp3
Terence Trent D'Arby - Wishing Well.mp3
Texas - You Owe It All To Me.mp3
The Assembley - It Never Happens To Me.mp3
The Bluebells - Young at Heart.mp3
The Cure - Close To Me.mp3
The Cure - Cut Here.mp3
The Cure - Friday I'm In Love.mp3
The Cure.- With You.avi.MP3
The Damned - Eloise.mp3
The Farm - All Together Now.mp3
The Romantics - Talking in your Sleep.mp3
The Smiths disco Singles single - Heaven Knows Iïm Misserable Now.mp3
The Smiths disco Singles single - Panic.mp3
The Smiths disco Singles single - Shoplifters of the World Unite.mp3
The Smiths disco Singles single - William, It Was Really Nothing.mp3
The Smiths disco Singles y Meat Is Murder - That Joke Isnït Funny Any More.mp3
The Smiths disco Singles y Strangeways, Here We Come - Girlfriend in a Coma.mp3
The Smiths disco Singles y The Queen Is Dead - The Boy with the Thorn in His Side.mp3
The Smiths disco Singles y The Queen Is Dead - There Is a Light That Never Goes Out.mp3
The Smiths disco Singles y The Smiths - This Charming Man.mp3
The Smiths disco Singles y The Smiths - What Difference Does It Make!.mp3
The Smiths Morrisey - I'm so Sorry.mp3
The Stranglers - European Female.mp3
The The - Perfect day (Single de 12 Pulgadas).mp3
The The - This Is The day.mp3
Thompson Twins - Hold Me Now (extended).mp3
Thompson Twins - Love on your Side.mp3
tim mcgraw - my little girl.avi.MP3
Timbiriche - corrovuelomeacelero.flv.MP3
Tina Turner - Break Every Rule.mp3
Tina Turner - Simply the Best.mp3
Tina Turner - Two People.mp3
Tina Turner - Typical Male.mp3
Tina Turner - We Don't Need another Hero (Extended).mp3
Tina Turner - What's Love Got To Do With It.mp3
TLC - No Scrubs.mp3
Toad the Wet Sprocket - When Will We Fall Down.mp3
Tokens - The Lion Sleeps tonight.mp3
Tom Petty Free Falling.mp3
Tone Loc - Funky Cold Medina.mp3
Toni Braxton - Another Sad Love Song.mpg.MP3
Toni Braxton - Breathe Again.mp3
Toni Braxton - You Mean The World To Me.mp3
Tony Bennett - I Left My Heart in San Francisco.mp3
Topogiggio - Hasta Ma¤ana.avi.MP3
Toto - Africa.mp3
Toto - Holyanna.avi.MP3
Toto ¡ll be over you.mp4.MP3
tpau - ch.avi.MP3
tpau heart and soul.avi.MP3
Travis - Side.mp3
Travis - Sing.mp3
Travis - Why Does It Always Rain On Me.mp3
Two Unlimited - Faces.mp3
Two Unlimited - The Real Thing.mp3
tzaboo qui‚n soy.mp3
U2 & Johnny Cash - The Wanderer.mp3
U2 -  Even Better Than The Real Thing.mpg.MP3
U2 - Angel of Harlem.mp3
U2 - Babyface.mp3
U2 - Daddy's Gonna Pay For Your Crashed Car.mp3
U2 - Desire.mp3
U2 - I still havenït found what Iïm looking for.mp3
U2 - Lemon.mp3
U2 - New York.mp3
U2 - Pride.mp3
U2 - Some Days Are Better Than Others.mp3
U2 - Stay (Far Away, So Close).mp3
U2 - Sunday bloody sunday.mp3
U2 - The Fly.mp3
U2 - Where the streets have no name.mp3
U2 - With or without you.mp3
UB40 - Falling In Love With You.mp3
UB40 - Higher Ground.mp3
Ultravox - Dancing With Tears In My Eyes.mp3
Ultravox - Hymn.mp3
Ultravox - If I Was.mp3
Ultravox - Reap the Wild Wind.mp3
Ultravox - Vienna.mp3
Van bran 2000 - drinkingLA.flv.MP3
Van Hallen - Jump.mp3
vanexxa - superguay.flv.MP3
Vangelis - Chariots Of Fire.mp3
vega - mejor ma¤ana.avi.MP3
Vega quierosertu.flv.MP3
Veronica - besame_ya.flv.MP3
Victor Manuel - S¢lo Pienso en T¡.mp3
Video Kids - Woodpeckers from Space.mp3
Viola Wills - Gonna Get Along without You Now.mp3
Visage - Fade to Grey.MP3
Vivaldi 4 estaciones01.mp3
Vivaldi 4 estaciones03.mp3
Vivaldi 4 estaciones10.mp3
Vivaldi 4 estaciones11.mp3
V¡ctor Coyote - Jaguarundi.mp3
Wet Wet Wet - Angel Eyes.mp3
Wet Wet Wet - Temptation.mp3
Wet Wet Wet - With A Little Help From My Friends.mp3
Wet, Wet, Wet - Wishing I Was Lucky.mp3
Wham - Freedom.mp3
Wham - Last Christmas.mp3
Wham - The edge of Heaven.mp3
White Snake - Is This Love.mp3
Whitney Houston - I Get So Emotional.mp3
Whitney Houston - I Wanna Dance With Somebody.mp3
Whitney Houston - Where Do Broken Hearts Go.mp3
Wilfred y La Ganga - Mi Abuela.mp3
Wilson Philips - Hold On.mp3
Wilson Philips - Release Me.MP3
Win Mertens - Close Cover.mp3
Witney Houston - Saving all my Love for You.mp3
Yazz and the Plastic Population - The Only Way Is Up.mp3
Yess - Owner Of A Lonely Heart.mp3
yuridia ya te olvid‚.avi.AVI.MP3
Zarzuela Pl cido Domingo a recoletos con los beb‚s.mp3
Zarzuela Pl cido Domingo amor de hombre.mp3
Zarzuela Pl cido Domingo bella enamorada.mp3
Zarzuela Pl cido Domingo cantar mis amores.mp3
Zarzuela Pl cido Domingo esa mujer es buena.mp3
Zarzuela Pl cido Domingo fiel espada triunfadora.mp3



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
