<div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : ''}}">
    <label for="nama_lengkap" class="control-label">{{ 'Nama Lengkap' }}</label>
    <input class="form-control" name="nama_lengkap" type="text" id="nama_lengkap" value="{{ isset($parent->nama_lengkap) ? $parent->nama_lengkap : ''}}" >
    {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('employee_id') ? 'has-error' : ''}}">
    <label for="employee_id" class="control-label">{{ 'Employee Id' }}</label>
    <input class="form-control" name="employee_id" type="text" id="employee_id" value="{{ isset($parent->employee_id) ? $parent->employee_id : ''}}" >
    {!! $errors->first('employee_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_ibu') ? 'has-error' : ''}}">
    <label for="nama_ibu" class="control-label">{{ 'Nama Ibu' }}</label>
    <input class="form-control" name="nama_ibu" type="text" id="nama_ibu" value="{{ isset($parent->nama_ibu) ? $parent->nama_ibu : ''}}" >
    {!! $errors->first('nama_ibu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_ayah') ? 'has-error' : ''}}">
    <label for="nama_ayah" class="control-label">{{ 'Nama Ayah' }}</label>
    <input class="form-control" name="nama_ayah" type="text" id="nama_ayah" value="{{ isset($parent->nama_ayah) ? $parent->nama_ayah : ''}}" >
    {!! $errors->first('nama_ayah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('no_ktpibu') ? 'has-error' : ''}}">
    <label for="no_ktpibu" class="control-label">{{ 'No Ktpibu' }}</label>
    <input class="form-control" name="no_ktpibu" type="number" id="no_ktpibu" value="{{ isset($parent->no_ktpibu) ? $parent->no_ktpibu : ''}}" >
    {!! $errors->first('no_ktpibu', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('no_ktpayah') ? 'has-error' : ''}}">
    <label for="no_ktpayah" class="control-label">{{ 'No Ktpayah' }}</label>
    <input class="form-control" name="no_ktpayah" type="number" id="no_ktpayah" value="{{ isset($parent->no_ktpayah) ? $parent->no_ktpayah : ''}}" >
    {!! $errors->first('no_ktpayah', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
