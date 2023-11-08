<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Appointment as ResourcesAppointment;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Validator;

class AppointmentController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->user()->id;

        $appointment = Appointment::where("user_id", $userId)->latest()->get();
        return $this->sendResponse(ResourcesAppointment::collection($appointment), 'Posts fetched.');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'tanggal' => 'required',
            'jam' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        // Get the authenticated user's ID and name
        $userId = auth()->user()->id;
        $userName = auth()->user()->name;

        // Add user ID and name to the input data
        $input['user_id'] = $userId;
        $blog = Appointment::create($input);
        return $this->sendResponse(new ResourcesAppointment($blog), 'Post created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
