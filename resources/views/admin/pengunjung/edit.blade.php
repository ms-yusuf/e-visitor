@extends('layouts.admin')
@section('content')
<h6 class="c-grey-900">
    {{ trans('global.edit') }} {{ trans('cruds.pengunjung.title_singular') }}
</h6>
<div class="mT-30">
  <form action="{{ route("admin.pengunjung.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group {{ $errors->has('no_identitas') ? 'has-error' : '' }}">
            <label for="no_identitas">{{ trans('cruds.pengunjung.fields.no_identitas') }}*</label>
            <input type="phone" id="no_identitas" name="no_identitas" class="form-control" value="{{ old('no_identitas', isset($user) ? $user->no_identitas : '') }}" required>
            @if($errors->has('no_identitas'))
                <em class="invalid-feedback">
                    {{ $errors->first('no_identitas') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.no_identitas_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('jenis_identitas') ? 'has-error' : '' }}">
            <label for="jenis_identitas">{{ trans('cruds.pengunjung.fields.jenis_identitas') }}*</label>
            <select name="jenis_identitas" id="jenis_identitas" class="form-control select2" required>
              <option value="KTP" @if($user->jenis_identitas == 'KTP') selected @endif>KTP</option>
              <option value="SIM" @if($user->jenis_identitas == 'SIM') selected @endif>SIM</option>
              <option value="Passport" @if($user->jenis_identitas == 'Passport') selected @endif>Passport</option>
              <option value="Lainnya" @if($user->jenis_identitas == 'Lainnya') selected @endif>Lainnya</option>
            </select>
            @if($errors->has('jenis_identitas'))
                <em class="invalid-feedback">
                    {{ $errors->first('jenis_identitas') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.jenis_identitas_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('jenis_identitas_lain') ? 'has-error' : '' }}">
            <label for="jenis_identitas_lain">{{ trans('cruds.pengunjung.fields.jenis_identitas_lain') }}*</label>
            <input type="text" id="jenis_identitas_lainnya" name="jenis_identitas_lainnya" class="form-control" value="{{ old('jenis_identitas_lainnya', isset($user) ? $user->jenis_identitas_lainnya : '') }}" required>
            @if($errors->has('jenis_identitas_lain'))
                <em class="invalid-feedback">
                    {{ $errors->first('jenis_identitas_lain') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.jenis_identitas_lain_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
            <label for="nama">{{ trans('cruds.pengunjung.fields.nama') }}*</label>
            <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', isset($user) ? $user->nama : '') }}" required>
            @if($errors->has('nama'))
                <em class="invalid-feedback">
                    {{ $errors->first('nama') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.nama_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
            <label for="tempat_lahir">{{ trans('cruds.pengunjung.fields.tempat_lahir') }}*</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', isset($user) ? $user->tempat_lahir : '') }}" required>
            @if($errors->has('tempat_lahir'))
                <em class="invalid-feedback">
                    {{ $errors->first('tempat_lahir') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.tempat_lahir_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
            <label for="tanggal_lahir">{{ trans('cruds.pengunjung.fields.tanggal_lahir') }}*</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', isset($user) ? $user->tanggal_lahir : '') }}" required>
            @if($errors->has('tanggal_lahir'))
                <em class="invalid-feedback">
                    {{ $errors->first('tanggal_lahir') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.tanggal_lahir_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
            <label for="jenis_kelamin">{{ trans('cruds.pengunjung.fields.jenis_kelamin') }}*</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control select2" required>
              <option value="L" @if($user->jenis_kelamin == 'L') selected @endif>Laki - Laki</option>
              <option value="P" @if($user->jenis_kelamin == 'P') selected @endif>Perempuan</option>
            </select>
            @if($errors->has('jenis_kelamin'))
                <em class="invalid-feedback">
                    {{ $errors->first('jenis_kelamin') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.jenis_kelamin_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('golongan_darah') ? 'has-error' : '' }}">
            <label for="golongan_darah">{{ trans('cruds.pengunjung.fields.golongan_darah') }}*</label>
            <select name="golongan_darah" id="golongan_darah" class="form-control select2" required>
              <option value="A" @if($user->golongan_darah == 'A') selected @endif>A</option>
              <option value="B" @if($user->golongan_darah == 'B') selected @endif>B</option>
              <option value="AB" @if($user->golongan_darah == 'AB') selected @endif>AB</option>
              <option value="O" @if($user->golongan_darah == 'O') selected @endif>O</option>
            </select>
            @if($errors->has('golongan_darah'))
                <em class="invalid-feedback">
                    {{ $errors->first('golongan_darah') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.golongan_darah_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
            <label for="alamat">{{ trans('cruds.pengunjung.fields.alamat') }}*</label>
            <TEXTAREA id="alamat" name="alamat" class="form-control">{{ old('alamat', isset($user) ? $user->alamat : '') }}</TEXTAREA>
            @if($errors->has('alamat'))
                <em class="invalid-feedback">
                    {{ $errors->first('alamat') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.alamat_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : '' }}">
            <label for="no_telp">{{ trans('cruds.pengunjung.fields.no_telp') }}*</label>
            <input type="phone" id="no_telp" name="no_telp" class="form-control" value="{{ old('no_telp', isset($user) ? $user->no_telp : '') }}" required>
            @if($errors->has('no_telp'))
                <em class="invalid-feedback">
                    {{ $errors->first('no_telp') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.no_telp_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('agama') ? 'has-error' : '' }}">
            <label for="agama">{{ trans('cruds.pengunjung.fields.agama') }}*</label>
            <select name="agama" id="agama" class="form-control select2" required>
              <option value="Islam" @if($user->agama == 'Islam') selected @endif>Islam</option>
              <option value="Kristen" @if($user->agama == 'Kristen') selected @endif>Kristen</option>
              <option value="Katolik" @if($user->agama == 'Katolik') selected @endif>Katolik</option>
              <option value="Hindu" @if($user->agama == 'Hindu') selected @endif>Hindu</option>
              <option value="Buddha" @if($user->agama == 'Buddha') selected @endif>Buddha</option>
              <option value="Kong Hu Cu" @if($user->agama == 'Kong Hu Cu') selected @endif>Kong Hu Cu</option>
              <option value="Lainnya" @if($user->agama == 'Lainnya') selected @endif>Lainnya</option>
            </select>
            @if($errors->has('agama'))
                <em class="invalid-feedback">
                    {{ $errors->first('agama') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.agama_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('marital_status') ? 'has-error' : '' }}">
            <label for="marital_status">{{ trans('cruds.pengunjung.fields.marital_status') }}*</label>
            <select name="marital_status" id="marital_status" class="form-control select2" required>
              <option value="Menikah"  @if($user->marital_status == 'Menikah') selected @endif>Menikah</option>
              <option value="Belum Menikah" @if($user->marital_status == 'Belum Menikah') selected @endif>Belum Menikah</option>
            </select>
            @if($errors->has('marital_status'))
                <em class="invalid-feedback">
                    {{ $errors->first('marital_status') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.marital_status_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('pekerjaan') ? 'has-error' : '' }}">
            <label for="pekerjaan">{{ trans('cruds.pengunjung.fields.pekerjaan') }}*</label>
            <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" value="{{ old('pekerjaan', isset($user) ? $user->pekerjaan : '') }}" required>
            @if($errors->has('pekerjaan'))
                <em class="invalid-feedback">
                    {{ $errors->first('pekerjaan') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.pekerjaan_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('kewarganegaraan') ? 'has-error' : '' }}">
            <label for="kewarganegaraan">{{ trans('cruds.pengunjung.fields.kewarganegaraan') }}*</label>
            <select name="kewarganegaraan" id="kewarganegaraan" class="form-control select2" required>
              <option value="WNI" @if($user->kewarganegaraan == 'WNI') selected @endif>WNI</option>
              <option value="Non WNI" @if($user->kewarganegaraan == 'Non WNI') selected @endif>Non WNI</option>
            </select>
            @if($errors->has('kewarganegaraan'))
                <em class="invalid-feedback">
                    {{ $errors->first('kewarganegaraan') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.pengunjung.fields.kewarganegaraan_helper') }}
            </p>
        </div>
        <div>
            <a class="btn btn-danger" href="{{ route("admin.pengunjung.index") }}">
                {{ trans('global.back') }}
            </a>
            <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
        </div>
  </form>
</div>
@endsection
