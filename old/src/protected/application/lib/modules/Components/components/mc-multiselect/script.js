app.component('mc-multiselect', {
    template: $TEMPLATES['mc-multiselect'],
    emits: ['open', 'close'],

    setup() { 
        // os textos estão localizados no arquivo texts.php deste componente 
        const text = Utils.getTexts('mc-multiselect')
        return { text }
    },

    created() {
        this.model.filter = '';
    },

    props: {
        editable: {
            type: Boolean,
            default: false,
        },

        items: {
            type: [Array, Object],
            required: true,
        },

        model: {
            type: Array,
            required: true,
        },

        classes: {
            type: String,
            required: false,
        },

        closeOnSelect: {
            type: Boolean,
            default: true
        },

        hideFilter: {
            type: Boolean,
            default: false
        },

        hideButton: {
            type: Boolean,
            default: false
        },

        openside: {
            type: String,
            default: 'down-right'
        },
    },

    data() {
        let dataItems = {};        
        if (Array.isArray(this.items)) {
            for (let item of this.items) {
                dataItems[item] = item;
            }
        } else {
            dataItems = Object.assign({}, this.items);
        }
        return { dataItems };
    },

    computed: {
        filteredItems() {
            const result = {};
            for (let value in this.dataItems) {
                const label = this.dataItems[value];
                const _filter = this.model.filter.toLocaleUpperCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
                const _item = label.toLocaleUpperCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");

                if(_item.indexOf(_filter) >= 0) {
                    result[value] = label;
                }
            }
            return result;
        }        
    },

    methods: {
        highlightedItem(item) {
            const _filter = this.model.filter.toLocaleUpperCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            const _item = item.toLocaleUpperCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            const indexOf = _item.indexOf(_filter);
            if(indexOf >= 0) {
                const part0 = item.substr(0, indexOf); 
                const part1 = item.substr(indexOf, this.model.filter.length); 
                const part2 = item.substr(indexOf + this.model.filter.length);
                return `${part0}<b><u>${part1}</u></b>${part2}`;
            } else {
                return item;
            }
        },

        remove(key) {
            const indexOf = this.model.indexOf(key);
            this.model.splice(indexOf,1);
        },

        toggleItem(key) {
            if (this.model.indexOf(key) >= 0) {
                this.remove(key);
            } else {
                this.model.push(key);
            }
        },       

        open() {
            this.$emit('open', this);
        },
        
        close() {
            this.$emit('close', this);
            this.model.filter = '';
        }
    }
});