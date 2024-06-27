<?php
require_once("Livres.php");

class author extends livre {
    public array $author = [];
    
    public function __construct(public string $title, public float $year,
    public string $name, public string $biography) {}

    public function getName(): string {
        return $this->name;
    }

    public function getBiography(): string {
        return $this->biography;
    }

    public function addAuthor($name,$biography): void {
        $this->author[] = $name;
        $this->author[] = $biography;

        $name = array_filter($this->author);
        $biography = array_filter($this->author);
    }

    public function setAuthor($author): void {
        $this->author = $author;
    }

    public function getAuthor() {

        $author=$this->author ;

        return $author;
    }

    public function displayArrayAuthor(){
        
        foreach($this->getAuthor() as $author){
            echo $author;
        }
    }

    public function displayBook(): void {
        echo "titre : {$this->title},\n"."année de publication : {$this->year},\n"."autheur : {$this->name},\n"."biography : {$this->biography}";
    }

}

?>