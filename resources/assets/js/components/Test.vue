<template>
    <div class="container-small">
        <transition name="slide-fade">
            <div v-if="this.current == 'q1'">
                <div class="title">Ben je als verdachte vastgehouden door de politie?</div>
                <div class="field">
                    <b-radio v-model="q1"
                             native-value="y1">
                        ja, ik ben aangehouden
                    </b-radio>
                </div>
                <div class="field">
                    <b-radio v-model="q1"
                             native-value="y2">
                        ja, ik ben verhoord
                    </b-radio>
                </div>
                <div class="field">
                    <b-radio v-model="q1"
                             native-value="n">
                        nee
                    </b-radio>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-primary is-outlined is-pulled-right"
                                @click="next('q1')">Volgende</button>
                    </div>
                </div>
            </div>
            <div v-if="this.current == 'q1n'">
                Sorry, maar wat doe je hier?
                <div class="field">
                    <div class="control">
                        <button class="button is-link"
                                @click="prev()">Vorige</button>
                    </div>
                </div>
            </div>
            <div v-if="this.current == 'q2'">
                <div class="title">Is de zaak definitief geseponeerd, of word je volgens de politie en het OM niet meer
                    als verdachte gezien? </div>
                <div class="is-italic">als de zaak definitief is geseponeerd of je niet meer als verdachte wordt gezien, dan
                    heb je hier een brief voor ontvangen
                </div>
                <div class="field">
                    <b-radio v-model="q2"
                             native-value="y1">
                        ja, ik heb een sepo-brief ontvangen
                    </b-radio>
                </div>
                <div class="field">
                    <b-radio v-model="q2"
                             native-value="y2">
                        ja, ik ben niet meer verdachte
                    </b-radio>
                </div>
                <div class="field">
                    <b-radio v-model="q2"
                             native-value="n">
                        nee
                    </b-radio>
                </div>
                <button class="button is-link"
                        @click="prev()">Vorige</button>
                <button class="button is-primary is-outlined is-pulled-right"
                        @click="next('q2')">Volgende</button>
            </div>
            <div v-if="this.current == 'q3'">
                <div class="title">Ben je voor de rechter verschenen en ben je vrijgesproken? </div>
                <div class="field">
                    <b-radio v-model="q3"
                             native-value="y">
                        ja
                    </b-radio>
                </div>
                <div class="field">
                    <b-radio v-model="q3"
                             native-value="n">
                        nee
                    </b-radio>
                </div>
                <button class="button is-link"
                        @click="prev()">Vorige</button>
                <button class="button is-primary is-outlined is-pulled-right"
                        @click="next('q3')">Volgende</button>
            </div>
            <div v-if="this.current == 'q4'">
                <div class="title">Ben je ontslagen van rechtsvervolging?</div>
                <div class="field">
                    <b-radio v-model="q4"
                             native-value="y">
                        ja
                    </b-radio>
                </div>
                <div class="field">
                    <b-radio v-model="q4"
                             native-value="n">
                        nee
                    </b-radio>
                </div>
                <button class="button is-link"
                        @click="prev()">Vorige</button>
                <button class="button is-primary is-outlined is-pulled-right"
                        @click="next('q4')">Volgende</button>
            </div>
            <div v-if="this.current == 'q4y'">
                Sorry, maar probeer iemand anders je te laten helpen
                <div class="field">
                    <div class="control">
                        <button class="button is-link"
                                @click="prev()">Vorige</button>
                    </div>
                </div>
            </div>
            <div v-if="this.current == 'q4n'">
                Sorry, maar no moneyss
                <div class="field">
                    <div class="control">
                        <button class="button is-link"
                                @click="prev()">Vorige</button>
                    </div>
                </div>
            </div>
            <div v-if="this.current == 'q5'">
                <div class="title">Is deze uitspraak minder dan drie maanden geleden gebeurd? </div>
                <div class="field">
                    <b-radio v-model="q5"
                             native-value="y">
                        ja
                    </b-radio>
                </div>
                <div class="field">
                    <b-radio v-model="q5"
                             native-value="n">
                        nee
                    </b-radio>
                </div>
                <button class="button is-link"
                        @click="prev()">Vorige</button>
                <button class="button is-primary is-outlined is-pulled-right"
                        @click="next('q5')">Volgende</button>
            </div>
            <div v-if="this.current == 'q5n'">
                Sorry, maar de uitspraak had minder dan drie maanden geleden moeten zijn.
                <div class="field">
                    <div class="control">
                        <button class="button is-link"
                                @click="prev()">Vorige</button>
                    </div>
                </div>
            </div>
            <div v-if="this.current == 'q6'">
                <div class="title">Heb je de brief hierover minder dan drie maanden geleden ontvangen?</div>
                <div class="is-italic"> hier staat de datum. deze moet later zijn dan xx-xx-xxxx </div>
                <div class="field">
                    <b-radio v-model="q6"
                             native-value="y">
                        ja
                    </b-radio>
                </div>
                <div class="field">
                    <b-radio v-model="q6"
                             native-value="n">
                        nee
                    </b-radio>
                </div>
                <button class="button is-link"
                        @click="prev()">Vorige</button>
                <button class="button is-primary is-outlined is-pulled-right"
                        @click="next('q6')">Volgende</button>
            </div>
            <div v-if="this.current == 'q6n'">
                Sorry, maar je had de brief minder dan drie maanden geleden moeten ontvangen.
                <div class="field">
                    <div class="control">
                        <button class="button is-link"
                                @click="prev()">Vorige</button>
                    </div>
                </div>
            </div>
            <div v-if="this.current == 'q7'">
                <div class="title"> Wanneer ben je opgepakt, en wanneer ben je vrijgelaten?</div>
                <div class="is-italic"> van 12 tot 9 telt niet, vanaf 6 uur krijgen ze schadevergoeding</div>
                <b-field label="Van">
                    <b-field>
                        <b-datepicker v-model="q7vandate"></b-datepicker>
                        <b-timepicker v-model="q7vantime"></b-timepicker>
                    </b-field>
                </b-field>
                <b-field label="Tot">
                    <b-field>
                        <b-datepicker v-model="q7totdate"></b-datepicker>
                        <b-timepicker v-model="q7tottime"></b-timepicker>
                    </b-field>
                </b-field>
                <button class="button is-link"
                        @click="prev()">Vorige</button>
                <button class="button is-primary is-outlined is-pulled-right"
                        @click="next('q7')">Volgende</button>
            </div>
            <div v-if="this.current == 'q7y'"
                 class="has-text-centered">
                <div class="title">
                    Moneyssssssss$$$$$$$$$$$$$$$$$$$$$
                </div>
                <div class="title has-text-centered">
                    €120,- !!!
                </div>
                <p>
                    Bekijk hier hoe wij u kunnen helpen om dit terug te krijgen.
                </p>
                <a href="/overzicht"
                   class="button">Klik hier!</a>
            </div>
        </transition>
    </div>
