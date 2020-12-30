<?php

class CourseStudyplan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $studyplan_id;

    /**
     *
     * @var string
     */
    public $course_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("avr_myits_frs");
        $this->setSource("course_studyplan");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CourseStudyplan[]|CourseStudyplan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CourseStudyplan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
