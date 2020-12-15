<template>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img :src="require('/images/liceo_logo.png')" alt="">
            </div>
        </div>
        <div class="row">

        </div>
        <div class="row">

        </div>
    </div>
</template>

<script>
export default {

methods: {
    print () {
			this.$htmlToPaper('printMe');
    },
}
}
</script>
