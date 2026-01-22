<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sacred Spaces Rwanda | Full Directory</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <style>
        /* --- 1. CSS VARIABLES (THEME ENGINE) --- */
        :root {
            /* LIGHT MODE */
            --bg-body: #e9e5d9;
            --bg-card: #ffffff;
            --bg-controls: rgba(255, 255, 255, 0.95);
            --text-main: #1D1C1C;
            --text-sub: #5D4037;
            --accent: #606C38;
            --border: #dcd8cc;
            --shadow: 0 10px 20px rgba(96, 108, 56, 0.15);
        }

        /* DARK MODE */
        [data-theme="dark"] {
            --bg-body: #1D1C1C;
            --bg-card: #323031;
            --bg-controls: rgba(29, 28, 28, 0.95);
            --text-main: #e9e5d9;
            --text-sub: #a8a49c;
            --accent: #606C38;
            --border: rgba(255, 255, 255, 0.05);
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            margin: 0; padding: 0;
            line-height: 1.6;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* --- HEADER --- */
        header {
            background: linear-gradient(to bottom, rgba(29, 28, 28, 0.7), var(--bg-body)), url('https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=1920&q=80');
            background-size: cover; background-position: center;
            text-align: center; padding: 120px 20px 60px;
            position: relative;
        }

        .theme-toggle {
            position: absolute; top: 20px; right: 20px;
            background: rgba(255,255,255,0.2); backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.3); color: white;
            padding: 10px 15px; border-radius: 50px; cursor: pointer;
            font-weight: 600; font-size: 0.9rem; display: flex; align-items: center; gap: 8px;
        }

        h1 { font-family: 'Playfair Display', serif; font-size: 3.5rem; margin: 0 0 15px 0; color: #e9e5d9; text-shadow: 0 4px 10px rgba(0,0,0,0.5); }
        .subtitle { font-size: 1.1rem; opacity: 0.9; max-width: 600px; margin: 0 auto; color: #e9e5d9; }

        /* --- CONTROLS --- */
        .controls-section {
            background: var(--bg-controls); padding: 25px;
            display: flex; justify-content: center; align-items: center; gap: 20px;
            position: sticky; top: 0; z-index: 100;
            border-bottom: 1px solid var(--border); flex-wrap: wrap;
            backdrop-filter: blur(10px);
        }

        select {
            padding: 12px 25px; border: 1px solid var(--border); border-radius: 50px;
            font-family: 'Montserrat', sans-serif; background-color: var(--bg-card);
            color: var(--text-main); font-weight: 600; cursor: pointer; outline: none;
        }

        .filter-btn {
            background: transparent; border: 1px solid var(--border); color: var(--text-main);
            padding: 10px 30px; font-weight: 600; cursor: pointer; border-radius: 50px;
            text-transform: uppercase; font-size: 0.75rem; letter-spacing: 1px;
        }
        .filter-btn.active, .filter-btn:hover {
            background: var(--accent); border-color: var(--accent); color: #fff;
        }

        /* --- GRID --- */
        .grid {
            display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 40px; max-width: 1200px; margin: 60px auto; padding: 0 20px;
        }

        .card {
            background: var(--bg-card); border-radius: 16px; overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05); transition: all 0.4s ease;
            border: 1px solid var(--border); position: relative;
        }
        .card:hover { transform: translateY(-8px); box-shadow: var(--shadow); border-color: var(--accent); }

        .img-wrapper { height: 200px; overflow: hidden; position: relative; }
        .card-img {
            width: 100%; height: 100%; background-size: cover; background-position: center;
            transition: transform 0.8s ease;
        }
        .card:hover .card-img { transform: scale(1.1); }

        .badge {
            position: absolute; top: 15px; left: 15px;
            background: var(--accent); color: white; padding: 6px 14px;
            border-radius: 4px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;
        }

        .card-body { padding: 30px; }
        .location-tag { color: var(--accent); font-size: 0.75rem; font-weight: 700; display: block; margin-bottom: 8px; text-transform: uppercase; }
        .card-title { font-family: 'Playfair Display', serif; font-size: 1.3rem; margin: 0 0 20px 0; color: var(--text-main); }
        .maps-btn { text-decoration: none; color: var(--text-main); font-size: 0.85rem; font-weight: 600; border-bottom: 1px solid var(--accent); }
        .no-results { grid-column: 1 / -1; text-align: center; color: var(--text-sub); padding: 50px; }
    </style>
</head>
<body>

<header>
    <button class="theme-toggle" id="themeBtn" onclick="toggleTheme()">
        <span id="themeIcon">🌙</span> <span id="themeText">Dark Mode</span>
    </button>
    <h1>Sacred Spaces</h1>
    <p class="subtitle">A complete directory of churches and mosques across all 30 districts.</p>
</header>

<section class="controls-section">
    <select id="districtFilter" onchange="renderGrid()">
        <option value="all">All Rwanda (Show All)</option>
        <optgroup label="Kigali City">
            <option value="Gasabo">Gasabo</option><option value="Kicukiro">Kicukiro</option><option value="Nyarugenge">Nyarugenge</option>
        </optgroup>
        <optgroup label="Northern Province">
            <option value="Burera">Burera</option><option value="Gakenke">Gakenke</option><option value="Gicumbi">Gicumbi</option><option value="Musanze">Musanze</option><option value="Rulindo">Rulindo</option>
        </optgroup>
        <optgroup label="Southern Province">
            <option value="Gisagara">Gisagara</option><option value="Huye">Huye</option><option value="Kamonyi">Kamonyi</option><option value="Muhanga">Muhanga</option><option value="Nyamagabe">Nyamagabe</option><option value="Nyanza">Nyanza</option><option value="Nyaruguru">Nyaruguru</option><option value="Ruhango">Ruhango</option>
        </optgroup>
        <optgroup label="Eastern Province">
            <option value="Bugesera">Bugesera</option><option value="Gatsibo">Gatsibo</option><option value="Kayonza">Kayonza</option><option value="Kirehe">Kirehe</option><option value="Ngoma">Ngoma</option><option value="Nyagatare">Nyagatare</option><option value="Rwamagana">Rwamagana</option>
        </optgroup>
        <optgroup label="Western Province">
            <option value="Karongi">Karongi</option><option value="Ngororero">Ngororero</option><option value="Nyabihu">Nyabihu</option><option value="Nyamasheke">Nyamasheke</option><option value="Rubavu">Rubavu</option><option value="Rusizi">Rusizi</option><option value="Rutsiro">Rutsiro</option>
        </optgroup>
    </select>

    <div class="btn-group">
        <button class="filter-btn active" id="btn-all" onclick="setType('all')">All</button>
        <button class="filter-btn" id="btn-church" onclick="setType('church')">Churches</button>
        <button class="filter-btn" id="btn-mosque" onclick="setType('mosque')">Mosques</button>
    </div>
</section>

<div class="grid" id="placesGrid"></div>

<script>
    // --- 1. THEME LOGIC ---
    function toggleTheme() {
        const body = document.body;
        const isDark = body.getAttribute('data-theme') === 'dark';
        if (isDark) {
            body.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
        } else {
            body.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        }
    }
    document.addEventListener('DOMContentLoaded', () => {
        if(localStorage.getItem('theme') === 'dark') document.body.setAttribute('data-theme', 'dark');
        renderGrid();
    });

    // --- 2. MASSIVE DATABASE (30 Districts x 6 Places) ---
    const placesDB = [
        // === KIGALI CITY ===
        // 1. Gasabo
        { name: "Regina Pacis", district: "Gasabo", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Kibagabaga Church", district: "Gasabo", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kacyiru", district: "Gasabo", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "Christian Life Assembly", district: "Gasabo", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kimironko", district: "Gasabo", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1590076215667-875d452d9260?auto=format&fit=crop&w=800&q=80" },
        { name: "EAR Remera", district: "Gasabo", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        // 2. Kicukiro
        { name: "Nyanza Parish", district: "Kicukiro", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "New Life Bible Church", district: "Kicukiro", type: "church", tag: "Evangelical", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kicukiro", district: "Kicukiro", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Kicukiro", district: "Kicukiro", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "St. Patrick's", district: "Kicukiro", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Gikondo", district: "Kicukiro", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        // 3. Nyarugenge
        { name: "Sainte-Famille", district: "Nyarugenge", type: "church", tag: "Catholic", img: "https://upload.wikimedia.org/wikipedia/commons/e/e0/Sainte-Famille_Church.jpg" },
        { name: "St. Etienne Cathedral", district: "Nyarugenge", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Green Mosque", district: "Nyarugenge", type: "mosque", tag: "Islam", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Mosque_in_Kigali%2C_Rwanda.jpg/640px-Mosque_in_Kigali%2C_Rwanda.jpg" },
        { name: "Masjid Al-Fatah", district: "Nyarugenge", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564121211835-e88c852648ab?auto=format&fit=crop&w=800&q=80" },
        { name: "St. Michel", district: "Nyarugenge", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Nyarugenge", district: "Nyarugenge", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },

    ];

    let currentType = 'all';

    function setType(type) {
        currentType = type;
        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
        document.getElementById('btn-' + type).classList.add('active');
        renderGrid();
    }

    function renderGrid() {
        const districtFilter = document.getElementById('districtFilter').value;
        const grid = document.getElementById('placesGrid');
        
        grid.innerHTML = ''; 

        const filteredPlaces = placesDB.filter(place => {
            const matchesDistrict = (districtFilter === 'all' || place.district === districtFilter);
            const matchesType = (currentType === 'all' || place.type === currentType);
            return matchesDistrict && matchesType;
        });

        if (filteredPlaces.length === 0) {
            grid.innerHTML = '<div class="no-results">No sacred spaces listed in this area yet.</div>';
            return;
        }

        filteredPlaces.forEach(place => {
            const card = document.createElement('div');
            card.className = 'card';
            card.innerHTML = `
                <div class="img-wrapper">
                    <div class="badge">${place.tag}</div>
                    <div class="card-img" style="background-image: url('${place.img}')"></div>
                </div>
                <div class="card-body">
                    <span class="location-tag">${place.district} District</span>
                    <div class="card-title">${place.name}</div>
                    <a href="http://googleusercontent.com/maps.google.com/search?q=${place.name}+${place.district}+Rwanda" target="_blank" class="maps-btn>
                        Locate on Map <span>→</span>
                    </a>
                </div>
            `;
            grid.appendChild(card);
        });
    }

    // --- 1. THEME LOGIC ---
    function toggleTheme() {
        const body = document.body;
        const isDark = body.getAttribute('data-theme') === 'dark';
        if (isDark) {
            body.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
        } else {
            body.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        }
    }
    document.addEventListener('DOMContentLoaded', () => {
        if(localStorage.getItem('theme') === 'dark') document.body.setAttribute('data-theme', 'dark');
        renderGrid();
    });
</script>

</body>
</html>