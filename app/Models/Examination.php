<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $exam_type_id
 * @property integer $registration_id
 * @property integer $user_id
 * @property integer $teacher
 * @property float $mark
 * @property string $status
 * @property string $notes
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property ExamType $examType
 * @property Registration $registration
 * @property User $user
 * @property User $user
 */
class Examination extends Model
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
    protected $fillable = ['exam_type_id', 'registration_id', 'user_id', 'teacher', 'mark', 'status', 'notes', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function examType()
    {
        return $this->belongsTo('App\Models\ExamType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registration()
    {
        return $this->belongsTo('App\Models\Registration');
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
}
