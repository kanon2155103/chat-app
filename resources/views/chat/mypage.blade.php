<x-app-layout>
	<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ $user->id }} . {{ $user->nickname }}
    </h2>
  </x-slot>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-12 text-gray-900 dark:text-gray-100">
					<section class="text-gray-600 body-font relative">
						<div class="container px-5 mx-auto">
							<div class="lg:w-1/2 md:w-2/3 mx-auto">
								<div class="flex flex-wrap -m-2">
								<div class="p-2 w-full">
										<div class="relative">
											<label for="name" class="leading-7 text-sm text-gray-600">Name</label>
											<div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
												{{ $user->nickname }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="email" class="leading-7 text-sm text-gray-600">Email</label>
											<div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
												{{ $user->email }}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
