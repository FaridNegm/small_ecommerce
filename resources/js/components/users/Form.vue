<template>
    <div>
       <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" v-if="this.lists.name =='' " >Add</h5>
                        <h5 class="modal-title" id="exampleModalLabel" v-else >Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @click.prevent="" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:20px;">
                        
                            <div class="form-group row">
                                <label class="control-label col-sm-2" style="position: relative;top: 10px;" for="name">Name</label>
                                <div class=" col-sm-10">
                                    <input id="name" type="text" v-model="name" class="form-control"  placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2" style="position: relative;top: 10px;" for="email">Email</label>
                                <div class=" col-sm-10">
                                    <input id="email" type="email" v-model="email" class="form-control"  placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2" style="position: relative;top: 10px;" for="password">Password</label>
                                <div class=" col-sm-10">
                                    <input id="password" type="password" v-model="password" class="form-control"  placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2" style="position: relative;top: 10px;" for="phone">Phone</label>
                                <div class=" col-sm-10">
                                    <input id="phone" type="number" v-model="phone" class="form-control"  placeholder="Phone">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label class="control-label col-sm-2" style="position: relative;top: 10px;" for="image">Image</label>
                                <div class=" col-sm-10">
                                    <input id="image" type="file" v-model="image" class="form-control"  placeholder="Image">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label class="control-label col-sm-2" style="position: relative;top: 10px;" for="gender">gender</label>
                                <div class=" col-sm-10">
                                    <select class="form-control" v-model="gender"  id="gender">
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2" style="position: relative;top: 10px;" for="role">Role</label>
                                <div class=" col-sm-10" id="role">
                                    <select class="form-control" v-model="role" id="role">
                                        <option value="1">Admin</option>
                                        <option value="2">Supervisor</option>
                                        <option value="3">Writer</option>
                                        <option value="4">Default User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-2" style="position: relative;top: 10px;" for="status">Status</label>
                                <div class=" col-sm-10">
                                    <select class="form-control"  id="status" v-model="status">
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>
                                </div>
                            </div>

                            <br><br>
                            <div class="form-group row text-center float-right">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </form>
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
        data(){
            return {
                lists: {
                    name: "",
                    email: "",
                    password: "",
                    // image: "",
                    phone: "",
                    gender: "",
                    role: "",
                    status: "",
                }
            }
        }
    }
</script>

