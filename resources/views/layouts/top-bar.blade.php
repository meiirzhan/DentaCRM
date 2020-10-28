<div class="d-flex flex-sm-row flex-column">
    <h6 class="branch-address mr-auto order-sm-1 order-2">{{\App\Address::first()->name}}</h6>
    <div class="d-flex order-sm-2 order-1 justify-content-end">
        <a href="{{ url('/'.$user->role->name).'/cabinet' }}">
            <div class="d-flex user-info">
                <img src="/img/avatar.svg" class="avatar" alt="Paris">
                <div class="d-flex flex-column align-items-center justify-content-center user-information">
                    <p class="user-name">{{$user->name}} {{substr($user->lastname??'', 0, 1)}}. {{substr($user->middlename??'', 0, 1)}}.</p>
                    <p>{{$user->role->display_name}}</p>
                </div>
            </div>
        </a>
        <div class="bell">
            <button class="btn">
                <img src="/img/bell-on.svg" alt="">
            </button>
        </div>
        <div class="logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn">
                    <img src="/img/logout.svg" alt="">
                </button>
            </form>
        </div>
    </div>
</div>
