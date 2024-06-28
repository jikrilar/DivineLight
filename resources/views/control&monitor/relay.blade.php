<x-layout>
    <x-header>Halaman Kontrol Manual</x-header>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Lampu 1</h5>
            <p class="card-text">
                @if ($relay->state == 1)
                    <span class="font-weight-bold"> Mode : Otomatis</span>
                    <br>
                    Sensor Berfungsi
                @else
                    <span class="font-weight-bold">Mode : Manual</span>
                    <br>
                    Sensor Dimatikan
                @endif
            </p>
            <form action="{{ route('relay.changeState') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">POWER</button>
            </form>
        </div>
    </div>
</x-layout>
