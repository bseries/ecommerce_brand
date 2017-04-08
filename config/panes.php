<?php
/**
 * eCommerce Brand
 *
 * Copyright (c) 2014 Atelier Disko - All rights reserved.
 *
 * Licensed under the AD General Software License v1.
 *
 * This software is proprietary and confidential. Redistribution
 * not permitted. Unless required by applicable law or agreed to
 * in writing, software distributed on an "AS IS" BASIS, WITHOUT-
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *
 * You should have received a copy of the AD General Software
 * License. If not, see https://atelierdisko.de/licenses.
 */

use base_core\extensions\cms\Panes;
use lithium\g11n\Message;

extract(Message::aliases());

Panes::register('ecommerce.brands', [
	'title' => $t('Brands', ['scope' => 'ecommerce_brand']),
	'url' => ['controller' => 'brands', 'action' => 'index', 'library' => 'ecommerce_brand', 'admin' => true],
	'weight' => 12
]);

?>