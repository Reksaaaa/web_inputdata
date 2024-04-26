@extends('loyauts.main')

@section('container')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="">
                <h4><b>Data Cek</b></h4>
            </div>
            {{-- Search --}}
            <form action="{{ route('cek.filter') }}" method="GET" class="d-flex align-items-center" role="search">
                <input type="hidden" name="export" value="1">
                <div class="col-md-3 me-2">
                    <input class="form-control" type="date" name="start_date" value="{{ request('start_date') }}">
                </div>
                <div class="col-md-3">
                    <input class="form-control" type="date" name="end_date" value="{{ request('end_date') }}">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-funnel-fill"></i> Filter</button>
                </div>
                <div class="col-md-3">
                    {{-- Print --}}
                    <a href="{{ route('cek.export', ['start_date' => request('start_date'), 'end_date' => request('end_date')]) }}"
                        class="btn btn-success"><i class="bi bi-download"></i>
                        Export</a>
                </div>
            </form>
        </div>
        <div class="card-body">
            {{-- Tabel Perangkat --}}
            <div class="table-responsive mt-3">
                <table class="table table-sm text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>NO.</th>
                            <th>Nama Perangkat</th>
                            <th>Tipe Perangkat</th>
                            <th>SSID</th>
                            <th>Ruangan</th>
                            <th>Divisi</th>
                            <th>Status</th>
                            <th>Download</th>
                            <th>Uploud</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($cek as $data) --}}
                        <tr>
                            <th></th>
                            {{-- {{ $realNumber + $loop->iteration }} jangan di hapus --}}
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    {{-- Edit --}}
                                    {{-- {{ route('cek.edit', $data->id) }} --}}
                                    <a href="" class="btn btn-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    {{-- Spasi --}}
                                    <div class="mx-1"></div>
                                    {{-- Delete --}}
                                    {{-- {{ route('cek.destroy', $data->id) }} --}}
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" value="Delete" class="btn btn-danger">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
            {{-- <div class="card-footer">
                {{ $cek->links('pagination::bootstrap-4') }}
            </div> --}}
        </div>

    </div>
@endsection
