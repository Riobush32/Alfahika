@extends('main.test')

@section('content')

<div class="w-[97vw] p-1 my-2">

    <div class="navbar bg-base-100 border-2 rounded-3xl drop-shadow-lg">

        <div class="dropdown">
            <label tabindex="0" class="btn m-1 btn-ghost rounded-full border-none bg-transparentent">
                <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512">
                    <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                </svg>
            </label>
            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
            </ul>
        </div>

        {{-- Brand --}}
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">AlfahikaStore</a>
        </div>
        <div class="flex-none">
            {{-- cart icon  --}}
            <div class="dropdown dropdown-end hidden">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="badge badge-sm indicator-item">8</span>
                    </div>
                </label>
                <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                    <div class="card-body">
                        <span class="font-bold text-lg">8 Items</span>
                        <span class="text-info">Subtotal: $999</span>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">View cart</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- favorite icon  --}}
            <div class="dropdown dropdown-end hidden">
                <label tabindex="0" class="btn m-1 bg-transparent border-none btn-ghost rounded-full">
                    <div class="indicator">
                        <span class="material-symbols-sharp text-slate-900">
                            favorite
                        </span>
                        <span class="badge badge-sm indicator-item">7</span>
                    </div>
                </label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                </ul>
            </div>

            {{-- profile --}}
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://placeimg.com/80/80/people" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-between">
                            Card
                            <span class="badge">8</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-between">
                            Favorite
                            <span class="badge">7</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>

            
        </div>
    </div>

</div>

@endsection
