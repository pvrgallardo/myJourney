<body class="blue-grey darken-3">
<header>
    <!-- Dropdown Structure -->
    <ul id="dropdownPlaces" class="dropdown-content blue-grey darken-1">
        <li><a href="#philippines" class="orange-text text-darken-1">Philippines</a></li>
        <li class="divider"></li>
        <li><a href="#saudiarabia" class="orange-text text-darken-1">Saudi Arabia</a></li>
        <li class="divider"></li>
        <li><a href="#singapore" class="orange-text text-darken-1">Singapore</a></li>
        <li class="divider" ></li>
        <li><a href="#uae" class="orange-text text-darken-1">United Arab Emirates</a></li>
        <li class="divider"></li>
        <li><a href="#ghana" class="orange-text text-darken-1">Ghana</a></li>
    </ul>

    <!-- Navigation bar -->
    <nav class="blue-grey darken-3">
        <div class="nav-wrapper">
            <a href="#home" class="right brand-logo logo orange-text text-darken-1">
                <i class="right material-icons orange-text text-darken-1">airplane_ticket emoji_transportation luggage</i>
                Journey
            </a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                <i class="material-icons orange-text text-darken-1">menu</i>
            </a>
            <ul class="left hide-on-med-and-down">
                <li><a id="home" class="orange-text text-darken-1">Home</a></li>
                <li>
                    <!-- Dropdown Trigger -->
                    <a class="dropdown-trigger orange-text text-darken-1" data-target="dropdownPlaces">
                        Places
                    </a>
                </li>
                <li>
                    <!-- Modal Trigger -->
                    <a class="orange-text text-darken-1 modal-trigger" href="#modalContact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Modal Structure -->
    <div id="modalContact" class="modal bottom-sheet blue-grey darken-1">
        <div class="modal-content">
            <h5 class="orange-text text-darken-1">Contact Details</h5>
            <li class="divider"></li>
            <p class="orange-text text-darken-1">Phone: +63 949 140 8211<i class="material-icons left">phone</i></p>
            <li class="divider"></li>
            <p class="orange-text text-darken-1"><a class="orange-text text-darken-1" href="mailto:<Paul Vincent Gallardo> pvrgallardo@gmail.com?">E-mail: pvrgallardo@gmail.com</a><i class="material-icons left">email</i></p>
            <li class="divider"></li>
            <br/>
            <div class="row">
                <h5 class="orange-text text-darken-1 valign-wrapper">Social Media</h5>
                <li class="divider"></li>
                <div class="col s14 m4 l4">
                    <div class="col s4 m4 l1">
                        <p class="socMed center-align"><a href="https://www.facebook.com/pvrgallardo" target="_blank"><img src="<?php echo base_url('assets/images/f_logo_RGB-Blue_58.png'); ?>" width="25" height="25"></a></p>
                    </div>
                    <div class="col s4 m4 l1">
                        <p class="socMed center-align"><a href="https://www.instagram.com/pvrgallardo/" target="_blank"><img src="<?php echo base_url('assets/images/Instagram_Glyph_Gradient_RGB.png'); ?>" width="25" height="25"></a></p>
                    </div>
                    <div class="col s4 m4 l1">
                        <p class="socMed center-align"><a href="https://www.linkedin.com/in/pvrgallardo/" target="_blank"><img src="<?php echo base_url('assets/images/LI-In-Bug.png'); ?>" width="30" height="25"></a></p>
                    </div>
                </div>
                <div class="col s7 m8 l8 right-align">
                    <p><a class="modal-close orange-text text-darken-1 blue-grey darken-3 btn">Close</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Navigator -->
    <ul class="sidenav blue-grey darken-1" id="mobile-nav">
        <!-- collapsible -->
        <ul class="collapsible">
            <li>
                <div class="collapsible-header"><a class="orange-text text-darken-1 sidenav-close" href="#">Home</a></div>
            </li>
            <li>
                <div class="collapsible-header orange-text text-darken-1 blue-grey darken-1">Places</div>
                <div class="collapsible-body blue-grey darken-1">
                    <ul>
                        <li><div><a href="#philippines" class="orange-text text-darken-1 sidenav-close">Philippines</a></div></li>
                        <li><div><a href="#saudiarabia" class="orange-text text-darken-1 sidenav-close">Saudi Arabia</a></div></li>
                        <li><div><a href="#singapore" class="orange-text text-darken-1 sidenav-close">Singapore</a></div></li>
                        <li><div><a href="#uae" class="orange-text text-darken-1 sidenav-close">United Arab Emirates</a></div></li>
                        <li><div><a href="#ghana" class="orange-text text-darken-1 sidenav-close">Ghana</a></div></li>
                    </ul>
                </div>
            </li>
            <li>
                <!-- Modal Trigger -->
                <div class="collapsible-header"><a class="orange-text text-darken-1 modal-trigger sidenav-close" href="#modalContact">Contact</a></div>
            </li>
        </ul>
    </ul>
