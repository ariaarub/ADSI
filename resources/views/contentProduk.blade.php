<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web | Portofolio</title>
<style type="text/css">
    * {
      margin: 0;
      padding: 0;
 
  }
 
  body {
      background-color: #eff1f2;
      font-family: sans-serif;
  }
 
.content {
    grid-area: content;
}
.sidebar{
    grid-area: sidebar;
    background: #2067d8;
    justify-content: center;
}

.container {
    font-size: 1.5em;
    width: 100%;
    height: 100;
    height: 100vh;
    display: grid;
    grid-template-areas: "sidebar" "content" "footer";
    grid-template-columns: 1fr;
    grid-template-rows: 130px 800px 250px;
 
}
 
.content, .sidebar{
    padding: 1em;
}
 
nav ul {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
    text-align: center;
}
 
nav li{
    list-style: none;
    padding: 1em 0;
}
 
nav li a {
    color: white;
    font-weight: 700;
    opacity: 0.6;
    text-decoration: none;
    transition: 0.3s;
}
 
nav li a:hover {
    opacity: 1;
}
.hero {
    max-width: 90 px;
    margin: 0 auto;
    text-align: center;
}
 
.hero img {
    width: 300px;
}
 
.hero h1 {
    font-size: 2em;
    font-weight: 300;
    color: #373046;
}

.hero h6{
    color: grey;
}
 
.hero p {
    font-weight: 50;
    font-size: 20px;
    line-height: 1.3em;
    padding-left: 3px;
    color: black;
    text-align: left;
}
 
.action-btn {
    display: inline-block;
    text-decoration: none;
    color: white;
    font-weight: 700;
    background: #567bfb;
    padding: 0.5em 2em;
    border-radius: 60px;
    margin: 1em 0;
    transition: 0.3s;
}
 
 
@media (min-width: 1040px){
    .container {
        grid-template-areas:"sidebar content" "sidebar footer" ;
        grid-template-rows: 1fr auto ;
        grid-template-columns: 300px 1f;
    }
 
    nav ul{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    .sidebar{
        background: #2067d8;
        padding-top: 10em;
    }
    .hero{
        text-align: left;
        margin: 7em 0;
    }
    .hero img {
        width: 200px;
        float: right;
    }
    .hero h1{
        font-size: 3em;
    }

    .hero h6{
        font-size: 2em;
        color: lightgrey;
    }

    .hero p{
        width: 60%;
        text-align: left;

    }
    
}
</style>

</head>
<body>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a  href="{{route('dashboard')}}" style="text-align: center;" method="post">Content</a></li>
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="hero">
                  <img src="https://media.suara.com/pictures/653x366/2019/08/30/96523-cuci-motor.jpg" alt="">
              <div class="hero-content">
                  <h1>Tips and trik mencuci motor</h1><br><h6>update : 18 Mei 2002</h6><br><br>   
<p> Selain servis secara rutin di bengkel, rutin mencuci motor menjadi salah satu tanggung jawab pemilik. Sayangnya, hal ini dianggap sepele oleh banyak orang. Padahal ada banyak lho keuntungan mencuci motor yang wajib diketahui, diantaranya :
<br>
Membuat Motor Menjadi Lebih Bersih
<br>
Mencuci motor secara rutin dapat menjadikan motor BroSis bersih dan higienis. Sehingga motor menjadi lebih nyaman ketika digunakan. Dengan motor yang bersih, tentu lebih menarik untuk dilihat.
<br>
Menghindari tumbuhnya Jamur dan Decitan Rem
<br>
Air hujan yang bersifat asam memiliki efek negatif jika dibiarkan nempel pada bodi kendaraan. Dampak dari air hujan bisa meninggalkan bercak atau water spot dan kotoran yang mengendap juga bisa menimbulkan jamur.
<br>
Selain water spot dan Jamur , kotoran yang ada di bagian ban Brosis juga bisa membuat suara rem berdecit karena adanya gesekan antara kotoran dengan kampas rem.
<br>
Doi Jadi Lebih ???Nempel???
<br>
Dengan rutin mencuci motor pasti bikin BroSis dan doi jadi lebih nempel, gak akan ada tuh yang namanya debat antara kamu dan doi. Jadi gimana? Masih males untuk cuci motor BroSis?</p>

              </div>
                </section>
        </div>

    </div>    
</body>
</html>