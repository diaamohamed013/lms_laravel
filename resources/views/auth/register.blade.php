@extends('layout.page')

@section('content')
    <section class='signup'>
        <div class="signupCard">
            <div class="customeRow">
                <div class="imageContent">
                    <div class="logo">
                        <img src="{{asset('imgs/logo.webp')}}" alt="">
                    </div>
                    <p>سجل الأن مع أ. احمد </p>

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

                    <h2>تسجيل جديد</h2>
                    <form id="form" action="https://alfawakhry-math.com/register" method="post">
                        <input type="hidden" name="_token" value="9gWVNh6meB1KL2iEMLkXWKOQJIisYboC3ySDonpN">
                        <div class="box  ">
                            <div class="inputItem">
                                <span class='inputIcon'><i class="fa-solid fa-user"></i></span>
                                <input type="text" name="name" value="" placeholder='&nbsp;'>
                                <label for="">الاسم رباعي</label>
                            </div>
                        </div>
                        <div class="box  ">
                            <div class="inputItem">
                                <span class='inputIcon'><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" name="email" value="" placeholder='&nbsp;'>
                                <label for="">البريد الالكتروني</label>
                            </div>
                        </div>
                        <div class="box ">
                            <div class="inputItem">
                                <span class='inputIcon'><i class="fa-solid fa-key"></i></span>
                                <input type="text" name="password" placeholder='&nbsp;'>
                                <label for="">كلمة المرور</label>
                            </div>
                        </div>
                        <div class="box ">
                            <div class="inputItem">
                                <span class='inputIcon'><i class="fa-solid fa-key"></i></span>
                                <input type="text" name="password_confirmation" placeholder='&nbsp;'>
                                <label for="">أعد كتابة كلمة المرور</label>
                            </div>
                        </div>
                        <div class="box  ">
                            <div class="inputItem">
                                <span class='inputIcon'><i class="fa-solid fa-phone-flip"></i></span>
                                <input type="tel" name='phone_number' value="" placeholder='&nbsp;'>
                                <label for="">رقم التليفون</label>
                            </div>
                        </div>
                        <div class="box  ">
                            <div class="inputItem">
                                <span class='inputIcon'><i class="fa-solid fa-phone-flip"></i></span>
                                <input type="tel" name='parent_phone_number' value=""
                                       placeholder='&nbsp;'>
                                <label for="">رقم ولي الأمر</label>
                            </div>
                        </div>
                        <div class="box ">
                            <div class="inputItem ">
                                <span class='inputIcon'><i class="fa-solid fa-graduation-cap"></i></span>
                                <select name="grade_id" id="">
                                    <option value="">اختر المرحلة الدراسية</option>
                                    <option  value="1">الصف الأول الثانوي
                                    </option>
                                    <option  value="2">الصف الثاني الثانوي
                                    </option>
                                    <option  value="3">الصف الثالث الثانوي
                                    </option>
                                    <option  value="4">الصف الثالث الثانوي - أزهر
                                    </option>
                                    <option  value="5">الصف الثالث الثانوي - أدبي
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="box ">
                            <div class="inputItem ">
                                <span class='inputIcon'><i class="fa-solid fa-building"></i></span>
                                <select name="governorate_id" id="">
                                    <option value="">اختر المحافظة</option>
                                    <option  value="1">
                                        القاهرة
                                    </option>
                                    <option  value="2">
                                        الجيزة
                                    </option>
                                    <option  value="3">
                                        الأسكندرية
                                    </option>
                                    <option  value="4">
                                        الدقهلية
                                    </option>
                                    <option  value="5">
                                        البحر الأحمر
                                    </option>
                                    <option  value="6">
                                        البحيرة
                                    </option>
                                    <option  value="7">
                                        الفيوم
                                    </option>
                                    <option  value="8">
                                        الغربية
                                    </option>
                                    <option  value="9">
                                        الإسماعلية
                                    </option>
                                    <option  value="10">
                                        المنوفية
                                    </option>
                                    <option  value="11">
                                        المنيا
                                    </option>
                                    <option  value="12">
                                        القليوبية
                                    </option>
                                    <option  value="13">
                                        الوادي الجديد
                                    </option>
                                    <option  value="14">
                                        السويس
                                    </option>
                                    <option  value="15">
                                        اسوان
                                    </option>
                                    <option  value="16">
                                        اسيوط
                                    </option>
                                    <option  value="17">
                                        بني سويف
                                    </option>
                                    <option  value="18">
                                        بورسعيد
                                    </option>
                                    <option  value="19">
                                        دمياط
                                    </option>
                                    <option  value="20">
                                        الشرقية
                                    </option>
                                    <option  value="21">
                                        جنوب سيناء
                                    </option>
                                    <option  value="22">
                                        كفر الشيخ
                                    </option>
                                    <option  value="23">
                                        مطروح
                                    </option>
                                    <option  value="24">
                                        الأقصر
                                    </option>
                                    <option  value="25">
                                        قنا
                                    </option>
                                    <option  value="26">
                                        شمال سيناء
                                    </option>
                                    <option  value="27">
                                        سوهاج
                                    </option>
                                    <option  value="28">
                                        الواحات
                                    </option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" value='تسجيل' class='reg'>
                        <p class='haveAccount'>هل لديك حساب بالفعل؟ <a href="{{route('login')}}">تسجيل الدخول</a></p>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
