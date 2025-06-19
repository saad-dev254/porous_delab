<?php include 'header.php'; ?>

    <div class="global-css w-embed">
      <style>
        /* home */ body { font-size: 1.1111111111111112vw; } .container { max-width:
        1920px; } a { color: currentColor; } .home-footer_component .home-footer_layout
        { pointer-events: auto; } .contact-hover_component { pointer-events: none;
        } [h-effect] { position: relative; overflow: hidden; } [h-effect] [h-item]
        { display: block; } [h-effect] [h-item]:nth-child(2) { position: absolute;
        top: 0; left: 0; } [h-effect].menu-close, [h-effect].work-page_title {
        position: fixed; } /* studio */ .home-hero_overlay_wrap, .home-footer_component
        { pointer-events: none; } .home-footer_component .home-footer_layout, .global-head
        .head-logo_holder { pointer-events: auto; } .studio-right_punch-holder,
        .global-head { pointer-events: none; } body.popup-open .main-wrapper {
        pointer-events: none; } [areas-color="blue"] { color: #2c4eff; } [text-color="blue"].areas-nav_link:hover
        .areas-list_head, .active [text-color="blue"] .areas-list_head { color:
        #2c4eff; } [areas-color="orange"] { color: #ff5c01; } [text-color="orange"].areas-nav_link:hover
        .areas-list_head, .active [text-color="orange"] .areas-list_head { color:
        #ff5c01; } [areas-color="yellow"] { color: #ffd92d; } [text-color="yellow"].areas-nav_link:hover
        .areas-list_head, .active [text-color="yellow"] .areas-list_head { color:
        #ffd92d; } [areas-color="green"] { color: #24d480; } [text-color="green"].areas-nav_link:hover
        .areas-list_head, .active [text-color="green"] .areas-list_head { color:
        #24d480; } [areas-color="violet"] { color: #ab9bf2; } [text-color="violet"].areas-nav_link:hover
        .areas-list_head, .active [text-color="violet"] .areas-list_head { color:
        #ab9bf2; } .fade .areas-list_head { color: #373737; } .menu-component {
        clip-path: polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%); } .contact-popup
        { pointer-events: none; } .contact-popup_content { opacity: 0; } .contact-input
        { -webkit-appearance: none; -moz-appearance: none; appearance: none; }
        .w-dropdown-link.w--current, .w-dropdown-link { color: #fff; } .contact-input:-webkit-autofill,
        .contact-input:-webkit-autofill:hover, .contact-input:-webkit-autofill:focus,
        .contact-input:-webkit-autofill:active { -webkit-box-shadow: 0 0 0 30px
        #000 inset !important; } .contact-input:-webkit-autofill { -webkit-text-fill-color:
        #3a3a3a !important; } .contact-select_item:first-child { display: none
        !important; } /* work */ body.popup-open .team-popup_item.current { opacity:
        1; } [text-color="blue"].areas-nav_link:hover .areas-list_head { color:
        #2c4eff; } [text-color="orange"].areas-nav_link:hover .areas-list_head
        { color: #ff5c01; } [text-color="yellow"].areas-nav_link:hover .areas-list_head
        { color: #ffd92d; } [text-color="green"].areas-nav_link:hover .areas-list_head
        { color: #24d480; } [text-color="violet"].areas-nav_link:hover .areas-list_head
        { color: #ab9bf2; } [h-fade-item] { transition: opacity 0.3s cubic-bezier(0.45,
        0, 0.55, 1); } .fade-items [h-fade-item] { opacity: 0.2; } [hover-color="green"]:hover
        { color: #24d480; } [hover-color="violet"]:hover { color: #ab9bf2; } [hover-color="yellow"]:hover
        { color: #ffd92d; } [hover-color="orange"]:hover { color: #ff5c01; } [hover-color="blue"]:hover
        { color: #2c4eff; } /* archive */ .archive-list_grid { display: grid; grid-template-columns:
        repeat(5, 1fr); } .archive-item { grid-column: 1; grid-row: 1; } .archive-item_link
        { border-color: currentColor; } /* ROW 1*/ .archive-item:nth-child(1) {
        grid-column: 3; grid-row: 1; } .archive-item:nth-child(2) { grid-column:
        5; grid-row: 1; } /* ROW 2*/ .archive-item:nth-child(3) { grid-column:
        2; grid-row: 2; } .archive-item:nth-child(4) { grid-column: 4; grid-row:
        2; } /* ROW 3*/ .archive-item:nth-child(5) { grid-column: 1; grid-row:
        3; } /* ROW 4*/ .archive-item:nth-child(6) { grid-column: 4; grid-row:
        4; } .archive-item:nth-child(7) { grid-column: 5; grid-row: 4; } /* ROW
        5*/ .archive-item:nth-child(8) { grid-column: 2; grid-row: 5; } .archive-item:nth-child(9)
        { grid-column: 4; grid-row: 5; } /* ROW 6*/ .archive-item:nth-child(10)
        { grid-column: 1; grid-row: 6; } .archive-item:nth-child(11) { grid-column:
        2; grid-row: 6; } /* ROW 7*/ .archive-item:nth-child(12) { grid-column:
        3; grid-row: 7; } .archive-item:nth-child(13) { grid-column: 4; grid-row:
        7; } /* ROW 8*/ .archive-item:nth-child(14) { grid-column: 2; grid-row:
        8; } .archive-item:nth-child(15) { grid-column: 4; grid-row: 8; } .archive-item:nth-child(16)
        { grid-column: 5; grid-row: 8; } /* ROW 9*/ .archive-item:nth-child(17)
        { grid-column: 3; grid-row: 9; } /* ROW 10*/ .archive-item:nth-child(18)
        { grid-column: 2; grid-row: 10; } .archive-item:nth-child(19) { grid-column:
        5; grid-row: 10; } /* ROW 11*/ .archive-item:nth-child(20) { grid-column:
        1; grid-row: 11; } .archive-item:nth-child(21) { grid-column: 4; grid-row:
        11; } /* ROW 12*/ .archive-item:nth-child(22) { grid-column: 3; grid-row:
        12; } /* ROW 13*/ .archive-item:nth-child(23) { grid-column: 2; grid-row:
        13; } .archive-item:nth-child(24) { grid-column: 3; grid-row: 13; } /*
        ROW 14*/ .archive-item:nth-child(25) { grid-column: 4; grid-row: 14; }
        .archive-item:nth-child(26) { grid-column: 5; grid-row: 14; } /* ROW 15*/
        .archive-item:nth-child(27) { grid-column: 1; grid-row: 15; } .archive-item:nth-child(28)
        { grid-column: 4; grid-row: 15; } /* ROW 16*/ .archive-item:nth-child(29)
        { grid-column: 3; grid-row: 16; } /* ROW 17*/ .archive-item:nth-child(30)
        { grid-column: 2; grid-row: 17; } .archive-item:nth-child(31) { grid-column:
        4; grid-row: 17; } /* ROW 18*/ .archive-item:nth-child(32) { grid-column:
        1; grid-row: 18; } .archive-item:nth-child(33) { grid-column: 2; grid-row:
        18; } /* ROW 19*/ .archive-item:nth-child(34) { grid-column: 3; grid-row:
        19; } .archive-item:nth-child(35) { grid-column: 4; grid-row: 19; } /*
        ROW 20*/ .archive-item:nth-child(36) { grid-column: 2; grid-row: 20; }
        .archive-item:nth-child(37) { grid-column: 5; grid-row: 20; } /* ROW 21*/
        .archive-item:nth-child(38) { grid-column: 4; grid-row: 21; } /* ROW 22*/
        .archive-item:nth-child(39) { grid-column: 1; grid-row: 22; } .archive-item:nth-child(40)
        { grid-column: 3; grid-row: 22; } [initial-title] { background-color: #000;
        } .team-popup, .archive-preview_component { pointer-events: none; } /*
        news */ .home-footer_component .home-footer_layout, .global-head .head-logo_holder,
        .global-head .back-btn { pointer-events: auto; } .case-studies_overlay,
        .next-hover_component { pointer-events: none; } .w-richtext figure.w-richtext-figure-type-image
        > figcaption, .w-richtext figure[data-rt-type="image"] > figcaption { caption-side:
        bottom; display: block; text-align: left; } .w-richtext figure.w-richtext-align-center
        { clear: both; margin-left: 0; margin-right: 0; max-width: none; display:
        block; } .w-richtext figure.w-richtext-align-center.w-richtext-figure-type-image
        > div, .w-richtext figure.w-richtext-align-center[data-rt-type="image"]
        > div { max-width: 100%; width: 100%; } .single-news_rich h4{ margin-bottom:
        0.5rem; } @media screen and (min-width: 1920px) { body { font-size: 21.333333333333332px;
        } } @media only screen and (min-width: 768px) { .home-hero_overlay_wrap,
        .home-footer_component { pointer-events: none; } } @media screen and (max-width:
        991px) { body { font-size: 11.011111111111111px; } }
      </style>
    </div>
    <div class="menu-component">
      <div class="menu-layout">
        <div class="menu-col is-left">
          <div class="menu-logo_holder">
            <div class="menu-logo_layout">
              <h3 class="menu-logo_text">
                Porous &amp; Delab
              </h3>
            </div>
          </div>
          <div mainmenu-fade="" class="menu-infite_holder">
            <div class="menu-inf_wrap w-dyn-list">
              <div role="list" class="menu-inf_list w-dyn-items">
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe127_Menu_Gallery%2001.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe139_Menu_Gallery%2003.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe138_Menu_Gallery%2002.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe13a_Menu_Gallery%2004.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe13b_Menu_Gallery%2005.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe13d_Menu_Gallery%2007.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe13c_Menu_Gallery%2006.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe13f_Menu_Gallery%2009.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe140_Menu_Gallery%2010.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
                <div role="listitem" class="menu-inf_item w-dyn-item">
                  <div class="menu-inf_comp">
                    <div class="menu_img-holder">
                      <div class="menu-img_height">
                      </div>
                      <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe13e_Menu_Gallery%2008.jpg"
                      loading="eager" alt="" class="img-fill" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-col is-right">
          <div class="menu-list">
            <a href="index.php" class="menu-link w-inline-block">
              <div class="menu-link_text">
                Home
              </div>
            </a>
            <a href="studio.php" aria-current="page" class="menu-link w-inline-block w--current">
              <div class="menu-link_text">
                About
              </div>
            </a>
            <a href="work.php" class="menu-link w-inline-block">
              <div class="menu-link_text">
                Work
              </div>
            </a>
            <a data-swup-animation="to-black" href="contact.php" class="menu-link w-inline-block">
              <div class="menu-link_text">
                Contact
              </div>
            </a>
          </div>
          <div mainmenu-fade="" class="menu-bottom">
            <div class="footer-bot_layout is-menu">
              <div class="footer-bot_left">
                <div class="footer-menu_holder is-menu">
                  <a h-effect="" href="https://www.linkedin.com/company/porousdelab/"
                  target="_blank" class="footer-link w-inline-block">
                    <div h-item="" mask-in="" class="body-copy">
                      Linkedin
                    </div>
                    <div h-item="" mask-in="" class="body-copy">
                      Linkedin
                    </div>
                  </a>
                  <a h-effect="" href="https://www.instagram.com/porousdelab/" target="_blank"
                  class="footer-link w-inline-block">
                    <div h-item="" mask-in="" class="body-copy">
                      Instagram
                    </div>
                    <div h-item="" mask-in="" class="body-copy">
                      Instagram
                    </div>
                  </a>
                </div>
              </div>
              <p easter-fade="" class="paragraph desktop">
                All rights reserved ©Porous&amp;Delab
              </p>
            </div>
          </div>
        </div>
        <div h-effect="" class="menu-close">
          <div h-item="" mask-in="" class="menu-btn_text">
            Close
          </div>
          <div h-item="" mask-in="" class="menu-btn_text">
            Close
          </div>
        </div>
        <div class="mobile-menu-bot">
          <div mainmenu-fade="" class="footer-menu_holder is-menu">
            <a h-effect="" href="https://www.linkedin.com/company/porousdelab/"
            target="_blank" class="footer-link w-inline-block">
              <div h-item="" mask-in="" class="body-copy">
                Linkedin
              </div>
              <div h-item="" mask-in="" class="body-copy">
                Linkedin
              </div>
            </a>
            <a h-effect="" href="https://www.instagram.com/porousdelab/" target="_blank"
            class="footer-link w-inline-block">
              <div h-item="" mask-in="" class="body-copy">
                Instagram
              </div>
              <div h-item="" mask-in="" class="body-copy">
                Instagram
              </div>
            </a>
          </div>
          <p mainmenu-fade="" class="mobile-extra_p">
            All rights reserved ©Porous&amp;Delab
          </p>
        </div>
      </div>
    </div>
    <main id="swup" class="page-main">
      <div dark-theme="" studio-page="" class="page-wrapper">
        <div class="menu-btn">
          <div h-effect="" class="text-overflow is-menu">
            <div h-item="" class="menu-btn_text">
              Menu
            </div>
            <div h-item="" class="menu-btn_text">
              Menu
            </div>
          </div>
        </div>
        <div class="global-head">
          <div class="global-head_layout">
            <a t-white="" pload="" href="index.php" class="head-logo_holder w-inline-block">
              <div class="head-logo_height">
              </div>
              <img src="./assets/images/porous_delab_logo.jpeg"
              alt="" class="head-logo" />
              <img src="./assets/images/porous_delab_logo.jpeg"
              alt="" class="head-logo-white" />
            </a>
            <div pload="" class="head-page_name">
              <div class="page-name_text">
                Studio
              </div>
            </div>
          </div>
        </div>
        <div class="page-content">
          <div logo-start="" class="studio-intro_section desktop">
            <div class="studio-intro_flex">
              <div class="studio-left_scroll">
                <div class="studio-left_container">
                  <h3 logo-end="" class="studio-left_scroll-head">
                    Using creative process to generate intelligent solutions.
                  </h3>
                </div>
              </div>
              <div pload="" studio-intro-pin="" class="studio-intro_left">
                <div class="studio-intro_img_holder">
                  <img src="./assets/images/hero.png"
                  alt="" class="studio-intro_img" />
                </div>
              </div>
              <div class="studio-intro_right">
                <div class="studio-right_punch-holder">
                  <div studio-intro-pin="" class="studio-punch_height">
                    <h1 pload-head="" class="studio-punch_head">
                      design
                      <br/>
                      <span class="is-serif">
                        intelligence
                      </span>
                    </h1>
                  </div>
                </div>
                <div class="studio-right_scroll">
                  <div studio-fade-text="" class="studio-right_text-holder">
                    <p pload-body="" class="studio-intro_body">
                      At Porous &amp; Delab we challenge the boundaries of design. At multiple
                      levels and stages of decision-making and design processes, we trade ideas
                      for enhanced impact. In our collaborative studio, we value every individual’s
                      contribution. This synergy nurtures meaningful exchange between users and
                      designers and between professions. Together, we use our expertise to critically
                      analyze and solve problems in ways that meaningfully address our clients’
                      needs.
                    </p>
                  </div>
                  <div studio-fade-text="" class="studio-right_text-holder is-right">
                    <p class="studio-intro_body">
                      With over two decades of experience within the African continent and globally,
                      we have applied our distinct understanding of systems to niche and specific
                      contexts. Our methodology is rooted in a clear understanding of the layered
                      relationships that underpin any site.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="studio-intro_section mobile">
            <div class="studio-intro_flex">
              <div pload="" studio-intro-pin="" class="studio-intro_left">
                <div logo-start-mob="" class="studio-intro_img_holder">
                  <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0ec_Studio_LandingImage.jpg"
                  loading="eager" sizes="100vw" srcset="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0ec_Studio_LandingImage-p-500.jpg 500w, https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0ec_Studio_LandingImage-p-800.jpg 800w, https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0ec_Studio_LandingImage-p-1080.jpg 1080w, https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0ec_Studio_LandingImage.jpg 1430w"
                  alt="" class="studio-intro_img" />
                </div>
              </div>
              <div class="studio-intro_right">
                <div class="studio-right_punch-holder">
                  <h1 pload-head="" class="studio-punch_head">
                    design
                    <br/>
                    <span class="is-serif">
                      intelligence
                    </span>
                  </h1>
                </div>
                <div class="studio-right_scroll">
                  <div studio-fade-text="" class="studio-right_text-holder">
                    <p pload-body="" class="studio-intro_body">
                      At Porous &amp; Delab we challenge the boundaries of design. At multiple
                      levels and stages of decision-making and design processes, we trade ideas
                      for enhanced impact. In our collaborative studio, we value every individual’s
                      contribution. This synergy nurtures meaningful exchange between users and
                      designers and between professions. Together, we use our expertise to critically
                      analyze and solve problems in ways that meaningfully address our clients’
                      needs.
                    </p>
                  </div>
                  <h3 logo-end="" class="studio-left_scroll-head">
                    Using creative process to generate intelligent solutions.
                  </h3>
                  <div studio-fade-text="" class="studio-right_text-holder is-right">
                    <p class="studio-intro_body">
                      With over two decades of experience within the African continent and globally,
                      we have applied our distinct understanding of systems to niche and specific
                      contexts. Our methodology is rooted in a clear understanding of the layered
                      relationships that underpin any site.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="black-section">
            <div id="team" class="team-section">
              <div class="container">
                <div class="team-flex">
                  <div class="team-left">
                    <div class="body-copy">
                      Who we are
                    </div>
                    <div class="team-grid_holder">
                      <div class="team-col_wrapper w-dyn-list">
                        <div team-sync="" role="list" class="team-col_list w-dyn-items">
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/alex-stewart.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe141_Studio_Team_Alex_BW.jpg"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe142_Studio_Team_Alex_C.jpg&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Alex Stewart
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/justin-hausle.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe143_Studio_Team_Justin_BW.jpg"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe144_Studio_Team_Justin_C.jpg&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Justin Häusle
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/gabriella-haber.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe147_Studio_Team_Gabriella_BW.jpg"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe148_Studio_Team_Gabriella_C.jpg&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Gabriella Haber
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/kaamil-willis.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe155_Studio_Team_Kaamil_BW.jpg"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe154_Studio_Team_Kaamil_C.jpg&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Kaamil Willis
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/katherine-van-wyngaarden.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe149_Studio_Team_Katherine_BW.jpg"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe14a_Studio_Team_Katherine_C.jpg&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Katherine van Wyngaarden
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/philippa-tumubweinee.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe14b_Studio_Team_Phillippa_BW.jpg"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe14c_Studio_Team_Phillippa_C.jpg&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Philippa Tumubweinee
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/damon-crowhurst.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe156_Studio_Team_Damon_BW.jpg"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe157_Studio_Team_Damon_C.jpg&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Damon Crowhurst
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/mikayla-le-roux.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/678e45c0c591e784e9da0bc1_MIkayla%20bw%20O.png"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/678e45b6620c663f44b5b5ff_Mikayla%20O.png&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Mikayla le Roux
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/oliver-brown.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/678e4586d1da9dc333b300dc_Oliver%20bw%20O.png"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/678e458bed8efc2606a46b6d_Oliver%20O.png&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Oliver Brown
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/sameeah-ahmed-arai.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66ffb343950796850095c1d4_66601c7c6b0d48cf88bbe158_Studio_Team_Sameeah_BW.jpg"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66ffb348f8c6d365879a3f0f_66601c7c6b0d48cf88bbe159_Studio_Team_Sameeah_C.jpg&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Sameeah Ahmed-Arai
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/jonathan-slaghuis.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/678e45a19307bbf6f3a7303b_Jonathan%20bw%20O.png"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/678e45a5f33bfebb168b104b_Jonathan%20O.png&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Jonathan Slaghuis
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/jake-ackerman.html"
                            class="team-img_holder w-inline-block">
                              <div class="team-img_height">
                              </div>
                              <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/678e44af2346a798d3e8f053_Jake%20bw%20Optimised.png"
                              alt="" class="team-img" />
                              <div style="background-image:url(https://www.stewartpartners.studio/&quot;https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/678e44b319bcf238faa39180_Jake%20headshot%20Optimised.png&quot;)"
                              class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name">
                              Jake Ackerman
                            </div>
                            <div class="join-btn w-condition-invisible">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                          <div team-item="contact-popup" role="listitem" class="team-col_item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/join-the-team.html"
                            class="team-img_holder w-inline-block w-condition-invisible">
                              <div class="team-img_height">
                              </div>
                              <img src="studio.php" alt="" class="team-img w-dyn-bind-empty" />
                              <div style="background-image:none" class="team-img_overlay">
                              </div>
                            </a>
                            <div class="team-name w-condition-invisible">
                              Join the team
                            </div>
                            <div class="join-btn">
                              <div class="join-content">
                                <div class="body-copy is-wrap">
                                  Join the team
                                  <br/>
                                  info@porousdelab.com
                                </div>
                              </div>
                              <div class="team-img_height">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="team-right">
                    <div class="team-list_holder">
                      <div class="team-list_wrap w-dyn-list">
                        <div pload-opacity="" team-sync="" role="list" class="team-list w-dyn-items">
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/alex-stewart.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Alex Stewart
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/justin-hausle.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Justin Häusle
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/gabriella-haber.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Gabriella Haber
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/kaamil-willis.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Kaamil Willis
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/katherine-van-wyngaarden.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Katherine van Wyngaarden
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/philippa-tumubweinee.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Philippa Tumubweinee
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/damon-crowhurst.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Damon Crowhurst
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/mikayla-le-roux.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Mikayla le Roux
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/oliver-brown.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Oliver Brown
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/sameeah-ahmed-arai.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Sameeah Ahmed-Arai
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/jonathan-slaghuis.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Jonathan Slaghuis
                              </h4>
                            </a>
                          </div>
                          <div team-item="team-member" role="listitem" class="team-list_item team-item w-dyn-item">
                            <a data-swup-animation="to-black" href="team-members/jake-ackerman.html"
                            class="team-list_title-holder w-inline-block">
                              <h4 class="team-list_title">
                                Jake Ackerman
                              </h4>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="white-logo-clip_trigger">
              </div>
            </div>
            <div class="areas-section">
              <div class="areas-static">
                <div class="areas-nav_mobile">
                  <div class="areas-nav_holder-mobile">
                    <div class="areas-nav_wrap w-dyn-list">
                      <div role="list" class="areas-nav_list-mob w-dyn-items">
                        <div role="listitem" class="areas-nav_item w-dyn-item">
                          <a text-color="blue" href="areas/architecture.html" class="areas-nav_link w-inline-block">
                            <h4 class="areas-list_head">
                              Architecture
                            </h4>
                          </a>
                        </div>
                        <div role="listitem" class="areas-nav_item w-dyn-item">
                          <a text-color="orange" href="areas/infrastructure.html" class="areas-nav_link w-inline-block">
                            <h4 class="areas-list_head">
                              Infrastructure
                            </h4>
                          </a>
                        </div>
                        <div role="listitem" class="areas-nav_item w-dyn-item">
                          <a text-color="yellow" href="areas/interior.html" class="areas-nav_link w-inline-block">
                            <h4 class="areas-list_head">
                              Interior
                            </h4>
                          </a>
                        </div>
                        <div role="listitem" class="areas-nav_item w-dyn-item">
                          <a text-color="green" href="areas/digital.html" class="areas-nav_link w-inline-block">
                            <h4 class="areas-list_head">
                              Digital
                            </h4>
                          </a>
                        </div>
                        <div role="listitem" class="areas-nav_item w-dyn-item">
                          <a text-color="violet" href="areas/research.html" class="areas-nav_link w-inline-block">
                            <h4 class="areas-list_head">
                              Research
                            </h4>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="areas-empty">
                  <div class="areas_title">
                    <div mask-in="" class="body-copy">
                      Divisions
                    </div>
                  </div>
                  <div class="areas-sticky_col">
                    <div m-inactive="" class="areas-img_holder">
                      <img srcset="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0bd_S%2526P_AxisLines-p-500.png 500w, https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0bd_S%26P_AxisLines.png 829w"
                      alt="" sizes="(max-width: 767px) 100vw, (max-width: 991px) 283.53125px, 29vw"
                      src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0bd_S%26P_AxisLines.png"
                      class="areas-img" />
                      <div class="areas-img_height">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="areas-sticky_mob w-dyn-list">
                  <div role="list" class="areas-sticky_list-mob w-dyn-items">
                    <div areas-color="blue" role="listitem" class="areas-sticky_item-mob w-dyn-item">
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660aed251e7422053e969cf_Architectural.svg"
                          alt="" class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <h3 class="area-heading">
                            SP_01.ARC
                          </h3>
                          <div class="areas-rich w-richtext">
                            <p>
                              We work closely with our clients. Wide-ranging conversations shape our
                              ability to instinctively perceive the end-user&#x27;s challenges and needs.
                              We oversee building designs from their inception to completion.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div areas-color="orange" role="listitem" class="areas-sticky_item-mob w-dyn-item">
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660aec93b86acfd7f21b423_Infrastructure.svg"
                          alt="" class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <h3 class="area-heading">
                            SP_02.INF
                          </h3>
                          <div class="areas-rich w-richtext">
                            <p>
                              Taking a research-heavy and community-informed approach to large scale
                              infrastructure ensures longevity and cohesion between the project and its
                              surroundings. At these sites, public service delivery is our priority.
                            </p>
                            <p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div areas-color="yellow" role="listitem" class="areas-sticky_item-mob w-dyn-item">
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660aec07b0dd1b54560b9c2_Interior.svg"
                          alt="" class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <h3 class="area-heading">
                            SP_03.INt
                          </h3>
                          <div class="areas-rich w-richtext">
                            <p>
                              Interiors are carefully composed, strategically unified by textural details.
                              Complementary interiors harmonise the architectural character of a space
                              and establish stylish coherence. We are skilled in turnkey design solutions
                              for commercial, office and domestic use.
                            </p>
                            <p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div areas-color="green" role="listitem" class="areas-sticky_item-mob w-dyn-item">
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660aeb49e976330d9e740dc_Digital.svg"
                          alt="" class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <h3 class="area-heading">
                            SP_04.DiG
                          </h3>
                          <div class="areas-rich w-richtext">
                            <p>
                              Technology has allowed us to mold new opportunities for digital design
                              and Virtual Reality. Developments in this area enrich the design process
                              and the client experience, placing clients in the envisioned space long
                              before it is built. In our work on digital marketing, we apply critical
                              design strategies to ensure digital content matches its spatial form.
                            </p>
                            <p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div areas-color="violet" role="listitem" class="areas-sticky_item-mob w-dyn-item">
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660ae976c058a1d4460b6cc_Research.svg"
                          alt="" class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <h3 class="area-heading">
                            SP_05.Res
                          </h3>
                          <div class="areas-rich w-richtext">
                            <p>
                              Our commitment to research is crucial to uncompromising design. By grounding
                              our inquiries in place we attain the necessary knowledge to integrate the
                              needs of the client and the context. Our research probes knowledge bases,
                              resources and processes. Using available materials, we apply sustainability
                              principles to the particularities of place. With this approach to design,
                              we diversify our practice and channel our architectural problem solving
                              skills in new ways.
                            </p>
                            <p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div m-inactive="" areas-sync="" class="areas-sticky w-dyn-list">
                  <div role="list" class="areas-sticky_list w-dyn-items">
                    <div area-item="" areas-color="blue" role="listitem" class="areas-sticky_item w-dyn-item">
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <div class="areas-rich w-richtext">
                            <p>
                              We work closely with our clients. Wide-ranging conversations shape our
                              ability to instinctively perceive the end-user&#x27;s challenges and needs.
                              We oversee building designs from their inception to completion.
                            </p>
                          </div>
                          <h3 class="area-heading">
                            SP_01.ARC
                          </h3>
                        </div>
                      </div>
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img alt="" src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660aed251e7422053e969cf_Architectural.svg"
                          class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div area-item="" areas-color="orange" role="listitem" class="areas-sticky_item w-dyn-item">
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <div class="areas-rich w-richtext">
                            <p>
                              Taking a research-heavy and community-informed approach to large scale
                              infrastructure ensures longevity and cohesion between the project and its
                              surroundings. At these sites, public service delivery is our priority.
                            </p>
                            <p>
                            </p>
                          </div>
                          <h3 class="area-heading">
                            SP_02.INF
                          </h3>
                        </div>
                      </div>
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img alt="" src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660aec93b86acfd7f21b423_Infrastructure.svg"
                          class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div area-item="" areas-color="yellow" role="listitem" class="areas-sticky_item w-dyn-item">
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <div class="areas-rich w-richtext">
                            <p>
                              Interiors are carefully composed, strategically unified by textural details.
                              Complementary interiors harmonise the architectural character of a space
                              and establish stylish coherence. We are skilled in turnkey design solutions
                              for commercial, office and domestic use.
                            </p>
                            <p>
                            </p>
                          </div>
                          <h3 class="area-heading">
                            SP_03.INt
                          </h3>
                        </div>
                      </div>
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img alt="" src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660aec07b0dd1b54560b9c2_Interior.svg"
                          class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div area-item="" areas-color="green" role="listitem" class="areas-sticky_item w-dyn-item">
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <div class="areas-rich w-richtext">
                            <p>
                              Technology has allowed us to mold new opportunities for digital design
                              and Virtual Reality. Developments in this area enrich the design process
                              and the client experience, placing clients in the envisioned space long
                              before it is built. In our work on digital marketing, we apply critical
                              design strategies to ensure digital content matches its spatial form.
                            </p>
                            <p>
                            </p>
                          </div>
                          <h3 class="area-heading">
                            SP_04.DiG
                          </h3>
                        </div>
                      </div>
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img alt="" src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660aeb49e976330d9e740dc_Digital.svg"
                          class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div area-item="" areas-color="violet" role="listitem" class="areas-sticky_item w-dyn-item">
                      <div class="areas-sticky_col is-content">
                        <div class="areas-content">
                          <div class="areas-rich w-richtext">
                            <p>
                              Our commitment to research is crucial to uncompromising design. By grounding
                              our inquiries in place we attain the necessary knowledge to integrate the
                              needs of the client and the context. Our research probes knowledge bases,
                              resources and processes. Using available materials, we apply sustainability
                              principles to the particularities of place. With this approach to design,
                              we diversify our practice and channel our architectural problem solving
                              skills in new ways.
                            </p>
                            <p>
                            </p>
                          </div>
                          <h3 class="area-heading">
                            SP_05.Res
                          </h3>
                        </div>
                      </div>
                      <div class="areas-sticky_col">
                        <div class="areas-img_holder">
                          <img alt="" src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/6660ae976c058a1d4460b6cc_Research.svg"
                          class="areas-img" />
                          <div class="areas-img_height">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="areas-nav">
                <div class="areas-nav_holder">
                  <div areas-sync="" class="areas-nav_wrap w-dyn-list">
                    <div role="list" class="areas-nav_list w-dyn-items">
                      <div area-item="" role="listitem" class="areas-nav_item w-dyn-item">
                        <a data-swup-animation="to-black" text-color="blue" href="areas/architecture.html"
                        class="areas-nav_link w-inline-block">
                          <h4 class="areas-list_head">
                            Architecture
                          </h4>
                        </a>
                      </div>
                      <div area-item="" role="listitem" class="areas-nav_item w-dyn-item">
                        <a data-swup-animation="to-black" text-color="orange" href="areas/infrastructure.html"
                        class="areas-nav_link w-inline-block">
                          <h4 class="areas-list_head">
                            Infrastructure
                          </h4>
                        </a>
                      </div>
                      <div area-item="" role="listitem" class="areas-nav_item w-dyn-item">
                        <a data-swup-animation="to-black" text-color="yellow" href="areas/interior.html"
                        class="areas-nav_link w-inline-block">
                          <h4 class="areas-list_head">
                            Interior
                          </h4>
                        </a>
                      </div>
                      <div area-item="" role="listitem" class="areas-nav_item w-dyn-item">
                        <a data-swup-animation="to-black" text-color="green" href="areas/digital.html"
                        class="areas-nav_link w-inline-block">
                          <h4 class="areas-list_head">
                            Digital
                          </h4>
                        </a>
                      </div>
                      <div area-item="" role="listitem" class="areas-nav_item w-dyn-item">
                        <a data-swup-animation="to-black" text-color="violet" href="areas/research.html"
                        class="areas-nav_link w-inline-block">
                          <h4 class="areas-list_head">
                            Research
                          </h4>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div areas-sync="" class="areas-nav_img-wrap w-dyn-list">
                    <div role="list" class="areas-nav_img-list w-dyn-items">
                      <div area-item="" m-inactive="" role="listitem" class="areas-nav_img-item w-dyn-item">
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe151_Studio_Areas_Architecture.jpg"
                        alt="" class="areas-img is-full" />
                      </div>
                      <div area-item="" m-inactive="" role="listitem" class="areas-nav_img-item w-dyn-item">
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe150_Studio_Areas_Infrastructure.jpg"
                        alt="" class="areas-img is-full" />
                      </div>
                      <div area-item="" m-inactive="" role="listitem" class="areas-nav_img-item w-dyn-item">
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe14f_Studio_Areas_Interior.jpg"
                        alt="" class="areas-img is-full" />
                      </div>
                      <div area-item="" m-inactive="" role="listitem" class="areas-nav_img-item w-dyn-item">
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe14e_Studio_Areas_Digital.jpg"
                        alt="" class="areas-img is-full" />
                      </div>
                      <div area-item="" m-inactive="" role="listitem" class="areas-nav_img-item w-dyn-item">
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe075/66601c7c6b0d48cf88bbe14d_Studio_Areas_Research.jpg"
                        alt="" class="areas-img is-full" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="practice-section">
              <div class="container">
                <div class="layout-flex is-practice">
                  <div class="practice-col">
                    <div class="body-copy is-grey">
                      THE PRACTICE
                    </div>
                    <div class="layout-flex practice-body">
                      <div class="practice-col_inner">
                        <p class="practice-body">
                          Porous &amp; Delab is an architecture studio that celebrates intuitive
                          design. The practice is led by Alex Stewart and Justin Häusle. We have
                          a track record of synthesising complex planning challenges and successfully
                          developing proposals in sensitive contexts. The practice specialises in
                          infrastructure, public and residential projects, providing full architectural
                          and interior design services. The architectural team is supported by specialist
                          resources in BIM, interior design, town planning, environmental analysis,
                          parametric modelling and visualisation.
                        </p>
                      </div>
                      <div class="practice-col_inner">
                        <p class="practice-body">
                          We are a fully BIM-integrated office. This has been a key feature of our
                          global projects that involve collaboration with multiple partners across
                          languages and national borders.The practice is registered with the United
                          Kingdom Architecture Registration Board (ARB), the South African Council
                          for the Architectural Profession (SACAP), the South African Institute for
                          Architecture (SAIA) and the Cape Institute for Architecture (CIA).
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="practice-col">
                    <div class="practice-p_holder">
                      <h2 class="practice-p_large">
                        We have a track record of synthesising complex planning challenges and
                        successfully developing proposals in sensitive contexts.
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="studio-fullimg_holder">
              <div class="studio-fullimg_height">
                <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/6792250af0f8215c4c5fea61_Group%20photo_Jan_26.png"
                alt="" sizes="100vw" srcset="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/6792250af0f8215c4c5fea61_Group%20photo_Jan_26-p-500.png 500w, https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/6792250af0f8215c4c5fea61_Group%20photo_Jan_26-p-800.png 800w, https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/6792250af0f8215c4c5fea61_Group%20photo_Jan_26-p-1080.png 1080w, https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/6792250af0f8215c4c5fea61_Group%20photo_Jan_26-p-1600.png 1600w, https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/6792250af0f8215c4c5fea61_Group%20photo_Jan_26-p-2000.png 2000w, https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/6792250af0f8215c4c5fea61_Group%20photo_Jan_26.png 2880w"
                class="img-fill" />
              </div>
            </div>
            <div class="approach-section">
              <div class="container">
                <div class="layout-flex practice-body">
                  <div class="approach-col">
                    <h2 class="practice-p_large">
                      Our practice has a strong collaborative work culture which draws on the
                      input of our team, consultants, building contractors and our clients.
                    </h2>
                  </div>
                </div>
                <div class="layout-flex pull-up">
                  <div class="approach-col">
                  </div>
                  <div approach-trigger="" class="approach-col is-right">
                    <div class="approach-img_list">
                      <div class="approach-img_holder">
                        <div class="approach-img_height">
                        </div>
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0e7_Studio_Approach_Gallery%2001.jpg"
                        alt="" class="img-fill" />
                      </div>
                      <div class="approach-img_holder">
                        <div class="approach-img_height">
                        </div>
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0e8_Studio_Approach_Gallery%2002.jpg"
                        alt="" class="img-fill" />
                      </div>
                      <div class="approach-img_holder">
                        <div class="approach-img_height">
                        </div>
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0e9_Studio_Approach_Gallery%2003.jpg"
                        alt="" class="img-fill" />
                      </div>
                      <div class="approach-img_holder">
                        <div class="approach-img_height">
                        </div>
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0ea_Studio_Approach_Gallery%2004.jpg"
                        alt="" class="img-fill" />
                      </div>
                      <div class="approach-img_holder">
                        <div class="approach-img_height">
                        </div>
                        <img src="https://cdn.prod.website-files.com/66601c7c6b0d48cf88bbe06c/66601c7c6b0d48cf88bbe0eb_Studio_Approach_Gallery%2005.jpg"
                        alt="" class="img-fill" />
                      </div>
                    </div>
                    <div class="approach-copy_holder">
                      <div class="body-copy">
                        OUR APPROACH
                      </div>
                      <p class="practice-body">
                        Our work is shaped by cohesive ideas that address the social, environmental
                        and economic layers of our projects. We are committed to creating intelligent
                        and relevant architectural solutions. The practice has a strong collaborative
                        work culture leading conversations between consultants, building contractors
                        and our clients. Our dialectical practices and flexible work environment
                        facilitate our goals. We cultivate the talent of our team players: by allowing
                        every person to seize their leadership potential we strike the right balance
                        between partnership and autonomy.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-component">
              <div class="global-footer desktop-footer">
                <div class="footer-layout">
                  <div class="footer-bot_layout">
                    <div class="footer-bot_left">
                      <div class="footer-col">
                        <a href="index.php" class="footer-logo_holder w-inline-block">
                          <div class="sp-anim_holder">
                            <!-- <div data-anim-loop="" lottie-url="https://cdn.prod.website-files.com/6480b7dee5884d12406ffba2/64881fc686e34d3ea7122487_S%26P_Logo.json"
                            class="sp-anim_container">
                            </div> -->
                            <img loading="eager" grid-img="" src="./assets/images/porous_delab_logo.jpeg"
                            alt="" class="sp-anim_container" />
                          </div>
                        </a>
                      </div>
                      <p easter-fade="" class="paragraph">
                        All rights reserved ©Porous&amp;Delab
                      </p>
                    </div>
                    <div easter-fade="" class="footer-bot_right">
                      <div easter-fade="" class="footer-menu_holder">
                        <a h-effect="" href="index.php" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Home
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Home
                          </div>
                        </a>
                        <a h-effect="" href="studio.php" aria-current="page" class="footer-link w-inline-block w--current">
                          <div h-item="" mask-in="" class="body-copy">
                            About
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            About
                          </div>
                        </a>
                        <a h-effect="" href="work.php" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Work
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Work
                          </div>
                        </a>
                        <a data-swup-animation="to-black" h-effect="" href="contact.php" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Contact
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Contact
                          </div>
                        </a>
                      </div>
                      <div class="footer-menu_holder">
                        <a t-black="" h-effect="" href="https://www.linkedin.com/company/porousdelab/"
                        target="_blank" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Linkedin
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Linkedin
                          </div>
                        </a>
                        <a t-black="" h-effect="" href="https://www.instagram.com/porousdelab/"
                        target="_blank" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Instagram
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Instagram
                          </div>
                        </a>
                      </div>
                      <a href="mailto:info@porousdelab.com" class="footer-link w-inline-block">
                        <div mask-in="" class="footer-link_text">
                          info@porousdelab.com
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div mobile-footer="" class="global-footer mobile">
                <div hover-fade="" class="home-footer_layout">
                  <div class="footer-bot_layout">
                    <div class="footer-bot_left">
                      <div class="footer-col">
                      </div>
                    </div>
                    <div easter-fade="" class="footer-bot_right">
                      <div easter-fade="" class="footer-menu_holder">
                        <a h-effect="" href="index.php" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Home
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Home
                          </div>
                        </a>
                        <a h-effect="" href="studio.php" aria-current="page" class="footer-link w-inline-block w--current">
                          <div h-item="" mask-in="" class="body-copy">
                            About
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            About
                          </div>
                        </a>
                        <a h-effect="" href="work.php" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Work
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Work
                          </div>
                        </a>
                        <a data-swup-animation="to-black" h-effect="" href="contact.php" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Contact
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Contact
                          </div>
                        </a>
                      </div>
                      <div class="footer-menu_holder">
                        <a t-black="" h-effect="" href="https://www.linkedin.com/company/porousdelab/"
                        target="_blank" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Linkedin
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Linkedin
                          </div>
                        </a>
                        <a t-black="" h-effect="" href="https://www.instagram.com/porousdelab/"
                        target="_blank" class="footer-link w-inline-block">
                          <div h-item="" mask-in="" class="body-copy">
                            Instagram
                          </div>
                          <div h-item="" mask-in="" class="body-copy">
                            Instagram
                          </div>
                        </a>
                      </div>
                      <div class="footer-menu_holder">
                        <div class="socials-component">
                          <div h-item="" mask-in="" class="body-copy">
                            ©2024
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="footer-logo_holder">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 373 562"
                    fill="none">
                      <g STYLE="mix-blend-mode:difference">
                        <path d="M373 421.501L153.136 200.627C148.253 195.723 151.711 187.334 158.615 187.334H372.933V0H139.959V179.547C139.959 183.847 136.49 187.333 132.21 187.333H0V327.833L233.175 562H373V421.501Z"
                        fill="#000">
                        </path>
                      </g>
                    </svg>
                  </div>
                  <div class="footer-extras">
                    <div mask-in="" class="footer-link_text">
                      info@porousdelab.com
                    </div>
                    <p easter-fade="" class="paragraph">
                      All rights reserved ©Porous&amp;Delab
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-popup lenis lenis-smooth">
          <div class="contact-popup_content">
            <div class="contact-popup_form-holder">
              <div class="sp-form w-form">
                <form id="email-form" name="email-form" data-name="Email Form" method="get"
                data-wf-flow="66601c7c6b0d48cf88bbe06f" data-wf-page-id="66601c7c6b0d48cf88bbe083"
                data-wf-element-id="3d4da971-c555-ffd2-cca0-b51909bfb00d">
                  <h3 class="contact-popup_head">
                    Get in touch
                  </h3>
                  <label for="Position" class="contact-label">
                    Position
                  </label>
                  <div class="contact-select_layout">
                    <select id="Position-2" name="Position" data-name="Position" class="contact-input w-select">
                      <option value="">
                        Select a category
                      </option>
                      <option value="Intern">
                        Intern
                      </option>
                      <option value="Candidate Architect">
                        Candidate Architect
                      </option>
                      <option value="Architectural Technologist">
                        Architectural Technologist
                      </option>
                      <option value="Professional Architect">
                        Professional Architect
                      </option>
                      <option value="Other">
                        Other
                      </option>
                    </select>
                    <div class="contact-dropdown_arrow w-embed">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 30 16"
                      fill="none">
                        <path d="M1 1L14.9999 15L29 1" stroke="white" />
                      </svg>
                    </div>
                  </div>
                  <label for="Position-2" class="contact-label">
                    Name &amp; Surname
                  </label>
                  <input class="contact-input w-input" maxlength="256" name="name" data-name="Name"
                  placeholder="Name Surname" type="text" id="name" />
                  <label for="email" class="contact-label">
                    Email Address
                  </label>
                  <input class="contact-input w-input" maxlength="256" name="email" data-name="Email"
                  placeholder="name@email.com" type="email" id="email" required="" />
                  <label for="field" class="contact-label">
                    Message
                  </label>
                  <textarea placeholder="Message" maxlength="5000" id="field" name="field"
                  data-name="Field" class="contact-input w-input">
                  </textarea>
                  <input type="submit" data-wait="Please wait..." class="form-submit w-button"
                  value="Submit" />
                  <div class="submit-btn">
                    <div class="submit-btn_text">
                      Submit Form
                    </div>
                    <div class="submit-arrow w-embed">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 22 22"
                      fill="none">
                        <g style="mix-blend-mode:difference">
                          <path d="M0.945953 0.949066L10.8943 0.947449L20.8394 0.947468L20.8394 20.8409M0.945927 20.8409L20.8394 0.94423"
                          stroke="white" />
                        </g>
                      </svg>
                    </div>
                  </div>
                </form>
                <div class="sp-success w-form-done">
                  <h3 class="success-head">
                    Form submitted
                  </h3>
                  <div class="success-text">
                    Thank you for contacting us. A member of our team will respond in due
                    course.
                  </div>
                  <a href="studio.php#" class="explore-btn w-inline-block">
                    <div class="submit-btn_text">
                      Explore more
                    </div>
                    <div class="submit-arrow w-embed">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 22 22"
                      fill="none">
                        <g style="mix-blend-mode:difference">
                          <path d="M0.945953 0.949066L10.8943 0.947449L20.8394 0.947468L20.8394 20.8409M0.945927 20.8409L20.8394 0.94423"
                          stroke="white" />
                        </g>
                      </svg>
                    </div>
                  </a>
                </div>
                <div class="w-form-fail">
                  <div>
                    Oops! Something went wrong while submitting the form.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="close-contact">
            <div h-effect="" class="text-overflow is-menu">
              <div h-item="" mask-in="" class="menu-btn_text">
                Close
              </div>
              <div h-item="" mask-in="" class="menu-btn_text">
                Close
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="preloader-component show">
      <div class="preloader-layout">
        <div class="container m-fh">
          <div class="flex-stretch m-vertical">
            <div class="preloader-item">
              <div class="body-copy">
                Design Intelligence
              </div>
            </div>
            <div class="preloader-item is-center">
              <div class="preloader-lottie_container">
                <div lottie-url="https://cdn.prod.website-files.com/6480b7dee5884d12406ffba2/64881fc686e34d3ea7122487_S%26P_Logo.json"
                class="preloader-lottie">
                </div>
              </div>
            </div>
            <div class="preloader-item is-right">
              <div class="preloader-timer">
                00%
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-transition">
      <div class="page-transition_bg">
      </div>
      <div class="page-transition_out">
      </div>
    </div>
    
<?php include 'footer.php'; ?>