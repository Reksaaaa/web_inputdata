@extends('loyauts.main')

@section('container')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-dark">
                <h1 class="text-start mb-0">Input SSID</h1>
            </div>
            <div class="card-body">
                <form action="" method="POST" class="row g-3">
                    {{-- {{ route('ssid.save') }} --}}
                    @csrf
                    <!-- Nama Tipe -->
                    <div class="col-md-12">
                        <label for="upload" class="form-label">Nama SSID</label>
                        <div class="input-group">
                            <input type="text" name="nama_ssid" class="form-control" id="nama_ssid" required>
                        </div>
                        {{-- @error('nama_ssid')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <!-- Tombol Simpan -->
                    <div class="col-md-12">
                        <div class="d-grid gap-2 d-md-block text-start ">
                            <button class="btn btn-primary btn-md text-start" type="submit" name="submit"
                                value="Save">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
