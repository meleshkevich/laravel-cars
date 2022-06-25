<nav>
    <div class="subNav">
        <ul class="subNav-list">
            <li class="subNav-list-item">
                <a class="subNav-list-item-link" href="/">Home</a>
            </li>
                    {{-- <a href="/">Home</a> --}}    
        @auth       
                
            <li class="subNav-list-item">
                    <a class="subNav-list-item-link" href="/create-product">Add new product</a>
            </li>
            <span> Hey, {{ Auth::user()->name }}</span>
                
            <li class="subNav-list-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="subNav-list-btn">Log out</button>
                    </form>
            </li>
        @else
            <li class="subNav-list-item">
                <a class="subNav-list-item-link" href="{{ route('login') }}" >Login</a>  
            </li>        
        @endauth
            
            <li class="subNav-list-item">   
                @guest
                <a class="subNav-list-item-link" href='{{ route('register') }}' > Register here! </a>        
                @endguest
            </li>
        </ul>
    </div> 
</nav>