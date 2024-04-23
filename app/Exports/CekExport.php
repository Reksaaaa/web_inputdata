<?php

namespace App\Exports;

use App\Models\Cek;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CekExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;

    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data->map(function ($item) {
            // Format tanggal untuk hanya menampilkan tanggal (tanpa waktu)
            $item->created_at = $item->created_at->format('Y-m-d');
            return $item;
        });
    }

    public function headings(): array
    {
        // Return array of column headings
        return [
            'Nama Perangkat',
            'Tipe Perangkat',
            'SSID',
            'Ruangan',
            'Divisi',
            'Status',
            'Download',
            'Upload',
            'Keterangan',
            'Tanggal',
        ];
    }
    
}
