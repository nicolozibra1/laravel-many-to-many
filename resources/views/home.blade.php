@extends('layouts.app')
@section('content')

{{-- LANDING-PAGE --}}
<div class="background">
    <svg id="my-svg" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'><rect fill='#262626' width='2000' height='1500'/><defs><path fill='none' stroke-width='1' stroke-opacity='1' id='a' d='M0.74-509.63l485.39 352.65l-185.4 570.61h-599.97l-185.4-570.61L0.74-509.63 M0.74-510.87l-486.56 353.51l185.85 571.99h601.42L487.3-157.36L0.74-510.87L0.74-510.87z'/></defs><g  transform='scale(0.1)' style='transform-origin:center'><g  transform='' style='transform-origin:center'><g  transform='rotate(-160 0 0)' style='transform-origin:center'><g transform='translate(1000 750)'><use  stroke='#262626' href='#a' transform='rotate(10 0 0) scale(1.1)'/><use  stroke='#232934' href='#a' transform='rotate(20 0 0) scale(1.2)'/><use  stroke='#212d43' href='#a' transform='rotate(30 0 0) scale(1.3)'/><use  stroke='#1e3051' href='#a' transform='rotate(40 0 0) scale(1.4)'/><use  stroke='#1c3460' href='#a' transform='rotate(50 0 0) scale(1.5)'/><use  stroke='#19376e' href='#a' transform='rotate(60 0 0) scale(1.6)'/><use  stroke='#173b7d' href='#a' transform='rotate(70 0 0) scale(1.7)'/><use  stroke='#143e8b' href='#a' transform='rotate(80 0 0) scale(1.8)'/><use  stroke='#12429a' href='#a' transform='rotate(90 0 0) scale(1.9)'/><use  stroke='#0f45a8' href='#a' transform='rotate(100 0 0) scale(2)'/><use  stroke='#0d49b7' href='#a' transform='rotate(110 0 0) scale(2.1)'/><use  stroke='#0a4cc5' href='#a' transform='rotate(120 0 0) scale(2.2)'/><use  stroke='#0850d4' href='#a' transform='rotate(130 0 0) scale(2.3)'/><use  stroke='#0553e2' href='#a' transform='rotate(140 0 0) scale(2.4)'/><use  stroke='#0357f1' href='#a' transform='rotate(150 0 0) scale(2.5)'/><use  stroke='#005AFF' href='#a' transform='rotate(160 0 0) scale(2.6)'/></g></g></g></g></svg>
</div>
<div class="main-content" id="main-content">
    <div id="title" class="title h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="welcome" id="welcome">Welcome</h1>
        <div class="waviy" id="waviy">
            <span style="--i:1">i</span>
            <span style="--i:2" class="pe-3">n</span>
            <span style="--i:3">m</span>
            <span style="--i:4" class="pe-3">y</span>
            <span style="--i:5">p</span>
            <span style="--i:6">o</span>
            <span style="--i:7">r</span>
            <span style="--i:8">t</span>
            <span style="--i:9">f</span>
            <span style="--i:10">o</span>
            <span style="--i:11">l</span>
            <span style="--i:12">i</span>
            <span style="--i:13">o</span>
        </div>
        <div class="box-button d-flex flex-column gap-5">
            <button style="--clr:#1065b4" class="about-me opacity-0"><span>about me</span><i></i></button>
        </div>
    </div>
</div>
@endsection
