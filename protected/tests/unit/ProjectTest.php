<?php
class ProjectTest extends CDbTestCase
{
	public function testCRUD()
	{
		//Create a new project
		$newProject=new Project;
		$newProjectName = 'Test Project 1';
		$newProject->setAttributes(
		array(
			'name' => $newProjectName,
			'description' => 'Test project number one',
			'create_time' => '2010-01-01 00:00:00',
			'create_user_id' => 1,
			'update_time' => '2010-01-01 00:00:00',
			'update_user_id' => 1,
		)
		);
		$this->assertTrue($newProject->save(false));
	}
}