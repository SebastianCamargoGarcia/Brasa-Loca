<?php
session_start();
$varsesion = $_SESSION['Nombre'];
if($varsesion == null || $varsesion = ""){
   header("Location:../Formulario/Login.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../Css//WebBrasa/WebBrasa.css">
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Brasa Loca</a>
    </div>
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"></a>
      </div>
      <!--Boton-->
      <div class="boton-modal">

        <label for="btn-modal">
          <img src="../../Imagenes/WebPedidos/Sin-título-2.png">
        </label>

      </div>
      <!--Boton-->
    </div>
  </nav>
  <!--Ventana Modal-->
  <input type="checkbox" id="btn-modal">
  <div class="container-modal">
    <div class="content-modal">



      <h2>¡La Comelona!</h2>
      <p> 
  <?php
  echo $_SESSION['Nombre'] . " || " . $_SESSION['Direccion'] . " || " . $_SESSION['Telefono']
  ?>
      </p>
      <p>  
      <table>
  <tr>
    <th>Producto</th>
    <th>Cantidad</th>
    <th>Precio</th>
  </tr>

  <tr>
    <td>Combo hamburguesa Clásica</td>
    <td>
    <?php
if (isset($_POST['Añadir'])){
  $Cantidadp1 = $_POST['cantidad1'];
  echo $Cantidadp1 ;
}
?>

    </td>
    <td>
    $13.000 pesos

    </td>
  </tr>
  <tr>
    <td>Combo hamburguesa Doble</td>
    <td>
    <?php
if (isset($_POST['Añadir'])){
  $Cantidadp2 = $_POST['cantidad2'];
  echo $Cantidadp2 ;
}
?>
    </td>
    <td>
    $18.000 pesos
    </td>
  </tr>
  <tr>
    <td>Combo perro caliente</td>
    <td>
    <?php
if (isset($_POST['Añadir'])){
  $Cantidadp3 = $_POST['cantidad3'];
  echo $Cantidadp3 ;
}
?>
    </td>
    <td>$10.000 pesos</td>
  </tr>
  <tr>
    <td>Porción de pizza</td>
    <td>
    <?php
if (isset($_POST['Añadir'])){
  $Cantidadp4 = $_POST['cantidad4'];
  echo $Cantidadp4 ;
}
?>
    </td>
    <td>$8.000 pesos</td>
  </tr>
  <tr>
    <td>Malteada</td>
    <td>
    <?php
if (isset($_POST['Añadir'])){
  $Cantidadp5 = $_POST['cantidad5'];
  echo $Cantidadp5 ;
}
?>
    </td>
    <td>$8.000 pesos</td>
  </tr>
  <tr>
    <td>Gaseosa</td>
    <td>
    <?php
if (isset($_POST['Añadir'])){
  $Cantidadp6 = $_POST['cantidad6'];
  echo $Cantidadp6 ;
}
?>
    </td>
    <td>$3.000 pesos</td>
  </tr>
</table>

<h3>Total
<?php
if (isset($_POST['Añadir'])){
  $Total_Neto = ($_POST['cantidad1'] * 13000) +
  $Total_Neto = ($_POST['cantidad2'] * 18000) +
  $Total_Neto = ($_POST['cantidad3'] * 10000) +
  $Total_Neto = ($_POST['cantidad4'] * 8000) +
  $Total_Neto = ($_POST['cantidad5'] * 8000) +
  $Total_Neto = ($_POST['cantidad6'] * 3000) ;
  echo $Total_Neto ;
}
?>
</h3>

      </p>

      <div class="btn-cerrar">
       <a href="../Sesion/Cerrar_Sesion.php" class=Pag> Pagar</a>
      </div>

    </div>
    <label for="btn-modal" class="cerrar-modal"></label>
  </div>

  
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      
      <div class="carousel-inner">
        <div class="item active">
          <img src="../../Imagenes/WebPedidos/slides_Hamburguesa.jpg">
        </div>

        <div class="item">
          <img src="../../Imagenes/WebPedidos/slides_Hamburguesa_2.png">
        </div>
      </div>

      
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br><br>
  <br><br>
  <br><br>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
  <div id="Carrito" class="bg-1">
    <div class="container">
      <div class="row text-center">

        
      <div class="col-sm-4">
          <div class="thumbnail">
          <img src="../../Imagenes/WebPedidos/Combo_Hamburguesa_clasica.png">
              <p><strong>Combo hamburguesa Clásica </strong></p>
              <p>(Incluye papas y gaseosa)</p>
              <p>$13.000 Pesos</p>
              <input name="cantidad1" type="number" value="0" min="0"> 
          </div>
        </div>
 

        
        <div class="col-sm-4">
          <div class="thumbnail">
          <img src="../../Imagenes/WebPedidos/Combo_Hamburguesa_Doble.png">
              <p><strong>Combo hamburguesa Doble</strong></p>
              <p>(Incluye papas y gaseosa)</p>
              <p>$18.000 Pesos</p>
              <input name="cantidad2" type="number" value="0" min="0"> 
          </div>
        </div>
        


         
        <div class="col-sm-4">
          <div class="thumbnail">
          <img src="../../Imagenes/WebPedidos/Perro_Caliente.png">
              <p><strong>Combo perro caliente</strong></p>
              <p>(Incluye papas y gaseosa)</p>
              <p>$10.000 pesos</p>
              <input name="cantidad3" type="number"  value="0" min="0"> 
          </div>
        </div>
 
  

        <div class="col-sm-4">
          <div class="thumbnail">
          <img src="../../Imagenes/WebPedidos/Porcion_Pizza.png">
              <p><strong>Porción de pizza</strong></p>
              <p>$8.000 pesos</p>
              <p><input name="cantidad4" type="number" value="0" min="0"></p>
              <p><select name="" >
                <option value="Seleccion"> Seleccionar...</option>
                <option value="1"> Jamón</option>
                <option value="1"> Hawaiana</option>
                <option value="1"> Pepperoni</option>
              </select>
            </p>
          </div>
        </div>
 
  

        <div class="col-sm-4">
          <div class="thumbnail">
          <img src="../../Imagenes/WebPedidos/Malteada.png">
              <p><strong>Malteada</strong></p>
              <p>$8.000 pesos</p>
              <p><input name="cantidad5" type="number" value="0" min="0"></p>
              <p><select name="" >
              <option value="Seleccion"> Seleccionar...</option>
                <option value="1"> Vainilla</option>
                <option value="1"> Chocolate</option>
                <option value="1"> Fresa</option>
              </select>
</p>
          </div>
        </div>

  
<form> 
        <div class="col-sm-4">
          <div class="thumbnail">
          <img src="../../Imagenes/WebPedidos/Gaseosa.png">
              <p><strong>Gaseosa</strong></p>
              <p>$3.000 pesos</p>
              <p><input name="cantidad6" type="number" value="0" min="0"></p>
              <p><select>
              <option value="Seleccion"> Seleccionar...</option>
                <option value="Coca-Cola"> Coca-Cola</option>
                <option value="Manzana"> Manzana</option>
                <option value="Sprite">Sprite</option>
              </select>
</p>
          </div>
        </div>
</form> 
        <input type="submit" value="Añadir"class="btn" name="Añadir">
      </div>
    </div>
</div>
</div>

</form>
</body>

<?php
if (isset($_POST['Añadir'])){
  $Cantidadp1 = $_POST['cantidad1'];
  $Cantidadp2 = $_POST['cantidad2'];
  $Cantidadp3 = $_POST['cantidad3'];
  $Cantidadp4 = $_POST['cantidad4'];
  $Cantidadp5 = $_POST['cantidad5'];
  $Cantidadp6 = $_POST['cantidad6'];
}
?>














</html>