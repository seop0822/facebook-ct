<template>
    <img
        :src="imageObject.data.attributes.path"
        :alt="alt"
        ref="userImage"
        :class="classes">
</template>

<script>
    import Dropzone from 'dropzone';

    export default {
        name: "UploadableImage",

        props:[
            'imageWidth',
            'imageHeight',
            'location',
            'userImage',
            'classes',
            'alt',
        ],

        data: () => {
            return {
                dropzone: null,
                uploadedImage: null,
            }
        },

        mounted() {
            //dropzone 첫번째 인자 이미지의 레퍼런스 2번쨰 setting list
            this.dropzone = new Dropzone(this.$refs.userImage, this.settings);
        },

        computed: {
            settings() {
                return {
                    paramName: 'image',
                    url: '/api/user-images',
                    acceptedFiles: 'image/*',   //any imagefile jpg, png etc
                    params: {
                        'width': this.imageWidth,
                        'height': this.imageHeight,
                        'location': this.location,
                    },
                    headers:{
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content,
                    },
                    success: (e, res) => {
                        this.uploadedImage = res;
                    }
                };
            },

            imageObject(){
                return this.uploadedImage || this.userImage;
            }
        }
    }
</script>

<style scoped>

</style>
