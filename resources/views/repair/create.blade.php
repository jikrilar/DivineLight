<x-layout>
    <x-header>Pelaporan Kerusakan Lampu</x-header>
    <form action="{{ route('repair.store', $report->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="technician" class="form-label">Pilih Teknisi Untuk Menangani</label>
            <select class="form-control" id="technician" name="technician_id">
                @foreach ($technicians as $technician)
                    <option value="{{ $technician->id }}">{{ $technician->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
