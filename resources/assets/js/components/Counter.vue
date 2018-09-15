<template>
    <div class="level">
        <div class="level-item">
            <countTo :startVal="1"
                     :endVal="cases"
                     :duration='3000'></countTo>  zaken aangemeld
        </div>
        <div class="level-item">
            <countTo :startVal="1"
                     :endVal="success"
                     :duration='3000'></countTo>% succes
        </div>
        <div class="level-item">
            €<countTo :startVal="1"
                     :endVal="averageClaim"
                     :duration='3000'></countTo>,- gemiddelde schadeclaim
        </div>
    </div>
</template>

<script>
  import countTo from "vue-count-to";
  export default {
    components: { countTo },
    data() {
      return {
        casesNr: 1,
        successNr: 1,
        averageClaimNr: 1
      };
    },
    props: {
      cases: {
        default: 100
      },
      success: {
        default: 98
      },
      averageClaim: {
        default: 120
      }
    }
  };
</script>
<style>
</style>
