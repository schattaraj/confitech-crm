<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class WorkingHour extends Model
{
    protected $table = 'working_hours';
     // Method to calculate total hours worked

     public static function calculateTotalHours()
     {
          // Get the current time
          $currentTime = Carbon::now();
         // Retrieve start time and end time
        //  $workingHours = self::all(); // Retrieve all records from the working_hours table
        $workingHour = self::where('name','normal')->first();
         // Initialize total hours
         $totalHours = 0;
    //   $startTime = new \DateTime($workingHours->start_time);
    //          $endTime = new \DateTime($workingHours->end_time);
 
    //          // Calculate difference in hours
    //          $interval = $startTime->diff($endTime);
    //          $hours = $interval->h; // Get hours from the interval
 
    //          // Add hours to total
    //          $totalHours += $hours;
         // Calculate total hours
        //  foreach ($workingHours as $record) {
        //      // Convert start time and end time to DateTime objects
        //      $startTime = new \DateTime($record->start_time);
        //      $endTime = new \DateTime($record->end_time);
 
        //      // Calculate difference in hours
        //      $interval = $startTime->diff($endTime);
        //      $hours = $interval->h; // Get hours from the interval
 
        //      // Add hours to total
        //      $totalHours += $hours;
        //  }

        // $startTime = Carbon::parse($workingHour->start_time);
        // $endTime = Carbon::parse($workingHour->end_time);
         // Define start time and end time manually
         $startTime = Carbon::parse('2024-02-04 00:00:00'); // Example: 8:00 AM
         $endTime = Carbon::parse('2024-02-05 17:00:00'); // Example: 5:00 PM

        // Calculate the difference between current time and start time
        $differenceWithStartTime = $currentTime->diff($startTime)->format('%h hours %i minutes');

        // Calculate the difference between current time and end time
        $differenceWithEndTime = $currentTime->diff($endTime)->format('%h hours %i minutes');

        return "Difference with start time: $differenceWithStartTime, Difference with end time: $differenceWithEndTime";

         return $workingHours;
         return $totalHours;
     }
}