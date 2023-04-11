<input class="d-none" type="checkbox" name="menu" id="menu">
<nav class="w-100" style="top: 0">
    <div class="position-absolute bg-blue-bold trans-500" id="opaciting" style="height: 100vh;width:100vw;top:0;left:0"></div>
    <div class="nav-top position-fixed w-100 d-flex justify-content-center align-items-center" style="height: var(--nav-height);backdrop-filter:blur(2px);">
        <div class="position-absolute h-100 w-100 opaciting" style="background-color: var(--blue-bold);opacity:0.8"></div>
        <div class="position-absolute bg-main trans-500" style="width: var(--nav-left-width); height: var(--nav-height); top: 0;left:0">
            <label for="menu" class="d-flex justify-content-center align-items-center cursor-pointer" style="width: var(--nav-left-width); height: var(--nav-height);">
                <span class="icon-menu f-size-20px "></span>
            </label>
        </div>
        <!--<img src="" alt="">-->
        <a class="position-absolute" href="">
            <p class="f-size-20px fw-semibold"><span class="icon-logo me-2"></span>Kalpin</p>
        </a>
        <!--<div class="d-none d-md-block position-absolute not-connnected" style="right: 15px">
            <button class="nav-login border-second bg-transparent px-3 py-1 rounded fw-medium trans-200 mx-1"><a class="text-second" href="login.php">Login</a></button>
            <button class="nav-register border-second bg-second px-3 py-1 rounded fw-medium trans-200 mx-1" ><a class="text-white" href="login.php">Register</a></button>
        </div>
        <div class="d-md-none position-absolute fw-medium f-size-20px cursor-pointer d-flex align-items-center connected" style="right: 15px">
            <span class=" d-none  icon-user"></span>
        </div>-->
    </div>
    <div class="nav-left position-fixed d-flex flex-column bg-main overflow-hidden mx-0" id="nav-left" style=" opacity:1">
        <ul class="mt-4 pe-4 list-unstyled ps-0 w-100">
            <li class="my-4 py-1 cursor-pointer" style="width: max-content;">
                <span class="icon-home d-inline-block text-center f-size-20px" style="width: var(--nav-left-width);"></span><a class="text-white" href="">Accueil</a>
            </li>
            <li class="my-4 py-1 cursor-pointer" style="width: max-content;">
                <span class="icon-list d-inline-block text-center f-size-20px" style="width: var(--nav-left-width);"></span><a class="text-white" href="">Mes To-Do</a>
            </li>
            <li class="my-4 py-1 cursor-pointer" style="width: max-content;">
                <span class="icon-file-text d-inline-block text-center f-size-20px" style="width: var(--nav-left-width);"></span><a class="text-white" href="">Mon Planning</a>
            </li>
            <li class="my-4 py-1 cursor-pointer" style="width: max-content;">
                <span class="icon-calendar d-inline-block text-center f-size-20px" style="width: var(--nav-left-width);"></span><a class="text-white" href="">Mon Calendrier</a>
            </li>
            <li class="mt-4 py-1 cursor-pointer" style="width: max-content;">
                <span class="icon-award d-inline-block text-center f-size-20px" style="width: var(--nav-left-width);"></span><a class="text-white" href="">Mes notes</a>
            </li>
        </ul>
        <hr class="mx-auto border-second" style="width: 75%;">
        <div class="d-flex flex-column align-items-center pe-2 mt-4 " style="height:50px; width: 200px">
            <input class="d-none" type="checkbox" name="account" id="account">
            <label class="d-flex account cursor-pointer align-items-center justify-content-between w-100" for="account">
                <div class="d-flex">
                    <span class="icon-user d-inline-block text-center f-size-20px" style="width: var(--nav-left-width);"></span>
                    <a class="text-white">FoxySnake</a>
                </div>
                <span class="icon-chevron-right"></span>
            </label>
            <ul class="list-unstyled pt-3" id="account-dropdown">
                <li class="my-2"><a href="login.php?q=login">Connexion</a></li>
                <li class="my-2"><a href="login.php?q=register">Inscription</a></li>
            </ul>
            <ul class="d-none list-unstyled trans-500">
                <li>Mon compte</li>
                <li>Paramètres</li>
                <li>Se déconnecter</li>
            </ul>
        </div>
    </div>
</nav>