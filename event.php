<!DOCTYPE html>
<html>
        <title>Events</title>
        <head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N89XGQ8QGY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-N89XGQ8QGY');
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
      */
      gtag('event', 'Custom Event', {
        'module': 'Analytics',
        'screen_name': 'Event'
      });
    </script>


</body>
</html>
