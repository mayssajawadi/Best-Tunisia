
<div class="  bg-no-repeat bg-cover min-h-screen flex flex-col sm:justify-center items-center pt-3 sm:pt-0 bg-gray-100" style="background-image:url('{{asset('images/img1.png') }}');">

    <div>
        {{ $logo }}
    </div>

 <!--   <div class ="bg-red-200"> Testing </div>-->

    <div class=" w-11/12 lg:w-full md:w-full sm:mt-6 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:p-6 rounded-lg mb-6">
        {{ $slot }}
    </div>
    
    
    @if(!empty($anchor))
    <div class="mt-6 overflow-hidden text-sm ">
        {{ $anchor }}
    </div>
    @endif
</div>
 