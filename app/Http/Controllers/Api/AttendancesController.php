<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Attendance;
use App\Http\Resources\AttendanceResource;

class AttendancesController extends Controller
{
    //
    public function index()
    {
        $attendances = Attendance::latest()
            ->ignoreFlagged()
            ->paginate(20);

        return AttendanceResource::collection($attendances);
    }

    public function show(Attendnace $attendance)
    {
        return new AttendanceResource($attendance);
    }

    public function store(Request $request)
    {
        $attendance = $this->validate($request,[
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'body' => 'required|min:3',
        ]);

        $attendance = Attendance::create($attendane);

        return new AttendanceResource($attendance);
    }
}
