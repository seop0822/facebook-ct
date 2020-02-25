<template>
    <div class="bg-white rounded shadow w-2/3 mt-6 overflow-hidden">
        <div class="flex flex-col p-4">
            <div class="flex items-center">
                <div class="w-8">
                    <img
                        src="data:image/jpeg;base64,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"
                        alt="profile image for user" class="w-8 h-8 object-cover rounded-full">
                </div>
                <div class="ml-6">
                    <div class="text-sm font-bold">{{ post.data.attributes.posted_by.data.attributes.name
                        }}
                    </div>
                    <div class="text-sm text-gray-600">{{ post.data.attributes.posted_at }}</div>
                </div>
            </div>
            <div class="mt-4">
                <p>{{ post.data.attributes.body}}</p>
            </div>
        </div>

        <div class="w-full" v-if="post.data.attributes.image">
            <img :src="post.data.attributes.image" alt="post image"
                 class="w-full">
        </div>

        <div class="px-4 pt-2 flex justify-between text-gray-700 text-sm">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5">
                    <path
                        d="M20.8 15.6c.4-.5.6-1.1.6-1.7 0-.6-.3-1.1-.5-1.4.3-.7.4-1.7-.5-2.6-.7-.6-1.8-.9-3.4-.8-1.1.1-2 .3-2.1.3-.2 0-.4.1-.7.1 0-.3 0-.9.5-2.4.6-1.8.6-3.1-.1-4.1-.7-1-1.8-1-2.1-1-.3 0-.6.1-.8.4-.5.5-.4 1.5-.4 2-.4 1.5-2 5.1-3.3 6.1l-.1.1c-.4.4-.6.8-.8 1.2-.2-.1-.5-.2-.8-.2H3.7c-1 0-1.7.8-1.7 1.7v6.8c0 1 .8 1.7 1.7 1.7h2.5c.4 0 .7-.1 1-.3l1 .1c.2 0 2.8.4 5.6.3.5 0 1 .1 1.4.1.7 0 1.4-.1 1.9-.2 1.3-.3 2.2-.8 2.6-1.6.3-.6.3-1.2.3-1.6.8-.8 1-1.6.9-2.2.1-.3 0-.6-.1-.8zM3.7 20.7c-.3 0-.6-.3-.6-.6v-6.8c0-.3.3-.6.6-.6h2.5c.3 0 .6.3.6.6v6.8c0 .3-.3.6-.6.6H3.7zm16.1-5.6c-.2.2-.2.5-.1.7 0 0 .2.3.2.7 0 .5-.2 1-.8 1.4-.2.2-.3.4-.2.6 0 0 .2.6-.1 1.1-.3.5-.9.9-1.8 1.1-.8.2-1.8.2-3 .1h-.1c-2.7.1-5.4-.3-5.4-.3H8v-7.2c0-.2 0-.4-.1-.5.1-.3.3-.9.8-1.4 1.9-1.5 3.7-6.5 3.8-6.7v-.3c-.1-.5 0-1 .1-1.2.2 0 .8.1 1.2.6.4.6.4 1.6-.1 3-.7 2.1-.7 3.2-.2 3.7.3.2.6.3.9.2.3-.1.5-.1.7-.1h.1c1.3-.3 3.6-.5 4.4.3.7.6.2 1.4.1 1.5-.2.2-.1.5.1.7 0 0 .4.4.5 1 0 .3-.2.6-.5 1z"/>
                </svg>
                <p>{{ post.data.attributes.likes.like_count }} Likes</p>
            </div>

            <div>
                <p>123 Comments</p>
            </div>
        </div>

        <div class="flex justify-between border-1 border-gray-400 m-4">
            <button class="flex justify-center py-2 rounded-lg text-sm  w-full focus:outline-none"
                    :class="[post.data.attributes.likes.user_likes_post ? 'bg-blue-600 text-white' : '']"
                    @click="$store.dispatch('likePost', {postId: post.data.post_id, postKey: $vnode.key})">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5">
                    <path
                        d="M20.8 15.6c.4-.5.6-1.1.6-1.7 0-.6-.3-1.1-.5-1.4.3-.7.4-1.7-.5-2.6-.7-.6-1.8-.9-3.4-.8-1.1.1-2 .3-2.1.3-.2 0-.4.1-.7.1 0-.3 0-.9.5-2.4.6-1.8.6-3.1-.1-4.1-.7-1-1.8-1-2.1-1-.3 0-.6.1-.8.4-.5.5-.4 1.5-.4 2-.4 1.5-2 5.1-3.3 6.1l-.1.1c-.4.4-.6.8-.8 1.2-.2-.1-.5-.2-.8-.2H3.7c-1 0-1.7.8-1.7 1.7v6.8c0 1 .8 1.7 1.7 1.7h2.5c.4 0 .7-.1 1-.3l1 .1c.2 0 2.8.4 5.6.3.5 0 1 .1 1.4.1.7 0 1.4-.1 1.9-.2 1.3-.3 2.2-.8 2.6-1.6.3-.6.3-1.2.3-1.6.8-.8 1-1.6.9-2.2.1-.3 0-.6-.1-.8zM3.7 20.7c-.3 0-.6-.3-.6-.6v-6.8c0-.3.3-.6.6-.6h2.5c.3 0 .6.3.6.6v6.8c0 .3-.3.6-.6.6H3.7zm16.1-5.6c-.2.2-.2.5-.1.7 0 0 .2.3.2.7 0 .5-.2 1-.8 1.4-.2.2-.3.4-.2.6 0 0 .2.6-.1 1.1-.3.5-.9.9-1.8 1.1-.8.2-1.8.2-3 .1h-.1c-2.7.1-5.4-.3-5.4-.3H8v-7.2c0-.2 0-.4-.1-.5.1-.3.3-.9.8-1.4 1.9-1.5 3.7-6.5 3.8-6.7v-.3c-.1-.5 0-1 .1-1.2.2 0 .8.1 1.2.6.4.6.4 1.6-.1 3-.7 2.1-.7 3.2-.2 3.7.3.2.6.3.9.2.3-.1.5-.1.7-.1h.1c1.3-.3 3.6-.5 4.4.3.7.6.2 1.4.1 1.5-.2.2-.1.5.1.7 0 0 .4.4.5 1 0 .3-.2.6-.5 1z"/>
                </svg>
                <p class="ml-2">Like</p>
            </button>
            <button class="flex justify-center py-2 rounded-lg text-sm text-gray-700 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5">
                    <path
                        d="M20.3 2H3.7C2 2 .6 3.4.6 5.2v10.1c0 1.7 1.4 3.1 3.1 3.1V23l6.6-4.6h9.9c1.7 0 3.1-1.4 3.1-3.1V5.2c.1-1.8-1.3-3.2-3-3.2zm1.8 13.3c0 1-.8 1.8-1.8 1.8H9.9L5 20.4V17H3.7c-1 0-1.8-.8-1.8-1.8v-10c0-1 .8-1.8 1.8-1.8h16.5c1 0 1.8.8 1.8 1.8v10.1zM6.7 6.7h10.6V8H6.7V6.7zm0 2.9h10.6v1.3H6.7V9.6zm0 2.8h10.6v1.3H6.7v-1.3z"/>
                </svg>
                <p class="ml-2">Comment</p>
            </button>
        </div>

    </div>
</template>

<script>
    export default {
        name: "Post",

        props: [
            'post',
        ]
    }
</script>

<style scoped>

</style>