</header>

<main class="blue-grey darken-3">
    <!-- Slider -->
    <section>
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="<?php echo base_url('assets/images/mountMayon.jpg'); ?>">
                    <div class="caption left-align">
                        <h3 class="orange-text text-darken-1">Philippines</h3>
                        <h5 class="orange-text text-darken-1">It's More Fun in the Philippines</h5>
                        <a href="#philippines" class="waves-effect waves-light btn orange-text text-darken-1 blue-grey darken-3">learn more</a>
                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/images/kingdomTower.jpg'); ?>">
                    <div class="caption left-align">
                        <h3 class="orange-text text-darken-1">Saudi Arabia</h3>
                        <h5 class="orange-text text-darken-1">Hello World</h5>
                        <a href="#saudiarabia" class="waves-effect waves-light btn orange-text text-darken-1 blue-grey darken-3">learn more</a>
                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/images/merlion.jpg'); ?>">
                    <div class="caption left-align">
                        <h3 class="orange-text text-darken-1">Singapore</h3>
                        <h5 class="orange-text text-darken-1">Passion Made Possible.</h5>
                        <a href="#singapore" class="waves-effect waves-light btn orange-text text-darken-1 blue-grey darken-3">learn more</a>
                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/images/burjKhalifa.jpg'); ?>">
                    <div class="caption left-align">
                        <h3 class="orange-text text-darken-1">United Arab Emirates</h3>
                        <h5 class="orange-text text-darken-1">Discover All That's Possible</h5>
                        <a href="#uae" class="waves-effect waves-light btn orange-text text-darken-1 blue-grey darken-3">learn more</a>
                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/images/jubileeHouse.jpg'); ?>">
                    <div class="caption left-align">
                        <h3 class="orange-text text-darken-1">Ghana</h3>
                        <h5 class="orange-text text-darken-1"> Culture, Warmth, and Much More</h5>
                        <a href="#ghana" class="waves-effect waves-light btn orange-text text-darken-1 blue-grey darken-3">learn more</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Cards for Philippines -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col s12">
                    <h3><a class="orange-text text-darken-1" id="philippines">Philippines</a></h3>
                    <p class="orange-text text-darken-1">
                        The Philippines, officially the Republic of the Philippines,
                        is an archipelagic country in Southeast Asia. It is situated
                        in the western Pacific Ocean, and consists of about 7,640 islands,
                        that are broadly categorized under three main geographical divisions
                        from north to south: Luzon, Visayas, and Mindanao.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="materialboxed card-image">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/rizalPark.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Rizal Park</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Rizal Park<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Rizal Park, also known as Luneta Park or simply Luneta, is a historic
                                urban park located in Ermita, Manila, Philippines. It is considered
                                one of the largest urban parks in Asia, covering an area of
                                58 hectares (140 acres). The site on where the park is situated was
                                originally known as Bagumbayan during the Spanish colonial period.
                                It is adjacent to the historic Walled City of Intramuros.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/intramuros.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Intramuros</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Intramuros<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Old-world Intramuros is home to Spanish-era landmarks like Fort
                                Santiago, with a large stone gate and a shrine to national hero
                                José Rizal. The ornate Manila Cathedral houses bronze carvings
                                and stained glass windows, while the San Agustin Church museum
                                has religious artwork and statues. Spanish colonial furniture
                                and art fill Casa Manila museum, and horse-drawn carriages
                                (kalesa) ply the area’s cobblestone streets.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/greenbeltPond.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Greenbelt Park</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Greenbelt Park<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                A green oasis surrounded by four shopping malls and offering
                                plenty of secluded benches. Carefully planned landscape
                                architecture gives the park the illusion of remoteness, while
                                colorful flowers, luscious plants, and fish ponds add to the
                                ambiance.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/eastwoodCity.jpg'); ?>"></a>
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Eastwood City</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Eastwood City<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Home to the largest business process outsourcing (BPO) locators,
                                Eastwood City is the country’s first IT park and the first project
                                to be granted special economic zone status by the Philippine
                                Economic Zone Authority (PEZA). Since its establishment as a premier 
                                yberpark, it has become a top employer and leading dollar-earner
                                in the Philippines.Apart from being business community,
                                Eastwood City is a residential community with 19 high-rise
                                residential towers.Eastwood also is an Accredited Tourism
                                Entertainment Complex by the Department of Tourism.[4] Eastwood City
                                offers families, professionals and urbanites a variety of shopping,
                                dining and recreation offerings at its three lifestyle malls
                                Eastwood Mall, Eastwood Cyber and Fashion Mall and Eastwood Citywalk,
                                which are managed under the Megaworld Lifestyle Malls brand.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards for Saudi Arabia-->
    <section>
        <div class="container">

            <div class="row">
                <div class="col s12">
                    <h3><a class="orange-text text-darken-1" id="saudiarabia">Saudi Arabia</a></h3>
                    <p class="orange-text text-darken-1">
                        Officially the Kingdom of Saudi Arabia, is a country in Western Asia.
                        It spans the vast majority of the Arabian Peninsula, with a land area
                        of approximately 2,150,000 km². Saudi Arabia is the largest country in 
                        he Middle East, and the second-largest country in the Arab world.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/kingdomTower1.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Kingdom Tower</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Kingdom Tower<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Is a 99-story, 302.3 m (992 ft) skyscraper in Riyadh, Saudi Arabia.
                                When completed in 2002, it overtook the 267-meter Faisaliyah Tower
                                as the tallest tower in Saudi Arabia. It has since been surpassed
                                and is now the fifth-tallest skyscraper in the country, whose
                                tallest two buildings are the Abraj Al Bait Towers and the Capital
                                Market Authority Tower. It is the world's third-tallest building
                                with a hole after the Shanghai World Financial Center and the
                                85 Sky Tower in Taiwan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/alFaisaliyahCenter.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Al Faisaliyah Center</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Al Faisaliyah Center<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                               Is a commercial skyscraper and mixed-use complex located in the
                               business district of Riyadh, Saudi Arabia. The 267-metre-high
                               office tower, the centrepiece of the Foster + Partners
                               development, it is notable for having been the first skyscraper
                               built in Saudi Arabia, and for the monumental stained glass wall
                               of its lobby, designed by architectural artist Brian Clarke in
                               collaboration with Norman Foster. Presently the fourth tallest
                               building in Saudi Arabia after the Kingdom Centre, Burj Rafal
                               and Abraj Al Bait, the Center presently ranks as the 325 tallest 
                               uilding in the world.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/kingAbdulazizInternationalCenter.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1 ">
                            <span class="card-title activator orange-text text-darken-1 truncate">King Abdulaziz International Center for World Culture</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">King Abdulaziz International Center for World Culture<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Also known as Ithra, is situated in Dhahran, Saudi Arabia. It
                                was built by Saudi Aramco and inaugurated by King Salman bin Abdulaziz
                                on December 1, 2016. It is operated by Saudi Aramco and is
                                currently the company’s main corporate social responsibility
                                initiative with a focus on culture, learning and cross-cultural
                                activities. The Center is located where the first commercial Saudi
                                oilfield was found in March 1938. The Center incorporates a museum,
                                children museum, library, cinema, theater, and exhibition halls. It
                                was designed by the Norwegian architectural firm Snøhetta. The Center
                                has been listed in Time magazine as one of the world’s top 100 places
                                to visit and attracted one million visitors in 2019.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/alKhobarWaterTower.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Al Khobar Water Tower</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Al Khobar Corniche<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                               Is situated on a man-made peninsula in the northern reaches of
                               the Khobar Corniche. The Khobar Water Tower is a 90 meter tall,
                               eight-story tower, with a revolving restaurant on the top,
                               overlooking the city. It has been called the Eastern Province's
                               "top tourist attraction". The tower hosts fireworks shows on
                               special occasions such as the arrival of Ramadan, Eid al-Fitr
                               and Eid al-Adha. The Prince Sultan Science & Technology Center
                               (also known as SciTech) is a science exhibit located directly
                               in view of the Khobar Water Tower and north of the North Corniche
                               of Khobar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards for Singapore -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col s12">
                    <h3><a class="orange-text text-darken-1" id="singapore">Singapore</a></h3>
                    <p class="orange-text text-darken-1">
                        Officially the Republic of Singapore, is a sovereign island city-state
                        in maritime Southeast Asia. It lies about one degree of latitude
                        (137 kilometres or 85 miles) north of the equator, off the southern
                        tip of the Malay Peninsula, bordering the Straits of Malacca to the
                        west, the Riau Islands (Indonesia) to the south, and the South China Sea
                        to the east. The country's territory is composed of one main island,
                        63 satellite islands and islets, and one outlying islet, the combined
                        area of which has increased by 25% since the country's independence as
                        a result of extensive land reclamation projects. It has the second
                        greatest population density in the world. With a multicultural
                        population and recognizing the need to respect cultural identities,
                        Singapore has four official languages; English, Malay, Mandarin, and
                        Tamil. English is the lingua franca. Multiracialism is enshrined in
                        the constitution and continues to shape national policies in education,
                        housing, and politics.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/merlion1.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Merlion</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Merlion<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Is the official mascot of Singapore, depicted as a mythical
                                creature with the head of a lion and the body of a fish. Being
                                of prominent symbolic nature to Singapore and Singaporeans in
                                general, it is widely used to represent both the city state
                                and its people in sports teams, advertising, branding, tourism
                                and as a national personification. The Merlion was first used
                                in Singapore as the logo for the tourism board. Its name
                                combines "mer", meaning the sea, and "lion". The fish body
                                represents Singapore's origin as a fishing village when it was
                                called Temasek, which means "sea town" in Javanese. The lion
                                head represents Singapore's original name—Singapura—meaning
                                "lion city" or "kota singa".
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/universalSentosa.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Universal Studio</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Universal Studio<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Universal Studios Singapore is a theme park located within
                                Resorts World Sentosa on Sentosa Island, Singapore. It
                                features 28 rides, shows, and attractions in seven themed
                                zones. It was a key component of the Genting Group's bid
                                for the right to build Singapore's second integrated resort. 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/gardensByTheBay.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Gardens by the Bay</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Gardens by the Bay<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Is a nature park spanning 101 hectares in the Central Region of
                                Singapore, adjacent to the Marina Reservoir. The park consists
                                of three waterfront gardens: Bay South Garden, Bay East Garden
                                and Bay Central Garden. 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/marinaBaySands.jpg'); ?>"></a>
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Marina Bay Sands</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Marina Bay Sands<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Is an integrated resort fronting Marina Bay in Singapore. At its
                                opening in 2010, it was billed as the world's most expensive
                                standalone casino property at S$8 billion (US$6.88 billion),
                                including the land cost. The resort includes a 2,561-room hotel,
                                a 120,000-square-metre (1,300,000 sq ft) convention-exhibition
                                centre, the 74,000-square-metre (800,000 sq ft) The Shoppes at
                                Marina Bay Sands mall, a museum, a large theatre, "celebrity chef"
                                restaurants, two floating crystal pavilions, art-science exhibits,
                                and the world's largest atrium casino with 500 tables and 1,600
                                slot machines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards for United Arab Emirates -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col s12">
                    <h3><a class="orange-text text-darken-1" id="uae">United Arab Emirates</a></h3>
                    <p class="orange-text text-darken-1">
                        Also commonly known as the Emirates, is a country in Western Asia
                        located at the eastern end of the Arabian Peninsula. It borders Oman
                        and Saudi Arabia, and has maritime borders in the Persian Gulf with
                        Qatar and Iran.The UAE is an elective monarchy formed from a federation
                        of seven emirates, consisting of Abu Dhabi (which serves as the capital),
                        Ajman, Dubai, Fujairah, Ras Al Khaimah, Sharjah and Umm Al Quwain.
                        Each emirate is governed by a Sheikh and, together, they form the Federal
                        Supreme Council; one of them serves as President of the
                        United Arab Emirates. In 2013, the UAE's population was 9.2 million,
                        of which 1.4 million were Emirati citizens and 7.8 million were
                        expatriates; the estimated population in 2020 was 9.89 million.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/burjKhalifa1.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Burj Khalifa</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Burj Khalifa<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Also known as the Burj Dubai prior to its inauguration in 2010,
                                is a skyscraper in Dubai, United Arab Emirates. With a total height
                                of 829.8 m (2,722 ft, just over half a mile) and a roof height
                                (excluding antenna, but including a 244 m spire) of 828 m (2,717 ft),
                                the Burj Khalifa has been the tallest structure and building in the
                                world since its topping out in 2009, supplanting Taipei 101,
                                the previous holder of that status.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/burjAlArab.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Burj Al Arab</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Burj Al Arab<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Is a luxury hotel located in the city of Dubai, United Arab Emirates.
                                Managed by Jumeirah hotel group, it is one of the tallest
                                hotels in the world, although 39% of its total height is made
                                up of non-occupiable space. Burj Al Arab stands on an artificial
                                island that is 280 m (920 ft) from Jumeirah Beach and is
                                connected to the mainland by a private curving bridge.
                                The shape of the structure is designed to resemble the sail
                                of a ship. It has a helipad near the roof, at a height of 210 m
                                (689 ft) above ground.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/dubaiMall.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Dubai Mall</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Dubai Mall<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Is a shopping mall in Dubai. It is the second largest mall
                                in the world by total land area, and the 26th-largest shopping
                                mall in the world by gross leasable area, tying with
                                West Edmonton Mall and Fashion Island (Bangkok)—both
                                of which are older than it. It has a total retail floor area
                                of 502,000 square metres (5,400,000 sq ft). Located in
                                Dubai, United Arab Emirates, it is part of the
                                20-billion-dollar Downtown complex (called Downtown Dubai)
                                adjacent to the iconic Burj Khalifa, and includes over 1,200
                                shops. In 2011, it was the most visited building on the planet,
                                attracting over 54 million visitors each year.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/palmJumeirah.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Palm Jumeirah</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Palm Jumeirah<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Is a manmade archipelago in Dubai, in the United Arab Emirates,
                                created using land reclamation which extends into the
                                Persian Gulf. It is part of a larger series of developments
                                called the Palm Islands, including Palm Jebel Ali and Palm Deira,
                                which, when completed, will together increase Dubai's shoreline
                                by a total of 520 kilometres (320 mi). It has an estimated
                                population of 10,500 as of 2016.[citation needed] It is located
                                on the Jumeirah coastal area of the emirate of Dubai, in the
                                United Arab Emirates. The construction was done as a joint venture
                                by two Dutch specialist companies, Van Oord and Boskalis.
                                The same companies also created The World. The recently opened
                                destinations The Pointe, Club Vista Mare and Nakheel Mall are
                                the latest additions to Palm Jumeirah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards for Ghana -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col s12">
                    <h3><a class="orange-text text-darken-1" id="ghana">Ghana</a></h3>
                    <p class="orange-text text-darken-1">
                        Officially the Republic of Ghana, is a country in West Africa.
                        It spans the Gulf of Guinea and the Atlantic Ocean to the south,
                        sharing borders with the Ivory Coast in the west, Burkina Faso
                        in the north, and Togo in the east. Ghana covers an area of
                        238,535 km2 (92,099 sq mi), spanning a diverse geography and
                        ecology that ranges from coastal savannahs to tropical rain forests.
                        With over 31 million people, Ghana is the second-most populous
                        country in West Africa, after Nigeria. The capital and largest city
                        is Accra; other major cities include Kumasi, Tamale, and
                        Sekondi-Takoradi.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/capeCoastCastle.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Cape Coast Castle</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Cape Coast Castle<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Is one of about forty "slave castles", or large commercial forts,
                                built on the Gold Coast of West Africa (now Ghana) by
                                European traders. It was originally a Portuguese "feitoria" or
                                trading post, established in 1555, which they named Cabo Corso.
                                However, in 1653 the Swedish Africa Company constructed a timber
                                fort there. It originally was a centre for the trade in timber and
                                gold. It was later used in the trans-Atlantic slave trade.
                                Other Ghanaian slave castles include Elmina Castle and
                                Fort Christiansborg. They were used to hold slaves before they were
                                loaded onto ships and sold in the Americas, especially
                                the Caribbean. This "gate of no return" was the last stop
                                before crossing the Atlantic Ocean.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/jubileeHouse1.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Jubilee House</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Jubilee House<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Golden Jubilee House, or Jubilee House, is the presidential palace
                                in Accra that serves as a residence and office to the
                                President of Ghana. Jubilee House is built on the site of a
                                building that was constructed and used for administrative
                                purposes by the British Gold Coast Government. The previous
                                seat of government of Ghana was Osu Castle. It was renamed
                                Golden Jubilee House by President Nana Addo Dankwa Akufo-Addo
                                on 29 March 2018. It has previously been known as
                                The Flagstaff House.                            
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/kwameNkrumahMemorialParkMausoleum.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1 truncate">Kwame Nkrumah Memorial Park & Mausoleum</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Kwame Nkrumah Memorial Park & Mausoleum<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                It is dedicated to the prominent Ghanaian President Kwame
                                Nkrumah. The memorial complex was dedicated in 1992, and is
                                situated on the site of the former British colonial polo
                                grounds in Accra. It is five acres in size. The mausoleum,
                                designed by Don Arthur, houses the bodies of Kwame Nkrumah and
                                his wife Fathia Nkrumah.                            
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3 l3">
                    <div class="card small blue-grey darken-1">
                        <div class="card-image materialboxed">
                           <img class="cardMargin" src="<?php echo base_url('assets/images/blackStarSquare.jpg'); ?>">
                        </div>
                        <div class="card-content blue-grey darken-1">
                            <span class="card-title activator orange-text text-darken-1">Black Star Square</span>
                        </div>
                        <div class="card-reveal blue-grey darken-1">
                            <span class="card-title orange-text text-darken-1">Black Star Square<i class="material-icons right">close</i></span>
                            <p class="orange-text text-darken-1">
                                Also known as Independence Square, is a public square in Accra,
                                Ghana, bordered by the Accra Sports Stadium and the
                                Kwame Nkrumah Memorial Park. The square often hosts the annual
                                independence celebrations as well as other national events.
                                It is currently the site for all civic and military parades
                                in Ghana. It was completed in the year 1961, which coincided
                                with the state visit of Queen Elizabeth's II to Ghana.
                                The Black Star Square is sited between The 28th February Road
                                and The Accra's Southern Coastline.                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
              
    <section>
        <div class="container">
            <div class="row">
                <div class="col s6 m6 l6">
                    <h5 class="orange-text text-darken-1">Paul Vincent Gallardo</h5>
                    <p class="orange-text text-darken-1">
                        I am an overseas foreign worker for several years. I worked in
                        different countries for different task. Currently I am now working
                        locally here in the Philippines.                    
                    </p>
                </div>

                <div class="col s6 m6 l6">
                    <p class="center-align myPic"><img src="<?php echo base_url('assets/images/myPicture.jpg'); ?>" class="circle responsive-img" width="150" height="150"></p>
                </div>
            </div>
        </div>
    </section>

