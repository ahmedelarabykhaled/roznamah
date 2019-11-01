<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Day;
use App\Models\AlDor;
use App\Models\AlFajr;
use App\Models\AlTala;
use App\Models\Date;
use App\Models\Star;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Date::with('day','aldor','star','alfajr','altala')->get();
        return view('admin.day.index',compact('dates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.day.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'day_duration' => 'required',
            'day_from' => 'required',
            'day_number' => 'required',
            'date' => 'required',
            'season' => 'required',
            'aldr' => 'required',
            'aldr_duration' => 'required',
            'star' => 'required',
            'star_from' => 'required',
            'star_duration' => 'required',
            'altal' => 'required',
            'altal_from' => 'required',
            'altal_duration' => 'required',
            'alfajr' => 'required',
            'alfajr_from' => 'required',
            'alfajr_duration' => 'required',
        ]);

        $day = new Day;
        $day->number = $request->day_number;
        $day->from = $request->day_from;
        $day->duration = $request->day_duration;
        $day_return = $day->save();
        if ($day_return) {
            echo "the day had successfully saved";
        }

        $aldor = new AlDor;
        $aldor->number = $request->aldr;
        $aldor->from = $request->aldr_from;
        $aldor->duration = $request->aldr_duration;
        $aldor_return = $aldor->save();
        if ($aldor_return) {
            echo "the al dor had successfully saved";
        }

        $alfajr = new AlFajr;
        $alfajr->number = $request->alfajr;
        $alfajr->from = $request->alfajr_from;
        $alfajr->duration = $request->alfajr_duration;
        $alfajr_return = $alfajr->save();
        if ($alfajr_return) {
            echo "the alfajr had successfully saved";
        }

        $altala = new AlTala;
        $altala->number = $request->altal;
        $altala->from = $request->altal_from;
        $altala->duration = $request->altal_duration;
        $AlTala_return = $altala->save();
        if ($AlTala_return) {
            echo "the AlTala had successfully saved";
        }

        $star = new Star;
        $star->number = $request->star;
        $star->from = $request->star_from;
        $star->duration = $request->star_duration;
        $star_return = $star->save();
        if ($star_return) {
            echo "the star had successfully saved";
        }

        $date = new Date;
        $date->date = $request->date;
        $date->season = $request->season;
        $date->day_id = $day->id;
        $date->al_dors_id = $aldor->id;
        $date->stars_id = $star->id;
        $date->al_talas_id = $altala->id;
        $date->al_fajrs_id = $alfajr->id;
        $date->save();

        echo "the date had been saved";

        return back()->with('message','تم اضافه يوم جديد بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $date = Date::where('id',$id)->with('day','aldor','star','alfajr','altala')->get();
        return view('admin.day.form',compact('date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $date = Date::find($id);

        Date::find($id)->update([
            'date' => $request->date,
            'season' => $request->season
        ]);

        $day = Day::find($date->day_id)->update([
            'number' => $request->day_number,
            'from' => $request->day_from,
            'duration' => $request->day_duration
        ]);

        $aldor = AlDor::find($date->al_dors_id)->update([
            'number' => $request->aldr,
            'from' => $request->aldr_from,
            'duration' => $request->aldr_duration
        ]);

        $alfajr = AlFajr::find($date->al_fajrs_id)->update([
            'number' => $request->alfajr,
            'from' => $request->alfajr_from,
            'duration' => $request->alfajr_duration
        ]);

        $altala = AlTala::find($date->al_talas_id)->update([
            'number' => $request->altal,
            'from' => $request->altal_from,
            'duration' => $request->altal_duration
        ]);

        $star = Star::find($date->stars_id)->update([
            'number' => $request->star,
            'from' => $request->star_from,
            'duration' => $request->star_duration
        ]);

        return back()->with('message','تم تعديل اليوم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Date::find($id)->delete();
        return back()->with('message','تم حذف اليوم بنجاح');
    }
}
