<?php $__env->startSection("content"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo e($post->post_title); ?>

                    </div>
                    <div class="panel-body">
                        <?php echo e($post->post_detail->post_text); ?>

                    </div>
                    <div class="panel-footer">
                        <?php echo e($post->user->name); ?>

                        <?php echo e($post->updated_at); ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Popular Posts
                    </div>
                    <div class="panel-body">
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("public.base", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>