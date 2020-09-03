@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.achievements.create') }}"> Create New Achievement</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($achievements as $achievement)
        <tr>
            <td>{{ $achievement->id }}</td>
            <td>{{ $achievement->name }}</td>
            <td>{{ $achievement->description }}</td>
            <td>
                <form action="{{ route('admin.achievements.destroy',$achievement->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('admin.achievements.edit',$achievement->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $achievements->links() !!}
@endsection
