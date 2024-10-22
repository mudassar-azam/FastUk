<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tradingaccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'contact_name',
        'trading_address',
        'email',
        'phone',
        'invoice_address',
        'account_email',
        'account_phone',
        'company_number',
        'vat_number',
        'payment_terms',
        'date',
        'name_position',
    ];
}
