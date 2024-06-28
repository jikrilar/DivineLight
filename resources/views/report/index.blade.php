<x-layout>
    @if (Auth::user()->role == 'admin')
        <!-- Page Heading -->
        <x-header>Riwayat Kerusakan Yang Telah Dilaporkan</x-header>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Pelapor</th>
                                <th>Lampu Rusak</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $report->society->name }}</td>
                                    <td>{{ $report->lamp->id }}</td>
                                    <td>{{ $report->reporting_date }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('repair.create', $report->id) }}" class="btn btn-success"><i
                                                    class="fas fa-fw fa-edit"></i>
                                                Pilih Teknisi
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <!-- Page Heading -->
        <x-header>Riwayat Kerusakan Yang Telah Dilaporkan</x-header>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('report.create') }}" class="btn btn-primary">Buat</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Lampu Rusak</th>
                                <th>Deskripsi</th>
                                <th>Tanggal Kerusakan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                                <tr>
                                    <td>{{ $report->lamp->codename }}</td>
                                    <td>{{ $report->description }}</td>
                                    <td>{{ $report->reporting_date }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('report.edit', $report->id) }}"
                                                class="btn btn-success mx-2"><i class="fas fa-fw fa-edit"></i></a>
                                            <form action="{{ route('report.destroy', $report->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Anda Yakin Data Akan Dihapus?')"><i
                                                        class="fas fa-fw fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</x-layout>
