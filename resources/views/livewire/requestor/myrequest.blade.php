<div class="rounded-lg bg-white shadow-lg p-2">
    <nav aria-label="Progress" >
        <ol class="border border-gray-300 rounded-md divide-y divide-gray-300 md:flex md:divide-y-0 shadow-lg ring-1 ring-indigo-600">
          <li  class="relative md:flex-1 md:flex">
           
            <div  class="group flex items-center w-full ">
              <span class="px-6 py-4 flex items-center text-sm font-medium">
                  @if ($information==false)
                    <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center bg-indigo-600 rounded-full group-hover:bg-indigo-800">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span> 
                  @else
                  <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-indigo-600 rounded-full">
                    <span class="text-indigo-600">01</span>
                  </span> 
                  @endif
                <span class="ml-4 text-sm font-medium text-gray-900">Personal Information</span>
              </span>
            </div>
      
            <!-- Arrow separator for lg screens and up -->
            <div class="hidden md:block absolute top-0 right-0 h-full w-5" aria-hidden="true">
              <svg class="h-full w-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round" />
              </svg>
            </div>
          </li>
          <li   class="relative md:flex-1 md:flex">
            <div class="group flex items-center">
              <span class="px-6 py-4 flex items-center text-sm font-medium">

                @if ($information==false)
                    <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-indigo-600 rounded-full">
                    <span class="text-indigo-600">02</span>
                  </span>
                @else
                <span class="flex-shrink-0 w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                    <span class="text-gray-500 group-hover:text-gray-900">02</span>
                  </span>
                @endif

                
                <span class="ml-4 text-sm font-medium text-gray-500 group-hover:text-gray-900">Request form</span>
              </span>
            </div>
          </li>
        </ol>
      </nav>
      <div class="mt-3">
        @if ($information==true)
        <div>
            <form class="space-y-8 divide-y divide-gray-200">
                @csrf
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                  
              
                  <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                    <div>
                      <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Personal Information
                      </h3>
                    </div>
                    <div class="space-y-6 sm:space-y-5">
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="firstname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          First name
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <input wire:model="firstname" type="text" name="firstname" id="firstname" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            @error('firstname')
                                <span class="text-red-600">{{$message}}</span>
                            @enderror
                        </div>
                      </div>
              
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="middlename" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Middle name
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <input wire:model="middlename" type="text" name="middlename" id="middlename" placeholder="Optional" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">  
                        </div>
                      </div>
            
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="lastname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Last name
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <input wire:model="lastname" type="text" name="lastname" id="lastname" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                          @error('lastname') <span class="text-red-600">{{$message}}</span> @enderror
                        </div>
                      </div>
            
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="sex" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Sex
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <select wire:model="sex" id="sex" name="sex" autocomplete="country" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <option selected></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                          @error('sex')
                          <span class="text-red-600">{{$message}}</span>
                      @enderror
                        </div>
                      </div>
              
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Email address
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <input wire:model="email" id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                          @error('email')
                          <span class="text-red-600">{{$message}}</span>
                      @enderror
                        </div>
                      </div>
              
                     
              
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="street_address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Home address
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <input wire:model="address" type="text" name="street_address" id="street_address" autocomplete="street-address" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                          @error('address')
                          <span class="text-red-600">{{$message}}</span>
                      @enderror
                        </div>
                      </div>
              
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="contact_number" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Contact number
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <input wire:model="contact_number" maxlength="11" minlength="10" type="text" name="contactnumber" id="contactnumber" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                          @error('contact_number')
                          <span class="text-red-600">{{$message}}</span>
                      @enderror
                        </div>
                      </div>
              
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="student_number" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Student number
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <input wire:model="student_number" type="text" name="studentnumber" id="studentnumber" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                          @error('student_number')
                          <span class="text-red-600">{{$message}}</span>
                          @enderror
                        </div>
                      </div>
                      
            
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="campus_id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Campus
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <select wire:model="campus_id" id="campus_id" name="campus_id" autocomplete="country" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <option selected></option>
                            @foreach ($campuses as $campus)
                                <option value="{{$campus->id}}">{{$campus->name}}</option>
                            @endforeach
                          </select>
                          @error('campus_id')
                          <span class="text-red-600">You have to select your campus</span>
                      @enderror
                        </div>
                      </div>
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="course_id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Course
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2 w-full">
                          <select wire:model="course_id" id="course_id" name="course_id" autocomplete="country" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <option selected></option>
                            @forelse ($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>  
                            @empty
                                
                            @endforelse
                          </select>
                          @error('course_id')
                          <span class="text-red-600">You have to select your course</span>
                          @enderror
                        </div>
                      </div>
            
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="status" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Status
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                          <select wire:model="status" id="status" name="status" autocomplete="country" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <option selected></option>
                            <option value="Ongoing">Ongoing</option>
                            <option value="Graduated">Graduated</option>
                          </select>
                          @error('status')
                          <span class="text-red-600">{{$message}}</span>
                      @enderror
                        </div>
                      </div>
                      </div>
              
                      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="valid_id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                          Valid ID
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            @if ($valid_id)
                            <div class="py-5">
                                <img src="{{$valid_id->temporaryUrl()}}" alt="ID" class="max-h-40 w-36 h-40 ring-2 ring-indigo-600 rounded-md">
                            </div>
                            @endif
                          <input wire:model="valid_id" type="file" name="valid_id" id="valid_id" class="max-w-lg block w-full ">
                          @error('valid_id')
                          <span class="text-red-600">{{$message}}</span>
                          @enderror
                          <div wire:loading wire:target="valid_id" class="flex items-center space-x-1">
                            <i class="fa fa-spinner fa-spin text-indigo-600"></i>
                            <span>Please wait...</span>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
              
                </div>
              
                <div class="pt-5">
                  <div class="flex justify-end">
                    
                    <button wire:click.prevent="create()" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                    
                  </div>
                </div>
              </form>
            </div>
        @else
        <div class="block">
            <div class="mt-5">
               
                <form class="space-y-8 divide-y divide-gray-200">
                  @csrf
                    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                      <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                        <div>
                          <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Request Form
                          </h3>
                          
                        </div>
                        
                        @forelse ($docsList->where('campus_id',auth()->user()->requestorinformation->campus_id) as $docs)
                          <div>
                              <label class="inline-flex items-center">
                              <input value="{{$docs->id}}" wire:model="selectedDocs" type="checkbox" class="form-checkbox">
                              <span class="ml-2 text-xl">{{$docs->name}}</span>
                              </label>
                          </div>
                        @empty
                        <div class="grid items-center justify-center">
                          <div class="mx-auto">
                            <img src="{{ asset('images/empty.svg') }}" class="h-40 w-40" alt="">
                            <span class="text-gray-700">No available document </span>
                          </div>
                          
                        </div>
                        
                        @endforelse
                        @error('selectedDocs')
                            <span class="text-red-600">Please select document/s</span>
                        @enderror
                        <div class="space-y-6 sm:space-y-5">
                          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="receivername" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                               Complete name of reciever
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                              <input wire:model="receivername" type="text" name="receivername" id="receivername" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                              @error('receivername')
                              <span class="text-red-600">The receiver name is required</span>
                            @enderror
                            </div>
                          </div>
                          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="purpose" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                               Purpose
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <textarea wire:model="purpose" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md" name="purpose" id="purpose"></textarea>
                                @error('purpose')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                            </div>
                          </div>
                          {{--  --}}
                  
                        </div>
                      </div>
                  
                    </div>
                  
                    <div class="pt-5">
                      <div class="flex justify-end">
                        <button wire:click.prevent="requestdocument()" class="space-x-2 items-center ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                         <i class="fa fa-paper-plane"></i> <span>Send</span>  
                        </button>
                      </div>
                    </div>
                  </form>
                   

                {{-- <div id="loading-screen" class=" w-full h-full fixed block top-0 left-0 bg-white opacity-75 z-50">
                      <span class="text-green-500 opacity-75 top-20   my-0 mx-auto block relative w-0 h-0">
                        <i class="fas fa-circle-notch fa-spin fa-5x"></i>
                      </span>
                </div> --}}
                                    
             
                
                    

            </div>
          </div>
        @endif
      </div>
</div>
