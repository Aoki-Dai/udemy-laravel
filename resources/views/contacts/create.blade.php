<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            新規作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="relative text-gray-600 body-font">
                        <form method="post" action="{{ route('contacts.store') }}">
                            @csrf
                        <div class="container px-5 mx-auto">

                          <div class="mx-auto lg:w-1/2 md:w-2/3">
                            <div class="flex flex-wrap -m-2">
                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="name" class="text-sm leading-7 text-gray-600">氏名</label>
                                  <input type="text" id="name" name="name" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="title" class="text-sm leading-7 text-gray-600">件名</label>
                                  <input type="text" id="title" name="title" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="email" class="text-sm leading-7 text-gray-600">メールアドレス</label>
                                  <input type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="url" class="text-sm leading-7 text-gray-600">ホームページ</label>
                                  <input type="url" id="url" name="url" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="name" class="text-sm leading-7 text-gray-600">性別</label><br>
                                  <input type="radio" name="gender" value="0">男性
                                  <input type="radio" name="gender" value="1">女性
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="age" class="text-sm leading-7 text-gray-600">年齢</label>
                                  <select name="age">
                                    <option value="">選択してください</option>
                                    <option value="1">～19歳</option>
                                    <option value="2">20歳～29歳</option>
                                    <option value="3">30歳～39歳</option>
                                    <option value="4">40歳～49歳</option>
                                    <option value="5">50歳～59歳</option>
                                    <option value="6">60歳～</option>
                                    </select>
                                   </form>
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <label for="contact" class="text-sm leading-7 text-gray-600">お問い合わせ</label>
                                  <textarea id="contact" name="contact" class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200"></textarea>
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <div class="relative">
                                  <input type="checkbox" id="caution" name="caution"> 注意事項に同意する
                                </div>
                              </div>

                              <div class="w-full p-2">
                                <button class="flex px-8 py-2 mx-auto text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">新規登録する</button>

                            </div>
                          </div>
                        </div>
                        </form>
                      </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
