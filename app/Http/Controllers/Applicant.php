<?php

namespace App\Http\Controllers;

use App\Models\Functional;
use App\Models\Industrial;
use App\Models\Special;
use App\Models\Employer;
use App\Models\Country;

abstract class Applicant
{
    public $data = [];

    public function __construct()
    {
        $functionals = Functional::all();
        $industrials = Industrial::all();
        $specials = Special::all();
        $employers = Employer::all();
        $countries = Country::all();
        $this->data["functionals"] = $functionals;
        $this->data["industrials"] = $industrials;
        $this->data["specials"] = $specials;
        $this->data["employers"] = $employers;
        $this->data["countries"] = $countries;
    }
}
