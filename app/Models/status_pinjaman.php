<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class status_pinjaman extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'status_pinjamen';

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
    protected $fillable = ['nama', 'buku_id'];

    
}
