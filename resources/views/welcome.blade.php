@extends('layout')

@section('content')
    <div class="p-16">
    <span>
        <p class="p-2 text-center text-white text-white text-xl">A new pokemon tournament is coming soon and you must create a strong team to try to excel at the competition!</p>
    </span>
    <span>
        <a href="{{ url('/team/create') }}" class="border bg-blue-800 hover:bg-blue-900 text-white p-4 m-2 font-bold rounded">Create Team</a>
        <a href="{{ url('/team/list') }}" class="border bg-blue-800 hover:bg-blue-900 text-white p-4 m-2 font-bold rounded">Team Listing</a>
    </span>
    <span>
        @if(isset($msg))
            <p class="mt-8 ml-2 text-white">{{$msg}}</p>
        @endif
    </span>
    </div>
@endsection
