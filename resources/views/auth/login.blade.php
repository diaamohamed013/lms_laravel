@extends('layout.page')

@section('content')
    <section class='signup'>
        <div class="signupCard">
            <div class="customeRow">
                <div class="imageContent">
                    <div class="logo">
                        <img src="{{asset('imgs/logo.webp')}}" alt="">
                    </div>
                    <p>سجل دخولك عند أ. احمد </p>

                    <span class='teacherName'>وخليك من الأوائل</span>
                    <div class="headerIcons
                        ">
                        <a class="facebook" href='https://www.facebook.com/profile.php?id=61556348423567&amp;mibextid=ZbWKwL'><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a class="youtube" href='https://www.youtube.com/@AhmedFawakhry'><i class="fa-brands fa-youtube"></i></a>

                        <a class="whatsapp" href='https://wa.me/+201552700126'><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="content">
                    <div class='contentBrand'>
                        <img src="{{asset('imgs/logo.webp')}}" alt="">
                    </div>
                    <a href="{{route('home')}}" class='back'>العودة الي الصفحة الرئيسية<i
                            class="fa-solid fa-arrow-left-long"></i></a>
                    <h2>تسجيل الدخول</h2>

                    <form action="{{route('login')}}" method="post">
                        <input type="hidden" name="_token" value="9gWVNh6meB1KL2iEMLkXWKOQJIisYboC3ySDonpN">
                        <div class="box ">
                            <div class="inputItem">
                                <span class='inputIcon'><i class="fa-solid fa-envelope"></i></span>
                                <input type="text" name='email' value="" placeholder='&nbsp;'>
                                <label for=""> البريد الالكتروني أو رقم الهاتف</label>
                            </div>
                        </div>
                        <div class="box  ">
                            <div class="inputItem">
                                <span class='inputIcon'><i class="fa-solid fa-lock"></i></span>
                                <input type="text" name='password' placeholder='&nbsp;'>
                                <label for="">كلمة المرور</label>
                            </div>
                            <div style="display: none;">

                                <input type="checkbox" checked name='remember' placeholder='&nbsp;'>
                                <label for="">تذكرني</label>
                            </div>

                            <input type="submit" value='تسجيل' class='reg'>
                            <p class='haveAccount'>ليس لديك حساب؟ <a href="{{route('register')}}">تسجيل جديد</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
