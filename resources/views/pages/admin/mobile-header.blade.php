<!-- Mobile Header -->
<div class="mobile-header">
          <div class="container-fluid">
            <div class="d-flex">
              <div class="app-sidebar__toggle" data-toggle="sidebar">
                <a class="open-toggle" href="#"
                  ><i class="fe fe-align-left"></i
                ></a>
                <a class="close-toggle" href="#"><i class="fe fe-x"></i></a>
              </div>
              <a class="header-brand" href="index.html">
                <img
                  src="assets/images/brand/logo.png"
                  class="header-brand-img desktop-logo"
                  alt="logo"
                />
              </a>
              <a class="header-brand header-brand1" href="index.html">
                <img
                  src="assets/images/brand/logo-white.png"
                  class="header-brand-img desktop-logo"
                  alt="logo"
                /> </a
              ><!-- LOGO -->
              <div class="d-flex order-lg-2 ml-auto header-right-icons">
                <button
                  class="navbar-toggler navresponsive-toggler d-md-none"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarSupportedContent-4"
                  aria-controls="navbarSupportedContent-4"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span
                    class="navbar-toggler-icon fe fe-more-vertical text-white"
                  ></span>
                </button>
                <div class="dropdown profile-1">
                  <a
                    href="#"
                    data-toggle="dropdown"
                    class="nav-link pr-2 leading-none d-flex"
                  >
                    <span>
                      <img
                        src="assets/images/users/15.jpg"
                        alt="profile-user"
                        class="avatar profile-user brround cover-image"
                      />
                    </span>
                  </a>
                  <div
                    class="
                      dropdown-menu dropdown-menu-right dropdown-menu-arrow
                    "
                  >
                    <div class="drop-heading">
                      <div class="text-center">
                        <h5 class="text-dark mb-0">Devid Antoni</h5>
                        <small class="text-muted">Administrator</small>
                      </div>
                    </div>
                    <div class="dropdown-divider m-0"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon mdi mdi-account-outline"></i>
                      Profile
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon mdi mdi-settings"></i> Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="float-right"></span>
                      <i class="dropdown-icon mdi mdi-message-outline"></i>
                      Inbox
                    </a>
                    <a class="dropdown-item" href="#">
                      <i
                        class="dropdown-icon mdi mdi-comment-check-outline"
                      ></i>
                      Message
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon mdi mdi-compass-outline"></i> Need
                      help?
                    </a>
                    <a class="dropdown-item" href="login.html">
                      <i class="dropdown-icon mdi mdi-logout-variant"></i> Sign
                      out
                    </a>
                  </div>
                </div>
                <div class="dropdown d-md-flex header-settings">
                  <a
                    href="#"
                    class="nav-link icon"
                    data-toggle="sidebar-right"
                    data-target=".sidebar-right"
                  >
                    <i class="fe fe-align-right"></i>
                  </a>
                </div>
                <!-- SIDE-MENU -->
              </div>
            </div>
          </div>
        </div>
        <div
          class="
            mb-1
            navbar navbar-expand-lg
            responsive-navbar
            navbar-dark
            d-md-none
            bg-white
          "
        >
          <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
            <div class="d-flex order-lg-2 ml-auto">
              <div class="d-sm-flex">
                <a href="#" class="nav-link icon search-btn">
                  <i class="fe fe-search"></i>
                </a>
                <div class="search-area">
                  <div class="close-btn pull-right">
                    <button class="btn"><i class="fe fe-x"></i></button>
                  </div>
                  <form>
                    <div class="row">
                      <div class="input-group form-btn">
                        <div class="input-group-append">
                          <button class="btn" type="button" id="button-addon3">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search here..."
                          aria-label="Recipient's username"
                        />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- SEARCH -->
              <div class="dropdown d-md-flex">
                <a class="nav-link icon full-screen-link nav-link-bg">
                  <i class="fe fe-maximize fullscreen-button"></i>
                </a>
              </div>
              <!-- FULL-SCREEN -->
              <div class="dropdown d-md-flex notifications">
                <a class="nav-link icon" data-toggle="dropdown">
                  <i class="fe fe-bell"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                >
                  <div class="notifications-menu">
                    <a class="dropdown-item d-flex pb-3" href="#">
                      <div class="fs-16 text-success mr-3">
                        <i class="fa fa-thumbs-o-up"></i>
                      </div>
                      <div class="">
                        <strong>Someone likes our posts.</strong>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex pb-3" href="#">
                      <div class="fs-16 text-primary mr-3">
                        <i class="fa fa-commenting-o"></i>
                      </div>
                      <div class="">
                        <strong>3 New Comments.</strong>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex pb-3" href="#">
                      <div class="fs-16 text-danger mr-3">
                        <i class="fa fa-cogs"></i>
                      </div>
                      <div class="">
                        <strong>Server Rebooted</strong>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item text-center"
                    >View all Notification</a
                  >
                </div>
              </div>
              <!-- NOTIFICATIONS -->
              <div class="dropdown d-md-flex message">
                <a class="nav-link icon text-center" data-toggle="dropdown">
                  <i class="fe fe-mail"></i>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"
                >
                  <div class="message-menu">
                    <a class="dropdown-item d-flex pb-3" href="#">
                      <span
                        class="
                          avatar avatar-md
                          brround
                          mr-3
                          align-self-center
                          cover-image
                        "
                        data-image-src="assets/images/users/1.jpg"
                      ></span>
                      <div>
                        <strong>Madeleine</strong> Hey! there I' am
                        available....
                        <div class="small text-muted">3 hours ago</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex pb-3" href="#">
                      <span
                        class="
                          avatar avatar-md
                          brround
                          mr-3
                          align-self-center
                          cover-image
                        "
                        data-image-src="assets/images/users/12.jpg"
                      ></span>
                      <div>
                        <strong>Anthony</strong> New product Launching...
                        <div class="small text-muted">5 hour ago</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex pb-3" href="#">
                      <span
                        class="
                          avatar avatar-md
                          brround
                          mr-3
                          align-self-center
                          cover-image
                        "
                        data-image-src="assets/images/users/4.jpg"
                      ></span>
                      <div>
                        <strong>Olivia</strong> New Schedule Realease......
                        <div class="small text-muted">45 mintues ago</div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex pb-3" href="#">
                      <span
                        class="
                          avatar avatar-md
                          brround
                          mr-3
                          align-self-center
                          cover-image
                        "
                        data-image-src="assets/images/users/15.jpg"
                      ></span>
                      <div>
                        <strong>Sanderson</strong> New Schedule Realease......
                        <div class="small text-muted">2 days ago</div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item text-center"
                    >See all Messages</a
                  >
                </div>
              </div>
              <!-- MESSAGE-BOX -->
            </div>
          </div>
        </div>
        <!-- /Mobile Header -->