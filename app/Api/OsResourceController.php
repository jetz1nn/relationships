<?php

namespace App\Api;

use App\Http\Resources\OsResourceResource;
use Freelabois\LaravelQuickstart\Traits\Crudable;
use App\Http\Controllers\Controller;

class OsResourceController extends Controller
{
    //
    use Crudable;

    protected $resource = OsResourceResource::class;

}
