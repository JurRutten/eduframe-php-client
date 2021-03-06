<?php

namespace Eduframe;

use Eduframe\Resources\Address;
use Eduframe\Resources\Course;
use Eduframe\Resources\Category;
use Eduframe\Resources\Location;
use Eduframe\Resources\Customer;
use Eduframe\Resources\CustomerEnrollment;
use Eduframe\Resources\Enrollment;
use Eduframe\Resources\Label;
use Eduframe\Resources\Meeting;
use Eduframe\Resources\PlannedCourse;
use Eduframe\Resources\Teacher;
use Eduframe\Resources\User;
use Eduframe\Resources\PaymentMethod;
use Eduframe\Resources\PaymentOption;
use Eduframe\Resources\SignupQuestion;
use Eduframe\Resources\Referral;

/**
 * Class Eduframe
 * @package Eduframe
 */
class Client {
	/**
	 * The HTTP connection
	 * @var \Eduframe\Connection
	 */
	protected $connection;

	/**
	 * Eduframe constructor.
	 * @param \Eduframe\Connection $connection
	 */
	public function __construct( $connection ) {
		$this->connection = $connection;
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\Address
	 */
	public function addresses( $attributes = [] ) {
		return new Address( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\Category
	 */
	public function categories( $attributes = [] ) {
		return new Category( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\Course
	 */
	public function courses( $attributes = [] ) {
		return new Course( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 *
	 * @return \Eduframe\Resources\Location
	 */
	public function course_locations( $attributes = [] ) {
		return new Location( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\Customer
	 */
	public function customers( $attributes = [] ) {
		return new Customer( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\CustomerEnrollment
	 */
	public function customer_enrollments( $attributes = [] ) {
		return new CustomerEnrollment( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\Enrollment
	 */
	public function enrollments( $attributes = [] ) {
		return new Enrollment( $this->connection, $attributes );
	}

    /**
     * @param array $attributes
     * @return \Eduframe\Resources\Label
     */
    public function labels( $attributes = [] ) {
        return new Label( $this->connection, $attributes );
    }

    /**
	 * @param array $attributes
	 * @return \Eduframe\Resources\Meeting
	 */
	public function meetings( $attributes = [] ) {
		return new Meeting( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\PlannedCourse
	 */
	public function planned_courses( $attributes = [] ) {
		return new PlannedCourse( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\Teacher
	 */
	public function teachers( $attributes = [] ) {
		return new Teacher( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\User
	 */
	public function users( $attributes = [] ) {
		return new User( $this->connection, $attributes );
	}

    /**
	 * @param array $attributes
	 * @return \Eduframe\Resources\PaymentMethod
	 */
	public function payment_methods( $attributes = [] ) {
		return new PaymentMethod( $this->connection, $attributes );
    }
    
    /**
	 * @param array $attributes
	 * @return \Eduframe\Resources\PaymentOption
	 */
	public function payment_options( $attributes = [] ) {
		return new PaymentOption( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\SignupQuestion
	 */
	public function signup_questions( $attributes = [] ) {
		return new SignupQuestion( $this->connection, $attributes );
	}

	/**
	 * @param array $attributes
	 * @return \Eduframe\Resources\Referral
	 */
	public function referrals( $attributes = [] ) {
		return new Referral( $this->connection, $attributes );
	}

	/**
	 * @return \Eduframe\Connection
	 */
	public function getConnection() {
		return $this->connection;
	}
}
