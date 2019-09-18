var patientRecordApp = new Vue({
  el: '#patientRecordApp',
  data: {
    patients: [],
    formPatient: {
      firstName: "",
      lastName: "",
      dob: "",
      sexAtBirth: ""
    }
  },
  methods: {
    fetchPatients() {
      fetch('dummy.php')
        .then(response => response.json())
        .then(json => { patientRecordApp.patients = json });
    },
    handleCreatePatientRecord() {
      // fetch(url, {method:"post", data:thisFormPatient}
      // This is what should happen when a data store is added to 
      // project-triage. Then, we want to display it:
      this.patients.push(this.formPatient);
      this.formPatient = {
                            firstName: "",
                            lastName: "",
                            dob: "",
                            sexAtBirth: ""
                        };
    }
  },
  created: function () {
    this.fetchPatients();
  }

})
