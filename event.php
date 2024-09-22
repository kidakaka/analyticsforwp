<!DOCTYPE html>
<html>
<title>Events</title>
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
<h1>My First Event</h1>

<p>My first custom Event.</p>
    <script>
      /**
      *   The following event is sent when the page loads. You could
      *   wrap the event in a JavaScript function so the event is
      *   sent when the user performs some action.
      *   You can have upto 25 parameters in this event. Therefore you can pretty much add all the major important attributes of the wp_post object
      *   You could also add additional parameters such as weather at the time of the event, inventory in the ERP for an object, total number of users, etc.
      */
      gtag('event', 'Custom Event', {
        'module': 'Analytics',
        'screen_name': 'Event'
      });
    </script>


</body>
</html>
