<header>
    <div class="upp-header">
        <div class="container flex">
            <div class="info flex">
                <div class="item">
                    <p>Email : <span>info@shinkyowa.com</span></p>
                </div>
                <div class="item">
                    <p>Phone : <span>+8127 212 9973, +8127 212 9986</span></p>
                </div>
                <div class="item">
                    <p>Total Stock : <span>{{ $total }}</span></p>
                </div>
            </div>
            <div class="time">
                <p>Japan Time : <span id="current-time"></span></p>
            </div>
            <div class="socials">
                <i class='bx bxl-facebook'></i>
                <i class='bx bxl-linkedin'></i>
                <i class='bx bxl-instagram'></i>
            </div>
        </div>
    </div>
    <div class="main-header">
        <div class="container flex">
            <div class="logo">
                <a href="/"><img src="/logo.png" alt=""></a>
            </div>
            <div class="search">
                <form action="/filter" method="get" class="flex">
                    <input type="search" name="search" id="search" placeholder="Search by Name....">
                    <button><i class='bx bx-search'></i></button>
                </form>
            </div>
            <div class="options flex">
                <div class="item flex">
                    <p><i class='bx bxs-user'></i> <span>Login/Register</span></p>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ul>
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
                <li><a href="/blogs">Blogs</a></li>
                <li id="contact-us" onclick="toggleDisplay()">Contact Us</li>
            </ul>
        </div>
    </nav>
</header>
