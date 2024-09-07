<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Background;
use App\Models\Character;
use App\Models\Kid;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKids = Kid::count();

        $columnsBackground = collect(range(0, 9))->mapWithKeys(function ($key) {
            return [$key => Background::where($key, 1)->count()];
        })->sortDesc()->toArray();
        
        $columnsAudio = collect(['bonnie', 'daphne', 'mickey', 'timmy'])->mapWithKeys(function ($key) {
            return [$key => Audio::where($key, 1)->count()];
        })->sortDesc()->toArray();
        
        $columnsCharacter = collect([
            'm1', 'm2', 'm3', 'm4',
            'f1', 'f2', 'f3', 'f4',
            'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8'
        ])->mapWithKeys(function ($key) {
            return [$key => Character::where($key, 1)->count()];
        })->sortDesc()->toArray();

        $kids = Kid::all();

        return view('dashboard', compact('totalKids', 'columnsBackground', 'columnsAudio', 'columnsCharacter', 'kids'));
    }
}
