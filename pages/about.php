<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sacred Spaces - Rwanda Tourism</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <style>
        :root {
            --chic-green: #2E7D32;
            --chic-brown: #795548;
            --chic-black: #1a1a1a;
            --chic-white: #ffffff;
            --chic-gray: #f9f9f9;
        }

        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--chic-white);
            color: var(--chic-black);
            margin: 0;
            padding: 0;
        }

        /* Hero Section */
        header {
            text-align: center;
            padding: 80px 20px 40px;
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            margin-bottom: 10px;
            color: var(--chic-black);
        }

        .subtitle {
            color: var(--chic-brown);
            font-size: 1.1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Controls / Filters */
        .controls {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 60px;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: none;
            border: 1px solid #ddd;
            padding: 12px 30px;
            font-family: 'Lato', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active, .filter-btn:hover {
            border-color: var(--chic-green);
            background-color: var(--chic-green);
            color: white;
        }

        /* District Dropdown (Styled) */
        select.district-select {
            padding: 12px 20px;
            border: 1px solid var(--chic-brown);
            background: white;
            color: var(--chic-brown);
            font-family: 'Lato', sans-serif;
            font-size: 1rem;
            cursor: pointer;
        }

        /* Grid Layout */
        .places-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto 100px;
            padding: 0 20px;
        }

        /* The Card */
        .place-card {
            background: white;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .place-card:hover {
            transform: translateY(-5px);
            border-bottom: 3px solid var(--chic-green);
        }

        .card-image {
            height: 250px;
            background-color: #eee;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .card-details {
            padding: 25px 0;
        }

        .type-tag {
            font-size: 0.75rem;
            color: var(--chic-brown);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 700;
        }

        .place-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin: 10px 0 5px;
            color: var(--chic-black);
        }

        .place-location {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Features List */
        .features {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .feature-badge {
            font-size: 0.8rem;
            padding: 5px 10px;
            background-color: #f4f4f4;
            color: #333;
            border-radius: 4px;
        }

        .feature-badge.lang {
            background-color: #e8f5e9; /* Light Green */
            color: var(--chic-green);
        }

    </style>
</head>
<body>

    <header>
        <span class="subtitle">Discover Rwanda</span>
        <h1>Sanctuaries & Spirit</h1>
        <p>A curated guide to the historic churches and mosques of the Land of a Thousand Hills.</p>
    </header>

    <div class="controls">
        <select class="district-select" onchange="filterDistrict(this.value)">
            <option value="kigali">Kigali City</option>
            <option value="rubavu">Rubavu District</option>
            <option value="musanze">Musanze District</option>
            <option value="huye">Huye District</option>
        </select>

        <button class="filter-btn active" onclick="filterType('all')">All</button>
        <button class="filter-btn" onclick="filterType('church')">Churches</button>
        <button class="filter-btn" onclick="filterType('mosque')">Mosques</button>
    </div>

    <div class="places-grid" id="grid">
       
        <div class="place-card church kigali">
            <div class="card-image" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Kigali_Arena.jpg/800px-Kigali_Arena.jpg')">
                </div>
            <div class="card-details">
                <span class="type-tag">Christian • Pentecostal</span>
                <h3 class="place-name">Christian Life Assembly</h3>
                <div class="place-location">📍 Nyarutarama, Kigali</div>
                <div class="features">
                    <span class="feature-badge lang">🇬🇧 English Service</span>
                    <span class="feature-badge">Modern</span>
                    <span class="feature-badge">Ample Parking</span>
                </div>
            </div>
        </div>

        <div class="place-card mosque kigali">
            <div class="card-image" style="background-image: url('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/96/34/06/mosque.jpg?w=800&h=600&s=1')"></div>
            <div class="card-details">
                <span class="type-tag">Islamic • Sunni</span>
                <h3 class="place-name">Al-Madina Mosque</h3>
                <div class="place-location">📍 Nyamirambo, Kigali</div>
                <div class="features">
                    <span class="feature-badge lang">🇸🇦 Arabic / 🇷🇼 Kinyarwanda</span>
                    <span class="feature-badge">Historic Area</span>
                    <span class="feature-badge">Community Hub</span>
                </div>
            </div>
        </div>

        <div class="place-card church kigali">
            <div class="card-image" style="background-image: url('https://live.staticflickr.com/3910/14420223755_c635390729_b.jpg')"></div>
            <div class="card-details">
                <span class="type-tag">Christian • Catholic</span>
                <h3 class="place-name">St. Michel Cathedral</h3>
                <div class="place-location">📍 Kiyovu, Kigali</div>
                <div class="features">
                    <span class="feature-badge lang">🇫🇷 French / 🇷🇼 Kinyarwanda</span>
                    <span class="feature-badge">Architectural Landmark</span>
                </div>
            </div>
        </div>

         <div class="place-card church musanze" style="display:none">
            <div class="card-image" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/9/98/Ruhengeri_Cathedral.jpg')"></div>
            <div class="card-details">
                <span class="type-tag">Christian • Catholic</span>
                <h3 class="place-name">Ruhengeri Cathedral</h3>
                <div class="place-location">📍 Musanze Center</div>
                <div class="features">
                    <span class="feature-badge">Historic</span>
                    <span class="feature-badge">Mass Daily</span>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Simple Filtering Logic
        function filterType(type) {
            let cards = document.querySelectorAll('.place-card');
           
            // Update active button state
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            cards.forEach(card => {
                // We check if the card is currently visible in the district first?
                // For simplicity, let's just show/hide based on type for now.
                if (type === 'all' || card.classList.contains(type)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function filterDistrict(district) {
            let cards = document.querySelectorAll('.place-card');
            cards.forEach(card => {
                if (card.classList.contains(district)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
       
        // Initialize: Show Kigali Only
        filterDistrict('kigali');
    </script>
</body>
</html>
