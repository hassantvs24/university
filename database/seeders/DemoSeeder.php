<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Department;
use App\Models\Subject;
use App\Models\SubjectCategories;
use App\Models\SubjectType;
use App\Models\UserCategory;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicYear::upsert([
            ['id' => 1, 'name' => 'Year 2020', 'years' => 2020],
            ['id' => 2, 'name' => 'Year 2021', 'years' => 2021],
            ['id' => 3, 'name' => 'Year 2022', 'years' => 2022]
        ],['name','years'],['id']);

        Department::upsert([
            ['id' => 1, 'code' => 10, 'name' => 'Computer Science and Engineering', 'short_name' => 'CSE'],
            ['id' => 2, 'code' => 11, 'name' => 'Computer Science and Engineering', 'short_name' => 'CSE (M)'],
            ['id' => 3, 'code' => 12, 'name' => 'Electrical & Electronic Engineering', 'short_name' => 'EEE'],
            ['id' => 4, 'code' => 13, 'name' => 'Bachelors of Business Administration', 'short_name' => 'BBA'],
            ['id' => 5, 'code' => 14, 'name' => 'Department of Law', 'short_name' => 'LLB'],

        ],['code','name', 'short_name'],['id']);

        SubjectType::upsert([
            ['id' => 1, 'name' => 'Engineering'],
            ['id' => 2, 'name' => 'Business'],
            ['id' => 3, 'name' => 'Civil'],
            ['id' => 4, 'name' => 'Arts & Culture'],
            ['id' => 5, 'name' => 'General Science']
        ],['name'],['id']);

        SubjectCategories::upsert([
            ['id' => 1, 'name' => 'English', 'subject_type_id' => 4],
            ['id' => 2, 'name' => 'Bangla', 'subject_type_id' => 4],
            ['id' => 3, 'name' => 'Economics', 'subject_type_id' => 2],
            ['id' => 4, 'name' => 'Management', 'subject_type_id' => 2],
            ['id' => 5, 'name' => 'Computer Science', 'subject_type_id' => 1],
            ['id' => 6, 'name' => 'Mathematics', 'subject_type_id' => 5],
            ['id' => 7, 'name' => 'Architecture', 'subject_type_id' => 3],
            ['id' => 8, 'name' => 'Electric', 'subject_type_id' => 1],
            ['id' => 9, 'name' => 'Physics', 'subject_type_id' => 5],
            ['id' => 10, 'name' => 'Biology', 'subject_type_id' => 5]
        ],['name', 'subject_type_id'],['id']);

        Subject::upsert([
            ['id' => 1, 'code' => 'EEE-1111', 'name' => 'Electronic Circuit 1', 'subject_categories_id' => 8],
            ['id' => 2, 'code' => 'EEE-1112', 'name' => 'Electronic Circuit 1 Lab', 'subject_categories_id' => 8],
            ['id' => 3, 'code' => 'EEE-1121', 'name' => 'Electronic Circuit 2', 'subject_categories_id' => 8],
            ['id' => 4, 'code' => 'EEE-1122', 'name' => 'Electronic Circuit 2 Lab', 'subject_categories_id' => 8],
            ['id' => 5, 'code' => 'CSE-1121', 'name' => 'Computer Algorithms & Complexity', 'subject_categories_id' => 5],
            ['id' => 6, 'code' => 'CSE-1122', 'name' => 'Computer Algorithms & Complexity: Seasonal', 'subject_categories_id' => 5],
            ['id' => 7, 'code' => 'CSE-1111', 'name' => 'Introduction to Computer', 'subject_categories_id' => 5],
            ['id' => 8, 'code' => 'ENG-1111', 'name' => 'English Reading', 'subject_categories_id' => 4],
            ['id' => 9, 'code' => 'ENG-1112', 'name' => 'English Writing', 'subject_categories_id' => 4],
            ['id' => 10, 'code' => 'ECO-2211', 'name' => 'Principle Of Economics', 'subject_categories_id' => 2],
            ['id' => 11, 'code' => 'ACC-1111', 'name' => 'Introduction to Accounting', 'subject_categories_id' => 2],
            ['id' => 12, 'code' => 'BBA-2021', 'name' => 'Business Ethics', 'subject_categories_id' => 2]
        ],['name', 'code', 'subject_categories_id'],['id']);

        Course::upsert([
            ['id' => 1, 'name' => 'Bachelor of Computer Science and Engineering', 'semester' => 8, 'total_subject' => 46, 'total_credit' => 152, 'department_id' => 1,  'academic_year_id' => 2],
            ['id' => 2, 'name' => 'Bachelor of Business Administration', 'semester' => 8, 'total_subject' => 12, 'total_credit' => 146, 'department_id' => 4,  'academic_year_id' => 2],
            ['id' => 3, 'name' => 'Bachelor of Electrical and Electronics Engineering', 'semester' => 8, 'total_subject' => 45, 'total_credit' => 148, 'department_id' => 3,  'academic_year_id' => 2]
        ],['name', 'department_id', 'academic_year_id'],['id']);

        UserCategory::upsert([
            ['id' => 1, 'name' => 'Regular', 'user_type' => 'Student'],
            ['id' => 2, 'name' => 'Weekend', 'user_type' => 'Student'],
            ['id' => 3, 'name' => 'Evening', 'user_type' => 'Student'],
            ['id' => 4, 'name' => 'Diploma', 'user_type' => 'Student'],
            ['id' => 5, 'name' => 'Credit Transfer', 'user_type' => 'Student'],
        ],['name', 'user_type'],['id']);

        Batch::upsert([
            ['id' => 1, 'name' => '1st', 'code' => 10, 'price' => 1870, 'courses_id' => 1, 'department_id' => 1, 'academic_year_id' => 2],
            ['id' => 2, 'name' => '1st', 'code' => 11, 'price' => 1560, 'courses_id' => 2, 'department_id' => 4, 'academic_year_id' => 2],
            ['id' => 3, 'name' => '1st', 'code' => 12, 'price' => 1970, 'courses_id' => 3, 'department_id' => 3, 'academic_year_id' => 2]
        ],['name', 'code', 'price', 'courses_id', 'department_id', 'academic_year_id'],['id']);

    }
}
