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

  <body class="w-full h-full bg-white dark:bg-muted-900">
    <!-- prettier-ignore -->

    <main class="w-full">
      <!-- Renders the page body -->

      <!--Nav-->
      <div x-cloak class="absolute top-0 left-0 w-full">
        <div class="w-full max-w-6xl mx-auto px-4">
          <div class="w-full flex items-center justify-between py-5">
            <div class="flex-1 flex items-center">
              <a href="home.html" class="flex items-center gap-2">
                <img
                  src="blolgo.png"
                  class="w-14 h-18 dark:invert"
                  alt="App logo"
                  width="48"
                  height="48"
                />
               <p>Fund Account</p>
              </a>
            </div>
            <div class="grow">
              <div class="w-full flex items-center justify-center">
                <p class="font-heading text-muted-700 dark:text-muted-200">
                  Receive Money
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

      <!--Send money wizard-->
      <div class="w-full pt-32">
        <div x-data="wizard(2)" x-cloak class="w-full max-w-6xl mx-auto px-4">
          <div x-data="receivePayment()" class="w-full grid md:grid-cols-12 gap-10">
            <!--Stepper column-->
            <div class="md:col-span-3 lg:col-span-4">
              <!--Stepper-->
              <div class="flex flex-col md:flex-row gap-4 xs:w-full xs:max-w-xs xs:mx-auto">
                <div
                  class="
                    relative
                    flex
                    md:flex-col
                    xs:max-w-xs xs:mx-auto
                    justify-between
                    gap-7
                  "
                >
                  <!--Progress-->
                  <div
                    class="
                      absolute
                      xs:top-1.5
                      top-2
                      xs:inset-x-0
                      left-2
                      md:-translate-x-1/2
                      mx-auto
                      w-[calc(100%_-_1rem)]
                      h-1
                      md:h-[calc(100%_-_1rem)] md:w-1
                      bg-muted-200
                      dark:bg-muted-700
                      z-0
                    "
                  ></div>
                  <!--Vertical progress-->
                  <div
                    class="
                      hidden
                      md:block
                      absolute
                      top-2
                      left-2
                      -translate-x-1/2
                      mx-auto
                      w-0.5
                      rounded-full
                      bg-primary-500
                      z-10
                      transition-all
                      duration-300
                    "
                    :style="`height: calc(${currentProgress}% - 0.5rem);`"
                  ></div>
                  <!--Horizontal progress (mobile)-->
                  <div
                    class="
                      md:hidden
                      absolute
                      top-[7px]
                      left-1.5
                      h-0.5
                      rounded-full
                      bg-primary-500
                      z-10
                      transition-all
                      duration-300
                    "
                    :style="`width: calc(${currentProgress}% - 0.5rem);`"
                  ></div>
                  <!--Node-->
                  <div
                    class="
                      relative
                      z-20
                      w-4
                      h-4
                      flex
                      items-center
                      justify-center
                      rounded-full
                      bg-muted-200
                      dark:bg-muted-700
                    "
                  >
                    <span
                      class="
                        block
                        w-2
                        h-2
                        rounded-full
                        bg-primary-500
                        transition-transform
                        duration-300
                      "
                      :class="currentStep >= 0 ? 'scale-1' : 'scale-0'"
                    ></span>
                  </div>
                  <!--Node-->
                  <div
                    class="
                      relative
                      z-20
                      w-4
                      h-4
                      flex
                      items-center
                      justify-center
                      rounded-full
                      bg-muted-200
                      dark:bg-muted-700
                    "
                  >
                    <span
                      class="
                        block
                        w-2
                        h-2
                        rounded-full
                        bg-primary-500
                        transition-transform
                        duration-300
                      "
                      :class="currentStep >= 1 ? 'scale-1' : 'scale-0'"
                    ></span>
                  </div>
                  <!--Node-->
                  <div
                    class="
                      relative
                      z-20
                      w-4
                      h-4
                      flex
                      items-center
                      justify-center
                      rounded-full
                      bg-muted-200
                      dark:bg-muted-700
                    "
                  >
                    <span
                      class="
                        w-2
                        h-2
                        rounded-full
                        bg-primary-500
                        transition-transform
                        duration-300
                      "
                      :class="currentStep >= 2 ? 'scale-1' : 'scale-0'"
                    ></span>
                  </div>
                </div>
                <div
                  class="relative flex md:flex-col justify-center md:justify-between gap-7"
                >
                  <div class="h-4 leading-none" :class="currentStep === 0 ? '' : 'xs:hidden'">
                    <span
                      class="block font-heading text-xs"
                      :class="currentStep === 0 ? 'text-muted-800 dark:text-muted-100' : 'text-muted-400 dark:text-muted-500'"
                    >
                      Payment method
                    </span>
                  </div>
                  <div class="h-4 leading-none" :class="currentStep === 1 ? '' : 'xs:hidden'">
                    <span
                      class="block font-heading text-xs"
                      :class="currentStep === 1 ? 'text-muted-800 dark:text-muted-100' : 'text-muted-400 dark:text-muted-500'"
                    >
                      Transfer details
                    </span>
                  </div>
                  <div class="h-4 leading-none" :class="currentStep === 2 ? '' : 'xs:hidden'">
                    <span
                      class="block font-heading text-xs"
                      :class="currentStep === 2 ? 'text-muted-800 dark:text-muted-100' : 'text-muted-400 dark:text-muted-500'"
                    >
                      Review
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <!--Steps column-->
            <div class="md:col-span-9 lg:col-span-8">
              <!--Step 1-->
              <!--Step 1-->
              <div x-show="currentStep === 0" class="w-full">
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
                  Select a transfer method
                </h2>

                <div class="w-full max-w-md">
                  <div class="w-full space-y-4">
                    <!--Item-->
                    <button
                      type="button"
                      class="
                        group
                        w-full
                        flex
                        items-center
                        py-4
                        px-6
                        bg-white
                        dark:bg-muted-1000
                        border-2 border-muted-200
                        dark:border-muted-800
                        hover:border-primary-500
                        dark:hover:border-primary-500
                        hover:shadow-xl hover:shadow-muted-400/10
                        dark:shadow-muted-800/10
                        hover:-translate-x-0.5
                        rounded-xl
                        cursor-pointer
                        transition-all
                        duration-300
                        tw-accessibility
                      "
                      @click="nextStep(), paymentMethod = 'transfer'"
                    >
                      <span
                        class="
                          flex
                          items-center
                          justify-center
                          w-12
                          h-12
                          text-muted-600
                          dark:text-muted-400
                          bg-muted-100
                          dark:bg-muted-900
                          group-hover:bg-primary-500
                          group-hover:text-white
                          group-hover:rotate-180
                          rounded-full
                          transition-all
                          duration-300
                        "
                      >
                        <i
                          class="iconify w-6 h-6"
                          data-icon="ph:arrows-left-right-duotone"
                        ></i>
                      </span>
                      <span class="flex flex-col ml-6">
                        <span
                          class="
                            font-heading
                            text-base
                            font-medium
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          Crypto transfer
                        </span>
                      </span>
                      <span class="flex flex-col ml-auto">
                        <i
                          class="iconify w-5 h-5 text-muted-400"
                          data-icon="lucide:arrow-right"
                        ></i>
                      </span>
                    </button>
                    <!--Item-->
                    {{-- <button
                      type="button"
                      class="
                        group
                        w-full
                        flex
                        items-center
                        py-4
                        px-6
                        bg-white
                        dark:bg-muted-1000
                        border-2 border-muted-200
                        dark:border-muted-800
                        hover:border-primary-500
                        dark:hover:border-primary-500
                        hover:shadow-xl hover:shadow-muted-400/10
                        dark:shadow-muted-800/10
                        hover:-translate-x-0.5
                        rounded-xl
                        cursor-pointer
                        transition-all
                        duration-300
                        tw-accessibility
                      "
                      @click="nextStep(), paymentMethod = 'link'"
                    >
                      <span
                        class="
                          flex
                          items-center
                          justify-center
                          w-12
                          h-12
                          text-muted-600
                          dark:text-muted-400
                          bg-muted-100
                          dark:bg-muted-900
                          group-hover:bg-primary-500
                          group-hover:text-white
                          group-hover:rotate-180
                          rounded-full
                          transition-all
                          duration-300
                        "
                      >
                        <i class="iconify w-6 h-6" data-icon="ph:link-duotone"></i>
                      </span>
                      <span class="flex flex-col ml-6">
                        <span
                          class="
                            font-heading
                            text-base
                            font-medium
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          Payment link
                        </span>
                      </span>
                      <span class="flex flex-col ml-auto">
                        <i
                          class="iconify w-5 h-5 text-muted-400"
                          data-icon="lucide:arrow-right"
                        ></i>
                      </span>
                    </button> --}}
                    <!--Item-->
                    <button
                      type="button"
                      class="
                        group
                        w-full
                        flex
                        items-center
                        py-4
                        px-6
                        bg-white
                        dark:bg-muted-1000
                        border-2 border-muted-200
                        dark:border-muted-800
                        hover:border-primary-500
                        dark:hover:border-primary-500
                        hover:shadow-xl hover:shadow-muted-400/10
                        dark:shadow-muted-800/10
                        hover:-translate-x-0.5
                        rounded-xl
                        cursor-pointer
                        transition-all
                        duration-300
                        tw-accessibility
                      "
                      @click="nextStep(), paymentMethod = 'wire'"
                    >
                      <span
                        class="
                          flex
                          items-center
                          justify-center
                          w-12
                          h-12
                          text-muted-600
                          dark:text-muted-400
                          bg-muted-100
                          dark:bg-muted-900
                          group-hover:bg-primary-500
                          group-hover:text-white
                          group-hover:rotate-180
                          rounded-full
                          transition-all
                          duration-300
                        "
                      >
                        <i class="iconify w-6 h-6" data-icon="ph:note-duotone"></i>
                      </span>
                      <span class="flex flex-col ml-6">
                        <span
                          class="
                            font-heading
                            text-base
                            font-medium
                            text-muted-800
                            dark:text-muted-100
                          "
                        >
                          Wire
                        </span>
                      </span>
                      <span class="flex flex-col ml-auto">
                        <i
                          class="iconify w-5 h-5 text-muted-400"
                          data-icon="lucide:arrow-right"
                        ></i>
                      </span>
                    </button>
                  </div>
                </div>
              </div>

              <!--Step 2-->
              <!--Step 2-->
              <div x-show="currentStep === 1" class="w-full">
                <!--Transfer-->
                <div x-show="paymentMethod === 'transfer'" class="w-full">
                  <h2
                    class="
                      font-heading
                      text-2xl
                      md:text-3xl
                      text-muted-800
                      dark:text-white
                      mb-10
                    "
                  >
                    Amount to transfer
                  </h2>

                  <div class="w-full max-w-md">
                    <!--Amount input-->
                    <div class="group relative">
                      <input
                        type="number"
                        x-model="amount"
                        class="
                          p-4
                          pl-14
                          py-2
                          h-14
                          text-4xl
                          leading-5
                          font-sans
                          w-full
                          text-muted-600
                          border-b-2 border-muted-300
                          focus:border-primary-500
                          placeholder:text-muted-300
                          dark:placeholder:text-muted-700
                          dark:bg-muted-900
                          dark:text-muted-200
                          dark:border-muted-800
                          dark:focus:border-primary-500
                          outline-none
                          transition-all
                          duration-300
                        "
                        placeholder="0.00"
                      />
                      <div
                        class="
                          absolute
                          top-0
                          left-0
                          h-14
                          w-14
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
                        <i class="iconify w-8 h-8" data-icon="lucide:dollar-sign"></i>
                      </div>
                    </div>

                    <!--Transfer from-->
                    <div class="pt-6">
                      <h4 class="font-heading text-sm mb-4 text-muted-600 dark:text-muted-400">
                        Transfer to:
                      </h4>

                      <!--Placeholder-->
                      <div class="p-4 text-center bg-muted-100 dark:bg-muted-1000">
                        <div class="w-full max-w-lg mx-auto">
                          <h3 class="font-heading text-base text-muted-800 dark:text-white">
                            External account
                          </h3>
                          <p class="font-sans text-sm text-muted-500 mb-2">
                            Link external bank accounts to transfer funds.
                          </p>

                          <div class="flex items-center justify-center">
                            <button
                              type="button"
                              class="
                                h-9
                                w-32
                                inline-flex
                                justify-center
                                items-center
                                gap-x-2
                                px-5
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
                              <span>Link Account</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Transfer account-->
                    <div class="pt-6 pb-4">
                      <h4 class="font-heading text-sm mb-4 text-muted-600 dark:text-muted-400">
                        Transfer to:
                      </h4>
                      <!--Dropdown-->
                      <div
                        x-data="dropdown()"
                        class="relative w-full z-10"
                        @click.away="close()"
                      >
                        <button
                          type="button"
                          class="
                            w-full
                            p-4
                            click-blur
                            bg-white
                            dark:bg-muted-1000
                            rounded-xl
                            border border-muted-200
                            dark:border-muted-800
                          "
                          @click="open()"
                        >
                          <span class="w-full flex items-center gap-3 text-left">
                            <img
                            src="blolgo.png"
                            class="w-14 h-14 dark:invert"
                            alt="App logo"
                            width="48"
                            height="48"
                            />
                            <div>
                              <span
                                class="
                                  block
                                  font-heading
                                  text-sm text-muted-800
                                  dark:text-muted-200
                                "
                              >
                                checking xxx4869
                              </span>
                              <span
                                class="
                                  block
                                  font-heading
                                  text-xs text-muted-500
                                  dark:text-muted-400
                                "
                              >
                                $9,384.21
                              </span>
                            </div>
                            <i
                              class="
                                iconify
                                w-4
                                h-4
                                ml-auto
                                text-muted-400
                                transition-transform
                                duration-300
                              "
                              :class="isOpen && 'rotate-180'"
                              data-icon="lucide:chevron-down"
                            ></i>
                          </span>
                        </button>

                        <div
                          x-show="isOpen"
                          x-transition
                          class="
                            absolute
                            top-20
                            left-0
                            w-full
                            p-2
                            rounded-xl
                            border border-muted-200
                            dark:border-muted-800
                            bg-white
                            dark:bg-muted-1000
                            shadow-xl shadow-muted-400/10
                            dark:shadow-muted-800/10
                          "
                        >
                          <!--Accounts-->
                          <ul>
                            <!--Account-->
                            <li>
                              <button
                                type="button"
                                class="
                                  w-full
                                  flex
                                  items-center
                                  gap-3
                                  text-left
                                  py-2
                                  px-4
                                  rounded-xl
                                  hover:bg-muted-100
                                  dark:hover:bg-muted-900
                                  transition-colors
                                  duration-300
                                "
                              >
                                <img
                                    src="blolgo.png"
                                    class="w-14 h-14 dark:invert"
                                    alt="App logo"
                                    width="48"
                                    height="48"
                                />
                                <span class="block">
                                  <span
                                    class="
                                      block
                                      font-heading
                                      text-sm text-muted-800
                                      dark:text-muted-200
                                    "
                                  >
                                    checking xxx4869
                                  </span>
                                  <span
                                    class="
                                      block
                                      font-heading
                                      text-xs text-muted-500
                                      dark:text-muted-400
                                    "
                                  >
                                    $9,384.21
                                  </span>
                                </span>
                              </button>
                            </li>

                          </ul>
                        </div>
                      </div>
                    </div>

                    <!--Buttons-->
                    <div class="flex gap-4">
                      <button
                        type="button"
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
                          hover:text-muted-700
                          dark:text-muted-400 dark:hover:text-muted-100
                          bg-muted-100
                          hover:bg-muted-200
                          dark:bg-muted-800 dark:hover:bg-muted-700
                          transition-colors
                          duration-300
                        "
                        @click="prevStep()"
                      >
                        Previous
                      </button>
                      <button
                        type="button"
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
                        :class="amount === null || amount === 0 ? 'cursor-not-allowed opacity-70' : ''"
                        :disabled="amount === null || amount === 0"
                        @click="nextStep()"
                      >
                        Continue
                      </button>
                    </div>
                  </div>
                </div>

                <!--Link-->
                <div x-show="paymentMethod === 'link'" class="w-full">
                  <h2
                    class="
                      font-heading
                      text-2xl
                      md:text-3xl
                      text-muted-800
                      dark:text-white
                      mb-10
                    "
                  >
                    Amount to transfer
                  </h2>

                  <div class="w-full max-w-md">
                    <!--Amount input-->
                    <div class="group relative">
                      <input
                        type="number"
                        x-model="amount"
                        class="
                          p-4
                          pl-14
                          py-2
                          h-14
                          text-4xl
                          leading-5
                          font-sans
                          w-full
                          text-muted-600
                          border-b-2 border-muted-300
                          focus:border-primary-500
                          placeholder:text-muted-300
                          dark:placeholder:text-muted-700
                          dark:bg-muted-900
                          dark:text-muted-200
                          dark:border-muted-800
                          dark:focus:border-primary-500
                          outline-none
                          transition-all
                          duration-300
                        "
                        placeholder="0.00"
                      />
                      <div
                        class="
                          absolute
                          top-0
                          left-0
                          h-14
                          w-14
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
                        <i class="iconify w-8 h-8" data-icon="lucide:dollar-sign"></i>
                      </div>
                    </div>

                    <!--Send to-->
                    <div class="pt-6">
                      <h4 class="font-heading text-sm mb-4 text-muted-600 dark:text-muted-400">
                        Send to:
                      </h4>

                      <div class="relative">
                        <div class="group relative">
                          <input
                            type="text"
                            x-model="email"
                            class="
                              p-4
                              pl-12
                              py-2
                              h-12
                              text-base
                              leading-5
                              font-sans
                              w-full
                              rounded-md
                              bg-white
                              text-muted-600
                              border border-muted-300
                              focus:border-muted-300 focus:shadow-lg focus:shadow-gray-300/50
                              dark:focus:shadow-gray-800/50
                              placeholder:text-muted-300
                              dark:placeholder:text-muted-700
                              dark:bg-muted-1000
                              dark:text-muted-200
                              dark:border-muted-800
                              dark:focus:border-muted-800
                              tw-accessibility
                              transition-all
                              duration-300
                            "
                            placeholder="Your recipient's email address"
                          />
                          <div
                            class="
                              absolute
                              top-0
                              left-0
                              h-12
                              w-12
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
                            <i class="iconify w-5 h-5" data-icon="lucide:mail"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Transfer account-->
                    <div class="pt-6 pb-4">
                      <h4 class="font-heading text-sm mb-4 text-muted-600 dark:text-muted-400">
                        Transfer from:
                      </h4>
                      <!--Dropdown-->
                      <div
                        x-data="dropdown()"
                        class="relative w-full z-10"
                        @click.away="close()"
                      >
                        <button
                          type="button"
                          class="
                            w-full
                            p-4
                            click-blur
                            bg-white
                            dark:bg-muted-1000
                            rounded-xl
                            border border-muted-200
                            dark:border-muted-800
                          "
                          @click="open()"
                        >
                          <span class="w-full flex items-center gap-3 text-left">
                            <img
                            src="blolgo.png"
                            class="w-14 h-14 dark:invert"
                            alt="App logo"
                            width="48"
                            height="48"
                            />
                            <div>
                              <span
                                class="
                                  block
                                  font-heading
                                  text-sm text-muted-800
                                  dark:text-muted-200
                                "
                              >
                                checking xxx4869
                              </span>
                              <span
                                class="
                                  block
                                  font-heading
                                  text-xs text-muted-500
                                  dark:text-muted-400
                                "
                              >
                                $9,384.21
                              </span>
                            </div>
                            <i
                              class="
                                iconify
                                w-4
                                h-4
                                ml-auto
                                text-muted-400
                                transition-transform
                                duration-300
                              "
                              :class="isOpen && 'rotate-180'"
                              data-icon="lucide:chevron-down"
                            ></i>
                          </span>
                        </button>

                        <div
                          x-show="isOpen"
                          x-transition
                          class="
                            absolute
                            top-20
                            left-0
                            w-full
                            p-2
                            rounded-xl
                            border border-muted-200
                            dark:border-muted-800
                            bg-white
                            dark:bg-muted-1000
                            shadow-xl shadow-muted-400/10
                            dark:shadow-muted-800/10
                          "
                        >
                          <!--Accounts-->
                          <ul>
                            <!--Account-->
                            <li>
                              <button
                                type="button"
                                class="
                                  w-full
                                  flex
                                  items-center
                                  gap-3
                                  text-left
                                  py-2
                                  px-4
                                  rounded-xl
                                  hover:bg-muted-100
                                  dark:hover:bg-muted-900
                                  transition-colors
                                  duration-300
                                "
                              >
                                <img
                                src="blolgo.png"
                                class="w-14 h-14 dark:invert"
                                alt="App logo"
                                width="48"
                                height="48"
                                />
                                <span class="block">
                                  <span
                                    class="
                                      block
                                      font-heading
                                      text-sm text-muted-800
                                      dark:text-muted-200
                                    "
                                  >
                                    checking xxx4869
                                  </span>
                                  <span
                                    class="
                                      block
                                      font-heading
                                      text-xs text-muted-500
                                      dark:text-muted-400
                                    "
                                  >
                                    $9,384.21
                                  </span>
                                </span>
                              </button>
                            </li>
                            <!--Account-->
                            <li>
                              <button
                                type="button"
                                class="
                                  w-full
                                  flex
                                  items-center
                                  gap-3
                                  text-left
                                  py-2
                                  px-4
                                  rounded-xl
                                  hover:bg-muted-100
                                  dark:hover:bg-muted-900
                                  transition-colors
                                  duration-300
                                "
                              >
                                <img
                                src="blolgo.png"
                                class="w-14 h-14 dark:invert"
                                alt="App logo"
                                width="48"
                                height="48"
                                />
                                <span class="block">
                                  <span
                                    class="
                                      block
                                      font-heading
                                      text-sm text-muted-800
                                      dark:text-muted-200
                                    "
                                  >
                                    checking xxx4847
                                  </span>
                                  <span
                                    class="
                                      block
                                      font-heading
                                      text-xs text-muted-500
                                      dark:text-muted-400
                                    "
                                  >
                                    $3,511.92
                                  </span>
                                </span>
                              </button>
                            </li>
                            <!--Account-->
                            <li>
                              <button
                                type="button"
                                class="
                                  w-full
                                  flex
                                  items-center
                                  gap-3
                                  text-left
                                  py-2
                                  px-4
                                  rounded-xl
                                  hover:bg-muted-100
                                  dark:hover:bg-muted-900
                                  transition-colors
                                  duration-300
                                "
                              >
                                <img
                                src="blolgo.png"
                                class="w-14 h-14 dark:invert"
                                alt="App logo"
                                width="48"
                                height="48"
                                />
                                <span class="block">
                                  <span
                                    class="
                                      block
                                      font-heading
                                      text-sm text-muted-800
                                      dark:text-muted-200
                                    "
                                  >
                                    savings xxx7862
                                  </span>
                                  <span
                                    class="
                                      block
                                      font-heading
                                      text-xs text-muted-500
                                      dark:text-muted-400
                                    "
                                  >
                                    $7,213.11
                                  </span>
                                </span>
                              </button>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <!--Buttons-->
                    <div class="flex gap-4">
                      <button
                        type="button"
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
                          hover:text-muted-700
                          dark:text-muted-400 dark:hover:text-muted-100
                          bg-muted-100
                          hover:bg-muted-200
                          dark:bg-muted-800 dark:hover:bg-muted-700
                          transition-colors
                          duration-300
                        "
                        @click="prevStep()"
                      >
                        Previous
                      </button>
                      <button
                        type="button"
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
                        :class="amount === null || amount === 0 || email === null ? 'cursor-not-allowed opacity-70' : ''"
                        :disabled="amount === null || amount === 0 || email === null"
                        @click="nextStep()"
                      >
                        Continue
                      </button>
                    </div>
                  </div>
                </div>

                <!--Wire-->
                <div x-show="paymentMethod === 'wire'" class="w-full pb-10">
                  <div class="w-full max-w-md">
                    <!--Header-->
                    <div class="flex items-center justify-between mb-10">
                      <h2
                        class="font-heading text-2xl md:text-3xl text-muted-800 dark:text-white"
                      >
                        Wire details
                      </h2>

                      <a
                        class="
                          inline-flex
                          items-center
                          gap-2
                          font-heading font-medium
                          text-xs text-primary-500
                          hover:text-primary-600
                          transition-colors
                          duration-300
                          cursor-pointer
                        "
                      >
                        <i class="iconify w-4 h-4" data-icon="lucide:download"></i>
                        <span>Download as PDF</span>
                      </a>
                    </div>
                    <!--Account-->
                    <div
                      class="
                        w-full
                        p-4
                        bg-white
                        dark:bg-muted-1000
                        rounded-xl
                        border border-muted-200
                        dark:border-muted-800
                      "
                    >
                      <div class="w-full flex items-center gap-3 text-left">
                        <img
                        src="blolgo.png"
                        class="w-14 h-14 dark:invert"
                        alt="App logo"
                        width="48"
                        height="48"
                        />
                        <div>
                          <span
                            class="
                              block
                              font-heading
                              text-sm text-muted-800
                              dark:text-muted-200
                            "
                          >
                            checking xxx4869
                          </span>
                          <span
                            class="
                              block
                              font-heading
                              text-xs text-muted-500
                              dark:text-muted-400
                            "
                          >
                            $9,384.21
                          </span>
                        </div>
                      </div>
                    </div>

                    <!--Transfer details-->
                    <div class="py-6">
                      <!--Regular collapse-->
                      <div x-data="{ expanded: false }" class="w-full flex flex-col">
                        <!--Trigger-->
                        <button
                          type="button"
                          class="
                            w-full
                            flex
                            items-center
                            justify-between
                            p-4
                            border-b border-t border-muted-200
                            dark:border-muted-900
                            hover:bg-muted-100
                            dark:hover:bg-muted-800
                            transition-colors
                            duration-300
                            cursor-pointer
                          "
                          @click="expanded = !expanded"
                        >
                          <span
                            class="
                              font-heading font-medium
                              text-xs
                              uppercase
                              text-muted-500
                              dark:text-muted-400
                            "
                          >
                            Regular transfer
                          </span>
                          <i
                            class="
                              iconify
                              w-5
                              h-5
                              text-muted-400
                              transition-transform
                              duration-300
                            "
                            :class="expanded ? 'rotate-180' : ''"
                            data-icon="lucide:chevron-down"
                          ></i>
                        </button>
                        <!--Content-->
                        <div x-show="expanded" x-collapse class="w-full p-4">
                          <div class="space-y-6">
                            <!--Fieldset-->
                            <div>
                              <h5
                                class="
                                  font-heading font-medium
                                  text-sm
                                  mb-4
                                  text-muted-800
                                  dark:text-white
                                "
                              >
                                Beneficiary
                              </h5>
                              <!--List-->
                              <ul class="w-full max-w-xs font-heading text-sm space-y-3">
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      Beneficiary Name
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      Mara Callaway
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      Account number
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      4516 1561 4869 21
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      Account type
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      Checking
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="text-muted-500 dark:text-muted-400">
                                      Address
                                    </span>
                                    <div class="text-muted-800 dark:text-muted-200 text-right">
                                      <p>124, Downing street</p>
                                      <p>New York, NY</p>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <!--Fieldset-->
                            <div>
                              <h5
                                class="
                                  font-heading font-medium
                                  text-sm
                                  mb-4
                                  text-muted-800
                                  dark:text-white
                                "
                              >
                                Bank details
                              </h5>
                              <!--List-->
                              <ul class="w-full max-w-xs font-heading text-sm space-y-3">
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      ABA Routing Number
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      9156511
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      Bank Name
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      Apollo Inc
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="text-muted-500 dark:text-muted-400">
                                      Bank Address
                                    </span>
                                    <div class="text-muted-800 dark:text-muted-200 text-right">
                                      <p>47 Victorian Av, Suite G3</p>
                                      <p>New York, NY</p>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--International collapse-->
                      <div x-data="{ expanded: false }" class="w-full flex flex-col">
                        <!--Trigger-->
                        <button
                          type="button"
                          class="
                            w-full
                            flex
                            items-center
                            justify-between
                            p-4
                            border-b border-t border-muted-200
                            dark:border-muted-900
                            hover:bg-muted-100
                            dark:hover:bg-muted-800
                            transition-colors
                            duration-300
                            cursor-pointer
                          "
                          @click="expanded = !expanded"
                        >
                          <span
                            class="
                              font-heading font-medium
                              text-xs
                              uppercase
                              text-muted-500
                              dark:text-muted-400
                            "
                          >
                            International transfer
                          </span>
                          <i
                            class="
                              iconify
                              w-5
                              h-5
                              text-muted-400
                              transition-transform
                              duration-300
                            "
                            :class="expanded ? 'rotate-180' : ''"
                            data-icon="lucide:chevron-down"
                          ></i>
                        </button>
                        <!--Content-->
                        <div x-show="expanded" x-collapse class="w-full p-4">
                          <div class="space-y-6">
                            <!--Fieldset-->
                            <div>
                              <h5
                                class="
                                  font-heading font-medium
                                  text-sm
                                  mb-4
                                  text-muted-800
                                  dark:text-white
                                "
                              >
                                Beneficiary
                              </h5>
                              <!--List-->
                              <ul class="w-full max-w-xs font-heading text-sm space-y-3">
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      Beneficiary Name
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      Mara Callaway
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      Account number
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      4516 1561 4869 21
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      Account type
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      Checking
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="text-muted-500 dark:text-muted-400">
                                      Address
                                    </span>
                                    <div class="text-muted-800 dark:text-muted-200 text-right">
                                      <p>47 Victorian Av, Suite G3</p>
                                      <p>New York, NY</p>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <!--Fieldset-->
                            <div>
                              <h5
                                class="
                                  font-heading font-medium
                                  text-sm
                                  mb-4
                                  text-muted-800
                                  dark:text-white
                                "
                              >
                                Bank details
                              </h5>
                              <!--List-->
                              <ul class="w-full max-w-xs font-heading text-sm space-y-3">
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      IBAN Number
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      US1565
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="block text-muted-500 dark:text-muted-400">
                                      Bank Name
                                    </span>
                                    <span class="block text-muted-800 dark:text-muted-200">
                                      Apollo Inc
                                    </span>
                                  </div>
                                </li>
                                <li>
                                  <div class="flex justify-between">
                                    <span class="text-muted-500 dark:text-muted-400">
                                      Bank Address
                                    </span>
                                    <div class="text-muted-800 dark:text-muted-200 text-right">
                                      <p>124, Downing street</p>
                                      <p>New York, NY</p>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Buttons-->
                    <div class="flex gap-4">
                      <button
                        type="button"
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
                          hover:text-muted-700
                          dark:text-muted-400 dark:hover:text-muted-100
                          bg-muted-100
                          hover:bg-muted-200
                          dark:bg-muted-800 dark:hover:bg-muted-700
                          transition-colors
                          duration-300
                        "
                        @click="prevStep()"
                      >
                        Previous
                      </button>
                      <button
                        type="button"
                        class="
                          w-full
                          h-12
                          inline-flex
                          justify-center
                          items-center
                          rounded-md
                          gap-2
                          px-4
                          py-2
                          font-heading
                          text-white text-sm
                          bg-primary-500
                        "
                      >
                        <i class="iconify w-4 h-4" data-icon="lucide:mail"></i>
                        <span>Share</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!--Step 3-->
              <!--Step 3-->
              <div x-show="currentStep === 2" class="w-full">
                <!--Review section-->
                <div x-show="!isComplete">
                  <h2
                    class="
                      font-heading
                      text-2xl
                      md:text-3xl
                      text-muted-800
                      dark:text-white
                      mb-10
                    "
                  >
                    Review and send
                  </h2>

                  <div class="w-full max-w-md space-y-6">
                    <!--Numbers-->
                    <div class="flex items-end justify-between pb-4">
                      <!--Amount-->
                      <div class="flex-1">
                        <p class="font-heading text-xs text-muted-400 mb-1">
                          Transfer amount
                        </p>
                        <h3
                          class="
                            font-heading font-medium
                            text-3xl text-muted-800
                            dark:text-muted-100
                          "
                        >
                          $
                          <span x-text="formatAmount()"></span>
                        </h3>
                      </div>
                      <!--Amount-->
                      <div class="flex-1 text-right">
                        <p class="font-heading text-xs text-muted-400 mb-1">Payment method</p>
                        <h3
                          class="
                            font-heading font-medium
                            text-sm text-muted-800
                            dark:text-muted-100
                          "
                        >
                          <span x-text="paymentMethod"></span>
                        </h3>
                      </div>
                    </div>

                    <!--Transfer from-->
                    <template x-if="paymentMethod === 'transfer'">
                      <div>
                        <p class="font-heading text-xs text-muted-400 mb-1">Transfer from</p>
                        <div
                          class="
                            w-full
                            p-4
                            bg-white
                            dark:bg-muted-1000
                            rounded-xl
                            border border-muted-200
                            dark:border-muted-800
                          "
                        >
                          <div class="w-full flex items-center gap-3 text-left">
                            <i
                              class="iconify w-8 h-8 text-muted-500 dark:text-muted-400"
                              data-icon="clarity:bank-outline-badged"
                            ></i>
                            <div>
                              <span
                                class="
                                  block
                                  font-heading
                                  text-sm text-muted-800
                                  dark:text-muted-200
                                "
                              >
                                External bank account
                              </span>
                              <span
                                class="
                                  block
                                  font-heading
                                  text-xs text-muted-500
                                  dark:text-muted-400
                                "
                              >
                                $25,267.42
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </template>

                    <!--Send to-->
                    <template x-if="paymentMethod === 'link'">
                      <div>
                        <p class="font-heading text-xs text-muted-400 mb-1">Send to</p>

                        <div class="relative">
                          <div class="group relative">
                            <input
                              type="text"
                              x-model="email"
                              readonly
                              class="
                                p-4
                                pl-12
                                py-2
                                h-12
                                text-base
                                leading-5
                                font-sans
                                w-full
                                rounded-md
                                bg-white
                                text-muted-600
                                border border-muted-300
                                focus:border-muted-300
                                focus:shadow-lg
                                focus:shadow-gray-300/50
                                dark:focus:shadow-gray-800/50
                                placeholder:text-muted-300
                                dark:placeholder:text-muted-700
                                dark:bg-muted-1000
                                dark:text-muted-200
                                dark:border-muted-800
                                dark:focus:border-muted-800
                                tw-accessibility
                                transition-all
                                duration-300
                                pointer-events-none
                              "
                              placeholder="Your recipient's email address"
                            />
                            <div
                              class="
                                absolute
                                top-0
                                left-0
                                h-12
                                w-12
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
                              <i class="iconify w-5 h-5" data-icon="lucide:mail"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </template>

                    <!--Amount-->
                    <div>
                      <p class="font-heading text-xs text-muted-400 mb-1">Transfer to</p>
                      <div
                        class="
                          w-full
                          p-4
                          bg-white
                          dark:bg-muted-1000
                          rounded-xl
                          border border-muted-200
                          dark:border-muted-800
                        "
                      >
                        <div class="w-full flex items-center gap-3 text-left">
                          <img
                          src="blolgo.png"
                          class="w-14 h-14 dark:invert"
                          alt="App logo"
                          width="48"
                          height="48"
                          />
                          <div>
                            <span
                              class="
                                block
                                font-heading
                                text-sm text-muted-800
                                dark:text-muted-200
                              "
                            >
                              checking xxx4869
                            </span>
                            <span
                              class="
                                block
                                font-heading
                                text-xs text-muted-500
                                dark:text-muted-400
                              "
                            >
                              $9,384.21
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Buttons-->
                    <div class="flex gap-4">
                      <button
                        type="button"
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
                          hover:text-muted-700
                          dark:text-muted-400 dark:hover:text-muted-100
                          bg-muted-100
                          hover:bg-muted-200
                          dark:bg-muted-800 dark:hover:bg-muted-700
                          transition-colors
                          duration-300
                        "
                        @click="prevStep()"
                      >
                        Previous
                      </button>
                      <button
                        type="button"
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
                        :class="isLoading ? 'button-loading' : ''"
                        @click="sendRequest()"
                      >
                        Send Request
                      </button>
                    </div>
                  </div>
                </div>

                <!--Success section-->
                <div x-show="isComplete">
                  <div class="w-full max-w-md text-center py-6">
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
                      Funding request sent!
                    </h2>
                    <p class="font-sans text-muted-500 dark:text-muted-400 mb-5">
                      Amazing! You've properly filled in your payment request. We'll let you know
                      as soon as the funds are on their way.
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
          </div>
        </div>
      </div>
      <!--End Layout-->
    </main>


  </body>

</html>
