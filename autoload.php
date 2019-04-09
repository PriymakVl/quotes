<?php

function autoload_core ($class_name) 
{
	switch($class_name) {
		case 'Model': return require './core/Model.php';
		case 'Route': return require './core/Route.php';
		case 'View': return require './core/View.php';
		case 'Controller': return require './core/Controller.php';
		case 'Core': return require './core/Core.php';
		case 'Message': return require './core/Message.php';
		case 'GlobalArray': return require './core/GlobalArray.php';
	}
}

function autoload_core_trait ($class_name) 
{
	switch($class_name) {
		case 'DB': return require './core/traits/DB.php';
		case 'ModelStatic': return require './core/traits/ModelStatic.php';
		case 'Param': return require './core/traits/Param.php';
	}
}

function autoload_controller($class_name)
{
	if (strpos($class_name, 'Controller_Base') !== false) require './controllers/controller_base.php';
}

function autoload_class($class_name)
{
	$module_name = false;
	if (strpos($class_name, 'Quote') !== false) $module_name = 'quote';
	if (strpos($class_name, 'Category') !== false) $module_name = 'category';
	if (!$module_name) return;
	if (file_exists('./modules/'.$module_name.'/classes/'.$class_name.'.php')) require './modules/'.$module_name.'/classes/'.$class_name.'.php';
	else require './modules/'.$module_name.'/traits/'.$class_name.'.php';
}

function autoload_model($class_name)
{
	switch($class_name) {
		case 'Favorite': return require './models/Favorite.php';
	}
}

function autoload_helper($class_name)
{
	switch($class_name) {
		case 'ObjectHelper': return require './helpers/ObjectHelper.php';
		case 'ArrayHelper': return require './helpers/ArrayHelper.php';
		case 'Date': return require './helpers/Date.php';
		case 'Excel': return require './helpers/Excel.php';
	}
}

spl_autoload_register('autoload_core', true);
spl_autoload_register('autoload_core_trait', true);
spl_autoload_register('autoload_controller', true);
spl_autoload_register('autoload_class', true);
spl_autoload_register('autoload_model', true);
spl_autoload_register('autoload_helper', true);

