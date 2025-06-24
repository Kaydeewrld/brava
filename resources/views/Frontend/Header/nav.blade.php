<div class="navigation d-none d-lg-block">
    <nav class="navigation__menu" id="main__menu">
        <ul class="list-unstyled">
            <li class="">
                <a href="{{route('index')}}" class="navigation__menu--item__link">Home</a>
               
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Rooms</a>
                <ul class="submenu sub__style" role="menu">
                    <li role="menuitem" class="has-child has-arrow">
                        <a href="#">Standard & Executive</a>
                        <ul class="sub__style" role="menu">
                            <li role="menuitem"><a href="{{route('roommini')}}">Mini Room</a></li>
                            <li role="menuitem"><a href="{{route('deluxeroom')}}">Deluxe Room</a></li>
                            <li role="menuitem"><a href="{{route('premiumroom')}}">Premium Room</a></li>
                            <li role="menuitem"><a href="{{route('executiveroom')}}">Executive Room</a></li>
                        </ul>
                    </li>
                    <li role="menuitem" class="has-child has-arrow">
                        <a href="#">Luxury & Presidential</a>
                        <ul class="sub__style" role="menu">
                            <li role="menuitem"><a href="{{route('executiveterrace')}}">Executive Terrace</a></li>
                            <li role="menuitem"><a href="{{route('presidential')}}">Presidential Suite 1 Room</a></li>
                            <li role="menuitem"><a href="{{route('presidentialroom')}}">Presidential Suite 2 Rooms</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </li>

           
            <li class="navigation__menu--item">
                <a href="{{route('about')}}" class="navigation__menu--item__link">About Us</a>
            </li>
         
 <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Service</a>
                <ul class="submenu sub__style" role="menu">
                			
                    <li role="menuitem"><a href="{{route('restaurant')}}">Restaurant & Bar</a></li>
                    <li role="menuitem"><a href="{{route('gallery')}}">Gallery</a></li>
                    <li role="menuitem"><a href="{{route('service')}}">Service</a></li>
                   
                </ul>
            </li>
            <li class="navigation__menu--item">
                <a href="{{route('contact')}}" class="navigation__menu--item__link">Contact</a>
            </li>
        </ul>
    </nav>
</div>
