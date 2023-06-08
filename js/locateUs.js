function initialize() {
    category = $(".location select").find(":selected").val(), ChangeCity(category)
}

function ChangeCity(a) {
    var b;
    for (i = 0; i < gmarkers1.length; i++) gmarkers1[i].setMap(null);
    var c, d, e, f;
    $(window).width() < 768 ? (c = 5, d = 5, e = 5, f = 6, zoomguj = 7) : (c = 10, d = 6, e = 6, f = 7, zoomMadh = 8, zoomguj = 8);
    var g = $(data).filter(function (b, c) {
        return c.branch === a
    });
    for ("Andhra Pradesh" == a ? b = {
        zoom: d,
        center: new google.maps.LatLng(15.8651269, 78.5326758),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Delhi" == a ? b = {
        zoom: c,
        center: new google.maps.LatLng(28.6586907, 77.314884),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Gujarat" == a ? b = {
        zoom: zoomguj,
        center: new google.maps.LatLng(22.5063613, 72.5586287),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Jammu Kashmir" == a ? b = {
        zoom: e,
        center: new google.maps.LatLng(33.8937701, 75.4070028),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Karnataka" == a ? b = {
        zoom: e,
        center: new google.maps.LatLng(15.5361788, 77.9187158),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Maharashtra" == a ? b = {
        zoom: f,
        center: new google.maps.LatLng(19.0162992, 73.093075),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Punjab" == a ? b = {
        zoom: e,
        center: new google.maps.LatLng(31.8757246, 78.3009611),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Rajasthan" == a ? b = {
        zoom: e,
        center: new google.maps.LatLng(27.0613899, 76.3838399),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Madhya Pradesh" == a ? b = {
        zoom: zoomMadh,
        center: new google.maps.LatLng(23.9627262, 78.1793045),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Chandigarh" == a ? b = {
        zoom: d,
        center: new google.maps.LatLng(31.8757246, 78.3009611),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Bihar" == a ? b = {
        zoom: d,
        center: new google.maps.LatLng(25.9538327, 83.8187137),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    } : "Kerala" == a && (b = {
        zoom: f,
        center: new google.maps.LatLng(9.93892, 76.1803489),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }), map = new google.maps.Map(document.getElementById("map-canvas"), b), i = 0; i < g.length; i++) addMarker(g[i])
}

function addMarker(a) {
    var b = a.branch,
        c = a.name,
        d = new google.maps.LatLng(a.lat, a.lng),
        e = '<div class="place-detail"> ';
    e += "<p><span>Address: </span>" + a.address + "</p> ", e += "<p><span>Phone: </span>" + a.contact + "</p> ", e += "<p><span>Timing: </span>" + a.timing + "</p> ", e += "</div>";
    var f = e;
    marker1 = new google.maps.Marker({
        title: c,
        position: d,
        category: b,
        animation: google.maps.Animation.DROP,
        icon: "Content/images/Location-Pin.png",
        map: map
    }), gmarkers1.push(marker1), google.maps.event.addListener(marker1, "click", function (a, b) {
        return function () {
            infowindow.setContent(b), infowindow.open(map, a)
        }
    } (marker1, f))
}

