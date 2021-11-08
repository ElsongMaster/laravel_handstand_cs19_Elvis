<div class="sidebar open">
    <div class="logo-details">
        {{-- <i class='bx bxl-c-plus-plus icon'></i> --}}
        <div class="logo-img"></div>
        <div class="logo_name">Handstand</div>
        {{-- <i class='bx bx-menu' id="btn"></i> --}}
    </div>
    <ul class="nav-list ">


        <li>
            <a href="{{route('headers.index')}}" class="text-light">
           <i class='bx bx-heading'></i>
            <span class="links_name">Header</span>
            </a>
            <span class="tooltip">Header</span>
        </li>
        <li>
            <a href="/slide" class="text-light">
               <i class='bx bx-slideshow'></i>
                <span class="links_name">Slider</span>
            </a>
            <span class="tooltip">Slider</span>
        </li>
        <li>
            <a href="{{route('layoutAbouts')}}" class="text-light">
               <i class='bx bx-question-mark'></i>
                <span class="links_name">About</span>
            </a>
            <span class="tooltip">About</span>
        </li>
        <li>
            <a href="{{route('layoutClasses')}}" class="text-light">
                <i class='bx bx-group' ></i>
                <span class="links_name">Classes</span>
            </a>
            <span class="tooltip">Classes</span>
        </li>
        <li>
            <a href="{{route('layoutTrainers')}}" class="text-light">
                <i class='bx bx-user-circle'></i>
                <span class="links_name">Trainers</span>
            </a>
            <span class="tooltip">Trainer</span>
        </li>

        <li>
            <a href="{{route('galleries.index')}}" class="text-light">
               <i class='bx bx-folder-open' ></i>
                <span class="links_name">Gallery</span>
            </a>
            <span class="tooltip">Gallery</span>
        </li>
        <li>
            <a href="{{route('layoutPackage')}}" class="text-light">
               <i class='bx bx-package'></i>
                <span class="links_name">Packages</span>
            </a>
            <span class="tooltip">Packages</span>
        </li>
        <li>
            <a href="{{route('layoutEvents')}}" class="text-light">
               <i class='bx bx-calendar-event'></i>
                <span class="links_name">Events</span>
            </a>
            <span class="tooltip">Events</span>
        </li>
        <li>
            <a href="{{route('layoutFooters')}}" class="text-light">
               <i class='bx bx-chat' ></i>
                <span class="links_name">Footer</span>
            </a>
            <span class="tooltip">Footer</span>
        </li>
        <li>
            <a href="{{route('layoutTestimonies')}}" class="text-light">
               <i class='bx bxs-book-open'></i>
                <span class="links_name">Testimonies</span>
            </a>
            <span class="tooltip">Testimonies</span>
        </li>
        <li>
            <a href="" class="text-light">
               <i class='bx bxl-blogger'></i>
                <span class="links_name">Blog</span>
            </a>
            <span class="tooltip">Blog</span>
        </li>
        <li>
            <a href="" class="text-light">
                <i class='bx bxs-contact' ></i>
               
                <span class="links_name">Contact</span>
            </a>
            <span class="tooltip">Contact</span>
        </li>

        <li>
            <a href="" class="text-light">
                <i class='bx bxs-user-detail'></i>
                <span class="links_name">Users2</span>
            </a>
            <span class="tooltip">Users</span>
        </li>
        <li>
            <a href="" class="text-light">
                <i class='bx bxs-user-detail'></i>
                <span class="links_name">Users2</span>
            </a>
            <span class="tooltip">Users</span>
        </li>



        <li class="border border-light w-100 mt-2"></li>
        <li class="mt-3">
            <a href="/">
                <i class='bx bx-home'></i>
                <span class="links_name">Front</span>
            </a>
            
            <span class="tooltip">Front</span>
        </li>
    </ul>
</div>

<style>

/* Google Font Link */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

::-webkit-scrollbar{
    display: none;
}

.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 78px;
    background: rgb(192, 190, 190);
    padding: 6px 14px;
    z-index: 99;
    transition: all 0.5s ease;
    overflow-y: scroll;
}
.sidebar.open {
    width: 180px;
}

