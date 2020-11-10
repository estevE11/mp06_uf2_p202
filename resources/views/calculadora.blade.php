
@extends('layouts.master')

@section('title', 'Inici')

@section('header')
<h1>Calculadora</h1>
@endsection

@section('content')
    <h1>{{$result}}</h1>

    <input type="number" id="in_num1">
    <input type="number" id="in_num2">
    <br>
    <button onclick="btnClicked('suma')">+</button>
    <button onclick="btnClicked('resta')">-</button>
    <button onclick="btnClicked('mult')">*</button>
    <button onclick="btnClicked('divisio')">/</button>

@endsection

<script>
    function btnClicked(type) {
        const num_1 = document.getElementById('in_num1').value;
        const num_2 = document.getElementById('in_num2').value;
        window.location.href = "http://p202.test/" + type + "/" + num_1 + "/" + num_2;
    }
</script>