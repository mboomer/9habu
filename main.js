//<!-- **************************************************************************** -->
//<!-- Define the VUE instance and the VUE components                                     -->
//<!-- **************************************************************************** -->

//<!-- **************************************************************************** -->
//<!-- this is the missing-person VUE componment that we bind to the VUE Instance                                     -->
//<!-- **************************************************************************** -->
         
Vue.component("missing-person", {
    props: {
        passenger: {
            type: Object,
            required: true
        }
    },
    template: `
            <li class="missing-person">
                <h3>{{ passenger.personsName }}</h3>
                <p><img :src="passenger.personsImage" /></p>
                <p>{{ passenger.personsDesc }}</p>
            </li>
    `
})

//<!-- ************************************************************************************************ -->
//<!-- vue instance attached to the <UL> html element - contains the data for each person               -->
//<!-- ************************************************************************************************ -->

var missingPassengers = new Vue({
    el: "#missing-passengers",
    data: {
        passengers: [
            {   personsName:  "Desmond Boomer", 
                personsImage: "img/desmondboomer-120p.jpg", 
                personsDesc:  "Desmond was a 38 year old Belfast born, engineer working in the Libyan oil fields" 
            },
            {   personsName:  "Michael Williams", 
                personsImage: "img/michaelwilliams-120p.jpg", 
                personsDesc:  "Michael was a 49 year old English born engineer & manager of rock band 'The Characters'" 
            },
            {   personsName:  "Matthew Aquilina", 
                personsImage: "img/matthewaquilina-120p.jpg", 
                personsDesc:  "Matthew was a 22 year old Maltese national returning to Malta" 
            },
            {   personsName:  "Tadeus Gorny", 
                personsImage: "img/tadeusgorny-120p.jpg", 
                personsDesc:  "Tadeus was a 48 year Polish national working in the Libyan oil fields" 
            },
            {   personsName:  "Philip Farrugia", 
                personsImage: "img/philipfarrugia-120p.jpg", 
                personsDesc:  "Philp was a 43 year old Maltese national returning to Malta" 
            },
            {   personsName:  "Carmel Bartolo", 
                personsImage: "img/carmelbartolo-120p.jpg", 
                personsDesc:  "Carmel was a 47 year Maltese national and the pilot of flight 9H-ABU" 
            }
        ]
    }
})
