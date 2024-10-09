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

IMÁGENES (en mi Face, Luis Mateos Armada):
- Para importante:
* Calendario de 260 días (Tzolkin maya).
* Imagen con fotos de Trump (caras de delincuentes).
- Para Psicología y salud:
* Gráfica (como montaña) con comida balanceada Yin Yang (nombres de alimentos en verde, rojo...).
* Dientes numerados.
* Runas (Árbol Navidad LeoenPhi).
* Letras hebreas.
* Un ojo abajo a la izquierda (temperamentos e iridiología).
* Grafoterapia: 5 fotos (sacadas con cámara) + ciertas letras con puntos unidos (l, p, g...).
- Para Historia:
* Vídeos de Youtube (científico y Trump).
* Videoclips: ordenador sonriente y batablancas.
* Faul McArtney.
- Para Técnicas: paso de agua con 2 postes y "bomba de agua" (subir agua).

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

####Transgenealogía, Hamer y Jung (desreprimir). Yo (Hamer): ¿tras ciertas experiencias, estás preparado para comprender la causa de la enfermedad, ya que te fue viniendo con el tiempo la información del trauma (o traumas) gracias a las alergias, que dan pistas sobre "la escena traumática", y empieza la fase de síntomas / curación (que es cíclica, volviendo al principio, pero siendo cada vez más fuerte)?
####Hamer:
* 1. La enfermedad tiene 2 fases, una activa (realmente no hay muchos síntomas por lo general), y otra de curación (con más hambre de lo habitual), cuando reconstruyes la escena del trauma y sabes el origen psicológico. Las alergias son muchísimas veces pistas para reconstruir la escena (algunas son estacionales, por lo que te ves "despistado" el resto del año). Los síntomas no deberían cortarse, al menos mucho, y por eso falla la medicina: cuando estás curando, te paran la fase de curación, y hasta te pueden decir que te vas a morir, ¡y hala, otra enfermedad (las enfermedades son psicológicas, NO simples desequilibrios)! Para llegar a la fase de curación, puede que tengas que desreprimir leyes familiares pasadas en la infancia (es algo normal). Nota: mientras que en fase de enfermedad hay actividad y más frío, en la de curación ocurre lo contrario, salvo en la subfase de curación crítica, que es muy rara E INTENSA (puede durar hasta unas 72 horas, dependiendo de la gravedad del trauma PSICOLÓGICO, y aquí es donde intervienen médicos y enfermeros), encuadrada entre la primera fase de dolor, y la tercera de expulsión de tóxicos.
* 2. ¿Cuantos médicos saben que al dar la noticia de un cáncer pueden disparar otro por impacto? Se ve haciendo un tac, hay un FOCO nuevo en el cerebro. Los síntomas son en fase de curación, por eso la gripe no se cura, ¡es la cura, y los medicamentos sólo la retrasan, la mayoría son "anticura" y "proactividad"! Cuidado con los mensajes a los pacientes.
####Más:
- El saber popular relaciona psique y cuerpo:
* Susto de muerte (tipo de trauma de pánico, laringe). El "pánico en la nuca" es a examen próximo, operación próxima, perder el trabajo... ¿El miedo territorial (tipo de trauma) es a que te quiten algo que ya tienes? ¿Se puede considerar pánico?
* Tengo las manos atadas (el trauma correspondiente afecta a los conductos tiroideos).
- Ahora bien, ¿de qué se ocupa la Nueva Medicina Germánica (Hamer)? Lo que no viene de la psique, sino de comer mucho... se llama desequilibrios; créeme, engordar tiene mucho más que ver con la psique y sus traumas, y de esto trata la NMGHamer. 
- Ejemplo para saber algunos tipos de trauma. Un hombre pierde a su mujer (camión choca contra el coche de ella). El conflicto será pequeño si no la quería. Si la quería, lo normal es una fase activa con programa físico de testículos (programa especial; recibes + testosterona para encontrar amigos... ¿Ni tumor ni úlcera?). Pero puede haber otros tipos de conflicto / trauma:
* No acepta / "no puede ser verdad" (trauma de miedo y resistencia, diabetes).
* No para de imaginarse el choque (miedo frontal, arco braquial).
* Si la mujer era su autoestima (dependía de ella): desvalorización, problema lumbar en este caso de desvalorización, ¿menos densidad ósea?. La epilepsia está en la cura de un conflicto motor (desvalorización), que no es el caso concreto.
* Su mujer era parte de él (pérdida de territorio, angina de pecho).
##Más:
- ¿El TOC también surge de la ampliación de los pensamientos intrusivos del final de la fase activa?
- El teatro es bueno tanto para traumas (salud) como para represiones (leyes no soportadas; maldad genuina, pues te hacen incoherente). El primer acto muestra la debilidad, y en el segundo se arregla todo (eso sí, a veces tardas mucho, tiene que ser así).
- El primer contacto con la Nueva Medicina Germánica del Doctor Hamer lo tuve leyendo el libro de Marco (La Última ReEvolución), así como el primer (y bien nutrido) contacto con la Transgenealogía (resolver problemas de ancestros para hacer mejor tu vida), lo tuve con Pablo Lema (pupilo de Cristian Zeballos):
- Yo creo que al llamarme Luis, por Transgenealogía, el alma del abuelo Luis, ¡me ha pasao lo que él no pudo resolver (y juraría que éramos 2 almas en el mismo cuerpo, opinando diferente)!
####Hamer Intentando finalizar mi diagnóstico respiratorio.txt  Asma (2 traumas territoriales): me falta libertad (y estamos en Acuario, que necesita libertad, curioso; ¿las obras de teatro me parecían esclavizantes?), el ambiente es tóxico, prefiero mi aire al de otros... Cómo lo solucioné: tras el primer sueño, mascar cebolla y hacer Buteiko.
- Mocos: varios pañuelos de tela (cuando uno se humidifique, no lo tiro, voy al que esté seco).
- ¿Y si es Marte atacando a Piscis? ¿Y si acallo a Marte femineizando (digo "eeeee", hago el nadi shódena pa equilibrar masculino y femenino, tras "ladrar un poco").
- Más (ojo, la curación son síntomas):
* Que si los jóvenes olían mal de "caerse mi monóculo".
* Tabique desviao, ¿por falta de mi madre?; ¿me faltó la respiración cuando me quitaron el chupete? Y está lo de dejar de mamar...
####supersalud parte técnica de mi dolor de muelas NMGHamer.txt  2023 09 22. Hubo que sacar una muela, que estaba horrible (no descarto reunión de bacterias benéficas, por NMGHamer). Causa psicológica:
- Dentina: no poder morder literalmente (tener dificultades físicas) o no poder "morder" o "atacar", porque me encuentro en una posición más débil (un empleado frente a jefe, un nuevo cónyuge frente a hijastro, tú frente a funcionario). Causas (más): opresión, abusos, castigos, restricciones, provocaciones, regaños, peleas verbales, discusiones constantes alguien...
* El de morder relacionado con el hueso dental es de desvalorización (más intenso con mandíbula implicada)
- Esmalte: no tener permitido morder literalmente o figurativamente ("atacar" a alguien). Estás por encima, pero las normas y tu ética... Causas (más): evitar decir algo para no herir, "no tener permitido o no poder sujetar algo" (conflicto de separación)...
- Músculos mandibulares: desvalorización de no poder o no tener permitido "morder" a un oponente (competidor, colega, familiar, vecino...) o "atrapar" algo que uno desea, o no poder decir algo o expresarse.
##Fase de curación:
- Dentina: los odontoblastos de la pulpa rellenan cavidades produciendo callo blando que luego se endurece.
* El periodonto que cubre el diente se estira debido a la hinchazón. Puede causar fuerte dolor (la capa epitelial escamosa que cubre el periodonto tiene nervios muy sensibles). Si la caries se ha formado en el interior del diente, la inflamación podría presionar la pulpa, y el dolor puede ser insoportable. Presión prolongada, puede dañar nervios.
* El dolor del absceso dental (por actividad bacteriana) se debe a la acumulación de presión en el interior del diente (si la caries ha creado apertura externa, llamada fístula dental, el pus saldrá, ¿gris?). En combinación con restos de comida y saliva, sustancia pegajosa se adhiere a la superficie de los dientes (sarro, una forma de placa dental; y la placa dental no causa caries).
- El esmalte se repone (el área curada será más oscura).
- Músculos mandibulares (crisis Epileptoide en ellos). Bruxismo, rechinar, apretamiento... durante el sueño.
##############################################
########LAS ENFERMEDADES VAN EN EL ANEXO######
##############################################
########VAMOS CON TRANSGENEALOGÍA ANTES DE SEGUIR CON HAMER.########
####Diagnóstico ancestros Transgenealogía lo no tratado en Hamer:
##INTRODUCCIÓN (¿los trastornos neuróticos son muchas veces toques de atención para estudiar tu árbol genealógico?):
- Tu familia te pasa sus creencias, y una forma, es directamente, relacionándote en el mundo 3D. Luego reprimes algunas las leyes familiares (no las soportas). Reprimir hace que tengas reacciones incivilizadas (tú, a lo mejor, ves culpables a tu alrededor, por enfadarte TÚ con la gente que no cumple esas leyes, muchas de ellas absurdas).
* Aparte de eso, hay influencias no visibles de los ancestros en tu psique. Los nuevos de la familia nacerán libres si consigues desreprimir lo de tu familia. La gente menos evolucionada, te pondrá pruebas (si eres el elevado encargado de "resolver tu árbol familiar"; resolver psíquicamente lo que los ancestros no pudieron). Tu familia astral determina el vínculo en el momento de nacer (si cargas con tu abuelo...).
* Ejemplo: el abuelo murió injustamente, la familia lo idealiza, y TE PONE SU NOMBRE. ¡Y a cargar con el muerto y lo no resuelto! ¡Y otro ejemplo! Una familia evita que los nietos se suiciden, como el abuelo, yendo al cementerio a honrarlo, con discurso y ofrenda.
* LOS SECRETOS FAMILIARES, ENVENENAN A LAS SIGUIENTES GENERACIONES. ¿Por qué a veces nos resulta tan complicado llegar más lejos que nuestros padres, hay barreras psíquicas?
* Si cumples la misión (desreprimir por Jung, sabiendo lo que es una proyección psicológica de tu roña en los otros, cambiar creencias si hay que hacerlo...), habrá autoestima. Si no, culpabilidad. El trabajo transgeneracional te acerca a las memorias ancestrales. Es bueno hacerlo (árboles genealógicos...). Tú sólo empieza, y con ilusión. Ser excluido del clan físico implica la posibilidad de ataque o de morir de hambre (no todos los que piden son "actores"; podrían ser almas avanzadas que lo hicieron mal, ¿incluso que están pasando pruebas sabidas antes de nacer?).
- Fechas clave. Contar +- 7 días a partir de la fecha en la que pasa algo raro (a ti o tu familia; una muerte...). Ejemplos:
* El síndrome "de aniversario" (0, 3, 6, 9 meses) se relaciona, no sólo con muertes o duelos pendientes (yo tuve que hacer un ritual para que toda la familia aceptase la muerte de mi madre; me dolió "el diente de la madre" previamente), sino también con secretos, traumas... De todo. Incluye vergüenza ancestral (sientes vergüenza como tu ancestro).
* La madre de H. murió 9 meses antes de nacer él. Es un mensaje para H, seguramente. Mi madre, 9 meses antes de nacer mi padre. Fecha de concepción: restar 9 meses aunque el niño sea prematuro. Lo de los 9, viene de memorias ancestrales. Fecha de muerte: 9 meses tras nacer (o 3 antes).
* Si la Concepción (y ahora contamos los años también) se da 3 meses o menos tras la muerte: efectos mayores (o si naces en el primer aniversario de la muerte). Si nacen varios, el primero sufre más.
- Enfermedades de origen ancestral:
* En general, patologías de movimiento, sobrepeso y retención de gases (¿cuestión de tiroides?). ¿La tiroides "gestiona el tiempo"?
* Más: respiración y apneas, parásitos intestinales, algunas diabetes, autismo y esquizofrenia (estas 2 últimas indican muchas veces que el origen es el bisabuelo o el tatarabuelo, no el abuelo).
##Conceptos básicos (¿La unión al clan es a los 3 meses de la concepción real?). Los dobles:
- El parecido físico o personal con algún familiar, podría significar obstaculos en tu realización personal (independencia...).
- Si te llamas Mariana, tendrás afinidad con María y con Ana (si son familia).
* Si tus padres te ponen el nombre de un familiar, ¿puede ser por una relación disfuncional con él?
* Tus padres pudieron haber tenido parejas con tu nombre antes de casarse.
- Por profesión (yo diría actividad, que la profesión indica poca flexibilidad en principio; algún día se acabará lo oficial, el "estar colocado": no sueles aprovechar todas las horas del día, suelen ser trabajos para engordar las estadísticas...):
* Vigilante, poli... Búsqueda de la figura paterna.
* Político: la familia sufrió desprestigio (y no lo aceptaron, o se quedó como un secreto...).
* Traducción / Lingüística: conflicto de comunicación ancestral.
* Agricultor: hambrunas. ¿Y cocinero, restaurador...?
* Química: conflicto de unión de elementos, madre.
* Coser: separación, conflictos de piel.
* Electricidad, energía: conflictos de padre.
* Ciencias: padre incógnita, ¿por ser la madre una fresca? ¿Por irse el padre?
* Piloto, azafato: ir al encuentro con el muerto.
* Enseñanza: falta de estudios en la familia.
* Bailarín: conflicto de movimiento. La misión es "aprender a moverse".
* Fisioterapia: falta de contacto, ¿sanarlo por medio de rehabilitar a otras personas tocándolas?
* Hostelería: complejo de alojamiento.
* Decoración: desvalorización estética, ¿mi abuelo Luis se veía feo?
* Libros: para conservar la Historia.
* Fotografía: temor a perder la Historia.
* Servicios sociales: abandono.
* Servicios bancarios: problemas de herencias, de dinero...
* Abogado: conflictos con la justicia.
* Medicina: conflicto de enfermedad, muerte...
##Ejemplos:
- Una niña tiene asma / disnea (por crecer en ambiente tóxico):
* Mujer sin menstruación entre los 21 y 29 años de su vida (es la menor de 5 niñas, y nació cuando la abuela tenía 29). La abuela, embarazada, fue obligada a casarse (¿vergüenza sufrida por las 2 familias implicadas?). Ninguna hija fue planificada / deseada. Ella recuerda discusiones, infidelidades... y la abuela les decía que habían venido al mundo a padecer.
* ¡Es un rechazo de la femineidad pasado entre generaciones! Creencia peligrosa: la mujer no es femenina, no nació para el amor erótico, es una coneja... Curioso, la creencia viene de los abuelos (supongamos), los padres tienen "accidentes" relacionados con ello, y los hijos lo sufren.
- Mujer adopta 2 niños de 5 y 7 años. El padre adoptivo de la mujer cuidaba niños de entre 5 y 7 años cuando era joven. Ella padece ahora lo que él (no especifico).
- El abuelo sintió impotencia preso. La nieta, impotencia (bloqueo de actividades económicas; por ciertas casualidades, no llegaba a cobrar), que dio lugar a hipotiroidismo.
- Mujer nacida tras varón muerto. Ella no es reconocida (ya hay una niña mayor en la familia), y trata de agradar ocultando su femineidad, con lo que "pilla" amenorrea.
####NO tan básico:
##HEREDERO (DE MAESTRO) Y YACIENTE:
- Heredero: debes ser concebido (nacimiento real - 9 meses) cuando el muerto vivía. El fallecido confía en ti. Puede haber varios herederos (cómplices / identificándose entre ellos).
- Yaciente: reemplazas a alguien cuya muerte no ha sido aceptada:
* El yaciente se siente más indefenso (carga con...). Su vida, entre la melancolía y ausencias mentales (¿inexplicables?) Cuanto le toca decidir, es como si una parte reprobase a la otra. Si se murió joven, la carga es mayor, por el silencio familiar, por esa muerte rara...
* Solitarios, ropa oscura, ambientes oscuros (sobre todo para dormir). No suele avanzar en la vida, disfrutar (produce culpa). Bruxismo o mandíbula tensa y bloqueada (al negar el placer). Rabia y agresividad reprimidas. Suelen tener tono de voz bajo. Otras veces, en lugar de freno, agitación e inquietud insufrible. Hay enfermedades, problemas de identidad: no te reconoces; inmovilidad (no reaccionar).
* Cuando es por hermanos, hay que suplir y además aliviar a los padres, y sufres mucho. Cuando es por aborto (la madre abortó a hermano mayor), queda memoria negativa en el útero, y al no haber dado tareas al muerto, la confusión es total, y no sabes con quién vincularte... Hijo de repuesto: el mayor enferma, y los padres deciden tener otro hijo. Si al final no muere, ¿tus padres te ignoran? Fiestamanía: un hijo murió (o va a morir), y hay sexo compulsivo. Gemelo perdido (en las 10 primeras semanas de gestación). El vivo: soledad, culpa, espera...
##Más:
- Sobre hijos:
* Hijo de polarización: es para alcanzar el éxito que los padres no pudieron alcanzar.
* Hijo sanador (alma avanzada): difícil tener hijos o el triunfo, ¿habitualmente nacen con enfermedades congénitas o discapacidades? ¿Su misión es saber secretos guardados por generaciones?
- Complejos de Edipo y Electra: se atrae a personas "padre" o "madre" con la fecha de nacimiento o concepción de ambos padres como referencia.
* Relaciones de pareja confusas, puesto que buscas un papá y una mamá.
- Incesto ANCESTRAL (¿incluye simple adulterio o maltrato?): causa que la relación de pareja de los descendientes se bloquee / frustre. Los embarazos son difíciles (abortos, muertes prontas...).
- Hígado: mareos, rabia... ¿El médico debería buscar ancestros que murieron de hambre, en carencia (el hígado es la reserva de ahorros del cuerpo), o sufrieron envenenamiento (tóxicos; el hígado lidia con tóxicos como función normal)? Es un enfoque un tanto diferente a Hamer (apunta: conflictología; psicoterapia integrativa, que va de desreprimir a secas se puede decir... ; descodificación biológica original).
- ¿El corazón tiene que ver con abuelos fríos?
####Flecos de Transgenealogía:
- Si quiero disfrutar, significa prohibición de placer, deseo... Si queremos amar, el clan nos limitará las emociones.
- El afecto es la felicidad por la prosperidad del prójimo.
- Una familia fue al cementerio a honrar a un muerto, y sus descendientes no corrieron su misma mala suerte.
- Tras el shock de descubrir la verdad sobre el ancestro, ¿7 días "acostado" con el ancestro involucrado, y así evitas el enfado con él?
- Los vicios pueden ser ancestrales. ¡Hasta se puede heredar la culpa por ellos!
####Arbolismo. Un árbol genealógico te permite detectar mejor las "casualidades", y "es mágico" (encuentras fricciones entre ancestros, informa "al Universo" de que quieres solucionar problemas transgeneracionales, y te ayuda y protege...):
- Busca fotos de padres, tíos y abuelos como mínimo (o cartulinas con nombre y parentesco). Poner en piso o en pared (en piso es más fácil, en pared necesitas quizás un tablón de corcho y chinchetas...):
* ¿Yo estaría abajo?
* ¿Qué sientes al emparejar ciertos ancestros? Rearma el árbol hasta que no dé "fricciones", y apunta lo que te venga a la cabeza.
* Pregúntate sobre las cosas que faltan (además, la falta puede dar pistas). Deja que el subconsciente rellene los huecos.
* Y cuando logres expresar tu Norte (objetivo de mejora interior para sanar al clan), éste coronará el árbol.
- Datos. ¿Ir al registro civil y al parroquial (yo me sé mi identificador de registro civil)?:
* Nombre, apellidos, fecha de nacimiento, casamiento y muerte (con causa exacta).
* Profesión.
* Relación de nuestros padres con sus padres.
* Hijos muertos. Abortos (voluntarios o no) y enfermedades.
* Efemérides (ruinas, éxitos, divorcios, secretos, anécdotas, accidentes, cambios de país, cárcel...).
##Un buen arbolista terapeuta será comprensivo:
- Primero pregunta por lo que no has conseguido en la vida todavía (pareja, hijos, casa propia...).
* ¿Qué quieres hacer? Séneca: no hay viento favorable para quien no sabe dónde va. Si no fuiste tenido en cuenta de niño, quizás no tengas finalidad.
* ¿Tu mundo ideal? ¿Qué 3 deseos pedirías a un hada?
- La voz del terapeuta debe ser emocional como mínimo. Otras:
* Libidinal (para conectar con el placer, ¿hablar paseando por una sala desde el sexo, con avidez de algo?).
* Intelectual. La peor, más sosa / baja, junto con la material. Inmorales casi.
- Más:
* El arbolista no cobra, ¿si él mismo no sube de conciencia tras la consulta? No juzga, limpia de "familia" y de CUltuRA.
* Analiza si el paciente se resiste (o si sufre y eso le empuja a colaborar).
- Preguntas para TI MISMO:
* Origen ancestral de mi nombre. ¿Fui deseado? ¿Esperaban a alguien de mi sexo?
* Parto. ¿Fue sencillo? ¿Tenías prisa por salir o fuiste diezmesino (retenido contra mi voluntad)? ¿Cesárea? ¿Mamá murió? ¿Me dieron de mamar el tiempo justo?
* Nacimiento mío y de otros: sumar 3, 6 y 9 meses. ¿A qué se acerca)?
* Convivencia con hermanos y actual. ¿Cooperación y fluidez o lucha territorial? ¿Tienen hijos? ¿En qué trabajan?
* Tu infancia: acontecimientos y salud. ¿Se separaron los padres? ¿Cambiaron de país, vivieron una guerra o un accidente de los que marcan? Personas de las que recibí cuidados, afecto y educación. Mascotas.
* Lugar del hijo, ¿Funcionaste como único? Parejas de hermanos, ¿Uno listo y otro torpe? ¿Uno simpático y el otro serio?
##Ejemplo. Árbol de Jung:
- Su abuelo paterno se casó con Sophia, que se llama como la madre del mismo. ¿Nudo incestuoso que heredaría Jung?
- Augusta es nombre medio masculino (esperaban un hombre).
- Mujeres consideradas "conejo":
* Los niños mayores no tenían infancia (cuidaban de los otros).
* Los más jóvenes eran considerados inmaduros por parte de los padres. ¡Marcados!
- Jung es tratado como hijo único (su hermano ya tenía 9 años).
* Tras una generación abundante, viene otra no abundante (es lo normal).
- Su conflicto ciencia - espiritualidad, viene de médicos (rama del padre) y sacerdotes (rama de la madre).
##Mi árbol:
- Padres:
* Amor de los Dolores (vaya nombrecito) Armada Álvarez, 21-04-1940. Ama de casa. Muerte, 19-11-1989.
* Rafael Mateos Castaño, 21-08-1937 (cuando nací, el ya tenía cierta edad). Trabajador de supermercado.
- Hermanos:
* Eduardo (mellizo).
* Rafael, 11-10-1971. Paga por toc y limpiezas.
- Tíos:
* Por parte de padre, destaco a Deme. Muy buena en clase, pero sus padres le cortaron un poco las alas (hacer un Bachillerato...). Ama de casa.
* Por parte de madre, destaco a Maruja. Algo depresiva y un poco en contra del "inmovilismo" de mi padre con sus hijos. La verdad es que los Armada, eran de mucho criticar, mucho acomplejar, y poco ayudar.
- Abuelos paternos:
* Lorenza (de la que ya hablé), nació en, ¿1909?
* Virgilio, que murió en, ¿1981?
####¿Qué datos pongo sobre mí?
- Quiero ser una persona capaz de ganarme el sustento, pero en una sociedad posterior a ésta (con la gente mejor).
- Me mueven los proyectos de concienciación sobre la roña / debilidad interior de la gente.
- En un mundo ideal no hay jerarquías artificiales casi (naturales sigue habiendo, por supuesto, padre - hijo...), se consume poco, hay mucho tiempo para estar quieto.
- Más datos:
* Nombre de mi abuelo materno.
* Mi mellizo y yo, vinimos tras mi hermano Rafael, tratado por mi madre como una niña un poco (mi hermana mayor fue raptada por monjas al nacer). Fui sietemesino, y salí el primero, ¿para tener mi difícil carta astral, sin importar mi mellizo? Me dieron de mamar muy poquito, quizás no llegó al año.
* Hermanos. NO tienen hijos ni trabajan. La relación con mi mellizo era algo territorial.
* Infancia: cada poco estaba en el médico. A los 3 años se murió mi "amigo" Virgilio (abuelo paterno). Mi madre no recibía suficiente cariño de mi padre, y se preocupaba mucho por nuestro éxito (lógicamente, murió de Cáncer; cuando yo tenía 12 años recién cumplidos). Mi padre tuvo una infancia bastante dura y austera. Mi abuela no era muy amorosa. Mi tía Deme, lo era más.
* ¿Ingeniero Informático? ¿Actor pedagógico (para que desreprimas)? ¿Limpiador, decorador, ordenador compulsivo?
- Efemérides (ruinas, éxitos, secretos, anécdotas, accidentes):
* Ruinas. 2003: Renée Ribacoba me da Topamax, no puedo casi levantarme de la cama, y Fanjul me toma por drogata cuando empezaba a subir la dosis. 2007 / 2008, Biblioteca de Proyectos, tortura oculta (con ironía) de JPM. EDP: el dejarlo (yo sé muy bien ocultar las lágrimas); en Aboño tenía todo el cariño tierno, y tardé muchos años en recuperarme. En 2012 (el año siguiente) pedía muchos trabajos, y nada, dificilísimo con la superdepre que tenía (suma a eso los rechazos). Me faltaba, por otra parte, mejorar como persona.
* Éxitos: he hecho programillas bastante interesantes (Paint para Windowes, que te limita a los colores del Spectrum...). Hay 2 cosas en los últimos años que me gusta recordar como éxitos: el teatro de idiomas, y la Cutreenciclopedia (dar luz psicológica...).
* Secretos: a los 16 años veía a los Tauro (los amores de Escorpio) con barba como figuras paternas, ¿o maternas? Da igual: homosexualidad leve (¿por morir Virgilio siendo yo niño?) y superficialidad. En la adolescencia "había" que hacer lo que hacía el resto, y terminé odiando las discotecas (y un poco a las mujeres; no sé, las veía muy difíciles).
* Anécdotas. En 2012, los de Delegación (colegas míos, aunque Pepe me dijese siempre "¿tú entiendes no?"; que si soy homosexual) pusieron mis vídeos tontos, y pensaban que no iba a aparecer por el Salón de Actos (lo tenia to aprobao), pero aparecí con Solares: cuchichearon, y decidieron darme la banda de Rey de la Politécnica.
* Accidentes: lo del Tiatordos, que tuvo que venir el 112 con cazadoras térmicas a rescatarnos! Por lo general yo no iba rápido en bici bajando, así que los que tenían accidentes eran los que venían detrás de mi, ¡aparta, que te trago (me decían)!
##############################################
########LO ÚLTIMO DE HAMER, TRAS JUNG.######## INCLUYE REGRESIÓN Y AL GRAN TXUMARI.
##############################################
####Carl Jung (el del Trío Mágico Jung-Gurjieff-Castaneda):
- El daño social surge de tus represiones (te hacen sentir indeseadamente, manejándote a ti y tus opiniones; y las proyectas: ejemplo, ves una persona obesa y reprimiste la creencia NO soportada "los obesos suelen ser irresponsables", y te enfadas, y eso es ser NO civilizado):
* La zona de represiones y el ego malo (tretas para autoengañarte / protegerte) son como hermanos, cuando uno crece, el otro también.
* Si estás siempre con una sonrisa (para dar una imagen), reprimirás mucho, no serás coherente, serás palpablemente narcisista.
* También se puede reprimir "a los políticos". ¿ES QUE NO SABES QUE LA SUMA DE NUESTRAS PSIQUES (INCLUYE LA TUYA, "CÚLPATE" BIEN) ES LA QUE DETERMINA LOS POLÍTICOS QUE TENEMOS?
- INTRODUCCIÓN AL RESUMEN DEL LIBRO DE LA SOMBRA. MIS AGRADECIMIENTOS A EL HEREJE. ¿Está la memoria alojada en el cerebro? NO (cuando el cerebro se daña la memoria puede seguir). El inconsciente colectivo es una memoria terráquea / de tribu... que nos afecta enormemente. Creencias normalizadas van allí. Y para cambiarlo...
* Las represiones están en el camino para curar enfermedades (toda enfermedad es psíquica)... 
* Emociones. Un exceso de ira daña el hígado; miedo, riñones y vejiga; alegría / híperexcitación, corazón e intestino delgado. Tristeza, pulmones; ansiedad, estómago, bazo y páncreas; dominio y autoridad sobre los demás, intestino grueso. Al revés también se da: Si tu bazo es débil, es probable que te entristezcas. Alcohólicos y drogadictos (mal hígado): enojos. Riñones: tímidos y nerviosos, o miedosos.
* Cuando el ego malo es pequeño, el "transporte" de inconsciente a consciente es mejor.
- PEDRO RIBA ENTREVISTA A ISAAC JAULI:
* ¿Qué es la sombra? Es nuestro mal, y produce vergüenza, miedo, culpa, ser más manipulable... Suele aparecer en sueños en forma de persona del mismo sexo. Un chaval soñaba con un lobo (la sombra; su pasado No aceptado) que lo amenazaba (solución: imaginar que lleva el lobo a un lado siempre).
* Si no aceptas la realidad social (mente débil), ¿reprimes / eso te somete? ¿Puedes aceptar algo como falso o como verdadero sin sufrir y entonces ya no reprimes?
* Imagínate frente a tu parte oscura en una silla (los 2 sentados). Puedes ser tú o una persona que te insultó... ¿Qué tengo que cambiar en mí para no atraer a esa persona?
- Luego están los entes negativos: parásitos (babosas cerebrales que manejan tu mente, "medusas", seres tulpa creados por ti para fastidiar a otros...), cáscaras de humanos fallecidos (chupan un poco de energía), demonios (chupan bastante).
- Más (con pocas represiones / locura te acercas al alma, y a ver a la gente como monstruos, y a comprenderlos):
* Siempre miramos hacia afuera buscando aprobación. Así que, ¿para qué preocuparse? Las máscaras tras reprimir para encajar socialmente: el encantador, la buena chica, el intelectual, el bromista, el que lo consigue todo, la seductora, la dura de pelar, los supercool... El de cara bueno al final reprime...
* Las distracciones, jornada laboral larga, antidepresivos (e incluyo ciertos chutes de poesia)... postergan nuestro necesario encuentro con la sombra. Necesitamos mucho tiempo a solas con nosotros mismos para aspirar a ser buena gente.
* Cuando alguien tropieza con un platano, es la sombra (represiones) la que rie. Si no te ríes nada, quizas tu sombra este demasiao inaccesible (eso seria todavia peor). Reirte de ti mismo puede acabar con sentimientos de culpa y vergüenza.
* Connie Zweig: "los demonios internos se disfrazan. Yo pensaba que los habia destruido al hacer practicas espirituales, y no hablaba con la gente que consideraba inferior".
* Una persona muy limpia, se vera atraida por guarros, ¡porque ha reprimido la suciedad!
##Cuando tenemos una aspiracion elevada y la desterramos, nos condenamos a buscar gratificaciones instantaneas (o acabamos en las drogas).
####001aGithub00notas17.txt  ##¿Para qué exactamente haces las cosas?, ¿por qué profundísima razón (y no me digas que ensamblas componentes para lograr tal producto)? ¿De qué retorcido planeta vienen los del "talk shop" (hablar del trabajo tras el trabajo, incluso con gusto)? Mejor se hablaba de ser feliz con lo mínimo, buscando tener una buena psique.
- Jóvenes que han hecho muchos cursos, ¿han perdido el Norte?
##Hay para quien salir de la zona de confort es saber hacer otras cosas, en vez de quitar la roña psicológica conscientemente: todo vale, pero los primeros están en "la Prehistoria".
##Beneficios energía Libra. Con ella, comienza la locura sana (que previene la locura real).
##Cuando quitas hierro a los asuntos, estás en disposición de comprender mejor al otro.
##Más sobre la sombra = saco de represiones. En los momentos decisivos (peligro...), es la sombra la que manda (está más próxima al impulso creativo):
1. Robert Bly: nuestros padres nos critican (estate quieto de una vez...), y entonces, arrojamos nuestra personalidad auténtica al inconsciente, para seguir siendo merecedores del amor de los padres (y por NO ser fuertes 100%). Ahora somos imagen y copia.
- Cuando a los 40 los hombres intentan retomar el contacto con su mujer interior, ésta se ha vuelto hostil. Y las mujeres no deben reprimir su lado masculino, u odiarán a los hombres.
2. Oli: la culpa no sirve de nada, y la penitencia nos hace sentir bien sin haber pensado en lo que hemos hecho.
3. Anthony Stevens. Fausto: el Diablo representa su incapacidad de dialogar con la sombra. Fausto quiso solucionar su problema con más conocimiento vacio. Si tu gente es buena, NO temas que descubran tu sombra.
4. Marie-Louise von Franz. Si sueñas que el sótano de tu casa tiene pasadizos, habitaciones y puertas abiertas, podría referirse a un despertar próximo. Si hay muchas habitaciones de la casa (en el sueño) que no conoces, es que desconoces mucho de tu psiquismo.
5. William A. Miller. 5 métodos para aprender de nuestra sombra:
- Que los demás nos digan cómo nos ven: es más fácil ver la sombra en los demás.
- Haz una lista de lo que más te fastidia de los demas.
- Examinar nuestros "lapsus" (queremos decir una cosa, pero nuestra sombra habla por nosotros).
- Analizar sueños y fantasías.
- Investigar nuestro sentido del humor.
* Al final de un chiste, podríamos reírnos porque estamos de acuerdo "sombríamente", no conscientemente.
* Reírse con un resbalón ajeno evidencia nuestro sadismo reprimido.
* ¿Nos reímos en situaciones ridículas porque hemos reprimido el ridículo?
##Más de la sombra:
- La oveja negra percibió la sombra familiar, y la familia cargará contra él.
- Un niño criado por una madre distante y sexualmente represiva, puede convertirse en un "chico duro" (máscara) o alguien que pide auxilio: que alguien me cuide.
- Defensa cobarde. ¿Hedonista yo? Tú sí que eres hedonista.
- Robert M. Stein. O aceptas a la madre negativa (la mandas al inconsciente porque ves a tu madre omniprotectora, nutricia, y aceptando tus flaquezas; es normal), o sigues siendo un niño, ¿y te será difícil agradecer a papá? ¿Cada vez que alguien quiera intimar contigo, harás algo para que te rechacen, pero buscarás parejas (para dejarlas)?
####16 personalidades (basadas en Jung; yo, INFJ, aunque a veces soy INTJ). La chispa surge con los complementarios, somos muy diferentes. Lo principal no es "estar colocao en un trabajo oficial", sino ser comprensivo:
- Características:
* Introversión (I) vs chupaenergías (E). Es importante que sean introspectivos (tanto I como E).
* Percepción sutil o 3D (baja). Intuición (N) vs sensación (S, 5 sentidos).
* Reflexión (T) vs emoción (F, más impulsivos). Los 2 me gustan.
* Juicio (J) vs percepción (P). Los "J" siguen con sus planes. Los 2 pueden ser útiles.
- INFJ1.5. La luz de la humanidad. Van por lo imposible. Diplomáticos y profundos.
- INFP4.4. Necesitan tener una cruzada o misión en la vida. Ven señales en todo. Imaginativos, solitarios. Les cuesta hablar de sí mismos con desconocidos.
- INTJ2.1. Líderes naturales. Confiados y originales pensadores. Mente maestra. Pueden estar solos. Trazan elaborados planes, y si fracasan... duele.
- INTP3.3. Intelectuales (el pensador). Nuevas teorías. Si les das salida para su inteligencia creativa...
- ISFJ13.8. Cálidos, generosos y muy formales. Servicial, el que nutre. Sacan lo mejor de quien les rodea.
- ISFP8.8. Piensan que conocer gente nueva enseña. Artistas, problemas de autoestima.
- ISTJ11.6. Reservado, muy responsable y formal. Inspector. ¿Intimidantes? Tranquilos y tradicionales por lo general.
- ISTP5.4. Artesano. Reservados (aunque a veces sorprende su espontaneidad).
- ENFJ2.5. Realizan sus sueños y los de los demás. Guiado por sentimientos. Éticos e idealistas. Confían bastante en su instinto e intuición.
- ENFP8.1. Encantadores, efervescentes y orientados a la gente. El campeón (ganador nato). Sociables. Se guían por sentimientos, pero son reflexivos y perspicaces.
- ENTJ1.8. Líderes naturales. Profundos. Equilibrio. Decisiones rápidas.
- ENTP3.2. Dinámicos. Si no triunfas a la primera, busca otra manera o "arrastra el error". El visionario. Odian las conversaciones banales. No rehuyen debates. ¿Vienen a revolucionar el mundo, con su comprensión más profunda / compleja?
- ESFJ12.3. Amistosos y cálidamente interesados en los otros. Proveedor. Centro de atención. Ayuda a débiles.
- ESFP8.5. Divertidos, aprovechan el momento. El actor (buenos captando nuestra atención). Preocupados por el bienestar ajeno.
- ESTJ8.7. Sencillos y directos. Supervisor / organizador. Orientación. Desafíos (les gustan).
- ESTP4.3. Aventureros. El hacedor (poca capacidad de abstracción). Aquí y ahora, y sus decisiones rápidas sin titubear pueden generar problemas.
####Mar Zatie (Carl Jung, oscuridad permite ver claro dentro):
Había una vez un hombre que vivía en el extremo del mundo, en un lugar tan, pero tan frío, que el sol, entumido, casi se había detenido y, por lo tanto, desde que el hombre tenía memoria, era siempre de día. * Era friísimo a pesar del sol.
El frío había vuelto blanca su alguna vez, sonrosada y tibia piel, tan blanca como las lejanas estrellas de la Vía Láctea y como la nieve que cubría el suelo de las proximidades. Sus rubios y lacios cabellos habían comenzado a caer desde hacía mucho tiempo, tiempo cuyo paso era casi imperceptible, toda vez que las gélidas temperaturas alteraban dicha percepción haciéndolo cada vez más lento. Su delgado cuerpo parecía alargarse tanto como los altos y escarchados árboles que, formando un cerco, protegían su hogar de la mirada curiosa del mundo y de la intromisión de todo extraño. Sus ojos, que habían sido de un profundo verde esmeralda, habían perdido luz e intensidad porque al ser siempre de día, él no había conciliado jamás el sueño a pesar de desearlo tanto, así que ahora eran de un pálido color gris que amenazaba con volverse blanco como el paisaje que lo rodeaba y entonces cegarlo para siempre. Él había aprendido a mimetizarse con su entorno, o quizá fue el entorno quien se mimetizó con él.
A pesar de vivir en esa tierra donde era siempre de día, el sol no lograba calentar su corazón, un corazón que alguna vez había latido tan fuerte y tan rápido como el galope de un corcel y del que ahora sólo quedaba un helado y frágil cristal que, en consecuencia, latía cada vez más despacio, porque a cada nuevo latido corría el riesgo de estallar en tantos fragmentos como estrellas en el universo.
A sus oídos había llegado, transportado por el viento, el rumor de que se acercaba la luz que danza, una mítica luz que concedía deseos y que sólo aparecía una vez en una vida. Él no tenía nada qué pedir, tenía todo lo que deseaba porque él se lo procuraba a sí mismo, era autónomo y no necesitaba nada ni a nadie, pero sabía que la luz bailarina viajaba en compañía de la oscuridad, ya que, de otra forma, no podía ser vista. Eso era lo que él realmente deseaba, la oscuridad. La oscuridad y dormir. Dormir por primera vez en una eternidad. Darle reposo a su mirada y a su corazón. Así que tenía que encontrar la forma de ir al encuentro de la luz porque era poco probable que ella llegara a encontrarlo en su morada. Pero ¿a dónde ir? ¿Qué rumbo debía tomar? Ahora que lo pensaba bien, no recordaba haber salido nunca de ahí y una aguda punzada se clavó en su pecho. Su fatigado corazón no resistiría un latido más, no con la luz del día. 
Paradójico, una luz le traería oscuridad, no tenía sentido, pero eso ya no importaba más. Era el momento de pensar en el enigma que representaba el exterior y que él había procurado tanto mantener alejado. Ya no era sólo la luz y en qué dirección ir como creyó al principio, ahora era también enfrentar lo desconocido, pero ¿no era la oscuridad algo igualmente desconocido?
Lento, muy lento como siempre, aunque sin detenerse, el sol seguía avanzando mientras el hombre con un cristal en el sitio donde alguna vez tuvo un corazón, no dejaba de pensar en su dilema; sin embargo, ensimismado como estaba, no se percató de que sus pasos lo acercaban peligrosamente al círculo de árboles que rodeaba el lugar, su lugar, y mórbidamente, sin darse cuenta, dio un paso hacia el exterior.
Cuando comprendió lo que había sucedido, ya no había marcha atrás, dio unos pasos más y había cruzado completamente la barrera protectora. Miró embelesado a su alrededor y por un momento no logró distinguir nada. ¿Era eso la oscuridad? Miró hacia arriba y de inmediato comenzó a distinguir algo. La luz que apareció en el cielo tenía un color muy familiar, un color que le había pertenecido y del que solía conocer el nombre, pero que ahora no podía recordar. Volando, danzando, girando, la luz comenzó a bajar hacia él, ella sí lo había reconocido.
Cuando la luz que baila encontró el pálido gris de su mirada, ya no pudo reflejarse más como lo hace toda luz, porque ese tenue gris tan lleno de anhelo por la oscuridad, la absorbió completamente y entonces sus ojos, los ojos del hombre del extremo del mundo, volvieron a ser verde esmeralda. La luz danzarina no volvería a conceder deseos, la noche había llegado.
##Busca salir de la zona de confort, y allí está la luz asociada a la oscuridad.
###########################
########Hamer (más)########
###########################:
##Principio básico: la psique influye en lo emocional, y luego viene lo material (el órgano). La enfermedad (traumas por shock en tu vida, ¿secretos y traumas ancestrales influyendo en el ADN?...) está en la psique (si te tragas una tuerca y se te inflama todo, eso se llama desequilibrio).
- Es un error garrafal asociar el mal físico con lo material, salvo en unos pocos casos:
* Quemadura solar.
* Callo por zapato (aprieta).
* Digestión mala por comer en exceso o combinar mal.
* Talón de Aquiles rojo (como prevención por estar sin entrenar) y similar.
* Algunos más, supongo, ¿como cortes?...
- Por cada enfermedad, uno o varios focos de Hamer en el cerebro (creo que estoy repitiendo, pero merece la pena).
* La enfermedad tiene 2 fases: la activa (cuando no sabes lo que te pasa, y la vida intenta ponerte pruebas para que lo sepas; no, no son casualidades). La de curación, donde suelen estar los síntomas (y por eso la Medicina Universitaria es tan torpe; las farmacéuticas compraron la Universidad, y se acabó el curar), las manos están calientes...
* Aceptar o reprimir, impiden que muramos de agotamiento por fase activa (tu estado general es menos activo / masculino, y más de reparación / femenino). ¿Y vuelves a fase activa cuando a tu alma le parezca?
* En la fase de curación, hay una "de curación aguda", en la que podría ser preciso usar los métodos de la medicina oficial, puesto que los síntomas se disparan. Tras esta fase, los síntomas son incluso menores que en la primera parte de la fase de curación, y echas sangre, mocos...
* La escena que produce el trauma tiene unos detalles, incluso una comida (que luego generarán alergias, que te hablan de esa escena traumática; imagínate que eres alérgico a los cacahuetes; un cacahuete podría causarte inflamaciones, pero también podría guardar una información muy importante). No te curarás del todo hasta que no recompongas la escena, con sus detalles importantes, ¡y se te podría mandar a la fase activa otra vez! ¿Vuelves porque te faltan pistas por encontrar? Bueno, ahora las pruebas serán más fáciles.
####Seguimos:
- Los ambientes tóxicos (electromagnetismo...) pueden generar lo nunca visto; problemas psíquicos desde lo "material".
- Nuestro cuerpo está superpreparado para hacer frente a cualquier cuerpo extraño. Ya sabes que los síntomas como inflamaciones... suelen ser una defensa del cuerpo que funciona bien. Lo realmente peligroso es tener miedo (el miedo acorta conductos, las células ya no reciben alimento... El miedo es un artista en enfermedades respiratorias).
* Bacterias... se encargan del trabajo de reparación.
* Virus (proteína + ácido nucleico), ¿regeneran el ectodermo / la mucosa?.
- Tumor (fase activa), viene de 2 posibles partes del cerebro:
* Tronco cerebral / endodermo (no te trago / acepto... Conflictos de presa, generalizando, como no poder deshacerse de algo, o hacerse con algo).
* Cerebelo / mesodermo antiguo: conflictos sobre la integridad (física...): desfiguración (¿orgullo / imagen heridos se incluyen aquí?), preocupación (afecta a las mamas...), pelea...
- Pérdida celular (úlcera... en fase activa):
* Substancia blanca / mesodermo moderno (huesos: desvalorización... ¿hasta los tropezones están programados?): algo sale mal / has fallado en algo, te han despreciado / criticado... y te desvalorizas.
* Corteza cerebral / ectodermo (conflictos sociales "avanzados"): de separación, de territorio, impotencia, miedo a peligro... Fase activa: dolores de garganta y su mucosa, y similar.
##Algunos flecos:
- Meningitis: desvalorización moral o intelectual, ¿no te ves bondadoso o capaz?
* O por desfiguración (¿ser herido o sentirse atacado?)
* Aparece con el trigémino (ya lo veremos quizás y lo vimos por encima) en fase activa, y en fases de curación.
- Los pasotas son mentes débiles, necesitan la protección de la represión.
- La alergia (pistas) puede manifestarse como enfados repetidos (en el trabajo...).
- ¿Sólo en las enfermedades no psicológicas (que son muy pocas) se reducen significativamente los centrómeros celulares?
* ¿Podrían alargarse si curas de verdad (la psique)?
- Dolor: es para que no te muevas. ¡Así que no te muevas, cura!
- ¿A + fase activa, más miedo y más vello?
- Agotamiento: es protección, como un freno de emergencia de la gente sana (la muy activa... puede morir joven).
- Ante conflictos prolongados, se pueden alterar genes que hagan que "te levantes del sillón".
- Aborígenes curan fracturas en minutos, ¿herramientas imaginadas de realismo infantil? ¿Y una cuadrilla de espíritus?
####FINALIZANDO LO BÁSICO (ÚLTIMO TERCIO)
##Los médicos.
- Se protegen complicando términos (Latín = LOT-in... Cosas de paios loteros, ¡sí, relacionados con la Diosa Kali!). Autocurarnos sabiendo lo que nos pasa a nivel psicológico, es parte de nuestra misión de vida, es nuestra responsabilidad.
* Que hagan tests de cáncer a la sangre arterial: da negativo. Según la idea oficial de cáncer, lo sería un embrión, los pechos sanos de una mujer en determinadas circunstancias, o una herida curando. ¡DARÍAN POSITIVO EN EL TEST!
* + Mitos. La hipertensión casi nunca supone peligro vascular. ¿Usar diuréticos sólo como último recurso? Antibióticos (dañan genes): no terminar la caja. Radioterapia: para tumor inaccesible, o como último recurso. ¿Y antes tomar MMS y energizarse con energía escalar? Píldora (nunca, como la morfina): cambia lados cerebrales (esto es traumático), es una ruleta de conflictos y curaciones.
##Proceso de fase activa a fase de curación:
* Tras algunas experiencias, la información negativa sale a la luz (el trauma). ¿Pero también habrás tenido experiencias hasta darte cuenta de que reaccionas mal no? Quizás tengas que desreprimir varias veces por trauma / enfermedad, y decir varias veces, ¡basta ya (seguido de saber cual es el problema psicológico asociado a la reacción, y que se repite en varios aspectos de tu vida)!
* Pensamientos intrusivos (no necesariamente TOC) te acercan un poco más a lo que te pasa. ¿Mi padre me pintaba la habitación a traición para que me pusiese a decorar compulsivamente (para verme por fin bello; ¿mi abuelo Luis no se sentía bello?)?
* Curación: retener líquido, con síntomas "severos"; luego viene la fase de "urgencias", con escalofríos, epilepsias y fallos de corazón (fase de curación aguda, que no suele pasar de las 50 horas); la tercera de curación trata de expulsar líquido + cicatrizar (síntomas más suaves). A veces, con la epilepsia, se rememora el conflicto. Cuando venía de la Universidad, tenía epilepsias (sufría: mucha tarlla mental, dormir poco...).
##PROCEDIMIENTO BORRAR-NUEVO (para borrar un trauma que ya se ha solucionado; suena a la Psicología Energética Cuántica, que se mete en las células, los cuerpos sutiles...). ¿NO se borra la experiencia no (habría que repetir las pruebas de vida)?:
- 9 pasos:
1. Pedir asistencia, ¿a tu "ser superior" (tú en el futuro, más evolucionao)?
2. Nombra conflicto. Di al terapeuta si estás preparao.
3. Recostar en atmósfera agradable. Cerrar ojos. Reactivar conflicto (debe durar poco, para no volver a fase activa). Homeopatía, ¿moderna no? Pulverizar Uranium metallicum D60 (diluido en agua o alcohol) sobre órgano, ¿y región cerebral? Por fuera claro. ELECTRODO (centrífugo, para olvidar) SOBRE ELLOS 5 minutos (intensidad media). Al final, se ve / imagina el conflicto, como un nubarrón sobre ti.
4. 1 minuto. Gracias por aprender de la situación (puedes decirlo para ti mismo).
5. 3 minutos. Imaginar nubarrón alejado por viento, se deshace en cielo azul. Sientes libertad y ligereza.
6. 15 minutos (sentir de forma gozosa e intensa, en cuerpo y alma). "Confío en mí" (la frase que explica cómo has mejorado interiormente... Concretar más que yo) + música que llegue al alma del paciente + ¿estímulos luminosos que salen de gafas, sobre los ojos? ¿Siguen cerrados no?
* Adamas D6 (pulverizar sobre órgano y región cerebral), ¿para recordar?
* A los lados de la cabeza, aros magnéticos (centrípetos) de ferrita, con polo sur hacia dentro (que se dé cierta repulsión). ¿Para recordar?
7. 3 minutos. Imaginar situación adecuada para usar lo nuevo (todos me insultan, pero "confío en mí").
8. Dar gracias a quien te ayudó (del "mundo" espiritual; pongamos que no hay varios mundos / planos, hay uno, y ves o no ves lo inmaterial; ES ESENCIAL QUE CONCIBAMOS UN SOLO PLANO).
9. 3 semanas: pensar / sentir lo nuevo cada mañana tarde ("confío en mí", o la frase que toque).
####Repaso:
##Cuestiones consulta:
- ¿Manos frias o calientes? ¿Frio en calle o shock por la propia consulta? Diestro o zurdo. Edad: menopausia (45-55), a lado masculino (cambian las enfermedades). Hombres 70-75 a lado femenino, izquierdo.
* Hombre "femenino": zurdos sin constelacion o problema testículos.
* Mujer "masculina": zurda + territorial (ovario)...
- ¿Cual es la fase? Activo (gastritis, angina pecho, diabetes...). Curacion: hernia discal, neumonia... Tiene que suceder algo bueno (en tu interior) para la fase de curacion: jubilacion, examen aprobado, reconocimiento del jefe, ya no...
- ¿Peor suceso en ese tiempo? ¿Que te estresaba / daba + miedo? ¿Que te gustaria cambiar en tu vida y de que depende tu felicidad?
- El autor de violencia que no piensa en lo que hizo, no comenzara SBS, pero el destino podria pasarle factura. Si hay mala conciencia: SBS hombro.
- Lo ideal es aceptar que hiciste aljo "malo", y la culpa desaparece.
##En fase activa, nivel animico sólo (el origen es siempre la psique). ¿Significa que la neurolojia es un cero a la izquierda?
- Solo en su parte superficial el teatro es entretener. Las tragedias griegas tenian 2 fases (conflicto, vuelves a sentirlo, y curacion). La novelas deben ser así, y blancas.
* El teatro moderno esta vacio de sentido. Falta la unión con la naturaleza y la espiritualidad, y responsabilidad para curar.
##Procedimiento BORRAR-NUEVO (del propio Bjoorn, repasamos un poquitín de na):
- 2. Nombrar conflicto + ¿tas preparao? Responder voz alta.
- 6. Sustituir vacio por algo positivo. Sentir, ¡y pensar! De forma intensa...:
* A izquierda y derecha de cabeza, aros magnéticos (centripetos, para grabar) de ferrita.
- 9: 3 semanas, pensar / sentir lo nuevo cada mañada y tarde para fundirse.
##Varios:
- ¿Pérdida de ser querido afecta al testículo con frecuencia?
- Los huesos (sobre todo los planos) forman sangre, y si estan malitos...
- Desvalorizacion porque hija no cumple su ambicion deportiva.
- Niña 4 años, eccemas todo cuerpo. Conflicto inicial, el parto (separación, cesárea). Consecuencia: ataques dermatitis en curación.
- ¿Conflicto de decepcion por querer él separarse? ¿Tarda mucho en aparecer, si ella echa mucho de menos al principio?
- Miedo teritorial (mucosa larínea) cuando la agenda esta completa. Se decide no fijar fechas.
- Unico conflicto con el que no adelgazas: refugiado. Colectores del riñón, por tener miedo a perder... Materialismo en general.
- Mal alimentado: desvalorizacion, debil para mantener el territorio...
- Con alimentacion mala, si tienes buen humor... el PH es genial. PH: si te pasas, parásitos (envejeces, ¿a menos que uses cebolla...?).
- Con presion en meninges se produce el dolor de cabeza. Medidas: cabeza fria (baños frios...), pasear al fresco, protejer cabeza de sol y calor, glucosa "orgánica", sobre todo por la noche. Simpaticotonicos (vitamina C...). Mojar pies descarga la cabeza. Poca sal, para no retener ajua (aljo que empeora todos los SBSs). MMS es oxidante (tomar poco tiempo).
* Mucho dolor o fiebre, simpaticotonizar también: analgésicos naturales, duchas frio calor (o frias), bolsas hielo, especias picantes.
##Refugiado + SBS de otro conflicto, se llama "sindrome": heces solidas, tendencia al estreñimiento para aprovechar / ahorrar agua, retencion agua.
####Biografía del Doctor Hamer. NO la pongo, pero es muy interesante. ¡Los médicos "que defienden sólo la Universidad", al salón de reciclado pero ya!
####LAS MEDIDAS TERAPÉUTICAS EN LA NUEVA MEDICINA GERMÁNICA REQUIEREN SENTIDO COMÚN:
- Nuestros ancestros solían seleccionar a los individuos más sabios (no los más memorísticos, sino los psicológicos, álmicos) para servir como hechiceros y hombres de medicina.
* Ahora el paciente asume la responsabilidad de resolver un conflicto psicológico. ¡El médico tiene que ser un poco psicólogo, decirle las fases! El paciente percibe (debería) como aceptable el estar cansado y falto de energía por varias semanas en la fase de curación.
* ¿La gente no muere del cáncer, sino del pánico (suyo o producido por un ignorante), que dispara otros problemas? NADIE DEBE DEFENDER LO SUYO SI ES MALO, AUNQUE LES DÉ DE COMER, AUNQUE SEA DURO ACEPTAR QUE LLEVAN TODA LA VIDA HACIENDO MAL. Se necesitan neurocirujanos y expertos en cuidados intensivos eso sí. Para terminar, NO todo paciente deshauciado por la medicina oficial (muchos en las últimas) puede ser curado por la NMG, sólo la gran mayoría.
- Las reparaciones:
* Un animal en la fase de curación se mantiene quieto, duerme mucho y espera calmadamente hasta que alcanza el estado de salud. Y no se expone al Sol con edema. ¡BUENA INFORMACIÓN! ¡Abajo las empresas actuales!
* Los pacientes en la fase de curación sufren más durante la noche, hasta las 3 o 4 de la mañana (el día se acerca).
* Recordad que el temblor de manos es un buen síntoma (Parkinson; conflicto pendiente; no lo hay por desgracia).
- Más cosas:
* Bajo ninguna circunstancia debemos estar tentados a dividir la Nueva Medicina Germánica en subespecialidades.
* Cuando el conflicto del paciente ha sido resuelto (fin de fase activa), es importante llevar a cabo un TAC tan pronto como sea posible debido a la inminente crisis epileptoide. El ataque cardiaco ocurre aproximadamente de 2 a 6 semanas después de la solución del conflicto.
* Alzheimer: conflicto de separación en cada hemisferio. ¿A que guarda relación con los geriátricos? ¿Qué es lo primero, el geriátrico, o el Alzheimer? Bueno, también está la carencia de vitamina B12, y más cosillas (un no aceptar, negarse a ver la realidad...).
- El TOC. Dos conflictos activos (¿que provocan pequeña curbatura del estomago, cólera, gran miedo y autismo?). 
* Pongo mi ejemplo personal: primero un problema de territorio (no me dejan decorar mi propio cuarto, o se meten a cambiarlo sin mi permiso pintando y agudizando el asma). El segundo puede ser asco (al ver la habitación; ¿ayuda que tenga mucho de Libra en la carta astral? ¿Y los que tengan mucho Virgo, en vez de decorar, se lavarán las manos?) o impotencia quizás.
* Las cuatro reglas: 1. Psicología. ¿Problemas de autoestima en mi abuelo Luis? ¿Cuanto más me quiera REALMENTE o más bello me vea, menos decoraré? El cuarto es mi agujerito / refugio, no un enfermizo palacio suntuoso, doy gracias, y comprendo a quien se metió en mis cosillas. 2. El problema es el núcleo caudado, que lo tengo muy chiquitín, cada vez más, y hace que no pueda pasar de las cosas. 3. Cuando me dé por decorar, hago algo productivo (resumir, por ejemplo). 4. Cuando ya está uno más o menos bien, decir "yo no soy el TOC, el TOC viene a verme de vez en cuando, el hemisferio izquierdo hace jugarretas a veces". Yo no soy lo que el cerebro piensa en el momento.
* Miles de hámsteres fueron expuestos constantemente a humo de cigarrillo. Ninguno manifestó carcinoma bronquial o cáncer de pulmón.
* ¿Qué pasa si siempre tenemos miedo (por la tele...)? Que la célula trabajará siempre en modo simpáticotónico (activo), no vagotónico, vamos, que no se regenera.
* ¿Un foco de Hamer es un vórtice, un regenerador cuántico? Parece que sí.
####Y más:
- Tumor en ventriculos cerebrales:
* Lado derecho cerebro: no obtener algo. Lado izquierdo: no poder deshacerse de algo.
- Conflicto: por creer que no se puede pensar lo suficiente (adenocarcinoma en red vascular para suministrar mas liquido cerebral, quizás porque piensas que no puedes memorizar nada al estudiar o entender los problemas de matemáticas).
- Conflicto de presa: muy poca luz, esta muy oscuro:
* Se sufre por falta de luz del dia (mineros...). Uno se siente separado de Dios y abandonado por los ángeles. Entonces se produce mas melatonina para podernoslas arreglar con menos luz.
* Terapia: se debe dormir lo suficiente, y cuidar el ritmo de sueño. Tomar enerjia del sol (la que puedas). Mirar al sol al atardecer. Visualizar, ser creativo, meditar (quedarse embobao). Evitar flúor, cafeína, azucar y demas venenos. IDEA CENTRAL: SOY SIEMPRE CONSCIENTE DE MI ORIJEN DIVINO. SU LUZ ME ILUMINA.
##Insomnio:
- Causas:
* Fuerte actividad conflicto (estres). Estas despierto para resolver el conflicto.
* Fuerte curacion. Por el dia tas cansao, no te duermes hasta muy tarde, bien porque el cuerpo quiere que estes vigilante por la noche (por estar débil), bien para no caer en una supervagotonía (de supercuración) por la noche. El café puede ayudar en fase de curacion (aunque suene increíble), ¡pero por el día cede y echa siesta por el dia!
* Pausas nocturnas de respiracion por relajacion del paladar (impide paso aire, y es mas frecuente en obesos). Fuertes ronquidos se alternan con larjas pausas de respiracion.
* Hipertiroidismo o Hiperfuncion de corteza / medula suprarrenal.
* Miedo a la muerte.
- Terapia:
* Mantener pies calientes (baño, calcetines).
* Movimiento abundante. Pasar tarde tranquilamente (sin TV / ordi?). No cenar tarde.
* Acostarse siempre a la misma hora y no muy tarde.
* Rituales de desconexion: respiraciones profundas en la cama, pasar revista del dia, "despedirse" del dia y desconectar.
####Ojo:
- Blefaritis, conjuntivitis:
* Perder a aljuien de vista. Separacion visual. Un niño permanece con los abuelos durante las vacaciones de sus padres. Al rejresar estos, curacion (conjuntivitis).
* Otro ejemplo: distanciamiento de intereses con la pareja. Ella lo -a perdido de vista. Cuando deja de importarle el asunto, conjuntivitis (curacion).
* El ultimo: costumbre reunirse todos juntos dia Difuntos (te encanta). Desde -ace 8 años no ocurre la reunion. De repente vuelve, y -ay conjuntivitis (curacion).
- Ojos secos, causas:
* Efectos secundarios pildora, duireticos, para la presion arterial, antidepresivos, colirios vasoconstrictores...
* Falta de estrojenos con la edad. La falta de -ormonas des-idrata.
* Trabajar ordenador o ver tele: se parpadea con menos frecuencia, -ay menos "lajrima".
* Pocos estimulos de la naturaleza: luz, ajua, aire...
* La falta de movimiento reduce el metabolismo en jeneral.
- Sensibilidad a la luz, dilatacion excesiva pupila, cejuera duirna, pupila irrejular:
* Presa. Ojo derec-o, no consijo aljo por estar oscuro. Izquierdo: no me des-ajo de aljo / no puedo evitar aljo desajradable o pelijroso. Esta oscuro. En sentido fijurado: no se recibe suficiente atencion. Quizas no poder encontrar lo espiritual (que se encuentra en tu oscuridad, basicamente), lo luminoso, la claridad.
* Ejemplo: obrero competente y cualificado con muc-a experiencia compite por un puesto en la oficina de empleo con auxiliares no cualificados. "NO recae suficiente luz sobre su cualificacion".
- Estrabismo:
* Converjente: no querer ver mas a aljuien o contemplar uan situacion insoportable. No poder -uir de una situacion sin esperanza. Ejemplo: el ojo "pareja" se desvia al interior para acojer al padre, que tras el divorcio, esta lejos.
* Diverjente: se ec-a de menos a aljuien / aljo y se busca "-acia fuera". NO poder o no querer ver a aljuien / aljo. Ejemplo: el ojo desviado busca al padre en la distancia. ¿Antes del divorcio ya empiezan a distanciarse los ojos del niño (los padres discuten y se da cuenta...)?
* -ipertropia, ciclotropia: no poder, deber o querer mirar -acia arriba o -acia abajo. No poder, deber o querer mirar -acia dentro y abajo o -acia fuera y arriba, o bien jirar el ojo. En la practica, no querer ver a aljuien o aljo. Jeneralmente conflicto activo-pendiente.
####+ del cerebro:
##Ictus (ataque cerebrovascular):
- Conflicto motor: frio (paralisis, menos frecuente) o caliente (fulminante fase de curacion).
- Frio. Miedo de ser inmovilizado. NO poder, deber o querer moverse.
* Musculatura facial: quedar en ridiculo.
* Musculatura -ombros y espalda: no poder evitar aljo / a aljuien.
* Abductores flexores (brazos y piernas): no poder sujetar aljo, acercar o abrazar a aljuien. ¡Que cabrones los del coronavirus! Saben y actuan sibilinamente.
* Abductores extensores: no librarse, apartarse de aljuien / aljo; empujarlo o rec-azarlo, sacudirlo. A mi me da cuando aljuien -abla mas de lo normal (sin duda falta de empatia).
* Pierna en jeneral: no saber como sejuir. NO poder correr suficientemente rapido, escalar, subir, bailar, saltar, mantener el equilibrio... ¿Y si no -as consejuido todavia -acer malabares?
* Sentido biolojico: reflejo de -acerse el muerto. En el mundo animal, al terminar el pelijro, termina la paralisis.
* Suele considerarse erroneamente debilidad muscular, EM o ELA. Si el paciente tiene problemas del -abla, -ay un conflicto en curacion de panico, o de no poder -ablar. Lajunas mentales pueden llevar al ictus (separacion en crisis de curacion).
- Caliente.
* Ejemplos. Un paciente es retenido desde niño por su madre dominante. Es -ijo unico y se escapa. Durante toda su vida se siente responsable de su madre y culpable porque no la visita lo suficiente (conflicto motor al no poder "des-acerse" de la madre). Tras la muerte de la madre, le da un jrave ictus (al fin y al cabo, curacion). otro: no poder sejuir el camino que uno quiere, no abandonar la empresa.
* fase de curacion: lo mas frecuente es en brazo o pierna en un lado.
* Terapia: aceptar la situacion como es y tener fe en curacion o mejora, si no, + conflictos probablemente (motor / desvalorizacion).
##Mas:
- Encefalitis (cerebro y / o meninjes):
* Conflicto: se corresponde con la localizacion del tumor.
* Fase de curacion: cada foco -amer en curacion causa encefalitis (mayor si -ay varios conflictos en curacion). La encefalitis no tiene nada que ver con uan infeccion.
- Meninjitis, meninjoencefalitis:
* Desvalorizacion moral-intelectual.
* Fase de curacion: -uesos craneo producen liquido intersticial: separacion de meninjes "en direccion al cerebro". Fuertes dolores de cabeza.
* Otras posibles causas: SBS del trijemino o als meninjes (en curacion). Relacion con conflicto de desfijuracion (ser -erido o sentirse atacado).
- -idrocefalia:
* Debido a obstruccion, al acumulacion de liquido -ace aumentar el tamaño ventricular.
* Conflicto: refujiado activo o [refujiado + curacion de otro].
* Fase: curacion intensiva. ¿Esto no es la crisis de curacion?
* Terapia: como ultimo recurso, -acer como la medicina oficial: tubo plastico en cerebro para que pueda salir liquido cefalorraquideo.
- Neurofibroma (tumor del nervio), "lobanillo":
* Conflicto: contacto o dolor. Se percibe un contacto como doloroso, molesto o no deseado. Empujon, jolpe, caida, dolores -uesos... El orjanismo puede anular la sensibilidad periferica (dolor). Con la -inc.azon del recubrimiento de los nervios se atenua el dolor. En fase de curacion posible -ipersensibilidad inicial.
* Terapia: "Una capa protectora me proteje. Solo dejo que se acerquen personas o cosas que me -acen bien". Esto me suena a fatija cronica. Operar es arriesjado.
####Autismo (no he dicho asperger / cabeza fresca por usar básicamente el hemisferio izquierdo / tonto exactamente). Conflicto de pánico o de no poder hablar y conflicto de enojo territorial (diestro / a: conductos biliares con cálculos como primer conflicto). Sentido biológico: trabajador aplicado que no para hasta el final, para la manada:
- Parte derecha temporal atrás, parte izquierda delante. Eso, si es un hombre heterosexual. Un hombre homosexual actuaría como una mujer (creo), y una mujer lesbiana, como un hombre (pero una mujer madura actúa como un hombre, y...).
* Muchos olvidan, ¿por crisis de ausencia no epiléptica? ¿Y tienes que empezar de cero a explicarles? LA "MUJER" (EQUIVALENTE) TIENE UN CONFLICTO DE IDENTIDAD (y primero, el conflicto asociado a la laringe). Cuantas más pruebas les haces, más los traumatizas.
* Los autistas maniacos ("no puedo, estoy ocupado"; y así no contactan con la gente; yo no contacto, porque no saben mucho de moralidad), me suenan a enojados. Si a alguien le va la tecnología...
* Investigación. ¿Cómo vivió el feto lo que le pasó a la madre (un robo...)? ¿Dónde empieza el retraso madurativo (tu cabeza almacena información y quizás saques dieces, pero no aprendes muy bien de la experiencia)? Grandes peleas entre padres, padre ausente, violencia, gritos... Cuando nacen en el hospital y los separan momentáneamente de mamá... Y con la cesárea, otro trauma (ni nacen; psicológicamente, pueden tener marcado "que algo falta", ¿y eso se relaciona con el hígado, puede ser un problema territorial?).
####La homosexualidad, Hamer (Nueva Medicina Germánica):
- HOMOSEXUALIDAD. Hombres (hemisferio derecho): pérdida territorial (de una persona). Arterias coronarias (zurdo, más masculino: venas). Mujeres: frustración sexual (¿o venas?). El mecanismo de supervivencia de los homosexuales protege los asociados cerebrales y órganos implicados.
* Cuanto más reprimas tu parte femenina, más teatro de macho harás, y más homosexual serás. ¡Casi todos los hombres que conozco son homosexuales de alguna u otra forma!
* ¿Las almas viejas tienden a la bisexualidad por ser avanzadas y haber encarnado tantas vidas como hombre y mujer?
* Se produce antes de la madurez biológica (¿14-16 años?), y originalmente antes de los 7 años.
- El conflicto de "miedo" es propiamente femenino y el de "territorio", masculino (yo perdí a mi abuelo Virgilio, y me femineicé). Ciertos pares de traumas, pueden femineizar al hombre (masculinizarlo si es zurdo), y tras parir un varón, la madre femeneizará en el útero a los siguientes varones SEGUIDOS:
* La castración no se trata sólo de la pérdida de pequeños órganos.
* Un trauma emocional con el sexo opuesto (que te rechacen las muy...), puede provocar que el individuo cambie el centro rector de su sexualidad para evitar "toparse" con la repetición de su trauma. Una humillación constante y una minusvaloración de su virilidad, hace que el hombre se feminice y, ulteriormente, desarrolle fobia por las mujeres.
* Con el cambio de hemisferios, se produce una disociación mental "esquizofrénica" (el hemisferio no apagado no se puede hacer cargo por completo de la situación).
* El empate hormonal (andrógino) es perfectamente natural en la especie humana y se vive cuando las mujeres alcanzan la menopausia y los hombres la andropausia física.
####Caso completo: Carcinoma de esófago (tercio inferior):
- CONTENIDO DEL CONFLICTO BIOLÓGICO. No sentirse capaz de tragar un bocado. Frecuentemente relacionado al hogar, vehículo, o algo similar. El bocado es algo que uno quiere "incorporar", pero de repente no es capaz. El cáncer de esófago significa que uno quiere tragar el bocado pero no puede. En contraste, en el cáncer de epitelio escamoso, uno es forzado a tragar algo, pero no es deseado, uno se siente como si fuera a escupirlo. Esta diferencia, en principio, aplica a la totalidad del área oral y nasofaríngea.
- FOCO DE HAMER (FH) EN EL CEREBRO. FH en bulbo (puente troncoencefálico), región lateral, derecha.
- FASE ACTIVA = SIMPATICOTONÍA = CRECIMIENTO TUMORAL.
* Tipo secretor: aumento celular para digerir y tragar el bocado.
* Tipo plano reabsortivo: para probar la consistencia de la comida (igual que la boca).
- FASE DE RESOLUCIÓN DE CONFLICTO = VAGOTONÍA. Destrucción del tumor mediante degradación caseosa.
* Los residuos a menudo son mal interpretados como "varices esofágicas". Previamente, estaba mal interpretado también como un indicador de cirrosis hepática con mal pronóstico.
* Junto con el "síndrome" (retención de agua), los tumores esofágicos pueden producir sangrados amenazantes, particularmente cuando se sangra al intestino. Típicamente, el paciente tiene sudoraciones nocturnas y se encuentra extremadamente cansado. Los pacientes pueden hacer frente mucho mejor cuando conocen que las complicaciones son temporales, y que el sangrado puede ser regulado con, ¿transfusiones eventuales (agua de mar siempre, agua de mar)? hasta que se complete el proceso de sanación.
####Terminando:
- Epilepsia ACTIVA: no poder moverse o seguir a los demás incluso al hablar.
* Si de repente pasas de ellos o ya no estás con ellos, ¿llega el desmayo?
- Enojo territorial (conflicto de presa podría ser): el puesto (bocado podría ser) era para ti, y en el último momento se lo lleva otro, ¿o se lo lleva alguien que crees que se lo merece menos?
* Miedo territorial (conflicto de ectodermo podría ser), ¿alguien te puede quitar algo que es tuyo, pero no lo ha hecho todavía?
####REGRESION CON AYUDA, por Brian Weiss: 
- Todo lo que esa hermosa luz que imaginas toque, cuando se vaya esparciendo por tu cuerpo, todos los tejidos y órganos, cada fibra, cada célula de tu cuerpo, se relajará completamente, liberándose de todos los dolores y de todas las molestias.
* Ya te sientes profundamente apacible y tranquilo. Ahora siente o imagina que la luz se esparce desde lo alto de tu cabeza hacia abajo, por la frente, por detrás de los ojos... ¡Menudo tostón hasta llegar a los pies! 
- Dentro de un momento voy a contar hacia atrás, de cinco a uno. Cuando llegue a uno te encontrarás en un estado muy profundo, tu mente se habrá liberado de los límites normales del espacio y el tiempo. Puedes recordarlo todo.
* Basta con que abras los ojos y regresarás inmediatamente a tu estado normal, con pleno control, sintiéndote relajado y descansado.
- Si quieres continuar, imagina o siente que desciendes lentamente por una hermosa escalinata. Al pie hay una entrada con una luz intensa al otro lado. Caminas hacia la entrada, sabiendo que tu mente ya no está limitada por el tiempo ni por el espacio. Puedes recordar absolutamente todo lo que te ha ocurrido.
* Cuando cruces, estarás en otro momento. Deja que tu mente elija el momento, de esta vida o de cualquier otra. Puedes regresar a un momento en el que surgió un síntoma, un sentimiento o una relación turbulenta.
* Emerges a la luz. Primero te miras los pies. Miras qué calzado usas: zapatos, sandalias, descalzo... Ahora subes la vista por el cuerpo. Mira la ropa, manos. Ves cómo eres, si es de día o de noche, si estás adentro o afuera. Trata de saber la fecha.
* Mira a tu alrededor, observa la geografía, la arquitectura, las plantas y los árboles, si hay otras personas allí (podéis preguntaros cosas).
* Busca las respuestas a tus preguntas, a tus síntomas. Si hace falta, puedes retroceder o avanzar en el tiempo. Si sientes alguna inquietud, basta con que flotes por encima de tu cuerpo, observando sin sentir ni participar activamente. O si prefieres, abre los ojos y pon fin al ejercicio.
- Si no has puesto fin todavía. Tu mayor perspectiva te permite comprender por qué ocurrieron los acontecimientos y qué significan en realidad. Mira si alguna persona de esa vida está contigo en tu vida actual. Si quieres, ve al final de esa vida y experimenta tu muerte.
* Flota por encima del cuerpo y repasa tu vida. ¿Qué lecciones tuviste que aprender?
- Fin del evento. Ya es hora de regresar. Dentro de un momento voy a contar de uno a cinco. Cuando llegue a cinco, abre los ojos y estarás plenamente despierto, alerta y descansado. Lo recordarás todo.
* Uno: Todos los músculos, todos los nervios del cuerpo, completamente relajados. Dos: Despiertas poco a poco, te sientes muy bien. Tres: Más y más despierto y alerta. Cuatro: Casi despierto, te sientes estupendamente. Cinco: Abres los ojos completamente despierto y alerta, sintiéndote muy bien.
####AUTO REGRESION: 
- Lugar tranquilo y cómodo. Recuestese (no se acueste, que podría dormirse). Cierre los ojos y relajese (busca en tu cuerpo y mente la ausencia total de tension. Evita los pensamientos). 
* Respire profunda y lentamente. Concentrese absolutamente en el ritmo de su respiracion. 
* Relaje su cuerpo a la vez que respira. Con cada inspiracion guarde el aire dentro suyo antes de exhalar y cuente mentalmente hasta 5. Es importante que la inhalacion se realice de la forma mas lenta y profunda posible. Con cada repeticion piense que su cuerpo se va relajando. 
* Parece uan copia. Concentrese en el sonido de su respiracion y evite todo pensamiento. Su respiracion debe ser profunda y constante. 
- Imaginese a Ud flotando y deje que el agua lo lleve. Deje que los recuerdos lleguen a Ud.
####Txumari, nuestro boticario de la abuela, con la NUEVA MEDICINA GERMÁNICA. Hay personas que jamás prueban la grasa y tienen colesterol. Aquí hay algo emocional. Txumari curó a mucha gente fuera de su consulta con esta pregunta, ¿has tenido algún shock? Alguno se desmayó y dio las gracias:
- ¿Ahora te sienta mal lo que antes te sentaba bien? Puede ser falta de amor que se espera. Cuando comprendas por qué esa necesidad de amor... sanarás en gran parte:
* ¿Si tienes cubiertas tus necesidades de amor tienes mejor flora intestinal, y ésta trabaja mejor (pues hala, a hacerse introvertido je je)? Lo mejor es tener unas necesidades ínfimas, eso es ser buena gente.
- Diabetes: no suelen dejar entrar el amor a sus vidas (se cierran, como la célula).
- Tumor en el ano porque su familia no le puso silla en Nochebuena (el ano representa la identidad, lugar que ocupo en mi clan).
- Una sinusitis puede ser por necesidades excesivas de comunicación e ira reprimida (no diste opinión sobre un plato que no te gustaba...).
- El polen es la parte masculina de las plantas, ¿el novio? MIENTRAS LA PERSONA ESTÁ PREOCUPADA DE SU ALERGIA, EL DOLOR PSÍQUICO BAJA.
-  Un chaval tenía un problema con el hueso radio, y su radio de acción era pequeño (su padre no le dejaba ser lo que él quería).
- Cuando un niño (0-8 años) tiene muchos mocos, es porque "no huele a la madre" (está ocupada...).
- El tumor en un perro puede ser simpático (mismas enfermedades que sus dueños). El perro podría tener un tumor también si ya no le dejas dormir en la cama, si cambia de lugar...
- Un mioma es el deseo inconsciente de ser madre, pero no es el momento, o no encuentro con quién...
- Obesidad: por ser niño no deseado, quieres hacerte notar con los kilos (por ejemplo). Pon una nota en los dulces que diga: aquí no está la verdadera dulzura.
- Lupus heritomastoso sistémico: me he sentido agredido y no he podido defenderme. Caso 1 (Lupus estomacal): no puedes digerir que no puedas defenderte del jefe. Caso 2 (pulmón): te asfixia estar cerca de alguien, sientes el aire venenoso.
##Iridología: el ojo izquierdo habla del pasado y lo emocionalmente no superado. El derecho, del presente.

