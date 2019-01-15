<?php

namespace App\Http\Controllers;
use App\User;
use App\users;
use Spatie\Activitylog\Models\Activity;

class DummyController extends Controller
{
    public function __construct()
    {

    }

    public function activity()
    {
        $activity = Activity::all();
        return view('activity', compact('activity'));
    }



    public function log()
    {
        activity()->log('Look, I logged something ok');
        return view('log', compact('log'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function performedOn()
    {
        $User = new User();
        activity()->performedOn($User)->log('perform');
        return view('performedOn', compact('updated_at'));
    }

    public function properties()
    {
        activity()->withProperties(['customProperty' => 'customValue'])->log('Property Added');
        //dd($activity);
        return view('property', compact('Property'));
    }

    public function causedby()
    {
        $user = new User();
        activity()->causedBy($user)->log('User');
      //  $activity = Activity::all();
        return view('caused', compact('activity'));
    }


}
