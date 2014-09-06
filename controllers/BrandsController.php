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

namespace ecommerce_brand\controllers;

use ecommerce_brand\models\Brands;

class BannersController extends \base_core\controllers\BaseController {

	use \base_core\controllers\AdminAddTrait;
	use \base_core\controllers\AdminEditTrait;
	use \base_core\controllers\AdminDeleteTrait;

	public function admin_index() {
		$data = Brands::find('all', [
			'order' => ['name' => 'DESC']
		]);
		return compact('data');
	}
}

?>