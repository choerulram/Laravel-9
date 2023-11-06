@extends('layouts.mainlayout')
@section('title', 'Students')

@section('content')
    <h1>Ini Halaman Student</h1>
    <ol>
        @foreach ($studentList as $data)
            <li>
                {{ $data->name }} | {{ $data->gender }} | {{ $data->nis }}
            </li>
        @endforeach
    </ol>
@endsection

