<x-applayout>
    <div class="row">
        <div class="col-12">
          <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                Pelanggan
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                  <label for="">Nama Pelanggan</label>
                  <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                  @error('nama')
                      <span class="text-sm text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control">{{ old('alamat') }}</textarea>
                    @error('alamat')
                      <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <!-- phone mask -->
                <div class="form-group">
                  <label>Telepon</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"
                        ><i class="fas fa-phone"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      data-inputmask='"mask": "999-999-999-999"'
                      data-mask
                      name="telepon"
                      value="{{ old('telepon') }}"
                    />
                  </div>
                  @error('telepon')
                    <span class="text-sm text-danger">{{ $message }}</span>
                  @enderror
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
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