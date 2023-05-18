<?php

namespace App\Models;
use App\Models\Area;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $table="branchs";
    protected $fillable = [
        'branch_name',
        'prefix',
        'location_id',
        'area_id'
    
    ];

    //converting sring into array

    protected $casts = 
    [
        'area_id' => 'array'
    ];


    public function getAreaNameAttribute ()
    {
        $area = Area::whereIn('id',$this->area_id)->pluck('area')->toArray();
        $area2=implode(",",$area);
        return $area2;
    }
}
