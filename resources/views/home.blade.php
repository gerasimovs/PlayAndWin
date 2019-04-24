@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Playboard</div>

                <div class="card-body">


                    <form method="post">
                        @csrf
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Play!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
