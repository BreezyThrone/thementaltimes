@extends('layouts.app')
<br><br><br><br>

@section('content')
    <h2>Welcome to The Mental Times</h2>
    <p>We are a community dedicated to sharing and helping people with mental health issues caused by their daily routines. Our mission is to provide a supportive environment where you can share your experiences, find comfort in the stories of others, and access resources to help you manage stress, emotions, love, and work-related mental health challenges.</p>
    
    <h3>Our Mission</h3>
    <p>At The Mental Times, we believe that mental health is a vital part of overall well-being. Our community is here to support you through the ups and downs of life. Whether you're dealing with stress at work, navigating complex emotions, or seeking advice on love and relationships, we're here to help. We encourage you to read and share stories, find resources, and connect with others who understand what you're going through.</p>
    
    <h3>Join the Conversation</h3>
    <p>Have a story to share? Visit our <a href="{{ route('stories') }}">Stories</a> page to contribute your experiences. By sharing your story, you can help others who might be facing similar challenges. Together, we can create a community of understanding and support.</p>
    
    <div class="image-container">
        <img src="{{ URL('https://img.freepik.com/free-vector/gradient-world-mental-health-day-background_23-2149604961.jpg') }}" alt="Mental Health Support" class="responsive-image">
    </div>

    <h3>Explore More</h3>
@endsection