<?php

abstract class Message
{
    use ConnectToDB;

    private $database = 'db_oop';

    private $subject;

    private $text;

    private $created_at;

    private $user;
    
	public $promptFromQueryOnId;
	
	

    /**
     * Message constructor.
     * @param $subject
     * @param $text
     * @param $created_at
     * @param $user
     */
    public function __construct($subject, $text, \DateTime $created_at, User $user)
    {
        $this->subject = $subject;
        $this->text = $text;
        $this->created_at = $created_at;
        $this->user = $user;
    }

    public static function getDatabase()
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/HW/20_03_17/database/messages.db';

    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

	 public function getNameOfDatabase()
    {
        return $this->database;
    }
	
	public function getDataOnId($id)
	{
		
		
		$query = 'SELECT * FROM users WHERE id = ? ';
		$link = $this->connectToDB($this->database);
		$stmt = $link->prepare($query);
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$stmt->bind_result($id, $username, $email);
		
		while($stmt->fetch()){
			$this->promptFromQueryOnId =  [$id, $username, $email];
		}
	
		$stmt->close();
		$link->close();
		
		return $this->promptFromQueryOnId;
		
		// $link = $this->connectToDB($this->database);
		// $stmt = $link->prepare($query);
		// $stmt->bindParam(":id", $id);
		// $stmt->execute();
		// return $stmt->fetchAll();	
	}	
	
	
	
	public function deleteDataOnId($id)
	{
		$query = 'DELETE FROM users WHERE id = ?';	
		$link = $this->connectToDB($this->database);
		$stmt = $link->prepare($query);
		$stmt->bind_param("i", $id);
		if($stmt->execute()){
			echo "Prompt was deleted.";	
		}
		$stmt->close();
		$link->close();
		
			
	}
	
    function __toString()
    {
        return $this->getSubject() . ' : ' . $this->getText() . '(' . $this->user->getUsername() . ') at: ' . $this->created_at->format('d.m.Y h:i:s');
    }

}