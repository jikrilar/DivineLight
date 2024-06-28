<x-layout>
    <!-- Page Heading -->
    <x-header>Data Masyarakat</x-header>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('society.create') }}" class="btn btn-primary">Buat</a>
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
                        @foreach ($societies as $society)
                            <tr>
                                <td>{{ $society->name }}</td>
                                <td>{{ $society->email }}</td>
                                <td>{{ $society->address }}</td>
                                <td>{{ $society->mobile_number }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('society.edit', $society->id) }}"
                                            class="btn btn-success mx-2"><i class="fas fa-fw fa-edit"></i></a>
                                        <form action="{{ route('society.destroy', $society->id) }}" method="POST">
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
</x-layout>
