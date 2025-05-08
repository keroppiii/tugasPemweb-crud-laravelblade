@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-white border-bottom fw-bold" style="color: #e83e8c;">
                    {{ __('Tambah Departemen Baru') }}
                </div>

                <div class="card-body" style="background-color: #fce4ec; border-radius: 1rem;">
                    <form action="{{ route('departemens.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_departemen" class="form-label text-muted">Nama Departemen</label>
                            <input type="text" class="form-control rounded-3" id="nama_departemen" name="nama_departemen" placeholder="Contoh: Departemen TI" required>
                        </div>

                        <div class="mb-3">
                            <label for="kode" class="form-label text-muted">Kode</label>
                            <input type="text" class="form-control rounded-3" id="kode" name="kode" placeholder="Contoh: DTI01" required>
                        </div>

                        <div class="mb-4">
                            <label for="penanggung_jawab" class="form-label text-muted">Penanggung Jawab</label>
                            <input type="text" class="form-control rounded-3" id="penanggung_jawab" name="penanggung_jawab" placeholder="Nama penanggung jawab" required>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('departemens.index') }}" class="btn btn-outline-secondary" style="border-radius: 1rem; color: #e83e8c; border: 1px solid #e83e8c;">
                                Batal
                            </a>
                            <button type="submit" class="btn" style="background-color: #e83e8c; color: white; border-radius: 1rem;">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .btn-outline-secondary {
        border-color: #e83e8c;
        color: #e83e8c;
        border-radius: 1rem;
    }

    .btn-outline-secondary:hover {
        background-color: #e83e8c;
        color: white;
    }

    .form-control {
        border-radius: 1rem;
    }
</style>