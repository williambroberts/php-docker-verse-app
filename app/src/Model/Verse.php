<?php
class Verse {
    private $conn;
    private $table ='bible_verses_asvs';
    
    #verse data
    public  $row;
    public int $book;
    public int $chapter;
    public int $verse;
    
    public function __construct($db)
    {
        $this->conn=$db;
    }
    public function readOne(){
        $query = 'SELECT DISTINCT * FROM ' . $this->table . ' WHERE book = ? AND chapter = ? AND verse = ?';
        //$stmt = $pdo->prepare('select * from table');
        $stmt = $this->conn->prepare($query);
        // $stmt->bindValue(1, $this->book);
        // $stmt->bindValue(2, $this->chapter);
        // $stmt->bindValue(3, $this->verse);
        $stmt->execute([$this->book,$this->chapter,$this->verse]);
        $this->row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->row;

    }
    

}



?>