<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->courses = Courses::find(["limit" => 4]);
        $this->view->studyplans = Studyplans::find(["limit" => 4]);
    }

}

