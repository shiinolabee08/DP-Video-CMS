<template>
    <div class="chat-form">
        <transition name="fade" :duration="{ enter: 400, leave: 300 }">
            <div class="chat-user-details" v-if="!isReadyConvo">
                <label>Give <strong>your details first</strong> below so that we will know you.</label>
                <form v-on:submit="startConvo">
                    <div class="form-group">
                        <input type="text" required placeholder="Enter your name.." class="form-control" v-model="name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" required placeholder="Enter your email.." class="form-control" name="email" v-model="email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control">Submit</button>
                    </div>
                </form>
            </div>
        </transition>
        <transition name="fade" :duration="{ enter: 500, leave: 300 }">
            <div class="input-group" v-if="isReadyConvo">
                <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" id="btn-chat" @click="sendMessage">
                        Send
                    </button>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        props: ['user', 'token' ],

        data() {
            return {
                newMessage: '',
                name : '',
                email : '',
                isReadyConvo : false,
            }
        },

        methods: {
            startConvo(e){
                this.isReadyConvo = true;

                e.preventDefault();
            },
            sendMessage() {

                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage,
                    name : this.name,
                    email : this.email
                });

                this.newMessage = ''
            }
        }    
    }
</script>