</main>
<footer id="front-end-footer" class="blue-grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col s6 offset-l4 l2">
                <h5 class="orange-text text-darken-1 left-align">Social Media</h5>
                <div class="col l3">
                    <a class="socMed1" href="https://www.facebook.com/pvrgallardo" target="_blank"><img src="<?php echo base_url('assets/images/f_logo_RGB-Blue_58.png'); ?>" width="25" height="25"></a>
                </div>
                <div class="col l3">
                    <a class="socMed1" href="https://www.instagram.com/pvrgallardo/" target="_blank"><img src="<?php echo base_url('assets/images/Instagram_Glyph_Gradient_RGB.png'); ?>" width="25" height="25"></a>
                </div>
                <div class="col l3">
                    <a class="socMed1" href="https://www.linkedin.com/in/pvrgallardo/" target="_blank"><img src="<?php echo base_url('assets/images/LI-In-Bug.png'); ?>" width="30" height="25"></a>
                </div>
            </div>
            <div class="col offset-s2 s4 l2 right-align">
                <h5 class="orange-text text-darken-1"> Links</h5>
                <ul>
                    <li><a class="orange-text text-darken-1" href="#">Home</a></li>
                    <li>
                        <!-- Dropdown Trigger -->
                        <a class="dropdown-trigger orange-text text-darken-1" data-target="dropdownPlaces">
                            Places
                        </a>
                    </li>
                    <li>
                        <!-- Modal Trigger -->
                        <a class="orange-text text-darken-1 modal-trigger" href="#modalContact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-copyright blue-grey darken-3">
        <div class="container orange-text text-darken-1 center">
            Copyright © 2021 Paul Vincent Gallardo.
        </div>
    </div>
</footer>