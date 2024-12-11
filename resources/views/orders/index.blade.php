<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Órdenes</title>
    <!-- Asegúrate de incluir Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="container mx-auto p-6">
        <!-- Encabezado -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Órdenes</h1>
            <a href="{{ route('orders.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Crear Orden</a>
        </div>

        <!-- Tabla -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Descripción</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Cliente</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Trabajador</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Estado</th>
                        <th class="py-3 px-6 text-left text-sm font-semibold text-gray-700">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-6 text-sm text-gray-900">{{ $order->description }}</td>
                        <td class="py-3 px-6 text-sm text-gray-800">{{ $order->customer->name }}</td>
                        <td class="py-3 px-6 text-sm text-gray-800">{{ $order->worker->name }}</td>
                        <td class="py-3 px-6 text-sm text-gray-700">
                            <span class="inline-block px-3 py-1 text-sm font-semibold rounded-full
                                @if($order->status == 'pending') bg-yellow-300 text-yellow-800 @elseif($order->status == 'in_progress') bg-blue-300 text-blue-800 @elseif($order->status == 'completed') bg-green-300 text-green-800 @endif">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td class="py-3 px-6 text-sm text-gray-800">
                            <a href="{{ route('orders.show', $order->id) }}" class="text-blue-500 hover:text-blue-700 transition">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
