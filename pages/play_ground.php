<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rwanda Sports & Play</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        :root {
            /* RWANDA VIBRANT PALETTE */
            --rw-green: #20603D;      
            --rw-green-light: #4F8F59; 
            --rw-blue: #00A1DE;       
            --rw-yellow: #FAD201;     
            
            --bg-color: #f8f9fa;
            --white: #ffffff;
            --text-dark: #1a1a1a;
            --text-grey: #555555;
            
            --shadow-card: 0 15px 35px rgba(32, 96, 61, 0.08);
            --shadow-hover: 0 25px 50px rgba(32, 96, 61, 0.15);
        }

        body {
            margin: 0;
            font-family: 'Space Grotesk', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Subtle Pattern Background */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: radial-gradient(var(--rw-green-light) 1px, transparent 1px);
            background-size: 30px 30px;
            opacity: 0.05;
            z-index: -1;
            pointer-events: none;
        }

        /* --- NAVIGATION --- */
        .main-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.2rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--rw-green);
            letter-spacing: -1px;
        }

        .logo span { color: var(--rw-blue); }
        
        /* --- HERO SECTION --- */
        .hero {
            text-align: center;
            padding: 5rem 2rem 3rem;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin: 0 0 1rem 0;
            font-weight: 800;
            line-height: 1.1;
            background: linear-gradient(135deg, var(--rw-green) 0%, var(--rw-blue) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--text-grey);
            max-width: 600px;
            margin: 0 auto;
        }

        /* --- FILTERS --- */
        .filter-section {
            margin: 2.5rem 0;
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
            padding: 0 1rem;
        }

        .filter-btn {
            padding: 0.8rem 1.8rem;
            border: 2px solid #eee;
            background: var(--white);
            color: var(--text-dark);
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .filter-btn:hover {
            border-color: var(--rw-green);
            color: var(--rw-green);
            transform: translateY(-2px);
        }

        .filter-btn.active {
            background: var(--rw-green);
            border-color: var(--rw-green);
            color: var(--white);
            box-shadow: 0 8px 20px rgba(32, 96, 61, 0.25);
        }

        /* --- GRID --- */
        .parks-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2rem;
            padding: 0 2rem 5rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .park-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: all 0.4s ease;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .park-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        /* Rwanda Flag Bar on Card */
        .park-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 6px;
            background: linear-gradient(90deg, var(--rw-blue) 33%, var(--rw-yellow) 33%, var(--rw-yellow) 66%, var(--rw-green) 66%);
            z-index: 2;
        }

        .park-img-container {
            width: 100%;
            height: 220px;
            overflow: hidden;
            background: #eee;
        }

        .park-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .park-card:hover .park-img-container img {
            transform: scale(1.1);
        }

        .park-info {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .badge-container {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 0.8rem;
        }

        .badge {
            font-size: 0.7rem;
            font-weight: 700;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            text-transform: uppercase;
        }

        .badge.city { background: rgba(0, 161, 222, 0.1); color: var(--rw-blue); }
        .badge.football { background: rgba(32, 96, 61, 0.1); color: var(--rw-green); }
        .badge.playground { background: rgba(250, 210, 1, 0.2); color: #b89800; }

        .park-info h3 {
            margin: 0 0 0.5rem 0;
            font-size: 1.4rem;
            color: var(--text-dark);
        }

        .park-info p {
            color: var(--text-grey);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .btn-visit {
            background: var(--text-dark);
            color: var(--white);
            border: none;
            padding: 0.9rem;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 600;
            width: 100%;
            transition: 0.3s;
        }

        .btn-visit:hover {
            background: var(--rw-green);
        }

        /* --- MODAL --- */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 20, 10, 0.6);
            backdrop-filter: blur(8px);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            animation: fadeIn 0.3s forwards;
        }

        .modal-card {
            background: var(--white);
            width: 100%;
            max-width: 500px;
            border-radius: 24px;
            padding: 2.5rem;
            position: relative;
            box-shadow: 0 25px 80px rgba(0,0,0,0.3);
            animation: slideUp 0.4s ease;
        }

        .close-btn {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: #f0f0f0;
            border: none;
            width: 35px; height: 35px;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            transition: 0.3s;
        }
        .close-btn:hover { background: var(--rw-yellow); transform: rotate(90deg); }

        /* Highlight Tags Style */
        .highlights-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        
        .highlight-tag {
            background: rgba(32, 96, 61, 0.08);
            color: var(--rw-green);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            border: 1px solid rgba(32, 96, 61, 0.1);
        }

        @keyframes fadeIn { to { opacity: 1; } }
        @keyframes slideUp { from { transform: translateY(40px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .parks-grid { grid-template-columns: 1fr; }
            .nav-container { flex-direction: column; gap: 1rem; }
        }
    </style>

    <nav class="main-nav"> 
        <div class="nav-container">
            <div class="logo">RW<span>SPORTS</span></div>
            <div style="font-weight: 500; color: var(--rw-green);">🇷🇼 Parks, Pitches & Play</div>
        </div>  
    </nav>

    <main>
        <header class="hero">
            <h1>Discover <span style="color:var(--rw-green)">Rwanda's</span><br>Best Outdoors</h1>
            <p>From national stadiums to community playgrounds.</p>
            
            <div class="filter-section">
                <button class="filter-btn active" onclick="filterData('all', event)">✨ View All (30)</button>
                <button class="filter-btn" onclick="filterData('football', event)">⚽ Stadiums (15)</button>
                <button class="filter-btn" onclick="filterData('playground', event)">🏃 Playgrounds (15)</button>
            </div>
        </header>

        <div id="parks-container" class="parks-grid"></div>
    </main>

    <div id="park-modal" class="modal-overlay">
        <div class="modal-card">
            <button class="close-btn" onclick="closeModal()">&times;</button>
            <div id="modal-content"></div>
        </div>
    </div>

    <script>
        // DATA: 15 Stadiums + 15 Playgrounds = 30 Total
        // Added 'highlights' array to every object
        const data = [
            /* --- FOOTBALL STADIUMS (15) --- */
            { 
                name: "Amahoro National Stadium", 
                type: "football", 
                city: "Kigali", 
                image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbnHabcaUv3kZsjfQlCnVQ9CmDhxUga035yA&s", 
                short: "The National Icon.", 
                expect: "Rwanda's largest stadium. Expect world-class facilities and Amavubi matches.",
                highlights: ["45,000 Seats", "Roofed Stand", "Night Lights", "VVIP Area", "Athletics Track"]
            },
            { 
                name: "Kigali Pelé Stadium", 
                type: "football", 
                city: "Nyamirambo", 
                image: "https://images.unsplash.com/photo-1577223625816-7546f13df25d?auto=format&fit=crop&w=800&q=80", 
                short: "The Fan Favorite.", 
                expect: "Known for the most intense atmosphere. Home of APR and Rayon Sports.",
                highlights: ["Artificial Turf", "High Intensity", "City View", "Renovated 2023", "Fan Zone"]
            },
            { 
                name: "Stade Huye", 
                type: "football", 
                city: "Huye", 
                image: "https://images.unsplash.com/photo-1529900748604-07564a03e7a6?auto=format&fit=crop&w=800&q=80", 
                short: "Pride of the South.", 
                expect: "A modern architectural gem. The second largest venue in Rwanda.",
                highlights: ["Modern Design", "Covered Stands", "International Standard", "Mukura VS Home", "Clean Facility"]
            },
            { 
                name: "Umuganda Stadium", 
                type: "football", 
                city: "Rubavu", 
                image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSeD49LmtbPz2ZfrF1fJZ9CG_zmwRBxhdD6w&s", 
                short: "Lakeside Football.", 
                expect: "Scenic stadium near Lake Kivu. Home to Marines FC and Etincelles.",
                highlights: ["Lake Breeze", "Natural Grass", "Tourist Hub", "Border City", "Weekend Vibes"]
            },
            { 
                name: "Musanze Stadium", 
                type: "football", 
                city: "Musanze", 
                image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_Q_VX4L5_bL6cs_-mzrBUuDU0BDQ2NbgJLQ&s", 
                short: "Ubworoherane Stadium.", 
                expect: "Home of Musanze FC. Known for its gritty matches and view of volcanoes.",
                highlights: ["Volcano View", "Passionate Fans", "Natural Grass", "Renovated Stands", "High Altitude"]
            },
            { 
                name: "Bugesera Stadium", 
                type: "football", 
                city: "Nyamata", 
                image: "https://www.teradignews.rw/wp-content/uploads/2019/08/ry6b9835-3.jpg", 
                short: "Bugesera FC's fortress.", 
                expect: "A tough ground for visitors due to the hot climate of the Eastern Province.",
                highlights: ["Hot Climate", "Artificial Turf", "New Facility", "Eastern Province", "Developing Area"]
            },
            { 
                name: "Muhanga Regional Stadium", 
                type: "football", 
                city: "Muhanga", 
                image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrf5zSMdtrQA0B8irLJAtH-G-PH7twu58OYw&s", 
                short: "The Central Hub.", 
                expect: "Home to AS Muhanga. A classic regional stadium with strong community support.",
                highlights: ["Central Location", "Grass Pitch", "Community Hub", "Historic Venue", "Accessible"]
            },
            { 
                name: "Nyagatare Stadium", 
                type: "football", 
                city: "Nyagatare", 
                image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPpsgXHqIBTz3M87AX9tgaq8eXrHcLhwnQ0Q&s", 
                short: "Sunrise FC Territory.", 
                expect: "Located in the flat plains of the East. Known for a competitive atmosphere.",
                highlights: ["Artificial Pitch", "Eastern Plains", "Sunrise FC Home", "Open Air", "Competitive"]
            },
            { 
                name: "Rusizi Stadium", 
                type: "football", 
                city: "Rusizi", 
                image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2NEWJcfFv-caMpXZj6V4Z9C-vN72Nahg3LA&s", 
                short: "Western Fortress.", 
                expect: "Home of Espoir FC. Difficult for visiting teams to get points here.",
                highlights: ["Border Town", "Tough Atmosphere", "Grass Pitch", "Espoir FC", "Far West"]
            },
            { 
                name: "Gicumbi Stadium", 
                type: "football", 
                city: "Byumba", 
                image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4iLmSQudEmT1cAFRO_tgiFwextoYya1MyXw&s", 
                short: "High Altitude.", 
                expect: "Home to Gicumbi FC. Cool weather and scenic hill views.",
                highlights: ["Very Cold", "Scenic Hills", "Grass Pitch", "Northern Province", "Challenging Terrain"]
            },
            { 
                name: "Mumena Stadium", 
                type: "football", 
                city: "Nyamirambo", 
                image: "https://images.unsplash.com/photo-1431324155629-1a6deb1dec8d?auto=format&fit=crop&w=800&q=80", 
                short: "Historic Ground.", 
                expect: "Home of Kiyovu Sports. A classic ground with deep history in Kigali.",
                highlights: ["Old School", "Kiyovu Sports", "Grass Pitch", "Nyamirambo Vibe", "Historic"]
            },
            { 
                name: "Ngoma Stadium", 
                type: "football", 
                city: "Ngoma", 
                image: "https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=800&q=80", 
                short: "Eastern Gem.", 
                expect: "Home to Etoile de l'Est. A developing ground with passionate local fans.",
                highlights: ["New Stand", "Artificial Turf", "Etoile de l'Est", "Growing Fanbase", "Clean"]
            },
            { 
                name: "Kicukiro Stadium", 
                type: "football", 
                city: "Kicukiro", 
                image: "https://images.unsplash.com/photo-1459865264687-595d652de67e?auto=format&fit=crop&w=800&q=80", 
                short: "IPRC Ground.", 
                expect: "Often used for second division games and youth tournaments.",
                highlights: ["University Ground", "Artificial Turf", "Youth Games", "Accessible", "Simple Stands"]
            },
            { 
                name: "Ferwafa Turf", 
                type: "football", 
                city: "Remera", 
                image: "https://images.unsplash.com/photo-1524012431247-53c4ca003c56?auto=format&fit=crop&w=800&q=80", 
                short: "Federation Pitch.", 
                expect: "Located next to Amahoro. Used for training and lower division league matches.",
                highlights: ["Training Ground", "Artificial Turf", "Hotel Nearby", "Central", "Official"]
            },
            { 
                name: "Rwamagana Police Pitch", 
                type: "football", 
                city: "Rwamagana", 
                image: "https://images.unsplash.com/photo-1510051640316-543e4b37b7d0?auto=format&fit=crop&w=800&q=80", 
                short: "Police FC Home.", 
                expect: "A well-maintained pitch in the East, often hosting Police FC home games.",
                highlights: ["Police FC", "Eastern Province", "Grass Pitch", "Secure", "Training Hub"]
            },

            /* --- PLAYGROUNDS (15) --- */
            { 
                name: "Tedga's Recreation", 
                type: "playground", 
                city: "Gahanga", 
                image: "https://images.unsplash.com/photo-1566454825413-886f280ec5d1?auto=format&fit=crop&w=800&q=80", 
                short: "Amusement Park.", 
                expect: "Bouncy castles, bumper cars, and pools. Perfect for kids' birthdays.",
                highlights: ["Bumper Cars", "Swimming Pool", "Kid Friendly", "Party Venue", "Food Court"]
            },
            { 
                name: "Ziggy Playground", 
                type: "playground", 
                city: "Kabeza", 
                image: "https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?auto=format&fit=crop&w=800&q=80", 
                short: "Eco-Play Area.", 
                expect: "Creative playground made from recycled materials. Very community focused.",
                highlights: ["Eco-Friendly", "Recycled Art", "Safe Zone", "Creative Play", "Local Vibe"]
            },
            { 
                name: "Juru Park", 
                type: "playground", 
                city: "Rebero", 
                image: "https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?auto=format&fit=crop&w=800&q=80", 
                short: "Park with a View.", 
                expect: "Gardens, kids play area, and the best sunset view in Kigali.",
                highlights: ["Sunset View", "Picnic Spots", "Hilltop", "Restaurant", "Relaxing"]
            },
            { 
                name: "Mamba Club", 
                type: "playground", 
                city: "Kimihurura", 
                image: "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=800&q=80", 
                short: "Bowling & Volley.", 
                expect: "Rwanda's only bowling alley, plus sand volleyball and a pool.",
                highlights: ["Bowling Alley", "Beach Volleyball", "Swimming Pool", "Bar & Grill", "Nightlife"]
            },
            { 
                name: "Spiderman Game Center", 
                type: "playground", 
                city: "Masaka", 
                image: "https://images.unsplash.com/photo-1595786729061-68953cb7d295?auto=format&fit=crop&w=800&q=80", 
                short: "Indoor Fun.", 
                expect: "Arcade games and soft play areas for toddlers and young children.",
                highlights: ["Video Games", "Soft Play", "Toddler Safe", "Indoor AC", "Snacks"]
            },
            { 
                name: "Imbuga City Walk", 
                type: "playground", 
                city: "CBD", 
                image: "https://images.unsplash.com/photo-1477587458883-47145ed94245?auto=format&fit=crop&w=800&q=80", 
                short: "Car-Free Zone.", 
                expect: "Urban space for biking, skating, walking, and street art in the city center.",
                highlights: ["Car Free", "Skating", "Cycling", "Street Food", "Public WiFi"]
            },
            { 
                name: "Fazenda Sengha", 
                type: "playground", 
                city: "Mt. Kigali", 
                image: "https://images.unsplash.com/photo-1553333152-0941865f17e7?auto=format&fit=crop&w=800&q=80", 
                short: "Hilltop Adventure.", 
                expect: "Horse riding, zip-lining, and archery with a panoramic city view.",
                highlights: ["Horse Riding", "Zip-Lining", "Archery", "Hiking Trails", "Panorama"]
            },
            { 
                name: "Kimisagara One Park", 
                type: "playground", 
                city: "Kimisagara", 
                image: "https://images.unsplash.com/photo-1520699697851-3dc68aa3a474?auto=format&fit=crop&w=800&q=80", 
                short: "Skate & Sports.", 
                expect: "Vibrant youth center with a skate park, basketball, and football courts.",
                highlights: ["Skate Park", "Basketball", "Football", "Youth Center", "Free Entry"]
            },
            { 
                name: "Club Rafiki", 
                type: "playground", 
                city: "Nyamirambo", 
                image: "https://images.unsplash.com/photo-1546519638-68e109498ee3?auto=format&fit=crop&w=800&q=80", 
                short: "Youth Culture.", 
                expect: "Street basketball, modern dance, and a welcoming community vibe.",
                highlights: ["Street Ball", "Dance Studio", "Library", "Community", "Workshops"]
            },
            { 
                name: "Cercle Sportif (CSK)", 
                type: "playground", 
                city: "Rugunga", 
                image: "https://images.unsplash.com/photo-1615119782539-77a87e2b866c?auto=format&fit=crop&w=800&q=80", 
                short: "Classic Leisure.", 
                expect: "Tennis clay courts, swimming pool, squash, and gym. Family favorite.",
                highlights: ["Tennis Courts", "Swimming", "Squash", "Members Club", "Restaurant"]
            },
            { 
                name: "Umusambi Village", 
                type: "playground", 
                city: "Masaka", 
                image: "https://images.unsplash.com/photo-1441974231531-c6227db76b6e?auto=format&fit=crop&w=800&q=80", 
                short: "Nature & Cranes.", 
                expect: "Walking trails, biking, and observing the Grey Crowned Cranes.",
                highlights: ["Bird Watching", "Nature Trails", "Cranes", "Peaceful", "Education"]
            },
            { 
                name: "Bambino Super City", 
                type: "playground", 
                city: "Kabuga", 
                image: "https://images.unsplash.com/photo-1516661138865-c3445038c92f?auto=format&fit=crop&w=800&q=80", 
                short: "Classic Park.", 
                expect: "Merry-go-rounds, swimming pool, and space for kids to run.",
                highlights: ["Theme Park", "Pool", "Restaurant", "Family Day", "Events"]
            },
            { 
                name: "Century Park", 
                type: "playground", 
                city: "Nyarutarama", 
                image: "https://images.unsplash.com/photo-1563299796-b729d0af54a5?auto=format&fit=crop&w=800&q=80", 
                short: "Chill & Play.", 
                expect: "Located at Tung Chinese. Green gardens and a relaxed play area.",
                highlights: ["Upscale", "Green Gardens", "Chinese Food", "Relaxed", "Secure"]
            },
            { 
                name: "Kivu Public Beach", 
                type: "playground", 
                city: "Rubavu", 
                image: "https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80", 
                short: "Beach Fun.", 
                expect: "Public beach on Lake Kivu. Volleyball, swimming, and sand castles.",
                highlights: ["Lake Kivu", "Sand Beach", "Volleyball", "Free Entry", "Swimming"]
            },
            { 
                name: "Kigali Cultural Village", 
                type: "playground", 
                city: "Rebero", 
                image: "https://images.unsplash.com/photo-1533552865325-364233777f98?auto=format&fit=crop&w=800&q=80", 
                short: "Culture & Play.", 
                expect: "Open air amphitheater and spaces for cultural events and play.",
                highlights: ["Amphitheater", "Cultural Art", "Open Space", "Concerts", "Views"]
            }
        ];

        const container = document.getElementById('parks-container');
        const modal = document.getElementById('park-modal');
        const modalContent = document.getElementById('modal-content');

        function render(filter = 'all') {
            container.innerHTML = '';
            
            let filtered = filter === 'all' ? data : data.filter(p => p.type === filter);
            const limit = filter === 'all' ? 30 : 15;
            filtered = filtered.slice(0, limit);

            let delay = 0;
            filtered.forEach((item) => {
                const card = document.createElement('div');
                card.className = 'park-card';
                card.style.animation = `slideUp 0.5s ease forwards ${delay}s`;
                card.style.opacity = '0';
                delay += 0.05;

                card.innerHTML = `
                    <div class="park-img-container">
                        <img src="${item.image}" alt="${item.name}">
                    </div>
                    <div class="park-info">
                        <div class="badge-container">
                            <span class="badge city">📍 ${item.city}</span>
                            <span class="badge ${item.type}">${item.type.toUpperCase()}</span>
                        </div>
                        <h3>${item.name}</h3>
                        <p>${item.short}</p>
                        <button class="btn-visit" onclick="openDetails('${item.name}')">View Details</button>
                    </div>
                `;
                container.appendChild(card);
            });
        }

        function filterData(type, event) {
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            render(type);
        }

        function openDetails(name) {
            const item = data.find(p => p.name === name);
            
            // Generate Highlight Tags HTML
            let tagsHtml = '';
            if(item.highlights) {
                tagsHtml = `<div class="highlights-grid">
                    ${item.highlights.map(tag => `<span class="highlight-tag">${tag}</span>`).join('')}
                </div>`;
            }

            modalContent.innerHTML = `
                <span class="badge ${item.type}" style="margin-bottom:1rem; display:inline-block;">${item.type.toUpperCase()}</span>
                <h2 style="margin:0 0 0.5rem 0; color:var(--rw-green); font-size:1.8rem;">${item.name}</h2>
                <p style="color:var(--text-grey); font-weight:500;">📍 ${item.city}</p>
                
                <div style="background:var(--bg-color); padding:1.5rem; border-radius:15px; margin-top:1.5rem; border-left: 4px solid var(--rw-yellow);">
                    <strong style="color:var(--text-dark);">What to expect:</strong>
                    <p style="margin:0.5rem 0 1rem 0; color:var(--text-grey);">${item.expect}</p>
                    
                    <strong style="color:var(--text-dark); display:block; margin-bottom:5px;">Highlights:</strong>
                    ${tagsHtml}
                </div>
                
                <button onclick="closeModal()" class="btn-visit" style="margin-top:2rem; background:var(--rw-green)">Close</button>
            `;
            modal.style.display = 'flex';
        }

        function closeModal() {
            modal.style.display = 'none';
        }

        window.onclick = (e) => { if (e.target == modal) closeModal(); }
        window.onload = () => render('all');
    </script>
</body>
</html>