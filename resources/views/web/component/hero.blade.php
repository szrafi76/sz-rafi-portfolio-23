
<div class="sz_rafi_tm_section" id="home">
    <div class="sz_rafi_tm_hero">
        <div class="background" data-img-url="{{ asset('') }}assets/web/img/slider/2.jpg"></div>
     
        @foreach ($heros as $hero)
        <div class="container">
            <div class="content">
                <div class="details news_media_title">
                    <div class="hello">
                        <h3 class="orangeText">Hello, I'm</h3>
                    </div>
                    <div class="name">
                        <h3>{{ $hero->author ?? 'SZ Rafi'}}</h3>
                    </div>
                    <div class="job">
                        <p>A <span class="greenText"></span>  From <span
                                class="yellowText">Bangladesh</span></p>
                    </div>
                    <div class="text">
                        <p>{{$hero->content ?? ''}}</p>
                    </div>
                    <div class="button">
                        <div class="sz_rafi_tm_button">
                            <a class="anchor" href="#about"><span>About Me</span></a>
                        </div>
                        <div class="social">
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com/szrafi"><i class="icon-facebook-1"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/szrafi76"><i class="icon-twitter-1"></i></a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/in/szrafi/"><i class="icon-linkedin-1"></i></a></li>
                                <li><a target="_blank" href="#"><i class="icon-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="avatar">
                    <div class="image">
                        <img src="{{ asset('uploads/heros/' . $hero->banner) }}" alt="{{ $hero->author ?? 'SZ Rafi'}}" />
                        <!-- <img src="{{ asset('') }}assets/web/img/slider/avatar.png" alt /> -->
                        <span class="skills figma anim_moveBottom" title="Expert In UI/UX Design">
                            <img class="svg" src="{{ asset('') }}assets/web/img/svg/skills/figma.svg" alt />
                        </span>
                     
                        <span class="skills illustrator anim_moveBottom" title="Expert In Graphics Design">
                            <img class="svg" src="{{ asset('') }}assets/web/img/svg/skills/illustrator.svg" alt />
                        </span>

                        <span class="skills filmora anim_moveBottom" title="Expert In Video Editing">
                            <img class="svg"  src="{{ asset('') }}assets/web/img/svg/skills/filmora.svg" alt />
                        </span>
                        <span class="skills photoshop anim_moveBottom" title="Expert In Graphics Design">
                           <img class="svg" src="{{ asset('') }}assets/web/img/svg/skills/photoshop.svg" alt />
                       </span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- scroll to bottom section  -->
        <div class="sz_rafi_tm_down">
            <a class="anchor" href="#about">
                <svg width="26px" height="100%" viewBox="0 0 247 390" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                    <path id="wheel" d="M123.359,79.775l0,72.843"
                        style="fill:none;stroke:#fff;stroke-width:20px;" />
                    <path id="mouse"
                        d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                        style="fill:none;stroke:#fff;stroke-width:20px;" />
                </svg>
            </a>
        </div>
    </div>
</div>