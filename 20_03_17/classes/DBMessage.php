<?php

class DBMessage extends Message
{
   	public function getAllFromDB()
	{
		$query = 'SELECT * FROM users';
		$link = $this->connectToDB($this->database);
		
		if($result = $link->query($query)){
			$i = 0;
			while ($row = $result->fetch_assoc()){
				
				$resultArray[$i] = $row;
				$i++;
			}
		}
		
		$link->close();	
	}
	
	public function save()
	{
		$dataToSave = $this->getDataOnId($this->promptFromQueryOnId);
		$query = 'UPDATE users SET id = ?, user_name = ?, email = ? WHERE id = ?';
		$link = $this->connectToDB($this->getNameOfDatabase());
		$stmt = $link->prepare($query);
		$stmt->bind_param('issi', $dataToSave[0], $dataToSave[1], $dataToSave[2], $dataToSave[0]);
		if($stmt->execute()){
			echo 'Data was updated successful.';
		}
		$stmt->close();
		$link->close();
	}

}