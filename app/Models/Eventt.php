<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventt extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'guests',
        'sponsors',
        'location',
        'capacity',
        'is_paid',
        'price',
        'category',
        'links',
        'start_date',
        'start_time',
        'end_time',
        'end_date',
        'description',
        'host_name',
        'host_image',
        'banner_1',
        'banner_2',
        'status'
    ];
}
