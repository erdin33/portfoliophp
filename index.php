<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erdin Nurhidayat - Network Enginner</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- React dan ReactDOM dari CDN -->
    <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.26.0/babel.min.js"></script>

</head>
<body>
    <!-- Header -->
    <header>
        <nav class="nav-container">
            <div class="logo">ERDN</div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#Skill">Skill</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimoni">Testimoni</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
    
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>

            <section id="hero">
                <div class="hero-left">
                    <h3 class="pre-title"> My Name is</h3>
                    <h1 class="hero-name"> ERDIN NURHIDAYAT</h1>
                    <p>
                        IT Infrastructure and Network Enginner
                    </p>
                    <a href="#about" class="btn">About</a>
                </div>
                <div class="hero-right">
                    <img src="./images/hero.jpg" alt="person-standing">
                </div>
            </section>

        </div>
        
    </header>

    <!-- End of Header -->

    <section id="about">
        <h1>About</h1>
        <div class="about-left">
            <img src="./images/profile.jpg" alt="person-standing">
        </div>
        <div class="about-right">
            <p>Hallo, saya Erdin Nurhidayat, seorang Network Engineer yang juga antusias dalam IoT. Saya memiliki pengalaman dalam desain, implementasi, dan manajemen infrastruktur jaringan, dengan keahlian dalam routing, switching, firewall, serta keamanan jaringan. Saya terbiasa menggunakan perangkat Cisco, dan MikroTik, serta memiliki pengalaman dalam mengelola VPN, VLAN, BGP, dan OSPF. Selain itu, saya juga tertarik dalam pengembangan dan integrasi teknologi IoT. Dengan sertifikasi CCNA/MTCNA, saya terus mengikuti perkembangan terbaru di bidang jaringan dan IoT.<p>
        </div>

    </section>
    
    <section id="Skill">
        <h1>Skill</h1>
        <div class="skills">
            <div class="column">
                <div class="skill">Routing <span>90%</span>
                    <div class="progress-bar"><div class="progress" style="width: 90%;"></div></div>
                </div>
                <div class="skill">Firewalling <span>90%</span>
                    <div class="progress-bar"><div class="progress" style="width: 90%;"></div></div>
                </div>
                <div class="skill">Mail Security <span>70%</span>
                    <div class="progress-bar"><div class="progress" style="width: 70%;"></div></div>
                </div>
                <div class="skill">Windows Server <span>70%</span>
                    <div class="progress-bar"><div class="progress" style="width: 70%;"></div></div>
                </div>
            </div>
            <div class="column">
                <div class="skill">Switching <span>90%</span>
                    <div class="progress-bar"><div class="progress" style="width: 90%;"></div></div>
                </div>
                <div class="skill">Virtualisation <span>85%</span>
                    <div class="progress-bar"><div class="progress" style="width: 85%;"></div></div>
                </div>
                <div class="skill">Linux Server <span>80%</span>
                    <div class="progress-bar"><div class="progress" style="width: 80%;"></div></div>
                </div>
                <div class="skill">Load Balancing <span>85%</span>
                    <div class="progress-bar"><div class="progress" style="width: 85%;"></div></div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni">
        <h1>Testimoni</h1>
        <div class="testimoni-1">
            <ul>
                <li>Rahmad Hidayat, CEO PT Wikarya Nusantara</li>
                <li class="deskripsi">"Layanan jaringan yang diberikan sangat profesional. Setelah implementasi MikroTik oleh Erdin Nurhidayat, koneksi menjadi lebih stabil dan aman. Kami juga mendapat solusi optimal untuk manajemen bandwidth dan VPN antar cabang. Sangat direkomendasikan!"</li>
            </ul>
        </div>

        <div class="testimoni-2">
            <ul>
                <li>Budi Sugiarto, Manajer Infrastruktur Jaringan</li>
                <li class="deskripsi">"Erdin Nurhidayat telah memberikan solusi yang optimal dan efisien. Kami sangat menggapainya. Kami berharap bisa berkonsultasi lebih lanjut mengenai pengembangan jaringan yang lebih canggih."</li>
            </ul>
        </div>

    </section>

    <section id="portfolio">
        <h1>Portfolio</h1>
        <div class="galery-container">
            <div class="galery-1">
                <img src="./images/cisco.png" alt="portfoliocisco">
                <div class="desc">Simulasi Cisco packet Tracer Untuk Ruangan Lab</div>
            </div>
    
            <div class="galery-2">
                <img src="./images/iot.jpg" alt="portfoliomikrotik">
                <div class="desc">Projek IOT sederhana penyiraman tanaman otomatis</div>
            </div>
        </div>
    </section>
    
    <section id="contact">
    <h1>Contact Me</h1>
    <div class="contact-section">
        <div class="contact-info">
            <a href="https://instagram.com/erdinnurhidayat33">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" />
                erdinnurhidayat33
            </a>
            <a href="https://linkedin.com/in/erdinnurhidayat">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" />
                Erdin Nurhidayat
            </a>
        </div>

        <?php
        // Initialize variables
        $name = $nohp = $email = $message = "";
        $nameErr = $nohpErr = $emailErr = $messageErr = "";
        $formSubmitted = false;
        $formSuccess = false;

        // Process form data when form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $formSubmitted = true;
            $valid = true;

            // Validate name
            if (empty($_POST["name"])) {
                $nameErr = "Nama tidak boleh kosong!";
                $valid = false;
            } elseif (!preg_match("/^[A-Za-z\s]+$/", $_POST["name"])) {
                $nameErr = "Nama hanya boleh berisi huruf!";
                $valid = false;
            } else {
                $name = htmlspecialchars($_POST["name"]);
            }

            // Validate phone number
            if (empty($_POST["nohp"])) {
                $nohpErr = "No Handphone tidak boleh kosong!";
                $valid = false;
            } elseif (!preg_match("/^[0-9]+$/", $_POST["nohp"])) {
                $nohpErr = "No Handphone hanya boleh berisi angka!";
                $valid = false;
            } else {
                $nohp = htmlspecialchars($_POST["nohp"]);
            }

            // Validate email
            if (empty($_POST["email"])) {
                $emailErr = "Email tidak boleh kosong!";
                $valid = false;
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Email harus valid!";
                $valid = false;
            } else {
                $email = htmlspecialchars($_POST["email"]);
            }

            // Validate message
            if (empty($_POST["message"])) {
                $messageErr = "Pesan tidak boleh kosong!";
                $valid = false;
            } elseif (strlen($_POST["message"]) < 10) {
                $messageErr = "Pesan minimal 10 karakter!";
                $valid = false;
            } else {
                $message = htmlspecialchars($_POST["message"]);
            }

            // If all validations pass, save to database
            if ($valid) {
                require_once 'koneksi.php';
                
                // Prepare SQL statement
                $sql = "INSERT INTO contact_messages (name, phone, email, message, submit_date) 
                        VALUES (?, ?, ?, ?, NOW())";
                
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $name, $nohp, $email, $message);
                
                if ($stmt->execute()) {
                    $formSuccess = true;
                    // Set a JavaScript variable to trigger alert
                    echo "<script>var formSubmitSuccess = true;</script>";
                    
                    $name = $nohp = $email = $message = "";
                } else {
                    echo "<script>alert('Error: " . $stmt->error . "');</script>";
                }
                
                $stmt->close();
                $conn->close();
            }
        }
        ?>
        
        <form class="contact-form" id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#contact">
            <input type="text" id="name" name="name" placeholder="Your Name" value="<?php echo $name; ?>" />
            <p class="error" id="error-name"><?php echo $nameErr; ?></p>

            <input type="text" id="nohp" name="nohp" placeholder="No Hp" value="<?php echo $nohp; ?>" />
            <p class="error" id="error-nohp"><?php echo $nohpErr; ?></p>

            <input type="email" id="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>" />
            <p class="error" id="error-email"><?php echo $emailErr; ?></p>

            <textarea id="message" name="message" placeholder="Your Message"><?php echo $message; ?></textarea>
            <p class="error" id="error-message"><?php echo $messageErr; ?></p>

            <button type="submit">Submit</button>
        </form>
    </div>
    </section>

        <script>
            // Check if form was submitted successfully and show alert
            document.addEventListener('DOMContentLoaded', function() {
                if (typeof formSubmitSuccess !== 'undefined' && formSubmitSuccess === true) {
                    alert("Terima kasih! Pesan Anda telah berhasil dikirim.");
                }
            });
        </script>
    
   <section id="footer">
    <p>&copy; 2025 Erdin Nurhidayat</p>
   </section>
   
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="script.js"></script>
   
</body>
</html>