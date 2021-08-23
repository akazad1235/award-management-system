<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardRegister extends Model
{
    use HasFactory;
    protected $fillable = [
        'business_name',
        'business_owner_name',
        'establishment',
        'award_category',
        'signature_item',
        'subscribers',
        'website_url',
        'major_breakthrough',
        'country',
        'district',
        'contact',
        'email',
        'join_date',
        'review_achieved',
        'number_of_post',
        'revenue',
        'product_innovation',
        'trade_license',
        'team_size'
    ];
}
