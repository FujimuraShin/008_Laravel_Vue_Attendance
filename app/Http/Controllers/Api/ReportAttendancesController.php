<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportAttendancesController extends Controller
{
    //
    public function update(Attendance $attendane)
    {
        $attendance -> flag();

        return new AttendanceResource($attendance);
    }
}
