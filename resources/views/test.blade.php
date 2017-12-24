@extends('layouts.main')

@section('main')
    <section class="main">
        <div class="container">
            <div class="row">

                <div class="col-md-8 blue" id="main">
                    <h2 class="text-center">Who Are We!</h2>
                    <p class="text-center lead">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                    </p>
                    <div class="row">


                    </div>
                </div>
                <div class="col-md-4 side-bar red" id="sideBar">
                    <h3>People you may follow</h3>
                    <div class="row">
                        @foreach($users as $user)
                            <div class="person">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle center-block" src="{{Storage::url($user->profile_photo) }}" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4><a href="users/{{$user->id}}">{{$user->name}}</a></h4>
                                </div>
                                <div class="clearfix"></div>

                            </div>
                        @endforeach

                    </div>


                </div>

            </div>

        </div>

        </div>


    </section>

    @endsection


