<?php echo $__env->make('inc/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mx-auto mt-5">

    <h2 class="text-3xl font-bold mt-10 mb-5 text-center">Categories</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 p-4 lg:grid-cols-6 gap-4 m-135">
        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="/category/<?php echo e($category['slug']); ?>">
                <div class="flex-auto flex justify-center font-bold category-box"><?php echo e($category['name']); ?></div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <h2 class="text-3xl font-bold mt-10 mb-5 text-center">Popular Posts</h2>
    <?php echo $__env->make('post/popular-post', ['post' => $popularPosts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <h2 class="text-3xl font-bold mb-5 text-center">All Posts</h2>
    <?php echo $__env->make('post/all-post', ['post' => $allPosts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div>
<?php echo $__env->make('inc/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\KLE\Desktop\Blog\blog-frontend\resources\views/home.blade.php ENDPATH**/ ?>