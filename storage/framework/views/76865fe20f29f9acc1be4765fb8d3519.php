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
    <div class="seperate-column bottom-screen" style="margin-top:30px">
        <img style="height:150px"src="<?php echo e(asset('/Image/glyph_2.png')); ?>" alt="">
        <img style="height:150px" src="<?php echo e(asset('/Image/glyph_1.png')); ?>" alt="">
        <img style="height:150px"src="<?php echo e(asset('/Image/glyph_4.png')); ?>" alt="">
        <img style="height:150px"src="<?php echo e(asset('/Image/glyph_3.png')); ?>" alt="">
       
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\PC\Documents\VFL\Hell\Sem 2\Perancangan Situs Web\cv-vfl\resources\views/contacts.blade.php ENDPATH**/ ?>