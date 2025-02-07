<x-guest-layout>

    <x-slot:title>
        Login
    </x-slot>

    <div class="card-body lg:w-1/2">
        <h2 class="mb-6 text-2xl font-bold card-title">Login | Techxplosion</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full input input-bordered" placeholder="email@example.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4 form-control">
                <label class="label">
                    <span class="label-text">Password</span>
                </label>
                <input type="password" name="password" class="w-full input input-bordered" placeholder="" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <label class="label">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="label-text-alt link link-hover">Forgot password?</a>
                    @endif
                </label>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="border-gray-300 rounded shadow-sm text-orange_custom focus:text-orange_custom" name="remember">
                    <span class="text-sm ms-2">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mt-6 form-control">
                <button class="btn bg-blue-700 hover:bg-blue-500 text-white">Login</button>
            </div>
        </form>
        <div class="divider">OR</div>
        <div class="text-center">
            <p>Don't have an account?</p>
            <a href="{{ route('register') }}" class="link link-primary">Sign up now</a>
        </div>
    </div>
</x-guest-layout>
