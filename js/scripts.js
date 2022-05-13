new Vue({
    el: '.sample',
    data: {
        name:'',
        checked: false,
        currencyfrom : [
            {name : "Физическое лицо", desc:"Физическое лицо"},
            {name:"Юридическое лицо", desc:"Юридическое лицо"}

        ],
        convertfrom: "Юридическое лицо",
        transport_type :"",
        osago_power : "",
        osago_srok: "",
        kbm : "",
        staj_voditela: "",
        lica_dop: ""

    },
    computed: {
        finalosago() {
            var fin;
            fin = this.kbm * this.staj_voditela * this.osago_srok * this.osago_power * this.transport_type * this.lica_dop;
            fin = fin.toFixed(2);
            return fin;
        }
    },

    methods: {
        addLayer() {
            this.layers.push({
                type: this.defaultLayerType,
                height: this.defaultHeight
            })
        }
    }
});