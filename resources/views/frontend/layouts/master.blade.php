<!doctype html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>BSEED - @yield('title')</title>
    <link rel="canonical" href="https://startupafrica.org" />
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='stylesheet' id='blocksy-dynamic-global-css' href='{{ asset('frontend') }}/wp-content/uploads/blocksy/css/global.css' media='all' />
    <link rel='stylesheet' id='sbi_styles-css' href='{{ asset('frontend') }}/wp-content/plugins/instagram-feed/css/sbi-styles.min.css' media='all' />
    <link rel='stylesheet' id='bdt-uikit-css' href='{{ asset('frontend') }}/wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit.css' media='all' />
    <link rel='stylesheet' id='ep-helper-css' href='{{ asset('frontend') }}/wp-content/plugins/bdthemes-element-pack/assets/css/ep-helper.css' media='all' />
    <style id='global-styles-inline-css'>
      :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #448db2;
        --wp--preset--color--luminous-vivid-amber: #5cdde1;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--palette-color-1: var(--theme-palette-color-1, #2872fa);
        --wp--preset--color--palette-color-2: var(--theme-palette-color-2, #1559ed);
        --wp--preset--color--palette-color-3: var(--theme-palette-color-3, #3A4F66);
        --wp--preset--color--palette-color-4: var(--theme-palette-color-4, #192a3d);
        --wp--preset--color--palette-color-5: var(--theme-palette-color-5, #e1e8ed);
        --wp--preset--color--palette-color-6: var(--theme-palette-color-6, #f2f5f7);
        --wp--preset--color--palette-color-7: var(--theme-palette-color-7, #FAFBFC);
        --wp--preset--color--palette-color-8: var(--theme-palette-color-8, #ffffff);
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgb(0, 248, 252) 0%, rgb(29, 178, 183) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--gradient--juicy-peach: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
        --wp--preset--gradient--young-passion: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
        --wp--preset--gradient--true-sunset: linear-gradient(to right, #fa709a 0%, #fee140 100%);
        --wp--preset--gradient--morpheus-den: linear-gradient(to top, #30cfd0 0%, #330867 100%);
        --wp--preset--gradient--plum-plate: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --wp--preset--gradient--aqua-splash: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
        --wp--preset--gradient--love-kiss: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
        --wp--preset--gradient--new-retrowave: linear-gradient(to top, #3b41c5 0%, #a981bb 49%, #ffc8a9 100%);
        --wp--preset--gradient--plum-bath: linear-gradient(to top, #cc208e 0%, #6713d2 100%);
        --wp--preset--gradient--high-flight: linear-gradient(to right, #0acffe 0%, #495aff 100%);
        --wp--preset--gradient--teen-party: linear-gradient(-225deg, #FF057C 0%, #8D0B93 50%, #321575 100%);
        --wp--preset--gradient--fabled-sunset: linear-gradient(-225deg, #231557 0%, #44107A 29%, #FF1361 67%, #FFF800 100%);
        --wp--preset--gradient--arielle-smile: radial-gradient(circle 248px at center, #16d9e3 0%, #30c7ec 47%, #46aef7 100%);
        --wp--preset--gradient--itmeo-branding: linear-gradient(180deg, #2af598 0%, #009efd 100%);
        --wp--preset--gradient--deep-blue: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
        --wp--preset--gradient--strong-bliss: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%);
        --wp--preset--gradient--sweet-period: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
        --wp--preset--gradient--purple-division: linear-gradient(to top, #7028e4 0%, #e5b2ca 100%);
        --wp--preset--gradient--cold-evening: linear-gradient(to top, #0c3483 0%, #a2b6df 100%, #6b8cce 100%, #a2b6df 100%);
        --wp--preset--gradient--mountain-rock: linear-gradient(to right, #868f96 0%, #596164 100%);
        --wp--preset--gradient--desert-hump: linear-gradient(to top, #c79081 0%, #dfa579 100%);
        --wp--preset--gradient--ethernal-constance: linear-gradient(to top, #09203f 0%, #537895 100%);
        --wp--preset--gradient--happy-memories: linear-gradient(-60deg, #ff5858 0%, #f09819 100%);
        --wp--preset--gradient--grown-early: linear-gradient(to top, #0ba360 0%, #3cba92 100%);
        --wp--preset--gradient--morning-salad: linear-gradient(-225deg, #B7F8DB 0%, #50A7C2 100%);
        --wp--preset--gradient--night-call: linear-gradient(-225deg, #AC32E4 0%, #7918F2 48%, #4801FF 100%);
        --wp--preset--gradient--mind-crawl: linear-gradient(-225deg, #473B7B 0%, #3584A7 51%, #30D2BE 100%);
        --wp--preset--gradient--angel-care: linear-gradient(-225deg, #FFE29F 0%, #FFA99F 48%, #FF719A 100%);
        --wp--preset--gradient--juicy-cake: linear-gradient(to top, #e14fad 0%, #f9d423 100%);
        --wp--preset--gradient--rich-metal: linear-gradient(to right, #d7d2cc 0%, #304352 100%);
        --wp--preset--gradient--mole-hall: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);
        --wp--preset--gradient--cloudy-knoxville: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        --wp--preset--gradient--soft-grass: linear-gradient(to top, #c1dfc4 0%, #deecdd 100%);
        --wp--preset--gradient--saint-petersburg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        --wp--preset--gradient--everlasting-sky: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
        --wp--preset--gradient--kind-steel: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);
        --wp--preset--gradient--over-sun: linear-gradient(60deg, #abecd6 0%, #fbed96 100%);
        --wp--preset--gradient--premium-white: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);
        --wp--preset--gradient--clean-mirror: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);
        --wp--preset--gradient--wild-apple: linear-gradient(to top, #d299c2 0%, #fef9d7 100%);
        --wp--preset--gradient--snow-again: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
        --wp--preset--gradient--confident-cloud: linear-gradient(to top, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%);
        --wp--preset--gradient--glass-water: linear-gradient(to top, #dfe9f3 0%, white 100%);
        --wp--preset--gradient--perfect-white: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: clamp(22px, 1.375rem + ((1vw - 3.2px) * 0.625), 30px);
        --wp--preset--font-size--x-large: clamp(30px, 1.875rem + ((1vw - 3.2px) * 1.563), 50px);
        --wp--preset--font-size--xx-large: clamp(45px, 2.813rem + ((1vw - 3.2px) * 2.734), 80px);
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
      }

      :root {
        --wp--style--global--content-size: var(--theme-block-max-width);
        --wp--style--global--wide-size: var(--theme-block-wide-max-width);
      }

      :where(body) {
        margin: 0;
      }

      .wp-site-blocks>.alignleft {
        float: left;
        margin-right: 2em;
      }

      .wp-site-blocks>.alignright {
        float: right;
        margin-left: 2em;
      }

      .wp-site-blocks>.aligncenter {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
      }

      :where(.wp-site-blocks)>* {
        margin-block-start: var(--theme-content-spacing);
        margin-block-end: 0;
      }

      :where(.wp-site-blocks)> :first-child {
        margin-block-start: 0;
      }

      :where(.wp-site-blocks)> :last-child {
        margin-block-end: 0;
      }

      :root {
        --wp--style--block-gap: var(--theme-content-spacing);
      }

      :root :where(.is-layout-flow)> :first-child {
        margin-block-start: 0;
      }

      :root :where(.is-layout-flow)> :last-child {
        margin-block-end: 0;
      }

      :root :where(.is-layout-flow)>* {
        margin-block-start: var(--theme-content-spacing);
        margin-block-end: 0;
      }

      :root :where(.is-layout-constrained)> :first-child {
        margin-block-start: 0;
      }

      :root :where(.is-layout-constrained)> :last-child {
        margin-block-end: 0;
      }

      :root :where(.is-layout-constrained)>* {
        margin-block-start: var(--theme-content-spacing);
        margin-block-end: 0;
      }

      :root :where(.is-layout-flex) {
        gap: var(--theme-content-spacing);
      }

      :root :where(.is-layout-grid) {
        gap: var(--theme-content-spacing);
      }

      .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }

      .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }

      .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }

      .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }

      .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }

      .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
      }

      .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
      }

      body .is-layout-flex {
        display: flex;
      }

      .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
      }

      .is-layout-flex> :is(*, div) {
        margin: 0;
      }

      body .is-layout-grid {
        display: grid;
      }

      .is-layout-grid> :is(*, div) {
        margin: 0;
      }

      body {
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
      }

      .has-black-color {
        color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-color {
        color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-palette-color-1-color {
        color: var(--wp--preset--color--palette-color-1) !important;
      }

      .has-palette-color-2-color {
        color: var(--wp--preset--color--palette-color-2) !important;
      }

      .has-palette-color-3-color {
        color: var(--wp--preset--color--palette-color-3) !important;
      }

      .has-palette-color-4-color {
        color: var(--wp--preset--color--palette-color-4) !important;
      }

      .has-palette-color-5-color {
        color: var(--wp--preset--color--palette-color-5) !important;
      }

      .has-palette-color-6-color {
        color: var(--wp--preset--color--palette-color-6) !important;
      }

      .has-palette-color-7-color {
        color: var(--wp--preset--color--palette-color-7) !important;
      }

      .has-palette-color-8-color {
        color: var(--wp--preset--color--palette-color-8) !important;
      }

      .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-palette-color-1-background-color {
        background-color: var(--wp--preset--color--palette-color-1) !important;
      }

      .has-palette-color-2-background-color {
        background-color: var(--wp--preset--color--palette-color-2) !important;
      }

      .has-palette-color-3-background-color {
        background-color: var(--wp--preset--color--palette-color-3) !important;
      }

      .has-palette-color-4-background-color {
        background-color: var(--wp--preset--color--palette-color-4) !important;
      }

      .has-palette-color-5-background-color {
        background-color: var(--wp--preset--color--palette-color-5) !important;
      }

      .has-palette-color-6-background-color {
        background-color: var(--wp--preset--color--palette-color-6) !important;
      }

      .has-palette-color-7-background-color {
        background-color: var(--wp--preset--color--palette-color-7) !important;
      }

      .has-palette-color-8-background-color {
        background-color: var(--wp--preset--color--palette-color-8) !important;
      }

      .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-palette-color-1-border-color {
        border-color: var(--wp--preset--color--palette-color-1) !important;
      }

      .has-palette-color-2-border-color {
        border-color: var(--wp--preset--color--palette-color-2) !important;
      }

      .has-palette-color-3-border-color {
        border-color: var(--wp--preset--color--palette-color-3) !important;
      }

      .has-palette-color-4-border-color {
        border-color: var(--wp--preset--color--palette-color-4) !important;
      }

      .has-palette-color-5-border-color {
        border-color: var(--wp--preset--color--palette-color-5) !important;
      }

      .has-palette-color-6-border-color {
        border-color: var(--wp--preset--color--palette-color-6) !important;
      }

      .has-palette-color-7-border-color {
        border-color: var(--wp--preset--color--palette-color-7) !important;
      }

      .has-palette-color-8-border-color {
        border-color: var(--wp--preset--color--palette-color-8) !important;
      }

      .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
      }

      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
      }

      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
      }

      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
      }

      .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
      }

      .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
      }

      .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
      }

      .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
      }

      .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
      }

      .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
      }

      .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
      }

      .has-juicy-peach-gradient-background {
        background: var(--wp--preset--gradient--juicy-peach) !important;
      }

      .has-young-passion-gradient-background {
        background: var(--wp--preset--gradient--young-passion) !important;
      }

      .has-true-sunset-gradient-background {
        background: var(--wp--preset--gradient--true-sunset) !important;
      }

      .has-morpheus-den-gradient-background {
        background: var(--wp--preset--gradient--morpheus-den) !important;
      }

      .has-plum-plate-gradient-background {
        background: var(--wp--preset--gradient--plum-plate) !important;
      }

      .has-aqua-splash-gradient-background {
        background: var(--wp--preset--gradient--aqua-splash) !important;
      }

      .has-love-kiss-gradient-background {
        background: var(--wp--preset--gradient--love-kiss) !important;
      }

      .has-new-retrowave-gradient-background {
        background: var(--wp--preset--gradient--new-retrowave) !important;
      }

      .has-plum-bath-gradient-background {
        background: var(--wp--preset--gradient--plum-bath) !important;
      }

      .has-high-flight-gradient-background {
        background: var(--wp--preset--gradient--high-flight) !important;
      }

      .has-teen-party-gradient-background {
        background: var(--wp--preset--gradient--teen-party) !important;
      }

      .has-fabled-sunset-gradient-background {
        background: var(--wp--preset--gradient--fabled-sunset) !important;
      }

      .has-arielle-smile-gradient-background {
        background: var(--wp--preset--gradient--arielle-smile) !important;
      }

      .has-itmeo-branding-gradient-background {
        background: var(--wp--preset--gradient--itmeo-branding) !important;
      }

      .has-deep-blue-gradient-background {
        background: var(--wp--preset--gradient--deep-blue) !important;
      }

      .has-strong-bliss-gradient-background {
        background: var(--wp--preset--gradient--strong-bliss) !important;
      }

      .has-sweet-period-gradient-background {
        background: var(--wp--preset--gradient--sweet-period) !important;
      }

      .has-purple-division-gradient-background {
        background: var(--wp--preset--gradient--purple-division) !important;
      }

      .has-cold-evening-gradient-background {
        background: var(--wp--preset--gradient--cold-evening) !important;
      }

      .has-mountain-rock-gradient-background {
        background: var(--wp--preset--gradient--mountain-rock) !important;
      }

      .has-desert-hump-gradient-background {
        background: var(--wp--preset--gradient--desert-hump) !important;
      }

      .has-ethernal-constance-gradient-background {
        background: var(--wp--preset--gradient--ethernal-constance) !important;
      }

      .has-happy-memories-gradient-background {
        background: var(--wp--preset--gradient--happy-memories) !important;
      }

      .has-grown-early-gradient-background {
        background: var(--wp--preset--gradient--grown-early) !important;
      }

      .has-morning-salad-gradient-background {
        background: var(--wp--preset--gradient--morning-salad) !important;
      }

      .has-night-call-gradient-background {
        background: var(--wp--preset--gradient--night-call) !important;
      }

      .has-mind-crawl-gradient-background {
        background: var(--wp--preset--gradient--mind-crawl) !important;
      }

      .has-angel-care-gradient-background {
        background: var(--wp--preset--gradient--angel-care) !important;
      }

      .has-juicy-cake-gradient-background {
        background: var(--wp--preset--gradient--juicy-cake) !important;
      }

      .has-rich-metal-gradient-background {
        background: var(--wp--preset--gradient--rich-metal) !important;
      }

      .has-mole-hall-gradient-background {
        background: var(--wp--preset--gradient--mole-hall) !important;
      }

      .has-cloudy-knoxville-gradient-background {
        background: var(--wp--preset--gradient--cloudy-knoxville) !important;
      }

      .has-soft-grass-gradient-background {
        background: var(--wp--preset--gradient--soft-grass) !important;
      }

      .has-saint-petersburg-gradient-background {
        background: var(--wp--preset--gradient--saint-petersburg) !important;
      }

      .has-everlasting-sky-gradient-background {
        background: var(--wp--preset--gradient--everlasting-sky) !important;
      }

      .has-kind-steel-gradient-background {
        background: var(--wp--preset--gradient--kind-steel) !important;
      }

      .has-over-sun-gradient-background {
        background: var(--wp--preset--gradient--over-sun) !important;
      }

      .has-premium-white-gradient-background {
        background: var(--wp--preset--gradient--premium-white) !important;
      }

      .has-clean-mirror-gradient-background {
        background: var(--wp--preset--gradient--clean-mirror) !important;
      }

      .has-wild-apple-gradient-background {
        background: var(--wp--preset--gradient--wild-apple) !important;
      }

      .has-snow-again-gradient-background {
        background: var(--wp--preset--gradient--snow-again) !important;
      }

      .has-confident-cloud-gradient-background {
        background: var(--wp--preset--gradient--confident-cloud) !important;
      }

      .has-glass-water-gradient-background {
        background: var(--wp--preset--gradient--glass-water) !important;
      }

      .has-perfect-white-gradient-background {
        background: var(--wp--preset--gradient--perfect-white) !important;
      }

      .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
      }

      .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
      }

      .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
      }

      .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
      }

      .has-xx-large-font-size {
        font-size: var(--wp--preset--font-size--xx-large) !important;
      }

      :root :where(.wp-block-pullquote) {
        font-size: clamp(0.984em, 0.984rem + ((1vw - 0.2em) * 0.645), 1.5em);
        line-height: 1.6;
      }
    </style>
    <link rel='stylesheet' id='chaty-front-css-css' href='{{ asset('frontend') }}/wp-content/plugins/chaty/css/chaty-front.min.css' media='all' />
    <link rel='stylesheet' id='cff-css' href='{{ asset('frontend') }}/wp-content/plugins/custom-facebook-feed/assets/css/cff-style.min.css' media='all' />
    <link rel='stylesheet' id='sb-font-awesome-css' href='{{ asset('frontend') }}/font-awesome/4.7.0/css/font-awesome.min.css' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-grid-style-css' href='{{ asset('frontend') }}/wp-content/plugins/qi-addons-for-elementor/assets/css/grid.min.css' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-helper-parts-style-css' href='{{ asset('frontend') }}/wp-content/plugins/qi-addons-for-elementor/assets/css/helper-parts.min.css' media='all' />
    <link rel='stylesheet' id='qi-addons-for-elementor-style-css' href='{{ asset('frontend') }}/wp-content/plugins/qi-addons-for-elementor/assets/css/main.min.css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/css/frontend.min.css' media='all' />
    <style id='elementor-frontend-inline-css'>
      @-webkit-keyframes ha_fadeIn {
        0% {
          opacity: 0
        }

        to {
          opacity: 1
        }
      }

      @keyframes ha_fadeIn {
        0% {
          opacity: 0
        }

        to {
          opacity: 1
        }
      }

      @-webkit-keyframes ha_zoomIn {
        0% {
          opacity: 0;
          -webkit-transform: scale3d(.3, .3, .3);
          transform: scale3d(.3, .3, .3)
        }

        50% {
          opacity: 1
        }
      }

      @keyframes ha_zoomIn {
        0% {
          opacity: 0;
          -webkit-transform: scale3d(.3, .3, .3);
          transform: scale3d(.3, .3, .3)
        }

        50% {
          opacity: 1
        }
      }

      @-webkit-keyframes ha_rollIn {
        0% {
          opacity: 0;
          -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
          transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
        }

        to {
          opacity: 1
        }
      }

      @keyframes ha_rollIn {
        0% {
          opacity: 0;
          -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
          transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
        }

        to {
          opacity: 1
        }
      }

      @-webkit-keyframes ha_bounce {

        0%,
        20%,
        53%,
        to {
          -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
          animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        40%,
        43% {
          -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
          transform: translate3d(0, -30px, 0) scaleY(1.1);
          -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
          animation-timing-function: cubic-bezier(.755, .05, .855, .06)
        }

        70% {
          -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
          transform: translate3d(0, -15px, 0) scaleY(1.05);
          -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
          animation-timing-function: cubic-bezier(.755, .05, .855, .06)
        }

        80% {
          -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
          transition-timing-function: cubic-bezier(.215, .61, .355, 1);
          -webkit-transform: translate3d(0, 0, 0) scaleY(.95);
          transform: translate3d(0, 0, 0) scaleY(.95)
        }

        90% {
          -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
          transform: translate3d(0, -4px, 0) scaleY(1.02)
        }
      }

      @keyframes ha_bounce {

        0%,
        20%,
        53%,
        to {
          -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
          animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        40%,
        43% {
          -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
          transform: translate3d(0, -30px, 0) scaleY(1.1);
          -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
          animation-timing-function: cubic-bezier(.755, .05, .855, .06)
        }

        70% {
          -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
          transform: translate3d(0, -15px, 0) scaleY(1.05);
          -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
          animation-timing-function: cubic-bezier(.755, .05, .855, .06)
        }

        80% {
          -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
          transition-timing-function: cubic-bezier(.215, .61, .355, 1);
          -webkit-transform: translate3d(0, 0, 0) scaleY(.95);
          transform: translate3d(0, 0, 0) scaleY(.95)
        }

        90% {
          -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
          transform: translate3d(0, -4px, 0) scaleY(1.02)
        }
      }

      @-webkit-keyframes ha_bounceIn {

        0%,
        20%,
        40%,
        60%,
        80%,
        to {
          -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
          animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        0% {
          opacity: 0;
          -webkit-transform: scale3d(.3, .3, .3);
          transform: scale3d(.3, .3, .3)
        }

        20% {
          -webkit-transform: scale3d(1.1, 1.1, 1.1);
          transform: scale3d(1.1, 1.1, 1.1)
        }

        40% {
          -webkit-transform: scale3d(.9, .9, .9);
          transform: scale3d(.9, .9, .9)
        }

        60% {
          opacity: 1;
          -webkit-transform: scale3d(1.03, 1.03, 1.03);
          transform: scale3d(1.03, 1.03, 1.03)
        }

        80% {
          -webkit-transform: scale3d(.97, .97, .97);
          transform: scale3d(.97, .97, .97)
        }

        to {
          opacity: 1
        }
      }

      @keyframes ha_bounceIn {

        0%,
        20%,
        40%,
        60%,
        80%,
        to {
          -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
          animation-timing-function: cubic-bezier(.215, .61, .355, 1)
        }

        0% {
          opacity: 0;
          -webkit-transform: scale3d(.3, .3, .3);
          transform: scale3d(.3, .3, .3)
        }

        20% {
          -webkit-transform: scale3d(1.1, 1.1, 1.1);
          transform: scale3d(1.1, 1.1, 1.1)
        }

        40% {
          -webkit-transform: scale3d(.9, .9, .9);
          transform: scale3d(.9, .9, .9)
        }

        60% {
          opacity: 1;
          -webkit-transform: scale3d(1.03, 1.03, 1.03);
          transform: scale3d(1.03, 1.03, 1.03)
        }

        80% {
          -webkit-transform: scale3d(.97, .97, .97);
          transform: scale3d(.97, .97, .97)
        }

        to {
          opacity: 1
        }
      }

      @-webkit-keyframes ha_flipInX {
        0% {
          opacity: 0;
          -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
          transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
          -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in
        }

        40% {
          -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
          transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
          -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in
        }

        60% {
          opacity: 1;
          -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
          transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
        }

        80% {
          -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
          transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
        }
      }

      @keyframes ha_flipInX {
        0% {
          opacity: 0;
          -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
          transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
          -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in
        }

        40% {
          -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
          transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
          -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in
        }

        60% {
          opacity: 1;
          -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
          transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
        }

        80% {
          -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
          transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
        }
      }

      @-webkit-keyframes ha_flipInY {
        0% {
          opacity: 0;
          -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
          transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
          -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in
        }

        40% {
          -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
          transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
          -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in
        }

        60% {
          opacity: 1;
          -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
          transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
        }

        80% {
          -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
          transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
        }
      }

      @keyframes ha_flipInY {
        0% {
          opacity: 0;
          -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
          transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
          -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in
        }

        40% {
          -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
          transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
          -webkit-animation-timing-function: ease-in;
          animation-timing-function: ease-in
        }

        60% {
          opacity: 1;
          -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
          transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
        }

        80% {
          -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
          transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
        }
      }

      @-webkit-keyframes ha_swing {
        20% {
          -webkit-transform: rotate3d(0, 0, 1, 15deg);
          transform: rotate3d(0, 0, 1, 15deg)
        }

        40% {
          -webkit-transform: rotate3d(0, 0, 1, -10deg);
          transform: rotate3d(0, 0, 1, -10deg)
        }

        60% {
          -webkit-transform: rotate3d(0, 0, 1, 5deg);
          transform: rotate3d(0, 0, 1, 5deg)
        }

        80% {
          -webkit-transform: rotate3d(0, 0, 1, -5deg);
          transform: rotate3d(0, 0, 1, -5deg)
        }
      }

      @keyframes ha_swing {
        20% {
          -webkit-transform: rotate3d(0, 0, 1, 15deg);
          transform: rotate3d(0, 0, 1, 15deg)
        }

        40% {
          -webkit-transform: rotate3d(0, 0, 1, -10deg);
          transform: rotate3d(0, 0, 1, -10deg)
        }

        60% {
          -webkit-transform: rotate3d(0, 0, 1, 5deg);
          transform: rotate3d(0, 0, 1, 5deg)
        }

        80% {
          -webkit-transform: rotate3d(0, 0, 1, -5deg);
          transform: rotate3d(0, 0, 1, -5deg)
        }
      }

      @-webkit-keyframes ha_slideInDown {
        0% {
          visibility: visible;
          -webkit-transform: translate3d(0, -100%, 0);
          transform: translate3d(0, -100%, 0)
        }
      }

      @keyframes ha_slideInDown {
        0% {
          visibility: visible;
          -webkit-transform: translate3d(0, -100%, 0);
          transform: translate3d(0, -100%, 0)
        }
      }

      @-webkit-keyframes ha_slideInUp {
        0% {
          visibility: visible;
          -webkit-transform: translate3d(0, 100%, 0);
          transform: translate3d(0, 100%, 0)
        }
      }

      @keyframes ha_slideInUp {
        0% {
          visibility: visible;
          -webkit-transform: translate3d(0, 100%, 0);
          transform: translate3d(0, 100%, 0)
        }
      }

      @-webkit-keyframes ha_slideInLeft {
        0% {
          visibility: visible;
          -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0)
        }
      }

      @keyframes ha_slideInLeft {
        0% {
          visibility: visible;
          -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0)
        }
      }

      @-webkit-keyframes ha_slideInRight {
        0% {
          visibility: visible;
          -webkit-transform: translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0)
        }
      }

      @keyframes ha_slideInRight {
        0% {
          visibility: visible;
          -webkit-transform: translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0)
        }
      }

      .ha_fadeIn {
        -webkit-animation-name: ha_fadeIn;
        animation-name: ha_fadeIn
      }

      .ha_zoomIn {
        -webkit-animation-name: ha_zoomIn;
        animation-name: ha_zoomIn
      }

      .ha_rollIn {
        -webkit-animation-name: ha_rollIn;
        animation-name: ha_rollIn
      }

      .ha_bounce {
        -webkit-transform-origin: center bottom;
        -ms-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-name: ha_bounce;
        animation-name: ha_bounce
      }

      .ha_bounceIn {
        -webkit-animation-name: ha_bounceIn;
        animation-name: ha_bounceIn;
        -webkit-animation-duration: .75s;
        -webkit-animation-duration: calc(var(--animate-duration)*.75);
        animation-duration: .75s;
        animation-duration: calc(var(--animate-duration)*.75)
      }

      .ha_flipInX,
      .ha_flipInY {
        -webkit-animation-name: ha_flipInX;
        animation-name: ha_flipInX;
        -webkit-backface-visibility: visible !important;
        backface-visibility: visible !important
      }

      .ha_flipInY {
        -webkit-animation-name: ha_flipInY;
        animation-name: ha_flipInY
      }

      .ha_swing {
        -webkit-transform-origin: top center;
        -ms-transform-origin: top center;
        transform-origin: top center;
        -webkit-animation-name: ha_swing;
        animation-name: ha_swing
      }

      .ha_slideInDown {
        -webkit-animation-name: ha_slideInDown;
        animation-name: ha_slideInDown
      }

      .ha_slideInUp {
        -webkit-animation-name: ha_slideInUp;
        animation-name: ha_slideInUp
      }

      .ha_slideInLeft {
        -webkit-animation-name: ha_slideInLeft;
        animation-name: ha_slideInLeft
      }

      .ha_slideInRight {
        -webkit-animation-name: ha_slideInRight;
        animation-name: ha_slideInRight
      }

      .ha-css-transform-yes {
        -webkit-transition-duration: var(--ha-tfx-transition-duration, .2s);
        transition-duration: var(--ha-tfx-transition-duration, .2s);
        -webkit-transition-property: -webkit-transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
        -webkit-transform: translate(var(--ha-tfx-translate-x, 0), var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0));
        transform: translate(var(--ha-tfx-translate-x, 0), var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0))
      }

      .ha-css-transform-yes:hover {
        -webkit-transform: translate(var(--ha-tfx-translate-x-hover, var(--ha-tfx-translate-x, 0)), var(--ha-tfx-translate-y-hover, var(--ha-tfx-translate-y, 0))) scale(var(--ha-tfx-scale-x-hover, var(--ha-tfx-scale-x, 1)), var(--ha-tfx-scale-y-hover, var(--ha-tfx-scale-y, 1))) skew(var(--ha-tfx-skew-x-hover, var(--ha-tfx-skew-x, 0)), var(--ha-tfx-skew-y-hover, var(--ha-tfx-skew-y, 0))) rotateX(var(--ha-tfx-rotate-x-hover, var(--ha-tfx-rotate-x, 0))) rotateY(var(--ha-tfx-rotate-y-hover, var(--ha-tfx-rotate-y, 0))) rotateZ(var(--ha-tfx-rotate-z-hover, var(--ha-tfx-rotate-z, 0)));
        transform: translate(var(--ha-tfx-translate-x-hover, var(--ha-tfx-translate-x, 0)), var(--ha-tfx-translate-y-hover, var(--ha-tfx-translate-y, 0))) scale(var(--ha-tfx-scale-x-hover, var(--ha-tfx-scale-x, 1)), var(--ha-tfx-scale-y-hover, var(--ha-tfx-scale-y, 1))) skew(var(--ha-tfx-skew-x-hover, var(--ha-tfx-skew-x, 0)), var(--ha-tfx-skew-y-hover, var(--ha-tfx-skew-y, 0))) rotateX(var(--ha-tfx-rotate-x-hover, var(--ha-tfx-rotate-x, 0))) rotateY(var(--ha-tfx-rotate-y-hover, var(--ha-tfx-rotate-y, 0))) rotateZ(var(--ha-tfx-rotate-z-hover, var(--ha-tfx-rotate-z, 0)))
      }

      .happy-addon>.elementor-widget-container {
        word-wrap: break-word;
        overflow-wrap: break-word
      }

      .happy-addon>.elementor-widget-container,
      .happy-addon>.elementor-widget-container * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box
      }

      .happy-addon p:empty {
        display: none
      }

      .happy-addon .elementor-inline-editing {
        min-height: auto !important
      }

      .happy-addon-pro img {
        max-width: 100%;
        height: auto;
        -o-object-fit: cover;
        object-fit: cover
      }

      .ha-screen-reader-text {
        position: absolute;
        overflow: hidden;
        clip: rect(1px, 1px, 1px, 1px);
        margin: -1px;
        padding: 0;
        width: 1px;
        height: 1px;
        border: 0;
        word-wrap: normal !important;
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%)
      }

      .ha-has-bg-overlay>.elementor-widget-container {
        position: relative;
        z-index: 1
      }

      .ha-has-bg-overlay>.elementor-widget-container:before {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        content: ""
      }

      .ha-popup--is-enabled .ha-js-popup,
      .ha-popup--is-enabled .ha-js-popup img {
        cursor: -webkit-zoom-in !important;
        cursor: zoom-in !important
      }

      .mfp-wrap .mfp-arrow,
      .mfp-wrap .mfp-close {
        background-color: transparent
      }

      .mfp-wrap .mfp-arrow:focus,
      .mfp-wrap .mfp-close:focus {
        outline-width: thin
      }

      .ha-advanced-tooltip-enable {
        position: relative;
        cursor: pointer;
        --ha-tooltip-arrow-color: black;
        --ha-tooltip-arrow-distance: 0
      }

      .ha-advanced-tooltip-enable .ha-advanced-tooltip-content {
        position: absolute;
        z-index: 999;
        display: none;
        padding: 5px 0;
        width: 120px;
        height: auto;
        border-radius: 6px;
        background-color: #000;
        color: #fff;
        text-align: center;
        opacity: 0
      }

      .ha-advanced-tooltip-enable .ha-advanced-tooltip-content::after {
        position: absolute;
        border-width: 5px;
        border-style: solid;
        content: ""
      }

      .ha-advanced-tooltip-enable .ha-advanced-tooltip-content.no-arrow::after {
        visibility: hidden
      }

      .ha-advanced-tooltip-enable .ha-advanced-tooltip-content.show {
        display: inline-block;
        opacity: 1
      }

      .ha-advanced-tooltip-enable.ha-advanced-tooltip-top .ha-advanced-tooltip-content,
      body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-top .ha-advanced-tooltip-content {
        top: unset;
        right: 0;
        bottom: calc(101% + var(--ha-tooltip-arrow-distance));
        left: 0;
        margin: 0 auto
      }

      .ha-advanced-tooltip-enable.ha-advanced-tooltip-top .ha-advanced-tooltip-content::after,
      body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-top .ha-advanced-tooltip-content::after {
        top: 100%;
        right: unset;
        bottom: unset;
        left: 50%;
        border-color: var(--ha-tooltip-arrow-color) transparent transparent transparent;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%)
      }

      .ha-advanced-tooltip-enable.ha-advanced-tooltip-bottom .ha-advanced-tooltip-content,
      body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-bottom .ha-advanced-tooltip-content {
        top: calc(101% + var(--ha-tooltip-arrow-distance));
        right: 0;
        bottom: unset;
        left: 0;
        margin: 0 auto
      }

      .ha-advanced-tooltip-enable.ha-advanced-tooltip-bottom .ha-advanced-tooltip-content::after,
      body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-bottom .ha-advanced-tooltip-content::after {
        top: unset;
        right: unset;
        bottom: 100%;
        left: 50%;
        border-color: transparent transparent var(--ha-tooltip-arrow-color) transparent;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%)
      }

      .ha-advanced-tooltip-enable.ha-advanced-tooltip-left .ha-advanced-tooltip-content,
      body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-left .ha-advanced-tooltip-content {
        top: 50%;
        right: calc(101% + var(--ha-tooltip-arrow-distance));
        bottom: unset;
        left: unset;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      .ha-advanced-tooltip-enable.ha-advanced-tooltip-left .ha-advanced-tooltip-content::after,
      body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-left .ha-advanced-tooltip-content::after {
        top: 50%;
        right: unset;
        bottom: unset;
        left: 100%;
        border-color: transparent transparent transparent var(--ha-tooltip-arrow-color);
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      .ha-advanced-tooltip-enable.ha-advanced-tooltip-right .ha-advanced-tooltip-content,
      body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-right .ha-advanced-tooltip-content {
        top: 50%;
        right: unset;
        bottom: unset;
        left: calc(101% + var(--ha-tooltip-arrow-distance));
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      .ha-advanced-tooltip-enable.ha-advanced-tooltip-right .ha-advanced-tooltip-content::after,
      body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-right .ha-advanced-tooltip-content::after {
        top: 50%;
        right: 100%;
        bottom: unset;
        left: unset;
        border-color: transparent var(--ha-tooltip-arrow-color) transparent transparent;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-top .ha-advanced-tooltip-content {
        top: unset;
        right: 0;
        bottom: calc(101% + var(--ha-tooltip-arrow-distance));
        left: 0;
        margin: 0 auto
      }

      body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-top .ha-advanced-tooltip-content::after {
        top: 100%;
        right: unset;
        bottom: unset;
        left: 50%;
        border-color: var(--ha-tooltip-arrow-color) transparent transparent transparent;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%)
      }

      body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-bottom .ha-advanced-tooltip-content {
        top: calc(101% + var(--ha-tooltip-arrow-distance));
        right: 0;
        bottom: unset;
        left: 0;
        margin: 0 auto
      }

      body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-bottom .ha-advanced-tooltip-content::after {
        top: unset;
        right: unset;
        bottom: 100%;
        left: 50%;
        border-color: transparent transparent var(--ha-tooltip-arrow-color) transparent;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%)
      }

      body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-left .ha-advanced-tooltip-content {
        top: 50%;
        right: calc(101% + var(--ha-tooltip-arrow-distance));
        bottom: unset;
        left: unset;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-left .ha-advanced-tooltip-content::after {
        top: 50%;
        right: unset;
        bottom: unset;
        left: 100%;
        border-color: transparent transparent transparent var(--ha-tooltip-arrow-color);
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-right .ha-advanced-tooltip-content {
        top: 50%;
        right: unset;
        bottom: unset;
        left: calc(101% + var(--ha-tooltip-arrow-distance));
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-right .ha-advanced-tooltip-content::after {
        top: 50%;
        right: 100%;
        bottom: unset;
        left: unset;
        border-color: transparent var(--ha-tooltip-arrow-color) transparent transparent;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      body.elementor-editor-active .happy-addon.ha-gravityforms .gform_wrapper {
        display: block !important
      }

      .ha-scroll-to-top-wrap.ha-scroll-to-top-hide {
        display: none
      }

      .ha-scroll-to-top-wrap.edit-mode,
      .ha-scroll-to-top-wrap.single-page-off {
        display: none !important
      }

      .ha-scroll-to-top-button {
        position: fixed;
        right: 15px;
        bottom: 15px;
        z-index: 9999;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center;
        -ms-flex-align: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 50px;
        background-color: #5636d1;
        color: #fff;
        text-align: center;
        opacity: 1;
        cursor: pointer;
        -webkit-transition: all .3s;
        transition: all .3s
      }

      .ha-scroll-to-top-button i {
        color: #fff;
        font-size: 16px
      }

      .ha-scroll-to-top-button:hover {
        background-color: #e2498a
      }

      .ha-particle-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
      }

      .ha-floating-element {
        position: fixed;
        z-index: 999
      }

      .ha-floating-element-align-top-left .ha-floating-element {
        top: 0;
        left: 0
      }

      .ha-floating-element-align-top-right .ha-floating-element {
        top: 0;
        right: 0
      }

      .ha-floating-element-align-top-center .ha-floating-element {
        top: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%)
      }

      .ha-floating-element-align-middle-left .ha-floating-element {
        top: 50%;
        left: 0;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      .ha-floating-element-align-middle-right .ha-floating-element {
        top: 50%;
        right: 0;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%)
      }

      .ha-floating-element-align-bottom-left .ha-floating-element {
        bottom: 0;
        left: 0
      }

      .ha-floating-element-align-bottom-right .ha-floating-element {
        right: 0;
        bottom: 0
      }

      .ha-floating-element-align-bottom-center .ha-floating-element {
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%)
      }

      .ha-editor-placeholder {
        padding: 20px;
        border: 5px double #f1f1f1;
        background: #f8f8f8;
        text-align: center;
        opacity: .5
      }

      .ha-editor-placeholder-title {
        margin-top: 0;
        margin-bottom: 8px;
        font-weight: 700;
        font-size: 16px
      }

      .ha-editor-placeholder-content {
        margin: 0;
        font-size: 12px
      }

      .ha-p-relative {
        position: relative
      }

      .ha-p-absolute {
        position: absolute
      }

      .ha-p-fixed {
        position: fixed
      }

      .ha-w-1 {
        width: 1%
      }

      .ha-h-1 {
        height: 1%
      }

      .ha-w-2 {
        width: 2%
      }

      .ha-h-2 {
        height: 2%
      }

      .ha-w-3 {
        width: 3%
      }

      .ha-h-3 {
        height: 3%
      }

      .ha-w-4 {
        width: 4%
      }

      .ha-h-4 {
        height: 4%
      }

      .ha-w-5 {
        width: 5%
      }

      .ha-h-5 {
        height: 5%
      }

      .ha-w-6 {
        width: 6%
      }

      .ha-h-6 {
        height: 6%
      }

      .ha-w-7 {
        width: 7%
      }

      .ha-h-7 {
        height: 7%
      }

      .ha-w-8 {
        width: 8%
      }

      .ha-h-8 {
        height: 8%
      }

      .ha-w-9 {
        width: 9%
      }

      .ha-h-9 {
        height: 9%
      }

      .ha-w-10 {
        width: 10%
      }

      .ha-h-10 {
        height: 10%
      }

      .ha-w-11 {
        width: 11%
      }

      .ha-h-11 {
        height: 11%
      }

      .ha-w-12 {
        width: 12%
      }

      .ha-h-12 {
        height: 12%
      }

      .ha-w-13 {
        width: 13%
      }

      .ha-h-13 {
        height: 13%
      }

      .ha-w-14 {
        width: 14%
      }

      .ha-h-14 {
        height: 14%
      }

      .ha-w-15 {
        width: 15%
      }

      .ha-h-15 {
        height: 15%
      }

      .ha-w-16 {
        width: 16%
      }

      .ha-h-16 {
        height: 16%
      }

      .ha-w-17 {
        width: 17%
      }

      .ha-h-17 {
        height: 17%
      }

      .ha-w-18 {
        width: 18%
      }

      .ha-h-18 {
        height: 18%
      }

      .ha-w-19 {
        width: 19%
      }

      .ha-h-19 {
        height: 19%
      }

      .ha-w-20 {
        width: 20%
      }

      .ha-h-20 {
        height: 20%
      }

      .ha-w-21 {
        width: 21%
      }

      .ha-h-21 {
        height: 21%
      }

      .ha-w-22 {
        width: 22%
      }

      .ha-h-22 {
        height: 22%
      }

      .ha-w-23 {
        width: 23%
      }

      .ha-h-23 {
        height: 23%
      }

      .ha-w-24 {
        width: 24%
      }

      .ha-h-24 {
        height: 24%
      }

      .ha-w-25 {
        width: 25%
      }

      .ha-h-25 {
        height: 25%
      }

      .ha-w-26 {
        width: 26%
      }

      .ha-h-26 {
        height: 26%
      }

      .ha-w-27 {
        width: 27%
      }

      .ha-h-27 {
        height: 27%
      }

      .ha-w-28 {
        width: 28%
      }

      .ha-h-28 {
        height: 28%
      }

      .ha-w-29 {
        width: 29%
      }

      .ha-h-29 {
        height: 29%
      }

      .ha-w-30 {
        width: 30%
      }

      .ha-h-30 {
        height: 30%
      }

      .ha-w-31 {
        width: 31%
      }

      .ha-h-31 {
        height: 31%
      }

      .ha-w-32 {
        width: 32%
      }

      .ha-h-32 {
        height: 32%
      }

      .ha-w-33 {
        width: 33%
      }

      .ha-h-33 {
        height: 33%
      }

      .ha-w-34 {
        width: 34%
      }

      .ha-h-34 {
        height: 34%
      }

      .ha-w-35 {
        width: 35%
      }

      .ha-h-35 {
        height: 35%
      }

      .ha-w-36 {
        width: 36%
      }

      .ha-h-36 {
        height: 36%
      }

      .ha-w-37 {
        width: 37%
      }

      .ha-h-37 {
        height: 37%
      }

      .ha-w-38 {
        width: 38%
      }

      .ha-h-38 {
        height: 38%
      }

      .ha-w-39 {
        width: 39%
      }

      .ha-h-39 {
        height: 39%
      }

      .ha-w-40 {
        width: 40%
      }

      .ha-h-40 {
        height: 40%
      }

      .ha-w-41 {
        width: 41%
      }

      .ha-h-41 {
        height: 41%
      }

      .ha-w-42 {
        width: 42%
      }

      .ha-h-42 {
        height: 42%
      }

      .ha-w-43 {
        width: 43%
      }

      .ha-h-43 {
        height: 43%
      }

      .ha-w-44 {
        width: 44%
      }

      .ha-h-44 {
        height: 44%
      }

      .ha-w-45 {
        width: 45%
      }

      .ha-h-45 {
        height: 45%
      }

      .ha-w-46 {
        width: 46%
      }

      .ha-h-46 {
        height: 46%
      }

      .ha-w-47 {
        width: 47%
      }

      .ha-h-47 {
        height: 47%
      }

      .ha-w-48 {
        width: 48%
      }

      .ha-h-48 {
        height: 48%
      }

      .ha-w-49 {
        width: 49%
      }

      .ha-h-49 {
        height: 49%
      }

      .ha-w-50 {
        width: 50%
      }

      .ha-h-50 {
        height: 50%
      }

      .ha-w-51 {
        width: 51%
      }

      .ha-h-51 {
        height: 51%
      }

      .ha-w-52 {
        width: 52%
      }

      .ha-h-52 {
        height: 52%
      }

      .ha-w-53 {
        width: 53%
      }

      .ha-h-53 {
        height: 53%
      }

      .ha-w-54 {
        width: 54%
      }

      .ha-h-54 {
        height: 54%
      }

      .ha-w-55 {
        width: 55%
      }

      .ha-h-55 {
        height: 55%
      }

      .ha-w-56 {
        width: 56%
      }

      .ha-h-56 {
        height: 56%
      }

      .ha-w-57 {
        width: 57%
      }

      .ha-h-57 {
        height: 57%
      }

      .ha-w-58 {
        width: 58%
      }

      .ha-h-58 {
        height: 58%
      }

      .ha-w-59 {
        width: 59%
      }

      .ha-h-59 {
        height: 59%
      }

      .ha-w-60 {
        width: 60%
      }

      .ha-h-60 {
        height: 60%
      }

      .ha-w-61 {
        width: 61%
      }

      .ha-h-61 {
        height: 61%
      }

      .ha-w-62 {
        width: 62%
      }

      .ha-h-62 {
        height: 62%
      }

      .ha-w-63 {
        width: 63%
      }

      .ha-h-63 {
        height: 63%
      }

      .ha-w-64 {
        width: 64%
      }

      .ha-h-64 {
        height: 64%
      }

      .ha-w-65 {
        width: 65%
      }

      .ha-h-65 {
        height: 65%
      }

      .ha-w-66 {
        width: 66%
      }

      .ha-h-66 {
        height: 66%
      }

      .ha-w-67 {
        width: 67%
      }

      .ha-h-67 {
        height: 67%
      }

      .ha-w-68 {
        width: 68%
      }

      .ha-h-68 {
        height: 68%
      }

      .ha-w-69 {
        width: 69%
      }

      .ha-h-69 {
        height: 69%
      }

      .ha-w-70 {
        width: 70%
      }

      .ha-h-70 {
        height: 70%
      }

      .ha-w-71 {
        width: 71%
      }

      .ha-h-71 {
        height: 71%
      }

      .ha-w-72 {
        width: 72%
      }

      .ha-h-72 {
        height: 72%
      }

      .ha-w-73 {
        width: 73%
      }

      .ha-h-73 {
        height: 73%
      }

      .ha-w-74 {
        width: 74%
      }

      .ha-h-74 {
        height: 74%
      }

      .ha-w-75 {
        width: 75%
      }

      .ha-h-75 {
        height: 75%
      }

      .ha-w-76 {
        width: 76%
      }

      .ha-h-76 {
        height: 76%
      }

      .ha-w-77 {
        width: 77%
      }

      .ha-h-77 {
        height: 77%
      }

      .ha-w-78 {
        width: 78%
      }

      .ha-h-78 {
        height: 78%
      }

      .ha-w-79 {
        width: 79%
      }

      .ha-h-79 {
        height: 79%
      }

      .ha-w-80 {
        width: 80%
      }

      .ha-h-80 {
        height: 80%
      }

      .ha-w-81 {
        width: 81%
      }

      .ha-h-81 {
        height: 81%
      }

      .ha-w-82 {
        width: 82%
      }

      .ha-h-82 {
        height: 82%
      }

      .ha-w-83 {
        width: 83%
      }

      .ha-h-83 {
        height: 83%
      }

      .ha-w-84 {
        width: 84%
      }

      .ha-h-84 {
        height: 84%
      }

      .ha-w-85 {
        width: 85%
      }

      .ha-h-85 {
        height: 85%
      }

      .ha-w-86 {
        width: 86%
      }

      .ha-h-86 {
        height: 86%
      }

      .ha-w-87 {
        width: 87%
      }

      .ha-h-87 {
        height: 87%
      }

      .ha-w-88 {
        width: 88%
      }

      .ha-h-88 {
        height: 88%
      }

      .ha-w-89 {
        width: 89%
      }

      .ha-h-89 {
        height: 89%
      }

      .ha-w-90 {
        width: 90%
      }

      .ha-h-90 {
        height: 90%
      }

      .ha-w-91 {
        width: 91%
      }

      .ha-h-91 {
        height: 91%
      }

      .ha-w-92 {
        width: 92%
      }

      .ha-h-92 {
        height: 92%
      }

      .ha-w-93 {
        width: 93%
      }

      .ha-h-93 {
        height: 93%
      }

      .ha-w-94 {
        width: 94%
      }

      .ha-h-94 {
        height: 94%
      }

      .ha-w-95 {
        width: 95%
      }

      .ha-h-95 {
        height: 95%
      }

      .ha-w-96 {
        width: 96%
      }

      .ha-h-96 {
        height: 96%
      }

      .ha-w-97 {
        width: 97%
      }

      .ha-h-97 {
        height: 97%
      }

      .ha-w-98 {
        width: 98%
      }

      .ha-h-98 {
        height: 98%
      }

      .ha-w-99 {
        width: 99%
      }

      .ha-h-99 {
        height: 99%
      }

      .ha-w-100 {
        width: 100%
      }

      .ha-h-100 {
        height: 100%
      }

      .ha-flex {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -ms-flexbox !important;
        display: flex !important
      }

      .ha-flex-inline {
        display: -webkit-inline-box !important;
        display: -webkit-inline-flex !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
      }

      .ha-flex-x-start {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        -webkit-justify-content: flex-start;
        justify-content: flex-start
      }

      .ha-flex-x-end {
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        -webkit-justify-content: flex-end;
        justify-content: flex-end
      }

      .ha-flex-x-between {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        -webkit-justify-content: space-between;
        justify-content: space-between
      }

      .ha-flex-x-around {
        -ms-flex-pack: distribute;
        -webkit-justify-content: space-around;
        justify-content: space-around
      }

      .ha-flex-x-even {
        -webkit-box-pack: space-evenly;
        -ms-flex-pack: space-evenly;
        -webkit-justify-content: space-evenly;
        justify-content: space-evenly
      }

      .ha-flex-x-center {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center
      }

      .ha-flex-y-top {
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        align-items: flex-start;
        -ms-flex-align: start
      }

      .ha-flex-y-center {
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center;
        -ms-flex-align: center
      }

      .ha-flex-y-bottom {
        -webkit-box-align: end;
        -webkit-align-items: flex-end;
        align-items: flex-end;
        -ms-flex-align: end
      }
    </style>
    <link rel='stylesheet' id='widget-spacer-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/css/widget-spacer.min.css' media='all' />
    <link rel='stylesheet' id='widget-image-box-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/css/widget-image-box.min.css' media='all' />
    <link rel='stylesheet' id='widget-heading-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/css/widget-heading.min.css' media='all' />
    <link rel='stylesheet' id='widget-icon-list-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.css' media='all' />
    <link rel='stylesheet' id='eael-general-css' href='{{ asset('frontend') }}/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css' media='all' />
    <link rel='stylesheet' id='eael-6-css' href='{{ asset('frontend') }}/wp-content/uploads/essential-addons-elementor/eael-6.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css' media='all' />
    <style id='elementor-icons-inline-css'>
      .elementor-add-new-section .elementor-add-templately-promo-button {
        background-color: #5d4fff;
        background-image: url(frontend/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
        background-repeat: no-repeat;
        background-position: center center;
        position: relative;
      }

      .elementor-add-new-section .elementor-add-templately-promo-button>i {
        height: 12px;
      }

      body .elementor-add-new-section .elementor-add-section-area-button {
        margin-left: 0;
      }

      .elementor-add-new-section .elementor-add-templately-promo-button {
        background-color: #5d4fff;
        background-image: url(frontend/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
        background-repeat: no-repeat;
        background-position: center center;
        position: relative;
      }

      .elementor-add-new-section .elementor-add-templately-promo-button>i {
        height: 12px;
      }

      body .elementor-add-new-section .elementor-add-section-area-button {
        margin-left: 0;
      }

      .elementor-add-new-section .elementor-add-templately-promo-button {
        background-color: #5d4fff;
        background-image: url(frontend/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
        background-repeat: no-repeat;
        background-position: center center;
        position: relative;
      }

      .elementor-add-new-section .elementor-add-templately-promo-button>i {
        height: 12px;
      }

      body .elementor-add-new-section .elementor-add-section-area-button {
        margin-left: 0;
      }
    </style>
    <link rel='stylesheet' id='swiper-css' href='{{ asset('frontend') }}/wp-content/plugins/qi-addons-for-elementor/assets/plugins/swiper/8.4.5/swiper.min.css' media='all' />
    <link rel='stylesheet' id='e-swiper-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css' media='all' />
    <link rel='stylesheet' id='elementor-post-5-css' href='{{ asset('frontend') }}/wp-content/uploads/elementor/css/post-5.css' media='all' />
    <link rel='stylesheet' id='cffstyles-css' href='{{ asset('frontend') }}/wp-content/plugins/custom-facebook-feed/assets/css/cff-style.min.css' media='all' />
    <link rel='stylesheet' id='sbistyles-css' href='{{ asset('frontend') }}/wp-content/plugins/instagram-feed/css/sbi-styles.min.css' media='all' />
    <link rel='stylesheet' id='elementor-pro-css' href='{{ asset('frontend') }}/wp-content/plugins/pro-elements/assets/css/frontend.min.css' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css' media='all' />
    <link rel='stylesheet' id='e-animation-bounce-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/animations/styles/bounce.min.css' media='all' />
    <link rel='stylesheet' id='ps-general-css' href='{{ asset('frontend') }}/wp-content/plugins/bdthemes-prime-slider-lite/assets/css/ps-general.css' media='all' />
    <link rel='stylesheet' id='e-animation-pulse-grow-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-pulse-grow.min.css' media='all' />
    <link rel='stylesheet' id='e-animation-zoomIn-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/animations/styles/zoomIn.min.css' media='all' />
    <link rel='stylesheet' id='e-shapes-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/css/conditionals/shapes.min.css' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInDown-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInDown.min.css' media='all' />
    <link rel='stylesheet' id='widget-animated-headline-css' href='{{ asset('frontend') }}/wp-content/plugins/pro-elements/assets/css/widget-animated-headline.min.css' media='all' />
    <link rel='stylesheet' id='widget-carousel-css' href='{{ asset('frontend') }}/wp-content/plugins/pro-elements/assets/css/widget-carousel.min.css' media='all' />
    <link rel='stylesheet' id='widget-lottie-css' href='{{ asset('frontend') }}/wp-content/plugins/pro-elements/assets/css/widget-lottie.min.css' media='all' />
    <link rel='stylesheet' id='widget-image-carousel-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/css/widget-image-carousel.min.css' media='all' />
    <link rel='stylesheet' id='widget-counter-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/css/widget-counter.min.css' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInLeft-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInLeft.min.css' media='all' />
    <link rel='stylesheet' id='elementor-post-6-css' href='{{ asset('frontend') }}/wp-content/uploads/elementor/css/post-6.css' media='all' />
    <link rel='stylesheet' id='elementor-post-1688-css' href='{{ asset('frontend') }}/wp-content/uploads/elementor/css/post-1688.css' media='all' />
    <link rel='stylesheet' id='happy-icons-css' href='{{ asset('frontend') }}/wp-content/plugins/happy-elementor-addons/assets/fonts/style.min.css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css' href='{{ asset('frontend') }}/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css' media='all' />
    <link rel='stylesheet' id='pojo-a11y-css' href='{{ asset('frontend') }}/wp-content/plugins/pojo-accessibility/assets/css/style.min.css' media='all' />
    <link rel='stylesheet' id='blocksy-fonts-font-source-google-css' href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,600&#038;display=swap' media='all' />
    <link rel='stylesheet' id='ct-main-styles-css' href='{{ asset('frontend') }}/wp-content/themes/blocksy/static/bundle/main.min.css' media='all' />
    <link rel='stylesheet' id='ct-page-title-styles-css' href='{{ asset('frontend') }}/wp-content/themes/blocksy/static/bundle/page-title.min.css' media='all' />
    <link rel='stylesheet' id='ct-elementor-styles-css' href='{{ asset('frontend') }}/wp-content/themes/blocksy/static/bundle/elementor-frontend.min.css' media='all' />
    <link rel='stylesheet' id='ct-wpforms-styles-css' href='{{ asset('frontend') }}/wp-content/themes/blocksy/static/bundle/wpforms.min.css' media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css' href='{{ asset('frontend') }}/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css' media='all' />
    <link rel='stylesheet' id='ekit-responsive-css' href='{{ asset('frontend') }}/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css' media='all' />
    <link rel='stylesheet' id='happy-elementor-addons-6-css' href='{{ asset('frontend') }}/wp-content/uploads/happyaddons/css/ha-6.css' media='all' />
    <link rel='stylesheet' id='prime-slider-site-css' href='{{ asset('frontend') }}/wp-content/plugins/bdthemes-prime-slider-lite/assets/css/prime-slider-site.css' media='all' />
    <link rel='stylesheet' id='upk-site-css' href='{{ asset('frontend') }}/wp-content/plugins/ultimate-post-kit/assets/css/upk-site.css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Outfit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.6.2' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-1-css' href='{{ asset('frontend') }}/wp-content/plugins/happy-elementor-addons/assets/fonts/style.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-happy-icons-css' href='{{ asset('frontend') }}/wp-content/plugins/happy-elementor-addons/assets/fonts/style.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="{{ asset('frontend') }}/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
    <script src="{{ asset('frontend') }}/wp-includes/js/jquery/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js" id="font-awesome-4-shim-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/happy-elementor-addons/assets/vendor/dom-purify/purify.min.js" id="dom-purify-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/bdthemes-prime-slider-lite/assets/js/bdt-uikit.min.js" id="bdt-uikit-js"></script>
    <link rel="https://api.w.org/" href="https://startupafrica.org/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://startupafrica.org/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.6.2" />
    <link rel='shortlink' href={{ route('index') }} /><noscript>
      <link rel='stylesheet' href='{{ asset('frontend') }}/wp-content/themes/blocksy/static/bundle/no-scripts.min.css' type='text/css'>
    </noscript>
    <meta name="generator" content="Elementor 3.24.7; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style type="text/css">
      #pojo-a11y-toolbar .pojo-a11y-toolbar-toggle a {
        background-color: #4054b2;
        color: #ffffff;
      }

      #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay,
      #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items.pojo-a11y-links {
        border-color: #4054b2;
      }

      body.pojo-a11y-focusable a:focus {
        outline-style: solid !important;
        outline-width: 1px !important;
        outline-color: #FF0000 !important;
      }

      #pojo-a11y-toolbar {
        top: 100px !important;
      }

      #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay {
        background-color: #ffffff;
      }

      #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items li.pojo-a11y-toolbar-item a,
      #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay p.pojo-a11y-toolbar-title {
        color: #333333;
      }

      #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items li.pojo-a11y-toolbar-item a.active {
        background-color: #4054b2;
        color: #ffffff;
      }

      @media (max-width: 767px) {
        #pojo-a11y-toolbar {
          top: 50px !important;
        }
      }
    </style>
    <style>
      .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
      .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
        background-image: none !important;
      }

      @media screen and (max-height: 1024px) {

        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
          background-image: none !important;
        }
      }

      @media screen and (max-height: 640px) {

        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
          background-image: none !important;
        }
      }
    </style>
    <link rel="icon" href="https://startupafrica.org/wp-content/uploads/2023/10/elementor/thumbs/av-qdb03zn54d2kxmn0b89h0tz1bijzb9o100xj5anwj8.png" sizes="32x32" />
    <link rel="icon" href="{{ asset('frontend') }}/wp-content/uploads/2023/10/av.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('frontend') }}/wp-content/uploads/2023/10/av.png" />
    <meta name="msapplication-TileImage" content="https://startupafrica.org/wp-content/uploads/2023/10/av.png" />
    <style id="wpforms-css-vars-root">
      :root {
        --wpforms-field-border-radius: 3px;
        --wpforms-field-background-color: #ffffff;
        --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
        --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
        --wpforms-label-color: rgba(0, 0, 0, 0.85);
        --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
        --wpforms-label-error-color: #d63637;
        --wpforms-button-border-radius: 3px;
        --wpforms-button-background-color: #066aab;
        --wpforms-button-text-color: #ffffff;
        --wpforms-field-size-input-height: 43px;
        --wpforms-field-size-input-spacing: 15px;
        --wpforms-field-size-font-size: 16px;
        --wpforms-field-size-line-height: 19px;
        --wpforms-field-size-padding-h: 14px;
        --wpforms-field-size-checkbox-size: 16px;
        --wpforms-field-size-sublabel-spacing: 5px;
        --wpforms-field-size-icon-size: 1;
        --wpforms-label-size-font-size: 16px;
        --wpforms-label-size-line-height: 19px;
        --wpforms-label-size-sublabel-font-size: 14px;
        --wpforms-label-size-sublabel-line-height: 17px;
        --wpforms-button-size-font-size: 17px;
        --wpforms-button-size-height: 41px;
        --wpforms-button-size-padding-h: 15px;
        --wpforms-button-size-margin-top: 10px;
      }
    </style>
  </head>
  <body class="home page-template page-template-elementor_header_footer page page-id-6 wp-custom-logo wp-embed-responsive qodef-qi--no-touch qi-addons-for-elementor-1.8.1 elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-6" data-link="type-2" data-prefix="single_page" data-header="type-1:sticky" data-footer="type-1" itemscope="itemscope" itemtype="https://schema.org/WebPage"><a class="skip-link show-on-focus" href="#main"> 
