<template>
    <div class="container">
    <table class="table">
        <thead style="background-color: blue;">
            <tr>
                <th><ul style="list-style-type: none;">
                <li style="color: white;">{{ markets[0].company_name}}</li>
                <li style="color: white;">{{ markets[0].stock_type}}</li>
                </ul></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="market in markets"  style="color: blue;">
                <td><a :href="'/markets/' + market.id">{{ market.market}}</a></td>
                <td style="color: blue;">{{ market.price}}</td>
            </tr>
        </tbody>
    </table>
    </div>
</template>

<script>
    export default {

        data() {
            return {
            markets: [],
            };
        },
        created() {
            this.fetchMarket();
            this.getTimeStr();
        },
        methods: {
             fetchMarket(){
                axios.get('/markets').then(response => {this.markets = response.data.markets });
             },

             getTimeStr(item) {
                 var dt = new Date(item);
                 var t = dt.toLocaleTimeString();
                 return t;
             }
        }
    }
</script>

