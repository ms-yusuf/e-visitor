@extends('layouts.admin')
@section('content')
<h6 class="c-grey-900">
    {{ trans('global.edit') }} {{ trans('cruds.kartu.title_singular') }}
</h6>
<div class="mT-30">
  <form action="{{ route("admin.kartu.update", [$user->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group {{ $errors->has('uid') ? 'has-error' : '' }}">
            <label for="uid">{{ trans('cruds.kartu.fields.card_uid') }}*</label>
            <input type="text" id="uid" name="uid" class="form-control" value="{{ old('uid', isset($user) ? $user->card_uid : '') }}" required>
            @if($errors->has('uid'))
                <em class="invalid-feedback">
                    {{ $errors->first('uid') }}
                </em>
            @endif
            <p class="helper-block">
                {{ trans('cruds.kartu.fields.card_uid_helper') }}
            </p>
        </div>
        
        <div>
            <a class="btn btn-danger" href="{{ route("admin.kartu.index") }}">
                {{ trans('global.back') }}
            </a>
            <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
        </div>
  </form>
</div>
@endsection
