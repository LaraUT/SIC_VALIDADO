<div class="p-8 m-auto ">
    <table class="w-full bg-gray-200 ">
        @foreach ($tablaE as $tablaE)
            <tr class="items-center p-2 m-auto mt-5 bg-gray-100 border border-gray-200 rounded-xl">
                <td>{{ $tablaE->name_student }}</td>
                <td>{{ $tablaE->lastame_student }}</td>
                <td>{{ $tablaE->id_student }}</td>
                <td>{{ $tablaE->birthday }}</td>
                <td>{{ $tablaE->comments }}</td>
            </tr>
        @endforeach
    </table>
</div>