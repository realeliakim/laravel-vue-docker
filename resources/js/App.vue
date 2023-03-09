<script>
import image from "../images/logo.png";
import Products from "./components/Products.vue";
import Footer from "./components/Footer.vue";
export default {
    data: function () {
        return {
            image: image,
        };
    },

    components: {
        Products,
        Footer,
    },
};
</script>

<template lang="html">
    <div class="container">
        <svg class="bi" width="32" height="32" fill="currentColor">
            <use xlink:href="bootstrap-icons.svg#heart-fill" />
        </svg>
        <svg class="bi" width="32" height="32" fill="currentColor">
            <use xlink:href="bootstrap-icons.svg#heart-fill" />
        </svg>
        <img
            src="/assets/img/bootstrap.svg"
            alt="Bootstrap"
            width="32"
            height="32"
        />
        <div class="col-md-12">
            <img :src="image" width="400" height="100" />
            <br />
            <Products />
            <Footer />
        </div>
    </div>
    <br />
</template>

<style lang="css">
.col-md-12 {
    text-align: center;
    padding: 10px 0;
}
</style>
