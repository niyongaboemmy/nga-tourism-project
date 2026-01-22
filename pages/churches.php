<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sacred Spaces Rwanda | Full Directory</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <style>
        /* --- THEME ENGINE --- */
        :root {
            /* LIGHT MODE */
            --bg-body: #e9e5d9;
            --bg-card: #ffffff;
            --bg-controls: rgba(255, 255, 255, 0.95);
            --text-main: #1D1C1C;
            --text-sub: #5D4037;
            --accent: #00a859; /* Bright Rwanda Green */
            --border: #dcd8cc;
            --shadow: 0 10px 20px rgba(0, 168, 89, 0.15);
        }

        /* DARK MODE */
        [data-theme="dark"] {
            --bg-body: #1D1C1C;
            --bg-card: #323031;
            --bg-controls: rgba(29, 28, 28, 0.95);
            --text-main: #e9e5d9;
            --text-sub: #a8a49c;
            --accent: #00a859;
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
        { name: "Regina Pacis", district: "Gasabo", type: "church", tag: "Catholic", img: "data:image/jpeg;base64,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" },
        { name: "Women Foundation Ministries(Kwa Mignone)", district: "Gasabo", type: "church", tag: "Catholic", img: "data:image/jpeg;base64,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" },
        { name: "c", district: "Gasabo", type: "mosque", tag: "Islam", img: "data:image/jpeg;base64,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" },
        { name: "Christian Life Assembly", district: "Gasabo", type: "church", tag: "Pentecostal", img: "https://lh3.googleusercontent.com/gps-cs-s/AG0ilSxRTDPgIxakmwgHEzxpwAa_zLkFeE7uhaxhQ2APIMGlsJwKK5VwFt1PLdQA-miyMxzMT_KvIG0t56wi21UYeTV8fiZthG0uqr9WQr_HPxz6f-2preIglyWyjdqsrb9OX1gk87V6=s1360-w1360-h1020-rw" },
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

        // === NORTHERN PROVINCE ===
        // 4. Musanze
        { name: "Ruhengeri Cathedral", district: "Musanze", type: "church", tag: "Catholic", img: "https://upload.wikimedia.org/wikipedia/commons/e/e4/Ruhengeri_Cathedral_Front.jpg" },
        { name: "Masjid Musanze", district: "Musanze", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Muhoza", district: "Musanze", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Shingiro Parish", district: "Musanze", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Busogo Church", district: "Musanze", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kinigi", district: "Musanze", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },
        // 5. Burera
        { name: "Gahunga Parish", district: "Burera", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Burera", district: "Burera", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Cyanika", district: "Burera", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "Rusarabuye Church", district: "Burera", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Butaro Parish", district: "Burera", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kidaho", district: "Burera", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        // 6. Gakenke
        { name: "Nemba Parish", district: "Gakenke", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Gakenke", district: "Gakenke", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Janja Parish", district: "Gakenke", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Gakenke", district: "Gakenke", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564121211835-e88c852648ab?auto=format&fit=crop&w=800&q=80" },
        { name: "EAR Gakenke", district: "Gakenke", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Mataba Church", district: "Gakenke", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        // 7. Gicumbi
        { name: "Byumba Cathedral", district: "Gicumbi", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Byumba", district: "Gicumbi", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Gicumbi", district: "Gicumbi", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "EAR Byumba", district: "Gicumbi", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Mukarange Parish", district: "Gicumbi", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Gatuna", district: "Gicumbi", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },
        // 8. Rulindo
        { name: "Rulindo Parish", district: "Rulindo", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Rulindo", district: "Rulindo", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Rulindo", district: "Rulindo", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "Kinihira Church", district: "Rulindo", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Shyorongi Parish", district: "Rulindo", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Base", district: "Rulindo", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },

        // === SOUTHERN PROVINCE ===
        // 9. Huye
        { name: "Butare Cathedral", district: "Huye", type: "church", tag: "Catholic", img: "https://upload.wikimedia.org/wikipedia/commons/c/c5/Butare_Cathedral.jpg" },
        { name: "Masjid Matyazo", district: "Huye", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1545293675-d1420d91295b?auto=format&fit=crop&w=800&q=80" },
        { name: "St. Barthélemy", district: "Huye", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Tumba", district: "Huye", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Ngoma Parish", district: "Huye", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Huye Town", district: "Huye", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        // 10. Gisagara
        { name: "Gisagara Parish", district: "Gisagara", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Gisagara", district: "Gisagara", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Kigembe Church", district: "Gisagara", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Gisagara", district: "Gisagara", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564121211835-e88c852648ab?auto=format&fit=crop&w=800&q=80" },
        { name: "Mamba Church", district: "Gisagara", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Ndora", district: "Gisagara", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },
        // 11. Kamonyi
        { name: "Kamonyi Parish", district: "Kamonyi", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Kamonyi", district: "Kamonyi", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Runda", district: "Kamonyi", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "Rugobagoba Church", district: "Kamonyi", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Gihara Parish", district: "Kamonyi", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kamonyi", district: "Kamonyi", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        // 12. Muhanga
        { name: "Kabgayi Cathedral", district: "Muhanga", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Muhanga", district: "Muhanga", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "Gitarama Church", district: "Muhanga", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Gitarama", district: "Muhanga", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Cyeza Parish", district: "Muhanga", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Nyamabuye", district: "Muhanga", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },
        // 13. Nyamagabe
        { name: "Gikongoro Cathedral", district: "Nyamagabe", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Nyamagabe", district: "Nyamagabe", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Nyamagabe", district: "Nyamagabe", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564121211835-e88c852648ab?auto=format&fit=crop&w=800&q=80" },
        { name: "Cyanika Parish", district: "Nyamagabe", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Gasarenda Church", district: "Nyamagabe", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Gasarenda", district: "Nyamagabe", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        // 14. Nyanza
        { name: "Christ-Roi Cathedral", district: "Nyanza", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Nyanza", district: "Nyanza", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Nyanza", district: "Nyanza", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Nyanza Anglican", district: "Nyanza", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Busasamana Parish", district: "Nyanza", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Busasamana", district: "Nyanza", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1590076215667-875d452d9260?auto=format&fit=crop&w=800&q=80" },
        // 15. Nyaruguru
        { name: "Kibeho Shrine", district: "Nyaruguru", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Nyaruguru Parish", district: "Nyaruguru", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Nyaruguru", district: "Nyaruguru", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kibeho", district: "Nyaruguru", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "EAR Nyaruguru", district: "Nyaruguru", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Ndago", district: "Nyaruguru", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        // 16. Ruhango
        { name: "Ruhango Parish", district: "Ruhango", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Ruhango", district: "Ruhango", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Ruhango", district: "Ruhango", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "Byimana Parish", district: "Ruhango", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Kinazi Church", district: "Ruhango", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Byimana", district: "Ruhango", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },

        // === EASTERN PROVINCE ===
        // 17. Bugesera
        { name: "Nyamata Church", district: "Bugesera", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Nyamata", district: "Bugesera", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Nyamata", district: "Bugesera", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Ruhuha Parish", district: "Bugesera", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Mayange Church", district: "Bugesera", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Ruhuha", district: "Bugesera", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        // 18. Gatsibo
        { name: "Kiziguro Parish", district: "Gatsibo", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Gatsibo", district: "Gatsibo", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kabarore", district: "Gatsibo", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "Kiramuruzi Church", district: "Gatsibo", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Gatsibo Parish", district: "Gatsibo", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kiramuruzi", district: "Gatsibo", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },
        // 19. Kayonza
        { name: "Mukarange Parish", district: "Kayonza", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kayonza", district: "Kayonza", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Kayonza", district: "Kayonza", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Gahini Cathedral", district: "Kayonza", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Rukara Parish", district: "Kayonza", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kabarondo", district: "Kayonza", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564121211835-e88c852648ab?auto=format&fit=crop&w=800&q=80" },
        // 20. Kirehe
        { name: "Kirehe Parish", district: "Kirehe", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kirehe", district: "Kirehe", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Nyakarambi", district: "Kirehe", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Rusumo Church", district: "Kirehe", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Mahama Church", district: "Kirehe", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Rusumo", district: "Kirehe", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        // 21. Ngoma
        { name: "Kibungo Cathedral", district: "Ngoma", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kibungo", district: "Ngoma", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Ngoma", district: "Ngoma", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Zaza Parish", district: "Ngoma", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "EAR Kibungo", district: "Ngoma", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Sake", district: "Ngoma", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },
        // 22. Nyagatare
        { name: "Nyagatare Parish", district: "Nyagatare", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Nyagatare", district: "Nyagatare", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Nyagatare", district: "Nyagatare", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Matimba Church", district: "Nyagatare", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Rukomo Parish", district: "Nyagatare", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Matimba", district: "Nyagatare", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },
        // 23. Rwamagana
        { name: "Rwamagana Cathedral", district: "Rwamagana", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Rwamagana", district: "Rwamagana", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564121211835-e88c852648ab?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Kigabiro", district: "Rwamagana", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "St. Paul's", district: "Rwamagana", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Karenge Parish", district: "Rwamagana", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Nyarubuye", district: "Rwamagana", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1590076215667-875d452d9260?auto=format&fit=crop&w=800&q=80" },

        // === WESTERN PROVINCE ===
        // 24. Karongi
        { name: "St. Pierre (Kibuye)", district: "Karongi", type: "church", tag: "Catholic", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Kibuye_Church_Genocide_Memorial.jpg/640px-Kibuye_Church_Genocide_Memorial.jpg" },
        { name: "Masjid Kibuye", district: "Karongi", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Karongi", district: "Karongi", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Gitesi Parish", district: "Karongi", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "EPR Karongi", district: "Karongi", type: "church", tag: "Presbyterian", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Bwishyura", district: "Karongi", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        // 25. Rubavu
        { name: "Rubavu Cathedral", district: "Rubavu", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid al-Jumu'ah", district: "Rubavu", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Gisenyi", district: "Rubavu", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "St. Andre", district: "Rubavu", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Nyundo Cathedral", district: "Rubavu", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Majengo", district: "Rubavu", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },
        // 26. Rusizi
        { name: "Cyangugu Cathedral", district: "Rusizi", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kamembe", district: "Rusizi", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Kamembe", district: "Rusizi", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Mibirizi Parish", district: "Rusizi", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "EAR Cyangugu", district: "Rusizi", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Rusizi Border", district: "Rusizi", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        // 27. Nyamasheke
        { name: "Nyamasheke Parish", district: "Nyamasheke", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Nyamasheke", district: "Nyamasheke", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Kagano", district: "Nyamasheke", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Hanika Parish", district: "Nyamasheke", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "EAR Nyamasheke", district: "Nyamasheke", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Tyazo", district: "Nyamasheke", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" },
        // 28. Ngororero
        { name: "Ngororero Parish", district: "Ngororero", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Ngororero", district: "Ngororero", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Ngororero", district: "Ngororero", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564769662533-4f00a87b4056?auto=format&fit=crop&w=800&q=80" },
        { name: "Muhororo Church", district: "Ngororero", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Kabaya Parish", district: "Ngororero", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Gatumba", district: "Ngororero", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1590076215667-875d452d9260?auto=format&fit=crop&w=800&q=80" },
        // 29. Nyabihu
        { name: "Rambura Parish", district: "Nyabihu", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Mukamira", district: "Nyabihu", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Mukamira", district: "Nyabihu", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1564121211835-e88c852648ab?auto=format&fit=crop&w=800&q=80" },
        { name: "Jenda Church", district: "Nyabihu", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Bigogwe Parish", district: "Nyabihu", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Bigogwe", district: "Nyabihu", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1555421546-8797f353160a?auto=format&fit=crop&w=800&q=80" },
        // 30. Rutsiro
        { name: "Congo-Nil Parish", district: "Rutsiro", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80" },
        { name: "ADEPR Rutsiro", district: "Rutsiro", type: "church", tag: "Pentecostal", img: "https://images.unsplash.com/photo-1438232992991-995b7058bbb3?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Rutsiro", district: "Rutsiro", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80" },
        { name: "Murunda Church", district: "Rutsiro", type: "church", tag: "Anglican", img: "https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80" },
        { name: "Boneza Parish", district: "Rutsiro", type: "church", tag: "Catholic", img: "https://images.unsplash.com/photo-1543243974-98c47b744766?auto=format&fit=crop&w=800&q=80" },
        { name: "Masjid Kayove", district: "Rutsiro", type: "mosque", tag: "Islam", img: "https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80" }
    ];

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
            // --- THE MAGIC: Auto-Generated Google Maps Search Link ---
            const mapQuery = encodeURIComponent(place.name + " " + place.district + " Rwanda");
            
            card.innerHTML = `
                <div class="img-wrapper">
                    <div class="badge">${place.tag}</div>
                    <div class="card-img" style="background-image: url('${place.img}')"></div>
                </div>
                <div class="card-body">
                    <span class="location-tag">${place.district} District</span>
                    <div class="card-title">${place.name}</div>
                    <a href="https://www.google.com/maps/search/?api=1&query=${mapQuery}" target="_blank" class="maps-btn">
                        Locate on Map <span>→</span>
                    </a>
                </div>
            `;
            grid.appendChild(card);
        });
    }

    let currentType = 'all';
    function setType(type) {
        currentType = type;
        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
        document.getElementById('btn-' + type).classList.add('active');
        renderGrid();
    }
</script>

</body>
</html>