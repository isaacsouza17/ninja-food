<template>
    <div class="grid grid-cols-2">
        <div class="col-span-2 md:col-span-1 min-h-screen flex flex-col sm:justify-center items-center px-2 pt-6 sm:pt-0 bg-gray-300">
            <div>
                <inertia-link href="/">
                    <breeze-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </inertia-link>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg">
                <slot />
            </div>
        </div>
        <div class="hidden md:block">
            <img class="min-h-screen w-full object-cover" src="../../../public/img/img01.jpg" alt="">
        </div>
    </div>
</template>

<script>
    import BreezeApplicationLogo from '@/Components/ApplicationLogo'

    export default {
        components: {
            BreezeApplicationLogo,
        }
    }
</script>
