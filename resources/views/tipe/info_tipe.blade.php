@extends('loyauts.main')

@section('container')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="">
                <h4><b>Data Tipe</b></h4>
            </div>
            {{-- Search --}}
            <form action="{{ route('tipe.info_tipe') }}" method="GET" class="d-flex align-items-center" role="search">
                <div class="col-md-6">
                    <input class="form-control me-5" type="search" name="keyword" placeholder="Cari Tipe...."
                        aria-label="Search">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                </div>
                <div class="col-md-3">
                    {{-- Print --}}
                    <a href="/tipe/create" class="btn btn-secondary"><i class="bi bi-plus-circle"></i></i></i></a>
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
                            <th>Nama Tipe</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $realNumber = ($tipe->currentPage() - 1) * $tipe->perPage(); ?>
                        @foreach ($tipe as $data)
                            <tr>
                                <th>{{ $realNumber + $loop->iteration }}</th>
                                <td>{{ $data->nama_tipe }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        {{-- Edit --}}
                                        <a href="{{ route('tipe.edit_tipe', $data->id_tipe) }}" class="btn btn-primary">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        {{-- Spasi --}}
                                        <div class="mx-1"></div>
                                        {{-- Delete --}}
                                        <form action="{{ route('tipe.destroy', $data->id_tipe) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" value="Delete" class="btn btn-danger">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach;
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $tipe->links('pagination::bootstrap-4') }}
            </div>
        </div>

    </div>
@endsection
