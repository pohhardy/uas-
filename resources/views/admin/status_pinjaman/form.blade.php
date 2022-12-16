<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($status_pinjaman->nama) ? $status_pinjaman->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('buku_id') ? 'has-error' : ''}}">
    <label for="buku_id" class="control-label">{{ 'Buku Id' }}</label>
    <input class="form-control" name="buku_id" type="number" id="buku_id" value="{{ isset($status_pinjaman->buku_id) ? $status_pinjaman->buku_id : ''}}" >
    {!! $errors->first('buku_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
