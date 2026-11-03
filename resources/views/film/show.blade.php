<x-app>

    <x-slot:title>
        {{ $title }}

</x-slot:title>
<a class="btn btn-primary my-2 py-2" href="{{ route('film.index') }}
">kembali</a>

<div class="card">
        <div class="card-body">
            <h5 class="card-title">Film</h5>
            <p class="card-text"><strong>judul:</strong> {{ $film->judul }}</p>
            <p class="card-text"><strong>genre:</strong> {{ $film->genre }}</p>
            <p class="card-text"><strong>sutradara:</strong> {{ $film->sutradara }}</p>
            <p class="card-text"><strong>tahun_rilis:</strong> {{ $film->tahun_rilis }}</p>
            <p class="card-text"><strong>durasi:</strong> {{ $film->durasi }}</p>
        </div>
    </div>
</x-app>
