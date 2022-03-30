﻿

 @extends('teacher.layout_public_teacher_interface')
 @section('content_public_teacher_interface') 

    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 ">
                        <div class="section3125 hstry142">
                            <div class="grp_titles pt-0">
                                <div class="ht_title">Saved Courses</div>
                                <a href="#" class="ht_clr">Remove All</a>
                            </div>
                            <div class="tb_145">
                                <div class="wtch125">
                                    <span class="vdt14">4 Courses</span>
                                </div>
                                <a href="#" class="rmv-btn"><i class='uil uil-trash-alt'></i>Remove Saved Courses</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="_14d25 mb-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="mhs_title">Saved Courses</h4>
                                    <div class="fcrse_1">
                                        <a href="{{url('/student_course_detail')}}" class="hf_img">
                                            <img src="{{ asset('assets/images/courses/img-1.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hs_content">
                                            <div class="eps_dots eps_dots10 more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-times'></i>Remove</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="{{url('/student_course_detail')}}" class="crse14s title900">Complete Python
                                                Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Web Development | Python</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">John Doe</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fcrse_1 mt-30">
                                        <a href="{{url('/student_course_detail')}}" class="hf_img">
                                            <img src="{{ asset('assets/images/courses/img-2.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    28 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hs_content">
                                            <div class="eps_dots eps_dots10 more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-times'></i>Remove</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">5M views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="{{url('/student_course_detail')}}" class="crse14s title900">The Complete
                                                JavaScript Course 2020: Build Real Projects!</a>
                                            <a href="#" class="crse-cate">Development | JavaScript</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Jassica William</a></p>
                                                <div class="prce142">$5</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fcrse_1 mt-30">
                                        <a href="{{url('/student_course_detail')}}" class="hf_img">
                                            <img src="{{ asset('assets/images/courses/img-3.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    12 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hs_content">
                                            <div class="eps_dots eps_dots10 more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-times'></i>Remove</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">1M views</span>
                                                <span class="vdt14">18 days ago</span>
                                            </div>
                                            <a href="{{url('/student_course_detail')}}" class="crse14s title900">Beginning C++
                                                Programming - From Beginner to Beyond</a>
                                            <a href="#" class="crse-cate">Development | C++</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Joginder Singh</a></p>
                                                <div class="prce142">$13</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fcrse_1 mt-30">
                                        <a href="{{url('/student_course_detail')}}" class="hf_img">
                                            <img src="{{ asset('assets/images/courses/img-4.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    1 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hs_content">
                                            <div class="eps_dots eps_dots10 more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-times'></i>Remove</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">153k views</span>
                                                <span class="vdt14">3 months ago</span>
                                            </div>
                                            <a href="{{url('/student_course_detail')}}" class="crse14s title900">The Complete
                                                Digital Marketing Course - 12 Courses in 1</a>
                                            <a href="#" class="crse-cate">Digital Marketing | Marketing</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Poonam Verma</a></p>
                                                <div class="prce142">$12</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
   