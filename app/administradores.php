<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class administradores extends Model
{
    use SoftDeletes;
     protected $primaryKey = 'idadmin';
    
    protected $fillable=['idadmin','nomadmin','apepadmin','apemadmin','sexo','puestoadmin','activo'];
    protected $date=['deleted_at'];
}
