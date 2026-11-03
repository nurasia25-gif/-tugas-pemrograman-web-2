<x-app>

    <x-slot:title>
        {{ $title }}

</x-slot:title>

<a class="btn btn-primary my-2 py-2" href="{{ route('film.create') }}
">Tambah Data Film</a>

<table class="table table-bordered border-dark table-hover">
        <thead>

            <tr>
                <th>No</th>
                <th>judul</th>
                <th>genre</th>
                <th>sutradara</th>
                <th>tahun_rilis</th>
                <th>durasi</th>
                <th>aksi</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $film->judul }}</td>
                    <td>{{ $film->genre }}</td>
                    <td>{{ $film->sutradara }}</td>
                    <td>{{ $film->tahun_rilis }}</td>
                    <td>{{ $film->durasi }} menit</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('film.show', $film->id) }}
                            ">show</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>


</x-app>
