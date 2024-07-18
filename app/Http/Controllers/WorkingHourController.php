<?php

namespace App\Http\Controllers;

use App\Models\WorkingHour;

class WorkingHourController extends Controller
{
    public function getTotalHours()
    {
        // Calculate total hours worked
        $totalHours = WorkingHour::calculateTotalHours();

        // Now you can use $totalHours as per your requirement
        return "Total hours worked: " . $totalHours;
    }
}
