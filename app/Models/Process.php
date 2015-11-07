<?php namespace App\Models;

use Sofa\Eloquence\Eloquence; // base trait
use Sofa\Eloquence\Mappable; // extension trait
use Illuminate\Database\Eloquent\Model as Model;

class Process extends Model
{

    use Eloquence, Mappable;
	public $table = "Process";

    protected $primaryKey = 'ID';
    protected $maps = [
        'id' => 'ID'
    ];
	public $fillable = [
	    "PROCNAME",
		"DESCRIPT",
		"MINCOST",
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "PROCNAME" => "string",
		"DESCRIPT" => "string",
		"MINCOST" => "float",
		"ID" => "integer"
    ];

	public static $rules = [
	    
	];

}