</template>

<script>
    import countTo from "vue-count-to";
    import Vue from "vue";
    export default {
      components: {
        countTo
      },
      data() {
        return {
          q1: "",
          q2: "",
          q3: "",
          q4: "",
          q5: "",
          q6: "",
          q7vandate: null,
          q7vantime: new Date(),
          q7totdate: null,
          q7tottime: new Date(),
          pages: ["q7"],
          options: {
            format: "DD/MM/YYYY mm:hh"
          }
        };
      },
      computed: {
        current() {
          return this.pages[this.pages.length - 1];
        }
      },
      methods: {
        prev(q) {
          this.pages.pop();
        },
        next(q) {
          switch (q) {
            case "q1":
              switch (this.q1) {
                case "y1":
                  Vue.set(this.pages, this.pages.length, "q2");
                  break;
                case "y2":
                  Vue.set(this.pages, this.pages.length, "q2");
                  break;
                case "n":
                  Vue.set(this.pages, this.pages.length, "q1n");
                  break;
              }
            case "q2":
              switch (this.q2) {
                case "y1":
                  Vue.set(this.pages, this.pages.length, "q6");
                  break;
                case "y2":
                  Vue.set(this.pages, this.pages.length, "q6");
                  break;
                case "n":
                  Vue.set(this.pages, this.pages.length, "q3");
                  break;
              }
            case "q3":
              switch (this.q3) {
                case "y":
                  Vue.set(this.pages, this.pages.length, "q5");
                  break;
                case "n":
                  Vue.set(this.pages, this.pages.length, "q4");
                  break;
              }
            case "q4":
              switch (this.q4) {
                case "y":
                  Vue.set(this.pages, this.pages.length, "q4y");
                  break;
                case "n":
                  Vue.set(this.pages, this.pages.length, "q4n");
                  break;
              }
            case "q5":
              switch (this.q5) {
                case "y":
                  Vue.set(this.pages, this.pages.length, "q7");
                  break;
                case "n":
                  Vue.set(this.pages, this.pages.length, "q5n");
                  break;
              }
            case "q6":
              switch (this.q6) {
                case "y":
                  Vue.set(this.pages, this.pages.length, "q7");
                  break;
                case "n":
                  Vue.set(this.pages, this.pages.length, "q6n");
                  break;
              }
            case "q7":
              Vue.set(this.pages, this.pages.length, "q7y");
              switch (this.q7) {
                case "y":
                  Vue.set(this.pages, this.pages.length, "q7y");
                  break;
                case "n":
                  Vue.set(this.pages, this.pages.length, "q7n");
                  break;
              }
          }
        }
      }
    };
</script>
