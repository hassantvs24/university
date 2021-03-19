<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $expenses_id
 * @property integer $registration_id
 * @property integer $fee_type_id
 * @property integer $user_id
 * @property integer $account_book_id
 * @property integer $payment_method_id
 * @property float $amount
 * @property string $pay_type
 * @property string $sections
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property AccountBook $accountBook
 * @property Expense $expense
 * @property FeeType $feeType
 * @property PaymentMethod $paymentMethod
 * @property Registration $registration
 * @property User $user
 */
class Payment extends Model
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
    protected $fillable = ['expenses_id', 'registration_id', 'fee_type_id', 'user_id', 'account_book_id', 'payment_method_id', 'amount', 'pay_type', 'sections', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accountBook()
    {
        return $this->belongsTo('App\Models\AccountBook');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function expense()
    {
        return $this->belongsTo('App\Models\Expense', 'expenses_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feeType()
    {
        return $this->belongsTo('App\Models\FeeType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paymentMethod()
    {
        return $this->belongsTo('App\Models\PaymentMethod');
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
        return $this->belongsTo('App\Models\User');
    }
}
