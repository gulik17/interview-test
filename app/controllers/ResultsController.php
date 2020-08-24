<?php
namespace app\controllers;

use app\core\Controller;

class ResultsController extends Controller
{
    public function indexAction()
    {
        $allCount = $this->model->getAllCount();
        $hairColorCount = $this->model->getHairColorCount();
        $ageCount = $this->model->getAgeCount();
        $programmingLangCount = $this->model->getProgrammingLangCount();
        $birthdayCount = $this->model->getBirthdayCount();
        $yearsExperienceCount = $this->model->getYearsExperienceCount();

		$vars = [
            'allCount' => $allCount[0],
            'hairColorCount' => $hairColorCount,
            'ageCount' => $ageCount,
            'programmingLangCount' => $programmingLangCount,
            'birthdayCount' => $birthdayCount,
            'yearsExperienceCount' => $yearsExperienceCount,
        ];
        $this->view->render('Результаты опроса', $vars);
    }

}
