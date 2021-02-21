@extends('_layouts.layout')
@section('title', 'Profile')

@section('content')
<div class="content-grid">
    @include('_partials.profile_header')
    @include('_partials.profile_nav_header')

    <!-- SECTION -->
    <section class="section">
      <!-- SECTION HEADER -->
      <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
          <!-- SECTION PRETITLE -->
          <p class="section-pretitle">Browse {!!$user->username!!}'s</p>
          <!-- /SECTION PRETITLE -->
  
          <!-- SECTION TITLE -->
          <h2 class="section-title">Friends <span class="highlighted">{!!$friend_count!!}</span></h2>
          <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
      </div>
      <!-- /SECTION HEADER -->
        <!-- SECTION FILTERS BAR -->
      <div class="section-filters-bar v1">
        <!-- SECTION FILTERS BAR ACTIONS -->
        <div class="section-filters-bar-actions">
          <!-- FORM -->
          <form class="form">
            <!-- FORM INPUT -->
            <div class="form-input small with-button">
              <label for="friends-search">Search Friends</label>
              <input type="text" id="friends-search" name="friends_search">
              <!-- BUTTON -->
              <button class="button primary">
                <!-- ICON MAGNIFYING GLASS -->
                <svg class="icon-magnifying-glass">
                  <use xlink:href="#svg-magnifying-glass"></use>
                </svg>
                <!-- /ICON MAGNIFYING GLASS -->
              </button>
              <!-- /BUTTON -->
            </div>
            <!-- /FORM INPUT -->
    
            <!-- FORM SELECT -->
            <div class="form-select">
              <label for="friends-filter-category">Filter By</label>
              <select id="friends-filter-category" name="friends_filter_category">
                <option value="0">Recently Active</option>
                <option value="1">Newest Friends</option>
                <option value="2">Alphabetical</option>
              </select>
              <!-- FORM SELECT ICON -->
              <svg class="form-select-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
              <!-- /FORM SELECT ICON -->
            </div>
            <!-- /FORM SELECT -->
          </form>
          <!-- /FORM -->
    
          <!-- FILTER TABS -->
          <div class="filter-tabs">
            <!-- FILTER TAB -->
            <div class="filter-tab active">
              <!-- FILTER TAB TEXT -->
              <p class="filter-tab-text">Recently Active</p>
              <!-- /FILTER TAB TEXT -->
            </div>
            <!-- /FILTER TAB -->
    
            <!-- FILTER TAB -->
            <div class="filter-tab">
              <!-- FILTER TAB TEXT -->
              <p class="filter-tab-text">Newest Friends</p>
              <!-- /FILTER TAB TEXT -->
            </div>
            <!-- /FILTER TAB -->
    
            <!-- FILTER TAB -->
            <div class="filter-tab">
              <!-- FILTER TAB TEXT -->
              <p class="filter-tab-text">Alphabetical</p>
              <!-- /FILTER TAB TEXT -->
            </div>
            <!-- /FILTER TAB -->
          </div>
          <!-- /FILTER TABS -->
        </div>
        <!-- /SECTION FILTERS BAR ACTIONS -->
    
        <!-- SECTION FILTERS BAR ACTIONS -->
        <div class="section-filters-bar-actions">
          <!-- VIEW ACTIONS -->
          <div class="view-actions">
            <!-- VIEW ACTION -->
            <a class="view-action text-tooltip-tft-medium" href="profile-friends.html" data-title="Big Grid">
              <!-- VIEW ACTION ICON -->
              <svg class="view-action-icon icon-big-grid-view">
                <use xlink:href="#svg-big-grid-view"></use>
              </svg>
              <!-- /VIEW ACTION ICON -->
            </a>
            <!-- /VIEW ACTION -->
    
            <!-- VIEW ACTION -->
            <a class="view-action text-tooltip-tft-medium active" href="profile-friends-small-grid.html" data-title="Small Grid">
              <!-- VIEW ACTION ICON -->
              <svg class="view-action-icon icon-small-grid-view">
                <use xlink:href="#svg-small-grid-view"></use>
              </svg>
              <!-- /VIEW ACTION ICON -->
            </a>
            <!-- /VIEW ACTION -->
    
            <!-- VIEW ACTION -->
            <a class="view-action text-tooltip-tft-medium" href="profile-friends-list.html" data-title="List">
              <!-- VIEW ACTION ICON -->
              <svg class="view-action-icon icon-list-grid-view">
                <use xlink:href="#svg-list-grid-view"></use>
              </svg>
              <!-- /VIEW ACTION ICON -->
            </a>
            <!-- /VIEW ACTION -->
          </div>
          <!-- /VIEW ACTIONS -->
        </div>
        <!-- /SECTION FILTERS BAR ACTIONS -->
      </div>
      <!-- /SECTION FILTERS BAR -->

      <!-- GRID -->
      <div class="grid grid-3-3-3-3 centered">
        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/04.jpg" alt="cover-04">
          </figure>
          <!-- /USER PREVIEW COVER -->
      
          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/05.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">12</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">NekoBebop</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text"><a href="#">www.store.com/nekoprints</a></p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/silver-s.png" alt="badge-silver-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/fcultivator-s.png" alt="badge-fcultivator-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/scientist-s.png" alt="badge-scientist-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+29</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->
      
            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">874</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">60</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">3.9k</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->
      
            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <a class="social-link small twitter" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small instagram" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-instagram">
                  <use xlink:href="#svg-instagram"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitch" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitch">
                  <use xlink:href="#svg-twitch"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small discord" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-discord">
                  <use xlink:href="#svg-discord"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /USER PREVIEW INFO -->
      
          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
      
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/15.jpg" alt="cover-15">
          </figure>
          <!-- /USER PREVIEW COVER -->

          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/02.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">13</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">Destroy Dex</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text"><a href="#">www.twitch.tv/d-destroyer</a></p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/gold-s.png" alt="badge-gold-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/age-s.png" alt="badge-age-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/verifieds-s.png" alt="badge-verifieds-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+12</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->

            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">890</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">79</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">4.6k</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->

            <!-- USER PREVIEW SOCIAL LINKS WRAP -->
            <div class="user-preview-social-links-wrap">
              <!-- USER PREVIEW SOCIAL LINKS -->
              <div id="user-preview-social-links-slider-01" class="user-preview-social-links">
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small facebook" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-facebook">
                      <use xlink:href="#svg-facebook"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->

                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small twitter" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-twitter">
                      <use xlink:href="#svg-twitter"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
      
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small instagram" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-instagram">
                      <use xlink:href="#svg-instagram"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
      
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small twitch" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-twitch">
                      <use xlink:href="#svg-twitch"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
      
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small artstation" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-artstation">
                      <use xlink:href="#svg-artstation"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
              </div>
              <!-- /USER PREVIEW SOCIAL LINKS -->
      
              <!-- SLIDER CONTROLS -->
              <div id="user-preview-social-links-slider-controls-01" class="slider-controls">
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
            <!-- /USER PREVIEW SOCIAL LINKS WRAP -->
          </div>
          <!-- /USER PREVIEW INFO -->

          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->

            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/23.jpg" alt="cover-23">
          </figure>
          <!-- /USER PREVIEW COVER -->
      
          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/03.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">16</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">Nick Grissom</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text">aka Phantom Streamer</p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/gold-s.png" alt="badge-gold-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/age-s.png" alt="badge-age-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/liked-s.png" alt="badge-liked-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+9</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->
      
            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">562</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">77</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">2.3k</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->
      
            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <a class="social-link small twitter" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitch" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitch">
                  <use xlink:href="#svg-twitch"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small youtube" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-youtube">
                  <use xlink:href="#svg-youtube"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /USER PREVIEW INFO -->
      
          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
      
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/05.jpg" alt="cover-05">
          </figure>
          <!-- /USER PREVIEW COVER -->
      
          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/07.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">26</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">Sarah Diamond</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text"><a href="#">www.diamondart.com</a></p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/platinum-s.png" alt="badge-platinum-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/sloved-s.png" alt="badge-sloved-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/warrior-s.png" alt="badge-warrior-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+32</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->
      
            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">1046</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">107</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">12.1k</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->
      
            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <a class="social-link small twitter" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small instagram" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-instagram">
                  <use xlink:href="#svg-instagram"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small patreon" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-patreon">
                  <use xlink:href="#svg-patreon"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /USER PREVIEW INFO -->
      
          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
      
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/06.jpg" alt="cover-06">
          </figure>
          <!-- /USER PREVIEW COVER -->
      
          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/04.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">6</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">Bearded Wonder</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text">aka Jack Parker</p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/silver-s.png" alt="badge-silver-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/globet-s.png" alt="badge-globet-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/liked-s.png" alt="badge-liked-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+22</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->
      
            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">97</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">44</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">608</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->
      
            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <a class="social-link small twitter" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitch" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitch">
                  <use xlink:href="#svg-twitch"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small youtube" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-youtube">
                  <use xlink:href="#svg-youtube"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small discord" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-discord">
                  <use xlink:href="#svg-discord"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /USER PREVIEW INFO -->
      
          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
      
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/08.jpg" alt="cover-08">
          </figure>
          <!-- /USER PREVIEW COVER -->
      
          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/10.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">5</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">The Green Goo</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text"><a href="#">www.ggprints.com</a></p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/bronze-s.png" alt="badge-bronze-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/age-s.png" alt="badge-age-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/caffeinated-s.png" alt="badge-caffeinated-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+7</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->
      
            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">28</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">53</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">901</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->
      
            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <a class="social-link small facebook" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-facebook">
                  <use xlink:href="#svg-facebook"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitter" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitch" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitch">
                  <use xlink:href="#svg-twitch"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /USER PREVIEW INFO -->
      
          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
      
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/09.jpg" alt="cover-09">
          </figure>
          <!-- /USER PREVIEW COVER -->
      
          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/08.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">4</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">Damian Greyson</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text">aka Samurai Stream</p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/bronze-s.png" alt="badge-bronze-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/age-s.png" alt="badge-age-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/forumsf-s.png" alt="badge-forumsf-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+2</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->
      
            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">29</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">17</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">218</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->
      
            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <a class="social-link small twitter" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitch" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitch">
                  <use xlink:href="#svg-twitch"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small discord" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-discord">
                  <use xlink:href="#svg-discord"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /USER PREVIEW INFO -->
      
          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
      
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/18.jpg" alt="cover-18">
          </figure>
          <!-- /USER PREVIEW COVER -->

          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/23.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">13</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">Rosie Sakura</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text"><a href="#">www.rosiesk.com</a></p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/gold-s.png" alt="badge-gold-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/rmachine-s.png" alt="badge-rmachine-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/globet-s.png" alt="badge-globet-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+18</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->

            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">1260</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">114</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">1.1k</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->

            <!-- USER PREVIEW SOCIAL LINKS WRAP -->
            <div class="user-preview-social-links-wrap">
              <!-- USER PREVIEW SOCIAL LINKS -->
              <div id="user-preview-social-links-slider-02" class="user-preview-social-links">
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small facebook" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-facebook">
                      <use xlink:href="#svg-facebook"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->

                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small twitter" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-twitter">
                      <use xlink:href="#svg-twitter"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
      
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small instagram" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-instagram">
                      <use xlink:href="#svg-instagram"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
      
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small twitch" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-twitch">
                      <use xlink:href="#svg-twitch"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
      
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small discord" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-discord">
                      <use xlink:href="#svg-discord"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
              </div>
              <!-- /USER PREVIEW SOCIAL LINKS -->
      
              <!-- SLIDER CONTROLS -->
              <div id="user-preview-social-links-slider-controls-02" class="slider-controls">
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
            <!-- /USER PREVIEW SOCIAL LINKS WRAP -->
          </div>
          <!-- /USER PREVIEW INFO -->

          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->

            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/22.jpg" alt="cover-22">
          </figure>
          <!-- /USER PREVIEW COVER -->

          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/19.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">5</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">Sarah Rodgers</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text">aka Raven999</p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/bronze-s.png" alt="badge-bronze-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/age-s.png" alt="badge-age-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/rulerm-s.png" alt="badge-rulerm-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+6</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->

            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">204</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">35</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">2.3k</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->

            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <a class="social-link small facebook" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-facebook">
                  <use xlink:href="#svg-facebook"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitter" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small patreon" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-patreon">
                  <use xlink:href="#svg-patreon"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small artstation" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-artstation">
                  <use xlink:href="#svg-artstation"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /USER PREVIEW INFO -->

          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->

            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/07.jpg" alt="cover-07">
          </figure>
          <!-- /USER PREVIEW COVER -->

          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/12.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">10</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">James Murdock</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text">aka Devilstream</p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/silver-s.png" alt="badge-silver-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/scientist-s.png" alt="badge-scientist-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/phantom-s.png" alt="badge-phantom-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+16</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->

            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">28</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">53</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">901</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->

            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <a class="social-link small facebook" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-facebook">
                  <use xlink:href="#svg-facebook"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small instagram" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-instagram">
                  <use xlink:href="#svg-instagram"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitch" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitch">
                  <use xlink:href="#svg-twitch"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /USER PREVIEW INFO -->

          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->

            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/10.jpg" alt="cover-10">
          </figure>
          <!-- /USER PREVIEW COVER -->

          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/09.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">27</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">Sandra Strange</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text"><a href="#">www.twitch.tv/strangestream</a></p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/platinum-s.png" alt="badge-platinum-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/ncreature-s.png" alt="badge-ncreature-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/traveller-s.png" alt="badge-traveller-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+30</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->

            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">1091</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">112</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">19.2k</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->

            <!-- USER PREVIEW SOCIAL LINKS WRAP -->
            <div class="user-preview-social-links-wrap">
              <!-- USER PREVIEW SOCIAL LINKS -->
              <div id="user-preview-social-links-slider-03" class="user-preview-social-links">
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small facebook" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-facebook">
                      <use xlink:href="#svg-facebook"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->

                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small twitter" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-twitter">
                      <use xlink:href="#svg-twitter"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
      
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small patreon" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-patreon">
                      <use xlink:href="#svg-patreon"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
      
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small twitch" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-twitch">
                      <use xlink:href="#svg-twitch"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
      
                <!-- USER PREVIEW SOCIAL LINK -->
                <div class="user-preview-social-link">
                  <!-- SOCIAL LINK -->
                  <a class="social-link small youtube" href="#">
                    <!-- SOCIAL LINK ICON -->
                    <svg class="social-link-icon icon-youtube">
                      <use xlink:href="#svg-youtube"></use>
                    </svg>
                    <!-- /SOCIAL LINK ICON -->
                  </a>
                  <!-- /SOCIAL LINK -->
                </div>
                <!-- /USER PREVIEW SOCIAL LINK -->
              </div>
              <!-- /USER PREVIEW SOCIAL LINKS -->
      
              <!-- SLIDER CONTROLS -->
              <div id="user-preview-social-links-slider-controls-03" class="slider-controls">
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
            <!-- /USER PREVIEW SOCIAL LINKS WRAP -->
          </div>
          <!-- /USER PREVIEW INFO -->

          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->

            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->

        <!-- USER PREVIEW -->
        <div class="user-preview small">
          <!-- USER PREVIEW COVER -->
          <figure class="user-preview-cover liquid">
            <img src="img/cover/02.jpg" alt="cover-02">
          </figure>
          <!-- /USER PREVIEW COVER -->

          <!-- USER PREVIEW INFO -->
          <div class="user-preview-info">
            <!-- USER SHORT DESCRIPTION -->
            <div class="user-short-description small">
              <!-- USER SHORT DESCRIPTION AVATAR -->
              <a class="user-short-description-avatar user-avatar" href="profile-timeline.html">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-100-110"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-68-74" data-src="img/avatar/15.jpg"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-84-92"></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-28-32"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-22-24"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">13</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </a>
              <!-- /USER SHORT DESCRIPTION AVATAR -->
        
              <!-- USER SHORT DESCRIPTION TITLE -->
              <p class="user-short-description-title"><a href="profile-timeline.html">Mark Wilson</a></p>
              <!-- /USER SHORT DESCRIPTION TITLE -->
        
              <!-- USER SHORT DESCRIPTION TEXT -->
              <p class="user-short-description-text">aka Redhawk</p>
              <!-- /USER SHORT DESCRIPTION TEXT -->
            </div>
            <!-- /USER SHORT DESCRIPTION -->
        
            <!-- BADGE LIST -->
            <div class="badge-list small">
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/gold-s.png" alt="badge-gold-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/mightiers-s.png" alt="badge-mightiers-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <div class="badge-item">
                <img src="img/badge/forumsf-s.png" alt="badge-forumsf-s">
              </div>
              <!-- /BADGE ITEM -->
        
              <!-- BADGE ITEM -->
              <a class="badge-item" href="profile-badges.html">
                <img src="img/badge/blank-s.png" alt="badge-blank-s">
                <!-- BADGE ITEM TEXT -->
                <p class="badge-item-text">+8</p>
                <!-- /BADGE ITEM TEXT -->
              </a>
              <!-- /BADGE ITEM -->
            </div>
            <!-- /BADGE LIST -->

            <!-- USER STATS -->
            <div class="user-stats">
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">1260</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">posts</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">114</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">friends</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
        
              <!-- USER STAT -->
              <div class="user-stat">
                <!-- USER STAT TITLE -->
                <p class="user-stat-title">1.1k</p>
                <!-- /USER STAT TITLE -->
        
                <!-- USER STAT TEXT -->
                <p class="user-stat-text">visits</p>
                <!-- /USER STAT TEXT -->
              </div>
              <!-- /USER STAT -->
            </div>
            <!-- /USER STATS -->

            <!-- SOCIAL LINKS -->
            <div class="social-links small">
              <!-- SOCIAL LINK -->
              <a class="social-link small facebook" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-facebook">
                  <use xlink:href="#svg-facebook"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitter" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitter">
                  <use xlink:href="#svg-twitter"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->

              <!-- SOCIAL LINK -->
              <a class="social-link small twitch" href="#">
                <!-- SOCIAL LINK ICON -->
                <svg class="social-link-icon icon-twitch">
                  <use xlink:href="#svg-twitch"></use>
                </svg>
                <!-- /SOCIAL LINK ICON -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
            <!-- /SOCIAL LINKS -->
          </div>
          <!-- /USER PREVIEW INFO -->

          <!-- USER PREVIEW FOOTER -->
          <div class="user-preview-footer">
            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-secondary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-add-friend">
                  <use xlink:href="#svg-add-friend"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->

            <!-- USER PREVIEW FOOTER ACTION -->
            <div class="user-preview-footer-action">
              <!-- BUTTON -->
              <p class="button void void-primary">
                <!-- BUTTON ICON -->
                <svg class="button-icon icon-comment">
                  <use xlink:href="#svg-comment"></use>
                </svg>
                <!-- /BUTTON ICON -->
              </p>
              <!-- /BUTTON -->
            </div>
            <!-- /USER PREVIEW FOOTER ACTION -->
          </div>
          <!-- /USER PREVIEW FOOTER -->
        </div>
        <!-- /USER PREVIEW -->
      </div>
      <!-- /GRID -->

      <!-- SECTION PAGER BAR -->
      <div class="section-pager-bar">
        <!-- SECTION PAGER -->
        <div class="section-pager">
          <!-- SECTION PAGER ITEM -->
          <div class="section-pager-item active">
            <!-- SECTION PAGER ITEM TEXT -->
            <p class="section-pager-item-text">01</p>
            <!-- /SECTION PAGER ITEM TEXT -->
          </div>
          <!-- /SECTION PAGER ITEM -->
    
          <!-- SECTION PAGER ITEM -->
          <div class="section-pager-item">
            <!-- SECTION PAGER ITEM TEXT -->
            <p class="section-pager-item-text">02</p>
            <!-- /SECTION PAGER ITEM TEXT -->
          </div>
          <!-- /SECTION PAGER ITEM -->
    
          <!-- SECTION PAGER ITEM -->
          <div class="section-pager-item">
            <!-- SECTION PAGER ITEM TEXT -->
            <p class="section-pager-item-text">03</p>
            <!-- /SECTION PAGER ITEM TEXT -->
          </div>
          <!-- /SECTION PAGER ITEM -->
    
          <!-- SECTION PAGER ITEM -->
          <div class="section-pager-item">
            <!-- SECTION PAGER ITEM TEXT -->
            <p class="section-pager-item-text">04</p>
            <!-- /SECTION PAGER ITEM TEXT -->
          </div>
          <!-- /SECTION PAGER ITEM -->
    
          <!-- SECTION PAGER ITEM -->
          <div class="section-pager-item">
            <!-- SECTION PAGER ITEM TEXT -->
            <p class="section-pager-item-text">05</p>
            <!-- /SECTION PAGER ITEM TEXT -->
          </div>
          <!-- /SECTION PAGER ITEM -->
    
          <!-- SECTION PAGER ITEM -->
          <div class="section-pager-item">
            <!-- SECTION PAGER ITEM TEXT -->
            <p class="section-pager-item-text">06</p>
            <!-- /SECTION PAGER ITEM TEXT -->
          </div>
          <!-- /SECTION PAGER ITEM -->
        </div>
        <!-- /SECTION PAGER -->
    
        <!-- SECTION PAGER CONTROLS -->
        <div class="section-pager-controls">
          <!-- SLIDER CONTROL -->
          <div class="slider-control left disabled">
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
        <!-- /SECTION PAGER CONTROLS -->
      </div>
      <!-- /SECTION PAGER BAR -->
</div>
@stop
@section('after_content')

@stop
@section('after_scripts')
<script data-cfasync="false" src="https://odindesignthemes.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{!! asset('theme/js/vendor/app.bundle.min.js') !!}"></script>
@stop
