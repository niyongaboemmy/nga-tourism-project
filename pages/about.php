<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sacred Spaces Rwanda</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
    
    <style>
        /* --- THEME: SACRED GREEN --- */
        :root {
            --sacred-green: #2E7D32;
            --sacred-dark: #1B5E20;
            --earth-brown: #5D4037;
            --white: #ffffff;
            --bg-light: #f4f7f4;
            --shadow-card: 0 10px 20px rgba(46, 125, 50, 0.1);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--bg-light);
            color: #333;
            margin: 0; padding: 0;
            line-height: 1.6;
        }

        /* --- HEADER --- */
        header {
            background: linear-gradient(rgba(27, 94, 32, 0.8), rgba(46, 125, 50, 0.6)), url('https://images.unsplash.com/photo-1528516304856-74b83038d87a?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
            text-align: center;
            padding: 120px 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            margin: 0 0 15px 0;
            letter-spacing: 1px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .subtitle { font-size: 1.2rem; font-weight: 300; opacity: 0.95; max-width: 600px; margin: 0 auto; }

        /* --- CONTROLS SECTION --- */
        .controls-section {
            background: var(--white);
            padding: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 3px solid #E8F5E9;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            flex-wrap: wrap;
        }

        select {
            padding: 12px 25px;
            border: 2px solid #eee;
            border-radius: 50px;
            font-family: 'Montserrat', sans-serif;
            color: var(--sacred-dark);
            font-weight: 700;
            cursor: pointer;
            outline: none;
            background: #fff;
            transition: 0.3s;
        }
        
        select:hover, select:focus { border-color: var(--sacred-green); box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.1); }

        .btn-group { display: flex; gap: 10px; }

        .filter-btn {
            background: transparent;
            border: 2px solid var(--sacred-green);
            color: var(--sacred-green);
            padding: 10px 30px;
            font-weight: 700;
            cursor: pointer;
            border-radius: 50px;
            transition: 0.3s;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--sacred-green);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }

        /* --- GRID & CARDS --- */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: all 0.4s ease;
            border: 1px solid rgba(0,0,0,0.05);
            position: relative;
        }

        .card:hover { 
            transform: translateY(-10px); 
            box-shadow: 0 20px 40px rgba(46, 125, 50, 0.15); 
        }

        .img-wrapper { height: 240px; overflow: hidden; position: relative; }
        
        .card-img {
            width: 100%; height: 100%;
            background-size: cover; background-position: center;
            transition: transform 0.8s ease;
        }
        .card:hover .card-img { transform: scale(1.15); }

        .badge {
            position: absolute; top: 20px; left: 20px;
            background: var(--sacred-green); color: white;
            padding: 6px 14px; border-radius: 30px;
            font-size: 0.7rem; font-weight: 700; text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            z-index: 2;
        }

        .card-body { padding: 30px; }
        
        .location-tag { 
            color: var(--earth-brown); 
            font-size: 0.75rem; 
            font-weight: 700; 
            display: block; 
            margin-bottom: 10px; 
            text-transform: uppercase; 
            letter-spacing: 1px;
        }
        
        .card-title { 
            font-family: 'Playfair Display', serif; 
            font-size: 1.5rem; 
            margin: 0 0 20px 0; 
            color: var(--sacred-dark); 
            line-height: 1.2; 
            font-weight: 700;
        }

        .maps-btn {
            display: inline-flex;
            align-items: center;
            text-decoration: none; 
            color: var(--sacred-green);
            font-weight: 700; 
            font-size: 0.9rem;
            transition: 0.3s;
        }
        
        .maps-btn span { font-size: 1.2rem; margin-left: 5px; transition: 0.3s; }
        .maps-btn:hover { color: var(--earth-brown); }
        .maps-btn:hover span { transform: translateX(5px); }
        
        /* Fade Animation */
        @keyframes fadeUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .card.show { animation: fadeUp 0.6s ease forwards; }
    </style>
</head>
<body>

<header>
    <h1>Sacred Spaces</h1>
    <p class="subtitle">A directory of churches and mosques across Rwanda.</p>
</header>

<section class="controls-section">
    <select id="districtFilter" onchange="applyFilters()">
        <option value="all">All Regions</option>
        <option value="kigali">Kigali City</option>
        <option value="musanze">Musanze (North)</option>
        <option value="huye">Huye (South)</option>
        <option value="rubavu">Rubavu (West)</option>
        <option value="karongi">Karongi (West)</option>
    </select>

    <div class="btn-group">
        <button class="filter-btn active" id="btn-all" onclick="setType('all')">All</button>
        <button class="filter-btn" id="btn-church" onclick="setType('church')">Churches</button>
        <button class="filter-btn" id="btn-mosque" onclick="setType('mosque')">Mosques</button>
    </div>
</section>

