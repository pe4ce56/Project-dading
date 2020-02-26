const BASE_URL = "http://" + location.host;
const modalDetails = {
    props: ["data", "loading"],
    template: `<div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="modalDetailsLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div v-if="loading">
                        <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div v-else>
                        <div class="name text-center">
                            {{data.name}}
                        </div>
                        <div class="modal-image mt-2 d-flex justify-content-center">
                            <img v-bind:src="'${BASE_URL}/storage/product_image/' + data.image" style="width: 300px" alt="...">
                        </div>
                        <div class="details">
                            <ul>
                                <li v-for="d in data.details">{{d.information}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>`
};

new Vue({
    el: "#app",
    components: {
        "modal-details": modalDetails
    },
    data: {
        data: "",
        loading: true,
        url: null
    },
    methods: {
        details: async function(id) {
            this.loading = true;
            await axios
                .get(BASE_URL + "/products/getProduct/" + id)
                .then(response => {
                    this.data = response.data[0];
                })
                .catch(response => (this.data = response))
                .finally(() => (this.loading = false));
        },
        uploadImg: function(e) {
            const file = e.target.files[0];
            this.url = URL.createObjectURL(file);
        }
    }
});
