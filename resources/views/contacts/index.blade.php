<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    index<br>
                    <a href="{{ route('contacts.create') }}" class="text-blue-500">新規登録</a><br>
                    <form class="mb-8" method="get" action="{{ route('contacts.index') }}">
                        <input type="text" name="search" placeholder="検索">
                        <button class="px-8 py-2 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">検索する</button>
                    </form>


                    <div class="w-full mx-auto overflow-auto lg:w-2/3">
                        <table class="w-full text-left whitespace-no-wrap table-auto">
                          <thead>
                            <tr>
                              <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 rounded-tl rounded-bl title-font">Id</th>
                              <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">氏名</th>
                              <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">件名</th>
                              <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">登録日</th>
                              <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">詳細</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                              <td class="px-4 py-3 border-t-2 border-gray-200"> {{ $contact->id }}</td>
                              <td class="px-4 py-3 border-t-2 border-gray-200">{{ $contact->name }}</td>
                              <td class="px-4 py-3 border-t-2 border-gray-200">{{ $contact->title }}</td>
                              <td class="px-4 py-3 border-t-2 border-gray-200">{{ $contact->created_at }}</td>
                              <td class="px-4 py-3 border-t-2 border-gray-200"><a class="text-blue-500" href="{{ route('contacts.show',['id' => $contact->id] )}}">詳細をみる</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
