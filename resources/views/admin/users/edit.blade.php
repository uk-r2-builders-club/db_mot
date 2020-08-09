@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
          <div class="pull-right mb-4">
            <a class="btn btn-primary" href="{{ route('admin.users.index') }}">Back</a>
          </div>
          <div class="pull-left mb-4">
            <h2>Edit Member</h2>
          </div>
        </div>
    </div>

    <form action="{{ route('admin.users.update',$user->member_uid) }}" method="POST">
        @csrf
        @method('PUT')

      <div class="form-row">
          <div class="col-md-4 mb-3">
            <label>Forename</label>
            <input type="text" name="forename" value="{{ $user->forename }}" class="form-control" placeholder="Forename">
          </div>
          <div class="col-md-4 mb-3">
            <label>Surname</label>
            <input type="text" name="surname" value="{{ $user->surname }}" class="form-control" placeholder="Surname">
          </div>
          <div class="col-md-4 mb-3">
            <label>Forum Username</label>
            <input type="text" name="username" value="{{ $user->username }}" class="form-control" placeholder="Username">
          </div>
      </div>
      <div class="form-row">
          <div class="col-md-12 mb-3">
            <label>Email</label>
            <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
          </div>
      </div>
      <div class="form-row">
          <div class="col-md-6 mb-3">
            <label>County</label>
            <input type="text" name="county" value="{{ $user->county }}" class="form-control" placeholder="County">
          </div>
          <div class="col-md-6 mb-3">
            <label>Postcode</label>
            <input type="text" name="postcode" value="{{ $user->postcode }}" class="form-control" placeholder="Postcode">
          </div>
      </div>

      <div class="form-row">
          <div class="col-md-4 mb-3">
            <label>PLI Date</label>
            <input type="date" name="pli_date" value="{{ $user->pli_date }}" class="form-control" placeholder="">
          </div>
          <div class="col-md-1 mb-3">
            <label>Active</label>
            <input type="checkbox" name="active" {{ $user->active ? 'checked="1"' : 'checked="0"' }} class="form-control">
          </div>
          <div class="col-md-1 mb-3">
            <label>GDPR</label>
            <input type="checkbox" name="gdpr_accepted" {{ $user->gdpr_accepted ? 'checked="1"' : 'checked="0"' }} class="form-control">
          </div>
      </div>

      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label>Created On: </label>
          {{ $user->created_on }}
        </div>
        <div class="col-md-4 mb-3">
          <label>Updated On: </label>
          {{ $user->last_updated }}
        </div>
        <div class="col-md-4 mb-3">
          <label>Last Login: </label>
          {{ $user->last_login }}
        </div>

      <div class="form-row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

  </form>
@endsection