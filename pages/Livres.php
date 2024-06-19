<?php
declare(strict_types = 1);

class Livre {

    public const STATUS_AVAILABLE = 'valide';
    public const STATUS_BORROWED = 'emprunter';

    public function __construct(public string $title, public string $author, public float $year, $status= self::STATUS_AVAILABLE)
    { }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getYear(): string {
        return $this->year;
    }
    
}

$livres = new Livre ("calcul ","eliezer",2021);
var_dump($livres);

?>