<?php
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head><?php include('../shortcuts/cssftr.php'); ?></head>
  <body>
    <?php include('../shortcuts/nav.php'); ?>
    <main class="py-4">
<div class="container">
<div class="my-3">
<div class="d-block d-md-inline-block text-md-left text-center position-relative" style="z-index: 1;">
<div class="position-relative d-inline-block h-100">
<img class="shadow-sm position-relative img-fluid rounded-circle border headshot-bg" style="max-height: 10rem;" data-tadah-thumbnail-type="user-headshot" data-tadah-thumbnail-id="<?php echo htmlspecialchars($_SESSION["id"]); ?>" src="/images/thumbnail/Png.png">
</div>
<div class="d-inline-block py-2 py-md-0 align-middle">
<h2 class="font-weight-bold d-block d-md-inline-block text-center text-md-left px-3">Ahoy, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
</div>
</div>
</div>
<div class="d-flex justify-content-between">
<h2 class="mb-0 font-weight-bold">Friends (0)</h2>
<div class="align-self-center">
<a class="font-weight-bold" href="/my/friends">See All <i class="fas fa-angle-right"></i></a>
</div>
</div>
<hr>
<div class="my-3">
<div class="overflow-auto flex-nowrap row mx-0 justify-content-left">
<div id="empty" class="col text-center">
<img data-toggle="tooltip" data-placement="left" title="" src="../images/blobs/egg.png" class="img-fluid py-2" width="100" data-original-title=":)">
<h2>No friends found.</h2>
<p class="text-muted">Seems like you will be fatherless soon.</p>
</div>
</div>
</div>
<div class="d-flex justify-content-between">
<h2 class="mb-0 font-weight-bold">Servers</h2>
<div class="align-self-center">
<a class="font-weight-bold" href="/servers">See All <i class="fas fa-angle-right"></i></a>
</div>
</div>
<hr>
<div class="col-md p-0">
<div class="row col-xs-12">
<div class="col-lg-2 col-6 mb-3">
<div class="card card-body d-flex flex-column shadow-sm">
<a href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/925c9972-df78-48a3-a460-17a5c649067c"><img class="card-img-top rounded pb-2" style="max-height: 250px;" src="https://archive.lumen128.com/tadah/20220610183841im_/https://cdn.tadah.rocks/941c67f7d770da07d6efc344a7bc2eb70f16939a9cec254475be25697615e778" data-tadah-thumbnail-type="place-thumbnail" data-tadah-thumbnail-id="925c9972-df78-48a3-a460-17a5c649067c" alt="[READ DESC] Server testing thumbnail"></a>
<div class="d-flex justify-content-between">
<div class="card-title mb-0 h-auto">
<h5 class="d-inline-block m-0">
<a class="text-secondary" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/925c9972-df78-48a3-a460-17a5c649067c">be cool</a>
</h5>
<div class="d-block justify-content-start">
<span class="badge badge-secondary text-white shadow-sm badge-pill user-select-1">2014</span>
<span class="badge badge-pill badge-secondary text-small"><i style="font-size: 50%" class="fas fa-circle align-middle mr-1"></i>Offline</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-2 col-6 mb-3">
<div class="card card-body d-flex flex-column shadow-sm">
<a href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/f03d8476-5e5d-4ee8-8b2f-2855604f3d89"><img class="card-img-top rounded pb-2" style="max-height: 250px;" src="https://archive.lumen128.com/tadah/20220610183841im_/https://cdn.tadah.rocks/8384152387c023656f90b4f862704a7d9ac81979ee656db289ee2ac161d6d0f8" data-tadah-thumbnail-type="place-thumbnail" data-tadah-thumbnail-id="f03d8476-5e5d-4ee8-8b2f-2855604f3d89" alt="Just Some Lemonade Tadah 2.2 thumbnail"></a>
<div class="d-flex justify-content-between">
<div class="card-title mb-0 h-auto">
<h5 class="d-inline-block m-0">
<a class="text-secondary" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/f03d8476-5e5d-4ee8-8b2f-2855604f3d89">Just Some...</a>
</h5>
<div class="d-block justify-content-start">
<span class="badge badge-secondary text-white shadow-sm badge-pill user-select-1">2014</span>
<span class="badge badge-pill badge-secondary text-small"><i style="font-size: 50%" class="fas fa-circle align-middle mr-1"></i>Offline</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-2 col-6 mb-3">
<div class="card card-body d-flex flex-column shadow-sm">
<a href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/3398c66d-cba3-426c-b3eb-2dffc23f56c7"><img class="card-img-top rounded pb-2" style="max-height: 250px;" src="https://archive.lumen128.com/tadah/20220610183841im_/https://cdn.tadah.rocks/524d5c03a0185dbd7aa263416af6e92dfa56b1bf6d7544a9c9f025a3912b7471" data-tadah-thumbnail-type="place-thumbnail" data-tadah-thumbnail-id="3398c66d-cba3-426c-b3eb-2dffc23f56c7" alt="Blap Mesa Tadah Laboratories 0.8 thumbnail"></a>
<div class="d-flex justify-content-between">
<div class="card-title mb-0 h-auto">
<h5 class="d-inline-block m-0">
<a class="text-secondary" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/3398c66d-cba3-426c-b3eb-2dffc23f56c7">Blap Mesa...</a>
</h5>
<div class="d-block justify-content-start">
<span class="badge badge-secondary text-white shadow-sm badge-pill user-select-1">2014</span>
<span class="badge badge-pill badge-secondary text-small"><i style="font-size: 50%" class="fas fa-circle align-middle mr-1"></i>Offline</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-2 col-6 mb-3">
<div class="card card-body d-flex flex-column shadow-sm">
<a href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/2e3114d4-53c1-40fc-838d-64ae7e03d1ae"><img class="card-img-top rounded pb-2" style="max-height: 250px;" src="https://archive.lumen128.com/tadah/20220610183841im_/https://cdn.tadah.rocks/e1b5a24cd748971c35b31a8d0158f56943f2a438d44d3aabbdb2d4b48169337f" data-tadah-thumbnail-type="place-thumbnail" data-tadah-thumbnail-id="2e3114d4-53c1-40fc-838d-64ae7e03d1ae" alt="Build a Raft! (2014) thumbnail"></a>
<div class="d-flex justify-content-between">
<div class="card-title mb-0 h-auto">
<h5 class="d-inline-block m-0">
<a class="text-secondary" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/2e3114d4-53c1-40fc-838d-64ae7e03d1ae">Build a Ra...</a>
</h5>
<div class="d-block justify-content-start">
<span class="badge badge-secondary text-white shadow-sm badge-pill user-select-1">2014</span>
<span class="badge badge-pill badge-secondary text-small"><i style="font-size: 50%" class="fas fa-circle align-middle mr-1"></i>Offline</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-2 col-6 mb-3">
<div class="card card-body d-flex flex-column shadow-sm">
<a href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/c78d946e-f8b1-4b4c-a939-aaa98b345043"><img class="card-img-top rounded pb-2" style="max-height: 250px;" src="https://archive.lumen128.com/tadah/20220610183841im_/https://cdn.tadah.rocks/7a918426ebc0379017641498471ee6b1a8834f536a122b445ce5d5f6b6dd80bb" data-tadah-thumbnail-type="place-thumbnail" data-tadah-thumbnail-id="c78d946e-f8b1-4b4c-a939-aaa98b345043" alt="Old Cars V2 thumbnail"></a>
<div class="d-flex justify-content-between">
<div class="card-title mb-0 h-auto">
<h5 class="d-inline-block m-0">
<a class="text-secondary" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/c78d946e-f8b1-4b4c-a939-aaa98b345043">Old Cars V...</a>
</h5>
<div class="d-block justify-content-start">
<span class="badge badge-secondary text-white shadow-sm badge-pill user-select-1">2010</span>
 <span class="badge badge-pill badge-secondary text-small"><i style="font-size: 50%" class="fas fa-circle align-middle mr-1"></i>Offline</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-2 col-6 mb-3">
<div class="card card-body d-flex flex-column shadow-sm">
<a href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/d3fdd6fc-9ad4-47ef-a529-1698a4ad1788"><img class="card-img-top rounded pb-2" style="max-height: 250px;" src="https://archive.lumen128.com/tadah/20220610183841im_/https://cdn.tadah.rocks/5ba69aa9e9ed7cfbdcff6468c1088cd8b141b2d649883d18941a0dc0bcf51974" data-tadah-thumbnail-type="place-thumbnail" data-tadah-thumbnail-id="d3fdd6fc-9ad4-47ef-a529-1698a4ad1788" alt="Osha's taco stand (BETA) thumbnail"></a>
<div class="d-flex justify-content-between">
<div class="card-title mb-0 h-auto">
<h5 class="d-inline-block m-0">
<a class="text-secondary" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/server/d3fdd6fc-9ad4-47ef-a529-1698a4ad1788">Osha's tac...</a>
</h5>
<div class="d-block justify-content-start">
<span class="badge badge-secondary text-white shadow-sm badge-pill user-select-1">2014</span>
<span class="badge badge-pill badge-secondary text-small"><i style="font-size: 50%" class="fas fa-circle align-middle mr-1"></i>Offline</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
    </body>
  </html>










