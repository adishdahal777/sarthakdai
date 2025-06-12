<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="h-screen bg-gray-100 flex items-center justify-center">
    <!-- From Uiverse.io by Yaya12085 -->
    <form method="GET">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0 min-w-lg">
            <div class="w-full bg-white rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Create an account


                    </p>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">
                            Your username
                        </label>
                        <x-input name="name" />

                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">
                            Password
                        </label>
                        <x-input type="password" name="password" placeholder="••••••••" />

                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">
                            Confirm password
                        </label>
                        <x-input type="password" name="confirm_password" placeholder="••••••••" classes="w-full" />
                    </div>
                    <div class="flex
                            items-start">
                        <div class="flex items-center h-5">
                            <input
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 bg-gray-700 border-gray-600 focus:ring-primary-600 ring-offset-gray-800"
                                type="checkbox" aria-describedby="terms" id="terms">
                        </div>
                        <div class="ml-3 text-sm">
                            <label class="font-light text-gray-500 text-gray-300">
                                I accept the
                                <a href="#" class="font-medium text-primary-600 hover:underline text-primary-500">
                                    Terms and Conditions
                                </a>
                            </label>
                        </div>
                    </div>

                    <x-button value="Create Account" type="success" btnType="submit"
                        classes="w-full text-sm rounded-lg" />

                </div>
            </div>
        </div>
    </form>

</body>

</html>
