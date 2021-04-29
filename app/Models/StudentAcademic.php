<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $institution
 * @property string $academy_type
 * @property string $examination
 * @property float $gpa
 * @property float $gpa_sub
 * @property string $grade
 * @property string $group
 * @property string $board
 * @property string $pass_year
 * @property float $duration
 * @property string $reg_year
 * @property string $program
 * @property string $university
 * @property string $note
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class StudentAcademic extends Model
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
    protected $fillable = ['user_id', 'institution', 'academy_type', 'examination', 'gpa', 'gpa_sub', 'grade', 'group', 'board', 'pass_year', 'duration', 'reg_year', 'program', 'university', 'note', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
