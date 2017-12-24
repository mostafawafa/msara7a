<nav class="navbar">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">MSARA7A</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/home">Home</a></li>
            @if(auth()->check())
                <li><a href="/users/{{auth()->id()}}">Profile</a></li>
                <li><a href="/home/questions">questions</a></li>
                {{--<li><a href="/home/messages">messages</a></li>--}}
            @endif
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(!auth()->check())
                <li><a href="/login">login</a></li>
                <li><a href="register">register</a></li>
                @else
                <li><a href="/setting">setting</a></li>
                <li><a href="/logout">logout</a></li>
            @endif
        </ul>

    </div>
</nav>