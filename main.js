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
                            {   latestname     : "jim-nicholson-15022001.html",
                                latesttitle    : "Letter from Jim Nicholson MEP",
                                latestlocation : "/articles/jim-nicholson-15022001.html"
                            },
                            {   latestname     : "gerry-adams-mp-14022001.html",
                                latesttitle    : "Gerry Adams, 'anything I can do, I will'",
                                latestlocation : "/articles/gerry-adams-mp-14022001.html"
                            },
                            {   latestname     : "cormac-boomer-05022001.html",
                                latesttitle    : "Dublin response leaves me feeling 'sick'",
                                latestlocation : "/articles/cormac-boomer-05022001.html"
                            },
                            {   latestname     : "irish-foreign-affairs-31012001.html",
                                latesttitle    : "Response from Irish Foreign Affairs Office, Dublin",
                                latestlocation : "/articles/irish-foreign-affairs-31012001.html"
                            },
                            {   latestname     : "gerry-adams-mp-25012001.html",
                                latesttitle    : "Letter to Gerry Adams MP",
                                latestlocation : "/articles/gerry-adams-mp-25012001.html"
                            },
                            {   latestname     : "jim-dougal-25012001.html",
                                latesttitle    : "Letter from Jim Dougal, EU unable to help",
                                latestlocation : "/articles/jim-dougal-25012001.html"
                            },
                            {   latestname     : "ian-k-paisley-25012001.html",
                                latesttitle    : "Letter to Dr. Ian Paisley MEP",
                                latestlocation : "/articles/ian-k-paisley-25012001.html"
                            },
                            {   latestname     : "jim-dougal-09012001.html",
                                latesttitle    : "Letter from Jim Dougal, contact addresses",
                                latestlocation : "/articles/jim-dougal-09012001.html"
                            },
                            {   latestname     : "draft-magill-article-31122002.html",
                                latesttitle    : "Draft of the article for Magill",
                                latestlocation : "/articles/draft-magill-article-31122002.html"
                            },
                            {   latestname     : "belfast-telegraph-19122000.html",
                                latesttitle    : "Apology from Edmund Curran, Belfast Telegraph",
                                latestlocation : "/articles/belfast-telegraph-19122000.html"
                            },
                            {   latestname     : "jim-dougal-19122000.html",
                                latesttitle    : "Letter from Jim Dougal, can provide contact details",
                                latestlocation : "/articles/jim-dougal-19122000.html"
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
