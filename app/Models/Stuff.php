<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $designation_id
 * @property integer $user_categorie_id
 * @property integer $user_id
 * @property string $name
 * @property string $contact
 * @property string $emergency_contact
 * @property string $gender
 * @property string $dob
 * @property string $joining_date
 * @property float $nid
 * @property string $blood_group
 * @property string $address
 * @property string $city
 * @property string $zip
 * @property string $state
 * @property string $district
 * @property string $sub_district
 * @property string $country
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Designation $designation
 * @property UserCategory $userCategory
 * @property User $user
 */
class Stuff extends Model
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
    protected $fillable = ['designation_id', 'user_categorie_id', 'user_id', 'name', 'contact', 'emergency_contact', 'gender', 'dob', 'joining_date', 'nid', 'blood_group', 'address', 'city', 'zip', 'state', 'district', 'sub_district', 'country', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function designation()
    {
        return $this->belongsTo('App\Models\Designation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userCategory()
    {
        return $this->belongsTo('App\Models\UserCategory', 'user_categorie_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
