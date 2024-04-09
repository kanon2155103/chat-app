<x-app-layout>
	<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			チャット
    </h2>
		<a href="{{ route('mypage.index', ['id' => $user->id]) }}">
			マイページ（さしあたり用意しましたが、first()でidを取得しているため機能しておりません）
		</a>
  </x-slot>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-12 text-gray-900 dark:text-gray-100">
					<div class="lg:w-2/3 w-full mx-auto overflow-auto">
						<table class="table-auto w-full text-left whitespace-no-wrap">
							@foreach($posts as $post)
							<tr>
								<td class="border-t-2 border-gray-200 px-4 py-3">{{ $post->user->nickname }}</td>
								<td class="border-t-2 border-gray-200 px-4 py-3">{{ $post->content }}</td>
								<td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">{{ $post->created_at }}</td>
							</tr>
							@endforeach
				</div>
			</div>
		</div>
		<section class="text-gray-600 body-font relative">
			<form method="post" action="{{ route('chat.store') }}">
				@csrf
				<div class="p-2 w-full">
          <div class="relative">
            <textarea id="message" name="content" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('content') }}</textarea>
          </div>
        </div>
				<div class="p-4 w-full">
					<button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
				</div>
			</form>
		</section>
	</div>
</x-app-layout>
