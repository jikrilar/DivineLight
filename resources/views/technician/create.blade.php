<x-layout>
    <x-header>Tambah Data</x-header>
    <form action="/technician" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="mobile_number" class="form-label">No HP</label>
            <input type="text" class="form-control" name="mobile_number" id="mobile_number">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input class="form-control" id="address" name="address"></input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
