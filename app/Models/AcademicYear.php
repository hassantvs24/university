<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $years
 * @property string $status
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Batch[] $batches
 * @property Course[] $courses
 */
class AcademicYear extends Model
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
    protected $fillable = ['name', 'years', 'status', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function batches()
    {
        return $this->hasMany('App\Models\Batch');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }
}
