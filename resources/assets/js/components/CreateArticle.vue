<template>
    <div class="container">
        <input class="form-control" type="text" v-model="article.title" placeholder="# Title">
        <br>

        <div class="row">
            <div class="col-md-6">
                <textarea class="form-control" v-model="article.body" rows="20" placeholder="# Content"></textarea>
            </div>

            <div class="col-md-6">
                <div v-html="article.body | marked"></div>
            </div>

            <div class="col-md-12">
                <hr>
                <button class="btn btn-default" @click.prevent="createArticle">Create Article</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'user'
        ],

        data() {
            return {
                article: {
                    title: '',
                    body: '# Content'
                }
            }
        },

        filters: {
            marked: marked
        },

        ready() {
            this.getArticles();
        },

        methods: {
            createArticle() {

            }
        }
    }
</script>

<style>
    code {
        color: #f66;
    }
</style>