Skip to content</a>
    <div class="ct-drawer-canvas" data->
      <div id="offcanvas" class="ct-panel ct-header" data-behaviour="right-side">
    
        <div class="ct-panel-inner">
          <div class="ct-panel-actions"><button class="ct-toggle-close" data-type="type-1" aria-label="Close drawer"><svg class="ct-icon" width="12" height="12" viewBox="0 0 15 15">
                <path d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z" />
              </svg></button></div>
          <div class="ct-panel-content" data-device="desktop">
            <div class="ct-panel-content-inner"></div>
          </div>
          <div class="ct-panel-content" data-device="mobile">
            <div class="ct-panel-content-inner"><a href="{{ route('index') }}" class="site-logo-container" data-id="offcanvas-logo" rel="home" itemprop="url"><img width="323" height="112" src="{{ asset('storage/'.$logo->photo) }}" class="default-logo" alt="BSEED" decoding="async" sizes="(max-width: 323px) 100vw, 323px" /></a>
              <nav class="mobile-menu menu-container has-submenu" data-id="mobile-menu" data-interaction="click" data-toggle-type="type-1" data-submenu-dots="yes" aria-label="Off Canvas Menu">
                <ul id="menu-n-1" role="menubar">
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-6 current_page_item menu-item-2638" role="none"><a href="{{ route('index') }}" aria-current="page" class="ct-menu-link" role="menuitem">Home</a></li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3507" role="none"><span class="ct-sub-menu-parent"><a href="#" class="ct-menu-link" role="menuitem">About us</a><button class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu" aria-haspopup="true" aria-expanded="false" role="menuitem"><svg class="ct-icon toggle-icon-1" width="15" height="15" viewBox="0 0 15 15">
                          <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z" />
                        </svg></button></span>
                    <ul class="sub-menu" role="menu">
                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2640" role="none"><a href="{{ route('about_us') }}" class="ct-menu-link" role="menuitem">About Us</a></li>
                      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2653" role="none"><span class="ct-sub-menu-parent"><a href="#" class="ct-menu-link" role="menuitem">Team</a><button class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu" aria-haspopup="true" aria-expanded="false" role="menuitem"><svg class="ct-icon toggle-icon-1" width="15" height="15" viewBox="0 0 15 15">
                              <path d="M3.9,5.1l3.6,3.6l3.6-3.6l1.4,0.7l-5,5l-5-5L3.9,5.1z" />
                            </svg></button></span>
                        <ul class="sub-menu" role="menu">
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2654" role="none"><a href="{{ route('team_member') }}" class="ct-menu-link" role="menuitem">Team Member</a></li>
                          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2641" role="none"><a href="{{ route('advisory_member') }}" class="ct-menu-link" role="menuitem">Advisory Board</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2645" role="none"><span class="ct-sub-menu-parent"><a href="{{ route('focus_point') }}" class="ct-menu-link" role="menuitem">Our Focus Area</a><button class="ct-toggle-dropdown-mobile" aria-label="Expand dropdown menu" aria-haspopup="true" aria-expanded="false" role="menuitem"></button></span>
          
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3508" role="none"><span class="ct-sub-menu-parent"><a href="{{ route('event_all') }}" class="ct-menu-link" role="menuitem">Events </a>
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3412" role="none"><span class="ct-sub-menu-parent"><a href="{{ route('blog_all') }}" class="ct-menu-link" role="menuitem">Blogs</a></span>
         
                  </li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2643" role="none"><a href="{{ route('contact_us') }}" class="ct-menu-link" role="menuitem">Contact Us</a></li>
                </ul>
              </nav>
              <div class="ct-header-cta" data-id="button"><a href="#" class="ct-button" data-size="medium" aria-label="Donate"><svg width="20" height="20" viewBox="0,0,640,512">
                    <path d="M204.8 230.4c-10.6-14.1-30.7-17-44.8-6.4-14.1 10.6-17 30.7-6.4 44.8l38.1 50.8c4.8 6.4 4.1 15.3-1.5 20.9l-12.8 12.8c-6.7 6.7-17.6 6.2-23.6-1.1L64 244.4V96c0-17.7-14.3-32-32-32S0 78.3 0 96v218.4c0 10.9 3.7 21.5 10.5 30l104.1 134.3c5 6.5 8.4 13.9 10.4 21.7 1.8 6.9 8.1 11.6 15.3 11.6H272c8.8 0 16-7.2 16-16V384c0-27.7-9-54.6-25.6-76.8l-57.6-76.8zM608 64c-17.7 0-32 14.3-32 32v148.4l-89.8 107.8c-6 7.2-17 7.7-23.6 1.1l-12.8-12.8c-5.6-5.6-6.3-14.5-1.5-20.9l38.1-50.8c10.6-14.1 7.7-34.2-6.4-44.8-14.1-10.6-34.2-7.7-44.8 6.4l-57.6 76.8C361 329.4 352 356.3 352 384v112c0 8.8 7.2 16 16 16h131.7c7.1 0 13.5-4.7 15.3-11.6 2-7.8 5.4-15.2 10.4-21.7l104.1-134.3c6.8-8.5 10.5-19.1 10.5-30V96c0-17.7-14.3-32-32-32z" />
                  </svg>Donate </a></div>
              <div class="ct-contact-info" data-id="contacts">
                <ul data-icons-type="rounded:solid" data-items-direction="horizontal">
                  <li><span class="ct-icon-container"><svg width='15' height='15' viewBox='0 0 20 20'>
                        <path d='M10,0C6.1,0,3,3.1,3,7c0,4.5,6,11.8,6.2,12.1L10,20l0.8-0.9C11,18.8,17,11.5,17,7C17,3.1,13.9,0,10,0z M10,2c2.8,0,5,2.2,5,5c0,2.7-3.1,7.4-5,9.8C8.1,14.4,5,9.7,5,7C5,4.2,7.2,2,10,2zM10,4.5C8.6,4.5,7.5,5.6,7.5,7S8.6,9.5,10,9.5s2.5-1.1,2.5-2.5S11.4,4.5,10,4.5z' />
                      </svg></span>
                    <div class="contact-info"><span class="contact-title"> Address: </span><span class="contact-text"> {!! $general->address !!} </span></div>
                  </li>
                  <li><span class="ct-icon-container"><svg width='15' height='15' viewBox='0 0 15 15'>
                        <path d='M12.8 2.2C11.4.8 9.5 0 7.5 0S3.6.8 2.2 2.2C.8 3.6 0 5.5 0 7.5 0 11.6 3.4 15 7.5 15c1.6 0 3.3-.5 4.6-1.5.3-.2.4-.7.1-1-.2-.3-.7-.4-1-.1-1.1.8-2.4 1.3-3.7 1.3-3.4 0-6.1-2.8-6.1-6.1 0-1.6.6-3.2 1.8-4.3C4.3 2 5.9 1.4 7.5 1.4c1.6 0 3.2.6 4.3 1.8 1.2 1.2 1.8 2.7 1.8 4.3v.7c0 .8-.6 1.4-1.4 1.4s-1.4-.6-1.4-1.4V4.8c0-.4-.3-.7-.7-.7-.4 0-.7.3-.7.7-.4-.4-1.1-.7-1.9-.7-1.9 0-3.4 1.5-3.4 3.4s1.5 3.4 3.4 3.4c1 0 1.9-.5 2.5-1.2.5.7 1.3 1.2 2.2 1.2 1.5 0 2.7-1.2 2.7-2.7v-.7c.1-2-.7-3.9-2.1-5.3zM7.5 9.5c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z' />
                      </svg></span>
                    <div class="contact-info"><span class="contact-title"> Email: <br> <a href="mailto:{{ $general->email }}">{{ $general->email }}</a></div>
                  </li>
                  <li><span class="ct-icon-container"><svg width='15' height='15' viewBox='0 0 15 15'>
                        <path d='M12.3 15h-.2c-2.1-.2-4.1-1-5.9-2.1-1.6-1-3.1-2.5-4.1-4.1C1 7 .2 5 0 2.9-.1 1.8.7.8 1.8.7H4c1 0 1.9.7 2 1.7.1.6.2 1.1.4 1.7.3.7.1 1.6-.5 2.1l-.4.4c.7 1.1 1.7 2.1 2.9 2.9l.4-.5c.6-.6 1.4-.7 2.1-.5.6.3 1.1.4 1.7.5 1 .1 1.8 1 1.7 2v2c0 .5-.2 1-.6 1.4-.3.4-.8.6-1.4.6zM4 2.1H2c-.2 0-.3.1-.4.2-.1.1-.1.3-.1.4.2 1.9.8 3.7 1.8 5.3.9 1.5 2.2 2.7 3.7 3.7 1.6 1 3.4 1.7 5.3 1.9.2 0 .3-.1.4-.2.1-.1.2-.2.2-.4v-2c0-.3-.2-.5-.5-.6-.7-.1-1.3-.3-2-.5-.2-.1-.4 0-.6.1l-.8.9c-.2.2-.6.3-.9.1C6.4 10 5 8.6 4 6.9c-.2-.3-.1-.7.1-.9l.8-.8c.2-.2.2-.4.1-.6-.2-.6-.4-1.3-.5-2 0-.3-.2-.5-.5-.5zm7.7 4.5c-.4 0-.7-.2-.7-.6-.2-1-1-1.8-2-2-.4 0-.7-.4-.6-.8.1-.4.5-.7.9-.6 1.6.3 2.8 1.5 3.1 3.1.1.4-.2.8-.6.9h-.1zm2.6 0c-.4 0-.7-.3-.7-.6-.3-2.4-2.2-4.3-4.6-4.5-.4-.1-.7-.5-.6-.9 0-.4.4-.6.8-.6 3.1.3 5.4 2.7 5.8 5.8 0 .4-.3.7-.7.8z' />
                      </svg></span>
                    <div class="contact-info"><span class="contact-title"> Phone: </span><span class="contact-text"><a href="tel:{{ $general->phone }}"> {{ $general->phone }} </a></span></div>
                  </li>
                </ul>
              </div>
              <div class="ct-header-socials " data-id="socials">
                <div class="ct-social-box" data-color="custom" data-icon-size="custom" data-icons-type="rounded:solid"><a href="https://www.facebook.com/startupafricainc" data-network="facebook" aria-label="Facebook"><span class="ct-icon-container"><svg width="20" height="20" viewBox="0,0,512,512">
                        <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                      </svg></span></a><a href="https://www.instagram.com/startup_africa/" data-network="instagram" aria-label="Instagram"><span class="ct-icon-container"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
                        <circle cx="10" cy="10" r="3.3" />
                        <path d="M14.2,0H5.8C2.6,0,0,2.6,0,5.8v8.3C0,17.4,2.6,20,5.8,20h8.3c3.2,0,5.8-2.6,5.8-5.8V5.8C20,2.6,17.4,0,14.2,0zM10,15c-2.8,0-5-2.2-5-5s2.2-5,5-5s5,2.2,5,5S12.8,15,10,15z M15.8,5C15.4,5,15,4.6,15,4.2s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8S16.3,5,15.8,5z" />
                      </svg></span></a><a href="https://twitter.com/StartupAfrika" data-network="twitter" aria-label="X (Twitter)"><span class="ct-icon-container"><svg width="20" height="20" viewBox="0,0,512,512">
                        <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                      </svg></span></a><a href="https://www.linkedin.com/company/startupafrica-inc-/" data-network="linkedin" aria-label="LinkedIn"><span class="ct-icon-container"><svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M18.6,0H1.4C0.6,0,0,0.6,0,1.4v17.1C0,19.4,0.6,20,1.4,20h17.1c0.8,0,1.4-0.6,1.4-1.4V1.4C20,0.6,19.4,0,18.6,0z M6,17.1h-3V7.6h3L6,17.1L6,17.1zM4.6,6.3c-1,0-1.7-0.8-1.7-1.7s0.8-1.7,1.7-1.7c0.9,0,1.7,0.8,1.7,1.7C6.3,5.5,5.5,6.3,4.6,6.3z M17.2,17.1h-3v-4.6c0-1.1,0-2.5-1.5-2.5c-1.5,0-1.8,1.2-1.8,2.5v4.7h-3V7.6h2.8v1.3h0c0.4-0.8,1.4-1.5,2.8-1.5c3,0,3.6,2,3.6,4.5V17.1z" />
                      </svg></span></a></div>
              </div>
              <div class="ct-header-divider" data-id="divider"></div>
              <div class="ct-header-text " data-id="text">
                <div class="entry-content is-layout-flow">
                  <p><em>{!! $general->slogan !!}</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><a href="#main-container" class="ct-back-to-top ct-hidden-sm" data-shape="square" data-alignment="right" title="Go to top" aria-label="Go to top" hidden><svg class="ct-icon" width="15" height="15" viewBox="0 0 20 20">
          <path d="M10,0L9.4,0.6L0.8,9.1l1.2,1.2l7.1-7.1V20h1.7V3.3l7.1,7.1l1.2-1.2l-8.5-8.5L10,0z" />
        </svg></a>
    </div>
    <div id="main-container">
        @include('frontend.layouts.header')
        @yield('content')
