<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 100px;margin-left: 400px" >
                <div class="card">
                    <div class="card-header">User Information</div>

                    <div class="card-body">
<!--                        action="http://localhost:8000/store" method="POST" @submit="formSubmit"-->
                        <form action="/store" method="post" @submit="formSubmit">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" v-model="name"/>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" v-model="email" />


                            </div>

                            <div class="form-group">
                                <label for="phone">Mobile-number</label>
                                <input  type="number" class="form-control" name="phone" id="phone"  v-model="phone"/>

                            </div>


                                <button type="submit" class="btn btn-primary" >
                                    Add User
                                </button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const axios = require('axios');
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                name: '',
                email: '',
                phone: '',
                output: '',
            };
        },
        methods: {
            formSubmit(e) {
                e.preventDefault();

                let currentObj = this;
               axios.post('/store', {
                     name: this.name,
                     email: this.email,
                     phone: this.phone,

                 }).then(response => {
                   this.output ='';
                   this.name ='';
                   this.email ='';
                   this.phone ='';

                    })
                    // .catch(function (error) {
                    //     currentObj.output = error;
                    // });
            }

        }
    }
</script>
