<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
          <div class="sidebar-user-settings">
            <div class="app-sidebar__user mb-4 mt-4">
              <div class="dropdown user-pro-body text-center">
                <a href="#" class="user-box">
                  <div class="user-pic">
                    <span
                      class="avatar avatar-md brround cover-image"
                      data-image-src="assets/images/users/15.jpg"
                    >
                      <span class="avatar-status bg-primary"></span
                      ><span class="avatar-border"></span>
                    </span>
                  </div>
                  <div class="user-info">
                    <h5 class="mb-1 font-weight-bold text-dark">
                      Devid Antoni
                    </h5>
                    <span class="text-muted app-sidebar__user-name text-sm"
                      >Administrator</span
                    >
                  </div>
                </a>
              </div>
            </div>
          </div>
          <ul class="side-menu">
            <li><h3>FLAIRA</h3></li>
            <li>
              <a class="side-menu__item" href="index.html"
                ><span class="side-menu__label">Dashboard</span
                ><i class="side-menu__icon fe fe-airplay"></i
              ></a>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fa fa-angle-right"></i
                ><span class="side-menu__label">Layouts</span
                ><i class="side-menu__icon fe fe-layout"></i
              ></a>
              <ul class="slide-menu">
                <li class="sub-slide">
                  <a
                    class="sub-side-menu__item"
                    data-toggle="sub-slide"
                    href="#"
                    ><span class="sub-side-menu__label"
                      ><i class="sidemenu-icon fe fe-chevrons-right"></i
                      >Horizontal Versions</span
                    ><i class="sub-angle fa fa-angle-right"></i
                  ></a>
                  <ul class="sub-slide-menu">
                    <li>
                      <a class="sub-slide-item" href="horizontal.html"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i
                        >horizontal</a
                      >
                    </li>
                    <li>
                      <a class="sub-slide-item" href="horizontal-boxed.html"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i
                        >Boxed</a
                      >
                    </li>
                    <li>
                      <a
                        class="sub-slide-item"
                        href="horizontal-centerlogo.html"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i
                        >Centerlogo</a
                      >
                    </li>
                    <li>
                      <a
                        class="sub-slide-item"
                        href="horizontal-centerlogo-boxed.html"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i
                        >Centerlogo-Boxed</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="sub-slide">
                  <a
                    class="sub-side-menu__item"
                    data-toggle="sub-slide"
                    href="#"
                    ><span class="sub-side-menu__label"
                      ><i class="sidemenu-icon fe fe-chevrons-right"></i
                      >Vertical Versions</span
                    ><i class="sub-angle fa fa-angle-right"></i
                  ></a>
                  <ul class="sub-slide-menu">
                    <li>
                      <a class="sub-slide-item" href="vertical.html"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i
                        >Vertical</a
                      >
                    </li>
                    <li>
                      <a class="sub-slide-item" href="vertical-boxed.html"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i
                        >Boxed</a
                      >
                    </li>
                    <li>
                      <a class="sub-slide-item" href="vertical-closed.html"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i
                        >Closed</a
                      >
                    </li>
                    <li>
                      <a class="sub-slide-item" href="vertical-closedboxed.html"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i
                        >Closed-Boxed</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><h3>Quản lý</h3></li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Danh mục</span
                ><i class="side-menu__icon fe fe-package"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="cards.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>Thêm danh mục</a
                  >
                </li>
                <li>
                  <a href="calendar.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>Danh sách danh mục</a
                  >
                </li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Sản phẩm</span
                ><i class="side-menu__icon fe fe-grid"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="alerts.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Thêm sản phẩm</a
                  >
                </li>
                <li>
                  <a  class="slide-item" href="{{route('products.index')}}"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Danh sách sản phẩm</a
                  >
                </li>
                
              </ul>
            </li>
             <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Thương hiệu</span
                ><i class="side-menu__icon fe fe-layers"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="alerts.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Thêm thương hiệu</a
                  >
                </li>
                <li>
                  <a href="buttons.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Danh sách thương hiệu</a
                  >
                </li>
                
              </ul>
            </li>
            <li><h3>Charts& Tables</h3></li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Charts</span
                ><i class="side-menu__icon fe fe-activity"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="chart-chartist.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Chart
                    Js</a
                  >
                </li>
                <li>
                  <a href="chart-flot.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Flot
                    Charts</a
                  >
                </li>
                <li>
                  <a href="chart-echart.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    ECharts</a
                  >
                </li>
                <li>
                  <a href="chart-morris.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Morris
                    Charts</a
                  >
                </li>
                <li>
                  <a href="chart-nvd3.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Nvd3
                    Charts</a
                  >
                </li>
                <li>
                  <a href="charts.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> C3 Bar
                    Charts</a
                  >
                </li>
                <li>
                  <a href="chart-line.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> C3 Line
                    Charts</a
                  >
                </li>
                <li>
                  <a href="chart-donut.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> C3 Donut
                    Charts</a
                  >
                </li>
                <li>
                  <a href="chart-pie.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> C3 Pie
                    charts</a
                  >
                </li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Tables</span
                ><i class="side-menu__icon fe fe-calendar"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="tables.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Default
                    table</a
                  >
                </li>
                <li>
                  <a href="datatable.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Data
                    Tables</a
                  >
                </li>
              </ul>
            </li>
            <li><h3>Forms</h3></li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Forms</span
                ><i class="side-menu__icon fe fe-file"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="form-elements.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Form
                    Elements</a
                  >
                </li>
                <li>
                  <a href="wysiwyag.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Form
                    Editor</a
                  >
                </li>
                <li>
                  <a href="form-wizard.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Form
                    Wizard</a
                  >
                </li>
              </ul>
            </li>
            <li><h3>Icons & Pages</h3></li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Icons</span
                ><i class="side-menu__icon fe fe-shield"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="icons.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Font
                    Awesome</a
                  >
                </li>
                <li>
                  <a href="icons2.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Material
                    Design Icons</a
                  >
                </li>
                <li>
                  <a href="icons3.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Simple
                    Line Icons</a
                  >
                </li>
                <li>
                  <a href="icons4.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Feather
                    Icons</a
                  >
                </li>
                <li>
                  <a href="icons5.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Ionic
                    Icons</a
                  >
                </li>
                <li>
                  <a href="icons6.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Flag
                    Icons</a
                  >
                </li>
                <li>
                  <a href="icons7.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> pe7
                    Icons</a
                  >
                </li>
                <li>
                  <a href="icons8.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Themify
                    Icons</a
                  >
                </li>
                <li>
                  <a href="icons9.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Typicons
                    Icons</a
                  >
                </li>
                <li>
                  <a href="icons10.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Weather
                    Icons</a
                  >
                </li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Pages</span
                ><i class="side-menu__icon fe fe-copy"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="profile.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Profile</a
                  >
                </li>
                <li>
                  <a href="editprofile.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Edit
                    Profile</a
                  >
                </li>
                <li>
                  <a href="email.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Mail-Inbox</a
                  >
                </li>
                <li>
                  <a href="emailservices.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Mail-Compose</a
                  >
                </li>
                <li>
                  <a href="gallery.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Gallery</a
                  >
                </li>
                <li>
                  <a href="about.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> About
                    Company</a
                  >
                </li>
                <li>
                  <a href="services.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Services</a
                  >
                </li>
                <li>
                  <a href="faq.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> FAQS</a
                  >
                </li>
                <li>
                  <a href="terms.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Terms</a
                  >
                </li>
                <li>
                  <a href="invoice.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Invoice</a
                  >
                </li>
                <li>
                  <a href="pricing.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Pricing
                    Tables</a
                  >
                </li>
                <li>
                  <a href="blog.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Blog</a
                  >
                </li>
                <li>
                  <a href="emptypage.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Empty
                    Page</a
                  >
                </li>
                <li>
                  <a href="construction.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Under
                    Construction</a
                  >
                </li>
              </ul>
            </li>
            <li><h3>E-Commerce</h3></li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">E-Commerce</span
                ><i class="side-menu__icon fe fe-shopping-cart"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="shop.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Shop</a
                  >
                </li>
                <li>
                  <a href="shop-description.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Product
                    Details</a
                  >
                </li>
                <li>
                  <a href="cart.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Shopping
                    Cart</a
                  >
                </li>
              </ul>
            </li>
            <li><h3>Custom & Error</h3></li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Custom Pages</span
                ><i class="side-menu__icon fe fe-clipboard"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="login.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Login</a
                  >
                </li>
                <li>
                  <a href="register.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>
                    Register</a
                  >
                </li>
                <li>
                  <a href="forgot-password.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Forgot
                    Password</a
                  >
                </li>
                <li>
                  <a href="lockscreen.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> Lock
                    screen</a
                  >
                </li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fe fe-chevron-right"></i
                ><span class="side-menu__label">Error Pages</span
                ><i class="side-menu__icon fe fe-alert-triangle"></i
              ></a>
              <ul class="slide-menu">
                <li>
                  <a href="error400.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> 400</a
                  >
                </li>
                <li>
                  <a href="error401.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> 401</a
                  >
                </li>
                <li>
                  <a href="error403.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> 403</a
                  >
                </li>
                <li>
                  <a href="error404.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> 404</a
                  >
                </li>
                <li>
                  <a href="error500.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> 500</a
                  >
                </li>
                <li>
                  <a href="error503.html" class="slide-item"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i> 503</a
                  >
                </li>
              </ul>
            </li>
            <li class="slide">
              <a class="side-menu__item" data-toggle="slide" href="#"
                ><i class="angle fa fa-angle-right"></i
                ><span class="side-menu__label">Submenus</span
                ><i class="side-menu__icon fe fe-menu"></i
              ></a>
              <ul class="slide-menu">
                <li class="sub-slide">
                  <a
                    class="sub-side-menu__item"
                    data-toggle="sub-slide"
                    href="#"
                    ><span class="sub-side-menu__label"
                      ><i class="sidemenu-icon fe fe-chevrons-right"></i>Level
                      1</span
                    ><i class="sub-angle fa fa-angle-right"></i
                  ></a>
                  <ul class="sub-slide-menu">
                    <li>
                      <a class="sub-slide-item" href="#"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i>Level
                        1.0</a
                      >
                    </li>
                    <li>
                      <a class="sub-slide-item" href="#"
                        ><i class="sidemenu-icon fe fe-chevrons-right"></i>Level
                        1.1</a
                      >
                    </li>
                    <li class="sub-slide2">
                      <a
                        class="sub-side-menu__item"
                        href="#"
                        data-toggle="sub-slide2"
                        ><span class="sub-side-menu__label2"
                          ><i class="sidemenu-icon fe fe-chevrons-right">
                            Level 1.2</i
                          ></span
                        ><i class="sub-angle2 fa fa-angle-right"></i
                      ></a>
                      <ul class="sub-slide-menu2">
                        <li>
                          <a href="#" class="sub-slide-item2"
                            ><i class="sidemenu-icon fe fe-chevrons-right"></i
                            >Level 1.2.1</a
                          >
                        </li>
                        <li>
                          <a href="#" class="sub-slide-item2"
                            ><i class="sidemenu-icon fe fe-chevrons-right"></i
                            >Level 1.2.2</a
                          >
                        </li>
                        <li>
                          <a href="#" class="sub-slide-item2"
                            ><i class="sidemenu-icon fe fe-chevrons-right"></i
                            >Level 1.2.3</a
                          >
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="slide-item" href="#"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>Level
                    2</a
                  >
                </li>
                <li>
                  <a class="slide-item" href="#"
                    ><i class="sidemenu-icon fe fe-chevrons-right"></i>Level
                    3</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </aside>