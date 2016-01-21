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
        $this->pathToJson = public_path().'/json/timer.json';
    }

    function index(){
        $ts = null;
        $json = json_decode(file_get_contents($this->pathToJson),TRUE);
        if(isset($json['timer']['timestamp'])){
            $ts = $json['timer']['timestamp'];
            $date = Carbon::createFromTimestamp($ts);
        } else {
            $date = Carbon::now();
        }
        return view('admin.others.index',compact('date'));
    }

    function updateTimer(Request $request){
        $result = $request->all();
        $date = Carbon::createFromFormat('Y-m-d H:i',$result['date'].' '.$result['time']);

        // TEST POUR AFFICHER LE COMPTE A REBOURT

        // $now = Carbon::now();
        // $diffMonth = $date->diffInMonths($now);
        // $diffDays = $date->diffInDays($now->addMonths($diffMonth));
        // $diffHours = $date->diffInHours($now->addDays($diffDays));
        // $diffMinutes = $date->diffInMinutes($now->addHours($diffHours));
        // $diffSeconds = $date->diffInSeconds($now->addMinutes($diffMinutes));
        $json = json_decode(file_get_contents($this->pathToJson),TRUE);
        $json['timer'] = array('timestamp' => $date->timestamp);
        file_put_contents($this->pathToJson, json_encode($json,TRUE));

        return redirect('admin/others');
    }
}
