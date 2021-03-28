<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $department_id
 * @property integer $academic_year_id
 * @property boolean $code
 * @property string $name
 * @property boolean $semester
 * @property int $credit
 * @property int $price
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property AcademicYear $academicYear
 * @property Department $department
 * @property Registration[] $registrations
 * @property Section[] $sections
 * @property Student[] $students
 */
class Batch extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['department_id', 'academic_year_id', 'code', 'name', 'semester', 'credit', 'price', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function academicYear()
    {
        return $this->belongsTo('App\Models\AcademicYear');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registrations()
    {
        return $this->hasMany('App\Models\Registration', 'batches_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sections()
    {
        return $this->hasMany('App\Models\Section', 'batches_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Models\Student', 'batches_id');
    }
}
