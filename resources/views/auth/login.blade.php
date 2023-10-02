<x-base-app-layout>
    <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
        <a href="#" class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
            <img src="{{ asset('icons/logo.webp') }}" class="h-11 mr-4" alt="FlowBite Logo">
            <span>{{ config('app.name', 'Laravel') }}</span>
        </a>
        <div class="bg-white shadow rounded-lg lg:flex items-center justify-center md:mt-0 w-full lg:max-w-screen-lg 2xl:max:max-w-screen-lg xl:p-0">
            <div class="hidden lg:flex w-2/3">
                <img class="rounded-l-lg" src="https://flowbite.com/application-ui/demo/images/authentication/login.jpg" alt="login image">
            </div>
            <div class="w-full p-6 sm:p-8 lg:p-16 lg:py-0 space-y-8">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
                    Se connecter à notre plateforme
                </h2>
                <form class="mt-8 space-y-6" action="{{ route("auth.login.store") }}" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Votre email</label>
                        <input type="email" name="email" id="email" value="{{ old("email") }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Votre mot de passe</label>
                        <input type="password" name="password" id="password" placeholder=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" name="remember" type="checkbox"
                                class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                        </div>
                        <div class="text-sm ml-3">
                            <label for="remember" class="font-medium text-gray-900">Se souvenir de moi</label>
                        </div>
                        <a href="#" class="text-sm text-blue-700 hover:underline ml-auto">Mot de passe oublié?</a>
                    </div>
                    <button type="submit"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">
                        Se connecter
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-base-app-layout>