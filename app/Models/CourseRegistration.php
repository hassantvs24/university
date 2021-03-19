<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $registration_id
 * @property integer $course_item_id
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property CourseItem $courseItem
 * @property Registration $registration
 */
class CourseRegistration extends Model
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
    protected $fillable = ['registration_id', 'course_item_id', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function courseItem()
    {
        return $this->belongsTo('App\Models\CourseItem');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registration()
    {
        return $this->belongsTo('App\Models\Registration');
    }
}
