<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout-dashboard','data' => ['title' => 'Scan '.e($number->body).'']]); ?>
<?php $component->withName('layout-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Scan '.e($number->body).'']); ?>
    <div class="app-content">
        <div class="content-wrapper">
            <div class="container">
                <h4 class="my-5">#Device-<?php echo e($number->body); ?></h4>
    
                <div class="alert alert-secondary">Dont turn off your scanner camera before status CONNECTED</div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card widget widget-stats-large">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="widget-stats-large-chart-container">
                                        <div class="card-header logoutbutton">
                                          
                                               
                                          
                                          
                                          
                                        </div>
                                        <div class="card-body">
                                            <div id="apex-earnings"></div>
                                            <div class="imageee text-center">
                                                <?php if(Auth::user()->is_expired_subscription): ?>
                                               
                                               
                                                <img src="<?php echo e(asset('images/other/expired.png')); ?>" height="300px" alt="">
                                                <?php else: ?>
                                                <img src="<?php echo e(asset('images/other/waiting.jpg')); ?>" height="300px" alt="">
                                                <?php endif; ?>
                                            </div>
                                            <div class="statusss text-center">
                                                <?php if(Auth::user()->is_expired_subscription): ?>
                                                <button class="btn btn-danger   " type="button" disabled>
                                                Your subscription is expired. Please renew your subscription.
                                            </button>
                                                <?php else: ?>
                                                <button class="btn btn-primary" type="button" disabled>
                                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                                    Connecting to Node server...
                                                </button>
                                                <?php endif; ?>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="widget-stats-large-info-container">
                                        <div class="card-header">
                                            <h5 class="card-title">Whatsapp Info<span class="badge badge-info badge-style-light">Updated 5 min ago</span></h5>
                                        </div>
                                        <div class="card-body account">
    
                                            <ul class="list-group account list-group-flush">
                                                <li class="list-group-item name">Nama : </li>
                                                <li class="list-group-item number">Nomor : </li>
                                                <li class="list-group-item device">Device : </li>
    
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<script src="https://cdn.socket.io/4.4.1/socket.io.min.js" integrity="sha384-fKnu0iswBIqkjxrhQCTZ7qlLHOFEgNkRmK2vaO/LbTZSXdJfAu6ewRBdwHPhBo/H" crossorigin="anonymous"></script>
<script>

    // if subscription not expired
   const is_expired_subscription = '<?php echo e(Auth::user()->is_expired_subscription); ?>';
  if(!is_expired_subscription){
    console.log('subscription not expired');
    let socket;
    let device = '<?php echo e($number->body); ?>';
  
    if('<?php echo e(env('TYPE_SERVER')); ?>' === 'hosting') {
        socket = io();
    } else {
        socket = io('<?php echo e(env('WA_URL_SERVER')); ?>', {
            transports: ['websocket', 'polling', 'flashsocket']
        });
   }
     

       socket.emit('StartConnection','<?php echo e($number->body); ?>')
       socket.on('qrcode', ({token,data,message}) => {
        if(token == device ) {

            let url = data
                 $('.imageee').html(` <img src="${url}" height="300px" alt="">`)
                 let count = 0;
     
                 $('.statusss').html(`  <button class="btn btn-warning" type="button" disabled>
                                                     <span class="" role="status" aria-hidden="true"></span>
                                                   ${message}
                                                 </button>`)
               
        }

        })
        socket.on('connection-open',({token,user,ppUrl}) => {
            if(token == device ) {
               
                $('.name').html(`Nama : ${user.name}`)
                $('.number').html(`Number : ${user.id}`)
                $('.device').html(`Device / Token : Not detected - ${token}`)
                $('.imageee').html(` <img src="${ppUrl}" height="300px" alt="">`)
                $('.statusss').html(`  <button class="btn btn-success" type="button" disabled>
                                                    <span class="" role="status" aria-hidden="true"></span>
                                                   Connected
                                                </button>`)
                                                $('.logoutbutton').html(` <button class="btn btn-danger" class="logout"  id="logout"  onclick="logout(<?php echo e($number->body); ?>)">
                                                   Logout
                                               </button>`)
            }
        })
       
        socket.on('Unauthorized',({token})=> {
            if(token == device ) {
                $('.statusss').html(`  <button class="btn btn-danger" type="button" disabled>
                                                    <span class="" role="status" aria-hidden="true"></span>
                                                   Unauthorized
                                                </button>`)
            }
           
        })
         socket.on('message',({token,message})=> {
            if(token == device ) {
                $('.statusss').html(`  <button class="btn btn-success" type="button" disabled>
                                                    <span class="" role="status" aria-hidden="true"></span>
                                                   ${message}
                                                </button>`)
                                               // interval 3 second and reload
                                                setTimeout(() => {
                                                    location.reload();
                                                }, 3000);
            }
          
                                            
        })
        

function logout(device){
 socket.emit('LogoutDevice',device)
}
}
   
</script><?php /**PATH C:\xampp\htdocs\resources\views/scan.blade.php ENDPATH**/ ?>