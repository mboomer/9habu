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
                            {   latestname     : "irish-news-2511197.html",
                                latesttitle    : "Baffled Fathers Fight To Find His Lost Son",
                                latestlocation : "/articles/irish-news-25111997.html"
                            },
                            {   latestname     : "stephanie-bell-02031997.html",
                                latesttitle    : "Article by Stephanie Bell, Sunday Life",
                                latestlocation : "/articles/stephanie-bell-02031997.html"
                            },
                            {   latestname     : "translation-08111995.html",
                                latesttitle    : "Translation of article regarding Excelair",
                                latestlocation : "/articles/translation-08111995.html"
                            },
                            {   latestname     : "final-report-comment-01122000.html",
                                latesttitle    : "Comment from Cormac Boomer on final inquiry report",
                                latestlocation : "/articles/final-report-comment-01122000.html"
                            },
                            {   latestname     : "tanya-acheson-05121995.html",
                                latesttitle    : "Article by Tayna Acheson, Belfast Telegraph",
                                latestlocation : "/articles/tanya-acheson-05121995.html"
                            },
                            {   latestname     : "nigel-gould-01101996.html",
                                latesttitle    : "Article by Nigel Gould, Belfast Telegraph",
                                latestlocation : "/articles/nigel-gould-01101996.html"
                            },
                            {   latestname     : "don-mullan-03122000.html",
                                latesttitle    : "Article by Don Mullan, Ireland On Sunday",
                                latestlocation : "/articles/don-mullan-03122000.html"
                            },
                            {   latestname     : "email-cecilia-cormac-10121995.html",
                                latesttitle    : "Commercial flights by unlicensed pilots",
                                latestlocation : "/articles/email-cecilia-cormac-10121995.html"
                            },
                            {   latestname     : "email-don-cecilia-070103.html",
                                latesttitle    : "Did Kullhadd implicate 9HABU and Bartolo",
                                latestlocation : "/articles/email-don-cecilia-070103.html"
                            },
                            {   latestname     : "email-joe-mifsud-felix-agius-07012003.html",
                                latesttitle    : "Joe Mifsud & Felix Agius - Shqaqis movements in Malta",
                                latestlocation : "/articles/email-joe-mifsud-felix-agius-07012003.html"
                            },
                            {   latestname     : "email-kullhadd-translation-060103.html",
                                latesttitle    : "Email translation of Kullhadd article",
                                latestlocation : "/articles/email-kullhadd-translation-060103.html"
                            },
                            {   latestname     : "email-kullhadd-translation-2-060103.html",
                                latesttitle    : "Email translation Kullhadd article (2)",
                                latestlocation : "/articles/email-kullhadd-translation-2-060103.html"
                            },
                            {   latestname     : "email-daniel-don-070103.html",
                                latesttitle    : "Daniel Aquilina - link between Bartolo and assassination",
                                latestlocation : "/articles/email-daniel-don-070103.html"
                            },
                            {   latestname     : "email-cecilia-times-article-07012003.html",
                                latesttitle    : "Email from Cecilia re: Sharon Spiteri article",
                                latestlocation : "/articles/email-cecilia-times-article-07012003.html"
                            },
                            {   latestname     : "email-translation-kullhadd-07012003.html",
                                latesttitle    : "Attacker lived in Sliema before and after assassination",
                                latestlocation : "/articles/email-translation-kullhadd-07012003.html"
                            },
                            {   latestname     : "email-don-concerned-about-facts-04012003.html",
                                latesttitle    : "Don Mullan concerned about facts for Magill article",
                                latestlocation : "/articles/email-don-concerned-about-facts-04012003.html"
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
                                {comingsoonname   : "Document Archive Search - upgrade"}
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
