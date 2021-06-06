<div x-data="{addModal:@entangle('showAddModal'),deleteModal:@entangle('showDeleteModal') }" >
  <div class="flex items-center space-x-2">
    <img src="{{asset('images/documents.svg')}}" class="h-14 w-14" alt="documents">
    <h1 class="text-3xl text-gray-700">Documents</h1>

  </div>
  <hr class="mt-2">  

    <div class="py-4 px-3">
      
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

            <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
              <div x-on:click="addModal=true" class="cursor-pointer hover: border-dashed border-4 border-gray-500 h-full flex flex-col items-center justify-center p-2">

                <img src="{{asset('images/add.svg')}}"  alt="">
                <span>Add new Document</span>
              </div>
            </li>
      
            @forelse ($documents as $document)
            <li class="col-span-1 flex flex-col text-center ring-1 ring-indigo-500 bg-white rounded-lg shadow divide-y divide-gray-200">
              <div class="flex-1 flex flex-col p-1">
                <img class="w-44 h-40 flex-shrink-0 mx-auto  " src="{{asset('images/file.svg')}}" alt="">
                <h3 class="text-gray-900 text-sm font-medium">{{$document->name}}</h3>
                <div class="py-2">
                  <h3 class=" text-gray-900 text-sm font-medium">&#8369; {{$document->amount}}</h3>
                </div>
                @if ($document->availability=="available")
                <dd>
                  <span class="px-2 py-1 text-white text-xs font-medium bg-green-500 rounded-full">{{$document->availability}}</span>
                </dd>
                @else
                <dd>
                  <span class="px-2 py-1 text-green-800 text-xs font-medium bg-red-500 rounded-full">{{$document->availability}}</span>
                </dd>
                @endif
              


              </div>
              <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                  <div class="w-0 flex-1 flex">
                    <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                    <i class="fa fa-pen"></i>
                    </a>
                  </div>
                  <div class="-ml-px w-0 flex-1 flex">
                    <a wire:click="getDelete({{$document->id}})"
                    href="#" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                     
                      <i class="fa fa-trash"></i>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            @empty
              
            @endforelse
          

          </ul>
          <div class="py-5">{{$documents->links()}}</div>
    </div>



    {{-- add --}}
    <div x-show="addModal" id="addModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
          <div class="space-y-3 inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div class="sm:items-start">
         
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                  Add new document
                </h3>
                <div class="mt-2">
                  <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <div class="mt-1 space-y-2">
                      <input wire:model="name" type="text" name="name" id="name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" >
                   @error('name')
                        <span class="text-red-600">{{$message}}</span>                       
                   @enderror
                    </div>
                  </div>
                  <div>
                    <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                    <div class="mt-1 space-y-2">
                      <input wire:model="amount" type="number" name="amount" id="amount" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" >
                   @error('amount')
                        <span class="text-red-600">{{$message}}</span>                       
                   @enderror
                    </div>
                  </div>
                </div>
              <hr class="mt-5">

              </div>
            </div>
            
            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
              <button wire:click="create()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-primary text-base font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                Save
              </button>
              <button x-on:click="addModal=false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                Cancel
              </button>
            </div>
          </div>
        </div>
      </div>

{{-- delete --}}

<div x-show="deleteModal" class="fixed z-10 inset-0 overflow-y-auto" id="deleteModal"  aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
  
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
      <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
        <button type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="sr-only">Close</span>
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="grid ">
       
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
          <img src="{{asset('images/delete.svg')}}" class="h-32 w-full" alt="Delete?">
        </div>
        <div class="py-2 text-center">
          Are you sure you want to delete?
         
          <input type="hidden" wire:model="delete_id" name="delete" id="delete">
        </div>
      </div>
      <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
        <button wire:click="delete()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
          Delete
        </button>
        <button x-on:click="deleteModal=false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>

  
</div>
