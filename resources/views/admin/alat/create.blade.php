@extends('layouts.admin')
@section('content')
<h6 class="c-grey-900">
    {{ trans('global.add') }} {{ trans('cruds.alat.title_singular') }}
</h6>
<div class="mT-30">
    <form action="{{ route("admin.alat.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group {{ $errors->has('mac') ? 'has-error' : '' }}">
            <label for="mac">{{ trans('cruds.alat.fields.mac_address') }}</label>
            <input type="text" id="mac" name="mac_address" class="form-control" value="{{ old('mac_address', isset($user) ? $user->mac_address : '') }}">
            @if($errors->has('mac'))
                <em class="invalid-feedback">
                    {{ $errors->first('mac') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.alat.fields.mac_address_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('ip') ? 'has-error' : '' }}">
            <label for="ip">{{ trans('cruds.alat.fields.ip_address') }}</label>
            <input type="text" id="ip" name="ip_address" class="form-control" value="{{ old('ip_address', isset($user) ? $user->ip_address : '') }}">
            @if($errors->has('ip'))
                <em class="invalid-feedback">
                    {{ $errors->first('ip') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.alat.fields.ip_address_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('area') ? 'has-error' : '' }}">
            <label for="area">{{ trans('cruds.alat.fields.area_id') }}*</label>
            <select name="area_id" id="area" class="form-control select2" required>
                @foreach($areas as $id => $area)
                    <option value="{{ $area->id }}" {{ (in_array($area->id, old('area_id', [])) || isset($user) && $user->areas->contains($area->$id)) ? 'selected' : '' }}>{{ $area->nama }}</option>
                @endforeach
            </select>
            @if($errors->has('area'))
                <em class="invalid-feedback">
                    {{ $errors->first('area') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.alat.fields.area_id_helper') }}
            </p>
        </div>
        <div>
            <a class="btn btn-danger" href="{{ route('admin.alat.index') }}">
                {{ trans('global.back') }}
            </a>
            <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
        </div>
    </form>
</div>
@endsection
