<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bekdaulet</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style>body{
    margin: 0 auto;
    background-color: #fafafa;
    font-family: 'Montserrat', sans-serif;
}
a{
    text-decoration: none;
}
.header {
    max-height: 54px;
    height: 100%;
    width: 100%;
    border-bottom: .5px solid rgba(0, 0, 0, 0.082);
}
.header__inner {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding-top: 15px;
    margin-left: 245px;
    max-width: 975px;
   
}
.navig {
    margin: 10px;
    margin-top: 0px;
}
.nav {
    display: flex;
    margin-right: -110px;

}
.ava {
    border: 1px solid rgba(var(--i1d,38,38,38),1);
    border-radius: 50%;
    height: 24px;
    width: 24px;
    position: relative;
    top: -2px;
    left: 10px;
    
}
.avatar {
    border-radius: 50%;
    width: 22px;
    height: 22px;
}
#img {
    border-radius: 50%;
    height: 22px;
    width: 22px;
    margin-left: -9px;
    margin-top: 1px;
}
#poisk {
    width: 215px;
    height: 28px;
}
#img1 {
    border-radius: 50%;
    height: 150px;
    width: 150px;
    position: relative;
    left: 110px;
    top: 0px;
}
.main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 975px;
    padding: 30px 20px 0;
    margin-left: 252px;
}
.about {
    position: relative;
    top: -170px;
    left: 350px;
    width: 700px;
   
}
.podpis {
    font-size: 15px;
    margin-top: -25px;
}
.subscribe {
    border: 1px solid #0095f6;;
    border-radius: 4px;
    color: #fff;
    width: 104.64px;
    height: 29.6px;
    position: relative;
    top: -50px;
    left: 200px;
    background-color: #0095f6;
}
.me {
    margin-top: 20px;
    font-size: 15px;
    width: 500px;
}
.numb {
    padding-right: 20px;
}
.bio {
    border-bottom: .5px solid rgba(0, 0, 0, 0.082);
    width: 975px;
    height: 200px;
}
.navigation {
    position: relative;
    left: 200px;
    top: 20px;
}
.navigation a{
    color: black;
}
.saved {
    padding-left: 100px;
}
.otmetka {
    padding-left: 100px;
}
.navigation svg{
    padding-right: 10px;
}
.flex-con {
    width: 975px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 40px;
}
#bari {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    max-width: 1519px;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.425);
}
.post1{
    background-color: #fff;
    position: relative;
    top: 100px;
    width: 815px;
    height: 480px;
    margin: 0 auto;
}
.account {
    padding-bottom: 20px; 
    border-bottom: 1px solid  rgba(0, 0, 0, 0.082);
    width: 300px;
    position: absolute;
    top: 20px;
    right: 15px;
    
}
#img2 {
    border-radius: 50%;
    height: 30px;
    width: 30px;
    margin-left: -9px;
    margin-top: -5px;
}
.teaxt {
    position: absolute;
    top: 80px;
    right: 10px;
    font-size: 13px;
    padding-bottom: 20px; 
    border-bottom: 1px solid  rgba(0, 0, 0, 0.082);
    width: 300px;
}
.close {
    position: absolute;
    top: 40px;
    color: white;
    right: 40px;
    font-size: 25px;
    width: 30px;
    height: 30px;

}
#bari1 {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    max-width: 1519px;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.425);
}
#bari2 {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    max-width: 1519px;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.425);
}
#bari3 {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    max-width: 1519px;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.425);
}
.icoos {
    position: absolute;
    top: 450px;
    right: 220px;
    display: flex;
}
.icoos svg{
    padding-right: 10px;
}
.save {
    position: absolute;
    right: -220px;
}
.bari {
    overflow-y: hidden;
}
.mob-nav {
    display: none;
}

