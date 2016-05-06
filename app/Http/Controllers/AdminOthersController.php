<?php

namespace Imac\Http\Controllers;

use Illuminate\Http\Request;

use Imac\Http\Requests;
use Carbon\Carbon;
use Imac\Http\Controllers\Controller;

class AdminOthersController extends Controller
{
    protected $pathToJson;

    function __construct(){
        $this->pathToTimerJson = public_path().'/json/timer.json';
        $this->pathToApplicationJson = public_path().'/json/application.json';
        $this->pathToDisplayOpenning = public_path().'/json/updateDisplayOpenningBanner.json';
    }

    function index(){
        //Timestamp JPO
        $ts = null;
        $date = null;
        $timerJson = json_decode(file_get_contents($this->pathToTimerJson),TRUE);
        if(isset($timerJson['timer']['timestamp'])){
            $ts = $timerJson['timer']['timestamp'];
            $date = Carbon::createFromTimestamp($ts);
        }
        //Application to the school
        $applicationJson = json_decode(file_get_contents($this->pathToApplicationJson),TRUE);
        $application_date = ['openning' => null,'first_session' => null,'second_session' => null,'year' => null];
        if(isset($applicationJson['application']['openning']))
            $application_date['openning'] = $applicationJson['application']['openning'];
        if(isset($applicationJson['application']['first_session']))
            $application_date['first_session'] = $applicationJson['application']['first_session'];
        if(isset($applicationJson['application']['second_session']))
            $application_date['second_session'] = $applicationJson['application']['second_session'];
        if(isset($applicationJson['application']['year']))
            $application_date['year'] = $applicationJson['application']['year'];

        //Boolean DisplayOpenning
        $displayOpenning = false;
        $applicationDisplayOpenning = json_decode(file_get_contents($this->pathToDisplayOpenning),TRUE);
        if(isset($applicationDisplayOpenning["openning-application"]))
            $displayOpenning = $applicationDisplayOpenning["openning-application"];

        return view('admin.others.index',compact('date','application_date','displayOpenning'));
    }

    function updateTimer(Request $request){
        $result = $request->all();
        $date = Carbon::createFromFormat('Y-m-d H:i',$result['date'].' '.$result['time']);
        $json = json_decode(file_get_contents($this->pathToTimerJson),TRUE);
        $json['timer'] = array('timestamp' => $date->timestamp);
        file_put_contents($this->pathToTimerJson, json_encode($json,TRUE));

        return redirect('admin/others');
    }

    function updateApplicationDates(Request $request){
        $result = $request->all();
        $application_date['openning'] = $result['openning'];
        $application_date['first_session'] = $result['first_session'];
        $application_date['second_session'] = $result['second_session'];
        $application_date['year'] = $result['year'];

        $json = json_decode(file_get_contents($this->pathToApplicationJson),TRUE);
        $json['application'] = $application_date;
        file_put_contents($this->pathToApplicationJson,json_encode($json,TRUE));

        return redirect('admin/others');
    }

    function updateDisplayOpenningBanners(Request $request){
        $result = $request->all();
        $json = json_decode(file_get_contents($this->pathToDisplayOpenning),TRUE);
        if(isset($result['openning-application'])){
            if($result['openning-application'] == "on"){
                $json["openning-application"] = true;
            } else {
                $json["openning-application"] = false;
            }
        } else {
            $json["openning-application"] = false;
        }
        file_put_contents($this->pathToDisplayOpenning,json_encode($json),TRUE);
        return redirect('admin/others');
    }
}
