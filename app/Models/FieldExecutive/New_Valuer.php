<?php

namespace App\Models\FieldExecutive;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class New_Valuer extends Model
{
    use HasFactory;

    protected $table = "new_valuer";
    protected $fillable= [
        'name',
        'valuation_id',
        'contact_no',
        'property_type_id',
        // 'property_address',
        'address',
        
        'house_no',
        'building_name',
        'wing_no',
        'village_city',
        'tehsil',
        'district',
        
        'road_name',
        'colony',
        'pin_code',
        'landmark',
        'meter_no',
        'plot_area',
        'up_area',
        'GF',
        'FF',
        'SF',
        'TF',
        'occupancy_status',
        'occupied_by',
        'four_borders',
        'whether_boundaries_matching',
        'rate_range',
        'plot_range',
        'road_type',
        'road_width_in_feet',
        'type_of_structure',
        'remark_on_boundaries_matching',
        'lat',
        'long',
        'construction_stage',
        'side_marginal_distance_in_feet',
        'discription_of_property',
        'person_met_at_site',
        'relation_with_owner',
        'remark_on_property',
        'deviation',
        'rate_referenace',
        'date_of_visit',
        'name_of_FE_visited_the_property_id',
        'location_id',
        'category_id',
        'tag_id',
        'image',
        'status',
        'file_name',
        'reason',
        'last_updated_by',
        'file',
        'new_status'
    ];

    protected $casts = [
        'plot_area'=> 'array',
        'up_area' => 'array',
        'four_borders' => 'array',
        'whether_boundaries_matching' => 'array',
        'side_marginal_distance_in_feet' => 'array',
        'discription_of_property' => 'array',
        'category_id' => 'array',
        'tag_id' => 'array',
        'image' => 'array',
        'file_name' => 'array',
        'file' => 'array',
    ];

//     public function getCuisineAttribute(){
// $data=Cuisine::whereIn('id',$this->cuisine_id)
// ->pluck('cuisine')->toArray();
// $cuisine_list=implode(",",$data);

public function cuisine(){
   
     $data=$this->hasOne(Tags::class,'id','tag_id')->whereIn('id',$this->tag_id)->pluck('tag');
     return explode(',',$data);
   
}
public function category(){
    
     $data=$this->hasOne(Category::class,'id','category_id')->whereIn('id',$this->category_id)->pluck('category');
    return explode(',',$data); 
}

}