####PSICOLOGÍA Y VARIOS.
####ESTO PARECE DE "IMPORTANTE" (MISIÓN): Algunas pruebas que se te pueden presentar (dependiendo de tu misión de vida, sufrirás más abandono de gente poco avanzada / injustamente, incluso porque tú has subido de nivel de consciencia... Pero si lo sufres, piensa en qué tienes que mejorar en ti: independencia, autoconfianza para hacer cosas maravillosas y ser "protegido" si te curas psicológicamente con ganas, que no te importe lo que digan los demás y sí tus objetivos nobles NADA MODERNOS, comprender al otro aunque haga ruido...):
- Desvalorizacion, poco reconocimiento, personas que abusan de tu generosidad, estrechez material, gente que con toda justicia no acata tus órdenes, gente avanzada a tu alrededor a los que ves como locos...
####Si te llaman algo de lo que no estás seguro, hay más posibilidades de sufrir.
####Cuando creas que las cosas empiezan a ir bien, probablemente irán mejor. Nada tiene más inercia que las buenas noticias (Rafael Vidac).
####disfrutar la soledad es un superplus de inteligencia. Aquel que disfruta su soledad, escoge mejor las compañías, quien NO puede estar solo, escoge cualquier cosa, por desesperación. ¡Menudos cretinos pesaos!
####¡Todos los no inconscientes, al psicólogo por así decirlo! LOS CONSCIENTES VAN MÁS VECES AL PSICÓLOGO. LOS INCONSCIENTES NO DAN MUCHA IMPORTANCIA A SU LIMPIEZA DE PSIQUE. SE CREEN MÁS O MENOS COMPLETOS, ¡PERO QUÉ "SOBERBIA"! ¿Y LOS QUE CONOCEN EL MEDIO Y SUS MANIPULACIONES PERO NO SU INTERIOR?
####Condición necesaria amar a otros (Thayah Elim): amo tu sombra y tu parte luminosa porque he aprendido a amarlas en mí misma antes.
####Neurosis:
- Cuando no estamos a la altura (cargamos con muertos astrales, no hemos sido bien educados...) de los problemas, experimentamos ansiedad. Cuando experimentamos en repetidas ocasiones estrés y ansiedad, comenzamos a desarrollar patrones de conducta para evitar o mitigar el problema, tales como vigilancia, conductas de escape (me suena a rituales toc), y pensamiento defensivo.
* ¡PERO LOS NEURÓTICOS ACABAN SIENDO MÁS FUERTES SI LO COMPRENDEN Y SUPERAN! ¡Y LOS BRUTOTES EXITOSOS SIN MISIONES DE SANAR EL ÁRBOL FAMILIAR, REALMENTE, LLEVAN VIDAS RÁPIDAS... Y FRACASADAS, NO MEJORAN POR DENTRO, Y EL ALMA VIVE MUCHAS VIDAS, ESO SE APROVECHA!
* Si el niño no percibe amor (incluso si existe realmente), él o ella se quedará con una considerable ansiedad muy general, así como sentimientos de incompetencia y de no ser deseado.
* El adolescente rechazado (muy superficial, la adolescencia, NO debería vivirse) se queda con la sensación de aislamiento y odio a sí mismo (los rechazados son personas más bellas que los que rechazan, con misiones de voda más difíciles / almas más avanzadas).
* Luego viene la competencia / el éxito: en la Universidad, en el lugar de trabajo... Estúpidas ganas de respeto social en vez de autocomprenderte y amarte...
- Timidez enfermiza:
* Has empezado la preadolescencia y ya nadie te pasa la mano por el pelo, y tienes miedo de quedar mal con los vecinos del pueblo. Un día coges la bici y te vas al concejo vecino, es un alivio, allí casi nadie te conoce.
* El Verano era lo peor: unos días sin ir a clase, y ya te da miedo todo. La vuelta a clase, con bronceado "antártico", era espeluznante. 
* Llevarlo bien lejos y que allí recupere autoestima. El "es muy fácil, la calle no come" o el "eso son tonterías" son de brutos.
##Toc: el exceso de adrenalina lo empeora. Se libera adrenalina para deshacernos de: trigo (cadena de gluten larga), lácteos, huevos, soja, azúcar, cacahuetes y maíz. La ordenación compulsiva puede venir muchas veces de un enfado pasivo.
##neuroplasticidad para trastornos psíquicos:
- El TOC es muy desagradable y continuo: el cíngulo anterior produce angustia por el error (hasta que aceptas). La información pasa al cíngulo caudado, que nos permite pasar a otra cosa. A largo plazo, ¿el cíngulo caudado se vuelve chiquitín? Pasos: 1. La cosa está bien. 2. ¡Es mi cíngulo! 3. Si "empieza la cosa", hago algo productivo. 4. Cuando puedes ignorar las compulsiones. Tú no eres el TOC.
- Desorden del estrés postraumático: todo te recuerda al episodio (es el infierno). Terapia: tomar Propanolol (supongo que hace que los recuerdos NO sean terribles) y poner por escrito el relato de su trauma con todo detalle (menos de 10 minutos). A la semana siguiente vuelven a tomar el propanolol, y leen su relato.
- Esquizofrenia (poquito tengo): ¿Están la capacidad de atención y la espiritualidad enfrentadas? Juego con botones de arriba y abajo, según lo que oigas, para la velocidad de procesamiento.
####Prebrindis 2022 (fuerza: conservar la parte femenina. Y NO te olvides de mostrar debilidades para ser coherente).
##Nota: incluir es como ser devorado. Hay que integrar a los diferentes (no hablo de las modas del siglo XXI, vomitivas).
- 2022:
* Lo mejor: valorar mis objetivos nobles por encima de agradar a los demás. Me he metido con lo peor de Figaredo, y he aprendido a caer mal. El Universo protege a quienes son como yo.
* Lo peor: seguir pensando en la gente normal como en bestias robóticas (por sus sueños poco sabios). Ellos pueden ayudar y "lavarme los pies".
* Hábito automatico: NO esperar a tener ganas para relacionarme con la gente, ver la vida demasiado como una obligación.
- ¿Con que emocion me quiero caracterizar en 2023? Afecto...
- BRINDAR POR OBJETIVO PARA EL 2023: dejar de ser tan corto de vista. Procastinar (te hace corto de vista): miedo a fracasar (o tener éxito), al juicio ajeno, al cambio, a lo desconocido. ¿Ansiedad o frustración asociadas? ¿Psicología Energética Cuántica pa limpiar mi parte sutil? ¿Menos intensidad escorpiana, quererme para tranquilizarme? LA PRISA TE LA METE LA ESCUELA, Y CLARO, TE AYUDA A DEJARLO TODO PARA EL ÚLTIMO MOMENTO (SER CORTO DE VISTA).
- Deseo años sucesivos: ser buen terapeuta (acompañar a otros con Psicología, tras ver mi misión de Nodo Norte...).
##Brindis:
- Agradezco lo recorrido (lo negativo hace que esté aqui tambien), y digo donde quiero ir (decretos: escribir, pensar, decir... NADA DE "no sé si lo conseguiré", es ruido. Algo que te guste y te dé cierto miedo cosquilleante).
- Reconocer fallos actuales, brindarlos al Universo, y contar a tu gente los más importantes.
####psi hermetismo Pablo Lema. En nuestra infancia, nos han enseñado (mal) que para lograr algo y tomar decisiones, primero hay que saber, tener dinero...:
- Te propongo que mañana te levantes una hora y media antes de lo habitual y emplees el tiempo en lo que Más Desees para ti. ¿Qué pensamientos y sensaciones has tenido?
* ¿Cómo podría interponerse el ego en tu camino? ¡EL EGO SE LLAMA MONO, UNO, EL NÚMERO DE LOS PAIOS! ¿Piensas tu vida desde el costo o desde el Valor? Confía en tu capacidad de creación y tírate, la alfombra mágica estará ahí para recogerte.
####Hermetismo iniciático desde Argentina:
- Pablo: el caos es un proceso previo a crecer internamente (ves como reaccionas caóticamente, y de donde vienen tus reacciones no deseadas). En tiempos de crisis solemos conectar con la personalidad de los ancestros (emociones y pensamientos negativos...). ¿Cómo las pasaron los ancestros al tener que crear algo (ser un buen cantante...)?
* Honrar a tus ancestros es reescribir la histroia. Ellos torpezaron, tú... no pienses que superarlos es manchar la familia. 
- Cristian: si vas por la supervivencia, desconectas del exito, se acabo la "suerte". Cuando conectas con el futuro / los objetivos, conectas con la vida (eso si, vive el presente tras planificar).
* NO ahorres por asi decirlo, sigue el principio universal de la circulacion, sin miedo.
- LeoMB: la pandemia es el efecto de nuestra baja calidad como individuos (lo sutil se materializa).
* Introspeccion no es meditar a ver qué te sale, es un proceso largo de ver conscientemente como reaccionas, y qué hay detrás. Ilume = muerte del ser. ¡Nos han engañao!
- Caro: las personas Acuario (creativas, espontáneas) son lo contrario a las Tauro (comodidad).
- Sofia: divide tu casa / habitacion (si vives con tus padres...) en 9 cuadrados. El cuadrado del centro es el de la salud; tiene que estar vacio, para libertad de movimientos...
- Gabi. Yo puedo ser muy positivo: "puedo con todo", pero si no considero mis debilidades a la vez, atraigo lo negativo. Con juicio, ¡vaya, que gordo estoy, qué mala suerte tengo! Sin juicio: estoy un poco gordo, voy a comer mejor y mejorar para no tener miedo de las pérdidas materiales...
- Yo (aunque no estuve en el encuentro): hay un rollo "cósmico", como de planes ilógicos / jodidos del Universo para hartarnos y ver que lo mejor es cambiar de sistema (pero de base). Quizás el último paso sea quitar el dinero y vivir todos como una gran familia, con tareas, no contratos (implican horas infértiles en el trabajo). Puede que duela, pero quizás la única forma de salir de aquí, sea que todos admitamos que tenemos un monstruito adentro que se llama sombra (las represiones), y que hasta que no nos libremos de ella (por Carl Jung...), no volveremos a ser realmente una sociedad inocente (en el buen sentido).
- LeoenP-i: esta pandemia era necesaria. Hay mas amor por el bien comun. Crisis: crisalida (gusano se convierte en mariposa). Kairoos, Dios de la oportunidad, aparecia y desaparecia en un santiamen. Tenias que agarrar su mechón de pelo de delante para aprovechar la oportunidad. ¿Es que NO nos vamos a poder cambiar tan facilmente tras el confinamiento? ¡Ordena el cuarto (esto es mio), y te conocerás!
* Aprende a entender lo que dicen los sueños, escribe el mensaje sin adornos, aunque no tenga sentido. ¿NO recordamos / queremos recordar los sueños porque hay una parte nuestra que cree que no lo va a soportar? ¿Acostarse sin mirar la tele antes?
####Ejercicio del espejo:
- Anota en una lista los aspectos (virtudes, habilidades, conocimientos...) con los que te sientes satisfecho / te encuentras bien. Apunta: seres queridos, experiencias cotidianas... y agradece.
* Un ejemplo: soy disciplinado, soy empático... Tengo una pareja maravillosa (gracias), un trabajo ameno (gracias), doy gracias por mi situación financiera...
- Luego, todas las mañanas te miras al espejo enfocándote en los ojos (espejo del alma). Habla con tus ojos: muéstrate respeto y cariño, verbalizando tu lista con sentimientos, desde lo más íntimo de tu corazón. Esto prepara el terreno para nuevas experiencias.
####Desarrollar intuición. No trabajes como una mula (al menos con el cerebro), pues hay que relajarse. Y la intuición será la inteligencia del futuro (y no el hemisferio izquierdo, tan monstruoso):
1. ESCUCHA TU VOZ INTERNA: arroja al aire una moneda. En el aire, repentinamente deseamos que caiga de un lado, y ésa es la decisión del corazón.
2. TOMATE TIEMPO PARA ESTAR SOLO, alejado del teléfono...
3. ESTIMULA TU CREATIVIDAD. La creatividad y la intuición están íntimamente ligadas.
4. MEDITA. Las prácticas de meditación pueden despertar algo la intuición.
5. VUÉLVETE OBSERVADOR. Las personas intuitivas son más perceptivas, y eso tiene mucho que ver con que sean observadoras. Puedes empezar a llevar un diario en el que registres cosas que te resultan sorprendentes, novedosas o extrañas. De a poco comenzarás a encontrar coincidencias, conexiones sorprendentes o intuiciones precisas en tu vida diaria.
6. ESCUCHA A TU CUERPO. El cuerpo, la mente y el alma son un todo (toda enfermedad viene de la psique; los desequilibrios puramente físicos / "menores", no).
7. CONECTA PROFUNDAMENTE CON LOS DEMÁS. La intuición está ligada a la empatía, que es la capacidad de ponerse en el lugar del otro. Dedica tiempo a observar y escuchar a otros cara a cara, a comprender a tus seres queridos y a todos los que te rodean.
8. PRESTA ATENCIÓN A TUS SUEâ€˜OS. Puedes leer cuál es el significado de los 10 sueños más comunes.
9. TÓMATE TIEMPO PARA RELAJARTE. El trabajo constante que agota el cerebro y hacer varias cosas a la vez son dos cosas que arruinan la intuición. Sólo en los momentos de relajación somos realmente intuitivos.
10. DEJA IR LAS EMOCIONES NEGATIVAS (será fácil si observas las 9 reglas anteriores). Las emociones como el enojo o la frustración nublan la intuición.
####psi (no sé si tará repetío):
- Mandíbula ancha: se necesita llevar la teoría a la práctica.
- Mentón muy fino: se bloquea la salida del individuo (si es grande, te agotas rápidamente).
- El pectoral derecho es nuestro padre, ¿si me lo rasco es que mi padre no pudo lograr algo?
* Alguien llenaba su vida con trabajo para no recordar que su padre casi nunca estaba en casa.
- Tal vez no te casarás si le pusieron los cuernos a tu abuela...
####Gestología (Ramón Maristani...):
- Psicomorfología del rostro:
* Cuadrado (optimistas e impacientes). Trapezoidal (inteligentes y explosivos).
* Redondo (optimistas y vulnerables). Ovalado (idealistas y orgullosos).
* Triangular (adivinación y astucia). Rombo (emotivos).
* Mentón fino: bloquea la salida del individuo, ¡falsedad! Grande: te agota en nada.
- Cabeza:
* Evitar contacto visual directo: no sé si estoy o no de acuerdo, ¡dame tiempo!
* Mirar hacia abajo: no entiendes tal vez lo que se te dice.
* Jugar con el pelo: falta de autoconfianza e incertidumbre.
* Jugar con la oreja: falta de atención o interés.
* Tirón a la oreja: inseguridad.
* Apretar nariz: evaluación negativa.
* Barbilla sobre puño: inseguridad.
- Extremidades:
* Delante del jefe, cruzar brazos o piernas: miedo a que él sepa lo que piensas.
* + sobre piernas. Unir tobillos: temor. Piernas estiradas y apoyadas sobre el escritorio: prepotencia e inseguridad. ¿A más abiertas en general, más agresividad? Sentados: paralelas y unidas, ordenado; cruzar por la rodilla torciendo, ansiedad, perfeccionismo e inseguridad; sobre una pierna (se esconde la otra), conformismo, dificultad para tomar decisiones.
* Cruzar dedos y manos: por delante, frustración o desengaño; por detrás, ira, temor, frustración...
- Nivel sexual. Cónyuges se tocan continuamente en público: inseguridad en una relación débil. Hombre se toca sus partes: a la hora de la verdad, es de los que escapan. Mujer pone objeto sobre los senos, ¿tiene un complejo de inferioridad por el tamaño de sus senos? ¿El objeto le da seguridad, la defiende de algo que da miedo, o de algo puramente psicológico?
- Más:
* Sentarse con manos agarrando cabeza por detrás: ínfulas de superioridad...
* Hacer preguntas necias para exhibir conocimientos: problemas con la autoridad.
* Ligera reverencia al estrechar la mano o despedirnos: consideración y cortesía.
####varios####
####Los 4 temperamentos, ¿e iridiología (NO la veo por ninguna parte)?:
1. Personas sanguíneas: alegres, optimistas, cálidas, buscan siempre la compañía de los demás, de sentimientos más que racionales. Cambian de parecer con facilidad y se guían por la búsqueda del placer inmediato. Su elemento asociado es el aire.
2. Temperamento flemático: sereno y tranquilo, perseverante y poco impulsivo. Valoran mucho la exactitud, raramente se enfadan y no muestran demasiado sus emociones, llegando a parecer algo fríos. Algo tímidos a veces, pueden evitar ser el centro de atención o sostener un rol de liderazgo. Elemento tierra.
3. Temperamento colérico: enérgicas, proactivas e independientes. Defienden con ahínco sus opiniones. Confían en su propio criterio (en vez de hablar con sabios antes). Elemento fuego.
4. Temperamento melancólico: emocionalmente sensibles, creativos, introvertidos. ¿Les cuesta decidirse a la hora de iniciar proyectos (inseguridad de no saber lo que va a pasar y perfeccionismo)? Propensión a la tristeza. Elemento agua.
##Constitución biliar: entre linfática (ojos azules) y sanguínea (ojos marrones).
* Trastornos gastrointestinales. Hipoglucemia. Las patas de gallo pueden ser una señal para desintoxicar el hígado.
####supersociología de infancia a forma de amar.
- Complaciente / empático (evitan conclictos). ¿Padres sobreprotectores?
- Indeciso. Los padres no tenían muy en cuenta tus necesidades ("hemos salido a bailar..."), con lo que el miedo al abandono crece, y podrías pensar que a la más mínima señal, la gente te quiere abandonar.
- Amor evasivo. Hogar sin ternura / consolación, ¿demasiado "pragmático"? Dejas de prestar atención a tus sentimientos para no repetir situaciones de desamparo emocional.
- Controlador. No percibías seguridad en el hogar. Buscas seguridad, volviéndote emocionalmente duro (y cuidando de ti mismo; suena a verdugo), para no sentir miedo, humillación, impotencia... Ira si las cosas no salen como quieres.
* Víctima propiamente dicho. ¿Hogar caótico con padres enfadados? Ser obediente te ayudó a no llamar mucho la atención. ¿Escapar con la imaginación del dolor del hogar?
####Meridiano84 magia blanca y más.
- El 23 lo usan las élites hasta reventar.
- Mudra del Señor Burns (te atenderán): palabras adecuadas a ideas, para vender... Para contrarrestar, gesto de "disipar pedo" o similar.
* También mejora la atención.
- Si encuentras 5 céntimos y los valoras (soy 5 céntimos + rico), es posible que algo grande esté por venir.
- Cartera:
* Libre de facturas (no son alegres).
* Equilibrio yin (el dinero) yang (cinta roja...).
* Mantén mínimo un billete.
* Lugar limpio y ordenado, nunca poses en el suelo adrede.
* Algo de color verde (laurel...) para crecimiento y vitalidad.
* Aceite de ungir (Luna Nueva), pulgar, contrario agujas reloj, círculos mientras: doy permiso a que el dinero fluya en mi vida y que este contenedor funcione como su casa. Libertad y seguridad siempre, gracias.
####Ol Alexandro comandos especiales.  Lamentablemente, hay más sed de obediencia que de "tengo el deseo de crear una sociedad mejor". El Sistema corrompe a los ciudadadanos, a los que les cuesta oír la verdad. Y todavía les queda ser buenas personas (cambiar la psique, eso sí que cuesta). COMANDOS ESENCIALES:
1. Tendrás lealtad a la Ley Natural (el instinto / la intuición moral).
2. La causa del sufrimiento es el apego.
3. En cada encuentro hay una oportunidad para el enriquecimiento mutuo. Te enfocarás en los puntos que te unen al otro.
4. Nos definen los actos (dañar con suaves palabras o silencios por placer psicópata, es un acto), nunca las palabras.
5. Si defiendes a quien debe reprogramar su psique, la prueba para él será mayor la próxima vez.
####Es muy importante tener la inocencia infantil, por Ol Alexandro (no me refiero a ser tonto, sino a ser puro; y tal vez así disfrutemos más de las cosas que da la naturaleza).
####Varios:
##Primero está la incertidumbre: no se puede planificar todo (poner citas y citas y citas, puede desencadenar enfermedades, ¿del ectodermo?), ni sufrir por lo malo que podría pasar, pero puedes tener una estrategia "social": si te viene a visitar "un monstruo que no esperabas", siempre puedes aprender a cortar "su juego", aunque a veces no haya más remedio que "ser devorado y aguantar". Y luego está la evaluación de fallos de la prueba social.
##Sentido del teatro: sientes el conflicto ("primer acto") y lo curas con el "segundo acto":
* Ejemplo del teatro más burdo / tosco: Papá Noel le da miedo a un niño. Un día su padre se disfraza de Papá Noel, y la madre dice que es muy fácil pegarle. El niño "vence", y ya no tiene miedo a Papá Noel.
* Bebé: sus padres sujetan brazos y piernas para limpiarle el culito. El niño genera un conflicto "de estar preso", que provoca rigidez de piernas (ese es el programa especial físico). Primera representación (reactivar conflicto): el padre sujeta las piernas, la madre masajea el culito con un ungüento: el niño se pone tenso. Segunda representación: el padre deja las manos más sueltas, y luego las alza, retrocediendo suavemente. Última: piernas más sueltas de entrada.
* La cosa va así en general (teatro de verdad, novela blanca...): alguien no consigue algo, y lo intenta por medios materiales, hasta que recuerda un camino psicológico (más o menos complicado / profundo: Transgenealogía, Hamer, Jung a secas, simplemente cambiar creencias...). Y entonces, "lo consigue", y no sólo es más feliz, es más fuerte y buena persona.
##"El Señor de las Moscas" nos enseña que las reglas producen salvajes (en ausencia de éstas). Siempre será mejor la inteligencia moral.
##Imagina lo que valoras. ¿Con ello serías más equilibrado, saludable, feliz...?
##¿Qué me impide hacer una llamada telefónica? Pensamientos, sentimientos... ¿Qué pasaría si la hiciese de todos modos (imagínatelo)? ¿Y si no hubiese esos pensamientos...?
- Visualiza la situación temida (y que fallaste en el pasado) desarrollándose bien. Ansiedad: 5-4-10 (respirar abdomen).
##Reprogramación cuántica (2015): me pusieron una pieza que me faltaba en el corazón (espíritus cirujanos), ¿por lo de la Térmica de Aboño (abandonos)?
##Di a otro una palabra doble (Corte - Inglés...) para hipnosis conversacional, ¿y sus abuelos podrán hablar por él? ¿Milton Erikson?
##Laín. Si estás años enfocado en un tema, al final accedes al éter. Y para conseguir más, ¡tranquilidaad! Piensa en grande y empieza pequeñito. ¿NO contar proyectos o logros? Mmmmm. En una sociedad buena, o si no eres débil, no creo que haga falta tener enfermantes secretos. Laín no me parece muy sabio, pero ayuda.
####Fin varios####

