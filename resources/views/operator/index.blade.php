<x-applayout>
    <div class="row">
        <div class="col-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                Operator
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <a href="{{ route('operator.create') }}" class="btn btn-primary float-left">Tambah Data</a>
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                      @if ($item->role == 1)
                        <span class="badge badge-primary">admin</span>
                      @else
                        <span class="badge badge-success">operator</span>
                      @endif
                    </td>
                    <td>
                      <div class="btn-group">
                        {{-- <button type="button" title="print invoice" class="btn btn-success btn-sm btn-flat"><i class="fa fa-print"></i></button> --}}
                        <a href="{{ route('operator.edit', $item->id) }}" title="edit data" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('operator.destroy',$item->id) }}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" title="hapus data" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash"></i></button>
                        </form>
                      </div>
                    </td>
                </tr>
                @endforeach
                  <tfoot>
                    <tr>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</x-applayout>