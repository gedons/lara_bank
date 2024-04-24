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

    <script type="module" src="{{asset('main-362f7ad5.js')}}"></script>
    <link rel="stylesheet" href="{{asset('main-6894412f.css')}}">
</head>

  <body class="w-full h-full bg-white dark:bg-muted-900">
    <!-- prettier-ignore -->

    <main class="w-full">
      <!-- Renders the page body -->

      <!--Nav-->
      <div x-cloak class="absolute top-0 left-0 w-full">
        <div class="w-full max-w-5xl mx-auto px-4">
          <div class="w-full flex items-center justify-between py-5">
            <div class="flex-1 flex items-center">
              <a href="home.html" class="flex items-center gap-2">
                <img
                src="{{asset('blolgo.png')}}"
                class="w-14 h-14 dark:invert"
                alt="App logo"
                width="48"
                height="48"
                />
              </a>
            </div>
            <div class="grow">
              <div class="w-full flex items-center justify-center">
                <p class="font-heading text-muted-700 dark:text-muted-200">
                  New Wallet
                </p>
              </div>
            </div>
            <div class="flex-1">
              <div class="flex items-center justify-end">
                <button
                  type="button"
                  class="group text-center"
                  onclick="window.history.go(-1); return false;"
                >
                  <i
                    class="
                      iconify
                      w-8
                      h-8
                      text-muted-800
                      dark:text-muted-500 dark:group-hover:text-muted-200
                      transition-colors
                      duration-300
                    "
                    data-icon="lucide:x"
                  ></i>
                  <span
                    class="
                      block
                      font-heading
                      text-xs text-muted-400
                      dark:text-muted-400 dark:group-hover:text-muted-200
                      transition-colors
                      duration-300
                    "
                  >
                    Back
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Content-->
      <div x-data="createCard()" class="w-full pt-32 pb-20">
        <div class="w-full max-w-5xl mx-auto px-4">
          <!--Form-->

          <div x-show="!isComplete">
            <form method="POST" action="{{ route('crypto_wallets.store') }}">
             @csrf
            <div class="w-full grid md:grid-cols-12 gap-8 ltablet:gap-16 lg:gap-16">
              <!--Content column-->
                    <div class="md:col-span-12 lg:col-span-12">
                        <div class="w-full max-w-md">
                        <div class="pb border-b border-muted-200 dark:border-muted-800">
                            <h2
                            class="
                                font-heading
                                text-2xl
                                md:text-3xl
                                text-muted-800
                                dark:text-white
                                mb-8
                            "
                            >
                            Add New Wallet
                            </h2>
                        </div>

                        <div class="space-y-8 divide-y divide-muted-200 dark:divide-muted-800">
                            <!--Field-->
                            <div class="pt-8">
                                <h4 class="font-heading text-sm mb-1 text-muted-600 dark:text-muted-400">
                                    Associated Currency
                                </h4>
                                <!--Select-->
                                <div class="relative group">
                                <select
                                    name="cryptocurrency"
                                    class="
                                    appearance-none
                                    px-3
                                    py-2
                                    h-11
                                    text-sm
                                    leading-5
                                    font-sans
                                    w-full
                                    rounded-lg
                                    border border-muted-300
                                    bg-white
                                    text-muted-600
                                    placeholder-gray-300
                                    focus:border-muted-300 focus:shadow-lg
                                    dark:placeholder-gray-600
                                    dark:bg-muted-1000
                                    dark:text-muted-200
                                    dark:border-muted-800
                                    dark:focus:border-muted-800
                                    tw-accessibility
                                    transition-all
                                    duration-300
                                    "
                                >
                                    <option>Select currency</option>
                                    @foreach ($supportedCurrencies as $currency)
                                        <option value="{{ $currency }}">{{ ucfirst($currency) }}</option>
                                    @endforeach
                                </select>
                                <div
                                    class="
                                    absolute
                                    top-0
                                    right-0
                                    h-11
                                    w-11
                                    flex
                                    justify-center
                                    items-center
                                    text-muted-400
                                    transition-transform
                                    duration-300
                                    group-focus-within:-rotate-180
                                    "
                                >
                                    <i class="iconify w-4 h-4" data-icon="lucide:chevron-down"></i>
                                </div>
                                </div>
                            </div>
                            <!--Field-->
                            <div class="pt-8">
                            <h4 class="font-heading text-sm mb-1 text-muted-600 dark:text-muted-400">
                            Wallet Address
                            </h4>
                            <!--Input-->
                            <div class="group relative">
                                <input
                                type="text"
                                name="wallet_address"
                                class="
                                    p-4
                                    pl-11
                                    py-2
                                    h-11
                                    text-sm
                                    leading-5
                                    font-sans
                                    w-full
                                    rounded-lg
                                    text-muted-600
                                    border border-muted-300
                                    focus:border-muted-300
                                    placeholder:text-muted-300
                                    dark:placeholder:text-muted-700
                                    bg-white
                                    dark:bg-muted-1000
                                    dark:text-muted-200
                                    dark:border-muted-800
                                    dark:focus:border-muted-800
                                    outline-none
                                    transition-all
                                    duration-300
                                    @error('wallet_address') border-red-500 @enderror"
                                    placeholder="bc1qxy2kgdygjrsqtzq2n0yrf2493p83kkfjhx0wlh"
                            />
                                @error('wallet_address')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror

                            </div>
                            </div>
                            <!--Field-->
                            <div class="pt-8">
                                <h4 class="font-heading text-sm mb-1 text-muted-600 dark:text-muted-400">
                                Balance
                                </h4>
                                <!--Input-->
                                <div class="group relative">
                                <input
                                    type="number"
                                    name="balance"
                                    class="
                                    p-4
                                    pl-11
                                    py-2
                                    h-11
                                    text-sm
                                    leading-5
                                    font-sans
                                    w-full
                                    rounded-lg
                                    text-muted-600
                                    border border-muted-300
                                    focus:border-muted-300
                                    placeholder:text-muted-300
                                    dark:placeholder:text-muted-700
                                    bg-white
                                    dark:bg-muted-1000
                                    dark:text-muted-200
                                    dark:border-muted-800
                                    dark:focus:border-muted-800
                                    outline-none
                                    transition-all
                                    duration-300
                                    "
                                    min="0.00" step="0.01"
                                    placeholder="0.00"
                                />
                                <div
                                    class="
                                    absolute
                                    top-0
                                    left-0
                                    h-11
                                    w-11
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
                                    <i class="iconify w-4 h-4" data-icon="lucide:dollar-sign"></i>
                                </div>
                                </div>
                            </div>
                            <!--Buttons-->
                            <div class="flex gap-4 py-8">
                            <p
                                class="
                                w-full
                                h-12
                                inline-flex
                                justify-center
                                items-center
                                rounded-md
                                px-4
                                py-2
                                font-heading
                                text-sm text-muted-600
                                dark:text-muted-400
                                "
                            >
                                Wallet will be activated Immediately.
                            </p>
                            <button
                                type="submit"
                                class="
                                w-full
                                h-12
                                inline-flex
                                justify-center
                                items-center
                                rounded-md
                                px-4
                                py-2
                                font-heading
                                text-white text-sm
                                bg-primary-500
                                "
                                :class="[
                                isLoading ? 'button-loading' : '',
                                ]"
                            >
                                Create new Wallet
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
            </form>
          </div>



          <!--Success section-->
          <div x-show="isComplete"><div class="w-full max-w-md mx-auto text-center py-6">
        <div class="text-primary-500 mx-auto w-14 h-14 mb-4">
          <svg
            class="
              relative
              block
              w-14
              h-14
              rounded-full
              stroke-2 stroke-current
              animate-scale
            "
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 52 52"
            stroke-miterlimit="10"
          >
            <circle
              class="stroke-2 stroke-current animate-circle"
              cx="26"
              cy="26"
              r="25"
              fill="none"
              stroke-dasharray="166"
              stroke-dashoffset="166"
              stroke-miterlimit="10"
            />
            <path
              class="animate-check stroke-2 stroke-current"
              fill="none"
              d="M14.1 27.2l7.1 7.2 16.7-16.8"
              stroke-dasharray="48"
              stroke-dashoffset="48"
            />
          </svg>
        </div>
        <h2
          class="font-heading font-bold text-2xl mb-2 text-muted-800 dark:text-white"
        >
          Your card is on the way!
        </h2>
        <p class="font-sans text-muted-500 dark:text-muted-400 mb-5">
          Amazing! You've properly filled in your credit card request. We'll let you
          know as soon as it is sent to you.
        </p>
        <div class="flex justify-center">
          <a
            href="home.html"
            class="
              h-10
              w-48
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
            @click.prevent="window.history.go(-1); return false;"
          >
            <span>Take me back</span>
          </a>
        </div>
      </div>
      </div>
        </div>
      </div>

      <!--End Layout-->
    </main>


  </body>


</html>
