<template>
  <div>

    <Head title="Cardápio" />

    <Layout>
        <template #header>
            <h1>CARDÁPIO</h1>
        </template>

        <div class="py-12">

            <div class="grid grid-cols-7 max-w-7xl mx-auto">

                <div class="col-span-5 bg-white px-3 shadow-sm rounded-lg">
                    <div class="p-6 border-b border-gray-200">
                        <h1 class="font-semibold text-2xl my-5 text-gray-600 text-center">
                            Faça Seu Pedido
                        </h1>
                        <hr class="my-5">

                        <div>

                            <h1 class="font-semibold text-xl my-5 text-gray-800">Pizzas</h1>

                            <table class="w-8/12 mx-auto">
                                <tr class="bg-slate-100">
                                    <th class="w-1/12 mx-auto border-4 border-solid border-white">ID</th>
                                    <th class="w-6/12 mx-auto border-4 border-solid border-white">Prato</th>
                                    <th class="w-3/12 mx-auto border-4 border-solid border-white">Preço</th>
                                    <th class="w-3/12 mx-auto border-4 border-solid border-white">Pedir</th>
                                </tr>
                                <tr class="border-b border-solid border-gray p2">
                                    <td class="w-1/12 text-center">0</td>
                                    <td class="w-6/12 text-center">Calabresa</td>
                                    <td class="w-3/12 text-center">R$25.50</td>
                                    <td class="w-3/12 text-center">
                                        <a class="bg-slate-200 px-2 rounded-lg mx-1 cursor-pointer" :href="null">-</a>
                                        <a class="bg-green-400 px-2 rounded-lg mx-1 cursor-pointer" :href="null">+</a>
                                    </td>
                                </tr>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="ml-5 col-span-2 bg-white px-3 shadow-sm rounded-lg">
                    <div class="p-3 ">

                        <h1 class="font-semibold text-2xl pt-3 pb-5 my-5 text-gray-800 text-center border-b border-gray-200">
                            Carrinho
                        </h1>

                        <div>
                            <div class="grid grid-cols-7">
                                <p class="col-span-5">Prato</p>
                                <p class="col-span-2">Valor</p>
                            </div>
                            <div>
                                <div class="grid grid-cols-7">
                                    <div class="col-span-5">
                                        <p>Calabresa x2</p>
                                    </div>
                                    <div class="col-span-2">
                                        <p>R$50.0</p>
                                    </div>
                                </div>
                                <div>
                                    <hr class="my-3">
                                </div>
                            </div>

                            <div>
                                <div class="grid grid-cols-7">
                                    <p class="col-span-5"> TOTAL</p>
                                    <p class="col-span-2"> R$50.0</p>
                                </div>  
                                <div class="text-center mt-10 mb-10">
                                    <a :href="null" class="bg-green-600 px-5 py-2 rounded-lg mx-1 text-white">Finalizar Compra</a>
                                </div>                              
                            </div>

                        </div>

                    </div>
                </div>  

            </div>

        </div>

    </Layout>

  </div>
</template>

<script>

import {Head} from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/Authenticated.vue'

export default {

    components: {
        Head,
        Layout
    }

}
</script>

<style>

</style>