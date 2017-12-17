<template>
    <div class="container">
    <table class="table">
        <thead style="background-color: orange;">
            <tr>
                <th><ul style="list-style-type: none;">
                <li style="color: white;">{{ metadeoCommon[0].company_name}}</li>
                <li style="color: white;">{{ metadeoCommon[0].stock_type}}</li>
                </ul></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="market in metadeoCommon"  style="color: blue;">
                <td style="color: orange;"><a :href="'/markets/' + market.id">{{ market.market}}</a></td>
                <td style="color: orange;">{{ market.price}}</td>
            </tr>
        </tbody>
    </table>
    </div>
</template>

<script>
    export default {

        data() {
            return {
            metadeoCommon: [],
            };
        },
        created() {
            this.fetchMarket();
            this.getTimeStr();
        },
        methods: {
             fetchMarket(){
                axios.get('/markets').then(response => {this.metadeoCommon = response.data.metadeoCommon });
             },

             getTimeStr(item) {
                 var dt = new Date(item);
                 var t = dt.toLocaleTimeString();
                 return t;
             }
        }
    }
</script>
