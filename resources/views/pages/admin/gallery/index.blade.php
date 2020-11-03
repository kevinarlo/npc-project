@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Gallery</h1>
      <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i>
        Tambah Foto
      </a>
    </div>

    <div class="card shadow mb-4">
    <div class="card-header py-4"></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Cabor</th>
                <th>Foto</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_cabor }}</td>
                <td>
                  <img src="{{ Storage::url($item->foto) }}" style="width:150px"
                    class="img-thumbnail">
                </td>
                <td>
                  <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <form action="{{ route('gallery.destroy', $item->id) }}" method="POST"
                    class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                      <i class="fa fa-trash">

                      </i>
                    </button>
                  </form>
                </td>
              </tr>
              @empty
                <tr>
                  <td colspan="7" class="text-center">
                    Data Kosong
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection
