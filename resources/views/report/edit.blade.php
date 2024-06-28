<x-layout>
    <x-header>Pelaporan Kerusakan Lampu</x-header>
    <form action="{{ route('report.update', $report->id) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="lamp" class="form-label">Pilih Teknisi Untuk Menangani</label>
            <select class="form-control" id="lamp" name="lamp_id">
                @foreach ($technicians as $technician)
                    <option value="{{ $technician->id }}">{{ $technician->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
