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
    
    <h1>My Experience</h1>
    <br>
    <div class="seperate-column" style="align-items: start">
        <div style="width:40%">
            <p>My Education Journey:</p>
            <ul>
                <li>SD-SMA: Sekolah Mondial (2011-2022)</li>
                <p>Majoring in Maths and Science, with a final average of 90</p>
                <li>College: Universitas Internasional Batam (2022-Today)</li>
                <p>Majoring in Informations System</p>
            </ul>
            <br>
        </div>
        <div style="width:40%">
            <p>My Career Journey:</p>
            <ul>
                <li>CV Permata Batam Suksesindo (2023-Today)</li>
                <p>Working as a telemarketer. Marketing a variety of company products through phone calls and booking appointments.</p>
            </ul>
            <br>
        </div> 
    </div>
    <div class="seperate-column" style="align-items: start">
        <div style="width:40%">

            <p>My Achievements:</p>
            <ul>
                <li>7th Placer for "Lomba Menulis Surat Kepada Menteri Pendidikan" (2016)</li>
                <li>Top 5 UTEP Scorer for Freshmen UIB (2022)</li>
            </ul>
            <br>
        </div>
        
        <divs style="width:40%">
            <p>My Certifications:</p>
            <ul>
                <li>Complete C# Unity 2D Game Developer Udemy (2022)</li>
                <li>Python Mimo (2022)</li>
                <li>TOEIC Official (2022)- with a score of 940</li>
            </ul>
        </div>
    </div>
    <div class="seperate-column bottom-screen">
        <img style="height:120px; margin-left:24px"src="<?php echo e(asset('/Image/glyph_1.png')); ?>" alt="">
        <img style="height:120px" src="<?php echo e(asset('/Image/glyph_2.png')); ?>" alt="">
        <img style="height:120px"src="<?php echo e(asset('/Image/glyph_3.png')); ?>" alt="">
        <img style="height:120px; margin-right:24px"src="<?php echo e(asset('/Image/glyph_4.png')); ?>" alt="">
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\PC\Documents\VFL\Hell\Sem 2\Perancangan Situs Web\cv-vfl\resources\views/experience.blade.php ENDPATH**/ ?>