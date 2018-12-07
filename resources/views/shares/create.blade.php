@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>

<div class="card uper">
    <div class="class-header">
        Add share
    </div>

    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form action="{{ route('shares.store') }}" method="post">
            <div class="form-group">
                @csrf
                <label for="name">Share name:</label>
                <input type="text" class="form-control" name="share_name">
            </div>
            
            <div class="form-group">
                <label for="name">Share price:</label>
                <input type="text" class="form-control" name="share_price">
            </div>

            <div class="form-group">
                <label for="name">Share quantity:</label>
                <input type="text" class="form-control" name="share_qty">
            </div>
                <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection