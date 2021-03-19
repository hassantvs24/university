<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $dependency
 * @property integer $subject_id
 * @property integer $course_id
 * @property boolean $semester_level
 * @property float $credit
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Course $course
 * @property Subject $subject
 * @property Subject $subject
 * @property CourseRegistration[] $courseRegistrations
 */
class CourseItem extends Model
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
    protected $fillable = ['dependency', 'subject_id', 'course_id', 'semester_level', 'credit', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject()
    {
        return $this->belongsTo('App\Models\Subject', 'dependency');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseRegistrations()
    {
        return $this->hasMany('App\Models\CourseRegistration');
    }
}
