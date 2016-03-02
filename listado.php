<?php 

session_start();


$_id = $_GET['id'];

if(isset($_SESSION['carrito']))
{
    if(isset($_SESSION['carrito'][md5($_id)])){
        
        $_SESSION['carrito'][md5($_id)]['stock']+=1;
    }else{
       $_SESSION['carrito'][md5($_id)]= getProductos($_id); 
    }
    
   
}else{
 $_SESSION['carrito'][md5($_id)]= getProductos($_id);   
}



echo "<pre>";

print_r ($_SESSION);



function getProductos($id)
{
    if($id == 1)
    {
        return[
                'id'     => 1,
                'nombre' => 'polo',
                'precio' => 25.00,
                'stock'  => 25
              ];
     }
    
      if($id==2)
      {
        return[
                'id'     => 2,
                'nombre' => 'Iphone',
                'precio' => 300.00,
                'stock'  => 50
              ];
      }
    
       if($id==3)
      {
        return[
                'id'     => 3,
                'nombre' => 'Casaca',
                'precio' => 80.00,
                'stock'  => 10
              ];
      }    
    return FALSE;
    
    
}

 ?>
