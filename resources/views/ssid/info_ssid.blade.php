@extends('loyauts.main')

@section('container')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="">
                <h4><b>Data SSID</b></h4>
            </div>
            {{-- Search --}}
            <form action="" method="GET" class="d-flex align-items-center" role="search">
                {{-- {{ route('ssid.info_ssid') }} --}}
                <div class="col-md-6">
                    <input class="form-control me-5" type="search" name="keyword" placeholder="Cari SSID...."
                        aria-label="Search">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                </div>
                <div class="col-md-3">
                    {{-- Print --}}
                    <a href="/ssid/create" class="btn btn-secondary"><i class="bi bi-plus-circle"></i></i></i></a>
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
                            <th>Nama SSID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- @foreach ($ssid as $data) --}}
                        <tr>
                            <th></th>
                            {{-- {{ $realNumber + $loop->iteration }} --}}
                            <td></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    {{-- Edit --}}
                                    <a href="" class="btn btn-primary">
                                        {{-- {{ route('ssid.edit_ssid', $data->id_ssid) }} --}}
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    {{-- Spasi --}}
                                    <div class="mx-1"></div>
                                    {{-- Delete --}}
                                    <form action="" method="POST">
                                        {{-- {{ route('ssid.destroy', $data->id_ssid) }} --}}
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
                {{ $ssid->links('pagination::bootstrap-4') }}
            </div> --}}
        </div>

    </div>
@endsection
