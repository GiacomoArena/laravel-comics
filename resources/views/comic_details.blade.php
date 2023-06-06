@php
    $comics = config('comics');
@endphp

@extends('layout.main')

@section('content')
    <section class="comic">
        <div class="dividingline">
            <img class="comic-img " src="{{ $comic['thumb'] }}" alt="">
        </div>
        <div class="container d-flex">

            <div class="description-side">
                <h2>{{ $comic['title'] }}</h2>

                <div class="d-flex">
                    <span class="d-flex ">
                        US. Price: <h6>{{ $comic['price'] }}</h6>
                        AVAILABLE
                    </span>
                    <span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Check Availability</option>
                            <option value="1">AVAILABLE</option>
                        </select>
                    </span>
                </div>
                <span>
                    <p>{{ $comic['description'] }}</p>
                </span>
            </div>

            <div class="advertisment">
                <h4>ADVERTISMENT</h4>
                <img src="/img/adv.jpg" alt="">
            </div>

        </div>
    </section>
@endsection
