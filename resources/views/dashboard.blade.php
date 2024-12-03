
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white text-center fs-4">SUMMARY</div>
        <div class="card-body">
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="jumlah_transaksi" class="form-label">Jumlah Transaksi</label>
                            <input type="number" class="form-control" id="jumlah_transaksi" name="jumlah_transaksi" placeholder="Masukkan Jumlah Transaksi" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="jumlah_item_terjual" class="form-label">Jumlah Item Terjual</label>
                            <input type="number" class="form-control" id="jumlah_item_terjual" name="jumlah_item_terjual" placeholder="Masukkan Jumlah Item Terjual" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="omzet" class="form-label">Omzet</label>
                            <input type="number" class="form-control" id="omzet" name="omzet" placeholder="Masukkan Omzet" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-lg border-0 rounded-3 mt-4">
        <div class="card-header bg-secondary text-white text-center fs-4">DATA</div>
        <div class="card-body">
            <div class="list-group">
                <a href="{{ route('transaksi.create') }}" class="list-group-item list-group-item-action rounded-pill mb-2 bg-info text-white hover-shadow">
                    <i class="bi bi-plus-circle me-2"></i>Tambah Transaksi
                </a>
                <a href="{{ route('transaksi.index') }}" class="list-group-item list-group-item-action rounded-pill mb-2 bg-success text-white hover-shadow">
                    <i class="bi bi-eye me-2"></i>Lihat Transaksi
                </a>
                <a href="{{ route('transaksidetail.index') }}" class="list-group-item list-group-item-action rounded-pill mb-2 bg-warning text-white hover-shadow">
                    <i class="bi bi-file-earmark-text me-2"></i>Lihat Transaksi Detail
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-shadow:hover {
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
    }

    .list-group-item-action {
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .list-group-item-action:hover {
        background-color: #0d6efd;
        transform: scale(1.05);
    }

    .card-body .badge {
        border-radius: 1.25rem;
        font-size: 1.5rem;
        padding: 12px 20px;
        font-weight: 500;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card-header {
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    @media (max-width: 767px) {
        .col-lg-4, .col-md-6 {
            max-width: 100%;
        }
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
