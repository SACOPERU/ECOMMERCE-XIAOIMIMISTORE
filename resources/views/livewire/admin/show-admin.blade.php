<x-jet-action-section>
    <x-slot name="title">
        Lista de Categorias
    </x-slot>

    <x-slot name="description">
        Aqui encontrara todas las categorias agregadas
    </x-slot>

    <x-slot name="content">

        <table class="text-gray-600">
            <thead class="border-b border-gray-300">
                <tr class="text-left">
                    <th class="py-2 w-full">Nombre</th>
                    <th class="py-2">Accion</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-300">
                @foreach ($categories as $category)
                    <tr>
                        <td class="py-2">
                            <span class="inline-block w-8 text-center mr-2">
                                {!! $category->icon !!}
                            </span>

                            <a href="{{ route('admin.categories.show', $category) }}"
                                class="uppercase underline hover:text-yellow-500">
                                {{ $category->name }}
                            </a>
                        </td>
                        <td class="py-2">
                            <div class="flex divide-x divide-gray-300 font-semibold">
                                <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                    wire:click="edit('{{ $category->slug }}')">Editar</a>
                                <a class="pl-2 hover:text-red-600 cursor-pointer"
                                    wire:click="$emit('deleteCategory', '{{ $category->slug }}')">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </x-slot>
</x-jet-action-section>

<x-jet-dialog-modal wire:model="editForm.open">

    <x-slot name="title">
        Editar Categoria
    </x-slot>

    <x-slot name="content">
        <div class="space-y-3">

            <div>
                @if ($editImage)
                    <img class="w-full h-64 object-cover object-center " src="{{ $editImage->temporaryurl() }}"
                        alt="">
                @else
                    <img class="w-full h-64 object-cover object-center "
                        src="{{ Storage::url($editForm['image']) }}" alt="">
                @endif
            </div>

            <div>
                <x-jet-label>
                    Nombre
                </x-jet-label>

                <x-jet-input wire:model="editForm.name" type="text" class="w-full mt-1" />
                <x-jet-input-error for="editForm.name" />
            </div>

            <div>
                <x-jet-label>
                    Slug
                </x-jet-label>

                <x-jet-input disabled wire:model="editForm.slug" type="text" class="w-full mt-1 bg-gray-100" />
                <x-jet-input-error for="editForm.slug" />
            </div>

            <div>
                <x-jet-label>
                    Icon
                </x-jet-label>

                <x-jet-input wire:model.defer="editForm.icon" type="text" class="w-full mt-1" />
                <x-jet-input-error for="editForm.icon" />
            </div>

            <div>
                <x-jet-label>
                    Marcas
                </x-jet-label>

                <div class="grid grid-cols-4">
                    @foreach ($brands as $brand)
                        <x-jet-label>
                            <x-jet-checkbox wire:model.defer="editForm.brands" name="brands[]"
                                value="{{ $brand->id }}" />
                            {{ $brand->name }}

                        </x-jet-label>
                    @endforeach
                </div>
                <x-jet-input-error for="editForm.brands" />
            </div>

            <div>
                <x-jet-label>
                    Imagen
                </x-jet-label>

                <input wire:model="editImage" accept="image/*" type="file" class="mt-1" name=""
                    id="{{ $rand }}" />
                <x-jet-input-error for="editImage" />
            </div>

        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="editImage, update">
            Actualizar
        </x-jet-danger-button>
    </x-slot>

</x-jet-dialog-modal>