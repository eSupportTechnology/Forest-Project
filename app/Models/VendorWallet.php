<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorWallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id', 
        'balance',  
        'total_earnings' 
    ];
}
