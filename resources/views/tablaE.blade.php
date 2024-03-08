@vite('resources/css/app.css')
<div class="max-w-4xl px-4 py-8 m-auto">
    <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-gradient-to-r from-blue-500 to-purple-600">
                <tr>
                    <th class="px-6 py-3">Nombre</th>
                    <th class="px-6 py-3">Apellido</th>
                    <th class="px-6 py-3">ID</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($tablaE as $item)
                    <tr class="transition duration-300 transform hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $item->name_student }}</td>
                        <td class="px-6 py-4">{{ $item->lastame_student }}</td>
                        <td class="px-6 py-4">{{ $item->id_student }}</td>
                        <td class="px-6 py-4"><a href="{{ route('estudiantes.show', $item->id) }}" class="text-blue-600 hover:text-blue-900">Ver</a></td>
                        <td>
                            <a href="{{route('estudiantes.show',$item->id)}}"></a>     
                            <a href="{{route('estudiantes.edit',$item->id)}}">Editar</a>    
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{$tablaE->links()}} 
        </div>
    </div>
</div>
