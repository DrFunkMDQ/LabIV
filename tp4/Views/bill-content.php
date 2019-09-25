<?php 
     namespace Models;
     namespace Repositories;
     include 'header.php';
     include 'footer.php';
     include '../Config/verify-session.php';
     

     require_once("../Config/Autoload.php");
     use Models\Client as Client;
     use \Datetime;
     
     if($_POST['date'] && $_POST['bill-type'] && $_POST['bill-number']){
         if(!isset($_POST['date']) && isset($_POST['bill-type']) && isset($_POST['bill-number'])){
          ?><script type="text/javascript">
          alert("Fecha incorrecta o Factura existente");
          location="index.php";
          </script><?php
         }
          $now = new DateTime();
          $now = date_format($now, "Y-m-d");
          $user_date = $_POST['date'];
          if ($user_date >= $now){
               ?><script type="text/javascript">
               alert("Fecha incorrecta o Factura existente");
               location="add-bill.php";
               </script><?php 
          }
          
     }
 
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Detalles de Factura</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Precio</th>
                         <th>Cantidad</th> 
                         <th>Sub-total</th>
                    </thead>
                    <tbody>
                    <?php 
                         $data = json_decode(file_get_contents('../Repositories/json-test.json'));
                         //var_dump($data);
                         $total = 0;
                         foreach($data as $item){
                              //var_dump($item);
                              echo "<tr>";
                              $qty = 0; $price = 0;
                              foreach($item as $key=>$value){
                                   echo "<td>";
                                   echo($value);
                                   if($key == "price")
                                        $price = $value;
                                   if($key == "qty")
                                        $qty = $value;
                                   echo"</td>";                              
                              }
                              echo "<td>";
                              echo $subtotal = $qty * $price;
                              echo "</td>";                              
                         }
                         $total = $total + $subtotal;
                    ?>
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               <form action="" method="" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="">TOTAL</label>
                         <input type="text" value="<?php echo $total;?>" class="form-control ml-3" disabled>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
               </form>
          </div>
     </section>

</main>

