<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Mental Times</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <h1>The Mental Times</h1>
        <nav class="nav">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/love') }}" class="{{ request()->is('love') ? 'active' : '' }}">Love</a>
            <a href="{{ url('/emotions') }}" class="{{ request()->is('emotions') ? 'active' : '' }}">Emotions</a>
            <a href="{{ url('/stress') }}" class="{{ request()->is('stress') ? 'active' : '' }}">Stress</a>
            <a href="{{ url('/work') }}" class="{{ request()->is('work') ? 'active' : '' }}">Work</a>
            <a href="{{ url('/stories') }}" class="{{ request()->is('stories') ? 'active' : '' }}">Stories</a>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="message">
            <h3>About The Mental Times</h3>
            <p>We are a community dedicated to sharing and helping people with mental health issues stemming from their daily routines. Join us in fostering a supportive and understanding environment.</p>
        </div>
        <div class="form-container">
            <h1>THE MENTAL TIMES</h1>
        </div>
    </footer>
</body>
</html>
