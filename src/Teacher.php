<?php

namespace Info;

trait Teacher
{
	//instance variable
	public $skill;

	//constructor
	public function __construct($skill)
	{
		$this->skill = $skill;
	}

	//get method
	public function getSkill()
	{
		echo "Programming";
	}
}

?>