@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <ul>
            @foreach($pictures as $picture)
                <li>
                    <a href="/pictures/{{$picture->id}}">
                        {{$picture->description}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
