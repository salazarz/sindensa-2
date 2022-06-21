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
                            <h1 class="text-2xl font-semibold text-gray-900">Bidang</h1>
                            <!-- User info  -->
                            @include('admin.header')
                        </div>
                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                        <div class="flex justify-end pt-3">
                            <a href="/admin/bidang/add" class="rounded text-white bg-blue-600 px-4 py-2 m-4 mr-0">Tambah Bidang</a>
                        </div>
                        <!-- Replace with your content -->
                        <div class="py-5">
                            <!-- table -->
                            <table id="table_id" class="divide-y divide-gray-200 w-full table-auto border-collapse border border-slate-500">
                                <thead class="bg-gray-300">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider border border-slate-600">
                                            No</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider border border-slate-600">
                                            Nama Bidang</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i < 3; $i++) <tr class="bg-white border-collapse border border-slate-500">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-slate-600">{{ $i }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border border-slate-600">Bidang {{ $i }}</td>
                                        </tr>
                                        @endfor
                                </tbody>
                            </table>
                            <!-- end of table -->
                        </div>
                        <!-- /End replace -->
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>