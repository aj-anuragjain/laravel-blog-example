<?php $__env->startSection("page-title"); ?>
    Betaroid | Learning web development from scratch
<?php $__env->stopSection(); ?>



<?php $__env->startSection("title"); ?>
    Betaroid | Learning web development from scratch with us
<?php $__env->stopSection(); ?>


<?php $__env->startSection("keywords"); ?>
    web development, learning, web basics, web starters, web fresher, web tutorial, html learning, css learning, javascript learning, php learning, nodejs learning, python learning, webpack learning.
<?php $__env->stopSection(); ?>


<?php $__env->startSection("description"); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection("og-image"); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection("og-url"); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection("meta-robots"); ?>
    index, follow, noarchive
<?php $__env->stopSection(); ?>



<?php $__env->startSection("content"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-9">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <a href="/blogs/<?php echo e($post->id); ?>">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo e($post->post_title); ?>

                            </div>
                            <div class="panel-body">
                                <?php echo e(substr($post->post_detail->post_text, 0, 360)); ?>... Read More
                            </div>
                            <div class="panel-footer">
                                <?php echo e($post->user->name); ?>

                                <?php echo e($post->updated_at); ?>

                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Popular Posts
                    </div>
                    <div class="panel-body">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <a href="/blogs/<?php echo e($post->id); ?>">
                                <dt><?php echo e($post->post_title); ?></dt>
                                <dd><?php echo e($post->user->name); ?> | <?php echo e($post->updated_at); ?></dd>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <?php echo e($posts); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("public.base", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>