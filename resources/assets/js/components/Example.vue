<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <h1>{{message}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                message: 'I\'m an example component!'
            }
        }
    }
</script>