function addDisplay(a) {
    var b = 1;
    $(".address").remove(), "Maharashtra" == a && ($(".addressList").append('<div class="address"><h6> Registered and Corporate Office address:</h6><p> Intime Equities Limited, Naman Midtown "A" Wing, 20th Floor, Senapati Bapat Marg, Elphinstone Road, Mumbai - 400 013</p><p>Phone: 022-4027 3600</p><p>Fax: 4027 3700</p><h6>Client Servicing desk:</h6><p>Customer Care Tel: 022- 40273666</p><p>Visit us: www.intimeequities.com</p>'), b++), $.each(data, function (c, d) {
        d.branch == a && "false" == d.hide && ($(".addressList").append("<div class='address'><p>" + d.address + "</p><div class='AddContactWrap'><h6>Customer Care Tel:</h6><p>" + d.contact + "</p></div>"), b++, "" == d.contact && $(".AddContactWrap").hide(), "" == d.email && $(".AddEmailWrap").hide())
    })
}
var gmarkers1 = [],
    markers1 = [],
    bounds = new google.maps.LatLngBounds,
    infowindow = new google.maps.InfoWindow({
        content: ""
    }),
    data = [{
        address: "13, Prathima Schalass, 3-5-798/G 1-4, King Kothi Road, Basheerbagh, Hyderabad,Andhra Pradesh, Pin code - 500029\n\n",
        contact: "(91)–40–23297961",
        city: "Hyderabad",
        lat: 17.393533,
        lng: 78.478519,
        branch: "Andhra Pradesh",
        email: "hyd@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Intigrated Assets Finance Ltd, D No:1/977-D, 2Nd Floor, Nh-44, Opp.Ravi Petrol Bunk, Ananthapuram, Andhra Pradesh-\n\n",
        contact: "(91)–7396520608",
        city: "Ananthapuram",
        lat: 14.6395659,
        lng: 77.4692007,
        branch: "Andhra Pradesh",
        email: "sam.prasad@ffsil.com",
        hide: "false"
    }, {
        address: "Flatno1604, 16Th Floor, Babukhan Estate, Basheerbagh, Hyderabad, And Telangana-500029-\n\n",
        contact: "(91)–9348312346",
        city: "Telangana",
        lat: 17.3990517,
        lng: 78.4742255,
        branch: "Andhra Pradesh",
        email: "madhus@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Integrated Assets Finance Ltd, D.No: 42-527-1-2-3,2Nd Floor, Room No:1,Andhra Bank Building, N.G.O.Colony, Kadapa - 516001\n\n",
        contact: "(91)–9133269351",
        city: "Kadapa",
        lat: 14.4722556,
        lng: 78.8338338,
        branch: "Andhra Pradesh",
        email: "jyothi.mounika@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Integrated Assets Finance Ltd, C/O Sruthi Auto Finance,Opp: Reddy Sweets, Bellary Circle, Adoni Road, Kurnool-518004\n\n",
        contact: "(91)–9160734295",
        city: "Kurnool",
        lat: 15.7585888,
        lng: 77.9891659,
        branch: "Andhra Pradesh",
        email: "raghavendra.c@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Integrated Assets Finance Limited, Sridhar’S Krishna Towers, 4Th Floor, Annamaiah Circle, Magunta Layout, Nellore-524003\n\n",
        contact: "(91)–9985559772",
        city: "Nellore",
        lat: 14.4294292,
        lng: 79.9741692,
        branch: "Andhra Pradesh",
        email: "a.venkataramanaiah@ffsil.com",
        hide: "false"
    }, {
        address: "Door No-7-8-7, 7-18-8, Bandaruvari Street, T Nagar, Rajahmundry - 533101\n\n",
        contact: "(91)-9949865652",
        city: "Nellore",
        lat: 16.9923312,
        lng: 81.7704167,
        branch: "Andhra Pradesh",
        email: "simhadribabu@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Intigrated Assets Finance Ltd, D No:19-10-20/3, New Indira, Opp.Plr Convention Center, Air Bypass Rd, Tirupati.\n\n",
        contact: "(91)-7306821220",
        city: "Tirupati",
        lat: 13.6225856,
        lng: 79.4177132,
        branch: "Andhra Pradesh",
        email: "ganesh.r@ffsil.com",
        hide: "false"
    }, {
        address: "M/S:Fortune Integrated Assets Finance Ltd.,  Door No:23-22-4&5,1St Floor, Hanuman Street, Above Axis Bank, Satyanarayana Puram, Vijayawada-520011.\n\n",
        contact: "(91)-09177344699",
        city: "Vijayawada",
        lat: 16.5223832,
        lng: 80.6320768,
        branch: "Andhra Pradesh",
        email: "p.prasadrao@ffsil.com",
        hide: "false"
    }, {
        address: "C/O. Sai Gunesh Motors, 2Nd Floor, 49-48-12/5, Ngo'S Colony, Beside Indian Oil Petrol Bunk, Near Bharath Gass, Above Car Care, Vizag, Ap-530016\n\n",
        contact: "(91)-9177525888",
        city: "Vizag",
        lat: 17.7306738,
        lng: 83.2969929,
        branch: "Andhra Pradesh",
        email: "yrajababu@ffsil.com",
        hide: "false"
    }, {
        address: "Shop no-9A, 4th Floor, Guptas Square, 60 feet road, Ongole - 523002\n\n",
        contact: "(91)-9966564325",
        city: "Ongole",
        lat: 15.5126711,
        lng: 80.0405724,
        branch: "Andhra Pradesh",
        email: "ganapaneni@ffsil.com",
        hide: "false"
    }, {
        address: "811-812, 8th Floor, Mercantile House, 15, Kasturba Gandhi Marg, Connaught Place, New Delhi, Pin code – 110001\n\n",
        contact: "(91)–11–43520871, 43520878",
        city: "New Delhi",
        state: "Delhi",
        lat: 28.626517,
        lng: 77.222619,
        branch: "Delhi",
        email: "delhi@ffsil.com",
        hide: "false"
    }, {
        address: "BUILDING NO: 9, REKHA ENCLAVE, LANDMARK NEAR GURU TEG BAHADUR PARK, OPPOSITE MANSAROVAR GARDEN BUS STOP, KIRTI NAGAR NEW DELHI-110015\n\n",
        contact: "(91)–011-43520871-78",
        city: "New Delhi",
        state: "Delhi",
        lat: 28.655838,
        lng: 77.1485138,
        branch: "Delhi",
        email: "delhi@ffsil.com",
        hide: "false"
    }, {
        address: "BUILDING NO: 9, REKHA ENCLAVE, LANDMARK NEAR GURU TEG BAHADUR PARK, OPPOSITE MANSAROVAR GARDEN BUS STOP, KIRTI NAGAR NEW DELHI-110015\n\n",
        contact: "",
        city: "New Delhi",
        state: "Delhi",
        lat: 28.6285934,
        lng: 77.2247355,
        branch: "Delhi",
        email: "delhi@ffsil.com",
        hide: "false"
    }, {
        address: "5, Asia House, Swastik Cross Road, Near Pizza Hut, Navrangpura, Ahmedabad Pin code - 380009 \n\n",
        contact: "(91)–79–40077088–89",
        city: "Ahmedabad",
        state: "Gujarat",
        lat: 23.036496,
        lng: 72.561911,
        branch: "Gujarat",
        email: "ahmedabad@ffsil.com",
        hide: "false"
    }, {
        address: "FF-12, 1st Floor, A Wing, Trident Complex, Above Sony Showroom, Opp.GERI, Race Course, Baroda, Pin code – 390007.\n\n",
        contact: "(91)-265-2306905 ",
        city: "Baroda",
        state: "Gujarat",
        lat: 22.31457,
        lng: 73.164613,
        branch: "Gujarat",
        email: "vadodara@ffsil.com ",
        hide: "false"
    }, {
        address: "1St Floor Shop No-34, Someshwar Mall, Opp. Poojan Complex, Modhera Road, A/P-Tal-Dist – Mehsana, 384002\n\n",
        contact: "(91)-9978440073 ",
        city: "Mehsana",
        state: "Gujarat",
        lat: 23.594161,
        lng: 72.3597058,
        branch: "Gujarat",
        email: "jitendra.rajput@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Integrated Assets Finance Limited, 105. Indraprasth Complex. Nr. Petlad Railway Crossing, Vkv Road. Nadiad : 387001\n\n",
        contact: "(91)-9428563627 ",
        city: "Nadiad",
        state: "Gujarat",
        lat: 22.6813267,
        lng: 72.8655532,
        branch: "Gujarat",
        email: "manish.patel@ffsil.com",
        hide: "false"
    }, {
        address: "Plot No-E20, Shop No-G/19, Ground Floor, Dev Complex, K-7, Circle, Sector -26, Gandhinagar, 382028.\n\n",
        contact: "(91)-8980011208 ",
        city: "Gandhinagar",
        state: "Gujarat",
        lat: 23.2592759,
        lng: 72.6378723,
        branch: "Gujarat",
        email: "yogendrasingh.chavda@ffsil.com",
        hide: "false"
    }, {
        address: "403/404, Shivalik-7, Satyavijay Ice Cream, Gondal Road, Rajkot-360002\n\n",
        contact: "(91)-9825822453 ",
        city: "Rajkot",
        state: "Gujarat",
        lat: 22.2803003,
        lng: 70.7217223,
        branch: "Gujarat",
        email: "dhaval.rathod@ffsil.com",
        hide: "false"
    }, {
        address: "225 city enter, Opp. MP Shah Arts College, Joravarnagar Causway, Surendranagar, 363001\n\n",
        contact: "(91)-9924032550 ",
        city: "Surendranagar",
        state: "Gujarat",
        lat: 22.8252711,
        lng: 71.0243519,
        branch: "Gujarat",
        email: "mehulkumar.makwana@ffsil.com",
        hide: "false"
    }, {
        address: "2nd Floor, 203, Sun Complex-2, Opposite Hotel Land Mark, Motipura Circle, Himatnagar - 383 001.\n\n",
        contact: "(91)-7227034131 ",
        city: "Himatnagar",
        state: "Gujarat",
        lat: 23.6268383,
        lng: 72.7881907,
        branch: "Gujarat",
        email: "kiran.sukhadiya@fasttrackhfc.com",
        hide: "false"
    }, {
        address: "Unit-424, 4th Floor, Midas Square, 150 Feet, Parvat Gam, Puna Godadara Road, Surat - 395010\n\n",
        contact: "(91)-9825915373 ",
        city: "Surat",
        state: "Gujarat",
        lat: 21.1924916,
        lng: 72.8417797,
        branch: "Gujarat",
        email: "gaurang.patel@fasttrackhfc.com",
        hide: "false"
    }, {
        address: "Shop No.1775, Plot No.41, Opp.Dhudhadhari Temple, Shastri Nagar, Jammu, Pin code - 180004",
        contact: "(91)-265-2306905 ",
        city: "Jammu",
        state: "Jammu Kashmir",
        lat: 32.6993887,
        lng: 74.8504327,
        branch: "Jammu Kashmir",
        email: "jammu@ffsil.com",
        hide: "false"
    }, {
        address: "No.328, 'Jayalakshmi Arcade', Narayana Shastry Road, Mysore , Pin code - 570024 ,",
        contact: "(91)-821–4252801 to 805",
        city: "Mysore",
        state: "Karnataka",
        lat: 12.3047732,
        lng: 76.6458957,
        branch: "Karnataka",
        email: "mysore@ffsil.com",
        hide: "false"
    }, {
        address: "CTS No.13, Ganesh Empire,1st Floor, Khanapur Road, Tilakwadi, Belgaum, Pin code - 590006",
        contact: "(91)-831–2429705",
        city: "Belgaum",
        state: "Karnataka",
        lat: 15.8306025,
        lng: 74.4740905,
        branch: "Karnataka",
        email: "belgaum@ffsil.com",
        hide: "false"
    }, {
        address: "No.12-10-97/57, 2nd Floor, SS Towers, Paras Garden, Raichur – 584101",
        contact: "(91)-831–2429705",
        city: "Raichur",
        state: "Karnataka",
        lat: 16.2134643,
        lng: 77.2931131,
        branch: "Karnataka",
        email: "raichur@ffsil.com",
        hide: "false"
    }, {
        address: "Nos.3 & 4, Upper Ground Floor,Giriraj Annex, Travellers Bunglow Road, Hubli, Karnataka, Pincode – 580029",
        contact: "(91)-836 – 4251662, 4265057",
        city: "Hubli",
        state: "Karnataka",
        lat: 15.3556527,
        lng: 75.1263004,
        branch: "Karnataka",
        email: "hubli@ffsil.com",
        hide: "false"
    }, {
        address: "Ramakrishna, 1st Floor, R M Road, Shimoga - 577201",
        contact: "(91)-9964272809",
        city: "Shimoga",
        state: "Karnataka",
        lat: 13.9334631,
        lng: 75.1263004,
        branch: "Karnataka",
        email: "karanataka@ffsil.com",
        hide: "false"
    }, {
        address: "57 Dvg Road, Golden Tower 2Nd Floor. Bangalore – 560004",
        contact: "(91)-9901744422",
        city: "Bangalore ",
        state: "Karnataka",
        lat: 13.0097299,
        lng: 77.5640265,
        branch: "Karnataka",
        email: "anup.dutta@ffsil.com",
        hide: "false"
    }, {
        address: "Chalapathi Complex, Opp Vinay Sabangana, M B Road, Kolar, Karnataka, 563101",
        contact: "(91)-9740229700",
        city: "KOLLAR ",
        state: "Karnataka",
        lat: 13.1294471,
        lng: 78.1182932,
        branch: "Karnataka",
        email: "raju.m@ffsil.com",
        hide: "false"
    }, {
        address: "Shop No No 27 B M Road Shanthinikethan Scholl Opp Ramanagara Town Ramanagaradist-562159",
        contact: "(91)-9901744422 / 9008911056",
        city: "Ramanagara ",
        state: "Karnataka",
        lat: 12.7200107,
        lng: 77.2978145,
        branch: "Karnataka",
        email: "anup.dutta@ffsil.com / shalini@ffsil.com",
        hide: "false"
    }, {
        address: "Bd Patil & Co., 1St Floor, Bdp Plaza, New Cotton Market, Hubli-580029",
        contact: "(91)-8095588280",
        city: "Hubli",
        state: "Karnataka",
        lat: 15.3542968,
        lng: 75.1333167,
        branch: "Karnataka",
        email: "isakh.yallapur@ffsil.com",
        hide: "false"
    }, {
        address: "Cc Neeralgi Square, Vidyanagar City Road, P B Road, Haveri-581110",
        contact: "(91)-9901235001",
        city: "Haveri",
        state: "Karnataka",
        lat: 14.7984677,
        lng: 75.3850872,
        branch: "Karnataka",
        email: "prabhakar.goud@ffsil.com",
        hide: "false"
    }, {
        address: "No 307, 1St Floor, Dollar Complex, Opp Duda Office, Devaraj Urs Layout,A Block, Davangere-577006",
        contact: "(91)-9844687375",
        city: "Davangere",
        state: "Karnataka",
        lat: 14.4745231,
        lng: 75.9023762,
        branch: "Karnataka",
        email: "jagadesh.nadagowda@ffsil.com",
        hide: "false"
    }, {
        address: "Shop No- S/No.315/2 Plot No. 01, Ground Floor, Kamala Hanumanth Niwas, Jyotish Darpan, Near New District Court, Hubli Road,Gadag-582103",
        contact: "(91)-8951436136",
        city: "Gadag",
        state: "Karnataka",
        lat: 15.4210928,
        lng: 75.5846423,
        branch: "Karnataka",
        email: "vinod.sambale@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Integrated Assets Finance Ltd. : 2Nd Cross, Behind Municipal Complex, Tuda Layout, Sira Gate Tumkur - 572106.",
        contact: "(91)-9964193233",
        city: "Tumkur",
        state: "Karnataka",
        lat: 13.3635962,
        lng: 77.1010695,
        branch: "Karnataka",
        email: "mahadev@ffsil.com",
        hide: "false"
    }, {
        address: "Satyam Arcade, Beside Dena Bank, Near Sahyadri Circle, Salagame Road, Hassan 573201",
        contact: "(91)-9741359832",
        city: "Hassan",
        state: "Karnataka",
        lat: 13.0106155,
        lng: 76.0968487,
        branch: "Karnataka",
        email: "ashok.chavan@ffsil.com",
        hide: "false"
    }, {
        address: "Vadiraj Complex, Second Floor, Saraswati Godam, Gazipur, Super Market, Kalburgi, 585101.",
        contact: "(91)-7676464016",
        city: "Kalburgi",
        state: "Karnataka",
        lat: 17.3353632,
        lng: 76.8449546,
        branch: "Karnataka",
        email: "sumedh.amingad@ffsil.com",
        hide: "false"
    }, {
        address: "Shree Venkateshwara Complex, 1St Floor, Near L&T Showroom, Bb Road, Shahapur, Tal- Shahapur, Dist-Yadagiri- 585223.",
        contact: "(91)-9663348424",
        city: "Yadagiri",
        state: "Karnataka",
        lat: 16.688714,
        lng: 76.8232935,
        branch: "Karnataka",
        email: "mahanth.gowda@ffsil.com",
        hide: "false"
    }, {
        address: "No- 13A-14A, 1st floor, Maltesh Commercial Complex, Opp. New DC Office, Hospet Road, Koppal - 583231",
        contact: "(91)-9740278243",
        city: "Koppal",
        state: "Karnataka",
        lat: 15.3513976,
        lng: 76.1344812,
        branch: "Karnataka",
        email: "santosh.hatalageri@ffsil.com",
        hide: "false"
    }, {
        address: "Shivu's complex, Opp. LIC building no-459/577, 4th division size NS21, EW 25 Chikballapur-562101.",
        contact: "(91)-7259033814 / 8904959069",
        city: "Chikballapur",
        state: "Karnataka",
        lat: 13.4307846,
        lng: 77.7073918,
        branch: "Karnataka",
        email: "ananth.navada@ffsil.com / venu.v@ffsil.com",
        hide: "false"
    }, {
        address: "Shahajhan Complex, Near Royal residence, station road, Bijapur - 585104",
        contact: "(91)-7204789772",
        city: "Bijapur",
        state: "Karnataka",
        lat: 16.7242541,
        lng: 75.7391034,
        branch: "Karnataka",
        email: "shamilkumar.halli@ffsil.com",
        hide: "false"
    }, {
        address: "D 21/3 Naryan Shastry Road, 2nd Floor, Beside Sapna Book House, Mysore - 570024",
        contact: "(91)-821-4252801 TO 805",
        city: "Mysore ",
        state: "Karnataka",
        lat: 12.3305968,
        lng: 76.5930281,
        branch: "Karnataka",
        email: "mysore@ffsil.com",
        hide: "false"
    }, {
        address: "Shop no. 2, Ist Floor, Santoshi Heights, Lingsugur Road, Raichur-584101. Landmark : back side Of LG showroom",
        contact: "(91)-9986591698/ (91)-9481088407/ 08532-297297",
        city: "Raichur",
        state: "Karnataka",
        lat: 16.2120288,
        lng: 77.3440698,
        branch: "Karnataka",
        email: "raichur@ffsil.com",
        hide: "false"
    }, {
        address: "Dinar Premises CHS, 9 Ground Floor (back side), Station road, Santacruz (w), Mumbai ,Pin code - 400054 ",
        contact: "(91)-22–26055230",
        city: "Mumbai",
        state: "Maharashtra",
        lat: 19.082012,
        lng: 72.834469,
        branch: "Maharashtra",
        email: "santacruz@ffsil.com",
        hide: "false"
    }, {
        address: "4 Age Arcade, Near Sant Eknath Rang Mandir, Osmanpura, Aurangabad",
        contact: "",
        city: "Aurangabad",
        state: "Maharashtra",
        lat: 19.864247,
        lng: 75.3220411,
        branch: "Maharashtra",
        email: "",
        hide: "false"
    }, {
        address: "Unity Park Plaza, Shop No 1 & 2, Near Bajaj Wasan Showroom, Opp. Wasan Eye, Near Baba Travels, Mumbai Naka, Nashik - 422009",
        contact: "(91)-7028047264",
        city: "Nashik",
        state: "Maharashtra",
        lat: 19.987449,
        lng: 73.7823183,
        branch: "Maharashtra",
        email: "",
        hide: "false"
    }, {
        address: "Archies Co-op Society Ltd, Shop No. G - 3, Ground Floor, New Station Road, Kalyan (West), Dist - Thane, Pin 421 301",
        contact: "(91)-7028986981",
        city: "Kalyan",
        state: "Maharashtra",
        lat: 19.237106,
        lng: 73.126431,
        branch: "Maharashtra",
        email: "",
        hide: "false"
    }, {
        address: "R8/1833/1, Shivkamal Silver Arch, Ramnagar, Nandi Stop, Ausa Road, Latur - 413512",
        contact: "(91)-7028986973",
        city: "Latur",
        state: "Maharashtra",
        lat: 18.8001396,
        lng: 76.0610379,
        branch: "Maharashtra",
        email: "",
        hide: "false"
    }, {
        address: "Office No.25, 2nd Floor, A - Wing, Kamla Cross, Opposite Pimpri- Chinchwad Mahanagar Palika, Finolex chowk, Pimpri, Pune - 411017",
        contact: "(91)-7028047262",
        city: "Pimpri",
        state: "Maharashtra",
        lat: 18.628516,
        lng: 73.8025867,
        branch: "Maharashtra",
        email: "",
        hide: "false"
    }, {
        address: "Plot No-6, Near Yash Appt, Nagar- Manmad Road, Savedi Naka, Ahmednagar - 414001",
        contact: "(91)-9175093904",
        city: "Ahmednagar",
        state: "Maharashtra",
        lat: 19.1183779,
        lng: 74.7249857,
        branch: "Maharashtra",
        email: "vishal.waghchaure@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Integrated Assets Finance Ltd. : 2, Bhagirathi Complex, Durga Chowk, Opp. Indraprasth Tower, Akola - 444005.",
        contact: "(91)-9764777680",
        city: "Akola",
        state: "Maharashtra",
        lat: 20.7259014,
        lng: 76.9730566,
        branch: "Maharashtra",
        email: "alpa.trivedi@ffsil.com",
        hide: "false"
    }, {
        address: "0240-2340581 / 83, 2Nd Floor, Ethibiz Tower (Kandi Tower), Jalna Road, Aurangabad -431001",
        contact: "(91)-9850968987",
        city: "Aurangabad",
        state: "Maharashtra",
        lat: 19.87574,
        lng: 75.3371,
        branch: "Maharashtra",
        email: "pankaj@ffsil.com",
        hide: "false"
    }, {
        address: "Shop No. 54, Survey No. 427, Bhd. Hotel Sapna, Ajintha Chowfully, A/P-Tal-Dist – Jalgaon 425001",
        contact: "(91)-8888856199",
        city: "Aurangabad",
        state: "Maharashtra",
        lat: 21.00303,
        lng: 75.5747412,
        branch: "Maharashtra",
        email: "sandeep.wagh@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Integrated Assets Finance Ltd. : Haripriya Plaza, Shop No.Gs-3, Rajaram Road, Near Dominoz Pizza,Kolhapur",
        contact: "(91)-9850999264",
        city: "Kolhapur",
        state: "Maharashtra",
        lat: 16.6958974,
        lng: 74.2157887,
        branch: "Maharashtra",
        email: "pravin.bhagale@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Integrated Assets Finance Limited., 2Nd Floor, Parvati Tower, Indora Square, Beside Jaswant Tuli Maul, Kamptee Road, Nagpur-440017",
        contact: "(91)-9921004620 ",
        city: "Nagpur(New)",
        state: "Maharashtra",
        lat: 21.1774198,
        lng: 79.1045938,
        branch: "Maharashtra",
        email: "sharad.bhope@ffsil.com",
        hide: "false"
    }, {
        address: "Sunil Plaza 1St Floor, Near Tuljabhavani Stadium, Osmanabad. - 413 501.",
        contact: "(91)-8806070650",
        city: "Osmanabad",
        state: "Maharashtra",
        lat: 18.1866268,
        lng: 76.0383497,
        branch: "Maharashtra",
        email: "santosh.agase@ffsil.com",
        hide: "false"
    }, {
        address: "Fortune Integrated Asset Finance Ltd. : 3Rd Floor Kothari Complex , Nr Garima Housing Finance Ltd, Shivaji Nagar Nanded",
        contact: "(91)-9822082714",
        city: "Nanded",
        state: "Maharashtra",
        lat: 19.1652535,
        lng: 77.3031915,
        branch: "Maharashtra",
        email: "sanjay.mamulwar@ffsil.com",
        hide: "false"
    }, {
        address: "Shop No. 1 ,Unity Park, Opp. Vasan Eye Care Hospital,Near Baba Travel,Mumbai Naka, Nasik - 422009.",
        contact: "(91)-9960530304",
        city: "Nasik",
        state: "Maharashtra",
        lat: 19.986971,
        lng: 73.7829933,
        branch: "Maharashtra",
        email: "sumit.paithane@ffsil.com",
        hide: "false"
    }, {
        address: "Tejasvita Aprt,G/6 Vidhyamandir Marg,Off Ambadi road  Beside Sai Baba mandir Vasai (West) Dist -Palghar pin 401202",
        contact: "(91)-9833969906/8108100770",
        city: "Vasai",
        state: "Maharashtra",
        lat: 19.3674023,
        lng: 72.764867,
        branch: "Maharashtra",
        email: "dinesh.singh@ffsil.com",
        hide: "false"
    }, {
        address: "Intime Equities Limited, Naman Midtown 'A' Wing, 20th Floor, Senapati Bapat Marg, Elphinstone Road, Mumbai - 400 013 ",
        contact: "022-4027 3600",
        city: "Mumbai",
        state: "Maharashtra",
        lat: 19.012371,
        lng: 72.8287583,
        branch: "Maharashtra",
        email: "compliance@ffsil.com",
        hide: "true"
    }, {
        address: "SC0 No.3, 1st & 2nd Floor, Bawa Building, Feroze Gandhi Market, Ludhiana, Pin code - 141001",
        contact: "(91)-161–6600800-836",
        city: "Ludhiana",
        state: "Punjab",
        lat: 30.9087615,
        lng: 75.7849802,
        branch: "Punjab",
        email: "ludhiana@ffsil.com",
        hide: "false"
    }, {
        address: "72–A, Tailor Road, Opp. AGA Heritage Club, Amritsar, Pin code - 143001 ",
        contact: "(91)-0183-5070012, 0183-5070018",
        city: "Amritsar",
        state: "Punjab",
        lat: 31.6340503,
        lng: 74.8441049,
        branch: "Punjab",
        email: "amritsar@ffsil.com",
        hide: "false"
    }, {
        address: "Ohri Tower, 14A, Model Town, G T Road Phagwara, Pin code - 144401",
        contact: "(91)-1824–468500–08",
        city: "Phagwara",
        state: "Punjab",
        lat: 31.2439123,
        lng: 75.801658,
        branch: "Punjab",
        email: "phagwara@ffsil.com",
        hide: "false"
    },{
        address: "Rampa Centerpoint, 3rd Floor, Above KFC Restaurant, Model Town Market,Jalandhar – 144002",
        contact: "(91)–181–4691013",
        city: "Jalandhar",
        state: "Punjab",
        lat: 31.3108111,
        lng: 75.4656903,
        branch: "Punjab",
        email: "gtroad@ffsil.com",
        hide: "false"
    }, {
        address: "First Floor, Fortune Tower, Above Easy Day, Opp.Power House, Dhangu Road, Pin code - 145001",
        contact: "(91)-186–5082500–06",
        city: "pathankot",
        state: "Punjab",
        lat: 32.3189331,
        lng: 75.5882826,
        branch: "Punjab",
        email: "pathankot@ffsil.com",
        hide: "false"
    }, {
        address: "207-208 2nd Floor, Luhadia Tower, Ashok Marg, C-Scheme, Jaipur, Pin code- 302001",
        contact: "(91)-0141–5195500",
        city: "Jaipur",
        state: "Rajasthan",
        lat: 26.9216094,
        lng: 75.7878556,
        branch: "Rajasthan",
        email: "jaipur@ffsil.com",
        hide: "false"
    }, {
        address: "M R Tower  1 st floor,Sardarpura 5th Road Road, Frount of Old Kohinoor Cinema,Umaid Hospital Road,Jodhpur -342001",
        contact: "",
        city: "Jodhpur",
        state: "Madhya Pradesh",
        lat: 26.2868981,
        lng: 73.0061625,
        branch: "Madhya Pradesh",
        email: "",
        hide: "false"
    }, {
        address: "Balbir Bhawan, Mez floor,227 MP Nagar Zone 2, 227 MP Nagar Zone 2,Bhopal MP -462011",
        contact: "",
       city: "Bhopal",
        state: "Madhya Pradesh",
        lat: 23.2301113,
        lng: 77.4329603,
        branch: "Madhya Pradesh",
        email: "saurabh.rastogi@ffsil.com",
        hide: "false"
    },{
        address: "SCO No. 4-5, Second Floor, Sector 9-D, Chandigarh, Punjab - 160020",
        contact: "0172-4695600/611/607/605",
        city: "Chandigarh",
        state: "Punjab",
        lat: 30.7279723,
        lng: 76.7423202,
        branch: "Chandigarh",
        email: "chandigarh@ffsil.com",
        hide: "false"
    },
    {
        address: "1st Floor, Bajaj complex, Above Axis bank, Mahadev Ghat Road, Sundar Nagar , Raipur, Chattisgarh – 492001",
        contact: "",
        city: "Chandigarh",
        state: "Punjab",
        lat: 21.2320058,
        lng: 81.6013045,
        branch: "Chandigarh",
        email: "chandigarh@ffsil.com",
        hide: "false"
    },
     {
        address: "Pratima Villa(M.I.G) 8M/69,Bahadurpur Housing Colony, Kankarbagh, Patna-800026",
        contact: "+91 9661774911",
        city: "Bahadurpur-bariya",
        state: "Bihar",
        lat: 25.5868204,
        lng: 85.1598774,
        branch: "Bihar",
        email: "raushan.kumar@ffsil.com",
        hide: "false"
    }, {
        address: "Indraprasth Nagar, Opposite Dinkar Nagar, Manjholiya, Muzaffapur, Bihar-843146",
        contact: "+91 8356975216",
        city: "Muzaffarpur",
        state: "Bihar",
        lat: 26.11099094,
        lng: 85.3599269,
        branch: "Bihar",
        email: "",
        hide: "false"
    }, {
        address: "Maharani Complex, 1st Floor near Hari Om Petrol Pump, Anisabad, Patna-800002",
        contact: "+91 7563060330",
        city: "Danapur",
        state: "Bihar",
        lat: 25.5789347,
        lng: 85.0339032,
        branch: "Bihar",
        email: "shashi.kumar@ffsil.com",
        hide: "false"
    }, {
        address: "Union Complex, South Bazar, Kannur, 670002.",
        contact: "+91 9447407067",
        city: "Kannur",
        state: "Kerala",
        lat: 11.8793796,
        lng: 75.3665161,
        branch: "Kerala",
        email: "roopeshchandra.kr@ffsil.com",
        hide: "false"
    }, {
        address: "Shop No- 82, Haji M Bawa Sahib Commercial Complex, Ambujavilasam Road, Thiruvananthapuram 695001.",
        contact: "+91 8129060824",
        city: "Thiruvananthapuram",
        state: "Kerala",
        lat: 8.4946258,
        lng: 76.9453087,
        branch: "Kerala",
        email: "sumesh.s@ffsil.com",
        hide: "false"
    }, {
        address: "Peekey Arcade, A K Road, Down Hill Po, Malappuram Dist. Kerala",
        contact: "+91 9539011438",
        city: "Malappuram",
        state: "Kerala",
        lat: 11.0619033,
        lng: 76.0508822,
        branch: "Kerala",
        email: "anoop.t@ffsil.com",
        hide: "false"
    }, {
        address: "1st Floor, Panattu Square, Pukkattupady Road, Edappally Toll Junction, Edappally P O, Ernakulam, Kerala - 6820241",
        contact: "+91 9446 222277",
        city: "Ernakulam",
        state: "Kerala",
        lat: 10.028979,
        lng: 76.3085135,
        branch: "Kerala",
        email: "nitin.jos@ffsil.com",
        hide: "false"
    }, {
        address: "Manimuriyil Centre, 2nd Floor,Bank Road, Opp. Fathima Hospital Bus Stop, Calicut, Kerala - 673001",
        contact: "0495-4099950, +91 9744585767",
        city: "Calicut",
        state: "Kerala",
        lat: 11.2633432,
        lng: 75.7793175,
        branch: "Kerala",
        email: "deepak.kk@ffsil.com",
        hide: "false"
    }];
