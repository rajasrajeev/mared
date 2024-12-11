@extends('layouts.frontend')
@section('content')
<!-- Swiper default-->
<section class="swiper-container swiper-1 context-dark text-center" data-swiper='{"autoplay":false}'>
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper">
          <!-- Slides-->
          <div class="swiper-slide section-md" style="background-image: url('{{ asset('assets/frontend/new/images/image-21-1920x998.jpg') }}')"
          >
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-9 col-lg-7">
                  <h1>Inspiration, Innovation and Discovery</h1>
                  <p class="big">Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects that will be especially useful for you when climbing the career ladder.</p><a class="btn btn-primary" href="academics.html">Learn more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide section-md" style="background-image: url('{{ asset('assets/frontend/new/images/image-07-1920x998.jpg') }}')"
>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-9 col-lg-7">
                  <h1>Investing in Knowledge and Your Future</h1>
                  <p class="big">At Teachzy, you can succeed in lots of research areas and benefit from investing in your education and knowledge that will help you in becoming an experienced specialist.</p><a class="btn btn-primary" href="academics.html">Learn more</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide section-md" style="background-image: url('{{ asset('assets/frontend/new/images/image-17-1920x998.jpg') }}')"
          >
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-9 col-lg-7">
                  <h1>Open Minds Aimed at Creating Future</h1>
                  <p class="big">Build your future with us! The educational programs of our University will give you necessary skills, training, and knowledge to make everything you learned here work for you in the future.</p><a class="btn btn-primary" href="academics.html">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pagination-->
        <div class="swiper-pagination"></div>
      </section>
      <!-- Blurb default-->
      <section class="section-md bg-transparent text-center">
        <div class="container">
          <div class="text-block text-block-1" data-animate='{"class":"fadeIn"}'>
            <h5 class="text-primary">Guaranteed Success</h5>
            <h2>What We Offer</h2>
            <p class="big">Teachzy offers students the best of education and entertainment opportunities available in the area. We are glad to take care of every student and university entrant.</p>
          </div>
          <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-md-4">
                    <!-- Blurb-->
                    <article class="blurb blurb-2" data-animate='{"class":"fadeInUp"}'>
                      <div class="icon blurb-icon custom-font-online-course"></div>
                      <div class="blurb-title h4">Online Education</div>
                      <div class="blurb-text big">Teachzy provides online education services with all learning materials and lectures available to you.</div>
                    </article>
            </div>
            <div class="col-sm-6 col-md-4">
                    <!-- Blurb-->
                    <article class="blurb blurb-2" data-animate='{"class":"fadeInUp","delay":".15s"}'>
                      <div class="icon blurb-icon custom-font-degree"></div>
                      <div class="blurb-title h4">Programs &amp; Courses</div>
                      <div class="blurb-text big">We offer a wide range of courses and  programs that encompass lots of knowledge spheres.</div>
                    </article>
            </div>
            <div class="col-sm-6 col-md-4">
                    <!-- Blurb-->
                    <article class="blurb blurb-2" data-animate='{"class":"fadeInUp","delay":".3s"}'>
                      <div class="icon blurb-icon custom-font-school"></div>
                      <div class="blurb-title h4">Campus Events</div>
                      <div class="blurb-text big">Our campus is the hub to a talented and diverse student community that turns opportunities into success.</div>
                    </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Price box-->
      <section class="section-md bg-300 text-center">
        <div class="container">
          <div class="text-block text-block-1" data-animate='{"class":"fadeIn"}'>
            <h2>Our Featured Courses</h2>
            <p class="big">Our featured courses are selected through a rigorous process and uniquely created for each semester. They cover a lot of topics and are available both online and offline.</p>
          </div>
          <div class="owl-carousel owl-content-1" data-owl="{&quot;dots&quot;:true}" data-loop="false" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4">
                  <!-- Price box-->
                  <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="{{asset('assets/frontend/new/images/image-01-270x220.jpg')}}" alt="" width="270" height="220"/>
                      <div class="price-box-tag">$20</div>
                    </div>
                    <div class="price-box-body">
                      <div class="price-box-title h6"><a href="#">Academic English</a></div>
                      <div class="price-box-text">Steven Carter</div>
                    </div>
                  </div>
                  <!-- Price box-->
                  <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="{{asset('assets/frontend/new/images/image-02-270x220.jpg')}}" alt="" width="270" height="220"/>
                      <div class="price-box-tag">$40</div>
                    </div>
                    <div class="price-box-body">
                      <div class="price-box-title h6"><a href="#">Online Marketing</a></div>
                      <div class="price-box-text">Ronald Richards</div>
                    </div>
                  </div>
                  <!-- Price box-->
                  <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="{{asset('assets/frontend/new/images/image-03-270x220.jpg')}}" alt="" width="270" height="220"/>
                      <div class="price-box-tag">$30</div>
                    </div>
                    <div class="price-box-body">
                      <div class="price-box-title h6"><a href="#">HR Management</a></div>
                      <div class="price-box-text">Ralph Edwards</div>
                    </div>
                  </div>
                  <!-- Price box-->
                  <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="{{asset('assets/frontend/new/images/image-04-270x220.jpg')}}" alt="" width="270" height="220"/>
                      <div class="price-box-tag">$30</div>
                    </div>
                    <div class="price-box-body">
                      <div class="price-box-title h6"><a href="#">Financial Analytics</a></div>
                      <div class="price-box-text">Emma Smith</div>
                    </div>
                  </div>
                  <!-- Price box-->
                  <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="{{asset('assets/frontend/new/images/image-18-270x220.jpg')}}" alt="" width="270" height="220"/>
                      <div class="price-box-tag">$30</div>
                    </div>
                    <div class="price-box-body">
                      <div class="price-box-title h6"><a href="#">Web Technology</a></div>
                      <div class="price-box-text">Kathryn Murphy</div>
                    </div>
                  </div>
          </div>
        </div>
      </section>
      <!-- Person side-->
      <section class="section-md bg-transparent text-center">
        <div class="container">
          <div class="text-block text-block-1" data-animate='{"class":"fadeIn"}'>
            <h5 class="text-primary">People Behind Our Success</h5>
            <h2>Our Tutors</h2>
            <p class="big">We employ highly experienced and qualified teachers who set the ground for all our programs and courses. They are aimed to help you achieve more on your path to success.</p>
          </div>
          <div class="row row-30 row-lg-60">
            <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp"}'>
                      <div class="person-media"><img class="person-img" src="{{asset('assets/frontend/new/images/person-01-135x135.jpg')}}" alt="" width="135" height="135"/>
                      </div>
                      <div class="person-body">
                        <div class="person-title h6"><a href="team-member.html">Leslie Alexander</a></div>
                        <div class="person-meta">Tutor</div>
                        <div class="person-text">Leslie joined our team in 2010 as a marketing tutor.</div>
                        <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp","delay":".15s"}'>
                      <div class="person-media"><img class="person-img" src="{{asset('assets/frontend/new/images/person-02-135x135.jpg')}}" alt="" width="135" height="135"/>
                      </div>
                      <div class="person-body">
                        <div class="person-title h6"><a href="team-member.html">Cameron Williamson</a></div>
                        <div class="person-meta">Course assistant</div>
                        <div class="person-text">Cameron helps Teachzy team with online programs.</div>
                        <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp","delay":".3s"}'>
                      <div class="person-media"><img class="person-img" src="{{asset('assets/frontend/new/images/person-03-135x135.jpg')}}" alt="" width="135" height="135"/>
                      </div>
                      <div class="person-body">
                        <div class="person-title h6"><a href="team-member.html">Theresa Webb</a></div>
                        <div class="person-meta">Lead tutor</div>
                        <div class="person-text">Theresa is one of our best foreign language tutors.</div>
                        <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp"}'>
                      <div class="person-media"><img class="person-img" src="{{asset('assets/frontend/new/images/person-04-135x135.jpg')}}" alt="" width="135" height="135"/>
                      </div>
                      <div class="person-body">
                        <div class="person-title h6"><a href="team-member.html">Jacob Jones</a></div>
                        <div class="person-meta">Program coordinator</div>
                        <div class="person-text">Jacob coordinates most of our programs &amp; courses.</div>
                        <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp","delay":".15s"}'>
                      <div class="person-media"><img class="person-img" src="{{asset('assets/frontend/new/images/person-05-135x135.jpg')}}" alt="" width="135" height="135"/>
                      </div>
                      <div class="person-body">
                        <div class="person-title h6"><a href="team-member.html">Brooklyn Simmons</a></div>
                        <div class="person-meta">Professor</div>
                        <div class="person-text">Brooklyn is our leading management tutor.</div>
                        <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp","delay":".3s"}'>
                      <div class="person-media"><img class="person-img" src="{{asset('assets/frontend/new/images/person-06-135x135.jpg')}}" alt="" width="135" height="135"/>
                      </div>
                      <div class="person-body">
                        <div class="person-title h6"><a href="team-member.html">Wade Warren</a></div>
                        <div class="person-meta">Tutor</div>
                        <div class="person-text">Wade is an author of Web Tehcnology programs.</div>
                        <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                        </div>
                      </div>
                    </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Counters-->
      <section class="section-lg bg-primary bg-image-wrap context-dark text-center text-md-start">
        <div class="bg-image-wrap-item bg-image" style="background-image:url('{{asset('assets/frontend/new/images/image-05-875x705.jpg')}}');"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="pe-xxl-5">
                <h2>Why Choose Us</h2>
                <p class="big">Teachzy offers quality education helping you build your future career. Here just some of the facts that show why students choose us.</p>
                <div class="row row-30 row-lg-55">
                  <div class="col-6 col-sm-3 col-md-6">
                          <!-- Blurb side-->
                          <article class="blurb blurb-side">
                            <div class="blurb-item">
                              <div class="icon blurb-icon custom-font-graduated"></div>
                            </div>
                            <div class="blurb-body">
                              <div class="blurb-counter-value h2"><span data-counter="">97</span><span class="counter-postfix">%</span>
                              </div>
                              <div class="blurb-title h4">Graduates</div>
                            </div>
                          </article>
                  </div>
                  <div class="col-6 col-sm-3 col-md-6">
                          <!-- Blurb side-->
                          <article class="blurb blurb-side">
                            <div class="blurb-item">
                              <div class="icon blurb-icon custom-font-male-teacher"></div>
                            </div>
                            <div class="blurb-body">
                              <div class="blurb-counter-value h2"><span data-counter="">50</span><span class="counter-postfix">+</span>
                              </div>
                              <div class="blurb-title h4">Certified tutors</div>
                            </div>
                          </article>
                  </div>
                  <div class="col-6 col-sm-3 col-md-6">
                          <!-- Blurb side-->
                          <article class="blurb blurb-side">
                            <div class="blurb-item">
                              <div class="icon blurb-icon custom-font-student-at-desk"></div>
                            </div>
                            <div class="blurb-body">
                              <div class="blurb-counter-value h2"><span data-counter="">6500</span>
                              </div>
                              <div class="blurb-title h4">Students</div>
                            </div>
                          </article>
                  </div>
                  <div class="col-6 col-sm-3 col-md-6">
                          <!-- Blurb side-->
                          <article class="blurb blurb-side">
                            <div class="blurb-item">
                              <div class="icon blurb-icon custom-font-university"></div>
                            </div>
                            <div class="blurb-body">
                              <div class="blurb-counter-value h2"><span data-counter="">10</span>
                              </div>
                              <div class="blurb-title h4">Campuses</div>
                            </div>
                          </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Post event-->
      <section class="section-md bg-transparent text-center">
        <div class="container">
          <div class="text-block text-block-1" data-animate='{"class":"fadeIn"}'>
            <h5 class="text-primary">Don’t miss anything</h5>
            <h2>Upcoming Events</h2>
            <p class="big">Every week, we organize a variety of events for our students and undergraduates. From webinars to creative events, there are activities that are always worth your attention.</p>
          </div>
          <div class="row row-30 justify-content-center">
            <div class="col-xs-8 col-sm-6 col-md-4">
                    <!-- Post event-->
                    <div class="post post-event" data-animate='{"class":"fadeInUp"}'><a class="post-media" href="single-post.html"><img class="post-img" src="{{asset('assets/frontend/new/images/image-06-370x240.jpg')}}" alt="" width="370" height="240"/>
                        <div class="post-date">
                          <div class="post-day">19</div>
                          <div class="post-month">Sep</div>
                        </div></a>
                      <div class="post-heading h4">
                        <div class="post-title"><a href="single-post.html">Creative Day</a></div>
                        <div class="post-price">$20</div>
                      </div>
                      <div class="post-meta post-meta-vertical big">
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-clock"></div>
                          <div class="post-time">12:00 am - 2:00 pm</div>
                        </div>
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-pin"></div>
                          <div class="post-location">Cambridge, MA 02138, USA</div>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-xs-8 col-sm-6 col-md-4">
                    <!-- Post event-->
                    <div class="post post-event" data-animate='{"class":"fadeInUp","delay":".15s"}'><a class="post-media" href="single-post.html"><img class="post-img" src="{{asset('assets/frontend/new/images/image-07-370x240.jpg')}}" alt="" width="370" height="240"/>
                        <div class="post-date">
                          <div class="post-day">21</div>
                          <div class="post-month">Sep</div>
                        </div></a>
                      <div class="post-heading h4">
                        <div class="post-title"><a href="single-post.html">Poetry Event</a></div>
                        <div class="post-price">$15</div>
                      </div>
                      <div class="post-meta post-meta-vertical big">
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-clock"></div>
                          <div class="post-time">11:00 am - 1:00 pm</div>
                        </div>
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-pin"></div>
                          <div class="post-location">233 Main St. New York United States</div>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-xs-8 col-sm-6 col-md-4">
                    <!-- Post event-->
                    <div class="post post-event" data-animate='{"class":"fadeInUp","delay":".3s"}'><a class="post-media" href="single-post.html"><img class="post-img" src="{{asset('assets/frontend/new/images/image-08-370x240.jpg')}}" alt="" width="370" height="240"/>
                        <div class="post-date">
                          <div class="post-day">26</div>
                          <div class="post-month">Sep</div>
                        </div></a>
                      <div class="post-heading h4">
                        <div class="post-title"><a href="single-post.html">Undergraduate Day</a></div>
                        <div class="post-price">Free</div>
                      </div>
                      <div class="post-meta post-meta-vertical big">
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-clock"></div>
                          <div class="post-time">1:00 pm - 11:59 pm</div>
                        </div>
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-pin"></div>
                          <div class="post-location">Cambridge, MA 02138, USA</div>
                        </div>
                      </div>
                    </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Testimonials-->
      <section class="section-md bg-300 text-center">
        <div class="container">
          <div class="text-block text-block-1" data-animate='{"class":"fadeIn"}'>
            <h2>Testimonials</h2>
            <p class="big">Want to know more about our university? The feedback submitted by our students is an effective way to show how beneficial the studying at Teachzy university can be.</p>
          </div>
          <div class="slick-person-container">
            <div class="slick-slider slick-person-img slider-nav" data-slick='{"slidesToShow":3,"arrows":false,"asNavFor":".slider-for","focusOnSelect":true,"centerMode":true,"centerPadding":"0px"}'>
              <div class="slick-content"><img src="{{asset('assets/frontend/new/images/person-11-135x135.jpg')}}" alt="" width="135" height="135"/>
              </div>
              <div class="slick-content"><img src="{{asset('assets/frontend/new/images/person-07-135x135.jpg')}}" alt="" width="135" height="135"/>
              </div>
              <div class="slick-content"><img src="{{asset('assets/frontend/new/images/person-10-135x135.jpg')}}" alt="" width="135" height="135"/>
              </div>
              <div class="slick-content"><img src="{{asset('assets/frontend/new/images/person-08-135x135.jpg')}}" alt="" width="135" height="135"/>
              </div>
            </div>
            <div class="slick-slider slick-person-content slider-for" data-slick='{"arrows":true,"asNavFor":".slider-nav","autoplay":true,"autoplaySpeed":5000,"fade":true}'>
              <div class="slick-content">
                      <!-- Quote-->
                      <blockquote class="quote quote-simple">
                        <q class="quote-text">My overall experience in Teachzy was amazing. The best part is to get to know people from a lot of different places, learn about different cultures and make friends for life!</q>
                        <cite class="quote-cite h6">Peter Fletcher</cite>
                        <div class="quote-meta">Student</div>
                      </blockquote>
              </div>
              <div class="slick-content">
                      <!-- Quote-->
                      <blockquote class="quote quote-simple">
                        <q class="quote-text">This university was an exceptional and international experience for me. It did not only advance my studies and knowledge but even gave me the chance to make friends across the globe.</q>
                        <cite class="quote-cite h6">Jenny Wilson</cite>
                        <div class="quote-meta">Student</div>
                      </blockquote>
              </div>
              <div class="slick-content">
                      <!-- Quote-->
                      <blockquote class="quote quote-simple">
                        <q class="quote-text">I made friends from countries all over the world. That’s really amazing! And Teachzy is just like a quiet oasis in the crowded city, it’s really pleasant to study and live here.</q>
                        <cite class="quote-cite h6">John Adams</cite>
                        <div class="quote-meta">Student</div>
                      </blockquote>
              </div>
              <div class="slick-content">
                      <!-- Quote-->
                      <blockquote class="quote quote-simple">
                        <q class="quote-text">I've been working at Teachzy for over 20 years. As a tutor I love interacting with students and share my knowledge. Here you can definitely make connections for life!</q>
                        <cite class="quote-cite h6">Esther Howard</cite>
                        <div class="quote-meta">Professor</div>
                      </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog-->
      <section class="section-md bg-transparent">
        <div class="container">
          <div class="text-block text-block-1 text-center" data-animate='{"class":"fadeIn"}'>
            <h5 class="text-primary">Latest news</h5>
            <h2>From our blog</h2>
            <p class="big">We regularly share news and updates in our university’s blog. The articles we publish vary from announcing new events and courses to providing useful information to our students.</p>
          </div>
          <div class="row row-30 justify-content-center">
            <div class="col-xs-10 col-sm-6">
                    <!-- Post-->
                    <div class="post" data-animate='{"class":"fadeIn"}'><a class="post-media" href="single-post.html"><img class="post-img" src="{{asset('assets/frontend/new/images/image-09-570x380.jpg')}}" alt="" width="570" height="380"/></a>
                      <div class="post-meta">
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-calendar"></div>
                          <div class="post-date">April 23, 2021</div>
                        </div>
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-message-circle"></div>
                          <div class="post-comment">3 comment(s)</div>
                        </div>
                      </div>
                      <div class="post-title h6"><a href="single-post.html">Liberal Arts Colleges Rankings</a></div>
                      <div class="post-text">The National Liberal Arts Colleges, including schools like Wellesley College and Bowdoin College, emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</div>
                    </div>
            </div>
            <div class="col-xs-10 col-sm-6">
              <h5 class="text-primary">Popular</h5>
                    <!-- Post-->
                    <div class="post" data-animate='{"class":"fadeInUp"}'>
                      <div class="post-meta">
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-calendar"></div>
                          <div class="post-date">April 23, 2021</div>
                        </div>
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-message-circle"></div>
                          <div class="post-comment">3 comment(s)</div>
                        </div>
                      </div>
                      <div class="post-title h6"><a href="single-post.html">Studying in the United States</a></div>
                      <div class="post-text">International students increasingly want to come to the United States for college or graduate school. Use our tips, rankings, and more to help you find the best school for you.</div>
                    </div>
                    <!-- Post-->
                    <div class="post" data-animate='{"class":"fadeInUp"}'>
                      <div class="post-meta">
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-calendar"></div>
                          <div class="post-date">April 23, 2021</div>
                        </div>
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-message-circle"></div>
                          <div class="post-comment">3 comment(s)</div>
                        </div>
                      </div>
                      <div class="post-title h6"><a href="single-post.html">5 Ways to Pay for Community College</a></div>
                      <div class="post-text">Most community college students qualify for need-based aid, experts say. Many community colleges offer promise programs, which offer tuition-free awards to eligible students - mainly to students with Pell grant eligibility.</div>
                    </div>
                    <!-- Post-->
                    <div class="post" data-animate='{"class":"fadeInUp"}'>
                      <div class="post-meta">
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-calendar"></div>
                          <div class="post-date">April 23, 2021</div>
                        </div>
                        <div class="post-meta-item">
                          <div class="post-meta-icon custom-font-message-circle"></div>
                          <div class="post-comment">3 comment(s)</div>
                        </div>
                      </div>
                      <div class="post-title h6"><a href="single-post.html">Consider MBA Programs That Offer Summer Prep</a></div>
                      <div class="post-text">New MBA students can brush up on finance and accounting before classes begin. Summer preparatory programs offered through schools allow students to get a head start on making connections and building skills.</div>
                    </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Call to action-->
      <section class="section-sm bg-primary context-dark text-center">
        <div class="container">
          <div class="group-16 d-lg-flex flex-wrap justify-content-between align-items-center">
            <h3>Prepare Your Application Letter for Admission</h3><a class="btn btn-primary" href="#">Apply</a>
          </div>
        </div>
      </section>
@endsection
