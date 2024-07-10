<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BookingRent;
use App\Models\ServiceInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontendPagesController extends Controller
{
    public function home(){
        return view('Frontend.pages.home');
    }

    public function about(){
        return view('Frontend.pages.about');
    }

    public function service(){

        return view('Frontend.pages.service.service');
    }


    public function limousineservice(){
        return view('Frontend.pages.service.airport-transfer');
    }
    public function airporttransfer(){
        return view('Frontend.pages.service.airport-transfer');
    }
    public function chauffeurservice(){
        return view('Frontend.pages.service.airport-transfer');
    }
    public function eventservice(){
        return view('Frontend.pages.service.airport-transfer');
    }
    public function courierservice(){
        return view('Frontend.pages.service.airport-transfer');
    }
    public function roadshows(){
        return view('Frontend.pages.service.airport-transfer');
    }







    public function cars(){
        return view('Frontend.pages.car.cars');
    }




    public function S5002023(){
        return view('Frontend.pages.car.S5002023model');
    }
    public function S3502016(){
        return view('Frontend.pages.car.S3502016');
    }
    public function v350d(){
        return view('Frontend.pages.car.v350d');
    }
    public function v350dbaige(){
        return view('Frontend.pages.car.v350dbaige');
    }
    public function Sprinter2023(){
        return view('Frontend.pages.car.sprinter2023');
    }
    public function mercedesglc(){
        return view('Frontend.pages.car.glc');
    }
    public function busses(){
        return view('Frontend.pages.car.bus');
    }






    public function contact(){
        return view('Frontend.pages.contact');
    }

    public function carsrentel(Request $request){


        // dd($request->all());
        // print_r($request->all());
        // die;
    	$data=new BookingRent();
    	$data->name= $request->name;
    	$data->email= $request->email;
    	$data->phone= $request->phone;
        $data->trippriod = $request->period;
        $data->cartype = $request->cartype;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->passengers = $request->passengers;
    	$data->message = $request->message;
        $data->save();
        return Redirect()->back();
    }


    public function servicesave(Request $request){


        // dd($request->all());
        // print_r($request->all());
        // die;
    	$data=new  ServiceInfo();
    	$data->name= $request->name;
    	$data->email= $request->email;
    	$data->phone= $request->phone;
        $data->trippriod = $request->period;
        $data->servicetype = $request->cartype;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->passengers = $request->passengers;
    	$data->message = $request->message;
        $data->save();
        return Redirect()->back();
    }
    public function carsrentel1(Request $request){


        dd($request->all());
        print_r($request->all());
        die;
    	$data=new BookingRent();
    	$data->name= $request->name;
    	$data->email= $request->email;
    	$data->phone= $request->phone;
        $data->choosecartype = $request->choosecartype;
        $data->pickuplocation = $request->pickuplocation;
        $data->pickupdate = $request->pickupdate;
        $data->dropofflocation = $request->dropofflocation;
        $data->returndate = $request->returndate;
    	$data->additionalnote = $request->additionalnote;
        $data->save();
        // return view('Frontend.pages.car.car-details');
        return Redirect()->back();

    }
}
