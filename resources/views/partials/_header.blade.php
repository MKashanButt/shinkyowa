<header>
    <div class="upp-header">
        <div class="container flex">
            <div class="info flex">
                <div class="item">
                    <p>Email : <span>info@shinkyowa.com</span></p>
                </div>
                <div class="item">
                    <p>Phone : <span>+81 70-1524-1308, +81 90-3049-1308</span></p>
                </div>
                <div class="item">
                    <p>Total Stock : <span>{{ $total }}</span></p>
                </div>
            </div>
            <div class="time">
                <p>Japan Time : <span id="current-time"></span></p>
            </div>
            <div class="socials">
                <a href="https://www.facebook.com/shinkyowaint" target="__blank">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://www.linkedin.com/company/shin-kyowa-international" target="__blank">
                    <i class='bx bxl-linkedin'></i>
                </a>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container flex">
            <div class="logo">
                <a href="/"><img src="/logo.png" alt=""></a>
            </div>
            <div class="search">
                <form action="/stock-search" method="get" class="flex">
                    <input type="search" name="search" id="search" placeholder="Search by Name....">
                    <button><i class='bx bx-search'></i></button>
                </form>
            </div>
            <div class="options flex">
                <div class="item flex">
                    <a href="https://crm.shinkyowa.com/" target="__blank">
                        <p><i class='bx bxs-user'></i> <span>Login/Register</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <button class="hamburger" onclick="toggleMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            <ul id="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/stock">Browse Stock</a></li>
                <li>Services
                    <ul class="submenu">
                        <li><a href="/services/shipping">Shipping</a></li>
                    </ul>
                </li>
                <li>About Us
                    <ul class="submenu">
                        <li><a href="/about-us/company-profile">Company Profile</a></li>
                        <li><a href="/about-us/why-choose-us">Why Choose Us</a></li>
                    </ul>
                </li>
                <li><a href="/sales-and-bank-details">Sales & Bank Details</a></li>
                {{-- <li><a href="/blogs">Blogs</a></li> --}}
                <li id="contact-us" onclick="toggleDisplay()">Contact Us</li>
            </ul>
        </div>
    </nav>
</header>
