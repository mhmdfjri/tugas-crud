@extends('master')
@section('title','Daftar Mahasiswa')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="mb-0 text-gray-800">Daftar Mahasiswa</h3>
            <a href="{{ route('student.create') }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-user-plus" style="margin-right: 5px"></i>Tambah Data Mahasiswa</a>
        </div>
        <hr>
        @if (Session::has('success-create'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success-create') }}
            </div>
        @endif
        @if (Session::has('success-update'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success-update') }}
            </div>
        @endif
        @if (Session::has('success-delete'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success-delete') }}
            </div>
        @endif
        <table id="example" class="table table-hover" style="width: 100%">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th class="text-center">NPM</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($students->count() > 0)
                    @foreach ($students as $student)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $student->npm }}</td>
                            <td class="align-middle">{{ $student->nama }}</td>
                            <td class="align-middle">{{ $student->kelas }}</td>
                            <td class="align-middle">
                                <a href="{{ route('student.edit', $student->id) }}" data-toggle="tooltip" title="Edit">
                                    <i class="fa-solid fa-pencil fa-xl" style="color: blue"></i>
                                </a>
                                <a href="{{ route('student.show', $student->id) }}" data-toggle="tooltip" title="View">
                                    <i class="fa-solid fa-eye fa-xl" style="color: green"></i>
                                </a>
                                <form method="POST" action="{{ route('student.destroy', $student->id) }}"
                                    style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn-link" data-toggle="tooltip" title="Delete"
                                        style="padding: 0; border: none; background: none;">
                                        <i class="fa-solid fa-trash fa-xl" style="color: red;"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Mahasiswa Tidak Ada</td>
                    </tr>
                @endif
            </tbody>
    </div>
    </table>
@endsection
