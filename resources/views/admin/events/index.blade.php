@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.events.create') }}"> Create New event</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->event_uid }}</td>
            <td>{{ $event->name }}</td>
            <td>{{ $event->description }}</td>
            <td>
                <form action="{{ route('admin.events.destroy',$event->event_uid) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('admin.events.edit',$event->event_uid) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $events->links() !!}

@endsection
