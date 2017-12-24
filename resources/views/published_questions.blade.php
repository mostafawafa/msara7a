@extends('layouts.main')

@section('main')
    <section class="publishedQuestions">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-thumbnail center-block img-circle" src="{{Storage::url($user->profile_photo)}}" alt="">

                    <h1 class="text-center"> {{$user->name}} </h1>
                    <p class="lead overview text-center">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                    </p>


                </div>
                <div class="col-md-8">

                    @foreach($questions as $question)
                        <div class="center-block panel-info panel_cust panel text-center">
                            @if($question->sender !== null)
                                <div class="panel-heading"><a href="/users/{{$question->sender->id}}">{{$question->sender->name}}</a> Asks:</div>
                            @endif
                            <div class="panel-body">


                            </div>
                            <h1 >{{$question['body']}}</h1>
                            <span>{{$question->created_at->diffForHumans()}}</span>

                            @if(isset($question->response))

                                <h2>{{$user->name}} says: {{$question->response->body}}</h2>

                            @endif

                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
