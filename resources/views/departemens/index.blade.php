@extends('layouts.app')

@section('content')
<div class="container py-4" style="background-color: #fff0f5; border-radius: 12px;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0" style="border-radius: 12px;">
                <div class="card-header bg-white border-bottom fw-bold" style="color: #e83e8c; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                    {{ __('Daftar Departemen') }}
                </div>

                <div class="card-body" style="background-color: #fce4ec; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-muted">Total: {{ $departemens->total() }}</h5>
                        <a href="{{ route('departemens.create') }}" class="btn" style="background-color: #e83e8c; color: white;">
                            + Departemen Baru
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered bg-white" style="border-radius: 10px; overflow: hidden;">
                            <thead style="background-color: #ffe6f0;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Departemen</th>
                                    <th>Kode</th>
                                    <th>Penanggung Jawab</th>
                                    <th class="text-center" style="width: 200px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($departemens as $departemen)
                                    <tr>
                                        <td>{{ ($departemens->currentPage() - 1) * $departemens->perPage() + $loop->iteration }}</td>
                                        <td>{{ $departemen->nama_departemen }}</td>
                                        <td>{{ $departemen->kode }}</td>
                                        <td>{{ $departemen->penanggung_jawab }}</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('departemens.show',$departemen->id) }}" class="btn btn-sm" style="color: #e83e8c; border: 1px solid #e83e8c;">
                                                    Lihat
                                                </a>
                                                <a href="{{ route('departemens.edit',$departemen->id) }}" class="btn btn-sm text-white" style="background-color: #f48fb1;">
                                                    Edit
                                                </a>
                                                <form action="{{ route('departemens.destroy',$departemen->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">Belum ada data departemen.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {!! $departemens->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    a.btn:hover,
    button.btn:hover {
        opacity: 0.85;
        transition: 0.2s ease;
    }

    .btn-outline-danger:hover {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
    }
</style>
@endsection
