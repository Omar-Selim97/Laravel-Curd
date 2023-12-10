@extends('layout')
@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <h1> Create Computers </h1>
        </div>
        <div>
            <form action="{{ route('computers.store') }}" method="post">
                @csrf
                <div>
                    <label for="computer-name" class="text-sm">Computer-name</label>
                    <input type="text" class="text-large border-1" id="computer-name"  value="{{old('computer-name')}}" name="computer-name">
                    @error('computer-name')

                        <div class="form-error">
                            {{ $message }}
                        </div>

                    @enderror
                </div>
                <div>
                    <label for="computer-origin" class="text-sm">computer-origin</label>
                    <input type="text" class="text-large border-1" id="computer-origin" value="{{old('computer-origin')}}" name="computer-origin">
                    @error('computer-origin')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label for="computer-price" class="text-sm">computer-price</label>
                    <input type="text" class="text-large border-1" id="computer-price"  value="{{old('computer-price')}}" name="computer-price">
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
