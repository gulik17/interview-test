<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Results;

class AjaxController extends Controller
{
    public function saveAction()
    {
        $programming_lang = explode(',', $_POST['programming_lang']);
        unset($programming_lang[0]); // Удалим первую запись т.к. это плейсхолдер из инпута

        $params = [
            "hair_color" => $_POST['hair_color'],
			"age" => $_POST['age'],
			"programming_lang" => implode(",", $programming_lang),
			"birthday" => strtotime($_POST['birthday']),
			"years_experience" => $_POST['years_experience'],
        ];
        $result = (new Results)->saveData($params);
        echo ($result) ? "Данные сохранены" : "Ошибка сохранения данных";
    }
}
