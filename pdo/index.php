<?php
   $dsn = 'mysql:host=sql1.njit.edu;dbname=ab936';
   $username = 'ab936';
   $password = 'Debolina2024';

   try{
      $db = new PDO($dsn,$username,$password);
      echo 'We have successfully connected to DB!!';
   }
   catch(PDOException $e)
   {
      echo $e;
   }

   $query = 'select * from products_guitar1;';
   $statement = $db->prepare($query);
   $statement->execute();
   $products = $statement->fetchAll();

?>
<table id = 'display'>
   <tr>
      <td>pruductCode</td>
      <td>productName</td>
      <td>listPrice</td>
   </tr>
   <?php
   foreach($products as $product){
   ?>
      <tr>
         <td><?php echo $product['productCode'];?></td>
         <td><?php echo $product['productName'];?></td>
         <td><?php echo $product['listPrice'];?></td>
      </tr>
    <?php
    }
    ?>
</table>
