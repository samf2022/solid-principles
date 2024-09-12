<?php
namespace App\DependecyInversion;

class Project {
    private $developers;

    public function __construct(array $developers) {
        $this->developers = $developers;
    }

    public function developProject() {
        $work = [];
        foreach ($this->developers as $developer) {
            $work[] = $developer->develop();
        }
        return $work;
    }
}