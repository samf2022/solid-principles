<?php
namespace App\DependecyInversion\Roles;

use App\DependecyInversion\DevoloperInterface;

class BackendDeveloper implements DevoloperInterface
{
    public function develop()
    {
        return 'Backend developer';
    }
}