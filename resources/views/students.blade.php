@extends('base')

@section('content')

    <div class="container">
        @foreach ($students as $item)
            <a href="/{{$item['name']}}?id={{$item['id']}}">
                {{$item['id']}} - {{$item['name']}} - {{$item['city']}} - {{$item['mobile_phone_number']}} - {{$item['email']}}
            </a>
            <br>
        @endforeach
    </div>
    
@endsection