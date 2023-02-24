<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Spatie\LaravelIgnition\Recorders\QueryRecorder\Query;

class SportController extends Controller
{
    public function Index()
    {

        return view('welcome');
    }

    public function calendario()
    {
        $json = Events::all()->toJson();

        return view('calendario', ['json' => $json]);
    }

    public function store(Request $request)
    {
        
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->repetir == 1) {



            $data += [
                'startRecur' => $request->start,
                'endRecur' => $request->end,
                'daysOfWeek' => $request->daysOfWeek,
            ];

            Events::create($data);
        } else {
            $data +=
                [
                    'start' => $request->start,
                    'end' => $request->end,
                ];
            Events::create($data);
        }




        return redirect('/calendario');
    }
}
