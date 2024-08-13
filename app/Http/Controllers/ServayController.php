<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Background;
use App\Models\Character;
use App\Models\Kid;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ServayController extends Controller
{
    public function index()
    {
        Session::forget('servayDetails');
        return view('index');
    }

    public function stageOneIndex()
    {
        $servayDetails = (object)[];
        if (Session::has('servayDetails')) {
            $servayDetails = Session::get('servayDetails');
        }
        return view('stage-1', compact('servayDetails'));
    }

    public function stageOneSubmit(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:3|max:9',
            'school' => 'required|string|max:255',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', 'Please complete the required details.');
        }

        $servayDetails = (object)[];
        $servayDetails->name = $request->name;
        $servayDetails->age = $request->age;
        $servayDetails->school = $request->school;

        Session::put('servayDetails', $servayDetails);

        return redirect()->route('stage-2');
    }

    public function stageTwoIndex()
    {
        if (Session::has('servayDetails')) {
            $servayDetails = Session::get('servayDetails');
        } else {
            return redirect()->route('stage-1');
        }

        return view('stage-2', compact('servayDetails'));
    }

    public function stageTwoSubmit(Request $request)
    {
        if (!Session::has('servayDetails')) {
            return redirect()->route('stage-1');
        }

        $validator = Validator::make($request->all(), [
            'background' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Please select at least one background image.');
        }

        $servayDetails = Session::get('servayDetails');
        $servayDetails->background = $request->background;
        Session::put('servayDetails', $servayDetails);

        return redirect()->route('stage-3');
    }

    public function stageThreeIndex()
    {
        if (Session::has('servayDetails')) {
            $servayDetails = Session::get('servayDetails');
        } else {
            return redirect()->route('stage-1');
        }

        return view('stage-3', compact('servayDetails'));
    }

    public function stageThreeSubmit(Request $request)
    {
        if (!Session::has('servayDetails')) {
            return redirect()->route('stage-1');
        }

        $validator = Validator::make($request->all(), [
            'character' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Please select at least one character.');
        }

        $servayDetails = Session::get('servayDetails');
        $servayDetails->character = $request->character;
        Session::put('servayDetails', $servayDetails);

        return redirect()->route('stage-4');
    }

    public function stageFourIndex()
    {
        if (Session::has('servayDetails')) {
            $servayDetails = Session::get('servayDetails');
        } else {
            return redirect()->route('stage-1');
        }

        return view('stage-4', compact('servayDetails'));
    }

    public function stageFourSubmit(Request $request)
    {
        if (Session::has('servayDetails')) {
            $servayDetails = Session::get('servayDetails');
        } else {
            return redirect()->route('stage-1');
        }

        $rules = [
            'audio' => 'required|array',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', 'Please select at least one audio clip.');
        }

        $audioSelections = $request->audio;

        $servayDetails->audio = $audioSelections;

        $kid = new Kid();
        $kid->name = $servayDetails->name;
        $kid->age = $servayDetails->age;
        $kid->school = $servayDetails->school;
        $kid->save();

        $backgrounds = new Background();
        $backgrounds->kid_id = $kid->id;
        foreach ($servayDetails->background as $background) {
            $backgrounds->$background = true;
        }
        $backgrounds->save();

        $characters = new Character();
        $characters->kid_id = $kid->id;
        foreach ($servayDetails->character as $character) {
            $characters->$character = true;
        }
        $characters->save();

        $audios = new Audio();
        $audios->kid_id = $kid->id;
        foreach ($servayDetails->audio as $audio) {
            $audios->$audio = true;
        }
        $audios->save();

        Session::forget('servayDetails');

        return redirect()->route('thank-you');
    }

    public function thankYouIndex()
    {
        return view('thank-you');
    }
}
