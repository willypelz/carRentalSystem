<?php

namespace App\Http\Controllers\Modules\Home;

use App\Models\Car;
use App\Models\Uploaded_car;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');

    }
    public function home()
    {
        return view('welcome');

    }

    public function uploadImage(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $token = '42c9da31310a7f918971ccc024132d016917b8ea';
        $url = "https://api.platerecognizer.com/v1/plate-reader/";
        $curl = curl_init();
        // Create a CURLFile object
//        echo $request->uploadImage;
           $file = $request->uploadImage;
           $extension = $file->getClientOriginalExtension();

        $cfile = new \CURLFile($file, "image/$extension", 'test_name');
        $data = array('upload' => $cfile);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "accept: */*",
                "accept-language: en-US,en;q=0.8",
                "Authorization: Token $token",
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            $msg =  "Car details not valid";

        } else {
               $response = json_decode($response, false);
             $result =  $response->results[0]->plate;

             if ($result != '') {
                 $car = Car::where('plate_number', $result)->first();
                 if($car != '') {
                     try {
                         $uploaded_car = Uploaded_car::create([
                             'user_id' => $user->id,
                             'car_id' => $car->id,
                             'plate_number' => $result,
                             'rent_price' => $request->rent_price,
                             'location' => $request->location,
                             'status' => 'Available',
                         ]);

                         $msg = 'Car registered successfully';
                     }
                     catch (QueryException $e){
                        $msg = 'Error!. Kindly check the plate number uploaded it has been registered.';
                     }

                 }
             }

             $msg = 'This plate number is not a Registered/valid plate number';

        }
           \Session::flash('message', $msg);
        return view('admin.user_upload_vehicle');



    }


    public function aboutUs()
    {
        return view('home.about-us');

    }

    public function showCars(Request $request)
    {
        return view('home.cars');

    }

    public function contact(Request $request)
    {
        return view('home.contact');

    }

    public function showSingleCar(Request $request, $id)
    {
        return view('home.cardetails');

    }

    public function service(Request $request)
    {
        return view('home.service');

    }

    public function faq()
    {
        return view('home.faq');

    }
    public  function uploadVehicle()
    {
        return view('admin.user_upload_vehicle');
    }


}
