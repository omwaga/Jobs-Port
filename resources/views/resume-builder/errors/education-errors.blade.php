
      <!-- display the errors for the education fields -->
      <span class="help text-danger" v-if="form.errors.has('education_institution')" v-text="form.errors.get('education_institution')"></span>
      <span class="help text-danger" v-if="form.errors.has('education_qualification')" v-text="form.errors.get('education_qualification')"></span>
      <span class="help text-danger" v-if="form.errors.has('start_date')" v-text="form.errors.get('start_date')"></span>
      <span class="help text-danger" v-if="form.errors.has('grad_date')" v-text="form.errors.get('grad_date')"></span>
      <span class="help text-danger" v-if="form.errors.has('level')" v-text="form.errors.get('level')"></span>
      <span class="help text-danger" v-if="form.errors.has('score')" v-text="form.errors.get('score')"></span>
      <!-- end display the errors for the education fields -->