<?php
	return array(
		"test_iceberg/auth/create" => 'auth/createForm',
		"test_iceberg/auth/register" => 'auth/register',
		"test_iceberg/auth/loginForm" => 'auth/loginForm',
		"test_iceberg/auth/login" => 'auth/login',
		"test_iceberg/auth/logout" => 'auth/logout',
		
		
		"test_iceberg/item/create" => 'item/create',
		"test_iceberg/item/store" => 'item/store',
		"test_iceberg/item/edit/([0-9]+)" => 'item/edit/$1',
		"test_iceberg/item/update/([0-9]+)" => 'item/update/$1',
		"test_iceberg/item/destroy/([0-9]+)" => 'item/destroy/$1',
		"test_iceberg/item/index" => 'item/index',
		
		"test_iceberg" => 'home/index',
	);
?>