<x-layout>
    <x-header>Halaman Monitoring Daya</x-header>

    <div class="container text-center">
        <div class="row row-cols-2">
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Power</h5>
                        <p id="power" class="card-text">{{ $power_consumption->power }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Energy</h5>
                        <p id="energy" class="card-text">{{ $power_consumption->energy }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Voltase</h5>
                        <p id="voltage" class="card-text">{{ $power_consumption->voltage }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Current</h5>
                        <p id="current" class="card-text">{{ $power_consumption->current }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function fetchData() {
                fetch('/api/power-consumption')
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('power').textContent = data.power;
                        document.getElementById('energy').textContent = data.energy;
                        document.getElementById('voltage').textContent = data.voltage;
                        document.getElementById('current').textContent = data.current;
                    })
                    .catch(error => console.error('Error fetching data:', error));
            }

            // Fetch data every 5 seconds
            setInterval(fetchData, 5000);

            // Fetch data initially when page loads
            fetchData();
        });
    </script>
</x-layout>
