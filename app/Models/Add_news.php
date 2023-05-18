<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_news extends Model
{
    use HasFactory;
    protected $table="add_news";
    protected $fillable = ['firstname','middelname','lastname','valuation_id','client','product','location','area','field_executive','assistant_valuer','technical_manager','technical_head','contact_no','alt_cont_no','city','state','pincode','longitude','latitute','tag','date','comment','document'];


    protected $casts = [
        'document'=> 'array',
      
    ];

}
