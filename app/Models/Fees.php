<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $fee_type_id
 * @property integer $academic_year_id
 * @property string $amount
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property AcademicYear $academicYear
 * @property FeeType $feeType
 */
class Fees extends Model
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
    protected $fillable = ['fee_type_id', 'academic_year_id', 'amount', 'deleted_at', 'created_at', 'updated_at'];

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
    public function feeType()
    {
        return $this->belongsTo('App\Models\FeeType');
    }
}
