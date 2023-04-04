<!DOCTYPE html>
<html lang="zh">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="viggo" />
  <title>WebStack.cc - 设计师网址导航</title>
  <meta name="keywords"
    content="UI设计,UI设计素材,设计导航,网址导航,设计资源,创意导航,创意网站导航,设计师网址大全,设计素材大全,设计师导航,UI设计资源,优秀UI设计欣赏,设计师导航,设计师网址大全,设计师网址导航,产品经理网址导航,交互设计师网址导航,www.webstack.cc">
  <meta name="description" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">
  <link rel="shortcut icon" href="./public/favicon.png">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,700,400italic">
  <link rel="stylesheet" href="./public/vendor/linecons/css/linecons.css">
  {{-- <link rel="stylesheet" href="./public/fonts/fontawesome/css/font-awesome.min.css"> --}}
  <link rel="stylesheet" href="./public/vendor/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="./public/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./public/vendor/xenon/css/xenon-core.css">
  <link rel="stylesheet" href="./public/vendor/xenon/css/xenon-components.css">
  <link rel="stylesheet" href="./public/vendor/xenon/css/xenon-skins.css">
  <link rel="stylesheet" href="./public/css/app.css">

  <script src="./public/vendor/jquery/jquery.min.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- / FB Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:url" content="http://www.webstack.cc/">
  <meta property="og:title" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">
  <meta property="og:description"
    content="UI设计,UI设计素材,设计导航,网址导航,设计资源,创意导航,创意网站导航,设计师网址大全,设计素材大全,设计师导航,UI设计资源,优秀UI设计欣赏,设计师导航,设计师网址大全,设计师网址导航,产品经理网址导航,交互设计师网址导航,www.webstack.cc">
  <meta property="og:image" content="http://webstack.cc/assets/images/webstack_banner_cn.png">
  <meta property="og:site_name" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">
  <!-- / Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">
  <meta name="twitter:description"
    content="UI设计,UI设计素材,设计导航,网址导航,设计资源,创意导航,创意网站导航,设计师网址大全,设计素材大全,设计师导航,UI设计资源,优秀UI设计欣赏,设计师导航,设计师网址大全,设计师网址导航,产品经理网址导航,交互设计师网址导航,www.webstack.cc">
  <meta name="twitter:image" content="http://www.webstack.cc/assets/images/webstack_banner_cn.png">
</head>

