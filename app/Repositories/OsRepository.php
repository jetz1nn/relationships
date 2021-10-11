<?php


namespace App\Repositories;


use App\Models\Os;
use Freelabois\LaravelQuickstart\Extendables\Repository;

class OsRepository extends Repository
{
    protected $model = Os::class;
    protected $searchableFields = [
        ['field' => 'os_codigo']
    ];
}
