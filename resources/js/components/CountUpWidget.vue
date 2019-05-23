<template>
  <div class="CountUp">
    <CountUp
      :endVal="endval"
      :options="options"
      @ready="onReady"
    />
  </div>
</template>
 
<script>
    import CountUp from 'vue-countup-v2';

    export default {
        components: {
            CountUp
        },
        props : [ 'endval' ],
        data : function() {
            return {
                options: {
                    useEasing: true,
                    useGrouping: true,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '+'
                }
            };
        },
        methods: {
            onReady: function(instance, CountUp) {
                const that = this;
                instance.update(that.endval);
            }
        }
    };
</script>
 
<style scoped>
  .CountUp {
    font-size: 5em;
    font-family: "FuturaPT Demi";
    line-height: 2em;
    margin: 0;
    color: #fff;
  }
</style>