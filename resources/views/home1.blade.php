@extends('layouts.main')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach($messages as $message)
                <div class="panel-info panel text-center">
                    <div class="panel-heading">{{$message->sender->name or 'anon'}}</div>
                    <div class="panel-body">


                    </div>
                        <h1 >{{$message['body']}}</h1>
                    <span>{{$message->created_at->diffForHumans()}}</span>
                    <form action="/publish/{{$message->id}}" class="text-center" method="POST">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary text-center">
                            @if($message->published)
                                unpuplish
                            @else
                                puplish
                            @endif
                        </button>

                    </form>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
