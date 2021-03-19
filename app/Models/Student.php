<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_categorie_id
 * @property integer $course_id
 * @property integer $department_id
 * @property integer $academic_year_id
 * @property integer $user_id
 * @property string $student_id
 * @property string $contact
 * @property string $emergency_contact
 * @property string $name
 * @property string $dob
 * @property string $gender
 * @property string $blood_group
 * @property string $religion
 * @property float $height
 * @property float $weight
 * @property float $nid
 * @property float $waver
 * @property string $waver_name
 * @property string $father_name
 * @property string $father_contact
 * @property string $father_email
 * @property string $father_occupation
 * @property string $father_nid
 * @property string $father_photo
 * @property string $mother_name
 * @property string $mother_contact
 * @property string $mother_email
 * @property string $mother_occupation
 * @property string $mother_nid
 * @property string $mother_photo
 * @property string $guardian_name
 * @property string $guardian_contact
 * @property string $guardian_email
 * @property string $guardian_occupation
 * @property string $guardian_nid
 * @property string $guardian_photo
 * @property string $address
 * @property string $city
 * @property string $zip
 * @property string $state
 * @property string $district
 * @property string $sub_district
 * @property string $country
 * @property string $ssc_roll
 * @property string $ssc_reg
 * @property string $ssc_year
 * @property string $ssc_division
 * @property float $ssc_point
 * @property string $ssc_grade
 * @property string $ssc_certificate
 * @property string $ssc_mark_sheet
 * @property string $ssc_testimonial
 * @property string $hsc_roll
 * @property string $hsc_reg
 * @property string $hsc_year
 * @property string $hsc_division
 * @property float $hsc_point
 * @property string $hsc_grade
 * @property string $hsc_certificate
 * @property string $hsc_mark_sheet
 * @property string $hsc_testimonial
 * @property string $doc_one_title
 * @property string $doc_one_file
 * @property string $doc_two_title
 * @property string $doc_two_file
 * @property string $doc_three_title
 * @property string $doc_three_file
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property AcademicYear $academicYear
 * @property Course $course
 * @property Department $department
 * @property UserCategory $userCategory
 * @property User $user
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
    protected $fillable = ['user_categorie_id', 'course_id', 'department_id', 'academic_year_id', 'user_id', 'student_id', 'contact', 'emergency_contact', 'name', 'dob', 'gender', 'blood_group', 'religion', 'height', 'weight', 'nid', 'waver', 'waver_name', 'father_name', 'father_contact', 'father_email', 'father_occupation', 'father_nid', 'father_photo', 'mother_name', 'mother_contact', 'mother_email', 'mother_occupation', 'mother_nid', 'mother_photo', 'guardian_name', 'guardian_contact', 'guardian_email', 'guardian_occupation', 'guardian_nid', 'guardian_photo', 'address', 'city', 'zip', 'state', 'district', 'sub_district', 'country', 'ssc_roll', 'ssc_reg', 'ssc_year', 'ssc_division', 'ssc_point', 'ssc_grade', 'ssc_certificate', 'ssc_mark_sheet', 'ssc_testimonial', 'hsc_roll', 'hsc_reg', 'hsc_year', 'hsc_division', 'hsc_point', 'hsc_grade', 'hsc_certificate', 'hsc_mark_sheet', 'hsc_testimonial', 'doc_one_title', 'doc_one_file', 'doc_two_title', 'doc_two_file', 'doc_three_title', 'doc_three_file', 'deleted_at', 'created_at', 'updated_at'];

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
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
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