########Espiritualidad (básicamente es sentido de la vida, misión personal e introspección, cosas escorpianas; luego está lo de la energía, propio del signo de Tauro).
####Cuando realizas ejercicios espirituales: acelera el parto, sufrirás menos (y una yogi abrió las manos, mandó el dolor para "allí".
####Introducción:
- Las enfermedades tienen una causa psíquica, y hasta es posible que los golpes y caídas también estén programados, porque te sentías culpable, te infravalorabas...
* Hay que cuidar los flujos de energía (los chacras se pueden limpiar, y se puede mejorar "la pila que eres").
* La práctica espiritual puede aumentar la intuición elevada, ser incorruptible (sabes si alguien quiere venderte algo que no necesitas)... ¿Pero quita el ruido en la comunicación con el todo, o sólo da potencia? Las represiones (de ideas, NO de sentimientos) producen ruido (¿algo más lo produce?). Bueno, tú, haz introspección para limpiar la psique, que eso es lo que hay que valorar en una persona, las ganas de cambiar por dentro. ¿Algo más?
- Boom de falsa espiritualidad en los últimos años: el mensaje de Nueva Era (flotar, fluir, ser vago en la introspección) se transmite muy rápido, y hay muchos escritores famosos que la defienden, como Eckart Tolle (son del gusto de las élites, que son satánicas).
- ¿Hay relación entre tu misión y lo que te hace sentir bien y no te daña en cada etapa de tu vida? Eso sí, recuerda, tú eres la herramienta del placer, NO necesitas pasarte ni de cosas ni de consumir. Te quedas parao aceptando / comprendiendo.
- La zona instintiva es la línea horizontal justo por debajo de la nariz (¿si la tienes muy larga, te controlas, como un psicópata?). Debajo de los ojos, la emocional (si es muy larga, ¿quieres ser centro de atención? NO sé). Mitad de la frente, "racional" (para ser racional hace falta intuición y consultar "a las tripas", aparte de ser lógico).
####Valdeande letras hebreas.
- Las palabras son números, y los números crean fórmulas. ¿Y esas fórmulas influyen en planos sutiles?
* ¿Que si pones una letra en la estrella de David, se acciona un nosequé? En algunas letras hay polos (antenas; el agua tiene 2 antenas, y crea vida).
- Hay 24 letras (2 silencio; y la ligadura suma 1/4). ¿En nuestro ADN "basura" hay textos exactos de la Torá (las letras representan los aminoácidos)?
* Si formamos uno de los 72 nombres de Dios y lo meditamos, ¿tenemos acceso a un programa / algoritmo curativo?
##Los 72 nombres de Dios. Se recorren de derecha a izquierda. Píntalos antes. La primera letra es una carga positiva, la segunda negativa y la tercera es un cable a tierra (circuito de poder). Mirando las letras o cerrando tus ojos y visualizándolas, puedes conectarte con frecuencias beneficiosas.
- Ejemplo, 1. Viaje en el tiempo:
* VAV (Una T sin el bichito de la derecha) HEI (parece PI) VAV. Tauro Aries Tauro. 6 + 5 + 6 = 17 = 8
* La tecnología para volver a la causa original (crimen cometido por ti / tu alma, ¿en otra vida sólo?). Nos encontraremos cara a cara con nosotros mismos.
* Meditación: despertar el remordimiento de nuestro corazón (angustia podría ser) por malas acciones anteriores. Aceptar la franca verdad espiritual de que los problemas en nuestra vida son el resultado de nuestras acciones pasadas (o de aprendizajes actuales).
####Libro del monje vietnamita sobre meditación cotidiana. Yo aconsejo primero ser feliz, ¿y ser comprensivo, sería después de reaccionar negativamente unas cuantas veces y desreprimir?
- libro01:
* El individuo (MEJORADO REALMENTE) puede mejorar la familia, la familia, la comunidad... El vecino criticón...
* Parar ante un semáforo es bueno para descansar, recordar el objetivo...
- libro02:
* Si no eres dichoso, nada podrá hacerte realmente dichoso hasta mejorar tu interior (además, la psique determina tu éxito).
* Inspira y piensa: inspirando tranquilizo mi cuerpo, espirando sonrío, vivo el momento presente, sabiendo que es un momento bello. Ser de hemisferio izquierdo y necesidad de estimulación sensorial son los demonios de nuestro tiempo.
- libro03:
* Comer. Piensa en abundancia, que puedes desperdiciar algo de comida (y yo comía rápido para comprobar si el pan y la comida estaban equilibrados en cantidad). Sonreírse un poco.
* Lavar platos: se sufre más pensando en que tienes que lavar los platos, que lavándolos.
* La gente que maneja la guadaña (instrumento) acompasa el uso con la respiración.
- libro04:
* Sala de respiración. No muy iluminada, decorada con sencillez. Cojines o sillas, un florero que evoque la naturaleza. Imaginaos una discusión conyugal: el marido hace sonar una campanilla en la habitación. La familia llegan poco a poco, la reconciliación está servida. ¿Pero luego a dialogar elevado no?
- libro05:
* Ni te aferres ni rechaces los sentimientos desagradables, afróntalos ("hola miedo"...).
* Cuando nos enfadamos nos centramos en aspectos odiosos de la otra persona... y más aumenta la ira entonces. Cuando exteriorizamos la ira, a veces sólo sirve para interiorizarla aún más. ¿Entonces habría que llorar?
- libro06:
* Abraza e inspira y espira tres veces: tu alegría se multiplicará por diez. Antes de abrazar, volver al presente (3 respiraciones). Si al abrazar sientes un vacío, puedes golpear suavemente la espalda de tu amigo. Concéntrate, si no no valdrá.
* Los pies deberían estar en contacto con el suelo.
- libro07:
* Si no podemos ser paz, no podremos hacer nada por la paz. NO tomar partido por bandos que...
* No acumules riquezas. Reserva tiempo, energía y recursos materiales para los demás, ¿nada de agendas apretadas?
* Trabaja con las manos (es naturaleza).
####LIBRO DE MARC:
- Conglomerao 1:
* Calmado, la energía se usa mejor. ENTONCES, ¿TAURO NOS LLEVA VENTAJA?
* Puedes librate de los "pegañosos" menos poderosos alargando los brazos juntos, e imaginando que lanzas energía con los puños?
- Conglomerao 2:
* Chemtrails: la porquería que queda en el cielo puede servir para producir hologramas (dar miedo en el futuro, un Cristo gigante...).
* Canalización: un paciente obtiene datos sobre su misión (u otro tipo de información) con la ayuda de un terapeuta y varios seres incorpóreos. Terapeuta y paciente, están echados. El guía espiritual muestra al terapeuta cierta imagen que estimula al paciente (un cuadro...), y éste lo describe. Seres incorpóreos pueden activar el chacra corona del paciente y transmiten al guía ideas, sentimientos, imágenes... Más: paracirujanos (hacen que la energía fluya correctamente, armonizan chacras... según lo que diga el terapeuta), anestesistas, enfermeras, e incluso chamanes con animales extrafísicos. ¿Y máquinas dando energía a las 2 personas?
- Conglomerao 3:
* Proyección astral (viaje). Una emoción puede hacer que se regrese. Una ayuda puede ser la descoincidencia miembro a miembro del cuerpo. ¿Que primero pienso en las piernas, y se van desprendiendo?
* A 1000 km de profundidad hay humanos muy evolucionados. El interior es un paraíso.
- Conglomerao 4. Mensajes (matrículas de coche, la hora...) a los que los guías quieren que prestemos atención. ¿No debemos esperarlos, pensar en ellos, sino que surgen de casualidad?:
* 123 (tus pensamientos son evolutivos / buenos), 3344... son ascendentes (bien). Treses solos significa "lánzate". Cuatros es el NO.... 0 algo se ha completao, 1 atraerás lo que pienses, 2 vas bien (777 es felicidades), 5 va a haber cambios, 6 no te preocupes por lo material, 8 no pienses trabaja, 9 haz el esfuerzo final.
##Cosas de Marc:
- Una persona manda energía a otra. Con la intención basta. Puedes retraer y soltar las manos cuan mago de película. Incluso podemos imaginarnos una pelotita entre las manos.
- La gente no sabe estar consigo misma (grandísimo gozo...), busca otros para llenar su vacío.
- Chacra mental: puedes dejar lúcido a alguien con alzheimer por un rato, para que haga introspección...
- Los árboles tienen miedo, sienten. Algunos pequeños tienen complejo de inferioridad. Se comunican entre ellos y aprenden. Marc les hace preguntas.
- Un ente espiritual puede corresponder a varias piedras, briznas de hierba... Todo está espiritualizado.
- ¿Las ciudades son trampas antiespirituales? Pero adorar a la naturaleza también es una trampa (Nueva Era).
- ¡Y los guías pueden hacer que recuerdes mejor el sueño!
- Algunos ancianos antes de morir se espiritualizan un poco (maestros)
* Si se muere en paz, no hay residuos energéticos, ¿cáscaras? Tras morir va a ser poquito lo que te chupen, y es + fácil mover energía (fundir bombillas...).
- Reprogramación cuántica:
* La zona de trabajo son 50 cm (rodeándote), y hay otra donde los guías descargan energía de varios tipos para que el terapeuta trabaje con ella (aspiradora de energía densa... La intencionalidad...). La araña tejedora repara, el hormigón rellena con buena energía, electroimanes para alinear neuronas y no dar tantas vueltas a las cosas. Un minisol para el corazón (quererte).
* Diagnóstico: energía densa en la barriga y un trozo de corazón que falta (EDP...), y que me pusieron.
##Cosas de Marco (La Última ReEvolución):
- Einstein dijo que la mayor parte de las ideas científicas básicas eran sencillas, fácilmente expresables y comprensibles. ¿Quién quiere engañarnos para que sólo creamos en frikis y expertos? Piensa y júntate en la calle.
- Un chino construyó una nave y la destruyó, pues sería una distracción (debilita porque te acomoda).
##Cosas de Marko (el del violín): escapó de los muros reales de Nueva Era. Sentir (hedonismo...), estar alegre... ¡paparruchas para que te creas "etéreo y bueno"! Los sabios de verdad son más bien serios y quietos.
####Sanar:
- Podología reflexiva: glándula pineal... Hay que tocarse los pies, ¡gracias Corte!
- Cosa de Marco y Valdeande. Vivir del prana (aire y sol) unos días (el cuarto día entras en beneficioso modo protección). Supongamos que son 3 partes, cada una de 3 días. La primera parte bebe agua, la segunda, nada, tu cuerpo empieza a saber que comer y beber es sólo una costumbre por así decirlo (al final es todo energía). Tercera parte: zumo de mala calidad. Para que el cuerpo siga pensando lo mismo.
- Fatiga crónica: NO deben ni culpar ni quejarse.
- Relación cielo - tierra. Palmas p'arriba recogiendo energía, palmas p'abajo expulsar hacia los pies. ¿Y lo de subir y bajar la energía?
- Mi sesión RQ (más):
* Vida actual: primera etapa Informática, segunda con conflicto interior y resolución, tercera parecida a la primera.
* Vida que explica mi miedo / culpa (todos me van a dañar...): romana rica (marido mató a un esclavo por mirarme mientras me bañaba). Ya pagué por ello, me tranquilizaré.
* Lecciones del alma: 30, algo técnico grande, pero con relación interpersonal. 31, me respeto, sigo mis reglas...
- Ronroneo gatuno doméstico sana de todo se puede decir (tú quita electrodomésticos por él):
* Si duerme en tu cama de día, los espíritus malos no vendrán de noche fácilmente. Puede acompañarte en los viajes astrales. ¡Lo femenino (gatos...) incluye lo más avanzado!
* El gato te dejará solo si su función ha terminado.
- Subir la vibración (matas parásitos astrales...):
* El ejercicio (en la naturaleza...) es más importante que la comida.
* Reducir la actividad mental.
* Coherencia (pensar, sentir, decir, hacer). Aprende a pasar de lo inútil que dicen.
* Si tas saturao: palmas altura frente y como a 10 cm. Bajas lentamente, y vuelves. 2 ciclos.
- Casa sucia energéticamente (incluye constructores disharmónicos): mover muebles con frecuencia; mejor que no sean pesados, vive frugalmente:
* Causas: violencia, enfermedades durante mucho tiempo, hacinamiento, desorden, suciedad, cosas que no usamos o rotas. Los espejos negativos (feng shui: puerta de casa, reflejando cama o estufa...) absorben bajos astrales. Casa sobre: cementerio, restos arqueológicos, campos de batalla, funerarias, hospitales, mataderos, geriátricos, cárceles, tanatorios... Gente que nos envidia entra en nuestro hogar a "matarlo". Cenizas de los difuntos (o velas por ellos). Animales enterrados pueden atraer carcasas de animales. Nada de disecados.
* Señales: mucho frío siempre (hay seres). Mal olor fuerte sin motivo aparente. Humedades. Las plantas mueren rápido. Los niños se vuelven muy rebeldes. La economía empieza a declinar. Bajones emocionales. Dificultad al respirar, dolores de cabeza sobre todo en la coronilla, cansancio excesivo, dolores de espalda.
* Consejos: ventila y que entren los rayos del sol. Frutas frescas en la cocina o el comedor. Plantas dentro. Limpia el piso con sal y agua, aprox. 6 cucharadas en el cubo. Cactus sin pinchos en interior, con pinchos, fuera. Música relajante. Aromaterapia, ¿sirven los pulgos de naranja frescos?
* Consecuencias: confusión mental, menor potencial de trabajo, creatividad...
####Comportamiento:
- Sobre gatos: nos enseñan que el amor es NO sumiso, respetador de las diferencias y lo ajeno:
* Primero, conquista la confianza del gato. Luego, aprende a respetarlo. Él te demostrará afecto cuando esté preparado. Si tienes alergia a los gatos, tienes dificultad para dejar entrar el afecto a tu vida.
- NO comuniques tus insatisfacciones al momento. Primero reposa, y verás cómo el problema es menos problema (y "mirar las nubes", hará que llegue algún tipo de solución). Luego sí puedes contarlo.
- Steven Spielberg: el Mensaje de ET es profundo. Concibe al niño como la supremacía del ser humano (y tiene razón, no tiene prejuicios, está menos contaminao, capta más cosas que el adulto). Todos somos uno (ET y Elliot).
####Energía:
- El agua graba las intenciones. ¿Bastará con mostrarle gratitud, o hay que hablarle? El agua No quiere Heavy ni música estridente. Le gusta la clásica EN GENERAL (sobre todo Mozart). ¿Su canción favorita es "Blanca y Radiante Va la Novia"?
* Le encanta brincar (la de manantial es la mejor).
- El ambiente debe vibrar con la frecuencia Schumman, ni más, ni menos (nada de subirla). ¿Y tú, con muchas unidades bobis, como 20.000?
- Necesito que el otro perciba mi fé para ayudarlo.
- Mal: sentimiento de deseo exacerbado de contacto, relación, atención, sexo (amor en la sociedad occidental).
- Sanar con cuenco tibetano. Se usa dando un pequeño golpe y haciendo girar la baqueta alrededor del borde (pero flotando un poco ésta).
* Podemos sostener una vela con una mano y ponerla dentro del cuenco sin tocarlo y, con la otra mano, hacer sonar el cuenco, así la vela se viste de esa energía positiva.
* ¿Descargar el cuenco? Agua al sol o velas alrededor.
* Elegir uno: fiarse de la intuición (que harmonice). Sobre mesa cubierta con paño: dejarlo inmóvil, y poner 2 dedos en el centro. Cuando esté quieto, golpéalo sobre el borde externo con su baqueta.
####¿Dar las cosas que ya no te son útiles, y recibirás lo que necesitas?
####Meditación en general y viajes astrales:
- Meditación limpiando: se debe hacer a primera hora de la mañana. Si empezamos en silencio, habrá paz en el corazón y la mente estará despejada.
- Rezar un rosario es saludable: na na na na na (timbre alto) contigo señor (timbre bajo); ni ni ni ni ni contigo señor... Al final se hace una especie de yoga. Tiene un efecto parecido a cantar OM. ¿Curioso NO? Este mundo masón quiere borrar del mapa, NO sólo los valores cristianos, sino también la Iglesia (su predecesora paioMaléfica).
- Técnicas viajes astrales. Los depresivos atrerán malas energías en el viaje. Estando el cordón oscuro (o vibrando), hay que volver (peligro muerte):
* 1. Tumbarse cama brazos separados, respiración cada vez más lenta (siempre profunda), muy relajao pero bien consciente. Empiezo por cabeza a contraer todos los músculos. Podemos visualizar ir a un lugar (mar, por ejemplo) + sentir (olor yodo, agua pies...). Una vez hecho visualizas que te hundes en el colchón o que levitas hacia arriba, pero buscando sensación de livianidad. Perderemos los sentidos.
* 2. ¿Para hacer antes de 1., o tienen suficiente fuerza?
- Centra atención en punto cuerpo, como el tercer ojo. Podemos visualizar un cono de energía que gira muy rápido.
- Girar sobre uno mismo, sentir vértigo y tumbarse. ¡Lo hacíamos de niños!
- Visualizar en una pared una puerta que se abre poco a poco y despide una gran luz. Requiere dedicación y perseverancia.
- Japonesa: visualizar el lugar de la persona amada con mucha intensidad.
- ¿Y lo de desparejar miembro a miembro cuerpo sutil / cuerpo material?
####Chacras, equilibrado con mantras. Relajado, ojos cerrados, columna recta; centra tu atención en el color y la ubicación. La primera pronunciación / vez es en voz alta, y el resto en baja. Importante: deja girar en el chacra un torbellino de luz (sentido reloj; te lo imaginas) del mismo color que el chacra hasta que te encuentres mejor:
- 1. Rojo oscuro, entre genitales y ano. Da estabilidad y seguridad. El miedo lo bloquea, con desconexión de la comunidad, la familia, o de ti mismo. Eso provoca frustración, auto-indulgencia, inestabilidad emocional, baja autoestima, conflicto entre el apego y el dejar ir.
* Afirmación para equilibrar: yo soy uno con todo lo que es yo; estoy seguro de que soy amado. LAM (prolongar la m).
- 2. Rosa naranja. Base columna lumbar (entre hueso púbico y ombligo). Superar los obstáculos y actuar con integridad. La culpa lo bloquea, produciendo ansiedad, miedo, preocupación, luchas de poder, problemas financieros y de trabajo, celos, desconfianza, problemas emocionales límite.
* Yo me amo y me honro a mí mismo y toda la vida. MAM.
- 3. Amarillo / dorado. Justo encima del ombligo. Confiar en ti mismo y tomar plena responsabilidad en tu vida. Lo bloquea la vergüenza, creando victimización, necesidad de aprobación, estrés, enojo, frustración, miedo a la responsabilidad, culpa, preocupación, duda, problemas con el compromiso.
* Yo soy el creador de gran alcance de mi realidad y me encanta. RAM.
- 4. Verde esmeralda. Justo detrás del corazón. Compasión. Se bloquea con dolor y pena, provocando insensibilidad emocional, pasividad, imposibilidad de perdonar, sensación de pérdida, dolor.
* Yo soy amor y aceptación incondicional. IAM.
- 5. Azul zafiro, parte posterior de la garganta. Creatividad y expresión. Se bloquea con las mentiras que nos contamos a nosotros mismos (¿aceptamos mentiras porque casan con lo que tenemos dentro, que no podemos cambiar?) creando estancamiento, obsesión, falta de expresión, indecisión, miedos y fobias.
* El poder de la elección es mío. Puedo aceptar algo como verdadero o falso en vez de tragármelo. JAM.
- 6. Azul índigo, frente. Intuición. Se bloquea con la ilusión de que estamos separados: miedos, fobias, falta de concentración y disciplina, falta de juicio, confusión, pesadillas, ¡esquizofrenia!
* La verdad es para bien, es seguridad a largo plazo, no debería doler. OM / AUM (elige).
- 7. Violeta blanco, corona de la cabeza (por encima de la física). Te une al todo. Se bloquea con el apego a todo lo que pertenece al mundo de las formas: pérdida de propósito y de conexión con el todo, mente cerrada, depresión, preocupación.
* Yo soy uno con el momento presente. SILENCIO.
####Lazos emocionales etéricos (¿seguir tras la muerte incluso?). Con apego estás "bajo un hechizo" (NO hay nadie mejor...); antes eras libre. Podremos sentir lo que siente el otro. CORTAR LAZOS:
- Cuándo es imprescindible cortarlos:
* Cónyuge fallece. Separación (también padres e hijos, y entre amigos) muy dura. Un ser muy importante para nosotros muere, y creemos que no hemos hecho lo suficiente por ese ser.
* El amor se acaba y ha habido maltrato (incluye psíquico claro).
* Hemos sufrido de chicos por las relaciones familiares.
* La relación sana (NO te ves responsable de la felicidadajena... El lazo se corta con facilidad) nace de los chacras superiores (4-7).
- MÉTODO ROMPER LAZOS:
* Silla, sentado cómodamente. Silencio, luz muy tenue. Profunda inspiración y cuenta mentalmente del 10 al 1, ¿en la espiración?).
* Visualiza al otro frente a ti, e imagina sus chacras iluminaos (y los tuyos). ¿Qué te llega?
* Visualiza el cordón con [tus manos o unas tijeras]. Antes de cortar di: ahora corto este cordón que nos une, para que ambos seamos libres. Mira directamente "al otro" a los ojos y di: ahora te dejo partir desde el amor incondicional, para que tú continúes con tu vida y yo continúe la mía. Eres libre, al igual que yo soy libre. Es bueno visualizar que ambos sonreís, con afecto y aceptación, y luego cómo el otro se da la vuelta y lo ves alejarse.
* Realiza una profunda inspiración y abre los ojos.
####Mejorar relación con el padre (cuidado con tener a mamá en un pedestal): le dices sin odio y si lo necesitas, lo que te dolió de la crianza (a lo mejor sería bueno hablarlo antes con los hermanos). Date cuenta de que tus padres son buenos para tu misión de vida (calcúlala) antes (y haz trabajo psicológico).
####EL JARDÍN ZEN:
- Nombrar cada elemento es dotarlo de significado (isla de la tranquilidad, jardín de la armonía, roca del atardecer...). ¿Y ves mejor al hacerlo?
- Al mirar árbol sin flores, percíbelas (futuro). Y al revés. ¡Movimiento!
####Libro de geometría sagrada.
##La materia está formada por toroides. El básico es un donut con "numeritos distintos" (ifotones). Con ayuda del éter, 2 ifotones crean un vórtice, y luego viene el toroide. ¿Antes del toroide viene "el tubo"? Unas pocas leyes:
- Construir "con phi" (número de oro) favorecería la paz mundial, la agricultura, la armonía corazón-cerebro, curación... El ombligo se relaciona con fi (tu estatura).
- La Tierra late (como cuerpo sutil): explosión + implosión (y es como un átomo: como es abajo, es arriba, y viceversa: Kybalión). La vida de una persona puede ser explosiva para su misión / aprendizaje (busca tenerlo todo, saberlo todo...) o implosiva (más sabia: introspectiva, usa sólo lo necesario).
- Líneas rectas e impares es masculino, curvas y pares, femenino.
##Conceptos básicos:
- Estructuras de orden y expansión:
* Pentaflor (5, femenina / implosión: ADN, centro de un huracán...): ordena energía y materia. Las escuelas basadas en este principio son abiertas y no jerárquicas. NO hay un camino fijo, por lo que puedes conocerte a ti mismo (comprometiéndote con ello).
* Flor de la vida (6): burda acumulación (femenino) y replicación, solar (lo solar puede ser también masculino).
- Estructuras sanas (árbol y fruta de la vida...):
* Metatrón: dodecaedro, cubriéndolo, icosaedro, luego octaedro, tetraedro y cubo. Forma del átomo de oro y del paladio, que reestablecen la fractalidad (curan el ADN) al ser disueltos en agua o sangre (forma monoatómica).
* Sólidos platónicos: tetraedro (fuego), cubo (tierra), octaedro (aire), icosaedro (agua) y dodecaedro (madera).
- El cuerpo electromagnético se cura con luz y sonido. El cuerpo físico, con poliedros. Los 13 toroides horizontales del cuerpo están vinculados a los 13 sólidos arquimedianos. El método Internal Coherence, indica el lugar y geometría necesarios. Sanar es lograr la interconexión entre ondas de cerebro y corazón (los serios indios lakota lo saben).
- Los órganos sensoriales captan la [geometría / topología] infinitesimal. La salud depende de la harmonía. Pero poneos a decorar vibrando alto, con ilusión, NO necesidad. Tú dale afecto al agua (ideal para la vida, por crear tantos vórtices): fractal icosaédrico.
- Gravedad: sabemos que la succión / pentaflor (aceleración de ondas electromagnéticas) nos da la masa / gravedad.
* Towsend Brown: en un condensador, los "gravitones" tan orientaos a la placa positiva (y si está encima, podemos lograr dispositivos antigravitacionales).
####DIMENSIÓN SUTIL (fíjate en ciertas pelis con actores muertos...).
- Demostración mundo sutil:
* Daniel Douglas Home (documentado por William Crookes) levitaba, cruzaba paredes y puertas (desmaterialización física).
* Militares saben exactamente lo que una persona siente y piensa (entrenan).
- Cuerpos sutiles y áura:
* Si empuñas un vaso con licor, tu aura se resiente. Si bebes, es peor aún. Te dañas con tus pensamientos al quejarte...
* El cuerpo etéreo (sostiene al físico) refleja la salud física.
* Algunos albergan memorias de otras vidas o de experiencias extracorporales. Hay uno que mide lo unido que estás al todo.
- Espíritus y similar:
* No se puede ¿o debe? someter a un anciano a regresión hipnótica.
* Muchos poseídos se suelen reír a carcajadas (y ser fuertes).
* Espíritus mojos. Evita sitios donde predomine el alcohol (en árabe significa "diablillo"), y Algool es una estrella maligna. ¿Pueden formar quistes en forma de feto?
* Los malos piden, hablan pasionalmente (arrogancia...) y con seguridad, y si ofrecen, piden cosas raras a cambio (para crear discordia...). Ornamentan para disimular la falta de contenido. Estimulan tu vanidad con elogios. Los buenos dicen mucho en pocas palabras, simple e inteligible, y sugieren, no imponen.
####Alta tecnología:
- Sabemos que las élites tienen YA la tecnología que nos van a ofrecer dentro de unos 30 años (para pervertir...). Nos ocultan viajes espaciales (¿el aire marciano es respirable, y el cielo azul en la puesta de sol?)
* ¿Los cohetes serían tecnología pa despistar, habiendo teleportación...? ¿La guerra de Vietnam fue un lavado de dinero pa financiar carísimos proyectos espaciales?
* Ocultación (Venus...). ¿La NASA usa tecnología del año 69 para fotografiar MAL a propósito y las fotos se retocan?
- Pirámides (NO hay momias dentro):
* ¿Para levantar piedras se podrían usar rayos tractores gravitacionales en vez de ultrasonidos? Y hay piedras ablandadas por todo el mundo (calor o método subatómico).
* Vaticano, USA e Israel, pidieron a Egipto que no pusiese un piramidón, ¿como un capuchón? encima de Keops, porque podría activar la pirámide, y entonces, los libros de Historia, se notaría a la legua que mienten. #### :33, tengo que hacerlo en 2 tiempos.
####VARIOS:
- ¿Morir con sedantes es antiespiritual?
- La envidia te empobrece. Si dices: mi vecino tiene mucho y yo poco, me siento indigno... mandas un mensaje al Universo para que le dé a tu vecino.
- Es bueno expresar los sueños antes de dormir (el subconsciente trabaja por la noche).
- Formulando deseos (quiero, puedo, estoy dispuesto, voy a...) 
* Si piensas negativamente (NO quiero...), se activa lo NO querido ("fuera ocupas" los atrae; A no se toca hará que A se toque).
* Si implica cambio de actitud en otra persona, el deseo fracasará.
- Dar el pecho psicológico. ¿Es ponerse cerca del pecho del otro para equilibrarse?
- Seres tulpa (creaciones de mi imaginación que podrían "materializarse"). Blanqueadín (se carga entes negativos) es primo de Ijí, el Dios de la risa.
- Expresando preferencias: no decir A es bueno / malo, o A es mejor que B. Sí que puedes concretar: A es más propicio que B para... el sabor / endorfinas je je (creo que puedes decir "A sabe mejor que B").
- Luna llena: bueno para meditar (luz del Sol reflejada en la Luna).
- Win Hoff escaló el Everest en pantalones cortos. Con técnicas de respiración lo controla todo (sistema inmune...).
####Budismo. Creo que Buda era hijo de María Margot, y que era homosexual. Me lo compró el hijo de Isabel, la cual me quería mucho (limpiadora en Aboño; el último día, no fui a despedirme de ella, porque el número cómico que me tenían montao Horacio y Freije era muy largo; ella era la única que me quería de verdad; había mucha más gente mala y psicópatas de lo que pensaba; la simpatía NO es bondad en principio).
##PARTE TEÓRICA:
- El sufrimiento lo causa el apego al deseo, ¿lo que se llama deseo vehemente y no del alma? Puedes tener apego a creencias (los científicos oficiales en 2.023 no se enteran por regla general), a cosas o personas... Un ejemplo: te han dicho la verdad y quieres que el otro pare cuanto antes (choca con lo que tienes dentro y eso duele), o sientes placer y no soportas que se acabe.
* Las acciones buenas traen su recompensa, las malas, dolor. El placer momentáneo es ayudar a seguir con tus objetivos nobles, que son difíciles de encontrar. ¿Y eso de que sin un cambio interior, ayudar físicamente no sirve para nada, porque todo vuelve al origen en la otra persona?
* ¿Dije ya que el fracaso te llevaba a volver intentar "la tontería" (volver a echar dinero a la máquina tragaperras...)?
- Nirvana: ves la esencia de las cosas en vez de su máscara, y aceptas las cosas como son:
* Se empieza por querer conocer la verdad (nada de iluminado, ume es el ser, e il significa muerte). La tuya es la más importante (la psicológica profunda).
* Descubrir que el mundo material sólo contiene máscaras, y dirigir la atención a las esencias.
* Imperturbabilidad.
- Muchas cosas agradables son, en el fondo, dolor:
* Muchos ricos no son felices (vienen a aprender cosas muy básicas, ser rico es una prueba envenenada), y dicen: que si me gano mi dinero, que si asumo riesgos... Muchas almas avanzadas tienen que hacer limpiezas de psique muy difíciles para tener éxito material.
* El poder puede ser horrible si temes que te lo arrebaten.
- Más:
* Si no eres feliz con poco, no lo serás con mucho. El gran deseo es para mejorar uno (así mejora la sociedad)...
* Si hemos cometido un error, lo admitimos sin sufrir, intentamos arreglarlo, decidimos no repetirlo...
* Concentración (shamadi): ¿como la de Escorpio? Roglig iba tan concentrao en la bici, que NO prestaba mucha atención "externa" ala moto, y se equivocó de camino. 
* Ecuanimidad: exceso de alegría, pesar, alabanza, culpa, pérdida, ganancia, fama, fracaso... no nos afectarán (llamados 8 vientos mundanos).
####PARTE PRÁCTICA I (semiteórica):
##Romper las cadenas que nos atan a una existencia insatisfactoria:
- Cadena 1: soy... y no puedo cambiar.
- Cadena 2: no creer que te han mentido.
- Cadena 3: dependencia de reglas morales (el derecho debe ser natural, y la moralidad debe salir de una inteligencia elevada: intuición).
** Fin de conjunto I. Ahora podemos cambiar de verdad, ir hacia arriba.
- Cadena 4: Deseo de experimentar con los 5 sentidos. Hedonismo.
- Cadena 5: Animadversión, odio o aversión. Hay que comprender al otro.
** Fin de conjunto II. Si debilitamos estas cadenas 4 y 5, ya estaremos en el punto sin retorno, faltando pocas vidas para ser sabios.
- Cadena 6: deseo de existir en el plano corpóreo. Somos más que cuerpo.
- Cadena 7: deseo de existir en el plano incorpóreo. ¿Porque tenemos una misión terrestre?
** Fin de conjunto III.
- Cadena 8: presunción (considerarse superior, inferior o igual, hacer comparaciones entre uno y los demás; aunque sabes que hay almas más avanzadas, gente más consciente...). ¿Aquí ya no hay sexo?
- Cadena 9: agitación e inestabilidad: ¿se rompe con la imperturbabilidad?
** Fin de conjunto IV.
- Cadena 10: desconocer la realidad última. Esto me suena a Piscis.
##Óctuple sendero hiperresumido: para no ver lo doloroso como placentero, las máscaras como esencias, identidad en ti (soy...), o lo feo como bello. No te relaciones si no es con un buen motivo. Saber lo que hacemos, y por qué, atentos a todo.
####PARTE PRÁCTICA II:
##Vida y trabajo budistas:
- Sabiduría: ver las cosas como son, en vez de cómo aparentan. De menos a más clase: ver u oír (muy bajo); pensar; conocimiento intuido y comprendido.
- Si siempre queremos estar ocupados, se trata de una incapacidad neurótica: el verdadero vigor es relajado y fluido.
- Los monasterios empiezan a las 4:00 con duro trabajo físico hasta las 9:00 (almuerzo sencillo), meditación 4 o 5 horas, y ligero almuerzo por la tarde.
- Debemos prestar atención a la facultad de la que cojeamos, nunca especializarnos.
##Budistas avanzados: bodhisatvas. Las 6 perfecciones han de cumplirse:
- Dar y compartir (comida, ropa...). No quieren ser más meritorios que los demás.
- Ética: comer sólo en beneficio de la salud. Trabajo: no autodegradarnos (y NO prisa, presión o tensión, por lo general), no mecanizar o limitar la mente en general; si trabajas sin vocación, trabaja en turnos pequeños (pero sé responsable).
- Paciencia: tolerancia (no indulgencia), dulzura... ¡Cojones, que liberar rabia es muy sano, y te dice dónde falla tu psique!
- Vigor. En un bodhisatva la energía fluye suave, ininterrumpida y armoniosamente.
- Meditación (quedarse alelao).
- Sabiduría: conocimiento frío de cómo somos nosotros y el mundo, conocimiento distintivo (lo que tengo delante necesita evolución... La opinión de éste es más válida porque no se autoengaña...)...
#Las perfecciones deben estar equilibradas: dar y ética, paciencia y vigor, meditación y sabiduría.
####PARTE PRÁCTICA III. Medios hábiles: hacer ver a alguien la verdad sin teoría budista, con amor y compasión: dar ejemplo, o mostrar unas pistas sin ofender, ¿como la mujer que picó por consejo a la puerta de muchas casas donde habían sufrido todavía más que ella y seguían adelante?):
##Ética: los budistas no hablan de conducta, que es una convención social, algo bastante pobre, sino de "acción correcta" (gracias a estado mental correcto). Pequeñas acciones pueden producir acciones devastadoras (y el mal se ve en pequeños gestos). ¿Agradecer por el origen del pan que te comes (tú piensa en agricultores independientes teniendo éxito)?
##MEDITACIÓN: ES MEJOR [DOMINAR / COMPRENDER EL VERDADERO ESPÍRITU DE] UNA SOLA PRÁCTICA, QUE METERSE CON MUCHAS: 
- PREPARACIÓN PARA LA MEDITACIÓN:
* Moderar comida (estómago, 1 / 4 comida, 1 / 4 agua). Evitar alimentos picantes y condimentados, que apasionan. Evitar flatulencias y digestiones pesadas.
* No dormir en exceso. La meditación, a su vez, hace que necesitemos dormir menos (calculo que una hora de meditación, son 40 minutos menos de sueño).
* No actividad social frenética. No esfuerzo físico violento (fútbol) ni trabajar mucho, aunque sí ejercicio suave o técnica de relax (taichí chuan a partir del octavo día, o yoga).
* Calma y consciencia en todo momento (cocinando...). Al sentarse, manera relajada, cómoda, y vigilante.
* Necesitamos un maestro humano para sortear peligros.
- Empezando: concentrase en objeto burdo (material), concentrar mente en equivalente sutil ¿etérico? del objeto. Volverse uno con el objeto. ¿Pensar en su uso antes de volverse uno, y también en su origen?
#MÉTODO DE SEGUIMIENTO DE LA RESPIRACIÓN:
- Sentados inmóviles y relajados, ojos cerrados, fijamos la atención en la respiración. Luego, empezamos a contar mentalmente tras cada respiración (de una a diez). En la etapa 2 sumamos uno al principio de cada respiración, para "estar atentos antes de que ocurra algo".
* Nos centramos en las fosas nasales y alrededores, atendiendo a la sutil y cambiante sensación mientras la respiración entra y sale. Incluir en la atención la respiración entera, luego cuerpo, y abrimos los ojos.
#MÉTODO DEL AMOR COMPASIVO (evitaremos la cólera, la aversión y el odio):
- Amor a nosotros mismos: tomamos lo agradable y positivo que hay en nosotros.
- Amor a un amigo íntimo y querido. Debe ser del mismo sexo, y no debe provocarnos sentimientos eróticos. Deberá vivir, y tener más o menos la misma edad. Lo visualizamos, buscando una respuesta de bondad hacia él.
- Amor a persona neutra que veamos mucho (un cartero...). Le mandamos buena energía.
- Amor a alguien que nos degrada (incluso a quien odiemos). Nos mantendremos interesados por su bienestar.
- Las 4 a la vez.
- Luego, la gente + cercana (emocional y geográficamente). Luego, vamos aumentando, incluso animales... hasta el Multiverso (capas material y sutiles) y demás universos.
#MÉTODO DE LA CONTEMPLACIÓN DE LA DECADENCIA: para apego, deseo vehemente, y lujuria y egoísmo. Hay que practicar los 2 métodos anteriores antes de éste, ¿segundos antes? Formas de practicar:
- Drástica: pensar: un día mi conciencia se separará de mi cuerpo, y no podré oír, ver, sentir... O estar entre cadáveres.
- Fijarse en las estaciones del año y los árboles caducos (melancolía japonesa). El Invierno (como la muerte de una creencia) es necesario para la Primavera.
#MÉTODO DE PRÁCTICA DE LOS 6 ELEMENTOS: para el engreimiento, la presunción... Para el "tengo una identidad que no cambia". Antes de empezar, desarrollar cierto grado de concentración meditativa (tal vez lo del objeto y la respiración), continuando quizás con una sesión de amor compasivo:
- Cuerpo: "mi cuerpo físico está hecho de ciertos elementos sólidos-huecos, carne... pero, ¿de dónde procede? Básicamente, la comida está hecha de tierra, y he incorporado tierra a mi cuerpo físico, y un día habré de devolver esa tierra, que no soy yo, ni es mía, todo el tiempo está volviendo a la tierra".
- Agua: "la mayor parte del mundo es agua, y la mayor parte de mi cuerpo, y ese agua de mi cuerpo la he tomado prestada de la reserva de agua del mundo. Un día habré de devolverla. Yo no soy tampoco eso, no es mío".
- Fuego: "nuestro calor procede del Sol, y al yacer muertos, el calor desaparecerá, volviendo al Universo".
- Aire: "nuestra vida depende del aire, pero el aire pertenece a la atmósfera. Al exhalar el último suspiro, devolveremos el oxígeno que nunca nos perteneció". El Yo empieza poco a poco a esfumarse.
- Akasa (éter). "Nuestro cuerpo físico (tierra, agua, aire y fuego) ocupa un espacio, que quedará vacío cuando los 4 elementos se separen, y este espacio vacío se fundirá con el espacio universal".
- Conciencia: "al morir dejamos de ser conscientes del cuerpo, la conciencia no sigue atada a la existencia física, y se disuelve en una conciencia + elevada y amplia, y con + pasos, puede disolverse en el océano de la conciencia universal".
####Grafoterapia:  
- Los 12 trazos para cambiar de signo / personalidad. Vicente Lledá. Bueno, a mí me dio clase Ramón. Vienen a ser como una meditación, con lo que el alma, realmente, no aprende, ¡pero cambias de personalidad por un tiempo! ¿Eso puede hacerte cambiar de escenarios para aprender? Nota: un arco serían 3 trazos: empieza abajo abombado izquierda, y termina arriba abombado derecha (lo del medio es un segmento que empieza a la izquierda abombado arriba). La ene sería un arco + una recta (segmento recto) a la derecha que se va difuminando:
1. Razonamiento (la mente previene) y memoria. Empieza arriba, abombado izquierda. Lo tiene la LETRA L minúscula.
2. Autocontrol y orden. Empieza arriba, recto. P.
3. Defensa (evitar calvicie). De esto Aries va sobrao. Empieza arriba, abombado derecha. G.
4. Comunicación y expresión. Empieza izquierda, abombado arriba. R.
5. Naturalidad y espontaneidad. Empieza izquierda y va recto (¿perdiendo intensidad progresivamente NO?). LETRA ENE.
6. Adecuación / adaptación (flexibilidad). Entrega a los demás (amabilidad... pero cediendo el poder a los demás DE VERDAD, no en plan psicópata / caballero). Suena a Virgo. LIGADURA.
7. Análisis. Vigilar que aquello que adquirimos o interiorizamos, vaya de acuerdo a nuestros valores. Empieza abajo, abombado derecha. L.
8. Adquisición / practicidad (interiorizar / capturar energía externa). Empieza abajo, recto. D.
9. Paciencia, constancia... Empieza abajo, abombado izquierda. G.
* LOS 3 ÚLTIMOS TRAZOS EMPIEZAN A LA DERECHA.
10. Creatividad, nuevas formas de pensamiento (para los cerrados). Abombado hacia arriba (L).
11. Selección: porque amamos y odiamos sin saber por qué. Tiene que ver con la autoestima. Recto (O).
12. Reflejos. Parte baja de la G (sonrisa, pero empezando por la derecha).
- Practicar ejercicios de muñeca para suavizarla (sevillanas, movimientos afeminados... en toda 
situación, hasta meando).
* Posición de escritura: hoja y brazo inclinados 30 grados hacia la izquierda (si escribes con la derecha). Muñeca flexionada un poco, de tal forma que la mano tiende al papel, no al exterior.
* Escribir lento para no maltratar órganos.
* Practicar 30 minutos al día.
* ¿Usar papel pautado?
- Para el pelo: j, f, g, y (¿10 minutos día?).
* Memoria: u, i, t, d (¿10 minutos día?).
- Trazos abajo e izquierda, muy lentos. El resto, normales. Parar en los picos para pensar la velocidad del trazo siguiente. ¡Y no he dicho casi na de presión!
* ldt: el último trazo, hacerlo largo, una recta que se desvanece, como se hace con la n. ¿Mover el brazo a la derecha acompañando no?^
* ¿l bajita implica baja autoconfianza?
* ¿t escrita como l, significa mucho análisis y ser poco lanzado?

