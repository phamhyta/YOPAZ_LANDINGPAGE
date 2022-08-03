<div class="px-28 font-sans py-10" style="background: linear-gradient(135deg, #C2FFD8 0%, #465EFB 100%)">
    <div class="relative h-0" style="z-Index:0">
        <div class="relative rounded-full" style="width: 175px; background: rgba(255, 210, 111, 0.2);
        height: 175px;left: 150px; bottom: 220px">  
        </div>
        <div class="relative rounded-full" style="width: 175px; background: rgba(202, 38, 255, 0.2);
        height: 175px;left: 800px; bottom: 150px"></div>
        <div class="relative rounded-full" style="width: 140px; background:'\img\YOPAZ';
        height: 140px; left: 1000px; bottom: 40px">
            <img class="w-full opacity-50" src="\img\sinno" alt="" />
        </div>
    </div>
    @if (session('yes'))
    <div class="alert text-center alert-success">
        <p>{{ session('yes') }}</p>
    </div>
    @endif
    <div class="pb-4 text-white text-xl font-bold" style=" z-Index:5 ">Contact information </div>
    <div class="rounded-2xl bg-white p-8 w-2/3 text-xl shadow-3xl border-2" style="z-Index:5 ">
        <form action="{{route('customer.contact')}}" method="POST" style="z-Index:5">
            @csrf
            <input class="w-full p-3 border shadow-lg rounded-xl pl-3 mb-4 outline-none" id="email" name="email" type="email" placeholder='Email' style="z-Index:5 "/>
            <div class="flex">
                <input class="w-1/2 p-3 border shadow-lg rounded-xl pl-3 mr-2 outline-none" type="text" name="first_name" placeholder='First name'/>
                <input class="w-1/2 p-3 border shadow-lg rounded-xl pl-3 ml-2 outline-none" type="text" name="last_name" placeholder='Lastname' style="z-Index:5"/>
            </div>
            <button type="submit" class="ml-60 px-4 py-2 mt-4 font-bold shadow-lg hover:bg-slate-300 border-2 rounded-xl">Nhận mail liên hệ</button>
        </div>
        </form>
    </div>
    <div class="flex px-20 pt-10"  style="background: linear-gradient(135deg, #C2FFD8 0%, #465EFB 100%)">
        <div class="text-white w-5/12">
            <div class="text-3xl font-bold pt-4 pb-1">Our address</div>
            <div class="">Tầng 04, toà nhà Việt Tower, số 01 Thái Hà, phường Trung Liệt, quận Đống Đa, Hà Nội</div>
            <div class="py-8">yopaz.vn</div>
        </div>
        <div class="text-white pl-10">
            <div class="text-3xl font-bold py-4">
                Contact with us
            </div>
            <div class="flex">
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 p-3 w-14">
                    <a href="">
                        <img src="img/fb.png" alt="" />
                    </a>
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 p-3 w-16">
                    <a href="">
                        <img src="img/git.png" alt="" />
                    </a>
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 p-1 w-16">
                    <a href="">
                        <img src="img/insta.png" alt="" />
                    </a>
                </div>
                <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 p-1 w-16">
                    <a href="">
                        <img src="img/linked.png" alt="" />
                    </a>
                </div>   
            </div>
        </div>
        
    </div>
</div>