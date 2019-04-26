@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('Playboard')</div>
                <div class="card-body">
                    <form method="post">
                        @csrf
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">@lang('Play!')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <h2>@lang('My prizes')</h2>
        </div>
        @if ($prizes->isNotEmpty())
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prizes as $prize)
                    <tr>
                        <th scope="row">{{ get_class($prize->description) }}</th>
                        <th scope="row">{{ $prize->description->count }}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="card-body">
                <h5 class="card-title">You have no prizes</h5>
                <p class="card-text">Try it now!</p>
            </div>
        @endif
    </div>
</div>
@endsection
