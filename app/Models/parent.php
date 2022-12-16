<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class parent extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'parents';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_lengkap', 'employee_id', 'nama_ibu', 'nama_ayah', 'no_ktpibu', 'no_ktpayah'];

    
}
