<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div id="app" class="p-6">
        <h2 class="text-2xl font-bold mb-4">Dashboard</h2>

        <div v-if="loading">Memuat data...</div>
        <div v-else>
            <p class="mb-2">Selamat datang, <strong>@{{ data.name }}</strong>!</p>
            <p class="mb-2">Peran: <strong>@{{ data.role }}</strong></p>

            <div class="border p-4 rounded shadow mt-4">
                <h3 class="text-lg font-semibold mb-2">Ujian Aktif</h3>
                <p>Mata Pelajaran: @{{ data.ujian_aktif.mapel }}</p>
                <p>Waktu: @{{ data.ujian_aktif.waktu }}</p>
                <p>Status: <strong>@{{ data.ujian_aktif.status }}</strong></p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                loading: true,
                data: {}
            },
            mounted() {
                axios.get('/api/dashboard')
                    .then(res => {
                        this.data = res.data;
                        this.loading = false;
                    })
                    .catch(err => {
                        console.error(err);
                        alert("Gagal mengambil data dashboard.");
                    });
            }
        });
    </script>
@endpush
