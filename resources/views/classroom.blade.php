@extends('layouts.mainlayout')
@section('title', 'Class')

@section('content')
    <h2 id="accented-tables">Class List <a class="anchor-link mt-1" href="#accented-tables" aria-label="Link to this section: Accented tables"></a></h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

