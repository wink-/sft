<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dmr extends Model
{
    /**
     * Fillable fields for a discrepancy
     * @var array
     */
    protected $fillable = [
        'workorder',
        'date_of_discrepancy',
        'description_of_discrepancy',
        'corrective_action_due_date',
        'rejection_type',
        'internal_comments'
    ];

    /**
     * Table name for model
     * @var string
     */
    protected $table = 'discrepant_materials';
}
