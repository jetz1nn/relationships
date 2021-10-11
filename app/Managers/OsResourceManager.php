<?php


namespace App\Managers;


use App\Repositories\OsResourceRepository;
use Freelabois\LaravelQuickstart\Extendables\ManipulationManager;



class OsResourceManager extends ManipulationManager
{

    public function __construct(OsResourceRepository $repository)
    {
        parent::__construct($repository);
    }

    public function storeOrUpdate($values, int $id = null, array $relations = [])
    {

    }

}
