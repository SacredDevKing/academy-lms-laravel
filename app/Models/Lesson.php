<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
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
        'duration',
        'course_id',
        'section_id',
        'video_type',
        'cloud_video_id',
        'video_url',
        'date_added',
        'last_modified',
        'lesson_type',
        'attachment',
        'attachment_type',
        'caption',
        'summary',
        'is_free',
        'order',
        'video_type_for_mobile_application',
        'video_url_for_mobile_application',
        'duration_for_mobile_application'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
