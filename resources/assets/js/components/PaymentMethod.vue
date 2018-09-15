<template>
    <div>
        <b-field>
            <b-radio v-model="method"
                     native-value="creditcard">
                <div class="level">
                    Creditcard
                    <div class="level-item">
                        <input class="input"
                               v-if="method == 'creditcard'"
                               placeholder="0000-0000-0000-0000">
                    </div>
                    <div class="level-item">
                        <input class="input"
                               v-if="method == 'creditcard'"
                               placeholder="datum">
                    </div>
                </div>
            </b-radio>
        </b-field>
        <b-field>
            <b-radio v-model="method"
                     native-value="ideal">
                <div class="level">
                    iDeal
                    <div class="level-item">
                        <div class="control">
                            <select class="select"
                                    v-if="method == 'ideal'"
                                    placeholder="0000-0000-0000-0000">
                                <option>ING</option>
                                <option>Rabo</option>
                                <option>ABN-AMRO</option>
                            </select>
                        </div>
                    </div>
                </div>
            </b-radio>
        </b-field>
        <b-field>
            <b-radio v-model="method"
                     native-value="bitcoin">
                Bitcoin
            </b-radio>
        </b-field>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        method: ""
      };
    },
    props: {
      value: {
        default: null
      },
      defaultDate: {
        type: String
      },
      minDate: {
        type: String
      },
      maxDate: {
        type: String
      },
      name: {
        type: String
      },
      placeholder: {
        type: String,
        default: "dd-mm-YYYY"
      }
    },
    methods: {
      toDate(date) {
        return Date(Date.format(date));
      }
    }
  };
</script>
<style>
</style>
