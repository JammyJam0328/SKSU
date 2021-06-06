<div x-data="{viewRequest:@entangle('viewRequest')}" class="bg-white rounded-md shadow-md">
  <div class="px-5 py-1">
    <span class="text-2xl font-semibold text-gray-900">Pending requests</span>
  </div>
    <div class="px-5 pb-5">

        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul class="divide-y divide-gray-200">  
                   @forelse ($requests->sortByDesc('created_at') as $request)    
                    <li wire:click="viewRequest({{ $request->requestorinformation->id }},{{ $request->id }})">
                      
                      <a href="#" class="block hover:bg-gray-50">
                        <div class="flex items-center px-4 py-4 sm:px-6 ">
                          <div class="min-w-0 flex-1 flex items-center">
                            <div class="flex-shrink-0">
                              @if ($request->read=="no")
                              <i class="fa fa-envelope text-3xl text-green-600"></i>
                                  
                              @else
                              <i class="fa fa-envelope-open-text text-3xl text-red-500"></i>
                                  
                              @endif
                            </div>
                            <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                              <div class="">
                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                  <span class="truncate">{{ $request->requestorinformation->firstname }} {{ $request->requestorinformation->middlename }} {{ $request->requestorinformation->lastname }}</span>
                                </p>
                              </div>
                                <div>
                                </div>
                            </div>
                          </div>
                          <div>
                            <div>
                              <p class="text-sm text-gray-900 grid">
                                <time datetime="2020-01-07">{{$request->created_at->diffForHumans()}}</time>
                              </p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    @empty
                    <div class="grid justify-center items-center p-10">
                      <span class="text-3xl text-gray-800 text-center uppercase">No request found</span>
                    <img src="{{ asset('images/empty.svg') }}" class="h-80 w-80" alt="Empty">
                  </div>
                    @endforelse

           

              



            </ul>
          </div>

 @if ($valid_id_url)
 <div x-show.transition="viewRequest" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class=" w-5/6 inline-block align-top bg-indigo-600 rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:p-2">
      <div class="hidden sm:block absolute top-0 right-0 pt-1 pr-1">
        <button wire:click.prevent="close" type="button" class="bg-indigo-600  text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="sr-only">Close</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex space-x-2 ">

        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg pb-3">
  <div class="px-4 py-2 sm:px-6 flex space-x-2 items-center shadow-md border-b border-indigo-600 mb-2">
    <i class="fa fa-info text-indigo-600"></i>
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Requestor Information
    </h3>
   
  </div>
  <div class=" px-4 py-2 sm:p-0">
    <dl class="sm:divide-y sm:divide-gray-200">
      <div class="py-2 sm:py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Student Number
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $studentnumber }}
        </dd>
      </div>
      <div class="py-2 sm:py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Full name
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $name }}
        </dd>
      </div>
      <div class="py-2 sm:py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Sex
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $sex }}
        </dd>
      </div>
      <div class="py-2 sm:py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Course & Campus
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $course }} - {{ $campus }}
        </dd>
      </div>
      <div class="py-2 sm:py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
         Status
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $status }}
        </dd>
      </div>
      <div class="py-2 sm:py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Contact number
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{ $contactnumber }}
        </dd>
      </div>
     
      <div class="py-2 sm:py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Email Address
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
         {{ $email }}
        </dd>
      </div>
      <div class="py-2 sm:py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Home Address
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
         {{ $address }}
        </dd>
      </div>
      
      
     
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Request/s
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          <div class="flex flex-wrap gap-2">
            @foreach ($documents as $document)
            <div class="flex space-x-1 items-center">
              <i class="fa fa-folder text-indigo-600"></i>
              <span>{{ $document->name }}</span>
            </div>
            @endforeach
           
          </div>
        </dd>
      </div>
      <div class="py-2 sm:py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Purpose
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
         {{ $purpose }}
        </dd>
      </div>
    </dl>
  </div>
</div>
<div class="bg-white rounded-md w-1/3">
  <div class="p-3">
    <div class="p-4">
      <span class="text-indigo-600">Valid ID</span>
        <img src="/storage/{{ $valid_id_url }}" class="h-40 w-28 ring-1 ring-indigo-600" alt="">
    </div>
  </div>
  <form >
    @csrf

    <div class="px-3">
      <label>Response</label>
      <textarea wire:model.debounce.200ms="responseMSG" name="response" id="response" class="ring-1 ring-indigo-600 rounded-md w-full h-40" ></textarea>
      @error('responseMSG')
          <span class="text-red-600">{{ $message }}</span>
      @enderror
    </div>
  </form>
  <div class="mt-12 p-3 flex space-x-2">
    <button wire:click.prevent="approve({{ $request_id }})" type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Approve
    </button>

    <button wire:click.prevent="deny({{ $request_id }})" type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
      Deny
    </button>
  </div>
 
 

</div>



        
      </div>
     
    </div>
  </div>
</div>
 @endif         <!-- This example requires Tailwind CSS v2.0+ -->





    </div>
</div>
