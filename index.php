<?php
require_once("pages/LIvres.php");
require_once("pages/author.php");
require_once("pages/user.php");

class checkBook {
    
    private const BOOK_AVAILABLE = "DISPONIBLE";
    private const  BOOK_BORROW = "EMPRUNTE";

    public function __construct(public string $statusBook = self::BOOK_AVAILABLE){
    }

    public function setStatus(string $statusBook): void {
        if(in_array($statusBook,[self::BOOK_AVAILABLE , self::BOOK_BORROW])){
            trigger_error(
                sprintf("ceci n'appartient pas au table",$statusBook, emplode(",",[self::BOOK_AVAILABLE , self::BOOK_BORROW])),
                E_USER_ERRO
            );
        }
        
        $this->statusBook = $statusBook;
    }

    public function getStatus() {
        echo ", "."status du livre : {$this->statusBook}";
    }
    
}


$livre = new author ("ocean",2000,"tamba","congolaise");

$user = new user("joel","eliezermasiala200@gmail.com",$livre->displayBook());

$user->displatDispo();

$status = new checkBook();

$status->getStatus();



?>