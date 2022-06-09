<?php

// zorra  revisa porfa y me dices que se puede mejorar, jajaja

//setear las variables con los valores iniiales 

$valor = '';
$desde = '';
$hasta = '';

//crear las operaciones desde, a una unidad por defecto (metro)

//Declaracion de la funcion 1 (DESDE) a metros como unidad por defecto
function convertir_desde($valor, $desde){

    if (isset($_POST['convertir'])) {
        switch ($_POST['desde']) {
            case 'Milimetros':
                return $valor/1000;
                break;
            case 'Centimetros':
                return $valor/100;
                break;
             case 'Decimetros':
                return $valor/10;
                break;
             case 'Metros':
                return $valor*1;
                break;
             case 'Decametros':
                return $valor*10;
                break;
            case 'Hectometros':
                return $valor*100;
                break;
            case 'Kilometros':
                return $valor*1000;
                break;
           
            default:

                echo "Conversion no soportada";

                break;
        } 
    }
};

//Declaracion de la funcion 2 (HASTA) a metros como funcion po defecto 
function convertir_hasta($resultado_1, $hasta){

    if (isset($resultado_1)) {
        switch ($_POST['hasta']) {
             case 'Milimetros':
                 return $resultado_1*1000;
                 break;
             case 'Centimetros':
                 return $resultado_1*100;
                 break;
              case 'Decimetros':
                 return $resultado_1*10;
                 break;
              case 'Metros':
                 return $resultado_1*1;
                 break;
              case 'Decametros':
                 return $resultado_1/10;
                 break;
             case 'Hectometros':
                 return $resultado_1/100;
                 break;
             case 'Kilometros':
                 return $resultado_1/1000;
                 break;
            
             default:
 
                 echo "Conversion no soportada";
 
                 break;
         } 
     };
 };

if (isset($_POST['valor']) && isset($_POST['desde']) && isset($_POST['hasta'])) {
    $valor = $_POST['valor'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];

};

//Resultado de la funcion 1
$resultado_1 = convertir_desde($valor, $desde);

//Resultado de la funcion 2
$resultado_2 = convertir_hasta($resultado_1, $hasta);
 
//echo $resultado_2;
?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Conversor de Longitud</title>
  </head>
  <body>
    <h1 class="text-center">Conversor de Longitud</h1>

    <div class="container">
        <form  method = "POST" action="<?php $_SERVER['PHP_SELF'];?>"> 
            <div class= "row mt-4">

                <div class="col-sm-4">
                    <div class="mb-3">
                        <label for="valor" class="form-label">VALOR:</label>
                        <input placeholder = "Ingrese el valor a convertir" type="number" class="form-control" name = "valor"  value = "<?php if (isset($_POST['valor'])) {
                            echo $_POST['valor'];
                        }?>">                
                    </div>
                </div>
           
                <div class="col-sm-4">
                    <label for="desde" class= "form-label">DESDE</label>
                    <select class="form-select" name = "desde" >    
                        <option value="">--Selecciona un valor--</option> 

                        <option value="Milimetros" <?php if (isset($_POST['desde']) && $_POST['desde'] == "Milimetros") {
                            echo 'selected'; }?>>Milimetros</option>

                        <option value="Centimetros" <?php if (isset($_POST['desde']) && $_POST['desde'] == "Centimetros") {
                            echo 'selected'; }?>>Centimetros</option>

                        <option value="Decimetros" <?php if (isset($_POST['desde']) && $_POST['desde'] == "Decimetros") {
                            echo 'selected'; }?>>Decimetros</option>

                        <option value="Metros" <?php if (isset($_POST['desde']) && $_POST['desde'] == "Metros") {
                            echo 'selected'; }?>>Metros</option>

                        <option value="Decametros" <?php if (isset($_POST['desde']) && $_POST['desde'] == "Decametros") {
                            echo 'selected'; }?>>Decametros</option>

                        <option value="Hectometros" <?php if (isset($_POST['desde']) && $_POST['desde'] == "Hectometros") {
                            echo 'selected'; }?>>Hectometros</option>

                        <option value="Kilometros" <?php if (isset($_POST['desde']) && $_POST['desde'] == "Kilometros") {
                            echo 'selected'; }?>>Kilometros</option>
                    </select>
                </div>

                <div class="col-sm-4">
                    <label for="hasta" class= "form-label">HASTA</label>
                    <select class="form-select" name = "hasta">
                        
                        <option value="">--Selecciona un valor--</option> 

                        <option value="Milimetros" <?php if (isset($_POST['hasta']) && $_POST['hasta'] == "Milimetros") {
                            echo 'selected'; }?>>Milimetros</option>

                        <option value="Centimetros" <?php if (isset($_POST['hasta']) && $_POST['hasta'] == "Centimetros") {
                            echo 'selected'; }?>>Centimetros</option>

                        <option value="Decimetros" <?php if (isset($_POST['hasta']) && $_POST['hasta'] == "Decimetros") {
                            echo 'selected'; }?>>Decimetros</option>

                        <option value="Metros" <?php if (isset($_POST['hasta']) && $_POST['hasta'] == "Metros") {
                            echo 'selected'; }?>>Metros</option>

                        <option value="Decametros" <?php if (isset($_POST['hasta']) && $_POST['hasta'] == "Decametros") {
                            echo 'selected'; }?>>Decametros</option>

                        <option value="Hectometros" <?php if (isset($_POST['hasta']) && $_POST['hasta'] == "Hectometros") {
                            echo 'selected'; }?>>Hectometros</option>

                        <option value="Kilometros" <?php if (isset($_POST['hasta']) && $_POST['hasta'] == "Kilometros") {
                            echo 'selected'; }?>>Kilometros</option>
                    </select>              
                </div>
           
            </div>  

                    <div class="row mt-4">
                        <div class="col-sm-4">
                             <button type="submit" class="btn btn-primary w-100 py-4" name= "convertir">CONVERTIR</button>
                        </div>
                
                            <div class="col-sm-7">
                                 <div class="mb-1" >
                                    <label for="resultado" class="form-label"><b>RESULTADO:<b></label>
                                    <input  type="text" class="form-control" name = "resultado" value="<?php 
                                        if (isset($resultado_1)) {
                                            echo "Es: " . $resultado_2 ."  ". $hasta;
                                        } ?>">                
                                </div>
                            </div> 
                    </div>
                      <div class="row mt-4">
                        <div class="col-sm-4">
                         <a href="index.php" class="btn btn-primary w-100 py-4"> <b>NUEVA CONVERSION</b></a>
                      </div>            
                    </div> 

        </form>     
    </div>
    
  </body>
</html>
