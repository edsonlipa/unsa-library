<template>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 grid grid-cols-6">
            <div class="inline col-span-3  text-center py-2 px-4 ">
                {{name_database}}
            </div>
            <button 
            @click="dowload_report()"
            class="inline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ">
                Descargar Reporte
            </button>

            
        </div>
    </div>
</template>

<script>
export default {
    props: ['name_database','route_name'],
    mounted() {
        console.log('Component mounted.')
    },
    methods:{
        dowload_report(){
            console.log(this.route_name)
        }
    }

}
</script>
