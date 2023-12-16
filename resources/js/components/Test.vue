<template>
    <div v-html="renderBtn()" @click="postFollowBtn">
    </div>
</template>

<script>
export default {
    props: ['stt'],

    mounted() {
        console.log('Component mounted.')
    },

    methods: {
        renderBtn() {
            if (this.stt == '') {
                return;
            }
            else {
                return `<button class=" btn btn-primary">Follow</button>`;
            }
        },

        postFollowBtn() {
            console.log('clicked!');
        }
    },
}

</script>