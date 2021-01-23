<div class="card" style="width: 18rem;">
    <div class="chat_container" style="background-image: url({{ (!empty(Auth::user()->image))?url('storage/'.Auth::user()->image):url('media/profile.jpg') }});" >
        <div class="overlay" >
            
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush mt-2">
            <a href="{{ route('user.dashboard') }}" class="btn btn-sm btn-primary btn-block">Home</a>
            <a href="{{ route('change.password') }}" class="btn btn-sm btn-primary btn-block">Change Password</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="btn btn-sm btn-danger btn-block"><i class="icon ion-power"></i> Sign Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</div>