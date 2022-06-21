<!doctype html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    @include('head')
</head>

<body>
    <div>
        <!-- Static sidebar for desktop -->
        @include('admin.sidebar')
        <div class="md:pl-64 flex flex-col flex-1">
            <main class="flex-1">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <div class="flex justify-between items-end">
                            <h1 class="text-2xl font-semibold text-gray-900">User</h1>
                            <!-- User info  -->
                            @include('admin.header')
                        </div>
                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <!-- Replace with your content -->
                        <div class="py-5">
                            <form id="form-data" method="post" enctype="multipart/form-data">
                                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                    @csrf
                                    <div class="sm:col-span-4">
                                        <label for="nip" class="block text-sm font-medium text-gray-700"> NIP
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="nip" id="nip" autocomplete="nip" class="flex-1 focus:ring-blue-500 focus:border-blue-500 block w-full min-w-0 rounded sm:text-sm border-gray-300">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <label for="name" class="block text-sm font-medium text-gray-700"> Nama</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="name" id="name" autocomplete="name" class="flex-1 focus:ring-blue-500 focus:border-blue-500 block w-full min-w-0 rounded sm:text-sm border-gray-300">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <label for="nama" class="block text-sm font-medium text-gray-700"> Jabatan
                                        </label>
                                        <select class=" block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            <option>Jabatan 1</option>
                                            <option>Jabatan 2</option>
                                        </select>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <label for="nama" class="block text-sm font-medium text-gray-700"> Jabatan
                                        </label>
                                        <select class=" block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            <option>Bidang 1</option>
                                            <option>Bidang 2</option>
                                        </select>
                                    </div>
                                    <div class="sm:col-span-5">
                                        <div class="justify-items-center">
                                            <div class="flex justify-end">
                                                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>