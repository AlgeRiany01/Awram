   @extends('layouts.home.app')

   @section('content')
       <!-- HERO SECTION -->
       <section class="hero">
           <div class="hero-section">
               <div class="content">
                   <h4>تبرع او اطلب تبرع بكل امان</h4>
                   <h1>
                       مرحبا بكم في منصة مرضى الاورام
                   </h1>
                   <p>
                       موقع ومنصة الكترونية خاصة
                       <span class="blue"> بمرضى الاورام في ليبيا </span>
                   </p>

                   <button class="btn"><a href="{{ route('login') }}">



                           التسجيل

                       </a></button>
               </div>

           </div>
       </section>
       <!-- about us Section -->

       <section class="about" id="about">
           <div class="continer">
               <h1>من نحن</h1>
               <p>تقوم فكرة المنصة على توفير العلاج بشكل دوري للمرضى وامكانية تسجيل
                   بياناتهم والادوية التي يحتاجونها الكترونيا
                   دون الحاجة الى التسجيل اليدوي وتقوم ايضا
                   "الهيئة الوطنية لمكافحة السرطان في ليبيا" وهي الجهة الرسمية المسؤولة
                   على مرضى الاورام وتقسيم المرضى الى فئات معينة حسب تشخيص الحالة لكل
                   مريض</p>
           </div>
           <div class="set">
               <h2>ماهي الفوائد التي توفرها المنصة للمساهمين في تقليل المعنى</h2>
               <p>,واجهة مستخدم سلسة وبسيطة للاستخدام</p>
               <p>واجهة مستخدم لمسؤول النظام</p>
               <p>احصائية لتصنيف عدد حالات مرضى السرطان في ليبيا</p>
               <p>تواصل المرضى مع بعضهم البعض ومع المتبرعينٍ</p>
           </div>

           <div class="features-section">
               <div class="qualities">
                   <div class="quality">
                       <i class="fa-sharp fa-solid fa-bell"></i>
                       <h3>طلبات التسجيل</h3>
                       <p> {{ $patientsCount }}</p>
                   </div>
                   <div class="quality">
                       <i class="fa-solid fa-capsules"></i>
                       <h3>الادوية المتوفرة</h3>
                       <p>{{ $medicinesCount }}</p>
                   </div>
                   <div class="quality">
                       <i class="fa-regular fa-hospital"></i>
                       <h3>المستشفيات </h3>
                       <p> {{ $hospitalsCount }}</p>
                   </div>
                   <div class="quality">
                       <i class="fa-solid fa-users"></i>

                       <h3>المستخدمين </h3>
                       <p> {{ $usersCount }}</p>
                   </div>
               </div>
           </div>
       </section>

       <section class="serves" id="serves">
           <div class="continer">
               <h1>خدماتنا</h1>
               <p>الخدمات التي تفخر المنصة بتقديمها للمرضى</p>
           </div>
           <div class="sery">
               <div class="ser">
                   <i class="fa-solid fa-address-card"></i>

                   <h3>التسجيل الالكتروني</h3>
                   <p>التسجيل في النظام عن طريق البيانات المطلوبة</p>
               </div>
               <div class="ser">
                   <i class="fa-solid fa-hospital-user"></i>

                   <h3>طلبات التسجيل في المستشفيات</h3>
                   <p>تسجيل في مواعيد المستشفيات ومراكز العلاج الاشعاعي واجراء الكشوفات
                       اللازمة</p>
               </div>
               <div class="ser">
                   <i class="fa-solid fa-capsules"></i>

                   <h3>طلب الحصول على الادوية </h3>
                   <p>طلب الحصول على ادوية للمريض دون حدوث مشقة للمريض وتقليل عملية
                       الفساد </p>
               </div>

           </div>
           <div class="sery">
               <div class="ser">
                   <i class="fa-solid fa-hand-holding-dollar"></i>

                   <h3> التبرع من قبل المتبرعين</h3>
                   <p>امكانية قيام متبرعين بالتبرع لصالح المرضى</p>
               </div>
               <div class="ser">
                   <i class="fa-solid fa-flag"></i>

                   <h3> نشر اعلانات من قبل مدير النظام </h3>
                   <p>مدير النظام ينشر اعلانات في حالة توفر دواء داخل المستشفيات </p>
               </div>
               <div class="ser">
                   <i class="fa-solid fa-head-side-virus"></i>

                   <h3>نشر المرضى لحالاتهم </h3>
                   <p>امكانية السماح للمرضى بنشر حالاتهم او احتياجاتهم للعلاج </p>
               </div>

       </section>
       <!-- hasptal sec -->
       <section class="hasptal-sec" id="hasptal">
           <div class="hasptal">
               <h4>المستشفيات المتوفرة</h4>
               <div class="hasp">
                   @foreach ($hospitals as $hospital)
                       <div class="has">
                           <img src="{{ asset('images/hospitals/' . $hospital->img) }}" />
                           <h3>{{ $hospital->name }}</h3>
                       </div>
                   @endforeach


               </div>

           </div>
       </section>
   @endsection
