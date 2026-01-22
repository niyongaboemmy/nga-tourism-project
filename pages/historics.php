
<link rel="stylesheet" href="assets/css/historic.css">

<body>
    <?php include __DIR__ . '/../include/preloader.php'; ?>

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
                <h2>Must-Visit Destinations</h2>
                <p>Top-rated cultural sites chosen by travelers.</p>
            </div>
            
            <div class="spotlight-wrapper">
                <div class="spotlight-card" onclick="openModalById(2)">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/King%27s_Palace%2C_Nyanza%2C_Rwanda.jpg/800px-King%27s_Palace%2C_Nyanza%2C_Rwanda.jpg" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">Cultural Gem</span>
                        <h3>King's Palace Nyanza</h3>
                    </div>
                </div>
                <div class="spotlight-card" onclick="openModalById(1)">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Kigali_Genocide_Memorial_Centre.jpg/800px-Kigali_Genocide_Memorial_Centre.jpg" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">Top Rated</span>
                        <h3>Kigali Memorial</h3>
                    </div>
                </div>
                <div class="spotlight-card" onclick="openModalById(3)">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Rwanda_National_Museum.jpg/1024px-Rwanda_National_Museum.jpg" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">Best Museum</span>
                        <h3>Ethnographic Museum</h3>
                    </div>
                </div>
                 <div class="spotlight-card" onclick="openModalById(4)">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Kandt_House_Museum_of_Natural_History.jpg/800px-Kandt_House_Museum_of_Natural_History.jpg" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">History</span>
                        <h3>Kandt House Museum</h3>
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
        <div class="modal-card">
            <div class="modal-visuals">
                <img id="modal-img" src="" alt="Place Image">
                <button class="close-btn" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-badges">
                    <span id="modal-cat-badge" class="badge-blur">Category</span>
                </div>
            </div>
            <div class="modal-details">
                <div class="modal-header-row">
                    <h2 id="modal-title">Location Title</h2>
                    <div class="rating-box">
                        <i class="fas fa-star text-warning"></i> <span>4.8</span>
                    </div>
                </div>
                <div class="status-row">
                    <span class="status-pill open"><i class="fas fa-clock"></i> Open Now</span>
                    <span class="status-pill location"><i class="fas fa-map-pin"></i> <span id="modal-loc">Kigali</span></span>
                </div>
                <hr class="divider">
                <div class="modal-description">
                    <h3>About this place</h3>
                    <p id="modal-desc">Description...</p>
                </div>
                <div class="info-box">
                    <div class="info-row">
                        <div class="icon-box"><i class="fas fa-calendar-alt"></i></div>
                        <div><strong>Opening Hours</strong><p id="modal-hours">8:00 AM - 5:00 PM</p></div>
                    </div>
                </div>
                <div class="map-action-area">
                    <div id="mini-map"></div>
                    <a href="#" id="modal-directions" target="_blank" class="btn-action">
                        <div class="btn-text"><span>Get Directions</span><small>Open in Google Maps</small></div>
                        <div class="btn-icon"><i class="fas fa-location-arrow"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../include/footer.php'; ?>

    <script>
    /* --- DATA --- */
    const placesData = [
        {
            id: 1,
            name: "Kigali Genocide Memorial",
            category: "Memorial",
            desc: "The final resting place for more than 250,000 victims of the Genocide against the Tutsi.",
            hours: "8:00 AM - 4:00 PM (Open Daily)",
            location: "Gisozi, Kigali",
            img: "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Kigali_Genocide_Memorial_Centre.jpg/800px-Kigali_Genocide_Memorial_Centre.jpg",
            lat: -1.9301, lng: 30.0605
        },
        {
            id: 2,
            name: "King's Palace Museum",
            category: "Museum",
            desc: "A reconstruction of the traditional royal residence in Nyanza.",
            hours: "8:00 AM - 6:00 PM",
            location: "Nyanza District",
            img: "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/King%27s_Palace%2C_Nyanza%2C_Rwanda.jpg/800px-King%27s_Palace%2C_Nyanza%2C_Rwanda.jpg",
            lat: -2.3567, lng: 29.7495
        },
        {
            id: 3,
            name: "Ethnographic Museum",
            category: "Museum",
            desc: "Houses one of Africa's finest ethnographic collections.",
            hours: "9:00 AM - 6:00 PM",
            location: "Huye (Butare)",
            img: "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Rwanda_National_Museum.jpg/1024px-Rwanda_National_Museum.jpg",
            lat: -2.5967, lng: 29.7402
        },
        {
            id: 4,
            name: "Kandt House Museum",
            category: "Museum",
            desc: "Discover the colonial history and evolution of Kigali.",
            hours: "8:00 AM - 6:00 PM",
            location: "Kanombe, Kigali",
            img: "https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Kandt_House_Museum_of_Natural_History.jpg/800px-Kandt_House_Museum_of_Natural_History.jpg",
            lat: -1.9753, lng: 30.1730
        },
        {
            id: 5,
            name: "Murambi Memorial",
            category: "Memorial",
            desc: "A powerful memorial located in the Southern Province.",
            hours: "8:00 AM - 5:00 PM",
            location: "Nyamagabe",
            img: "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Murambi_Genocide_Memorial.jpg/800px-Murambi_Genocide_Memorial.jpg",
            lat: -2.4556, lng: 29.5678
        },
        {
            id: 6,
            name: "Campaign Against Genocide",
            category: "Museum",
            desc: "Located at the Parliament building, depicting the campaign to stop the genocide.",
            hours: "8:00 AM - 5:00 PM",
            location: "Kimihurura, Kigali",
            img: "https://live.staticflickr.com/65535/48598424266_5548657685_b.jpg",
            lat: -1.9536, lng: 30.0965
        }
    ];

    // --- RENDER GRID ---
    function renderCards(filter = 'all') {
        const grid = document.getElementById('places-grid');
        if(!grid) return;
        
        grid.innerHTML = '';
        
        placesData.forEach(place => {
            if (filter === 'all' || place.category === filter) {
                const card = document.createElement('div');
                card.className = 'spotlight-card'; 
                card.style.flex = 'none'; 
                card.style.height = '300px'; 
                
                card.innerHTML = `
                    <img src="${place.img}" alt="${place.name}" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge" style="font-size: 0.7rem;">${place.category}</span>
                        <h3 style="font-size: 1.5rem;">${place.name}</h3>
                    </div>
                `;
                card.onclick = function() { openModal(place); };
                grid.appendChild(card);
            }
        });
    }

    // --- FILTER ---
    function filterSelection(category) {
        const btns = document.querySelectorAll('.tab');
        btns.forEach(btn => btn.classList.remove('active'));
        // Safely add active class
        if(event && event.target) {
            event.target.classList.add('active');
        }
        renderCards(category);
    }

    // --- MODAL ---
    function openModal(place) {
        document.getElementById('modal-img').src = place.img;
        document.getElementById('modal-title').innerText = place.name;
        document.getElementById('modal-desc').innerText = place.desc;
        document.getElementById('modal-cat-badge').innerText = place.category;
        document.getElementById('modal-loc').innerText = place.location;
        document.getElementById('modal-hours').innerText = place.hours;
        
        // Google Maps Link
        const mapLink = "https://www.google.com/maps/search/?api=1&query=" + place.lat + "," + place.lng;
        document.getElementById('modal-directions').href = mapLink;
        
        document.getElementById('site-modal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    // Helper for spotlight cards to open modal by ID
    function openModalById(id) {
        const place = placesData.find(p => p.id === id);
        if(place) openModal(place);
    }

    function closeModal() {
        document.getElementById('site-modal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    window.onclick = function(event) {
        if (event.target == document.getElementById('site-modal')) {
            closeModal();
        }
    }

    // Init Grid
    document.addEventListener('DOMContentLoaded', () => {
        renderCards();
    });
    </script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>