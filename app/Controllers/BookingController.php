<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BookingController extends BaseController
{
    public function index()
    {
        return view('booking_table');
    }
}
