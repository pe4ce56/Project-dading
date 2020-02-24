Vue.component("input-username", {
    data: function() {
        return {
            count: 0
        };
    },
    template: `<input type="text" class="form-control  @error('
    username ') is-invalid @enderror " placeholder="Username" name="username" value="{{ old('
    username ') }}">
    @error('username') <
    div class = "invalid-feedback" > {
        { $message }} < /div>
    @enderror `
});

Vue.component("validation-errors", {
    props: ["errors", "field"],
    template: `
                <div class="invalid-feedback">{{validationError}}</div>
               `,
    computed: {
        validationError() {
            for (const key in this.errors) {
                if (key == this.field) {
                    return this.errors[key][0];
                }
            }
        },
        getField() {
            return this.field;
        }
    }
});

const careers = new Vue({
    el: "#app",
    mixins: [products],
    data: {
        username: "",
        email: "",
        validationErrors: ""
    },
    methods: {
        submitForm() {
            axios
                .post("/recruitment/register", {
                    username: this.username,
                    email: this.email
                })
                .then(response => {
                    console.log("successful");
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        this.validationErrors = error.response.data.errors;
                    }
                });
        }
    }
});
