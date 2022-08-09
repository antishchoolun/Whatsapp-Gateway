
<div class="app align-content-stretch d-flex flex-wrap">
    <div class="app-sidebar">
        <div class="logo">
            <a href="<?php echo e(route('home')); ?>" class="logo-icon"><span class="logo-text">MPWA</span></a>
            <div class="sidebar-user-switcher user-activity-online">
                <a href="/">
                    <img src="<?php echo e(asset('images/avatars/avatar2.png')); ?>">
                    <span class="activity-indicator"></span>
                    <span class="user-info-text"><?php echo e(Auth::user()->username); ?><br></span>
                </a>
            </div>
        </div>
        <div class="app-menu">
            <ul class="accordion-menu">
                <li class="sidebar-title">
                    Apps
                </li>
                <li class="<?php echo e(request()->is('home') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('home')); ?>" class=""><i class="material-icons-two-tone">dashboard</i><?php echo e(__('system.home')); ?></a>
                </li>
                 <li class="<?php echo e(request()->is('file-manager') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('file-manager')); ?>" class=""><i class="material-icons-two-tone">folder</i><?php echo e(__('File Manager')); ?></a>
                </li>
                <?php if (isset($component)) { $__componentOriginal5d9952b5be3538308e32d3fe1eb0eea98123b88c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SelectDevice::class, []); ?>
<?php $component->withName('select-device'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5d9952b5be3538308e32d3fe1eb0eea98123b88c)): ?>
<?php $component = $__componentOriginal5d9952b5be3538308e32d3fe1eb0eea98123b88c; ?>
<?php unset($__componentOriginal5d9952b5be3538308e32d3fe1eb0eea98123b88c); ?>
<?php endif; ?>
                <?php if(Session::has('selectedDevice')): ?>
                 
                <li class="<?php echo e(request()->is('autoreply') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('autoreply')); ?>" class=""><i class="material-icons-two-tone">message</i><?php echo e(__('system.autoreply')); ?></a>
                </li>
                <li class="<?php echo e(request()->is('tag') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('tag')); ?>"><i class="material-icons-two-tone">contacts</i>Phone Book</a>
                   
                </li>
                <li class="<?php echo e(request()->is('campaign/create') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('campaign.create')); ?>" class=""><i class="material-icons-two-tone">email</i>Create Campaign</a>
                </li>
                <li class="<?php echo e(request()->is('campaigns') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('campaign.lists')); ?>" class=""><i class="material-icons-two-tone">history</i>List Campaign</a>
                </li>
                <li class="<?php echo e(request()->is('message/test') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('messagetest')); ?>" class=""><i class="material-icons-two-tone">note</i><?php echo e(__('system.test')); ?></a>
                </li>
                <?php endif; ?>
                <li class="<?php echo e(request()->is('rest-api') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('rest-api')); ?>"><i class="material-icons-two-tone">api</i><?php echo e(__('system.restapi')); ?></a>
                </li>
                 <li class="<?php echo e(request()->is('user/change-password') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('changePassword')); ?>"><i class="material-icons-two-tone">settings</i>Setting</a>
                </li>
              
                
                
                <?php if(Auth::user()->level == 'admin'): ?>
                <li class="sidebar-title">
                    Admin Menu
                </li>

                <li class="<?php echo e(request()->is('settings') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('settings')); ?>"><i class="material-icons-two-tone">settings</i>Setting Server</a>
                </li>
                <li class="<?php echo e(request()->is('admin/manage-user') ? 'active-page' : ''); ?>">
                    <a href="<?php echo e(route('admin.manageUser')); ?>"><i class="material-icons-two-tone">people</i>User Manager</a>
                </li>
                <?php endif; ?>
               

            </ul>
        </div>
    </div>
    <div class="app-container">
        <div class="search">
            <form>
                <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
            </form>
            <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
        </div>
        <div class="app-header">
            <nav class="navbar navbar-light navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-nav" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                            </li>
                           
                        </ul>

                    </div>
                    <div class="d-flex">
                       
                        <ul class="navbar-nav">
                         

                            <li class="nav-item hidden-on-mobile">
                                <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#" data-bs-toggle="dropdown">4</a>
                                <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">
                                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="dropdown-header h6 " style="border: 0; background-color :white;">Logout</button>
                                    </form>
                                         </div> 
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div><?php /**PATH C:\xampp\htdocs\resources\views/components/sidebar.blade.php ENDPATH**/ ?>