<div class="grid" id="placesGrid">

    <div class="card church kigali">
        <div class="img-wrapper">
            <div class="badge">Catholic</div>
            <div class="card-img" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/e/e0/Sainte-Famille_Church.jpg')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Kigali • Nyarugenge</span>
            <div class="card-title">Sainte-Famille Church</div>
            <a href="https://maps.google.com/?q=Sainte-Famille+Church+Kigali" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card church kigali">
        <div class="img-wrapper">
            <div class="badge">Catholic</div>
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1548544149-4835e62ee5b3?auto=format&fit=crop&w=800&q=80')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Kigali • Remera</span>
            <div class="card-title">Regina Pacis</div>
            <a href="https://maps.google.com/?q=Regina+Pacis+Catholic+Church+Kigali" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card church kigali">
        <div class="img-wrapper">
            <div class="badge">Anglican</div>
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1473177104440-ffee2f376098?auto=format&fit=crop&w=800&q=80')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Kigali • Biryogo</span>
            <div class="card-title">St. Etienne Cathedral</div>
            <a href="https://maps.google.com/?q=St+Etienne+Cathedral+Kigali" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card mosque kigali">
        <div class="img-wrapper">
            <div class="badge">Islam</div>
            <div class="card-img" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Mosque_in_Kigali%2C_Rwanda.jpg/640px-Mosque_in_Kigali%2C_Rwanda.jpg')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Kigali • Nyamirambo</span>
            <div class="card-title">Al-Madina (Green Mosque)</div>
            <a href="https://maps.google.com/?q=Green+Mosque+Nyamirambo" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card mosque kigali">
        <div class="img-wrapper">
            <div class="badge">Islam</div>
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1564121211835-e88c852648ab?auto=format&fit=crop&w=800&q=80')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Kigali • Nyamirambo</span>
            <div class="card-title">Masjid Al-Fatah</div>
            <a href="https://maps.google.com/?q=Masjid+Al+Fatah+Kigali" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card church musanze">
        <div class="img-wrapper">
            <div class="badge">Catholic</div>
            <div class="card-img" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/e/e4/Ruhengeri_Cathedral_Front.jpg')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Musanze • Center</span>
            <div class="card-title">Ruhengeri Cathedral</div>
            <a href="https://maps.google.com/?q=Ruhengeri+Cathedral" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card mosque musanze">
        <div class="img-wrapper">
            <div class="badge">Islam</div>
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?auto=format&fit=crop&w=800&q=80')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Musanze • Center</span>
            <div class="card-title">Masjid Musanze</div>
            <a href="https://maps.google.com/?q=Masjid+Musanze" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card church huye">
        <div class="img-wrapper">
            <div class="badge">Catholic</div>
            <div class="card-img" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/c/c5/Butare_Cathedral.jpg')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Huye • Butare</span>
            <div class="card-title">Our Lady of Wisdom</div>
            <a href="https://maps.google.com/?q=Butare+Cathedral" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card mosque huye">
        <div class="img-wrapper">
            <div class="badge">Islam</div>
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1596627068595-654bd4439c28?auto=format&fit=crop&w=800&q=80')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Huye • Matyazo</span>
            <div class="card-title">Masjid Matyazo</div>
            <a href="https://maps.google.com/?q=Masjid+Matyazo+Huye" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card church karongi">
        <div class="img-wrapper">
            <div class="badge">Catholic</div>
            <div class="card-img" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Kibuye_Church_Genocide_Memorial.jpg/640px-Kibuye_Church_Genocide_Memorial.jpg')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Karongi • Kibuye</span>
            <div class="card-title">St. Pierre (Saint Jean)</div>
            <a href="https://maps.google.com/?q=St+Pierre+Church+Kibuye" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card church rubavu">
        <div class="img-wrapper">
            <div class="badge">Catholic</div>
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1548625361-e88c60eb8307?auto=format&fit=crop&w=800&q=80')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Rubavu • Center</span>
            <div class="card-title">Rubavu Cathedral</div>
            <a href="https://maps.google.com/?q=Cathedral+Rubavu" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

    <div class="card mosque rubavu">
        <div class="img-wrapper">
            <div class="badge">Islam</div>
            <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=800&q=80')"></div>
        </div>
        <div class="card-body">
            <span class="location-tag">Rubavu • Gisenyi</span>
            <div class="card-title">Masjid al-Jumu'ah</div>
            <a href="https://maps.google.com/?q=Masjid+Gisenyi" target="_blank" class="maps-btn">View on Map <span>→</span></a>
        </div>
    </div>

</div>

<script>
    let currentType = 'all';

    function setType(type) {
        currentType = type;
        
        // 1. Visual Feedback on Buttons
        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
        document.getElementById('btn-' + type).classList.add('active');
        
        // 2. Trigger Filter
        applyFilters();
    }

    function applyFilters() {
        const district = document.getElementById('districtFilter').value;
        const cards = document.querySelectorAll('.card');
        
        // Loop through all cards
        cards.forEach(card => {
            // Check if card matches selected District
            const matchesDistrict = (district === 'all' || card.classList.contains(district));
            
            // Check if card matches selected Type (Church/Mosque)
            const matchesType = (currentType === 'all' || card.classList.contains(currentType));

            // Show or Hide with Animation
            if (matchesDistrict && matchesType) {
                card.style.display = 'block';
                
                // Restart animation to make it look cool
                card.classList.remove('show');
                void card.offsetWidth; // Trigger reflow (magic browser hack)
                card.classList.add('show');
            } else {
                card.style.display = 'none';
            }
        });
    }

    // Run on startup
    document.addEventListener('DOMContentLoaded', applyFilters);
</script>

</body>
</html>