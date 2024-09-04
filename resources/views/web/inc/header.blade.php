
<div class="sz_rafi_tm_mobile_menu">
    <div class="mobile_menu_inner">
        <div class="mobile_in">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('uploads/content/' . $content->website_logo) }}" alt />
                </a>
            </div>
            <div class="trigger">
                <div class="hamburger hamburger--slider">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown">
        <div class="dropdown_inner">
            <ul class="anchor_nav">
                <li class="current"><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="download_cv"> <a target="_blank" href="{{ asset('uploads/content/' . $content->resume) }}" download><span>Download CV</span> </a> </li>
            </ul>
        </div>
    </div>
</div>


<div class="sz_rafi_tm_header">
    <div class="container">
        <div class="inner">
            <div class="logo">
                <img src="{{ asset('uploads/content/' . $content->website_logo) }}" alt />
            </div>
            <div class="menu">
                <ul class="anchor_nav">
                    <li class="current"><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="download_cv"><a target="_blank" href="{{ asset('uploads/content/' . $content->resume) }}"><span>Download CV</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
