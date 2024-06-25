<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            詳細画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="relative text-gray-600 body-font">

                        <div class="container px-5 mx-auto">

                          <div class="mx-auto lg:w-1/2 md:w-2/3">
                            <div class="flex flex-wrap -m-2">
                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="name" class="text-sm leading-7 text-gray-600">氏名</label>
                                  <div class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $contact->name }}</div>
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="title" class="text-sm leading-7 text-gray-600">件名</label>
                                  <div class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $contact->title }}</div>
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="email" class="text-sm leading-7 text-gray-600">メールアドレス</label>
                                  <div class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $contact->email }}</div>
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="url" class="text-sm leading-7 text-gray-600">ホームページ</label>
                                  @if ($contact->url)
                                  <div class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{$contact->url}}</div>
                                  @endif
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="name" class="text-sm leading-7 text-gray-600">性別</label><br>
                                  <div class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{$gender}}</div>
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="age" class="text-sm leading-7 text-gray-600">年齢</label>
                                  <div class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{$age}}</div>
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="contact" class="text-sm leading-7 text-gray-600">お問い合わせ</label>
                                  <div class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $contact->contact }}</div>
                                </div>
                              </div>

                              <form method="get" action="{{ route('contacts.edit', ['id' => $contact ->id])}}">
                                <div class="w-full p-2">
                                  <button class="flex px-8 py-2 mx-auto text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">編集する</button>

                              </div>
                                </form>
                          </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
