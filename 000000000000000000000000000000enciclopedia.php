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
####AÑADIDOS:
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
