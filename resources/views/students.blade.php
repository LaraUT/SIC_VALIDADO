@vite('resources/css/app.css')

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form action="{{ url('estudiantes') }}" method="POST" class="w-full max-w-lg p-10 m-4 bg-white rounded-lg shadow-xl">
        @csrf
        <h2 class="mb-8 text-2xl font-bold text-center text-gray-800">Registrar Estudiante</h2>
        
        <div class="mb-6">
            <label for="name_student" class="block mb-2 text-sm font-bold text-gray-600">Nombre:</label>
            <input type="text" name="name_student" id="name_student" required class="w-full px-4 py-2 text-gray-700 bg-white border rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
        </div>
        
        <div class="mb-6">
            <label for="lastame_student" class="block mb-2 text-sm font-bold text-gray-600">Apellido:</label>
            <input type="text" name="lastame_student" id="lastame_student" class="w-full px-4 py-2 text-gray-700 bg-white border rounded-md shadow-sm focus:border-purple-500 focus:ring focus:ring-purple-500 focus:ring-opacity-50">
        </div>
        
        <div class="mb-6">
            <label for="id_student" class="block mb-2 text-sm font-bold text-gray-600">ID del Estudiante:</label>
            <input type="number" name="id_student" id="id_student" required class="w-full px-4 py-2 text-gray-700 bg-white border rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
        </div>
        
        <div class="mb-6">
            <label for="birthday" class="block mb-2 text-sm font-bold text-gray-600">Fecha de Nacimiento:</label>
            <input type="date" name="birthday" id="birthday" required class="w-full px-4 py-2 text-gray-700 bg-white border rounded-md shadow-sm focus:border-red-500 focus:ring focus:ring-red-500 focus:ring-opacity-50">
        </div>
        
        <div class="mb-6">
            <label for="comments" class="block mb-2 text-sm font-bold text-gray-600">Comentarios:</label>
            <textarea name="comments" id="comments" class="w-full px-4 py-2 text-gray-700 bg-white border rounded-md shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-500 focus:ring-opacity-50"></textarea>
        </div>
        
        <div class="flex items-center justify-between">
            <button type="submit" class="px-4 py-2 text-sm font-bold text-white rounded-lg bg-gradient-to-r from-blue-400 to-purple-500 hover:from-blue-500 hover:to-purple-600 focus:outline-none focus:shadow-outline">Enviar</button>
        </div>
    </form>
</div>
