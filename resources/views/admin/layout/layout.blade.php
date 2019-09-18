<!DOCTYPE html>
<!--
* CoreUI Pro - Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io/pro/
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* License (https://coreui.io/pro/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Online Thesis</title>
    <!-- Icons-->
    <link href="{{asset('admin/vendors/@coreui/icons/css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown d-md-down-none">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
            <div class="dropdown-header text-center">
              <strong>You have 5 notifications</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="icon-user-follow text-success"></i> New user registered</a>
            <a class="dropdown-item" href="#">
              <i class="icon-user-unfollow text-danger"></i> User deleted</a>
            <a class="dropdown-item" href="#">
              <i class="icon-chart text-info"></i> Sales report is ready</a>
            <a class="dropdown-item" href="#">
              <i class="icon-basket-loaded text-primary"></i> New client</a>
            <a class="dropdown-item" href="#">
              <i class="icon-speedometer text-warning"></i> Server overloaded</a>
            <div class="dropdown-header text-center">
              <strong>Server</strong>
            </div>
            <a class="dropdown-item" href="#">
              <div class="text-uppercase mb-1">
                <small>
                  <b>CPU Usage</b>
                </small>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
              <small class="text-muted">348 Processes. 1/4 Cores.</small>
            </a>
            <a class="dropdown-item" href="#">
              <div class="text-uppercase mb-1">
                <small>
                  <b>Memory Usage</b>
                </small>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
              <small class="text-muted">11444GB/16384MB</small>
            </a>
            <a class="dropdown-item" href="#">
              <div class="text-uppercase mb-1">
                <small>
                  <b>SSD 1 Usage</b>
                </small>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
              <small class="text-muted">243GB/256GB</small>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown d-md-down-none">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="icon-list"></i>
            <span class="badge badge-pill badge-warning">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
            <div class="dropdown-header text-center">
              <strong>You have 5 pending tasks</strong>
            </div>
            <a class="dropdown-item" href="#">
              <div class="small mb-1">Upgrade NPM & Bower
                <span class="float-right">
                  <strong>0%</strong>
                </span>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
            </a>
            <a class="dropdown-item" href="#">
              <div class="small mb-1">ReactJS Version
                <span class="float-right">
                  <strong>25%</strong>
                </span>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
            </a>
            <a class="dropdown-item" href="#">
              <div class="small mb-1">VueJS Version
                <span class="float-right">
                  <strong>50%</strong>
                </span>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
            </a>
            <a class="dropdown-item" href="#">
              <div class="small mb-1">Add new layouts
                <span class="float-right">
                  <strong>75%</strong>
                </span>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
            </a>
            <a class="dropdown-item" href="#">
              <div class="small mb-1">Angular 2 Cli Version
                <span class="float-right">
                  <strong>100%</strong>
                </span>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
            </a>
            <a class="dropdown-item text-center" href="#">
              <strong>View all tasks</strong>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown d-md-down-none">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="icon-envelope-letter"></i>
            <span class="badge badge-pill badge-info">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
            <div class="dropdown-header text-center">
              <strong>You have 4 messages</strong>
            </div>
            <a class="dropdown-item" href="#">
              <div class="message">
                <div class="py-3 mr-3 float-left">
                  <div class="avatar">
                    <img class="img-avatar" src="img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                    <span class="avatar-status badge-success"></span>
                  </div>
                </div>
                <div>
                  <small class="text-muted">John Doe</small>
                  <small class="text-muted float-right mt-1">Just now</small>
                </div>
                <div class="text-truncate font-weight-bold">
                  <span class="fa fa-exclamation text-danger"></span> Important message</div>
                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
              </div>
            </a>
            <a class="dropdown-item" href="#">
              <div class="message">
                <div class="py-3 mr-3 float-left">
                  <div class="avatar">
                    <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                    <span class="avatar-status badge-warning"></span>
                  </div>
                </div>
                <div>
                  <small class="text-muted">John Doe</small>
                  <small class="text-muted float-right mt-1">5 minutes ago</small>
                </div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
              </div>
            </a>
            <a class="dropdown-item" href="#">
              <div class="message">
                <div class="py-3 mr-3 float-left">
                  <div class="avatar">
                    <img class="img-avatar" src="img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                    <span class="avatar-status badge-danger"></span>
                  </div>
                </div>
                <div>
                  <small class="text-muted">John Doe</small>
                  <small class="text-muted float-right mt-1">1:52 PM</small>
                </div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
              </div>
            </a>
            <a class="dropdown-item" href="#">
              <div class="message">
                <div class="py-3 mr-3 float-left">
                  <div class="avatar">
                    <img class="img-avatar" src="img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                    <span class="avatar-status badge-info"></span>
                  </div>
                </div>
                <div>
                  <small class="text-muted">John Doe</small>
                  <small class="text-muted float-right mt-1">4:03 PM</small>
                </div>
                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
              </div>
            </a>
            <a class="dropdown-item text-center" href="#">
              <strong>View all messages</strong>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-bell-o"></i> Updates
              <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-tasks"></i> Tasks
              <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-comments"></i> Comments
              <span class="badge badge-warning">42</span>
            </a>
            <div class="dropdown-header text-center">
              <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-dark">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-file"></i> Projects
              <span class="badge badge-primary">42</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>

    <div class="app-body">

        <div class="sidebar">
          <nav class="sidebar-nav">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <i class="nav-icon icon-speedometer"></i> Dashboard
                  <span class="badge badge-info">NEW</span>
                </a>
              </li>
              <li class="nav-title">Theme</li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('audio_lessons.index')}}">
                  <i class="nav-icon icon-drop"></i>Audio Lessons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('speakers.index')}}">
                  <i class="nav-icon icon-drop"></i>Speakers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="colors.html">
                  <i class="nav-icon icon-drop"></i> Colors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="typography.html">
                  <i class="nav-icon icon-pencil"></i> Typography</a>
              </li>
              <li class="nav-title">Components</li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon icon-puzzle"></i> Base</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="base/breadcrumb.html">
                      <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/cards.html">
                      <i class="nav-icon icon-puzzle"></i> Cards</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/carousel.html">
                      <i class="nav-icon icon-puzzle"></i> Carousel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/collapse.html">
                      <i class="nav-icon icon-puzzle"></i> Collapse</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/jumbotron.html">
                      <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/list-group.html">
                      <i class="nav-icon icon-puzzle"></i> List group</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/navs.html">
                      <i class="nav-icon icon-puzzle"></i> Navs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/pagination.html">
                      <i class="nav-icon icon-puzzle"></i> Pagination</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/popovers.html">
                      <i class="nav-icon icon-puzzle"></i> Popovers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/progress.html">
                      <i class="nav-icon icon-puzzle"></i> Progress</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/scrollspy.html">
                      <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/spinners.html">
                      <i class="nav-icon icon-puzzle"></i> Spinners
                      <span class="badge badge-info">NEW</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/switches.html">
                      <i class="nav-icon icon-puzzle"></i> Switches</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/tabs.html">
                      <i class="nav-icon icon-puzzle"></i> Tabs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/toasts.html">
                      <i class="nav-icon icon-puzzle"></i> Toasts
                      <span class="badge badge-info">NEW</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="base/tooltips.html">
                      <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon icon-cursor"></i> Buttons</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="buttons/buttons.html">
                      <i class="nav-icon icon-cursor"></i> Buttons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="buttons/brand-buttons.html">
                      <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="buttons/button-group.html">
                      <i class="nav-icon icon-cursor"></i> Buttons Group</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="buttons/dropdowns.html">
                      <i class="nav-icon icon-cursor"></i> Dropdowns</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="buttons/loading-buttons.html">
                      <i class="nav-icon icon-cursor"></i> Loading Buttons
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="charts.html">
                  <i class="nav-icon icon-pie-chart"></i> Charts</a>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon fa fa-code"></i> Editors</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="editors/code-editor.html">
                      <i class="nav-icon icon-note"></i> Code Editor
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="editors/markdown-editor.html">
                      <i class="nav-icon fa fa-code"></i> Markdown
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="editors/text-editor.html">
                      <i class="nav-icon icon-note"></i> Rich Text Editor
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon icon-note"></i> Forms</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="forms/basic-forms.html">
                      <i class="nav-icon icon-note"></i> Basic Forms</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms/advanced-forms.html">
                      <i class="nav-icon icon-note"></i> Advanced
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="forms/validation.html">
                      <i class="nav-icon icon-note"></i> Validation
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="google-maps.html">
                  <i class="nav-icon icon-map"></i> Google Maps
                  <span class="badge badge-danger">PRO</span>
                </a>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon icon-star"></i> Icons</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="icons/coreui-icons.html">
                      <i class="nav-icon icon-star"></i> CoreUI Icons
                      <span class="badge badge-success">NEW</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="icons/flags.html">
                      <i class="nav-icon icon-star"></i> Flags</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="icons/font-awesome.html">
                      <i class="nav-icon icon-star"></i> Font Awesome
                      <span class="badge badge-secondary">4.7</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="icons/simple-line-icons.html">
                      <i class="nav-icon icon-star"></i> Simple Line Icons</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon icon-bell"></i> Notifications</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="notifications/alerts.html">
                      <i class="nav-icon icon-bell"></i> Alerts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="notifications/badge.html">
                      <i class="nav-icon icon-bell"></i> Badge</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="notifications/modals.html">
                      <i class="nav-icon icon-bell"></i> Modals</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="notifications/toastr.html">
                      <i class="nav-icon icon-bell"></i> Toastr
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon icon-energy"></i> Plugins</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="plugins/calendar.html">
                      <i class="nav-icon icon-calendar"></i> Calendar
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="plugins/draggable-cards.html">
                      <i class="nav-icon icon-cursor-move"></i> Draggable
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="plugins/sliders.html">
                      <i class="nav-icon icon-equalizer"></i> Sliders
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="plugins/spinners.html">
                      <i class="nav-icon fa fa-spinner"></i> Spinners
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon icon-list"></i> Tables</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="tables/tables.html">
                      <i class="nav-icon icon-list"></i> Standard Tables</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="tables/datatables.html">
                      <i class="nav-icon icon-list"></i> DataTables
                      <span class="badge badge-danger">PRO</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="widgets.html">
                  <i class="nav-icon icon-calculator"></i> Widgets
                  <span class="badge badge-info">NEW</span>
                </a>
              </li>
              <li class="nav-divider"></li>
              <li class="nav-title">Extras</li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon icon-star"></i> Pages</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                    <a class="nav-link" href="login.html" target="_top">
                      <i class="nav-icon icon-star"></i> Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.html" target="_top">
                      <i class="nav-icon icon-star"></i> Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="404.html" target="_top">
                      <i class="nav-icon icon-star"></i> Error 404</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="500.html" target="_top">
                      <i class="nav-icon icon-star"></i> Error 500</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                  <i class="nav-icon icon-layers"></i> Apps</a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                      <i class="nav-icon icon-speech"></i> Invoicing</a>
                    <ul class="nav-dropdown-items">
                      <li class="nav-item">
                        <a class="nav-link" href="apps/invoicing/invoice.html">
                          <i class="nav-icon icon-speech"></i> Invoice
                          <span class="badge badge-danger">PRO</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                      <i class="nav-icon icon-speech"></i> Email</a>
                    <ul class="nav-dropdown-items">
                      <li class="nav-item">
                        <a class="nav-link" href="apps/email/inbox.html">
                          <i class="nav-icon icon-speech"></i> Inbox
                          <span class="badge badge-danger">PRO</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="apps/email/message.html">
                          <i class="nav-icon icon-speech"></i> Message
                          <span class="badge badge-danger">PRO</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="apps/email/compose.html">
                          <i class="nav-icon icon-speech"></i> Compose
                          <span class="badge badge-danger">PRO</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-divider"></li>
              <li class="nav-title">Labels</li>
              <li class="nav-item d-compact-none d-minimized-none">
                <a class="nav-label" href="#">
                  <i class="fa fa-circle text-danger"></i> Label danger</a>
              </li>
              <li class="nav-item d-compact-none d-minimized-none">
                <a class="nav-label" href="#">
                  <i class="fa fa-circle text-info"></i> Label info</a>
              </li>
              <li class="nav-item d-compact-none d-minimized-none">
                <a class="nav-label" href="#">
                  <i class="fa fa-circle text-warning"></i> Label warning</a>
              </li>
              <li class="nav-divider"></li>
              <li class="nav-title">System Utilization</li>
              <li class="nav-item px-3 d-compact-none d-minimized-none">
                <div class="text-uppercase mb-1">
                  <small>
                    <b>CPU Usage</b>
                  </small>
                </div>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
              </li>
              <li class="nav-item px-3 d-compact-none d-minimized-none">
                <div class="text-uppercase mb-1">
                  <small>
                    <b>Memory Usage</b>
                  </small>
                </div>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>
              </li>
              <li class="nav-item px-3 mb-3 d-compact-none d-minimized-none">
                <div class="text-uppercase mb-1">
                  <small>
                    <b>SSD 1 Usage</b>
                  </small>
                </div>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>
              </li>
            </ul>
          </nav>
          <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>



        <main class="main">
        @yield('content')
        

        </main>

      </div>
    </div>
    

    <footer class="app-footer">
      <div>
        <a href="https://coreui.io/pro/">CoreUI Pro</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io/pro/">CoreUI Pro</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('admin/vendors/jquery/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendors/popper.js/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendors/pace-progress/js/pace.min.js')}}"></script>
    <script src="{{asset('admin/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('admin/vendors/@coreui/coreui-pro/js/coreui.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('admin/vendors/chart.js/js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>

    <script src="{{asset('admin/vendors/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin/js/datatables.js')}}"></script>

  </body>
</html>
