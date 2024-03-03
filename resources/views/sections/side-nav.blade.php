<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <ul>
        <li>
            <a href="javascript:;.html" class="side-menu side-menu{{ request()->is("/") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="home"></i></div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a href="{{route('apartment.index')}}" class="side-menu side-menu{{ request()->is("apartment") || request()->is('/apartment/*') ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="inbox"></i></div>
                <div class="side-menu__title"> Apartment</div>
            </a>
        </li>
        <li>
            <a href="{{ route('slider.index') }}"
               class="side-menu side-menu{{ request()->is("slider") || request()->is('/slider/*') ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="monitor"></i></div>
                <div class="side-menu__title">
                    Slider
                </div>
            </a>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
