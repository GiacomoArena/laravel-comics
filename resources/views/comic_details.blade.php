@php
    $comics = config('comics');

    $info_menu = config('menu_links.InfoMenu')
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

    <section class="description-comic">
        <div class="container d-flex ">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                </tbody>
            </table>
            <table class="table ms-3">
                <thead>
                    <tr>
                        <th scope="col">First</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <div class="d-flex">
                @foreach ($info_menu as $info)
                <span class="d-flex link-menu">
                    <p>{{$info['menu']}}</p>
                    <a href="#"><img src="{{$info['src']}}" alt="{{$info['menu']}}"></a>
                </span>
                @endforeach
            </div>
        </div>
    </section>
@endsection
