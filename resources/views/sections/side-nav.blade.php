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
            <a href="{{route('apartment.index')}}"
               class="side-menu side-menu{{ request()->is("apartment") || request()->is('/apartment/*') ? "--active" : "" }}">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-building">
                        <rect width="16" height="20" x="4" y="2" rx="2" ry="2"/>
                        <path d="M9 22v-4h6v4"/>
                        <path d="M8 6h.01"/>
                        <path d="M16 6h.01"/>
                        <path d="M12 6h.01"/>
                        <path d="M12 10h.01"/>
                        <path d="M12 14h.01"/>
                        <path d="M16 10h.01"/>
                        <path d="M16 14h.01"/>
                        <path d="M8 10h.01"/>
                        <path d="M8 14h.01"/>
                    </svg>
                </div>
                <div class="side-menu__title"> Apartment</div>
            </a>
        </li>
        <li>
            <a href="{{route('apartment.plan.index')}}"
               class="side-menu side-menu{{ request()->is("apartment/plan") || request()->is('/apartment/plan/*') ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="inbox"></i></div>
                <div class="side-menu__title">Apartment Plan</div>
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
        <li>
            <a href="{{ route('partner.index') }}"
               class="side-menu side-menu{{ request()->is("partner") || request()->is('/partner/*') ? "--active" : "" }}">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-handshake">
                        <path d="m11 17 2 2a1 1 0 1 0 3-3"/>
                        <path
                            d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/>
                        <path d="m21 3 1 11h-2"/>
                        <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"/>
                        <path d="M3 4h8"/>
                    </svg>
                </div>
                <div class="side-menu__title">
                    Partners
                </div>
            </a>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->
