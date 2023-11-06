<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'outcomes',
        'faqs',
        'language',
        'category_id',
        'sub_category_id',
        'section',
        'requirements',
        'price',
        'discount_flag',
        'discounted_price',
        'level',
        'user_id',
        'thumbnail',
        'video_url',
        'date_added',
        'last_modified',
        'course_type',
        'is_top_course',
        'is_admin',
        'status',
        'course_overview_provider',
        'meta_keywords',
        'meta_description',
        'is_free_course',
        'multi_instructor',
        'enable_drip_content',
        'creator'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
