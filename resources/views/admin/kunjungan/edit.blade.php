@extends('layouts.admin')
@section('content')
<h6 class="c-grey-900">
    {{ trans('global.edit') }} {{ trans('cruds.kunjungan.title_singular') }}
</h6>
<div class="mT-30">
        <div id="smartwizard" class="sw-main sw-theme-arrows">
          <ul class="nav nav-tabs step-anchor">
            <li class="nav-item active"><a href="{{ route("admin.kunjungan.edit",$visitation->id) }}" class="nav-link">Step 1<br><small>Data Pengunjung</small></a></li>
            <li class="nav-item"><a href="{{ route("admin.kunjungan.editArea",$visitation->id) }}" class="nav-link">Step 2<br><small>Akses Area</small></a></li>
          </ul>
        </div>
        <hr class="mT-10"/>
        <form action="{{ route("admin.kunjungan.update", $visitation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
            <label for="user">Pengunjung</label>
            <select name="visitor_id" id="user" class="form-control select2" required>
              <option></option>
              @foreach($visitors as $visitor)
                <option value="{{$visitor->id}}" @if($visitor->id == $visitation->visitor_id) selected @endif>{{$visitor->no_identitas}} ({{$visitor->jenis_identitas}}) - {{ $visitor->nama }}</option>
              @endforeach
            </select>
            @if($errors->has('user'))
                <em class="invalid-feedback">
                    {{ $errors->first('user') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.kunjungan.fields.user_id_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('card') ? 'has-error' : '' }}">
            <label for="card">Kartu Pengunjung</label>
            <select name="card_id" id="card" class="form-control select2" required>
              <option></option>
              @foreach($cards as $card)
                <option value="{{$card->id}}" @if($card->id == $visitation->card_id) selected @endif>{{$card->card_uid}}</option>
              @endforeach
            </select>
            @if($errors->has('card'))
                <em class="invalid-feedback">
                    {{ $errors->first('card') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.kunjungan.fields.card_id_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
            <label for="tanggal">{{ trans('cruds.kunjungan.fields.tanggal') }}*</label>
            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ old('tanggal', isset($visitation) ? $visitation->tanggal->toDateString() : '') }}" required>
            @if($errors->has('tanggal'))
                <em class="invalid-feedback">
                    {{ $errors->first('tanggal') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.kunjungan.fields.tanggal_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('keperluan') ? 'has-error' : '' }}">
            <label for="keperluan">{{ trans('cruds.kunjungan.fields.keperluan') }}*</label>
            <input type="text" id="keperluan" name="keperluan" class="form-control" value="{{ old('keperluan', isset($visitation) ? $visitation->keperluan : '') }}" required>
            @if($errors->has('keperluan'))
                <em class="invalid-feedback">
                    {{ $errors->first('keperluan') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.kunjungan.fields.keperluan_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('jaminan') ? 'has-error' : '' }}">
            <label for="jaminan">{{ trans('cruds.kunjungan.fields.jaminan') }}*</label>
            <select name="jaminan" id="jaminan" class="form-control select2" required>
              <option value="KTP" @if($visitation->jaminan == 'KTP')selected @endif>KTP</option>
              <option value="SIM" @if($visitation->jaminan == 'SIM')selected @endif>SIM</option>
              <option value="Passport" @if($visitation->jaminan == 'Passport')selected @endif>Passport</option>
              <option value="Lainnya" @if($visitation->jaminan == 'Lainnya')selected @endif>Lainnya</option>
            </select>
            @if($errors->has('jaminan'))
                <em class="invalid-feedback">
                    {{ $errors->first('jaminan') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.kunjungan.fields.jaminan_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
            <label for="status">Status*</label>
            <select name="status" id="status" class="form-control select2" required>
              <option value="aktif" @if($visitation->status == 'aktif')selected @endif>Aktif</option>
              <option value="selesai" @if($visitation->status == 'selesai')selected @endif>Selesai</option>
            </select>
            @if($errors->has('status'))
                <em class="invalid-feedback">
                    {{ $errors->first('status') }}
                </em>
            @endif
        </div>
        <div>
            <a class="btn btn-danger" href="{{ route("admin.kunjungan.index") }}">
                {{ trans('global.back') }}
            </a>
            <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
        </div>
</div>
@endsection