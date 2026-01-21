<body>
    <style>
            /* --- 1. RESET & FONTS --- */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #FFFFFF;
            color: #111;
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }

        /* --- 2. HERO SECTION --- */
        .parallax-hero {
            height: 70vh;
            /* Slightly shorter for tourism feel */
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5)), url('images/hero.jpg');
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin: 10px 0;
            font-weight: 800;
        }

        .highlight {
            color: #00A859;
        }

        /* Rwanda Green */

        /* --- 3. SPOTLIGHT SECTION (The "Must Visit" Slider) --- */
        .spotlight-section {
            padding: 60px 0;
            background: #FAFAFA;
        }

        .section-header {
            padding: 0 40px;
            margin-bottom: 20px;
        }

        .section-header h2 {
            font-size: 2rem;
            margin-bottom: 5px;
        }

        .spotlight-wrapper {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding: 20px 40px 40px 40px;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
        }

        .spotlight-wrapper::-webkit-scrollbar {
            display: none;
        }

        .spotlight-card {
            flex: 0 0 350px;
            /* Fixed width cards, like an app */
            height: 450px;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            scroll-snap-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: transform 0.3s;
        }

        .spotlight-card:hover {
            transform: translateY(-5px);
        }

        .spotlight-bg {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        .spotlight-card:hover .spotlight-bg {
            transform: scale(1.1);
        }

        .spotlight-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
            color: white;
        }

        .badge {
            background: #00A859;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: bold;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 10px;
        }

        /* --- 4. THE GRID --- */
        .section-divider {
            text-align: center;
            margin: 60px 0 30px;
        }

        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .tab {
            padding: 10px 25px;
            border-radius: 30px;
            border: none;
            background: #F0F0F0;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .tab.active,
        .tab:hover {
            background: #111;
            color: #fff;
        }

        .places-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 40px 80px 40px;
        }

        /* --- 5. MODAL (Travel App Style) --- */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: #fff;
            width: 95%;
            max-width: 900px;
            height: 85vh;
            border-radius: 20px;
            display: flex;
            overflow: hidden;
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .modal-image {
            width: 50%;
            position: relative;
        }

        .modal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-badge-float {
            position: absolute;
            top: 20px;
            left: 20px;
            background: white;
            color: #111;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.8rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .modal-info {
            width: 50%;
            padding: 40px;
            overflow-y: auto;
        }

        .rating-row {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .stars {
            color: #FFD700;
            letter-spacing: 2px;
        }

        .status-pill {
            background: #E8F5E9;
            color: #2E7D32;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
            background: #F9F9F9;
            padding: 15px;
            border-radius: 10px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
            font-size: 0.9rem;
            color: #555;
        }

        .info-item i {
            color: #00A859;
        }

        #mini-map {
            width: 100%;
            height: 200px;
            background: #eee;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .btn-directions {
            display: block;
            width: 100%;
            text-align: center;
            padding: 15px;
            background: #00A859;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 10px;
            transition: 0.3s;
        }

        .btn-directions:hover {
            background: #008f4c;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 35px;
            height: 35px;
            background: white;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .modal-content {
                flex-direction: column;
                height: 95vh;
            }

            .modal-image {
                height: 250px;
                width: 100%;
            }

            .modal-info {
                width: 100%;
                padding: 25px;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }
        }
    </style>
    <div class="parallax-hero">
        <div class="hero-content reveal">
            <span class="tag-line">Visit Rwanda</span>
            <h1>Explore Our <br><span class="highlight">Heritage Sites</span></h1>
            <p>Discover museums, palaces, and memorials that shape our nation.<br>Plan your journey today.</p>
        </div>
    </div>

    <div class="rwanda-history-container">

        <div class="spotlight-section reveal">
            <div class="section-header">
                <h2>🔥 Must-Visit Destinations</h2>
                <p>Top-rated cultural sites chosen by travelers.</p>
            </div>

            <div class="spotlight-wrapper">
                <div class="spotlight-card" onclick="document.getElementById('places-grid').scrollIntoView({behavior: 'smooth'})">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/King%27s_Palace%2C_Nyanza%2C_Rwanda.jpg/800px-King%27s_Palace%2C_Nyanza%2C_Rwanda.jpg" alt="King's Palace" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">Cultural Gem</span>
                        <h3>King's Palace Nyanza</h3>
                        <p>See the royal Inyambo cows and traditional architecture.</p>
                    </div>
                </div>

                <div class="spotlight-card" onclick="document.getElementById('places-grid').scrollIntoView({behavior: 'smooth'})">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Kigali_Genocide_Memorial_Centre.jpg/800px-Kigali_Genocide_Memorial_Centre.jpg" alt="Kigali Memorial" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">Top Rated</span>
                        <h3>Kigali Genocide Memorial</h3>
                        <p>A powerful place of remembrance and peace education.</p>
                    </div>
                </div>

                <div class="spotlight-card" onclick="document.getElementById('places-grid').scrollIntoView({behavior: 'smooth'})">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Rwanda_National_Museum.jpg/1024px-Rwanda_National_Museum.jpg" alt="Ethnographic Museum" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">Best Museum</span>
                        <h3>Ethnographic Museum</h3>
                        <p>Explore Rwanda's finest collection of artifacts in Huye.</p>
                    </div>
                </div>

                <div class="spotlight-card" onclick="document.getElementById('places-grid').scrollIntoView({behavior: 'smooth'})">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Kandt_House_Museum_of_Natural_History.jpg/800px-Kandt_House_Museum_of_Natural_History.jpg" alt="Kandt House" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">History</span>
                        <h3>Kandt House Museum</h3>
                        <p>Discover the colonial history and evolution of Kigali.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-divider reveal">
            <h2>Find Your Next Stop</h2>
            <div class="filter-tabs">
                <button class="tab active" onclick="filterSelection('all')">Show All</button>
                <button class="tab" onclick="filterSelection('Memorial')">Memorials</button>
                <button class="tab" onclick="filterSelection('Museum')">Museums</button>
            </div>
        </div>

        <div class="places-grid" id="places-grid"></div>

    </div>

    <div id="site-modal" class="modal-overlay">
        <div class="modal-content">
            <button class="close-btn" onclick="closeModal()">×</button>
            
            <div class="modal-image">
                <img id="modal-img" src="" alt="">
                <div class="modal-badge-float" id="modal-cat-badge">Museum</div>
            </div>

            <div class="modal-info">
                <h2 id="modal-title">Site Name</h2>
                <div class="rating-row">
                    <span class="stars">★★★★★</span>
                    <span class="status-pill open">Open Now</span>
                </div>
                
                <p id="modal-desc" class="desc-text">Description...</p>

                <div class="info-grid">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span id="modal-hours">8:00 AM - 5:00 PM</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span id="modal-loc">Kigali City</span>
                    </div>
                </div>

                <div id="mini-map"></div>

                <a href="#" id="modal-directions" target="_blank" class="btn-directions">
                    <i class="fas fa-location-arrow"></i> Get Directions
                </a>
            </div>
        </div>
    </div>

    <script src="js/historics.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE&callback=initMap"></script>
</body>