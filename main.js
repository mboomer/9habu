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

//<!-- ********************************************************************************************* -->
//<!-- this is the latest articles VUE componment that we bind to the latPopMostComOth VUE Instance  -->
//<!-- ********************************************************************************************* -->
Vue.component(‘latest’, {
    props: [
        articleList: {
                       type: Array,
                       required: true
                    }
        ],
    template: '<li><a href="{{ article-location }}{{ article-name }}">{{ article-title }}</a></li>'
})

//<!-- ********************************************************************************************* -->
//<!-- this is the most read articles VUE componment that we bind to the latPopMostComOth VUE Instance  -->
//<!-- ********************************************************************************************* -->
Vue.component(‘most-read’, {
    props: [
        articleList: {
                       type: Array,
                       required: true
                    }
        ],
    template: '<li><a href="{{ article-location }}{{ article-name }}">{{ article-title }}</a></li>'
})
//<!-- ********************************************************************************************* -->
//<!-- this is the coming soon articles VUE componment that we bind to the latPopMostComOth VUE Instance  -->
//<!-- ********************************************************************************************* -->
Vue.component(‘coming-soon’, {
    props: [
        articleList: {
                       type: Array,
                       required: true
                    }
        ],
    template: '<li>{{ article }}</li>'
})
//<!-- ********************************************************************************************* -->
//<!-- this is the related sites VUE componment that we bind to the latPopMostComOth VUE Instance  -->
//<!-- ********************************************************************************************* -->
Vue.component(‘related-sites’, {
    props: [
        siteList: {
                    type: Array,
                    required: true
                  }
        ],
    template: '<li><a href="{{ site-url }}">{{ site-title }}</a></li>'
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
//<!-- *********************************************************************************************************** -->
//<!-- vue instance attached to the DIV html element "latest-popular-soon" containing the data for each categories -->
//<!-- *********************************************************************************************************** -->

var latMosComRel = new Vue({
    el: ‘#latest-popular-soon’,
    data: {
        latestArticlesTitle: "Latest Articles",
        latestArticles: [
                            {   article-name     : "freedom-of-info-request-15112015.html",
                                article-title    : "Freedom Of Information Request AAIB"
                                article-location : "articles/"
                            },
                            {   article-name     : "freedom-of-info-response-14122015.html",
                                article-title    : "FOI Response from AAIB"
                                article-location : "articles/"
                            },
                            {   article-name     : "tv-documentary-first-shown-on-malta-television-26112011.html",
                                article-title    : "Updated Video Player for Malta TV Documentary"
                                article-location : "articles/"
                            }
                        ],
        mostReadArticlesTitle: "Most Read",
        mostReadArticles: [
                            {   article-name     : "banbridge-chronicle-30112011.html",
                                article-title    : "QUEST FOR TRUTH, Banbridge Chronicle"
                                article-location : "articles/"
                            },
                            {   article-name     : "death-in-the-mediterranean.html",
                                article-title    : "An Investigation By Don Mullan"
                                article-location : "./"
                            },
                            {   article-name     : "maltese-board-of-inquiry-report.html",
                                article-title    : "Maltese Board of Inquiry Report"
                                article-location : "./"
                            },
                            {   article-name  : "malta-tv-documentary.html",
                                article-title : "Malta TV Documentary"
                                article-location : "./"
                            }
                        ],
        comingSoonArticlesTitle: "Coming Soon",
        comingSoonArticles: [   "Updated responsive website suitable for mobile and tablets",
                                "Improved Document Archive Search"
                            ],
        relatedSitesTitle: "Related Web Sites",
        relatedSites: [
                        {   site-url   : "www.flightlinemalta.com",
                            site-title : "Flightline GA Malta"
                        },
                        {   site-url   : "www.pprune.org",
                            site-title : "Professional Pilots Rumour Network"
                        },
                        {   site-url   : "https://jetphotos.com/photo/71054",
                            site-title : "Jet Photos - 9H-ABU"
                        }
                    ]
    }
})
