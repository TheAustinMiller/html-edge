<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edge Fitness and Sports Performance</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <?php include 'header.html'; include 'navbar.html'; ?>

    <main>
        <!-- Home Page -->
        <section id="home" class="page-section active">
            <div class="hero">
                <div class="hero-content">
                    <h2>Welcome to Edge Fitness and Sports Performance</h2>
                    <p>Your journey to peak performance starts here. Explore our services and join our community.</p>
                    <a href="#" class="cta-button" data-page="contact">Start Your Journey</a>
                </div>
            </div>

            <div class="info-cards">
                <div class="info-card">
                    <h3>Adult Training</h3>
                    <p>Professional strength and conditioning programs designed for adults of all fitness levels. Build strength, improve endurance, and achieve your personal best.</p>
                </div>
                <div class="info-card">
                    <h3>High School Programs</h3>
                    <p>Specialized sports performance training for high school athletes. Develop skills, prevent injuries, and gain competitive advantage.</p>
                </div>
                <div class="info-card">
                    <h3>Sunday Yoga</h3>
                    <p>Relax and restore with our peaceful Sunday yoga sessions. Perfect for recovery, flexibility, and mental wellness.</p>
                </div>
            </div>

            <div class="schedule-grid">
                <div class="schedule-container">
                    <div class="schedule-unified">
                        <div class="schedule-section">
                            <h3>Adult Classes</h3>
                            <p><strong>Mon-Fri:</strong> 5:00 AM, 6:15 AM, 7:30 AM, 8:45 AM, 5:15 PM</p>
                            <p><strong>Saturday:</strong> 8:00 AM</p>
                        </div>
                        <div class="schedule-divider"></div>
                        <div class="schedule-section">
                            <h3>Sports Performance</h3>
                            <p><strong>Mon, Wed, Fri:</strong> 4:00 PM</p>
                            <p><strong>Tue, Wed, Thu:</strong> 6:30 PM</p>
                        </div>
                        <div class="schedule-divider"></div>
                        <div class="schedule-section">
                            <h3>Yoga</h3>
                            <p><strong>Sunday:</strong> 8:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Training Page -->
        <section id="training" class="page-section">
            <div class="hero" style="background: linear-gradient(135deg, #fdce00 0%, #ffd633 100%); color: #1b38e3;">
                <div class="hero-content">
                    <h2>Training Programs</h2>
                    <p>Unlock your potential with our expert-designed training programs</p>
                </div>
            </div>

            <div class="info-cards">
                <div class="info-card">
                    <h3>Adult Fitness Training</h3>
                    <p>Our adult programs focus on functional fitness, strength building, and overall wellness. Whether you're a beginner or experienced athlete, our certified trainers will create a personalized plan to help you reach your goals.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Strength & Conditioning</li>
                        <li>HIIT Training</li>
                        <li>Functional Movement</li>
                        <li>Nutrition Coaching</li>
                    </ul>
                </div>
                <div class="info-card">
                    <h3>High School Sports Performance</h3>
                    <p>Designed specifically for young athletes, our high school programs enhance athletic performance while emphasizing proper form and injury prevention. Train like a pro and dominate on the field.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Sport-Specific Training</li>
                        <li>Speed & Agility</li>
                        <li>Injury Prevention</li>
                        <li>Mental Conditioning</li>
                    </ul>
                </div>
                <div class="info-card">
                    <h3>Sunday Yoga Classes</h3>
                    <p>End your week with mindfulness and movement. Our yoga classes promote flexibility, balance, and mental clarity. Perfect for active recovery and stress relief.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem;">
                        <li>Vinyasa Flow</li>
                        <li>Restorative Yoga</li>
                        <li>Meditation</li>
                        <li>Breathwork</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- About Us Page -->
        <section id="about" class="page-section">
            <div class="hero">
                <div class="hero-content">
                    <h2>About Edge Fitness</h2>
                    <p>Where passion meets performance</p>
                </div>
            </div>

            <div class="info-cards">
                <div class="info-card">
                    <h3>Our Mission</h3>
                    <p>At Edge Fitness and Sports Performance, we're dedicated to helping individuals of all ages and fitness levels reach their peak potential. Our mission is to provide top-tier training in a supportive, motivating environment that pushes you to be your best.</p>
                </div>
                <div class="info-card">
                    <h3>Expert Trainers</h3>
                    <p>Our certified trainers bring years of experience in sports performance, fitness coaching, and wellness. We stay current with the latest training methodologies to ensure you receive the most effective and safe programming.</p>
                </div>
                <div class="info-card">
                    <h3>Community Focused</h3>
                    <p>We believe fitness is more than just physical—it's about building a strong, supportive community. From our adult members to our young athletes, everyone at Edge becomes part of our fitness family.</p>
                </div>
            </div>
        </section>

        <!-- Contact Page -->
        <section id="contact" class="page-section">
            <div class="hero" style="background: linear-gradient(135deg, #333 0%, #555 100%);">
                <div class="hero-content">
                    <h2>Get In Touch</h2>
                    <p>Ready to start your fitness journey? Contact us today!</p>
                </div>
            </div>

            <div class="contact-form">
                <h3 style="color: #1b38e3; margin-bottom: 2rem; font-size: 2rem; text-align: center;">Contact Form</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="program">Program Interest</label>
                        <select id="program" name="program" style="width: 100%; padding: 1rem; border: 2px solid #e9ecef; border-radius: 10px; font-family: inherit;">
                            <option>Adult Training</option>
                            <option>High School Program</option>
                            <option>Sunday Yoga</option>
                            <option>General Inquiry</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tell us about your fitness goals..."></textarea>
                    </div>
                    <button type="submit" class="cta-button" style="width: 100%; margin-top: 1rem;">Send Message</button>
                </form>
            </div>

            <div class="info-cards" style="margin-top: 3rem;">
                <div class="info-card">
                    <h3>Location</h3>
                    <p>123 Fitness Street<br>Your City, State 12345</p>
                </div>
                <div class="info-card">
                    <h3>Phone</h3>
                    <p>(555) 123-4567</p>
                </div>
                <div class="info-card">
                    <h3>Email</h3>
                    <p>info@edgefitness.com</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.html'; ?>
    <script src="script.js"></script>
    </body>
</html>