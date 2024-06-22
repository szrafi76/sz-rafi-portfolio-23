<div class="sz_rafi_tm_section" id="about">
    <div class="sz_rafi_tm_about">
        <div class="container">
            <div class="wrapper">
                <div class="left">
                    <div class="image">
                        <img src="{{ asset('uploads/content/' . $content->about_image) }}" alt />
                        <div class="numbers year">
                            <div class="wrapper">
                                <h3><span class="sz_rafi_tm_counter" data-from="0" data-to="2"
                                        data-speed="2000">0</span></h3>
                                <span class="name">Years of<br />Success</span>
                            </div>
                        </div>
                        <div class="numbers project">
                            <div class="wrapper">
                                <h3 class="yellowText"><span class="sz_rafi_tm_counter" data-from="0"
                                        data-to="12" data-speed="2000">0</span>+</h3>
                                <span class="name">Total<br />Projects</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="title wow fadeInUp" data-wow-duration="1s">
                        <span>I'm a Designer</span>
                        <h3>I Can Design Anything You Want</h3>
                    </div>
                    <div class="text wow fadeInUp" data-wow-duration="1s">
                        <p> {{ $content->about_content }}</p>
                    </div>
                    <div class="sz_rafi_tm_button wow fadeInUp" data-wow-duration="1s">
                        <a class="anchor" href="#contact"><span>Hire Me</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img src="{{ asset('') }}assets/web/img/brushes/about/1.png" alt />
        </div>
        <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img src="{{ asset('') }}assets/web/img/brushes/about/2.png" alt />
        </div>
    </div>
</div>

