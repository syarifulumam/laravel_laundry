<x-applayout>
  <div class="row">
      <div class="col-12">
        <form action="{{ route('operator.update', $data->id) }}" method="POST">
          @csrf
          @method('put')
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              Operator
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $data->name) }}">
                @error('name')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="">email</label>
                <input type="text" name="email" class="form-control" value="{{ old('email', $data->email) }}">
                @error('email')
                    <span class="text-sm text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="">Role</label>
                <select name="role" class="form-control select2">
                  <option value="">-- Pilih Role --</option>
                  <option value="1" {{ old('role', $data->role) == 1 ? 'selected':''  }}>Admin</option>
                  <option value="2" {{ old('role', $data->role) == 2 ? 'selected':''  }}>Operator</option>
                </select>
                @error('role')
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