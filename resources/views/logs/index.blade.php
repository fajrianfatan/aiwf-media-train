@include('components.header')

<body class="bg-gray-100 min-h-screen p-8">

    <div class="max-w-6xl mx-auto">

        <h2 class="text-2xl font-semibold mb-6 text-gray-800">
            Activity Logs
        </h2>

        <div class="bg-white shadow rounded-xl overflow-hidden">

            <table class="w-full text-sm text-gray-800">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="p-3 text-left">ID</th>
                        <th class="p-3 text-left">Model</th>
                        <th class="p-3 text-left">Method</th>
                        <th class="p-3 text-left">Data (JSON)</th>
                        <th class="p-3 text-left">Created At</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($logs as $log)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-3">{{ $log->id }}</td>
                            <td class="p-3 font-medium">{{ $log->model }}</td>
                            <td class="p-3 font-medium">{{ $log->method }}</td>

                            <td class="p-3">
                                <pre class="bg-gray-100 p-3 rounded text-xs overflow-x-auto">
                                    {{ json_encode($log->data, JSON_PRETTY_PRINT) }}
                                </pre>
                            </td>

                            <td class="p-3">
                                {{ $log->created_at }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <div class="mt-4">
            {{ $logs->links() }}
        </div>

    </div>

</body>