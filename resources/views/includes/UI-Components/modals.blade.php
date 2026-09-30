<div class="p-5 border-t border-gray-100 dark:border-slate-800">
    <a href="javascript:void(0)" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" onclick="ContactUs.showModal()">
        Modal
    </a>

    <!-- Start Modal -->
    <dialog id="ContactUs" class="rounded-md shadow-sm dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white m-auto">
        <div class="relative h-auto min-w-120">
            <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 dark:border-gray-800">
                <h3 class="font-bold text-lg">Add Payment Method</h3>
                <form method="dialog">
                    <button class="size-6 flex justify-center items-center shadow-sm dark:shadow-gray-800 rounded-md btn-ghost"><i class="ri-close-line"></i></button>
                </form>
            </div>
            <div class="p-6 text-center">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i class="ri-hexagon-fill text-9xl text-red-600/5 mx-auto"></i>
                    <div class="absolute top-2/4 -translate-y-2/4 inset-s-0 inset-e-0 mx-auto text-red-600 rounded-xl duration-500 text-4xl flex align-middle justify-center items-center">
                        <i class="ri-shopping-bag-4-line"></i>
                    </div>
                </div>
        
                <h4 class="text-xl font-semibold mt-6">Your wishlist is empty.</h4>
                <p class="text-slate-400 my-3">Create your first wishlist request...</p>

                <a href="" class="py-1.25 px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-transparent hover:bg-primary border border-primary text-primary hover:text-white rounded-md mt-2">Create a new wishlist</a>
            </div>
        </div>
    </dialog>
    <!-- End Modal -->
</div>