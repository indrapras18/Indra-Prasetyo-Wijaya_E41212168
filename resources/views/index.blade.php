<!DOCTYPE html>
<html>
<head>
    <title>Another Web</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
<nav>
    <div class="wrapper">
        <div class="logo"><a href="">Website Pengadilan</a></div>
        <div class="menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#courses">Galery</a></li>
                <li><a href="#coment">Contact Us</a></li>
                <li><a href="/home" class="tbl-biru">Sing Up</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- content atas -->
<div class="wrapper">
    <section id="home">
        <img src="asset/hukum.jpg">
        <div class="kolom">
            <p class="deskripsi">Adil Di Pengadilan #StayAtHome   </p>
            <h2>Keep Doing, Keep Learning</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut</p>
            <p><a href="/info" class="tbl-pink">More Info</a></p>
        </div>
    </section>

    <!-- content ke 2 -->
    <section id="courses">
        <div class="kolom">
            <p class="deskripsi">You Will Need This</p>
            <h2>Via Online</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in</p>
            <p><a href="/features" class="tbl-biru2">More Courses</a></p>
        </div>
        <img src="asset/hukum.jpg">
    </section>

    <div class="kolom"><p class="deskripsi"> <strong>Post</strong> your Comment Here!</p></div>
    <section id="coment">
        <form action="/tambah" method="POST">
            @csrf
            <label for="">Email</label><br>
            <input type="email" name="email" id="" placeholder="input your email here" required><br>
            <label for="">Coment</label><br>
            <textarea name="kometar" placeholder="input your coment here" required></textarea><br>
            <button type="submit">Post</button>
        </form>
    </section>
</div>
</body>
</html>