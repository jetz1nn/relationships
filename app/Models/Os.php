<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Os extends Model
{
    use HasFactory;

    protected $table = "os.os";
    protected $primaryKey = "os_codigo";


    public function pessoa() {
        return $this->hasOne(Person::class, 'pes_codigo', 'os_fk_pes_codigo');
    }
}