.sidebar .logo-img{
    background-color: white;
    background-image: url("{{asset('img/logo/logo.png')}}");
    background-size: contain;
    background-repeat: no-repeat;
    background-position-y: 20px 0;
    height: 50px;
    width: 100px;
    border-radius: 5px;
}
.sidebar .logo-details {
    height: 60px;
    display: flex;
    align-items: center;
    position: relative;
}
.sidebar .logo-details .icon {
    opacity: 0;
    transition: all 0.5s ease;
}
.sidebar .logo-details .logo_name {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    opacity: 0;
    transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name {
    opacity: 1;
}
.sidebar .logo-details #btn {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 22px;
    transition: all 0.4s ease;
    font-size: 23px;
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
}

.sidebar.open .logo-details #btn {
    text-align: right;
    position: absolute;
    right: 30%;
    top: 60px;
}
.sidebar i {
    color: #676767;
    height: 60px;
    min-width: 50px;
    font-size: 28px;
    text-align: center;
    line-height: 60px;
}
.sidebar .nav-list {
    margin-top: 20px;
    height: 100%;
}
.sidebar ul {
    padding: 0;
}
.sidebar li {
    position: relative;
    margin: 8px 0;
    list-style: none;
}
.sidebar li .tooltip {
    position: absolute;
    top: -20px;
    left: calc(100% + 15px);
    z-index: 3;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    padding: 6px 12px;
    border-radius: 4px;
    font-size: 15px;
    font-weight: 400;
    opacity: 0;
    white-space: nowrap;
    pointer-events: none;
    transition: 0s;
}

.sidebar li:hover .tooltip {
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    top: 50%;
    transform: translateY(-50%);
}
.sidebar.open li .tooltip {
    display: none;
}
.sidebar input {
    font-size: 15px;
    color: #fff;
    font-weight: 400;
    outline: none;
    height: 50px;
    width: 100%;
    width: 50px;
    border: none;
    border-radius: 12px;
    transition: all 0.5s ease;
    background: #1d1b31;
}
.sidebar.open input {
    padding: 0 20px 0 50px;
    width: 100%;
}
.sidebar .bx-search {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 22px;
    background: #1d1b31;
    color: #fff;
}
.sidebar.open .bx-search:hover {
    background: #1d1b31;
    color: #fff;
}
.sidebar .bx-search:hover {
    background: #fff;
    color: #11101d;
}
.sidebar li a {
    display: flex;
    height: 100%;
    width: 100%;
    border-radius: 12px;
    align-items: center;
    text-decoration: none;
    transition: all 0.4s ease;
    background: white;
}
.sidebar li a:hover {
    background: #fff;
}
.sidebar li a .links_name {
    color: #5fc7ae;
    font-size: 15px;
    font-weight: 400;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: 0.4s;
}
.sidebar.open li a .links_name {
    opacity: 1;
    pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i {
    transition: all 0.5s ease;
    color: #11101d;
}
.sidebar li i {
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    border-radius: 12px;
}
.sidebar li.profile {
    position: fixed;
    height: 60px;
    width: 78px;
    left: 0;
    bottom: -8px;
    padding: 10px 14px;
    background: #1d1b31;
    transition: all 0.5s ease;
    overflow: hidden;
}
.sidebar.open li.profile {
    width: 180px;
}
.sidebar li .profile-details {
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
}
.sidebar li img {
    height: 45px;
    width: 45px;
    object-fit: cover;
    border-radius: 6px;
    margin-right: 10px;
}
.sidebar li.profile .name,
.sidebar li.profile .job {
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    white-space: nowrap;
}
.sidebar li.profile .job {
    font-size: 12px;
}
.sidebar .profile #log_out {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    background: #1d1b31;
    width: 100%;
    height: 60px;
    line-height: 60px;
    border-radius: 0px;
    transition: all 0.5s ease;
}
.sidebar.open .profile #log_out {
    width: 50px;
    background: none;
}
.home-section {
    position: relative;
    background: #e4e9f7;
    min-height: 100vh;
    top: 0;
    left: 78px;
    width: calc(100% - 78px);
    transition: all 0.5s ease;
    z-index: 2;
}
.sidebar.open ~ .home-section {
    left: 250px;
    width: calc(100% - 250px);
}
.home-section .text {
    display: inline-block;
    color: #11101d;
    font-size: 25px;
    font-weight: 500;
    margin: 18px;
}


@media (max-width: 420px) {
    .sidebar li .tooltip {
        display: none;
    }
}


</style>


<script>

    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => {
        // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
    }
</script> 
