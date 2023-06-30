<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class BookAppointment extends Model implements Auditable
{
    use HasFactory, SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        "appointment_services",
        "appointment_date",
        "appointment_time",
        "enquiry_from",
        "enquiry_from_ip",
        "name",
        "email",
        "mobile_no",
        "message",
        "status",
        "doctor_name",
        "doctor_id"
    ];
  
}
