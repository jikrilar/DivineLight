<x-layout>
    <!-- Page Heading -->
    <x-header>
        @if (Auth::user()->role == 'admin')
            Daftar Seluruh Perbaikan
        @else
            Daftar Perbaikan
        @endif
    </x-header>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Pelapor</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Kerusakan</th>
                            @if (Auth::user()->role == 'admin')
                                <th>Teknisi Yang Menangani</th>
                            @endif
                            <th>Status Perbaikan</th>
                            <th>Ubah Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($repairs as $repair)
                            <tr>
                                <td>{{ $repair->report->society->name }}</td>
                                <td>{{ $repair->report->description }}</td>
                                <td>{{ $repair->report->reporting_date }}</td>
                                @if (Auth::user()->role == 'admin')
                                    <td>{{ $repair->technician->name }}</td>
                                @endif
                                <td>
                                    @if ($repair->status == 'being_repaired')
                                        Sedang Diperbaiki
                                    @else
                                        Telah Diperbaiki
                                    @endif
                                </td>
                                @if (Auth::user()->role == 'technician')
                                    <td>
                                        <form action="{{ route('repair.update', $repair->id) }}" method="POST">
                                            @method('put')
                                            @csrf
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Anda yakin kerusakan telah selesai diperbaiki? Status tidak dapat diubah kembali')"
                                                @if ($repair->status == 'finished_repaired') disabled @endif>Selesai
                                                Diperbaiki</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
