<?php

namespace App\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OsResource;
use App\Managers\OsManager;
use App\Repositories\OsRepository;
use Freelabois\LaravelQuickstart\Traits\Crudable;

class OsController extends Controller
{
    //
    use Crudable;

    protected $resource = OsResource::class;

    public function __construct(OsManager $manager, OsRepository $repository)
    {
        $this->setup($manager, $repository);
    }


    public function show($id)
    {
        return  OsResource::collection($this->repository->list(['os_codigo' => $id], ['pessoa']));
    }
}
