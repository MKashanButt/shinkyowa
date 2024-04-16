<header>
    <div class="upp-header">
        <div class="container flex">
            <div class="info flex">
                <div class="item">
                    <p>Email : <span>info@shinkyowa.com</span></p>
                </div>
                <div class="item">
                    <p>Phone : <span>+8190 9685 6566, +8180 1389 9048</span></p>
                </div>
                <div class="item">
                    <p>Total Stock : <span>45</span></p>
                </div>
            </div>
            <div class="time">
                <p>Japan Time : <span>{{ date('h:m:s') }} AM</span></p>
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
                <img src="/logo.png" alt="">
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
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/stock">Browse Stock</a></li>
                <li><a href="/contact-us">Contact Us</a></li>
                <li><a href="/testimonials">Testimonials</a></li>
                <li><a href="/sales-terms">Sales Terms</a></li>
                <li><a href="/bank-details">Bank Details</a></li>
                <li><a href="/faqs">Faqs</a></li>
            </ul>
        </div>
    </nav>
</header>
