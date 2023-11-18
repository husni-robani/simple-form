<template>
    <Notivue v-slot="item">
        <Notifications :item="item" :theme="materialTheme"/>
    </Notivue>
    <a :href="route('login')" class="z-40 bg-gray-200 p-2 rounded-full right-14 bottom-16 absolute">
        <ArrowLeftOnRectangleIcon class="w-10 fill-slate-400"/>
    </a>
    <div class="relative w-full pt-52 lg:pt-0 h-screen block lg:flex justify-center items-center py-16 bg-gray-50 lg:bg-white">
        <div class="hidden absolute top-0 inset-x-0 h-1/2 bg-yellow-500 lg:block" aria-hidden="true" />
        <div class="max-w-7xl mx-auto bg-transparent lg:bg-transparent lg:px-8">
            <div class="lg:grid lg:grid-cols-12">
                <div class="relative z-10 lg:col-start-1 lg:row-start-1 lg:col-span-4 lg:py-16 lg:bg-transparent">
                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-red-800 lg:hidden" aria-hidden="true" />
                    <div class="max-w-md mx-auto px-4 sm:max-w-3xl sm:px-6 lg:max-w-none lg:p-0">
                        <div class="aspect-w-10 aspect-h-6 sm:aspect-w-2 sm:aspect-h-1 lg:aspect-w-1">
                            <img class="object-contain lg:object-cover object-center bg-white rounded-3xl shadow-2xl" src="/assets/images/Gerindra.png" alt="" />
                        </div>
                    </div>
                </div>

                <div class="relative bg-red-800 lg:col-start-3 lg:row-start-1 lg:col-span-10 lg:rounded-3xl lg:grid lg:grid-cols-10 lg:items-center">
                    <div class="hidden absolute inset-0 overflow-hidden rounded-3xl lg:block" aria-hidden="true">
                        <svg class="absolute bottom-full left-full transform translate-y-1/3 -translate-x-2/3 xl:bottom-auto xl:top-0 xl:translate-y-0" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-red-700" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                        </svg>
                        <svg class="absolute top-full transform -translate-y-1/3 -translate-x-1/3 xl:-translate-y-1/2" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-red-700" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                        </svg>
                    </div>
                    <div class="relative max-w-md mx-auto py-12 px-4 space-y-6 sm:max-w-3xl sm:py-16 sm:px-6 lg:max-w-none lg:p-0 lg:col-start-4 lg:col-span-6">
                        <h2 class="text-3xl font-extrabold text-white" id="join-heading">Klik tombol dibawah untuk mengisi formulir</h2>
                        <p class="text-lg text-white"></p>
                        <a class="block w-full py-3 px-5 text-center bg-white border border-transparent rounded-md shadow-md text-base font-medium text-black hover:bg-gray-50 sm:inline-block sm:w-auto" :href="route('form')">Isi Formulir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {materialTheme, Notifications, Notivue, usePush} from "notivue";
import {ArrowLeftOnRectangleIcon} from "@heroicons/vue/24/solid"
</script>

