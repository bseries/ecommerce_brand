<?php
/**
 * eCommerce Brand
 *
 * Copyright (c) 2014 Atelier Disko - All rights reserved.
 *
 * This software is proprietary and confidential. Redistribution
 * not permitted. Unless required by applicable law or agreed to
 * in writing, software distributed on an "AS IS" BASIS, WITHOUT-
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 */

use lithium\net\http\Router;

$persist = ['persist' => ['admin', 'controller']];

Router::connect('/admin/ecommerce/brands/{:id:[0-9]+}', [
	'controller' => 'brands', 'library' => 'ecommerce_brand', 'action' => 'view', 'admin' => true
], $persist);
Router::connect('/admin/ecommerce/brands/{:action}', [
	'controller' => 'brands', 'library' => 'ecommerce_brand', 'admin' => true
], $persist);
Router::connect('/admin/ecommerce/brands/{:action}/{:id:[0-9]+}', [
	'controller' => 'brands', 'library' => 'ecommerce_brand', 'admin' => true
], $persist);

?>