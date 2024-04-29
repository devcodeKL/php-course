<?php 

session_start(); 

class TaskList {

	// Adding Task
	public function add($description) {

		$newTask = (object) [
			'description' => $description,
			'isFinished' => false
		];

		if ($_SESSION['tasks'] === null) {
			$_SESSION['tasks'] = array();
		}

		array_push($_SESSION['tasks'], $newTask);
	}

	// Updating Task
	public function update($id, $description, $isFinished) {
		$_SESSION['tasks'][$id]->description = $description;
		$_SESSION['tasks'][$id]->isFinished = ($isFinished !== null) ? true : false;
   	}

	// Deleting Task
	public function remove($id) {
		// 1 - represents the length of the segment to remove from the array
	   array_splice($_SESSION['tasks'], $id, 1);
	}

	// Clear all task
	public function clear() {
		session_destroy();
	}
}


// Instantiation of TaskList
	$taskList = new TaskList();

	// Handles the client request and identify the "action" needed to be executed
	if($_POST['action'] === 'add') {
		$taskList->add($_POST['description']);
	}
	else if ($_POST['action'] === 'update') {
        $taskList->update($_POST['id'], $_POST['description'], $_POST['isFinished']);
    }
    else if ($_POST['action'] === 'remove') {
        $taskList->remove($_POST['id']);
    }
    else if ($_POST['action'] === 'clear') {
	    $taskList->clear();
  	}

	header('Location: ./index.php');

?>