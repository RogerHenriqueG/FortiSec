<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->yieldContent('footer'); ?>
  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- End Go to Top -->

  <?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent('javascript'); ?>
</body>
</html>
<?php /**PATH /home/roger_kyfler/www/facul/FortiSec/resources/views/layouts/app.blade.php ENDPATH**/ ?>