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

    <div style="padding-inline: 100px;">
        <h1>My Projects</h1>
        <br>
        <h3>Check out my Game Development Projects!</h3>
        <ul>
            <li>Warped City Runaway (PC)</li>
            <img class="object-small" src="<?php echo e(asset('/Image/mm_wcr.jpg')); ?>" alt="Main Menu WCR">
            <li>Space Shooter 2D (Android/PC)</li>
            <img class="object-small" src="<?php echo e(asset('/Image/gp_ss2d.jpg')); ?>" alt="Gameplay SS2D">
        </ul>
        <br>
        <h3>Check out my Graphic Design Works!</h3>
        <h4>Poster Designs</h4>
        <img class="object-small" style="margin-inline: 8px" src="<?php echo e(asset('/Image/poster_tpa.jpg')); ?>" alt="TPA Poster">
        <img class="object-small" src="<?php echo e(asset('/Image/poster_em_waves.jpg')); ?>" alt="EM Wave Poster">
        <br>
        <h4>Name Card Designs</h4>
        <img class="object-small" style="margin-inline: 8px" src="<?php echo e(asset('/Image/nm_vfl.jpg')); ?>" alt="vfl automobile">
        <img class="object-small" style="margin-inline: 8px" src="<?php echo e(asset('/Image/nm_jmh.jpg')); ?>" alt="JMH777 nc">
        <br>
        <h4>Logo Designs</h4>
        <div>

            <img class="image-crop-small" style="margin-inline: 12px" src="<?php echo e(asset('/Image/logo_bull.jpg')); ?>" alt="bull Logo">
            <img style="object-fit: cover; width: 150px; height: 100%; margin-inline: 12x;"  src="<?php echo e(asset('/Image/logo_vfl.jpg')); ?>" alt="vanfl automobile logo">
            <img style="object-fit: cover; width: 150px; height: 100%; margin-inline: 12px;"  src="<?php echo e(asset('/Image/logo_tree.jpg')); ?>" alt="tree logo">
            
        </div>
        <div>
            <div>
                <h4 class="break-word bottom-right-screen" style="right:386px ;bottom: 356px; color:black; z-index:100; font-size:20px;text-align:center" >Check out my portfolio website <a href="https://vanfl.wordpress.com">here!</a></h4>

            </div>
            <img class="bottom-right-screen" style="transform: scaleX(-1); right:380px ;bottom: 305px;" src="<?php echo e(asset('/Image/bubble_chat.png')); ?>" alt="bubble chat">
        
            <img  class="bottom-right-screen" src="<?php echo e(asset('/Image/luz.png')); ?>" alt="luz img">
        </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\PC\Documents\VFL\Hell\Sem 2\Perancangan Situs Web\cv-vfl\resources\views/works.blade.php ENDPATH**/ ?>