$(document).ready(function () {
    $(".location select").val("Maharashtra"), addDisplay("Maharashtra"), $(".addressList").mCustomScrollbar({
        autoHideScrollbar: !1
    }), $(".location select").change(function () {
        var a = $(this).val();
        ChangeCity(a), addDisplay(a), $(".addressList").mCustomScrollbar("destroy"), $(".addressList").mCustomScrollbar({
            autoHideScrollbar: !1
        })
    })
}), google.maps.event.addDomListener(window, "load", initialize), !function (a, b) {
    "use strict";
    "undefined" != typeof module && module.exports ? module.exports = b(require("jquery")) : "function" == typeof define && define.amd ? define(["jquery"], function (a) {
        return b(a)
    }) : b(a.jQuery)
} (this, function (a) {
    "use strict";
    var b = function (c, d) {
        this.$element = a(c), this.options = a.extend({}, b.defaults, d), this.matcher = this.options.matcher || this.matcher, this.sorter = this.options.sorter || this.sorter, this.select = this.options.select || this.select, this.autoSelect = "boolean" != typeof this.options.autoSelect || this.options.autoSelect, this.highlighter = this.options.highlighter || this.highlighter, this.render = this.options.render || this.render, this.updater = this.options.updater || this.updater, this.displayText = this.options.displayText || this.displayText, this.source = this.options.source, this.delay = this.options.delay, this.$menu = a(this.options.menu), this.$appendTo = this.options.appendTo ? a(this.options.appendTo) : null, this.fitToElement = "boolean" == typeof this.options.fitToElement && this.options.fitToElement, this.shown = !1, this.listen(), this.showHintOnFocus = ("boolean" == typeof this.options.showHintOnFocus || "all" === this.options.showHintOnFocus) && this.options.showHintOnFocus, this.afterSelect = this.options.afterSelect, this.addItem = !1, this.value = this.$element.val() || this.$element.text()
    };
    b.prototype = {
        constructor: b,
        select: function () {
            var a = this.$menu.find(".active").data("value");
            if (this.$element.data("active", a), this.autoSelect || a) {
                var b = this.updater(a);
                b || (b = ""), this.$element.val(this.displayText(b) || b).text(this.displayText(b) || b).change(), this.afterSelect(b)
            }
            return this.hide()
        },
        updater: function (a) {
            return a
        },
        setSource: function (a) {
            this.source = a
        },
        show: function () {
            var b, c = a.extend({}, this.$element.position(), {
                height: this.$element[0].offsetHeight
            }),
                d = "function" == typeof this.options.scrollHeight ? this.options.scrollHeight.call() : this.options.scrollHeight;
            if (this.shown ? b = this.$menu : this.$appendTo ? (b = this.$menu.appendTo(this.$appendTo), this.hasSameParent = this.$appendTo.is(this.$element.parent())) : (b = this.$menu.insertAfter(this.$element), this.hasSameParent = !0), !this.hasSameParent) {
                b.css("position", "fixed");
                var e = this.$element.offset();
                c.top = e.top, c.left = e.left
            }
            var f = a(b).parent().hasClass("dropup"),
                g = f ? "auto" : c.top + c.height + d,
                h = a(b).hasClass("dropdown-menu-right"),
                i = h ? "auto" : c.left;
            return b.css({
                top: g,
                left: i
            }).show(), this.options.fitToElement === !0 && b.css("width", this.$element.outerWidth() + "px"), this.shown = !0, this
        },
        hide: function () {
            return this.$menu.hide(), this.shown = !1, this
        },
        lookup: function (b) {
            if ("undefined" != typeof b && null !== b ? this.query = b : this.query = this.$element.val() || this.$element.text() || "", this.query.length < this.options.minLength && !this.options.showHintOnFocus) return this.shown ? this.hide() : this;
            var c = a.proxy(function () {
                a.isFunction(this.source) ? this.source(this.query, a.proxy(this.process, this)) : this.source && this.process(this.source)
            }, this);
            clearTimeout(this.lookupWorker), this.lookupWorker = setTimeout(c, this.delay)
        },
        process: function (b) {
            var c = this;
            return b = a.grep(b, function (a) {
                return c.matcher(a)
            }), b = this.sorter(b), b.length || this.options.addItem ? (b.length > 0 ? this.$element.data("active", b[0]) : this.$element.data("active", null), this.options.addItem && b.push(this.options.addItem), "all" == this.options.items ? this.render(b).show() : this.render(b.slice(0, this.options.items)).show()) : this.shown ? this.hide() : this
        },
        matcher: function (a) {
            var b = this.displayText(a);
            return ~b.toLowerCase().indexOf(this.query.toLowerCase())
        },
        sorter: function (a) {
            for (var b, c = [], d = [], e = []; b = a.shift(); ) {
                var f = this.displayText(b);
                f.toLowerCase().indexOf(this.query.toLowerCase()) ? ~f.indexOf(this.query) ? d.push(b) : e.push(b) : c.push(b)
            }
            return c.concat(d, e)
        },
        highlighter: function (a) {
            var b = this.query;
            if ("" === b) return a;
            var c, d = a.match(/(>)([^<]*)(<)/g),
                e = [],
                f = [];
            if (d && d.length)
                for (c = 0; c < d.length; ++c) d[c].length > 2 && e.push(d[c]);
            else e = [], e.push(a);
            b = b.replace(/[\(\)\/\.\*\+\?\[\]]/g, function (a) {
                return "\\" + a
            });
            var g, h = new RegExp(b, "g");
            for (c = 0; c < e.length; ++c) g = e[c].match(h), g && g.length > 0 && f.push(e[c]);
            for (c = 0; c < f.length; ++c) a = a.replace(f[c], f[c].replace(h, "<strong>$&</strong>"));
            return a
        },
        render: function (b) {
            var c = this,
                d = this,
                e = !1,
                f = [],
                g = c.options.separator;
            return a.each(b, function (a, c) {
                a > 0 && c[g] !== b[a - 1][g] && f.push({
                    __type: "divider"
                }), !c[g] || 0 !== a && c[g] === b[a - 1][g] || f.push({
                    __type: "category",
                    name: c[g]
                }), f.push(c)
            }), b = a(f).map(function (b, f) {
                if ("category" == (f.__type || !1)) return a(c.options.headerHtml).text(f.name)[0];
                if ("divider" == (f.__type || !1)) return a(c.options.headerDivider)[0];
                var g = d.displayText(f);
                return b = a(c.options.item).data("value", f), b.find("a").html(c.highlighter(g, f)), g == d.$element.val() && (b.addClass("active"), d.$element.data("active", f), e = !0), b[0]
            }), this.autoSelect && !e && (b.filter(":not(.dropdown-header)").first().addClass("active"), this.$element.data("active", b.first().data("value"))), this.$menu.html(b), this
        },
        displayText: function (a) {
            return "undefined" != typeof a && "undefined" != typeof a.name ? a.name : a
        },
        next: function (b) {
            var c = this.$menu.find(".active").removeClass("active"),
                d = c.next();
            d.length || (d = a(this.$menu.find("li")[0])), d.addClass("active")
        },
        prev: function (a) {
            var b = this.$menu.find(".active").removeClass("active"),
                c = b.prev();
            c.length || (c = this.$menu.find("li").last()), c.addClass("active")
        },
        listen: function () {
            this.$element.on("focus", a.proxy(this.focus, this)).on("blur", a.proxy(this.blur, this)).on("keypress", a.proxy(this.keypress, this)).on("input", a.proxy(this.input, this)).on("keyup", a.proxy(this.keyup, this)), this.eventSupported("keydown") && this.$element.on("keydown", a.proxy(this.keydown, this)), this.$menu.on("click", a.proxy(this.click, this)).on("mouseenter", "li", a.proxy(this.mouseenter, this)).on("mouseleave", "li", a.proxy(this.mouseleave, this)).on("mousedown", a.proxy(this.mousedown, this))
        },
        destroy: function () {
            this.$element.data("typeahead", null), this.$element.data("active", null), this.$element.off("focus").off("blur").off("keypress").off("input").off("keyup"), this.eventSupported("keydown") && this.$element.off("keydown"), this.$menu.remove(), this.destroyed = !0
        },
        eventSupported: function (a) {
            var b = a in this.$element;
            return b || (this.$element.setAttribute(a, "return;"), b = "function" == typeof this.$element[a]), b
        },
        move: function (a) {
            if (this.shown) switch (a.keyCode) {
                case 9:
                case 13:
                case 27:
                    a.preventDefault();
                    break;
                case 38:
                    if (a.shiftKey) return;
                    a.preventDefault(), this.prev();
                    break;
                case 40:
                    if (a.shiftKey) return;
                    a.preventDefault(), this.next()
            }
        },
        keydown: function (b) {
            this.suppressKeyPressRepeat = ~a.inArray(b.keyCode, [40, 38, 9, 13, 27]), this.shown || 40 != b.keyCode ? this.move(b) : this.lookup()
        },
        keypress: function (a) {
            this.suppressKeyPressRepeat || this.move(a)
        },
        input: function (a) {
            var b = this.$element.val() || this.$element.text();
            this.value !== b && (this.value = b, this.lookup())
        },
        keyup: function (a) {
            if (!this.destroyed) switch (a.keyCode) {
                case 40:
                case 38:
                case 16:
                case 17:
                case 18:
                    break;
                case 9:
                case 13:
                    if (!this.shown) return;
                    this.select();
                    break;
                case 27:
                    if (!this.shown) return;
                    this.hide()
            }
        },
        focus: function (a) {
            this.focused || (this.focused = !0, this.options.showHintOnFocus && this.skipShowHintOnFocus !== !0 && ("all" === this.options.showHintOnFocus ? this.lookup("") : this.lookup())), this.skipShowHintOnFocus && (this.skipShowHintOnFocus = !1)
        },
        blur: function (a) {
            this.mousedover || this.mouseddown || !this.shown ? this.mouseddown && (this.skipShowHintOnFocus = !0, this.$element.focus(), this.mouseddown = !1) : (this.hide(), this.focused = !1)
        },
        click: function (a) {
            a.preventDefault(), this.skipShowHintOnFocus = !0, this.select(), this.$element.focus(), this.hide()
        },
        mouseenter: function (b) {
            this.mousedover = !0, this.$menu.find(".active").removeClass("active"), a(b.currentTarget).addClass("active")
        },
        mouseleave: function (a) {
            this.mousedover = !1, !this.focused && this.shown && this.hide()
        },
        mousedown: function (a) {
            this.mouseddown = !0, this.$menu.one("mouseup", function (a) {
                this.mouseddown = !1
            } .bind(this))
        }
    };
    var c = a.fn.typeahead;
    a.fn.typeahead = function (c) {
        var d = arguments;
        return "string" == typeof c && "getActive" == c ? this.data("active") : this.each(function () {
            var e = a(this),
                f = e.data("typeahead"),
                g = "object" == typeof c && c;
            f || e.data("typeahead", f = new b(this, g)), "string" == typeof c && f[c] && (d.length > 1 ? f[c].apply(f, Array.prototype.slice.call(d, 1)) : f[c]())
        })
    }, b.defaults = {
        source: [],
        items: 8,
        menu: '<ul class="typeahead dropdown-menu" role="listbox"></ul>',
        item: '<li><a class="dropdown-item" href="#" role="option"></a></li>',
        minLength: 1,
        scrollHeight: 0,
        autoSelect: !0,
        afterSelect: a.noop,
        addItem: !1,
        delay: 0,
        separator: "category",
        headerHtml: '<li class="dropdown-header"></li>',
        headerDivider: '<li class="divider" role="separator"></li>'
    }, a.fn.typeahead.Constructor = b, a.fn.typeahead.noConflict = function () {
        return a.fn.typeahead = c, this
    }, a(document).on("focus.typeahead.data-api", '[data-provide="typeahead"]', function (b) {
        var c = a(this);
        c.data("typeahead") || c.typeahead(c.data())
    })
});