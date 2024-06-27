<?php

class user{
    
    public function __construct (public string $nameUser,public string $mailUser,public $listBooks)
    {}

    public function getNameuser(): string {
        return $this->nameUser;
    }

    public function getMail():string {
        return $this->mailUser;
    }

    public function setListbook($listBooks): void {
        $this->listBooks = $listBooks;
    }

    public function getListbooks() {
        return $this->listBooks;
    }

    public function displatDispo(){
        echo ", "."mail de l'utilisateur: {$this->mailUser} ".", "."nom de l'utilisateur : {$this->nameUser}";
    }
}
?>