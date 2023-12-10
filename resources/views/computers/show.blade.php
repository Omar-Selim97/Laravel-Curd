@extends('layout')
@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="flex justify-center">
     <h1> Computers </h1>
    </div>
    <div class="p-6">



         <p>{{$computer['name']}} Is From {{$computer['origin']}} - <strong> {{$computer['price']}} </strong> $ </p>

        <div>
            <a class="edit-button" href="{{route('computers.edit',$computer->id)}}">edit</a>
            <form action="{{route('computers.destroy',$computer->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="delete-button" value="Delete">
            </form>

        </div>

</div>

@endsection
@section('title',"Show computers")
