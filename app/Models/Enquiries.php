<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Enquiries extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        "name",
        "type",
        "enquiry_from",
        "email",
        "moble_no",
        "subject",
        "message",
        "service_id",
        "services",
        "status",
        "enquiry_status"
    ];
}