<?php

namespace App\Http\Controllers\Modules\Admin;

use App\Models\Car;
use App\Models\CarRent;
use App\Models\Payment;
use App\Models\Uploaded_car;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function addCar()
    {
        return view('admin.add_vehicle');

    }

    public function saveCar(Request $request)
    {
        try {
            $cars = Car::create($request->all());
            $addCarMsg = 'Car Successfully Added';

        }
        catch (QueryException $e)
        {
            $addCarMsg = 'Error car already exist';
        }
        \Session::flash('message', $addCarMsg);
        return $cars;
    }

    public function edit()
    {

    }

    public function delete()
    {

    }

    public function editCar()
    {

    }

    public function manageCar(User $user)
    {
        $user = User::find(auth()->user()->id);
        if ($user->isAdmin == 0) {
            $cars = Uploaded_car::where('user_id', $user->id)->get();
        } else {
            $cars = Uploaded_car::all();
        }
        return view('admin.manage_vehicle', compact('cars'));

    }

    public function carDetails()
    {

    }

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.manage_user', compact('users'));

    }

    public function userDetails()
    {

    }

    public function managePayment()
    {
        $user = User::find(auth()->user()->id);
        if ($user->isAdmin == 0) {
            $rents = CarRent::where('user_id', $user->id)->get();
        } else {
            $rents = CarRent::all();
        }
        return view('admin.manage_payment', compact('rents'));

    }

    public function paymetDetails()
    {

    }


}
