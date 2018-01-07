@extends('layouts.main')


@section('main')
    <section class="ask">
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
                    <form class="send-form center-block text-center" action="/messages/{{$user->id}}" class="text-center" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name='message' class="form-control" rows="5" id="message"></textarea>
                        </div>
                        <select id="category" name='category' class="form-control" id="category">
                            <option value="question">question</option>
                            <option value="message">message</option>

                        </select>
                        <button id="sendMessage" type="button" class="btn btn-primary text-center">send</button>

                    </form>

                </div>
            </div>


            @if(count($errors)>1)

                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <strong>{{$error}}</strong>
                    </div>
                @endforeach
            @endif
            @if(  session()->has('message'))

                <div class="alert alert-success">
                    <strong>{{session('message')}}</strong>
                </div>
            @endif


        </div>

    </section>



@endsection

@section('scripts')
    <script>
        $('#sendMessage').click(function(){
            axios.post('/messages/{{$user->id}}',{
                'message':$('#message').val      (),
                'category':$('#category').val()
            }).then(function(response){
                console.log('ok');

            }).catch(function(error){
                console.log(error);
            })

        })
    </script>

@endsection