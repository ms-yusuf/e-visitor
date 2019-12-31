@extends('layouts.admin')
@section('content')
<h6 class="c-grey-900">
    {{ trans('global.edit') }} {{ trans('cruds.akses_area.title_singular') }}
</h6>
<div class="mT-30">
        @csrf
        @method('PUT')
        <div class="form-group {{ $errors->has('visit') ? 'has-error' : '' }}">
            <label for="visit">{{ trans('cruds.akses_area.fields.visitation_id') }}*</label>
            <select name="visit[]" id="visit" class="form-control select2" required>
                
            </select>
            @if($errors->has('visit'))
                <em class="invalid-feedback">
                    {{ $errors->first('visit') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.akses_area.fields.visitation_id_helper') }}
            </p>
        </div>
        <div class="form-group {{ $errors->has('area') ? 'has-error' : '' }}">
            <label for="area">{{ trans('cruds.akses_area.fields.area_id') }}*</label>
            <select name="area[]" id="area" class="form-control select2" required>
                
            </select>
            @if($errors->has('area'))
                <em class="invalid-feedback">
                    {{ $errors->first('area') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.akses_area.fields.area_id_helper') }}
            </p>
        </div>
        <div>
            <a class="btn btn-danger" href="{{ route("admin.areaAkses.index") }}">
                {{ trans('global.back') }}
            </a>
            <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
        </div>
</div>
@endsection
