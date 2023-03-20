<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
        <h1>Welcome to my Website!</h1>


        <div class="container">
            <img class="img-stretch" alt="" src="https://vanfl.files.wordpress.com/2023/01/pexels-photo-9072216.jpeg" />
            <div class="centered">
            <p ><em><strong>To Live Is To Be Entertained</strong></em></p>
            </div>
        </div>


    <div class="seperate-column">
        <div>
        <br>
        <p>Hello there, future employers! My name is Vanessa Felicia Leedora.</p>
        <p>I'm a university student from Universitas Internasional Batam majoring Informations System.</p>
        <br>
        <p>Hard working, dedicated, and problem solver. I love playing video games, </p>
        <p>reading, sports and watching movies. I can work independently or collaboratively.</p>
        <br>
        <p>Since a young age, I have been introduced to video games of different genres. </p>
        <p>As a result, I have huge passions for game developments and story narrations. </p>
        <p>I also enjoy doing graphic designs such as designing logos, posters, etc.</p>
        </div>
        
        
        <img style="transform: scaleX(-1);" src="<?php echo e(asset('/Image/my_image.png')); ?>" alt="My picture">
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\PC\Documents\VFL\Hell\Sem 2\Perancangan Situs Web\cv-vfl\resources\views/welcome.blade.php ENDPATH**/ ?>