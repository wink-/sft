<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Employee extends Model
{
    
	public $table = "Employee";
    protected $primaryKey = 'ID';

	public $fillable = [
		"Initials",
		"Code",
		"Name",
		"Signature",
		"Production",
		"Supervisor",
		"Pin",
		"Note"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "ID" => "integer",
		"Initials" => "string",
		"Code" => "string",
		"Name" => "string",
		"Signature" => "string",
		"Production" => "boolean",
		"Supervisor" => "integer",
		"Pin" => "string",
		"Note" => "string",
    ];

	public static $rules = [
	    
	];

}
