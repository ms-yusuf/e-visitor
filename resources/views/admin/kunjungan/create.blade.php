@extends('layouts.admin')
@section('content')
<h6 class="c-grey-900">
    {{ trans('global.add') }} {{ trans('cruds.kunjungan.title_singular') }}
</h6>
<div class="mT-30">
    <div id="smartwizard" class="sw-main sw-theme-arrows">
      <ul class="nav nav-tabs step-anchor">
        <li class="nav-item active"><a href="{{ route("admin.kunjungan.create") }}" class="nav-link">Step 1<br><small>Data Kunjungan</small></a></li>
        <li class="nav-item"><a href="{{ route("admin.kunjungan.area",1) }}" class="nav-link">Step 2<br><small>Akses Area</small></a></li>
      </ul>
    </div>
    <hr class="mT-10"/>
    <form action="{{ route("admin.kunjungan.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group {{ $errors->has('visitor_id') ? 'has-error' : '' }}">
            <label for="visitor">Pengunjung*</label>
            <select name="visitor_id" id="visitor" class="form-control select2" required>
                <option></option>
                @foreach($visitors as $visitor)
                  <option value="{{$visitor->id}}">{{$visitor->no_identitas}} ({{$visitor->jenis_identitas}}) - {{ $visitor->nama }}</option>
                @endforeach
            </select>
            @if($errors->has('visitor_id'))
                <em class="invalid-feedback">
                    {{ $errors->first('visitor_id') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.kunjungan.fields.visitor_id_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('card_id') ? 'has-error' : '' }}">
            <label for="card">Kartu Pengunjung</label>
            <select name="card_id" id="card" class="form-control select2" required>
                <option></option>
                @foreach($cards as $card)
                  <option value="{{$card->id}}">{{$card->card_uid}}</option>
                @endforeach
            </select>
            @if($errors->has('card_id'))
                <em class="invalid-feedback">
                    {{ $errors->first('card_id') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.kunjungan.fields.card_id_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
            <label for="tanggal">{{ trans('cruds.kunjungan.fields.tanggal') }}*</label>
            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ old('tanggal', isset($user) ? $user->email : '') }}" required>
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
          <textarea id="keperluan" name="keperluan" class="form-control" required>{{ old('keperluan', isset($user) ? $user->email : '') }}</textarea>
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
                <option></option>
                <option value="KTP">KTP</option>
                <option value="SIM">SIM</option>
                <option value="Passport">Passport</option>
                <option value="Lainnya">Lainnya</option>
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
        {{--<div class="form-group {{ $errors->has('jaminan_lain') ? 'has-error' : '' }}">--}}
            {{--<label for="jaminan_lain">{{ trans('cruds.kunjungan.fields.jaminan_lainnya') }}*</label>--}}
            {{--<input type="text" id="jaminan_lain" name="jaminan_lain" class="form-control" value="{{ old('jaminan_lain', isset($user) ? $user->email : '') }}" required>--}}
            {{--@if($errors->has('jaminan_lain'))--}}
                {{--<em class="invalid-feedback">--}}
                    {{--{{ $errors->first('jaminan_lain') }}--}}
                {{--</em>--}}
            {{--@endif--}}
            {{--<p class="helper-block">--}}
                {{--{{ trans('cruds.kunjungan.fields.jaminan_lainnya_helper') }}--}}
            {{--</p>--}}
        {{--</div>--}}
        <div>
            <a class="btn btn-danger" href="{{ route("admin.kunjungan.index") }}">
                {{ trans('global.back') }}
            </a>
            <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
        </div>
    </form>
</div>
<script type="text/javascript">
  Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
  });
  document.getElementById('tanggal').value = new Date().toDateInputValue();
</script>
@endsection
