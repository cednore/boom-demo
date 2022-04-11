<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Boom Demo</title>

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"
    integrity="sha512-59oxERSDGj1eMzmFW3acSaBHEMNi2GaeQC7nQYcTqM0vgcnavi4BpUhLkcJQE2G6fdtn8JVj7brt0EZuBV0ogQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>

  <style>
    body { margin: 0; padding-bottom: 3rem; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; }

    #form { background: rgba(0, 0, 0, 0.15); padding: 0.25rem; position: fixed; bottom: 0; left: 0; right: 0; display: flex; height: 3rem; box-sizing: border-box; backdrop-filter: blur(10px); }
    #input { border: none; padding: 0 1rem; flex-grow: 1; border-radius: 2rem; margin: 0.25rem; }
    #input:focus { outline: none; }
    #form > button { background: #333; border: none; padding: 0 1rem; margin: 0.25rem; border-radius: 3px; outline: none; color: #fff; }

    #messages { list-style-type: none; margin: 0; padding: 0; }
    #messages > li { padding: 0.5rem 1rem; }
    #messages > li:nth-child(odd) { background: #efefef; }
  </style>
</head>

<body>
  <ul id="messages"></ul>
  <form id="form" action="">
    <input id="input" autocomplete="off" /><button>Send</button>
  </form>

  <script>
    var socket = io(@json(config('boom.api.base_url').'/demo'));

    var form = document.getElementById('form');
    var input = document.getElementById('input');

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      if (input.value) {
        socket.emit('chat', input.value);
        input.value = '';
      }
    });

    socket.on('chat', function(payload) {
      var item = document.createElement('li');
      item.textContent = payload || '';
      messages.appendChild(item);
      window.scrollTo(0, document.body.scrollHeight);
    });
  </script>
</body>
</html>
