<x-applayout>
    <div class="row">
        <div class="col-12">
          <form action="{{ route('transaksi.update',$data->id) }}" method="POST">
            @method('put')
            @csrf
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                Transaksi
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                  <label for="">Nama Pelanggan</label>
                  <select class="form-control select2" style="width: 100%" name="pelanggan_id">
                    <option value="">-- Pilih Nama Pelanggan --</option>
                    @foreach ($pelanggan as $item)
                    <option value="{{ $item->id }}" {{ old('pelanggan_id',$data->pelanggan_id) == $item->id ? 'selected':'' }}>{{ $item->nama }}</option>
                    @endforeach
                  </select>
                  @error('pelanggan_id')
                      <span class="text-sm text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="">Berat (kg)</label>
                    <input type="text" name="berat" class="form-control" value="{{ old('berat',$data->berat) }}">
                    @error('berat')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="">Metode Pembayaran</label>
                  <select name="metode_pembayaran" class="form-control custom-select" name="metode_pembayaran">
                    <option value="">-- Pilih Metode Pembayaran --</option>
                    <option value="Tunai" {{ old('metode_pembayaran',$data->metode_pembayaran) == 'Tunai' ? 'selected':'' }}>Tunai</option>
                    <option value="Debit" {{ old('metode_pembayaran',$data->metode_pembayaran) == 'Debit' ? 'selected':'' }}>Debit</option>
                  </select>
                  @error('metode_pembayaran')
                      <span class="text-sm text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Status Pembayaran</label>
                  <select name="status_pembayaran" class="form-control custom-select" name="status_pembayaran">
                    <option value="">-- Pilih Status Pembayaran --</option>
                    <option value="Lunas" {{ old('status_pembayaran',$data->status_pembayaran) == 'Lunas' ? 'selected':'' }}>Lunas</option>
                    <option value="Belum Lunas" {{ old('status_pembayaran',$data->status_pembayaran) == 'Belum Lunas' ? 'selected':'' }}>Belum Lunas</option>
                  </select>
                  @error('status_pembayaran')
                      <span class="text-sm text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Antar Laundry</label>
                  <select name="antar_laundry" class="form-control custom-select" name="antar_laundry">
                    <option value="">-- Pilih Antar Laundry --</option>
                    <option value="Ya" {{ old('antar_laundry',$data->antar_laundry) == 'Ya' ? 'selected':'' }}>Ya</option>
                    <option value="Tidak" {{ old('antar_laundry',$data->antar_laundry) == 'Tidak' ? 'selected':'' }}>Tidak</option>
                  </select>
                  @error('antar_laundry')
                      <span class="text-sm text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Paket Laundry</label>
                  <select class="form-control custom-select" name="paket_laundry_id">
                    <option value="">-- Pilih Paket Laundry --</option>
                    @foreach ($paket as $item)
                    <option value="{{ $item->id }}" {{ old('paket_laundry_id',$data->paket_laundry_id) == $item->id ? 'selected':'' }}>{{ $item->nama_paket }}</option>
                    @endforeach
                  </select>
                  @error('paket_laundry_id')
                      <span class="text-sm text-danger">{{ $message }}</span>
                  @enderror
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          </form>
        </div>
    </div>
</x-applayout>