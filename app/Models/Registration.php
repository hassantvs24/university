<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $registration_type_id
 * @property integer $section_id
 * @property integer $batches_id
 * @property integer $teacher
 * @property integer $exam_controller
 * @property integer $accountant
 * @property integer $register
 * @property integer $user_id
 * @property string $status
 * @property string $notes
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Batch $batch
 * @property RegistrationType $registrationType
 * @property Section $section
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
    protected $fillable = ['registration_type_id', 'section_id', 'batches_id', 'teacher', 'exam_controller', 'accountant', 'register', 'user_id', 'status', 'notes', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accounts()
    {
        return $this->belongsTo('App\Models\User', 'accountant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function batch()
    {
        return $this->belongsTo('App\Models\Batch', 'batches_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function examController()
    {
        return $this->belongsTo('App\Models\User', 'exam_controller');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registers()
    {
        return $this->belongsTo('App\Models\User', 'register');
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
    public function teachers()
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
