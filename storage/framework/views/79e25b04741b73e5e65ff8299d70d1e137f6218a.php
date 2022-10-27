<?php $__env->startSection('content'); ?>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h3 class="mb-3">Edit Profil</h3>
        <img src="<?php echo e(auth()->user()->getAvatar()); ?>" class="rounded-circle mx-auto mb-4" alt="Avatar" height="100px">

        <form action="/user/<?php echo e($user->id); ?>/update" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="form-group">
              <label>Nama</label>
              <input value="<?php echo e($user->name); ?>" type="text" class="form-control" name="name" placeholder="Ketik nama anda disini">
            </div>
            <div class="form-group">
              <label>Telepon</label>
              <input value="<?php echo e($user->phone); ?>" type="text" class="form-control" name="phone" placeholder="Ketik nomor telepon anda disini">
            </div>
            <div class="custom-file mb-4">
              <input type="file" class="custom-file-input" name="avatar" id="avatar">
              <label class="custom-file-label" for="avatar">Choose avatar</label>
            </div>
            <button type="submit" class="btn btn-main">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
      var fileName = document.getElementById("myInput").files[0].name;
      var nextSibling = e.target.nextElementSibling
      nextSibling.innerText = fileName
    })
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\OneDrive\Documents\Kuliah\sem5\peweb\ETS-PWEB-C-main\resources\views/user/edit.blade.php ENDPATH**/ ?>