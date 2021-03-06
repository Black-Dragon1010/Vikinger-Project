<!-- PROFILE HEADER -->
<div class="profile-header">
    <!-- PROFILE HEADER COVER -->
    <figure class="profile-header-cover liquid">
        <img src="{!! asset($user->image) !!}" alt="cover">
    </figure>
    <!-- /PROFILE HEADER COVER -->

    <!-- PROFILE HEADER INFO -->
    <div class="profile-header-info">
        <!-- USER SHORT DESCRIPTION -->
        <div class="user-short-description big">
            <!-- USER SHORT DESCRIPTION AVATAR -->
            <a class="user-short-description-avatar user-avatar big" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-148-164"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-100-110" data-src="{!! asset($user->thumbnail) !!}"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->

                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                    <!-- HEXAGON -->
                    <div class="hexagon-progress-124-136"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->

                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-border-124-136"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->

                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                    <!-- USER AVATAR BADGE BORDER -->
                    <div class="user-avatar-badge-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-40-44"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE BORDER -->

                    <!-- USER AVATAR BADGE CONTENT -->
                    <div class="user-avatar-badge-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-dark-32-34"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE CONTENT -->

                    <!-- USER AVATAR BADGE TEXT -->
                    <p class="user-avatar-badge-text">24</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
            </a>
            <!-- /USER SHORT DESCRIPTION AVATAR -->

            <!-- USER SHORT DESCRIPTION AVATAR -->
            <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-120-132"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->

                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-82-90" data-src="{!! asset($user->thumbnail) !!}"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->

                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                    <!-- HEXAGON -->
                    <div class="hexagon-progress-100-110"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->

                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-border-100-110"></div>
                    <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->

                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                    <!-- USER AVATAR BADGE BORDER -->
                    <div class="user-avatar-badge-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-32-36"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE BORDER -->

                    <!-- USER AVATAR BADGE CONTENT -->
                    <div class="user-avatar-badge-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-dark-26-28"></div>
                        <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE CONTENT -->

                    <!-- USER AVATAR BADGE TEXT -->
                    <p class="user-avatar-badge-text">24</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
            </a>
            <!-- /USER SHORT DESCRIPTION AVATAR -->

            <!-- USER SHORT DESCRIPTION TITLE -->
            <p class="user-short-description-title"><a href="profile-timeline.html">{!! $user->name !!}</a></p>
            <!-- /USER SHORT DESCRIPTION TITLE -->

            <!-- USER SHORT DESCRIPTION TEXT -->
            <p class="user-short-description-text">
                <!-- <a href="#">{!! $user->status !!}</a> -->
                <a href="https://{!! $user->web !!}" target="_blank">{!! $user->web !!}</a>
            </p>
            <!-- /USER SHORT DESCRIPTION TEXT -->
        </div>
        <!-- /USER SHORT DESCRIPTION -->

        <!-- PROFILE HEADER SOCIAL LINKS WRAP -->
        <div class="profile-header-social-links-wrap">
            <!-- PROFILE HEADER SOCIAL LINKS -->
            <div id="profile-header-social-links-slider" class="profile-header-social-links">
                <div class="profile-header-social-link">
                    <!-- SOCIAL LINK -->
                    <a class="social-link facebook" href="https://www.facebook.com">
                        <!-- ICON FACEBOOK -->
                        <svg class="icon-facebook">
                            <use xlink:href="#svg-facebook"></use>
                        </svg>
                        <!-- /ICON FACEBOOK -->
                    </a>
                    <!-- /SOCIAL LINK -->
                </div>

                <div class="profile-header-social-link">
                    <!-- SOCIAL LINK -->
                    <a class="social-link twitter" href="https://www.twitter.com">
                        <!-- ICON TWITTER -->
                        <svg class="icon-twitter">
                            <use xlink:href="#svg-twitter"></use>
                        </svg>
                        <!-- /ICON TWITTER -->
                    </a>
                    <!-- /SOCIAL LINK -->
                </div>

                <div class="profile-header-social-link">
                    <!-- SOCIAL LINK -->
                    <a class="social-link instagram" href="https://www.telegram.org">
                        <!-- ICON INSTAGRAM -->
                        <svg class="icon-instagram">
                            <use xlink:href="#svg-instagram"></use>
                        </svg>
                        <!-- /ICON INSTAGRAM -->
                    </a>
                    <!-- /SOCIAL LINK -->
                </div>

                <div class="profile-header-social-link">
                    <!-- SOCIAL LINK -->
                    <a class="social-link twitch" href="https://www.twitch.tv">
                        <!-- ICON TWITCH -->
                        <svg class="icon-twitch">
                            <use xlink:href="#svg-twitch"></use>
                        </svg>
                        <!-- /ICON TWITCH -->
                    </a>
                    <!-- /SOCIAL LINK -->
                </div>

                <div class="profile-header-social-link">
                    <!-- SOCIAL LINK -->
                    <a class="social-link youtube" href="https://www.youtube.com">
                        <!-- ICON YOUTUBE -->
                        <svg class="icon-youtube">
                            <use xlink:href="#svg-youtube"></use>
                        </svg>
                        <!-- /ICON YOUTUBE -->
                    </a>
                    <!-- /SOCIAL LINK -->
                </div>

                <div class="profile-header-social-link">
                    <!-- SOCIAL LINK -->
                    <a class="social-link patreon" href="https://www.patreon.com">
                        <!-- ICON PATREON -->
                        <svg class="icon-patreon">
                            <use xlink:href="#svg-patreon"></use>
                        </svg>
                        <!-- /ICON PATREON -->
                    </a>
                    <!-- /SOCIAL LINK -->
                </div>

                <div class="profile-header-social-link">
                    <!-- SOCIAL LINK -->
                    <a class="social-link discord" href="https://www.discord.com">
                        <!-- ICON DISCORD -->
                        <svg class="icon-discord">
                            <use xlink:href="#svg-discord"></use>
                        </svg>
                        <!-- /ICON DISCORD -->
                    </a>
                    <!-- /SOCIAL LINK -->
                </div>
            </div>
            <!-- /PROFILE HEADER SOCIAL LINKS -->

            <!-- SLIDER CONTROLS -->
            <div id="profile-header-social-links-slider-controls" class="slider-controls">
                <!-- SLIDER CONTROL -->
                <div class="slider-control left">
                    <!-- SLIDER CONTROL ICON -->
                    <svg class="slider-control-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /SLIDER CONTROL ICON -->
                </div>
                <!-- /SLIDER CONTROL -->

                <!-- SLIDER CONTROL -->
                <div class="slider-control right">
                    <!-- SLIDER CONTROL ICON -->
                    <svg class="slider-control-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                    </svg>
                    <!-- /SLIDER CONTROL ICON -->
                </div>
                <!-- /SLIDER CONTROL -->
            </div>
            <!-- /SLIDER CONTROLS -->
        </div>
        <!-- /PROFILE HEADER SOCIAL LINKS WRAP -->

        <!-- USER STATS -->
        <div class="user-stats">
            <!-- USER STAT -->
            <div class="user-stat big">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">{!! $blog_count !!}</p>
                <!-- /USER STAT TITLE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
            </div>
            <!-- /USER STAT -->

            <!-- USER STAT -->
            <div class="user-stat big">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">{!! $friend_count !!}</p>
                <!-- /USER STAT TITLE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
            </div>
            <!-- /USER STAT -->

            <!-- USER STAT -->
            <div class="user-stat big">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">{!! GeneralHelper::formatnumber($user->visit_count) !!}</p>
                <!-- /USER STAT TITLE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
            </div>
            <!-- /USER STAT -->

            <!-- USER STAT -->
            <div class="user-stat big">
                <!-- USER STAT IMAGE -->
                <img class="user-stat-image" src="
                <?php
                    $flag_name = url('/'). "/css/flags/".$user->country.".png";
                    echo( $flag_name);
                ?>
                " alt="flag">
                <!-- /USER STAT IMAGE -->

                <!-- USER STAT TEXT -->
                <p class="user-stat-text">{!! $user->country!!}</p>
                <!-- /USER STAT TEXT -->
            </div>
            <!-- /USER STAT -->
        </div>
        <!-- /USER STATS -->

        <!-- PROFILE HEADER INFO ACTIONS -->
        <div class="profile-header-info-actions">
            <!-- PROFILE HEADER INFO ACTION -->
            <p class="profile-header-info-action button secondary"><span class="hide-text-mobile">Add</span> Friend +</p>
            <!-- /PROFILE HEADER INFO ACTION -->

            <!-- PROFILE HEADER INFO ACTION -->
            <p class="profile-header-info-action button primary"><span class="hide-text-mobile">Send</span> Message</p>
            <!-- /PROFILE HEADER INFO ACTION -->
        </div>
        <!-- /PROFILE HEADER INFO ACTIONS -->
    </div>
    <!-- /PROFILE HEADER INFO -->
</div>
<!-- /PROFILE HEADER -->
