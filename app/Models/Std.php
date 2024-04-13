<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Std extends Model
{
    protected $table = 'std';

    protected $primaryKey = 'adm_no'; // Specify the name of the primary key column

    protected $fillable = [
        'adm_no',
        'name',
        'certificate_number',
        'course',
        'branch',
        'ogpa',
        'ogpa_h',
        'final_ogpa',
        'date_of_result',
        'yop',
        'dept_id',
        'course_id',
        'branch_id',
        'department_name',
    ];

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Create a new Std instance.
     *
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->incrementing = false; // Set to false to use a non-numeric primary key
    }
}
