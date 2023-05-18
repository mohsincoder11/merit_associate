<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Add_news extends Model
{
    use HasFactory;
    protected $table="add_news";
    protected $fillable = [
        'firstname',
    'middelname',
    'lastname',
    'valuation_id',
    'associatesbanks_id',
    'product_id',
    'location_id',
    'area_id',
    'field_executive_id',
    'assistant_valuer_id',
    'technical_manager_id',
    'technical_head_id',
    'contact_no',
    'alt_cont_no',
    'city',
    'state',
    'pincode',
    'longitude',
    'latitute',
    'tag',
    'date',
    'comment',
    'document_name',
    'image'
];

    protected $casts = 
    [
        'document_name' => 'array',
        'image' => 'array'
    ];


    // public function getAreaNameAttribute ()
    // {
    //     $area = Area::whereIn('id',$this->area_id)->pluck('area')->toArray();
    //     $area2=implode(",",$area);
    //     return $area2;
    // }
    

   


}

