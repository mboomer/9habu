//<!-- **************************************************************************** -->
//<!-- Define the VUE instances and the VUE components                              -->
//<!-- **************************************************************************** -->

//<!-- **************************************************************************** -->
//<!-- this is the missing-person VUE componment that we bind to the VUE Instance   -->
//<!-- **************************************************************************** -->
         
Vue.component("passenger-details", {
    props: {
        passenger: {
            type: Object,
            required: true
        }
    },
    template: `<li class="missing-person">
                <h3>{{ passenger.personsName }}</h3>
                <p><img :src="passenger.personsImage" /></p>
                <p>{{ passenger.personsDesc }}</p>
            </li>
            `
})
//<!-- ********************************************************************************************* -->
//<!-- this is the latest articles VUE componment that we bind to the latPopMostComOth VUE Instance  -->
//<!-- ********************************************************************************************* -->
Vue.component("latest", {
    props: {
        latestarticle: {
                       type: Object,
                       required: true
                    }
    },
    template: '<li><a :href="latestarticle.latestlocation">{{ latestarticle.latesttitle }}</a></li>',
})
//<!-- ********************************************************************************************* -->
//<!-- this is the most read articles VUE componment that we bind to the latPopMostComOth VUE Instance  -->
//<!-- ********************************************************************************************* -->
Vue.component("most-read", {
    props: {
        mostreadarticle: {
                       type: Object,
                       required: true
                    }
    },
    template: '<li><a :href="mostreadarticle.mostreadlocation">{{ mostreadarticle.mostreadtitle }}</a></li>',
})
//<!-- ********************************************************************************************* -->
//<!-- this is the coming soon articles VUE componment that we bind to the latPopMostComOth VUE Instance  -->
//<!-- ********************************************************************************************* -->
Vue.component("coming-soon", {
    props: {
        comingsoonarticle: {
                       type: Object,
                       required: true
                    }
    },
    template: '<li>{{ comingsoonarticle.comingsoonname }}</li>'
})
//<!-- ********************************************************************************************* -->
//<!-- this is the related sites VUE componment that we bind to the latPopMostComOth VUE Instance  -->
//<!-- ********************************************************************************************* -->
Vue.component("related-sites", {
    props: {
        sitelist: {
                    type: Object,
                    required: true
                  }
    },
    template: '<li><a :href="sitelist.siteurl">{{ sitelist.sitetitle }}</a></li>'
})

//<!-- ************************************************************************************************ -->
//<!-- vue instance attached to the <UL> html element - contains the data for each person               -->
//<!-- ************************************************************************************************ -->

var missingPassengers = new Vue ({
    el: "#missing-passengers",
    data: {
        passengers: [
            {   personsName :  "Desmond Boomer", 
                personsImage: "/img/desmondboomer-120p.jpg", 
                personsDesc :  "Desmond was a 39 year old Belfast born, engineer working in the Libyan oil fields" 
            },
            {   personsName:  "Michael Williams", 
                personsImage: "/img/michaelwilliams-120p.jpg", 
                personsDesc:  "Michael was a 49 year old English born engineer and manager of rock band 'The Characters'" 
            },
            {   personsName:  "Matthew Aquilina", 
                personsImage: "/img/matthewaquilina-120p.jpg", 
                personsDesc:  "Matthew was a 22 year old Maltese national returning to Malta" 
            },
            {   personsName:  "Tadeus Gorny", 
                personsImage: "/img/tadeusgorny-120p.jpg", 
                personsDesc:  "Tadeus was a 48 year Polish national working in the Libyan oil fields" 
            },
            {   personsName:  "Philip Farrugia", 
                personsImage: "/img/philipfarrugia-120p.jpg", 
                personsDesc:  "Philp was a 43 year old Maltese national returning to Malta" 
            },
            {   personsName:  "Carmel Bartolo", 
                personsImage: "/img/carmelbartolo-120p.jpg", 
                personsDesc:  "Carmel was a 47 year Maltese national and the pilot of flight 9H-ABU" 
            }
        ]
    }
})
//<!-- *********************************************************************************************************** -->
//<!-- vue instance attached to the DIV html element "latest-popular-soon" containing the data for each category   -->
//<!-- *********************************************************************************************************** -->

var latMosComRel = new Vue ({
    el: "#latest-popular-soon",
    data: {
        latestArticlesTitle: "Latest Articles",
        latestArticles: [
                            {   latestname     : "cormac-boomer-letter-to-irish-news-14032003.html",
                                latesttitle    : "Letter to Irish News rebuking Irish Government",
                                latestlocation : "/articles/cormac-boomer-letter-to-irish-news-v2-14032003.html"
                            },
                            {   latestname     : "email-from-cecilia-cormac-06122002.html",
                                latesttitle    : "Email from Cecilia to Cormac re: Don Mullan",
                                latestlocation : "/articles/email-from-cecilia-cormac-06122002.html"
                            },
                            {   latestname     : "tv-documentary-first-shown-on-malta-television-26112011.html",
                                latesttitle    : "Updated Video Player for Malta TV Documentary",
                                latestlocation : "/articles/tv-documentary-first-shown-on-malta-television-26112011.html"
                            }
                        ],
        mostReadArticlesTitle: "Most Read",
        mostReadArticles: [
                            {   mostreadname     : "banbridge-chronicle-30112011.html",
                                mostreadtitle    : "QUEST FOR TRUTH, Banbridge Chronicle",
                                mostreadlocation : "/articles/banbridge-chronicle-30112011.html"
                            },
                            {   mostreadname     : "death-in-the-mediterranean.html",
                                mostreadtitle    : "An Investigation By Don Mullan",
                                mostreadlocation : "/death-in-the-mediterranean.html"
                            },
                            {   mostreadname     : "maltese-board-of-inquiry-report.html",
                                mostreadtitle    : "Maltese Board of Inquiry Report",
                                mostreadlocation : "/maltese-board-of-inquiry-report.html"
                            },
                            {   mostreadname     : "malta-tv-documentary.html",
                                mostreadtitle    : "Malta TV Documentary",
                                mostreadlocation : "/malta-tv-documentary.html"
                            }
                        ],
        comingSoonArticlesTitle: "Coming Soon",
        comingSoonArticles: [ 
                                {comingsoonname   : "Improved Document Archive Search"}
                            ],
        relatedSitesTitle: "Related Web Sites",
        relatedSites: [
                        {   siteurl   : "www.flightlinemalta.com",
                            sitetitle : "Flightline GA Malta"
                        },
                        {   siteurl   : "www.pprune.org",
                            sitetitle : "Professional Pilots Rumour Network"
                        },
                        {   siteurl   : "https://jetphotos.com/photo/71054",
                            sitetitle : "Jet Photos - 9H-ABU"
                        }
                    ]
    },
})
