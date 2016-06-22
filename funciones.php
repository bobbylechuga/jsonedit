<?php
  function leerDirectorio() {
    $directorio = opendir("img");
    $cont = 0;
    while ($archivo = readdir($directorio))  {
        if ($archivo == "." || $archivo == "..") {

        }else{
          $cont++;
          $dirArray[] = array ("ID" => $cont, "Imagen" => utf8_encode($archivo), "Desc" => "");
        }

    }
    $jsonArray = json_encode($dirArray);
    return $jsonArray;
  }
  function guardarJson() {
    $json = leerDirectorio();
    //print_r($json);
    $fp = fopen("alexis100.json", 'w');
    fwrite($fp, $json);
    fclose($fp);
  }
  //guardarJson();
?>
