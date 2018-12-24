@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a class="btn btn-primary" href="{{url('/')}}/create-article">create</a>
            <div class="card">
                <div class="card-header">Dashboard</div>
        
            <form action="{{url('/')}}/create-article" method="POST">
                @csrf
              Title <br> <input type="text" name="title" id="">
                <br>
                description <br>
               <textarea name="description" id="" cols="30" rows="10"></textarea>
               <button type="submit">create</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
