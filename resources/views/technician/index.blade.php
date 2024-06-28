<x-layout>
    <!-- Page Heading -->
    <x-header>Data Teknisi</x-header>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('technician.create') }}" class="btn btn-primary">Buat</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($technicians as $technician)
                            <tr>
                                <td>{{ $technician->name }}</td>
                                <td>{{ $technician->email }}</td>
                                <td>{{ $technician->address }}</td>
                                <td>{{ $technician->mobile_number }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('technician.edit', $technician->id) }}"
                                            class="btn btn-success mx-1">Update</a>
                                        <form action="{{ route('technician.destroy', $technician->id) }}"
                                            method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Anda Yakin Data Akan Dihapus?')">Hapus</button>
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
</x-layout>
