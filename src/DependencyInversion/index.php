<?php

use App\DependecyInversion\Project;
use App\DependecyInversion\Roles\BackendDeveloper;
use App\DependecyInversion\Roles\FrontendDeveloper;

require_once __DIR__.'/../../vendor/autoload.php';


$developers = [
    new FrontendDeveloper(),
    new BackendDeveloper()
];

$project = new Project($developers);
print_r($project->developProject());