####Botella de vidrio corrige la estructura del agua.
####En los países menos desarrollados, casi no hay gripe, ¿beben agua semicontaminada y así están más fuertes del estómago, que es nuestro centro de defensa? ¿Y especias para eliminar fluidos? ¿Y lo de echar tierra a la comida pa la digestión?
####Pasos Rosa yoga:
* Quitar tensión: hombros casi tocando orejas, tensión, espirar bajando fuerte los brazos.
* Arrugas cuello: tensión en puños, y en cuerpo en general, espirar extendiento los brazos hacia delante y sacando la lengua (mejor la cabeza un poco pabajo).
####Practique este ejercicio diariamente dos semanas y se librara de dolores de cintura, problemas sexuales, caída del cabello, micción frecuente, timidez, inseguridad...:
* Siéntese con las piernas juntas, inclínese ligeramente hacia adelante y entrelace los dedos de las manos rodeando las rodillas.
* Preste atención a sus riñones y a los oídos, que son la salida de energía de los riñones.
* Inspire suave y profundamente vivenciando en su mente algún miedo, fobia, trauma o temor que haya pasado en su vida a cualquier edad; luego, exhale juntando los labios emitiendo el sonido CHUUUOOOO. 7 veces (a partir de 4, coloca las palmas en los riñones, tocando la piel).
####Mi ex-profe de Alemán, Thomas, dice que un gran dietista que conoció, aconsejaba una dieta de uno u otro color según la necesidad del paciente (quizás roja para el hierro), prestando mucha atención a su psicología.
####615superrenacer la dieta de los centenarios.txt  Alejandro Merino G.: la de los andorranos (las estadísticas de Andorra están falseadas, con datos de gente que no reside allí, pero los que residen allí, son centenarios se puede decir): dieta carnívora (y dejaos de gurús y tonterías).
####Parce Pineal:
- Activaremos la glándula pineal con sonidos (escalares de Joaquín Piquer). El choque de energías opuestas produce una neutra, y con sonido (onda longitudinal), mejora la glándula pineal. Esta glándula nos da capacidad de conciencia superior:
* El formato mp3 no era suficiente. Se optó por el formato .wav (Youtube fracciona los sonidos).
* Puede favorecer los viajes astrales y desbloquear la memoria de la infancia; tienes ganas de hacer cosas...
##MEJOR ESCUCHAR A OSCURAS (Y TEMPRANO, PARA DORMIR MUY BIEN), EN AMBIENTE TRANQUILO. SENTADO, NO NECESARIAMENTE TUMBADO.
##En caso de náuseas, probar con otro .wav.
####Comida balanceada yin-yang. YIN: inactividad (muy sana), frío, oscuro, húmedo, blando, vegetal, hueco, Norte. YANG: estrés, lo animal...:
- Gráfico. En climas más calientes o en Verano, los alimentos se deben desplazar hacia el yin:
* Cuanto más extremo, las cantidades a tomar deben ser menores.
* Colores: verde los alimentos más recomendables a diario: cereales INTEGRALES, legumbres y verduras locales y de estación. Naranja: con moderación, no a diario o bien en cantidades pequeñas y de buena calidad. Rojo. Muchísima moderación, y exigir calidad en el producto.
* ¿Lo importante es el PH y el factor rédox no (el tercero me lo guardo)?
- Más:
* El tomate es muy yin, pero se suaviza al freírlo.
* El arroz integral hervido es muy equilibrado, pero inflado (horneado) se va al extremo yang.
* La leche es yin, el queso curado es muy yang.
* Soja fermentada: es un yang muy beneficioso, pero debe tomarse una pequeña cantidad. ¡NO recomiendo soja sin fermentar!
* La manzana cruda es ligeramente yin, asar la hace más yang / invernal.
##Bienvenida a extremos:
- Yin (tranquiliza):
* ¿Que beban para olvidar, con lo malo que es pa los cuerpos sutiles?
* Personas que viven ancladas en el pasado, les viene bien tomar bastante alimentación Yin de buena calidad.
- Yang:
* Personas que han tomado mucho alcohol o drogas.
* Personas muy dispersas.
####Goerreig Serdaniol hablando de poco saludables ondas electromagnéticas.txt  - Cuando ponen una antena cerca de tu casa, lo sientes, y luego te acostumbras (muy malo, porque la antena sigue dañándote).
* Cerca de las antenas, los insectos con antenas, perecen, y con el sonar militar, las ballenas.
* Yo: lo electromagnético impide la inteligencia sutil (la intelectual es de rango bajísimo).
* Por ganar millones, unas empresas tecnológicas que son del agrado de los gobiernos (curioso je je), están fastidiando nuestra capacidad, y el planeta.
* El campo magnético terrestre está en peligro por ondas de alta energía. Las antenas, los "fotovoltaicos"... Esos sí que hacen subir la temperatura. Aha, se anulan los campos naturales.
####Erotismo sano:
- CON PAREJA: aumentar tu energía corporal (¿movimientos femeninos / sinuosos?) y luego relajarse y dejar que la energía suba hasta tu corazón. Abrazarse y conversar con amor, analizando y llorando las aflicciones emocionales (si hay). Pensamiento negativo: "tengo un cuerpo horrible" o "él nunca me dará lo que deseo".
* Juego 0 (tras llorar). Respirar al mismo ritmo mientras se están abrazando. El ojo izquierdo es el receptivo.
* 1: cantar juntos, hacer sonidos no planificados y misceláneos que poco a poco cobrarán vida propia. Cuando hago esto con un amante, puedo sentir el interior de su cuerpo además del mío.
* 2: ¿Hacer de padre e hijo?: el padre se tiende y el hijo se tiende con la cabeza sobre o cerca del corazón del padre. El padre abraza al hijo, acariciándolo ocasionalmente e imaginando un infinito amor que brota de su corazón hacia el hijo. ¿Luego cambian de rol?
* 3: "El Cinto de Venus": respirar juntos e imaginar que la energía se mueve entre ustedes en un círculo, subiendo por los genitales de un amante, luego atravesando desde su corazón al del otro, bajando a los genitales de esa persona y de vuelta al comienzo.
* Si imaginamos que nos estamos proyectando mutuamente un haz de luz, desde un plexo solar al otro (o lo tocamos), y respiramos juntos...
- CON UNO MISMO: piense en qué lo excita, ¿las sábanas de raso? Relájate (el automasaje puede funcionar: recorrer el cuerpo terapéuticamente, y luego sensual y tiernamente). Estimular genitales, ¿las tetillas?...
####Valdeande Salud:
##Pan sano de verdad, masa madre (no mata enzimas):
- Cucharadita de harina integral (está viva), y un poco de agua para activar las bacterias (todo en un frasco tapao con trapo). Cada día "se le da de comer" (harina + agua supongo). A los 5 días tienes masa madre. Panificadora:
* 150 gr masa madre, sal al gusto, y un poco de levadura en polvo ¿Poco más de 50 gr? Medio kilo de harina de espelta integral y / o centeno. Y 38.5 centilitros de agua.
* Programación: pan integral 750 gramos. Tarda unos 200 minutos. En el segundo amasao puedes añadir pipas.
- En el congelador se para, y habría que refrescarla. Primer refresco, ¿pa cuantos gramos de masa parada, 150?: 20g madre, 40g harina y 40 agua, mezclamos muy bien todo y dejamos reposar a temperatura ambiente (mejor veintipocos grados) como 8 horas. 100 agua y 100 harina (siguiente refresco). ¿Sabes que está lista la masa cuando flota en un vaso?
##Plantas (diente de león...) maceradas con alcohol y agua, y colar.
##El amarillo gira a la izquierda, el azul a la derecha.
##Las gotas de rocío, (¿y el "sulfuro" y el "mercurio" como ifotones contrarios?) eran esenciales para la medicina alquimista.
##origen de los piojos: la mitocondria es nuestro bicho más importante. Cuando hay un muerto (o la célula está pachucha o el cerebro sin dormir), las mitocondrias salen en busca de comida y se las llama piojos. Les salen patas. ¡Hasta yo me he reío!
- En el colegio, las células se debilitan (niños lejos de sus padres...).
##Antes el ganado tomaba tomillo (plantas olorosas naturales), y ahora grano y antibióticos.
##Hagamos un ayuno corto pa limpiar. Si tamos mal, al día 2 veremos mareos, jaquecas... y veremos dónde están los atascos. La lengua manifestará el nivel de suciedad general. Come una naranja antes de ayunar (vitaminas CDE se necesitan).
##Los glóbulos blancos no hacen falta casi en una persona sana físicamente (ventana de ingesta chiquitita, como de 6 horas... y grasa, mucha grasa). La ciencia oficial (alimentación) inhibe las enzimas. ¿Gran parte de las enzimas se fabrican en el aparato digestivo, y por eso es importante tomar producto crudo, y en buena parte vegetales?
* Cuando variamos bruscamente el PH (comidas grandes...) las enzimas ya no funcionan.
##La mente controla el cuerpo: si te callas y necesitabas hablar, tos, resfriao... Si NO comunicas las aflicciones: dolor de garganta. Si las rabias no te salen, estómago. Si te duele la soledad, diabetes. Insatisfacción: obesidad (aparte de querer hacerse notar...). Dudas aumentando: dolor de cabeza y depresión (descansa). No encuentras sentido a la vida: corazón. Niño interior tiraniza (quiero un helado, y como no lo tenga... ¡no amanece!): neurosis (algún tipo). Tu orgullo no te permite humillarte: rodillas.
##Al morir una célula da biones. ¿Y ahí es donde surgen los mal llamados virus?
##Las células cancerígenas consumen mucha más glucosa, pero si se la quitas, mutan y siguen.
##Ceniza + agua: biones (experimento 20 de Wilhelm reich). ¿Y plantar cáñamo después?
##Las élites nos dan comida muerta. Luego vamos al médico (pastillita mataenzimas). ¡Todo es un plan!
####Buenas costumbres:
##Feng shui animal:
- Un animal enfermo puede avisar de desequilibrio en la casa. Los lugares ideales para tener animales domésticos son casas o pisos con terrazas donde el animal pueda tener su propio espacio de desahogo (excrementos).
* Y el Chi excesivo puede provocar irritabilidad y dificultad para dormir (un San Bernardo en un piso de 20 metros).
- Una pecera con su continua transformación mantiene el Chi de cualquier habitación de forma armónica (serena, y estimula al desanimado).
- Perros: los lugares donde se sitúan con mayor frecuencia son energéticamente sanos.
##Feng shui cocina (en ella se preparan los alimentos que consumimos):
- Ya hay fuego al cocinar (NO usar mucho rojo), ¿el azul (agua) quita el apetito? Apropiados: amarillo, terrosos y verde.
* Si hay una distancia menor de 60 centímetros entre el fregadero y los fogones, colocar plantas entre ambos.
- Debe estar cerca de la puerta de entrada (en el centro los alimentos NO retienen chi), aunque no debe verse desde la entrada principal.
* Fuegos: NO en línea o enfrentados con una puerta. La persona que cocina no debe quedar de espaldas a la puerta. No debe haber una ventana justo encima de la cocina.
- Si cocina y comedor estan en el mismo espacio, mejor mesa iluminada y el resto en penumbra.
##Feng shui habitación:
- La cabecera de la cama tendría detrás la pared más alejada de la puerta. Cama no en línea con la puerta de entrada de la habitación o del baño.
* Respaldos admitidos: un tabique sin ventanas (o con ellas y cortinas muy pesadas).
- Nada colgando del techo sobre la cama (o que sea liviano).
- Forma de la habitación lo más cúbica posible (puedes servirte de armarios y otros muebles para ocupar espacio: la cama no cuenta).
- El sentido al sentarte en el escritorio y al dormir, debe ser de tus 4 favorables. Calcula tu número kua. Soy 2, y persona del Oeste: NE, W, NW, SW (el resto es desfavorable).
##feng shui lugar reunión familia: asientos con ángulos de 90º (para que se den conversaciones). Y varios tipos (por lo menos 2, que cada uno elija).
##¿El yin y el yang son las 2 partes en las que se divide un toroide cuando tomamos las 2 aspas de ifotones "nueve"? ¿3 y 6  = tiempo y velocidad?
##hora de comer hora de la inteligencia.
- El agua (en cantidad), aléjala de las comidas, pues se carga los ácidos.
- Ten en cuenta que los primeros 20 minutos vas a tener hambre estés satisfecho o no.
- Muchas veces el hambre es falta de agua en realidad (incluso de descanso).
- No mezcles ciertas frutas con nada, espera media hora a que se digiera.
- Si la grasa es trans, no abuses mucho.
- Con 2 comidas al día ligeras (estarás más "energético") el mundo estará mejor.
##Mejorar la flora intestinal (dirige el cerebro). En Occidente una bacteria gana a cierto gusano por comer demasiado esterilizado. Los egipcios echan tierra a la ensalada.
##¿El solfeggio son frecuencias "prohibidas" y curativas? Partimos del 1 en el eneagrama, saltando de 2 en 2. 1-74, 2-85, 3-69, 4-17, 5-28, 6-39, 7-41, 8-52, 9-63. Así se afinan instrumentos.
##Recuperar el potencial Z de la sangre aleja la arterosclerosis: CILANTRO: licuados con manzanas; AJO: crudo, en ayunas, ¿como si fuesen minipastillitas y cortado con un utensilio de madera para no provocar oxidación?, acompañado de un vaso de agua. Muy eficaz en combinación con los jugos verdes.
##Si germinamos 4 cucharadas de lentejas, daremos de comer a mucha más gente, habrá más vitaminas y enzimas.
##La orina se puede beber y es saludable y milagrosa (no te laves las manos después de orinar). Tiene los anticuerpos que necesitamos, la podemos poner para el cabello, los oídos...
##Saciar hambre (los hidratos de carbono simples NO nos dejan satisfechos, ya que son asimilados rápidamente por el organismo; estrés y nervios producen ansiedad, y ésta, adrenalina, vamos, un cambio en el metabolismo basal).
- NO comas rápido (con los líquidos, esto es difícil).
##Alternar tele (si son muchas horas "de espera") con sentarme y a ver qué ideas me rondan la cabeza. ¡Y un circuito de paseo!
##Los videojuegos mejoran la coordinación mano ojo (aparte de los tiempos de reacción... Los de esquivar sin instrucciones ya son de 10): y en general, es bueno para la corteza prefontal (en dosis no muy altas).
##¿Si cantas como Louis Armstrong (que creo que usaba mucho el abdomen) puedes disipar la energía rabiosa característica del hombre? ¿Las mujeres pueden suspirar para quitar la del pecho?
##La música es medicina no necesito novedades, ¿acaso practicas más de 1.000 ejercicios curativos? Con 500 canciones ya practicas la clase, la inteligencia... Las plantas deciden la calidad, ¿por lo menos entre 90 y 130 decibelios de sonido cerca de ellas? En otras ocasiones vale con 70 de música suave (melodía, música clásica...).
##Homer Simpson: Apu, dame de esas patatas que me producen diarrea, necesito una limpieza general. ¿Es realmente un disparate? Nos lo cuelan como eso.
##Si no se vierte, el semen se podría convertir en energía y bañar el sistema líquido nervioso, para que no envejezca. Oye, una o dos veces al mes, no pasa nada (hay que eyacular algún día pa limpiar).
##Las abuelas batían huevos, te los daban, y a sanar y reforzar defensas. En la yema hay factores de transferencia, células de memoria, factores killer.
####lista enfermedades.
- Alzheimer memoria pulverizador romero. Las neurosis (una obsesión puede perjudicar la memoria, ¿la obsesión la llena?) aumentan el riesgo de Alzheimer. Desconcéntrate a veces para mejorar la memoria a corto plazo.
- Tuve una crisis asmática, y repitiéndome que amaba la vida y que había que disfrutar el momento (querer vivir...) y NO agobiarse... la he solucionao. Espectorantes naturales: ajo, cebolla, y combinación de limón y miel.
- ¿El calor favorece la confusión, con lo que los sentidos funcionan peor? Los individuos con depresión, ansiedad, estrés o bipolaridad, son más propensos a sufrir irritabilidad, debilitamiento o aturdimiento ante estas situaciones extremas. Omega3: nueces, pescados, brecol...
- Oído: mezclar unas gotas de agua tibia, y otras de aceite de oliva. Dejar cinco minutos. Limpiar restos con un paño limpio, suavemente. ¿O agua oxigenada (una o dos gotas)? O Acuéstate sobre agua caliente (bolsa, botella...).
* Viaje en avión o diferencia de presión: juntar una buena cantidad de saliva en la boca y tragar de una sola vez. O forzar un bostezo. ¿Inhalar por nariz y al exhalar, apretar la nariz suavemente con boca cerrada?
* Resfrío o sinusitis: baño de vapor y sonarte los mocos.
##Neuroplasticidad para paralíticos parciales: tú mueves el miembro que peor funciona, y el otro lo tienes "amordazado" (con una manopla, inmovilización...). Y puedes imaginarte movimientos, y tu cerebro cambia igual que si te movieses. ¿E imaginarte que una mano amputada NO lo está? Mmmm.
####MMS (el "bruto") / CDS (¿listo para tomar, sin "mezclas"?) y reparación órganos.
##Introduccion MMS (la "lejía" de Trump, que sana). ¡No cura enfermedades (para ello hay que autoanalizarse psicológicamente)! ¿Mata bacterias reparadoras? NO creo. James V. Humble:
- Química MMS (CLO2 se puede decir): partimos de clorito de sodio, NACLO2 (potabilizador de agua; se puede comprar en la farmacia). Y ácido cítrico / zumo de limón (sólo el 20% es ácido cítrico, habrá que multiplicar por 5). Se puede usar clorhídrico al 4% en vez de cítrico, pero NO en el caso de animales (se han salvao perros moribundos...), por su estómago ya "muy ácido". NO necesitamos agua alcalina con clorhídrico (no habrá remanente ácido).
* Mezcla frigorífico: 28% de ¿clorito de sodio? (tiene que estar al 80%, con 15% sal común, ¿y el resto agua?), con 35% ácido cítrico, ¿y 37% agua? ¿Y sale CLO2? NO estoy seguro.
- Ingerir (unas pocas gotitas): se diluye en 1/2 o 3/4 de vaso de agua. 10 minutos antes de comer, o 3 horas tras comer, para que el agua pase rápidamente al intestino. Tras la desinfección, una dieta adecuada.
* Directamente: poner las gotas de lo cítrico y encima las de NaCLO2. Mezclar agitando suavemente el vaso. Esperar 3 o 3.5 minutos hasta color marrón-amarillo límpido-transparente. Agregar agua. Beber inmediatamente.
- PREPARACIÓN DE 2 FRASCOS PARA MUCHÍSIMO TIEMPO (no usar nada de metal):  
* Clorito de sodio en polvo (28 gr). 72 cc de agua en jarra enlozada o de vidrio con pico vertedor. Poner jarra en fuego y entibiar hasta 40 / 50 grados. En un recipiente de plástico o vídrio oscuro con tapa hermética, iremos vertiendo el agua y el clorito muy poco a poco. Revolvemos con una cuchara de plástico. Guardar en lugar fresco y oscuro: dura de 3 a 4 años sin degradarse.
* Ácido cítrico (o limón): 35 gramos. Añadimos 65 cc de agua potable hervida (si es limón, na de agua, ¿y casi 60 gramos?). Guardar el nuevo frasco, con el anterior. Agite el frasco antes de usar.
* A DIARIO: 500 ml de agua alcalina (con unos 8 "granitos de bicarbonato", por el sabor). Vaso aparte, mezcla de MMS y cítrico para todo un día (unas gotitas), y esperar 3 minutos y medio. Añadir el agua alcalina y almacenar en botella. Preparar el día anterior si queremos que el bicarbonato neutralice los restos de ácido (cítrico remanente).
-Más:
* Oxida los metales pesados y el venenosísimo flúor.
* Si hay reacción Herx (patógenos eliminados rápido, con órganos sobrecargados) más fuerte de lo esperado, hacer más tomas al día.
* Límite: 30 gotas al día en 8 tomas.
* Limpieza de agua en mal estado: 1 gota MMS + 1 gota cítrico para 1 litro. Dejarlo 5 minutos.
* Desinfectar heridas: mezclar 4 y 4 con 2 litros de agua.
* MMS fallará muchas veces si tomas edulcorantes artificiales (y más cosas que no digo) como aspartamo, fenilamina, ciclamato...
##AUTISMO (casi todos tenemos al menos un poco). Reducir al mínimo el consumo de leche y derivados. Eliminar gluten, miel, harinas de trigo, y soja y derivados. Ajo, repollo, zanahoria, apio, coliflor, pepino... licuarlas y beber sólo el jugo (lejos de comidas). 1 o 1.5 litros día.
- Sólidos: carnes y pescados (poco). Evitar aves de supermercado (sólo granja). Patatas no fritas, lentejas, garbanzos, semillas / aceite de girasol, oliva o coco, arroz integral, quinoa, mijo, tapioca... Nunca vinagre o limón (cambiarlo por levadura de cerveza). Nunca frutos secos, espinacas, chocolate o té.
- Evitar B12, porque así se multiplican los parásitos.
- Sólo sal marina.
- Todos los días kefir (sólo de agua) o probióticos (acidófilus): nunca yogur.
####011notas09.txt  ##Limpiezas (pinceladas):
- Limpieza renal (antes de hacer una limpieza de hígado, para filtrar toxinas):
- Limpeza hepática (antes y entre cada limpieza hepática, limpiaremos el colon), frena la caída del cabello.
- Los receptores de la glucosa y la vitamina C (protege) son los mismos (la glucosa es competidora): cuando necesitamos vitamina C, deseamos dulces, curioso.
##Otros:
- Sal auténtica (grandes marchas sin comer de guerreros). Era natural hasta los años 50 (pero "se aterronaba"). Ahora tomamos necesario pero insuficiente ClNa, con blanqueantes y hasta aluminio. Se recomienda agua de mar al 25% (el resto, agua, cogerla por encima de la cintura); ¿beber sorbitos cuando se necesite?
- Azúcar (la de hoy roba nutrientes). El buen azúcar es el mascabo: se calienta el jugo de caña a unos 60 grados, y la melaza espesa resultante se deja enfriar, y se solidifica. Ahora se muele, y el color es amarillo.
- El cuerpo, por salvar riñones e hígado, produce obesidad. La grasa (cuidao con los hidratos, NO con la grasa) acumula toxinas, y cuando adelgazamos, ¡esas toxinas producen "rabia"!
- ¿Por qué nos sentimos eufóricos cuando tomamos Cocacola con cafeína? Se segrega adrenalina para neutralizar la cafeína (y hay un sacrificio de reservas de alcalinos para neutralizar la adrenalina).
- Al cocer vegeteles, lo mejor queda en el caldo.
####Medicina china (un poquitín).
##tecnicas usadas (aparte de acupuntura para los meridianos, o digitopuntura):
- Iridiología (iris). Muestra patrones genéticos y tendencia psicológica.
- Moxibustión (moxa, fuego): hierba artemisa y aplicación de calor sobre puntos de acupuntura.
- Reflexología: masajes en los pies (aquí está "todo el cuerpo). El masaje en general permite conocer el estado psíquico.
##Las 5 pasiones (son negativas). Los desequilibrios son debidos sobre todo a la mala digestión de la realidad que vivimos, un exceso de reflexión sobre cosas que no aceptamos / no compartimos, y a la falta de voluntad por tomar los mandos de nuestra vida:
- La alegría va al Corazón. La ira (irritabilidad, frustración, insatisfacción...) va al hígado. La tristeza excesiva ahoga al pulmón (se suspira para desbloquear la energía; y cuidado con la inquietud y la ansiedad). La reflexión va al Bazo (prisas y estrés relacionados; obsesión: la persona sufrirá insomnio, olvidos y astenia mental). El miedo hace descender la energía, y va al riñón (pérdida involuntaria de orina y heces). NO tener ganas de vivir afectará al riñón.
- El miedo triunfa sobre la alegría. La alegría sobre la tristeza. La tristeza sobre la ira. La ira sobre la reflexión. LA REFLEXIÓN SOBRE EL MIEDO. Si tienes ira, llora si puedes.
##Fuego = corazón. Madera = hígado. Metal = pulmón. Tierra = bazo. Agua = riñón.
####SALUD:
##CABEZA: cantar, bailar, idiomas (Alemán...), relaciones positivas, ejercicio físico 90 minutos al día como mínimo...
- Atención:
* Mal: ¡más vale estar sordo que oír esto! No acepto la crítica, no acepto entrar en razón, no me acepto como monstruo que soy, con todo lo que me queda por mejorar interiormente. No sé qué contestar y me hago el sordo. Me siento fácilmente rechazado, y me aíslo de los demás.
* Bien: mi voz interior me dirá cómo resolver los problemas, me abro a los demás. 
- Memoria: ver de un vistazo y descansar. Estudiar con vela azul (cada color es una frecuencia).
- Confusión mental (por calor...): lleva a que los sentidos funcionen peor. Si padeces depresión, ansiedad, estrés, bipolaridad... serás más propenso a sufrir irritabilidad, debilitamiento o aturdimiento ante situaciones extremas. Solución: omega 3. ¿Mirar un objeto para captar sus características esenciales y nombrarlas? Música 10 minutos: focalízate en un instrumento (deporte: en un jugador). Escucha 5 minutos un discurso (radio / tele). Escribe las ideas principales.
- Más: descanso. Ver algo positivo en los retos que te pone la vida (desreprimir por Jung...). Los videojuegos nos ponen analíticos, son buenos en pequeñas dosis (si son viejos y no tienes que leer muchas instrucciones).
##Cuerpo:
- Dientes:
* Comidas que remineralizan. Leche y queso de leche cruda, ¡crudos! Un poco queso tras la comida puede ayudar al PH. Manteca de vacas alimentadas con pastos. Huevos de gallinas camperas. Carnes de pastoreo. Vísceras.
* No: mucha fruta o cítricos, vinagre normal (cebolletas y pepinillos en exceso), café y té (tienen taninos, lávate de inmediato, ¿y el vino es peor que la nicotina?), muchos crujientes (patatas fritas de bolsa, gusanitos, frutos secos; "cepíllate" bien para quitar el almidón), Refrescos (bébelos con un vaso de agua al lado), alcohol (seca la boca), [sal y especias] en exceso.
- Hígado:
* Requiere cenar muy temprano y decirle ssssshhhh (en taichí se pronuncia internamente para quitar la rabia). Higado malo implica falta de concentración, estreñimiento, enfado, apatía, dificultad para tomar decisiones...
* Comida buena: manzana (antioxidantes, pectina para la digestión), garbanzos (aminoácidos para las enzimas limpiadoras), puerro (azufre, como ajo y cebolla), alcachofas (son amargas).
* Comida mala: prefabricada (genera hígado graso / dificultades para filtrar el alimento), comidas pesadas (soy del grupo 0, aquí somos diferentes).
- La albahaca purifica el agua. ¿Y los lirios?
##Salud interior y social:
- Mi intuición me dice que la ocultación de información dificulta los procesos de entendimiento entre personas, de comprensión. ¡Tibios al Infierno ya, mala gente!
- ¿Eres una persona manipulable (cambias de opinión difícilmente o demasiado rápidamente)?
* Buscas aprobación externa: cuando seas persona, buscarás sólo tu aprobación.
* Metas actuales: mi motivación interior o [modas y convencionalismos y necesidades del entorno].
* Te están manipulando: termino relación, pierdo control, se lo digo directamente.
- Podría aceptar toda una corriente fea de imperfección en una habitación, centrándome en la harmónica.
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
A1	Otis Redding¢â‚¬â€œ	Sittin' On The Dock Of The Bay
Written-By ¢â‚¬â€œ Redding*, Cropper*
A2	Ben E. King¢â‚¬â€œ	Spanish Harlem
Written-By ¢â‚¬â€œ Leiber*, Spector*
A3	The Platters¢â‚¬â€œ	Only You
Written-By ¢â‚¬â€œ Rand*, Ram*
A4	Percy Sledge¢â‚¬â€œ	When A Man Loves A Woman
Written-By ¢â‚¬â€œ Wright*, Lewis*
A5	Louis Armstrong¢â‚¬â€œ	What A Wonderful World
Written-By ¢â‚¬â€œ Weiss*, Douglas*
A6	The Drifters¢â‚¬â€œ	Up On The Roof
Written-By ¢â‚¬â€œ Goffin/King*
A7	Sam & Dave¢â‚¬â€œ	Bring It On Home To Me
Written-By ¢â‚¬â€œ Cooke*
A8	Jerry Butler¢â‚¬â€œ	He Will Break Your Heart
Written-By ¢â‚¬â€œ Carter*, Mayfield*, Butler*
B1	Sam Cooke¢â‚¬â€œ	You Send Me
Written-By ¢â‚¬â€œ Cooke*
B2	Righteous Brothers*¢â‚¬â€œ	Unchained Melody
Written-By ¢â‚¬â€œ North*, Zaret*
B3	Joe Tex¢â‚¬â€œ	I've Got To Do A Little Bit Better
Written-By ¢â‚¬â€œ Tex*
B4	Brook Benton¢â‚¬â€œ	A Rainy Night In Georgia
Written-By ¢â‚¬â€œ White*
B5	Gene Chandler¢â‚¬â€œ	Daddy's Home
Written-By ¢â‚¬â€œ Sheppard*
B6	Paul & Paula¢â‚¬â€œ	Hey Paula
Written-By ¢â‚¬â€œ Hildebrand*
B7	Nina Simone¢â‚¬â€œ	My Baby Just Cares For Me
Written-By ¢â‚¬â€œ Kahn*, Donaldson*
C1	Ben E. King & The Drifters¢â‚¬â€œ	Stand By Me
Written-By ¢â‚¬â€œ King*, Leiber*, Stoller*
C2	Percy Sledge¢â‚¬â€œ	Warm And Tender Love
Written-By ¢â‚¬â€œ Robinson*
C3	Otis Redding¢â‚¬â€œ	These Arms Of Mine
Written-By ¢â‚¬â€œ Redding*
C4	The Dells¢â‚¬â€œ	Oh What A Night
Written-By ¢â‚¬â€œ Funches*, Junior*
C5	Harold Melvin & The Blue Notes*¢â‚¬â€œ	If You Don't Know Me By Now
Written-By ¢â‚¬â€œ Gamble/Huff*
C6	Bobby Vinton¢â‚¬â€œ	Blue Velvet
Written-By ¢â‚¬â€œ Wayne*, Morris*
C7	The Platters¢â‚¬â€œ	The Great Pretender
Written-By ¢â‚¬â€œ Ram*
D1	Gladys Knight And The Pips¢â‚¬â€œ	Every Beat Of My Heart
Written-By ¢â‚¬â€œ Otis*
D2	Bobby Womack¢â‚¬â€œ	Love The Time Is Now
Written-By ¢â‚¬â€œ Womack*
D3	Aaron Neville¢â‚¬â€œ	Tell It Like It Is
Written-By ¢â‚¬â€œ Davis*, Diamond*
D4	The Fleetwoods¢â‚¬â€œ	Come Softly To Me
Written-By ¢â‚¬â€œ Ellis*, Troxel*, Christopher*
D5	Ray Charles¢â‚¬â€œ	Georgia On My Mind
Written-By ¢â‚¬â€œ Carmichael*, Gorrell*
D6	Lee Dorsey¢â‚¬â€œ	Working In A Coalmine
Written-By ¢â‚¬â€œ Toussaint*
D7	Gene Chandler¢â‚¬â€œ	Duke Of Earl
Written-By ¢â‚¬â€œ Williams*, Edwards*
D8	Sam Cooke¢â‚¬â€œ	Wonderful World
Written-By ¢â‚¬â€œ Albert*, Adler*, Cooke*
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
091 - Quâ€š Fue del Siglo XX.mp3
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
Alaska y Loquillo - Hola, quâ€š tal.mp3
Alaska y Loquillo - La Bola de Cristal.mp3
Alaska y Loquillo - Ni un D¡a m s.mp3
Alaska y Loquillo - Nosotros Somos los Electroduendes.mp3
Alaska y Loquillo - Soy Profesional.mp3
Alaska y Loquillo - Soy un Electroduende.mp3
Alaska y Loquillo - Vacaciones Infernales.mp3
Albâ€šniz Triana para orquesta.mp3
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
Angel - Dancing in Paris (Quâ€š Pasa).mp3
Anita Baker - Caught Up in the Rapture.mp3
Anita Baker - Sweet Love.mp3
Annabel Lee.mp3
Annie Lennox - Medusa - A Whither Shade of Pale.mp3
Annie Lennox - Medusa - Don¯t Let It Bring You down.mp3
Annie Lennox - Medusa - Thin Line between Love and Hate.mp3
Annie Lennox - Medusa - Versi¢n No more -I Love You¯s-.mp3
Antonio Flores cuerpomujer.mp3
Antonio Mach¡n - A Las Doce En Punto.mp3
Antonio Mach¡n - Coraz¢n Loco.mp3
Antonio Mach¡n - Envidia .mp3
Antonio tello - rescate1.mp3
Antonio Tello - rescate2.mp3
Antonio Vega - Mi hogar en cualquier sitio.mp3
Antonio Vega - Ocâ€šano de Sol.mp3
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
Billy Joel disco The Nylon Curtain - She¯s Right on Time.mp3
Billy Joel disco The Nylon Curtain - Surprises.mp3
Billy Joel disco The Nylon Curtain - Where¯s the Orchestra.mp3
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
Carpenters gold - 05-It¯s Going to Take Me Some Time.mp3
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
Communards - Don¯t leave me this way.mp3
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
Elton Jhon - I¯m Still Standing.mp3
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
Emilio josâ€š directo - Soledad.avi.MP3
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
Eurythmics - All Right, my Baby¯s comming back.mp3
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
Four Non Blondes - What¯s up.mp3
Franco Battiato - Bandera blanca.mp3
Franco Battiato - N¢madas.mp3
Franco Battiato - Perspectiva Nevski.mp3
Frankie Goes to Hollywood - Power of Love.mp3
Frankie Goes To Hollywood - Relax.mp3
Frankie Goes to Hollywood - San Josâ€š.mp3
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
It¯s Immaterial -  Driving Away from Home.mp3
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
Josâ€š Carreras Turandot.avi.MP3
Josâ€š Luis Perales directo - Ay Coraz¢n directo.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - A M s de Mil Kil¢metros de T¡.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Amigo.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Ay Amor (con la participaci¢n de Mocedades).mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Brindaremos por l.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - C¢mo Ha Pasado el Tiempo.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - El Escultor y Ella.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - El Hombre y la Sirena.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - El Loco.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Entre T£ y Yo.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Hoy Me Acordâ€š de T¡.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - La C rcel del Amor (con Ana Gabriel).mp3
Josâ€š Luis perales disco 30 Grandes Canciones - La Llamaban Loca.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - La M£sica.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Me Irâ€š Calladamente.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Mi éltimo Espectador.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Por Quâ€š esta Soledad (con Alejandro Fern ndez).mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Por Quâ€š Te Vas.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Si no Estuvieras T£.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - Supervivientes.mp3
Josâ€š Luis perales disco 30 Grandes Canciones - T£ como Yo.mp3
Josâ€š Luis Perales disco Amaneciendo en Ti - A Ti Mujer.mp3
Josâ€š Luis Perales disco Amâ€šrica - Amâ€šrica.MP3
Josâ€š Luis Perales disco Con el Paso del Tiempo - No Resulta F cil.mp3
Josâ€š Luis Perales disco Con el Paso del Tiempo - Que Canten los Ni¤os.mp3
Josâ€š Luis Perales disco El Preg¢n - A mi Padre.mp3
Josâ€š Luis Perales disco En Directo - 35 a¤os - Amada M¡a.mp3
Josâ€š Luis Perales disco En Directo - 35 a¤os - La Espera.mp3
Josâ€š Luis Perales disco Entre el Agua y el Fuego - Canci¢n de Oto¤o.mp3
Josâ€š Luis Perales disco Entre el Agua y el Fuego - Y C¢mo Es l.mp3
Josâ€š Luis Perales disco Gente Maravillosa - Amor sin L¡mite.mp3
Josâ€š Luis Perales disco La Espera - Amarte As¡.mp3
Josâ€š Luis Perales disco La Espera - Navidad.mp3
Josâ€š Luis Perales disco Me Han Contado que Existe un Para¡so - Para¡so.MP3
Josâ€š Luis Perales disco Nido de µguilas - Balada para una Despedida.mp3
Josâ€š Luis Perales disco Nido de µguilas - Te Quiero.mp3
Josâ€š Luis perales disco Quâ€šdate Conmigo - Quâ€šdate Conmigo.mp3
Josâ€š Luis Perales disco Sue¤o de Libertad - Me Gusta la Palabra Libertad.mp3
Josâ€š Luis Perales disco Tiempo de Oto¤o - Me Llamas.mp3
Josâ€š Luis Perales disco Tiempo de Oto¤o - Un Velero Llamado Libertad.mp3
Josâ€š Luis Perales single - Se Cans¢ de Esperar.mp3
Journey - Escape - Don¯t Stop believin¯.mp3
Journey - Escape - Open Arms.mp3
Journey - Escape - Still They Ride.mp3
Journey - Escape - Who¯s crying now.mp3
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
Los Secretos y CIA - Dâ€šjame.mp3
losmitos_esmuyf cil.AVI.MP3
lossencillos doctor amor.mp3
Luis Aguilâ€š directo.avi.MP3
Luther Vandross - Give Me The Reason.mp3
Luz Casal - 02-Te Dejâ€š Marchar.mp3
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
Madonna - Papa don¯t Preach.mp3
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
Maritrini - El Alma no Venderâ€š.mp3
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
Mecano - Yo ya no sâ€š.mp3
Mel Brooks - It's Good to be the King.mp3
Men At Work - Land Down Under.mp3
Men At Work - Who Can It Be now.mp3
Mercury Rev - Black Forest (lorelei).mp3
Mercury y Caballâ€š - Barcelona.mp3
Mezzoforte - Garden Party.mp3
Michael Jackson - Black or White.mp3
Michael Jackson - I Wanna Rock With You.mp3
Michael Jackson - Just can't stop lovin' you.mp3
Michael Jackson - Man In The Mirror.mp3
Michael Jackson - Off The Wall.mp3
Michael Jackson - The Way You Make Me Feel.mp3
Michael Sembelo - She's A Maniac.mp3
Midge Ure - Breathe.mp3
Miguel Bosâ€š - autoradio.flv.MP3
Miguel Bosâ€š - May Day.avi.MP3
Miguel Bosâ€š - Morena M¡a.mp3
Miguel Bosâ€š - Sevilla.mp3
Miguel Bosâ€š - Si T£ no Vuelves.mp3
Miguel Bosâ€š - tesoro.flv.MP3
Miguel Bosâ€š y Ana Torroja - duende.flv.MP3
Miguel Bosâ€š y Paulina Rubio - nena.flv.MP3
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
Mike Oldfield - Heaven¯s open.mp3
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
Mocedades - Amâ€šrica rara.mp3
Mocedades - S¡lbame (completa).mp3
Mocedades - Willy Fog rara.mp3
Mocedades Y Nino Bravo - Amâ€šrica.mp3
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
Phil Collins disco Both Sides- Can¯t Turn Back the Years.mp3
Phil Collins disco Both Sides- Everyday.mp3
Phil Collins disco Both Sides- I¯ve Been Trying.mp3
Phil Collins disco Both Sides- Please Come Out Tonight.mp3
Phil Collins disco Both Sides- Survivors.mp3
Phil Collins disco Both Sides- There¯s a Place for Us.mp3
Phil Collins disco Both Sides- We Fly So Close.mp3
Phil Collins disco Both Sides- We Wait and We Wonder.mp3
Phil Collins disco Both Sides- We¯re Sons of Our Fathers.mp3
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
Prefab Sprout disco Andromeda heights - Life¯s a Miracle.mp3
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
Pulp - She Does¯nt Have to Go to Work.mp3
Pulp - Something Changed.mp3
Pulp - Tomorrow Morning.mp3
Pulp - Your House Was very Small.mp3
Pulp - Your Underwear.mp3
Queen - Friends Will Be Friends.mp3
Queen - The Show Must Go On.mp3
Quinta estacion - sueniosrotos.flv.MP3
Quique Gonz lez - ciudadviento.flv.MP3
Qun Qun - Y Bailâ€š Con El Pecado.mp3
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
Rix 13 Yo s¡ sâ€š lo que quiero.mp3
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
Rosario Flores - Quâ€š Bonito.mp3
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
Scissor Sisters - It Can¯t Come quickly enough.mp3
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
Small Faces - My Mind¯s Eye.mp3
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
Talk Talk disco The Very Best y single - For What It¯s Worth.mp3
Talk Talk disco The Very Best y single - John Cope.mp3
Talk Talk disco The Very Best y Spirit of Eden - Eden.mp3
Talk Talk disco The Very Best y Spirit of Eden - I Believe in You.mp3
Talk Talk disco The Very Best y Spirit of Eden - Wealth.mp3
Talk Talk disco The Very Best y Talk Talk - Have You Heard the News.mp3
Talk Talk disco The Very Best y Talk Talk - Talk, Talk.mp3
Talk Talk disco The Very Best y Talk Talk - Today.mp3
Talk Talk disco The Very Best y The Colour of Spring - April the 5th.mp3
Talk Talk disco The Very Best y The Colour of Spring - Give It Up.mp3
Talk Talk disco The Very Best y The Colour of Spring - Life¯s What You Make It.mp3
Talk Talk disco The Very Best y The Colour of Spring - Living in Another World.mp3
Talk Talk disco The Very Best y The Colour of Spring - Time, It¯s Time.mp3
Talk Talk disco The Very Best y The Party's Over - Dum Dum Girl.mp3
Talk Talk disco The Very Best y The Party's Over - It¯s My Life.mp3
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
The Smiths disco Singles single - Heaven Knows I¯m Misserable Now.mp3
The Smiths disco Singles single - Panic.mp3
The Smiths disco Singles single - Shoplifters of the World Unite.mp3
The Smiths disco Singles single - William, It Was Really Nothing.mp3
The Smiths disco Singles y Meat Is Murder - That Joke Isn¯t Funny Any More.mp3
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
tzaboo quiâ€šn soy.mp3
U2 & Johnny Cash - The Wanderer.mp3
U2 -  Even Better Than The Real Thing.mpg.MP3
U2 - Angel of Harlem.mp3
U2 - Babyface.mp3
U2 - Daddy's Gonna Pay For Your Crashed Car.mp3
U2 - Desire.mp3
U2 - I still haven¯t found what I¯m looking for.mp3
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
yuridia ya te olvidâ€š.avi.AVI.MP3
Zarzuela Pl cido Domingo a recoletos con los bebâ€šs.mp3
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
- 2. Causa de las enfermedades.
- 3. Leo en Phi (hermetismo).
- 4. Cristian (Zeballos): hermetismo.
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

2. ####ENFERMEDADES (CAUSA):
####Ramón Maristani sabe más o menos el trauma que tienes, y si viene de algo ancestral, con sólo mirar a la cara, ¿y si usamos un programa de IA civilizada? Quien sabe de Nueva medicina germánica (Hamer NMG), diagnostica mejor que un médico (incluyo traumas psicóticos).
####Psicosomáticos:
- Depresión: se usa para no sentir presión, sobre todo afectiva (se ha llegado a un límite). Tendencias depresivas: conflictos pendientes de resolver con progenitor de género contrario; y se sufrió aislado (sin ser escuchado); tampoco se aprendió a confiar en los demás; y deseos bloqueados y cerradez.
- Sinusitis (bloquea la intuición): necesidad de caricias, algo me tiene "hasta las narices"... Confrontar a quien se le ha dado por mucho tiempo la autoridad. Puede que aceptemos por fuera sólo.
- No hablar lleva a ansiedad y asma.
- ¿Por qué los médicos que tratan los resfriados no se resfrían y no usan máscaras? ¿LO QUE SE CONTAGIA SON LAS EMOCIONES Y EL RESFRIADO ES UNA EXPRESIÓN DE ELLAS?
* En Invierno, en lugares cerrados, aumentan los deseos de ser cobijados, acogidos y acariciados, y con ello las decepciones, desatándose entonces el resfrío. Además: al perder libertad (lugar cerrado, gente), el pulmón sufre.
- Fiebre es inflexibilidad para poder ver vías alternativas (quieres controlar a alguien...).
- Estornudo: poderosa herramienta para apartar a todos.
- Bronquios: conflictos en la familia.
- Diarrea: no ve la utilidad de lo malo que le pasa (la enseñanza, por ejemplo). ¿Acaba con ingratitud? Más posibilidades:
* Miedo de no tener algo o de no hacer lo suficiente, de hacerlo mal o de hacer demasiado.
* Rechazar rápidamente una situación que te confronta con miedos, en lugar de experimentarlos.
- Alzheimer: deseo inconsciente de acabar con la vida, o de huir de la realidad. El entorno, las emociones... son incómodos:
* Las viejas ideas NO cambian. Miedo extremo de la vejez o del acercamiento de la muerte (implica comportamiento infantil).
* Preparar para morir si se acerca la hora.
- Ansiedad: cierto miedo a lo desconocido. Desconexión entre el mundo material y el inmaterial. Solución: las crisis son útiles.
- Asma (inspiro con facilidad pero espiro con dificultad; solución: valorar y trabajar en consecuencia).
* ¿Me engancho a ciertas personas o cosas que rehuso soltar? ¿Tomar de otros sin dar? Uso el asma para atraer amor, atención. Siento dificultades en desatarme de mis padres. Me siento rechazado por la llegada de alguien más. No concibo separarme de la imagen de mi madre, dulce y confortante, casarme, o ver cómo se divorcian mis padres.
* Una especie de amor que interpreté como agobiante (generalmente materno), o una tristeza de la primera infancia. O un miedo recordando la primera respiración en mi nacimiento, en que me sentí ahogado o asustado por mi madre.
* ¿Me ahogo con la rabia, al punto que esto me coge la garganta? ¿Rehuso ver mi agresividad?
* Me dejo invadir por los demás en mi espacio vital, me impresiono fácilmente por el poder de los demás.
* Quiero complacer en vez tener ambiciones propias.
- Autismo (retracción): 
* El mundo exterior es hostil y amenazador. Siento que los criterios que debo alcanzar son tan altos, que es más fácil encerrarme.
- Cancer, ¿odio escondido? Ejemplo: eres servicial, pero muy en el fondo quieres hacer otras cosas.
* Me conforto encontrando satisfacción en el exterior, pues tengo baja autoestima. Evito darme amor y aprecio porque creo que no lo merezco. Me siento inútil.
- ¿Los anoréxicos prefieren morir a aceptar el amor?
- Epilepsia (date cuenta del amor y salud que se te brinda desde fuera, agradece):
* Tengo la sensación de siempre tener que luchar (demasiado trabajo, NO elijo...). Me siento perseguido.
* Me siento culpable de la agresividad en mí y la rechazo. Quiero volverme insensible y cerrarme.
* Miedo atroz (muerte, enfermedad, a perder a alguien...).
- Esquizofrenia: frecuentemente se creció en un marco familiar muy rígido en el cual se perdió la identidad. Es un rechazo de mi yo: fuerte intelecto. Sol: tener interés en volver a descubrir el ser maravilloso que soy.
- Hemorroides: con dolor, se relaciona con estrés, con hemorragia, con pérdida de alegría. Puede ocurrir en niños abusados por sus padres (pero el niño quiere retenerlos, que se queden con él).
* Culpabilidad o vieja tensión mal o no expresada, que vivo frente a una persona o situación que "me parte el trasero" (me molesta mucho...). ¿Un abusón por ejemplo? ¿Y un sentimiento de sumisión que me hace sentir disminuido? O no pedir ayuda a nadie (llevo el peso).
- Hipertiroidía:
* Decepción porque respondo a las expectativas de los demás.
* Me doy plazos muy cortos (me apresuro).
- El mareo: los acontecimientos de la vida me desbordan (como lo desconocido). Miedo a morir en ciertos transportes (avión...).
- Parkinson (merezco vivir): miedo a perder el control (de la vida de otros por desconfianza...), o impotencia para progresar en la vida.
* Si están afectados piernas y pies, con ellos me habría gustado rechazar o volver a traer a cierta persona, cosa o acontecimiento. 
- Testículos: miedo a ser juzgado según mis resultados "de macho".
- El dolor de huesos puede reflejar rebelión ante la autoridad, ante la cual me siento impotente.
- Alergia a los gatos: el gato simboliza la sexualidad femenina, la dulzura, el encanto y la ternura. ¡Acepta tu yo real!
- Relación muy estrecha entre enfermedades alérgicas y erupciones cutáneas en todo el cuerpo y edemas en las mucosas: eliminar el café, el chocolate, el azúcar, el tabaco y el alcohol.
####Dientes informan. Dientes mapa 1padre 2madre 3hogar 4trabajo. Los dientes amortiguan los mensajes del cerebro para que un órgano enferme (la enfermedad es una indicación de que algo va mal a nivel emocional). A los esclavos les miraban los dientes: menos dolor en los órganos / emocional:
11- Padre. El papel que tiene el padre.
21- Madre. El papel que tiene la madre.
31- Acción de la madre.
41- Agresividad masculina. Memória de violencia.
#Si el 11 y el 21 están separados, quiere decir que en nuestra genealogía había un padre y una madre que estaban separados, y esa persona arrastra la información por lo que ha vivido el mismo conflicto o lo ha vivido en sus padres.
Si uno de los dos está recto y el otro torcido, había un padre y una madre que no se miraban.
Si el 21 está mas adelantado que el 11, había una madre que estaba por encima del padre.
12- Mi relación con el padre. Cómo me veo a mí mismo respecto a mi padre.
22- Mi relación con la madre.
32- La protección de la madre.
42 â€“ La protección del padre.
#11 encima del 12 es una memoria de un padre déspota, que está por encima mío.
#Una patología en el 32 es una memoria de falta de protección de la madre.
#Una patología en la 42 es memoria de un padre déspota. Me tengo que proteger de él.
13- Representa las reglas, las leyes. Capacidad de obedecer.
23- Representa la moral, el bien y el mal. Tradiciones y costumbres. Capacidad de someterse.
33-Memorias de esclavitud, de servidumbre.
43- Cuando no está recto, memorias de caída (real o simbólica). Recuperar una propiedad.
14- Memoria de niño que se queda sin papá. Pérdida del amor del padre.
24- Conflicto de falta, de vacío, desconexión de la familia. Amor de la madre.
34- Memoria de pérdida. Amor de pareja.
44- Pérdida de hermanos.
15- Memoria de traición. Alguien traicionó o ha sido traicionado. Desesperación.
25- Memoria de engaño y de rechazo. Injusticia.
35- Memoria de rechazo.
45- Memoria de frustración. Tener rabia pos sentirse frustrado.
16- Nuestros sueños; lo que buscamos en la vida. Mi clan, mi padre, no se ocupa de mi.
26- Necesidad de ser una persona equilibrada. Habla de lo que quiero ser.
36- El reconocimiento, los apellidos, los apodos. Memoria de niño abandonado. Extracción del útero. El hogar.
46- Deseo. Conflicto de la potencia masculina. Memoria de vergüenza. Mi padre siempre duda de lo que hago.
17- Exclusión del clan. Si las raíces están soldadas, hay memoria de exilio.
27- Pertenencia a la familia. Alianza familiar. La tradición.
37- El merecimiento; el rechazo. No valgo. Memorias de ahogo.
47- Memoria de destierro, de no poder volver. No ser perfecto. Sufrimiento por el éxito. Ser el primero, el mejor. Objetivo conseguido.
18- Cumplir el objetivo de vida. Obedecer al jefe.
28- Memorias de pecado con las leyes de la iglesia. Relaciones prohibidas moralmente. Asentir.
38- Memorias de penitencia, de perdón.
48- Conflicto con el pudor, con la sexualidad. Secretos (en la mayoría de casos, sexuales).
####Ejemplos (relación psique / trauma y enfermedad; no olvidemos que el tumorcillo benigno del cerebro, impide que por ahí vayan los mensajes sinápticos):
- Dolor de cabeza:
* Por hipoglucemia en fase de curación, resistencia ("no puede ser verdad"...), miedo, repugnancia...
* + fresco, - sol, glucosa (por la noche...). Poca sal (retener agua es malo). Substancias simpaticotónicas / activadoras / "masculinizadoras" (vitamina C...). Con mucho dolor o fiebre: duchas frío-calor (o frías), especias picantes (aunque afecte un poco a la vista lo picante)...
* Migraña / dolor de cabeza "serio". El trauma depende de si eres o no diestro: impotencia o miedo frontal.
- Autismo (¿lo he definido sólo para los diestros?): conflicto de pánico o no poder hablar y enojo territorial. 2 posibles estados / tonos:
* Tono depresivo: meditativo, mirada apática al vacío... Con esta gente podría yo llevarme bien.
* Maniático: dinamismo, puede sumergirse mucho en el trabajo y criticar sin sentido.
- Meningitis: desvalorización moral o intelectual, ¿no te ves bondadoso o capaz?
* O por desfiguración (ser herido o sentirse atacado, ¿todo eso incluye al final?)
* Aparece también con el trigémino (ahora lo vemos), y en fases de curación.
- Nervio trigémino (ridículo), 3 posibles trastornos (alguno se relaciona con la parálisis):
1. Por no ser tomado en serio... Baños de pies calientes (como en 3; ridículo con familia, amigos, compis...).
2. Alguien recibe "bofetada" o golpea en la cara. El frío y el entumecimiento hacen olvidar el ridículo.
- Confusión, Alzheimer, acumulación compulsiva: conflictos de presa (no aceptar...).
* Alzheimer (y la demenia en general) puede ser también por separación (pobres abuelos en los geriátricos).
- Postmortal: pensar mucho en después de morir, piensas que estás de más en el mundo 3D, contactas con fallecidos, tienes buena conexión con animales... Pérdida territorial "sexual".
- Verborrea (políticos...): identidad (¿quién soy? ¿Miro dentro en serio por una vez?) + miedo territorial.
- Megalomanía: conflictos de desvalorización.
- Agorafobia / claustrofocia, mojar cama (problemas de demarcación territorial).
- Más: iluminado / gurú; Comportamiento antisocial / quieres soledad (no antisociable) o demasiado social; ninfomanía y Casanova.
-¡Hasta la homosexualidad suele tener un origen en traumas (muerte de un ser querido cuando eres pequeño y hombre; frustración sexual si eres mujer; tal vez algo de identidad posterior...)! Y una humillación constante y una minusvaloración de su virilidad, hace que el hombre se feminice y, ulteriormente, desarrolle fobia por las mujeres.
- Epilepsia ACTIVA: no poder moverse o seguir a los demás (al hablar...). Epilepsia en fase de curación: cuando te desmayas... Por supuesto, en la fase de curación crítica. ¿Y si no te importa que la gente hable rápido y sin consideración? ¿Y si no te ves inferior ante esta gente con poca inteligencia integral (suelen tener poca)?
- Cansancio crónico: puede venir de victimizarse: agradece, por favor, agradece. Cuando te quejes, mira en tu interior, no luches hacia afuera. Imagina un futuro bonito.
- Embarazo: madre dice "me siento sola": el niño podría sentirse solo tras nacer. Más prenatal:
* Si dices al marido "no te enteras", el feto podría pensar que es para él (desvalorización).
* Madre se autoengaña, y niño no quiere aprender, leer o escribir.
* Miedo a parto - miedo a examen.
* Madre da puñetazos si su feto está inmóvil (no está tan loca, perdió a un niño, que dejó de moverse, lo que hacemos todos al morir): el niño sale hiperactivo (o me muevo, o me muero).
* Cesárea: mensaje de "dependo de ayuda externa".
- Mala conciencia: SBS (programa físico) de hombro.
- Ansiedad anticipativa (terminarlo todo ya...), ¿qué querías que terminase de pequeño es una buena pregunta?
- ¿Miedo territorial incluye "creer que no están tratándote según tu valía profesional"?
- Tu hijo no cumple tus ambiciones, ¿te desvalorizas (huesos) y tienes anemia (los huesos planos producen mucha sangre)?
- Un hombre dejó de fijar fechas (agenda completa), y mejoró.
- Si te alimentas mal, ¿es por desvalorización? ¿Y por una mala defensa territorial? ¡Mi cuerpo es mi templo, yo no caigo en trampas de maltratarme, me respeto (no he dicho "me quiero", que el "me quiero" lleva mucha desrepresión)!
- Alzheimer: un conflicto de separación en cada hemisferio. ¿A que guarda relación con los geriátricos? ¿Qué es lo primero, el geriátrico, o el Alzheimer? Bueno, también está la carencia de vitamina B12, y más cosillas (un no aceptar, negarse a ver la realidad, por ejemplo, la maldad de las élites a fecha de 2.023...).
##Ojos (recuperar mirada curiosa del niño):
- Belleza: en un azulejo... NO busques paisajes idílicos.
- ¿Borrosa por estrés?
- Sensibilidad a la luz: no me deshago de algo, demando atención adecuada a "mi destreza"...
- Escuela, trabajo... vuelven la mirada rutinaria / tiesa. ¿Que no te maravillas de nada? Hasta 1850 (año paio ya), las gafas eran muy mal consideradas (atrofian).
- Enfermedades comunes:
* Miopía (asustadizos, expectantes... Contrario a Hipermetropía, por así decirlo): me gustaría tenerte en mi rango visual. O miedo a ver algo en la lejanía (¿incluye tiempo?). O separación visual (de algo...) fuerte.
* Presbicia: miedo al futuro (crisis 40...). ¿Tendré sustento en la vejez? ¿Mi puesto es seguro?
* Astigmatismo: al ver borroso, estás protegido de la realidad y las decepciones (tu pensabas que tu padre era militar, y lo ves un día en el hospital haciendo su diálisis DIARIA y...). Algo cercano da miedo, y no quiero detalles. Quiero librarme al instante de gente ofensiva, o esconder algo (sexualidad...). Rechazo a acomodarme. Ira y miedo en la juventud. Decepcionado con los demás, creo que sólo puedo contar conmigo, ¿falta de confianza?
- Dejar de ser tan corto de vista. Procastinar (te hace corto de vista): miedo a fracasar (o tener éxito), al juicio ajeno, al cambio, a lo desconocido. ¿Ansiedad o frustración asociadas? ¿Psicología Energética Cuántica pa limpiar mi parte sutil? ¿Cómo hago para vivirlo todo con menos intensidad escorpiana, y así ver mejor de lejos? Estar tranquilo, muchas veces depende de quererse. LA PRISA TE LA METE LA ESCUELA, Y CLARO, TE AYUDA A DEJARLO TODO PARA EL ÚLTIMO MOMENTO (SER CORTO DE VISTA).
- ¿Oír mal (por calor, "espiritualidad"...) puede afectar a la vista?
##Tengo muchísimo más, pero ahora, con esto basta.<BR>
####cáncer:
##CÁNCER DE PRÓSTATA (tallo cerebral): conflicto relacionado con la procreación...:
- Causas posibles:
* Una hija lleva a su padre a juicio por un tema de herencias.
* Un esposo encuentra a su pareja en la cama con un amante.
- En paralelo al tumor, crecen las "cirujanas" bacterias (si se puede). El paciente no siente dolor u otra incomodidad aparte de síntomas como pérdidas de sueño, de apetito o de peso. La excepción, si el tumor presiona en la uretra, causando una disminución del flujo de orina... El cáncer de próstata tampoco es doloroso durante la fase de curación.
* En la fase de curación la orina se hace turbia y olorosa. Se podría requerir de una sonda para orinar.
* La eyaculación vuelve poco a poco a niveles anteriores. Creo que si no se echan venenos al organismo (medicación, hamburguesas...) no faltarán las bacterias, nuestras amigas.
##Cáncer bronquial (ulceración): miedo en el territorio (sólo puede ser experimentado por hombres o mujeres posmenopáusicas o zurdas jóvenes por conflicto femenino de susto-miedo; ¿y si se toman anticonceptivos?).
- Problema motor o sensorial. El miedo territorial sensorial se manifiesta durante la fase de curación como neumonía y como una lisis neumónica en la crisis epileptoide.
- El asma involucra a la musculatura bronquial, la cual responde a un conflicto de miedo territorial motor, por ejemplo, no ser capaz de moverse o maniobrar. ¿Habalmos aquí de cáncer o no?
##Cáncer de pulmón: susto de muerte. Se descompone en la fase de curación por mico bacterias como las tuberculares (sólo si están presentes), se caseifica (caseína) y es expectorado en la tos. Todo lo que queda son cavernas (agujeros).
- Ejemplo: familiar que se ha accidentado (o una mascota).
- Los nódulos pulmonares son diagnosticados cada vez más como cáncer pulmonar (bien), y menos como tuberculosis.
- Los nuevos cánceres por susto son llamados "metástasis", principalmente causadas por diagnósticos / pronósticos del doctor, que actúa como un televisor con malas noticias. Por otra parte, una célula cancerígena no viaja por el torrente sanguíneo para ser parte de otro cáncer.
##Carcinoma pleural (cerebelo):
- Muy a menudo, los pacientes experimentan un SIMPLE DIAGNÓSTICO (no significa que lo tengas) de "cáncer de mama" o uno de "cáncer de pulmón" como "un conflicto en contra del área del tórax", y como resultado desarrollan un cáncer de pleura.
* El diagnóstico de "carcinoma pleural" muy probablemente dispara un nuevo choque, por ejemplo, un conflicto de miedo al cáncer o un conflicto de miedo frontal, el cual causa ulceración en los conductos faríngeos.
- En la fase de curación, la mucosa epitelial escamosa en el área ulcerada, se inflama, y se forman los quistes llenos de fluido seroso. La medicina convencional llama a esto erróneamente un "linfoma".
- Muchos pacientes morirán por meterles miedo el médico, y por la terapia.
##Cáncer en sistema digestivo (tallo cerebral):
- NO podemos ingerir, tragar, digerir o eliminar un BOCADO (perdimos algo valioso...).
* Enojo indigesto desagradable (colon) o conflicto de suciedad o porquería desagradable o innoble (recto) o conflicto de suciedad o porquería asqueroso o mal intencionado (sigmoides). Si crees que has ganado la lotería pero al final no, el tumor estaría en el paladar: sentir "que te arrancan un bocado".
- Carcinoma peritoneal (mesodermo, es unaa excepción):
* En el momento de un diagnóstico CUALQUIERA: un ataque mental en contra de el abdomen que esta a punto de ser cortado por dentro (carcinoma peritoneal); ¿y siempre un carcinoma hepático derecho dorsal?: miedo biológico de que debido al tumor, la comida no pueda pasar más por el intestino (miedo arcaico a morir de hambre).
* Si pasa algún tiempo entre el diagnóstico y la operación, el cirujano usualmente encuentra "metástasis" (falsa) en el peritoneo.
- Cancer del intestino delgado:
* Conflicto: incapacidad de digerir el bocado o de bocado indigesto.
* La fase de curación del cáncer del íleon, durante la cual son expulsadas membrana mucosa y sangre con los excrementos, es también conocida como enfermedad de Crohn.
- Molestia rectal (incluye tumor palpable pero no visible):
* Cuando el tumor subyacente a la mucosa rectal se va, aparece un absceso submucoso. Un buen número de tales abscesos son rutinariamente considerados como "hemorroides". Hemorroides (en general): no saber qué posición ocupar en un grupo, no saber qué decisión o resolución tomar (conflicto de indecisión), no saber adónde ir.
##El de mama (de eso murió mi madre, exceso de procupación por sus niños; pero no somos asesinos mi mellizo y yo; ¿y sueños rotos y falta de amor?):
- La Nueva Medicina Germánica reconoce dos tipos: carcinoma mamario adenoide, perceptible como un sólido abultamiento compacto (mesodermo); y cáncer del conducto galactóforo (ectodermo), el cual no es perceptible durante la fase activa: la mujer podrá percibir solamente una ligera sensación de ¿calambre? (jaloneo) en el área afectada; adicionalmente, la piel exterior de la mama puede desarrollar neurodermatitis (separación de piel).
* Una mujer puede considerar a los niños pequeños o animales como "sus hijos". Si una mujer diestra desarrolla cáncer de la glándula mamaria en su seno izquierdo, es hijo, madre o nido (pelea o preocupación). Si hay ulceración del conducto galactóforo, ella esta en conflicto activo de separación de su hijo, madre o nido. El derecho eran amigos, jefes... Y se invierte (* -1) con las zurdas y las postmenopáusicas (creo).
* El problema de los médicos es que piensan que todo lo que hagan los microbios es malo, así que en fase de curación pueden hacer atrocidades con la paciente.
- Cáncer glandular mamario (mesodermo):
* El propósito biológico de incrementar tejido glandular mamario adicional (por preocupación por los hijos...) es asistir a los bebés al proveer más leche maternal que antes. Pasa también con los no lactantes.
- Cáncer de mama intraductal:
* Una vez que el conflicto de separación es resuelto, el bebé succionará con normalidad la mama seca (estará seca). La secreción de la herida a menudo no tiene salida y entonces, la mama se torna caliente, roja brillante, y aumenta de volumen rápidamente (hablamos del inicio de la fase de curación).
* La sensibilidad regresa después, a veces casi de forma excesiva (hipersensibilidad o hiperestesia).
- Se debería operar un cáncer de mama solo si pareciera aconsejable: ¿cuando una mujer se siente desfigurada debido al abultamiento? Cuando se desarrolla un melanoma. Cuando la capa de epitelio estalla...
##Tengo muchísimo más, pero ahora, con esto basta.<BR>
####Psicología A:
- Aborto espontáneo: miedo al futuro...
- Accidentes: incapacidad de hacerse valer. Rebelión contra la autoridad.
- Achaques: ansia de amor, deseo de ser abrazado.
- Acné: no autoaceptarse / gustarse.
- Adicciones: enfado por tomr decisiones equivocadas. Alcoholismo: sensación de NO ser importante, culpa e incapacidad. Autorechazo.
- Aliento malo: rabia e ideas de venganza.
- Alzheimer: negarse a enfrentar la vida. Desamparo y desesperanza.
- Amigdalitis: miedo, emociones reprimidas. Creatividad aplastada.
- Amnesia: miedo. Huída de la vida, incapacidad de defenderse.
- Anemia: "sí, pero...". Falta de alegría. Miedo a la vida. Autodesvalorización.
####Psicología A-B:
- Ano: absceso (cólera realtiva a lo que NO se quiere soltar), dolor (culpa, deseo de castigo, NO valgo), Comezón (remordimiento, culpa por el pasado), fístula (aferrarse a las basuras del pasado).
- Anorexia: mucho miedo. Rechazo y odio hacia uno mismo. NO a la vida.
- Apatía: resistencia a sentir. Miedo.
- Apendicitis: miedo a la vida. Bloqueado "el flujo del bien".
- Sin apetito. Desconfianza de la vida. Exceso: necesidad de protección, juzgar las emociones.
- Arañazos: sentir que la vida estafa / desgarra.
- Arrugas: pensamientos depresivos...
- Arterias: relacionadas con el júbilo de la vida.
- Artritis reumatoidefuerte crítica a la autoridad, sensación de ser explotado. ¿Incluye resentimiento y NO ser amado (artritis normal)?
- Asfixia: temor, desconfianza en el proceso de la vida, estancado en la infancia.
- Asma (adultos): amor sofocado, incapacidad de respirar solo, "ahogo", llanto reprimido.
- Astigmatismo: temor a verse realmente.
- Cálculos biliares: amargura, pensamientos rígidos, juicios condenatorios, orgullo del malo.
- Bazo: obsesión, tendencia a abandonarse.
- Boca: apertura. Opiniones rígidas / cerradas. Llagas: tendencia a culpar y a retener palabras violentas.
####Psicología B-C:
- Bocio: odio por haber sido agraviado. Victimización. Frustración e insatisfacción.
- Brazos: abrazar las experiencias de la vida.
- Bronquitis: ambiente familiar conflictivo (peleas, gritos, mal silencio...).
- Bulimia: terror desesperado. ¿Odio a uno mismo?
- Cabello: libertad, poder. Calvicie: miedo y tensión. Intento de controlarlo todo. Desconfianza en el proceso de la vida.
* Canas: estrés. Presión machacante y esfuerzo excesivo.
- Dolor de cabeza: invalidación de uno mismo (mala autocrítica). Miedo.
- Calambres: tensión y miedo. Aferramiento.
- Callos: aferramiento terco al dolor del pasado.
* Callosidades: miedo. Ideas "endurecidas" (¿NO flexibles?).
- Cáncer: herida profunda. Rencor que se mantiene mucho tiempo. Secreto o aflicción profunda que carcome. Odios. Creer que todo es inútil.
- Cansancio, fatiga: resistencia, aburrimiento. Falta de amor por lo que se hace.
####Psicología C (to desordenao, ¡pa que lo leas to je je!):
- Cataratas: incapacidad de mirar adelante con alegría.
- Celulitis: cólera acumulada y autocastigo.
- Cerebro: aquí hay como mínimo un tumor por enfermedad.
- Accidente cerebrovascular: rendición. Resistencia. Rechazo a la vida. "Antes morir que cambiar".
- Ciática: hipocresía. Temor por cuestión de dinero y al futuro.
- Joroba (cifosis): NO poder fluir con la vida (desconfiar...). Temor y aferrarse a ideas viejas. Falta de valentía en las convicciones o de integridad.
- Circulación: sentir o expresar emociones de forma negativa.
- Colesterol malo: miedo de aceptar la alegría.
- Cólicos: irritación emocional, impaciencia. Molestia por el entorno.
- Mucosidad en colon: revolcarse en el fango del pasado.
* Colon irritable: temor a relajarse, inseguridad.
- Columna: ¿falta de flexibilidad?
- Coma: miedo. Intento de escapar de alguien o algo.
- Conjuntivitis: enfado y frustración por lo que se ve en la vida.
####Psicología C-D:
- Convulsiones: deso de huír de la familia, uno mismo o la vida.
- Corazón:
* Ataque: por ganar dinero o posición se ha arrancado la alegría del corazón.
* Problemas: entrega al esfuerzo y el estrés. Falta de alegría. Endurecimiento del corazón.
- Cuello: negativa a ver otros aspectos de un asunto (NO flexibilidad).
- Cuerpo. Derecho: donación, el padre. Izquierdo: recibir, comprender.
- Debilidad: cansancio mental.
- Dedos: pulgar (intelecto e inquietud), índice (miedo), medio (cólera y sexualidad), anular (uniones y aflicción), meñique (familia y falsedad). Artríticos: deseo de castigar. Acusar.
- Demencia: negativa a enfrentar el mundo tal como es (la gente normal en 2.023 es demente). Desesperanza y rabia.
####Psicología D-E:
- Depresión: enfado que NO se tiene derecho a sentir (tú lo crees).
- Desmayos: incapacidad de afrontar una situación.
- Hiperglucemia (diabetes): nostalgia de lo que pudo haber sido. Necesidad de controlar. Tristeza profunda. Falta de dulzura.
- Dientes: indecisión mantenida mucho tiempo. Incapacidad de analizar las ideas para decidir.
- Distrofia muscular: "NO vale la pena crecer".
- Dolor: culpa.
- Eccema: antagonismo intenso.
- Edema: despréndete de algo para sanar.
- Encías: falta de confianza, problemas para mantener decisiones, indiferencia ante la vida. Sangre = falta de alegría en las decisiones.
- Endometriosis: inseguridad, decepción y frustración. Sustitución del amor a uno mismo por azúcar. Tendencia a culpar.
####Psicología E:
- Enfermedad de transmisión sexual: culpa por la sexualidad. Idea de que los genitales son algo sucio. Maltrato a otra persona.
- Entumecimiento u hormigueo: represión en la manifestación de amor y consideración...
- Envejecimiento: vieja forma de pensar. Miedo a ser uno mismo. Rechazo del presente.
- Envenenamiento por alimento: permitir que otros asuman el control. Sentir indefensión.
- Epilepsia: sensación de ser perseguido, de pugna intensa. Rechazo de la vida. Violencia contra uno mismo.
- Equilibrio: pensamiendo disperso.
- Eructos: ¿quemar etapas demasiado rápido?
- Escalofríos: deseo de retirarse. "Déjenme en paz".
- Esclerodermia: autoprotección contra la vida. Desconfianza de la capacidad de autocuidarse.
- Esclerosis lateral amiotrópica: resistencia a aceptar al propia valía. Negación del éxito.
* E. múltiple: rigidez mental, dureza de corazón, miedo, ¿voluntad de hierro?
- Espalda (yo pensaba que la parte de arriba era la familia, y la de abajo la sexualidad):
* Parte superior: falta de apoyo emocional. Sensación de NO ser amado. Freno manifestando amor.
* Media: culpa. Atascamiento en el pasado. Sensación de carga.
* Inferior: miedo al dinero. Falta de apoyo económico.
* Inclinada: transporta las cargas de la vida. Desesperanza. Desamparo.
####Psicología E-G:
- Espasmos: tensión debida al miedo.
- Espinilla: ideales rotos.
- Esqueleto: ¿desvalorización? La estructura de la vida se desmorona.
- Esterilidad: miedo y resistencia al proceso de la vida. NO tener la necesidad de la experiencia de tener hijos.
- Estómago: temor a lo nuevo / incapacidad de asimilarlo.
- Estrabismo:
* Convergente: deseo de NO ver el exterior. Objetivos contradictorios.
* Divergente: temor a mirar el presente.
- Estreñimiento: negativa a abandonar viejas ideas. Mezquindad, tacañería. Estancamiento en el pasado.
- Fibromas y quistes: rencor contra novio / marido...
* Fibrosis quística: firme convicción de que la vida NO resultará bien. "Pobre de mí".
- Fiebre: ¿colera? Aparece mucho en fase de curación.
- Fístula: bloqueo intentando liberarte.
- Flebitis: rabia y frustración. Culpar a otros de la limitación y la falta de alegría.
- Frigidez: negación del placer. Creer que la sexualidad (el erotismo...) es mala (lo que es malo es mirarme con ojos libidinosos). Parejas sexuales insensibles. Temor al padre.
- Furúnculo: furia.
- Gangrena: pensamientos ponzoñosos que ahogan la alegría.
- Garganta (angustia?):
* Dolor, irritación: represión del enfado. Sentirse incapaz de expresarse.
* Nudo: miedo. Desconfianza del proceso de la vida.
* Problemas: incapacidad de hacerse valer (hacer que te respeten o tengan en consideración). Rabia reprimida y tragada. Creatividad sofocada, ¿por otro? Negativa a cambiar.
####Psicología G-H:
- Gastritis: incertidumbre prolongada. Fatalismo.
- Genitales: preocupación por NO sentirse valioso. NO es necesario sentirse valioso (hay tramos y tramos en la vida; y además, muchos tramos son de preparación).
- Glándulas: mala distribución de las ideas para organizarse y actuar. Autocontención.
- Glaucoma: necesidad de castigo por ser mala persona.
- Gota: necesidad de dominar. Impaciencia. Ira.
- Gripe: reacción ante creencias populares negativas. Miedo. Fé en las estadísticas (¿de gripe?).
- Hemorragias: se marcha la alegría. Fastidio.
- Hemorroides: miedo a los plazos establecidos. Rabia por el pasado. Temor a "aflojar". Sensación de carga.
- Hepatitis: resistencia al cambio. Miedo, ira, odio, indignación.
- Heridas: enfado con uno mismo y sentirse culpable.
- Hernia: relaciones rotas. tensiones, cargas. Expresión creativa incorrecta.
* Discal: sensación de NO recibir apoyos. Indecisión (hacer tests de misión espiritual: Nodo Norte, Tzolkin Maya, Diseño Humano...).
- Herpes genital: creencia popular en la culpa sexual y la necesidad de castigo (fé en un Dios que castiga...). Escarmiento público. Rechazo de lso genitales.
* Labial: enfado que carcome y temor de expresarlo.
####Psicología H-I (ten en cuenta que hay más causas psicológicas, y que lo oficial y además bueno, aquí van los 2 unidos... es la NMGHamer):
- Hígado: hábito de quejarse. Justificación de las críticas para autoengañarse.
- Hiperactividad: temor. Sensación de estar presionado y frenético.
- Hipermetropía: temor al presente.
- Hipertiroidismo: rabia por haber sido dejado de lado.
- Hombros: con nuestra actitud NO positiva ante lo que nos sucede (puedes aprender...), hacemos de la vida una carga.
- Infecciones de hongos (el patógeno crece en "un mal terreno", NO soy de los que piensan que va por el aire): creencias estancadas (te aferras al pasado). Negación de las propias necesidades (no te autoapoyas).
* Infección (general): ciertas dudas, ¡las decisiones liberan! El parásito depende del "tipo de duda".
- Huesos / fracturas: rebelión contra la autoridad... NO hemos venido a hacer eso, sino a autocriticarnos con cariño (tras un poco de angustia).
- Incontinencia: exceso emocional que rebosa. Años de represión de las emociones.
- Indigestión: miedo visceral, terror, quejas, gruñidos...
####Psicología I-M (recuerda que muchas enfermedades pueden darse en fase de curación, invalidando estas causas):
- Insomnio: miedo a soltar el control consciente.
- Intestinos: terror de liberar lo ya NO necesario.
- Juanete: falta de alegría ante las experiencias de la vida. ¿Incluye las pruebas?
- Laringitis: furia que impide hablar. Miedo de hacerse valer. Resentimiento contra la autoridad.
- Lengua: enfado con uno mismo, culpabilidad.
- Retención de líquido: miedo a perderse algo.
- Llagas, irritaciones: rabia sin expresar.
- Malaria: ¿desequilibrio con la naturaleza y la vida?
- Mamas: negativa a cuidar de sí misma (en favor de los demás).
####Psicología M:
- Quistes, bultos, mastitis...: cuidados maternales exagerados, sobreproteger, actitud autoritaria.
- Mareo en barcos: miedo a la muerte, ¿ganas de tenerlo todo controlado?
- Mareo en coche: miedo. Sensación de estar cautivo.
- Mareo al moverse: miedo. Temor de NO estar al mando.
- Matriz: ¿que NO te entregas al xx%?
- Meningitis: rabia contra la vida.
- Menopausia: miedo a dejar de ser deseable o envejecer, autorechazo o sensación de valer poco.
- Migraña: aversión a ser manejado, resistencia al fluir de la sabia vida (da lecciones si sabes verlas; a veces, simplemente pagas karma o la vida te mete por ciertos caminos para hacer tiempo o que no vayas por otros), temores sexuales (prueba a masturbarte entonces, ¿sin necesidad de eyacular NO?).
- Miopía: miedo al futuro, desconfianza en el porvenir.
- Mordeduras: cólera o, ¿necesidad de castigo por creer en él?
####Psicología M-O:
- Nalgas flácidas: pérdida de poder.
- Nariz: goteo continuo (necesidad de ayuda, "llanto"), hemorragia (necesidad de reconocimiento, sensación de NO ser valorado, ansia de amor), moqueo hacia dentro ("llanto", puerilidad, victimismo), cargada (autodesvalorización).
- Náuseas: rechazo de una idea o una experiencia.
- Nerviosismo: desconfianza del proceso de la vida (NO es igual que la resistencia a lo que te pasa digo yo). Miedo, angustia, esfuerzo, precipitación. ¿Mucho esfuerzo es antiético? ¿Y si tu vida es de pagar karma?
- Neuralgia: castigo por una culpa. Angustia por razones de comunicación (¿con gargantas veloces o asperger?).
- Obesidad (sensibilidad exagerada, necesidad de protección, resistencia a perdonar):
* Brazos (rabia por falta / necesidad de amor).
* Caderas: terca cólera contra los padres.
* Muslos: cólera desde la infancia (contra el padre...).
* Vientre: rabia por falta de sustento (¿en un sentido amplio?).
####Psicología O-P:
- Oídos: obediencia (NO siempre es positiva).
- Ojos: capacidad de ver pasado, presente y futuro en su justa medida.
- Olor corporal: miedo (a la suegra je je). Disgusto consigo mismo. Despecho.
- Osteoporosis: sensación de No contar con apoyos.
- Pancreatitis: rechazo. Enfado y frustración porque la vida ya NO es dulce.
- Parálisis facial: control excesivo de la ira. Resistencia a expresar sentimientos.
- Parásitos: entrega del poder a otras personas.
- Parkinson: intenso deseo de controlarlo todo (por miedo).
- Pene: ¿energía?
- Picaduras: culpa por cosas pequeñas (lo simbólico produce lo material).
####Psicología P-R:
- Piel: angustia, miedo. Antigua repugnancia encubierta. Sensación de amenaza.
- Piernas: miedo al futuro. Deseo de NO moverse.
- Pies: miedo al futuro y de NO avanzar en la vida.
- Próstata: ¿temores sobre la masculinidad?. Renuncia. Presión y culpa sexual. Creencia en el envejecimiento (¿curioso NO?).
- Pulmones: depresión. Aflicción. Sensación de NO ser digno de vivir plenamente.
- Quemaduras, rabia o furia ardientes.
- Rabia: fé en que la violencia es la respuesta.
- Raquitismo: falta de amor y seguridad.
- Cálculos renales: enfado / s NO resuelto / s.
- Resfriados, catarros: suceden demasiadas cosas a la vez. Confusión, desorden mental. Pequeños agravios. ¿Y ganas de que nos cuiden? Creencia en "los 3 resfriados cada Invierno" (creer es crear, y vibrar es atraer. Decir "contra el cáncer" es atraer el cáncer; el "medio" se queda con "cáncer", NO con "no" o "contra").
####Psicología R-S:
- Respiración: miedo o resistencia a aceptar al vida plenamente. Sensación de NO tener derecho a ocupar espacio o a existir.
- Reumatismo: sentirse víctima. Falta de amor. Amargura crónica. Resentimiento.
- Rigidez: pensamientos rígidos o cerrados.
- Riñones: decepción, fracaso, vergüenza, ser criticado. Reacciones pueriles.
- Rodillas: orgullo y obstinación. Incapacidad de inclinarse. Temor. Inflexibilidad. Terquedad.
- Ronquidos: terca negativa a abandonar viejas pautas mentales.
- Sangre: falta de alegría. Las ideas NO circulan.
- Sarna: pensamientos infectados. Permitir que otras personas nos acaparen el pensamiento.
- Sarpullido: irritación por los retrasos. Forma pueril de llamar la atención.
- Senilidad (regreso a la supuesta seguridad de la infancia): exigencia de cuidados y atención. Escapismo. Forma de controlar a quienes nos rodean.
####Psicología S-T:
- Síndrome premenstrual: confusión que domina. Entrega del poder a influencias externas. Rechazo de los procesos femeninos.
- Sinusitis: irritación contra persona muy cercana?
- Sobrepeso: miedo, necesidad de protección. Huida de los sentimientos. Inseguridad. Autorechazo. Búsqueda de satisfacción.
- Somnolencia: miedo a asumir las responsabilidades del día.
- Sordera: rechazo, terquedad, aislamiento ("no me molesten"...).
- Suicidio: negativa a ver otra salida.
- Suprarrenales: derrotismo, angustia. Renuncia a cuidar de uno mismo.
- Tétanos: necesidad de liberar sentimientos de cólera.
- Tics: miedo, sensación de ser observado por los demás.
- Tiroides: humillación. "¿Nunca puedo hacer lo que deseo?" Sí, no te victimices. "¿Cuando llegará mi turno"?
- Torceduras tobillos: ira y resistencia. NO querer avanzar en cierta dirección.
- Tos: deseo de decir al mundo: "escúchenme".
####Psicología T-Z:
- Tuberculosis: egoísmo que carcome. Pensamientos crueles. Posesividad. Deseo de venganza.
- Úlceras: miedo, creer (estar convencido) que no se vale lo suficiente.
- Urticaria: pequeños temores ocultos. Hacer una montaña de un grano de arena.
- Útero: creatividad.
- Varicela: se piensa en el siguiente problema o disgusto (hay que volver al presente tras planificar). Temor y tensión. Sensibilidad exagerada.
- Verrugas: manifestaciones de odio pequeñas. Creencia en la fealdad, ¿externa?
- Vértigo: fuga y dispersión de pensamiento. Negativa a mirar.
- Vitiligo: sensación de estar fuera de sitio, de no pertenecer al grupo.
- Vómitos: violento rechazo de ideas. Temor a lo nuevo.
- Zumbidos: negativa a escuchar. Tozudez. No oír la voz interior.

3. HERMETISMO (LEO EN PHI).
########################
########LEOENPHI########
########################
####Los cuentos nos muestran ejemplos negativos de verdugos, salvadores y víctimas. Por ejemplo, Pulgarcito comenzó engañando a todo el mundo para sacar provecho.
####El peón (la humanidad en general), al llegar a la última línea enemiga, se puede coronar. La Iglesia lo aprovecha: los pobres que se humillen serán recompensados en el cielo. Y también el sistema económico: alguien pobre materialmente, puede llegar muy alto (pero es básicamente mentira).
- La plebe probaba las trampas enemigas (los obligaban). Frase paia terrorífica: las mujeres y los niños, primero.
* Los peones, ¡SON LOS PECADOS! LOS MITOS ANTROPOGÓNICOS HABLAN DE FALLOS (MORALES...).
####Goce en conflicto (goce no es gozo; yo lo relaciono con buscar inconscientemente situaciones para autoconocerte, ¿como si algún espíritu manejase tu vida SIN CASUALIDADES, metiéndote deseos e información?):
- Situación para autoconocerte: 2 personas ESTÁN flirteando AHORA. Con el juego del flirteo (desde el canal del niño, el de la transgresión, la exploración... Los otros son el de los padres ahí "por encima", y el serio y perfecto de los colegas de discurso, profesión...), se ganan mimos / reconocimiento. Ahora se relajan por cierto motivo no especificado (fuera control, sale lo malo de ellos, ¡bieeen!), y la sombra hablará por ellos, ya no serán Juan (verdugo) y Juana (víctima) en modo "civilizado".
- Lacán (autor): el goce es un estado mental insoportable para el cuerpo, por estimulación muy baja (te ignoraron...) o muy alta. Su baja vibración lleva a la SEGURIDAD de la infancia en el inconsciente (escena con una figura de amor: papá me miró feo...). Esa escena, la entiendes o no conscientemente; si no, puede alimentar a la sombra (represiones, que actúan con asco, enfado... Maldad genuina). ¿La escena se relaciona con saber, tener, poder o deber? El amor te lleva a la infancia (donde hay traumas).
- Cuando uno se victimiza, lo que hay emocionalmente por debajo es un niño sufriente. Se buscan inconscientemente Salvadores y Verdugos que hagan sufrir. ¡Hay personas "muro" por doquier, y es bueno encontrártelas en principio!
####Estructuras (1. sentidos = realidad 3D; 2. no es igual a sentimientos / emociones / imaginación; por último, está la mente):
* Estructura neurótica, algo pasa con el resgistro imaginario / emocional (ya no hay equilibrio de nudo bordiano con los otros 2 registros). ¿Y entonces lo imaginas todo (fantasmas que no existen) o nada (usas sentidos y mente nada más)?
* Otra: algo pasa con el registro simbólico. ¿Usa el hemisferio izquierdo para todo o para nada (entonces usas sentidos y emociones)?
* Otra: quiero algo, pero no me puedo acercar. ¿Usa los sentidos para todo o para nada (sólo mente y sentimientos)?
####LeoenPhi más:
- El inconsciente es como un 85% de la mente: no sabemos que está ahí. La personalidad es una máscara. Te puedes poner la máscara del arquetipo jefe, madre que se cree perfecta... Los fija el inconsciente colectivo.
* Si eres terapeuta, transmite con tus fallos, no a través de una supuesta perfección egoica.
- El alma eres tú sin más (con toda la potencia en el futuro, es el ser superior, que puede ayudarte).
- Recordemos la desconfianza en el otro e inseguridad en sí misma de la reina negra, controlándolo todo y vengándose. Recordemos al inseguro y caballeroso caballo blanco.
- El niño REALMENTE bueno / divino (desreprimió algo) es vulnerable, pero también responsable: no niega su vulnerabilidad o reprime. Inocencia en el buen sentido, fascinación por lo simple, o por crear a partir de la nada... Masculinidad sana: asertividad / prohibición, usando un lenguaje adulto. Femineidad sana: con empatía, y no te ciegan las ganas inconscientes de amor y reconocimiento enfermizo.
####Zonas de pantano: imaginaos un verdugo en conflicto con un salvador. ¡La razón es lo que no se ve, la víctima y sus victimizaciones a curar (lo que queda del triángulo dramático verdugo-salvador-víctima)! ¿En el lado que no se ve podrían ir los 7 pecados REALES no? El iniciador es alguien que justifica sin razón:
- 1.1, deuda. De S (salvador) a vi (víctima). S: yo soy el bueno. La víctima queda endeudada.
- 1.2, necesidad (de vi a S). La víctima empieza a quejarse, para mostrar que es limitada. Si no te quejas, mejor.
- 2.1, culpa dentro. Ve (verdugo) a vi. Un ejemplo: un verdugo te tortura para reafirmarse (no ver su vacío...).
- 2.2, culpa fuera (vi a Ve). vi denuncia a Ve (trapos sucios en público). ¿Hay que evitar esto si eres víctima, y al mejorar como persona, ya no habrá peligro?
- 3.1 (S a Ve), altruísmo. El caballero mata al dragón para tener reconocimiento (o por desconocimiento de las reglas del Universo). Lo malo está en uno. Y una vez mejorada la psique, cambia el exterior.
- 3.2 (ve a S), desamparo. El dragón va a comerse al caballero. Ejemplo: el padre compra un coche a un hijo, y el verdugo actual (otro hijo), tuvo que comprarlo, y ahora desactivará al padre como salvador. Otro ejemplo: USA (verdugo) va contra Sadam (salvador), porque la gente en Irak, espera (son víctimas) mucho de Sadam. ¿Sadam sería un rey blanco y USA un rey negro? ¿La solución de polo inferior es que la gente de Irak confíe en su fortaleza de psique, y no desee por necesidad económica?
####Salir del juego y convivir:
- Zanjar malentendidos en menos de 6 horas, y directamente con el otro. Sin cartas...
- NO importa el mal día que has tenido, el otro no ha tenido que ver. Si estás saturado, escucha música... y entonces sí, habla con el otro.
- No te culpes por lo que vive el otro (enfado habitual...), es su misión psicológica, no la tuya.
- NO esperes que el otro desarrolle habilidades lectoras, explicita. Explicita tus intenciones: me gustaría que sacases ahora mismo tu mamá interna, porque quiero un abrazo.
- Prohibirme:
* Generalizar con el otro. Todos los días tú... Nunca haces...
* Mezclar problemas (es como desviar la atención).
* Comparaciones. Él lo consiguió y tú no / mi padre me dejaba (comparaciones).
* "Eres un...". Di lo que sientes (me molesta cuando silbas, porque...)
* Etiquetas. "La feminista de Ana"...
####Ayuda consciente:
- En facebook, hay quien se queja "por gusto" / catarsis. NO quiere ayuda (sería como sentirse inferior). El inconsciente busca un salvador sí o sí cuando te quejas sin más, eso sí.
- ¿Qué clase de ayuda debe pedir el otro? Pues psicológica (quitar "la sombra" del inconsciente), o del tipo "tú me enseñas y lo hago ya solo". Dirigirte a que el otro recupere su autonomía o confianza, esto es lo que realmente se te agradecerá de por vida. En algunas empresas es todo un "que te piso".
- Cuidado con "no es nada, tú harías lo mismo por mí", o con decir al otro "siempre contarás conmigo" o "saldremos de ésta" (¿te compromete a ayudar?). Nunca hagas más del ¿50%? (yo diría 60) si estás con otro.
####psi hermetismo LeoenPhi significado Árbol Navidad (runas: Elengoa, NO sólo nórdicas):
##Deseos: "quiero dinero", significa que no sabes lo que quieres; "quiero amor", que vas a ser sujeto u objeto en una relación.
- Odín se decidió a colgarse de un árbol (un sacrificio, eres más sabio y necesitas menos):
* Las luces del árbol de casa variadas, te permiten conectarte con la energía del solsticio; ¿observarlas preferentemente descalzo y con manos extendidas? ¿Qué runa se dibuja en tu mente? ¿Y ver un árbol en Internet (a mí me funcionó)?
##¿Adivinar se relaciona con perder la divinidad? Iluminarse es también muy malo (il = enfermedad, muerte).
##NO se incluyen los nombres de las runas.
####MONSTRUOS (DE LA PSIQUE, Y EN EL INCONSCIENTE COLECTIVO):
##Empezamos con los monstruos bere (demonizados por los paios), que representan realmente a gente buena. Son la Grayas, Gerión... y yo diría que también Medusa, e incluso Cerbero, ¿y más? Probablemente:
- Las 3 viejas Grayas, femeninas (intuitivas más que de percepción 3D) y profundas, ¡son la demonización de las 3 Marías, las cosmonautas / xúrides bere!
* El 3 permite que un pensamiento se materialice, ¿a través de la emoción?
* Vivían en una oscura cueva, al Oeste (donde se pone el paio / satánico Sol).
* Vienen de un mundo con un tiempo más lento, ¿las prisas son masculinas?
- Medusa (una de las 3 Gorgonas):
* Atenea encontró a Medusa haciendo manitas, y la mandó a un lugar recóndito (porque era bere, y Atenea, un mito paio / paternalista, actual para aquel tiempo paio que sigue en el 2.023).
* Medusa refleja tu narcisismo, y al parecer, Perseo, poco tenía. Como sus enemigos no soportan la diferencia (tienen narcisismo), fueron vencidos (con la cabeza de Medusa).
- Gerión (3 torsos; los beres escandinavos trajeron el 3 a los paios españoles...), guardián de bueyes (y cada vez tenía más, gracias a que los pedía como peaje. ¡Los bueyes eran los que simpatizaban con la causa bere de acabar con lo paio / satánico, reconquistando el mundo para bien!). ¿Vivía en el Jardín de las Hespérides, un límite del mundo paio y bere? ¿Cerca del Atlas?:
* Euristeo (probablemente represente al malísimo paio TEOdos, que mandó asesinar a la segunda reencarnación de "El BE", el bere Alejandro Magno) le pide al paio HérCULes que robe esos bueyes, porque Euristeo no puede ni pedirlos ni comprarlos. Me suena a engañar a Alejandro Magno el reconquistador "venido del cielo". ¿Euristeo es el malvado Teo II, que engañó a Magno, quien fue asesinado? Hércules quiso aniquilar, nada de integrar. Era Paio, no bere.
* El buey es femenino (antipaio, antisolar). Representaba el mundo femenino anterior de los bere, el de hace más de 5.000 años. Gerión tiene la guadaña de Krono (anterior a Zeus). ¡Es de la época de los Titanes, que eran bere! ¡Los olímpicos no!
* El 3 es movimiento (hércules pone 3 semillitas y puede seguir).
- Cerbero guardián del inconsciente (vidas pasadas, deseos reales, represiones...). ¿Es el responsable de que reacciones mal por tus represiones? ¿Cuanto mayor el sistema de autoengaño / zona de represiones, más difícil conocerte no?
* Mito: Hércules le da comprensión (no se siente culpable accediendo a su psique, no dice "soy un monstruo represivo, simplemente soy represivo / malo, como todos"), y pasa al interior. Las creencias que no soportas (familiares...), pasan con mucha facilidad al inconsciente.
##Quimera (mezcla ridícula), barreras para el éxito:
* Estando cerca de Quimera, te metes en lo imaginario, y ya eres presa suya segura. UNA QUIMERA ES UNA AMENAZA IMAGINARIA QUE NOS AGITA INTERNAMENTE, Y QUE NO DEJA AVANZAR HACIA NUESTRO DESEO REAL / OBJETIVO INICIÁTICO. Terminas VICTIMIZÁNDOTE a veces (no puedo...). ¿Parte de la Quimera son las memorias ancestrales y las creencias negativas que te pasa tu familia (hacen más difícil el éxito material y social)?
* Hay que matar a Quimera de lejos, porque de cerca, estás perdido, comiéndote la cabeza, sin actuar.
* Los comienzos son difusos, los errores son inevitables hasta para "el mejor".
##Hidra de Lerna y el desánimo por autoconocerte en serio:
* Si le cortabas una cabeza, salían 2. Tenía una cabeza de oro, y si la cortas, la Hidra muere, ¿las otras estaban de despiste? TÚ MIRA QUÉ SITUACIONES SE REPITEN EN DIFERENTES ÁMBITOS DE TU VIDA: LA SOLUCIÓN ES EL COMÚN DENOMINADOR EMOCIONAL / PSÍQUICO. ¡Y ASÍ QUITAS UNA "REPRESIÓN" DE LA PSIQUE, NO REACCIONAS TAN MAL, ERES MEJOR PERSONA, TE AUTOENGAâ€˜AS MENOS!
* Hércules ya estaba en el Inframundo antes de encontrársela, porque sabía que reaccionaba mal ante algo. Pero faltaba "ir al psicólogo".
##Esfinge griega. ¿Estás negando tu sombra / represiones / traumas? Se te puede aparecer. ¿Yo negaba incluso mis debilidades? ¿Hay que ser un macho je je, y si no, eres una mariposa? NO.
* ¿Aparece muchas veces en forma de estúpido MALOTE para que te importe menos lo que digan de ti?
* ¿Podía también ser una mujer que hacía una pregunta para casarse, y los que pretendían ser algo que no eran (machitos je je, que no aceptaban sus debilidades) morían?
* Cuando dices lo que te pasa y no imitas a los demás, la Esfinge pierde poder.
##León de Nemea (el león que se mea):
* ¿El León bueno, cómo es? Es el orgullo por haber mejorado profundamente (orgullo bueno).
* León malo: NO acorralable (su cueva tiene 2 salidas). NO puedes hablar con él, decirle la verdad, porque se ha vuelto loco, incoherente... con tanto reprimido. Si se la dices / entras en su cueva, sale por otro sitio con dolor por el choque de creencias (disonancia cognitiva), desechando la verdad externa (mecanismos de defensa para mentes débiles). Si algo te duele, mantén el dolor, tal vez lo externo sea la verdad. Quitar una creencia es un acto de valentía.
##Escila y Caribdis carácter femenino (¿representan "Coca o Pepsi, ¡nada, el tercer camino!"?):
* Estaban cerca una de otra, en un estrecho, y había que andar con pies de plomo. Representan el miedo del hombre a perder poder, en una sociedad paia patriarcal fundada tras la muerte del bere Alejandro Magno, hace unos 5.000 años. Son aspectos de "la madre terrible". Siempre hablando mal de las madrastras (que dan afecto a quien no parieron), lo femenino... ¡Hartos estamos! Charlie Sheen (2 Hombres y miedo) tenía miedo a las vaginas, y su personaje era horrible.
* ¿Platón nos invita sólo a ver la verdad material, lo externo, lo que menos cuenta de largo?
##Más (antes de los Titanes, que son bere):
- Quien va camino de ser buena gente, muere muchas veces, se transforma interiormente (desreprime), no exteriormente. La gente de bien ya no lleva máscaras / imagen.
- En las Hespérides estaba el árbol de la vida (hebreo):
* Los hebreos consiguieron el conocimiento bere; muchos, pa joder fuera de la tierra prometida, ¿son las 12 satánicas tribus viajeras? El 13 es el bere, el 12 es paio / solar. Veremos que una buena concepción de la Astrología es hebrea.
- Tifón el gigante (bere; los cíclopes son también enormes, pero tienen un sólo ojo y mucha destreza material y poca profundidad, así que son paios, que el uno es paio) es la destrucción, y Equidna (su contraparte sexual) es la madre terrible.
* Zeus no toca un pelo a Equidna y su prole. Van a ser necesarios para que los malditos Héroes paios luchen contra ellos y aprendan. Estos monstruos son de agua, emocionales, ¡tu sombra / represiones! Tu sombra espera a que la venzas CONSCIENTEMENTE, y que aprenda tu alma (tu alma es lo único que te llevas para las siguientes reencarnaciones).
####Titanes: eran bere, que eran enormes, comparados con los relativamente cabezudos paios. El pasado sigue en las celebraciones.####
####01, Océano miedo a lo desconocido. ¿Qué falsa creencia que me ata a mi zona de confort trata cada mito / titán (veremos cómo ellos representan la accion, y ellas la retraccion)?
- Representa la masa de agua infinita alrededor de lo conocido (zona de confort).
* Negativo: huir (la catatonia / enajenación también es huir, como desmayarse por miedo). O se combate de forma agresiva (¡esta música no es la de los setenta, lo que viví en mi infancia, mejor lo malo conocido!).
* Positivo: se acepta (vivir en una casa nueva, sea más o menos positiva que la anterior... ¿para aprender?). Incertidumbre: imagino lo que podría pasar, y a la vez no sé cómo prepararme para la situación, pero la acepto.
- Dar el paso hacia lo desconocido incluye responsabilizarte (y muchas veces, no elegir los otros caminos). Si no tienes ni idea de contabilidad, y tienes que decidir si coger un trabajo donde tienes que hacer algo de Contabilidad... eso es zona de inconfort.
* El miedo se pasa viviendo. ¿Planificando un poco, sin pasarse?
* Elegir a alguien para que te acompañe a atravesar lo desconocido, podría ser la primera responsabildiad.
####02, Tetis miedo a perder el confort (si voy por algo nuevo perderé algo viejo, y la vida podría ser peor). La niñera te protege... pero es la madre la que te invita a vivir experiencias (tocar una cafetera ardiendo...). ¡Criba / separa en montones de importancia cosas para autoconocerte!:
- Ejemplo. Llevas toda tu vida saliendo el fin de semana (discoteca), y no sabes cambiar eso.
* Sabes en qué fallas pero no bloqueas tu reacción al cambio.
- El miedo a morir está ligado a seguir al clan, sin diferencia positiva.
####03. Océano era como el miedo a perder opciones al elegir. Tetis era el miedo a perder lo conocido (incluye el "yo soy así"). Ceo es el miedo a ser rechazado. Con él te haces preguntas... y no avanzas. Cuando estás a punto de conseguir algo que no consiguío tu familia (una carrera universitaria que te importa mucho...), entras en crisis, y CEO va a aparecer. TIENES SENSACIÓN DE DEUDA (ARQUETIPO PATERNO).
- Mi familia está acostumbrada ya a mis rarezas (que son ser avanzado: no usar champú...).
- Cuanto más percibes (más avanzado), menos lanzado eres, eso sí.
####04 Febe dice: está bien que quieras salir de la zona de confort, pero no sabes. ¿Es una pitonisa, tiene que preverlo todo (me recuerda a mi ascendente Capricornio)? Déjalo pa mañana, ya has hecho bastante... Engaños. El Universo se cansa de que no pongas el cuerpo para acostumbrarte, y te manda tempestades.
- Digamos que si algo te da miedo, pero también sientes un cosquilleo / calorcillo pseudoagradable (¿en el estómago?)... es que el alma quiere ir allí, ¿aunque sea para aprender algo que ya no se usará en breve?
####05, Hiperión miedo a ver las cosas como realmente son (no "te subes a un árbol" para tener otra perspectiva). No quiero ver que en mi trabajo no soy feliz, que he gastao años pa na... Así, no se pueden tomar decisiones acertadas.
- "Ya pasará", piensas, "volveremos a la vida de antes". Cierras los ojos, aunque quieras entender lo que pasa (es una contradicción), eres irracional en el mal sentido.
####06, Tea te dice: no necesitas ir afuera, dentro se está muy bien, con tu colección de cuadros, videojuegos... Miedo al ridículo. ¿Por qué tanto miedo a la risa / burla del otro? Hay que comprender y perdonar al que se ríe (es titere de su zona de represiones, critica lo que no entiende...).
* Ley de TEA: tú eres lo que el otro ve / opina. Terminas desvalorizándote, y con complejo de superioridad a veces ("yo soy una buena vecina, y tú un mierda"; María Oliva).
####07, Jápeto "eres útil mientras hagas" (no valora la ancianidad, la sabiduria... ¿La enfermiza especializacion sí no?). El miedo asociado a Jápeto es a cambiar la psique para hacer algo distinto (es bastante taurino), aunque en lo de ahora fracases.
- ¿Qué creencia nos ofrece Jápeto? NO hay tiempo para lo que realmente deseo. ¿Porque "hay que currar" je je?
* CONTRADICCIÓN: DIGO "CÓMO ME GUSTARÍA...", PERO EN REALIDAD, NO SE HACE NADA POR CONSEGUIR LO DESEADO. Hay cansancio, frustración que no sabes muy bien de dónde viene...
* ¿Qué hacer? Dejar de hacer y ponermos a planificar. ¿Y luego sí empiezas vienen las musas no?
- La Psique, no sólo determina lo material, sino que el estudio de tu propia psique, es tu misión de vida.
####08, Temis miedo a mostrarte débil. Temis se ocupa de "hacer" las leyes naturales. ¿Quién castiga? Nemesis. Temis es "la temida", no Nemesis (lo importante y DIFÍCIL es saber la causa de por la que "Némesis te castigó").
- Mucha gente ve el tener miedo como signo de debilidad. En realidad, tienen miedo a mostrarse débiles. ¿Prefieren pegar antes de que les den? No se soporta la debilidad en otros, por un fallo interno.
- Cuando un adolescente actúa de forma violenta, probablemente tenga mucho miedo (quizás sus padres no le permitían expresarse, o no le daban afecto).
####09, Crío MIEDO A NO PERTENECER A UN CLAN (¿ser de un cantante, por ejemplo? Luego ves que el interior de ese cantante puede mejorar mucho). Mito: La orda (manada, indiferenciación) primitiva. Grupo (ovejas) reniega de quien da las órdenes, y lo matan, y entran en caos. ¿Pero el caos está bien para que todo funcione no? Caos = no estandarización, no límites en tu conocimiento benevolente.
- FALSA CREENCIA: no puedes solo (si fueses superparalítico, sería verdad). Acabas casi en cualquier clan.
####10, Nemosine miedo a ser olvidao.
- Mito: Eco se enamora de Narciso, y éste se ríe de ella, y ella se recluye en una cueva. Un pastor, enamorao de Eco, suplicó / lloró por la situación, y Némesis le oyó y castigó a Narciso por su desprecio, haciendo que se enamore de sí mismo, sin comer... Eco fijó expectativas, y cuando Narciso respondió de otra forma, Eco no pudo procesarlo / aceptarlo, y el dolor se apoderó de ella.
* O eres independiente emocionalmente, o no dejes que te mimen mucho, porque ahí está el enamoramiento (el otro te lleva inconscientemente a tu etapa infantil) con dependencia emocional y expectativas.
- Falsa creencia: no dejas huella histórica si no es a través del recuerdo del otro.
####11, Crono "me lo he ganao y no lo suelto":
- Chronos (la ch se lee como j; Jronos) es el Dios del tiempo, ¡PERO NO ES CRONO! CRONO ES SATURNO y lleva guadaña (agricultura).
* Alguien le dice a Crono que un hijo le iba a matar. Y cada vez que Rea paría, Crono se ponía la servilletita je je (un festín). El miedo es a ser desplazados ("yo soy el que cocina aquí", ¿y si tu trabajo "del alma" es otro?), a que alguien nos robe lo que creemos que es nuestro. Cuando asciendes fácilmente (zalamería...), te puedes volver paranoico.
- Creencia: lo nuevo es mejor que yo (la nueva pareja de tu expareja) y soy imprescindible.
####12 REA, Cibeles, miedo a perder el amor de los hijos. Creencia: una madre no puede ser una esposa, y viceversa.
##psi hermetismo LeoenPhi sueños y miedo (fobia: mucho miedo, inexplicable). Tengo miedo a la gente con altas capacidades (sobre todo si su memoria es poco selectiva), que a la vez las consideran indispensables:
- Hay miedos que vienen de conflictos no resueltos (de ésta u otras vidas).
- Clases de sueños con miedo:
* "Malos sueños": poco miedo, entrenamiento para el mundo material (las pesadillas, en cambio, son para autoconocerse: acércate a la sombra y "pelea").
* Terrores nocturnos: a veces te despiertas con pataletas, a veces te tienen que despertar (gritas; un grito de mi padre "que viene el lobo" podría decirme algo de mi abuelo).
########FIN LEOENPHI########

4. HERMETISMO (ZEBALLOS, CRISTIAN):
############################
####CRISTIAN####ZEBALLOS####
############################
####La curiosidad lleva a la alegría (¿como distensión, por ejemplo?), y ésta, a la atención.
####Las creencias y la misión interior (conócela) no tenían que ver con el trabajo en el siglo XX.
####Cristian sabe mucho de "los 4 cuadrantes": NO empezar, NO darse cuenta de que algo va mal dentro (el fallo psicológico), NO soportar la diferencia con los demás y abandonar / NO seguir la progresión.
* Y también de deseos, ¿3 o 4 fallos de psique máximo NO (al desear un coche porque NO has conseguido uno... Y ten en cuenta que el camino es lo importante, quitar los fallos de psique)?. Detallado, sin la palabra "NO" (mucho mejor "un coche silencioso" que "un coche que NO haga ruido").
####Cristian. 2.024, año del Génesis: primero caos, luego orden (el momento + oscuro antecede al amanecer). Hacer cosas uno, en vez de demandar. Pero recuerda que el sabio es de "tiempos lentos" (y necesita tiempo para filosofar). Produzcamos lo mínimo, y NO nos fijemos en el sabor.
####Constitución preg es el mito español que impide el progreso real como la masona Revolución Francesa en Francia Aunque en 2024 podría juntarse magia con revolución o violencia como cuando viene "El Bere".
####psi mi problema (con los pasos de CristianZeballos):
1. En mi casa, me imagino que me cruzo en la calle con gente que intenta dejarme mal en público.
2. Al final les doy "una patada que los lanza al infinito". ¡Lo que hace la impotencia / no aceptar tener "enemigos", yendo por tus nobles objetivos! Menos miedo y más maor, y más comprensión hacia el bruto.
3. ¿Y si la vida me junta al final con lo peor de lo peor, para que aprenda lo que es gente de verdad peligrosa? Entonces, ¡basta ya de esta situación, solucionémosla, que es fácil!
4. La gente es diferente (los locos superiracundos sufren...), tengo que apechugar con lo que dije, el Universo protege. Acepto todo esto, y acepto que mis reacciones pueden tardar en cambiar. Cruzo la calle tranquilamente. ¿Soy buena persona? NO te preocupes si no, lo importante es verse incompleto.
5. Quiero prever menos (ser más optimista y autovalorarse) y practicar más (confío en que afrontaré relativamente bien lo que no llegó). ¡Y gran parte de los problemas de psique se arreglan en la calle, poniéndote frente al otro! ¡Es bueno tener pruebas (miedo cosquilleo...)!
6. No basta con una vez.
7. Soy mejor persona, y la sociedad mejora.
####Cosas de Cristian (Raúl Zeballos) y mías (también):
- Tenemos el lujo positivo (esas pequeñas cosas que hacen más llevadera la actividad diaria, generando endorfinas por ejemplo... Canciones / reproductores de mp3, un poco de bread / bret rico, la calefacción puesta sin sufrir mucho el frío, pero tampoco llegando a los 20 grados...); piensa que no se acaba (y tampoco las monedas del monedero; es un fluir, se van y vienen otras).
* Da gracias por lo que tienes (una cama comodísima que te trasporta a una dimensión saludable y placentera...), y de valor a cada pequeño paso (aunque lleves una hora sólo con aseos, "loco" por escribir algo; ya has hecho mucho y bueno).
* Confía en tu capacidad productiva (si almacenas mucho de algo, como una medicina, ¿no confías en tu capacidad de volver a conseguirlo?). Y mira que quien coge "2 manás" (uno sí puedes cogerlo con optimismo), será penalizado por la vida; entonces, ¿es mejor ganar premios pequeños en la Lotería? ¿NO es digna de apreciar la ayuda psicológica? Hay mucho "obrero" (incluso bastante gente que dibuja de miedo), y poco buen psicólogo, así que...
* Los tibios irán al infierno, como los avaros (no hay "circulación de energía": dinero...), que no se dan a sí mismos.
####SEGUIMOS:
- La desconexión con el futuro trae enfermedades mentales, así que cuidao con los de "vive el presente y disfruta" (hemos venido a transformarnos, y a disfrutar, pero con la naturaleza, la geometría "gratis"...). Hay que vivirlo, pero planificando antes algo y yendo al pasado como ayuda para la limpieza de psique.
* Nosotros somos nuestro gran proyecto, manifestando debilidades en todas las áreas (la empresa es una prolongación de la casa).
* Yo: NO somos libres. Realmente, conseguimos libertad al autoanalizarnos psicológicamente. Eso sí, si quitas problemas, vienen unos nuevos, pero ya serás más fuerte.
- Cómo ves a los demás:
* Si proyectas tu historia en otra persona ("se parece a mi papá"...), ¡no es tu prójimo! Date tiempo para conocer.
* Yo: si sólo te juntas con el mismo tipo de persona narcisista, podría ser por pensar que todos los hombres son iguales...
- Es importante hacer un buen trato con el otro, que los 2 quedéis satisfechos (el "aini"), para evitar deudas / estancamiento de energía (las guerras salen mal). Regatear es lo bere / aconsejable, aunque las gracias pueden valer.
* Yo: la guerra en Ucrania es un teatro, ¿y es más cómodo porque te preocupas por algo de lo que no eres responsable?
- Educación consciente: al terminar, sabes tu proyecto de vida (no sé, has venido a coordinar proyectos, en especial de creación de tejido social, a acompañar a la gente...).
* Yo: HAY EXCELENTES PROFESIONALES, QUE SON INCAPACES DE IMAGINARSE ALGO MEJOR, Y CON VIDAS "DE AUTÉNTICA MIERDA".
- La palabra devaluada (presidente no desreprimido / no coherente), devalúa hasta la Economía. "No drogas" incita a las drogas, y las élites lo saben, el "Universo" borra el "no", y se queda con "drogas".
- Algunas empresas familiares fracasan porque los roles empresariales deben respetarse (no son los de casa. Eso sí, hay que saber cuando emplear energía femenina, y cuando masculina).
- 5 preguntitas de evaluación. ¿Qué es lo mejor que conseguiste y en qué has mejorado (son 2 en una)? Celébralo para seguir creciendo. ¿Qué es lo peor (no sé, comer desaforadamente; prohíbetelo con angustia) y en qué fallas (2 en una)? La última, ¿qué es lo que viene (para seguir creciendo, mejorar lo que haces mal...)?
- El miedo te frena en tu camino hacia la zona de inconfort:
* Por sobrepensar.
* Por no comprender al otro (hace ruido porque es psicótico...).
* NO querer fallar. Fallar una y otra vez puede hacerte mejorar. Los errores están en el camino.
* Experiencias anteriores (mañana es otro día, puede salirte mejor, sin necesidad de planificar mejor).
- Si alguien dice "yo soy la verdad", ¿habrá siempre un nutrido grupo de brutos siguiendo?
- La esperanza, espera + ansias, te pone en posición de necesidad. NO te mueves y como el otro no hace lo que esperas, acabas defraudado, decepcionado... y caes en el pesimismo (más todavía), y como "creer es crear"...
- Recordar: los grandes cambios vienen de pequeñas decisiones (ficha de dominó pequeña tira mediana, mediana tira...).
- Mundial Qatar 2022:
* En Qatar, la magia (lo elevado) está en ser femenino (juego bonito vs fuerza, por ejemplo).
* Energía femenina: decir las cosas indirectamente, con tacto... Para ser humano hay que ser erótico-elegante. Masculina (más directa; enseñar los pechos, o mi altura de 2 metros para que el otro huya...).
* La a y la i son "de ataque", y la "e", de recepción.
* Hacer por hacer para que se fijen en ti, te resta valor.
* Hoy se intenta igualar a hombre y mujer. La diferencia de roles es primordial, y por eso hoy es el niño quien manda sobre padres, profesores... Lo que yo decía, zapatilla voladora! Y la sociedad pierde valor así. Ir contra natura...
- Yo:
* los talentos, no son del tipo "sé programar en Phyton", sino algo abstracto (sé estructurar, comunicar resumidamente, con lo que los complicantes cerebritos sobran...).
* el dinero vendrá si tiene que venir, no te preocupes por la supervivencia, haz cosas que valores, y al "poner el cuerpo", irás hacia la limpieza de psique, y al preocuparte por mejorar la psique, habrá ayuda "divina" (como si defiendes tus derechos pensando que "somos uno").
* cuidadín, porque una persona muy desagradable puede traerte un mensaje importante, incluso el mensaje de "aprende a valorarte y pasa de lo que digo, tu camino está bien".
* los políticos son espejos del pueblo (son creídos...). Si eres elevado, difícilmente podrás dirigir una gran empresa: el malo tiene que ascender (país, empresa...) para "dar el merecido a la gente".
* Mitos (son cosas "del pasado" cuya energía se atualiza con ritos): represiones (quitarlas cuesta décadas... es la misión de vida base; las sociedades que piden a los de arriba sin mejorarse, reciben como castigo los recortes, que estancan la economía), creencias conscientes (la creencia crea)... ¿Los mitos griegos surgieron tras dar Magno "La Respuesta" a los Iudas?
* Una persona elevada (no materialista o placerista) tiende un poco a la emocionalidad de algunos Sioux (no exaltada, aunque la emoción se necesite para desear y moverte).
####Y SEGUIMOS:
- Cuanto más haces sin un discurso claro, más "te embarras". Quiero esto: recibir dinero por tirar el tarot, o transmitir la idea de que lo material viene de lo sutil (con éxito).
* Primero viene el deseo (ser buen compañero de trabajo... ¿Se puede medir? ¿Y el porcentaje de tiempo que pasas con tus compañeros en harmonía?). Luego (hayas deseao o no), las características: ser menos reactivo, más tranquilo (siendo comprensivo con los demás quizás)... Puedes sacarlas de personajes, gente real... Si la evaluación es continua, recuperas la dirección buena del camino.
- El destino inicial es a los 7 / 8 años. Ahí ya puedes desreprimir creencias, traumas y secretos ancestrales.
* Si te diriges a un lado y aparecen resistencias (miedo, culpa...) vas por el buen camino si cambias la psique. El entorno luchará para que vuelvas a ser "una máquina programada" (como a los 7 / 8 años). Sin la necesaria programación infantil, no hay personalidad: "el lobo Jacobo, criado en el bosque sin las caricias de mamá, tendrá problemas de socialización".
- ¿Ansiedad por escasas ventas (la espera es negativa)? Mejor gratitud, y que la vida te sorprenda con los clientes. La tranquilidad también aporta, y si combinas varias tareas con cierto equilibrio, tendrás "angelitos de la guarda". En vez de ponerte nervioso, pregúntate, ¿qué hice para vender tan poco el Jueves? Si te lanzas, es muy posible que NO te pase lo malo que imaginabas.
- Si quieres cambiar mucho en un día, puede que venga "el efecto rebote". Se tarda décadas en cambiar (que n os engañen).
* Tienes que elegir lo que es moralmente aceptable y lo que no, y eso se hace "siendo un mal hijo" (diferénciate de la familia). También puedes elegir estar tranquilo hoy... Yo: aceptar sólo aminora la enfermedad (en caso de traumas).
* Autoescucharse: un "dron" imaginario te manda información de cómo reaccionas... Escribe sobre ti, y mucho. Y revisa lo que escribes una sola vez quizás, para no perder frescura.
- Político: tenemos que ver cómo resuelve los conflictos psicológicos... ¿Es coherente en pensar, sentir y hacer?
- "Ama al prójimo como a ti mismo", se puede traducir como: estudia Psicología para mejorarte / amarte (es que no hay otra), y podrás comprender al otro, y verlo como realmente es. Primero mejoras tú, luego, tu vinculación, y luego, la sociedad.
- Cuidado:
* Si sigues a tu necesidad, traicionarás a tus "ocultos" deseos de alma con deseos "de ego malo". Deseos de alma: calorcillo "torácico" + "miedecillo" (por algo que no tienes, porque tu psique se bloquea).
* Acaparar es guardar para sentirte poderoso, o por si acasillo (por ejemplo). Guardar un poco... a veces está bien (si tienes que hacer un pago relativamente grande...). ¿Y qué es ahorrar, ser más hábil, hacer un deseo que implique mejora de psique, y con eso eres más hábil?
- Compartir es informar sin obligar a escuchar, y también es ejemplarizar (contagiar)...
- El enojo en el amor es exceso de expectativas de amor no satisfechas. El amor consciente no pone expectativas, y así no hay culpas o deudas.
- "La encuesta dice...": tanto número "diciendo que es preciso" es un engaño (no se puede precisar tanto en porcentajes...).
- Los "mercados" son las relaciones entre personas, que se mandan energía:
* El político nos dice: mirad perritos, que os damos de comer (y nos dan empleos de comemierda que realmente no aportan).
- Un sol (tú, yo... en potencia) no opaca al otro, integra.
- La felicidad es ahora (si buscas cosas, cada vez querrás más).
- Cuando reconoces que te complementan, es que sabes que algo falta en ti (y eso es bueno).
- 2023 / 24 crisis de psique (información que te choca...) superada o... algo negativo para tu cabecita, por rigidez, ¿eso incluye tu vida material?
* La esperanza es lo que usan los políticos para controlarte, quitarte poder personal... Lo establecido hará "crash" (como muchas esperanzas, al no ser rígido). NO te preocupes mucho por la incertidumbre (es normal en Acuario).
- Intentar vincularse con tacto y naturalidad (en una casa), pero no desde el "tú me sirves" (para sentirme superior, para...) o el "me gusta" (me vinculo porque compartimos gustos...).
* Yo: personas muy diferentes, unas necesitan descansar más. Y es muy interesante ver cómo la gente de bien, con 2 canciones buenas que escucha, ya "vuelve a la vida", y otros beben, gritan con los amigos durante horas... y no consiguen nada remotamente parecido.
* Yo: unos quitan lo gordo de los platos (si no rebañaron con pan / se olvidaron), otros les dan jabón de lavabo (no enfermizamente). ¿Y si sólo puedes usar y tener en tu cuarto el plato que limpies?
* Importante dar valor a lo que me da el otro, ¡y sin trueque obligatorio, que el trueque equitativo es casual! ¿Dar sin esperar es al clave?
- La economía "tradicional" lo considera "todo", menos la psique del economista (creencias creantes para bien o mal...):
* Yo. Los siglos 19 y 20 fueron el gran declive de "lo humano", y fueron superficiales y excesivos, de buscar la comodidad y "el sibaritismo" y la superficial imagen, la salud (depende de la psique) o la superespecialización (que 3 meses sea lo máximo en preparación, para trabajar satisfactoriamente en la gran mayoría de los casos!).
* Yo. El bienestar (la felicidad no implica bienestar, es simplemente no necesitar nada en el momento presente), requiere de salud, y la salud, como ya vimos, de la psique. los mejores pueden llevar su vida "en una mochila".
* Yo. La voluntad hay que trabajarla. Y cuidado con la depresión sonriente / alegre; la felicidad no necesita sonrisa.
- Yo. Lo de meditar sin Jung, genera creídos (retrasan la civilización). Lo de Quim de estar 72 horas en oscuridad, no está nada mal.
- Yo. Si me preguntan por la sociedad: maestro y discípulo (artesano...), pudiendo acceder a otros maestros (incluye maestros de la moralidad). Intuición (menos pensar a lo aspi, con mapas), elegancia, buen gusto, pero siendo modesto en el vestir (a la par que relativamente alegre), parco en la comunicación... Sin niños esclavos que producen para nosotros. Para no caer en vacaciones o caprichitos de fin de semana, trabajos no extenuantes (que no sean intelectuales, o físicopeligrosos, y que permitan horas y horas de conversación filosófica).
* Quizás esté bien un empobrecimiento (igualándonos) para seleccionar a los mejores (los que aman la vida y tienen muy pocas necesidades).
* Todavía hay gente que viaja sin "anotar sus reacciones" (no elevadamente), con vistas quizás a un análisis psicológico posterior.
- Yo. Todavía me cuesta ver "soletes", yo que soy Escorpio. Lo veo como infantil y pasteloso. Quizás lo que me fastidia es que eso atrae a la gente, y no debería ser un punto a favor.
- Yo. Definiendo el mal:
* Simple búsqueda de triunfo o atención (aunque la vanidad es peor que "si no me prestas atención, no me quieres, así que, al llegar a casa, quiero una buena bienvenida"), comodidad, posesiones, conversación no profunda (sobre todo con alguien que no quiere, y que debería aprender a pararte en seco), perfeccionismo (sobre todo cuando lleva a la competición). Ocupar el tiempo. Ser tibio / ocultar.
####RESTO CRISTIAN:
- El equilibrio es dinámico. Busca mejor el equilibrio que la estabilidad. Comprender, saber tranquilizarse, saber profundizar en uno mismo... en vez de evitar.
- Yo. ¡Los del Club, discutiendo hasta altas horas de la noche, casi matándose! Y hablando de dinero. Y sintiéndose elevados, e incluso hasta creerán que los admiro. La mayor parte de los habladores no tienen ni idea de lo que es moral e inmoral.
- Yo. ¿Cuando la gente abandona la función paterna (prohibirse cosas / el típico "basta ya"...) hay más abogados je je?
- Cristian conoce muchas reglas del juego Universal, de la vida (y ve señales para acertar eventos futuros):
* Hay relaciones con los demás como si fuesen objetos. Crees que estás en sus peores momentos, pero no es así, y luego los echas de menos. La función paterna no es con los demás, es con uno mismo, con los demás, sugieres, sin dureza casi siempre.
- Decreto: "deseo aprender a rechazar las proposiciones y a las personas que no me interesen" es + específico que hablar, y puedes ver ahí las trampas de tu ego malo.
- Si defiendes lo que eres, ¿estás defendiendo lo peor de ti siempre? El, es que yo soy así... es muy infantil. Es mejor el "me siento así cuando tú haces eso, porque necesito mejorar".
 - ¿Cómo aprovechar la energía de traición? ¿Sólo tengo que tener cerca gente que piense en hacerme algo dañino cuando pienso individuarme, y tendré su energía? ¿Y si simplemente doy asco, también recibo energía je je? El guerrero (psicológico) busca interiormente ser traicionado. ¿Si quiero dormir, sólo tengo que pensar en hacer el mal a otro je je?
- Cristian zonas de emergencia. Superútil:
* 1 de 4. Ante los inicios (de estudiar una lección, o de algo que nunca hiciste y se te va a dar mal seguro la primera vez). Trampas del ego: empiezo mañana, o cuando la hurraca cante 3 veces je je; o saltarte pasos por ansiedad, culpar al otro (es que no me deja empezar)...
* 2, empiezas y ves que algo anda mal. Trampas: miniminar "la falla" o negarla (soy el único humano sin fallas je je). Ten claro tu plan de avance (yo quiero reaccionar de tal forma en mi camino hacia conseguir la bici).
* 3. Si cambio, el otro se enoja, te ve diferente y no lo soporta. Tu yo querrá que vuelvas a ser el de antes: sopórtalo. Si "marcaste un gol" siendo ofensivo, no cambies a defensivo. Y cuando vas a superar a la familia, hay resistencias mentales.
* 4. Trampas para que desistas en seguir y seguir (contingencias / casualidades negativas, para el fuerte): apatía, desconexión emocional (te da igual el proceso anterior, no celebraste, ni agradeciste, ni compartiste), enojo / irritabilidad.
- Yo. Una parte de tu mente te lleva a seguir a alguien, cuando lo que has de hacer para tener éxito (superar adversidades externas...) es individuarte (ser tú mismo). Por lo general, cuanto más potencial tienes como persona, más trabas / misiones te pone la vida (padres disfuncionales...).
* No tengas miedo a equivocarte, vamos hacia la libertad (para eso es la Psicología), no hacia la excelencia (para eso están las personas "robot", con una inteligencia integral pequeñísima).
* Para los "avanzados": hay que "resolver el subconsciente", porque cuando éste no está bien, nos hace creer que somos buenos por métodos sucios, como la imagen, ¿a que es difícil resistirse a una "sucia" je je persona simpática / vendedora?
- Los complementarios suman (la diversidad es energía). Pero desde Qatar nos mandan este mensaje: "vamos a conquistar a quien no piense igual". La "inclusión oficial" habla de elegir género, no diferenciando al final entre lo masculino y lo femenenino, es decir, ¡es por la igualdad, la energía cero! Incluir es como "ser devorado" (la empresa oficial suele devorar el alma).
- La Escuela oficial consigue "iguales POCO valiosos". La familia ha de decirles "no", para que de adultos sean sanos; se está queriendo victimizar al niño, y terminará siendo, no sólo una víctima, sino también un vampiro. Yo. La escuela es "de Aspergers". Lo humano es "ser TDAH", y tener crisis epilepticas cada vez que te encuentras con uno (no puedo, y no quiero seguir el discurso de alguien poco profundo...). Sé lo que no quiero ser: prepararte para el mercado laboral (2022), te convierte en ganado, en un bien de consumo.
* La integración real parte de respetar lo diferente (creencias...). Escuela buena: enseña a los niños a decidir con sabiduría. NO los guía a una profesión / especialización (honrar la vida en Acuario es cambiar con mucha frecuencia).
- Yo. A veces te independizas por ser una persona difícil.
- "Creo que podrías ser un buen psicólogo con este libro que no sabías que querías". ¿Soportará el otro que lo valoremos?
- Al brindar, amplificamos experiencias. ¿Mágico no?
- Yo. Queriéndome. ¡A veces soy aburrido sí!
- Yo. A veces, curiosamente, el éxito consiste en abandonar lo que "no es para ti".
- Con resistencia, queja, culpa hacia fuera... lo pasarás mal, y seguirás recibiendo la misma prueba (aunque puede variar su imagen).
- ¿"Dios" quiere decir "presión"? El carbón, para ser diamante, debe soportar presión. Yo. ¿Todas o casi todas las debilidades / problemas que te cuenta la carta astral pueden ser superados no?
- Yo. Con tristeza (no la tapes) nos autoobservaremos, nos replantearemos cosas...
- Recuerda: acepta que fallas, entra en crisis psicológica, y trata de resolverla en un tiempo razonable (¿meses?).
* Ausencia de función paterna (prohibirte...): te quedas un poco "de psiquiátrico" ante la verdad, el empeoramiento de la situación general... Y los traumas pueden generar enfermedades, ¿intentar tomártelo con naturalidad?
- Yo. Pa dormir di "qué bien, me quedan 3 horas, y así me levantaré aún más fresco"...
- Cuando la necesidad llama a la puerta, ¿gastar + (promover fluir de energías)?
- Yo. ¿Sueñas con un mundo mejor (y con los vínculos que quieres)? Está bien (mucho mejor que esperar por los políticos).
- Yo. Es importante descansar, y saber disfrutar en la cama horas y horas (muchos empresarios son ciegos, haciéndote madrugar).
- Energía masculina para el orden (¿y la protección o la incentivación?). Sin ella crece el complejo de Edipo. Es uno mismo quien debe ser disciplinado, porque si te imponen la disciplina, puedes terminar aborreciendo lo que haces:
* ¿Para disfrutar, crear con piezas ya existentes e intuir es la energía femenina, y para conseguir / conquistar / PRODUCIR algo, que podría incluir prestar atención y memorizar, la masculina? Tiene que haber equilibrio.
* Si pasas tus vacaciones en una hamaca, puede que luego te cueste volver a ser productivo (no me gusta ni el fin de semana ni las vacaciones, disocian la mente además).
* El jefe de Estado argentino (202poco) no tiene masculina autoridad (está en otra persona). ¿Su discurso te entra por un oído y te sale por otro? Ser asertivo es importante.
####Algo de Cristian y Sofía. Percibimos como locos (porque lo estamos), porque percibimos sólo lo que nuestra relativamente débil mente puede "soportar" (lo que queremos, vamos); hay que pasar pruebas psicológicas para envejecer menos, no sólo está el taichí (y la buena comida, que si siempre comes bien, tu cuerpo no se fortalece).
- El punto de encaje / anclaje "filtra" la percepción, ¿también se llama así al conjunto de tus deficientes creencias actuales y similar?: donde alguien avanzado ve una inmoralidad, una persona normal puede reírse. Recibe información, y la transforma en una percepción.
* ¿Los obreros intelectuales no se cansan, porque son tan simples que no llegan a sintonizar "muchas cadenas"?
####psi hermetismo Cristian 2024 (Génesis, nuevo inicio, cambio):
- Constancia, disciplina y direccionalidad, para "hacer magia". ¿Pero para eso hace falta primero un deseo no, un objetivo? ¿Objetivo nacional?
* Mi objetivo de que me afecte menos lo que digan los demás (no trabajas...), no lo estoy cumpliendo muy bien. Quizás tenga que trabajar, pero desde luego, la gente debería soñar con un mundo sin tanto trabajo, ahí produciendo humo, mientras que la ropa, la comida... se producen fuera.
- Reconoce en tus estados de ánimo la activación de tus programaciones. Ojito, que está, no sólo la represión o la creencia consciente negativa, sino también el Zodiaco...
- Planificar acciones elevadas está bien (planificar la vida, pues no mucho; es sabia la canción "Siempre Seré un Niño", de Santi Auserón, donde se habla del poder de lo fortuito; el amor se mueve mejor ahí; prevenir mucho puede ser mucho peor que aceptar las cosas como vengan). El porvenir, del que se habla en al Escuela, es un "tapahorizontes".
- NO tengas miedo de fallar en lo que piensas, sientes o haces. El verdadero fracaso es no intentarlo. ¡Es el año del Génesis!
- Cristian habla poco de que somos diferentes. Hay aspergers (los tontos integrales que pueden trabajar más y sacar dieces), y en el polo opuesto, está la gente más inteligente (inteligencia global), la que no debe quemarse transportando sacos de carbón o con lo intelectual, con prestar atención afuera, con los sentidos, que es algo impuesto en nuestra sociedad (los de tono 7 de Tzolkin maya, tienen más difícil prestar atención, pues su trabajo es "quedarse absortos" para conseguir respuestas). Luego claro, están los andropáusicos psicológicos (algo machistas; los machistas y los psicópatas se copian entre ellos).
- La escucha, y no la visión (espejismos), será lo que te ilumine.
##NO hemos venido a disfrutar de los artículos (se disfruta generalmente más de una conversación que de un vídeo informativo), sino a obtener información de ellos.
####Cristian:
- Miléi es más de palabra, y el 2.024 será el año de la sinceridad, ¿incluyendo contar las fantasías sexuales? 2.024:
- 4 actitudes en 2.024 para dejar de ser autómata (y el otro no está para "llevarte a la placenta" / hacer que te evadas del mundo, que disfrutes... NI PARA QUE LE DEMANDES PERFECCIÓN, PORQUE SUELE SER ESPEJO TUYO. SI TÚ NO CAMBIAS / DESREPRIMES / BUCEAS EN EL SUBCONSCIENTE, LA MISMA GENTE ATRAERÁS):
* Ser humano como valor central. No el dinero... El otro debe dejar de ser un objeto (¡la educación debe ser para convertir en sabios, no para trabajar como ovejos usados!). Valórate (en justa medida) y valorarás, pudiendo así atraer.
* Cuando dejas de ver al otro como espejo de tus heridas infantiles (incluye alguien que te da lo que te negó la familia), puedes por fin relacionarte, y ver cómo os complementáis. NO obligues al otro a cambiar (a veces es mejor "un poco de guerra" incluso), sé sabiamente feliz (como Sísifo, que era secretamente feliz).
* Aportar al bien común (y agradecer). Se acaba con la deuda (te debo, me debes...) y la culpa.
* Regresar mejorado lo que recibo: hacer circular un vídeo que he visto...
####psi Cristian más sobre lo que nombras y la suerte que tienes.txt  Chichen Itzá, repetir el nombre del recién nacido varias veces (el nombre te dice cómo te comportas, por así decirlo), ¿para que el nombre impregne el inconsciente ya?:
- Nombrar enfermedad: la alejas con la sílaba negativa, con la positiva, la atraes.
- ¿A = O para las sílabas?, n = m, j = x. LIoneel Meeesi, CeLIa (su madre. Los Leones = FC BarCELona = brillo para Messi. ¿No pudo ser capo en su selección hasta que murió Maradona?).
- Entrevista: usar tus sonidos positivos para responder.
####psi herm Cris Argentina crisis causa psíquica.txt  ##Curiosidad: político (quiere ser rico...) no es política.
- La crisis es un síntoma de algo anterior "psicológico":
* Mito pasado entre generaciones de que había una ciudad de plata, pero los españoles no la encontraban (y los locales te mataban). En Argentina (argentum = plata), al dinero se le dice plata, asociado pues a no encontrarlo y además morir.
* Se puede cambiar el nombre del país, o el apelativo de "plata", ¿y el mito?
##España sufre desde la Constitución (Cádiz), ¿y si pasamos de tener Constitución?
####psi herm Cris figura Jesús y San Issa budista.txt  - Pasé por la fase del "Jesús budista", y ahora hay otras teorías supersólidas que me convencen más.
- Grupos
* Celote = es lote (paio lotero).
* Nazarenos (amor y paz): llevan "zar".
* Fariseos (aliados de los romanos). ¡Ay la p y la f! Por el año cero, los romanos, creo que "eran bere" / buenos por así decirlo.
- ¿Poner la otra mejilla es budista? ¿No era de Alejandro Magno, que reveló secretos a los iudas?
* Y los libros no dicen nada de los años perdidos (2 a 30).
####psi herm Cris frases de Evangelios.txt  - "Ama al prójimo como a ti mismo". El amor viene de la coherencia (necesaria para hacer el bien; una psique poco limpia / coherente, es "buena intención y malas obras").
- El que esté libre de pecado, que tire la primera piedra. Hipocresía: exiges algo que no te autoexiges (o que te autoexiges y no es humano, como "trabajar como una mula"). Escorpio es el menos hipócrita de todo el Zodiaco (piensa en términos morales, intuitivos...). Escorpio + Tauro = signo completo.
- Lo que enferma al hombre es lo que sale por la boca, no lo que entra (bien, tan contra el psicopatín de Pasteur je je). Las creencias y represiones en general te hacen menos exitoso...
- Para ser el primero (el mejor), sé el último (modesto).
####Ildad = cualidad de muerte. Ume sí, es alma o similar, algo positivo.
####psi herm Cris no Revolución sí Evolución.txt  Revolución (motor...): se vuelve al mismo punto. Los cambios que perduran son los de psique, y no somos más al final que una suma de psiques. Y debe gobernar alguien capaz de resolver sus problemas de psique:
- Ser + coherente a través de desreprimir... te aisla del "mal social".
* ¿Escraches psicológicos (eres infeliz por tales traumas...) al ignorante poderoso?
####psi herm Cris trabajo oficial.txt  - El trabajo (Biblia) es un castigo por desobedecer a Dios (nos dio frutos silvestres, pero queríamos más... Ser héroes, estar en la enfermiza ciudad...). Robot (rbt = trb) = esclavo:
* El trabajo no dignifica, embrutece (y muchos trabajos podrían diseñarse para todos, no sólo para fuertotes que se parten la espalda). Mucha oficina puede generar mucho sufrimiento (y suicidios).
* Llegar lejos es propio de esta sociedad de locos y psicópatas (buscan imagen).
- Desea (algo diferente, puede ser) sin decir "es que me falta"... Eso ya vendrá.
* Veo mal por mis fallos psíquicos (procastinar en sentido amplio...), ¿prisa por empezar algo o el mundo desaparece?
####psi hermetismo Cristian amor energía y sexualidad para producir.txt  - Amor: la coherencia es el amor más difícil de generar. Implica trabajo psicológico.
- Energía:
* Con un solo polo (masculino o femenino, igualdad) hay estancamiento / disharmonía con tus deseos.
* En pareja, no jerárquica (entre padres e hijos, sí, pero las élites están complicando que eso se dé, y así vamos).
- Sexualidad (la genitalidad es sólo parte de ella, y es su expresión 3D):
* Formas de sexualidad: goce sexual (querer tapar el problema psicológico) y usar el problema para desear mejorar psicológicamente.
####psi hermetismo Cristian argumentos válidos y creencias.txt  - La argumentación de creencias (sea o no sabia) es parte de la clave para conseguir cosas. Un ejemplo: tomo uranio porque me da salud:
* Cambiar la psique es difícil (el 9x de las creencias, ni las sabemos, están como represiones, y con las conscientes, se tiende a economizar, a lo fácil, y eso es negativo; luego están los traumas, causantes de los problemas de salud).
* ¿Qué me da salud realmente? ¿Me engañaron mis padres ("tienes que subir en el escalafón") y me duele admitirlo? Es importante el compromiso (hacer sin ganas y sin que te guste el tema), si no, te quedas en "niño".
####psi hermetismo Cristian crianza consciente.txt  - ¿Escoger el influyente nombre justo tras saber que se ha fecundado (para que el alma sepa ya la vida que va a vivir)?
* ¿Significado similar de nombres para los hermanos, o mismo mito? Para que se lleven bien.
- ¿A partir de los 8 años, enseñarle Psicología al niño para diferenciarse positivamente de la familia?
- Etapas desarrollo:
* 3, 4 años. Se toca placenteramente, y hay que decir un "no" seco, sin creencias (si te tocas acabas ciego...), para evitar un futuro "sádico".
* 4, 5, 6 años, registro simbólico. Que mamá y papá (poli necesario) no se contradigan (y a más coherencia, + autoridad). Y la culpa y la deuda generarán dependencia (no autonomía).
- Más:
* Que el niño "use la tablet" (que los inconscientes no le marginen) y se ría je je de los que no la usan responsablemente. Creo que las tablets suelen marear a los inteligentes (alarmas físicas).
* Los castigos tienen un lugar importante.
* Cuanta + coherencia transmitamos, + autoridad tendremos.
####psi hermetismo Cristian el 2024 desde Argentina.txt  ¿Saqueos en Argentina? La estrategia Escorpio está bien clara: identificas a los más competidores... y van 9 por cada uno, a destruir a ese alma en pena, ese pobre creído que necesita validación externa.
* Los malos suelen ser no esencialistas (demasiado detalle, imagen, placer no asociado a objetivo elevado, miedo a quedarse con los fantasmas de la psique...).
####psi hermetismo Cristian el cristo iniciático psicológico.txt  - Es posible que la persona real de hace unos 2.000 años (si existió) fuese verdaderamente decepcionante (para desilusionar a la gente y hacerla más afín "a lo paio"). A ver qué dice Cristian:
* Jesús no tenía derecho al trono, pero sí derecho de reclamación al trono, ¿de Israel? ¿Para liberar del yugo romano?
* Como mandan matar a todos los niños menores de 2 años, se huye a Egipto, donde Jesús aprende mucho (misterios...). Viajes a la India... Lo de poner la otra mejilla tiene que ver quizás con que si te encuentras con mala gente, la mayor parte de las veces es para que mires en ti.
* Una vez "muerto", podía desligarse "del clan" (mejorar).
####psi hermetismo Cristian el enamoramiento.txt  psi hermetismo Cristian el enamoramiento:
##¿Febrero es el mes de las corazonadas?
##Al grano:
- Amor + miento: es una ilusión de amor (sólo te sientes bien), y tiene que dar paso al amor.
* De niños pequeños (antes de los 8 ) necesitamos que el otro nos mire bien (nos presten atención), imitarlo, para formar nuestra personalidad (esto es lo que hay que sanar de adulto, malas creencias...). De adulto, esto debe frenar.
* Enamoramiento: tú abres expectativas para que en el futuro se te preste más atención. Para enamorarte, ¿pones en esa persona lo bueno tuyo? Para que se convierta en amor verdadero, debes conocer de verdad al otro, convirtiéndolo en "el prójimo". Al final, esa persona podría expresar tu parte reprimida, lo cual es muy útil para tu mejora REAL.
####psi hermetismo Cristian el mito Crístico.txt  ¿Primero el mito, basado en realidad, y luego una persona?:
- El religioso es el ungido / elegido (no elige), ¿sale de adoptar Roma el Cristiansmo en forma católica en el siglo IV?
* Nota: "cr" significa "car" (monjes CARmelitas...) en el lenguaje de las élites (película "Cars"... Cosas satánicas vamos).
* Los Dioses Griegos surgieron de adulterar la His-Troia (paios y bere). Troyes: Francia, no Grecia (hay pruebas).
* Toda fiesta del Sol es satánica.
* Trimegisto (3 veces nacido) es el Dios BE: Iezus, Álex...
* Buda es hijo de la cosmonauta / xúride bere María, ¿Margot?
* HérCUles es malvado por así decirlo (representa a un paio, y Euristeo, su patrón, al psicópata de TEO II).
- Más:
* ¿En los puntos de sacrificio se ponía una cruz (quizás roja) no (tapando así que se sacrificaba, tapando la Historia)?
* Hubo un trato para dejar de sacrificar en Europa (y así nace el Catolicismo; el precio a pagar, es "apagar lo bere"). Sacrificaban los paios (judíos rebeldes fuera de "Tierra Santa"...).
####psi hermetismo Cristian enamoramiento y espejo de Narciso.txt  psi hermetismo Cristian enamoramiento (las expectativas en el otro hablan de tu parte negativa (incluye miedo a pasar hambre...), y si no se cumplen, te ves incompleto, y eso duele a la gente poco elevada. ¡Si tu amor es un espejo que habla de ti, no te relacionas!):
- De niños no nos vemos completos (nos vemos por partes: personalidad "psicótica", ¿todo racionalizado o nada?)... hasta que usamos un espejo, que nos da una imagen superficial de nosotros.
* Luego viene la mirada del otro. Hasta los 7 años, copiamos para ser reconocidos, y de paso, conseguir una personalidad que pulir (misión de vida).
- Más:
* Hay que vincularse por valores, y para limpiar la psique (misión). Para Escorpio, se aconseja Tauro, por ser compatible, pero no muy parecido.
####psi hermetismo Cristian estrés y ansiedad.txt  Las cosas necesitan tiempo, respeta las fases (y tu jefe, también). Y yo, enfermizamente esperando a que desaparezca la gente que no arregla las cosas internas; mejor simplemente decir "hablar de narcisistas abriría las puertas a una sociedad mejor, sería un respiro": 
- Solución: función paterna (prioridades, límites, planificar... para el orden; o te pones límites, o lo hará la vida, y será dura).
##El "Reino de los Cielos" es lo simbólico (la psique...).
- El demonio nos va a tentar con cuestiones materiales (hay un Venus "bajo"). Dios matará con el tiempo (y menos mal) todo aquello nuevo que intentes sin cambiar la psique profundamente.
####psi hermetismo Cristian falacias sobre amor libertad felicidad y ahorrar.txt  - Amor: que si el otro es tu padre...
* Esto es importante, no importa repetirlo. ¿En muchas uniones (la mayoría pongamos) el otro expresa lo que tú no quieres reconocer de ti?
- Libertad: de peques nos programan, y reaccionamos de una forma no deseada, y no somos realmente "nuestro alma".
- La felicidad no se busca, es el aquí y ahora. No se necesita disfrutar, pero sí no necesitar (puede haber mucho dolor aceptado, pero no sufrimiento). Tienes que estar bien por dentro, porque tu psique te persigue a todas partes: un yate...
* Ser buena persona es cuestión de pasar a vivir de tu palacio a un "cuchitril", y casi no notar diferencia (lo principal es algo de harmonía decorativa; lo que digan los demás al ver "mi desastre de habitación del Todo a Cien Centavos" no me debería importar). ¿Me gustan / gustaban los espacios llenos y compresivos por añorar el útero?
- Ahorrar tiene que ver con cambiar la psique para conseguir más cosas ("guardar" para comprarse algo podría usarse en vez de "ahorrar"). Yo no quiero deudas (préstamos que pagar; los judíos saben bien de esto, y creo que están acertados):
* Acaparar es una acción penada por el Universo, si lo haces por pensar negativamente (si ahora gasto un euro, es un euro que se pierde; sería mejor pensar "todo fluye, euro que se va, euro que vuelve a mi monedero"; cree en tu capacidadproductiva, también). De cualquier forma, acaparar habla mal de tu psique, muchas veces engorda... Se dice que si pides un maná se te dará, pero con 2, se te castigará.
####psi hermetismo Cristian frustración y depresión desconectarnos del futuro NO Rutina con objetivos NO sentido vida.txt  - Frustración (algunas veces tiene solución psíquica, ¿te chocas una y otra vez con la misma pared?): puede llevar a un complejo de inferioridad (¿junto con la inseguridad o pueden hacerlo por separado?). Y también a la depresión (imagínate que te exigen y exigen...).
* Solución: escribir, elegir muy bien los contactos.
* Algunas personas necesitarán sentirse útiles / valiosas. Yo prefiero aprender (lleva tiempo y experiencias dolorosas) a pasar de lo no constructivo que dice el otro y quererme, encajando bien el rechazo (es fácil si te rechaza un cerrado), el abandono (piensa: antes era fuerte, y vendrá alguien mejor o más apropiado, y fuerzas sobrenaturales "me protegen"...
##NO victimizarse, o convencer a alguien de tu inocencia, esperar algo de los demás...
##La sola lucha del bien contra el mal (denunciar narcis, aprendiendo de los malos ejemplos para no repetirlos...), ya puede hacerte salir de la depresión.
####psi hermetismo Cristian funciones materna y paterna.txt  - Lo paterno es cortar la permisividad materna (e impedir que el complejo de Edipo sea bestial):
* Mamá es cariño, relación... Lo materno genera deuda (yo te di la vida y...).
* Papá es prohibición, incentivación, y autoprotección (que viene de los 2 anteriores). Lo paterno genera culpa, ¿porque tomamos a la pareja de papá?
* Son cadenas (culpa y deuda) para no salir de la zona de confort (estás a punto de ser el primero de la familia que saca una carrera, y algo te frena, por ejemplo, superar al padre). La batalla interna es nuestra gran empresa, y ser "buen hijo PARA ELLOS" te deja donde estabas.
- Más:
* ¿Ejercemos la función paterna de la misma forma que fue ejercida sobre nuestro padre?
* Mamá quiere que la completemos masculinamente si somos hombres.
####psi hermetismo Cristian gimnasia mental para la consciencia.txt  - Autoobservación. Quítate la barba de ZZtop, las gafas de Sol... y mira lo que eres de verdad (si consigues lo que quieres... Si eres dañino sin más, la vida te castigará. Expresa tus sentimientos para no vengarte).
- NO sólo pensar en ser diferente, escribirlo, para incorporarlo bien, ya que dedicas tiempo exclusivo.
- Escribiendo. Dónde encuentras dificultades / resistencias del "yo", fuerzas... Plan de acción ante tus emociones negativas.
- Agradecer quién soy, lo que quiero, lo que tengo, con quién estoy. Para recibir.
- Tener TU OBJETIVO en tu mente (visualizar, para no perderte).
- Respiración diafragmática (media), por lo general. Para energía, pecho (alta). Relax, baja y lenta.
* Al respirar profundamente, se relajan los mecanismos de represión.
- Dependencias de la aprobación del otro... Quitarlas poco a poco, ¿en fases avanzadas?
####psi hermetismo Cristian ideologia de género.txt  - Crítica: cultura del trabajo = yo meto 14 horas al día, soy mejor que tú, soy respetable, la gente buena necesita lo que produzco (mentira, la gente buena / sabia / avanzada, puede casi "vivir del aire"; la ropa limpia 100% y planchada, la llevamos por tener miedo al qué dirán, ¿empezó un psicópata criticando al modesto?).
- Sí, una rana cocinada "por las élites" a fuego lento (desde el frío hasta el calor extremo) no se entera (lo malo va poco).
- Más (igualdad de oportunidades, no convertir a la mujer en una víctima, el Estado pretende enfermarla):
* Autopercibirte como no eres (un gato...) es no aceptarte. Entiende primero el problema en la cabeza, y luego ya haz lo que quieras. ¿La causa es un problema con el padre o la madre, o la autodesvalorización?
* Lo que se normaliza no es la libertad, es el tapar los traumas a través de "me encanta llenarme todo el cuerpo de tatuajes...".
* Violencia: aprovecharse de una posición ventajosa (hombre usando pistola ante delincuente desarmado, mujer narcisista / descalificadora...).
####psi hermetismo Cristian igualdad sexual.txt  La violencia es no querer ver al otro como es (o incluso aceptarlo): somos diferentes (y nuestra Carta Astral nos dice dónde encajamos). También, verse a uno mejor de lo que es. Ser una mejor versión de nosotros tiene que ver con pasarse horas en soldedad y disfrutarla.
####psi hermetismo Cristian iniciáticocracia psicomorallibrecracia.txt  - Los nómadas me suelen gustar, como los pueblecitos, donde el narcisista es detectado.
* El bien común del político es el político, que quiere gente dependiente (estancada, esperando). Una Escuela basada en la automejora de psique, es la única solución oficial.
* Si el de arriba (que estaría para el "doy fé" y poco más) necesita esclavos, es un pobre diablo infeliz envidioso, débil mental.
##Yo: no me gustan mucho las entrevistas de trabajo (lo sabio es conocer a alguien, que haya confianza; este sistema no permite eso), tampoco los cursos...
####psi hermetismo Cristian no llamar niño sino infante cambia las reglas a peor.txt  - Infante es "el que NO habla", controlable, (¿oscuras intenciones políticas para cambiar "Día del Niño" por "Día de las Infancias", y acabar todos hablando menos?:
* Algo que quieren las élites es que, tras imponer el machismo visible (¿empezó en el siglo 19?) ellas sean ahora los verdugos (y tampoco es eso).
* Lo bere / "nórdico" (equilibrio masculino / femenimo, y que llegó desde el planeta Baleden) dio paso a lo paio (más años aquí todavía) hace más de 5.000 años (exceso de jerarquía / control). Los negros llevan como 300.000 años en la Tierra. Acabando con la controladora "Educación" oficial, ya podemos optar a tener una mente mínimamente esencialista / no materialista o superficial en general / no prologros o protriunfo.
- ¿Es "peor" una persona que es muy crítica y sagaz con su interior profundo y que vive con otros (como siempre se hizo, la "manada") que una que se ha casado, tiene hijos, y no es esencialista? Hay gente muy avanzada o importante, que no ha venido a tener hijos (el mejorante o no matrimonio, depende de tu bondad, no es necesario para algunas personas).
* Respecto a los materialistas, pueden engañarse (sobrevalorarse), para así conseguir dinero. Lo peor, materialista, y poco crítica con el interior.
####psi hermetismo Cristian nos autoengañamos.txt  - Las leyes son convenciones (o imposiciones), buenas o no. Son resultado de una figura de poder (los clanistas suelen ser terribles):
* La escuela nos hace aspergers (obreros de la memoria y la atención escuchando o viendo, lejos de pensar exclusivamente ayudados de la intuición, que es lo que te hace civilizado).
* Como lo diferente no lo solemos aceptar, acabamos en lo convencional, auqnue sea aberrante (que los niños vean cantantes semidesnudas; está la ducha diaria, que mata la piel...).
* ¿Cuál es la cara de la persona "perfecta"? NO sonríe todo el tiempo quizás, tiene algo de sofisticada...
####psi hermetismo Cristian origen del sufrimiento.txt  - El dolor y el sufrimiento (deseo de que lo malo pare...) es estar con pesados, con gente poco equilibrada ("venga, hoy vamos a ver to los cuadros del museo Hermitage")... Aparte de por supuesto, lo que dice Cristian: algo se va repitiendo en varios escenarios de la vida.
- De niños, dependemos de la aprobación de los demás (los demás "nos dan la personalidad" hasta los 7 / 8 años). De adultos, la mirada del otro nos sigue condicionando (reacciones no deseadas, cosas que "limpiar" en la psique). Entonces, el otro es un espejo para ver tu "maldad", ¡no te "drogues" para dar buena cara!
* ¿Y si te irrita que los otros sean inconscientes? ¿NO sería un primer paso hacia ser bueno? Cuando una persona se vuelve muy sabia, ve "el mal por todas partes" (es fácil), pero NO reacciona negativamente mucho (es difícil).
* En vez de tener expectativas sociales (castillo de naipes que puede derrumbarse), mejor generar acuerdos... tras conocer la situación.
####psi hermetismo Cristian padres de algodón hijos psicópatas.txt  También es muy importante que tus hijos no sean tu escaparate (hacerlos triunfar: escuela... por lo general, es maltratarlos; que sean ellos mismos aunque causen una tremenda vergüenza ajena al inconsciente; tus hijos no son tú; las mejores almas suelen tener trabas de peques: torpeza...):
- Los límites transmiten un sentimiento de seguridad. ¿Y también te guían en los gustos (música con ciertas restricciones, buscando calidad)?
* Mi padre es sobreprotector, pero ponía límites (consumíamos con mesura; había cachetes si nos pasábamos, aunque habría preferido prohibiciones con explicaciones...). Mi madre me consideraba su escaparate.
- A partir de cierta edad, hay que dejar que los niños lloren sin satisfacerlos (tenerlo en brazos, darle la comida a la boca...), para hacerlos fuertes (que el niño gestione su emoción, y tú, puedes animar). ¿Repetida frustración por perder al fútbol? Somos diferentes. Las mejores personas suelen ser malos futbolistas.
* Niños con poca tolerancia a la frustración, son "psicópatas" de adulto. Los jóvenes creen que el mundo es suyo. Un pasota esconde mucha inferioridad.
##Tenemos que limar debilidades, para ir a una sociedad esencialista / realista, de "revuelvo en la basura, y me aguanto las náuseas" y trabajar poco (si eres superinteligente / genial / femenino pensando, a las 4 horas tas cansao).
####psi hermetismo Cristian para qué te pasa lo malo.txt  No decir "¿por qué me tiene que pasar a mí?". Yo tengo como pruebas el rechazo, el abandono...:
- ¿Para ser más fuerte, comprensivo, amarme más, atraer gente buena...?
- ¿El "qué he hecho yo para merecer esto" se da tras situaciones repetitivas que se acumulan?
- Podemos cambiar la frustración por la autoevaluación (qué tengo que aprender de esto...). Enojo (no aceptamos cómo somos) + frustración, pueden dar ira (caballo desbocado). Escribe lo que te pasa.
####psi hermetismo Cristian presi Argentina.txt  Fino, profundo, esencialista, ¡y con autocrítica (no para las obras, las causas son sutiles) y autoprohibición!:
- Partido de la Reciprocidad suena un poco a deuda (tú me ayudaste, y te ayudo por obligación aunque no se dé el momento; el mejor "trueque" es el "diferido": ayudas cuando se dé el momento, a alguien que podría ser totalmente diferente a quien te ayudó).
* ¿Cómo se llama PERFECTAMENTE al hecho de que otro diferente mejore lo que tú le presentaste, "incrementalismo"?
* En España, las vacaciones y los findes se dan porque el trabajo es esclavo. Trabajar poco todos los días y luego poder pensar, es mejor.
* Mito de Edipo, Horda Primitiva... se ajustan a los gobiernos argentinos recientes.
####psi hermetismo Cristian psiquismos irrecuperables.txt  Mi mala vista podría depender de lo que me importe lo no constructivo que digan los demás de mí, ¿soy irrecuperable al mejorar tan lentamente mi vista?:
- Sano: topes o frenos morales, de comer je je (gula: "tragas" para no verte dentro)... El psicópata sí podría tener frenos de comer (quiere verse bien en Carnaval...).
* ¿Tiene topes quien pone a cualquier familiar por encima del resto de la gente (lo mira con buenos ojos, aunque sea psicópata)?
* Luego tenemos a gente (menos grave su problema en principio) que no ama la vida "en este momento" (escapa), que necesita comprar, beber (¿muchos sabios fuman?), el móvil, validación externa...
- Irrecuperables: políticos que te mienten mirándote a los ojos y otros psicópatas, drogas duras o mucho beber (acaba con "el hardware")...
####psi hermetismo Cristian qué pasa en Argentina Agosto 2023 y pasará en el mundo.txt  psi hermetismo Cristian qué pasa en Argentina Agosto 2023 y pasará en el mundo:
- Desde el 2020 el paradigma político (reglas para los de abajo sólo), el religioso (ausente), el económico (usarnos y descartarnos después), el científico (la OMS contradiciéndose continuamente)... mostrándose.
* De 2.018 a 2.023, 2 líneas de tiempo (¿gente que quiere mutar interiormente y línea "muerta"? 2.024: la segunda línea muere.
* Tras las votaciones, la gente está harta de cinismo (giro en las votaciones). ¿El discurso de 2.024 es el de la sinceridad? Sinceridad es ver qué "cosa negra" en ti te hace infeliz por así decirlo.
##No decirles a los niños que lo bueno es llegar alto y tener cosas... sino responsabilizarnos (ahora como menos; la comida viene de fuera, y si cortan el grifo...).
####psi hermetismo Cristian relación y rol que actúo.txt  - ¿Qué rol actúo? Víctima: insatisfacción, tengo o no tengo, lo que el otro da no alcanza. Salvador: satisfacer, convencer, sé o no sé, creo o no creo. Verdugo: posición dominante, el otro lo hace peor que yo, puedo o no puedo (o el otro puede o no puede).
* El otro: ley de hielo o se enoja contigo... Soportarlo es clave. Si lo soporto, el otro podría decir (trampa de la dulzura): quiero que seas el de antes, te lavaron el cerebro, te daré lo que nunca te dieron si vuelves a ser como antes. Si lo soportas, el otro se verá obligado a "subir de nivel", porque no soporta la diferencia, y ya ha gastao los cartuchos.
- Más:
* Fijar un objetivo común no violable (sobrevivir en relativa paz...).
* ¿Qué nos gusta del otro (aliado elegido, con el que podríamos mejorar interiormente) para copiar?
####psi hermetismo Cristian roles masculino y femenino sorpréndete.txt  - Un hombre puede ejercer un rol femenino, pero con 2 ejerciendo de hombre o 2 de mujer, no circula la energía. Eso sí, ¿la mujer tiene que aprender a recibir y administrar, y el hombre a conseguir y proteger?
- La mujer puede dedicarse a revisar la instalación eléctrica, y el hombre a contemplar (siendo pasivo):
* Pero hay cosas femeninas que todo hombre completo creo que debería tener (me parece más peligroso en general perder la femineidad que la masculinidad). ¿Qué pasa si estos grupos tan completos como Spandau Ballet o Duran Duran no te hacen moverte algo femeninamente y a la vez con algo de masculinidad? ¿Es tu mundo artístico cerrado? ¿Por qué, tienes miedo de que no te vean hombre?
####psi hermetismo cristian salir de ciclo de violencia.txt  - Si el otro no se da cuenta "de que está jodiendo" (habladores compulsivos, gente que es rápida hablando, cuando leer es siempre a tu ritmo y más rápido incluso...), eso es grave, y podría generar violencia en gente pro-moral, que da gran importancia a la inteligencia emocional.
- Violencia:
* Padres hacia ti: hagas lo que hagas no alcanza (o no dejar al niño tomar el más mínimo riesgo).
* Manipulación, tipo narcisista / psicópata integrado.
* Sin competir (somos diferentes, uno está pa una cosa, otro para otra...), hay menos violencia.
* La víctima justifica a veces que está bien recibir el daño que recibe, el verdugo justifica...
- Más:
* ¿Escribes lo que te pasa? ¿Qué pensamientos personales censuras?
* ¿Y si hago gestos de loco más a menudo (o arte bailando...) para dar salida a la ira (o amor y comprensión profunda, creatividad...)?
* Hay gente violenta conmigo: gente que quiere que me drogue o tenga placer externo, que hace y hace y si te ve sin hacer, se molesta. Gente que piensa en el "buenas notas", seguido del cásate, ten hijos y un trabajo con jefe.
####psi hermetismo Cristian sangre en Argentina si no se ve lo de la Profecía del hombre gris.txt  ¿Parravicini?:
- ¿Mi-ley es "mi propio camino" (no adaptarse necesariamente a la sociedad y diferenciarse positivamente de la familia)?
* ¿Miley debe decidir encarnar "el hombre de gris"? ¿Su propio camino? ¿Algo neutro, por el pueblo, no por uno? Miley ha crecido, y se ha estancado (pruebas de psique). Pero la energía está con Miley. ¿Entonces VOX es también bueno? Mmmm.
##Hombre gris: viene el terror del oso que fingió amor y hermandad. Viene el demócrata humilde, que no lo fue nunca y viene con él la pobreza. ¿Massa? Al final, ganó Miley, que es una incógnita.
##Los siglos 19 y 20 (de Tierra) son lo peor de lo peor (gente creyéndoselo todo, y aceptando reglas). Mucho mejor un Rey que promasones.
####psi hermetismo Cristian soledad y abandono.txt  - Nuestro mundo material depende de lo que sentimos, y pensamos que es sólo al revés. Una gestión emocional es necesaria, y posible, ¿cambiar creencias es absolutamente necesario, puesto que éstas influyen mucho en nuestras emociones (y recuerda que lo simbólico / mental, origina tus emociones)? ¿Sentir de más positivamente (inmaduras almas jóvenes) te hace más exitoso?:
* A partir de los 8 años, podemos ya "ser malos hijos" (diferenciarnos positivamente). Tus padres no son tú, no importa si ellos quedan mal, aprende a soportarlo.
* Origen de gran parte de las pruebas de adulto: tu madre te regaña de niño (puedes verlo como abandono / no ser amado, y se graba en ti, y la escena se repetirá una y otra vez de adulto) sin haber sido tú inmoral. Que el otro te dé lo que no te dieron, es lo que esperas. Lo importante es no necesitar validación externa. Hacer cosas (para mendigar reconocimiento, amor... esperando con dolor) no va a cambiar nuestra emoción: hemos entrado en un laberinto, y se sale por donde entramos, por el origen psicológico.
* ¿Qué es lo que realmente quieres? Excarvando en el interior, lo sabrás. Esperar a que el otro te diga cómo tienes que ser, es algo muy cómodo.
##El sistema de trabajo oficial, expulsa a la gente inteligente. La gente normalucha, está hipnotizada como los zombis de Haití, para aguantar más, despojados de su inteligencia integral. El "productor" no es quien sabe "el sentido de las cosas", ni siquiera qué producir.
##Ser civilizado podría necesitar que sepas las "reglas universales" (creer es crear...).
####psi hermetismo Cristian sonidos primales propios y el éxito.txt  - Citas algo y contiene alguna sílaba (2 máximo) "DE ATRACCIÓN": puedes atraer ese algo. ¡También hay como mucho 2 sílabas de repulsión! ¿llamar con apodos si el otro contiene sílabas que en ti son de repulsión?
* Hallando las sílabas. Coge un papel: columna izquierda: cosas (gente, calles, empleos...) que te hayan salido bien; columna derecha, ya te imaginas. Mira las sílabas que más se repiten. ¿"Be" (positivo) y "pa" je je?
####psi hermetismo Cristian supersalud conéctate con personas que complementen tus habilidades y fortalezas.txt  
####psi hermetismo Cristian tomar control de tu vida según los griegos.txt  Los griegos eran monstruos (salvo los minoicos) que copiaron de los egipcios bere por así decirlo, y destruyeron la Is-Troia (Historia), camuflándola en mitos como el de Atenea (Las Grayas, las Gorgonas y Geríón, por ejemplo, son los bere, una sociedad bonita, no [paia | antifemenina | griega]). Partícula "arque":
* Arquero: poner el foco en algo, de forma que "hasta ciego" das en el blanco, y en el camino, creces.
* Arquitecto: construir, ¿la psique, cambiándola?
* Arquetipo: cosas de la psique en general: formas de ser (eres "una Atenea"), tus creencias pasadas de niño... ¿En qué cuento (con salvadores, víctimas y verdugos) estás?
####psi hermetismo Cristian tu nombre y lo que encierra.txt  - Teníamos el sistema Rhen, con sonidos que suponían una barrera para tí (ejemplo, si una sílaba "barrera" para ti era "pa", los verbos... con "pa", podrían sustituirse por otros, para "conseguirlo").
- Cristian iniciaba con ganas, pero lo abandonaba. Zeballos (se va yo). Papá de Cristian lo abandonó a los 6 meses, ¡se fue! Cristian pensó en ser como el padre, para ser reconocido, y que el padre volviese.
* ¿La idea es "ser mal hijo", diferente a los padres.
##¿El ascendente Tauro hace que alargues lo que dices, siendo menos soportable por los "resumidores"?
