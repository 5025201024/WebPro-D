<?php $__env->startSection('content'); ?>
    <div class="container mt-3">
        <div class="col-8 mx-auto">
            <?php if(session('status')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('status')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php if(count($threads) > 0): ?>
                <?php $__currentLoopData = $threads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thread): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $cond = count($thread->replies); $someText = "Reply"; ?>
                    <?php if($cond!=1): ?>
                        <?php $someText = "Replies"; ?>
                    <?php endif; ?>
                    <div class="card rounded my-2">
                        <div class="card-body">
                            <div class="d-flex align-items-start mb-2">
                                <img src="<?php echo e($thread->user->getAvatar()); ?>" class="rounded-circle" alt="Avatar" height="40px" width="40px">
                                <div class="ml-2">
                                    <h6 class="mt-1 mb-0"><?php echo e($thread->user->name); ?></h6>
                                    <small class="text-muted mt-0">Last updated at <?php echo e($thread->updated_at); ?></small>
                                </div>
                            </div>
                            <h5 class="card-title thread-thumbnail"><a href="/threads/<?php echo e($thread->id); ?>" class="text-dark"><?php echo e($thread->question); ?></a></h5>
                            
                            <p class="reply-thumbnail"> 
                            <?php echo e($thread->body); ?>

                            </p>

                            <div class="ml-2">
                                <small class="text-muted mt-0"> <?php echo e($thread->replies->count()); ?> <?php echo e($someText); ?></small>
                            </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <span class="d-block mx-auto"><?php echo e($threads->links()); ?></span>
            <?php else: ?>
                <p>No threads found</p>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\Kuliah\sem5\peweb\ETS-PWEB-C-main\resources\views/threads/index.blade.php ENDPATH**/ ?>