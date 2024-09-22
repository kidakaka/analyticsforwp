<!DOCTYPE html>
<html>
  <title>Basic GA setup</title>
  <head>
<?php
// add your property here. for protecting the property have removed the actual id and added a dummy string
$config = "your-propery-id-goes-here";
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $config; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $config; ?>');
</script>
  </head>
<body>
<h1>My First Heading</h1>

<p>My first paragraph.</p>

</body>
</html>