<body class="page-body">
  <!-- skin-white -->
  <div class="page-container">
    <div class="sidebar-menu toggle-others fixed">
      <div class="sidebar-menu-inner">
        <header class="logo-env">
          <!-- logo -->
          <div class="logo">
            <a href="./" class="logo-expanded">
              <img src="./public/images/logo@2x.png" width="100%" alt="" />
            </a>
            <a href="./" class="logo-collapsed">
              <img src="./public/images/logo-collapsed@2x.png" width="40" alt="" />
            </a>
          </div>
          <div class="mobile-menu-toggle visible-xs">
            <a href="#" data-toggle="user-info-menu">
              <i class="linecons-cog"></i>
            </a>
            <a href="#" data-toggle="mobile-menu">
              <i class="fa-bars"></i>
            </a>
          </div>
        </header>
        @section('sidebar')
          <ul id="main-menu" class="main-menu">
            @isset($contents)
              @foreach ($contents as $category)
                @php
                  $hasChildren = count($category->children) > 0;
                @endphp
                <li>
                  <a href="#{{ $category->name }}" class="{{ $hasChildren ? '' : 'smooth' }}">
                    <i class="{{ $category->ico }}"></i>
                    <span class="title">{{ $category->name }}</span>
                  </a>

                  @if ($hasChildren)
                    <ul>
                      @foreach ($category->children as $sub)
                        <li>
                          <a href="#{{ $sub['name'] }}" class="smooth">
                            <span class="title">{{ $sub['name'] }}</span>
                            @if (isset($sub['hot']) && $sub['hot'])
                              <span class="label label-pink pull-right hidden-collapsed">Hot</span>
                            @endif
                          </a>
                        </li>
                      @endforeach
                    </ul>
                  @endif
                </li>
              @endforeach
            @endisset
            <li>
              <a href="./about">
                <i class="linecons-heart"></i>
                <span class="tooltip-blue">关于本站</span>
                <span class="label label-Primary pull-right hidden-collapsed">♥︎</span>
              </a>
            </li>
          </ul>
        @show
      </div>
    </div>

    <div class="main-content">
      @section('header')
        <header class="navbar user-info-navbar" role="navigation">
          <!-- User Info, Notifications and Menu Bar -->
          <!-- Left links for user info navbar -->
          <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
              <a href="#" data-toggle="sidebar">
                <i class="fa-bars"></i>
              </a>
            </li>
            @foreach ($branches as $branch)
              <li class="hidden-sm hidden-xs hover-line">
                <a href="./{{ $branch->slug }}">
                  <i class="{{ $branch->ico }}"></i>
                  {{ $branch->name }}
                </a>
              </li>
            @endforeach
          </ul>
          <ul class="user-info-menu right-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
              <a href="/admin">
                <img src="./public/vendor/dcat-admin/images/logo.png" alt="" width="18">
                Admin
              </a>
            </li>
            <li class="hidden-sm hidden-xs">
              <a href="https://github.com/langnang/WebStack" target="_blank">
                <i class="fa-github"></i> GitHub
              </a>
            </li>
          </ul>
          <!-- <a href="https://github.com/WebStackPage/WebStackPage.github.io" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a> -->
        </header>
      @show

      <main style="min-height: calc(100vh - 122px);">
        @section('content')
          @isset($contents)
            @foreach ($contents as $category)
              @php
                // $subSites = $category->children->filter(function ($item, $index) {
                //     return in_array($item->type, ['site', 'icon']);
                // });
                // $subCategories = $category->children->filter(function ($item, $index) {
                //     return in_array($item->type, ['category']);
                // });
              @endphp
              @if (count($category->contents) > 0)
                <div class="card" id="{{ $category['name'] }}">
                  <h4 class="text-gray">
                    <i class="linecons-tag" style="margin-right: 7px;"></i>
                    {{ $category['name'] }}
                  </h4>
                  <div class="row">
                    @foreach ($category->contents as $site)
                      <div class="col-xs-6 col-md-3">
                        <div class="xe-widget xe-conversations box2 label-info"
                          @isset($site['url'])
                           onclick="window.open('{{ $site['url'] }}', '_blank')"
                           @endisset
                          data-toggle="tooltip" data-placement="bottom" title=""
                          data-original-title="{{ isset($site['url']) ? $site['url'] : $site['ico'] }}">
                          <div class="xe-comment-entry">
                            <div class="xe-user-img">
                              @if ($site['type'] == 'site')
                                <img data-src="{{ $site['ico'] }}" class="lozad img-circle img-thumbnail"
                                  width="48">
                              @elseif ($site['type'] == 'icon')
                                <i class="{{ $site['ico'] }}"></i>
                              @endif
                            </div>
                            <div class="xe-comment">
                              <div class="xe-user-name overflowClip_1">
                                <strong>{{ isset($site['title']) ? $site['title'] : $site['ico'] }}</strong>
                              </div>
                              <p class="overflowClip_2">{{ isset($site['text']) ? $site['text'] : '' }}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              @endif
              @if (count($category->children) > 0)
                @foreach ($category->children as $subCategory)
                  <div class="card" id="{{ $subCategory['name'] }}">
                    <h4 class="text-gray">
                      <i class="linecons-tag" style="margin-right: 7px;"></i>
                      {{ $subCategory['name'] }}
                    </h4>
                    <div class="row">
                      @foreach ($subCategory->contents as $site)
                        <div class="col-sm-3">
                          <div class="xe-widget xe-conversations box2 label-info"
                            @isset($site['url'])

                             onclick="window.open('{{ $site['url'] }}', '_blank')"
                             @endisset
                            data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="{{ isset($site['url']) ? $site['url'] : $site['ico'] }}">
                            <div class="xe-comment-entry">
                              <div class="xe-user-img">
                                @if ($site['type'] == 'site')
                                  <img data-src="{{ $site['ico'] }}" class="lozad img-circle img-thumbnail"
                                    width="48">
                                @elseif ($site['type'] == 'icon')
                                  <i class="{{ $site['ico'] }}"></i>
                                @endif
                              </div>
                              <div class="xe-comment">
                                <div href="#" class="xe-user-name overflowClip_1">
                                  <strong>{{ isset($site['title']) ? $site['title'] : $site['ico'] }}</strong>
                                </div>
                                <p class="overflowClip_2">{{ isset($site['text']) ? $site['text'] : '' }}
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                  </div>
                @endforeach
              @endif
            @endforeach
          @endisset
        @show
      </main>
      <!-- Main Footer -->
      <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
      <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
      <!-- Or class "fixed" to  always fix the footer to the end of page -->
      <footer class="main-footer sticky footer-type-1">
        <div class="footer-inner">
          <!-- Add your copyright text here -->
          <div class="footer-text">
            &copy; 2017-2023
            <a href="./about"><strong>WebStack</strong></a> design by <a href="https://www.viggoz.com"
              target="_blank"><strong>Viggo</strong></a>
            <!--  - Purchase for only <strong>23$</strong> -->
          </div>
          <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
          <div class="go-up">
            <a href="https://fontawesome.com/icons" target="_blank">
              FontAwesome
              <i class="fa fa-arrow-up-right-from-square"></i>
            </a>
            &nbsp;
            <a href="https://v3.bootcss.com/components/#glyphicons" target="_blank">
              Glyphicons
              <i class="fa fa-arrow-up-right-from-square"></i>
            </a>
            &nbsp;
            <a href="#" rel="go-top">
              <i class="fa-angle-up"></i>
            </a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- 锚点平滑移动 -->
  <script type="text/javascript">
    $(document).ready(function() {
      //img lazy loaded
      const observer = lozad();
      observer.observe();

      $(document).on('click', '.has-sub', function() {
        var _this = $(this)
        if (!$(this).hasClass('expanded')) {
          setTimeout(function() {
            _this.find('ul').attr("style", "")
          }, 300);

        } else {
          $('.has-sub ul').each(function(id, ele) {
            var _that = $(this)
            if (_this.find('ul')[0] != ele) {
              setTimeout(function() {
                _that.attr("style", "")
              }, 300);
            }
          })
        }
      })
      $('.user-info-menu .hidden-sm').click(function() {
        if ($('.sidebar-menu').hasClass('collapsed')) {
          $('.has-sub.expanded > ul').attr("style", "")
        } else {
          $('.has-sub.expanded > ul').show()
        }
      })
      $("#main-menu li ul li").click(function() {
        $(this).siblings('li').removeClass('active'); // 删除其他兄弟元素的样式
        $(this).addClass('active'); // 添加当前元素的样式
      });
      $("a.smooth").click(function(ev) {
        ev.preventDefault();

        public_vars.$mainMenu.add(public_vars.$sidebarProfile).toggleClass('mobile-is-visible');
        ps_destroy();
        $("html, body").animate({
          scrollTop: $($(this).attr("href")).offset().top - 30
        }, {
          duration: 500,
          easing: "swing"
        });
      });
      return false;
    });

    var href = "";
    var pos = 0;
    $("a.smooth").click(function(e) {
      $("#main-menu li").each(function() {
        $(this).removeClass("active");
      });
      $(this).parent("li").addClass("active");
      e.preventDefault();
      href = $(this).attr("href");
      pos = $(href).position().top - 30;
    });
  </script>
  <!-- Bottom Scripts -->
  <script src="./public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="./public/vendor/TweenMax/TweenMax.min.js"></script>
  <script src="./public/vendor/resizeable.js"></script>
  <script src="./public/vendor/autosize/autosize.min.js"></script>
  <script src="./public/vendor/joinable.js"></script>
  <script src="./public/vendor/xenon/js/xenon-api.js"></script>
  <script src="./public/vendor/xenon/js/xenon-toggles.js"></script>
  <!-- JavaScripts initializations and stuff -->
  <script src="./public/vendor/xenon/js/xenon-custom.js"></script>
  <script src="./public/vendor/lozad/lozad.min.js"></script>
</body>

</html>
