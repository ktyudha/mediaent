<x-guest-layout>
	<x-auth-card>
		<!-- Validation Errors -->
		<div class="text-black">
			<form method="POST" action="{{ route('register') }}" novalidate>
				@csrf

				<div class="items-center text-center text-xl font-bold">
					REGISTER
				</div>
				<!-- Name -->
				<div>
					<x-label for="name" :value="__('Name')" />
					<x-input id="name" class="block mt-2 w-full" type="text" name="name" :value="old('name')" required autofocus />
					<x-validation-message name="name" />
				</div>

				<!-- Email Address -->
				<div class="mt-4">
					<x-label for="email" :value="__('Email')" />
					<x-input id="email" class="block mt-2 w-full" type="email" name="email" :value="old('email')" required />
					<x-validation-message name="email" />
				</div>

				<!-- Password -->
				<div class="mt-4">
					<x-label for="password" :value="__('Password')" />
					<x-input id="password" class="block mt-2 w-full" type="password" name="password" required
						autocomplete="new-password" />
					<x-validation-message name="password" />
				</div>

				<!-- Confirm Password -->
				<div class="mt-4">
					<x-label for="password_confirmation" :value="__('Confirm Password')" />

					<x-input id="password_confirmation" class="block mt-2 w-full" type="password" name="password_confirmation"
						required />
					<x-validation-message name="password_confirmation" />
				</div>

				<div class="flex items-center justify-end mt-4">
					<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
						{{ __('Already registered?') }}
					</a>

					<x-button class="ml-4">
						{{ __('Register') }}
					</x-button>
				</div>
			</form>
		</div>
		{{-- <div>
			<div class="m-auto py-12 xl:w-10/12">
				<div class="block space-y-4 text-center">
					<a class="items-center" href="">
						<img src="{{ asset('ent.png') }}" class="m-auto w-16 items-center" alt="ENT" />
					</a>
					<p class="font-medium text-lg text-gray-600">Register Here</p>
				</div>

				<form method="POST" action="{{ route('register') }}" class="space-y-6 py-6">
					<div>
						<input type="text" placeholder="Name"
							class="
                                w-full
                                py-3
                                px-6
                                ring-1 ring-gray-300
                                rounded-xl
                                placeholder-gray-600
                                bg-transparent
                                transition
                                disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400
                                @error('name')
                                    invalid:ring-red-400
                                    focus:invalid:outline-none
                                @enderror
                            "
							name="name" value="{{ old('name') }}" />
                            @error('name')
                                <span class="ml-2 text-red-500">{{ $message }}</span>
                            @enderror
					</div>

					<div>
						<input type="email" placeholder="Email"
							class="
                                w-full
                                py-3
                                px-6
                                ring-1 ring-gray-300
                                rounded-xl
                                placeholder-gray-600
                                bg-transparent
                                transition
                                disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400
                                invalid:ring-red-400
                                focus:invalid:outline-none
                            "
							name="email" value="{{ old('email') }}" />
					</div>

					<div>
						<input type="password" placeholder="Password"
							class="
                                    w-full
                                    py-3
                                    px-6
                                    ring-1 ring-gray-300
                                    rounded-xl
                                    placeholder-gray-600
                                    bg-transparent
                                    transition
                                    disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400
                                "
							name="password" autocomplete="off" required />
					</div>

					<div>
						<input type="password" placeholder="Confirm Password"
							class="
								w-full
								py-3
								px-6
								ring-1 ring-gray-300
								rounded-xl
								placeholder-gray-600
								bg-transparent
								transition
								disabled:ring-gray-200 disabled:bg-gray-100 disabled:placeholder-gray-400
							"
							name="password_confirmation" autocomplete="off" required />
					</div>

					<button type="submit"
						class="w-full px-6 py-3 rounded-xl bg-sky-500 transition hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-800">
						Register
					</button>
				</form>

				<div class="text-center text-sm py-4">
					<span>Have an account?</span>
					<a href="{{ route('login') }}" class="text-blue-400">Login here</a>
				</div>
			</div>
		</div> --}}
	</x-auth-card>
</x-guest-layout>
