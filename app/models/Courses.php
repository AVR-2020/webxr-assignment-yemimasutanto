<?php

class Courses extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var integer
     */
    public $capacity;

    /**
     *
     * @var integer
     */
    public $sks;

    /**
     *
     * @var string
     */
    public $jenis;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("avr_myits_frs");
        $this->setSource("courses");

        $this->hasMany(
            'id',
            Studyplans::class,
            'course_id',
            ['alias' => 'studyplan']
        );
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Courses[]|Courses|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Courses|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
