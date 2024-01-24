@extends('layouts.app')
@include("layouts.header")

<main class="bg-yellow-500 flex justify-center">

    @php
    @endphp

    <form class="w-1/3 flex-col flex place-items-center space-y-2" method="post" action="{{route("form")}}">
        @csrf
        <div class="label-input-div">
            <label class="" for="name">Name</label>
            <input class="" type="text" id="name" name="name" value="{{$_GET['name'] ?? ''}}">
        </div>

        <div class="label-input-div">
            <label class="" for="surname">Surname</label>
            <input class="" type="text" id="surname" name="surname" value="{{$_GET['surname'] ?? ''}}">
        </div>

        <div class="label-input-div">
            <label class="" for="age">Age</label>
            <input class="" type="text" id="age" name="age" value="{{$_GET['age'] ?? ''}}">
        </div>

        <button class="submit-button">Send</button>
    </form>
</main>

@include("layouts.footer")

