<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logo',
        'breadcrub_image',
        'company_address',
        'mobile',
        'mobile_1',
        'email',
        'sister_concern',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'instagram_url',
        'youtube_url',
        'office_location_map',
        'why_choose_us_title',
        'why_choose_us_image',
        'project_title',
        'project_sub_title',
        'service_title',
        'service_sub_title',
        'call_to_action_one_title',
        'call_to_action_one_button_title',
        'call_to_action_one_button_url',
        'testimonial_title',
        'testimonial_sub_title',
        'team_title',
        'team_sub_title',
        'contact_us_title',
        'contact_us_sub_title',
        'footer_about_us_title',
        'footer_about_us_description',
    ];
}
