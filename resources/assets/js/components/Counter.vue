<template>
    <div class="hexGrid">
        <div class="hexagon hex1">
            <span class="counter1">
                <countTo :startVal="1"
                         :endVal="cases"
                         :duration='6000'></countTo> zaken aangemeld
            </span>
        </div>
        <div class="hexagon hex2">
            <span class="counter2">
                <countTo :startVal="1"
                         :endVal="success"
                         :duration='6000'></countTo>% succes
            </span>
        </div>
        <div class="hexagon hex3">
            <span class="counter3">
                €
                <countTo :startVal="1"
                         :endVal="averageClaim"
                         :duration='6000'></countTo>,- gemiddelde schadeclaim
            </span>
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
