<?php
use Controllers\AuthController;
use Controllers\ContactController;
use Core\Router;

session_start();

require_once 'core/Router.php';
require_once 'core/View.php';
require_once 'models/Contact.php';
require_once 'models/Manager.php';
require_once 'config/env.php';
require_once 'config/database.php';
require_once 'controller/ContactController.php';
require_once 'controller/AuthController.php';

Router::add('GET','/contact-app-manager/login',AuthController::class,'setLogin');
Router::add('GET','/contact-app-manager/register',AuthController::class,'setRegister');
Router::add('POST','/contact-app-manager/login',AuthController::class,'login');
Router::add('POST','/contact-app-manager/register',AuthController::class,'register');
Router::add('GET','/contact-app-manager/logout',AuthController::class,'logout');

Router::add('GET','/',ContactController::class,'read');
Router::add('GET','/contact-app-manager',ContactController::class,'read');
Router::add('GET','/contact-app-manager',ContactController::class,'read');
Router::add('GET','/contact-app-manager/([0-9a-zA-Z]*)',ContactController::class,'read');
Router::add('POST','/contact-app-manager/create',ContactController::class,'create');
Router::add('POST','/contact-app-manager/delete',ContactController::class,'delete');
Router::add('POST','/contact-app-manager/update',ContactController::class,'update');

Router::run();