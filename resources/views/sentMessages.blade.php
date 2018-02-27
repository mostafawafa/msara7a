@extends('layouts.main')

@section('main')
    <section class="questions">
        <div class="container">
            <h1 class="text-center">your outgoing Messages: </a></h1>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @foreach($messages as $message)
                        <div class="panel-info panel text-center">
                            <div class="panel-heading">

                           you asked: {{$message->owner->name}}

                            </div>
                            
                            <h1 >{{$message['body']}}</h1>
                            <span>{{$message->created_at->diffForHumans()}}</span>
                            <div class="panel-body">
                            @if($message->published ===1)
                                   <h1>{{$message->response->body}}</h1>
                            @else
                                <h1>not answered yet!</h1>
                            @endif
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
      

    </section>



@endsection
