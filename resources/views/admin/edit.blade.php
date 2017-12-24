@extends('layouts.main')

@section('main')
    <section class="admin-users">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form class="center-block form-horizontal text-center" action="/admin/edit/{{$user->id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class='control-label col-md-2 col-md-offset-2' for="Name">Name:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="Name" name="name" value="{{$user->name}}">
                                @if($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>

                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="control-label col-md-2 col-md-offset-2">Email:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" id="Email" value="{{$user->email}}">
                                @if($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>

                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2 col-md-offset-2 " for="profilePicture">Upload:</label>
                            <div class="col-md-6">
                                <img class="previous-image pull-left img-thumbnail img-circle" src="{{ URL::to('/') . '/' . $user->profile_photo}}" alt="previous photo">

                                <input type="file" class="form-control" name="profilePicture" id="profilePicture">
                                @if($errors->has('profilePicture'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('profilePicture')}}</strong>
                                    </span>

                                @endif

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Facebook" class="control-label col-md-2 col-md-offset-2">Facebook:</label>
                            <div class="col-md-6">
                                <input type="text"  class="form-control" value="{{$user->facebook}}" name="facebook" id="Facebook">
                            </div>
                            @if($errors->has('facebook'))
                                <span class="help-block">
                                        <strong>{{$errors->first('facebook')}}</strong>
                                    </span>

                            @endif
                        </div>

                        <div class="form-group">
                            <label for="Twitter" class="control-label col-md-2 col-md-offset-2">Twitter:</label>
                            <div class="col-md-6">
                                <input type="text"  class="form-control" name="twitter" value="{{$user->twitter}}" id="Twitter">
                            </div>
                            @if($errors->has('twitter'))
                                <span class="help-block">
                                        <strong>{{$errors->first('twitter')}}</strong>
                                    </span>

                            @endif
                        </div>
                        <div class="form-group">
                            <label for="googlePlus" class="control-label col-md-2 col-md-offset-2">Google:</label>
                            <div class="col-md-6">
                                <input type="text"  class="form-control" name="google" value="{{$user->google_plus}}" id="googlePlus">
                            </div>
                            @if($errors->has('google'))
                                <span class="help-block">
                                                                 <strong>{{$errors->first('google')}}</strong>
                                                             </span>

                            @endif
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>

                    </form>

                </div>

            </div>

        </div>
    </section>


@endsection
