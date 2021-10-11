<?php


namespace App\Repositories;


use App\Models\OsResources;
use Freelabois\LaravelQuickstart\Extendables\Repository;

class OsResourceRepository extends Repository
{
    protected $model = OsResources::class;
    protected $searchableFields = [
    ];
}
