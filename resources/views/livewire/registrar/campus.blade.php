<div x-data="{addModal:@entangle('showAddModal')}">
    <div class="flex items-center space-x-2">
      <i class="fa fa-school text-indigo-600 text-4xl"></i>
      <h1 class="text-3xl text-gray-700">Campus</h1>
  
    </div>
    <hr class="mt-2">  
  
      <div class="py-4 px-3">
        
          <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
  
              <li x-on:click="" class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                <div x-on:click="addModal=true" class="cursor-pointer hover: border-dashed border-4 border-gray-500 h-full flex flex-col items-center justify-center p-2">
  
                  <i class="fa fa-plus-circle text-indigo-600 text-4xl"></i>
                  <span>Add new campus</span>
                </div>
              </li>
        
              @forelse ($campuses as $campus)
              <li class="col-span-1 flex flex-col text-center ring-1 ring-green-500 bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="flex-1 flex flex-col p-1">
                  <img class="w-40 h-40 flex-shrink-0 mx-auto  " src="{{asset('images/sksulogo.png')}}" alt="">
                  <h3 class="text-gray-900 text-sm font-medium"></h3>
                  <div class="py-2">
                    <h3 class=" text-gray-900 text-sm font-medium">{{$campus->name}} Campus</h3>
                  </div>
            
                </div>
                <div>
                  <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                      <a href="mailto:janecooper@example.com" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                      <i class="fa fa-pen"></i>
                      </a>
                    </div>
                    <div class="-ml-px w-0 flex-1 flex">
                      <a href="#" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
           
              @empty
                  
              @endforelse
              
            
  
            </ul>
            <div class="py-5"></div>
      </div>

          {{-- add --}}
    <div x-show="addModal"  class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      
     
          <div class="space-y-3 inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
            <div class="sm:items-start">
         
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                  Add new campus
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
  </div>
  