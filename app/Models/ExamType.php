<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property boolean $mark
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Examination[] $examinations
 */
class ExamType extends Model
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
    protected $fillable = ['name', 'mark', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examinations()
    {
        return $this->hasMany('App\Models\Examination');
    }
}
