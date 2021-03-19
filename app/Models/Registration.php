<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $registration_type_id
 * @property integer $academic_year_id
 * @property integer $section_id
 * @property integer $batche_id
 * @property integer $teacher
 * @property integer $stuff
 * @property integer $user_id
 * @property boolean $semester_level
 * @property string $status
 * @property string $notes
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property AcademicYear $academicYear
 * @property Batch $batch
 * @property RegistrationType $registrationType
 * @property Section $section
 * @property User $user
 * @property User $user
 * @property User $user
 * @property CourseRegistration[] $courseRegistrations
 * @property Examination[] $examinations
 * @property Payment[] $payments
 */
class Registration extends Model
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
    protected $fillable = ['registration_type_id', 'academic_year_id', 'section_id', 'batche_id', 'teacher', 'stuff', 'user_id', 'semester_level', 'status', 'notes', 'deleted_at', 'created_at', 'updated_at'];

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
    public function batch()
    {
        return $this->belongsTo('App\Models\Batch', 'batche_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registrationType()
    {
        return $this->belongsTo('App\Models\RegistrationType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'stuff');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'teacher');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseRegistrations()
    {
        return $this->hasMany('App\Models\CourseRegistration');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examinations()
    {
        return $this->hasMany('App\Models\Examination');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }
}
