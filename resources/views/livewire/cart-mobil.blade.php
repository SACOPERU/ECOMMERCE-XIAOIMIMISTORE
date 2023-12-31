
<div>
    {{-- The whole world belongs to you. --}}
    <a  href="/shopping-cart" class="py-2 px-4 text-sm flex items-center text-black hover:bg-orange-400 hover:text-white">

        <span class="flex justify-center w-9">
            <i class="fas fa-shopping-cart"></i>
        </span>
        <span class="relative inline-block pr-4">
            Carrito de compras
            @if (Cart::count())
                    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ Cart::count() }}</span>
                @else
                <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span></span>
                @endif
        </span>
    </a>


</div>
