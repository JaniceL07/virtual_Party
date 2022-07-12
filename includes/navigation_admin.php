<nav class="topNavBar">
<!-- <link rel = "stylesheet" href="../style/navigation-page.css" type="text/css"> -->
<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

li {
    list-style: none;
    z-index: 5px;
}

a {
    color: black;
    text-decoration: none;
    z-index: 5px;
}

.topNavBar {
    background-color: #E7CACF;
    overflow: hidden;
    min-height: 70px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 0 24px;
    z-index: 5px;
}

.nav_icon:hover{
    color:white;
}

.nav_menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 60px;
    z-index: 5px;
}

.nav_icon {
    font-size: 2rem;
    margin-right: auto;
}

.nav_link {
    transition: 0.7s ease;
}

.nav_link:hover {
    color: white;
}

.hamburger {
    display: none;
    cursor: pointer;
}

.bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: black;
}

@media(max-width:2000px) {
    .hamburger {
        display: block;
    }
    .hamburger.active .bar:nth-child(2) {
        opacity: 0;
    }
    .hamburger.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }
    .hamburger.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }
    .nav_menu {
        position: absolute;
        Left: -100%;
        top: 70px;
        gap: 0;
        flex-direction: column;
        background-color: #e4cdd1;
        width: 100%;
        text-align: center;
        transition: 0.3s;
    }
    .nav_item {
        margin: 16px 0;
    }
    .nav_menu.active {
        Left: 0;
    }
}
</style>

<a href = "/assignment/admin/index.php" class = "nav_icon"> PARTEI. </a>
<ul class="nav_menu">
    <li class="nav_item">
        <a href = "/assignment/admin/index.php" class = "nav_link" > Home </a>
    </li>
    <!-- <li class="nav_item">
        <a href = "#account" class = "nav_link" > Account</a>
    </li> -->
    <li class="nav_item">
        <a href = "/assignment/news/news_admin.php" class = "nav_link" > News </a>
    </li>
    <li class="nav_item">
        <a href = "/assignment/partyList/partyListAdmin.php" class = "nav_link" > Party List</a>
    </li>
    <li class="nav_item">
        <a href = "/assignment/promo/promo-admin.php" class = "nav_link" > Promo </a>
    </li>
    <li class="nav_item">
        <a href = "/assignment/Contact/contact_admin.php" class = "nav_link" > Contact Us</a>
    </li>
</ul>
<div class="hamburger">
    <span class ="bar"></span>
    <span class ="bar"></span>
    <span class ="bar"></span>
</div>

<div>
    <script> 
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav_menu");

        hamburger.addEventListener("click",() => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        })

        document.querySelectorAll(".nav_link").forEach(n => n.addEventListener("click",() =>{
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }))
    </script>
</div>
</nav>