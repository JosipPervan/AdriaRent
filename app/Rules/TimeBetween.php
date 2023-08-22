<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure  $fail
     * @return void
     */
    public function validate($attribute, $value, $fail): void
    {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);
        $earliestTime = Carbon::createFromTimeString('09:00:00');
        $lastTime = Carbon::createFromTimeString('19:00:00');

        if(!($pickupTime->between($earliestTime, $lastTime)))
        {
            $fail("Please choose the time between 09:00-19:00.");
        }
    }


}
