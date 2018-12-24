@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <a class="btn btn-primary" href="{{url('/')}}/create-article">create</a>
            <div class="card">
                <div class="card-header">Dashboard</div>
        
                <table class="table">
                        <thead>
                          <tr>
                           
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(count($a)>0)
                            @foreach($a as $ar)
                          <tr>
                          <th>{{$ar->title}}</th>
                          <td>{{$ar->description}}</td>
                          <td><a href="{{url('/')}}/update-article/{{$ar->id}}">update</a> &nbsp; <a href="{{url('/')}}/delete-article/{{$ar->id}}">delete</a></td>
                           
                          </tr>
                          @endforeach
                          @else
                          <tr> <td>
                              No Data </td></tr>
                          @endif
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
