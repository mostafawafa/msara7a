@extends('layouts.main')

@section('main')
    <section class="admin-users">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">

                    <form action="/admin/search" class="form-inline">
                        SEARCH BY:
                        <div class="radio-inline">
                            <label><input value="name" type="radio" name="type">Name</label>
                        </div>
                        <div class="radio-inline">
                            <label><input value="email" type="radio" name="type">Email</label>
                        </div>
                        <div class="radio-inline ">
                            <label><input  value="username" type="radio" name="type">Username</label>
                        </div>
                        <div class="form-group">

                            <input type="text" name="s" class="form-control">

                        </div>
                        <button type="submit" class="btn btn-default">search</button>



                    </form>
                </div>

            </div>

            <table class="table table-bordered">
                <thead>
                <tr>

                    <th>id</th>
                    <th>name</th>
                    <th>userName</th>
                    <th>Email</th>
                    <th>joined at</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->user_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td><a href="/admin/edit/{{$user['id']}}">edit</a></td>
                        <td><a href="user/{{$user['id']}}/delete">delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                {{ $users->links() }}


            </div>
        </div>



    </section>


@endsection
