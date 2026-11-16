<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentSchedule extends Model
{
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function paidPaymentSchedules()
    {
        return $this->hasMany(PaidPaymentSchedule::class);
    }


}
