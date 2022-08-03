@extends('front-end.app')
@section('content')
    @include('front-end.components.introduce')
    <div class="font-sans pt-10 text-xl" style=" background: linear-gradient(135deg, #F5CBFF 0%, #C346C2 100%)">
            <div class="relative h-0">
                <div class="relative rounded-full" style="width:175px; background: 'rgba(190, 248, 27, 0.2)';
                height: 175px; left: 600px; top: 60px">  
                </div>
                <div class="relative rounded-full" style="width: 230px; background: rgba(239, 7, 7, 0.2);
                height: 230px;left: 1134px; top: 0px"></div>
                <div class="relative rounded-full" style="width: 175px; background: rgba(239, 7, 7, 0.2);
                height: 175px;left: 870px; top: 120px"></div>
                <div class="relative rounded-full" style="width: 175px; background: rgba(255, 233, 133, 0.2);
                height: 175px;left: 340px; top: 20px"></div>
                <div class="relative rounded-full" style="width: 225px; background: rgba(217, 217, 217, 0.2);
                height: 225px;left: 320px; top: 50px"></div>
                <div class="relative rounded-full" style="width: 250px; background: rgba(190, 248, 27, 0.2);
                height: 250px; left: 620px; top: 150px"></div>
                <div class="relative rounded-full" style="width: 200px; background: rgba(245, 203, 255, 0.2);
                height: 200px;left: 620px; top: 120px"></div>
                <div class="relative rounded-full" style="width: 200px; background: rgba(245, 203, 255, 0.2);
                height: 200px;left: 450px; top: 50px"></div>
                <div class="relative rounded-full" style="width: 170px; background: rgba(70, 94, 251, 0.2);
                height: 170px;left: 200px; top: 100px"></div>
                <div class="relative rounded-full" style="width: 200px; background: rgba(250, 116, 43, 0.2);
                height: 200px;left: 620px; top: 150px"></div>
            </div>
            <div class="font-bold w-1/6 pl-6 py-2 text-2xl rounded-r-xl shadow-2xl" style="background: rgba(250, 116, 43, 0.2)">
                Regular activities
            </div>
            <div class="flex justify-between pt-10 pb-20">
                <div class="w-1/4 ml-32 mb-16 mt-20 rounded-xl p-4 shadow-2xl  transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" style="background:#E5E5E5; z-Index:5">
                    <div class="flex justify-center">
                        <img class="h-64" src="/img/frame_6_1.png" alt="" />
                    </div>
                    <div class="px-6 pb-6">
                        <div class="font-bold text-xl text-center">Co-working </div>
                        <div>Members continously dicuss, share experience and contribute to develop products as well as ideas for competition.</div>
                    </div>
                </div>
                <div class="w-1/4 mt-36 rounded-xl mx-28 p-4 shadow-2xl  transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" style="background: #F58282" }}>
                    <div class="flex justify-center">
                        <img class="h-64" src="/img/frame_6_2.png" alt="" />
                    </div>
                    <div class="px-6 pb-6">
                        <div class="font-bold text-xl text-center">Seminar</div>
                        <div>Involving in many seminars from big companies to get used to culture, environment and career prospect in working world.</div>
                    </div>
                </div>
                <div class="w-1/4 bg-red-100 mr-32 mb-36 rounded-xl p-4 shadow-2xl  transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" style="background: #F5CBFF; z-Index:5 ">
                    <div class="flex justify-center">
                        <img class="h-64" src="/img/frame_6_3.png" alt="" />
                    </div>
                    <div class="px-6 pb-6">
                        <div class="font-bold text-xl text-center">Training </div>
                        <div>Trained by senior from different majjors each semester.</div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10 pb-10 text-white font-bold text-6xl" style="z-index:5">
                Moment of YOPAZ
            </div>
            <div class="px-10">
                <div>
                    <div class="flex">
                        <img class="w-1/2" src="/img/moment1.png" alt="" style="z-index:5"/>
                        <img class="w-1/2" src="/img/moment2.png" alt="" style="z-index:5"/>
                    </div>
                    <div class="flex">
                        <img class="w-3/4" src="/img/moment3.png" alt="" style="z-index:5"/>
                        <img class="w-1/4" src="/img/moment4.png" alt="" style="z-index:5"/>
                    </div>
                </div>
                <div class="flex pb-1 pl-16 ">
                    <div class="w-3/4 font-bold text-2xl">Like what you see? Click here for more features </div>
                    <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 w-1/8 font-bold ml-10 text-2xl border rounded-3xl text-center py-3 px-10" style="background: #F5CBFF">View more</div>
                </div>
            </div>
            <div>
                <svg class="w-full h-full" viewBox="0 0 1440 272" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 234.393L60 177.292C120 121.488 240 9.88141 360 0.797125C480 -9.58492 600 83.8535 720 140.955C840 196.758 960 214.927 1080 187.674C1200 159.123 1320 83.8535 1380 47.5163L1440 9.88141V346H1380C1320 346 1200 346 1080 346C960 346 840 346 720 346C600 346 480 346 360 346C240 346 120 346 60 346H0V234.393Z" fill="url(#paint0_linear_136_14)"/>
                        <defs>
                            <linearGradient id="paint0_linear_136_14" x1="27" y1="272.5" x2="168.916" y2="908.767" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFF3B0"/>
                                <stop offset="0.964179" stop-color="#CA26FF"/>
                            </linearGradient>
                        </defs>
                    </svg>            
            </div>
            
        </div>
@endsection
