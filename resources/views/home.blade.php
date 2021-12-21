@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                        <ul>Create</ul>

                        <ul>View</ul>

                        <ul>Edit</ul>

                        <ul>Delete</ul>
                        @role('admin')
                        <ul><a href="{{route('publish')}}">Publish</a></ul>

                        <ul><a href="{{route('unpublish')}}">Unpublish</a></ul>
                        @endrole
                        @can('view posts')
                        bisa publish post
                        @endif







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
