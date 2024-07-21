@extends('main')

@section('content')
    <div class="row mt-4">
        <div class="col-md-4">
            <livewire:Posts.Components.PostAdd />
        </div>
        
        <div class="col-md-8">
            <livewire:Posts.Components.Posts />
        </div>
    </div>
@endsection