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

namespace ecommerce_brand\models;

use ecommerce_core\models\ProductGroups;

class Brands extends \base_core\models\Base {

	protected $_meta = [
		'source' => 'ecommerce_brands'
	];

	public $belongsTo = [
		'LogoMedia' => [
			'to' => 'base_media\models\Media',
			'key' => 'logo_media_id'
		]
	];

	protected $_actsAs = [
		'base_core\extensions\data\behavior\Sluggable',
		'base_media\extensions\data\behavior\Coupler' => [
			'bindings' => [
				'logo' => [
					'type' => 'direct',
					'to' => 'logo_media_id'
				],
				'media' => [
					'type' => 'joined',
					'to' => 'base_media\models\MediaAttachments'
				]
			]
		],
		'base_core\extensions\data\behavior\Timestamp',
		'base_core\extensions\data\behavior\Searchable' => [
			'fields' => [
				'name'
			]
		]
	];

	public function productGroups($entity, array $query = []) {
		return ProductGroups::find('all', [
			'conditions' => [
				'ecommerce_brand_id' => $entity->id
			] + (isset($query['conditions']) ? $query['conditions'] : [])
		] + $query);
	}
}

?>