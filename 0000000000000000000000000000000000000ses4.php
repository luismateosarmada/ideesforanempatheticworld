<?php
 //ses4.php Probando con datos de sesión en .PHP
 // Ejemplo:
 // 1111 ----
 // 2111 ----
 // 3111 ----
 // 4111 ----
 // 5111 ----
 // 6111 +---
 // 7611 +*--
 // 8671 -**-
 // 9676 ****
 // Correcto
 // Otro:
 // 1234 ----
 // 5678 -**-
 // 9679 ****
 // Correcto
 
 // Nivel: 1
 // 1234 ++*
 // 5524 +*
 // 6789 +
 // 6677 ++
 // 2164 ***
 // 1111
 // 2364 ****
 // Correcto
 
 // Nivel: 2
 // 1234 +++
 // 5678 +
 // 5577
 // 6688 ++
 // 2266 ++
 // 1144 ++
 // 8123 **+
 // 1111
 // 8324 *+++
 // 3322 *++
 // 8423 **++
 // 8243 *+++
 // 8432 ++++
 // 4823 ****
 // Correcto

 session_start();
 if (!isset ($_SESSION["numero1"]) )
 {  
  $_SESSION["numero1"] = rand(1,9);
  $_SESSION["numero2"] = rand(1,9);
  $_SESSION["numero3"] = rand(1,9);
  $_SESSION["numero4"] = rand(1,9);
  $_SESSION["numintentos"] = 0;
  $_SESSION["intentos"] = array();
  $intento1 = $_POST["intento1"];
  $intento2 = $_POST["intento2"];
  $intento3 = $_POST["intento3"];
  $intento4 = $_POST["intento4"];
  $ristra = $_POST["ristra"];
  array_push($_SESSION["intentos"], $intento1, $intento2, $intento3, $intento4, $ristra);
  header("Location: ".$_SERVER["PHP_SELF"]);
  exit();
 }
 else
 if ( (!isset ($_SESSION["nivel"])) &&
      (!isset ($_GET["nivel"])) ) 
  elegir();
  else
  {
   // PARA UNA CIFRA.
   // Si hay número (combobox), ya tenemos un nuevo miembro     // del array de intentos. Entonces, vemos si es correcto.    // Si lo es, mensaje de enhorabuena. Si NO correcto,         // ponemos un combobox (9 cifras) y un OK.   

   if (isset ($_GET["nivel"]))
    $_SESSION["nivel"] = $_GET["nivel"];
   $nivel = $_SESSION["nivel"];
   echo("Instrucciones: encontrar número de 4 cifras. Nivel 0 (fácil): * si el número está, y en su posición, + si NO la guarda, y - si NO está. En el modo difícil (2), NO se habla de posiciones, sólo te dicen cuantos números hay (en su posición y NO). En el nivel medio (1), NO hay -, lo cual acaba con las posiciones absolutas. Puede que tengas 2 +, y realmente sólo una cifra.<BR>");
   echo("Nivel: ".$nivel."<BR>"); 

   $correcto = 0;
   
   if (isset ($_GET["elnumero1"]))
   {
    // Poner los intentos que ya estén en el array
    for ($i = 0; $i < $_SESSION["numintentos"]; $i++)
    {
     echo ($_SESSION["intentos"]["intento1"][$i]);
     echo ($_SESSION["intentos"]["intento2"][$i]);
     echo ($_SESSION["intentos"]["intento3"][$i]);
     echo ($_SESSION["intentos"]["intento4"][$i]);
     echo (" ".$_SESSION["intentos"]["ristra"][$i]."<BR>");
    }  
    // Pasar el intento nuevo al array de intentos.
    $aux = $_SESSION["numintentos"];
    $_SESSION["numintentos"]++;
    if (isset ($_GET["elnumero1"]))
    $_SESSION["intentos"]["intento1"][$aux] = $_GET["elnumero1"];
    $_SESSION["intentos"]["intento2"][$aux] = $_GET["elnumero2"];
    $_SESSION["intentos"]["intento3"][$aux] = $_GET["elnumero3"];
    $_SESSION["intentos"]["intento4"][$aux] = $_GET["elnumero4"];    

    $ristra="";
    $puntos1 = 0;
    $puntos2 = 0;
    $puntos3 = 0;
    $puntos4 = 0;
    $cuentaencajes = 0;
    $cuentasemiencajes = 0;
    $correcto1 = 0;
    $correcto2 = 0;
    $correcto3 = 0;
    $correcto4 = 0;
    if ($_GET["elnumero1"] == $_SESSION["numero1"])
     {$correcto1 = 1; $cuentaencajes++;}
    if ($_GET["elnumero2"] == $_SESSION["numero2"])
     {$correcto2 = 1; $cuentaencajes++;}
    if ($_GET["elnumero3"] == $_SESSION["numero3"])
     {$correcto3 = 1; $cuentaencajes++;}
    if ($_GET["elnumero4"] == $_SESSION["numero4"])
     {$correcto4 = 1; $cuentaencajes++;}
    if ($correcto1 == 1)
     $puntos1 = 2;
      else
      {
       if (
            ( ($_GET["elnumero1"] == $_SESSION["numero2"])               && ($correcto2 != 1) ) ||
            ( ($_GET["elnumero1"] == $_SESSION["numero3"])               && ($correcto3 != 1) ) ||
            ( ($_GET["elnumero1"] == $_SESSION["numero4"])               && ($correcto4 != 1) )
          )
        {$puntos1 = 1; $cuentasemiencajes++;}
      }
    if ($correcto2 == 1)
     $puntos2 = 2;
      else
      {
       if (
            ( ($_GET["elnumero2"] == $_SESSION["numero1"])               && ($correcto1 != 1) ) ||
            ( ($_GET["elnumero2"] == $_SESSION["numero3"])               && ($correcto3 != 1) ) ||
            ( ($_GET["elnumero2"] == $_SESSION["numero4"])               && ($correcto4 != 1) )
          )
        {$puntos2 = 1; $cuentasemiencajes++;}
      }
    if ($correcto3 == 1)
     $puntos3 = 2;
      else
      {
       if (
            ( ($_GET["elnumero3"] == $_SESSION["numero1"])               && ($correcto1 != 1) ) ||
            ( ($_GET["elnumero3"] == $_SESSION["numero2"])               && ($correcto2 != 1) ) ||
            ( ($_GET["elnumero3"] == $_SESSION["numero4"])               && ($correcto4 != 1) )
          )
        {$puntos3 = 1; $cuentasemiencajes++;}
      }
    if ($correcto4 == 1)
     $puntos4 = 2;
      else
      {
       if (
            ( ($_GET["elnumero4"] == $_SESSION["numero1"])               && ($correcto1 != 1) ) ||
            ( ($_GET["elnumero4"] == $_SESSION["numero2"])               && ($correcto2 != 1) ) ||
            ( ($_GET["elnumero4"] == $_SESSION["numero3"])               && ($correcto3 != 1) )
          )
        {$puntos4 = 1; $cuentasemiencajes++;}
      }

    if ($nivel <= 1)
    {
     if ($puntos1 == 2) $ristra = $ristra."*";
     else if ($puntos1 == 1) $ristra = $ristra."+";
     else if ($nivel == 0) $ristra = $ristra."-";
     if ($puntos2 == 2) $ristra = $ristra."*";
     else if ($puntos2 == 1) $ristra = $ristra."+";
     else if ($nivel == 0) $ristra = $ristra."-";
     if ($puntos3 == 2) $ristra = $ristra."*";
     else if ($puntos3 == 1) $ristra = $ristra."+";
     else if ($nivel == 0) $ristra = $ristra."-";
     if ($puntos4 == 2) $ristra = $ristra."*";
     else if ($puntos4 == 1) $ristra = $ristra."+";
     else if ($nivel == 0) $ristra = $ristra."-"; 
    }
    else
    {
     for ($i = 0; $i < $cuentaencajes; $i++)
      $ristra = $ristra."*";
     for ($i = 0; $i < $cuentasemiencajes; $i++)
      $ristra = $ristra."+";
    }

    $_SESSION["intentos"]["ristra"][$aux] = $ristra;
    // Poner el intento nuevo
    echo($_GET["elnumero1"].$_GET["elnumero2"].$_GET["elnumero3"].$_GET["elnumero4"]." ".$ristra."<BR>");

   if ( ($correcto1 == 1) && ($correcto2 == 1) &&
        ($correcto3 == 1) && ($correcto4 == 1) )
    $correcto = 1; 
  }
   
   if ($correcto == 1)
   {
    echo("Correcto");
    session_destroy();
   }
     else
      datos();
  }

