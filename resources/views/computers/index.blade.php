@extends('layout')
@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <h1> Computers </h1>
        </div>
        <div class="p-6">
            @if (count($computers) > 0)


                <ul>
                    @foreach ($computers as $computer)
                        <a href="{{route('computers.show',['computer'=> $computer['id']])}}">
                            <li>

                               {{$computer['name']}} Is From {{$computer['origin']}} - <strong> {{$computer['price']}} $</strong>

                            </li>
                        </a>
                    @endforeach
                </ul>
            @else
                <p>There no Computers to Display</p>
            @endif
        </div>

    </div>

@endsection
@section('title', 'Computers')
