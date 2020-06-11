<?php
    function wpb_customize_register($wp_customize){

        ///////////////// Mailchimp Popup Script

        $wp_customize->add_section('Mailchimp Popup Script', array(
            'title' => __('Mailchimp Popup Script', '21-days-to-change'),
            'description'  => sprintf(__('Paste script here','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('mailchimp_script', array(
            'default'  => _x('<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us4.list-manage.com","uuid":"a7eda82c4d9503d494b8ff1c3","lid":"79432588e1","uniqueMethods":true}) })</script>', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('mailchimp_script', array(
            'label'  => __('Script', '21-days-to-change'),
            'section'  => 'Mailchimp Popup Script', 
            'priority' => 1
        ));

        ///////////////// Mailchimp Footer Script

        $wp_customize->add_section('Mailchimp Footer Script', array(
            'title' => __('Mailchimp Footer Script', '21-days-to-change'),
            'description'  => sprintf(__('Paste script here','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('mailchimp_footer_script', array(
            'default'  => _x('<!-- Begin Mailchimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{background:none; clear:left; font:14px Helvetica,Arial,sans-serif; }
                /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
            <form action="https://gmail.us4.list-manage.com/subscribe/post?u=a7eda82c4d9503d494b8ff1c3&amp;id=79432588e1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                <label for="mce-EMAIL">Subscribe</label>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a7eda82c4d9503d494b8ff1c3_79432588e1" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('mailchimp_footer_script', array(
            'label'  => __('Script', '21-days-to-change'),
            'section'  => 'Mailchimp Footer Script', 
            'priority' => 1
        ));

        ///////////////// Header

        $wp_customize->add_section('Header', array(
            'title' => __('Header', '21-days-to-change'),
            'description'  => sprintf(__('Options for all three challenges','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('header_heading', array(
            'default'  => _x('<strong>Together</strong><br>we can <strong>stop</strong><br>using <strong>plastic</strong>', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('header_heading', array(
            'label'  => __('Heading', '21-days-to-change'),
            'section'  => 'Header', 
            'priority' => 1
        ));
        
        ///////////////// Challenges Section

        $wp_customize->add_section('Challenges', array(
            'title' => __('Challenges', '21-days-to-change'),
            'description'  => sprintf(__('Options for all three challenges','21-days-to-change')),
            'priority'  => 130
        ));

        // First Challenge

        $wp_customize->add_setting('icon_one', array(
            'default'  => get_bloginfo('template_directory').'/assets/icons/bottle.svg',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icon_one', array(
            'label'  => __('Icon 1', '21-days-to-change'),
            'section'  => 'Challenges', 
            'settings'  => 'icon_one',
            'priority' => 1
        )));

        $wp_customize->add_setting('heading_one', array(
            'default'  => _x('Refill your day', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('heading_one', array(
            'label'  => __('Heading 1', '21-days-to-change'),
            'section'  => 'Challenges', 
            'priority' => 2
        ));

        $wp_customize->add_setting('paragraph_one', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('paragraph_one', array(
            'label'  => __('Paragraph 1', '21-days-to-change'),
            'section'  => 'Challenges', 
            'priority' => 3
        ));

        // Second Challenge

        $wp_customize->add_setting('icon_two', array(
            'default'  => get_bloginfo('template_directory').'/assets/icons/plastic-bag.svg',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icon_two', array(
            'label'  => __('Icon 2', '21-days-to-change'),
            'section'  => 'Challenges', 
            'settings'  => 'icon_two',
            'priority' => 4
        )));

        $wp_customize->add_setting('heading_two', array(
            'default'  => _x('Refill your day', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('heading_two', array(
            'label'  => __('Heading 2', '21-days-to-change'),
            'section'  => 'Challenges', 
            'priority' => 5
        ));

        $wp_customize->add_setting('paragraph_two', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('paragraph_two', array(
            'label'  => __('Paragraph 2', '21-days-to-change'),
            'section'  => 'Challenges', 
            'priority' => 6
        ));

        // Third Challenge

        $wp_customize->add_setting('icon_three', array(
            'default'  => get_bloginfo('template_directory').'/assets/icons/lunch-box.svg',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icon_three', array(
            'label'  => __('Icon 3', '21-days-to-change'),
            'section'  => 'Challenges', 
            'settings'  => 'icon_three',
            'priority' => 7
        )));

        $wp_customize->add_setting('heading_three', array(
            'default'  => _x('Refill your day', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('heading_three', array(
            'label'  => __('Heading 3', '21-days-to-change'),
            'section'  => 'Challenges', 
            'priority' => 8
        ));

        $wp_customize->add_setting('paragraph_three', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('paragraph_three', array(
            'label'  => __('Paragraph 3', '21-days-to-change'),
            'section'  => 'Challenges', 
            'priority' => 9
        ));

        ///////////////// Introduction Section

        $wp_customize->add_section('Introduction', array(
            'title' => __('Introduction', '21-days-to-change'),
            'description'  => sprintf(__('Options for introduction','21-days-to-change')),
            'priority'  => 130
        ));

        // First 

        $wp_customize->add_setting('intro_heading_one', array(
            'default'  => _x('21 Days to Change', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('intro_heading_one', array(
            'label'  => __('Heading 1', '21-days-to-change'),
            'section'  => 'Introduction', 
            'priority' => 1
        ));

        $wp_customize->add_setting('intro_subheading_one', array(
            'default'  => _x('Join the Challenge', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('intro_subheading_one', array(
            'label'  => __('Subheading 1', '21-days-to-change'),
            'section'  => 'Introduction', 
            'priority' => 2
        ));

        $wp_customize->add_setting('intro_paragraph_one', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('intro_paragraph_one', array(
            'label'  => __('Paragraph 1', '21-days-to-change'),
            'section'  => 'Introduction', 
            'priority' => 3
        ));

        $wp_customize->add_setting('intro_btn_text_one', array(
            'default'  => _x('Find out more', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('intro_btn_text_one', array(
            'label'  => __('Button Text 1', '21-days-to-change'),
            'section'  => 'Introduction', 
            'priority' => 4
        ));

        // Second

        $wp_customize->add_setting('intro_heading_two', array(
            'default'  => _x('Meet EIA', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('intro_heading_two', array(
            'label'  => __('Heading 2', '21-days-to-change'),
            'section'  => 'Introduction', 
            'priority' => 5
        ));

        $wp_customize->add_setting('intro_subheading_two', array(
            'default'  => _x('Our partner against plastic pollution', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('intro_subheading_two', array(
            'label'  => __('Subheading 1', '21-days-to-change'),
            'section'  => 'Introduction', 
            'priority' => 6
        ));

        $wp_customize->add_setting('intro_paragraph_two', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('intro_paragraph_two', array(
            'label'  => __('Paragraph 2', '21-days-to-change'),
            'section'  => 'Introduction', 
            'priority' => 7
        ));

        $wp_customize->add_setting('intro_btn_text_two', array(
            'default'  => _x('Visit EIA', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('intro_btn_text_two', array(
            'label'  => __('Button Text 2', '21-days-to-change'),
            'section'  => 'Introduction', 
            'priority' => 8
        ));

        ///////////////// Video Section

        $wp_customize->add_section('Video', array(
            'title' => __('Video', '21-days-to-change'),
            'description'  => sprintf(__('Options for introduction','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('video_link', array(
            'default'  => _x('https://www.youtube.com/embed/cTtc90jCULU', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('video_link', array(
            'label'  => __('Video Link', '21-days-to-change'),
            'section'  => 'Video', 
            'priority' => 1
        ));

        $wp_customize->add_setting('video_heading', array(
            'default'  => _x('Our Videoblog', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('video_heading', array(
            'label'  => __('Heading', '21-days-to-change'),
            'section'  => 'Video', 
            'priority' => 2
        ));

        $wp_customize->add_setting('video_subheading', array(
            'default'  => _x('Follow the official series', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('video_subheading', array(
            'label'  => __('Subheading', '21-days-to-change'),
            'section'  => 'Video', 
            'priority' => 2
        ));

        $wp_customize->add_setting('video_paragraph', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('video_paragraph', array(
            'label'  => __('Paragraph', '21-days-to-change'),
            'section'  => 'Video', 
            'priority' => 4
        ));

        $wp_customize->add_setting('video_btn_text', array(
            'default'  => _x('Find out more', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('video_btn_text', array(
            'label'  => __('Button Text', '21-days-to-change'),
            'section'  => 'Video', 
            'priority' => 5
        ));

        $wp_customize->add_setting('video_btn_url', array(
            'default'  => _x('https://www.youtube.com/', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('video_btn_url', array(
            'label'  => __('Button URL', '21-days-to-change'),
            'section'  => 'Video', 
            'priority' => 6
        ));

        ///////////////// Stats Section

        $wp_customize->add_section('Stats', array(
            'title' => __('Stats', '21-days-to-change'),
            'description'  => sprintf(__('Options for introduction','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('stats_heading', array(
            'default'  => _x('Statistics on <span class="orange">plastic pollution</span>', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stats_heading', array(
            'label'  => __('Heading', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 1
        ));

        $wp_customize->add_setting('stats_paragraph', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stats_paragraph', array(
            'label'  => __('Paragraph 2', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 2
        ));

        // Statistic One

        $wp_customize->add_setting('stat_icon_one', array(
            'default'  => get_bloginfo('template_directory').'/assets/icons/bottle-empty.svg',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'stat_icon_one', array(
            'label'  => __('Icon 1', '21-days-to-change'),
            'section'  => 'Stats', 
            'settings'  => 'stat_icon_one',
            'priority' => 3
        )));

        $wp_customize->add_setting('stat_heading_one', array(
            'default'  => _x('<span class="orange">One</span> million', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stat_heading_one', array(
            'label'  => __('Heading 1', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 4
        ));

        $wp_customize->add_setting('stat_paragraph_one', array(
            'default'  => _x('plastic bottles are purchased every minute', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stat_paragraph_one', array(
            'label'  => __('Paragraph 1', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 5
        ));

        // Statistic Two

        $wp_customize->add_setting('stat_icon_two', array(
            'default'  => get_bloginfo('template_directory').'/assets/icons/umbrella.svg',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'stat_icon_two', array(
            'label'  => __('Icon 2', '21-days-to-change'),
            'section'  => 'Stats', 
            'settings'  => 'stat_icon_one',
            'priority' => 6
        )));

        $wp_customize->add_setting('stat_heading_two', array(
            'default'  => _x('<span class="orange">One</span> million', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stat_heading_two', array(
            'label'  => __('Heading 2', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 7
        ));

        $wp_customize->add_setting('stat_paragraph_two', array(
            'default'  => _x('plastic bottles are purchased every minute', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stat_paragraph_two', array(
            'label'  => __('Paragraph 2', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 8
        ));

        // Statistic Three

        $wp_customize->add_setting('stat_icon_three', array(
            'default'  => get_bloginfo('template_directory').'/assets/icons/smoothie.svg',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'stat_icon_three', array(
            'label'  => __('Icon 3', '21-days-to-change'),
            'section'  => 'Stats', 
            'settings'  => 'stat_icon_one',
            'priority' => 9
        )));

        $wp_customize->add_setting('stat_heading_three', array(
            'default'  => _x('<span class="orange">One</span> million', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stat_heading_three', array(
            'label'  => __('Heading 3', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 10
        ));

        $wp_customize->add_setting('stat_paragraph_three', array(
            'default'  => _x('plastic bottles are purchased every minute', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stat_paragraph_three', array(
            'label'  => __('Paragraph 3', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 11
        ));

        // Statistic Four

        $wp_customize->add_setting('stat_icon_four', array(
            'default'  => get_bloginfo('template_directory').'/assets/icons/turtle.svg',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'stat_icon_four', array(
            'label'  => __('Icon 4', '21-days-to-change'),
            'section'  => 'Stats', 
            'settings'  => 'stat_icon_four',
            'priority' => 12
        )));

        $wp_customize->add_setting('stat_heading_four', array(
            'default'  => _x('<span class="orange">One</span> million', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stat_heading_four', array(
            'label'  => __('Heading 4', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 13
        ));

        $wp_customize->add_setting('stat_paragraph_four', array(
            'default'  => _x('plastic bottles are purchased every minute', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('stat_paragraph_four', array(
            'label'  => __('Paragraph 4', '21-days-to-change'),
            'section'  => 'Stats', 
            'priority' => 14
        ));

        ///////////////// Blog Section

        $wp_customize->add_section('Blog', array(
            'title' => __('Blog', '21-days-to-change'),
            'description'  => sprintf(__('Options for introduction','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('blog_heading', array(
            'default'  => _x('Blog', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('blog_heading', array(
            'label'  => __('Blog Heading', '21-days-to-change'),
            'section'  => 'Blog', 
            'priority' => 1
        ));

        $wp_customize->add_setting('blog_subheading', array(
            'default'  => _x('Latest news and stories', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('blog_subheading', array(
            'label'  => __('Blog Subheading', '21-days-to-change'),
            'section'  => 'Blog', 
            'priority' => 2
        ));

        ///////////////// Blog Section

        $wp_customize->add_section('Team', array(
            'title' => __('Team', '21-days-to-change'),
            'description'  => sprintf(__('Options for Team','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('team_heading', array(
            'default'  => _x('We are Concept 4 Digital!', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('team_heading', array(
            'label'  => __('Team Heading', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 1
        ));

        $wp_customize->add_setting('team_subheading', array(
            'default'  => _x('A start-up against plastic', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('team_subheading', array(
            'label'  => __('Team Subheading', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 2
        ));

        $wp_customize->add_setting('team_paragraph', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('team_paragraph', array(
            'label'  => __('Team Paragraph', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 3
        ));

        // Team Member 1

        $wp_customize->add_setting('member_one_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/img/dom-img.png',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'member_one_img', array(
            'label'  => __('Image Member 1', '21-days-to-change'),
            'section'  => 'Team', 
            'settings'  => 'member_one_img',
            'priority' => 4
        )));

        $wp_customize->add_setting('member_one_name', array(
            'default'  => _x('John Doe', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_one_name', array(
            'label'  => __('Name Member 1', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 5
        ));

        $wp_customize->add_setting('member_one_title', array(
            'default'  => _x('Project Manager', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_one_title', array(
            'label'  => __('Title Member 1', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 6
        ));

        // Team Member 2

        $wp_customize->add_setting('member_two_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/img/can-img.png',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'member_two_img', array(
            'label'  => __('Image Member 2', '21-days-to-change'),
            'section'  => 'Team', 
            'settings'  => 'member_two_img',
            'priority' => 7
        )));

        $wp_customize->add_setting('member_two_name', array(
            'default'  => _x('John Doe', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_two_name', array(
            'label'  => __('Name Member 2', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 8
        ));

        $wp_customize->add_setting('member_two_title', array(
            'default'  => _x('Project Manager', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_two_title', array(
            'label'  => __('Title Member 2', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 9
        ));

        // Team Member 3

        $wp_customize->add_setting('member_three_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/img/margarita-img.png',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'member_three_img', array(
            'label'  => __('Image Member 3', '21-days-to-change'),
            'section'  => 'Team', 
            'settings'  => 'member_three_img',
            'priority' => 10
        )));

        $wp_customize->add_setting('member_three_name', array(
            'default'  => _x('John Doe', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_three_name', array(
            'label'  => __('Name Member 3', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 11
        ));

        $wp_customize->add_setting('member_three_title', array(
            'default'  => _x('Project Manager', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_three_title', array(
            'label'  => __('Title Member 3', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 12
        ));

        // Team Member 4

        $wp_customize->add_setting('member_four_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/img/jenny-img.png',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'member_four_img', array(
            'label'  => __('Image Member 4', '21-days-to-change'),
            'section'  => 'Team', 
            'settings'  => 'member_four_img',
            'priority' => 13
        )));

        $wp_customize->add_setting('member_four_name', array(
            'default'  => _x('John Doe', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_four_name', array(
            'label'  => __('Name Member 4', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 14
        ));

        $wp_customize->add_setting('member_four_title', array(
            'default'  => _x('Project Manager', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_four_title', array(
            'label'  => __('Title Member 4', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 15
        ));

        // Team Member 5

        $wp_customize->add_setting('member_five_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/img/deon-img.png',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'member_five_img', array(
            'label'  => __('Image Member 5', '21-days-to-change'),
            'section'  => 'Team', 
            'settings'  => 'member_five_img',
            'priority' => 16
        )));

        $wp_customize->add_setting('member_five_name', array(
            'default'  => _x('John Doe', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_five_name', array(
            'label'  => __('Name Member 5', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 17
        ));

        $wp_customize->add_setting('member_five_title', array(
            'default'  => _x('Project Manager', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('member_five_title', array(
            'label'  => __('Title Member 5', '21-days-to-change'),
            'section'  => 'Team', 
            'priority' => 18
        ));

        ///////////////// Challenges Section

        $wp_customize->add_section('Contact', array(
            'title' => __('Contact', '21-days-to-change'),
            'description'  => sprintf(__('Options for all three challenges','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('contact_heading', array(
            'default'  => _x('Contact', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('contact_heading', array(
            'label'  => __('Contact Heading', '21-days-to-change'),
            'section'  => 'Contact', 
            'priority' => 1
        ));

        $wp_customize->add_setting('contact_subheading', array(
            'default'  => _x('Send us a message!', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('contact_subheading', array(
            'label'  => __('Contact Subheading', '21-days-to-change'),
            'section'  => 'Contact', 
            'priority' => 2
        ));

        ///////////////// Footer

        $wp_customize->add_section('Footer', array(
            'title' => __('Footer', '21-days-to-change'),
            'description'  => sprintf(__('Options for footer','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('footer_paragraph', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('footer_paragraph', array(
            'label'  => __('Footer Paragraph', '21-days-to-change'),
            'section'  => 'Footer', 
            'priority' => 1
        ));

        ///////////////// Challenge Page

        $wp_customize->add_section('Challenge Page', array(
            'title' => __('Challenge Page', '21-days-to-change'),
            'description'  => sprintf(__('Options for footer','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('rules_heading', array(
            'default'  => _x('How to participate', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('rules_heading', array(
            'label'  => __('Rules Heading', '21-days-to-change'),
            'section'  => 'Challenge Page', 
            'priority' => 1
        ));

        $wp_customize->add_setting('rules_paragraph', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('rules_paragraph', array(
            'label'  => __('Rules Paragraph', '21-days-to-change'),
            'section'  => 'Challenge Page', 
            'priority' => 2
        ));

        ///////////////// Challenge Accordion 1

        $wp_customize->add_section('Challenge Page Accordion 1', array(
            'title' => __('Challenge Page Accordion 1', '21-days-to-change'),
            'description'  => sprintf(__('Options for Accordion 1','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('accordion_heading_one', array(
            'default'  => _x('Week 1: Refill your day', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('accordion_heading_one', array(
            'label'  => __('Accordion Heading', '21-days-to-change'),
            'section'  => 'Challenge Page Accordion 1', 
            'priority' => 1
        ));

        $wp_customize->add_setting('accordion_content_heading_one', array(
            'default'  => _x('Rules', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('accordion_content_heading_one', array(
            'label'  => __('Accordion Content Heading', '21-days-to-change'),
            'section'  => 'Challenge Page Accordion 1', 
            'priority' => 2
        ));

        $wp_customize->add_setting('accordion_content_text_one', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('accordion_content_text_one', array(
            'label'  => __('Accordion Content Text', '21-days-to-change'),
            'section'  => 'Challenge Page Accordion 1', 
            'priority' => 3
        ));

        ///////////////// Challenge Accordion 2

        $wp_customize->add_section('Challenge Page Accordion 2', array(
            'title' => __('Challenge Page Accordion 2', '21-days-to-change'),
            'description'  => sprintf(__('Options for Accordion 2','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('accordion_heading_two', array(
            'default'  => _x('Week 2: Bring your own bag', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('accordion_heading_two', array(
            'label'  => __('Accordion Heading', '21-days-to-change'),
            'section'  => 'Challenge Page Accordion 2', 
            'priority' => 1
        ));

        $wp_customize->add_setting('accordion_content_heading_two', array(
            'default'  => _x('Rules', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('accordion_content_heading_two', array(
            'label'  => __('Accordion Content Heading', '21-days-to-change'),
            'section'  => 'Challenge Page Accordion 2', 
            'priority' => 2
        ));

        $wp_customize->add_setting('accordion_content_text_two', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('accordion_content_text_two', array(
            'label'  => __('Accordion Content Text', '21-days-to-change'),
            'section'  => 'Challenge Page Accordion 2', 
            'priority' => 3
        ));

        ///////////////// Challenge Accordion 3

        $wp_customize->add_section('Challenge Page Accordion 3', array(
            'title' => __('Challenge Page Accordion 3', '21-days-to-change'),
            'description'  => sprintf(__('Options for Accordion 3','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('accordion_heading_three', array(
            'default'  => _x('Week 3: Pack your own lunch', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('accordion_heading_three', array(
            'label'  => __('Accordion Heading', '21-days-to-change'),
            'section'  => 'Challenge Page Accordion 3', 
            'priority' => 1
        ));

        $wp_customize->add_setting('accordion_content_heading_three', array(
            'default'  => _x('Rules', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('accordion_content_heading_three', array(
            'label'  => __('Accordion Content Heading', '21-days-to-change'),
            'section'  => 'Challenge Page Accordion 3', 
            'priority' => 2
        ));

        $wp_customize->add_setting('accordion_content_text_three', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('accordion_content_text_three', array(
            'label'  => __('Accordion Content Text', '21-days-to-change'),
            'section'  => 'Challenge Page Accordion 3', 
            'priority' => 3
        ));

        ///////////////// Challenge Page Row 1

        $wp_customize->add_section('Challenge Page Row 1', array(
            'title' => __('Challenge Page Row 1', '21-days-to-change'),
            'description'  => sprintf(__('Options for row 1','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('row_one_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/img/blog-img.png',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'row_one_img', array(
            'label'  => __('Image', '21-days-to-change'),
            'section'  => 'Challenge Page Row 1', 
            'settings'  => 'row_one_img',
            'priority' => 1
        )));

        $wp_customize->add_setting('row_one_heading', array(
            'default'  => _x('How to participate', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('row_one_heading', array(
            'label'  => __('Heading', '21-days-to-change'),
            'section'  => 'Challenge Page Row 1', 
            'priority' => 2
        ));

        $wp_customize->add_setting('row_one_paragraph', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('row_one_paragraph', array(
            'label'  => __('Paragraph', '21-days-to-change'),
            'section'  => 'Challenge Page Row 1', 
            'priority' => 3
        ));

        ///////////////// Challenge Page Row 2

        $wp_customize->add_section('Challenge Page Row 2', array(
            'title' => __('Challenge Page Row 2', '21-days-to-change'),
            'description'  => sprintf(__('Options for row 2','21-days-to-change')),
            'priority'  => 130
        ));
        $wp_customize->add_setting('row_two_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/img/blog-img.png',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'row_two_img', array(
            'label'  => __('Image', '21-days-to-change'),
            'section'  => 'Challenge Page Row 2', 
            'settings'  => 'row_two_img',
            'priority' => 1
        )));

        $wp_customize->add_setting('row_two_paragraph', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('row_two_paragraph', array(
            'label'  => __('Paragraph', '21-days-to-change'),
            'section'  => 'Challenge Page Row 2', 
            'priority' => 2
        ));

        ///////////////// Challenge Page CTA 1

        $wp_customize->add_section('Challenge Page CTA 1', array(
            'title' => __('Challenge Page CTA 1', '21-days-to-change'),
            'description'  => sprintf(__('Options for row 2','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('cta_text_one', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('cta_text_one', array(
            'label'  => __('Text', '21-days-to-change'),
            'section'  => 'Challenge Page CTA 1', 
            'priority' => 1
        ));

        $wp_customize->add_setting('cta_btn_text_one', array(
            'default'  => _x('Visit EIA', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('cta_btn_text_one', array(
            'label'  => __('Button Text', '21-days-to-change'),
            'section'  => 'Challenge Page CTA 1', 
            'priority' => 2
        ));

        ///////////////// Challenge Page Row 3

        $wp_customize->add_section('Challenge Page Row 3', array(
            'title' => __('Challenge Page Row 3', '21-days-to-change'),
            'description'  => sprintf(__('Options for row 3','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('row_three_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/img/blog-img.png',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'row_three_img', array(
            'label'  => __('Image', '21-days-to-change'),
            'section'  => 'Challenge Page Row 3', 
            'settings'  => 'row_three_img',
            'priority' => 1
        )));

        $wp_customize->add_setting('row_three_heading', array(
            'default'  => _x('How to participate', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('row_three_heading', array(
            'label'  => __('Heading', '21-days-to-change'),
            'section'  => 'Challenge Page Row 3', 
            'priority' => 2
        ));

        $wp_customize->add_setting('row_three_paragraph', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('row_three_paragraph', array(
            'label'  => __('Paragraph', '21-days-to-change'),
            'section'  => 'Challenge Page Row 3', 
            'priority' => 3
        ));
        

        ///////////////// Challenge Page Row 4

        $wp_customize->add_section('Challenge Page Row 4', array(
            'title' => __('Challenge Page Row 4', '21-days-to-change'),
            'description'  => sprintf(__('Options for row 4','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('row_four_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/img/blog-img.png',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'row_four_img', array(
            'label'  => __('Image', '21-days-to-change'),
            'section'  => 'Challenge Page Row 4', 
            'settings'  => 'row_four_img',
            'priority' => 1
        )));

        $wp_customize->add_setting('row_four_paragraph', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('row_four_paragraph', array(
            'label'  => __('Paragraph', '21-days-to-change'),
            'section'  => 'Challenge Page Row 4', 
            'priority' => 3
        ));


        ///////////////// Challenge Page CTA 2

        $wp_customize->add_section('Challenge Page CTA 2', array(
            'title' => __('Challenge Page CTA 2', '21-days-to-change'),
            'description'  => sprintf(__('Options for cta 2','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('cta_text_two', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('cta_text_two', array(
            'label'  => __('Text', '21-days-to-change'),
            'section'  => 'Challenge Page CTA 2', 
            'priority' => 1
        ));

        $wp_customize->add_setting('cta_btn_text_two', array(
            'default'  => _x('Visit EIA', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('cta_btn_text_two', array(
            'label'  => __('Button Text', '21-days-to-change'),
            'section'  => 'Challenge Page CTA 2', 
            'priority' => 2
        ));


        ///////////////// Contact Page Text

        $wp_customize->add_section('Contact Page Text', array(
            'title' => __('Contact Page Text', '21-days-to-change'),
            'description'  => sprintf(__('Options for contact text','21-days-to-change')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('contact_text', array(
            'default'  => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '21-days-to-change'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('contact_text', array(
            'label'  => __('Text', '21-days-to-change'),
            'section'  => 'Contact Page Text', 
            'priority' => 1
        ));







        


    }

    add_action('customize_register', 'wpb_customize_register');