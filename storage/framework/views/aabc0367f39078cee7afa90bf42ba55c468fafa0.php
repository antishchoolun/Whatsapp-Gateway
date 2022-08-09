
                                   
                               <li class="mx-4">
             
                                        <select class="form-control" id="device_idd" name="device_id">
                                           
                                            
                                    
                                            <option value="" >Select Device</option>
                                        
                                           
                                                       
                                            <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <?php if(Session::has('selectedDevice') && Session::get('selectedDevice') == $device->body): ?>
                                                   
                                                    <option value="<?php echo e($device->body); ?>" selected><?php echo e($device->body); ?> (<?php echo e($device->status); ?>)</option>
                                                <?php else: ?>
                                                    <option value="<?php echo e($device->body); ?>"><?php echo e($device->body); ?> (<?php echo e($device->status); ?>)</option>
                                                <?php endif; ?>
                                              
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    
                                </li>

<script>
    //  on select device
    $('#device_idd').on('change', function() {
        var device = $(this).val();
      
        // ajax to home.setSessionSelectedDevice
        $.ajax({
            url: "<?php echo e(route('home.setSessionSelectedDevice')); ?>",
            type: "POST",
            data: {
                _token: "<?php echo e(csrf_token()); ?>",
                device: device
            },
            success: function(data) {
                // reload page
                location.reload();
            }
        });
      
    });
</script><?php /**PATH C:\xampp\htdocs\resources\views/components/select-device.blade.php ENDPATH**/ ?>