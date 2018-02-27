@extends('layouts.main')

@section('main')
    <section class="questions">
        <div class="container">
            <h1 class="text-center">your url : <a href="/users/{{auth()->id()}}"> {{$_SERVER['HTTP_HOST']}}/users/{{auth()->id()}} </a></h1>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @foreach($questions as $question)
                        <div class="panel-info panel text-center">
                            <div class="panel-heading">

                                @if(isset($question->sender))
                                    <a href="/users/{{$question->sender->id}}">{{$question->sender->name}}</a>
                                @else
                                    Anon

                                @endif

                            </div>
                            <div class="panel-body">


                            </div>
                            <h1 >{{$question['body']}}</h1>
                            <span>{{$question->created_at->diffForHumans()}}</span>
                            <form action="/publish/{{$question->id}}" class="text-center" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="response">response:</label>
                                    <textarea name='response' class="form-control" rows="5" id="response">{{$question->response->body or '' }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary text-center">
                                    @if($question->published)
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
        
        <div class="text-center">
        {{ $questions->links() }}

        </div>

    </section>



@endsection
