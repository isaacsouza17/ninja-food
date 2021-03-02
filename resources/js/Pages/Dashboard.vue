<template>
    <breeze-authenticated-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-8 grid grid-cols-12 sm:px-6 lg:px-8 gap-6">
            <!-- Categories section -->
            <div class="col-span-full md:col-span-3">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h3 class="font-semibold text-gray-600 text-xl border-b border-gray-300 pb-1 mb-4">Categorias</h3>
                            
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="py-3">
                                            <a href="#edit" class="flex items-center">
                                                <svg class="w-6 h-6 inline mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                Hamburgueres
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">
                                            <a href="#edit" class="flex items-center">
                                                <svg class="w-6 h-6 inline mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                Sucos
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">
                                            <a href="#edit" class="flex items-center">
                                                <svg class="w-6 h-6 inline mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                Pizzas
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3">
                                            <a href="#edit" class="flex items-center">
                                                <svg class="w-6 h-6 inline mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                Refrigerantes
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="#add" class="block py-3 text-center rounded-md bg-green-500 text-gray-100 flex items-center justify-center mt-4">
                                <svg class="w-6 h-6 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Nova categoria
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products section -->
            <div class="col-span-full md:col-span-9">
                <div class="max-w-7xl mx-auto mb-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h3 class="font-semibold text-gray-600 text-xl border-b border-gray-300 pb-4">Hamburgueres</h3>

                            <ul class="grid grid-cols-12 py-2 flex items-center">
                                <li class="col-span-full md:col-span-6">
                                    X-Bacon
                                </li>
                                <li class="col-span-4 md:col-span-2 flex justify-start md:justify-center">
                                    R$29.90
                                </li>
                                <li class="col-span-4 md:col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disp.</label>
                                </li>
                                <li class="col-span-4 md:col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-0 md:mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        <span class="hidden md:block">Editar</span>
                                    </a>
                                </li>
                            </ul>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    X-Frango
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$29.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    X-Carne
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$29.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>
                            
                            <a href="#add" class="inline-block px-3 py-3 text-center rounded-md bg-green-500 text-gray-100 flex items-center justify-center mt-4">
                                <svg class="w-6 h-6 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Novo produto
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="max-w-7xl mx-auto mb-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h3 class="font-semibold text-gray-600 text-xl border-b border-gray-300 pb-1">Sucos</h3>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    Laranja
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$9.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    Abacaxi
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$9.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    Acerola
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$9.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="max-w-7xl mx-auto mb-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h3 class="font-semibold text-gray-600 text-xl border-b border-gray-300 pb-1">Pizas</h3>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    Mexicana
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$49.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    4 Queijos
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$49.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    Calabresa
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$49.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="max-w-7xl mx-auto mb-6">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h3 class="font-semibold text-gray-600 text-xl border-b border-gray-300 pb-1">Refrigerantes</h3>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    Coca-Cola Lata 350ML
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$7.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    Fanta Uva Lata 350ML
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$7.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>

                            <ul class="grid grid-cols-12 py-2 items-center">
                                <li class="col-span-6">
                                    Fanta Laranja Lata 350ML
                                </li>
                                <li class="col-span-2 flex justify-center">
                                    R$7.90
                                </li>
                                <li class="col-span-2 flex justify-center items-center">
                                    <input type="checkbox" id="checkbox1" class="transform scale-125 mr-2">
                                    <label for="checkbox1">Disponível</label>
                                </li>
                                <li class="col-span-2 flex justify-end">
                                    <a href="#edit" class="flex items-center bg-yellow-600 text-sm px-2 py-2 rounded-md text-gray-100 transform hover:scale-105">
                                        <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                        Editar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </breeze-authenticated-layout>
</template>

<script>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated'

    export default {
        components: {
            BreezeAuthenticatedLayout,
        },
    }
</script>
