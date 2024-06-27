<?php

declare(strict_types = 1);

abstract class livre {
    public function __construct(public string $title, public float $year)
    {}

    public function getTitle($title): string {
        return $this->title;
    }

    public function getyear($year): float {
        return $this->year;
    }

    abstract public function displayBook(): void;

}

?>