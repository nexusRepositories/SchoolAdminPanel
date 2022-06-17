<div id="kt_header" style="" class="header align-items-stretch">
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor"></path>
                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor"></path>
                    </svg>
                </span>
            </div>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            {{-- LEFT BLOCK OF MENU --}}
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    
                </div>
            </div>
            {{-- RIGHT BLOCK OF MENU --}}
            <div class="d-flex align-items-stretch flex-shrink-0">
                {{-- Search --}}
                <div class="d-flex align-items-stretch ms-1 ms-lg-3">
                    <div class="header-search d-flex align-items-stretch">
                        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                            <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Chat --}}
                <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor"></path>
                                <rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor"></rect>
                                <rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor"></rect>
                            </svg>
                        </span>
                        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                    </div>
                </div>
                {{-- User --}}
                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                    <div class="cursor-pointer" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" style="width: 32px; height: 32px; border-radius: 30%; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid lightgrey; object-fit: contain; overflow: hidden">
                        <img src="{{ $user->url ? asset($user->url) : asset('assets/user.svg') }}" alt="userpic" style="display: block; width: 100%; height: auto; max-height: 100%; max-width: 28px;">
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true" style="">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                @auth
                                    <div class="symbol symbol-50px me-5" style="width: 50px; height: 50px; border-radius: 15%; display: flex; flex-direction: row; justify-content: center; align-items: center; border: 1px solid lightgrey; object-fit: contain; overflow: hidden">
                                        <img src="{{ $user->url ? asset($user->url) : asset('assets/user.svg') }}" alt="userpic" style="display: block; width: 100%; height: auto; max-height: 100%; max-width: 48px;">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                            {{ $user->fullName() }} 
                                        </div>
                                    </div>
                                @endauth
                                @guest
                                    <div class="symbol symbol-50px me-5">
                                        <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor"/>
                                                <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">Guest</div>
                                    </div>
                                @endguest
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        @auth
                            <div class="menu-item px-5">
                                <a href="{{ route('profile_page') }}" class="menu-link px-5">My Profile</a>
                            </div>
                            <div class="menu-item px-5">
                                <a href="{{ route('settings_page') }}" class="menu-link px-5">Account Settings</a>
                            </div>
                            <div class="separator my-2"></div>
                            <form class="menu-item px-5" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="menu-white-800 menu-link px-5 btn-block border-0 w-100 btn btn-outline-danger">Sign Out</button>
                            </form>
                        @else
                            <div class="menu-item px-5">
                                <a href="{{ route('login') }}" class="menu-link px-5">Sign In</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
