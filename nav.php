<?php
    require_once "config.php";
 
session_start();
    $userid = $_SESSION["id"];
  $userq = mysqli_query($link, "SELECT * FROM users WHERE id='$userid'") or die(mysqli_error($link));
  $user = mysqli_fetch_assoc($userq);
?>
<head><?php include('shortcuts/cssftr.php') ?>
<nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
<div class="container">
<a class="navbar-brand" href="https://trolliu.ml">
Trollium
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link active" href="/my/dashboard"><i class="fas fa-home mr-1"></i>Home</a>
</li>
<li class="nav-item">
<a class="nav-link " href="/servers"><i class="fas fa-gamepad-alt mr-1"></i>Servers</a>
</li>
<li class="nav-item">
<a class="nav-link " href="/catalog"><i class="fas fa-shopping-bag mr-1"></i>Catalog</a>
</li>
<li class="nav-item">
<a class="nav-link " href="/users"><i class="fas fa-users mr-1"></i>Users</a>
</li>
<li class="nav-item">
<a class="nav-link " href="/forum"><i class="fas fa-megaphone mr-1"></i>Forums</a>
</li>
<li class="nav-item">
<a class="nav-link" href="https://blog.trolliu.ml/"><i class="fas fa-megaphone mr-1"></i>Blog</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item">
<span id="reward" class="navbar-text" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo htmlspecialchars($_SESSION["dahllor"]); ?> Tokens" data-tadah-started="1654878081">
<img style="filter: opacity(75%);" src="https://trolliu.ml/images/dahllor_white.png" alt="<?php echo htmlspecialchars($_SESSION["dahllor"]); ?> Tokens" width="16" height="20"> <?php echo $user['dahllor']; ?>
</span>
</li>
<li class="nav-item ml-1 dropdown">
<a id="navbarropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="">
<img src="https://archive.lumen128.com/tadah/20220610183841im_/https://cdn.tadah.rocks/efe00306b6ac7a50b1ca4fed2eada9c21f4e9d3b21a0bb13c1d508c67cc9b0a4" data-tadah-thumbnail-id="726" data-tadah-thumbnail-type="user-headshot" class="rounded-circle mr-1 shadow-sm" width="25" id="navigation-headshot" style="">
<?php echo htmlspecialchars($_SESSION["username"]); ?>
<i class="fas fa-cog ml-1 align-middle"></i>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="/users?id=<?php echo htmlspecialchars($_SESSION["id"]); ?>"><i class="fas fa-id-card mr-1 align-middle"></i>Profile
</a>
<a class="dropdown-item" href="https://trolliu.ml/character"><i class="fas fa-fw fa-user-edit mr-1 align-middle"></i>Character
</a>
<a class="dropdown-item" href="https://trolliu.ml/my/settings"><i class="fas fa-fw fa-cog mr-1 align-middle"></i>Settings
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item text-danger font-weight-bold" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/logout" onclick="var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat &amp;&amp; self._wb_wombat.local_init &amp;&amp; self._wb_wombat.local_init(name)) || self[name]; };if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }{let window = _____WB$wombat$assign$function_____(&quot;window&quot;);let self = _____WB$wombat$assign$function_____(&quot;self&quot;);let document = _____WB$wombat$assign$function_____(&quot;document&quot;);let location = _____WB$wombat$assign$function_____(&quot;location&quot;);let top = _____WB$wombat$assign$function_____(&quot;top&quot;);let parent = _____WB$wombat$assign$function_____(&quot;parent&quot;);let frames = _____WB$wombat$assign$function_____(&quot;frames&quot;);let opener = _____WB$wombat$assign$function_____(&quot;opener&quot;);let arguments;{event.preventDefault(); document.getElementById('logout-form').submit();}}"><i class="fas fa-fw fa-sign-out-alt mr-1 align-middle"></i>Logout
</a>
<form id="logout-form" action="/logout" method="POST" class="d-none">
<input type="hidden" name="_token" value="xwyzJDp21SNWLQFwZ8g1pZHrQJc85DbJjkwoVadW"> </form>
</div>
</li>
</ul>
</div>
</div>
</nav>
<div class="navbar-scroller navbar-expand-md navbar-dark navbar-second bg-dark py-0 shadow-sm" id="nav-items">
<div class="container">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondary-navbar" aria-controls="secondary-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="secondary-navbar">
<ul class="navbar-nav">
<li class="nav-item" data-tadah-route="https://tadah.rocks/users/726/profile">
<a class="nav-link" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/users/726/profile">Profile</a>
 </li>
<li class="nav-item" data-tadah-route="/character">
<a class="nav-link" href="/character">Character</a>
</li>
<li class="nav-item" data-tadah-route="friends">
<a class="nav-link" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/my/friends">
Friends
</a>
</li>
<li class="nav-item" data-tadah-route="account">
<a class="nav-link" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/my/settings">Account</a>
</li>
<li class="nav-item" data-tadah-route="/my/keys">
<a class="nav-link" href="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/my/keys">Invites</a>
</li>
</ul>
</div>
</div>
</div>
<?php include('shortcuts/landingalert.php'); ?>

