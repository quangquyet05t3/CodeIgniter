<html>
<head>
    <title>{blog_title}</title>
    <?php echo link_tag('css/styles.css'); ?>

    <script type = 'text/javascript' src = "<?php echo base_url();
    ?>js/sample.js"></script>
</head>
<body>
<a href='javascript:test()'>Click Here</a> to execute the javascript function.
<h3>{blog_heading}</h3>
<div class="cls">Class</div>
{blog_entries}
<h5>{title}</h5>
<p>{body}</p>
{/blog_entries}



</body>
</html>