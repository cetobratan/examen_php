<?php 


print_r(getProductos(1));


funtion getProductos($id)
{

if ($id == 1):
	return [
				
                 'nombre' => 'Zapatillas',
                 'precio' => 200.00,
                 'stock' => 2

];


       endif;

if ($id== 2):
	return [
				'nombre' => 'Zapatillas',
				'precio' =>  200.00,
				'stock' => 2
			


];

endif;

if ($id == 3) :
	return [
				'nombre' => 'Polo',
				'precio' => 80.00,
				'stock' => 10,



];
	
endif;	




}

$id = $_GET['id'];

print_r(getProductos($id));

funtion getProductos($id)
{


	
if ($id == 1):
	return [
				
                 'nombre' => 'Zapatillas',
                 'precio' => 200.00,
                 'stock' => 2

];


       endif;

if ($id== 2):
	return [
				'nombre' => 'Zapatillas',
				'precio' =>  200.00,
				'stock' => 2
			


];

endif;

if ($id == 3) :
	return [
				'nombre' => 'Polo',
				'precio' => 80.00,
				'stock' => 10,



];
	
endif;	










}

$id = $_GET['id'];

print_r(getProductos($id));

funtion getProductos($id)

{
	
if ($id == 1):
	return [
				
                 'nombre' => 'Zapatillas',
                 'precio' => 200.00,
                 'stock' => 2

];


       endif;

if ($id== 2):
	return [
				'nombre' => 'Zapatillas',
				'precio' =>  200.00,
				'stock' => 2
			


];

endif;

if ($id == 3) :
	return [
				'nombre' => 'Polo',
				'precio' => 80.00,
				'stock' => 10,



];
	
endif;	







}

?>