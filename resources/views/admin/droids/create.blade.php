@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right pb-3">
            <a class="btn btn-mot" style="width:auto;" href="{{ route('user.show', $user->id) }}">Back</a>
        </div>
        <div class="pull-left">
            <h2>Add New Droid for {{$user->forename}} {{$user->surname}}</h2>
        </div>
    </div>
</div>
</div>
<div class="card-body">
<form action="{{ route('admin.droids.store') }}" method="POST">
    @csrf
<input type="hidden" name="user_id" value="{{ $user->id }}">
     <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong>Droid Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value='{{ old('name') }}'>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
              <strong>Club:</strong><br>
              <select class="form-select" name=club_id>
                @foreach($clubs as $club)
                  <option value="{{ $club->id }}">{{ $club->name }}</option>
                @endforeach
              </select>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong>Style:</strong> (eg, ANH, Custom, etc.)
                <input type="text" name="style" class="form-control" placeholder="Style" value='{{ old('style') }}'>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong>Control System:</strong> (eg, Padawan, Shadow, Custom.)
                <input type="text" name="transmitter_type" class="form-control" placeholder="Controller" value='{{ old('transmitter_type') }}'>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>RC?</strong>
                <input type="text" name="radio_controlled" class="form-control" placeholder="Yes/No" value='{{ old('radio_controlled') }}'>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sound System:</strong>
                <input type="text" name="sound_system" class="form-control" placeholder="Sound System" value='{{ old('sound_system') }}'>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Build Material:</strong>
                <input type="text" name="material" class="form-control" placeholder="Material" value='{{ old('material') }}'>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Battery Type:</strong> (eg, LiPo, LiFePo, SLA.)
                <input type="text" name="battery" class="form-control" placeholder="Battery" value='{{ old('battery') }}'>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Drive Type:</strong> (eg, Warp Drives, Scavenger.)
                <input type="text" name="drive_type" class="form-control" placeholder="Drive Type" value='{{ old('drive_type') }}'>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Voltage</strong>
                <input type="text" name="drive_voltage" class="form-control" placeholder="" value='{{ old('drive_voltage') }}'>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Approx Value:</strong>
                <input type="text" name="value" class="form-control" placeholder="" value='{{ old('value') }}'>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Approx Weight</strong> (in kg)
                <input type="text" name="weight" class="form-control" placeholder="" value='{{ old('weight') }}'>
            </div>
        </div>
      </div>
      <div class="form-row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Build Log:</strong>
              <input type="text" name="build_log" class="form-control" value='{{ old('build_log') }}'>
          </div>
      </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-mot">Submit</button>
        </div>
      </div>

</form>
</div>
</div>
@endsection
