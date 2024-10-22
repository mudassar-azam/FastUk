<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

     protected $fillable = [
        'SEOTitle',
        'metaDescription',
        'servicesHeadTitle',
        'servicesHeadDesription',
        'service1Title',
        'service1Description',
        'service2Title',
        'service2Description',
        'service3Title',
        'service3Description',
        'service4Title',
        'service4Description',
        'service5Title',
        'service5Description',
        'service6Title',
        'service6Description',
        'service7Title',
        'service7Description',
        'service8Title',
        'service8Description',
        'service9Title',
        'service9Description',
        'section3Title',
        'section3Description',
        'section4Title',
        'section4Description',
        'section1Image',
        'service1Image',
        'service2Image',
        'service3Image',
        'service4Image',
        'service5Image',
        'service6Image',
        'service7Image',
        'service8Image',
        'service9Image',
        'section3Image',
        'section4Image',
    ];
}
