<?php

namespace Eduframe\Resources;

use Eduframe\Resource;
use Eduframe\Resources\Credits\Definition;
use Eduframe\Traits\FindAll;
use Eduframe\Traits\FindOne;

/**
 * @property integer id
 */
class Course extends Resource {

	use FindAll, FindOne;

	/**
	 * @var array
	 */
	protected $fillable = [
		'id',
		'slug',
		'name',
		'position',
		'meta_title',
		'meta_description',
		'code',
		'duration',
		'starting_price',
		'signup_url',
		'slug_history',
		'avatar_url',
		'avatar_thumb_url',
		'avatar',
		'category_id',
		'level',
		'result',
		'updated_at',
		'created_at',
		'course_tab_contents',
		'credit_definitions',
		'labels'
	];

	/**
	 * @var string
	 */
	protected $model_name = 'Course';

	/**
	 * @var string
	 */
	protected $endpoint = 'courses';

	/**
	 * @var string
	 */
	protected $namespace = 'course';

	/**
	 * @var array
	 */
	protected $multipleNestedEntities = [
		'course_tab_contents' => [
			'entity' => CourseTabContent::class,
			'type'   => self::NESTING_TYPE_NESTED_OBJECTS,
		],
		'credit_definitions' => [
			'entity' => Definition::class,
			'type'   => self::NESTING_TYPE_NESTED_OBJECTS,
		],
		'labels' => [
			'entity' => Label::class,
			'type'   => self::NESTING_TYPE_NESTED_OBJECTS,
		],
	];
}
