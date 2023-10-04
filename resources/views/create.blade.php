@extends('master')
@section('title', 'Tambah Mahasiswa')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Add Student</h1>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <p class="mt-2">NPM Sudah Di Gunakan</p>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('students.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" name="npm" class="form-control" placeholder="NPM" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" placeholder="Kelas" required>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No Handphone</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="No.Hp" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                <a href="{{ route('students.index') }}" class="btn btn-danger mx-2">Cancel</a>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
