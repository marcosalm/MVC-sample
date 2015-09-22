<?php
/**
 * Created by PhpStorm.
 * User: marcos.almeida-pit
 * Date: 22/09/2015
 * Time: 10:53
 */
	define('SITE_PATH',realpath(dirname(__FILE__)).'/');

	/**
	 * EDITAR BASE_REQUEST, caso usar framework on root url "http://dominio/" deixar vazio ('BASE_REQUEST',''),
	 * se usar algum caminho interno atualizar url de request:
	 * EX: "http://dominio/path/site" usar ('BASE_REQUEST', '/path/site/')
	*/
	define('BASE_REQUEST', '/mvc/');

	/*Require necessary files.*/
	require_once(SITE_PATH.'application/request.php');
	require_once(SITE_PATH.'application/router.php');
	require_once(SITE_PATH.'application/baseController.php');
	require_once(SITE_PATH.'application/baseModel.php');
	require_once(SITE_PATH.'application/load.php');
	require_once(SITE_PATH.'application/registry.php');
	require_once(SITE_PATH.'controllers/errorController.php');



	try{
		Router::route(new Request(BASE_REQUEST));
	}catch(Exception $e){
		$controller = new errorController;
		$controller->error($e->getMessage());
	}
