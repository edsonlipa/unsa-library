<template>
    <Head title="Reporte de Bibliotecas UNSA" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Reporte de Bibliotecas UNSA
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        Reporte de Bibliotecas
                    </div>
                </div>
            </div>
            <report-database name_database="Libs" route_name="reportes.libs_report"/>
            <report-database name_database="Libaeds" route_name="reportes.libaeds_report"/>
            <report-database name_database="Libcengage" route_name="reportes.libcengage_report"/>
            <report-database name_database="Libcimabook" route_name="reportes.libcimabook_report"/>
            <report-database name_database="libeureka" route_name="reportes.libeureka_report"/>
            <report-database name_database="libeuromonitor" route_name="reportes.libeuromonitor_report"/>
            <report-database name_database="mcgrawhill" route_name="reportes.mcgrawhill_report"/>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';
import ReportDatabase from '@/components/ReportDatabase.vue'

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        ReportDatabase
    },
}
</script>
