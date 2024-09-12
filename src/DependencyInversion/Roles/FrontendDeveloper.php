<?php
namespace App\DependecyInversion\Roles;

use App\DependecyInversion\DevoloperInterface;

class FrontendDeveloper implements DevoloperInterface
{
    public function develop()
    {
        return 'Frontend developer';
    }
}