function elegir()
{
 global $PHP_SELF;
  ?>
 <FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
 <INPUT TYPE=hidden NAME="nivel" VALUE="0">
 <INPUT TYPE=submit VALUE="Nivel fácil">
 </FORM>

 <FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
 <INPUT TYPE=hidden NAME="nivel" VALUE="1">
 <INPUT TYPE=submit VALUE="Nivel medio">
 </FORM>

 <FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
 <INPUT TYPE=hidden NAME="nivel" VALUE="2">
 <INPUT TYPE=submit VALUE="Nivel difícil">
 </FORM>
<?php
}

function datos()
 {
  global $PHP_SELF;
  ?>
  <FORM ACTION="<?php echo $PHP_SELF; ?>" METHOD=GET>
  
  <select NAME="elnumero1">
   <option VALUE="1">1</option>
   <option VALUE="2">2</option>
   <option VALUE="3">3</option>
   <option VALUE="4">4</option>
   <option VALUE="5">5</option>
   <option VALUE="6">6</option>
   <option VALUE="7">7</option>
   <option VALUE="8">8</option>
   <option VALUE="9">9</option>
  </select>

  <select NAME="elnumero2">
   <option VALUE="1">1</option>
   <option VALUE="2">2</option>
   <option VALUE="3">3</option>
   <option VALUE="4">4</option>
   <option VALUE="5">5</option>
   <option VALUE="6">6</option>
   <option VALUE="7">7</option>
   <option VALUE="8">8</option>
   <option VALUE="9">9</option>
  </select>

  <select NAME="elnumero3">
   <option VALUE="1">1</option>
   <option VALUE="2">2</option>
   <option VALUE="3">3</option>
   <option VALUE="4">4</option>
   <option VALUE="5">5</option>
   <option VALUE="6">6</option>
   <option VALUE="7">7</option>
   <option VALUE="8">8</option>
   <option VALUE="9">9</option>
  </select>

  <select NAME="elnumero4">
   <option VALUE="1">1</option>
   <option VALUE="2">2</option>
   <option VALUE="3">3</option>
   <option VALUE="4">4</option>
   <option VALUE="5">5</option>
   <option VALUE="6">6</option>
   <option VALUE="7">7</option>
   <option VALUE="8">8</option>
   <option VALUE="9">9</option>
  </select>

  <INPUT TYPE=submit VALUE="OK">

  </FORM>
<?php
 }

?>