<div data-elementor-type="footer" data-elementor-id="1688" class="elementor elementor-1688 elementor-location-footer" data-elementor-post-type="elementor_library"><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-deffffb ct-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="deffffb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-background-overlay"></div><div class="elementor-container elementor-column-gap-no"><div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9f1667f" data-id="9f1667f" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-061ce97 elementor-widget elementor-widget-spacer" data-id="061ce97" data-element_type="widget" data-widget_type="spacer.default"><div class="elementor-widget-container"><div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div></div></div><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-0186de3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0186de3" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-274bc91" data-id="274bc91" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3e98669 elementor-position-top elementor-widget elementor-widget-image-box" data-id="3e98669" data-element_type="widget" data-widget_type="image-box.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-image-box-wrapper">
                              <figure class="elementor-image-box-img">
                                <img width="323" height="112" src="{{(!empty($logo->photo))?URL::to('storage/'.$logo->photo):URL::to('image/no_image.png')}}" class="attachment-full size-full wp-image-158" alt="" />
                              </figure>
                              <div class="elementor-image-box-content">
                                <p class="elementor-image-box-description">"{!! $general->slogan !!}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div></div><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-dcfbb11" data-id="dcfbb11" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-fceede5 elementor-widget elementor-widget-heading" data-id="fceede5" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Contact us</h2>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-154ada1 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="154ada1" data-element_type="widget" data-widget_type="icon-list.default">
                          <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                              <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                  <i aria-hidden="true" class="icon icon-phone-call1"></i>
                                </span>
                                <span class="elementor-icon-list-text"> <a href="tel:+{{ $general->phone }}">{{ $general->phone }}</a> </span>
                              </li>
                       
                              <li class="elementor-icon-list-item">
                                <a href="mailto:{{ $general->email }}">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fas fa-envelope-open"></i> 
                                  </span>
                                  <span class="elementor-icon-list-text">{{ $general->email }}</span>
                                </a>
                              </li>
                              <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                  <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                </span>
                                <span class="elementor-icon-list-text"><b>Address</b> : {!! $general->address !!}</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div></div><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8d7c753" data-id="8d7c753" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-d9acbb0 elementor-widget elementor-widget-heading" data-id="d9acbb0" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Quick links</h2>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-9b26259 elementor-mobile-align-right elementor-widget__width-initial elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="9b26259" data-element_type="widget" data-widget_type="icon-list.default">
                          <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                              <li class="elementor-icon-list-item">
                                <a href="{{ route('index') }}">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fab fa-think-peaks"></i>
                                  </span>
                                  <span class="elementor-icon-list-text">Homepage</span>
                                </a>
                              </li>
                              <li class="elementor-icon-list-item">
                                <a href="{{ route('about_us') }}">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fab fa-think-peaks"></i>
                                  </span>
                                  <span class="elementor-icon-list-text">About us</span>
                                </a>
                              </li>
                              <li class="elementor-icon-list-item">
                                <a href="contact-us.html">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fab fa-think-peaks"></i>
                                  </span>
                                  <span class="elementor-icon-list-text">Contact us</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div></div><div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-df75829" data-id="df75829" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-e47976c elementor-widget elementor-widget-heading" data-id="e47976c" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Our Programs</h2>
                          </div>
                        </div>
                        <div class="elementor-element elementor-element-9f6b0b4 elementor-widget__width-initial elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="9f6b0b4" data-element_type="widget" data-widget_type="icon-list.default">
                          <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                              <li class="elementor-icon-list-item">
                                <a href="sio.html">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fab fa-uikit"></i>
                                  </span>
                                  <span class="elementor-icon-list-text">Innovation Olympiads (SIO) </span>
                                </a>
                              </li>
                              <li class="elementor-icon-list-item">
                                <a href="innovation-towards-climate-change-program.html">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fab fa-uikit"></i>
                                  </span>
                                  <span class="elementor-icon-list-text">Innovation Towards Climate Change Program</span>
                                </a>
                              </li>
                              <li class="elementor-icon-list-item">
                                <a href="entrepreneurship-academy.html">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fab fa-uikit"></i>
                                  </span>
                                  <span class="elementor-icon-list-text">Entrepreneurship Academy Program </span>
                                </a>
                              </li>
                              <li class="elementor-icon-list-item">
                                <a href="entrepreneurship-bootcamp.html">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fab fa-uikit"></i>
                                  </span>
                                  <span class="elementor-icon-list-text">Entrepreneurship Bootcamp Program</span>
                                </a>
                              </li>
                              <li class="elementor-icon-list-item">
                                <a href="entrepreneurship-exchange-program.html">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fab fa-uikit"></i>
                                  </span>
                                  <span class="elementor-icon-list-text">Entrepreneurship Exchange Program</span>
                                </a>
                              </li>
                              <li class="elementor-icon-list-item">
                                <a href="educator-capacity-building.html">
                                  <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fab fa-uikit"></i>
                                  </span>
                                  <span class="elementor-icon-list-text">Educator Capacity Building Program</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div></div></div></section></div></div></div></section><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-893895f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="893895f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-96e8521" data-id="96e8521" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-508b496 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="508b496" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}"><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-16e238f" data-id="16e238f" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated">
                        @include('frontend.layouts.footer')
                      </div></div><div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1a1f82c" data-id="1a1f82c" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-ab78914 elementor-align-right elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="ab78914" data-element_type="widget" data-widget_type="icon-list.default">
                          <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                              <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-text"></span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div></div></div></section></div></div></div></section></div>
    </div>
    <!-- Custom Facebook Feed JS --><script type="text/javascript">
      var cffajaxurl = "https://startupafrica.org/wp-admin/admin-ajax.php";
      var cfflinkhashtags = "true";
    </script><div class="gtranslate_wrapper" id="gt-wrapper-50069102"></div>
    <!-- Instagram Feed JS -->
  <script id="cffscripts-js-extra">
      var cffOptions = {
        "placeholder": "https:\/\/startupafrica.org\/wp-content\/plugins\/custom-facebook-feed\/assets\/img\/placeholder.png"
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/custom-facebook-feed/assets/js/cff-scripts.js" id="cffscripts-js"></script><script src="{{ asset('frontend') }}/wp-includes/js/jquery/ui/core.min.js" id="jquery-ui-core-js"></script><script id="qi-addons-for-elementor-script-js-extra">
      var qodefQiAddonsGlobal = {
        "vars": {
          "adminBarHeight": 0,
          "iconArrowLeft": "<svg
          xmlns = \"http:\/\/www.w3.org\/2000\/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"> < line x1 = \"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/> < line x1 = \"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/> < line x1 = \"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>",
          "iconArrowRight": " < svg
          xmlns = \"http:\/\/www.w3.org\/2000\/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"> < line x1 = \"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/> < line x1 = \"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/> < line x1 = \"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>",
          "iconClose": " < svg
          xmlns = \"http:\/\/www.w3.org\/2000\/svg\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"> < g > < path d = \"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"
        }
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/qi-addons-for-elementor/assets/js/main.min.js" id="qi-addons-for-elementor-script-js"></script>
    <script id="eael-general-js-extra">
      var localize = {
        "ajaxurl": "https:\/\/startupafrica.org\/wp-admin\/admin-ajax.php",
        "nonce": "bbe835f276",
        "i18n": {
          "added": "Added ",
          "compare": "Compare",
          "loading": "Loading..."
        },
        "eael_translate_text": {
          "required_text": "is a required field",
          "invalid_text": "Invalid",
          "billing_text": "Billing",
          "shipping_text": "Shipping",
          "fg_mfp_counter_text": "of"
        },
        "page_permalink": "https:\/\/startupafrica.org\/",
        "cart_redirectition": "",
        "cart_page_url": "",
        "el_breakpoints": {
          "mobile": {
            "label": "Mobile Portrait",
            "value": 767,
            "default_value": 767,
            "direction": "max",
            "is_enabled": true
          },
          "mobile_extra": {
            "label": "Mobile Landscape",
            "value": 880,
            "default_value": 880,
            "direction": "max",
            "is_enabled": false
          },
          "tablet": {
            "label": "Tablet Portrait",
            "value": 1024,
            "default_value": 1024,
            "direction": "max",
            "is_enabled": true
          },
          "tablet_extra": {
            "label": "Tablet Landscape",
            "value": 1200,
            "default_value": 1200,
            "direction": "max",
            "is_enabled": false
          },
          "laptop": {
            "label": "Laptop",
            "value": 1366,
            "default_value": 1366,
            "direction": "max",
            "is_enabled": false
          },
          "widescreen": {
            "label": "Widescreen",
            "value": 2400,
            "default_value": 2400,
            "direction": "min",
            "is_enabled": false
          }
        },
        "ParticleThemesData": {
          "default": "{\"particles\":{\"number\":{\"value\":160,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":true,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"repulse\"},\"onclick\":{\"enable\":true,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
          "nasa": "{\"particles\":{\"number\":{\"value\":250,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":1,\"random\":true,\"anim\":{\"enable\":true,\"speed\":1,\"opacity_min\":0,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":4,\"size_min\":0.3,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":1,\"direction\":\"none\",\"random\":true,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":600}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":250,\"size\":0,\"duration\":2,\"opacity\":0,\"speed\":3},\"repulse\":{\"distance\":400,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
          "bubble": "{\"particles\":{\"number\":{\"value\":15,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#1b1e34\"},\"shape\":{\"type\":\"polygon\",\"stroke\":{\"width\":0,\"color\":\"#000\"},\"polygon\":{\"nb_sides\":6},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":50,\"random\":false,\"anim\":{\"enable\":true,\"speed\":10,\"size_min\":40,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":200,\"color\":\"#ffffff\",\"opacity\":1,\"width\":2},\"move\":{\"enable\":true,\"speed\":8,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":false,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
          "snow": "{\"particles\":{\"number\":{\"value\":450,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#fff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":500,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":2},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"bottom\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":0.5}},\"bubble\":{\"distance\":400,\"size\":4,\"duration\":0.3,\"opacity\":1,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
          "nyan_cat": "{\"particles\":{\"number\":{\"value\":150,\"density\":{\"enable\":false,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"star\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"http:\/\/wiki.lexisnexis.com\/academic\/images\/f\/fb\/Itunes_podcast_icon_300.jpg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":4,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":14,\"direction\":\"left\",\"random\":false,\"straight\":true,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":200,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}"
        },
        "eael_login_nonce": "b720b7ee26",
        "eael_register_nonce": "72938113d6",
        "eael_lostpassword_nonce": "b97fb74b16",
        "eael_resetpassword_nonce": "1364a5b82c"
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min.js" id="eael-general-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/uploads/essential-addons-elementor/eael-6.js" id="eael-6-js"></script>
    <script src="{{ asset('frontend') }}/wp-includes/js/imagesloaded.min.js" id="imagesloaded-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/pro-elements/assets/lib/lottie/lottie.min.js" id="lottie-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js" id="jquery-numerator-js"></script>
    <script id="happy-elementor-addons-js-extra">
      var HappyLocalize = {
        "ajax_url": "https:\/\/startupafrica.org\/wp-admin\/admin-ajax.php",
        "nonce": "559522a80d",
        "pdf_js_lib": "https:\/\/startupafrica.org\/wp-content\/plugins\/happy-elementor-addons\/assets\/vendor\/pdfjs\/lib"
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/happy-elementor-addons/assets/js/happy-addons.min.js" id="happy-elementor-addons-js"></script>
    <script id="happy-addons-pro-js-extra">
      var HappyProLocalize = {
        "ajax_url": "https:\/\/startupafrica.org\/wp-admin\/admin-ajax.php",
        "nonce": "9b5d179b6e"
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/happy-elementor-addons-pro/assets/js/happy-addons-pro.js" id="happy-addons-pro-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js" id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
      var elementskit = {
        resturl: 'https://startupafrica.org/wp-json/elementskit/v1/',
      }
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js" id="ekit-widget-scripts-js"></script>
    <script id="pojo-a11y-js-extra">
      var PojoA11yOptions = {
        "focusable": "",
        "remove_link_target": "",
        "add_role_links": "",
        "enable_save": "",
        "save_expiration": ""
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/pojo-accessibility/assets/js/app.min.js" id="pojo-a11y-js"></script>
    <script id="ct-scripts-js-extra">
      var ct_localizations = {
        "ajax_url": "https:\/\/startupafrica.org\/wp-admin\/admin-ajax.php",
        "public_url": "https:\/\/startupafrica.org\/wp-content\/themes\/blocksy\/static\/bundle\/",
        "rest_url": "https:\/\/startupafrica.org\/wp-json\/",
        "search_url": "https:\/\/startupafrica.org\/search\/QUERY_STRING\/",
        "show_more_text": "Show more",
        "more_text": "More",
        "search_live_results": "Search results",
        "search_live_no_results": "No results",
        "search_live_no_result": "No results",
        "search_live_one_result": "You got %s result. Please press Tab to select it.",
        "search_live_many_results": "You got %s results. Please press Tab to select one.",
        "clipboard_copied": "Copied!",
        "clipboard_failed": "Failed to Copy",
        "expand_submenu": "Expand dropdown menu",
        "collapse_submenu": "Collapse dropdown menu",
        "dynamic_js_chunks": [{
          "id": "blocksy_pro_micro_popups",
          "selector": ".ct-popup",
          "url": "wp-content/plugins/blocksy-companion-pro/framework/premium/static/bundle/micro-popups.js"
        }, {
          "id": "blocksy_dark_mode",
          "selector": "[data-id=\"dark-mode-switcher\"]",
          "url": "wp-content/plugins/blocksy-companion-pro/static/bundle/dark-mode.js",
          "trigger": "click"
        }, {
          "id": "blocksy_sticky_header",
          "selector": "header [data-sticky]",
          "url": "wp-content/plugins/blocksy-companion-pro/static/bundle/sticky.js"
        }],
        "dynamic_styles": {
          "lazy_load": "wp-content/themes/blocksy/static/bundle/non-critical-styles.min.css?ver=2.0.75",
          "search_lazy": "wp-content/themes/blocksy/static/bundle/non-critical-search-styles.min.css?ver=2.0.75",
          "back_to_top": "wp-content/themes/blocksy/static/bundle/back-to-top.min.css?ver=2.0.75"
        },
        "dynamic_styles_selectors": [{
          "selector": ".ct-header-cart, #woo-cart-panel",
          "url": "wp-content/themes/blocksy/static/bundle/cart-header-element-lazy.min.css?ver=2.0.75"
        }, {
          "selector": ".flexy",
          "url": "wp-content/themes/blocksy/static/bundle/flexy.min.css?ver=2.0.75"
        }, {
          "selector": "#account-modal",
          "url": "wp-content/plugins/blocksy-companion-pro/static/bundle/account-lazy.min.css?ver=2.0.75"
        }]
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/themes/blocksy/static/bundle/main.js" id="ct-scripts-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/happy-elementor-addons-pro/assets/vendor/animated-text/js/animated-text.js" id="animated-text-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/bdthemes-prime-slider-lite/assets/js/prime-slider-site.min.js" id="prime-slider-site-js"></script>
    <script id="upk-site-js-extra">
      var UltimatePostKitConfig = {
        "ajaxurl": "https:\/\/startupafrica.org\/wp-admin\/admin-ajax.php",
        "nonce": "34e4cd3906",
        "mailchimp": {
          "subscribing": "Subscribing you please wait..."
        },
        "elements_data": {
          "sections": [],
          "columns": [],
          "widgets": []
        }
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/ultimate-post-kit/assets/js/upk-site.min.js" id="upk-site-js"></script>



    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="{{ asset('frontend') }}/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/elementor/assets/js/frontend-modules.min.js" id="elementor-frontend-modules-js"></script>
    <script id="elementor-frontend-js-before">
      var elementorFrontendConfig = {
        "environmentMode": {
          "edit": false,
          "wpPreview": false,
          "isScriptDebug": false
        },
        "i18n": {
          "shareOnFacebook": "Share on Facebook",
          "shareOnTwitter": "Share on Twitter",
          "pinIt": "Pin it",
          "download": "Download",
          "downloadImage": "Download image",
          "fullscreen": "Fullscreen",
          "zoom": "Zoom",
          "share": "Share",
          "playVideo": "Play Video",
          "previous": "Previous",
          "next": "Next",
          "close": "Close",
          "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
          "a11yCarouselPrevSlideMessage": "Previous slide",
          "a11yCarouselNextSlideMessage": "Next slide",
          "a11yCarouselFirstSlideMessage": "This is the first slide",
          "a11yCarouselLastSlideMessage": "This is the last slide",
          "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
          "xs": 0,
          "sm": 480,
          "md": 768,
          "lg": 1025,
          "xl": 1440,
          "xxl": 1600
        },
        "responsive": {
          "breakpoints": {
            "mobile": {
              "label": "Mobile Portrait",
              "value": 767,
              "default_value": 767,
              "direction": "max",
              "is_enabled": true
            },
            "mobile_extra": {
              "label": "Mobile Landscape",
              "value": 880,
              "default_value": 880,
              "direction": "max",
              "is_enabled": false
            },
            "tablet": {
              "label": "Tablet Portrait",
              "value": 1024,
              "default_value": 1024,
              "direction": "max",
              "is_enabled": true
            },
            "tablet_extra": {
              "label": "Tablet Landscape",
              "value": 1200,
              "default_value": 1200,
              "direction": "max",
              "is_enabled": false
            },
            "laptop": {
              "label": "Laptop",
              "value": 1366,
              "default_value": 1366,
              "direction": "max",
              "is_enabled": false
            },
            "widescreen": {
              "label": "Widescreen",
              "value": 2400,
              "default_value": 2400,
              "direction": "min",
              "is_enabled": false
            }
          },
          "hasCustomBreakpoints": false
        },
        "version": "3.24.7",
        "is_static": false,
        "experimentalFeatures": {
          "additional_custom_breakpoints": true,
          "container_grid": true,
          "e_swiper_latest": true,
          "e_nested_atomic_repeaters": true,
          "e_onboarding": true,
          "theme_builder_v2": true,
          "home_screen": true,
          "ai-layout": true,
          "landing-pages": true,
          "link-in-bio": true,
          "floating-buttons": true,
          "display-conditions": true,
          "form-submissions": true
        },
        "urls": {
          "assets": "https:\/\/startupafrica.org\/wp-content\/plugins\/elementor\/assets\/",
          "ajaxurl": "https:\/\/startupafrica.org\/wp-admin\/admin-ajax.php",
          "uploadUrl": "https:\/\/startupafrica.org\/wp-content\/uploads"
        },
        "nonces": {
          "floatingButtonsClickTracking": "bf5218bea7"
        },
        "swiperClass": "swiper",
        "settings": {
          "page": [],
          "editorPreferences": []
        },
        "kit": {
          "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
          "global_image_lightbox": "yes",
          "lightbox_enable_counter": "yes",
          "lightbox_enable_fullscreen": "yes",
          "lightbox_enable_zoom": "yes",
          "lightbox_enable_share": "yes",
          "lightbox_title_src": "title",
          "lightbox_description_src": "description"
        },
        "post": {
          "id": 6,
          "title": "StartUpAfrica%20%E2%80%93%20Empowering%20Innovation",
          "excerpt": "",
          "featuredImage": false
        }
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/elementor/assets/js/frontend.min.js" id="elementor-frontend-js"></script>
    <script src="{{ asset('frontend') }}/wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></script>
    <script src="{{ asset('frontend') }}/wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
      wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
      });
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/qi-addons-for-elementor/inc/plugins/elementor/assets/js/elementor.js" id="qi-addons-for-elementor-elementor-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/bdthemes-element-pack/assets/js/common/helper.min.js" id="element-pack-helper-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/pro-elements/assets/js/webpack-pro.runtime.min.js" id="elementor-pro-webpack-runtime-js"></script>
    <script id="elementor-pro-frontend-js-before">
      var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/startupafrica.org\/wp-admin\/admin-ajax.php",
        "nonce": "c61535d9ba",
        "urls": {
          "assets": "https:\/\/startupafrica.org\/wp-content\/plugins\/pro-elements\/assets\/",
          "rest": "https:\/\/startupafrica.org\/wp-json\/"
        },
        "settings": {
          "lazy_load_background_images": true
        },
        "shareButtonsNetworks": {
          "facebook": {
            "title": "Facebook",
            "has_counter": true
          },
          "twitter": {
            "title": "Twitter"
          },
          "linkedin": {
            "title": "LinkedIn",
            "has_counter": true
          },
          "pinterest": {
            "title": "Pinterest",
            "has_counter": true
          },
          "reddit": {
            "title": "Reddit",
            "has_counter": true
          },
          "vk": {
            "title": "VK",
            "has_counter": true
          },
          "odnoklassniki": {
            "title": "OK",
            "has_counter": true
          },
          "tumblr": {
            "title": "Tumblr"
          },
          "digg": {
            "title": "Digg"
          },
          "skype": {
            "title": "Skype"
          },
          "stumbleupon": {
            "title": "StumbleUpon",
            "has_counter": true
          },
          "mix": {
            "title": "Mix"
          },
          "telegram": {
            "title": "Telegram"
          },
          "pocket": {
            "title": "Pocket",
            "has_counter": true
          },
          "xing": {
            "title": "XING",
            "has_counter": true
          },
          "whatsapp": {
            "title": "WhatsApp"
          },
          "email": {
            "title": "Email"
          },
          "print": {
            "title": "Print"
          },
          "x-twitter": {
            "title": "X"
          },
          "threads": {
            "title": "Threads"
          }
        },
        "facebook_sdk": {
          "lang": "en_US",
          "app_id": ""
        },
        "lottie": {
          "defaultAnimationUrl": "wp-content/plugins/pro-elements/modules/lottie/assets/animations/default.js"
        }
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/pro-elements/assets/js/frontend.min.js" id="elementor-pro-frontend-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/pro-elements/assets/js/elements-handlers.min.js" id="pro-elements-handlers-js"></script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min.js" id="animate-circle-js"></script>
    <script id="elementskit-elementor-js-extra">
      var ekit_config = {
        "ajaxurl": "https:\/\/startupafrica.org\/wp-admin\/admin-ajax.php",
        "nonce": "3b931f7fd3"
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js" id="elementskit-elementor-js"></script>
    <script src="{{ asset('frontend') }}/wp-includes/js/underscore.min.js" id="underscore-js"></script>
    <script id="wp-util-js-extra">
      var _wpUtilSettings = {
        "ajax": {
          "url": "index.html"
        }
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-includes/js/wp-util.min.js" id="wp-util-js"></script>
    <script id="wpforms-elementor-js-extra">
      var wpformsElementorVars = {
        "captcha_provider": "recaptcha",
        "recaptcha_type": "v2"
      };
    </script>
    <script src="{{ asset('frontend') }}/wp-content/plugins/wpforms/assets/js/integrations/elementor/frontend.min.js" id="wpforms-elementor-js"></script>
    <a id="pojo-a11y-skip-content" class="pojo-skip-link pojo-skip-content" tabindex="1" accesskey="s" href="#content">Skip to content</a>
    <nav id="pojo-a11y-toolbar" class="pojo-a11y-toolbar-left pojo-a11y-" role="navigation">
      <div class="pojo-a11y-toolbar-toggle">
        <a class="pojo-a11y-toolbar-link pojo-a11y-toolbar-toggle-link" href="javascript:void(0);" title="Accessibility Tools" role="button">
          <span class="pojo-sr-only sr-only">Open toolbar</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor" width="1em">
            <title>Accessibility Tools</title>
            <path d="M50 .8c5.7 0 10.4 4.7 10.4 10.4S55.7 21.6 50 21.6s-10.4-4.7-10.4-10.4S44.3.8 50 .8zM92.2 32l-21.9 2.3c-2.6.3-4.6 2.5-4.6 5.2V94c0 2.9-2.3 5.2-5.2 5.2H60c-2.7 0-4.9-2.1-5.2-4.7l-2.2-24.7c-.1-1.5-1.4-2.5-2.8-2.4-1.3.1-2.2 1.1-2.4 2.4l-2.2 24.7c-.2 2.7-2.5 4.7-5.2 4.7h-.5c-2.9 0-5.2-2.3-5.2-5.2V39.4c0-2.7-2-4.9-4.6-5.2L7.8 32c-2.6-.3-4.6-2.5-4.6-5.2v-.5c0-2.6 2.1-4.7 4.7-4.7h.5c19.3 1.8 33.2 2.8 41.7 2.8s22.4-.9 41.7-2.8c2.6-.2 4.9 1.6 5.2 4.3v1c-.1 2.6-2.1 4.8-4.8 5.1z" />
          </svg>
        </a>
      </div>
      <div class="pojo-a11y-toolbar-overlay">
        <div class="pojo-a11y-toolbar-inner">
          <p class="pojo-a11y-toolbar-title">Accessibility Tools</p>
          <ul class="pojo-a11y-toolbar-items pojo-a11y-tools">
            <li class="pojo-a11y-toolbar-item">
              <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-resize-font pojo-a11y-btn-resize-plus" data-action="resize-plus" data-action-group="resize" tabindex="-1" role="button">
                <span class="pojo-a11y-toolbar-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448">
                    <title>Increase Text</title>
                    <path fill="currentColor" d="M256 200v16c0 4.25-3.75 8-8 8h-56v56c0 4.25-3.75 8-8 8h-16c-4.25 0-8-3.75-8-8v-56h-56c-4.25 0-8-3.75-8-8v-16c0-4.25 3.75-8 8-8h56v-56c0-4.25 3.75-8 8-8h16c4.25 0 8 3.75 8 8v56h56c4.25 0 8 3.75 8 8zM288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.75-14.25 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z"></path>
                  </svg>
                </span>
                <span class="pojo-a11y-toolbar-text">Increase Text</span>
              </a>
            </li>
            <li class="pojo-a11y-toolbar-item">
              <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-resize-font pojo-a11y-btn-resize-minus" data-action="resize-minus" data-action-group="resize" tabindex="-1" role="button">
                <span class="pojo-a11y-toolbar-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448">
                    <title>Decrease Text</title>
                    <path fill="currentColor" d="M256 200v16c0 4.25-3.75 8-8 8h-144c-4.25 0-8-3.75-8-8v-16c0-4.25 3.75-8 8-8h144c4.25 0 8 3.75 8 8zM288 208c0-61.75-50.25-112-112-112s-112 50.25-112 112 50.25 112 112 112 112-50.25 112-112zM416 416c0 17.75-14.25 32-32 32-8.5 0-16.75-3.5-22.5-9.5l-85.75-85.5c-29.25 20.25-64.25 31-99.75 31-97.25 0-176-78.75-176-176s78.75-176 176-176 176 78.75 176 176c0 35.5-10.75 70.5-31 99.75l85.75 85.75c5.75 5.75 9.25 14 9.25 22.5z"></path>
                  </svg>
                </span>
                <span class="pojo-a11y-toolbar-text">Decrease Text</span>
              </a>
            </li>
            <li class="pojo-a11y-toolbar-item">
              <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-background-group pojo-a11y-btn-grayscale" data-action="grayscale" data-action-group="schema" tabindex="-1" role="button">
                <span class="pojo-a11y-toolbar-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448">
                    <title>Grayscale</title>
                    <path fill="currentColor" d="M15.75 384h-15.75v-352h15.75v352zM31.5 383.75h-8v-351.75h8v351.75zM55 383.75h-7.75v-351.75h7.75v351.75zM94.25 383.75h-7.75v-351.75h7.75v351.75zM133.5 383.75h-15.5v-351.75h15.5v351.75zM165 383.75h-7.75v-351.75h7.75v351.75zM180.75 383.75h-7.75v-351.75h7.75v351.75zM196.5 383.75h-7.75v-351.75h7.75v351.75zM235.75 383.75h-15.75v-351.75h15.75v351.75zM275 383.75h-15.75v-351.75h15.75v351.75zM306.5 383.75h-15.75v-351.75h15.75v351.75zM338 383.75h-15.75v-351.75h15.75v351.75zM361.5 383.75h-15.75v-351.75h15.75v351.75zM408.75 383.75h-23.5v-351.75h23.5v351.75zM424.5 383.75h-8v-351.75h8v351.75zM448 384h-15.75v-352h15.75v352z"></path>
                  </svg>
                </span>
                <span class="pojo-a11y-toolbar-text">Grayscale</span>
              </a>
            </li>
            <li class="pojo-a11y-toolbar-item">
              <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-background-group pojo-a11y-btn-high-contrast" data-action="high-contrast" data-action-group="schema" tabindex="-1" role="button">
                <span class="pojo-a11y-toolbar-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448">
                    <title>High Contrast</title>
                    <path fill="currentColor" d="M192 360v-272c-75 0-136 61-136 136s61 136 136 136zM384 224c0 106-86 192-192 192s-192-86-192-192 86-192 192-192 192 86 192 192z"></path>
                  </svg>
                </span>
                <span class="pojo-a11y-toolbar-text">High Contrast</span>
              </a>
            </li>
            <li class="pojo-a11y-toolbar-item">
              <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-background-group pojo-a11y-btn-negative-contrast" data-action="negative-contrast" data-action-group="schema" tabindex="-1" role="button">
                <span class="pojo-a11y-toolbar-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448">
                    <title>Negative Contrast</title>
                    <path fill="currentColor" d="M416 240c-23.75-36.75-56.25-68.25-95.25-88.25 10 17 15.25 36.5 15.25 56.25 0 61.75-50.25 112-112 112s-112-50.25-112-112c0-19.75 5.25-39.25 15.25-56.25-39 20-71.5 51.5-95.25 88.25 42.75 66 111.75 112 192 112s149.25-46 192-112zM236 144c0-6.5-5.5-12-12-12-41.75 0-76 34.25-76 76 0 6.5 5.5 12 12 12s12-5.5 12-12c0-28.5 23.5-52 52-52 6.5 0 12-5.5 12-12zM448 240c0 6.25-2 12-5 17.25-46 75.75-130.25 126.75-219 126.75s-173-51.25-219-126.75c-3-5.25-5-11-5-17.25s2-12 5-17.25c46-75.5 130.25-126.75 219-126.75s173 51.25 219 126.75c3 5.25 5 11 5 17.25z"></path>
                  </svg>
                </span>
                <span class="pojo-a11y-toolbar-text">Negative Contrast</span>
              </a>
            </li>
            <li class="pojo-a11y-toolbar-item">
              <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-background-group pojo-a11y-btn-light-background" data-action="light-background" data-action-group="schema" tabindex="-1" role="button">
                <span class="pojo-a11y-toolbar-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448">
                    <title>Light Background</title>
                    <path fill="currentColor" d="M184 144c0 4.25-3.75 8-8 8s-8-3.75-8-8c0-17.25-26.75-24-40-24-4.25 0-8-3.75-8-8s3.75-8 8-8c23.25 0 56 12.25 56 40zM224 144c0-50-50.75-80-96-80s-96 30-96 80c0 16 6.5 32.75 17 45 4.75 5.5 10.25 10.75 15.25 16.5 17.75 21.25 32.75 46.25 35.25 74.5h57c2.5-28.25 17.5-53.25 35.25-74.5 5-5.75 10.5-11 15.25-16.5 10.5-12.25 17-29 17-45zM256 144c0 25.75-8.5 48-25.75 67s-40 45.75-42 72.5c7.25 4.25 11.75 12.25 11.75 20.5 0 6-2.25 11.75-6.25 16 4 4.25 6.25 10 6.25 16 0 8.25-4.25 15.75-11.25 20.25 2 3.5 3.25 7.75 3.25 11.75 0 16.25-12.75 24-27.25 24-6.5 14.5-21 24-36.75 24s-30.25-9.5-36.75-24c-14.5 0-27.25-7.75-27.25-24 0-4 1.25-8.25 3.25-11.75-7-4.5-11.25-12-11.25-20.25 0-6 2.25-11.75 6.25-16-4-4.25-6.25-10-6.25-16 0-8.25 4.5-16.25 11.75-20.5-2-26.75-24.75-53.5-42-72.5s-25.75-41.25-25.75-67c0-68 64.75-112 128-112s128 44 128 112z"></path>
                  </svg>
                </span>
                <span class="pojo-a11y-toolbar-text">Light Background</span>
              </a>
            </li>
            <li class="pojo-a11y-toolbar-item">
              <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-links-underline" data-action="links-underline" data-action-group="toggle" tabindex="-1" role="button">
                <span class="pojo-a11y-toolbar-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448">
                    <title>Links Underline</title>
                    <path fill="currentColor" d="M364 304c0-6.5-2.5-12.5-7-17l-52-52c-4.5-4.5-10.75-7-17-7-7.25 0-13 2.75-18 8 8.25 8.25 18 15.25 18 28 0 13.25-10.75 24-24 24-12.75 0-19.75-9.75-28-18-5.25 5-8.25 10.75-8.25 18.25 0 6.25 2.5 12.5 7 17l51.5 51.75c4.5 4.5 10.75 6.75 17 6.75s12.5-2.25 17-6.5l36.75-36.5c4.5-4.5 7-10.5 7-16.75zM188.25 127.75c0-6.25-2.5-12.5-7-17l-51.5-51.75c-4.5-4.5-10.75-7-17-7s-12.5 2.5-17 6.75l-36.75 36.5c-4.5 4.5-7 10.5-7 16.75 0 6.5 2.5 12.5 7 17l52 52c4.5 4.5 10.75 6.75 17 6.75 7.25 0 13-2.5 18-7.75-8.25-8.25-18-15.25-18-28 0-13.25 10.75-24 24-24 12.75 0 19.75 9.75 28 18 5.25-5 8.25-10.75 8.25-18.25zM412 304c0 19-7.75 37.5-21.25 50.75l-36.75 36.5c-13.5 13.5-31.75 20.75-50.75 20.75-19.25 0-37.5-7.5-51-21.25l-51.5-51.75c-13.5-13.5-20.75-31.75-20.75-50.75 0-19.75 8-38.5 22-52.25l-22-22c-13.75 14-32.25 22-52 22-19 0-37.5-7.5-51-21l-52-52c-13.75-13.75-21-31.75-21-51 0-19 7.75-37.5 21.25-50.75l36.75-36.5c13.5-13.5 31.75-20.75 50.75-20.75 19.25 0 37.5 7.5 51 21.25l51.5 51.75c13.5 13.5 20.75 31.75 20.75 50.75 0 19.75-8 38.5-22 52.25l22 22c13.75-14 32.25-22 52-22 19 0 37.5 7.5 51 21l52 52c13.75 13.75 21 31.75 21 51z"></path>
                  </svg>
                </span>
                <span class="pojo-a11y-toolbar-text">Links Underline</span>
              </a>
            </li>
            <li class="pojo-a11y-toolbar-item">
              <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-readable-font" data-action="readable-font" data-action-group="toggle" tabindex="-1" role="button">
                <span class="pojo-a11y-toolbar-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448">
                    <title>Readable Font</title>
                    <path fill="currentColor" d="M181.25 139.75l-42.5 112.5c24.75 0.25 49.5 1 74.25 1 4.75 0 9.5-0.25 14.25-0.5-13-38-28.25-76.75-46-113zM0 416l0.5-19.75c23.5-7.25 49-2.25 59.5-29.25l59.25-154 70-181h32c1 1.75 2 3.5 2.75 5.25l51.25 120c18.75 44.25 36 89 55 133 11.25 26 20 52.75 32.5 78.25 1.75 4 5.25 11.5 8.75 14.25 8.25 6.5 31.25 8 43 12.5 0.75 4.75 1.5 9.5 1.5 14.25 0 2.25-0.25 4.25-0.25 6.5-31.75 0-63.5-4-95.25-4-32.75 0-65.5 2.75-98.25 3.75 0-6.5 0.25-13 1-19.5l32.75-7c6.75-1.5 20-3.25 20-12.5 0-9-32.25-83.25-36.25-93.5l-112.5-0.5c-6.5 14.5-31.75 80-31.75 89.5 0 19.25 36.75 20 51 22 0.25 4.75 0.25 9.5 0.25 14.5 0 2.25-0.25 4.5-0.5 6.75-29 0-58.25-5-87.25-5-3.5 0-8.5 1.5-12 2-15.75 2.75-31.25 3.5-47 3.5z"></path>
                  </svg>
                </span>
                <span class="pojo-a11y-toolbar-text">Readable Font</span>
              </a>
            </li>
            <li class="pojo-a11y-toolbar-item">
              <a href="#" class="pojo-a11y-toolbar-link pojo-a11y-btn-reset" data-action="reset" tabindex="-1" role="button">
                <span class="pojo-a11y-toolbar-icon">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" viewBox="0 0 448 448">
                    <title>Reset</title>
                    <path fill="currentColor" d="M384 224c0 105.75-86.25 192-192 192-57.25 0-111.25-25.25-147.75-69.25-2.5-3.25-2.25-8 0.5-10.75l34.25-34.5c1.75-1.5 4-2.25 6.25-2.25 2.25 0.25 4.5 1.25 5.75 3 24.5 31.75 61.25 49.75 101 49.75 70.5 0 128-57.5 128-128s-57.5-128-128-128c-32.75 0-63.75 12.5-87 34.25l34.25 34.5c4.75 4.5 6 11.5 3.5 17.25-2.5 6-8.25 10-14.75 10h-112c-8.75 0-16-7.25-16-16v-112c0-6.5 4-12.25 10-14.75 5.75-2.5 12.75-1.25 17.25 3.5l32.5 32.25c35.25-33.25 83-53 132.25-53 105.75 0 192 86.25 192 192z"></path>
                  </svg>
                </span>
                <span class="pojo-a11y-toolbar-text">Reset</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </body>
</html>
<!-- Page supported by LiteSpeed Cache 6.5.1 on 2024-10-27 09:50:25 -->