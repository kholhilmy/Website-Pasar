@if (session('status'))
    <div class=" py-4 w-full relative mb-4 mx-8 p-3 mr-4 text-green-500 bg-green-100 dark:text-green-100 dark:bg-green-500">
        <span class="block sm:inline">{{ session('status') }}</span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
            <span>×</span>
        </button>
    </div>
@endif
@if (session('fail'))
    <div class=" py-4 w-full relative mb-4 mx-8 p-3 mr-4 text-orange-500 bg-orange-100 dark:text-orange-100 dark:bg-orange-500">
        <span class="block sm:inline">{{ session('fail') }}</span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
            <span>×</span>
        </button>
    </div>
@endif


<script>
  function closeAlert(event){
    let element = event.target;
    while(element.nodeName !== "BUTTON"){
      element = element.parentNode;
    }
    element.parentNode.parentNode.removeChild(element.parentNode);
  }
</script>
