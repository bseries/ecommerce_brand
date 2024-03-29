<?php
/**
 * eCommerce Brand
 *
 * Copyright (c) 2014 David Persson - All rights reserved.
 * Copyright (c) 2016 Atelier Disko - All rights reserved.
 *
 * Use of this source code is governed by a BSD-style
 * license that can be found in the LICENSE file.
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