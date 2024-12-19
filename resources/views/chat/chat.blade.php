<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('1ddf07e5f24285e83686', {
      cluster: 'mt1'
    });

    // var channel = pusher.subscribe('chat.1.3');
    // channel.bind('my-event', function(data) {
    //   alert(JSON.stringify(data));
    // });

    var channel = pusher.subscribe('chat.1.3');  // Subscribe to the correct channel
channel.bind('my-event', function(data) {
    console.log('New message: ', data.message);
    var from = data.message.from;
    var to = data.message.to;
    var messageText = data.message.message;

    // Create a new message element
    var messageContainer = document.getElementById('message-container');
    var messageElement = document.createElement('p');
    messageElement.textContent = `From: ${from}, To: ${to}, Message: ${messageText}`;
    
    // Append the new message element to the container
    messageContainer.appendChild(messageElement);
});
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <div id="message-container"></div>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>