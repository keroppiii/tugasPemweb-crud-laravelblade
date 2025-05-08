@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header fw-bold rounded-top-4" style="background-color: #fce4ec; color: #d81b60; border-bottom: 2px solid #f8bbd0;">
                    {{ __('Detail Departemen') }}
                </div>

                <div class="card-body" style="background-color: #fff0f6; border-bottom-right-radius: 1rem; border-bottom-left-radius: 1rem;">
                    <dl class="row mb-0">
                        <dt class="col-sm-4 text-muted">Nama Departemen:</dt>
                        <dd class="col-sm-8 fw-semibold text-dark">{{ $departemen->nama_departemen }}</dd>

                        <dt class="col-sm-4 text-muted">Kode:</dt>
                        <dd class="col-sm-8 fw-semibold text-dark">{{ $departemen->kode }}</dd>

                        <dt class="col-sm-4 text-muted">Penanggung Jawab:</dt>
                        <dd class="col-sm-8 fw-semibold text-dark">{{ $departemen->penanggung_jawab }}</dd>

                        <dt class="col-sm-4 text-muted">Dibuat Pada:</dt>
                        <dd class="col-sm-8">{{ $departemen->created_at->format('d/m/Y H:i') }}</dd>

                        <dt class="col-sm-4 text-muted">Diperbarui Pada:</dt>
                        <dd class="col-sm-8">{{ $departemen->updated_at->format('d/m/Y H:i') }}</dd>
                    </dl>

                    <div class="text-end mt-4">
                        <a href="{{ route('departemens.index') }}" class="btn btn-lihat">← Kembali ke Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-lihat {
        color: #d81b60;
        border: 1px solid #d81b60;
        background-color: transparent;
        transition: 0.2s ease-in-out;
    }

    .btn-lihat:hover {
        background-color: #f8bbd0;
        color: white;
    }
</style>
@endsection
