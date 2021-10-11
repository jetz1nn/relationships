<?php


namespace App\Managers;


use App\Repositories\OsRepository;
use Freelabois\LaravelQuickstart\Extendables\ManipulationManager;



class OsManager extends ManipulationManager
{

    public function __construct(OsRepository $repository)
    {
        parent::__construct($repository);
    }

    public function storeOrUpdate($values, int $id = null, array $relations = [])
    {

    }

}
