<template>
    <div class="container">
        <form action="/markets" @submit.prevent="onSubmit" method="POST">
            <div class="form-group">
                <label>Market</label>
                <input type="text" id="market" v-model="market" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" id ="company_name" v-model="company_name" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Stock Type</label>
                <input type="text" id="stock_type" v-model="stock_type" class="form-control"required />
            </div>
            <div class="form-group">
               <label>Price</label>
               <input type="text" id="price" v-model="price" class="form-control" required />
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                market: '',
                company_name: '',
                stock_type: '',
                price: '',
            };
        },

        methods: {
                onSubmit(){
                   axios.post('/markets', this.$data).then(window.location.href="/");
                },

        }
    }
</script>
