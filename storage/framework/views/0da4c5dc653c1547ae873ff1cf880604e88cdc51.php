<?php $__env->startSection('content'); ?>

    <div class="container mt-3">
        <div class="row mb-3">
            <div class="col-8 mx-auto">
                <h3 class="font-weight-bold">Your threads</h3>
                <hr>
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
                        <div class="card rounded my-2">
                            <div class="card-body">
                                <small class="text-muted">Last updated at <?php echo e($thread->updated_at); ?></small>
                            <h5 class="font-weight-bold mt-2"><a href="/threads/<?php echo e($thread->id); ?>" class="text-dark"><?php echo e($thread->question); ?></a></h5>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>You have not made any threads yet.</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                <h3 class="font-weight-bold">Your answers</h3>
                <hr>
                <?php if(count($replies) > 0): ?>
                    <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card rounded my-2">
                            <div class="card-body">
                                <small class="text-muted">Last updated at <?php echo e($reply->updated_at); ?></small>
                                <a href="/threads/<?php echo e($reply->thread->id); ?>" class="d-block h5 mt-2 text-dark font-weight-bold">View thread</a>
                                <p class="card-text text-dark mt-2"><?php echo nl2br(e($reply->body)); ?></p>
                            </div>
                        </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>You have not made any answers yet.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\Kuliah\sem5\peweb\ETS-PWEB-C-main\resources\views/home.blade.php ENDPATH**/ ?>