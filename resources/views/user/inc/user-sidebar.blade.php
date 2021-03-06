<div class="card" style="width: 18rem;">
    <div class="chat_container" style="background-image: url({{ (!empty(Auth::user()->image))?url(Auth::user()->image):url('media/profile.jpg') }});" >
        <div class="overlay" >
            
        </div>
    </div>
    
    <div class="card-body">
        {{-- <img class="card-img-top" src="{{ (Auth::user()->image)?asset(Auth::user()->image):asset('media/profile.jpg') }}" style="border-radius:50%" height="100%" width="100%" alt=""> --}}
        <ul class="list-group list-group-flush mt-2">
            <a href="{{ route('user.dashboard') }}" class="btn btn-sm btn-primary btn-block">Home</a>
            <a href="{{ route('my.order') }}" class="btn btn-sm btn-primary btn-block">My Orders</a>
            <a href="{{ route('return.order') }}" class="btn btn-sm btn-primary btn-block">Return Orders</a>
            <a href="{{ route('cancle.order') }}" class="btn btn-sm btn-primary btn-block">Cancle Orders</a>
            <a href="{{ route('change.password') }}" class="btn btn-sm btn-primary btn-block">Change Password</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="btn btn-sm btn-danger btn-block"><i class="icon ion-power"></i> Sign Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</div>