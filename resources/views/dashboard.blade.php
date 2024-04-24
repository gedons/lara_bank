<!DOCTYPE html>
<html   lang="en" >

<head>
	<!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/png" href="{{asset('blolgo.png')}}" />
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
<!-- Core Css -->
<link rel="stylesheet" href="{{asset('assets/css/theme.css')}}" />
<title>Client Dashboard - {{ config('app.name', 'Laravel') }}</title>
</head>

<body class=" bg-white">
	<main>
		<!--start the project-->
		<div id="main-wrapper" class=" flex">

			<aside id="application-sidebar-brand"
				class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 fixed top-0 with-vertical h-screen z-[999] flex-shrink-0 border-r-[1px] w-[270px] border-gray-400  bg-white left-sidebar   transition-all duration-300" >
				<!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="p-5" >
                    <a href="/" class="text-nowrap">
                        <img
                        style="width: 100px; margin-bottom: -50px;"
                        src="blolgo.png"
                        alt="Logo-Dark"
                        />
                    </a>
                </div>
                <div class="scroll-sidebar" data-simplebar="">
                <div class="px-6 mt-8" >
                    <nav class=" w-full flex flex-col sidebar-nav">
                    <ul  id="sidebarnav" class="text-gray-600 text-sm">
                        <li class="text-xs font-bold pb-4">
                        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                        <span>HOME</span>
                        </li>

                        <li class="sidebar-item">
                        <a href="{{route('dashboard')}}" class="sidebar-link gap-3 py-2 px-3  rounded-md  w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                        >
                            <i class="ti ti-layout-dashboard  text-xl"></i> <span>Dashboard</span>
                        </a>
                        </li>

                        <li class="text-xs font-bold mb-4 mt-8">
                        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                        <span>ACTIONS</span>
                        </li>

                        <li class="sidebar-item">
                        <a href="{{route('profile.transactions')}}" class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                        >
                            <i class="ti ti-article  text-xl"></i> <span>Transactions</span>
                        </a>
                        </li>

                        <li class="sidebar-item">
                        <a href="{{route('profile.payments')}}" class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                        >
                            <i class="ti ti-alert-circle  text-xl"></i> <span>Payments</span>
                        </a>
                        </li>

                        <li class="sidebar-item">
                        <a href="{{route('profile.account')}}" class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                        >
                            <i class="ti ti-cards  text-xl"></i> <span>Accounts</span>
                        </a>
                        </li>

                        <li class="sidebar-item">
                        <a href="{{route('profile.fund')}}" class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                        >
                            <i class="ti ti-file-description  text-xl"></i> <span>Fund Account</span>
                        </a>
                        </li>

                        <li class="text-xs font-bold mb-4 mt-8">
                        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                        <span>AUTH</span>
                        </li>

                        <li class="sidebar-item">
                        <a :href="route('logout')" class="sidebar-link gap-3 py-2 px-3 cursor-pointer rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                         onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                            <i class="ti ti-login  text-xl"></i> <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </li>

                        <li class="text-xs font-bold mb-4 mt-8">
                        <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                        <span>EXTRA</span>
                        </li>

                        <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                        >
                            <i class="ti ti-mood-happy  text-xl"></i> <span>Icons</span>
                        </a>
                        </li>

                        <li class="sidebar-item">
                        <a class="sidebar-link gap-3 py-2 px-3  rounded-md w-full flex items-center hover:text-blue-600 hover:bg-blue-500"
                        >
                            <i class="ti ti-aperture  text-xl"></i> <span>Sample Page</span>
                        </a>
                        </li>

                    </ul>
                    </nav>
                </div>
                </div>

                <!-- Bottom Upgrade Option -->
                <div class="m-6  relative">
                    <div class="bg-blue-500 p-5 rounded-md flex items-center justify-between">
                        @if ($user->accounts->isEmpty() && $user->cryptoWallets->isEmpty())
                            <div>
                                <h5 class="text-base font-semibold text-gray-700 mb-3">Accounts</h5>
                                <a href="{{route('profile.account')}}" class="text-xs font-semibold hover:bg-blue-700 text-white bg-blue-600 rounded-md  px-4 py-2">Create</a>
                                </div>
                                <div class="-mt-12 -mr-2">
                                <img src="./assets/images/profile/rocket.png" class="max-w-fit"  alt="profile" />
                            </div>
                        @else
                        <div>
                            <h5 class="text-base font-semibold text-gray-700 mb-3">Fund Account</h5>
                            <a href="{{route('profile.fund')}}" class="text-xs font-semibold hover:bg-blue-700 text-white bg-blue-600 rounded-md  px-4 py-2">Fund</a>
                            </div>
                            <div class="-mt-12 -mr-2">
                            <img src="./assets/images/profile/rocket.png" class="max-w-fit"  alt="profile" />
                        </div>
                        @endif
                    </div>
                </div>
                 <!-- </aside> -->
			</aside>

			<div class=" w-full page-wrapper overflow-hidden">
				<!--  Header Start -->
				<header class="container full-container w-full text-sm py-5 xl:px-9 px-5">
                    <nav class=" w-full bg-gray-800  flex items-center justify-between" aria-label="Global">
                            <ul class="icon-nav flex items-center gap-4">
                                <li class="relative xl:hidden">
                                    <a class="text-xl  icon-hover cursor-pointer text-heading"
                                        id="headerCollapse" data-hs-overlay="#application-sidebar-brand"
                                        aria-controls="application-sidebar-brand" aria-label="Toggle navigation" href="javascript:void(0)">
                                        <i class="ti ti-menu-2 relative z-1"></i>
                                    </a>
                                </li>

                                <li class="relative">
                                    <div class="hs-dropdown relative inline-flex [--placement:bottom-left] sm:[--trigger:hover]">
                                        <a class="relative hs-dropdown-toggle inline-flex  icon-hover text-gray-600" href="#">
                                            <i class="ti ti-bell-ringing text-xl relative z-[1]"></i>
                                            <div
                                                class="absolute inline-flex items-center justify-center  text-white text-[11px] font-medium  bg-blue-600 w-2 h-2 rounded-full -top-[1px] -right-[6px]">
                                            </div>
                                        </a>
                                        <div class="card hs-dropdown-menu transition-[opacity,margin] border border-gray-400 rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[300px] hidden z-[12]"
                                            aria-labelledby="hs-dropdown-custom-icon-trigger">
                                            <div>
                                            <h3 class="text-gray-600 font-semibold text-base px-6 py-3">Notification</h3>
                                            <ul class="list-none  flex flex-col">
                                                <li>
                                            <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                                <p class="text-sm text-gray-600 font-semibold">Roman Joined the Team!</p>
                                                <p class="text-xs text-gray-500 font-medium">Congratulate him</p>
                                            </a>
                                                </li>
                                                <li>
                                                <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                                    <p class="text-sm text-gray-600 font-semibold">New message received</p>
                                                    <p class="text-xs text-gray-500 font-medium">Salma sent you new message</p>
                                                </a>
                                                </li>
                                                <li>
                                                <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                                    <p class="text-sm text-gray-600 font-semibold">New Payment received</p>
                                                    <p class="text-xs text-gray-500 font-medium">Check your earnings</p>
                                                </a>
                                                </li>
                                                <li>
                                                <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                                    <p class="text-sm text-gray-600 font-semibold">Jolly completed tasks</p>
                                                    <p class="text-xs text-gray-500 font-medium">Assign her new tasks</p>
                                                </a>
                                                </li>
                                                <li>
                                                <a href="#" class="py-3 px-6 block hover:bg-blue-500">
                                                    <p class="text-sm text-gray-600 font-semibold">Roman Joined the Team!</p>
                                                    <p class="text-xs text-gray-500 font-medium">Congratulate him</p>
                                                </a>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="flex items-center gap-4">
                            <a class="btn font-medium hover:bg-blue-700 py-2" aria-current="page"> {{ Auth::user()->name }}</a>

                                <div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
                                    <a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
                                        <img class="object-cover w-9 h-9 rounded-full" src="./assets/images/profile/user-1.jpg" alt=""
                                            aria-hidden="true">
                                    </a>
                                    <div class="card hs-dropdown-menu transition-[opacity,margin] border border-gray-400 rounded-[7px] duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[200px] hidden z-[12]"
                                        aria-labelledby="hs-dropdown-custom-icon-trigger">
                                        <div class="card-body p-0 py-2">
                                            <a href="javscript:void(0)" class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-500">
                                                <i class="ti ti-user text-gray-500 text-xl "></i>
                                                <p class="text-sm text-gray-500">My Profile</p>
                                            </a>
                                            <a href="javscript:void(0)" class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-500">
                                                <i class="ti ti-mail text-gray-500 text-xl"></i>
                                                <p class="text-sm text-gray-500">My Account</p>
                                            </a>
                                            <a href="javscript:void(0)" class="flex gap-2 items-center px-4 py-[6px] hover:bg-blue-500">
                                                <i class="ti ti-list-check text-gray-500 text-xl "></i>
                                                <p class="text-sm text-gray-500">My Task</p>
                                            </a>
                                            <div class="px-4 mt-[7px] grid">
                                                <a href="../../pages/authentication-login.html" class="btn-outline-primary w-full hover:bg-blue-600 hover:text-white">Logout</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </nav>
				</header>
				<!--  Header End -->

				<!-- Main Content -->
				<main class="h-full overflow-y-auto  max-w-full  pt-4">
					<div class="container full-container py-5 flex flex-col gap-6">
                        <div class="grid grid-cols-1 xl:grid-cols-1 lg:grid-cols-1 gap-6">
                            <div class="card overflow-hidden">
                              <div class="card-body">
                                    <marquee direction="left" behavior="scroll" scrollamount="3" class="w-full">
                                        @foreach($currencies as $currency => $rate)
                                            <span class="inline-block px-4 py-2 bg-white shadow-md rounded-full mr-4">{{ $currency }}: {{ $rate }}</span>
                                        @endforeach
                                    </marquee>
                              </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
                                @if ($user->accounts->isEmpty() && $user->cryptoWallets->isEmpty())
                                    <div class="card">
                                        <div class="card-body">
                                        <h3 class="text-lg font-medium text-gray-600 mb-2">
                                            You currently have no accounts
                                        </h3>
                                        <p class="text-sm text-gray-500 pe-10">
                                            Create an account to perform different transactions. You can manage your
                                            accounts from here once you've added one.
                                        </p>
                                        <a href="{{route('profile.account')}}" class="mt-4 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 " href="#">
                                            Accounts
                                        </a>
                                        </div>
                                    </div>
                                @endif
                                <div class="card">
                                    <div class="card-body">
                                        <div class="flex gap-6 items-center justify-between">
                                        <div class="flex flex-col gap-5">
                                            <h4 class="text-gray-600 text-lg font-semibold">Account Balance</h4>
                                            <div class="flex flex-col gap-[18px]">
                                            <h3 class="text-[21px] font-semibold text-gray-600">$6,820</h3>
                                            <div class="flex items-center gap-1">
                                            <span class="flex items-center justify-center w-5 h-5 rounded-full bg-red-400">
                                                <i class="ti ti-arrow-down-right text-red-500"></i>
                                            </span>
                                            <p class="text-gray-600 text-sm font-normal ">+9%</p>
                                            <p class="text-gray-500 text-sm font-normal">last year</p>
                                            </div>
                                        </div>
                                        </div>

                                            <div class="w-11 h-11 flex justify-center items-center rounded-full bg-cyan-500 text-white self-start">
                                                <i class="ti ti-currency-dollar text-xl"></i>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="earning"></div>
                                </div>
                                {{-- <div class="card">
                                    <div class="card-body">
                                        <div class="flex gap-6 items-center justify-between">
                                        <div class="flex flex-col gap-5">
                                            <h4 class="text-gray-600 text-lg font-semibold">Monthly Earnings</h4>
                                            <div class="flex flex-col gap-[18px]">
                                            <h3 class="text-[21px] font-semibold text-gray-600">$6,820</h3>
                                            <div class="flex items-center gap-1">
                                            <span class="flex items-center justify-center w-5 h-5 rounded-full bg-red-400">
                                                <i class="ti ti-arrow-down-right text-red-500"></i>
                                            </span>
                                            <p class="text-gray-600 text-sm font-normal ">+9%</p>
                                            <p class="text-gray-500 text-sm font-normal">last year</p>
                                            </div>
                                        </div>
                                        </div>

                                            <div class="w-11 h-11 flex justify-center items-center rounded-full bg-cyan-500 text-white self-start">
                                                <i class="ti ti-currency-dollar text-xl"></i>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="earning"></div>
                                </div> --}}



                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-1 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">

                            <div class="col-span-2">
                                <div class="card h-full">
                                    <div class="card-body">
                                        <h4 class="text-gray-600 text-lg font-semibold mb-6">Recent Transaction</h4>
                                        <div class="relative overflow-x-auto">
                                            <!-- table -->
                                            <table class="text-left w-full whitespace-nowrap text-sm">
                                                <thead class="text-gray-700">
                                                    <tr class="font-semibold text-gray-600">
                                                        <th scope="col" class="p-4">Id</th>
                                                        <th scope="col" class="p-4">Assigned</th>
                                                        <th scope="col" class="p-4">Name</th>
                                                        <th scope="col" class="p-4">Priority</th>
                                                        <th scope="col" class="p-4">Budget</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="p-4 font-semibold text-gray-600 ">1</td>
                                                        <td class="p-4">
                                                            <div class="flex flex-col gap-1">
                                                                <h3 class=" font-semibold text-gray-600">Sunil Joshi</h3>
                                                                <span class="font-normal text-gray-500">Web Designer</span>
                                                            </div>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="font-normal  text-gray-500">Elite Admin</span>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold bg-blue-600 text-white">Low</span>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="font-semibold text-base text-gray-600">$3.9</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-4 font-semibold text-gray-600 ">2</td>
                                                        <td class="p-4">
                                                            <div class="flex flex-col gap-1">
                                                                <h3 class="font-semibold text-gray-600">Andrew McDownland</h3>
                                                                <span class="font-normal text-gray-500">Project Manager</span>
                                                            </div>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="font-normal text-gray-500">Real Homes WP Theme</span>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold text-white bg-cyan-500">Medium</span>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="font-semibold text-base text-gray-600">$24.5k</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-4 font-semibold text-gray-600 ">3</td>
                                                        <td class="p-4">
                                                            <div class="flex flex-col gap-1">
                                                                <h3 class="font-semibold text-gray-600">Christopher Jamil</h3>
                                                                <span class="font-normal text-sm text-gray-500">Project Manager</span>
                                                            </div>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="font-normal text-gray-500">MedicalPro WP Theme</span>
                                                        </td>
                                                        <td class="p-4 ">
                                                            <span class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold text-white bg-red-500">High</span>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="font-semibold text-base text-gray-600">$12.8k</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-4 font-semibold text-gray-600 ">4</td>
                                                        <td class="p-4">
                                                            <div class="flex flex-col gap-1">
                                                                <h3 class="font-semibold text-gray-600">Nirav Joshi</h3>
                                                                <span class="font-normal text-sm text-gray-500">Frontend Engineer</span>
                                                            </div>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="font-normal text-sm text-gray-500">Hosting Press HTML</span>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="inline-flex items-center py-[3px] px-[10px] rounded-2xl font-semibold text-white bg-teal-500">Critical</span>
                                                        </td>
                                                        <td class="p-4">
                                                            <span class="font-semibold text-base text-gray-600">$2.4k</span>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-2 gap-6">
                            <div class="card overflow-hidden">
                                <div class="relative">
                                    <a href="javascript:void(0)">
                                        <img src="./assets/images/products/product-1.jpg" alt="product_img" class="w-full">
                                    </a>
                                    <a href="javascript:void(0)" class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                                        <i class="ti ti-basket text-base"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-base font-semibold text-gray-600 mb-1">Boat Headphone</h6>
                                    <div class="flex justify-between">
                                        <div class="flex gap-2 items-center">
                                            <h6 class="text-base text-gray-600 font-semibold">$50</h6>
                                            <span class="text-gray-500 text-sm">
                                                <del>$65</del>
                                            </span>
                                        </div>
                                        <ul class="list-none flex gap-1">
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden">
                                <div class="relative">
                                    <a href="javascript:void(0)">
                                        <img src="./assets/images/products/product-2.jpg" alt="product_img" class="w-full">
                                    </a>
                                    <a href="javascript:void(0)" class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                                        <i class="ti ti-basket text-base"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-base font-semibold text-gray-600 mb-1">MacBook Air Pro</h6>
                                    <div class="flex justify-between">
                                        <div class="flex gap-2 items-center">
                                            <h6 class="text-base text-gray-600 font-semibold">$650</h6>
                                            <span class="text-gray-500 text-sm">
                                                <del>$900</del>
                                            </span>
                                        </div>
                                        <ul class="list-none flex gap-1">
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden">
                                <div class="relative">
                                    <a href="javascript:void(0)">
                                        <img src="./assets/images/products/product-3.jpg" alt="product_img" class="w-full">
                                    </a>
                                    <a href="javascript:void(0)" class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                                        <i class="ti ti-basket text-base"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-base font-semibold text-gray-600 mb-1">Red Valvet Dress</h6>
                                    <div class="flex justify-between">
                                        <div class="flex gap-2 items-center">
                                            <h6 class="text-base text-gray-600 font-semibold">$150</h6>
                                            <span class="text-gray-500 text-sm">
                                                <del>$200</del>
                                            </span>
                                        </div>
                                        <ul class="list-none flex gap-1">
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden">
                                <div class="relative">
                                    <a href="javascript:void(0)">
                                        <img src="./assets/images/products/product-4.jpg" alt="product_img" class="w-full">
                                    </a>
                                    <a href="javascript:void(0)" class="bg-blue-600 w-8 h-8 flex justify-center items-center text-white rounded-full absolute bottom-0 right-0 mr-4 -mb-3">
                                        <i class="ti ti-basket text-base"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="text-base font-semibold text-gray-600 mb-1">Cute Soft Teddybear</h6>
                                    <div class="flex justify-between">
                                        <div class="flex gap-2 items-center">
                                            <h6 class="text-base text-gray-600 font-semibold">$285</h6>
                                            <span class="text-gray-500 text-sm">
                                                <del>$345</del>
                                            </span>
                                        </div>
                                        <ul class="list-none flex gap-1">
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" >
                                                <i class="ti ti-star text-yellow-500 text-sm"></i>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer>
                            <p class="text-base text-gray-500 font-normal p-3 text-center">
                                Design and Developed by <a href="https://newcityfc.com/" target="_blank" class="text-blue-600 underline hover:text-blue-700">NewCityFc</a>
                            </p>
                        </footer>
					</div>


				</main>
				<!-- Main Content End -->
			</div>
		</div>
		<!--end of project-->
	</main>



<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/iconify-icon/dist/iconify-icon.min.js')}}"></script>
<script src="{{asset('assets/libs/@preline/dropdown/index.js')}}"></script>
<script src="{{asset('assets/libs/@preline/overlay/index.js')}}"></script>
<script src="{{asset('assets/js/sidebarmenu.js')}}"></script>



	<script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
</body>

</html>