@media(max-width: 700px){
    body{
        margin: 0 auto;
        min-width: 500px;
    }
    .header {
        max-height: 54px;
        height: 100%;
        width: 100%;
       
    }
    .header__inner {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding-top: 15px;
        margin-left: 245px;
        max-width: 483px;
       
    }
    .navig {
        margin: 10px;
        margin-top: 0px;
    }
    .nav {
        display: flex;
        margin-right: 20px;
    
    }
    .ava {
        border: 1px solid rgba(var(--i1d,38,38,38),1);
        border-radius: 50%;
        height: 24px;
        width: 24px;
        position: relative;
        top: -2px;
        left: 10px;
        
    }
    .avatar {
        border-radius: 50%;
        width: 22px;
        height: 22px;
    }
    #img {
        border-radius: 50%;
        height: 22px;
        width: 22px;
        margin-left: -9px;
        margin-top: 1px;
    }
    #poisk {
        display: none;
    }
    #suret {
        position: absolute;
        left: 20px;
    }
    #img1 {
        border-radius: 50%;
        height: 77px;
        width: 77px;
        position: absolute;
        left: 20px;
        top: 80px;
    }
    .main {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        width: 50px;
        padding: 0;
        margin-left: 252px;
    }
    .about {
        position: relative;
        top: 20px;
        left: -140px;
        width: 350px;
       
    }
    .podpis {
        font-size: 12px;
        margin-top: -25px;
    }
    .subscribe {
        border: 1px solid #0095f6;;
        border-radius: 4px;
        color: #fff;
        width: 104.64px;
        height: 29.6px;
        position: relative;
        top: -50px;
        left: 200px;
        background-color: #0095f6;
    }
    .me {
        margin-top: 20px;
        font-size: 15px;
        width: 250px;
    }
    .numb {
        padding-right: 10px;
    }
    .bio {
        border: none;
        width: 200px;
        height: 200px;
    }
    .navigation {

        display: none;
    }
    .navigation a{
        color: black;
    }
    /*.saved {
        padding-left: 100px;
    }
    .otmetka {
        padding-left: 100px;
    }*/
    .navigation svg{
        padding-right: 10px;
    }
    .flex-con {
        width: 505px;
        display: block;
        /*flex-wrap: wrap;
        justify-content: space-between;*/
        margin-top: 80px;
        position: relative;
        left: -170px;
    }
    .con {
        position: relative;
        left: -650px;
        top: 150px;
    }
    #bari {
        display: none;
        position: absolute;
        left: 0;
        top: 0;
        max-width: 500px;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.425);
    }
    .post1{
        background-color: #fff;
        position: relative;
        top: 100px;
        width: 815px;
        height: 480px;
        margin: 0 auto;
    }
    .account {
        padding-bottom: 20px; 
        
        width: 300px;
        position: absolute;
        top: 20px;
        right: 15px;
        
    }
    #img2 {
        border-radius: 50%;
        height: 30px;
        width: 30px;
        margin-left: -9px;
        margin-top: -5px;
    }
    .teaxt {
        position: absolute;
        top: 80px;
        right: 10px;
        font-size: 13px;
        padding-bottom: 20px; 
        width: 300px;
    }
    .close {
        position: absolute;
        top: 40px;
        color: white;
        right: 40px;
        font-size: 25px;
        width: 30px;
        height: 30px;
    
    }
    #bari1 {
        display: none;
        position: absolute;
        left: 0;
        top: 0;
        max-width: 1519px;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.425);
    }
    #bari2 {
        display: none;
        position: absolute;
        left: 0;
        top: 0;
        max-width: 1519px;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.425);
    }
    #bari3 {
        display: none;
        position: absolute;
        left: 0;
        top: 0;
        max-width: 1519px;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.425);
    }
    .icoos {
        position: absolute;
        top: 450px;
        right: 220px;
        display: flex;
    }
    .icoos svg{
        padding-right: 10px;
    }
    .save {
        position: absolute;
        right: -220px;
    }
    .bari {
        overflow-y: hidden;
    }
    .mob-nav {
        display: flex;
        padding-top: 20px;
        position: relative;
        top: 20px;
        width: 900px;
        left: -150px;
        font-size: 25px;
        border-top: .5px solid rgba(0, 0, 0, 0.185);
    }
    .con {
        margin-left: 480px;
        margin-top: -70px;
    }

}
</style>
</head>
<body>
    <div class="header">
        <div class="header__inner">
            <a href="index.html">
                <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png" alt="" width="103px" height="29px" id="suret">
            </a> 
            <div class="inp">
                <input type="search" id="poisk" size="30" placeholder="Поиск">
            </div>
            <div class="nav">
                <a href="https://www.instagram.com/bekdaulet_gm/" class="navig">
                    <svg aria-label="Главная страница" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path d="M45.3 48H30c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2-4.6-4.6-4.6s-4.6 2-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.5-.6 2.1 0l21.5 21.5c.4.4.6 1.1.3 1.6 0 .1-.1.1-.1.2v22.8c.1.8-.6 1.5-1.4 1.5zm-13.8-3h12.3V23.4L24 3.6l-20 20V45h12.3V34.2c0-4.3 3.3-7.6 7.6-7.6s7.6 3.3 7.6 7.6V45z"></path></svg>
                </a>
                <a href="https://www.instagram.com/bekdaulet_gm/" class="navig">
                    <svg aria-label="Direct" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path></svg>
                </a>
                <a href="https://www.instagram.com/bekdaulet_gm/" class="navig">
                    <svg aria-label="Найти людей" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path clip-rule="evenodd" d="M24 0C10.8 0 0 10.8 0 24s10.8 24 24 24 24-10.8 24-24S37.2 0 24 0zm0 45C12.4 45 3 35.6 3 24S12.4 3 24 3s21 9.4 21 21-9.4 21-21 21zm10.2-33.2l-14.8 7c-.3.1-.6.4-.7.7l-7 14.8c-.3.6-.2 1.3.3 1.7.3.3.7.4 1.1.4.2 0 .4 0 .6-.1l14.8-7c.3-.1.6-.4.7-.7l7-14.8c.3-.6.2-1.3-.3-1.7-.4-.5-1.1-.6-1.7-.3zm-7.4 15l-5.5-5.5 10.5-5-5 10.5z" fill-rule="evenodd"></path></svg>
                </a>
                <a href="https://www.instagram.com/bekdaulet_gm/" class="navig">
                    <svg aria-label="Что нового" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>
                </a>
                <div class="ava">
                    <a href="https://www.instagram.com/bekdaulet_gm/" class="navig avatar">
                    <img src="ava.jpg" alt=""  id="img">
                    </a>
                </div>
            
            </div>
        </div>
    </div>
    <div class="main">
        <div class="bio">
            <img src="ava.jpg" alt="" id="img1">
            <div class="about">
                <h2 style="width: 200px;">bekdaulet_gm</h2>
                <button class="subscribe" onclick="submit()">Подписаться</button>
                <div class="podpis">
                    <span class="numb"><b>3</b> Публикаций</span>
                    <span  class="numb"><b> 226</b> Подписчиков</span>
                    <span  class="numb"><b>112</b>  Подписок</span>
                </div>
                <div class="me">
                    <span> <b>
                        Ganibek Bekdaulet <br>
                        Second year student of SDU
                    </b>
                    </span>
                </div>
            </div>
        </div>
        <div class="navigation">
            <span class="public"><svg aria-label="Публикации"  fill="#262626" height="12" viewBox="0 0 48 48" width="12"><path clip-rule="evenodd" d="M45 1.5H3c-.8 0-1.5.7-1.5 1.5v42c0 .8.7 1.5 1.5 1.5h42c.8 0 1.5-.7 1.5-1.5V3c0-.8-.7-1.5-1.5-1.5zm-40.5 3h11v11h-11v-11zm0 14h11v11h-11v-11zm11 25h-11v-11h11v11zm14 0h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11zm14 28h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11z" fill-rule="evenodd"></path></svg>
                <span><a href="{{'index'}}">Публикации</a> </span></span>
            <span class="saved"><svg aria-label="Сохраненное" fill="#8e8e8e" height="12" viewBox="0 0 48 48" width="12"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path></svg><span><a href="{{'sohranenki'}}">Сохраненное</a> </span></span>
            <span class="otmetka"><svg aria-label="Отметки"  fill="#8e8e8e" height="12" viewBox="0 0 48 48" width="12"><path d="M41.5 5.5H30.4c-.5 0-1-.2-1.4-.6l-4-4c-.6-.6-1.5-.6-2.1 0l-4 4c-.4.4-.9.6-1.4.6h-11c-3.3 0-6 2.7-6 6v30c0 3.3 2.7 6 6 6h35c3.3 0 6-2.7 6-6v-30c0-3.3-2.7-6-6-6zm-29.4 39c-.6 0-1.1-.6-1-1.2.7-3.2 3.5-5.6 6.8-5.6h12c3.4 0 6.2 2.4 6.8 5.6.1.6-.4 1.2-1 1.2H12.1zm32.4-3c0 1.7-1.3 3-3 3h-.6c-.5 0-.9-.4-1-.9-.6-5-4.8-8.9-9.9-8.9H18c-5.1 0-9.4 3.9-9.9 8.9-.1.5-.5.9-1 .9h-.6c-1.7 0-3-1.3-3-3v-30c0-1.7 1.3-3 3-3h11.1c1.3 0 2.6-.5 3.5-1.5L24 4.1 26.9 7c.9.9 2.2 1.5 3.5 1.5h11.1c1.7 0 3 1.3 3 3v30zM24 12.5c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6 9.6-4.3 9.6-9.6-4.3-9.6-9.6-9.6zm0 16.1c-3.6 0-6.6-2.9-6.6-6.6 0-3.6 2.9-6.6 6.6-6.6s6.6 2.9 6.6 6.6c0 3.6-3 6.6-6.6 6.6z"></path></svg>
                <span><a href="{{'otmetki'}}">Отметки</a> </span></span>    
        </div>
        <div class="mob-nav">
            <span class="public"><a href="index.html"><svg aria-label="Публикации"  fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path clip-rule="evenodd" d="M45 1.5H3c-.8 0-1.5.7-1.5 1.5v42c0 .8.7 1.5 1.5 1.5h42c.8 0 1.5-.7 1.5-1.5V3c0-.8-.7-1.5-1.5-1.5zm-40.5 3h11v11h-11v-11zm0 14h11v11h-11v-11zm11 25h-11v-11h11v11zm14 0h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11zm14 28h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11z" fill-rule="evenodd"></path></svg></a>
                <span> </span></span>
            <span class="saved"><a href="sohranenki.html"><svg aria-label="Сохраненное" fill="#8e8e8e" height="22" viewBox="0 0 48 48" width="22"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path></svg><span></a> </span></span>
            <span class="otmetka"><a href="otmetki.html"><svg aria-label="Отметки"  fill="#8e8e8e" height="22" viewBox="0 0 48 48" width="22"><path d="M41.5 5.5H30.4c-.5 0-1-.2-1.4-.6l-4-4c-.6-.6-1.5-.6-2.1 0l-4 4c-.4.4-.9.6-1.4.6h-11c-3.3 0-6 2.7-6 6v30c0 3.3 2.7 6 6 6h35c3.3 0 6-2.7 6-6v-30c0-3.3-2.7-6-6-6zm-29.4 39c-.6 0-1.1-.6-1-1.2.7-3.2 3.5-5.6 6.8-5.6h12c3.4 0 6.2 2.4 6.8 5.6.1.6-.4 1.2-1 1.2H12.1zm32.4-3c0 1.7-1.3 3-3 3h-.6c-.5 0-.9-.4-1-.9-.6-5-4.8-8.9-9.9-8.9H18c-5.1 0-9.4 3.9-9.9 8.9-.1.5-.5.9-1 .9h-.6c-1.7 0-3-1.3-3-3v-30c0-1.7 1.3-3 3-3h11.1c1.3 0 2.6-.5 3.5-1.5L24 4.1 26.9 7c.9.9 2.2 1.5 3.5 1.5h11.1c1.7 0 3 1.3 3 3v30zM24 12.5c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6 9.6-4.3 9.6-9.6-4.3-9.6-9.6-9.6zm0 16.1c-3.6 0-6.6-2.9-6.6-6.6 0-3.6 2.9-6.6 6.6-6.6s6.6 2.9 6.6 6.6c0 3.6-3 6.6-6.6 6.6z"></path></svg></a>
                <span><a href="otmetki.html"></a> </span></span>       
            </div>
        <div class="flex-con" style="flex-direction: row; padding-bottom: 0px; padding-top: 0px;">
            <div data-tilt class="first" onclick="show_hide()">
                <img src="https://instagram.fcit1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.150.1200.1200a/s640x640/129300595_4101125723249305_3865312982428337432_n.jpg?_nc_ht=instagram.fcit1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=OVNaF6gU5ewAX_P77AJ&tp=1&oh=7670ec94baf61b579fdf113f4081c492&oe=605B0AD8" alt="" width="310px" height="310px">
            </div>
            <div data-tilt class="second" onclick="show_hide1()">
                <img src="https://instagram.fcit1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.150.1200.1200a/s640x640/126897793_395779714907076_3001140330078646189_n.jpg?_nc_ht=instagram.fcit1-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=4MTi6p-RADMAX8gutb1&tp=1&oh=7f755e4669b860aebaef977948b3e50c&oe=605ADC35" alt="" width="310px" height="310px">
            </div>
                <div data-tilt class="third" onclick="show_hide2()">
                    <img src="https://instagram.fcit1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/71229541_388603598730442_1335844811592434540_n.jpg?_nc_ht=instagram.fcit1-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=BjkjNkUHHG8AX9PPPhq&tp=1&oh=e2b6fa0d71e1daeeee91e90b7cedda63&oe=605ACF8A" alt="" width="310px" height="310px">
                </div>
        </div>
        
        
    </div>
    <div class="bari" id="bari">
        <span onclick="document.getElementById('bari').style.display='none'" class="close" title="Close Modal">X</span>
        <div class="post1">
            <img src="https://instagram.fcit1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.150.1200.1200a/s640x640/129300595_4101125723249305_3865312982428337432_n.jpg?_nc_ht=instagram.fcit1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=OVNaF6gU5ewAX_P77AJ&tp=1&oh=7670ec94baf61b579fdf113f4081c492&oe=605B0AD8" alt=""  width="480px">
            <div class="account" style="display: flex;">
                 <img src="ava.jpg" alt=""  id="img2">
                <span style="margin-left: 10px;"><b> bekdaulet_gm</b></span>
            </div>
            <div class="teaxt">
                <span>
                   <b>  Я жил до окончания школы в  городе Шу, этот город известен не  только своим продуктом, но и тем  что именно возле этого города обазовалось  Казахское Ханство. </b>
                </span>
               
            </div>
             <section class="icoos"><span class="fr66n"><div class="QBdPU "><span class=""><svg aria-label="Нравится" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg></span></div></span>
            <span class="_15y0l"><div class="QBdPU "><svg aria-label="Комментировать" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path></svg></div></span>
            <div class="QBdPU "><svg aria-label="Поделиться публикацией" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
            <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path></svg></div><span class="wmtNn"><div><div aria-disabled="false" role="button" tabindex="0">
            <div class="save "><svg aria-label="Сохранить" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path></svg></div></div></div></span></section>
           
        </div>
    </div>
    <div class="bari" id="bari1">
        <span onclick="document.getElementById('bari1').style.display='none'" class="close" title="Close Modal">X</span>
        <div class="post1">
            <img src="https://instagram.fcit1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.150.1200.1200a/s640x640/126897793_395779714907076_3001140330078646189_n.jpg?_nc_ht=instagram.fcit1-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=4MTi6p-RADMAX8gutb1&tp=1&oh=7f755e4669b860aebaef977948b3e50c&oe=605ADC35" alt=""  width="480px">
            <div class="account" style="display: flex;">
                 <img src="ava.jpg" alt=""  id="img2">
                <span style="margin-left: 10px;"><b> bekdaulet_gm</b></span>
            </div>
            <div class="teaxt">
                <span>
                   Меня зовут Бекдаулет. Я учусь <br> во втором курсе Информационных <br> Систем в Универстите Сулеймана Демиреля. <br> На данный момент изучаю front end. <br> И это один из моих проектов.
                </span>
            </div>
            <section class="icoos"><span class="fr66n"><div class="QBdPU "><span class=""><svg aria-label="Нравится" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg></span></div></span>
                <span class="_15y0l"><div class="QBdPU "><svg aria-label="Комментировать" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path></svg></div></span>
                <div class="QBdPU "><svg aria-label="Поделиться публикацией" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path></svg></div><span class="wmtNn"><div><div aria-disabled="false" role="button" tabindex="0">
                <div class="save "><svg aria-label="Сохранить" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path></svg></div></div></div></span></section>
               
        </div>
    </div>
    <div class="bari" id="bari2">
        <span onclick="document.getElementById('bari2').style.display='none'" class="close" title="Close Modal">X</span>
        <div class="post1">
            <img src="https://instagram.fcit1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/71229541_388603598730442_1335844811592434540_n.jpg?_nc_ht=instagram.fcit1-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=BjkjNkUHHG8AX9PPPhq&tp=1&oh=e2b6fa0d71e1daeeee91e90b7cedda63&oe=605ACF8A" alt=""  width="480px">
            <div class="account" style="display: flex;">
                 <img src="ava.jpg" alt=""  id="img2">
                <span style="margin-left: 10px;"><b>bekdaulet_gm</b></span>
            </div>
            <div class="teaxt">
                <span>
                   <b>После окончания школы стоял большой вопрос выбора профессии, предметы были уже выбраны это было физ-мат и выбор профессии был достаточно большой, про этот универ я знал уже давно, так как брат окончил высшее образование в этом Универстите, и сам я впервые увидел в 11 классе, когда был в лагере Winter Camp от EDUcon, но тогда даже представить не мог что поступлю именно сюда, так я собирался поступать в Астану на другую профессию, сейчас я ни о чем не желею и очень рад, что поступил именно сюда</b>
                </span>
            </div>
            <section class="icoos"><span class="fr66n"><div class="QBdPU "><span class=""><svg aria-label="Нравится" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg></span></div></span>
                <span class="_15y0l"><div class="QBdPU "><svg aria-label="Комментировать" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path></svg></div></span>
                <div class="QBdPU "><svg aria-label="Поделиться публикацией" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24">
                <path d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z"></path></svg></div><span class="wmtNn"><div><div aria-disabled="false" role="button" tabindex="0">
                <div class="save "><svg aria-label="Сохранить" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path d="M43.5 48c-.4 0-.8-.2-1.1-.4L24 29 5.6 47.6c-.4.4-1.1.6-1.6.3-.6-.2-1-.8-1-1.4v-45C3 .7 3.7 0 4.5 0h39c.8 0 1.5.7 1.5 1.5v45c0 .6-.4 1.2-.9 1.4-.2.1-.4.1-.6.1zM24 26c.8 0 1.6.3 2.2.9l15.8 16V3H6v39.9l15.8-16c.6-.6 1.4-.9 2.2-.9z"></path></svg></div></div></div></span></section>
               
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <script>
        function submit() {
            alert("Красавчик!");
        }
        function show_hide() {
            var click = document.getElementById("bari");
            if(click.style.display==="none"){
                click.style.display = "block";
            }else {
                click.style.display="none" ;   
            }
            $("#log").fadeout(2000).fadein(2000);
        }
        function show_hide1() {
            var click = document.getElementById("bari1");
            if(click.style.display==="none"){
                click.style.display = "block";
            }else {
                click.style.display="none" ;   
            }
            $("#log").fadeout(2000).fadein(2000);
        }
        function show_hide2() {
            var click = document.getElementById("bari2");
            if(click.style.display==="none"){
                click.style.display = "block";
            }else {
                click.style.display="none" ;   
            }
            $("#log").fadeout(2000).fadein(2000);
        }
    </script>
</body>
</html>