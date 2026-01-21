<?php
// 1. Include the standard head
// This includes Bootstrap, FontAwesome, and your global style.css
include __DIR__ . '/../include/head.php';
?>

<link rel="stylesheet" href="../assets/css/historic.css">

<body>
    <?php include __DIR__ . '/../include/preloader.php'; ?>
    <?php include __DIR__ . '/../include/nav.php'; ?>

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
                <div class="spotlight-card"
                    onclick="document.getElementById('places-grid').scrollIntoView({behavior: 'smooth'})">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/King%27s_Palace%2C_Nyanza%2C_Rwanda.jpg/800px-King%27s_Palace%2C_Nyanza%2C_Rwanda.jpg"
                        alt="King's Palace" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">Cultural Gem</span>
                        <h3>King's Palace Nyanza</h3>
                        <p>See the royal Inyambo cows and traditional architecture.</p>
                    </div>
                </div>
                <div class="spotlight-card"
                    onclick="document.getElementById('places-grid').scrollIntoView({behavior: 'smooth'})">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Kigali_Genocide_Memorial_Centre.jpg/800px-Kigali_Genocide_Memorial_Centre.jpg"
                        alt="Kigali Memorial" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">Top Rated</span>
                        <h3>Kigali Genocide Memorial</h3>
                    </div>
                </div>
                <div class="spotlight-card"
                    onclick="document.getElementById('places-grid').scrollIntoView({behavior: 'smooth'})">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Rwanda_National_Museum.jpg/1024px-Rwanda_National_Museum.jpg"
                        alt="Ethno Museum" class="spotlight-bg">
                    <div class="spotlight-overlay">
                        <span class="badge">Best Museum</span>
                        <h3>Ethnographic Museum</h3>
                    </div>
                </div>
                <div class="spotlight-card"
                    onclick="document.getElementById('places-grid').scrollIntoView({behavior: 'smooth'})">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Kandt_House_Museum_of_Natural_History.jpg/800px-Kandt_House_Museum_of_Natural_History.jpg"
                        alt="Kandt House" class="spotlight-bg">
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
                        <i class="fas fa-star text-warning"></i>
                        <span>4.8</span>
                    </div>
                </div>
                <div class="status-row">
                    <span class="status-pill open"><i class="fas fa-clock"></i> Open Now</span>
                    <span class="status-pill location"><i class="fas fa-map-pin"></i> <span
                            id="modal-loc">Kigali</span></span>
                </div>
                <hr class="divider">
                <div class="modal-description">
                    <h3>About this place</h3>
                    <p id="modal-desc">Description...</p>
                </div>
                <div class="info-box">
                    <div class="info-row">
                        <div class="icon-box"><i class="fas fa-calendar-alt"></i></div>
                        <div><strong>Opening Hours</strong>
                            <p id="modal-hours">8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="map-action-area">
                    <div id="mini-map"></div>
                    <a href="#" id="modal-directions" target="_blank" class="btn-action">
                        <div class="btn-text"><span>Get Directions</span></div>
                        <div class="btn-icon"><i class="fas fa-location-arrow"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/historics.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>