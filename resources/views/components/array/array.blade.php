<div class="flex flex-col">
    <div class="overflow-x-auto">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden shadow">
                <table class="min-w-full divide-y divide-gray-200 table-fixed -sm:hidden empty-cells-hidden">

                    <thead class="bg-gray-100">
                        <tr>
                            @foreach ($columnLibelle as $libelle)
                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                                    {{ $libelle }}
                                </th>
                            @endforeach
                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($objects as $object)
                            <tr class="hover:bg-gray-100" id="object-{{ $object->id }}">
                                @foreach ($columnProperties as $property)
                                    <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap truncate-cell" data-name="{{ $property }}" data-value="{{ $object->$property }}">
                                        @if(str_ends_with($property, '_id')) 
                                        @php
                                            $function = substr($property, 0, -3)
                                        @endphp
                                            {{ $object->$function->name }}
                                        @else 
                                            {{ $object->$property }}
                                        @endif
                                    </td>
                                @endforeach
                                
                                <td class="p-4 space-x-2 whitespace-nowrap">
                                    <button data-object-id="{{ $object->id }}" type="button" data-modal-toggle="edit-modal" 
                                        class="edit-button-modal inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                        Modifier
                                    </button>
                                    <button type="button" data-modal-toggle="delete-user-modal" 
                                    class="delete-button-modal inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        Supprimer
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<x-array.pagination :$objects />
