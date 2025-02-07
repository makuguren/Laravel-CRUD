<x-guest-layout>

    <x-slot:title>
        Register
    </x-slot>

    <div class="card-body lg:w-1/2">
        <h2 class="mb-6 text-2xl font-bold card-title">Register | Techxplosion</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Name</span>
                </label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full input input-bordered" placeholder="Juan Dela Cruz" requiredautofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mt-4 form-control">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full input input-bordered" placeholder="email@example.com" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4 form-control">
                <label class="label">
                    <span class="label-text">Password</span>
                </label>
                <input type="password" name="password" class="w-full input input-bordered" placeholder="" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-4 form-control">
                <label class="label">
                    <span class="label-text">Confirm Password</span>
                </label>
                <input type="password" name="password_confirmation" class="w-full input input-bordered" placeholder="" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mt-6 form-control">
                <button class="btn bg-blue-700 hover:bg-blue-500 text-white">Register</button>
            </div>
        </form>
        <div class="divider">OR</div>
        <div class="text-center">
            <p>Already have an account?</p>
            <a href="{{ route('login') }}" class="link link-primary">Login now</a>
        </div>
    </div>
</x-guest-layout>
