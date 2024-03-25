@extends('loyauts.main')

@section('container')
    {{-- Search --}}
    <form class="d-flex align-items-center" role="search">
        <div class="col-md-5">
            <input class="form-control custom-search-input me-1" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-md-1">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
        <div class="col-md-1">
            {{-- Print --}}
            <a href="/cetak" target="_blank" class="btn btn-primary"> <i class="bi bi-printer"></i>Cetak</a>
        </div>
        <div class="col-md-1">
            {{-- Print --}}
            <input  type="date" aria-label="date">
        </div>
    </form>
    



    {{-- Tabel Perangkat --}}
    <div class="table-responsive mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Nama Perangkat</th>
                    <th scope="col">Tipe Perangkat</th>
                    <th scope="col">SSID</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Download</th>
                    <th scope="col">Uploud</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cek as $c)
                    <tr>
                    <th scope="row">{{ $c->id }}</th>
                    <td>{{ $c->nama }}</td>
                    <td>{{ $c->tipe_perangkat }}</td>
                    <td>{{ $c->ssid }}</td>
                    <td>{{ $c->ruangan }}</td>
                    <td>{{ $c->divisi }}</td>
                    <td>{{ $c->status }}</td>
                    <td>{{ $c->upload }}</td>
                    <td>{{ $c->download }}</td>
                    <td>{{ $c->keterangan }}</td>
                    <td>

                        {{-- Edit --}}
                        <a href="/data"><button type="button" class="btn btn-warning"><i
                                    class="bi bi-pencil-fill"></i></button> </a>
                        {{-- Delete --}}
                        <a href="/"><button type="button" class="btn btn-warning"><i
                                    class="bi bi-trash3"></i></button></a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
