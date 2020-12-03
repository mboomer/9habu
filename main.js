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
                            {   latestname     : "cecilia-pm-20042000.html",
                                latesttitle    : "Letter to Cecilia from office of Prime Minister, Malta",
                                latestlocation : "/articles/cecilia-pm-20042000.html"
                            },
                            {   latestname     : "gorna-05062000.html",
                                latesttitle    : "AMEX Services Limited (MAPEL) held responsible",
                                latestlocation : "/articles/gorna-05062000.html"
                            },
                            {   latestname     : "malta-maritime-auth-02062000.html",
                                latesttitle    : "Malta Maritime Authority, sonar equipment broken",
                                latestlocation : "/articles/malta-maritime-auth-02062000.html"
                            },
                            {   latestname     : "antony-barnett-03052000.html",
                                latesttitle    : "Emails with Antony Barnett, The Observer",
                                latestlocation : "/articles/antony-barnett-03052000.html"
                            },
                            {   latestname     : "antony-barnett-08052000.html",
                                latesttitle    : "Letter from Cormac Boomer to Antony Barnett",
                                latestlocation : "/articles/antony-barnett-08052000.html"
                            },
                            {   latestname     : "cormac-teresa-02052000.html",
                                latesttitle    : "Fax from Cormac to Teresa re: action against MAPEL",
                                latestlocation : "/articles/cormac-teresa-02052000.html"
                            },
                            {   latestname     : "teresa-cormac-02052000.html",
                                latesttitle    : "Letter from Teresa Gorna attending MAPEL trial",
                                latestlocation : "/articles/teresa-cormac-02052000.html"
                            },
                            {   latestname     : "daniel-jbianco-15052000.html",
                                latesttitle    : "Letter from Daniel Aquilina to Joseph Bianco",
                                latestlocation : "/articles/daniel-jbianco-15052000.html"
                            },
                            {   latestname     : "cecilia-cormac-29052000.html",
                                latesttitle    : "Fax from Cecilia new evidence in Lockerbie trial",
                                latestlocation : "/articles/cecilia-cormac-29052000.html"
                            },
                            {   latestname     : "teresa-cormac-22052000.html",
                                latesttitle    : "Letter from Teresa Gorna re: MAPEL trial",
                                latestlocation : "/articles/teresa-cormac-22052000.html"
                            },
                            {   latestname     : "cormac-barnett-27042000.html",
                                latesttitle    : "Fax from Cormac Boomer re: R Shayler",
                                latestlocation : "/articles/cormac-barnett-27042000.html"
                            },
                            {   latestname     : "celilia-pm-adami-11042000.html",
                                latesttitle    : "Letter from Cecilia to Maltese PM re: visit to Libya",
                                latestlocation : "/articles/celilia-pm-adami-11042000.html"
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
                                {comingsoonname   : "10 New Documents Added to Archive"}
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
