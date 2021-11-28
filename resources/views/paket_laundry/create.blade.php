<x-applayout>
    <div class="row">
        <div class="col-12">
          <form action="{{ route('paket_laundry.store') }}" method="POST">
            @csrf
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                Paket Laundry
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                  <label for="">Nama Paket</label>
                  <input type="text" name="nama_paket" class="form-control" value="{{ old('nama_paket') }}">
                  @error('nama_paket')
                      <span class="text-sm text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="">Harga/kg</label>
                  <input type="text" name="harga" class="form-control" value="{{ old('harga') }}">
                  @error('harga')
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