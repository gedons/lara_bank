<!--Start Layout-->
<!DOCTYPE html>
<html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  x-data="layout()"
  :class="{
  'dark': $store.app.isDark,
  '': !$store.app.isDark
}"
>

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script type="module" src="main-362f7ad5.js"></script>
    <link rel="stylesheet" href="main-6894412f.css">
  </head>
  <body class="font-sans antialiased w-full h-full bg-white dark:bg-muted-900">
    <!-- prettier-ignore -->

    <!--Site sidebar-->
    <div
      id="sidebar"
      x-data="sidebar()"
      x-cloak
      class="
        fixed
        top-0
        left-0
        h-full
        bg-muted-100
        dark:bg-muted-1000
        transition-all
        duration-300
        z-50
      "
      :class="[
        $store.app.isLayoutCompact ? 'w-[80px]' : 'w-[250px]',
        $store.app.isMobileOpen ? 'translate-x-0 lg:translate-x-0' : '-translate-x-full lg:translate-x-0'
      ]"
    >
      <!--Header-->
      <div class="w-full h-20 flex items-center justify-between px-6">
        <a href="{{route('dashboard')}}" class="flex items-center gap-2">
          <img
            src="blolgo.png"
            class="w-14 h-14 dark:invert"
            alt="App logo"
            width="48"
            height="48"
          />
          <p>Dashboard</p>
        </a>

        <!--Fold button-->
        <button
          type="button"
          class="
            hidden
            items-center
            justify-center
            w-10
            h-10
            mask mask-blob
            hover:bg-muted-200
            dark:hover:bg-muted-800
            text-muted-700
            dark:text-muted-400
            transition-colors
            duration-300
            cursor-pointer
          "
          :class="$store.app.isLayoutCompact ? 'hidden' : 'lg:flex'"
          @click="foldSidebar()"
        >
          <i class="iconify w-5 h-5" data-icon="ph:dots-nine-duotone"></i>
        </button>

        <!--Mobile button-->
        <button
          type="button"
          class="
            flex
            lg:hidden
            items-center
            justify-center
            w-10
            h-10
            mask mask-blob
            hover:bg-muted-200
            dark:hover:bg-muted-800
            text-muted-700
            dark:text-muted-400
            transition-colors
            duration-300
            cursor-pointer
          "
          @click="$store.app.isMobileOpen = false"
        >
          <i class="iconify w-5 h-5" data-icon="lucide:arrow-left"></i>
        </button>
      </div>


      <!--Body-->
      <div
        class="
          relative
          h-[calc(100%_-_10rem)]
          w-full
          overflow-y-auto
          slimscroll
          py-6
        "
        :class="$store.app.isLayoutCompact ? 'px-4' : 'px-6'"
      >
        <!--Menu-->
        <ul id="sidebar-menu" class="space-y-3">
          <!--Menu item-->
          <li>
            <a
              href="{{route('dashboard')}}"
              class="
                flex
                items-center
                gap-4
                py-3
                rounded-lg
                text-muted-500
                hover:bg-muted-200
                dark:hover:bg-muted-900
                hover:text-muted-600
                dark:hover:text-muted-200
                transition-colors
                duration-300
              "
              :class="$store.app.isLayoutCompact ? 'px-1 justify-center' : 'px-4'"
            >
              <i class="iconify w-6 h-6" data-icon="ph:gauge-duotone"></i>
              <span
                class="font-sans text-sm"
                :class="$store.app.isLayoutCompact ? 'hidden' : 'block'"
              >
                Dashboard
              </span>
            </a>
          </li>
          <li>
            <a
              href="{{route('profile.transactions')}}"
              class="
                flex
                items-center
                gap-4
                py-3
                rounded-lg
                text-muted-500
                hover:bg-muted-200
                dark:hover:bg-muted-900
                hover:text-muted-600
                dark:hover:text-muted-200
                transition-colors
                duration-300
              "
              :class="$store.app.isLayoutCompact ? 'px-1 justify-center' : 'px-4'"
            >
              <i
                class="iconify w-6 h-6"
                data-icon="ph:arrows-left-right-duotone"
              ></i>
              <span
                class="font-sans text-sm"
                :class="$store.app.isLayoutCompact ? 'hidden' : 'block'"
              >
                Transactions
              </span>
            </a>
          </li>
          <li>
            <a
              href="{{route('profile.payments')}}"
              class="
                flex
                items-center
                gap-4
                py-3
                rounded-lg
                text-muted-500
                hover:bg-muted-200
                dark:hover:bg-muted-900
                hover:text-muted-600
                dark:hover:text-muted-200
                transition-colors
                duration-300
              "
              :class="$store.app.isLayoutCompact ? 'px-1 justify-center' : 'px-4'"
            >
              <i class="iconify w-6 h-6" data-icon="ph:check-duotone"></i>
              <span
                class="font-sans text-sm"
                :class="$store.app.isLayoutCompact ? 'hidden' : 'block'"
              >
                Payments
              </span>
            </a>
          </li>
          <li>
            <a
              href="{{route('profile.cards')}}"
              class="
                flex
                items-center
                gap-4
                py-3
                rounded-lg
                text-muted-500
                hover:bg-muted-200
                dark:hover:bg-muted-900
                hover:text-muted-600
                dark:hover:text-muted-200
                transition-colors
                duration-300
              "
              :class="$store.app.isLayoutCompact ? 'px-1 justify-center' : 'px-4'"
            >
              <i class="iconify w-6 h-6" data-icon="ph:credit-card-duotone"></i>
              <span
                class="font-sans text-sm"
                :class="$store.app.isLayoutCompact ? 'hidden' : 'block'"
              >
                Cards
              </span>
            </a>
          </li>
          <li>
            <a
              href="{{route('profile.account')}}"
              class="
                flex
                items-center
                gap-4
                py-3
                rounded-lg
                text-muted-500
                hover:bg-muted-200
                dark:hover:bg-muted-900
                hover:text-muted-600
                dark:hover:text-muted-200
                transition-colors
                duration-300
              "
              :class="$store.app.isLayoutCompact ? 'px-1 justify-center' : 'px-4'"
            >
              <i class="iconify w-6 h-6" data-icon="ph:infinity-duotone"></i>
              <span
                class="font-sans text-sm"
                :class="$store.app.isLayoutCompact ? 'hidden' : 'block'"
              >
                Account
              </span>
            </a>
          </li>

        </ul>
      </div>


      <!--Footer-->
      <div
        class="w-full h-20 flex items-center justify-between"
        :class="$store.app.isLayoutCompact ? 'px-2' : 'px-6'"
       >
        <!--Account menu-->
        <div
          x-data="dropdown()"
          class="relative w-full h-20 flex items-center justify-between"
          @click.away="close()"
        >
          <!--Dropdown button-->
          <button type="button" class="w-full flex items-center gap-2" @click="open()">
            <img
              class="w-10 h-10 rounded-full"
              :class="$store.app.isLayoutCompact ? 'mx-auto' : 'mx-0'"
              src="blolgo.png"
              alt="User photo"
              width="40"
              height="40"
            />
            <span :class="$store.app.isLayoutCompact ? 'hidden' : 'block'">
              <h5 class="font-heading font-semibold text-muted-600 dark:text-muted-200">
                {{ Auth::user()->name }}
              </h5>
            </span>
            <i
              class="
                iconify
                w-5
                h-5
                ml-auto
                text-muted-400
                transition-transform
                duration-300
              "
              :class="[
                $store.app.isLayoutCompact ? 'hidden' : 'block',
                isOpen ? 'rotate-180' : ''
              ]"
              data-icon="lucide:chevron-up"
            ></i>
          </button>

          <!--Dropdown menu-->
          <div
            x-cloak
            x-show="isOpen"
            x-transition
            class="
              absolute
              -top-80
              -left-2
              w-[240px]
              overflow-y-auto
              slimscroll
              p-2
              rounded-lg
              bg-white
              dark:bg-muted-900
              border border-muted-200
              dark:border-muted-800
              shadow-2xl shadow-muted-400/20
              dark:shadow-muted-800/10
              z-20
            "
          >
            <!--Header-->
            <div
              class="
                flex
                items-center
                gap-x-2
                py-4
                px-6
                border-b border-muted-200
                dark:border-muted-700
              "
            >
              <div class="relative flex items-center justify-center h-12 w-12">
                <img
                  src="blolgo.png"
                  class="w-full h-full object-cover rounded-full"
                  alt="Profile image"
                  width="48"
                  height="48"
                />
              </div>
              <h3
                class="
                  font-sans
                  text-sm
                  font-medium
                  uppercase
                  text-muted-500
                  dark:text-muted-200
                "
              >
                Hi, {{ Auth::user()->name }}
              </h3>
            </div>
            <ul class="space-y-1 pt-2">
              <li>
                <a
                  href="documents.html"
                  class="
                    flex
                    items-center
                    gap-3
                    p-2
                    rounded-lg
                    text-muted-400
                    hover:text-primary-500 hover:bg-muted-100
                    dark:hover:bg-muted-800
                    transition-colors
                    duration-300
                  "
                >
                  <i class="iconify w-5 h-5" data-icon="ph:folder-duotone"></i>
                  <div class="font-sans">
                    <h5
                      class="text-xs font-semibold text-muted-800 dark:text-muted-200"
                    >
                      Send
                    </h5>
                    <p class="text-xs text-muted-400">Send some money</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  href="offers.html"
                  class="
                    flex
                    items-center
                    gap-3
                    p-2
                    rounded-lg
                    text-muted-400
                    hover:text-primary-500 hover:bg-muted-100
                    dark:hover:bg-muted-800
                    transition-colors
                    duration-300
                  "
                >
                  <i class="iconify w-5 h-5" data-icon="ph:gift-duotone"></i>
                  <div class="font-sans">
                    <h5
                      class="text-xs font-semibold text-muted-800 dark:text-muted-200"
                    >
                      Receive
                    </h5>
                    <p class="text-xs text-muted-400">Add or receive funds</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  href="settings.html"
                  class="
                    flex
                    items-center
                    gap-3
                    p-2
                    rounded-lg
                    text-muted-400
                    hover:text-primary-500 hover:bg-muted-100
                    dark:hover:bg-muted-800
                    transition-colors
                    duration-300
                  "
                >
                  <i class="iconify w-5 h-5" data-icon="ph:gear-six-duotone"></i>
                  <div class="font-sans">
                    <h5
                      class="text-xs font-semibold text-muted-800 dark:text-muted-200"
                    >
                      Settings
                    </h5>
                    <p class="text-xs text-muted-400">Manage preferences</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="
                    flex
                    items-center
                    gap-3
                    p-2
                    rounded-lg
                    text-muted-400
                    hover:text-primary-500 hover:bg-muted-100
                    dark:hover:bg-muted-800
                    transition-colors
                    duration-300
                    cursor-pointer
                  "
                  :href="route('logout')"
                  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  <i class="iconify w-5 h-5" data-icon="ph:sign-out-duotone"></i>
                  <div class="font-sans">
                    <h5
                      class="text-xs font-semibold text-muted-800 dark:text-muted-200"
                    >
                      Logout
                    </h5>
                    <p class="text-xs text-muted-400">Logout from account</p>
                  </div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--Site panel-->
    <div
      x-cloak
      class="
        fixed
        top-0
        right-0
        h-full
        w-[280px]
        bg-white
        dark:bg-muted-1000
        shadow-2xl shadow-muted-400/20
        dark:shadow-muted-800/20
        transition-all
        duration-300
        z-40
      "
      :class="[
        $store.app.isPanelOpen ? 'translate-x-0' : 'translate-x-full'
      ]"
    >
      <!--Header-->
      <div
        class="
          w-full
          h-20
          flex
          items-center
          justify-between
          px-6
          border-b border-muted-200
          dark:border-muted-900
        "
      >
        <h3
          class="
            font-heading font-semibold
            uppercase
            text-xs text-muted-500
            dark:text-muted-100
          "
        >
          Action Bar
        </h3>

        <!--Close button-->
        <button
          type="button"
          class="
            flex
            items-center
            justify-center
            w-10
            h-10
            mask mask-blob
            hover:bg-muted-100
            dark:hover:bg-muted-800
            text-muted-700
            dark:text-muted-400
            transition-colors
            duration-300
            cursor-pointer
          "
          @click="$store.app.isPanelOpen = false"
        >
          <i class="iconify w-4 h-4" data-icon="ph:arrow-right-duotone"></i>
        </button>
      </div>
      <!--Body-->
      <div
        class="relative h-[calc(100%_-_5rem)] w-full overflow-y-auto slimscroll p-6"
      >
        <!--Placeholder-->
        <div class="py-6">
          <h4 class="font-heading text-muted-700 dark:text-muted-200">
            No action items.
          </h4>
          <p class="font-sans text-sm text-muted-400">
            It seems everything is up to date.
          </p>
        </div>
      </div>
    </div>

    <main
      x-cloak
      class="relative w-full overflow-hidden transition-all duration-300 z-10"
      :class="$store.app.isLayoutCompact ? 'ml-0 lg:w-[calc(100%_-_80px)] lg:ml-[80px]' : 'ml-0 lg:w-[calc(100%_-_250px)] lg:ml-[250px]'"
    >
      <!--Container-->
      <div
        class="
          w-full
          max-w-5xl
          min-h-screen
          mx-auto
          px-4
          md:px-6
          bg-white
          dark:bg-muted-900
        "
      >
        <!--Site navbar-->
        <div class="w-full flex items-center justify-between gap-6 py-4">
          <div class="flex items-center gap-4 grow max-w-md">
            <!--Expand sidebar button-->
            <button
              type="button"
              class="
                items-center
                justify-center
                w-10
                h-10
                mask mask-blob
                hover:bg-muted-200
                dark:hover:bg-muted-800
                text-muted-700
                dark:text-muted-400
                transition-colors
                duration-300
                cursor-pointer
              "
              :class="$store.app.isLayoutCompact ? 'lg:flex' : 'hidden'"
              @click="$store.app.isLayoutCompact = false"
            >
              <i class="iconify w-5 h-5" data-icon="ph:dots-nine-duotone"></i>
            </button>

            <!--Mobile menu-->
            <button
              type="button"
              class="
                flex
                lg:hidden
                items-center
                justify-center
                w-10
                h-10
                mask mask-blob
                hover:bg-muted-200
                dark:hover:bg-muted-900
                text-muted-700
                dark:text-muted-400
                transition-colors
                duration-300
                cursor-pointer
              "
              @click="$store.app.isMobileOpen = true"
            >
              <i class="iconify w-5 h-5" data-icon="ph:dots-nine-duotone"></i>
            </button>
            <!--Search-->
            <div
              x-data="search()"
              class="hidden md:block relative w-full rounded-md shadow-sm"
            >
              <!--Input-->
              <div class="relative group">
                <input
                  id="navbar-search-field"
                  x-model="searchTerms"
                  x-on:keyup="searchData()"
                  class="
                    w-full
                    h-10
                    bg-muted-100
                    dark:bg-muted-1000
                    rounded-lg
                    border border-transparent
                    focus:border-muted-200
                    dark:border-muted-800 dark:focus:border-muted-700
                    focus:bg-white
                    dark:focus:bg-muted-900
                    focus:shadow-xl focus:shadow-muted-400/10
                    dark:focus:shadow-muted-800/10
                    placeholder:text-muted-300
                    dark:placeholder:text-muted-700
                    text-base text-muted-600
                    dark:text-muted-200
                    pl-10
                    pr-4
                    py-2
                    transition-all
                    duration-300
                    tw-accessibility
                  "
                  placeholder="Search for anything..."
                  type="text"
                />
                <button
                  type="button"
                  class="
                    absolute
                    top-0
                    left-0
                    h-10
                    w-10
                    flex
                    justify-center
                    items-center
                    text-muted-400
                    dark:text-muted-600
                    group-focus-within:text-primary-500
                    transition-colors
                    duration-300
                    cursor-pointer
                  "
                >
                  <i class="iconify w-4 h-4" data-icon="lucide:search"></i>
                </button>
                <!--Empty button-->
                <button
                  type="button"
                  class="
                    absolute
                    top-0
                    right-0
                    h-10
                    w-10
                    flex
                    justify-center
                    items-center
                    text-muted-400
                    hover:text-muted-700
                    dark:hover:text-muted-100
                    transition-colors
                    duration-300
                    cursor-pointer
                  "
                  :class="searchTerms === '' ? 'hidden' : 'block'"
                  @click="closeSearch()"
                >
                  <i class="iconify w-4 h-4" data-icon="lucide:x"></i>
                </button>
              </div>

              <!--Results-->
              <div
                id="search-results"
                class="
                  hidden
                  absolute
                  top-12
                  left-0
                  w-full
                  max-h-[240px]
                  overflow-y-auto
                  slimscroll
                  p-2
                  rounded-lg
                  bg-white
                  dark:bg-muted-900
                  border border-muted-200
                  dark:border-muted-800
                  shadow-2xl shadow-muted-400/20
                  dark:shadow-muted-800/10
                  transition-all
                  duration-300
                  z-[90]
                "
              ></div>
            </div>
          </div>

          <div class="flex items-center gap-x-4">
            <!--Theme toggler-->
            <label
              class="
                relative
                block
                h-6
                w-14
                bg-muted-200
                dark:bg-muted-700
                rounded-full
                scale-[0.8]
              "
            >
              <input
                class="
                  peer
                  absolute
                  top-0
                  left-0
                  w-full
                  h-full
                  opacity-0
                  cursor-pointer
                  z-10
                "
                type="checkbox"
                :checked="$store.app.isDark"
                @click="toggleTheme()"
              />
              <span
                class="
                  absolute
                  -top-2
                  -left-1
                  flex
                  items-center
                  justify-center
                  h-10
                  w-10
                  bg-white
                  dark:bg-muted-900
                  border border-muted-200
                  dark:border-muted-800
                  rounded-full
                  -ml-1
                  peer-checked:ml-[45%] peer-checked:rotate-[360deg]
                  transition-all
                  duration-300
                "
              >
                <i
                  class="iconify w-6 h-6 text-yellow-400 fill-current"
                  data-icon="heroicons-solid:sun"
                  x-show="!$store.app.isDark"
                ></i>
                <i
                  class="iconify w-6 h-6 text-yellow-400 fill-current"
                  data-icon="pepicons:moon-filled"
                  x-show="$store.app.isDark"
                ></i>
              </span>
            </label>

            <!--Money dropdown-->
            <div x-data="dropdown()" class="relative" @click.away="close()">
              <button
                type="button"
                class="
                  h-10
                  inline-flex
                  justify-center
                  items-center
                  gap-x-2
                  px-6
                  py-2
                  font-sans
                  text-sm text-white
                  bg-primary-500
                  rounded-full
                  shadow-lg shadow-primary-500/20
                  hover:shadow-xl
                  tw-accessibility
                  transition-all
                  duration-300
                "
                @click="open()"
              >
                <span>Move Money</span>
                <i
                  class="iconify w-4 h-4 transition-transform duration-300"
                  :class="isOpen ? 'rotate-180' : ''"
                  data-icon="lucide:chevron-down"
                ></i>
              </button>

              <!--Dropdown menu-->
              <div
                x-cloak
                x-show="isOpen"
                x-transition
                class="
                  absolute
                  top-11
                  right-0
                  w-[240px]
                  overflow-y-auto
                  slimscroll
                  p-2
                  rounded-lg
                  bg-white
                  dark:bg-muted-900
                  border border-muted-200
                  dark:border-muted-800
                  shadow-2xl shadow-muted-400/20
                  dark:shadow-muted-800/10
                  z-20
                "
              >
                <ul class="space-y-1">
                  <li>
                    <a
                      href="payments-send.html"
                      class="
                        flex
                        items-center
                        gap-3
                        p-2
                        rounded-lg
                        text-muted-400
                        hover:text-primary-500 hover:bg-muted-100
                        dark:hover:bg-muted-800
                        transition-colors
                        duration-300
                      "
                    >
                      <i class="iconify w-5 h-5" data-icon="ph:arrow-right-duotone"></i>
                      <div class="font-sans">
                        <h5
                          class="text-sm font-semibold text-muted-800 dark:text-muted-200"
                        >
                          Send
                        </h5>
                        <p class="text-xs text-muted-400">Send someone money</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a
                      href="payments-receive.html"
                      class="
                        flex
                        items-center
                        gap-3
                        p-2
                        rounded-lg
                        text-muted-400
                        hover:text-primary-500 hover:bg-muted-100
                        dark:hover:bg-muted-800
                        transition-colors
                        duration-300
                      "
                    >
                      <i class="iconify w-5 h-5" data-icon="ph:arrow-left-duotone"></i>
                      <div class="font-sans">
                        <h5
                          class="text-sm font-semibold text-muted-800 dark:text-muted-200"
                        >
                          Receive
                        </h5>
                        <p class="text-xs text-muted-400">Add or receive funds</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a
                      href="cards.html"
                      class="
                        flex
                        items-center
                        gap-3
                        p-2
                        rounded-lg
                        text-muted-400
                        hover:text-primary-500 hover:bg-muted-100
                        dark:hover:bg-muted-800
                        transition-colors
                        duration-300
                      "
                    >
                      <i class="iconify w-5 h-5" data-icon="ph:credit-card-duotone"></i>
                      <div class="font-sans">
                        <h5
                          class="text-sm font-semibold text-muted-800 dark:text-muted-200"
                        >
                          Cards
                        </h5>
                        <p class="text-xs text-muted-400">Manage your cards</p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a
                      href="accounts.html"
                      class="
                        flex
                        items-center
                        gap-3
                        p-2
                        rounded-lg
                        text-muted-400
                        hover:text-primary-500 hover:bg-muted-100
                        dark:hover:bg-muted-800
                        transition-colors
                        duration-300
                      "
                    >
                      <i class="iconify w-5 h-5" data-icon="ph:wallet-duotone"></i>
                      <div class="font-sans">
                        <h5
                          class="text-sm font-semibold text-muted-800 dark:text-muted-200"
                        >
                          Accounts
                        </h5>
                        <p class="text-xs text-muted-400">Manage your accounts</p>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!--Panel button-->
            <button
              type="button"
              class="
                h-10
                w-10
                inline-flex
                justify-center
                items-center
                font-sans
                text-sm text-muted-300
                dark:text-muted-700
                hover:text-yellow-400
                dark:hover:text-yellow-400
                bg-white
                dark:bg-muted-1000
                rounded-full
                shadow-lg shadow-muted-400/20
                dark:shadow-muted-800/30
                hover:shadow-xl
                tw-accessibility
                transition-all
                duration-300
                tw-accessibility
              "
              @click="$store.app.isPanelOpen = true"
            >
              <i class="iconify w-5 h-5" data-icon="fluent:flash-28-filled"></i>
            </button>
          </div>
        </div>

        <!-- Renders the page body -->

        <!--Grid-->
        <div x-data="dashboard()" class="grid grid-cols-12 gap-6 pt-6 pb-20">
          <!--Grid item-->
          <div class="col-span-12 md:col-span-5">
            <!--Welcome widget-->
            <div
              class="
                h-full
                p-10
                bg-white
                dark:bg-muted-1000
                rounded-xl
                border border-muted-200
                dark:border-muted-800
                shadow-xl shadow-muted-400/10
                dark:shadow-muted-800/10
              "
            >
              <div class="h-full flex flex-col justify-between gap-5">
                <h4 class="font-heading font-semibold text-sm uppercase text-muted-400">
                    {{ Auth::user()->name }}'s Account
                </h4>

                <h2
                  class="
                    font-heading font-medium
                    text-4xl
                    ptablet:text-2xl
                    text-muted-800
                    dark:text-white
                  "
                >
                  Welcome back, {{ Auth::user()->name }}! 👋
                </h2>

                <p class="font-sans text-muted-500">
                  Everything seems ok and up-to-date with your account since your last
                  visit. Would you like to fund it?
                </p>

                <a
                  href="payments-receive.html"
                  class="
                    h-12
                    max-w-[220px]
                    inline-flex
                    justify-center
                    items-center
                    gap-x-2
                    px-6
                    py-2
                    font-sans
                    text-sm text-white
                    bg-primary-500
                    rounded-full
                    shadow-lg shadow-primary-500/20
                    hover:shadow-xl
                    tw-accessibility
                    transition-all
                    duration-300
                  "
                >
                  <span>Fund my Account</span>
                </a>
              </div>
            </div>
          </div>

          <!--Grid item-->
          <div class="col-span-12 md:col-span-7">
            <!--Blance widget-->
            <div
              class="
                bg-white
                dark:bg-muted-1000
                rounded-xl
                border border-muted-200
                dark:border-muted-800
                shadow-xl shadow-muted-400/10
                dark:shadow-muted-800/10
              "
            >
              <div class="flex flex-col gap-4 px-8 pt-8 text-center">
                <h4 class="font-heading font-semibold text-sm uppercase text-muted-400">
                  Account Balance
                </h4>
                <p>
                  <span
                    class="
                      font-sans font-medium
                      text-4xl text-muted-800
                      dark:text-white
                      before:content-['$'] before:text-xl
                    "
                  >
                    9,543.12
                  </span>
                </p>
                <div class="flex items-center justify-center gap-x-2">
                  <i
                    class="iconify w-4 h-4 text-success-500"
                    data-icon="lucide:arrow-up"
                  ></i>
                  <span class="font-sans text-sm text-muted-400">
                    $149.32 Today, Sep 25
                  </span>
                </div>
              </div>
              <div id="balance-chart"></div>
            </div>
          </div>

          <!--Grid item-->
          <div class="col-span-12 md:col-span-6">
            <!--Blance widget-->
            <div
              class="
                h-full
                py-16
                px-10
                bg-white
                dark:bg-muted-1000
                rounded-xl
                border border-muted-200
                dark:border-muted-800
                shadow-xl shadow-muted-400/10
                dark:shadow-muted-800/10
              "
            >
              <div class="h-full flex flex-col justify-between gap-7">
                <h4 class="font-heading font-semibold text-sm uppercase text-muted-400">
                  Money out last 30 days
                </h4>

                <div>
                  <span
                    class="
                      font-sans font-medium
                      text-4xl text-muted-800
                      dark:text-white
                      before:content-['$'] before:text-xl
                    "
                  >
                    0.00
                  </span>
                </div>

                <div class="space-y-1">
                  <p class="font-sans text-muted-500">No outgoing transactions yet</p>
                  <div class="w-full h-1 bg-muted-200 dark:bg-muted-800"></div>
                </div>
                <div class="mt-2 text-right">
                  <a
                    href="#"
                    class="
                      group
                      inline-flex
                      items-center
                      gap-3
                      text-primary-500
                      hover:text-primary-400
                      transition-colors
                      duration-300
                    "
                  >
                    <span class="font-sans font-medium text-base">View all</span>
                    <i
                      class="
                        iconify
                        w-4
                        h-4
                        group-hover:translate-x-1
                        transition-transform
                        duration-300
                      "
                      data-icon="lucide:arrow-right"
                    ></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--Grid item-->
          <div class="col-span-12 md:col-span-6">
            <!--Blance widget-->
            <div
              class="
                h-full
                py-16
                px-10
                bg-white
                dark:bg-muted-1000
                rounded-xl
                border border-muted-200
                dark:border-muted-800
                shadow-xl shadow-muted-400/10
                dark:shadow-muted-800/10
              "
            >
              <div class="h-full flex flex-col justify-between gap-7">
                <h4 class="font-heading font-semibold text-sm uppercase text-muted-400">
                  Money in last 30 days
                </h4>

                <div>
                  <span
                    class="
                      font-sans font-medium
                      text-4xl text-muted-800
                      dark:text-white
                      before:content-['$'] before:text-xl
                    "
                  >
                    0.00
                  </span>
                </div>

                <div class="space-y-1">
                  <p class="font-sans text-muted-500">No incoming transactions yet</p>
                  <div class="w-full h-1 bg-muted-200 dark:bg-muted-800"></div>
                </div>
                <div class="mt-2 text-right">
                  <a
                    href="#"
                    class="
                      group
                      inline-flex
                      items-center
                      gap-3
                      text-primary-500
                      hover:text-primary-400
                      transition-colors
                      duration-300
                    "
                  >
                    <span class="font-sans font-medium text-base">View all</span>
                    <i
                      class="
                        iconify
                        w-4
                        h-4
                        group-hover:translate-x-1
                        transition-transform
                        duration-300
                      "
                      data-icon="lucide:arrow-right"
                    ></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--Grid item-->
          <div class="col-span-12 md:col-span-12">
            <div
              class="
                py-4
                md:py-7
                px-4
                md:px-8
                xl:px-10
                bg-white
                dark:bg-muted-1000
                rounded-xl
                border border-muted-200
                dark:border-muted-800
                shadow-xl shadow-muted-400/10
                dark:shadow-muted-800/10
              "
            >
              <div class="sm:flex items-center justify-between">
                <h4 class="font-heading font-semibold text-sm uppercase text-muted-400">
                  Recent Transactions
                </h4>
                <a
                  href="transactions.html"
                  class="
                    group
                    inline-flex
                    items-center
                    gap-3
                    text-primary-500
                    hover:text-primary-400
                    transition-colors
                    duration-300
                  "
                >
                  <span class="font-sans font-medium text-base">View all</span>
                  <i
                    class="
                      iconify
                      w-4
                      h-4
                      group-hover:translate-x-1
                      transition-transform
                      duration-300
                    "
                    data-icon="lucide:arrow-right"
                  ></i>
                </a>
              </div>
              <div class="mt-7 overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                  <thead>
                    <th class="w-1/5"></th>
                    <th class="w-2/5"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </thead>
                  <tbody>
                    <!--Row-->
                    <tr tabindex="0">
                      <td class="py-2">
                        <span
                          class="
                            font-sans
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Sep 26, 2022
                        </span>
                      </td>
                      <td class="py-2">
                        <span
                          class="
                            font-sm
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Victoria's Treats
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            font-sans
                            text-base
                            font-medium
                            leading-none
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          - $52.14
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="font-sans text-sm font-medium leading-none text-muted-400"
                        >
                          xxx4565494
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            inline-block
                            font-sans
                            text-xs
                            py-1.5
                            px-3
                            m-1
                            rounded-full
                            bg-info-100
                            dark:bg-info-500/10
                            text-info-500
                          "
                        >
                          Processing
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <div class="flex items-center gap-2 text-muted-400">
                          <i class="iconify w-5 h-5" data-icon="ph:credit-card-duotone"></i>
                          <span class="font-sans text-sm font-medium leading-none">
                            Credit card
                          </span>
                        </div>
                      </td>
                    </tr>
                    <!--Row-->
                    <tr tabindex="0">
                      <td class="py-2">
                        <span
                          class="
                            font-sans
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Sep 24, 2022
                        </span>
                      </td>
                      <td class="py-2">
                        <span
                          class="
                            font-sm
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Morgan Seis, LLC
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            font-sans
                            text-base
                            font-medium
                            leading-none
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          - $428.47
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="font-sans text-sm font-medium leading-none text-muted-400"
                        >
                          xxx4565494
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            inline-block
                            font-sans
                            text-xs
                            py-1.5
                            px-3
                            m-1
                            rounded-full
                            bg-success-100
                            dark:bg-success-500/10
                            text-success-500
                          "
                        >
                          Complete
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <div class="flex items-center gap-2 text-muted-400">
                          <i class="iconify w-5 h-5" data-icon="ph:credit-card-duotone"></i>
                          <span class="font-sans text-sm font-medium leading-none">
                            Credit card
                          </span>
                        </div>
                      </td>
                    </tr>
                    <!--Row-->
                    <tr tabindex="0">
                      <td class="py-2">
                        <span
                          class="
                            font-sans
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Sep 24, 2022
                        </span>
                      </td>
                      <td class="py-2">
                        <span
                          class="
                            font-sm
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Wallmart
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            font-sans
                            text-base
                            font-medium
                            leading-none
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          - $112.23
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="font-sans text-sm font-medium leading-none text-muted-400"
                        >
                          xxx4565494
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            inline-block
                            font-sans
                            text-xs
                            py-1.5
                            px-3
                            m-1
                            rounded-full
                            bg-primary-100
                            dark:bg-primary-500/10
                            text-primary-500
                          "
                        >
                          In Progress
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <div class="flex items-center gap-2 text-muted-400">
                          <i class="iconify w-5 h-5" data-icon="ph:pen-nib-duotone"></i>
                          <span class="font-sans text-sm font-medium leading-none">
                            Cheque
                          </span>
                        </div>
                      </td>
                    </tr>
                    <!--Row-->
                    <tr tabindex="0">
                      <td class="py-2">
                        <span
                          class="
                            font-sans
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Sep 21, 2022
                        </span>
                      </td>
                      <td class="py-2">
                        <span
                          class="
                            font-sm
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          John Rowland
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            font-sans
                            text-base
                            font-medium
                            leading-none
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          - $950.00
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="font-sans text-sm font-medium leading-none text-muted-400"
                        >
                          xxx4565494
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            inline-block
                            font-sans
                            text-xs
                            py-1.5
                            px-3
                            m-1
                            rounded-full
                            bg-warning-100
                            dark:bg-warning-500/10
                            text-warning-500
                          "
                        >
                          Cancelled
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <div class="flex items-center gap-2 text-muted-400">
                          <i
                            class="iconify w-5 h-5"
                            data-icon="ph:arrows-left-right-duotone"
                          ></i>
                          <span class="font-sans text-sm font-medium leading-none">
                            Transfer
                          </span>
                        </div>
                      </td>
                    </tr>
                    <!--Row-->
                    <tr tabindex="0">
                      <td class="py-2">
                        <span
                          class="
                            font-sans
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Sep 21, 2022
                        </span>
                      </td>
                      <td class="py-2">
                        <span
                          class="
                            font-sm
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Harry's, LLC
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            font-sans
                            text-base
                            font-medium
                            leading-none
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          - $24.49
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="font-sans text-sm font-medium leading-none text-muted-400"
                        >
                          xxx4565494
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            inline-block
                            font-sans
                            text-xs
                            py-1.5
                            px-3
                            m-1
                            rounded-full
                            bg-success-100
                            dark:bg-success-500/10
                            text-success-500
                          "
                        >
                          Complete
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <div class="flex items-center gap-2 text-muted-400">
                          <i class="iconify w-5 h-5" data-icon="ph:credit-card-duotone"></i>
                          <span class="font-sans text-sm font-medium leading-none">
                            Credit card
                          </span>
                        </div>
                      </td>
                    </tr>
                    <!--Row-->
                    <tr tabindex="0">
                      <td class="py-2">
                        <span
                          class="
                            font-sans
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Sep 18, 2022
                        </span>
                      </td>
                      <td class="py-2">
                        <span
                          class="
                            font-sm
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Game's Store
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            font-sans
                            text-base
                            font-medium
                            leading-none
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          - $89.49
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="font-sans text-sm font-medium leading-none text-muted-400"
                        >
                          xxx4565494
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            inline-block
                            font-sans
                            text-xs
                            py-1.5
                            px-3
                            m-1
                            rounded-full
                            bg-success-100
                            dark:bg-success-500/10
                            text-success-500
                          "
                        >
                          Complete
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <div class="flex items-center gap-2 text-muted-400">
                          <i class="iconify w-5 h-5" data-icon="ph:credit-card-duotone"></i>
                          <span class="font-sans text-sm font-medium leading-none">
                            Credit card
                          </span>
                        </div>
                      </td>
                    </tr>
                    <!--Row-->
                    <tr tabindex="0">
                      <td class="py-2">
                        <span
                          class="
                            font-sans
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Sep 15, 2022
                        </span>
                      </td>
                      <td class="py-2">
                        <span
                          class="
                            font-sm
                            text-base
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Wallmart
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            font-sans
                            text-base
                            font-medium
                            leading-none
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          - $143.19
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="font-sans text-sm font-medium leading-none text-muted-400"
                        >
                          xxx4565494
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            inline-block
                            font-sans
                            text-xs
                            py-1.5
                            px-3
                            m-1
                            rounded-full
                            bg-success-100
                            dark:bg-success-500/10
                            text-success-500
                          "
                        >
                          Complete
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <div class="flex items-center gap-2 text-muted-400">
                          <i class="iconify w-5 h-5" data-icon="ph:pen-nib-duotone"></i>
                          <span class="font-sans text-sm font-medium leading-none">
                            Cheque
                          </span>
                        </div>
                      </td>
                    </tr>
                    <!--Row-->
                    <tr tabindex="0">
                      <td class="py-2">
                        <span
                          class="
                            font-sans
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Sep 14, 2022
                        </span>
                      </td>
                      <td class="py-2">
                        <span
                          class="
                            font-sm
                            text-sm
                            font-medium
                            leading-none
                            text-muted-500
                            dark:text-muted-300
                          "
                        >
                          Park Groceries
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            font-sans
                            text-base
                            font-medium
                            leading-none
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          - $31.22
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="font-sans text-sm font-medium leading-none text-muted-400"
                        >
                          xxx4565494
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <span
                          class="
                            inline-block
                            font-sans
                            text-xs
                            py-1.5
                            px-3
                            m-1
                            rounded-full
                            bg-success-100
                            dark:bg-success-500/10
                            text-success-500
                          "
                        >
                          Complete
                        </span>
                      </td>
                      <td class="py-2 px-4">
                        <div class="flex items-center gap-2 text-muted-400">
                          <i class="iconify w-5 h-5" data-icon="ph:credit-card-duotone"></i>
                          <span class="font-sans text-sm font-medium leading-none">
                            Credit card
                          </span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!--End Layout-->
      </div>
    </main>

    <!--Back to top button-->
    <div
      class="
        backtotop
        hidden
        md:block
        fixed
        bottom-8
        right-8
        w-12
        h-12
        rounded-full
        shadow-lg
        z-20
        cursor-pointer
        transition-all
        duration-200
      "
      x-data="backtotop()"
      x-init="setup()"
      x-on:scroll.window="scroll()"
      x-bind:class="{
        'opacity-100 visible translate-y-0': scrolled,
        'opacity-0 invisible translate-y-4': !scrolled,
      }"
      x-on:click="scrollTop()"
    >
      <svg
        class="stroke-primary-500 stroke-[4px] transition-all duration-200"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path fill="none" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>

      <svg
        class="
          block
          absolute
          top-1/2
          left-1/2
          -translate-x-1/2 -translate-y-1/2
          w-6
          h-6
          text-primary-500
          cursor-pointer
          z-10
        "
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <line x1="12" y1="19" x2="12" y2="5"></line>
        <polyline points="5 12 12 5 19 12"></polyline>
      </svg>
    </div>


  </body>

</html>
