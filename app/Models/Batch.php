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
 * @property Course[] $courses
 * @property ExamType[] $examTypes
 * @property Registration[] $registrations
 * @property Section[] $sections
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
    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'batche_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examTypes()
    {
        return $this->hasMany('App\Models\ExamType', 'batche_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registrations()
    {
        return $this->hasMany('App\Models\Registration', 'batche_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sections()
    {
        return $this->hasMany('App\Models\Section', 'batche_id');
    }
}
