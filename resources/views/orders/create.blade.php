<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Orden</title>
    <!-- Asegúrate de incluir Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Contenedor principal -->
    <div class="container mx-auto p-6">
        <!-- Encabezado -->
        <div class="mb-6">
            <h1 class="text-3xl font-semibold text-gray-900">Crear Nueva Orden</h1>
        </div>

        <!-- Formulario -->
        <form method="POST" action="{{ route('orders.store') }}" class="bg-white p-8 rounded-lg shadow-lg">
            @csrf

            <!-- Descripción -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <input type="text" name="description" id="description" required
                    class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Fecha de Inicio -->
            <div class="mb-4">
                <label for="start_date" class="block text-sm font-medium text-gray-700">Fecha de Inicio</label>
                <input type="date" name="start_date" id="start_date" required
                    class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Fecha de Entrega -->
            <div class="mb-4">
                <label for="delivery_date" class="block text-sm font-medium text-gray-700">Fecha de Entrega</label>
                <input type="date" name="delivery_date" id="delivery_date" required
                    class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Estado -->
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Estado</label>
                <select name="status" id="status" class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="pending">Pendiente</option>
                    <option value="in_progress">En Progreso</option>
                    <option value="completed">Completada</option>
                </select>
            </div>

            <!-- Cliente -->
            <div class="mb-4">
                <label for="customers_id" class="block text-sm font-medium text-gray-700">Cliente</label>
                <select name="customers_id" id="customers_id" class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Trabajador -->
            <div class="mb-6">
                <label for="workers_id" class="block text-sm font-medium text-gray-700">Trabajador</label>
                <select name="workers_id" id="workers_id" class="mt-2 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach($workers as $worker)
                        <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Botón de envío -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 transition">
                    Crear Orden
                </button>
            </div>
        </form>
    </div>

</body>
</html>
