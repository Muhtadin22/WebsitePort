<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me - Developer Portfolio</title>
    <style>
        :root {
            --dark-bg: #121212;
            --darker-bg: #0a0a0a;
            --primary: #6200ee;
            --primary-light: #bb86fc;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --highlight: #03dac6;
            --card-bg: #1e1e1e;
            --success: #4caf50;
            --error: #f44336;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--dark-bg);
            color: var(--text-primary);
        }
        
        .contact-section {
            padding: 8rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-header {
            display: flex;
            align-items: center;
            margin-bottom: 4rem;
        }
        
        .section-number {
            color: var(--highlight);
            font-size: 1.5rem;
            font-weight: 700;
            margin-right: 1rem;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
        }
        
        .section-title span {
            color: var(--highlight);
        }
        
        .section-subtitle {
            color: var(--text-secondary);
            font-size: 1.1rem;
            max-width: 600px;
            line-height: 1.6;
            margin-bottom: 3rem;
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }
        
        .contact-info {
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            height: fit-content;
        }
        
        .contact-info-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .contact-info-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--highlight));
        }
        
        .contact-method {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }
        
        .contact-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--highlight));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: white;
            font-size: 1.1rem;
        }
        
        .contact-details h3 {
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }
        
        .contact-details p, 
        .contact-details a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .contact-details a:hover {
            color: var(--highlight);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--darker-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            color: var(--text-primary);
            text-decoration: none;
            font-size: 1.1rem;
        }
        
        .social-link:hover {
            background: linear-gradient(135deg, var(--primary), var(--highlight));
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(98, 0, 238, 0.3);
        }
        
        .contact-form {
            background-color: var(--card-bg);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            background-color: var(--darker-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            color: var(--text-primary);
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-btn {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--text-primary);
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            box-shadow: 0 4px 15px rgba(98, 0, 238, 0.3);
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(98, 0, 238, 0.4);
        }
        
        .status-message {
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 1.5rem;
            display: none;
        }
        
        .status-message.success {
            background-color: rgba(76, 175, 80, 0.2);
            border: 1px solid var(--success);
            color: var(--success);
            display: block;
        }
        
        .status-message.error {
            background-color: rgba(244, 67, 54, 0.2);
            border: 1px solid var(--error);
            color: var(--error);
            display: block;
        }
        
        .map-container {
            margin-top: 3rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }
        
        .map-container iframe {
            width: 100%;
            height: 400px;
            border: none;
            filter: grayscale(30%) contrast(90%) brightness(70%);
        }
        
        @media screen and (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .section-header {
                margin-bottom: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
            }
        }
        
        @media screen and (max-width: 576px) {
            .contact-section {
                padding: 6rem 5%;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="contact-section" id="contact">
        <div class="section-header">
            <span class="section-number">04.</span>
            <h2 class="section-title">Get In <span>Touch</span></h2>
        </div>
        
        <p class="section-subtitle">
            Have a project in mind or want to discuss potential opportunities? 
            Feel free to reach out through the form or contact me directly via 
            email or phone. I'll get back to you as soon as possible.
        </p>
        
        <div class="contact-container">
            <div class="contact-info">
                <h3 class="contact-info-title">Contact Information</h3>
                
                <div class="contact-method">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Location</h3>
                        <p>San Francisco, California</p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Email</h3>
                        <a href="mailto:hello@devport.com">hello@devport.com</a>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h3>Phone</h3>
                        <a href="tel:+15551234567">+1 (555) 123-4567</a>
                    </div>
                </div>
                
                <div class="social-links">
                    <a href="#" class="social-link" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link" title="Dev.to"><i class="fab fa-dev"></i></a>
                </div>
            </div>
            
            <div class="contact-form">
                <div id="statusMessage" class="status-message"></div>
                
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="John Doe" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="john@example.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" id="subject" class="form-control" placeholder="Project Inquiry" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea id="message" class="form-control" placeholder="Tell me about your project..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
        
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.538962143581!2d-122.4194!3d37.7749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const statusMessage = document.getElementById('statusMessage');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;
                
                // Simple validation
                if (!name || !email || !subject || !message) {
                    showStatus('Please fill in all fields', 'error');
                    return;
                }
                
                if (!validateEmail(email)) {
                    showStatus('Please enter a valid email address', 'error');
                    return;
                }
                
                // Simulate form submission (in a real app, you would use AJAX/Fetch)
                showStatus('Your message has been sent successfully! I will get back to you soon.', 'success');
                
                // Reset form
                contactForm.reset();
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    statusMessage.style.display = 'none';
                    statusMessage.className = 'status-message';
                }, 5000);
            });
            
            function showStatus(message, type) {
                statusMessage.textContent = message;
                statusMessage.className = 'status-message ' + type;
                statusMessage.style.display = 'block';
                
                // Scroll to status message
                statusMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            
            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
        });
    </script>
</body>
</html>

?>