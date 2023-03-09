<script>
const ano = new Date().getFullYear();
export default {
    data: function () {
        return {
            ano: ano,
        };
    },
};
</script>

<template lang="html">
    <div class="footer">
        <div class="col-md-12">
            <p>Copyright {{ ano }} - Master da Web</p>
        </div>
    </div>
    <br />
</template>

<style>
.col-md-12 {
    color: #fff;
}
</style>
