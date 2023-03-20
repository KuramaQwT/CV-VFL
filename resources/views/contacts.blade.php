<x-app-layout>
<head>
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>"/>
    
    </head>
    <header>
        <nav>
            <h3>Vanessa Felicia Leedora | University Student | Future Game Developer</h3>
            <div>
                <a class="navLink" href="/">Home</a>
                <a class="navLink" href="/experience">My Experience</a>
                <a class="navLink" href="/works">My Projects</a>
                <a class="navLink" href="/contacts">Contacts</a>
            </div>
        </nav>
    </header>
    <h1>Contacts</h1>
    <div style="text-align:center">
        <p>Hello future employers!</p>
        <br>
        <p>Reach out to me from one of the following:</p>
        <br>
        <ul class="center-ul">
            <li>Whatsapp: +628126815083</li>
            <li>Line: vanfl8</li>
            <li>Email: vanfl@gmail.com</li>
        </ul>
        <br>
        <h4>Check out my portfolio website <a href="https://vanfl.wordpress.com">here!</a></h4>
    </div>
    <div class="seperate-column bottom-screen">
        <img style="height:120px; margin-left:24px"src="{{asset('/Image/glyph_1.png')}}" alt="">
        <img style="height:120px" src="{{asset('/Image/glyph_2.png')}}" alt="">
        <img style="height:120px"src="{{asset('/Image/glyph_3.png')}}" alt="">
        <img style="height:120px; margin-right:24px"src="{{asset('/Image/glyph_4.png')}}" alt="">
    </div>
</x-app-layout>