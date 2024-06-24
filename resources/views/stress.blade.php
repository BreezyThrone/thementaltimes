@extends('layouts.app')
<br><br><br><br>

@section('content')
    <h2>Stress and Mental Health</h2>
    <p>Stress is a common part of life that affects everyone at some point. While a certain amount of stress can be beneficial by motivating us to achieve our goals, chronic stress can have serious negative effects on our mental health. Understanding how stress impacts us and learning how to manage it is crucial for maintaining a healthy mind and body.</p>

    <h3>The Positive Aspects of Stress</h3>
    <p>In small doses, stress can have positive effects on our mental health:</p>
    <ul>
        <li>Boosting energy levels and enhancing focus</li>
        <li>Encouraging personal growth and development</li>
        <li>Improving problem-solving skills and resilience</li>
        <li>Helping to motivate and drive performance</li>
    </ul>

    <div class="image-container">
        <img src="{{ asset('https://img.freepik.com/free-vector/student-stress-concept-illustration_114360-8908.jpg') }}" alt="Positive Stress" class="responsive-image">
    </div>

    <h3>The Negative Impact of Chronic Stress</h3>
    <p>However, when stress becomes chronic or overwhelming, it can negatively impact our mental health:</p>
    <ul>
        <li>Increased anxiety and depression</li>
        <li>Sleep disturbances and fatigue</li>
        <li>Difficulty concentrating and making decisions</li>
        <li>Physical symptoms such as headaches, muscle tension, and digestive issues</li>
        <li>Weakened immune system and increased susceptibility to illnesses</li>
    </ul>

    <div class="image-container">
        <img src="{{ asset('https://t3.ftcdn.net/jpg/00/49/30/90/360_F_49309089_1XZWcKeTNpuJ9ZlN3qq6LIhx6cwUvNdm.jpg') }}" alt="Negative Stress" class="responsive-image">
    </div>

    <h3>Suggestions for Managing Stress</h3>
    <p>Effective stress management is key to maintaining mental health. Here are some suggestions to help you cope with stress:</p>
    <ul>
        <li><strong>Practice Relaxation Techniques:</strong> Engage in relaxation techniques such as deep breathing exercises, meditation, or progressive muscle relaxation to help calm your mind and body.</li>
        <li><strong>Stay Active:</strong> Regular physical activity can help reduce stress levels, improve mood, and boost overall well-being.</li>
        <li><strong>Maintain a Healthy Lifestyle:</strong> Ensure you're getting enough sleep, eating a balanced diet, and avoiding excessive caffeine and alcohol consumption.</li>
        <li><strong>Prioritize and Organize:</strong> Break down tasks into manageable steps, prioritize your to-do list, and set realistic goals to avoid feeling overwhelmed.</li>
        <li><strong>Seek Support:</strong> Talk to friends, family, or a mental health professional about your stress. Sharing your feelings can provide relief and perspective.</li>
        <li><strong>Take Breaks:</strong> Ensure you take regular breaks from work or stressful activities to relax and recharge.</li>
        <li><strong>Engage in Hobbies:</strong> Find time for activities you enjoy, whether it's reading, gardening, or listening to music, to help you unwind and de-stress.</li>
    </ul>

    <p>Remember, it's important to recognize the signs of chronic stress and take proactive steps to manage it. By doing so, you can improve your mental health and overall quality of life.</p>

    <div class="image-container">
        <img src="{{ asset('https://media.istockphoto.com/id/529206205/photo/relax-or-stress.jpg?s=612x612&w=0&k=20&c=0FZK4cID9CjU2EcGns24jdPPXOeTgijLV3ldhLZHorI=') }}" alt="Stress Management" class="responsive-image">
    </div>
@endsection
