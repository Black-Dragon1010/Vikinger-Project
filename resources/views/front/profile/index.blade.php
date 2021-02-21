@extends('_layouts.layout')
@section('title', 'Profile')

@section('content')
<div class="content-grid">
    @include('_partials.profile_header')
    <!-- SECTION NAVIGATION -->
    <nav class="section-navigation">
      <!-- SECTION MENU -->
      <div id="section-navigation-slider" class="section-menu">
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item active" href="profile-about.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-profile">
            <use xlink:href="#svg-profile"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">About</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-timeline.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-timeline">
            <use xlink:href="#svg-timeline"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Timeline</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-friends.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-friend">
            <use xlink:href="#svg-friend"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Friends</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-groups.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-group">
            <use xlink:href="#svg-group"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Groups</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-photos.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-photos">
            <use xlink:href="#svg-photos"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Photos</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-videos.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-videos">
            <use xlink:href="#svg-videos"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Videos</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-badges.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-badges">
            <use xlink:href="#svg-badges"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Badges</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-stream.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-streams">
            <use xlink:href="#svg-streams"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Streams</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-blog.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-blog-posts">
            <use xlink:href="#svg-blog-posts"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Blog</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-forum.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-forum">
            <use xlink:href="#svg-forum"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Forum</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
  
        <!-- SECTION MENU ITEM -->
        <a class="section-menu-item" href="profile-store.html">
          <!-- SECTION MENU ITEM ICON -->
          <svg class="section-menu-item-icon icon-store">
            <use xlink:href="#svg-store"></use>
          </svg>
          <!-- /SECTION MENU ITEM ICON -->
  
          <!-- SECTION MENU ITEM TEXT -->
          <p class="section-menu-item-text">Store</p>
          <!-- /SECTION MENU ITEM TEXT -->
        </a>
        <!-- /SECTION MENU ITEM -->
      </div>
      <!-- /SECTION MENU -->
  
      <!-- SLIDER CONTROLS -->
      <div id="section-navigation-slider-controls" class="slider-controls">
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
    </nav>
    <!-- /SECTION NAVIGATION -->

    <!-- GRID -->
    <div class="grid grid-3-6-3">
      <!-- GRID COLUMN -->
      <div class="grid-column">
        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->
      
              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">About Me</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- PARAGRAPH -->
            <p class="paragraph">{!! $user->description_text !!}</p>
            <!-- /PARAGRAPH -->
      
            <!-- INFORMATION LINE LIST -->
            <div class="information-line-list">
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Joined</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! date("jS F, Y", strtotime($user->created_at)); !!}</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">City</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! $user->city_name !!}</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Country</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! $user->country_name !!}</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Age</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! date_diff(date_create($user->birthday), date_create('now'))->y; !!} Years</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Web</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text"><a href="https://{!! $user->web !!}" target="_blank">{!! $user->web !!}</a></p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
            </div>
            <!-- /INFORMATION LINE LIST -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      
        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->
      
              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Personal Info</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- INFORMATION LINE LIST -->
            <div class="information-line-list">
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Email</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">
                    <!-- <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="016669746f757364727241786e74736c60686d2f626e6c">[email&#160;protected]</a> -->
                    <a href="#" class="__cf_email__" data-cfemail="">{!! $user->email !!}</a>
                </p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Birthday</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! date("jS F, Y", strtotime($user->birthday)); !!}</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Occupation</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! $user->occupation !!}</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Status</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! $user->status !!}</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Birthplace</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! $user->birthplace !!}</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Ps ID</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! $user->playstation_id !!}</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
      
              <!-- INFORMATION LINE -->
              <div class="information-line">
                <!-- INFORMATION LINE TITLE -->
                <p class="information-line-title">Xb ID</p>
                <!-- /INFORMATION LINE TITLE -->
      
                <!-- INFORMATION LINE TEXT -->
                <p class="information-line-text">{!! $user->xbox_id !!}</p>
                <!-- /INFORMATION LINE TEXT -->
              </div>
              <!-- /INFORMATION LINE -->
            </div>
            <!-- /INFORMATION LINE LIST -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->

      <!-- GRID COLUMN -->
      <div class="grid-column">
        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->
      
              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Interests</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- INFORMATION BLOCK LIST -->
            <div class="information-block-list">
              <!-- INFORMATION BLOCK -->
              <div class="information-block">
                <!-- INFORMATION BLOCK TITLE -->
                <p class="information-block-title">Favourite TV Shows</p>
                <!-- /INFORMATION BLOCK TITLE -->
      
                <!-- INFORMATION BLOCK TEXT -->
                <p class="information-block-text">{!! $user->favorite_shows !!}</p>
                <!-- /INFORMATION BLOCK TEXT -->
              </div>
              <!-- /INFORMATION BLOCK -->
      
              <!-- INFORMATION BLOCK -->
              <div class="information-block">
                <!-- INFORMATION BLOCK TITLE -->
                <p class="information-block-title">Favourite Music Bands / Artists</p>
                <!-- /INFORMATION BLOCK TITLE -->
      
                <!-- INFORMATION BLOCK TEXT -->
                <p class="information-block-text">{!! $user->favorite_musics !!}</p>
                <!-- /INFORMATION BLOCK TEXT -->
              </div>
              <!-- /INFORMATION BLOCK -->
      
              <!-- INFORMATION BLOCK -->
              <div class="information-block">
                <!-- INFORMATION BLOCK TITLE -->
                <p class="information-block-title">Favourite Movies</p>
                <!-- /INFORMATION BLOCK TITLE -->
      
                <!-- INFORMATION BLOCK TEXT -->
                <p class="information-block-text">{!! $user->favorite_movies !!}</p>
                <!-- /INFORMATION BLOCK TEXT -->
              </div>
              <!-- /INFORMATION BLOCK -->
      
              <!-- INFORMATION BLOCK -->
              <div class="information-block">
                <!-- INFORMATION BLOCK TITLE -->
                <p class="information-block-title">Favourite Books</p>
                <!-- /INFORMATION BLOCK TITLE -->
      
                <!-- INFORMATION BLOCK TEXT -->
                <p class="information-block-text">{!! $user->favorite_books !!}</p>
                <!-- /INFORMATION BLOCK TEXT -->
              </div>
              <!-- /INFORMATION BLOCK -->
      
              <!-- INFORMATION BLOCK -->
              <div class="information-block">
                <!-- INFORMATION BLOCK TITLE -->
                <p class="information-block-title">Favourite Games</p>
                <!-- /INFORMATION BLOCK TITLE -->
      
                <!-- INFORMATION BLOCK TEXT -->
                <p class="information-block-text">{!! $user->favorite_games !!}</p>
                <!-- /INFORMATION BLOCK TEXT -->
              </div>
              <!-- /INFORMATION BLOCK -->
            </div>
            <!-- /INFORMATION BLOCK LIST -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      
        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->
      
              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">Jobs &amp; Education</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- TIMELINE INFORMATION LIST -->
            <div class="timeline-information-list">
            @foreach($resume as $item)
              <!-- TIMELINE INFORMATION -->
              <div class="timeline-information">
                <!-- TIMELINE INFORMATION TITLE -->
                <p class="timeline-information-title">{{$item->title}}</p>
                <!-- /TIMELINE INFORMATION TITLE -->
      
                <!-- TIMELINE INFORMATION DATE -->
                <p class="timeline-information-date">{{$item->start}} - 
                @if($item->end == 8888)
                NOW
                @else
                {!! $item->end !!}
                @endif
                </p>
                <!-- /TIMELINE INFORMATION DATE -->
      
                <!-- TIMELINE INFORMATION TEXT -->
                <p class="timeline-information-text">{!! $item->description !!}</p>
                <!-- /TIMELINE INFORMATION TEXT -->
              </div>
              <!-- /TIMELINE INFORMATION -->
            @endforeach
      
            </div>
            <!-- /TIMELINE INFORMATION LIST -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->

      <!-- GRID COLUMN -->
      <div class="grid-column">
        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- PROGRESS ARC SUMMARY -->
          <div class="progress-arc-summary">
            <!-- PROGRESS ARC WRAP -->
            <div class="progress-arc-wrap">
              <!-- PROGRESS ARC -->
              <div class="progress-arc">
                <canvas id="profile-completion-chart"></canvas>
              </div>
              <!-- PROGRESS ARC -->
        
              <!-- PROGRESS ARC INFO -->
              <div class="progress-arc-info">
                <!-- PROGRESS ARC TITLE -->
                <p class="progress-arc-title">59%</p>
                <!-- /PROGRESS ARC TITLE -->
              </div>
              <!-- /PROGRESS ARC INFO -->
            </div>
            <!-- /PROGRESS ARC WRAP -->
        
            <!-- PROGRESS ARC SUMMARY INFO -->
            <div class="progress-arc-summary-info">
              <!-- PROGRESS ARC SUMMARY TITLE -->
              <p class="progress-arc-summary-title">Profile Completion</p>
              <!-- /PROGRESS ARC SUMMARY TITLE -->
        
              <!-- PROGRESS ARC SUMMARY TITLE -->
              <p class="progress-arc-summary-subtitle">{!! $user->username !!}</p>
              <!-- /PROGRESS ARC SUMMARY TITLE -->
        
              <!-- PROGRESS ARC SUMMARY TITLE -->
              <p class="progress-arc-summary-text">Complete your profile by filling profile info fields, completing quests &amp; unlocking badges</p>
              <!-- /PROGRESS ARC SUMMARY TITLE -->
            </div>
            <!-- /PROGRESS ARC SUMMARY INFO -->
          </div>
          <!-- /PROGRESS ARC SUMMARY -->
      
          <!-- ACHIEVEMENT STATUS LIST -->
          <div class="achievement-status-list">
            <!-- ACHIEVEMENT STATUS -->
            <div class="achievement-status">
              <!-- ACHIEVEMENT STATUS PROGRESS -->
              <p class="achievement-status-progress">11/30</p>
              <!-- /ACHIEVEMENT STATUS PROGRESS -->
      
              <!-- ACHIEVEMENT STATUS INFO -->
              <div class="achievement-status-info">
                <!-- ACHIEVEMENT STATUS TITLE -->
                <p class="achievement-status-title">Quests</p>
                <!-- /ACHIEVEMENT STATUS TITLE -->
                
                <!-- ACHIEVEMENT STATUS TEXT -->
                <p class="achievement-status-text">Completed</p>
                <!-- /ACHIEVEMENT STATUS TEXT -->
              </div>
              <!-- /ACHIEVEMENT STATUS INFO -->
      
              <!-- ACHIEVEMENT STATUS IMAGE -->
              <img class="achievement-status-image" src="{!! asset('theme/img/badge/completedq-s.png') !!}" alt="bdage-completedq-s">
              <!-- /ACHIEVEMENT STATUS IMAGE -->
            </div>
            <!-- /ACHIEVEMENT STATUS -->
      
            <!-- ACHIEVEMENT STATUS -->
            <div class="achievement-status">
              <!-- ACHIEVEMENT STATUS PROGRESS -->
              <p class="achievement-status-progress">22/46</p>
              <!-- /ACHIEVEMENT STATUS PROGRESS -->
      
              <!-- ACHIEVEMENT STATUS INFO -->
              <div class="achievement-status-info">
                <!-- ACHIEVEMENT STATUS TITLE -->
                <p class="achievement-status-title">Badges</p>
                <!-- /ACHIEVEMENT STATUS TITLE -->
                
                <!-- ACHIEVEMENT STATUS TEXT -->
                <p class="achievement-status-text">Unlocked</p>
                <!-- /ACHIEVEMENT STATUS TEXT -->
              </div>
              <!-- /ACHIEVEMENT STATUS INFO -->
      
              <!-- ACHIEVEMENT STATUS IMAGE -->
              <img class="achievement-status-image" src="{!! asset('theme/img/badge/unlocked-badge.png') !!}" alt="bdage-unlocked-badge">
              <!-- /ACHIEVEMENT STATUS IMAGE -->
            </div>
            <!-- /ACHIEVEMENT STATUS -->
          </div>
          <!-- /ACHIEVEMENT STATUS LIST -->
        </div>
        <!-- /WIDGET BOX -->

        <!-- WIDGET BOX -->
        <div class="widget-box">
          <!-- WIDGET BOX SETTINGS -->
          <div class="widget-box-settings">
            <!-- POST SETTINGS WRAP -->
            <div class="post-settings-wrap">
              <!-- POST SETTINGS -->
              <div class="post-settings widget-box-post-settings-dropdown-trigger">
                <!-- POST SETTINGS ICON -->
                <svg class="post-settings-icon icon-more-dots">
                  <use xlink:href="#svg-more-dots"></use>
                </svg>
                <!-- /POST SETTINGS ICON -->
              </div>
              <!-- /POST SETTINGS -->
      
              <!-- SIMPLE DROPDOWN -->
              <div class="simple-dropdown widget-box-post-settings-dropdown">
                <!-- SIMPLE DROPDOWN LINK -->
                <p class="simple-dropdown-link">Widget Settings</p>
                <!-- /SIMPLE DROPDOWN LINK -->
              </div>
              <!-- /SIMPLE DROPDOWN -->
            </div>
            <!-- /POST SETTINGS WRAP -->
          </div>
          <!-- /WIDGET BOX SETTINGS -->
      
          <!-- WIDGET BOX TITLE -->
          <p class="widget-box-title">More Stats</p>
          <!-- /WIDGET BOX TITLE -->
      
          <!-- WIDGET BOX CONTENT -->
          <div class="widget-box-content">
            <!-- STAT BLOCK LIST -->
            <div class="stat-block-list">
              <!-- STAT BLOCK -->
              <div class="stat-block">
                <!-- STAT BLOCK DECORATION -->
                <div class="stat-block-decoration">
                  <!-- STAT BLOCK DECORATION ICON -->
                  <svg class="stat-block-decoration-icon icon-friend">
                    <use xlink:href="#svg-friend"></use>
                  </svg>
                  <!-- /STAT BLOCK DECORATION ICON -->
                </div>
                <!-- /STAT BLOCK DECORATION -->
      
                <!-- STAT BLOCK INFO -->
                <div class="stat-block-info">
                  <!-- STAT BLOCK TITLE -->
                  <p class="stat-block-title">Last friend added</p>
                  <!-- /STAT BLOCK TITLE -->
      
                  <!-- STAT BLOCK TEXT -->
                  <p class="stat-block-text">{!! $last_friend_added !!}</p>
                  <!-- /STAT BLOCK TEXT -->
                </div>
                <!-- /STAT BLOCK INFO -->
              </div>
              <!-- /STAT BLOCK -->
      
              <!-- STAT BLOCK -->
              <div class="stat-block">
                <!-- STAT BLOCK DECORATION -->
                <div class="stat-block-decoration">
                  <!-- STAT BLOCK DECORATION ICON -->
                  <svg class="stat-block-decoration-icon icon-status">
                    <use xlink:href="#svg-status"></use>
                  </svg>
                  <!-- /STAT BLOCK DECORATION ICON -->
                </div>
                <!-- /STAT BLOCK DECORATION -->
      
                <!-- STAT BLOCK INFO -->
                <div class="stat-block-info">
                  <!-- STAT BLOCK TITLE -->
                  <p class="stat-block-title">Last post update</p>
                  <!-- /STAT BLOCK TITLE -->
      
                  <!-- STAT BLOCK TEXT -->
                  <p class="stat-block-text">{!! $last_post_updated !!}</p>
                  <!-- /STAT BLOCK TEXT -->
                </div>
                <!-- /STAT BLOCK INFO -->
              </div>
              <!-- /STAT BLOCK -->
      
              <!-- STAT BLOCK -->
              <div class="stat-block">
                <!-- STAT BLOCK DECORATION -->
                <div class="stat-block-decoration">
                  <!-- STAT BLOCK DECORATION ICON -->
                  <svg class="stat-block-decoration-icon icon-comment">
                    <use xlink:href="#svg-comment"></use>
                  </svg>
                  <!-- /STAT BLOCK DECORATION ICON -->
                </div>
                <!-- /STAT BLOCK DECORATION -->
      
                <!-- STAT BLOCK INFO -->
                <div class="stat-block-info">
                  <!-- STAT BLOCK TITLE -->
                  <p class="stat-block-title">Most commented post</p>
                  <!-- /STAT BLOCK TITLE -->
      
                  <!-- STAT BLOCK TEXT -->
                  <p class="stat-block-text">{!! $most_commented_post !!} Comments</p>
                  <!-- /STAT BLOCK TEXT -->
                </div>
                <!-- /STAT BLOCK INFO -->
              </div>
              <!-- /STAT BLOCK -->
      
              <!-- STAT BLOCK -->
              <div class="stat-block">
                <!-- STAT BLOCK DECORATION -->
                <div class="stat-block-decoration">
                  <!-- STAT BLOCK DECORATION ICON -->
                  <svg class="stat-block-decoration-icon icon-thumbs-up">
                    <use xlink:href="#svg-thumbs-up"></use>
                  </svg>
                  <!-- /STAT BLOCK DECORATION ICON -->
                </div>  
                <!-- /STAT BLOCK DECORATION -->
      
                <!-- STAT BLOCK INFO -->
                <div class="stat-block-info">
                  <!-- STAT BLOCK TITLE -->
                  <p class="stat-block-title">Most liked post</p>
                  <!-- /STAT BLOCK TITLE -->
      
                  <!-- STAT BLOCK TEXT -->
                  <p class="stat-block-text">0 Likes</p>
                  <!-- /STAT BLOCK TEXT -->
                </div>
                <!-- /STAT BLOCK INFO -->
              </div>
              <!-- /STAT BLOCK -->
            </div>
            <!-- /STAT BLOCK LIST -->
          </div>
          <!-- /WIDGET BOX CONTENT -->
        </div>
        <!-- /WIDGET BOX -->
      </div>
      <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
</div>
@stop
@section('after_content')

@stop
@section('after_scripts')
<script data-cfasync="false" src="https://odindesignthemes.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{!! asset('theme/js/vendor/app.bundle.min.js') !!}"></script>
@stop
