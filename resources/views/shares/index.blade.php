@extends('layout')

@section('content')
<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="flex-center position-ref full-height">
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}" class="home">My profile</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif

<div class="uper">
    @if(session()->get('succes'))
        <div class="alert alert-succes">
            {{ session()->get('succes') }}
        </div><br />
    @endif
    <a href="{{url('/')}}"><i class="fas fa-arrow-left"></i>Terug</a>
<div class="row">
    <div class="col-sm-8">
        <h1>Current Stocks</h1>
    </div>

   

    <div class="col-sm-4">
        <h1>Check all stocks</h1>
    </div>
</div>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Stock name</td>
                <td>Stock Price</td>
                <td>Stock Quantity</td>
                <td colspan="2">Action</td>
                <td>Added by</td>
            </tr>
        </thead>
        <tbody>
            @foreach($shares as $share)
            <tr>
                <td>{{$share->id}}</td>
                <td>{{$share->share_name}}</td>
                <td>€ {{$share->share_price}}</td>
                <td>{{$share->share_qty}}</td>
                <td><a href="{{ route('shares.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>

                <td>
                    <form action="{{ route('shares.destroy', $share->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    <td>
                            <?php echo Auth::user()->name ?>
                    </td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-sm-4">
            <a href="{{url('shares/create')}}" class="ahref"><button class="bhref">Add stocks</button></a>
    </div>
</div>
@endsection