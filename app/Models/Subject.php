<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $subject_categories_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $status
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property SubjectCategory $subjectCategory
 * @property CourseItem[] $courseItems
 */
class Subject extends Model
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
    protected $fillable = ['subject_categories_id', 'code', 'name', 'description', 'status', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subjectCategory()
    {
        return $this->belongsTo('App\Models\SubjectCategory', 'subject_categories_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depend()
    {
        return $this->hasMany('App\Models\CourseItem', 'dependency');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseItems()
    {
        return $this->hasMany('App\Models\CourseItem');
    }
}
