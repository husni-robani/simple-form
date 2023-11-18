<template>
    <Notivue v-slot="item">
        <Notifications :item="item" :theme="materialTheme"/>
    </Notivue>
    <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
        <div class="relative max-w-xl mx-auto">
            <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-red-800" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
            </svg>
            <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-red-800" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
            </svg>
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Data Diri</h2>
                <p class="mt-4 text-lg leading-6 text-gray-500">Isilah formulir dibawah ini dengan data yang benar</p>
            </div>
            <div class="mt-12">
                <form @submit.prevent="submit" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                    <div class="sm:col-span-2">
                        <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                        <div class="mt-1">
                            <input type="text" v-model="form.nik" name="nik" id="nik" class="py-3 px-4 block w-full shadow-sm focus:ring-yellow-500 focus:border-yellow-500 border-gray-300 rounded-md" />
                            <InputError :message="form.errors.nik"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name" v-model="form.name" class="py-3 px-4 block w-full shadow-sm focus:ring-yellow-500 focus:border-yellow-500 border-gray-300 rounded-md" />
                            <InputError :message="form.errors.name"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">No Telepon</label>
                        <div class="mt-1">
                            <input id="phone_number" name="phone_number" type="text" v-model="form.phone" class="py-3 px-4 block w-full shadow-sm focus:ring-yellow-500 focus:border-yellow-500 border-gray-300 rounded-md" />
                            <InputError :message="form.errors.phone"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="tps" class="block text-sm font-medium text-gray-700">No TPS</label>
                        <div class="mt-1">
                            <input id="tps" name="tps" type="number" v-model="form.tps" class="py-3 px-4 block w-full shadow-sm focus:ring-yellow-500 focus:border-yellow-500 border-gray-300 rounded-md" />
                            <InputError :message="form.errors.tps"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="kelurahan" class="block text-sm font-medium text-gray-700">Kelurahan</label>
                        <div class="mt-1">
                            <input type="text" name="keluarahan" id="kelurahan" v-model="form.kelurahan" class="py-3 px-4 block w-full shadow-sm focus:ring-yellow-500 focus:border-yellow-500 border-gray-300 rounded-md" />
                            <InputError :message="form.errors.kelurahan"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
                        <div class="mt-1">
                            <input type="text" name="kecamatan" id="kecamatan" v-model="form.kecamatan" class="py-3 px-4 block w-full shadow-sm focus:ring-yellow-500 focus:border-yellow-500 border-gray-300 rounded-md" />
                            <InputError :message="form.errors.kecamatan"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="tps_address" class="block text-sm font-medium text-gray-700">Alamat TPS</label>
                        <div class="mt-1">
                            <textarea id="tps_address" name="tps_address" rows="3" v-model="form.tps_address" class="py-3 px-4 block w-full shadow-sm focus:ring-yellow-500 focus:border-yellow-500 border border-gray-300 rounded-md" />
                            <InputError :message="form.errors.tps_address"/>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { Switch } from '@headlessui/vue'
import InputError from "@/Components/InputError.vue";

const agreed = ref(false)
import {useForm} from "@inertiajs/vue3";
import {materialTheme, Notifications, Notivue, usePush} from "notivue";

const form = useForm({
    name: null,
    nik: null,
    tps: null,
    tps_address: null,
    phone: null,
    kelurahan: null,
    kecamatan: null
})

const push = usePush()
function submit(){
    form.post(route('form'), {
        onSuccess: () => {
            form.reset()
            push.success({
                message: "Form berhasil dikirim",
                duration: 5000
            })
        }
    })
}
</script>

