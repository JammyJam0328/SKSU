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
              <input wire:model="middlename" type="text" name="middlename" id="middlename" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
             
            </div>
          </div>

          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="lastname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Last name
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input wire:model="lastname" type="text" name="lastname" id="lastname" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
              @error('lastname')
              <span class="text-red-600">{{$message}}</span>
          @enderror
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
            <label for="contactnumber" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Contact number
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input wire:model="contactnumber" maxlength="11" minlength="10" type="text" name="contactnumber" id="contactnumber" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
              @error('contactnumber')
              <span class="text-red-600">{{$message}}</span>
          @enderror
            </div>
          </div>
  
          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
            <label for="studentnumber" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
              Student number
            </label>
            <div class="mt-1 sm:mt-0 sm:col-span-2">
              <input wire:model="studentnumber" type="text" name="studentnumber" id="studentnumber" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
              @error('studentnumber')
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
              <span class="text-red-600">{{$message}}</span>
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
              <span class="text-red-600">{{$message}}</span>
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
                    <img src="{{$valid_id->temporaryUrl()}}" alt="ID" class="max-h-40 w-40 h-40 ring-2 ring-indigo-600">
                </div>
                @endif
              <input wire:model="valid_id" type="file" name="valid_id" id="valid_id" class="max-w-lg block w-full ">
              @error('valid_id')
              <span class="text-red-600">{{$message}}</span>
          @enderror
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