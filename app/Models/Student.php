<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_categories_id
 * @property integer $course_id
 * @property integer $section_id
 * @property integer $waver_id
 * @property integer $batches_id
 * @property integer $user_id
 * @property integer $upload_by
 * @property integer $from_no
 * @property integer $student_id
 * @property string $contact
 * @property string $emergency_contact
 * @property string $name
 * @property string $dob
 * @property float $height
 * @property float $weight
 * @property string $gender
 * @property string $blood_group
 * @property string $religion
 * @property string $marital_status
 * @property string $birth_place
 * @property string $Nationality
 * @property string $nid
 * @property string $house
 * @property string $road
 * @property string $village
 * @property string $po
 * @property string $pc
 * @property string $upazilla
 * @property string $district
 * @property string $permanent_house
 * @property string $permanent_road
 * @property string $permanent_village
 * @property string $permanent_po
 * @property string $permanent_pc
 * @property string $permanent_upazilla
 * @property string $permanent_district
 * @property string $know_about
 * @property string $rtm_student_name
 * @property string $rtm_student_id
 * @property string $rtm_staff_name
 * @property string $rtm_staff_id
 * @property string $spoken_score
 * @property string $spoken_certificate_date
 * @property boolean $is_expelled
 * @property string $expelled_reason
 * @property boolean $is_job_exp
 * @property string $extra_activity
 * @property float $waver
 * @property string $description
 * @property boolean $is_approved_dean
 * @property string $dean_sign_date
 * @property boolean $is_approved_register
 * @property string $register_sign_date
 * @property boolean $is_approved_admission
 * @property string $admission_sign_date
 * @property string $admission_in
 * @property string $status
 * @property string $register_type
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Batch $batch
 * @property Course $course
 * @property Section $section
 * @property User $user
 * @property UserCategory $userCategory
 * @property User $users
 * @property Waver $wavers
 */
class Student extends Model
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
    protected $fillable = ['user_categories_id', 'course_id', 'section_id', 'waver_id', 'batches_id', 'user_id', 'upload_by', 'from_no', 'student_id', 'contact', 'institute', 'emergency_contact', 'name', 'dob', 'height', 'weight', 'gender', 'blood_group', 'religion', 'marital_status', 'birth_place', 'nationality', 'nid', 'bc', 'passport', 'house', 'road', 'village', 'po', 'pc', 'upazilla', 'district', 'permanent_house', 'permanent_road', 'permanent_village', 'permanent_po', 'permanent_pc', 'permanent_upazilla', 'permanent_district', 'know_about', 'rtm_student_name', 'rtm_student_id', 'rtm_staff_name', 'rtm_staff_id', 'spoken_score', 'spoken_certificate_date', 'is_expelled', 'expelled_reason', 'is_job_exp', 'extra_activity', 'waver', 'description', 'is_approved_dean', 'dean_sign_date', 'is_approved_register', 'register_sign_date', 'is_approved_admission', 'admission_sign_date', 'admission_in', 'status', 'register_type', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function batch()
    {
        return $this->belongsTo('App\Models\Batch', 'batches_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uploaded()
    {
        return $this->belongsTo('App\Models\User', 'upload_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userCategory()
    {
        return $this->belongsTo('App\Models\UserCategory', 'user_categories_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wavers()
    {
        return $this->belongsTo('App\Models\Waver');
    }
}
