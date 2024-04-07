@extends('layouts.mainlayout')
@section('title', 'Home')

@section('content')
    <h2 id="accented-tables">Fruit List<a class="anchor-link mt-1" href="#accented-tables" aria-label="Link to this section: Accented tables"></a></h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buah as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h2 id="accented-tables">Selamat datang, {{ $name }}. Anda adalah {{ $role }}<a class="anchor-link mt-1" href="#accented-tables" aria-label="Link to this section: Accented tables"></a></h2>
@endsection

