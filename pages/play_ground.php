
<style>

/* --- HERO SECTION --- */
.hero {
    text-align: center;
    padding: 5rem 2rem 3rem;
}

.hero h1 {
    font-size: 3.5rem;
    margin: 0 0 1rem;
    font-weight: 800;
    line-height: 1.1;
    background: linear-gradient(135deg, var(--rw-green) 0%, var(--rw-blue) 100%);
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
    top: 0; left: 0; right: 0;
    height: 6px;
    background: linear-gradient(
        90deg,
        var(--rw-blue) 33%,
        var(--rw-yellow) 33%,
        var(--rw-yellow) 66%,
        var(--rw-green) 66%
    );
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

.badge.city {
    background: rgba(0, 161, 222, 0.1);
    color: var(--rw-blue);
}

.badge.football {
    background: rgba(32, 96, 61, 0.1);
    color: var(--rw-green);
}

.badge.playground {
    background: rgba(250, 210, 1, 0.2);
    color: #b89800;
}

.park-info h3 {
    margin: 0 0 0.5rem;
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
    top: 0; left: 0;
    width: 100%; height: 100%;
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

.close-btn:hover {
    background: var(--rw-yellow);
    transform: rotate(90deg);
}

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

@keyframes fadeIn {
    to { opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(40px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

/* Responsive */
@media (max-width: 768px) {
    .hero h1 { font-size: 2.5rem; }
    .parks-grid { grid-template-columns: 1fr; }
    .nav-container { flex-direction: column; gap: 1rem; }
}

</style>
<main>
<header class="hero">
    <h1>Discover <span>Rwanda's</span><br>Best Outdoors</h1>
    <p>From national stadiums to community playgrounds.</p>
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
const data = [
    // PLAYGROUNDS
    {
        name: "Tedga's Recreation",
        type: "playground",
        city: "Gahanga",
        image: "https://via.placeholder.com/400x220?text=Tedga's+Recreation",
        short: "Family-friendly amusement playground.",
        expect: "Bouncy castles, bumper cars, and swimming pools.",
        highlights: ["Bouncy Castles", "Bumper Cars", "Swimming Pool", "Food Court"]
    },
    {
        name: "Coconut Kigali",
        type: "playground",
        city: "Nyarutarama",
        image: "https://via.placeholder.com/400x220?text=Coconut+Kigali+Playground",
        short: "Kids outdoor play space with rides and games.",
        expect: "Fun rides, play zones, and birthday party spots.",
        highlights: ["Outdoor Play", "Kids Rides", "Family Time"]
    },
    {
        name: "Tintin Kids Play Centre",
        type: "playground",
        city: "Kimironko",
        image: "https://via.placeholder.com/400x220?text=Tintin+Kids+Play+Centre",
        short: "Indoor and outdoor kids play area.",
        expect: "Slides, soft play, and games for kids.",
        highlights: ["Soft Play", "Slides", "Safe Environment"]
    },
    {
        name: "Spiderman Game Center",
        type: "playground",
        city: "Kicukiro",
        image: "https://via.placeholder.com/400x220?text=Spiderman+Game+Center",
        short: "Arcade-style playground with games.",
        expect: "Arcade games, kids rides, indoor play fun.",
        highlights: ["Arcade", "Rides", "Family Fun"]
    },
    {
        name: "Kids Play Planet",
        type: "playground",
        city: "Remera",
        image: "https://via.placeholder.com/400x220?text=Kids+Play+Planet",
        short: "Modern children’s play center.",
        expect: "Climbing games and group play activities.",
        highlights: ["Climbing", "Bouncing", "Kids Friendly"]
    },
    {
        name: "Happy Kids Playground",
        type: "playground",
        city: "Kacyiru",
        image: "https://via.placeholder.com/400x220?text=Happy+Kids+Playground",
        short: "Neighborhood playground for kids.",
        expect: "Swings, slides, and playtime outside.",
        highlights: ["Swings", "Slides", "Outdoor Play"]
    },
    {
        name: "Little Angels Play Zone",
        type: "playground",
        city: "Nyamirambo",
        image: "https://via.placeholder.com/400x220?text=Little+Angels+Play+Zone",
        short: "Soft play zone for young kids.",
        expect: "Safe soft games and fun activities.",
        highlights: ["Soft Play", "Toddlers", "Safe Space"]
    },
    {
        name: "Kigali Kids Fun Park",
        type: "playground",
        city: "Gisozi",
        image: "https://via.placeholder.com/400x220?text=Kigali+Kids+Fun+Park",
        short: "Open outdoor kids recreation park.",
        expect: "Outdoor games and family activities.",
        highlights: ["Outdoor Games", "Family Time"]
    },
    {
        name: "FunLand Kigali",
        type: "playground",
        city: "Kimironko",
        image: "https://via.placeholder.com/400x220?text=FunLand+Kigali",
        short: "Colorful kids play area.",
        expect: "Bouncy games and playground structures.",
        highlights: ["Bouncy Games", "Play Structures"]
    },
    {
        name: "Joy Kids Play Area",
        type: "playground",
        city: "Remera",
        image: "https://via.placeholder.com/400x220?text=Joy+Kids+Play+Area",
        short: "Simple outdoor play space.",
        expect: "Casual play for kids and families.",
        highlights: ["Outdoor Play", "Relaxation"]
    },

    // PARKS
    {
        name: "Amahoro National Stadium",
        type: "park",
        city: "Kigali",
        image: "${turn0image0}", 
        short: "Rwanda's national stadium and main sports arena.", 
        expect: "Football matches, events, and national celebrations.", 
        highlights: ["Football", "International Events", "Spectator Sports"]
    },
    {
        name: "Nyandungu Eco-Park",
        type: "park",
        city: "Kigali",
        image: "${turn0image11}",
        short: "Urban wetland eco-park in Kigali.",
        expect: "Cycling, picnics, walking trails, and nature.",
        highlights: ["Birdwatching", "Trails", "Picnics", "Cycling"]
    },
    {
        name: "Umusambi Village",
        type: "park",
        city: "Rugezi",
        image: "https://via.placeholder.com/400x220?text=Umusambi+Village",
        short: "Crane sanctuary and conservation park.",
        expect: "Visit rescued grey crowned cranes and nature walks.",
        highlights: ["Nature Sanctuary", "Birds", "Conservation"]
    },
    {
        name: "Kigali City Park",
        type: "park",
        city: "Nyarugenge",
        image: "https://via.placeholder.com/400x220?text=Kigali+City+Park",
        short: "Central city park and relaxation area.",
        expect: "Walking, green space, public events.",
        highlights: ["City Center", "Relaxation"]
    },
    {
        name: "Nyarutarama Lake Park",
        type: "park",
        city: "Nyarutarama",
        image: "https://via.placeholder.com/400x220?text=Nyarutarama+Lake+Park",
        short: "Lake-side park with jogging paths.",
        expect: "Scenic walks and calm environment.",
        highlights: ["Lake View", "Jogging", "Relaxation"]
    },
    {
        name: "Kigali Convention Centre Gardens",
        type: "park",
        city: "Kimihurura",
        image: "https://via.placeholder.com/400x220?text=Kigali+Convention+Centre+Gardens",
        short: "Landscaped gardens around Kigali Convention Centre.",
        expect: "Photography, relaxation, and greenery.",
        highlights: ["Gardens", "Relaxation", "Photo Spots"]
    },
    {
        name: "Mount Kigali View Park",
        type: "park",
        city: "Nyamirambo",
        image: "https://via.placeholder.com/400x220?text=Mount+Kigali+View+Park",
        short: "Scenic hilltop park with views of Kigali.",
        expect: "Hiking and landscape views.",
        highlights: ["Hiking", "Views", "Photography"]
    },
    {
        name: "Buhanga Eco-Park",
        type: "park",
        city: "Musanze",
        image: "https://via.placeholder.com/400x220?text=Buhanga+Eco-Park",
        short: "Cultural eco-tourism park near Musanze.",
        expect: "Cultural tours and nature walks.",
        highlights: ["Culture", "Nature"]
    },
    {
        name: "Gikondo Eco-Park",
        type: "park",
        city: "Gikondo",
        image: "https://via.placeholder.com/400x220?text=Gikondo+Eco-Park",
        short: "Urban wetland eco-park.",
        expect: "Eco learning and nature walks.",
        highlights: ["Eco Learning", "Urban Nature"]
    },
    {
        name: "Akagera National Park",
        type: "park",
        city: "Eastern Province",
        image: "https://via.placeholder.com/400x220?text=Akagera+National+Park",
        short: "World-famous safari park in eastern Rwanda.",
        expect: "Wildlife viewing and guided tours.",
        highlights: ["Wildlife", "Guided Tours", "Safari"]
    }
];

// — Rendering and modal logic (same as before)

const container = document.getElementById('parks-container');
const modal = document.getElementById('park-modal');
const modalContent = document.getElementById('modal-content');

function render(filter='all') {
    container.innerHTML = '';
    const filtered = filter === 'all' ? data : data.filter(p => p.type===filter);
    filtered.forEach(item => {
        const card = document.createElement('div');
        card.className = 'park-card';
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

function openDetails(name) {
    const item = data.find(p => p.name === name);
    const tagsHtml = item.highlights ? `<div class="highlights-grid">${item.highlights.map(tag=>`<span class="highlight-tag">${tag}</span>`).join('')}</div>` : '';
    modalContent.innerHTML = `
        <span class="badge ${item.type}" style="margin-bottom:1rem; display:inline-block;">${item.type.toUpperCase()}</span>
        <h2 style="margin:0 0 0.5rem 0; color:var(--rw-green);">${item.name}</h2>
        <p style="color:var(--text-grey); font-weight:500;">📍 ${item.city}</p>
        
        <div style="background:var(--bg-color); padding:1.5rem; border-radius:15px; margin-top:1.5rem; border-left: 4px solid var(--rw-yellow);">
            <strong>What to expect:</strong>
            <p style="margin:0.5rem 0 1rem 0; color:var(--text-grey);">${item.expect}</p>
            ${tagsHtml}
        </div>
        <button onclick="closeModal()" class="btn-visit" style="margin-top:2rem; background:var(--rw-green)">Close</button>
    `;
    modal.style.display = 'flex';
}

function closeModal() { modal.style.display = 'none'; }
window.onclick = e => { if (e.target == modal) closeModal(); }
window.onload = () => render();

</script>
