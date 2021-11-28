<x-applayout>
    <div class="row">
        <div class="col-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                Transaksi
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover">
                <a href="{{ route('transaksi.create') }}" class="btn btn-primary float-left">Tambah Data</a>
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Paket</th>
                    <th>Pembayaran</th>
                    <th>Antar</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->pelanggan->nama }}</td>
                    <td>{{ $item->status_pembayaran }}</td>
                    <td>{{ $item->paket_laundry->nama_paket }}</td>
                    <td>{{ $item->metode_pembayaran }}</td>
                    <td>{{ $item->antar_laundry }}</td>
                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" title="print invoice" class="btn btn-success btn-sm btn-flat"><i class="fa fa-print"></i></button>
                        <a href="{{ route('transaksi.edit',$item->id) }}" title="edit data" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST">
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
                      <th>Paket</th>
                      <th>Pembayaran</th>
                      <th>Antar</th>
                      <th>Tanggal</th>
                      <th>Total</th>
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