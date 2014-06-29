
<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ko-KR" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

<!-- BEGIN head -->
<head>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />

	<?

	$ex = iconv("euckr", "utf8", $ex);

	?>

    <!-- Title -->
    <title>RyanNet-전화앱을 만드는 개발자입니다.</title>

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width" />

    <!-- Favicon 홈페이지 아이콘 -->
	<link rel="shortcut icon" href="../mozymozy.co.kr/pic/favicon.ico?v=2" />


    <!-- Include Custom Styles -->
    <link
        href='http://fonts.googleapis.com/css?family=Merriweather:400,700,300'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'
        rel='stylesheet' type='text/css'>
    <style type="text/css">
        body, h4, h5, p, .subtitle, #hovercard p.subtitle, .awsm-info h3, .awsm-info a.button {
            font-family: 'PT Sans', Nanum Gothic, Helvetica, Arial, sans-serif;
        }

        #main_menu ul li a, .customSelectInner, .hasCustomSelect option {
            font-family: 'PT Sans', Nanum Gothic, Helvetica, Arial, sans-serif;
        }

        h1, h2, h3, h6, h5.about_subtitle, #hovercard h2, h3.achievement_title, .main-title .subtitle, h2.entry-title, h1.entry-title, .widget h3.widget-title, .widget_footer h3.widget-title, .post-content h1, .post-content h2, .post-content h3, .post-content h4, .post-content h5, .post-content h6 {
            font-family: 'Merriweather', Nanum Gothic, Georgia, serif;
        }

        /*------------------------------------------------------
	ELEMENTS COLOR
---------------------------------------------------------*/
        .awsm-info {
            background: rgba(52, 121, 158, 0.8);
        }

        .awsm-portfolio-links a.button:hover {
            background-color: rgba(52, 121, 158, 0.8);
        }

        a, a:hover, a:focus, #sidebar .current-menu-item a, #portfolio_filter li.current a, #portfolio_filter li a:hover, .awsm-info p a, .awsm-info p a:hover, h2.entry-title a:hover, h1.entry-title a:hover, .entry-header ul a:hover, .comments a:hover, .customSelectInner, .hasCustomSelect option {
            color: #34799e;
        }

        .skill_set, .soft_skill span, .submit_button, .main_nav li:hover a, .link-active, .current-menu-item a, .main_nav ul.sub-menu, .button, #submit, .wpcf7-submit, .post .date, .tags a, .entry-footer li a:hover, .post-content .wp-caption, .comment .comment-meta .comment-reply-link:hover, #searchsubmit {
            background: #34799e;
        }

        .single_portfolio_title .post_previous a:hover, .single_portfolio_title .post_next a:hover, .post_previous a:hover, .post_next a:hover, .controls_wrap .flex-prev:hover, .controls_wrap .flex-next:hover, .tags a, .wp-pagenavi a:hover, .wp-pagenavi span.current, #aws_pagination .page-numbers:hover, #aws_pagination .page-numbers.current, .flexslider_portfolio .flex-prev:hover, .flexslider_portfolio .flex-next:hover, select.selectnav option:hover {
            background-color: #34799e;
        }

        #portfolio_filter li.current a, #portfolio_filter li a:hover {
            border-bottom: 3px solid #34799e;
        }

        .awsm-info a:hover {
            box-shadow: inset 0 0 0 0.3em rgba(52, 121, 158, 0.8);
        }

        .soft_skill span:before {
            border-color: transparent #34799e transparent;
        }

        .post-content pre {
            border-left: 5px solid #34799e;
        }

        .lt-ie8 .awsm-info, .lt-ie8 .submit_button, .lt-ie8 .skill_set, .lt-ie8 .button, .lt-ie8 .main_nav li a:hover, .lt-ie8 .link-active, .lt-ie9 .awsm-info {
            background: #34799e;
        }
        /*RESPONSIVE MENU COLORS*/
        @media screen and (max-width: 897px) {
            #one_page_menu.main_nav ul.sub-menu li:hover a, #one_page_menu.main_nav ul.sub-menu li:hover a.link-active {
                background: #34799e;
                background-position: 0 0;
                color: #FFF;
            }
        }
    </style>


    <!-- This site is optimized with the Yoast WordPress SEO plugin v1.4.13 - http://yoast.com/wordpress/seo/ -->
    <link rel="canonical" href="http://www.mozymozy.co.kr/" />
    <meta property='og:locale' content='ko_KR' />
    <meta property='og:type' content='website' />
    <meta property='og:title' content='mozymozy' />
    <meta property='og:url' content='http://www.mozymozy.co.kr/' />
    <meta property='og:site_name' content='mozymozy' />
    <!-- / Yoast WordPress SEO plugin. -->


    <link rel="alternate" type="application/rss+xml"
        title="AWSM - Simple Personal Portfolio &amp; Blog WordPress Theme &raquo; Feed"
        href="http://demo.mekshq.com/awsm-wp/feed/" />
    <link rel="alternate" type="application/rss+xml"
        title="AWSM - Simple Personal Portfolio &amp; Blog WordPress Theme &raquo; Comments Feed"
        href="http://demo.mekshq.com/awsm-wp/comments/feed/" />
    <link rel='stylesheet' id='style-css'
        href='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/style.css?ver=1.4.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='aws_general-css'
        href='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/css/general.css?ver=1.4.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='aws_grid-css'
        href='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/css/grid.css?ver=1.4.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='aws_main-css'
        href='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/css/main.css?ver=1.4.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='aws_blog-css'
        href='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/css/blog.css?ver=1.4.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='aws_dark_light-css'
        href='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/css/colors/light.css?ver=1.4.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='aws_colorbox-css'
        href='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/css/colorbox.css?ver=1.4.0'
        type='text/css' media='screen' />
    <link rel='stylesheet' id='aws_responsive-css'
        href='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/css/responsive.css?ver=1.4.0'
        type='text/css' media='screen' />
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-includes/js/jquery/jquery.js?ver=1.8.3'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/plugins/anti-spam/js/anti-spam.js?ver=1.8'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/waypoints.min.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/jquery.scrollTo-min.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/jquery.isotope.min.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/jquery.easing.1.3.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/jquery.colorbox.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/imagesloaded.pkgd.min.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/jquery.flexslider-min.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/jquery.knob.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/selectnav.min.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/jquery.customSelect.min.js?ver=1.4.0'></script>
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/share.js?ver=1.4.0'></script>
    <script type='text/javascript'>

        -->/* <![CDATA[ */
        var aws_settings = {
            "one_page" : "1",
            "front_page" : "1",
            "use_form" : "1",
            "use_captcha" : "1",
            "ajax_url" : "http:\/\/buttas.net\/wp\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <!--  Begin social icon 나오게하는 script -->
    <script type='text/javascript'
        src='http://demo.mekshq.com/awsm-wp/wp-content/themes/awsm-wp/js/custom.js?ver=1.4.0'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="http://demo.mekshq.com/awsm-wp/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="http://demo.mekshq.com/awsm-wp/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 3.6" />
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>

</head>
<!-- END head -->

<body class="home blog">

    <!-- BEGIN Scroll To Top -->
    <p id="back-top" style="display: block;">

        <a href="#top">Top</a>

    </p>
    <!-- END Scroll To Top -->

    <!-- BEGIN Main (#main) -->
    <div id="main">
        <!-- BEGIN Main Menu Navigation -->
        <div id="main_menu">
            <ul id="one_page_menu" class="main_nav">
                <li><a href="#7-2" class="aws-one-page" data-slug="7-2">HOME</a></li>


                <li><a href="#timeline" class="aws-one-page" data-slug="timeline">TimeLine</a>
                </li>

                <li><a href="#about" class="aws-one-page" data-slug="about">About</a>
                </li>





                <li><a href="#project" class="aws-one-page" data-slug="project">PROJECT</a>
                </li>
                <li><a href="#contact" class="aws-one-page" data-slug="contact">CONTACT</a>
                </li>



            </ul>

        </div>
        <!-- END Main Menu Navigation -->
        <!-- BEGIN Container (#container) / this is a top container -->
        <div id="top" class="container">
            <!-- BEGIN Profile -->
            <div id="7-2" class="content-wrapper twelvecol row">

                <!-- BEGIN Hero Image Parent -->
                <div class="hero-image-parent">

                    <!-- BEGIN Social Links -->
                    <div class="profile_social_links color_icons">
                        <!-- <a href="http://myskype.info/chowin21@naver.com"
                            class="pos_1 skype_ico" target="_blank"><span>skype</span></a>  -->
						<a href="https://www.facebook.com/chowin21"
                           class="pos_1 facebook_ico" target="_blank"><span>facebook</span></a>
                        <a href="https://twitter.com/re0man" 
							class="pos_2 twitter_ico"
                            target="_blank"><span>twitter</span></a> 
						<a href="http://www.youtube.com/channel/UChlcXdPqPKiZdr9oFgR-7Lw/videos"
                            class="pos_3 youtube_ico" target="_blank"><span>youtube</span></a>
                        <a href="http://blog.naver.com/chowin21" 
							class="pos_4 blogger_ico"
                            target="_blank"><span>naver-blog</span></a> <a href=""
                            class="pos_5 google_ico" target="_blank"><span>google</span></a>
                        <a href="http://www.linkedin.com/profile/view?id=169500312&trk=nav_responsive_tab_profile_pic" 
							class="pos_6 linkedin_ico"
                            target="_blank"><span>linkedin</span></a> 
						<a href="https://github.com/ryancho" 
							class="pos_7 github_ico"
                             target="_blank"><span>Git-hub</span></a>
							 						<a href="https://www.facebook.com/pages/Mozymozy/470905349689117?ref=hl" 
							class="pos_8 rss_ico"
                             target="_blank"><span>MOZYMOZY</span></a>

                    </div>
                    <!-- END Social Links -->

                    <!-- BEGIN Image Holder 첫페이지 가운데 이미지-->
                    <div class="hero-image-holder">
                        <img src="../pic/ryancho_smile_rotate.jpg"
                            class="hero-image" alt="Home" />

                    </div>
                    <!-- END Image Holder -->

                </div>
                <!-- END Hero Image Parent -->

                <!-- BEGIN Name Box 사진아래 이름-->
                <div class="name-box">

                    <h1 class="zero_margin main-title title">Ryan Cho</h1>

                    <p class="subline">Hello, I'm Ryan Cho. Welcome to my website!</p>

                    <a class="button large squared" href="#project" target="_self">View
						Project</a>


                </div>
                <!-- END Name Box -->



                <div class="clearrow"></div>

            </div>
            <!-- END Profile -->
            <!-- BEGIN timeline -->
            <div id="timeline" class="row twelvecol content-wrapper">

                <!-- BEGIN header title 큰제목 -->
                <div class="text-center">
                    <h2 class="main-title title">TIMELINE</h2>
                    <div class="hr"></div>
                </div>
                <!-- END header title -->
                <div class="centered">

                    <!-- if user wants to add some custom content -->
                    <div class="entry-content-wrapper"></div>



                    <!-- BEGIN TIMELINE -->
                    <div class="timeline">

                        <!-- BEGIN Timeline Point -->
                        <div class="timeline_point">
                            <span>Our Timeline</span>
                        </div>
                        <!-- END Timeline Point -->









                        <!-- BEGIN Timeline Point 큰원 2013년-->
                        <div class="timeline_point smaller">
                            <span>2013</span>
                        </div>
                        <!-- END Timeline Point -->



                        <!-- BEGIN Timeline Unit -->
                        <div class="timeline_unit right">
                            <div class="arrow"></div>

                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">


                                <!-- BEGIN featured featured -->



                                <img src="" alt="" class="timeline_img" />


                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.7.30</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                <p>제1회스펙초월 멘토스쿨 -벤처스퀘어 명승은대표 멘토링</p>
                                <p>
                                    원링크: <a href="http://www.myjobacademy.kr/h2012/pub/m_4/4.jsp"
                                        title="링크이동">링크이동
									
                                    </a>
                                </p>
                            </p>
                            <p>
                                <img src="/pic/about2.PNG">
                            </p>


                        </div>
                        <!-- END Timeline Unit -->


                        <!-- BEGIN Timeline Unit class icon은 smaller보다 약간 작은 크기  class arrow 는선긋기-->
                        <div class="timeline_unit left">
                            <!-- Start arrow -->
                            <div class="arrow"></div>

                            <div class="icon"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">
                                <!-- End arrow  선긋기 끝  -->

                                <!-- BEGIN featured featured -->
                                <img src="" />


                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.7.15</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                제3회 청년기업가대회 본선진출
							<p>
                                원링크: <a href="http://www.efkorea.kr/noticeView.html?id=65"
                                    title="링크이동">링크이동</a>
                            </p>
                            <p>
                                <img src="/pic/port2_1.PNG">
                            </p>

                            <p>
                                <p></p>
                            </p>


                        </div>
                        <!-- END Timeline Unit_Left Left라고 써주란말이야!-->



                        <!-- BEGIN Timeline End Point -->

                        <!-- BEGIN Timeline Unit class 2013.8.9 icon은 smaller보다 약간 작은 크기  class arrow 는선긋기-->
                        <div class="timeline_unit left">
                            <!-- Start arrow -->
                            <div class="arrow"></div>

                            <div class="icon"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">
                                <!-- End arrow  선긋기 끝  -->

                                <!-- BEGIN featured featured -->
                                <img src="" />


                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.8.9</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                제1회 창업결심캠프 D.cision - K-cube 임지훈대표 멘토링
							<p>
                                원링크: <a href="http://dreamcamp.co/archives/7202" title="링크이동">링크이동
									</abbr>
                                </a>
                            </p>

                            <p>
                                <img src="/pic/about3.jpg">
                                <p></p>
                            </p>


                        </div>
                        <!-- END Timeline Unit_Left Left라고 써주란말이야!-->

                        <!-- BEGIN Timeline Unit Long_right_small_circle -->
                        <div class="timeline_unit right">
                            <div class="arrow"></div>

                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">


                                <!-- BEGIN featured featured -->



                                <img src="" alt="" class="timeline_img" />


                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.8.14</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                <p>D.camp 멤버쉽 가입 승인</p>
                                <p>
                                    </a>
                                </p>
                            </p>
                            링크: <a href="https://www.facebook.com/groups/dreamcamp.co/ "
                                title="링크이동">링크이동
								<p></p>
                        </div>
                        <!-- END Timeline Unit right_small -->

                        <!-- END Timeline Unit_Left Left라고 써주란말이야!-->



                        <!-- BEGIN Timeline End Point Long_left_small -->

                        <!-- BEGIN Timeline Unit class 2013.8.9 icon은 smaller보다 약간 작은 크기  class arrow 는선긋기-->
                        <div class="timeline_unit left">
                            <!-- Start arrow -->
                            <div class="arrow"></div>
                            <!--  동그라미 아이콘 작은것  -->
                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">
                                <!-- End arrow  선긋기 끝  -->

                                <!-- BEGIN featured featured -->
                                <img src="" alt="" class="timeline_img" />


                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.8.14</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                K-cube 멤버쉽 가입승인
							<p>
                                </a>
                            </p>

                            <p>
                                <p>
                                    링크: <a
                                        href="https://www.facebook.com/groups/kcubefriends/#!/groups/kcubefriends/"
                                        title="링크이동">링크이동</a>
                                </p>
                            </p>


                        </div>
                        <!-- END Timeline Unit_Left Left라고 써주란말이야!-->


                        <!-- BEGIN Timeline Unit Long_right_small_circle -->
                        <div class="timeline_unit right">
                            <div class="arrow"></div>

                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">


                                <!-- BEGIN featured featured -->
                                <img src="" alt="" class="timeline_img" />
                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.8.14</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                <p>Venture Square 명승은 대표님의 멘토링 네트워크</p>
                                <p>
                                    </a>
                                </p>
                            </p>
                            <img src="/pic/about8.PNG"></img>
                            <p></p>
                        </div>
                        <!-- END Timeline Unit right_small -->

                        <!-- BEGIN Timeline End Point Long_left_small -->

                        <!-- BEGIN Timeline Unit class 2013.8.9 icon은 smaller보다 약간 작은 크기  class arrow 는선긋기-->
                        <div class="timeline_unit left">
                            <!-- Start arrow -->
                            <div class="arrow"></div>
                            <!--  동그라미 아이콘 작은것  -->
                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">
                                <!-- End arrow  선긋기 끝  -->

                                <!-- BEGIN featured featured -->
                                <img src="" alt="" class="timeline_img" />


                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.9.13</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                제4회 슈퍼앱 코리아 본선진출
							<p>
                                </a>
                            </p>

                            <!-- BEGIN featured featured -->

                            <img src="/pic/2013-09-21 news.PNG" alt=""
                                class="timeline_img" />
                            <!-- END featured media -->

                            <p>
                                <p>
                                    링크: <a href="http://sports.donga.com/3/all/20130917/57715493/1"
                                        title="링크이동">링크이동</a>
                                </p>
                            </p>


                        </div>
                        <!-- END Timeline Unit_Left Left라고 써주란말이야!-->

                        <!-- BEGIN Timeline Unit Long_right_small_circle -->
                        <div class="timeline_unit right">
                            <div class="arrow"></div>

                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">


                                <!-- BEGIN featured featured -->
                                <img src="" alt="" class="timeline_img" />
                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.10.28</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                <p>
                                    여성부와 모바일 앱 개발대회 '해피톤'
                                </p>
                                <p>
                                    </a>
                                </p>
                            </p>
                            <img src="/pic/happy.png"></img>
                            <p>
                                참가프로젝트: PIL (시급2만원알바 피부,메이크업,헤어,네일 모델러 매칭서비스 )
                            </p>
                            <p>
                                링크: <a href="http://it.donga.com/16316/"
                                    title="링크이동">링크이동</a>
                            </p>
                            <p></p>
                        </div>
                        <!-- END Timeline Unit right_small -->

                        <!-- BEGIN Timeline End Point Long_left_small -->

                        <!-- BEGIN Timeline Unit class 2013.8.9 icon은 smaller보다 약간 작은 크기  class arrow 는선긋기-->
                        <div class="timeline_unit left">
                            <!-- Start arrow -->
                            <div class="arrow"></div>
                            <!--  동그라미 아이콘 작은것  -->
                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">
                                <!-- End arrow  선긋기 끝  -->

                                <!-- BEGIN featured featured -->
                                <img src="" alt="" class="timeline_img" />


                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.11.15</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                제4회 슈퍼앱 코리아 '비지니스상' 
								<p>
                                    </a>
                                </p>

                            <!-- BEGIN featured featured -->

                            <img src="/pic/super_final.png" alt=""
                                class="timeline_img" />
                            <!-- END featured media -->

                            <p>
								<p>
									1줄설명: 현재위치로부터 제일싼 재화를 찾아주는 서비스
								</p>
								<p>
								  링크: <a
                                        href="https://www.facebook.com/Odigokr"
                                        title="링크이동">페이스북 이동</a>

								</p>
                                <p>
                                    링크: <a
                                        href="http://www.itdaily.kr/atl/view.asp?a_id=45465"
                                        title="링크이동">기사 링크이동</a>
                                </p>
                                <p>
                                    링크: <a
                                        href="https://play.google.com/store/apps/details?id=com.chowin21.android_odi_go"
                                        title="링크이동">구글플레이 링크이동</a>
                                </p>
                            </p>



                        </div>
                        <!-- END Timeline Unit_Left Left라고 써주란말이야!-->
                        <!-- BEGIN Timeline Unit Long_right_small_circle -->
                        <div class="timeline_unit right">
                            <div class="arrow"></div>

                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">


                                <!-- BEGIN featured featured -->
                                <img src="" alt="" class="timeline_img" />
                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.12.6</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                <p>
                                    제13회 스타트업 위크엔드 -프로젝트: 모지모지
                                </p>
                                <p>
                                    </a>
                                </p>
                            </p>
                            <img src="/pic/mozymozyteam.jpg"></img>
                            <img src="/pic/mozymozy.jpg"></img>
                            <p>
                                참가프로젝트: 모지모지 <br>
								한줄설명:전화메모 특화 서비스
                            </p>
                            <p>
                                링크: <a href="https://www.facebook.com/pages/Mozymozy/470905349689117/"
                                    title="링크이동">페이스북 링크이동</a>
                            </p>

                            <p></p>
                        </div>
                        <!-- END Timeline Unit right_small -->

                        <!-- BEGIN Timeline End Point Long_left_small -->

                        <!-- BEGIN Timeline Unit class 2013.8.9 icon은 smaller보다 약간 작은 크기  class arrow 는선긋기-->
                        <div class="timeline_unit left">
                            <!-- Start arrow -->
                            <div class="arrow"></div>
                            <!--  동그라미 아이콘 작은것  -->
                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">
                                <!-- End arrow  선긋기 끝  -->

                                <!-- BEGIN featured featured -->
                                <img src="" alt="" class="timeline_img" />


                                <!-- END featured media -->
                                <h3 class="title_with_image">2013.12.13</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                제9회 KT 에코노베이션 우수상 - 프로젝트:꽃보다 알바생
								<p>
                                    </a>
                                </p>
                            <img src="/pic/floweralba.png"></img>
                            <p>
                                링크: <a href="https://www.facebook.com/floweralbas?fref=ts"
                                    title="링크이동">페이스북 링크이동</a>


                         

                         

                        </div>
  <!-- BEGIN Timeline Unit Long_right_small_circle -->
                        <div class="timeline_unit left">
                            <div class="arrow"></div>

                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">


                                <!-- BEGIN featured featured -->
                                <img src="" alt="" class="timeline_img" />
                                <!-- END featured media -->
                                <h3 class="title_with_image">2014.03.30</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                <p>
                                    제14회 스타트업 위크엔드 - 베스트 엔지니어상 수상 <br>

                                </p>
                                <p>
                                    </a>
                                </p>
                            </p>
                            <img src="/pic/socialdining.jpg"></img>

                            <p>
                                참가프로젝트: 겸사겸상 - 여성특화 수다밥 SNS
                            </p>
                            <p>
                                링크: <a href="https://www.facebook.com/pages/%EB%91%90%EB%A6%AC%EB%91%90%EB%B0%A5-%EB%B0%A5%EC%BD%94%EB%A6%AC%EC%95%84/1386960471583370"
                                    title="링크이동">페이스북 링크이동</a>
                            </p>
							                            <p>
                                링크: <a href="							http://blog.naver.com/chowin21/150187000286"
                                    title="링크이동">집밥 필드테스트</a>
                            </p>

                            </p>
							                            <p>
                                링크: <a href="							http://www.venturesquare.net/533154"
                                    title="링크이동">인터뷰</a>
                            </p>


                        </div>
                        <!-- END Timeline Unit right_small -->
 <!-- BEGIN Timeline Unit Long_right_small_circle -->
                        <div class="timeline_unit right">
                            <div class="arrow"></div>

                            <div class="icon smaller"></div>
                            <!-- DETAILS -->
                            <div class="data_meta_hold">


                                <!-- BEGIN featured featured -->
                                <img src="" alt="" class="timeline_img" />
                                <!-- END featured media -->
                                <h3 class="title_with_image">2014.04.15</h3>
                            </div>
                            <!-- END OF DETAILS -->

                            <p>
                                <p>
                                    2014년 SK 플래닛 동고동락 10인팀선정 <br>

                                </p>
                                <p>
                                    </a>
                                </p>
                            </p>
                            <img src="/pic/floweralba.png"></img>
                            <p>
                                링크: <a href="https://www.facebook.com/floweralbas?fref=ts"
                                    title="링크이동">페이스북 링크이동</a>




                        </div>
                        <!-- END Timeline Unit right_small -->
                        <!-- END Timeline Unit_Left Left라고 써주란말이야!-->




                        <!--  BEGIN Timeline Unit "Now" -->
                        <div class="timeline_point smaller last">
                            <span>Now</span>
                        </div>
                        <!-- END Timeline End Point (Now) -->

                    </div>
                    <!-- END TIMELINE -->


                    <div class="clearrow"></div>
                </div>

            </div>
            <!-- END timeline -->


            <!-- BEGIN about -->
            <div id="about" class="row twelvecol content-wrapper">

                <!-- BEGIN header title 큰제목 -->
                <div class="text-center">
                    <h2 class="main-title title">ABOUT</h2>
                    <div class="hr"></div>
                </div>
                <!-- END header title -->

                <!-- Introduce our families 소개  -->


                <div class="centered">

                    <div class="Section1">

                        <div align="center">


                            <table align="center" class="MsoTableGrid" border="1" cellspacing="0"
                                cellpadding="0"
                                style='border-collapse: collapse; border: none; mso-border-alt: solid white .5pt; mso-border-themecolor: background1; mso-yfti-tbllook: 1184; mso-padding-alt: 0cm 5.4pt 0cm 5.4pt; mso-border-insideh: .5pt solid white; mso-border-insideh-themecolor: background1; mso-border-insidev: .5pt solid white; mso-border-insidev-themecolor: background1'>

                                <!--  First page of introduce families  -->

                                <img src="/pic/about5.PNG" />

                                <tr
                                    style='mso-yfti-irow: 0; mso-yfti-firstrow: yes; mso-yfti-lastrow: yes'>
                                    <td valign="top"
                                        style='border: solid white 1.0pt; mso-border-themecolor: background1; mso-border-alt: solid white .5pt; mso-border-themecolor: background1; padding: 0cm 5.4pt 0cm 5.4pt'>
                                        <p class="MsoNormal" align="left"
                                            style='text-align: left; mso-line-height-alt: 12.9pt; mso-pagination: widow-orphan; background: white; text-autospace: ideograph-numeric ideograph-other; vertical-align: baseline; word-break: keep-all'>
                                            <span lang="EN-US"
                                                style='font-size: 14.0pt; font-family: "HY헤드라인M", "serif"; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: #8064A2; mso-themecolor: accent4; mso-font-kerning: 0pt'>Ryan(</span><span
                                                    style='font-size: 14.0pt; font-family: "HY헤드라인M", "serif"; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: #8064A2; mso-themecolor: accent4; mso-font-kerning: 0pt'>조중현<span
                                                        lang="EN-US">) / CEO / Vision Planner<o:p></o:p></span></span>
                                        </p>
                                        <p class="MsoNormal" align="left"
                                            style='text-align: left; line-height: 12.9pt; mso-pagination: widow-orphan; background: white; text-autospace: ideograph-numeric ideograph-other; vertical-align: baseline; word-break: keep-all'>
                                            <span lang="EN-US"
                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                <o:p>&nbsp;</o:p>
                                            </span>
                                        </p>
                                        <p class="MsoNormal" align="left"
                                            style='text-align: left; line-height: 12.9pt; mso-pagination: widow-orphan; background: white; text-autospace: ideograph-numeric ideograph-other; vertical-align: baseline; word-break: keep-all'>
                                            <span lang="EN-US"
                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>2009
                                            </span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>게임신용도</span><span
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                </span><span
                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>관리</span><span
                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                    </span><span
                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                            lang="EN-US"
                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                            2009 </span><span
                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>해외</span><span
                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                </span><span
                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>온라인</span><span
                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                    </span><span
                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>게임</span><span
                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                        </span><span
                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>관련</span><span
                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                            </span><span
                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>서비스</span><span
                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                </span><span
                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                                                        lang="EN-US"
                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                                                        2010 </span><span
                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>국내</span><span
                                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                            </span><span
                                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>온라인</span><span
                                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                </span><span
                                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>게임</span><span
                                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                    </span><span
                                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>머니</span><span
                                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                        </span><span
                                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>서비스</span><span
                                                                                                                lang="EN-US"
                                                                                                                style='font-size: 9.0pt; mso-bidi-font-size: 11.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>&nbsp;</span><span
                                                                                                                    lang="EN-US"
                                                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                                                                                    2010 </span><span
                                                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>해외</span><span
                                                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                        </span><span
                                                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>온라인</span><span
                                                                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                            </span><span
                                                                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>게임</span><span
                                                                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                </span><span
                                                                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>머니</span><span
                                                                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                    </span><span
                                                                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>서비스</span><span
                                                                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                        </span><span
                                                                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                                                                                                                lang="EN-US"
                                                                                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                                                                                                                2011 </span><span
                                                                                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>필리핀</span><span
                                                                                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                                    </span><span
                                                                                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>중고가구</span><span
                                                                                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                                        </span><span
                                                                                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>수출</span><span
                                                                                                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                                            </span><span
                                                                                                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>시장조사</span><span
                                                                                                                                                                    lang="EN-US"
                                                                                                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                                                                                                                                    2011 </span><span
                                                                                                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>필리핀</span><span
                                                                                                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                                                        </span><span
                                                                                                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>중고피시</span><span
                                                                                                                                                                                lang="EN-US"
                                                                                                                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>,
                                                                                                                                                                            </span><span
                                                                                                                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>노트북</span><span
                                                                                                                                                                                    lang="EN-US"
                                                                                                                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>,
                                                                                                                                                                                </span><span
                                                                                                                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>핸드폰</span><span
                                                                                                                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                                                                    </span><span
                                                                                                                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>수출</span><span
                                                                                                                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                                                                        </span><span
                                                                                                                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>시장조사</span><span
                                                                                                                                                                                                lang="EN-US"
                                                                                                                                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                                                                                                                                                                2011 </span><span
                                                                                                                                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>필리핀</span><span
                                                                                                                                                                                                        lang="EN-US"
                                                                                                                                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
											ODC(</span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>해외아웃소싱</span><span
                                                    lang="EN-US"
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>)
                                                </span><span
                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>시장조사</span><span
                                                        lang="EN-US"
                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                        2011 </span><span
                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>중고피시</span><span
                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                            </span><span
                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>매매</span><span
                                                                    lang="EN-US"
                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                                    2012 </span><span
                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>중국</span><span
                                                                            lang="EN-US"
                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
											ODC </span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>시장조사</span><span
                                                    lang="EN-US"
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                    2012 </span><span
                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>아웃소싱</span><span
                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                        </span><span
                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>중개</span><span
                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                            </span><span
                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>서비스</span><span
                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                </span><span
                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                                        lang="EN-US"
                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
											(</span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>개념</span><span
                                                    lang="EN-US"
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>:elance.com,
											freelancer.com, wishket.com)<br>
                                                    2012
                                                </span><span
                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>중고나라</span><span
                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                    </span><span
                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>모바일</span><span
                                                            lang="EN-US"
                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
											APP </span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                    lang="EN-US"
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>(</span><span
                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>개념</span><span
                                                            lang="EN-US"
                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>:</span><span
                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>번개장터</span><span
                                                                    lang="EN-US"
                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>)<br>
                                                                    2012
                                                                </span><span
                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>주식</span><span
                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                    </span><span
                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>자동매매</span><span
                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                        </span><span
                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                                                lang="EN-US"
                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                                                2012 </span><span
                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>소비자</span><span
                                                                                        lang="EN-US"
                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>=</span><span
                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>투자자</span><span
                                                                                                lang="EN-US"
                                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>,
                                                                                            </span><span
                                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>클라우딩</span><span
                                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                </span><span
                                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>펀드</span><span
                                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                    </span><span
                                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                                                                            lang="EN-US"
                                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>(</span><span
                                                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>개념</span><span
                                                                                                                    lang="EN-US"
                                                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>:kickstarter.com,
											ucanfunding.com, we-go.com)<br>
                                                                                                                    2012 CPC
                                                                                                                </span><span
                                                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>부정방지</span><span
                                                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                    </span><span
                                                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>프로그램</span><span
                                                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                        </span><span
                                                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                                                                                                lang="EN-US"
                                                                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                                                                                                2012 </span><span
                                                                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>온라인</span><span
                                                                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                    </span><span
                                                                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>리서치</span><span
                                                                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                        </span><span
                                                                                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>서비스</span><span
                                                                                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                                                            </span><span
                                                                                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                                                                                                                    lang="EN-US"
                                                                                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
											(</span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>개념</span><span
                                                    lang="EN-US"
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>:</span><span
                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>설치형</span><span
                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                        </span><span
                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>표본화</span><span
                                                                lang="EN-US"
                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>,
                                                            </span><span
                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>랭키닷컴</span><span
                                                                    lang="EN-US"
                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>,
                                                                </span><span
                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>넬슨</span><span
                                                                        lang="EN-US"
                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>TV</span><span
                                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>리서치온라인화</span><span
                                                                                lang="EN-US"
                                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>)<br>
                                                                                2013
                                                                            </span><span
                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>부정적</span><span
                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                </span><span
                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>의견에대한</span><span
                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                    </span><span
                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>크룰링</span><span
                                                                                            lang="EN-US"
                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>&amp;</span><span
                                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>파싱을</span><span
                                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                                </span><span
                                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>통한</span><span
                                                                                                        lang="EN-US"
                                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
											End-user</span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>피드백</span><span
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                </span><span
                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>시스템</span><span
                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                    </span><span
                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                            lang="EN-US"
                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
											(</span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>개념</span><span
                                                    lang="EN-US"
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>:</span><span
                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>펄스</span><span
                                                            lang="EN-US"
                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>-k,
											salesforce.com)<br>
                                                            2013
                                                        </span><span
                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>리워드</span><span
                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                            </span><span
                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>광고</span><span
                                                                    lang="EN-US"
                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
											app </span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                    lang="EN-US"
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                    2013 </span><span
                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>카테고리검색기반을</span><span
                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                        </span><span
                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>통한</span><span
                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                            </span><span
                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>글로벌</span><span
                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                </span><span
                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>원소스멀티유즈</span><span
                                                                        lang="EN-US"
                                                                        style='font-size: 9.0pt; mso-bidi-font-size: 11.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>&nbsp;</span><span
                                                                            lang="EN-US"
                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                                            2013 </span><span
                                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>클라우드펀딩</span><span
                                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                </span><span
                                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>활용</span><span
                                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                                    </span><span
                                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>중국인대상</span><span
                                                                                            lang="EN-US"
                                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
											ELS(</span><span
                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>조기유학</span><span
                                                    lang="EN-US"
                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>)
                                                </span><span
                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>서비스</span><span
                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                    </span><span
                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>기획</span><span
                                                            lang="EN-US"
                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><br>
                                                        </span><span
                                                            style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>현재</span><span
                                                                style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                            </span><span
                                                                style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>카테고리검색기반</span><span
                                                                    style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                </span><span
                                                                    style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>리워드</span><span
                                                                        style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'>
                                                                    </span><span
                                                                        style='font-size: 9.0pt; font-family: 굴림; mso-ascii-font-family: Arial; mso-hansi-font-family: Arial; mso-bidi-font-family: Arial; color: black; mso-font-kerning: 0pt'>커머스</span><span
                                                                            lang="EN-US"
                                                                            style='font-size: 9.0pt; font-family: "Arial", "sans-serif"; mso-fareast-font-family: 굴림; color: black; mso-font-kerning: 0pt'><o:p></o:p></span>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                        </div>

                        <p class="MsoNormal">
                            <span lang="EN-US">
                                <o:p>&nbsp;</o:p>
                            </span>
                        </p>

                    </div>



                </div>
                <!--  end  Introduce our families 소개 -->


            </div>
            <!-- END about -->





            <!-- Begin about#2 -->

            <!-- End about#2 -->




            <!--  Begin project -->
            <!--  다른것이무엇이지? -->
            <div id="project" class="row twelvecol content-wrapper">
                <!-- BEGIN header title -->
                <div class="text-center">
                    <h2 class="main-title title">PROJECT</h2>
                    <div class="hr"></div>
                </div>
                <!-- END header title -->
                <div class="centered">
                    <!-- if user wants to add some custom content -->
                    <div class="entry-content-wrapper"></div>

                    <!-- BEGIN featured featured -->

                    <!-- BEGIN PROJECT PIC  -->


                    <li>
                        <img src="/pic/main_concept.jpg" /></li>
                    <li>
                        <img src="/pic/concept/32.PNG" /></li>
                    <!-- END PROJECT PIC  -->




                    <!-- BEGIN 빈공간 생성하기  -->
                    <div class="centered">

                        <!-- if user wants to add some custom content -->
                        <div class="entry-content-wrapper"></div>
                        <div class="hr"></div>


                    </div>
                    <div class="twelvecol inrespo"></div>

                    <!-- END 빈공간 생성하기  -->

                    <!-- BEGIN CONCEPT header title -->

                    <div class="text-center">
                        <h3 class="main-title title">CONCEPT</h3>
                        <div class="hr"></div>
                    </div>
                    <!-- END header title -->
                    <p>&nbsp;</p>


                    <!-- BEGIN flexslider 사진 부분 -->

                    <div class="flexslider_portfolio loading">
                        <ul class="slides">
                            <li>
                                <img src="/pic/concept/1.PNG" /></li>
                            <li>
                                <img src="/pic/concept/2.PNG" /></li>
                            <li>
                                <img src="/pic/concept/3.PNG" /></li>
                            <li>
                                <img src="/pic/concept/4.PNG" /></li>
                            <li>
                                <img src="/pic/concept/5.PNG" /></li>
                            <li>
                                <img src="/pic/concept/6.PNG" /></li>

                            <li>
                                <img src="/pic/concept/7.PNG" /></li>
                            <li>
                                <img src="/pic/concept/8.PNG" /></li>
                            <li>
                                <img src="/pic/concept/9.PNG" /></li>
                            <li>
                                <img src="/pic/concept/10.PNG" /></li>
                            <li>
                                <img src="/pic/concept/11.PNG" /></li>
                            <li>
                                <img src="/pic/concept/12.PNG" /></li>
                            <li>
                                <img src="/pic/concept/13.PNG" /></li>
                            <li>
                                <img src="/pic/concept/14.PNG" /></li>
                            <li>
                                <img src="/pic/concept/15.PNG" /></li>
                            <li>
                                <img src="/pic/concept/16.PNG" /></li>
                            <li>
                                <img src="/pic/concept/17.PNG" /></li>
                            <li>
                                <img src="/pic/concept/18.PNG" /></li>
                            <li>
                                <img src="/pic/concept/19.PNG" /></li>
                            <li>
                                <img src="/pic/concept/20.PNG" /></li>
                            <li>
                                <img src="/pic/concept/21.PNG" /></li>
                            <li>
                                <img src="/pic/concept/22.PNG" /></li>
                            <li>
                                <img src="/pic/concept/23.PNG" /></li>
                            <li>
                                <img src="/pic/concept/24.PNG" /></li>
                            <li>
                                <img src="/pic/concept/25.PNG" /></li>
                            <li>
                                <img src="/pic/concept/26.PNG" /></li>
                            <li>
                                <img src="/pic/concept/27.PNG" /></li>
                            <li>
                                <img src="/pic/concept/28.PNG" /></li>
                            <li>
                                <img src="/pic/concept/29.PNG" /></li>
                            <li>
                                <img src="/pic/concept/30.PNG" /></li>
                            
                            
						<li>
                            <img src="/pic/concept/31.PNG" /></li>
                            <li>
                                <img src="/pic/concept/32.PNG" /></li>
                        </ul>
                        
                    </div>

                    <!-- END flexslider -->


                    <!-- BEGIN PESENTATION header title -->

                    <div class="text-center">
                        <h3 class="main-title title">PESENTATION</h3>
                        <div class="hr"></div>
                    </div>
                    <!-- END header title -->
                    <p>&nbsp;</p>

                    <!-- BEGIN content 슬라이드 사진부분 -->
                    <div class="centered">

                        <!-- if user wants to add some custom content -->
                        <div class="entry-content-wrapper"></div>
                        <!--  블로그 부분  -->
                        <div class="ninecol inrespo">
                            <!-- grab the posts -->
                            <div
                                class="post-246 post type-post status-publish format-standard hentry category-26 tag-57 tag-56 post clearfix blog_1">

                                <div class="twelvecol inrespo">

                                    <!-- BEGIN featured featured -->


                                    <!-- BEGIN flexslider 사진 부분 -->

                                    <div class="flexslider_portfolio loading">
                                        <ul class="slides">
                                            <li>
                                                <img
                                                    src="/pic/2013-08-08 16;30;05.PNG" /></li>
                                            <li>
                                                <img
                                                    src="/pic/2013-08-08 16;30;09.PNG" /></li>
                                            <li>
                                                <img
                                                    src="/pic/2013-08-08 16;30;12.PNG" /></li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;15.PNG" />
                                            </li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;23.PNG" />
                                            </li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;29.PNG" />
                                            </li>

                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;36.PNG" />
                                            </li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;39.PNG" />
                                            </li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;42.PNG" />
                                            </li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;45.PNG" />
                                            </li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;48.PNG" />
                                            </li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;53.PNG" />
                                            </li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;30;59.PNG" />
                                            </li>
                                            <li>
                                                <img
                                                    src="http://www.mozymozy.co.kr/pic/2013-08-08 16;31;02.PNG" />
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- END flexslider -->
                                    U noling Ver3.5
								<iframe width="1000" height="600"
                                    src="//www.youtube.com/embed/5_KKNVttQY0" frameborder="0"
                                    allowfullscreen></iframe>
                                    U noling Ver2.0
								<iframe width="1000" height="600"
                                    src="//www.youtube.com/embed/P9UhW_SdhvA" frameborder="0"
                                    allowfullscreen></iframe>
                                    U noling Ver1.5
								<iframe width="1000" height="600"
                                    src="//www.youtube.com/embed/bAmC70BrC4o" frameborder="0"
                                    allowfullscreen></iframe>
                                    U noling Ver1.5
								<iframe width="1000" height="600"
                                    src="//www.youtube.com/embed/ZmZHvP7LI0s" frameborder="0"
                                    allowfullscreen></iframe>
                                    U noling Ver1.0


								<!-- END featured media -->



                                </div>

                                <div class="post_hr"></div>

                            </div>



                            <div class="clear"></div>


                            <script type="text/javascript">
                                /* <![CDATA[ */
                                $(document)
                                        .ready(
                                                function() {
                                                    if (aws_settings.front_page == true) {
                                                        $
                                                                .get(
                                                                        'http://buttas.net/?page_id=41',
                                                                        function(
                                                                                data) {
                                                                            var $data = $(data);
                                                                            var replace_pagination = $data
                                                                                    .find(
                                                                                            '#aws_pagination')
                                                                                    .html();
                                                                            $(
                                                                                    '#aws_pagination')
                                                                                    .html(
                                                                                            replace_pagination);
                                                                        });
                                                    }
                                                });
                                /* ]]> */
                            </script>
                        </div>



                    </div>
                    <!-- END content -->


                </div>
                <!-- END Project-->
            </div>



            <div class="centered">

                <!-- if user wants to add some custom content -->
                <div class="entry-content-wrapper"></div>



                <!-- BEGIN Contact -->
                <div id="contact" class="row twelvecol content-wrapper">

                    <!-- BEGIN header title -->
                    <div class="text-center">
                        <h2 class="main-title title">CONTACT</h2>
                        <div class="hr"></div>
                    </div>
                    <!-- END header title -->



                    <!-- BEGIN Google Map Area -->
                    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
                    <script type="text/javascript">
                        /* <![CDATA[ */
                        function initialize() {
                            var myLatLng = new google.maps.LatLng(37.556826,
                                    126.946138);
                            var mapOptions = {
                                zoom : 10,
                                center : myLatLng,
                                mapTypeId : google.maps.MapTypeId.ROADMAP
                            }
                            var map = new google.maps.Map(document
                                    .getElementById('map_canvas'), mapOptions);
                            var beachMarker = new google.maps.Marker({
                                position : myLatLng,
                                icon : '',
                                map : map
                            });
                        }
                        google.maps.event.addDomListener(window, 'load',
                                initialize);
                        /* ]]> */
                    </script>
                    <!-- Here is div for Google Maps -->
                    <div id="map_canvas" class="gmap"></div>

                    <!-- END OF GOOGLE MAP AREA -->
                    <div class="hr"></div>



                    <!-- BEGIN Contact Form 폼필요하면 살리고 그런데 작동안해 -->

                    <!-- <div class="sixcol">
<form id="aws_contact_form">
  <h3>Leave a message</h3>
  <ul>
      <li>
        <label>Name</label>
        <input type="text" name="name" id="name"/>
      </li>
      <li>
        <label>Email</label>
        <input type="text" name="email" id="email"/>
      </li>
      <li>
        <label>Message</label>
        <textarea name="message" id="message"></textarea>
      </li>
      <li>
      	 
        	<span id="aws_form_captcha"></span>
        	<a id="refresh_captcha" href="#">Refresh</a> 
        	<input class="captcha_input" type="text" name="captcha"/>
                <input type="hidden" name="action" value="aws_submit_contact" />
        <input type="submit" class="right button oval middle" value="Send" />
      </li>
      <li>
        <span id="submit_msg"></span>
      </li>
  </ul>
</form>
</div> -->

                    <!-- END Contact Form -->


                    <!-- BEGIN Contact Info -->
                    <div class="sixcol last" align="center"></div>
                    <p>&nbsp;</p>


                    <div class="text-center">
                        <h3 class="main-title title">CONTACT US</h3>

                        <!--   <div class="hr"></div>  줄라인긋기  -->

                        <p style="text-align: center;">
                        </p>
                    </div>


                    <p style="text-align: center;">
                        <span style="color: #0000ff;">(+82)010-3944-4663 </span>
                    </p>
                    <p style="text-align: center;">
                        <span style="color: #0000ff;">chowin21@gmail.com</span>
                    </p>
                    <p>&nbsp;</p>

                    <!-- END Contact Info -->

                </div>
                <!-- END Contact -->
            </div>
            <!-- END Container (#container) top으로가는것 -->


            <!-- BEGIN Footer -->
            <div id="footer" class="footer_holder twelvecol row">

                <div class="container">

                    <div class="hr footer_top"></div>

                    <!-- Footer widgets -->
                    <div class="centered"></div>

                </div>

                <div class="clear"></div>
                <div class="hr footer_bottom"></div>

            </div>
            <!-- END Footer -->
            <!--  Begin Infinite scrool  -->

            <footer>
                <div class="container">
                    <nav>
                        <ul>
                            <li class="more"><a href="."
                                title="Traditional navigation link">Load more items...</a></li>
                        </ul>
                    </nav>
                </div>
            </footer>
            <!--end footer-->
        </div>
        <!-- <script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.4.min.js"></script> -->
        <!-- <script src="http://unoling.com/wp/js/waypoints.min.js"></script> -->
        <script type="text/javascript">
            $(document).ready(function() {
                $footer = $('footer'), opts = {
                    offset : '100%'
                };

                $footer.waypoint(function(event, direction) {
                    $footer.waypoint('remove');

                    $.get($('.more a').attr('href'), function(data) {
                        var $data = $(data);

                        // holder_content만 반복하네 난 없으니까.. 흠 .. 
                        $('#main').append($data.find('.holder_content'));
                        $footer.waypoint(opts);
                    });
                }, opts);
            });
        </script>
        <!--  End Infinite scrool  -->
        <!-- Copyright -->
        <div class="text-center copyright_text">
            <p>
                Created by <a href="http://mekshq.com" target="_blank">Meks</a>.
				Powered by <a href="http://www.wordpress.org" target="_blank">WordPress</a>.
            </p>
        </div>
    </div>
    <!-- END Main (#main) -->

    <!-- Hovercard shortcode empty div 이건또뭐냐-->
    <div id="hovercard"></div>
    <!-- Hovercard shortcode empty div -->
</body>
<!-- END Body -->
</html>
