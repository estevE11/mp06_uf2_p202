<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller {

    protected function sum($num1, $num2) {
        return view('calculadora', ['result' => $num1 . ' + ' . $num2 . ' = ' . ($num1 + $num2)]);
    }
    protected function subs($num1, $num2) {
        return view('calculadora', ['result' => $num1 . ' - ' . $num2 . ' = ' . ($num1 - $num2)]);
    }
    protected function mult($num1, $num2) {
        return view('calculadora', ['result' => $num1 . ' * ' . $num2 . ' = ' . ($num1 * $num2)]);
    }
    protected function divide($num1, $num2) {
        return view('calculadora', ['result' => $num1 . ' / ' . $num2 . ' = ' . ($num1 / $num2)]);
    }

}
