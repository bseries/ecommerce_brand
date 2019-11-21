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

namespace ecommerce_brand\models;

use ecommerce_core\models\ProductGroups;

class Brands extends \base_core\models\Base {

	protected $_meta = [
		'source' => 'ecommerce_brands'
	];

	public $belongsTo = [
		'CoverMedia' => [
			'to' => 'base_media\models\Media',
			'key' => 'cover_media_id'
		]
	];

	protected $_actsAs = [
		'base_core\extensions\data\behavior\Sluggable',
		'base_media\extensions\data\behavior\Coupler' => [
			'bindings' => [
				'cover' => [
					'type' => 'direct',
					'to' => 'cover_media_id'
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
