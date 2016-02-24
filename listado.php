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

























?>