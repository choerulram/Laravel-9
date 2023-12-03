@extends('layouts.mainlayout')
@section('title', 'Class')

@section('content')
    <h1>Ini Halaman Class</h1>
    <h3>Class List</h3>

    <table class="table">
        <thead>
            <tr>
                <td>No.</td>
                <td>Nama</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

