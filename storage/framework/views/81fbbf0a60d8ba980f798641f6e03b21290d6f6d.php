<?php $__env->startSection('content'); ?>
  <div class="container">
    <?php if(session('status')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('status')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    
    
    <small class="text-muted"><?php echo e($thread->user->name); ?> · Created at <?php echo e($thread->created_at); ?> · Updated at <?php echo e($thread->updated_at); ?></small>
    <h3 class="mt-1 mb-3 font-weight-bold"><?php echo e($thread->question); ?></h3>
    <p> <?php echo e($thread->body); ?> </p>

    <?php if($thread->user_id == auth()->user()->id): ?>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal" >Edit</button>
      
      
      <!-- Modal -->
      <div class="modal fade" id="editModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Pertanyaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="/threads/<?php echo e($thread->id); ?>">
                    <?php echo method_field('patch'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <label for="question">Edit your post</label>
                      <textarea class="form-control <?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="question" id="question" rows="2" value="<?php echo e($thread->question); ?>"><?php echo e($thread->question); ?></textarea>
                      <div class="invalid-feedback">
                        Please enter a title.
                      </div>
                      <label for="question">Edit your details</label>
                      <textarea class="form-control <?php $__errorArgs = ['bodiz'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="bodiz" id="bodiz" rows="5" value="<?php echo e($thread->question); ?>"><?php echo e($thread->body); ?></textarea>
                      <div class="invalid-feedback">
                        Please enter details.
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
      </div>
      
      
      <form action="/threads/<?php echo e($thread->id); ?>" method="post" class="d-inline">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    <?php else: ?>
      <button type="button" class="btn btn-main" data-toggle="modal" data-target="#answer" ><i class="fas fa-edit mr-1"></i>Answer</button>
    <?php endif; ?>
    <?php $cond = count($thread->replies); $someText = "Reply" ?>

    <?php if($cond!=1): ?>
    <?php $someText = "Replies"; ?>
    <?php endif; ?>

    <hr>
    <h6><?php echo e(count($thread->replies)); ?> <?php echo e($someText); ?></h6>
    <hr>

      <?php $__currentLoopData = $replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <div class="card rounded my-2">
        <div class="card-body">
          <div class="d-flex align-items-start mb-2">
            <img src="<?php echo e($reply->user->getAvatar()); ?>" class="rounded-circle" alt="Avatar" height="40px" width="40px">
            <div class="ml-2">
              <h6 class="mt-1 mb-0"><?php echo e($reply->user->name); ?></h6>
              <small class="text-muted mt-0">Last updated at <?php echo e($reply->updated_at); ?></small>
            </div>
          </div>
          <?php if($reply->user_id == auth()->user()->id): ?>
            <a href="/replies/<?php echo e($reply->id); ?>/edit" class="btn btn-success reply-action"><i class="fas fa-pencil-alt"></i></i></a>
            <form action="/replies/<?php echo e($reply->id); ?>" method="post" class="d-inline">
              <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-danger reply-action"><i class="fas fa-trash"></i></button>
            </form>
          <?php endif; ?>
          <p class="card-text text-dark reply-body mt-2"><?php echo nl2br(e($reply->body)); ?></p>
        </div>
      </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

      <div class="modal fade" id="answer" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Jawaban</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo e(route('storecomment', $thread->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="body">Input your answer</label>
                                <textarea class="form-control <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="body" id="body" rows="5"></textarea>
                                <div class="invalid-feedback">
                                    Please enter an answer.
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\Kuliah\sem5\peweb\ETS-PWEB-C-main\resources\views/threads/show.blade.php ENDPATH**/ ?>