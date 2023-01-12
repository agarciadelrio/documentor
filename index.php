<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documentor</title>
  <link rel="stylesheet" href="/css/fontawesome.css" />
  <link rel="stylesheet" href="/css/tailwind.min.css">
  <script>
    // pass unocss options
    window.__unocss = {
      rules: [
        [
          'custom-rule', { color: 'red' }
        ]
      ],
      theme: {
        colors: {
          primary: {
            DEFAULT: 'purple',
            50: 'red',
          },
        }
      },
      shortcuts: {
        'custom-shortcut': 'text-lg text-orange hover:text-teal'
      },
    }
    console.log(window.__unocss)
  </script>
  <script src="/js/unocss.js"></script>
  <style>[un-cloak] {
    display: none;
  }</style>
</head>
<body class="bg-red-500 p-3">
  <h1>Documentor</h1>
</body>
</html>