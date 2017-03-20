<!Doctype html>
<html>
    <head>
        <title><?php echo $__env->yieldContent("page-title", "Betaroid"); ?></title>
        <link rel="canonical" hreflang="en-us" />

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge" />
        <meta title="viewport" content="width=device-width initial-scale=1.0, maximum-scale=1.0" />
        <meta name="author" content="Anurag Jain" />
        <meta name="robots" content='<?php echo $__env->yieldContent("meta-robots", "index, follow, noarchive"); ?>' />

        
        <meta name="description" content='<?php echo $__env->yieldContent("description"); ?>' />
        <meta name="keywords" content='<?php echo $__env->yieldContent("keywords"); ?>'/>
        <meta name="title" content='<?php echo $__env->yieldContent("title"); ?>' />

        
        <meta property="og:title" content='<?php echo $__env->yieldContent("title"); ?>' />
        <meta property="og:image" content='<?php echo $__env->yieldContent("og-image"); ?>' />
        <meta property="og:url" content='<?php echo $__env->yieldContent("og-url"); ?>' />
        <meta property="og:description" content='<?php echo $__env->yieldContent("description"); ?>' />

        
        <meta property="twitter:title" content='<?php echo $__env->yieldContent("title"); ?>' />
        <meta property="twitter:description" content='<?php echo $__env->yieldContent("description"); ?>' />
        <meta property="twitter:image" content='<?php echo $__env->yieldContent("og-image"); ?>' />

        <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
    </head>
    <body>
        <?php echo $__env->yieldContent("content"); ?>
        <script type="text/javascript" src="/assets/js/vendor.common.js"></script>
        <script type="text/javascript" src="/assets/js/app.js"></script>
    </body>
</html>
