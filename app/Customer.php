<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{

   // use SoftDeletes;
    /**
     * Fillable fields for a customer
     * @var array
     */
    protected $fillable = [
        'CUSTCODE',
        'CUSTNAME',
        'ADDRESS1',
        'ADDRESS2',
        'ADDRESS3',
        'CITY',
        'STATE',
        'ZIP',
        'PHONE1',
        'FAX',
        'EMAIL'
    ];

    protected $primaryKey = 'ID';
    protected $table = 'Customer';
    public $timestamps = true;
    // protected $dates = ['deleted_at'];

    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }

}
