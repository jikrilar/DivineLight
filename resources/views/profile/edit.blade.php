<x-layout>
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Informasi Pribadi
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('profile.update', Auth::user()->id) }}">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Nama Lengkap" value="{{ $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="user@example.com" value="{{ $user->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" name="mobile_number" id="phone"
                                placeholder="Nomor Telepon" value="{{ $user->mobile_number }}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Alamat">{{ $user->address }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header">
                    Keamanan
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="currentPassword" class="form-label">Kata Sandi Saat Ini</label>
                            <input type="password" class="form-control" id="currentPassword" name="current_password"
                                placeholder="Kata Sandi Saat Ini">
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">Kata Sandi Baru</label>
                            <input type="password" class="form-control" id="newPassword" name="password"
                                placeholder="Kata Sandi Baru">
                        </div>
                        <button type="submit" class="btn btn-warning">Ubah Kata Sandi</button>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</x-layout>
