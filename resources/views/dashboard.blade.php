@extends('layouts.dashboardmaster')

@section('content')
    <div class="main-wrapper">
        <div class="container">
            <div class="grid">
                <div class="grid-col-12">
                    <p>
                        {{ Auth::user()->name }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
