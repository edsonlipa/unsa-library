<?php

namespace App\Exports;

use App\Models\Legis;
use Maatwebsite\Excel\Concerns\FromCollection;

class LibraryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Legis::all();
    }
}
