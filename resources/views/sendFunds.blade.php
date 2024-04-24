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
                  class="w-14 h-14 dark:invert"
                  alt="App logo"
                  width="48"
                  height="48"
                />
                <p>Send Funds</p>
              </a>
            </div>
            <div class="grow">
              <div class="w-full flex items-center justify-center">
                <p class="font-heading text-muted-700 dark:text-muted-200">
                  Send Money
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
        <div x-data="wizard(5)" x-cloak class="w-full max-w-6xl mx-auto px-4">
          <div x-data="sendPayment()" class="w-full grid md:grid-cols-12 gap-10">
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
                      :class="currentStep >= 3 ? 'scale-1' : 'scale-0'"
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
                      :class="currentStep >= 4 ? 'scale-1' : 'scale-0'"
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
                      :class="currentStep === 5 ? 'scale-1' : 'scale-0'"
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
                      Recipient
                    </span>
                  </div>
                  <div class="h-4 leading-none" :class="currentStep === 1 ? '' : 'xs:hidden'">
                    <span
                      class="block font-heading text-xs"
                      :class="currentStep === 1 ? 'text-muted-800 dark:text-muted-100' : 'text-muted-400 dark:text-muted-500'"
                    >
                      Payment method
                    </span>
                  </div>
                  <div class="h-4 leading-none" :class="currentStep === 2 ? '' : 'xs:hidden'">
                    <span
                      class="block font-heading text-xs"
                      :class="currentStep === 2 ? 'text-muted-800 dark:text-muted-100' : 'text-muted-400 dark:text-muted-500'"
                    >
                      Recipient details
                    </span>
                  </div>
                  <div class="h-4 leading-none" :class="currentStep === 3 ? '' : 'xs:hidden'">
                    <span
                      class="block font-heading text-xs"
                      :class="currentStep === 3 ? 'text-muted-800 dark:text-muted-100' : 'text-muted-400 dark:text-muted-500'"
                    >
                      Recipient address
                    </span>
                  </div>
                  <div class="h-4 leading-none" :class="currentStep === 4 ? '' : 'xs:hidden'">
                    <span
                      class="block font-heading text-xs"
                      :class="currentStep === 4 ? 'text-muted-800 dark:text-muted-100' : 'text-muted-400 dark:text-muted-500'"
                    >
                      Amount
                    </span>
                  </div>
                  <div class="h-4 leading-none" :class="currentStep === 5 ? '' : 'xs:hidden'">
                    <span
                      class="block font-heading text-xs"
                      :class="currentStep === 5 ? 'text-muted-800 dark:text-muted-100' : 'text-muted-400 dark:text-muted-500'"
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
                  Who are you paying?
                </h2>

                <div class="relative max-w-md space-y-3">
                  <div class="group relative">
                    <input
                      type="text"
                      x-model="recipient"
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
                      placeholder="Your recipient's legal name"
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
                      <i class="iconify w-5 h-5" data-icon="lucide:user"></i>
                    </div>
                  </div>

                  <div class="flex gap-2">
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
                      :class="recipient.length === 0 ? 'cursor-not-allowed opacity-70' : ''"
                      :disabled="recipient.length === 0"
                      @click="nextStep()"
                    >
                      Next
                    </button>
                  </div>
                </div>
              </div>

              <!--Step 2-->
              <!--Step 2-->
              <div x-show="currentStep === 1" class="w-full">
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
                  How do you want to pay?
                </h2>

                <div class="w-full max-w-md">
                  <form class="w-full space-y-4" action="#">
                    <!--Radio group-->
                    <div class="group relative">
                      <input
                        x-model="paymentMethod"
                        class="
                          peer
                          absolute
                          top-0
                          left-0
                          w-full
                          h-full
                          opacity-0
                          z-20
                          cursor-pointer
                        "
                        type="radio"
                        name="payment_methods"
                        value="ACH"
                        id="payment_method_1"
                        checked
                      />
                      <!--Indicator-->
                      <div
                        class="
                          absolute
                          top-1/2
                          -translate-y-1/2
                          left-6
                          w-6
                          h-6
                          rounded-full
                          flex
                          items-center
                          justify-center
                          peer-checked:child:scale-1
                          peer-not-checked:child:scale-0
                          bg-muted-100
                          text-muted-100
                          dark:bg-muted-800 dark:text-muted-800
                          peer-checked:text-primary-500
                        "
                      >
                        <div
                          class="
                            w-3
                            h-3
                            rounded-full
                            bg-current
                            transition-colors
                            duration-300
                          "
                        ></div>
                      </div>
                      <div
                        class="
                          group
                          flex
                          items-center
                          py-4
                          px-6
                          bg-white
                          dark:bg-muted-1000
                          border border-muted-200
                          dark:border-muted-800
                          rounded-lg
                          cursor-pointer
                          peer-checked:shadow-xl peer-checked:shadow-muted-400/10
                          dark:peer-checked:shadow-muted-800/10
                          group-focus-visible:tw-accessibility-static
                          transition-shadow
                          duration-300
                        "
                      >
                        <div
                          class="
                            flex
                            items-center
                            justify-center
                            w-5
                            h-5
                            border border-muted-200
                            rounded-full
                          "
                        ></div>
                        <div class="flex flex-col ml-6">
                          <span
                            class="
                              font-heading
                              text-base
                              font-medium
                              text-muted-800
                              dark:text-muted-100
                            "
                          >
                            ACH
                          </span>
                        </div>
                        <div class="flex flex-col w-32 ml-auto">
                          <span
                            class="
                              font-heading
                              text-base
                              font-medium
                              text-muted-800
                              dark:text-muted-100
                            "
                          >
                            Free
                          </span>
                          <span class="font-heading text-xs text-muted-400">
                            3 business days
                          </span>
                        </div>
                      </div>
                    </div>
                    <!--Radio group-->
                    <div class="group relative">
                      <input
                        x-model="paymentMethod"
                        class="
                          peer
                          absolute
                          top-0
                          left-0
                          w-full
                          h-full
                          opacity-0
                          z-20
                          cursor-pointer
                        "
                        type="radio"
                        name="payment_methods"
                        value="Cheque"
                        id="payment_method_2"
                      />
                      <!--Indicator-->
                      <div
                        class="
                          absolute
                          top-1/2
                          -translate-y-1/2
                          left-6
                          w-6
                          h-6
                          rounded-full
                          flex
                          items-center
                          justify-center
                          peer-checked:child:scale-1
                          peer-not-checked:child:scale-0
                          bg-muted-100
                          text-muted-100
                          dark:bg-muted-800 dark:text-muted-800
                          peer-checked:text-primary-500
                        "
                      >
                        <div
                          class="
                            w-3
                            h-3
                            rounded-full
                            bg-current
                            transition-colors
                            duration-300
                          "
                        ></div>
                      </div>
                      <div
                        class="
                          group
                          flex
                          items-center
                          py-4
                          px-6
                          bg-white
                          dark:bg-muted-1000
                          border border-muted-200
                          dark:border-muted-800
                          rounded-lg
                          cursor-pointer
                          peer-checked:shadow-xl peer-checked:shadow-muted-400/10
                          dark:peer-checked:shadow-muted-800/10
                          group-focus-visible:tw-accessibility-static
                          transition-shadow
                          duration-300
                        "
                      >
                        <div
                          class="
                            flex
                            items-center
                            justify-center
                            w-5
                            h-5
                            border border-muted-200
                            rounded-full
                          "
                        ></div>
                        <div class="flex flex-col ml-6">
                          <span
                            class="
                              font-heading
                              text-base
                              font-medium
                              text-muted-800
                              dark:text-muted-100
                            "
                          >
                            Cheque
                          </span>
                        </div>
                        <div class="flex flex-col w-32 ml-auto">
                          <span
                            class="
                              font-heading
                              text-base
                              font-medium
                              text-muted-800
                              dark:text-muted-100
                            "
                          >
                            Free
                          </span>
                          <span class="font-heading text-xs text-muted-400">
                            7-10 business days
                          </span>
                        </div>
                      </div>
                    </div>
                    <!--Radio group-->
                    <div class="group relative">
                      <input
                        x-model="paymentMethod"
                        class="
                          peer
                          absolute
                          top-0
                          left-0
                          w-full
                          h-full
                          opacity-0
                          z-20
                          cursor-pointer
                        "
                        type="radio"
                        name="payment_methods"
                        value="wire"
                        id="payment_method_3"
                      />
                      <!--Indicator-->
                      <div
                        class="
                          absolute
                          top-1/2
                          -translate-y-1/2
                          left-6
                          w-6
                          h-6
                          rounded-full
                          flex
                          items-center
                          justify-center
                          peer-checked:child:scale-1
                          peer-not-checked:child:scale-0
                          bg-muted-100
                          text-muted-100
                          dark:bg-muted-800 dark:text-muted-800
                          peer-checked:text-primary-500
                        "
                      >
                        <div
                          class="
                            w-3
                            h-3
                            rounded-full
                            bg-current
                            transition-colors
                            duration-300
                          "
                        ></div>
                      </div>
                      <div
                        class="
                          group
                          flex
                          items-center
                          py-4
                          px-6
                          bg-white
                          dark:bg-muted-1000
                          border border-muted-200
                          dark:border-muted-800
                          rounded-lg
                          cursor-pointer
                          peer-checked:shadow-xl peer-checked:shadow-muted-400/10
                          dark:peer-checked:shadow-muted-800/10
                          group-focus-visible:tw-accessibility-static
                          transition-shadow
                          duration-300
                        "
                      >
                        <div
                          class="
                            flex
                            items-center
                            justify-center
                            w-5
                            h-5
                            border border-muted-200
                            rounded-full
                          "
                        ></div>
                        <div class="flex flex-col ml-6">
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
                        </div>
                        <div class="flex flex-col w-32 ml-auto">
                          <span
                            class="
                              font-heading
                              text-base
                              font-medium
                              text-muted-800
                              dark:text-muted-100
                            "
                          >
                            Free
                          </span>
                          <span class="font-heading text-xs text-muted-400">
                            1 business day
                          </span>
                        </div>
                      </div>
                    </div>
                  </form>

                  <div class="flex gap-4 mt-4">
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
                      @click="nextStep()"
                    >
                      Continue
                    </button>
                  </div>
                </div>
              </div>

              <!--Step 3-->
              <!--Step 3-->
              <div x-show="currentStep === 2" class="w-full">
                <h2
                  class="
                    font-heading
                    text-2xl
                    md:text-3xl
                    text-muted-800
                    dark:text-white
                    mb-4
                  "
                >
                  Recipient details
                </h2>

                <div class="w-full max-w-md">
                  <form class="py-4">
                    <!--Grid-->
                    <div class="grid md:grid-cols-2 gap-4">
                      <!--Field-->
                      <div class="group relative col-span-2">
                        <label class="font-alt text-sm text-slate-400">Recipient Name</label>
                        <div class="group relative">
                          <input
                            type="text"
                            :value="recipient"
                            class="
                              px-4
                              py-2
                              h-10
                              text-base
                              leading-5
                              font-sans
                              w-full
                              rounded-md
                              bg-muted-100
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
                              pointer-events-none
                            "
                            readonly
                          />
                        </div>
                      </div>
                      <!--Field-->
                      <div class="group relative">
                        <label class="font-alt text-sm text-slate-400">Routing number</label>
                        <div class="group relative">
                          <input
                            type="number"
                            x-model="routingNumber"
                            class="
                              px-4
                              py-2
                              h-10
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
                            placeholder=""
                          />
                        </div>
                      </div>
                      <!--Field-->
                      <div class="group relative">
                        <label class="font-alt text-sm text-slate-400">
                          Prefix (optional)
                        </label>
                        <div class="group relative">
                          <input
                            type="number"
                            class="
                              px-4
                              py-2
                              h-10
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
                            placeholder=""
                          />
                        </div>
                      </div>
                    </div>
                  </form>

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
                      :class="routingNumber === null ? 'cursor-not-allowed opacity-70' : ''"
                      :disabled="routingNumber === null"
                      @click="nextStep()"
                    >
                      Continue
                    </button>
                  </div>
                </div>
              </div>

              <!--Step 4-->
              <!--Step 4-->
              <div x-show="currentStep === 3" class="w-full">
                <h2
                  class="
                    font-heading
                    text-2xl
                    md:text-3xl
                    text-muted-800
                    dark:text-white
                    mb-4
                  "
                >
                  Recipient address
                </h2>

                <div class="w-full max-w-md">
                  <form class="py-4">
                    <!--Grid-->
                    <div class="grid md:grid-cols-2 gap-4">
                      <!--Field-->
                      <div class="group relative col-span-2">
                        <label class="font-alt text-sm text-slate-400">Address line 1</label>
                        <div class="group relative">
                          <input
                            type="text"
                            x-model="addressMain"
                            class="
                              px-4
                              py-2
                              h-10
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
                          />
                        </div>
                      </div>
                      <!--Field-->
                      <div class="group relative col-span-2">
                        <label class="font-alt text-sm text-slate-400">Address line 2</label>
                        <div class="group relative">
                          <input
                            type="text"
                            x-model="addressSub"
                            class="
                              px-4
                              py-2
                              h-10
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
                          />
                        </div>
                      </div>
                      <!--Field-->
                      <div class="group relative">
                        <label class="font-alt text-sm text-slate-400">City</label>
                        <div class="group relative">
                          <input
                            type="text"
                            x-model="city"
                            class="
                              px-4
                              py-2
                              h-10
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
                            placeholder=""
                          />
                        </div>
                      </div>
                      <!--Field-->
                      <div class="group relative">
                        <label class="font-alt text-sm text-slate-400">Postal code</label>
                        <div class="group relative">
                          <input
                            type="text"
                            x-model="postalCode"
                            class="
                              px-4
                              py-2
                              h-10
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
                            placeholder=""
                          />
                        </div>
                      </div>
                      <!--Field-->
                      <div class="group relative">
                        <label class="font-alt text-sm text-slate-400">State</label>
                        <div class="group relative">
                          <input
                            type="text"
                            x-model="state"
                            class="
                              px-4
                              py-2
                              h-10
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
                            placeholder=""
                          />
                        </div>
                      </div>
                      <!--Field-->
                      <div class="relative">
                        <label class="font-alt text-sm text-slate-400">Country</label>
                        <div class="relative group">
                          <select
                            x-model="country"
                            class="
                              appearance-none
                              px-3
                              py-2
                              h-10
                              text-sm
                              leading-5
                              font-sans
                              w-full
                              rounded
                              border border-muted-300
                              bg-white
                              text-muted-600
                              placeholder-gray-300
                              focus:border-muted-300 focus:shadow-lg
                              dark:placeholder-gray-600
                              dark:bg-muted-900
                              dark:text-muted-200
                              dark:border-muted-800
                              dark:focus:border-muted-800
                              tw-accessibility
                              transition-all
                              duration-300
                            "
                          >
                            <option>Select country</option>
                            <option value="United States" selected>United States</option>
                            <option value="Canada">Canada</option>
                            <option value="France">France</option>
                            <option value="China">China</option>
                            <option value="Germany">Germany</option>
                          </select>
                          <div
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
                              transition-transform
                              duration-300
                              group-focus-within:-rotate-180
                            "
                          >
                            <i class="iconify w-4 h-4" data-icon="lucide:chevron-down"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>

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
                      :class="addressMain.length === 0 || addressSub.length === 0 || postalCode.length === 0 || city.length === 0 || state.length === 0 || country.length === 0 ? 'cursor-not-allowed opacity-70' : ''"
                      :disabled="addressMain.length === 0 || addressSub.length === 0 || postalCode.length === 0 || city.length === 0 || state.length === 0 || country.length === 0"
                      @click="nextStep()"
                    >
                      Continue
                    </button>
                  </div>
                </div>
              </div>

              <!--Step 5-->
              <!--Step 5-->
              <div x-show="currentStep === 4" class="w-full">
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
                  Set an amount to transfer
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
                      @keyup="setBalanceLimit()"
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

                  <!--Transfer account-->
                  <div class="py-10">
                    <h4 class="font-heading text-sm mb-4 text-muted-600 dark:text-muted-400">
                      Transfer from:
                    </h4>
                    <!--Dropdown-->
                    <div x-data="dropdown()" class="relative w-full" @click.away="close()">
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
                      :class="amount === null || amount === 0 ? 'cursor-not-allowed opacity-70' : ''"
                      :disabled="amount === null || amount === 0"
                      @click="nextStep()"
                    >
                      Continue
                    </button>
                  </div>
                </div>
              </div>

              <!--Step 6-->
              <!--Step 6-->
              <div x-show="currentStep === 5" class="w-full">
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
                        <p class="font-heading text-xs text-muted-400 mb-1">Routing number</p>
                        <h3
                          class="
                            font-heading font-medium
                            text-sm text-muted-800
                            dark:text-muted-100
                          "
                        >
                          <span x-text="routingNumber"></span>
                        </h3>
                      </div>
                    </div>

                    <!--Recipient-->
                    <div>
                      <p class="font-heading text-xs text-muted-400 mb-1">Recipient</p>

                      <div class="w-full flex gap-6 py-4">
                        <div
                          class="
                            w-12
                            h-12
                            flex
                            items-center
                            justify-center
                            rounded-full
                            bg-muted-200
                          "
                        >
                          <i
                            class="iconify w-7 h-7 text-muted-400"
                            data-icon="ph:user-duotone"
                          ></i>
                        </div>
                        <div>
                          <h4
                            class="font-heading text-muted-700 dark:text-muted-100 mb-1"
                            x-text="recipient"
                          >
                            John Doe
                          </h4>
                          <p
                            class="font-heading text-xs text-muted-500 dark:text-muted-400"
                            x-text="addressMain"
                          >
                            Some line address
                          </p>
                          <p
                            class="font-heading text-xs text-muted-500 dark:text-muted-400"
                            x-text="addressSub"
                          >
                            Some line address
                          </p>
                          <p class="font-heading text-xs text-muted-500 dark:text-muted-400">
                            <span x-text="postalCode">15000</span>
                            ,
                            <span x-text="city">San Diego</span>
                            <span x-text="state">CS</span>
                          </p>
                          <p class="font-heading text-xs text-muted-500 dark:text-muted-400">
                            <span x-text="country">USA</span>
                          </p>
                        </div>
                      </div>
                    </div>

                    <!--Amount-->
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
                          <div class="ml-auto pr-4">
                            <span
                              class="
                                block
                                font-heading
                                text-xs text-muted-800
                                dark:text-muted-200
                              "
                            >
                              Payment Method
                            </span>
                            <span
                              class="
                                block
                                font-heading
                                text-xs text-muted-500
                                dark:text-muted-400
                              "
                              x-text="paymentMethod"
                            ></span>
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
                        Send Payment
                      </button>
                    </div>
                  </div>
                </div>

                <!--Success section-->
                <div x-show="isComplete"><div class="w-full max-w-md text-center py-6">
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
                  Payment request sent!
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
