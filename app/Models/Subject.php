<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $subject_type_id
 * @property integer $subject_categorie_id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property SubjectCategory $subjectCategory
 * @property SubjectType $subjectType
 * @property CourseItem[] $courseItems
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
    protected $fillable = ['subject_type_id', 'subject_categorie_id', 'code', 'name', 'description', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subjectCategory()
    {
        return $this->belongsTo('App\Models\SubjectCategory', 'subject_categorie_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subjectType()
    {
        return $this->belongsTo('App\Models\SubjectType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courseItems()
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
