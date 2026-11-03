<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>
 

    <a class="btn btn-primary my-2 py-2" href="{{ route('film.index') }}">kembali</a>

    <form action="{{ route('film.update', $film->id) }}" method="POST" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror"
                value="{{ old('judul', $film->judul) }}" placeholder="Masukkan judul film">
            @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" id="genre" name="genre"
                class="form-control @error('genre') is-invalid @enderror" value="{{ old('genre', $film->genre)  }}"
                placeholder="Contoh: Aksi, Drama">
            @error('genre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sutradara" class="form-label">Sutradara</label>
            <input type="text" id="sutradara" name="sutradara"
                class="form-control @error('sutradara') is-invalid @enderror" value="{{ old('sutradara', $film->sutradara) }}"
                placeholder="Masukkan nama sutradara">
            @error('sutradara')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="tahun_rilis" class="form-label">Tahun Rilis</label>
                <input type="number" id="tahun_rilis" name="tahun_rilis"
                    class="form-control @error('tahun_rilis') is-invalid @enderror" value="{{ old('tahun_rilis', $film->tahun_rilis) }}"
                    min="1900" max="{{ date('Y') }}" placeholder="{{ date('Y') }}">
                @error('tahun_rilis')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="durasi" class="form-label">Durasi (menit)</label>
                <div class="input-group has-validation">
                    <input type="number" id="durasi" name="durasi"
                        class="form-control @error('durasi') is-invalid @enderror" value="{{ old('durasi', $film->durasi) }}"
                        min="1" max="600" placeholder="120">
                    <span class="input-group-text">menit</span>
                    @error('durasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</x-app>

