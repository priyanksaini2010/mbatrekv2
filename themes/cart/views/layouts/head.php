<?php $baseUrl = (Yii::app()->theme ? $baseUrl : Yii::app()->request->baseUrl . "/themes/cart"); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="<?php echo $baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $baseUrl; ?>/css/new-style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $baseUrl; ?>/css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $baseUrl; ?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $baseUrl; ?>/css/jquery.mmenu.css" rel="stylesheet" type="text/css" />
<!--<link href="--><?php //echo $baseUrl; ?><!--/css/source.css" rel="stylesheet" type="text/css" />-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="<?php echo $baseUrl; ?>/css/select2.min.css" rel="stylesheet" type="text/css" />
<style>
    .select2-container--default .select2-selection--single{
        border: none;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered{
        color: #222;
        width: 100%;
        border: 1px solid #999;
        padding: 10px 10px;
    }
</style>
<!--Google Analytics-->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90207910-1"></script>-->
<!--<script>-->
<!--    window.dataLayer = window.dataLayer || [];-->
<!--    function gtag(){dataLayer.push(arguments);}-->
<!--    gtag('js', new Date());-->
<!---->
<!--    gtag('config', 'UA-90207910-1');-->
<!--</script>-->
<!-- Global site tag (gtag.js) - Google Ads: 862919331 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-862919331"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-862919331');
</script>
<script>
    gtag('event', 'page_view', {
        'send_to': 'AW-862919331',
        'dynx_itemid': 'replace with value',
        'dynx_itemid2': 'replace with value',
        'dynx_pagetype': 'replace with value',
        'dynx_totalvalue': 'replace with value',
        'edu_pagetype': 'replace with value',
        'edu_pid': 'replace with value',
        'edu_plocid': 'replace with value',
        'edu_totalvalue': 'replace with value',
        'job_id': 'replace with value',
        'job_locid': 'replace with value',
        'job_pagetype': 'replace with value',
        'job_totalvalue': 'replace with value',
        'user_id': 'replace with value'
    });
</script>
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2220470411551001');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2220470411551001&ev=PageView&noscript=1" /></noscript>

