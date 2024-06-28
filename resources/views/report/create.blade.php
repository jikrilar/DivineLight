<x-layout>
    <x-header>Pelaporan Kerusakan Lampu</x-header>
    <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="lamp" class="form-label">Pilih Lampu Yang Rusak</label>
            <select class="form-control" id="lamp" name="lamp_id">
                @foreach ($lamps as $lamp)
                    <option value="{{ $lamp->id }}">{{ $lamp->codename }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Kerusakan</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
        </div>
        <div class="mb-3">
            <img class="img-preview img-fluid">
            <label for="image" class="form-label">Foto Kerusakan (Opsional)</label>
            <input type="file" class="form-control-file" name="image" id="image" onchange="previewImage()">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</x-layout>
