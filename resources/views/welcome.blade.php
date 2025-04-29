<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset('AdminLTE-3.2.0/favicon-icon.png') }}">
  <title>Medicanism | Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#3b82f6',
            secondary: '#10b981',
            dark: '#1e293b',
            light: '#f8fafc',
          }
        }
      }
    }
  </script>
  <style>
    .hero-gradient {
      background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(16, 185, 129, 0.1) 100%);
    }

    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .testimonial-card {
      transition: all 0.3s ease;
    }

    .testimonial-card:hover {
      transform: scale(1.02);
    }

    .nav-link {
      position: relative;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #3b82f6;
      transition: width 0.3s ease;
    }

    .nav-link:hover::after {
      width: 100%;
    }
  </style>
</head>

<body class="font-sans antialiased text-dark">
  <!-- Navigation -->
  <nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex items-center">
          <div class="flex-shrink-0 flex items-center">
            <i class="text-primary text-2xl mr-2"></i>
            <span class="text-xl font-bold text-primary">Medicanism</span>
          </div>
        </div>
        <div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
          <a href="#how-it-works" class="nav-link text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium">How It Works</a>
          <a href="#testimonials" class="nav-link text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium">Testimonials</a>
        </div>
        <div class="hidden md:ml-6 md:flex md:items-center">

        </div>
        <div class="-mr-2 flex items-center md:hidden">
          <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-primary focus:outline-none">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <div class="hidden md:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="#how-it-works" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">How It Works</a>
        <a href="#testimonials" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary hover:bg-gray-50">Testimonials</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-gradient">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
      <div class="md:flex md:items-center md:justify-between">
        <div class="md:w-1/2 mb-10 md:mb-0">
          <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Solusi Praktis<span class="text-primary"> Kesehatan Digital</span></h1>
          <p class="text-lg text-gray-600 mb-8">Medicanism memudahkan Anda membuat janji dengan dokter dan memungkinkan dokter untuk memeriksa serta mendiagnosis kondisi Anda secara akurat melalui platform digital kami yang lengkap.</p>
          <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="login" class="px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-blue-700 text-center">Sign In</a>
            <a href="register" class="px-6 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-white hover:bg-gray-50 text-center border-primary">Sign Up</a>
          </div>
        </div>
        <div class="md:w-1/2 relative">
          <div class="relative z-10 rounded-xl overflow-hidden shadow-xl">
            <img src="{{ asset('AdminLTE-3.2.0/dokter.png') }}" alt="Health dashboard" class="w-full h-auto">
            <div class="absolute inset-0 bg-primary opacity-10"></div>
          </div>
          <div class="absolute -bottom-6 -left-6 w-32 h-32 rounded-full bg-secondary opacity-20"></div>
          <div class="absolute -top-6 -right-6 w-40 h-40 rounded-full bg-primary opacity-20"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- How It Works Section -->
  <section id="how-it-works" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Simple steps to better health management</p>
      </div>

      <div class="relative">
        <!-- Timeline -->
        <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-primary opacity-20"></div>

        <!-- Step 1 -->
        <div class="relative mb-16 md:flex md:items-center md:justify-between">
          <div class="md:w-5/12 mb-8 md:mb-0">
            <div class="bg-white p-6 rounded-lg shadow-md">
              <div class="flex items-center mb-4">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center font-bold text-xl">1</div>
                <h3 class="ml-4 text-xl font-semibold">Sign Up & Set Up</h3>
              </div>
              <p class="text-gray-600">Lets start with creating account for pasien and make a schedule with doctor.</p>
            </div>
          </div>
          <div class="md:w-5/12">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Sign up" class="rounded-lg shadow-md w-full h-auto">
          </div>
        </div>

        <!-- Step 2 -->
        <div class="relative mb-16 md:flex md:items-center md:justify-between">
          <div class="md:w-5/12 order-2 mb-8 md:mb-0">
            <div class="bg-white p-6 rounded-lg shadow-md">
              <div class="flex items-center mb-4">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-secondary text-white flex items-center justify-center font-bold text-xl">2</div>
                <h3 class="ml-4 text-xl font-semibold">Make a Schedule</h3>
              </div>
              <p class="text-gray-600">Make a Schedule with your favourite doctor.</p>
            </div>
          </div>
        </div>

        <!-- Step 3 -->
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Hear from people who transformed their health with Medicanism</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="testimonial-card bg-gray-50 p-8 rounded-xl shadow-sm hover:shadow-md">
          <div class="flex items-center mb-6">
            <img class="w-12 h-12 rounded-full" src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson">
            <div class="ml-4">
              <h4 class="font-semibold">Sarah Johnson</h4>
              <p class="text-gray-600 text-sm">Diabetes Patient</p>
            </div>
          </div>
          <p class="text-gray-700 mb-4">"Medicanism has completely changed how I manage my diabetes. The glucose tracking and medication reminders are lifesavers!"</p>
          <div class="flex text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card bg-gray-50 p-8 rounded-xl shadow-sm hover:shadow-md">
          <div class="flex items-center mb-6">
            <img class="w-12 h-12 rounded-full" src="https://randomuser.me/api/portraits/men/65.jpg" alt="Dr. Michael Chen">
            <div class="ml-4">
              <h4 class="font-semibold">Dr. Michael Chen</h4>
              <p class="text-gray-600 text-sm">Cardiologist</p>
            </div>
          </div>
          <p class="text-gray-700 mb-4">"As a physician, I recommend Medicanism to all my patients. The comprehensive reports save me time and give me better insights into my patients' health."</p>
          <div class="flex text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card bg-gray-50 p-8 rounded-xl shadow-sm hover:shadow-md">
          <div class="flex items-center mb-6">
            <img class="w-12 h-12 rounded-full" src="https://randomuser.me/api/portraits/women/28.jpg" alt="Emma Rodriguez">
            <div class="ml-4">
              <h4 class="font-semibold">Emma Rodriguez</h4>
              <p class="text-gray-600 text-sm">Fitness Enthusiast</p>
            </div>
          </div>
          <p class="text-gray-700 mb-4">"I love how Medicanism integrates all my fitness devices. Seeing all my health metrics in one place helps me optimize my workouts and recovery."</p>
          <div class="flex text-yellow-400">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Find answers to common questions about Medicanism</p>
      </div>

      <div class="max-w-3xl mx-auto">
        <!-- FAQ Item 1 -->
        <div class="mb-6 border-b border-gray-200 pb-6">
          <button class="faq-toggle flex justify-between items-center w-full text-left" onclick="toggleFAQ(1)">
            <h3 class="text-lg font-medium text-dark">Is my health data secure with Medicanism?</h3>
            <i class="fas fa-chevron-down text-primary transition-transform duration-300" id="faq-icon-1"></i>
          </button>
          <div class="faq-content mt-4 text-gray-600 hidden" id="faq-content-1">
            <p>Absolutely. We use bank-level encryption to protect all your health data. Your information is stored securely and is never shared without your explicit consent. We comply with all healthcare privacy regulations including HIPAA and GDPR.</p>
          </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="mb-6 border-b border-gray-200 pb-6">
          <button class="faq-toggle flex justify-between items-center w-full text-left" onclick="toggleFAQ(2)">
            <h3 class="text-lg font-medium text-dark">What devices can I connect to Medicanism?</h3>
            <i class="fas fa-chevron-down text-primary transition-transform duration-300" id="faq-icon-2"></i>
          </button>
          <div class="faq-content mt-4 text-gray-600 hidden" id="faq-content-2">
            <p>We support integration with most popular health and fitness devices including Apple Health, Fitbit, Garmin, Withings, Oura Ring, and many more. We're constantly adding support for new devices based on user demand.</p>
          </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="mb-6 border-b border-gray-200 pb-6">
          <button class="faq-toggle flex justify-between items-center w-full text-left" onclick="toggleFAQ(3)">
            <h3 class="text-lg font-medium text-dark">Can I share my health data with my doctor?</h3>
            <i class="fas fa-chevron-down text-primary transition-transform duration-300" id="faq-icon-3"></i>
          </button>
          <div class="faq-content mt-4 text-gray-600 hidden" id="faq-content-3">
            <p>Yes! You can generate comprehensive health reports to share with your healthcare providers. We also offer direct integration with many electronic health record (EHR) systems used by clinics and hospitals.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-4 gap-8">
        <div>
        </div>

        <div>
        </div>

        <div>
        </div>

        <div>
        </div>
      </div>

      <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-400 mb-4 md:mb-0">© 2023 Medicanism. All rights reserved.</p>
        <div class="flex space-x-6">
          <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
          <a href="#" class="text-gray-400 hover:text-white">Terms of Service</a>
          <a href="#" class="text-gray-400 hover:text-white">Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });

    // FAQ toggle function
    function toggleFAQ(id) {
      const content = document.getElementById(`faq-content-${id}`);
      const icon = document.getElementById(`faq-icon-${id}`);

      content.classList.toggle('hidden');
      icon.classList.toggle('transform');
      icon.classList.toggle('rotate-180');
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: 'smooth'
          });

          // Close mobile menu if open
          const mobileMenu = document.getElementById('mobile-menu');
          if (!mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
          }
        }
      });
    });
  </script>
</body>

</html>