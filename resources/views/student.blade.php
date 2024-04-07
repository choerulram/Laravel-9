@extends('layouts.mainlayout')
@section('title', 'Students')

@section('content')
    <h2 id="accented-tables">Student List<a class="anchor-link mt-1" href="#accented-tables" aria-label="Link to this section: Accented tables"></a></h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">NIM</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentsList as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->nis }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

