<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebStackSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    $meta_columns = [
      [
        [
          "name" => "推荐类",
          "slug" => "default",
          "ico" => "glyphicon glyphicon-home",
        ],
        [
          "name" => "工具类",
          "slug" => "toolkit",
          "ico" => "fa fa-toolbox",
        ],
        [
          "name" => "设计师",
          "slug" => "designer",
          "ico" => "fa-bars",
        ],
      ],
      [
        [
          "name" => "常用推荐",
          "ico" => "linecons-star",
          "parent" => 1,
        ],
        [
          "name" => "社区资讯",
          "ico" => "linecons-doc",
          "parent" => 1,
        ],
        [
          "name" => "灵感采集",
          "ico" => "linecons-lightbulb",
          "parent" => 1,
        ],
        [
          "name" => "素材资源",
          "ico" => "linecons-thumbs-up",
          "parent" => 1,
        ],
        [
          "name" => "常用工具",
          "ico" => "linecons-diamond",
          "parent" => 1,
        ],
        [
          "name" => "学习教程",
          "ico" => "linecons-pencil",
          "parent" => 1,
        ],
        [
          "name" => "UED团队",
          "ico" => "linecons-user",
          "parent" => 1,
        ],
        [
          "name" => "发现产品",
          "ico" => "linecons-tag",
          "parent" => 6,
        ],
        [
          "name" => "界面灵感",
          "ico" => "linecons-tag",
          "parent" => 6,
        ],
        [
          "name" => "网页灵感",
          "ico" => "linecons-tag",
          "parent" => 6,
        ],
        [
          "name" => "图标素材",
          "ico" => "linecons-tag",
          "parent" => 7,
        ],
        [
          "name" => "LOGO设计",
          "ico" => "linecons-tag",
          "parent" => 7,
        ],
        [
          "name" => "平面素材",
          "ico" => "linecons-tag",
          "parent" => 7,
        ],
        [
          "name" => "UI资源",
          "ico" => "linecons-tag",
          "parent" => 7,
        ],
        [
          "name" => "Sketch资源",
          "ico" => "linecons-tag",
          "parent" => 7,
        ],
        [
          "name" => "字体资源",
          "ico" => "linecons-tag",
          "parent" => 7,
        ],
        [
          "name" => "Mockup",
          "ico" => "linecons-tag",
          "parent" => 7,
        ],
        [
          "name" => "摄影图库",
          "ico" => "linecons-tag",
          "parent" => 7,
        ],
        [
          "name" => "PPT资源",
          "ico" => "linecons-tag",
          "parent" => 7,
        ],
        [
          "name" => "图形创意",
          "ico" => "linecons-tag",
          "parent" => 8,
        ],
        [
          "name" => "界面设计",
          "ico" => "linecons-tag",
          "parent" => 8,
        ],
        [
          "name" => "交互动效",
          "ico" => "linecons-tag",
          "parent" => 8,
        ],
        [
          "name" => "在线配色",
          "ico" => "linecons-tag",
          "parent" => 8,
        ],
        [
          "name" => "在线工具",
          "ico" => "linecons-tag",
          "parent" => 8,
        ],
        [
          "name" => "Chrome插件",
          "ico" => "linecons-tag",
          "parent" => 8,
        ],
        [
          "name" => "设计规范",
          "ico" => "linecons-tag",
          "parent" => 9,
        ],
        [
          "name" => "视频教程",
          "ico" => "linecons-tag",
          "parent" => 9,
        ],
        [
          "name" => "设计文章",
          "ico" => "linecons-tag",
          "parent" => 9,
        ],
        [
          "name" => "设计电台",
          "ico" => "linecons-tag",
          "parent" => 9,
        ],
        [
          "name" => "交互设计",
          "ico" => "linecons-tag",
          "parent" => 9,
        ],
      ],
    ];
    DB::table('webstack_metas')->insert(array_map(function ($item, $index) {
      return array_merge($item, [
        "mid" => $index + 1,
        "type" => "branch",
        "status" => "public",
      ]);
    }, $meta_columns[0], array_keys($meta_columns[0])));

    DB::table('webstack_metas')->insert(array_map(function ($item, $index) {
      return array_merge($item, [
        "mid" => $index + 4,
        "type" => "category",
        "status" => "public",
      ]);
    }, $meta_columns[1], array_keys($meta_columns[1])));
    $content_columns = [
      [
        "mid" => 4,
        "ico" => "linecons-star",
        "name" => "常用推荐",
        "type" => "category",
        "children" => [
          [
            "url" => "https://dribbble.com/",
            "ico" => "https://ph-static.imgix.net/ph-favicon-coral.ico",
            "title" => "Dribbble",
            "type" => "site",
            "text" => "全球UI设计师作品分享平台。"
          ],
          [
            "url" => "https://behance.net/",
            "title" => "Behance",
            "type" => "site",
            "text" => "Adobe旗下的设计师交流平台，来自世界各地的设计师在这里分享自己的作品。"
          ],
          [
            "url" => "http://www.ui.cn/",
            "title" => "UI中国",
            "type" => "site",
            "text" => "图形交互与界面设计交流、作品展示、学习平台。"
          ],
          [
            "url" => "http://www.zcool.com.cn/",
            "ico" => 'https://static.zcool.cn/git_z/z/site/favicon.ico',
            "title" => "站酷",
            "type" => "site",
            "text" => "中国人气设计师互动平台"
          ],
          [
            "url" => "https://www.pinterest.com/",
            "title" => "Pinterest",
            "type" => "site",
            "text" => "全球美图收藏采集站"
          ],
          [
            "url" => "http://huaban.com/",
            "title" => "花瓣",
            "type" => "site",
            "text" => "收集灵感,保存有用的素材"
          ],
          [
            "url" => "https://medium.com/",
            "title" => "Medium",
            "type" => "site",
            "text" => "高质量设计文章"
          ],
          [
            "url" => "http://www.uisdc.com/",
            "title" => "优设",
            "type" => "site",
            "text" => "设计师交流学习平台"
          ],
          [
            "url" => "https://www.producthunt.com/",
            "title" => "Producthunt",
            "type" => "site",
            "text" => "发现新鲜有趣的产品"
          ],
          [
            "url" => "https://www.youtube.com/",
            "title" => "Youtube",
            "type" => "site",
            "text" => "全球最大的学习分享平台"
          ],
          [
            "url" => "https://www.google.com/",
            "title" => "Google",
            "type" => "site",
            "text" => "全球最大的UI学习分享平台"
          ],
          [
            "url" => "https://www.aliyun.com/minisite/goods?userCode=xtct5egx&share_source=copy_link",
            'ico' => 'https://img.alicdn.com/tfs/TB1_ZXuNcfpK1RjSZFOXXa6nFXa-32-32.ico',
            "title" => "阿里云",
            "type" => "site",
            "text" => "点击领取2000元限量云产品优惠券"
          ],
          [
            "url" => "https://www.gulusucai.com/",
            "title" => "咕噜素材",
            "type" => "site",
            "text" => "质量很高的设计素材网站（推荐）"
          ],
          [
            "url" => "https://xiyou4you.us/r/?s=13731627",
            'ico' => "https://xiyou4you.us/static/favicon.ico",
            "title" => "西游-科学上网",
            "type" => "site",
            "text" => "优秀的科学上网（略贵，但是贼稳，点击注册领取优惠券）"
          ],
          [
            "url" => "https://www.link360.top/",
            "title" => "SS梯子",
            "type" => "site",
            "text" => "SS梯子-科学上网（实惠，但是不太稳）"
          ],
          [
            "url" => "https://www.shejizhoukan.com/",
            "title" => "设计周刊",
            "type" => "site",
            "text" => "最新设计资讯（每天更新）"
          ],
          [
            "url" => "https://www.ziticangku.com/",
            "title" => "字体仓库",
            "type" => "site",
            "text" => "最全的免费商用字体库"
          ],
          [
            "url" => "https://eleduck.com/",
            "title" => "电鸭社区",
            "type" => "site",
            "text" => "国内最早的远程工作社区，也是互联网工作者们的聚集地，非常适合设计开发小伙伴关注"
          ]
        ]
      ],
      [
        "mid" => 5,
        "ico" => "linecons-doc",
        "name" => "社区资讯",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.leiphone.com/",
            "title" => "雷锋网",
            "type" => "site",
            "text" => "人工智能和智能硬件领域的互联网科技媒体"
          ],
          [
            "url" => "http://36kr.com/",
            "title" => "36kr",
            "type" => "site",
            "text" => "创业资讯、科技新闻"
          ],
          [
            "url" => "https://www.digitaling.com/",
            "title" => "数英网",
            "type" => "site",
            "text" => "数字媒体及职业招聘网站"
          ],
          [
            "url" => "http://www.lieyunwang.com/",
            "title" => "猎云网",
            "type" => "site",
            "text" => "互联网创业项目推荐和创业创新资讯"
          ],
          [
            "url" => "http://www.woshipm.com/",
            "title" => "人人都是产品经理",
            "type" => "site",
            "text" => "产品经理、产品爱好者学习交流平台"
          ],
          [
            "url" => "https://www.zaodula.com/",
            "title" => "互联网早读课",
            "type" => "site",
            "text" => "互联网行业深度阅读与学习平台"
          ],
          [
            "url" => "http://www.chanpin100.com/",
            "title" => "产品壹佰",
            "type" => "site",
            "text" => "为产品经理爱好者提供最优质的产品资讯、原创内容和相关视频课程"
          ],
          [
            "url" => "http://www.pmcaff.com/",
            "title" => "PMCAFF",
            "type" => "site",
            "text" => "中国第一产品经理人气组织，专注于研究互联网产品"
          ],
          [
            "url" => "http://www.iyunying.org/",
            "title" => "爱运营",
            "type" => "site",
            "text" => "网站运营人员学习交流，专注于网站产品运营管理、淘宝运营。"
          ],
          [
            "url" => "http://www.niaogebiji.com/",
            "title" => "鸟哥笔记",
            "type" => "site",
            "text" => "移动互联网第一干货平台"
          ],
          [
            "url" => "http://www.gtn9.com/",
            "title" => "古田路9号",
            "type" => "site",
            "text" => "国内专业品牌创意平台"
          ],
          [
            "url" => "http://www.uigreat.com/",
            "title" => "优阁网",
            "type" => "site",
            "text" => "UI设计师学习交流社区"
          ]
        ]
      ],
      [
        "mid" => 11,
        "ico" => "linecons-tag",
        "name" => "发现产品",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.producthunt.com/",
            "title" => "Producthunt",
            "type" => "site",
            "text" => "发现新鲜有趣的产品"
          ],
          [
            "url" => "http://next.36kr.com/posts",
            "title" => "NEXT",
            "type" => "site",
            "text" => "不错过任何一个新产品"
          ],
          [
            "url" => "https://sspai.com/",
            "title" => "少数派",
            "type" => "site",
            "text" => "高品质数字消费指南"
          ],
          [
            "url" => "http://liqi.io/",
            "title" => "利器",
            "type" => "site",
            "text" => "创造者和他们的工具"
          ],
          [
            "url" => "http://today.itjuzi.com/",
            "title" => "Today",
            "type" => "site",
            "text" => "为身边的新产品喝彩"
          ],
          [
            "url" => "https://faxian.appinn.com/",
            "title" => "小众软件",
            "type" => "site",
            "text" => "在这里发现更多有趣的应用"
          ]
        ]
      ],
      [
        "mid" => 12,
        "ico" => "linecons-tag",
        "name" => "界面灵感",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.pttrns.com/",
            "title" => "Pttrns",
            "type" => "site",
            "text" => "Check out the finest collection of design patterns, resources, mobile apps and inspiration"
          ],
          [
            "url" => "http://collectui.com/",
            "title" => "Collect UI",
            "type" => "site",
            "text" => "Daily inspiration collected from daily ui archive and beyond."
          ],
          [
            "url" => "http://ui.uigreat.com/",
            "title" => "UI uigreat",
            "type" => "site",
            "text" => "APP界面截图参考"
          ],
          [
            "url" => "http://androidniceties.tumblr.com/",
            "title" => "Android Niceties",
            "type" => "site",
            "text" => "A collection of screenshots encompassing some of the most beautiful looking Android apps."
          ]
        ]
      ],
      [
        "mid" => 13,
        "ico" => "linecons-tag",
        "name" => "网页灵感",
        "type" => "category",
        "hot" => true,
        "children" => [
          [
            "url" => "https://www.awwwards.com/",
            "title" => "Awwwards",
            "type" => "site",
            "text" => "Awwwards are the Website Awards that recognize and promote the talent and effort of the best developers, designers and web agencies in the world."
          ],
          [
            "url" => "https://www.cssdesignawards.com/",
            "title" => "CSS Design Awards",
            "type" => "site",
            "text" => "Website Awards & Inspiration - CSS Gallery"
          ],
          [
            "url" => "https://thefwa.com/",
            "title" => "The FWA",
            "type" => "site",
            "text" => "FWA - showcasing innovation every day since 2000"
          ],
          [
            "url" => "http://www.ecommercefolio.com/",
            "title" => "Ecommercefolio",
            "type" => "site",
            "text" => "Only the Best Ecommerce Design Inspiration"
          ],
          [
            "url" => "http://www.lapa.ninja/",
            "title" => "Lapa",
            "type" => "site",
            "text" => "The best landing page design inspiration from around the web."
          ],
          [
            "url" => "http://reeoo.com/",
            "title" => "Reeoo",
            "type" => "site",
            "text" => "web design inspiration and website gallery"
          ],
          [
            "url" => "https://designmunk.com/",
            "title" => "Designmunk",
            "type" => "site",
            "text" => "Best Homepage Design Inspiration"
          ],
          [
            "url" => "https://bestwebsite.gallery/",
            "title" => "Best Websites Gallery",
            "type" => "site",
            "text" => "Website Showcase Inspiration | Best Websites Gallery"
          ],
          [
            "url" => "http://www.pages.xyz/",
            "title" => "Pages",
            "type" => "site",
            "text" => "Curated directory of the best Pages"
          ],
          [
            "url" => "https://sitesee.co/",
            "title" => "SiteSee",
            "type" => "site",
            "text" => "SiteSee is a curated gallery of beautiful, modern websites collections."
          ],
          [
            "url" => "https://www.siteinspire.com/",
            "title" => "Site Inspire",
            "type" => "site",
            "text" => "A CSS gallery and showcase of the best web design inspiration."
          ],
          [
            "url" => "http://web.uedna.com/",
            "title" => "WebInspiration",
            "type" => "site",
            "text" => "网页设计欣赏,全球顶级网页设计"
          ],
          [
            "url" => "http://navnav.co/",
            "title" => "navnav",
            "type" => "site",
            "text" => "A ton of CSS, jQuery, and JavaScript responsive navigation examples, demos, and tutorials from all over the web."
          ],
          [
            "url" => "https://www.reallygoodux.io/",
            "title" => "Really Good UX",
            "type" => "site",
            "text" => "A library of screenshots and examples of really good UX. Brought to you by "
          ]
        ]
      ],
      [
        "mid" => 14,
        "ico" => "linecons-tag",
        "name" => "图标素材",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.iconfinder.com",
            "title" => "Iconfinder",
            "type" => "site",
            "text" => "2,100,000+ free and premium vector icons."
          ],
          [
            "url" => "http://www.iconfont.cn/",
            "title" => "iconfont",
            "type" => "site",
            "text" => "阿里巴巴矢量图标库"
          ],
          [
            "url" => "https://iconmonstr.com/",
            "title" => "iconmonstr",
            "type" => "site",
            "text" => "Free simple icons for your next project"
          ],
          [
            "url" => "http://www.iconarchive.com/",
            "title" => "Icon Archive",
            "type" => "site",
            "text" => "Search 590,912 free icons"
          ],
          [
            "url" => "https://findicons.com/",
            "title" => "FindIcons",
            "type" => "site",
            "text" => "Search through 300,000 free icons"
          ],
          [
            "url" => "https://icomoon.io/app/",
            "title" => "IcoMoonApp",
            "type" => "site",
            "text" => "Icon Font, SVG, PDF &amp; PNG Generator"
          ],
          [
            "url" => "http://www.easyicon.net/",
            "title" => "easyicon",
            "type" => "site",
            "text" => "PNG、ICO、ICNS格式图标搜索、图标下载服务"
          ],
          [
            "url" => "https://www.flaticon.com/",
            "title" => "flaticon",
            "type" => "site",
            "text" => "634,000+ Free vector icons in SVG, PSD, PNG, EPS format or as ICON FONT."
          ],
          [
            "url" => "http://ui-cloud.com/",
            "title" => "UICloud",
            "type" => "site",
            "text" => "The largest user interface design database in the world."
          ],
          [
            "url" => "https://material.io/icons/",
            "title" => "Material icons",
            "type" => "site",
            "text" => "Access over 900 material system icons, available in a variety of sizes and densities, and as a web font."
          ],
          [
            "url" => "fontawesomeicon",
            "title" => "Font Awesome Icon",
            "type" => "site",
            "text" => "The complete set of 675 icons in Font Awesome"
          ],
          [
            "url" => "http://ionicons.com/",
            "title" => "ion icons",
            "type" => "site",
            "text" => "The premium icon font for Ionic Framework."
          ],
          [
            "url" => "http://simplelineicons.com/",
            "title" => "Simpleline Icons",
            "type" => "site",
            "text" => "Simple line Icons pack"
          ]
        ]
      ],
      [
        "mid" => 15,
        "ico" => "linecons-tag",
        "name" => "LOGO设计",
        "type" => "category",
        "children" => [
          [
            "url" => "http://www.iconsfeed.com/",
            "title" => "Iconsfeed",
            "type" => "site",
            "text" => "iOS icons gallery"
          ],
          [
            "url" => "http://iosicongallery.com/",
            "title" => "iOS Icon Gallery",
            "type" => "site",
            "text" => "Showcasing beautiful icon designs from the iOS App Store"
          ],
          [
            "url" => "https://worldvectorlogo.com/",
            "title" => "World Vector Logo",
            "type" => "site",
            "text" => "Brand logos free to download"
          ],
          [
            "url" => "http://instantlogosearch.com/",
            "title" => "Instant Logo Search",
            "type" => "site",
            "text" => "Search & download thousands of logos instantly"
          ]
        ]
      ],
      [
        "mid" => 16,
        "ico" => "linecons-tag",
        "name" => "平面素材",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.gulusucai.com/",
            "title" => "咕噜素材",
            "type" => "site",
            "text" => "质量很高的设计素材网站（良心推荐）"
          ],
          [
            "url" => "https://wallhalla.com/",
            "title" => "wallhalla",
            "type" => "site",
            "text" => "Find awesome high quality wallpapers for desktop and mobile in one place."
          ],
          [
            "url" => "https://365psd.com/",
            "title" => "365PSD",
            "type" => "site",
            "text" => "Free PSD &amp; Graphics, Illustrations"
          ],
          [
            "url" => "https://medialoot.com/",
            "title" => "Medialoot",
            "type" => "site",
            "text" => "Free &amp; Premium Design Resources &mdash; Medialoot"
          ],
          [
            "url" => "http://www.58pic.com/",
            "title" => "千图网",
            "type" => "site",
            "text" => "专注免费设计素材下载的网站"
          ],
          [
            "url" => "http://588ku.com/",
            "title" => "千库网",
            "type" => "site",
            "text" => "免费png图片背景素材下载"
          ],
          [
            "url" => "http://www.ooopic.com/",
            "title" => "我图网",
            "type" => "site",
            "text" => "我图网,提供图片素材及模板下载,专注正版设计作品交易"
          ],
          [
            "url" => "http://90sheji.com/",
            "title" => "90设计",
            "type" => "site",
            "text" => "电商设计（淘宝美工）千图免费淘宝素材库"
          ],
          [
            "url" => "http://www.nipic.com/",
            "title" => "昵图网",
            "type" => "site",
            "text" => "原创素材共享平台"
          ],
          [
            "url" => "http://www.lanrentuku.com/",
            "title" => "懒人图库",
            "type" => "site",
            "text" => "懒人图库专注于提供网页素材下载"
          ],
          [
            "url" => "http://so.ui001.com/",
            "title" => "素材搜索",
            "type" => "site",
            "text" => "设计素材搜索聚合"
          ],
          [
            "url" => "http://psefan.com/",
            "title" => "PS饭团网",
            "type" => "site",
            "text" => "不一样的设计素材库！让自己的设计与众不同！"
          ],
          [
            "url" => "http://www.sccnn.com/",
            "title" => "素材中国",
            "type" => "site",
            "text" => "免费素材共享平台"
          ],
          [
            "url" => "https://www.freepik.com/",
            "title" => "freepik",
            "type" => "site",
            "text" => "More than a million free vectors, PSD, photos and free icons."
          ]
        ]
      ],
      [
        "mid" => 17,
        "ico" => "linecons-tag",
        "name" => "UI资源",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.gulusucai.com/",
            "title" => "咕噜素材",
            "type" => "site",
            "text" => "质量很高的设计素材网站（良心推荐）"
          ],
          [
            "url" => "https://freebiesbug.com/",
            "title" => "Freebiesbug",
            "type" => "site",
            "text" => "Hand-picked resources for web designer and developers, constantly updated."
          ],
          [
            "url" => "https://freebiesupply.com/",
            "title" => "Freebie Supply",
            "type" => "site",
            "text" => "Free Resources For Designers"
          ],
          [
            "url" => "https://www.yrucd.com/",
            "title" => "云瑞",
            "type" => "site",
            "text" => "优秀设计资源的分享网站"
          ],
          [
            "url" => "https://xituqu.com/",
            "title" => "稀土区",
            "type" => "site",
            "text" => "优质设计开发资源分享"
          ],
          [
            "url" => "https://ui8.net/",
            "title" => "ui8",
            "type" => "site",
            "text" => "UI Kits, Wireframe Kits, Templates, Icons and More"
          ],
          [
            "url" => "https://www.uplabs.com/",
            "title" => "uplabs",
            "type" => "site",
            "text" => "Daily resources for product designers & developers"
          ],
          [
            "url" => "http://www.uikit.me/",
            "title" => "UIkit.me",
            "type" => "site",
            "text" => "最便捷新鲜的uikit资源下载网站"
          ],
          [
            "url" => "http://www.fribbble.com/",
            "title" => "Fribbble",
            "type" => "site",
            "text" => "Free PSD files and other free design resources by Dribbblers."
          ],
          [
            "url" => "http://principlerepo.com/",
            "title" => "PrincipleRepo",
            "type" => "site",
            "text" => "Free, High Quality Principle Resources"
          ],
          [
            "url" => "https://designmodo.com/",
            "title" => "Designmodo",
            "type" => "site",
            "text" => "Web Design Blog and Shop"
          ]
        ]
      ],
      [
        "mid" => 18,
        "ico" => "linecons-tag",
        "name" => "Sketch资源",
        "type" => "category",
        "children" => [
          [
            "url" => "https://sketchapp.com/",
            "title" => "Sketch",
            "type" => "site",
            "text" => "The digital design toolkit"
          ],
          [
            "url" => "http://utom.design/measure/",
            "title" => "Sketch Measure",
            "type" => "site",
            "text" => "Friendly user interface offers you a more intuitive way of making marks."
          ],
          [
            "url" => "https://www.sketchappsources.com/",
            "title" => "Sketch App Sources",
            "type" => "site",
            "text" => "Free design resources and plugins - Icons, UI Kits, Wireframes, iOS, Android Templates for Sketch"
          ],
          [
            "url" => "http://www.sketch.im/",
            "title" => "Sketch.im",
            "type" => "site",
            "text" => "Sketch 相关资源汇聚"
          ],
          [
            "url" => "http://sketchhunt.com/",
            "title" => "Sketch Hunt",
            "type" => "site",
            "text" => "Sketch Hunt is an independent blog sharing gems in learning, plugins &amp; design tools for fans of Sketch app."
          ],
          [
            "url" => "http://www.sketchcn.com/",
            "title" => "Sketch中文网",
            "type" => "site",
            "text" => "分享最新的Sketch中文手册"
          ],
          [
            "url" => "https://awesome-sket.ch/",
            "title" => "Awesome Sketch Plugins",
            "type" => "site",
            "text" => "A collection of really useful Sketch plugins."
          ],
          [
            "url" => "https://www.sketchcasts.net/",
            "title" => "Sketchcasts",
            "type" => "site",
            "text" => "Learn Sketch Train your design skills with a weekly video tutorial"
          ]
        ]
      ],
      [
        "mid" => 19,
        "ico" => "linecons-tag",
        "name" => "字体资源",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.ziticangku.com/",
            "title" => "字体仓库",
            "type" => "site",
            "text" => "最全的免费商用字体库"
          ],
          [
            "url" => "https://fonts.google.com/",
            "title" => "Google Font",
            "type" => "site",
            "text" => "Making the web more beautiful, fast, and open through great typography"
          ],
          [
            "url" => "https://typekit.com/",
            "title" => "Typekit",
            "type" => "site",
            "text" => "Quality fonts from the world’s best foundries."
          ],
          [
            "url" => "http://www.foundertype.com/",
            "title" => "方正字库",
            "type" => "site",
            "text" => "方正字库官方网站"
          ],
          [
            "url" => "http://ziticq.com/",
            "title" => "字体传奇网",
            "type" => "site",
            "text" => "中国首个字体品牌设计师交流网"
          ],
          [
            "url" => "https://www.fontsquirrel.com/",
            "title" => "Fontsquirrel",
            "type" => "site",
            "text" => "FREE fonts for graphic designers"
          ],
          [
            "url" => "https://www.urbanfonts.com/",
            "title" => "Urban Fonts",
            "type" => "site",
            "text" => "Download Free Fonts and Free Dingbats."
          ],
          [
            "url" => "http://www.losttype.com/",
            "title" => "Lost Type",
            "type" => "site",
            "text" => "Lost Type is a Collaborative Digital Type Foundry"
          ],
          [
            "url" => "https://fonts2u.com/",
            "title" => "FONTS2U",
            "type" => "site",
            "text" => "Download free fonts for Windows and Macintosh."
          ],
          [
            "url" => "http://www.fontex.org/",
            "title" => "Fontex",
            "type" => "site",
            "text" => "Free Fonts to Download + Premium Typefaces"
          ],
          [
            "url" => "http://fontm.com/",
            "title" => "FontM",
            "type" => "site",
            "text" => "Free Fonts"
          ],
          [
            "url" => "http://www.myfonts.com/",
            "title" => "My Fonts",
            "type" => "site",
            "text" => "Fonts for Print, Products & Screens"
          ],
          [
            "url" => "https://www.dafont.com/",
            "title" => "Da Font",
            "type" => "site",
            "text" => "Archive of freely downloadable fonts."
          ],
          [
            "url" => "https://www.onlinewebfonts.com/",
            "title" => "OnlineWebFonts",
            "type" => "site",
            "text" => "WEB Free Fonts for Windows and Mac / Font free Download"
          ],
          [
            "url" => "http://www.abstractfonts.com/",
            "title" => "Abstract Fonts",
            "type" => "site",
            "text" => "Abstract Fonts (13,866 free fonts)"
          ]
        ]
      ],
      [
        "mid" => 20,
        "ico" => "linecons-tag",
        "name" => "Mockup",
        "type" => "category",
        "children" => [
          [
            "url" => "https://mockup.zone/",
            "title" => "MockupZone",
            "type" => "site",
            "text" => "Mockup Zone is an online store where you can find free and premium PSD mockup files to show your designs in a professional way."
          ],
          [
            "url" => "http://dunnnk.com/",
            "title" => "Dunnnk",
            "type" => "site",
            "text" => " Generate Product Mockups For Free"
          ],
          [
            "url" => "http://www.graphberry.com/",
            "title" => "Graphberry",
            "type" => "site",
            "text" => "Free design resources, Mockups, PSD web templates, Icons"
          ],
          [
            "url" => "http://threed.io/",
            "title" => "Threed",
            "type" => "site",
            "text" => "Generate 3D Mockups right in your Browser"
          ],
          [
            "url" => "https://free.lstore.graphics/",
            "title" => "Mockup World",
            "type" => "site",
            "text" => "The best free Mockups from the Web"
          ],
          [
            "url" => "https://free.lstore.graphics/",
            "title" => "Lstore",
            "type" => "site",
            "text" => "Exclusive mindblowing freebies for designers and developers"
          ],
          [
            "url" => "https://www.pixeden.com/",
            "title" => "pixeden",
            "type" => "site",
            "text" => "free web resources and graphic design templates."
          ],
          [
            "url" => "http://forgraphictm.com/",
            "title" => "For Graphic TM",
            "type" => "site",
            "text" => "High Quality PSD Mockups for Graphic Designers."
          ]
        ]
      ],
      [
        "mid" => 21,
        "ico" => "linecons-tag",
        "name" => "摄影图库",
        "type" => "category",
        "children" => [
          [
            "url" => "https://unsplash.com/",
            "title" => "Unsplash",
            "type" => "site",
            "text" => "Beautiful, free photos."
          ],
          [
            "url" => "https://visualhunt.com/",
            "title" => "visualhunt",
            "type" => "site",
            "text" => "100% Free High Quality Photos"
          ],
          [
            "url" => "https://librestock.com/",
            "title" => "librestock",
            "type" => "site",
            "text" => "65,084 high quality do-what-ever-you-want stock photos"
          ],
          [
            "url" => "https://pixabay.com/",
            "title" => "pixabay",
            "type" => "site",
            "text" => "可在任何地方使用的免费图片和视频"
          ],
          [
            "url" => "https://www.splitshire.com/",
            "title" => "SplitShire",
            "type" => "site",
            "text" => "Free Stock Photos and Videos for commercial use."
          ],
          [
            "url" => "https://stocksnap.io/",
            "title" => "StockSnap",
            "type" => "site",
            "text" => "Beautiful free stock photos"
          ],
          [
            "url" => "http://albumarium.com/",
            "title" => "albumarium",
            "type" => "site",
            "text" => "The best place to find & share beautiful images"
          ],
          [
            "url" => "https://myphotopack.com/",
            "title" => "myphotopack",
            "type" => "site",
            "text" => "A free photo pack just for you. Every month."
          ],
          [
            "url" => "http://notaselfie.com/",
            "title" => "Notaselfie",
            "type" => "site",
            "text" => "Photos that happen along the way. You can use the images anyway you like. Have fun!"
          ],
          [
            "url" => "http://papers.co/",
            "title" => "papers",
            "type" => "site",
            "text" => "Wallpapers Every Hour!Hand collected :)"
          ],
          [
            "url" => "http://stokpic.com/",
            "title" => "stokpic",
            "type" => "site",
            "text" => "Free Stock Photos For Commercial Use"
          ],
          [
            "url" => "https://55mm.co/visuals",
            "title" => "55mm",
            "type" => "site",
            "text" => "Use our FREE photos to tell your story! "
          ],
          [
            "url" => "http://thestocks.im/",
            "title" => "thestocks",
            "type" => "site",
            "text" => "Use our FREE photos to tell your story! "
          ],
          [
            "url" => "http://freenaturestock.com/",
            "title" => "freenaturestock",
            "type" => "site",
            "text" => "Exclusive mindblowing freebies for designers and developers"
          ],
          [
            "url" => "https://negativespace.co/",
            "title" => "negativespace",
            "type" => "site",
            "text" => "Beautiful, High-Resolution Free Stock Photos"
          ],
          [
            "url" => "https://gratisography.com/",
            "title" => "gratisography",
            "type" => "site",
            "text" => "Free high-resolution pictures you can use on your personal and commercial projects, free of copyright restrictions. "
          ],
          [
            "url" => "http://imcreator.com/free",
            "title" => "imcreator",
            "type" => "site",
            "text" => "A curated collection of free web design resources, all for commercial use."
          ],
          [
            "url" => "http://www.lifeofpix.com/",
            "title" => "lifeofpix",
            "type" => "site",
            "text" => "Free high resolution photography"
          ],
          [
            "url" => "https://skitterphoto.com/",
            "title" => "skitterphoto",
            "type" => "site",
            "text" => "Free Stock Photos for Creative Professionals"
          ],
          [
            "url" => "https://mmtstock.com/",
            "title" => "mmtstock",
            "type" => "site",
            "text" => "Free photos for commercial use"
          ],
          [
            "url" => "https://skitterphoto.com/",
            "title" => "skitterphoto",
            "type" => "site",
            "text" => "a place to find, show and share public domain photos"
          ],
          [
            "url" => "https://magdeleine.co/browse/",
            "title" => "magdeleine",
            "type" => "site",
            "text" => "HAND-PICKED FREE PHOTOS FOR YOUR INSPIRATION"
          ],
          [
            "url" => "http://jeshoots.com/",
            "title" => "jeshoots",
            "type" => "site",
            "text" => "New Free Photos & Mockups in to your Inbox!"
          ],
          [
            "url" => "https://www.hdwallpapers.net",
            "title" => "hdwallpapers",
            "type" => "site",
            "text" => "High Definition Wallpapers & Desktop Backgrounds"
          ],
          [
            "url" => "http://publicdomainarchive.com/",
            "title" => "publicdomainarchive",
            "type" => "site",
            "text" => "New 100% Free Stock Photos. Every. Single. Week."
          ]
        ]
      ],
      [
        "mid" => 22,
        "ico" => "linecons-tag",
        "name" => "PPT资源",
        "type" => "category",
        "children" => [
          [
            "url" => "http://www.officeplus.cn/Template/Home.shtml",
            "title" => "OfficePLUS",
            "type" => "site",
            "text" => "OfficePLUS，微软Office官方在线模板网站！"
          ],
          [
            "url" => "http://www.ypppt.com/",
            "title" => "优品PPT",
            "type" => "site",
            "text" => "高质量的模版，而且还有PPT图表，PPT背景图等资源"
          ],
          [
            "url" => "http://www.pptplus.cn/",
            "title" => "PPT+",
            "type" => "site",
            "text" => "PPT加直播、录制和分享—PPT+语音内容分享平台"
          ],
          [
            "url" => "http://www.pptmind.com/",
            "title" => "PPTMind",
            "type" => "site",
            "text" => "分享高端ppt模板与keynote模板的数字作品交易平台"
          ],
          [
            "url" => "http://www.tretars.com/ppt-templates",
            "title" => "tretars",
            "type" => "site",
            "text" => "The best free Mockups from the Web"
          ],
          [
            "url" => "http://ppt.500d.me/",
            "title" => "5百丁",
            "type" => "site",
            "text" => "中国领先的PPT模板共享平台"
          ]
        ]
      ],
      [
        "mid" => 23,
        "ico" => "linecons-tag",
        "name" => "图形创意",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.adobe.com/cn/products/photoshop.html",
            "title" => "photoshop",
            "type" => "site",
            "text" => "Photoshop不需要解释"
          ],
          [
            "url" => "https://affinity.serif.com/",
            "title" => "Affinity Designer",
            "type" => "site",
            "text" => "专业创意软件"
          ],
          [
            "url" => "https://www.adobe.com/cn/products/illustrator/",
            "title" => "Illustrator",
            "type" => "site",
            "text" => "矢量图形和插图。"
          ],
          [
            "url" => "http://www.adobe.com/cn/products/indesign.html",
            "title" => "indesign",
            "type" => "site",
            "text" => "页面设计、布局和出版。"
          ],
          [
            "url" => "https://www.maxon.net/en/products/cinema-4d/overview/",
            "title" => "cinema-4d",
            "type" => "site",
            "text" => "Cinema 4D is the perfect package for all 3D artists who want to achieve breathtaking results fast and hassle-free."
          ],
          [
            "url" => "https://www.autodesk.com/products/3ds-max/overview",
            "title" => "3ds-max",
            "type" => "site",
            "text" => "3D modeling, animation, and rendering software"
          ],
          [
            "url" => "https://www.blender.org/",
            "title" => "Blender",
            "type" => "site",
            "text" => "Blender is the free and open source 3D creation suite."
          ]
        ]
      ],
      [
        "mid" => 24,
        "ico" => "linecons-tag",
        "name" => "界面设计",
        "type" => "category",
        "children" => [
          [
            "url" => "https://sketchapp.com/",
            "title" => "Sketch",
            "type" => "site",
            "text" => "The digital design toolkit"
          ],
          [
            "url" => "http://www.adobe.com/products/xd.html",
            "title" => "Adobe XD",
            "type" => "site",
            "text" => "Introducing Adobe XD. Design. Prototype. Experience."
          ],
          [
            "url" => "https://www.invisionapp.com/",
            "title" => "invisionapp",
            "type" => "site",
            "text" => "Powerful design prototyping tools"
          ],
          [
            "url" => "https://marvelapp.com/",
            "title" => "marvelapp",
            "type" => "site",
            "text" => "Simple design, prototyping and collaboration"
          ],
          [
            "url" => "https://creative.adobe.com/zh-cn/products/download/muse",
            "title" => "Muse CC",
            "type" => "site",
            "text" => "无需利用编码即可进行网站设计。"
          ],
          [
            "url" => "https://www.figma.com/",
            "title" => "figma",
            "type" => "site",
            "text" => "Design, prototype, and gather feedback all in one place with Figma."
          ]
        ]
      ],
      [
        "mid" => 25,
        "ico" => "linecons-tag",
        "name" => "交互动效",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.adobe.com/cn/products/aftereffects/",
            "title" => "Adobe After Effects CC",
            "type" => "site",
            "text" => "电影般的视觉效果和动态图形。"
          ],
          [
            "url" => "http://principleformac.com/",
            "title" => "principle",
            "type" => "site",
            "text" => "Animate Your Ideas, Design Better Apps"
          ],
          [
            "url" => "https://www.flinto.com/",
            "title" => "flinto",
            "type" => "site",
            "text" => "Flinto is a Mac app used by top designers around the world to create interactive and animated prototypes of their app designs."
          ],
          [
            "url" => "https://framer.com/",
            "title" => "framer",
            "type" => "site",
            "text" => "Design everything from detailed icons to high-fidelity interactions—all in one place."
          ],
          [
            "url" => "http://www.protopie.cn/",
            "title" => "ProtoPie",
            "type" => "site",
            "text" => "高保真交互原型设计"
          ]
        ]
      ],
      [
        "mid" => 26,
        "ico" => "linecons-tag",
        "name" => "在线配色",
        "type" => "category",
        "children" => [
          [
            "url" => "http://khroma.co/generator/",
            "title" => "khroma",
            "type" => "site",
            "text" => "Khroma is the fastest way to discover, search, and save color combos you'll want to use."
          ],
          [
            "url" => "https://uigradients.com",
            "title" => "uigradients",
            "type" => "site",
            "text" => "Beautiful colored gradients"
          ],
          [
            "url" => "http://gradients.io/",
            "title" => "gradients",
            "type" => "site",
            "text" => "Curated gradients for designers and developers"
          ],
          [
            "url" => "https://webkul.github.io/coolhue/",
            "title" => "Coolest",
            "type" => "site",
            "text" => "Coolest handpicked Gradient Hues for your next super ⚡ amazing stuff"
          ],
          [
            "url" => "https://webgradients.com/",
            "title" => "webgradients",
            "type" => "site",
            "text" => "WebGradients is a free collection of 180 linear gradients that you can use as content backdrops in any part of your website. "
          ],
          [
            "url" => "https://www.grabient.com/",
            "title" => "grabient",
            "type" => "site",
            "text" => "2017 Grabient by unfold"
          ],
          [
            "url" => "http://www.thedayscolor.com/",
            "title" => "thedayscolor",
            "type" => "site",
            "text" => "The daily color digest"
          ],
          [
            "url" => "http://flatuicolors.com/",
            "title" => "flatuicolors",
            "type" => "site",
            "text" => "Copy Paste Color Pallette from Flat UI Theme"
          ],
          [
            "url" => "https://coolors.co/",
            "title" => "coolors",
            "type" => "site",
            "text" => "The super fast color schemes generator!"
          ],
          [
            "url" => "http://www.colorhunt.co/",
            "title" => "colorhunt",
            "type" => "site",
            "text" => "Beautiful Color Palettes"
          ],
          [
            "url" => "https://color.adobe.com/zh/create/color-wheel",
            "title" => "Adobe Color CC",
            "type" => "site",
            "text" => "Create color schemes with the color wheel or browse thousands of color combinations from the Color community."
          ],
          [
            "url" => "http://www.flatuicolorpicker.com/",
            "title" => "flatuicolorpicker",
            "type" => "site",
            "text" => "Best Flat Colors For UI Design"
          ],
          [
            "url" => "http://qrohlf.com/trianglify-generator/",
            "title" => "trianglify",
            "type" => "site",
            "text" => "Trianglify Generator"
          ],
          [
            "url" => "https://klart.co/colors/",
            "title" => "klart",
            "type" => "site",
            "text" => "Beautiful colors and designs to your inbox every week"
          ],
          [
            "url" => "http://www.vanschneider.com/colors",
            "title" => "vanschneider",
            "type" => "site",
            "text" => "Color Claim was created in 2012 by Tobias van Schneider with the goal to collect & combine unique colors for my future projects."
          ]
        ]
      ],
      [
        "mid" => 27,
        "ico" => "linecons-tag",
        "name" => "在线工具",
        "type" => "category",
        "children" => [
          [
            "url" => "https://tinypng.com/",
            "title" => "tinypng",
            "type" => "site",
            "text" => "Optimize your images with a perfect balance in quality and file size."
          ],
          [
            "url" => "http://goqr.me/",
            "title" => "goqr",
            "type" => "site",
            "text" => "create QR codes for free (Logo, T-Shirt, vCard, EPS)"
          ],
          [
            "url" => "https://ezgif.com",
            "title" => "ezgif",
            "type" => "site",
            "text" => "simple online GIF maker and toolset for basic animated GIF editing."
          ],
          [
            "url" => "http://inloop.github.io/shadow4android/",
            "title" => "Android 9 patch",
            "type" => "site",
            "text" => "Android 9-patch shadow generator fully customizable shadows"
          ],
          [
            "url" => "http://screensiz.es/",
            "title" => "screen sizes",
            "type" => "site",
            "text" => "Viewport Sizes and Pixel Densities for Popular Devices"
          ],
          [
            "url" => "https://jakearchibald.github.io/svgomg/",
            "title" => "svgomg",
            "type" => "site",
            "text" => "SVG在线压缩平台"
          ],
          [
            "url" => "https://www.gaoding.com",
            "title" => "稿定抠图",
            "type" => "site",
            "text" => "免费在线抠图软件,图片快速换背景-抠白底图"
          ]
        ]
      ],
      [
        "mid" => 28,
        "ico" => "linecons-tag",
        "name" => "Chrome插件",
        "type" => "category",
        "children" => [
          [
            "url" => "https://www.wappalyzer.com/",
            "title" => "wappalyzer",
            "type" => "site",
            "text" => "Identify technology on websites"
          ],
          [
            "url" => "http://usepanda.com/",
            "title" => "Panda",
            "type" => "site",
            "text" => "A smart news reader built for productivity."
          ],
          [
            "url" => "https://sizzy.co/",
            "title" => "sizzy",
            "type" => "site",
            "text" => "A tool for developing responsive websites crazy-fast"
          ],
          [
            "url" => "https://csspeeper.com/",
            "title" => "csspeeper",
            "type" => "site",
            "text" => "Smart CSS viewer tailored for Designers."
          ],
          [
            "url" => "http://insight.io/",
            "title" => "insight",
            "type" => "site",
            "text" => "IDE-like code search and navigation, on the cloud"
          ],
          [
            "url" => "http://mustsee.earth/",
            "title" => "mustsee",
            "type" => "site",
            "text" => "Discover the world's most beautiful places at every opened tab."
          ]
        ]
      ],
      [
        "mid" => 29,
        "ico" => "linecons-tag",
        "name" => "设计规范",
        "type" => "category",
        "children" => [
          [
            "url" => "http://designguidelines.co/",
            "title" => "Design Guidelines",
            "type" => "site",
            "text" => "Design Guidelines &mdash; The way products are built."
          ],
          [
            "url" => "https://github.com/alexpate/awesome-design-systems",
            "title" => "Awesome design systems",
            "type" => "site",
            "text" => " A collection of awesome design systems"
          ],
          [
            "url" => "https://material.io/guidelines/",
            "title" => "Material Design",
            "type" => "site",
            "text" => "Introduction - Material Design"
          ],
          [
            "url" => "https://developer.apple.com/ios/human-interface-guidelines",
            "title" => "Human Interface Guidelines",
            "type" => "site",
            "text" => "Human Interface Guidelines iOS"
          ],
          [
            "url" => "http://viggoz.com/photoshopetiquette/",
            "title" => "Photoshop Etiquette",
            "type" => "site",
            "text" => "PS礼仪-WEB设计指南"
          ]
        ]
      ],
      [
        "mid" => 30,
        "ico" => "linecons-tag",
        "name" => "视频教程",
        "type" => "category",
        "children" => [
          [
            "url" => "http://www.photoshoplady.com/",
            "title" => "Photoshop Lady",
            "type" => "site",
            "text" => "Your Favourite Photoshop Tutorials in One Place"
          ],
          [
            "url" => "http://doyoudo.com/",
            "title" => "doyoudo",
            "type" => "site",
            "text" => "创意设计软件学习平台"
          ],
          [
            "url" => "http://www.c945.com/web-ui-tutorial/",
            "title" => "没位道",
            "type" => "site",
            "text" => "WEB UI免费视频公开课"
          ],
          [
            "url" => "https://www.imooc.com/",
            "title" => "慕课网",
            "type" => "site",
            "text" => "程序员的梦工厂（有UI课程）"
          ]
        ]
      ],
      [
        "mid" => 31,
        "ico" => "linecons-tag",
        "name" => "设计文章",
        "type" => "category",
        "children" => [
          [
            "url" => "http://www.uisdc.com/",
            "title" => "优设网",
            "type" => "site",
            "text" => "设计师交流学习平台"
          ],
          [
            "url" => "https://webdesignledger.com",
            "title" => "Web Design Ledger",
            "type" => "site",
            "text" => "Web Design Blog"
          ],
          [
            "url" => "https://medium.com/",
            "title" => "Medium",
            "type" => "site",
            "text" => "Read, write and share stories that matter"
          ]
        ]
      ],
      [
        "mid" => 32,
        "ico" => "linecons-tag",
        "name" => "设计电台",
        "type" => "category",
        "children" => [
          [
            "url" => "http://uxcoffee.co/",
            "title" => "UX Coffee",
            "type" => "site",
            "text" => "《UX Coffee 设计咖》是一档关于用户体验的播客节目。我们邀请来自硅谷和国内的学者和职人来聊聊「产品设计」、「用户体验」和「个人成长」。"
          ],
          [
            "url" => "https://anyway.fm/",
            "title" => "Anyway.FM",
            "type" => "site",
            "text" => "设计杂谈 • UI 设计师 JJ 和 Leon 主播的设计播客"
          ],
          [
            "url" => "https://www.yineng.fm",
            "title" => "异能电台",
            "type" => "site",
            "text" => "将全宇宙设计师的故事讲给你听。"
          ]
        ]
      ],
      [
        "mid" => 33,
        "ico" => "linecons-tag",
        "name" => "交互设计",
        "type" => "category",
        "hot" => true,
        "children" => [
          [
            "url" => "http://littlebigdetails.com/",
            "title" => "Little Big Details",
            "type" => "site",
            "text" => "Little Big Details is a curated collection of the finer details of design, updated every day. "
          ],
          [
            "url" => "https://www.smashingmagazine.com/category/user-experience",
            "title" => "Smashing Magazine",
            "type" => "site",
            "text" => "Below you’ll find the best tips to take not only your UX design process but also the experiences you craft to the next level."
          ],
          [
            "url" => "https://www.nngroup.com/articles/",
            "title" => "nngroup",
            "type" => "site",
            "text" => "Evidence-Based User Experience Research, Training, and Consulting"
          ],
          [
            "url" => "http://boxesandarrows.com/",
            "title" => "Boxes and Arrows",
            "type" => "site",
            "text" => "Boxes and Arrows is devoted to the practice, innovation, and discussion of design; including graphic design, interaction design, information architecture and the design of business. "
          ],
          [
            "url" => "http://uxdesignweekly.com/",
            "title" => "UX Design Weekly",
            "type" => "site",
            "text" => " get a hand picked list of the best user experience design links every week. "
          ],
          [
            "url" => "http://uxren.cn/",
            "title" => "UX Ren",
            "type" => "site",
            "text" => "用户体验人的专业社区"
          ],
          [
            "url" => "https://www.gulusucai.com/",
            "title" => "咕噜素材",
            "type" => "site",
            "text" => "质量很高的设计素材网站（良心推荐）"
          ]
        ]
      ],
      [
        "mid" => 10,
        "ico" => "linecons-user",
        "name" => "UED团队",
        "type" => "category",
        "children" => [
          [
            "url" => "https://airbnb.design",
            "title" => "Airbnb Design",
            "type" => "site",
            "text" => "Airbnb Design"
          ],
          [
            "url" => "http://facebook.design/",
            "title" => "Facebook Design",
            "type" => "site",
            "text" => "Facebook Design"
          ],
          [
            "url" => "https://design.google/",
            "title" => "Google Design",
            "type" => "site",
            "text" => "Google Design"
          ],
          [
            "url" => "http://eicodesign.com/",
            "title" => "eico design",
            "type" => "site",
            "text" => "数字化咨询与产品专家"
          ],
          [
            "url" => "http://www.niceui.cn/",
            "title" => "nice design",
            "type" => "site",
            "text" => "nicedesign奈思设计是领先的用户体验设计与互联网品牌建设公司"
          ],
          [
            "url" => "http://cdc.tencent.com/",
            "title" => "腾讯CDC",
            "type" => "site",
            "text" => "腾讯CDC关注于互联网视觉设计、交互设计、用户研究、前端开发。"
          ],
          [
            "url" => "http://tgideas.qq.com/",
            "title" => "TGideas",
            "type" => "site",
            "text" => "TGideas隶属于腾讯公司互动娱乐业务系统的专业推广类设计团队"
          ],
          [
            "url" => "https://isux.tencent.com/",
            "title" => "ISUX",
            "type" => "site",
            "text" => "腾讯社交用户体验设计部"
          ],
          [
            "url" => "http://mxd.tencent.com/",
            "title" => "MXD",
            "type" => "site",
            "text" => "腾讯MIG无线互联网事业群设计团队"
          ],
          [
            "url" => "http://www.aliued.com/",
            "title" => "Aliued",
            "type" => "site",
            "text" => "阿里巴巴国际UED团队"
          ],
          [
            "url" => "http://www.aliued.cn/",
            "title" => "U一点",
            "type" => "site",
            "text" => "阿里巴巴（中国站）用户体验设计部博客U一点设计 UED团队"
          ],
          [
            "url" => "http://uedc.163.com/",
            "title" => "网易uedc",
            "type" => "site",
            "text" => "网易用户体验设计中心（User Experience Design Center）"
          ],
          [
            "url" => "http://ued.baidu.com/",
            "title" => "百度用户体验中心",
            "type" => "site",
            "text" => "百度用户体验中心"
          ],
          [
            "url" => "http://jdc.jd.com/",
            "title" => "京东设计中心",
            "type" => "site",
            "text" => "京东设计中心"
          ],
          [
            "url" => "http://eux.baidu.com/",
            "title" => "百度企业产品用户体验中心",
            "type" => "site",
            "text" => "百度企业产品用户体验中心"
          ],
          [
            "url" => "http://ued.ctrip.com/",
            "title" => "携程设计委员会",
            "type" => "site",
            "text" => "携程设计委员会-Ctrip Design Committee"
          ]
        ]
      ]
    ];
    $cid = 1;
    for ($i = 0; $i < count($content_columns); $i++) {
      $meta = $content_columns[$i];
      $mid = $meta['mid'];
      for ($j = 0; $j < count($meta['children']); $j++) {
        $content = $meta['children'][$j];
        DB::table('webstack_contents')->insert(array_merge($content, [
          "cid" => $cid,
          "ico" => isset($content['ico']) ? $content['ico'] : ($content['url'] . "favicon.ico"),
          "type" => "site",
          "status" => "public",
        ]));
        DB::table('webstack_relationships')->insert([
          "cid" => $cid,
          "mid" => $mid,
        ]);
        $cid++;
      }
    }
    // DB::table('webstack_contents')->insert(array_map(function ($item, $index) {
    //   return array_merge($item, [
    //     "cid" => $index + 1,
    //     "type" => "site",
    //     "status" => "public",
    //   ]);
    // }, $content_columns[0], array_keys($content_columns[0])));

    // DB::table('webstack_contents')->insert(array_map(function ($item, $index) {
    //   return array_merge($item, [
    //     "cid" => $index + 19,
    //     "type" => "site",
    //     "status" => "public",
    //   ]);
    // }, $content_columns[1], array_keys($content_columns[1])));

    // DB::table('webstack_contents')->insert(array_map(function ($item, $index) {
    //   return array_merge($item, [
    //     "cid" => $index + 31,
    //     "type" => "site",
    //     "status" => "public",
    //   ]);
    // }, $content_columns[2], array_keys($content_columns[2])));

    // $relationship_columns = [];

    // DB::table('webstack_relationships')->insert(array_map(function ($item, $index) {
    //   return  [
    //     "cid" => $index + 1,
    //     "mid" => 4
    //   ];
    // }, $content_columns[0], array_keys($content_columns[0])));

    // DB::table('webstack_relationships')->insert(array_map(function ($item, $index) {
    //   return  [
    //     "cid" => $index + 19,
    //     "mid" => 5
    //   ];
    // }, $content_columns[1], array_keys($content_columns[1])));
  }
}
