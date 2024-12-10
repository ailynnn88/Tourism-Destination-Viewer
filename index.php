<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home" data-section="home">Home</a></li>
                <li><a href="#destinations" data-section="destinations">Destinations</a></li>
                <li><a href="#map" data-section="map">Map</a></li>
                <li><a href="#gallery-section" data-section="gallery">Gallery</a></li>
                <a href="logout.php" class="logout-link">Logout</a>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="home-content">
            <h1>Tourism Destination Viewer</h1>
        </div>
    </section>

    <section id="destinations">
        <div class="container">
            <h2>Sergio Osmena, Zaboangda Del Sur Tourist Spot</h2>
            <div class="destination-list">
                <div>
                     <img src="images/lantay view.jpg" alt="Lantay View">
                     <button class="visit-btn" onclick="showDescription(
                        'Lantay View',
                        `The Lantay View Mountain Resort in Sergio Osmeña, Zamboanga del Norte, is a scenic destination perched on an 860-meter hill in Barangay Penacio. Known for its panoramic views of the valley and surrounding mountains, it offers visitors a tranquil retreat ideal for nature lovers and photography enthusiasts.Visitors can enjoy alfresco dining, explore the Palm View Deck, and even fly drones with no permits required. It’s a peaceful spot for relaxation or overnight stays.

                        Entrance Fees:
                        Adults: ₱50
                        Kids: ₱30`)">Visit</button>
                </div>
                <div>
                    <img src="images/view point.jpg" alt="View Point">
                    <button class="visit-btn" onclick="showDescription(
                        'View Point', 
                        `Known as the Little Baguio of the region, it offers breathtaking views of the surrounding mountains, Masapak Falls, and a nearby river. The area is notable for its cooler climate, making it a refreshing retreat from the typically hot and humid Philippine weather.
                        This spot features various attractions, including observation decks with telescopes, creatively designed photo areas like giant chairs and photo frames, and even a wooden ship overlooking the scenery. A café on-site serves locally sourced delicacies and fresh beverages, such as avocado shakes, making it a delightful experience for both the palate and the eyes. 
                         The Viewpoint is also popular among locals and travelers for its serene ambiance and opportunities for photography and relaxation. 
                         
                         Entrance Fees:
                         Adults: ₱50
                         Kids: ₱30`)">Visit</button>
                </div>
                <div>
                    <img src="images/acis hillside.jpg" alt="Acis Hillside">
                    <button class="visit-btn" onclick="showDescription(
                        'Acis Hillside',
                        `Acis Hillside, located in Barangay Tinindugan, Sergio Osmeña, Zamboanga del Norte, is a serene getaway known for its cool climate and stunning mountain views. This popular spot offers activities such as camping, swimming in its pool, picnicking, and exploring its picturesque landscapes. 
                        It’s an ideal destination for nature lovers and photographers seeking tranquility and scenic beauty.

                        Additional amenities include:
                        Cottages: ₱500
                        Swimming Pool Access: ₱50
                        Overnight Cottages: ₱1000
                        Camping with Your Own Tent: ₱300
                        Exclusive Day Use: ₱7000
                        Exclusive Overnight Use: ₱10,000

                        Entrance Fees:
                        Adults: ₱30 per person
                        Senior Citizens: ₱20 per person
                        Children (5 years old and below): Free`)">Visit</button>
                </div>
                <div>
                    <img src="images/nikka's ridge.jpg" alt="Nikka's Ridge">
                    <button class="visit-btn" onclick="showDescription(
                        'Nikka\'s Ridge',
                        `Nikka's Ridge, located in Barangay Tinindugan, Sergio Osmeña, Zamboanga del Norte, is a picturesque mountain destination. Situated at a high vantage point, it offers stunning views of the surrounding valleys, mountains, and the sea of clouds, particularly during sunrise. 
                        The area features a peaceful ambiance, perfect for nature lovers and those seeking a serene getaway. It's also popular for its outdoor café, where visitors can enjoy coffee amidst breathtaking scenery.

                        Entrance Fees:
                        Adults: ₱50
                        Children (12 years old and below): Free`)">Visit</button>
                </div>
                <div>
                    <img src="images/gantao hills.jpg" alt="Gantao Hills">
                    <button class="visit-btn" onclick="showDescription(
                        'Gantao Hills',
                        `Gantao Hills, located in Sergio Osmeña, Zamboanga del Norte, is a beautiful and serene botanical garden often referred to as the Little Taiwan due to its lush landscapes and cooler climate, reminiscent of Baguio. The area features an array of vibrant flowers and plants, making it an ideal destination for nature lovers, photography enthusiasts, and those simply seeking a peaceful getaway.Visitors can enjoy activities such as leisurely walks through the garden, taking photos at designated photo booths, and having a picnic while appreciating the cool weather. The spot is also perfect for overnight camping, offering a tranquil environment under the stars. There are facilities available for rent, such as tents for campers, and visitors can enjoy Wi-Fi for an additional fee.

                        Entrance Fee:
                        Adults: ₱50
                        Children (ages 4-12): ₱30
                        For those interested in overnight stays, camping rates are:
                        Adults: ₱150
                        Children: ₱130
                        Wi-Fi is available at ₱15 per hour or ₱40 for 4 hours. Cottages and umbrellas are provided free of charge.`)">Visit</button>
                </div>
                <div>
                    <img src="images/la presa strawberry farm.jpg" alt="La Presa Strawberry Farm">
                    <button class="visit-btn" onclick="showDescription(
                        'La Presa Strawberry Farm',
                        `La Presa Strawberry Farm, located in Sergio Osmeña, Zamboanga del Norte, is a charming destination where visitors can enjoy a peaceful retreat while harvesting fresh, ripe strawberries. The farm is set in a cool climate, offering a refreshing escape from the heat, and it’s a great spot for family picnics, photography, and nature walks. The farm is open Wednesday to Sunday, from 7 AM to 5 PM.

                        Entrance Fee:
                        ₱50 per person

                        Visitors can also purchase freshly picked strawberries at ₱10 each and even buy runners or seedlings for ₱50 each.`)">Visit</button>
                </div>
                <div>
                    <img src="images/cecilia's plate.jpg" alt="Cecilia's Plate">
                    <button class="visit-btn" onclick="showDescription(
                        'Cecilia\'s Plate',
                        `Cecilia's Plate, located in Mutia, Zamboanga del Norte, is a charming destination known for its refreshing cool climate and scenic pine tree surroundings. The area offers a peaceful environment, ideal for relaxation, family picnics, and nature walks. Visitors can enjoy its serene ambiance, which is often compared to the cool atmosphere of Baguio. For those looking for a memorable experience, the location also offers great photo opportunities amidst the beautiful landscape.

                        Entrance Fee:   
                        ₱50 per person (Consumable, can be used towards any purchases at the site)`)">Visit</button>

                </div>
                <div>
                    <img src="images/falls view camp.jpg" alt="Falls View Camp">
                    <button class="visit-btn" onclick="showDescription(
                        'Falls View Camp',
                        `Falls View Camp in Sergio Osmeña, Zamboanga del Norte is a popular destination for nature lovers seeking a peaceful retreat. The area offers stunning views of waterfalls and a serene atmosphere, making it ideal for relaxation and outdoor activities such as camping.

                        Entrance Fee:
                        ₱50 for adults
                        ₱30 for children

                        For overnight stays:
                        ₱150 for adults
                        ₱130 for children

                        You can also enjoy amenities like Wi-Fi for an additional fee.`)">Visit</button>
                </div>
            </div>
        </div>
    </section>

    <section id="map">
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/d/u/0/embed?mid=1MyUhJdob4T6JdtoC-ZVc2pHcOGjZ-Xk&usp=sharing"
            width="600" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>



    <section id="gallery-section">
        <h2>Gallery</h2>
        <div class="gallery-grid">
            <div class="gallery-row">
                <h3>Lantay View</h3>
                <div class="row">
                    <img src="images/lantay view1.jpg" alt="Lantaw View 1">
                    <img src="images/lantay view2.jpg" alt="Lantaw View 2">
                    <img src="images/lantay view4.jpg" alt="Lantaw View 4">
                    <img src="images/lantay view6.jpg" alt="Lantaw View 6">
                    <img src="images/acis hillside7.jpg" alt="Lantaw View 7">
                </div>
            </div>
            <div class="gallery-row">
                <h3>View Point</h3>
                <div class="row">
                    <img src="images/view point1.jpg" alt="View Point 1">
                    <img src="images/view point2.jpg" alt="View Point 2">
                    <img src="images/view point3.jpg" alt="View Point 3">
                    <img src="images/view point4.jpg" alt="View Point 4">
                    <img src="images/view point1.jpg" alt="View Point 1">
                </div>
            </div>
            <div class="gallery-row">
                <h3>Acis Hillside</h3>
                <div class="row">
                    <img src="images/acis hillside1.jpg" alt="Acis Hillside 1">
                    <img src="images/acis hillside2.jpg" alt="Acis Hillside 2">
                    <img src="images/acis hillside3.jpg" alt="Acis Hillside 3">
                    <img src="images/acis hillside4.jpg" alt="Acis Hillside 4">
                    <img src="images/acis hillside5.jpg" alt="Acis Hillside 5">
                </div>
            </div>
            <div class="gallery-row">
                <h3>Falls View Camp</h3>
                <div class="row">
                    <img src="images/falls view camp1.jpg" alt="Falls View Camp 1">
                    <img src="images/falls view camp2.jpg" alt="Falls View Camp 2">
                    <img src="images/falls view camp3.jpg" alt="Falls View Camp 3">
                    <img src="images/falls view camp4.jpg" alt="Falls View Camp 4">
                    <img src="images/falls view camp5.jpg" alt="Falls View Camp 5">
                </div>
            </div>
            <div class="gallery-row">
                <h3>Nikka's Ridge</h3>
                <div class="row">
                    <img src="images/nikka's ridge3.jpg" alt="Nikka's Ridge 3">
                    <img src="images/nikka's ridge2.jpg" alt="Nikka's Ridge 2">
                    <img src="images/nikka's ridge4.jpg" alt="Nikka;s Ridge 4">
                    <img src="images/nikka's ridge1.jpg" alt="Nikka's Ridge 1">
                    <img src="images/nikka's ridge5.jpg" alt="Nikka's Ridge 5">
                </div>
            </div>
            <div class="gallery-row">
                <h3>La Presa Strawberry Farm</h3>
                <div class="row">
                    <img src="images/la presa4.jpg" alt="La Presa 4">
                    <img src="images/la presa2.jpg" alt="La Presa 2">
                    <img src="images/la presa1.jpg" alt="La Presa 1">
                    <img src="images/la presa3.jpg" alt="La Presa 3">
                    <img src="images/la presa5.jpg" alt="La Presa 5">
                </div>
            </div>
            <div class="gallery-row">
                <h3>Gantao Hills</h3>
                <div class="row">
                    <img src="images/gantao hills1.jpg" alt="Gantao Hills 1">
                    <img src="images/gantao hills2.jpg" alt="Gantao Hills 2">
                    <img src="images/gantao hills3.jpg" alt="Gantao Hills 3">
                    <img src="images/gantao hills4.jpg" alt="Gantao Hills 4">
                    <img src="images/gantao hills5.jpg" alt="Gantao Hills 5">
                </div>
            </div>
            <div class="gallery-row">
                <h3>Cecilia's Plate</h3>
                <div class="row">
                    <img src="images/cecilia's plate1.jpg" alt="Cecilia's Plate 1">
                    <img src="images/cecilia's plate2.jpg" alt="Cecilia's Plate 2">
                    <img src="images/cecilia's plate3.jpg" alt="Cecilia's Plate 3">
                    <img src="images/cecilia's plate4.jpg" alt="Cecilia's Plate 4">
                    <img src="images/cecilia's plate5.jpg" alt="Cecilia's Plate 5">
                </div>
            </div>    
    </section>
    
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h3 id="modal-title"></h3>
            <p id="modal-description"></p>
        </div>
    </div>


    <script>
        function showDescription(title, description) {
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-description').innerText = description;
            document.getElementById('modal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        window.onclick = function(event) {
            const modal = document.getElementById('modal');
            if (event.target === modal) {
                closeModal();
            }
        };
    </script>

    <script>
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>

    <script>
            document.querySelector('nav ul li a[href="#gallery"]').addEventListener('click', function (e) {
        e.preventDefault();
        document.getElementById('gallery-section').scrollIntoView({ behavior: 'smooth' });
    });
        </script>

<footer>
        <div class="contact-info">
            <p><i class="uil uil-envelope"></i> Email: ailynellaora18@gmail.com</p>
            <p><i class="uil uil-phone"></i> Tel: +639262930046</p>
        </div>
        <div class="social-footer">
            <a href="https://www.facebook.com/yourprofile" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
            <a href="https://www.instagram.com/yourprofile" target="_blank"><i class='bx bxl-instagram'></i></a>
            <a href="https://www.github.com/yourprofile" target="_blank"><i class='bx bxl-github'></i></a>
        </div>
        <p class="copyright">© 2024 Ailyn | All Rights Reserved</p>
</footer>

</body>