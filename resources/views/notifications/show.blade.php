@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="title">Notifications</h3>
    </div>
    <div class="card-body">
        @foreach($notifications as $notification)
        <a href="{{ $notification->data['link'] }}">
        <div class="row no-gutters align-items-center pb-3">
          <div class="col-md-1">
              <i class="fas fa-{{ $notification->data['icon'] ?? "clock" }} fa-fw"></i>
          </div>
          <div class="col-md-11">
        <div class="message">
          <div class="row no-gutters">
              <div class="col-auto mr-auto">
                  {{ $notification->data['title'] }}
              </div>
              <div class="auto">
                  <small class="text-muted mt-1 text-right text-truncate">{{ $notification->created_at->diffForHumans() }}</small>
              </div>
          </div>
          <div class="row">
              <div class="col-auto col-md-12 text-muted" style="overflow: hidden;">
                  {{ $notification->data['text'] }}
              </div>
          </div>
        </div>
      </div>
    </div>
    </a>
        @endforeach

    </div>
</div>



@endsection
