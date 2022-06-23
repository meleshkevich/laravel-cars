<nav>
    <a href="/">Home</a>

    @auth       
    
        <a href="/create-product">Add new product</a>
        Hey, {{ Auth::user()->name }}
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button>Log out</button>
        </form>
        
        @else
            <a href="{{ route('login') }}">Login</a>  

    @endauth
    Or        
        @guest
        <a href='{{ route('register') }}'> Register here! </a>        
        @endguest
        
</nav>