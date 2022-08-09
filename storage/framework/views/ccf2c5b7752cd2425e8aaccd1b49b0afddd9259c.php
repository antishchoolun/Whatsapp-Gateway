<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout-dashboard','data' => ['title' => 'Auto Replies']]); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Auto Replies']); ?>
  
    <div class="app-content">
        
        
        <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
        <div class="content-wrapper">
            <div class="container">
                <?php if(session()->has('alert')): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alert','data' => []]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <?php $__env->slot('type',session('alert')['type']); ?>
                    <?php $__env->slot('msg',session('alert')['msg']); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
             <?php endif; ?>
             <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
       
           
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                 
                                <h5 class="card-title">Lists auto respond <?php echo e(Session::get('selectedDevice')); ?> </h5>
                                <div class="d-flex ">
                                   
                                    <?php if(Session::has('selectedDevice')): ?>

                                   
                                    <form action="<?php echo e(route('deleteAllAutoreply')); ?>" method="POST">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" name="delete" class="btn btn-danger btn-xs"><i class="material-icons">delete_outline</i>Delete All</button>
                                    </form>
                                    <button type="button" class="btn btn-primary btn-xs mx-4" data-bs-toggle="modal" data-bs-target="#addAutoRespond"><i class="material-icons-outlined">add</i>Add</button>
                                    <?php endif; ?>
                                </div>
                                 </div>
                            <div class="card-body rounded-lg">
                                <table id="datatable1" class="display table table-striped table-bordered" style="width:100%">
                                    
                                  
                                     <thead class="">
                                        <tr>
                                           
                                            <th>Keyword</th>
                                           <th>Type</th>
                                            <th>Respond</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                     

                                        <?php if(Session::has('selectedDevice')): ?>
                                       <?php $__currentLoopData = $autoreplies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autoreply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                       <tr>
    
                                       
                                        <td><?php echo e($autoreply['keyword']); ?> </td>
                                        <td><?php echo e($autoreply['type']); ?></td>
                                       <td><button class="btn btn-primary" onclick="viewReply(<?php echo e($autoreply->id); ?>)">View</button></td>
                                        <td> 
                                            <form action=<?php echo e(route('autoreply.delete')); ?> method="POST">
                                                <?php echo method_field('delete'); ?>
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?php echo e($autoreply->id); ?>">
                                                <button type="submit" name="delete" class="btn btn-danger btn-sm"><i class="material-icons">delete_outline</i></button>
                                            </form>

                                        </td>
                                    </tr>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <tr>
                                            <td colspan="4">Please select device</td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                   
                                 
    
                                </table>
                                
                                
                                <div class="d-flex">
                                    <?php echo e($autoreplies->links()); ?>

                                </div>
                               
                            </div>
                        </div>
                    </div>
    
                </div>
    
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="addAutoRespond" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" id="formautoreply">
                    <?php echo csrf_field(); ?>
                    <label for="device" class="form-label">Device/Sender</label>
                   <?php if(Session::has('selectedDevice')): ?>
                    <input type="text" name="device" id="device" class="form-control" value="<?php echo e(Session::get('selectedDevice')); ?>" readonly>
                    <?php else: ?>
                    <input type="text" name="devicee" id="device" class="form-control" value="Please select device" readonly>
                    <?php endif; ?>
                    <label for="keyword" class="form-label">Keyword</label>
                    <input type="text" name="keyword" class="form-control" id="keyword" required>
                    <label for="type" class="form-label">Type Reply</label>
                    <select name="type" id="type" class="js-states form-control" tabindex="-1" required>
                      <option selected  disabled>Select One</option>
                        <option value="text">Text Message</option>
                        <option value="image">Image Message</option>
                        <option value="button">Button Message</option>
                        <option value="template">Template Message</option>
                        <option value="list">List Message</option>
                       
                     </select>
                     <div class="ajaxplace"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Auto Reply Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body showReply">
                 </div>
        </div>
    </div>
</div>
<!--  -->
    
    
    <script src="<?php echo e(asset('plugins/datatables/datatables.min.js')); ?>"></script>
    
  <script src="<?php echo e(asset('js/autoreply.js')); ?>"></script>
 
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\resources\views/pages/autoreply.blade.php ENDPATH**/ ?>