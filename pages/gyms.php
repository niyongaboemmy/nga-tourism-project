<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Rwanda</title>
    <style>
        /* --- UPDATED MINIMALIST PALETTE --- */
        :root {
            --primary-green: #283618; 
            --accent-green: #606C38;  
            --text-dark: #1D1C1C;    
            --text-grey: #555555;    
            --light-bg: #E9E5D9;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        
        body { 
            background-color: var(--light-bg); 
            color: var(--text-dark); 
            padding-bottom: 50px; 
        }

        header { 
            background-color: white; 
            padding: 2rem 1rem; 
            text-align: center; 
            border-bottom: 1px solid #eee;
        }
        header h1 { 
            color: var(--primary-green); 
            font-size: 2.5rem; 
            margin-bottom: 0.5rem; 
        }
        header p { color: var(--text-grey); }

        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }

        .section-title { 
            font-size: 1.8rem; 
            font-weight: bold; 
            color: var(--text-dark); 
            margin: 40px 0 20px 0; 
            border-left: 5px solid var(--accent-green); 
            padding-left: 15px;
        }

        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; }

        .card { 
            background: white; 
            border-radius: 12px; 
            overflow: hidden; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.05); 
            border: 1px solid #f0f0f0;
            display: flex; 
            flex-direction: column;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover { 
            transform: translateY(-3px); 
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .card-img { width: 100%; height: 200px; background-color: #eee; object-fit: cover; }
        .card-body { padding: 25px; flex-grow: 1; display: flex; flex-direction: column; }

        .tag { 
            color: white; 
            background-color: var(--accent-green); 
            font-size: 0.75rem; 
            font-weight: 800; 
            padding: 5px 12px; 
            border-radius: 4px; 
            display: inline-block;
            margin-bottom: 15px;
            width: fit-content;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .card h3 { color: var(--text-dark); margin-bottom: 8px; font-size: 1.4rem; }
        .location { color: var(--text-grey); font-size: 0.9rem; margin-bottom: 15px; }
        .description { color: var(--text-grey); font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px; flex-grow: 1; }

        .btn { 
            background-color: var(--primary-green); 
            color: white; 
            text-align: center; 
            padding: 14px; 
            border-radius: 8px; 
            text-decoration: none; 
            font-weight: 600; 
            font-size: 0.95rem;
            margin-top: auto; 
            cursor: pointer;
            border: none;
            width: 100%;
            transition: background-color 0.3s, transform 0.1s;
        }
        .btn:hover { 
            background-color: var(--accent-green);
            transform: scale(1.02);
        }
        .btn:active {
            transform: scale(0.98);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.6);
            animation: fadeIn 0.3s;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { 
                transform: translateY(50px);
                opacity: 0;
            }
            to { 
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 0;
            border-radius: 16px;
            width: 90%;
            max-width: 700px;
            max-height: 85vh;
            overflow-y: auto;
            animation: slideUp 0.3s;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        }

        .modal-header {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .modal-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-close {
            position: absolute;
            right: 20px;
            top: 20px;
            color: white;
            font-size: 32px;
            font-weight: bold;
            cursor: pointer;
            background: rgba(0,0,0,0.5);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .modal-close:hover {
            background: rgba(0,0,0,0.8);
        }

        .modal-body {
            padding: 30px;
        }

        .modal-tag {
            color: white; 
            background-color: var(--accent-green); 
            font-size: 0.75rem; 
            font-weight: 800; 
            padding: 6px 14px; 
            border-radius: 4px; 
            display: inline-block;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .modal-title {
            color: var(--primary-green);
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .modal-location {
            color: var(--text-grey);
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .modal-divider {
            border: 0;
            border-top: 1px solid #eee;
            margin: 20px 0;
        }

        .modal-section-title {
            color: var(--text-dark);
            font-size: 1.2rem;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .modal-description {
            color: var(--text-grey);
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .modal-actions {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .modal-btn {
            flex: 1;
            padding: 14px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
        }

        .modal-btn-primary {
            background-color: var(--primary-green);
            color: white;
        }

        .modal-btn-primary:hover {
            background-color: var(--accent-green);
        }

        .modal-btn-secondary {
            background-color: #333;
            color: white;
        }

        .modal-btn-secondary:hover {
            background-color: #555;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .info-item {
            background: var(--light-bg);
            padding: 15px;
            border-radius: 8px;
        }

        .info-item-title {
            font-size: 0.85rem;
            color: var(--text-grey);
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-item-value {
            font-size: 1.1rem;
            color: var(--text-dark);
            font-weight: 600;
        }
    </style>
</head>
<body>

<header>
    <h1>Active Rwanda</h1>
    <p>Discover the best sports venues and fitness centers in Kigali</p>
</header>

<div class="container">
    <h2 class="section-title">Major Arenas & Stadiums</h2>
    <div class="grid" id="arenas-grid"></div>

    <h2 class="section-title">Tourist-Friendly Gyms</h2>
    <div class="grid" id="gyms-grid"></div>
</div>

<!-- Modal -->
<div id="detailsModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <img id="modal-img" src="" alt="">
            <span class="modal-close">&times;</span>
        </div>
        <div class="modal-body">
            <span class="modal-tag" id="modal-tag"></span>
            <h1 class="modal-title" id="modal-title"></h1>
            <p class="modal-location" id="modal-location"></p>
            
            <hr class="modal-divider">
            
            <h3 class="modal-section-title">About this place</h3>
            <p class="modal-description" id="modal-description"></p>

            <div class="info-grid">
                <div class="info-item">
                    <div class="info-item-title">Category</div>
                    <div class="info-item-value" id="modal-category"></div>
                </div>
                <div class="info-item">
                    <div class="info-item-title">Contact</div>
                    <div class="info-item-value" id="modal-phone"></div>
                </div>
            </div>
            
            <div class="modal-actions">
                <a id="modal-map-link" href="#" target="_blank" class="modal-btn modal-btn-primary">
                    📍 Open on Google Maps
                </a>
                <a id="modal-call-link" href="#" class="modal-btn modal-btn-secondary">
                    📞 Call Now
                </a>
            </div>
        </div>
    </div>
</div>

<script>
const places = {
    'bk-arena': {
        type: 'arena',
        name: 'BK Arena',
        tag: 'Indoor Arena',
        location: 'Remera, Kigali',
        description: 'East Africa\'s biggest indoor arena. Hosts major basketball tournaments (BAL) and concerts. This state-of-the-art facility features world-class acoustics, VIP lounges, and a capacity of 10,000 spectators. It has become the premier destination for international sports events and entertainment in the region.',
        phone: '+250 788 000 000',
        map_link: 'https://goo.gl/maps/Example1',
        button_text: 'View Venue Details',
        image: 'data:image/jpeg;base64,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'
    },
    'intare-conference': {
        type: 'arena',
        name: 'Intare Conference Arena',
        tag: 'Conference Center',
        location: 'Rusororo, Gasabo District',
        description: 'A premier conference and events venue in Kigali. Intare Conference Arena offers state-of-the-art facilities for conferences, exhibitions, cultural events, and sports activities. Features include modern conference halls, exhibition spaces, excellent audio-visual equipment, and ample parking. Perfect for both local and international events.',
        phone: '+250 788 111 111',
        map_link: 'https://goo.gl/maps/Example2',
        button_text: 'Explore Events',
        image: 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExMVFhUXFx0YFxUYGBgVHRYVGhYXFxgXGBcaHSggGBslGxgVIjEhJSorLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0lHyUtLy0tLS0tMC0tLS0tLS0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAADAAECBAUGB//EAEoQAAECBAMEBwUDCAkCBwAAAAECEQADITEEEkEFUWFxBhMigZGx8DJCocHRFCNSB0NTYnKS4fEVFjNUgpOistKDwiREY3OU4vL/xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAwEQACAgEBBQYGAgMBAAAAAAAAAQIRAxITITFBUQQUYZGh0SIyUnGx8MHxQoGiYv/aAAwDAQACEQMRAD8A9YxGIcRWzQ6i0IVjrSpEEkGDogIET60DSJYFly0CzsYZMx4RiUBZlTYmZkVQuEqbE6QsupXE80ZH2qtIIjF74HjYajSKoRVFH7UYgcWIWhhZeMyIKnxTVigYBNmjSKUBORYXNrFWfPeKq8RvgCsQI2jAhyJTVwAzSImZ8VpinjZIhhxijBUYqM54Tw9KBM1jiw0JGIEZPWtEkzoWgeo204mjPDJnGMlMwweTMJNIhwoakasuaTGnh5bxlYZJ1EauGLUMc+TwNYlhMoCCgQIzHiPWNrGJZYgVICcVA8z3h6WIuiETFX7SBSF1z6waWMsPAVTICqdxivMnPDUQDmdCin3wo00oCJXDZorCbDGbGukiy4IEpJgaJ8WZc0HnEu0HElLltVoMSGrAUzwNGiM2e8TTYwM0F6GBqm8KxJSorzT3RoiGMqcbxD7Q5iKkjQmALpGiSMyx9pItEOvJrFZSnhBbQ6FZelzyYmpcVJSt8WkJeIe4pEc0AWOEWjLivMVlNYaYNCRhxvMFVhKEgxVGIiynFBoHqGqKZkQZGFJ0i7LAMFKW1hPIxqBmT8E1op5CI2VzWvFCcoPFRmyZRQKXGhhiBaM4TBui3JWIcgidFhpySKwSYHtGVh5sWFYkxyOO82sMVEWgiUE3ikcREVYyHpYWX1qSLUiqrExTXiorrnvFxx9RORodfD/awIyDNhutjTZk6jTViXh87Rmie0MvEEwaB6i+ZwhRmZ4UVoQazQXKc0MCMutosYeSpRpX6RtSZCW9kD4xjLJpKUbOeAEFfdG4vBoPuwCds1BtTlE7ZMNJjlRhZ+cao2aBqYc4Ab4NrENLMpXOBdXW5MbaMGgaQXqU7gIW2DQYn2Un6QLE4Q7o3VZeEVpk0C0CysTgjBmYQhOYikQkys1rRsTppN25QFGHezD4RqsrreQ4LkVghuMWsOrnEJyQgxBc97QvmHwLCpgipOW7iFMmPFdSi8VGImwIlGLUpAEQzxBUxot2yFSLwnNCM+KGdzGjIwJuYhpLiWm2Vps2KalPGwvBhnykwHEYJku4vQV84IzQOLM6JonQGYljDJW2ka8SDSRP1gyZwjH64wRE1olwKUjUXMiuqbFVU+IhZgUQcgy1mIOYQlqgyyEiKsCsowguArmvDAxdEWWc8MVQEGHzwUOw0KAPDwUFnSype41ix1k0QGRiWuIsic9j3GPPk2dVFlE0sHh5c0KtA0Le8MAAXF4yAebPZna8OZoiKqw0MAJxRzM0SM99CImRFLG4yXLSVLUEgXJ0o7c2gbQEyhzeInDPcw2GxMtac6FoUkUzBQIB52jE2t0xkSlBCVCYrMAtIfsg6uAQTVJbdEyyqKtsKN6XKA4/GDJI3RwX9eJxl5vs6UqzqT2lEUBABA1JfvjE2h0uxii2ZKAX9kEHWl2PhChNZFcQPUcdhUkOSE8SWHxjFn5E2mJVR+yc3lHl8nb+Iz5jNcjelDGouMsbOD6bJH9tL09qWR/tUf8AujXXOAaIyOwM/n4Nx1gap7+6r4fWIyMZLWAtLkEBQuKFO4xHNSiR3xD7Wy12ZBRihYoN94iX2+WweWvxGsVlJJNEi/ybdETJP4U24/SI70+pXdvA0ZO0ZCS5lTD+7p3xojpHJIYomDuSfJcc8ZBZmTr8YdGH/Z03iE818WPY1yOgO2cPvWOBSfpFVeNRNICZiCd2YD4RyvSfaZwiEKSlJK1FIJJIGrtrbeI4iftidNLmYRU0ScgFNyW+Lxrjm3wM5wS4ntKcCLqIbhGZipYctHmWD2liUjsTpgL/AIs3+6N7YW38WqfLlqUhQVQ5kVHZJ0bUCN45HHezKUL4HUIkEwY4dr3jlukfS+ZLmKkSwiWspUAtJMwlTDQA9WRWpOo1Ea2wukQWlp6kJUoqLns+yWCUpIcnKxJe6mDtSV22DlpI2VGsmWIIEE6Q2HxclSmTNQosSySFEAFifGkXpcoM+Y98bbRPegUSoUKaKy5T7zGjMfnAg8UpCaM7qNwhhJP4TGiRxggw51i9pQtFmX1B1pDpkxeVh1bomMOd0G0BQKXVCFFsyDwhoNQ9JflRNKDyi6iYIdSknSOJz8Dpohh0mDPEEADfBAYzbCiJhRn7T21Jke2p1aIFVHu0HExye0ulM2ZRP3SDRh7Z5q07vGJckGk7DaG0kSgXU6tEDtKPc4bmSBxjynb20zOnzZiS4yBC5X3Zyq6x0ArQ7glNqnTUGNvDzuyqoSSCHIe4NTv7+MchO2JOk5zMl4jKZc1YCAlCClCVGqqKqOftvvjnzOTVJfv79itJq7KxaMKhKWFVOpVVhPZLIlDshZe5HBNTbKTtIlf3szP2shzEIWJgf7thQJZQ1YEvSpEdm7KXNTLnIQhEtIAJmpSlYP6pLJWkoIIIq7g1jQ2vs5RmgSJM4pVLCQZSVzUhbk55gCTqdHepJGvPKE1yEkc9iZwqpSQJhIlLp2UXVLmEAsapY191W+LuPxQUUZgxIqNyq5gxOhcd0Wf6tYxaVJOGmlvaIldSZyCCK5rzEkuCwFH1ittDo9jyRlwUyiEhzvYZqXuT4GNuyuSnvW7+hSjRqdFNkScSuaJuYhKUkBKst1EFyz7t0dIjobgv0L/tLmHVvxNHJYfB7RwyiZOFWc/ZVnlrICQ5BDKFXi0naG2AOzhikvpKFQ6X9pXE/unv6p3Yk0kdwjCpQkJSEgAEADQCgud0RUkv7WvDdHNzZW1C7TJo5Jw414oitNwO1f00zWmaQNOUGy8UR3nwfkdVkJDObD1aJS0Eamx8+Ucd/R21G9qaT/70lOnPfEZWydqG8yaBT/zEvUV9+HsvFeYu8f8AmXkd4EcTfdw5QyJQ46eccpJ2HjfenTv/AJCfkuIo2RtDrU/ezRLbtffpPaalXJvEvGuqKWdv/F+R1mM2bKmgCZLSsAkgKSlTGzhxQs8YHSjYeFl4WatEmWlaUKUlSQQxBFQAWtwhYbZW0Aa4hQDn84k070mMefsTbM1JRMxEtSFApWk5KpOcM4luPctxh6dL4occjnya+5zGExn3bqvmLAUsAd3GNzYigqah1mWCknOA5QDLU5DMS1bQOX+TLHe6qQly7FSyGsfzfKNjYHQHHSFpmLmSDlJokzQ6WoxMssQSatui5STTBJnH4JRQkozZQTlStTlamzErCA5Q5T4cYJLny+tfNlzZaqCpyUMpLLZIzDMorDqPu2qBHZY78mixh1okqAmKRkzFSmNRf7saOHHCMrHdHE4WalMzGSZKj2gjKEFaXPYEw0UzihBd6iPMeHIzWlzMfZu2FYaYudJBUWWFrq2dLlKVyq3FspD03F/VMB0iQpKTNBlkgFyHAJFi1Rfd3x5Ls7ZqsThjikTZMpeZAIWVpJXcrSx7LPl7N0lmcR2eIUClISrMyRq70vx598bYZyxvS/IikzvkkKAUCCDYggg8iIj1Ijz7BYiZJOaWsp1VqDzFj52jq9mdIkrYThkV+IVT3i6fjHdDOnxJeNmwEgaRLPBBJBDhQINiNYgZO6NtSZNMGqbA1LiapUDMqLVEuyOeHh+p9NCh2hUy/wDbpY94eP1h/wCkJX4k+IjyjDiVOWJcmdOWs2SlU/vJNAkcSQI6HAdHUyyCqZMmzBVjNnGWnmM/3p4ezzjz9bOul1O4mbSlJTmKhl0Yu53BrmMDaW2pkwfd/do1PvNzsnz5QBSHVU5pm4nTcBoOQgW0MRLkJzzZiUhwO0wqbAcfiYWoVGRPkGvjmNSfHXnE9m9H5s8ukZUG8xVB/h1V3U4xpSZyHKnw68oBZUx0ocgDOkaubExuStvHKMwlEOQFJmpSKVCQ72ENJVbYm2F2XsCTIY+2v8aq1/VFk+fGJ7bl55E4b5Sx4oMBG283sIQosT/aoNhuEVVbWM5KpZlyiFpKTlnJNCC/Gz+EGpAkzzHYaiEYVS1EqTPmBJUSrKEy5ktAD2SKClKx1e2OkGMQhS05FFLkpUEh0gF2oS9tN8cChJJkSpaBMKOsLA5wxKtOBI40hutxDqQleVQSolwEgU7LtesVtIONSMckZKdxZ0B6fzmdwHeyEGwG9IuIJhumeLmoE2WpeR8oPUyj2iAWYAk0I0jiukKBLnLSD2XJRq4KEFWre0Tbzg/RvaXVyJaFAlJnS1u7EMiSluIq/c2sRDFGSTtmmXM4vckW8T+UTGgkGaf8uTqH/BAR+UTF/pj/AJcr/hGTtXDhSs6HKFNlUzOwALON8U8Ps5cwtLQpZYlkjMWTlzFhX3k/vCDQuZWo31flBxZ/PK/cl/8ACBq6eYs/n1D/AAp+SYxF7JmgEmUoAEpKiMqQU3dRoBxJaDYHo/PnJUqVLMxKPaUgpIpuL9rdR30haY/rDUzU/rviv7yrwPyRED0yxX96V/rH/ZGGdnrdsindIs4dYdNRS2umsTRsqaU5xKXloSrKWDnKHLUrvh6EGo11dMMT/epncqYPkIEvpjif088/9Vf/ACjO/oqZlK+rVlD9pizgtldva1a7VtAVYchfVsc75W3l2DHjvg0INbNRXS7En89P/wA1f/KBDpNif0k3vmr+sWsL0SxcwLUiSVBBIOVSTVKQpgMzqJBoBrFTDbLUpfVsyicrFxXcd0JQjyDVI6/YuMxCpbqUWCiCVTVBgUKmCmvsKHh3UMD0mmzZktBGUKmJQcqis9oJNFFTE9pt0Amz1lakoCgENLmAVGdKJ5f4UMYklYRiUvQJny6ORT7t7cIaw4+hDzZLas7Y44qM5LTAARlKklw5lhgQrfncge9HFjEKnSFyiQrqzMKSTVRUSxr+yI1tjSPvwpQIAKlCuqQVHyMA6J4QS0TVTEpJX2UoXmyqqTVtC7FyPOE5KN/vUStxV9fYFkKUHKslaSkIlJNZgZ8wDFKgDpd4PK2nMmzs0tTH3XzCmUAAVYClq+Ubm0MPJSnMkAdrOU6l0ZcrFJsCxII0IqIrScJhEylJAkKWTLUFETR1ZYlQKhpQ2NWMcUtM3b3PqVKFtlvZHSJeYpnyyybrQCsDioBz3h+QjssIhExIUhQL6guAI4jZqcLIlIEslU0LczAc3WdogpIFqC/aBcggG1deMTKmOPebMO00wG2ZNRYHi1ouGR3RatcT0jDlco9gsAXY1BI1Y+YrC62cGMibkKluuXM7eZ2pKmL7KTQ9lW/2o4rDdIVSlNmWuWUsykFJSwYEAkih1BbeARD7M2woFUxSnS9UlTlYerJVVmY0eqWtSK26sbR61gZhMtL58zdrOAFA65gmgPKkFM6OQ2V0mAUlCc01JD1skcFXS1Axo8V82LkzjPTOVPwzvMSQM0tOryyQEMA7poa0FH6o54tENNHa9dCjjMR04TmPVoCkaKJKSRvYikKH3nD1DeLEzcHs+SpElaU9aM4VKHXLUpYJTMUPerbStGFBwW0+kc+ecq50wIIDBBShVy2ZPspPjQVvGjKwa5cvqSZZlBQUJavtKwCaEpZA7RdVQpu1UVgWPw8iXKntJUmb2eqTLoUoBGcKWpZUqnCwHMc0sc572n/v+6EpWS6LTZ8tbpkykntETJiZk1buaOFZZfYowNamrxe2qqVNUpWImEnI8pnIMwFRQAEggJIz1/VqY4uTtJbFPVTilgnsJy9lgAM1S7gF31OhhS8WEFRRJWAlJUQtbvlBAYJDa/GM4ud1XqiozpHR4GYCnFBQJSopURmUCP8AxMpqv2bcr7zA17RBQmWC6UKUctSe0wUHPtA7jZg0GweyEJw+IWk4hRmJCiEylJCSZqJhIzirXJ3A13VcPsHEKUFiRP6uhUorSl5buooSwOYpsz7i8ROL4WU4tBdn4xKFJ7BYky8qSUuFnKQS/wDJoDgttYWROJP20qGdLZZeWjpLdvNXSrxblbMX9qSEIKpDqUpK/blhKZM1IdCgMxStAeoDmNXGyMKiXLIlLSpZROOSWqYSM6VrStiU5lBwTS7gRpCsa+LeN4t18DnpeKwiSjMAStGcnKVBlBwAQaAEH3TBtoY/MklxQOS4JIFQf1ubVjKxezSuYlSQoJSnIAZSkkpBJB3JvausGVs8CUoELzEgJd8uUvmozmoRbfGbeOq1WyJO3ZR6USyVpJIBRRQJJPaSgpalQwED2ZNKEhBzsMrETQkO0oMA1uyo30IvF3aGH6ybmKQXCAEqUzlISMv6r5RuvekW8Ns+ZJmJnESikpCuqVNGV1DMQmpYgKNtwANHjpxa9KSImrbABGbB4c/t7/xmL/RnbowyzLmLUJapZKQ+ZImKmBIPVsC96lR5Q21JqeqQT1SSSuYUSyFJAWor7JFxU23UijN2a7rShE1QSnKApjkfOJgClBJAJIs7xrknFLeF0Xsf0tnJRnSkLlkpypUtSkKSvrK9UtJQKoVRtRHVdBMeidhTNMiVKV1igEy3SlwEh1tvJGjR5yZCyky1TJYSkshCapyjMy3GjlQchi1Dv9J/JzhurwS3SxVOKiQymGRAduQB5GMpadO41xybe8xekmxOrWrEKKJOHV21qIUsyVqUxSEJUCoFRo2igDaC9KcB9kTJnyFSnRKCVp6ts6R2VzFpzsoKMxCVAv7Yru4PZ+IVNxiZK58wyV4hSSgTFEAdYSKF01JuH1j0j8ouJH2QrSES/wA0VZcxyTCSUJIbK6paLaPYtClGmrGnabRodH1S5uAStMkBUxyiUDmQVkBlZZilCinLPYGPOk9JFmdkm4WTnCwkqSlUoy1hTELluUnKbgMaXjtOh+MQNnSlFkpkukBRbrClRzEUca0Y6xxm1dsIOIWopCnmZnIQCSOKOzmpYFjvEJNW00KUqqjpcF0sErMiaEqVMQpIyPLAHXKkZiVEknMl2DM7Obxg9H5YM2SS1VJexu28xWHSNNEhIo5STQZKqSWuFOov47ohg+kJE1KsmbKrMAAzl3qS/gPGKhkUeRlrb4i2tMAmY1LAkLUoA1HszQdaUVGFjApM3OpLDrBcFKXBAYnujtEbWkSyuYFt1kxU2YFAqyshASEgBiQopYi+Y7qZGL2nhpgKVS1KJWFZ8+RqEFKQCaVuCR4vEvtE1N/Da6ksbZcx1pJyZQia5SE07Ey7CoqbUPfAU7VCzMSzJR2WJzgpSw9kWBdy3i8dThuihUErQmWBViMQixDEH4u0DxnRBKEqKlYbK1R1ylkigokIJe1gY532hOXxRfp7miUlGqMbEYxIQvN2urCVs57SSGABDahQJcX742dpJxWHlpWRmlpKW/swggJdI6pPap2hXdxgOEwygShBASwaZ1U5T70v1TlmDUArfd0U/ohPxKUlcyWA4UFISpC6aFxqKEEROunvTRtFavl/g56XJm4lAShMgpUpaiQlWcFalTQRQ9kusAcBzgMrY81b9kOFkMqhYEB2vWrbyOEb2O6D9WEJRKE8tlGaWk5UJL+3mQxdVO1vpSMKd+TrFzSjrFTBlAS5KFWoFVmXIu0bqWN8wlGS5Gfj5fVzepW4mnslIYA5khKXykjUhyxtFfFbYElapa0tlISQRVByOFJIqGf42Mak7oAEmuPTSlVEENpQK+DROd0OlrUVKx0sPolK1AUagKKC2sReDnIhxnwfEJsjYs5c1YzJQiWoFS12ZguwIqEkKZw2ptDdI+naykScKopSkAKni8xQLnK/uPqangLyVslc1MyVMxk0ywoVKVNiCQDnUnMmoYJrfKHikvogjSYO+WoeU2sEe09nx8WEoyRUTt5Cu1MlArNVEKUHOpYWeGjQT0OlarU/BLDu+8hRg+2djvmT8fQZWw8eZsp1T1AJIWogpuSAABq1XL84PO6IYpeSWyxLKjmPWITkDg5gkJBUak6ORU1ePVJiUaOYAptBG77XJncsCXUwJnRSWsgqWQRZkI8rQM9DxTLPYCw6iXTjRq8Y6EndDEmOSo/qQ9hDoY0voqrKU/apoSaFKUoSLuzF7xZw3RdMtKh104pKWKSpLENoAHFNzRoMqGymHqS4fhDWCC4IoyNhyJKs6EEqG9MxR0FyoA2HhBPtuIHsYWUR+ssS6cu14Rb6gxH7IqKedc/UFh6OvsBTjsX+jw6P8ZV5IEZc3AYla88zFIcPlyicCl7sRMA3UbQRp4mRkSVqJyi5AKmcsLRzG1ukCZSXShRe2ag79B4vwidquSW/w97IyKMfmb/fsaeIwcw+1jDyTKln4rBMYG39l4oZRhjOmXKlMlDEHchIfk+o3RkTtuTluSopG4HIH4Mlyab4PI6W4hD16w2DgvSt3138IJ5Mq+RJ/el+DnlPG+Cfm/c5jG4PFkqJlTKF1dkhjvzgBjFHFJmoyoWSmygCcpylRrwDjSxrqY6raW2cViAQetSlsrBRAuCXpyAt3xmYLZsoOSg5iLnKQ/J33GOjHnajc6+y3nPS5AMPsTFTJmTIklwRLCkqJdjRKFE0DchrSPTOjHWScOZSp0tC1KBqcyUAIIdYJequrDAkMDUPHMbPxEiWQsSkZwB2glxQ3Ae5DVtSsb+H6ZlKU5kS37LpAoSRUg0cA08DHPPtM7+W/T3NI0t5DA9AMGFCYcWDMSsTMyAAMyVvUEqo96xtbb2Fh8TKVLOJLKyqZKQ4UhRD2J95jW26MrFdLkuClC7B3W1/2TQC73rvitP6YKdTSkJS7BRUTlGqtcx1FtYldryvhD1Rdx4FbpJi0YDCIwKClblRK1JSr2lqU2RaSEsF+070ejh/N1SjdJBB0ds1CXFAbVfTfHW9IOkCsQxyy8yQEglBdKaHsqJIBd+PxjmJmKxHaZTBRctRyHZyzkB3bjvjuwylJXLczGTTZTEtw4d3apoA7hxceVu6wkEEOkMaDtFXEtZ+UQldYhaVpSpwcwVq5r5kmNvAdIsQh84zJUrty1ITkWjUF6eKdeAbTI5f40/9itFfE7OM4BcsBQDZu0bVFi5A724RtbD6OYZU3JNM4FXsqzAgKYKBoKghxYGnNrGHxsvIpEoFKVFyk1voC5FNDccKRCbgipjlVSxLi7klJJYVJPfHDLtMq0vcWqXieibOweGTLTLRLlLCQzkiYfEknfrSLP2DD/3eX+6PlHAbP6OTnCghbXdI0H6ymQNNY9A2BgVpzpXMzpfsVzZA5qpdBUNQP3Wgi8sk3Fuup0wyQtKUUQVsjCqvh0eBHkYJg9l4eV/ZygjXsqUnyVGkmQNQe4/whKk93eIw283zfmzq2WPovQEoA+9MGn9ovyzQ3V/+oseB/wByTE8kJMuFtZFaIrgQEpX6VfeJZ8kCILwaj70o/tSc3ksQbIeMSqN8Pavw8l7Bo8X5sp/0arVOFV/0VJ+OZUMdnq0w+GP+NSfh1Ri+PXruh3MGpPil5exOzRn/ANHn+7S/81X/AAh40MxhQfB9K9fcNHj+PYBkMMURaUmG6qEXZW6uJCVwg5TDet8ILBiRwETEn169ViQPrjDZ4TQWESgc/X8IRQPXd/GIPa/8hCC/l8RCaDePOkZk5SSGdinsmvtA0ZQNKF4y53R4G2TvQUdzy1AHwjSCz6fvhOY1jmklp4ro0n+TKeCMnb4nMzuiCVXky/8ACpn/AH5Z84rK6Iot1ChxC0fFimOvznfDZ317qRW2XOEfVfhoyfZY9WcWOiCUksmaH0FX7xOhldE6vlnfuE/ELMdqF98LrD69euEG0x84esvcXdekvRexx2A6PJlFQ6laswoFSypjZ6uQDSzWiqnokWL9ceUo/OO7E3lEetinmg0k4cPFh3V/V6I4aX0Pawn8PurB3cOb8Yl/UtLuetLfilp+axHb9c3r0IbruELa4/o9Ze4d1f1eiOOHQ9BYlKzrdCAf9bRMdEpYvK8Zks+Iykx1qp3D13QPreHl69eJt4rhBf8AT/kfdFzb9PY5hHRKVpJlX1L8PdljcBFqT0Zlj83KH7PW+WZIjaUfXnr6bhWT8/hv+vmd0HeH9MfL3K7pDx8zPlbClJ91Gv5sH/coxfw+ClookZf2QhGre4kcfCEDwDfw3dw/eiebR/n+L+MHeci4bvskvwhrsuNcvyTCEXyvxU6/9xMG6x+Xd5RWz19fT9YeERK6evX/AOeMZTyyn8zs1jjjHgiyAkVCQOQHr13wivjFYKpp6Px/jxhZvXr14RBdFgTLV5Vp/KGM31/PhFfMfXrX1o6zn1vMAUH6313P9IiZm71T+cCf5wn5aUgHQbrfXx9coYL9U+kDO7+FqwgILCiRmcfgIUI9/dCgsCxm7uNfnD9Z6p67oCF8O57fxiJmcQPlx5xVk0Hz9/AXiJX6bX6CApJPyppvMMC513C9t8LUOgyli3dY95pCzijeW6AFW59wiJck8A26FYUHMy3IxBUzfu52galB24Q4Ta1RufyaACZXfxHziGdnGnyMNuPdCKm3004QDJZv518bwio+vMRB91x5boTvrXRrcjABJz69M0LN6r6aBhXw1ex4wwVyHLzHCCgChXL4n1zhZvVIG+8ctPL15QrcvV9x4/ygAmVev5evKGCh/N/4+vhBSVDWnrQN9e6EoeHnT4/AwbhDltw+Bhgr1/H1qYklG9+L/M6Uu8Pl4u+m9/r5CAZE+tPX0EMfXfx5OW4wQAA3a/ePeI8QNO+EEi3pz9BygsQNJf4cL1r3AQ6Rb1oT84LTTQE8tB3cBCSmtz7XKgT8ILACx+Q/dB+UT5PwbX3h8xDoAox0TY7yRb6w5T5EfumgHc8AESN1dA2tKfDXhEj330+m7584id3J+CS+XWlaQQJerX0FW/EA3i8FBYMV9a8j8PCFTeN319eMTSinkeevI074cg8S3efD08FBZBtabh65+heJEXf169NE9znj6J8+6GSi1dfVPl4boKCxszeP8fX0hx3X9c4kRQ2vy8vXK8PqR5keHr4wbgsgkAaeBMKDJAIe/d/CFDFYHIeW7QDiXvEBl0IPzPPxhUNqnU35ix8IYqLP4P8AxaFRRKYdHvUlwKc4YzNRTQNUxBEs63N7ebO3fEizsSKb3+ogAdFKNbf9IHnLVJc6AfKCCV2Tck8/IA+BiRlkMHPxuPD1pAAIrYlmFLuP5w6vdufH4mJolvm8w3yB9aQ8wAAP8f8A7EQCBKFD4+HKGSKWIfg3dFkJc+qcacuEDTKpVgQ/h3/TxhWAFAIoVVGjMw5tEsp0FDvLMfX8zBVJBIV3GpPi2vPwiWQWoN3Pv18TyhhYLL4i4D+j3eEPktfhwOoofpaJhL2uKG58vLlDNluzbqUPPfagDCEFiSkVHjfxH14UhszO9Ry+B+njEuqfjuN691z5Qydwo1xQcS1X5n0HQCyFqd4rTl8zCDCx0d7Dmfk0SUGowItY0tQD8IhiDdzwqzmtDwHriUKxNZwA2j14DmdYglJfeeFnIqW4AecTQrhy9pTnVVucS6rQFW4AFiBYmz/y4w6CyOTw3n8I461374cE1IuxUxAethS2ohxLerhvZoHYC7g8XHhESBu9pTAvdq03WVAA2XdoUjeBUGnGvlEgiod/aPfQ1OvoQRKTTiq3IFq6+y/fwiCW0vmU9/1tBS7DugAiUAigB7NS1ik0+L+ESS1+RA3A0POj+METodHUN34vC0KWq29ynuqRWx9keMAgRkJs1LHShsQ1aEt4wlIDuDU04ZhYnmG+ESRJTQKLgDKcxq4YPU8L8YIDcl/wljbceD/MQwsE3C1hrxT8H7uETlpzBrg8nbQs9xS8NlcAZkh6HVlUY0LbvEQwxA63IXSRq4ACmJBAJsUg24PeGot8CXJInlqWe1CK0Oo4bwN3eUEWoPCw05jypFBO1kCh7Lkup05QQmYrOFFXsnq11sGexeCjHpKVKKZgEuWmYpLodBUkqyEaKAZ0nek6iL2MuhO1j1LRJqeXMOaPu/a8bRNSTRxwqPh6odIz0bZl5gGX2rZWUQDMlSwWDkOZqTlajHUNBdk45E9GZCFhICSMwAouWlbDRQZQcPysIJYpJW0CyJukwsyQXNU/6R/uBPxhoupYgFz3VHd2YURRVlIyu8a2PJ6A/GHLOXo2lu/smFCiTQjld1XPO3iB8xDsEpAYpfkB4AkCFCgESMrMpqHLcc7XB84dVCac7Dk7X8D3QoUAgCWIJLPxJPmkkeJicxBAoC4LljYbyxHwcwoUNLcBJSw4rVuIprva+lYRGU0BrWnc59ofM1hQoHuAGV5jlDPcUY8a1AHiaxKUklIIHAMwcdzMIaFCYxpymZVN3nYMQBQ8acoTO240pQmlrDKGhQodCBTFCWDmUQkNWparBIoTu3X5sZCQXrYVVWgvlADaa+goUFBZPIdaGj/svZ3O7T6GByg57JZ7pFAEjdatfTQ8KBrcBNAfkWAceynhU+m3RFBCSctnypIYHcfd3gnuhoUKx0GmBqhLMMqbXJF6nXKPGJiigHDhO678A34fjChQIkihGUpS3ukl2uMocGu8wpYzBLWCiSHL1CrGm+FChtbgsikkBzYKLWDOop0G474dIopQ/Fm7hlejjcfGFCgSCwk0s6XZ2IPHSwozJ8YcAKNLEfEVprr/AKYUKHQhkzw7qIq6SHJqFMGZO9/EboSUsCogOnsqoHyXc3ehBbieUKFFEg0oQAAGUQ7Xqmj0oHNOZAggkpGVgnKUjKctw1jqzNChQJsGh5ctN2AdRqHouxrQmo+HhOXLSnMWAF1U3BwQbs2n8XUKGhUIyj+F+OYh+6FChQhn/9k='
    },
    'waka': {
        type: 'gym',
        name: 'WAKA Fitness',
        tag: 'Premium Gym',
        location: 'Kimihurura & Downtown',
        description: 'Modern equipment, coworking spaces, and classes like boxing and yoga. Very popular with expats. WAKA offers a unique blend of fitness and lifestyle with high-end equipment, professional trainers, nutritional counseling, and a vibrant community atmosphere. Day passes and monthly memberships available.',
        phone: '+250 788 222 222',
        map_link: 'https://goo.gl/maps/Example4',
        button_text: 'Get a Day Pass',
        image: 'data:image/jpeg;base64,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'
    },
    'cali': {
        type: 'gym',
        name: 'Cali Fitness',
        tag: 'Fitness Center',
        location: 'Gacuriro, Kigali',
        description: 'Known for its community vibe and high-intensity functional training. Great for a serious workout. Cali Fitness specializes in CrossFit-style training, Olympic weightlifting, and group fitness classes. Features include outdoor training areas, recovery zones, and experienced coaches who focus on proper form and progression.',
        phone: '+250 788 333 333',
        map_link: 'https://goo.gl/maps/Example5',
        button_text: 'See Classes',
        image: 'https://images.unsplash.com/photo-1571902943202-507ec2618e8f?auto=format&fit=crop&w=800&q=80'
    },
    'nyarutarama': {
        type: 'gym',
        name: 'Nyarutarama Sports Club',
        tag: 'Sports Club',
        location: 'Nyarutarama, Kigali',
        description: 'Offers tennis clay courts, a swimming pool, and a gym. A great spot for a full day of activity. This premium sports club features multiple tennis courts, a junior Olympic swimming pool, fully equipped gym, spa facilities, and a restaurant. Perfect for families and serious athletes alike with coaching available in various sports.',
        phone: '+250 788 444 444',
        map_link: 'https://goo.gl/maps/Example6',
        button_text: 'View Membership',
        image: 'https://images.unsplash.com/photo-1554068865-24cecd4e34b8?auto=format&fit=crop&w=800&q=80'
    }
};

function createCard(id, place) {
    const shortDesc = place.description.substring(0, 100) + '...';
    
    return `
        <div class="card">
            <img src="${place.image}" alt="${place.name}" class="card-img">
            <div class="card-body">
                <span class="tag">${place.tag}</span>
                <h3>${place.name}</h3>
                <div class="location">📍 ${place.location}</div>
                ${place.type === 'gym' ? `<p class="description">${shortDesc}</p>` : ''}
                <button class="btn" onclick="showDetails('${id}')">
                    ${place.button_text}
                </button>
            </div>
        </div>
    `;
}

function renderPlaces() {
    const arenasGrid = document.getElementById('arenas-grid');
    const gymsGrid = document.getElementById('gyms-grid');
    
    for (const [id, place] of Object.entries(places)) {
        if (place.type === 'arena') {
            arenasGrid.innerHTML += createCard(id, place);
        } else if (place.type === 'gym') {
            gymsGrid.innerHTML += createCard(id, place);
        }
    }
}

function showDetails(id) {
    const place = places[id];
    const modal = document.getElementById('detailsModal');
    
    document.getElementById('modal-img').src = place.image;
    document.getElementById('modal-tag').textContent = place.tag;
    document.getElementById('modal-title').textContent = place.name;
    document.getElementById('modal-location').textContent = '📍 ' + place.location;
    document.getElementById('modal-description').textContent = place.description;
    document.getElementById('modal-category').textContent = place.type === 'arena' ? 'Sports Arena' : 'Fitness Center';
    document.getElementById('modal-phone').textContent = place.phone;
    document.getElementById('modal-map-link').href = place.map_link;
    document.getElementById('modal-call-link').href = 'tel:' + place.phone.replace(/\s/g, '');
    
    modal.style.display = 'block';
}

function closeModal() {
    document.getElementById('detailsModal').style.display = 'none';
}

// Event listeners
document.querySelector('.modal-close').onclick = closeModal;

window.onclick = function(event) {
    const modal = document.getElementById('detailsModal');
    if (event.target === modal) {
        closeModal();
    }
}

// Initialize
renderPlaces();
</script>

</body>
</html>