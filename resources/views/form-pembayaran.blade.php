@extends('layout')

@section('title', 'Form Pembayaran')

@section('content')
<div class="container mt-5 mb-5"> 
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Form Pembayaran</h2>
                </div>
                <div class="card-body">
                    <form id="pembayaranForm">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No Hp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu (jam)</label>
                            <input type="number" class="form-control" id="waktu" name="waktu" required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah yang harus di bayarkan</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_pembayaran" class="form-label">Pilih Jenis Pembayaran</label>
                            <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" required>
                                <option value="">Pilih Jenis Pembayaran</option>
                                <option value="transfer">Transfer Bank</option>
                                <option value="ewallet">E-Wallet</option>
                                <option value="credit_card">Kartu Kredit</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Bayar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('waktu').addEventListener('input', function() {
        const waktu = this.value;
        const tarifPerJam = {{ $tarif }}; // Tarif per jam dari rute
        const jumlah = waktu * tarifPerJam;
        document.getElementById('jumlah').value = 'Rp. ' + jumlah.toLocaleString('id-ID');
    });

    document.getElementById('pembayaranForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(this);

        fetch('{{ route('pembayaran.submit') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.success);
                window.location.href = '{{ route('mahasiswa.dashboard') }}';
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>
@endsection