@extends('base')

@section('content')
   <x-student_data :n="$name" :m="$mobile_phone_number" :c="$city" :e="$email"/> 
@endsection