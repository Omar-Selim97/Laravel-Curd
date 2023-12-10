@extends('layout')
@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <h1> Edit An Old Computers </h1>
        </div>
        <div>
            <form action="{{ route('computers.update',['computer'=>$computer->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="computer-name" class="text-sm">Computer-name</label>
                    <input type="text" class="text-large border-1" id="computer-name"  value="{{$computer->name}}" name="computer-name">
                    @error('computer-name')

                        <div class="form-error">
                            {{ $message }}
                        </div>

                    @enderror
                </div>
                <div>
                    <label for="computer-origin" class="text-sm">computer-origin</label>
                    <input type="text" class="text-large border-1" id="computer-origin" value="{{$computer->origin}}" name="computer-origin">
                    @error('computer-origin')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="computer-price" class="text-sm">computer-price</label>
                    <input type="text" class="text-large border-1" id="computer-price"  value="{{$computer->price}}" name="computer-price">
                    @error('computer-price')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>

    @endsection
    @section('title', 'Create computers')
