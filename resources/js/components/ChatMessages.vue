<template>
    <div>
        <ul class="chat-list" v-if="messages.length > 0">
            <li class="left clearfix" v-for="message in messages">
                <div class="chat-body clearfix">
                    <div class="header">
                        <strong class="primary-font">
                            {{ message.name }}
                        </strong>
                        <small><a v-bind:href="'mailto:' + message.email">{{ message.email }}</a> {{ message.created_at | moment("from", "now", true) }}</small>
                    </div>
                    <p>
                        {{ message.message }}
                    </p>
                </div>
            </li>
        </ul>
        <p class="message-info" v-if="messages.length == 0">Conversations starts here.</p>
    </div>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>