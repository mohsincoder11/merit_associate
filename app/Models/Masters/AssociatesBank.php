<?php

namespace App\Models\Masters;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociatesBank extends Model
{
    use HasFactory;
    protected $table="associatesbanks";
    protected $fillable = ['bankname','contactperson','mobile','email','bankaddress','bankbranch','gst_no','city','state','pincode','userid','password'];

}
