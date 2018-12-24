@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
       
            <div class="card">
                <div class="card-header">Dashboard</div>
        
            <form action="{{url('/')}}/update-article/{{$id}}" method="POST">
                @csrf
            Title <br> <input type="text" value="{{$a->title}}" name="title" id="">
                <br>
                description <br>
            <textarea name="description" id="" cols="30" rows="10">{{$a->description}}</textarea>
               <button type="submit">update</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
