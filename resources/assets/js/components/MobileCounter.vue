<template>
    <div class="level is-mobile has-text-centered">
        <div class="level-item">
            <p>
                <countTo :startVal="1"
                         :endVal="cases"
                         :duration='6000'></countTo>
                <br/> zaken aangemeld
            </p>
        </div>
        <div class="level-item">
            <p>
                <countTo :startVal="1"
                         :endVal="success"
                         :duration='6000'></countTo>%
                <br /> succes
            </p>
        </div>
        <div class="level-item">
            <p>
                €
                <countTo :startVal="1"
                         :endVal="averageClaim"
                         :duration='6000'></countTo>,-
                <br /> gemiddelde schadeclaim
            </p>
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
