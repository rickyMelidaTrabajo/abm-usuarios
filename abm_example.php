<?php
	require_once('usuarios_model.php');

	#Traer los datos del usuario
	$usuario1 = new Usuario();
	$usuario1->get('user@email.com');
	print $usuario->nombre . ' ' . $usuario1->apellido . ' existe<br>';

	#Crear un nuevo usuario
	$new_user_data = array(
		'nombre'=>'Anahi',
		'apellido'=>'Encina',
		'email'=>'anahiencina96@gmail.com',
		'clave'=>'anaenci'
	);

	$usuario2 = new Usuario();
	$usuario2->set($new_user_data);
	$usuario2->get($new_user_data['email']);
	print $usuario2->nombre . ' ' . $usuario2->apellido . ' ha sido creado <br>';

	#Editar los datos de un usuario existente
	$edit_user_data = array(
		'nombre'=>'Ricardo',
		'apellido'=>'Melida',
		'email'=>'ricardomelida92@gmail.com',
		'clave'=>'12345'
	);
	$usuario3 = new Usuario();
	$usuario3->edit($edit_user_data);
	$usuario->get($edit_user_data['email']);
	print $usuario3->nombre . ' ' . $usuario3->apellido . ' ha sido editado<br>';

	#Eliminar el usurio
	$usuario4 = new Usuario();
	$usuario4->get('lei@gmail.com');
	$usuario4->delete('lei@gmail.com');
	print $usuario4->nombre . ' ' . $usuario->apellido . ' ha sido eliminado';
?>
