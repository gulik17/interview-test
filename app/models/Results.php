<?php
namespace app\models;

use app\core\Model;

class Results extends Model {

	public function getAllCount() {
		return $this->db->row('SELECT COUNT(id) AS count FROM `interview`');
	}

	public function getHairColorCount() {
		return $this->db->row('SELECT `hair_color`, COUNT(hair_color) AS count FROM `interview` GROUP BY `hair_color`');
	}

	public function getAgeCount() {
		return $this->db->row('SELECT `age`, COUNT(age) AS count FROM `interview` GROUP BY `age`');
	}

	public function getProgrammingLangCount() {
		return $this->db->row('SELECT `programming_lang`, COUNT(programming_lang) AS count FROM `interview` GROUP BY `programming_lang`');
	}

	public function getBirthdayCount() {
		return $this->db->row('SELECT YEAR(birthday) AS birthday, COUNT(birthday) AS count FROM `interview` GROUP BY YEAR(birthday)');
	}

	public function getYearsExperienceCount() {
		return $this->db->row('SELECT `years_experience`, COUNT(years_experience) AS count FROM `interview` GROUP BY `years_experience`');
	}

	public function saveData($params) {
		
		$sql = "INSERT INTO `interview` (`hair_color`, `age`, `programming_lang`, `birthday`, `years_experience`)
				VALUES (:hair_color, :age, :programming_lang, FROM_UNIXTIME(:birthday), :years_experience)";
		return $this->db->insert($sql, $params);
	}

}