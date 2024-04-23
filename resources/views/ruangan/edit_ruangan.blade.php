@extends('loyauts.main')

@section('container')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-dark">
                <h1 class="text-start mb-0">Edit Ruangan</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('ruangan.ubah', $ruangan->id_ruangan) }}" method="POST" class="row g-3">
                    @method('put')
                    @csrf
                    <!-- Nama Tipe -->
                    <div class="col-md-12">
                        <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                        <div class="input-group">
                            <input type="text" name="nama_ruangan" class="form-control" id="nama_ruangan"
                                value="{{ $ruangan->nama_ruangan }}" required>
                        </div>
                        @error('nama_ruangan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Tombol Simpan -->
                    <div class="col-md-12">
                        <div class="d-grid gap-2 d-md-block text-start ">
                            <button class="btn btn-primary btn-md text-start" type="submit" name="submit"
                                value="Save">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
