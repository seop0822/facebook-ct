<template>
    <img
        :src="userImage.data.attributes.path"
        :alt="alt"
        ref="userImage"
        :class="classes">
</template>

<script>
    import Dropzone from 'dropzone';
    import { mapGetters } from 'vuex';

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
            }
        },

        mounted() {
            //$route.param... 는 string 형을 반환 그래서 === 쓰려면 int 인 id를 string으로 바꿔 준다
            if(this.authUser.data.user_id.toString() === this.$route.params.userId){
                //dropzone 첫번째 인자 이미지의 레퍼런스 2번쨰 setting list
                this.dropzone = new Dropzone(this.$refs.userImage, this.settings);
            }
        },

        computed: {
            ...mapGetters({
               authUser: 'authUser',
            }),

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
                        // this.uploadedImage = res;
                        this.$store.dispatch('fetchAuthUser');
                        this.$store.dispatch('fetchUser', this.$route.params.userId);
                        this.$store.dispatch('fetchUserPosts', this.$route.params.userId)
                    }
                };
            }
        }
    }
</script>

<style scoped>

</style>
