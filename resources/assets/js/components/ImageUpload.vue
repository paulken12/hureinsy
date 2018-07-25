<template>
    <label id="file-button" class="border-light p-1">
        change image
        <input type="file" id="image" accept="image/*" @change="onChange">
    </label>
</template>

<script>
    export default {
        methods: {
            onChange(e) {
                if (! e.target.files.length) return;

                let file = e.target.files[0];

                let reader = new FileReader();

                reader.readAsDataURL(file);

                reader.onload = e => {
                    let src = e.target.result;

                    this.$emit('loaded', { src, file });
                };
            }
        }
    }
</script>

<style>
    #file-button {
        overflow:hidden;
        position:relative;
    }

    #image {
        z-index: 999;
        line-height: 0;
        font-size: 50px;
        position: absolute;
        top: -2px;
        left: -700px;
        opacity: 0;
        filter: alpha(opacity = 0);
        -ms-filter: "alpha(opacity=0)";
        cursor: pointer;
        _cursor: hand;
        margin: 0;
        padding:0;
    }
</style>