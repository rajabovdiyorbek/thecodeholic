<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Number;
use function Laravel\Prompts\number;

class SumController extends Controller
{
    public function sum(float $a, float $b) {
        return $a + $b;
    }
    public function subtract(float $a, float $b) {
        return $a - $b;
    }
}
